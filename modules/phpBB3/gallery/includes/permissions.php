<?php

/**
*
* @package phpBB3
* @version $Id: permissions.php 648 2008-08-14 18:12:21Z nickvergessen $
* @copyright (c) 2007 phpBB Gallery
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	die('Hacking attempt');
}


//see PHPBB3_GALLERY_ROOT_PATH/permissions_overview.php for a short description
function get_album_access_array()
{
	global $cache, $db, $user;
	global $album_access_array, $album_config;

	if ($album_config == array())
	{
		// Get Album Config
		$sql = 'SELECT *
			FROM ' . PHPBB3_GALLERY_CONFIG_TABLE;
		$result = $db->sql_query($sql);

		while( $row = $db->sql_fetchrow($result) )
		{
			$album_config_name = $row['config_name'];
			$album_config_value = $row['config_value'];
			$album_config[$album_config_name] = $album_config_value;
		}
	}
	$albums = $cache->obtain_album_list();
	$permissions = array('i_view', 'i_upload', 'i_edit', 'i_delete', 'i_approve', 'i_lock', 'i_report', 'i_count', 'a_moderate', 'album_count');
	$permissions = array_merge($permissions, array('i_rate'));
	$permissions = array_merge($permissions, array('c_post', 'c_edit', 'c_delete'));

	if (!$album_access_array)
	{
		$user_groups_ary = $pull_data = '';

		//set all parts of the permissions to 0 / "no"
		foreach ($permissions as $permission)
		{
			$album_access_array[-1][$permission] = 0;
			$album_access_array[-2][$permission] = 0;
			$album_access_array[-3][$permission] = 0;
			//generate for the sql
			$pull_data .= " MAX($permission) as $permission,";
		}
		foreach ($albums as $album)
		{
			foreach ($permissions as $permission)
			{
				$album_access_array[$album['album_id']][$permission] = 0;
			}
		}
		//testing user permissions?
		$user_id = ($user->data['user_perm_from'] == 0) ? $user->data['user_id'] : $user->data['user_perm_from'];

		$sql = 'SELECT g.group_id
			FROM ' . PHPBB3_GROUPS_TABLE . ' as g
			LEFT JOIN ' . PHPBB3_USER_GROUP_TABLE . " as ug
				ON ug.group_id = g.group_id
			WHERE ug.user_id = $user_id
				AND ug.user_pending = 0";
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			$user_groups_ary .= (($user_groups_ary) ? ', ' : '') . $row['group_id'];
		}
		$db->sql_freeresult($result);

		$sql = "SELECT p.perm_album_id, $pull_data p.perm_system
			FROM " . PHPBB3_GALLERY_PERMISSIONS_TABLE . " as p
			LEFT JOIN " .  PHPBB3_GALLERY_ROLES_TABLE .  " as pr
				ON p.perm_role_id = pr.role_id
			WHERE ( p.perm_user_id = $user_id
				OR p.perm_group_id IN ($user_groups_ary))
			GROUP BY p.perm_system DESC, p.perm_album_id ASC";
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			switch ($row['perm_system'])
			{
				case 3:
					foreach ($permissions as $permission)
					{
						$album_access_array[-3][$permission] = $row[$permission];
					}
				break;

				case 2:
					foreach ($permissions as $permission)
					{
						$album_access_array[-2][$permission] = $row[$permission];
					}
				break;

				case 1:
					foreach ($permissions as $permission)
					{
						// if the permission is true ($row[$permission] == 1) and global_permission is never ($album_access_array[-3][$permission] == 2) we set it to "never"
						$album_access_array[$row['perm_album_id']][$permission] = (($row[$permission]) ? (($row[$permission] == 1 && ($album_access_array[-3][$permission] == 2)) ? $album_access_array[-3][$permission] : $row[$permission]) : 0);
					}
				break;

				case 0:
					foreach ($permissions as $permission)
					{
						$album_access_array[$row['perm_album_id']][$permission] = $row[$permission];
					}
				break;

				default:
					trigger_error('PERMISSION_SYSTEM_FAILURE_01');
				break;
			}
		}
		$db->sql_freeresult($result);
	}

	return $album_access_array;
}

/**
* other call for the permissions
*/
function gallery_acl_check($mode, $album_id)
{
	global $user, $album_access_array, $cache;

	$albums = $cache->obtain_album_list();
	if ($album_id == -2)
	{
		if ($mode == 'album_count')
		{
			$access = $album_access_array[-2][$mode];
		}
		else
		{
			$access = ($album_access_array[-2][$mode] == 1) ? true : false;
		}
		return $access;
	}
	if ($album_id == -3)
	{
		if ($mode == 'album_count')
		{
			$access = $album_access_array[-3][$mode];
		}
		else
		{
			$access = ($album_access_array[-3][$mode] == 1) ? true : false;
		}
		return $access;
	}
	$album_data = $albums[$album_id];

	if ($mode == 'i_count')
	{
		if ($album_data['album_user_id'] == $user->data['user_id'])
		{
			$access = $album_access_array[-2][$mode];
		}
		else if ($album_data['album_user_id'] > 0)
		{
			$access = $album_access_array[-3][$mode];
		}
		else
		{
			$access = $album_access_array[$album_id][$mode];
		}
	}
	else
	{
		if ($album_data['album_user_id'] == $user->data['user_id'])
		{
			$access = ($album_access_array[-2][$mode] == 1) ? true : false;
		}
		else if ($album_data['album_user_id'] > 0)
		{
			$access = ($album_access_array[-3][$mode] == 1) ? true : false;
		}
		else
		{
			$access = ($album_access_array[$album_id][$mode] == 1) ? true : false;
		}
	}

	return $access;
}

/**
* get album lists by permissions
*
* @param	string	$permission		One of the permissions, Exp: i_view
* @param	string	$mode			'array' || 'string'
*/
function gallery_acl_album_ids($permission, $mode = 'array')
{
	global $user, $album_access_array, $cache;

	$album_list = '';
	$album_array = array();
	$albums = $cache->obtain_album_list();
	foreach ($albums as $album)
	{
		if ($album['album_user_id'] == $user->data['user_id'])
		{
			$acl_case = -2;
		}
		else if ($album['album_user_id'] > 0)
		{
			$acl_case = -3;
		}
		else
		{
			$acl_case = $album['album_id'];
		}
		if ($album_access_array[$acl_case][$permission] == 1)
		{
			$album_list .= (($album_list) ? ', ' : '') . $album['album_id'];
			$album_array[] = $album['album_id'];
		}
	}

	return ($mode == 'array') ? $album_array : $album_list;
}

/**
* User authorisation levels output
*
* @param	string	$mode			Can be forum or topic. Not in use at the moment.
* @param	int		$forum_id		The current forum the user is in.
* @param	int		$forum_status	The forums status bit.
*
* copied by phpbb-function gen_forum_auth_level
*/
function gen_album_auth_level($mode, $album_id, $album_status = 1)
{
	global $template, $user, $album_config, $album_access_array;

	$locked = ($album_status == PHPBB3_ITEM_LOCKED && ($album_access_array[$album_id]['a_moderate'] != 1)) ? true : false;
	$permissions = array('i_approve', 'i_lock', 'i_report', 'i_count', 'a_moderate', 'album_count');
	$permissions = array_merge($permissions, array('i_rate'));
	$permissions = array_merge($permissions, array('c_post', 'c_edit', 'c_delete'));

	$rules = array(
		(gallery_acl_check('i_view', $album_id) && !$locked) ? $user->lang['ALBUM_VIEW_CAN'] : $user->lang['ALBUM_VIEW_CANNOT'],
		(gallery_acl_check('i_upload', $album_id) && !$locked) ? $user->lang['ALBUM_UPLOAD_CAN'] : $user->lang['ALBUM_UPLOAD_CANNOT'],
		(gallery_acl_check('i_edit', $album_id) && !$locked) ? $user->lang['ALBUM_EDIT_CAN'] : $user->lang['ALBUM_EDIT_CANNOT'],
		(gallery_acl_check('i_delete', $album_id) && !$locked) ? $user->lang['ALBUM_DELETE_CAN'] : $user->lang['ALBUM_DELETE_CANNOT'],
	);
	if ($album_config['comment'])
	{
		$rules[] = (gallery_acl_check('c_post', $album_id) && !$locked) ? $user->lang['ALBUM_COMMENT_CAN'] : $user->lang['ALBUM_COMMENT_CANNOT'];
	}
	if ($album_config['rate'])
	{
		$rules[] = (gallery_acl_check('i_rate', $album_id) && !$locked) ? $user->lang['ALBUM_RATE_CAN'] : $user->lang['ALBUM_RATE_CANNOT'];
	}

	foreach ($rules as $rule)
	{
		$template->assign_block_vars('rules', array('RULE' => $rule));
	}

	return;
}
?>