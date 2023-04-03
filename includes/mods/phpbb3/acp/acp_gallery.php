<?php

/**
*
* @package phpBB3
* @version $Id: acp_gallery.php 663 2008-08-16 15:27:46Z nickvergessen $
* @copyright (c) 2007 phpBB Gallery
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/* Applied rules:
 * AddDefaultValueForUndefinedVariableRector (https://github.com/vimeo/psalm/blob/29b70442b11e3e66113935a2ee22e165a70c74a4/docs/fixing_code.md#possiblyundefinedvariable)
 * RandomFunctionRector
 * TernaryToNullCoalescingRector
 * CountOnNullRector (https://3v4l.org/Bndc9)
 * Utf8DecodeEncodeToMbConvertEncodingRector (https://wiki.php.net/rfc/remove_utf8_decode_and_utf8_encode)
 */
 
class acp_gallery
{
	var $u_action;
	function main($id, $mode)
	{
		global $user, $phpEx, $template;
		$gallery_root_path = PHPBB3_GALLERY_ROOT_PATH;
		include(PHPBB3_ROOT_DIR . PHPBB3_GALLERY_ROOT_PATH . 'includes/constants.' . $phpEx);
		include(PHPBB3_ROOT_DIR . PHPBB3_GALLERY_ROOT_PATH . 'includes/acp_functions.' . $phpEx);

		$user->add_lang('mods/gallery_acp');
		$user->add_lang('mods/gallery');
		$this->tpl_name = 'gallery_main';
		add_form_key('acp_gallery');

		switch ($mode)
		{
			case 'manage_albums':
				$action = request_var('action', '');
				$this->tpl_name = 'gallery_albums';
				switch ($action)
				{
					case 'create':
						$title = 'GALLERY_ALBUMS_TITLE';
						$this->page_title = $user->lang[$title];

						$this->create_album();
					break;

					case 'edit':
						$title = 'ACP_EDIT_ALBUM_TITLE';
						$this->page_title = $user->lang[$title];

						$this->edit_album();
					break;

					case 'delete':
						$title = 'DELETE_ALBUM';
						$this->page_title = $user->lang[$title];

						$this->delete_album();
					break;

					case 'move':
						$this->move_album();
					break;

					default:
						$title = 'ACP_GALLERY_MANAGE_ALBUMS';
						$this->page_title = $user->lang[$title];

						$this->manage_albums();
					break;
				}
			break;
			
			case 'configure_gallery':
				$title = 'GALLERY_CONFIG';
				$this->tpl_name = 'gallery_config';
				$this->page_title = $user->lang[$title];

				$this->configure_gallery();
			break;

			case 'album_permissions':
				$title = 'ALBUM_AUTH_TITLE';
				$this->tpl_name = 'gallery_permissions';
				$this->page_title = $user->lang[$title];

				$this->permissions();
			break;

			case 'import_images':
				$title = 'ACP_IMPORT_ALBUMS';
				$this->page_title = $user->lang[$title];

				$this->import();
			break;

			case 'cleanup':
				$title = 'ACP_GALLERY_CLEANUP';
				$this->page_title = $user->lang[$title];

				$this->cleanup();
			break;

			case 'overview':
			default:
				$title = 'ACP_GALLERY_OVERVIEW';
				$this->page_title = $user->lang[$title];

				$this->overview();
			break;
		}
	}

	function import()
	{
		$album_config = [];
  $time = null;
  global $gallery_root_path, $phpEx;
		global $db, $template, $user, $config;

		$images = request_var('images', array(''), true);
		$images_string = request_var('images_string', '', true);
		$images = ($images_string) ? explode('&quot;', mb_convert_encoding($images_string, 'ISO-8859-1')) : $images;
		$submit = (isset($_POST['submit'])) ? true : ((empty($images)) ? false : true);

		$directory = PHPBB3_ROOT_DIR . PHPBB3_GALLERY_ROOT_PATH . 'import/';

		if(!$submit)
		{
			$sql = 'SELECT *
				FROM ' . PHPBB3_GALLERY_CONFIG_TABLE;
			$result = $db->sql_query($sql);
			while( $row = $db->sql_fetchrow($result) )
			{
				$album_config_name = $row['config_name'];
				$album_config_value = $row['config_value'];
				$album_config[$album_config_name] = $album_config_value;
			}
			$db->sql_freeresult($result);

			$sql = 'SELECT username, user_id
				FROM ' . PHPBB3_USERS_TABLE . "
				ORDER BY user_id ASC";
			$result = $db->sql_query($sql);
			while( $row = $db->sql_fetchrow($result) )
			{
				$template->assign_block_vars('userrow', array(
					'USER_ID'				=> $row['user_id'],
					'USERNAME'				=> $row['username'],
					'SELECTED'				=> ($row['user_id'] == $user->data['user_id']) ? true : false,
				));
			}
			$db->sql_freeresult($result);

			$handle = opendir($directory);

			while ($file = readdir($handle))
			{
				if (!is_dir($directory . "$file") && (
				((substr(strtolower($file), '-4') == '.png') && $album_config['png_allowed']) ||
				((substr(strtolower($file), '-4') == '.gif') && $album_config['gif_allowed']) ||
				((substr(strtolower($file), '-4') == '.jpg') && $album_config['jpg_allowed'])
				))
				{
					$template->assign_block_vars('imagerow', array(
						'FILE_NAME'				=> mb_convert_encoding($file, 'UTF-8', 'ISO-8859-1'),
					));
				}
			}
			closedir($handle);
			$template->assign_vars(array(
				'S_IMPORT_IMAGES'				=> true,
				'ACP_GALLERY_TITLE'				=> $user->lang['ACP_IMPORT_ALBUMS'],
				'ACP_GALLERY_TITLE_EXPLAIN'		=> $user->lang['ACP_IMPORT_ALBUMS_EXPLAIN'],
				'L_IMPORT_DIR_EMPTY'			=> sprintf($user->lang['IMPORT_DIR_EMPTY'], PHPBB3_GALLERY_ROOT_PATH),
				'S_ALBUM_IMPORT_ACTION'			=> $this->u_action,
				'S_SELECT_IMPORT' 				=> make_album_select(0, false, false, false, false),
			));
		}
		else
		{
			if (!check_form_key('acp_gallery'))
			{
				//debug: trigger_error('FORM_INVALID');
			}
			$sql = 'SELECT *
				FROM ' . PHPBB3_GALLERY_CONFIG_TABLE;
			$result = $db->sql_query($sql);
			while( $row = $db->sql_fetchrow($result) )
			{
				$album_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);

			$done_images_string = request_var('done_images_string', '', true);
			$done_images = explode('&quot;', mb_convert_encoding($done_images_string, 'ISO-8859-1'));
			$album_id = request_var('album_id', 0);
			if(!$album_id)
			{
				trigger_error('IMPORT_MISSING_ALBUM');
			}
			$user_id = request_var('user_id', 0);
			$sql = 'SELECT username, user_colour
				FROM ' . PHPBB3_USERS_TABLE . "
				WHERE user_id = $user_id";
			$result = $db->sql_query($sql);
			while( $row = $db->sql_fetchrow($result) )
			{
				$username = $row['username'];
				$user_colour = $row['user_colour'];
			}
			$db->sql_freeresult($result);

			$results = array();
			$images_per_loop = 0;
			//this time we do:
			foreach ($images as $image)
			{
				if (($images_per_loop < 10) && !in_array($image, $done_images))
				{
					$results[] = $image;
					$images_per_loop++;
				}
			}

			$image_count = count($results);
			$counter = request_var('counter', 0);

			foreach ($results as $image)
			{
				$image_path = $directory . mb_convert_encoding($image, 'ISO-8859-1');

				$filetype = getimagesize($image_path);
				$image_width = $filetype[0];
				$image_height = $filetype[1];

				switch ($filetype['mime'])
				{
					case 'image/jpeg':
					case 'image/jpg':
					case 'image/pjpeg':
						$image_filetype = '.jpg';
						break;

					case 'image/png':
					case 'image/x-png':
						$image_filetype = '.png';
						break;

					case 'image/gif':
						$image_filetype = '.gif';
						break;

					default:
						break;
				}
				// Generate filename
				mt_srand((double)microtime()*1000000);// for older than version 4.2.0 of PHP
				$image_filename = md5(uniqid(random_int(0, mt_getrandmax()))) . $image_filetype;


				copy($image_path, PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $image_filename);
				chmod(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $image_filename, 0777);

				/*//we need to unsupport non-gd-installations!
				if (!$album_config['gd_version'])
				{
					copy($thumbtmp, PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $image_thumbnail);
					chmod(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $image_thumbnail, 0777);
				}*/


				if (($album_config['thumbnail_cache']) && ($album_config['gd_version'] > 0))
				{
					$gd_errored = FALSE;
					switch ($image_filetype)
					{
						case '.jpg':
							$read_function = 'imagecreatefromjpeg';
							break;

						case '.png':
							$read_function = 'imagecreatefrompng';
							break;

						case '.gif':
							$read_function = 'imagecreatefromgif';
							break;
					}
					$src = $read_function(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH  . $image_filename);

					if (!$src)
					{
						$gd_errored = TRUE;
						$image_thumbnail = '';
					}
					else if (($image_width > $album_config['thumbnail_size']) || ($image_height > $album_config['thumbnail_size']))
					{
						// Resize it
						if ($image_width > $image_height)
						{
							$thumbnail_width 	= $album_config['thumbnail_size'];
							$thumbnail_height 	= $album_config['thumbnail_size'] * ($image_height/$image_width);
						}
						else
						{
							$thumbnail_height 	= $album_config['thumbnail_size'];
							$thumbnail_width 	= $album_config['thumbnail_size'] * ($image_width/$image_height);
						}

						if ($album_config['thumbnail_info_line'])
						{// Create image details credits to Dr.Death
							$thumbnail = ($album_config['gd_version'] == 1) ? imagecreate($thumbnail_width, $thumbnail_height + 16) : imagecreatetruecolor($thumbnail_width, $thumbnail_height + 16); 
						}
						else
						{
							$thumbnail = ($album_config['gd_version'] == 1) ? imagecreate($thumbnail_width, $thumbnail_height) : imagecreatetruecolor($thumbnail_width, $thumbnail_height);
						}
						$resize_function = ($album_config['gd_version'] == 1) ? 'imagecopyresized' : 'imagecopyresampled';
						$resize_function($thumbnail, $src, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $image_width, $image_height);

						if ($album_config['thumbnail_info_line'])
						{// Create image details credits to Dr.Death
							$dimension_font = 1;
							$dimension_filesize = filesize(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $image_filename);
							$dimension_string = $image_width . "x" . $image_height . "(" . intval($dimension_filesize/1024) . "KiB)";
							$dimension_colour = ImageColorAllocate($thumbnail,255,255,255);
							$dimension_height = imagefontheight($dimension_font);
							$dimension_width = imagefontwidth($dimension_font) * strlen($dimension_string);
							$dimension_x = ($thumbnail_width - $dimension_width) / 2;
							$dimension_y = $thumbnail_height + ((16 - $dimension_height) / 2);
							imagestring($thumbnail, 1, $dimension_x, $dimension_y, $dimension_string, $dimension_colour);
						}
					}
					else
					{
						$thumbnail = $src;
					}

					if (!$gd_errored)
					{
						$image_thumbnail = $image_filename;

						// Write to disk
						switch ($image_filetype)
						{
							case '.jpg':
								imagejpeg($thumbnail, PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $image_thumbnail, $album_config['thumbnail_quality']);
							break;

							case '.png':
								imagepng($thumbnail, PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $image_thumbnail);
							break;

							case '.gif':
								imagegif($thumbnail, PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $image_thumbnail);
							break;
						}
						chmod(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $image_thumbnail, 0777);
					} // End IF $gd_errored
				} // End Thumbnail Cache
				else if ($album_config['gd_version'] > 0)
				{
					$image_thumbnail = '';
				}

				// The source image is imported and thumbnailed, delete it
				unlink($image_path);

				$no_time = time();
				$time = request_var('time', 0);
				$time = ($time) ? $time : $no_time;
				
				$sql_ary = array(
					'image_filename' 		=> $image_filename,
					'image_thumbnail'		=> $image_thumbnail,
					'image_name'			=> (request_var('filename', '') == 'filename') ? $image : str_replace('{NUM}', $counter + 1, request_var('image_name', '', true)),
					'image_desc'			=> '',
					'image_desc_uid'		=> '',
					'image_desc_bitfield'	=> '',
					'image_user_id'			=> $user_id,
					'image_username'		=> $username,
					'image_user_colour'		=> $user_colour,
					'image_user_ip'			=> $user->ip,
					'image_time'			=> $time + $counter,
					'image_album_id'		=> $album_id,
					'image_status'			=> 1,
				);
				if ($sql_ary['image_name'] == '')
				{
					$sql_ary['image_name'] = $image;
				}

				$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_IMAGES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
				$counter++;
				$done_images[] = $image;
				$done_images_string .= (($done_images_string) ? '%22' : '') . urlencode($image);
			}
			$left = (is_countable($images) ? count($images) : 0) - count($done_images);
			$sql = 'UPDATE ' . PHPBB3_GALLERY_USERS_TABLE . " SET user_images = user_images + $counter WHERE user_id = $user_id";
			$db->sql_query($sql);
			set_config('num_images', $config['num_images'] + $counter, true);
			$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . " 
				SET album_images_real = album_images_real + $counter
				WHERE album_id = $album_id";
			$db->sql_query($sql);
			update_lastimage_info($album_id);
			$images_string		= urlencode(implode('"', $images));
			$done_images_string		= substr(urlencode(implode('"', $done_images)), 3, strlen($done_images_string));
			$images_to_do = str_replace('%22' . $done_images_string, "", '%22' . $images_string);
			if ('%22' . $images_string != $images_to_do)
			{
				$images_to_do = str_replace($done_images_string, "", $images_string);
				$images_to_do = substr($images_to_do, 3, strlen($images_to_do));
			}
			if ($images_to_do)
			{
				$forward_url = $this->u_action . "&amp;album_id=$album_id&amp;time=$time&amp;counter=$counter&amp;user_id=$user_id&amp;images_string=$images_to_do";
				meta_refresh(1, $forward_url);
				trigger_error(sprintf($user->lang['IMPORT_DEBUG_MES'], $counter, $left + 1));
				
			}
			else
			{
				trigger_error(sprintf($user->lang['IMPORT_FINISHED'], $counter) . adm_back_link($this->u_action));
			}
		}
	}

	function overview()
	{
		$album_config = [];
  global $template, $user, $db, $config, $auth;

		$action = request_var('action', '');
		$id = request_var('i', '');
		$mode = 'overview';
			if (!confirm_box(true))
			{
				$confirm = false;
				switch ($action)
				{
					case 'images':
						$confirm = true;
						$confirm_lang = 'RESYNC_IMAGECOUNTS_CONFIRM';
					break;
					case 'personals':
						$confirm = true;
						$confirm_lang = 'PHPBB3_CONFIRM_OPERATION';
					break;
					case 'last_images':
						$confirm = true;
						$confirm_lang = 'PHPBB3_CONFIRM_OPERATION';
					break;
					case 'purge_cache':
						$confirm = true;
						$confirm_lang = 'GALLERY_CLEAR_CACHE_CONFIRM';
					break;
				}

				if ($confirm)
				{
					//echo $id . $mode . $action;
					confirm_box(false, $user->lang[$confirm_lang], build_hidden_fields(array(
						'i'			=> $id,
						'mode'		=> $mode,
						'action'	=> $action,
					)));
				}
			}
			else
			{
				switch ($action)
				{

					case 'images':
						if (!$auth->acl_get('a_board'))
						{
							trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
						}

						$total_images = 0;
						$sql = 'SELECT COUNT(gi.image_id) AS num_images, u.user_id
							FROM ' . PHPBB3_USERS_TABLE . ' u
							LEFT JOIN  ' . PHPBB3_GALLERY_IMAGES_TABLE . ' gi ON (u.user_id = gi.image_user_id AND gi.image_status = 1)
							GROUP BY u.user_id';
						$result = $db->sql_query($sql);

						while ($row = $db->sql_fetchrow($result))
						{
							$total_images += $row['num_images'];
							$db->sql_query('UPDATE ' . PHPBB3_GALLERY_USERS_TABLE . " SET user_images = {$row['num_images']} WHERE user_id = {$row['user_id']}");
						}
						$db->sql_freeresult($result);
						set_config('num_images', $total_images, true);

					break;

					case 'personals':
						if (!$auth->acl_get('a_board'))
						{
							trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
						}

						$sql = 'SELECT album_id, album_user_id
							FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
							WHERE album_user_id <> 0
								AND parent_id = 0';
						$result = $db->sql_query($sql);

						while ($row = $db->sql_fetchrow($result))
						{
							$db->sql_query('UPDATE ' . PHPBB3_GALLERY_USERS_TABLE . " SET personal_album_id = {$row['album_id']} WHERE user_id = {$row['album_user_id']}");
						}
						$db->sql_freeresult($result);
					break;

					case 'last_images':
						$sql = 'SELECT album_id
							FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE;
						$result = $db->sql_query($sql);
						while ($row = $db->sql_fetchrow($result))
						{
							// 5 sql's per album, but you don't run this daily ;)
							update_lastimage_info($row['album_id']);
						}
						$db->sql_freeresult($result);
					break;

					case 'purge_cache':
						if ((int) $user->data['user_type'] !== PHPBB3_USER_FOUNDER)
						{
							trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
						}

						$cache_dir = opendir(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH);

						while( $cache_file = readdir($cache_dir) )
						{
							if( preg_match('/(\.gif$|\.png$|\.jpg|\.jpeg)$/is', $cache_file) )
							{
								unlink(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $cache_file);
							}
						}

						closedir($cache_dir);
					break;
				}
			}

		$sql = 'SELECT *
			FROM ' . PHPBB3_GALLERY_CONFIG_TABLE;
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			$album_config_name = $row['config_name'];
			$album_config_value = $row['config_value'];
			$album_config[$album_config_name] = $album_config_value;
		}
		$db->sql_freeresult($result);

		$boarddays = (time() - $config['board_startdate']) / 86400;
		$images_per_day = sprintf('%.2f', $config['num_images'] / $boarddays);

		$num_albums = 0;
		$sql = 'SELECT album_user_id
			FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE;
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			if ($row['album_user_id'] == 0)
			{
				$num_albums++;
			}
		}
		$db->sql_freeresult($result);

		//this is much load, maybe we can store this into some variables?
		//but refresh it, after every upload, or how you wanna do this?
		$cache_dir_size = $gupload_dir_size = $user->lang['SORRY_NO_STATISTIC'];
		/*
		$cache_dir_size = $gupload_dir_size = 0;
		if ($gupload_dir = opendir(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH))
		{
			while (($file = readdir($gupload_dir)) !== false)
			{
				if ($file[0] != '.' && $file != 'CVS' && strpos($file, 'index.') === false)
				{
					$gupload_dir_size += filesize(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $file);
				}
			}
			closedir($gupload_dir);

			$gupload_dir_size = get_formatted_filesize($gupload_dir_size);
		}
		else
		{
			$gupload_dir_size = $user->lang['NOT_AVAILABLE'];
		}
		if ($cache_dir = opendir(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH))
		{
			while (($file = readdir($cache_dir)) !== false)
			{
				if ($file[0] != '.' && $file != 'CVS' && strpos($file, 'index.') === false)
				{
					$cache_dir_size += filesize(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $file);
				}
			}
			closedir($cache_dir);

			$cache_dir_size = get_formatted_filesize($cache_dir_size);
		}
		else
		{
			$cache_dir_size = $user->lang['NOT_AVAILABLE'];
		}
		//*/

		$template->assign_vars(array(
			'S_GALLERY_OVERVIEW'			=> true,
			'ACP_GALLERY_TITLE'				=> $user->lang['ACP_GALLERY_OVERVIEW'],
			'ACP_GALLERY_TITLE_EXPLAIN'		=> $user->lang['ACP_GALLERY_OVERVIEW_EXPLAIN'],

			'TOTAL_IMAGES'			=> $config['num_images'],
			'IMAGES_PER_DAY'		=> $images_per_day,
			'TOTAL_ALBUMS'			=> $num_albums,
			'TOTAL_PERSONALS'		=> $album_config['personal_counter'],
			'GUPLOAD_DIR_SIZE'		=> $gupload_dir_size,
			'CACHE_DIR_SIZE'		=> $cache_dir_size,
			'GALLERY_VERSION'		=> $album_config['album_version'],

			'S_FOUNDER'				=> ($user->data['user_type'] == PHPBB3_USER_FOUNDER) ? true : false,
		));
	}

	function configure_gallery()
	{
		$default_config = [];
  $new = [];
  global $db, $template, $user, $cache, $config;

		$sql = 'SELECT * FROM ' . PHPBB3_GALLERY_CONFIG_TABLE;
		$result = $db->sql_query($sql);

		while( $row = $db->sql_fetchrow($result) )
		{
			$config_name = $row['config_name'];
			$config_value = $row['config_value'];
			$default_config[$config_name] = isset($_POST['submit']) ? str_replace("'", "\'", $config_value) : $config_value;
			$new[$config_name] = request_var($config_name, $default_config[$config_name]);

			if (isset($_POST['submit']))
			{
				// Is it salty ?
				if (!check_form_key('acp_gallery'))
				{
					trigger_error('FORM_INVALID');
				}

				$sql_ary = array(
					'config_value'		=> $new[$config_name],
				);
				$sql = 'UPDATE ' . PHPBB3_GALLERY_CONFIG_TABLE . '
					SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
					WHERE config_name = '$config_name'" ;
				$db->sql_query($sql);
			}
		}

		if (isset($_POST['submit']))
		{
			set_config('gallery_total_images', request_var('gallery_total_images', 0));
			set_config('gallery_user_images_profil', request_var('gallery_user_images_profil', 0));
			set_config('gallery_personal_album_profil', request_var('gallery_personal_album_profil', 0));
			$cache->destroy('sql', PHPBB3_CONFIG_TABLE);
			$cache->destroy('sql', PHPBB3_GALLERY_CONFIG_TABLE);
			trigger_error($user->lang['GALLERY_CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'S_CONFIGURE_GALLERY'				=> true,
			'S_ALBUM_CONFIG_ACTION' 			=> $this->u_action,

			'ACP_GALLERY_TITLE'					=> $user->lang['GALLERY_CONFIG'],
			'ACP_GALLERY_TITLE_EXPLAIN'			=> $user->lang['GALLERY_CONFIG_EXPLAIN'],

			//Album Settings
			'ROWS_PER_PAGE'					=> $new['rows_per_page'],
			'COLS_PER_PAGE'					=> $new['cols_per_page'],
			'SORT_METHOD'					=> $new['sort_method'],
			'SORT_ORDER'					=> $new['sort_order'],
			'MAX_IMAGES_PER_ALBUM'			=> $new['max_pics'],
			'FAKE_THUMB_SIZE'				=> $new['fake_thumb_size'],
			'DISP_FAKE_THUMB'				=> $new['disp_fake_thumb'],

			//Image Settings
			'UPLOAD_IMAGES'					=> $new['upload_images'],
			'MAX_FILE_SIZE'					=> $new['max_file_size'],
			'MAX_WIDTH'						=> $new['max_width'],
			'MAX_HEIGHT'					=> $new['max_height'],
			'RSZ_WIDTH'						=> $new['preview_rsz_width'],
			'RSZ_HEIGHT'					=> $new['preview_rsz_height'],
			'S_JPG_ALLOWED'					=> $new['jpg_allowed'],
			'S_PNG_ALLOWED'					=> $new['png_allowed'],
			'S_GIF_ALLOWED'					=> $new['gif_allowed'],
			'IMAGE_DESC_MAX_LENGTH'			=> $new['desc_length'],
			'S_DISP_EXIF_DATA'				=> $new['exif_data'],

			//Watermark options
			'S_WATERMARK'					=> $new['watermark_images'],
			'WATERMARK_SOURCE'				=> $new['watermark_source'],
			'WATERMARK_HEIGHT'				=> $new['watermark_height'],
			'WATERMARK_WIDTH'				=> $new['watermark_width'],
			'BOARD_LINK'					=> generate_board_url(),

			//Thumbnail Settings
			'S_THUMBNAIL_CACHE'				=> $new['thumbnail_cache'],
			'S_GD'							=> $new['gd_version'],
			'THUMBNAIL_QUALITY'				=> $new['thumbnail_quality'],
			'THUMBNAIL_SIZE'				=> $new['thumbnail_size'],
			'S_INFO_LINE'					=> $new['thumbnail_info_line'],

			//Gallery Configuration
			'S_COMMENT'						=> $new['comment'],
			'S_RATE'						=> $new['rate'],
			'RATE_SCALE' 					=> $new['rate_scale'],
			'S_HOTLINK_PREVENT'				=> $new['hotlink_prevent'],
			'HOTLINK_ALLOWED'				=> $new['hotlink_allowed'],
			'S_DISP_TOTAL_IMAGES'			=> $config['gallery_total_images'],
			'S_DISP_USER_IMAGES_PROFIL'		=> $config['gallery_user_images_profil'],
			'S_DISP_PERSONAL_ALBUM_PROFIL'	=> $config['gallery_personal_album_profil'],
		));
	}

	function manage_albums()
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpEx;

		$template->assign_vars(array(
			'S_MANAGE_ALBUMS'				=> true,
			'S_ALBUM_ACTION'				=> $this->u_action . '&amp;action=create',

			'ACP_GALLERY_TITLE'			=> $user->lang['ACP_MANAGE_ALBUMS'],
			'ACP_GALLERY_TITLE_EXPLAIN'	=> $user->lang['ACP_MANAGE_ALBUMS_EXPLAIN'],
		));
		$parent_id = request_var('parent_id', 0);
		if (!$parent_id)
		{
			$navigation = $user->lang['GALLERY_INDEX'];
		}
		else
		{
			$navigation = '<a href="' . $this->u_action . '">' . $user->lang['GALLERY_INDEX'] . '</a>';

			$albums_nav = get_album_branch($parent_id, 'parents', 'descending');
			foreach ($albums_nav as $row)
			{
				if ($row['album_id'] == $parent_id)
				{
					$navigation .= ' -&gt; ' . $row['album_name'];
				}
				else
				{
					$navigation .= ' -&gt; <a href="' . $this->u_action . '&amp;parent_id=' . $row['album_id'] . '">' . $row['album_name'] . '</a>';
				}
			}
		}
		$album = array();
		$sql = 'SELECT *
			FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
			WHERE parent_id = ' . $parent_id . '
				AND album_user_id = 0
			ORDER BY left_id ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$album[] = $row;
		}

		for( $i = 0; $i < count($album); $i++ )
		{
			$folder_image = ($album[$i]['left_id'] + 1 != $album[$i]['right_id']) ? '<img src="images/icon_subfolder.gif" alt="' . $user->lang['SUBFORUM'] . '" />' : '<img src="images/icon_folder.gif" alt="' . $user->lang['FOLDER'] . '" />';
			$template->assign_block_vars('catrow', array(
				'FOLDER_IMAGE'			=> $folder_image,
				'U_ALBUM'				=> $this->u_action . '&amp;parent_id=' . $album[$i]['album_id'],
				'ALBUM_NAME'			=> $album[$i]['album_name'],
				'ALBUM_IMAGE'			=> $album[$i]['album_image'],
				'ALBUM_DESCRIPTION'		=> generate_text_for_display($album[$i]['album_desc'], $album[$i]['album_desc_uid'], $album[$i]['album_desc_bitfield'], $album[$i]['album_desc_options']),
				'U_MOVE_UP'				=> $this->u_action . '&amp;action=move&amp;move=move_up&amp;album_id=' . $album[$i]['album_id'],
				'U_MOVE_DOWN'			=> $this->u_action . '&amp;action=move&amp;move=move_down&amp;album_id=' . $album[$i]['album_id'],
				'U_EDIT'				=> $this->u_action . '&amp;action=edit&amp;album_id=' . $album[$i]['album_id'],
				'U_DELETE'				=> $this->u_action . '&amp;action=delete&amp;album_id=' . $album[$i]['album_id'],
			));
		}
		$template->assign_vars(array(
			'NAVIGATION'		=> $navigation,
			'S_ALBUM'			=> $parent_id,
			'U_EDIT'			=> $this->u_action . '&amp;action=edit&amp;album_id=' . $parent_id,
			'U_DELETE'			=> $this->u_action . '&amp;action=delete&amp;album_id=' . $parent_id,
		));
	}

	function create_album()
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpEx;
		
		$phpbb_admin_path = PHPBB3_ADMIN_DIR;
		
		include_once(PHPBB3_INCLUDE_DIR . 'message_parser.' . $phpEx);
		$submit = (isset($_POST['submit'])) ? true : false;
		if(!$submit)
		{
			$parents_list = make_album_select(0, false, false, false, false);
			$copy_list = make_album_select(0);
			$template->assign_vars(array(
				'S_CREATE_ALBUM'				=> true,
				'ACP_GALLERY_TITLE'				=> $user->lang['GALLERY_ALBUMS_TITLE'],
				'ACP_GALLERY_TITLE_EXPLAIN'		=> $user->lang['ACP_CREATE_ALBUM_EXPLAIN'],
				'S_PARENT_OPTIONS'				=> $parents_list,
				'S_COPY_OPTIONS'				=> $copy_list,
				'S_ALBUM_ACTION'				=> $this->u_action . '&amp;action=create',
				'S_DESC_BBCODE_CHECKED'		=> true,
				'S_DESC_SMILIES_CHECKED'	=> true,
				'S_DESC_URLS_CHECKED'		=> true,
				'ALBUM_TYPE'				=> 1,
				'ALBUM_IMAGE'				=> '',
				));
		}
		else
		{// Is it salty ?
			if (!check_form_key('acp_gallery'))
			{
				trigger_error('FORM_INVALID');
			}
			$album_data = array(
				'album_name'					=> request_var('album_name', '', true),
				'parent_id'						=> request_var('parent_id', 0),
				//left_id and right_id are created some lines later
				'album_parents'					=> '',
				'album_type'					=> request_var('album_type', 0),
				'album_desc_options'			=> 7,
				'album_desc'					=> utf8_normalize_nfc(request_var('album_desc', '', true)),
				'album_user_id'					=> 0,
				'album_last_username'			=> '',
				'album_image'					=> request_var('album_image', ''),
			);
			generate_text_for_storage($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_bitfield'], $album_data['album_desc_options'], request_var('desc_parse_bbcode', false), request_var('desc_parse_urls', false), request_var('desc_parse_smilies', false));

			if ($album_data['album_name'] == '')
			{
				trigger_error($user->lang['MISSING_ALBUM_NAME'] . adm_back_link(append_sid("{$phpbb_admin_path}index.$phpEx", 'i=gallery&amp;mode=manage_albums&action=create')));
			}
			//the following is copied from the forum management. thx to the developers
			if ($album_data['parent_id'])
			{
				$sql = 'SELECT left_id, right_id, album_type
					FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					WHERE album_id = ' . $album_data['parent_id'];
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					trigger_error($user->lang['PARENT_NOT_EXIST'] . adm_back_link($this->u_action . '&amp;' . $this->parent_id), E_USER_WARNING);
				}

				$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					SET left_id = left_id + 2, right_id = right_id + 2
					WHERE left_id > ' . $row['right_id'] . '
						AND album_user_id = ' . $album_data['album_user_id'];
				$db->sql_query($sql);

				$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					SET right_id = right_id + 2
					WHERE ' . $row['left_id'] . ' BETWEEN left_id AND right_id
						AND album_user_id = ' . $album_data['album_user_id'];
				$db->sql_query($sql);

				$album_data['left_id'] = $row['right_id'];
				$album_data['right_id'] = $row['right_id'] + 1;
			}
			else
			{
				$sql = 'SELECT MAX(right_id) AS right_id
					FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					WHERE album_user_id = ' . $album_data['album_user_id'];
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				$album_data['left_id'] = $row['right_id'] + 1;
				$album_data['right_id'] = $row['right_id'] + 2;
			}
			$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_ALBUMS_TABLE . ' ' . $db->sql_build_array('INSERT', $album_data));
			$album_data['album_id'] = $db->sql_nextid();
			$album_id = $album_data['album_id'];
			$copy_permissions = request_var('copy_permissions', 0);
			if ($copy_permissions <> 0)
			{
				//delete the old permissions and thatn copy the new one's
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . "
					WHERE perm_album_id = $album_id";
				$result = $db->sql_query($sql);
				$sql = 'SELECT *
						FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . '
						WHERE perm_album_id = ' . $copy_permissions;
				$result = $db->sql_query($sql);
				while($row = $db->sql_fetchrow($result))
				{
					$perm_data = array(
						'perm_role_id'					=> $row['perm_role_id'],
						'perm_album_id'					=> $album_id,
						'perm_user_id'					=> $row['perm_user_id'],
						'perm_group_id'					=> $row['perm_group_id'],
						'perm_system'					=> $row['perm_system'],
					);
					$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . ' ' . $db->sql_build_array('INSERT', $perm_data));
				}
				$db->sql_freeresult($result);
				$sql = 'SELECT * FROM ' . PHPBB3_GALLERY_MODSCACHE_TABLE . "
					WHERE album_id = $copy_permissions";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql_ary = array(
						'album_id'			=> $album_id,
						'user_id'			=> $row['user_id'],
						'username '			=> $row['username'],
						'group_id'			=> $row['group_id'],
						'group_name'		=> $row['group_name'],
						'display_on_index'	=> $row['display_on_index'],
					);
					$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_MODSCACHE_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
				}
				$db->sql_freeresult($result);
			}
			$cache->destroy('sql', PHPBB3_GALLERY_MODSCACHE_TABLE);
			$cache->destroy('sql', PHPBB3_GALLERY_ALBUMS_TABLE);
			$cache->destroy('_albums');

			trigger_error($user->lang['NEW_ALBUM_CREATED'] . sprintf($user->lang['SET_PERMISSIONS'], 
				append_sid("{$phpbb_admin_path}index.$phpEx", 
				array('i' => 'gallery', 'mode' => 'album_permissions', 'step' => 1, 'album_id' => $album_id, 'uncheck' => 'true')
				)) . adm_back_link($this->u_action));
		}
	}

	function edit_album()
	{
		$new = [];
  global $db, $user, $auth, $template, $cache;
		global $config, $phpEx;
		
		$phpbb_admin_path = PHPBB3_ADMIN_DIR;
		
		include_once(PHPBB3_INCLUDE_DIR . 'message_parser.' . $phpEx);

		if (!$album_id = request_var('album_id', 0))
		{
			trigger_error('No Album ID', E_USER_WARNING);
		}

		$submit = (isset($_POST['submit'])) ? true : false;
		if(!$submit)
		{
			$sql = 'SELECT *
				FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
				WHERE album_id = '$album_id'";
			$result = $db->sql_query($sql);
			if ($db->sql_affectedrows($result) == 0)
			{
				trigger_error('The requested album does not exist', E_USER_WARNING);
			}
			$album_data = $db->sql_fetchrow($result);
			$album_desc_data = generate_text_for_edit($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_options']);
			$parents_list = make_album_select($album_data['parent_id'], $album_id);
			$copy_list = make_album_select(0, $album_id);

			$template->assign_vars(array(
				'S_EDIT_ALBUM'				=> true,
				'ACP_GALLERY_TITLE'			=> $user->lang['GALLERY_ALBUMS_TITLE'],
				'ACP_GALLERY_TITLE_EXPLAIN'	=> $user->lang['ACP_EDIT_ALBUM_EXPLAIN'],

				'S_ALBUM_ACTION' 			=> $this->u_action . '&amp;action=edit&amp;album_id=' . $album_id,
				'S_PARENT_OPTIONS'			=> $parents_list,
				'S_COPY_OPTIONS'			=> $copy_list,

				'ALBUM_NAME' 				=> $album_data['album_name'],
				'ALBUM_DESC'				=> $album_desc_data['text'],
				'ALBUM_TYPE'				=> $album_data['album_type'],
				'ALBUM_IMAGE'				=> $album_data['album_image'],
				'S_DESC_BBCODE_CHECKED'		=> ($album_desc_data['allow_bbcode']) ? true : false,
				'S_DESC_SMILIES_CHECKED'	=> ($album_desc_data['allow_smilies']) ? true : false,
				'S_DESC_URLS_CHECKED'		=> ($album_desc_data['allow_urls']) ? true : false,
				'S_MODE' 				=> 'edit',
			));
		}
		else
		{// Is it salty ?
			if (!check_form_key('acp_gallery'))
			{
				trigger_error('FORM_INVALID');
			}
			$album_data = array();
			$album_data = array(
				'album_name'					=> request_var('album_name', '', true),
				'parent_id'						=> request_var('parent_id', 0),
				//left_id and right_id are created some lines later
				'album_parents'					=> '',
				'album_type'					=> request_var('album_type', 0),
				'album_desc_options'			=> 7,
				'album_desc'					=> utf8_normalize_nfc(request_var('album_desc', '', true)),
				'album_image'					=> request_var('album_image', ''),
			);
			generate_text_for_storage($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_bitfield'], $album_data['album_desc_options'], request_var('desc_parse_bbcode', false), request_var('desc_parse_urls', false), request_var('desc_parse_smilies', false));
			$row = get_album_info($album_id);
			if (($row['album_images_real'] > 0) && !$album_data['album_type'])
			{
				trigger_error($user->lang['REMOVE_IMAGES_FOR_CAT'] . adm_back_link(append_sid("{$phpbb_admin_path}index.$phpEx", 'i=gallery&amp;mode=manage_albums&amp;action=edit&amp;album_id=' . $album_id)));
			}
			if ($album_data['album_name'] == '')
			{
				trigger_error($user->lang['MISSING_ALBUM_NAME'] . adm_back_link(append_sid("{$phpbb_admin_path}index.$phpEx", 'i=gallery&amp;mode=manage_albums&amp;action=edit&amp;album_id=' . $album_id)));
			}
			if ($row['parent_id'] != $album_data['parent_id'])
			{//if the parent is different, we'll have to watch out because the left_id and right_id have changed
				//how many do we have to move and how far
				$moving_ids = ($row['right_id'] - $row['left_id']) + 1;
				$sql = 'SELECT MAX(right_id) AS right_id
					FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					WHERE album_user_id = ' . $row['album_user_id'];
				$result = $db->sql_query($sql);
				$highest = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
				$moving_distance = ($highest['right_id'] - $row['left_id']) + 1;
				$stop_updating = $moving_distance + $row['left_id'];

				//echo '$moving_distance ' . $moving_distance . '; $moving_ids ' . $moving_ids;

				//update the moving album... move it to the end
				$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					SET right_id = right_id + ' . $moving_distance . ',
						left_id = left_id + ' . $moving_distance . '
					WHERE album_user_id = ' . $row['album_user_id'] . ' AND
						left_id >= ' . $row['left_id'] . '
						AND right_id <= ' . $row['right_id'];
				$db->sql_query($sql);
				$new['left_id'] = $row['left_id'] + $moving_distance;
				$new['right_id'] = $row['right_id'] + $moving_distance;

				//close the gap, we got
				if ($album_data['parent_id'] == 0)
				{//we move to root
					//left_id
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id - ' . $moving_ids . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							left_id >= ' . $row['left_id'];
					$db->sql_query($sql);
					//right_id
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET right_id = right_id - ' . $moving_ids . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							right_id >= ' . $row['left_id'];
					$db->sql_query($sql);
				}
				else
				{
					//close the gap
					//left_id
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id - ' . $moving_ids . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							left_id >= ' . $row['left_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);
					//right_id
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET right_id = right_id - ' . $moving_ids . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							right_id >= ' . $row['left_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);

					//create new gap
					//need parent_information
					$parent = get_album_info($album_data['parent_id']);
					//left_id
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id + ' . $moving_ids . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							left_id >= ' . $parent['right_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);
					//right_id
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET right_id = right_id + ' . $moving_ids . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							right_id >= ' . $parent['right_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);

					//close the gap again
					//new parent right_id!!!
					$parent['right_id'] = $parent['right_id'] + $moving_ids;
					$move_back = ($new['right_id'] - $parent['right_id']) + 1;
					$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id - ' . $move_back . ',
							right_id = right_id - ' . $move_back . '
						WHERE album_user_id = ' . $row['album_user_id'] . ' AND
							left_id >= ' . $stop_updating;
					$db->sql_query($sql);
				}
			}
			if ($row['album_name'] != $album_data['album_name'])
			{
				// the forum name has changed, clear the parents list of all forums (for safety)
				$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
					SET album_parents = ''";
				$db->sql_query($sql);
			}
			$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . ' 
					SET ' . $db->sql_build_array('UPDATE', $album_data) . '
					WHERE album_id  = ' . (int) $album_id;
			$db->sql_query($sql);
			$copy_permissions = request_var('copy_permissions', 0);
			if ($copy_permissions <> 0)
			{
				//delete the old permissions and thatn copy the new one's
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . "
					WHERE perm_album_id = $album_id";
				$result = $db->sql_query($sql);
				$sql = 'SELECT *
						FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . '
						WHERE perm_album_id = ' . $copy_permissions;
				$result = $db->sql_query($sql);
				while($row = $db->sql_fetchrow($result))
				{
					$perm_data = array(
						'perm_role_id'					=> $row['perm_role_id'],
						'perm_album_id'					=> $album_id,
						'perm_user_id'					=> $row['perm_user_id'],
						'perm_group_id'					=> $row['perm_group_id'],
						'perm_system'					=> $row['perm_system'],
					);
					$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . ' ' . $db->sql_build_array('INSERT', $perm_data));
				}
				$db->sql_freeresult($result);
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_MODSCACHE_TABLE . " WHERE album_id = $album_id";
				$db->sql_query($sql);
				$sql = 'SELECT * FROM ' . PHPBB3_GALLERY_MODSCACHE_TABLE . "
					WHERE album_id = $copy_permissions";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql_ary = array(
						'album_id'			=> $album_id,
						'user_id'			=> $row['user_id'],
						'username '			=> $row['username'],
						'group_id'			=> $row['group_id'],
						'group_name'		=> $row['group_name'],
						'display_on_index'	=> $row['display_on_index'],
					);
					$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_MODSCACHE_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
				}
				$db->sql_freeresult($result);
			}
			$cache->destroy('sql', PHPBB3_GALLERY_MODSCACHE_TABLE);
			$cache->destroy('sql', PHPBB3_GALLERY_ALBUMS_TABLE);
			$cache->destroy('_albums');

			trigger_error($user->lang['ALBUM_UPDATED'] . sprintf($user->lang['SET_PERMISSIONS'], 
				append_sid("{$phpbb_admin_path}index.$phpEx", 
				array('i' => 'gallery', 'mode' => 'album_permissions', 'step' => 1, 'album_id' => $album_id, 'uncheck' => 'true')
				)) . adm_back_link($this->u_action));
		}
	}

	function delete_album()
	{
		$albumrow = [];
  $thisalbum = [];
  $pic_id_row = [];
  global $db, $template, $user, $cache;

		if (!$album_id = request_var('album_id', 0))
		{
			trigger_error('No Album ID', E_USER_WARNING);
		}
		else
		{
			$sql = 'SELECT *
				FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
				WHERE album_id = '$album_id'";
			$result = $db->sql_query($sql);
			if ($db->sql_affectedrows($result) == 0)
			{
				trigger_error('The requested album does not exist', E_USER_WARNING);
			}
		}

		$submit = (isset($_POST['submit'])) ? true : false;
		if(!$submit)
		{
			$sql = 'SELECT *
					FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					WHERE album_id = ' . $album_id;
			$result = $db->sql_query($sql);

			$album_found = false;
			while($row = $db->sql_fetchrow($result))
			{
				if($row['album_id'] == $album_id)
				{
					$thisalbum = $row;
					$album_found = true;
				}
				else
				{
					$albumrow[] = $row;
				}
			}
			$db->sql_freeresult($result);

			if(!$album_found)
			{
				trigger_error('The requested album does not exist', E_USER_WARNING);
			}

			$template->assign_vars(array(
				'S_DELETE_ALBUM'		=> true,
				'ACP_GALLERY_TITLE'			=> $user->lang['DELETE_ALBUM'],
				'ACP_GALLERY_TITLE_EXPLAIN'	=> $user->lang['DELETE_ALBUM_EXPLAIN'],

				'S_ALBUM_ACTION'		=>  $this->u_action . '&amp;action=delete&amp;album_id=' . $album_id,
				'ALBUM_DELETE'			=> sprintf($user->lang['ALBUM_DELETE'], $thisalbum['album_name']),
				'ALBUM_TYPE'			=> $thisalbum['album_type'],
				'S_PARENT_OPTIONS'		=> make_album_select($thisalbum['parent_id'], $album_id),
				'ALBUM_NAME'			=> $thisalbum['album_name'],
				'ALBUM_DESC'			=> generate_text_for_display($thisalbum['album_desc'], $thisalbum['album_desc_uid'], $thisalbum['album_desc_bitfield'], $thisalbum['album_desc_options']),
				'S_MOVE_ALBUM_OPTIONS'	=> make_album_select(false, $album_id),
				'S_MOVE_IMAGE_OPTIONS'	=> make_album_select(false, $album_id, true),
			));
		}
		else
		{// Is it salty ?//$album_id
			if (!check_form_key('acp_gallery'))
			{
				trigger_error('FORM_INVALID');
			}
			$album = get_album_info($album_id);
			if (!$album['album_type'] && (($album['right_id'] - $album['left_id']) > 2))
			{//handle subs if there
				$handle_subs = request_var('handle_subs', 0);
				//we have to learn how to delete or move the subs
				if ((($album['right_id'] - $album['left_id']) > 2) && ($handle_subs >= 0))
				{
					trigger_error($user->lang['DELETE_ALBUM_SUBS'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['DELETE_ALBUM_SUBS'] . adm_back_link($this->u_action));
				}
			}
			else if ($album['album_type'] == 1)
			{//handle images if there
				$handle_images = request_var('handle_images', -1);
				if ($handle_images < 0)
				{
					$sql = 'SELECT image_id, image_filename, image_thumbnail, image_album_id
							FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . "
							WHERE image_album_id = '$album_id'";
					$result = $db->sql_query($sql);
					
					$picrow = array();
					while ($row = $db ->sql_fetchrow($result))
					{
						$picrow[] = $row;
						$pic_id_row[] = $row['image_id'];
					}
					if(count($picrow) > 0)
					{
						// Delete all physical pic & cached thumbnail files
						for ($i = 0; $i < count($picrow); $i++)
						{
							unlink(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $picrow[$i]['image_thumbnail']);
							unlink(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $picrow[$i]['image_filename']);
						}

						$pic_id_sql = '(' . implode(',', $pic_id_row) . ')';
						// Delete all related ratings
						$sql = 'DELETE FROM ' . PHPBB3_GALLERY_RATES_TABLE . '
							WHERE rate_image_id IN ' . $pic_id_sql;
						$result = $db->sql_query($sql);
						// Delete all related comments
						$sql = 'DELETE FROM ' . PHPBB3_GALLERY_COMMENTS_TABLE . '
							WHERE comment_image_id IN ' . $pic_id_sql;
						$result = $db->sql_query($sql);
						// Delete pic entries in db
						$sql = 'DELETE FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . "
							WHERE image_album_id = '$album_id'";
						$result = $db->sql_query($sql);
					}
				}
				else
				{
					$sql = 'UPDATE ' . PHPBB3_GALLERY_IMAGES_TABLE . '
						SET image_album_id = ' . $handle_images . '
						WHERE image_album_id = ' . $album_id;
					$db->sql_query($sql);
				}
			}
			//reorder the other albums
			//left_id
			$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
				SET left_id = left_id - 2
				WHERE album_user_id = {$album['album_user_id']} AND
				left_id > " . $album['left_id'];
			$db->sql_query($sql);
			//right_id
			$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
				SET right_id = right_id - 2
				WHERE album_user_id = {$album['album_user_id']} AND
				right_id > " . $album['left_id'];
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
				WHERE album_id = '$album_id'";
			$result = $db->sql_query($sql);
			$cache->destroy('sql', PHPBB3_GALLERY_ALBUMS_TABLE);
			$cache->destroy('_albums');
			trigger_error($user->lang['ALBUM_DELETED'] . adm_back_link($this->u_action));
		}
	}

	function move_album()
	{
		global $db, $user, $cache;

		if (!$album_id = request_var('album_id', 0))
		{
			trigger_error('No Album ID', E_USER_WARNING);
		}
		else
		{
			$sql = 'SELECT *
				FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
				WHERE album_id = '$album_id'";
			$result = $db->sql_query($sql);
			if ($db->sql_affectedrows($result) == 0)
			{
				trigger_error('The requested album does not exist', E_USER_WARNING);
			}
		}
		$move = request_var('move', '', true);
		$moving = get_album_info($album_id);

		$sql = 'SELECT album_id, left_id, right_id
			FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
			WHERE parent_id = {$moving['parent_id']}
				AND album_user_id = {$moving['album_user_id']}
				AND " . (($move == 'move_up') ? "right_id < {$moving['right_id']} ORDER BY right_id DESC" : "left_id > {$moving['left_id']} ORDER BY left_id ASC");
		$result = $db->sql_query_limit($sql, 1);

		$target = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$target = $row;
		}
		$db->sql_freeresult($result);

		if (!sizeof($target))
		{
			// The forum is already on top or bottom
			return false;
		}

		if ($move == 'move_up')
		{
			$left_id = $target['left_id'];
			$right_id = $moving['right_id'];

			$diff_up = $moving['left_id'] - $target['left_id'];
			$diff_down = $moving['right_id'] + 1 - $moving['left_id'];

			$move_up_left = $moving['left_id'];
			$move_up_right = $moving['right_id'];
		}
		else
		{
			$left_id = $moving['left_id'];
			$right_id = $target['right_id'];

			$diff_up = $moving['right_id'] + 1 - $moving['left_id'];
			$diff_down = $target['right_id'] - $moving['right_id'];

			$move_up_left = $moving['right_id'] + 1;
			$move_up_right = $target['right_id'];
		}

		// Now do the dirty job
		$sql = 'UPDATE ' . PHPBB3_GALLERY_ALBUMS_TABLE . "
			SET left_id = left_id + CASE
				WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			right_id = right_id + CASE
				WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			album_parents = ''
			WHERE
				left_id BETWEEN {$left_id} AND {$right_id}
				AND right_id BETWEEN {$left_id} AND {$right_id}
				AND album_user_id = {$moving['album_user_id']}";
		$db->sql_query($sql);
		$cache->destroy('sql', PHPBB3_GALLERY_ALBUMS_TABLE);
		$cache->destroy('_albums');
		trigger_error($user->lang['ALBUM_CHANGED_ORDER'] . adm_back_link($this->u_action));
	}

	function permissions()
	{
		$album_config = [];
  $group = [];
  global $db, $template, $user, $cache;

		$sql = 'SELECT *
			FROM ' . PHPBB3_GALLERY_CONFIG_TABLE;
		$result = $db->sql_query($sql);
		while( $row = $db->sql_fetchrow($result) )
		{
			$album_config_name = $row['config_name'];
			$album_config_value = $row['config_value'];
			$album_config[$album_config_name] = $album_config_value;
		}

		$submit = (isset($_POST['submit'])) ? true : false;
		$delete = (isset($_POST['delete'])) ? true : false;
		$album_ary = request_var('album_ids', array(''));
		$album_list = implode(', ', $album_ary);
		$group_ary = request_var('group_ids', array(''));
		$group_list = implode(', ', $group_ary);
		$step = request_var('step', 0);
		$perm_system = request_var('perm_system', 0);
		if ($perm_system > 1)
		{
			$album_ary = array();
		}
		if ($delete)
		{
			if (!check_form_key('acp_gallery'))
			{
				trigger_error('FORM_INVALID');
			}
			//you wished to drop the permissions
			$drop_perm_ary = request_var('drop_perm', array(''));
			$drop_perm_string = implode(', ', $drop_perm_ary);
			if ($drop_perm_string && $album_list)
			{
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . "
					WHERE " . $db->sql_in_set('perm_group_id', $drop_perm_ary) . "
						AND " . $db->sql_in_set('perm_album_id', $album_ary) . "
						AND perm_system = $perm_system";
				$db->sql_query($sql);
			}
			else if ($drop_perm_string)
			{
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . "
					WHERE " . $db->sql_in_set('perm_group_id', $drop_perm_ary) . "
						AND perm_system = $perm_system";
				$db->sql_query($sql);
			}
			$step = 1;
		}

		$album_name_ary = array();
		//build the array with some kind of order.
		$permissions = array();
		if ($perm_system != 2)
		{
			$permissions = array_merge($permissions, array('i_view'));
		}
		if ($perm_system != 3)
		{
			$permissions = array_merge($permissions, array('i_upload', 'i_approve'));
		}
		$permissions = array_merge($permissions, array('i_edit', 'i_delete', 'i_lock', 'i_report'));
		//im not sure, whether whe should add this everytime, so you can make the rights without the users having them already
		//if ($album_config['rate'])
		//{
			$permissions = array_merge($permissions, array('i_rate'));
		//}
		//if ($album_config['comment'])
		//{
			$permissions = array_merge($permissions, array('c_post', 'c_edit', 'c_delete'));
		//}
		$permissions = array_merge($permissions, array('a_moderate'));
		if ($perm_system != 3)
		{
			$permissions = array_merge($permissions, array('i_count'));
		}
		if ($perm_system == 2)
		{
			$permissions = array_merge($permissions, array('album_count'));
		}

		$albums = $cache->obtain_album_list();

		if ($step == 0)
		{
			$album_list = make_album_select(0);
			$template->assign_vars(array(
				'ALBUM_LIST'		=> $album_list,
			));
			$step = 1;
		}
		else if ($step == 1)
		{
			if (request_var('uncheck', '') == '')
			{
				if (!check_form_key('acp_gallery'))
				{
					trigger_error('FORM_INVALID');
				}
			}
			else
			{
				$album_ary = array(request_var('album_id', 0));
			}
			if ($perm_system == 0)
			{
				foreach ($albums as $album)
				{
					if (in_array($album['album_id'], $album_ary))
					{
						$template->assign_block_vars('albumrow', array(
							'ALBUM_ID'				=> $album['album_id'],
							'ALBUM_NAME'			=> $album['album_name'],
						));
					}
				}
			}

			$sql = 'SELECT group_id, group_type, group_name, group_colour FROM ' . PHPBB3_GROUPS_TABLE;
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$row['group_name'] = ($row['group_type'] == 3) ? $user->lang['G_' . $row['group_name']] : $row['group_name'];
				$template->assign_block_vars('grouprow', array(
					'GROUP_ID'				=> $row['group_id'],
					'GROUP_NAME'			=> $row['group_name'],
				));
				$group[$row['group_id']]['group_name'] = $row['group_name'];
				$group[$row['group_id']]['group_colour'] = $row['group_colour'];
			}
			$db->sql_freeresult($result);

			if (!isset($album_ary[1]))
			{
				$where = '';
				if ($perm_system == 0)
				{
					if (!isset($album_ary[0]))
					{
						trigger_error('THIS_WILL_BE_REPORTED', E_USER_WARNING);
					}
					$where = 'perm_album_id = ' . $album_ary[0];
				}
				else
				{
					$where = 'perm_system = ' . $perm_system;
				}
				$sql2 = 'SELECT * FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . "
					WHERE $where
						AND perm_group_id <> 0";
				$result2 = $db->sql_query($sql2);
				while ($row = $db->sql_fetchrow($result2))
				{
					$template->assign_block_vars('perm_grouprow', array(
						'GROUP_ID'				=> $row['perm_group_id'],
						'GROUP_COLOUR'			=> $group[$row['perm_group_id']]['group_colour'],
						'GROUP_NAME'			=> $group[$row['perm_group_id']]['group_name'],
					));
				}
				$db->sql_freeresult($result2);
			}
			$step = 2;
		}
		else if ($step == 2)
		{
			if (!check_form_key('acp_gallery'))
			{
				trigger_error('FORM_INVALID');
			}
			//ALbum names
			foreach ($albums as $album)
			{
				if (in_array($album['album_id'], $album_ary))
				{
					$template->assign_block_vars('albumrow', array(
						'ALBUM_ID'				=> $album['album_id'],
						'ALBUM_NAME'			=> $album['album_name'],
					));
				}
			}
			//Group names
			$sql = 'SELECT group_id, group_type, group_name, group_colour FROM ' . PHPBB3_GROUPS_TABLE . "
				WHERE group_id IN ($group_list)";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$row['group_name'] = ($row['group_type'] == 3) ? $user->lang['G_' . $row['group_name']] : $row['group_name'];
				$template->assign_block_vars('grouprow', array(
					'GROUP_ID'				=> $row['group_id'],
					'GROUP_NAME'			=> $row['group_name'],
					'GROUP_COLOUR'			=> $row['group_colour'],
				));
			}
			$db->sql_freeresult($result);
			if ((!isset($album_ary[1])) && (!isset($group_ary[1])))
			{
				$where = '';
				if ($perm_system == 0)
				{
					$where = 'p.perm_album_id = ' . $album_ary[0];
				}
				else
				{
					$where = 'p.perm_system = ' . $perm_system;
				}
				$sql = "SELECT pr.*
					FROM " . PHPBB3_GALLERY_PERMISSIONS_TABLE . " as p
					LEFT JOIN " .  PHPBB3_GALLERY_ROLES_TABLE .  " as pr
						ON p.perm_role_id = pr.role_id
					WHERE p.perm_group_id = {$group_ary[0]}
						AND $where";
				$result = $db->sql_query($sql);
				$perm_ary = $db->sql_fetchrow($result, 1);
				$db->sql_freeresult($result);
			}

			//Permissions
			foreach ($permissions as $permission)
			{
				$template->assign_block_vars('permission', array(
					'PERMISSION'			=> $user->lang['PERMISSION_' . strtoupper($permission)],
					'S_FIELD_NAME'			=> $permission,
					'S_NO'					=> ((isset($perm_ary[$permission]) && ($perm_ary[$permission] == 0)) ? true : false),
					'S_YES'					=> ((isset($perm_ary[$permission]) && ($perm_ary[$permission] == 1)) ? true : false),
					'S_NEVER'				=> ((isset($perm_ary[$permission]) && ($perm_ary[$permission] == 2)) ? true : false),
					'S_VALUE'				=> ($perm_ary[$permission] ?? 0),
					'S_COUNT_FIELD'			=> (substr($permission, -6, 6) == '_count') ? true : false,
				));
			}
			$step = 3;
		}
		else if ($step == 3)
		{
			if (!check_form_key('acp_gallery'))
			{
				trigger_error('FORM_INVALID');
			}
			foreach ($permissions as $permission)
			{
				$submitted_valued = request_var($permission, 0);//hacked for deny empty submit
				if (substr($permission, -6, 6) == '_count')
				{
					$submitted_valued = $submitted_valued + 1;
				}
				else if ($submitted_valued == 0)
				{
					trigger_error('PERMISSION_EMPTY', E_USER_WARNING);
				}
				$sql_ary[$permission] = $submitted_valued - 1;
			}
			//need to set some defaults here
			if ($perm_system == 2)
			{//view your own personal albums
				$sql_ary['i_view'] = 1;
			}
			$set_moderator = false;
			if ($sql_ary['a_moderate'] == 1)
			{
				$set_moderator = true;
			}

			$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_ROLES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
			$insert_role = $db->sql_nextid();
			if ($album_ary != array())
			{
				foreach ($album_ary as $album)
				{
					foreach ($group_ary as $group)
					{
						$sql = 'DELETE FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . " WHERE perm_album_id = $album AND perm_group_id = $group AND perm_system = $perm_system";
						$db->sql_query($sql);
						$sql_ary = array(
							'perm_role_id'			=> $insert_role,
							'perm_album_id'			=> $album,
							'perm_user_id'			=> 0,
							'perm_group_id'			=> $group,
							'perm_system'			=> $perm_system,
						);
						$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
						$sql = 'DELETE FROM ' . PHPBB3_GALLERY_MODSCACHE_TABLE . " WHERE album_id = $album AND group_id = $group";
						$db->sql_query($sql);
						if ($set_moderator)
						{
							$sql = 'SELECT group_name FROM ' . PHPBB3_GROUPS_TABLE . '
								WHERE ' . $db->sql_in_set('group_id', $group);
							$result = $db->sql_query($sql);
							while ($row = $db->sql_fetchrow($result))
							{
								$group_name = $row['group_name'];
							}
							$db->sql_freeresult($result);
							$sql_ary = array(
								'album_id'			=> $album,
								'group_id'			=> $group,
								'group_name'		=> $group_name,
							);
							$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_MODSCACHE_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
						}
					}
				}
			}
			else
			{
				foreach ($group_ary as $group)
				{
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . " WHERE perm_group_id = $group AND perm_system = $perm_system";
					$db->sql_query($sql);
					$sql_ary = array(
						'perm_role_id'			=> $insert_role,
						'perm_album_id'			=> 0,
						'perm_user_id'			=> 0,
						'perm_group_id'			=> $group,
						'perm_system'			=> $perm_system,
					);
					$db->sql_query('INSERT INTO ' . PHPBB3_GALLERY_PERMISSIONS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
				}
			}
			$cache->destroy('sql', PHPBB3_GALLERY_MODSCACHE_TABLE);
			trigger_error('PERMISSIONS_STORED');
		}


		if ($perm_system)
		{
			$hidden_fields = build_hidden_fields(array(
				'album_ids'			=> $album_ary,
				'group_ids'			=> $group_ary,
				'step'				=> $step,
				'perm_system'		=> $perm_system,
			));
		}
		else
		{
			$hidden_fields = build_hidden_fields(array(
				'album_ids'			=> $album_ary,
				'group_ids'			=> $group_ary,
				'step'				=> $step,
			));
		}

		$template->assign_vars(array(
			'S_HIDDEN_FIELDS'		=> $hidden_fields,
			'ALBUMS'				=> implode(', ', $album_name_ary),
			'GROUPS'				=> implode(', ', $group_ary),
			'STEP'					=> $step,
			'PERM_SYSTEM'			=> $perm_system,
			'S_ALBUM_ACTION' 		=> $this->u_action,
		));
	}

	function cleanup()
	{
		global $db, $template, $user, $cache, $auth;

		$delete = (isset($_POST['delete'])) ? true : false;
		$submit = (isset($_POST['submit'])) ? true : false;

		$missing_sources = request_var('source', array(0));
		$missing_entries = request_var('entry', array(''), true);
		$missing_authors = request_var('author', array(0), true);
		$missing_comments = request_var('comment', array(0), true);
		$missing_personals = request_var('personal', array(0), true);
		$s_hidden_fields = build_hidden_fields(array(
			'source'		=> $missing_sources,
			'entry'			=> $missing_entries,
			'author'		=> $missing_authors,
			'comment'		=> $missing_comments,
			'personal'		=> $missing_personals,
		));

		if ($submit)
		{
			if ($missing_authors)
			{
				$sql = 'UPDATE ' . PHPBB3_GALLERY_IMAGES_TABLE . ' 
					SET image_user_id = ' . ANONYMOUS . ",
						image_user_colour = ''
					WHERE " . $db->sql_in_set('image_id', $missing_authors);
				$db->sql_query($sql);
			}
			if ($missing_comments)
			{
				$sql = 'UPDATE ' . PHPBB3_GALLERY_COMMENTS_TABLE . ' 
					SET comment_user_id = ' . ANONYMOUS . ",
						comment_user_colour = ''
					WHERE " . $db->sql_in_set('comment_id', $missing_comments);
				$db->sql_query($sql);
			}
			trigger_error($user->lang['CLEAN_CHANGED'] . adm_back_link($this->u_action));
		}

		if (confirm_box(true))
		{
			$message = '';
			if ($missing_sources)
			{
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $missing_sources);
				$db->sql_query($sql);
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_COMMENTS_TABLE . ' WHERE ' . $db->sql_in_set('comment_image_id', $missing_sources);
				$db->sql_query($sql);
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_RATES_TABLE . ' WHERE ' . $db->sql_in_set('rate_image_id', $missing_sources);
				$db->sql_query($sql);
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_REPORTS_TABLE . ' WHERE ' . $db->sql_in_set('report_image_id', $missing_sources);
				$db->sql_query($sql);
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_FAVORITES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $missing_sources);
				$db->sql_query($sql);
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_WATCH_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $missing_sources);
				$db->sql_query($sql);
				$message .= $user->lang['CLEAN_SOURCES_DONE'];
			}
			if ($missing_entries)
			{
				foreach ($missing_entries as $missing_image)
				{
					unlink(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . mb_convert_encoding($missing_image, 'ISO-8859-1'));
				}
				$message .= $user->lang['CLEAN_ENTRIES_DONE'];
			}
			if ($missing_authors)
			{
				$deleted_images = array();
				$sql = 'SELECT image_id, image_thumbnail, image_filename
					FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $missing_authors);
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					//delete the files themselves
					unlink(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $row['image_thumbnail']);
					unlink(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $row['image_filename']);
					$deleted_images[] = $row['image_id'];
				}
				// we have all image_ids in $deleted_images which are deleted
				// aswell as the album_ids in $deleted_albums
				// so now drop the comments, ratings, images and albums
				if ($deleted_images)
				{
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_COMMENTS_TABLE . ' WHERE ' . $db->sql_in_set('comment_image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_FAVORITES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_RATES_TABLE . ' WHERE ' . $db->sql_in_set('rate_image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_WATCH_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $deleted_images);
					$db->sql_query($sql);
				}
				$message .= $user->lang['CLEAN_AUTHORS_DONE'];
			}
			if ($missing_comments)
			{
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_COMMENTS_TABLE . ' WHERE ' . $db->sql_in_set('comment_id', $missing_comments);
				$db->sql_query($sql);
				$message .= $user->lang['CLEAN_COMMENTS_DONE'];
			}
			if ($missing_personals)
			{
				$deleted_images = $deleted_albums = array(0);
				$sql = 'SELECT album_id
					FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . '
					WHERE ' . $db->sql_in_set('album_user_id', $missing_personals);
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$deleted_albums[] = $row['album_id'];
				}
				$sql = 'SELECT image_id, image_thumbnail, image_filename
					FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . '
					WHERE ' . $db->sql_in_set('image_album_id', $deleted_albums);
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					unlink(PHPBB3_ROOT_DIR . GALLERY_CACHE_PATH . $row['image_thumbnail']);
					unlink(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $row['image_filename']);
					$deleted_images[] = $row['image_id'];
				}
				if ($deleted_images)
				{
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_COMMENTS_TABLE . ' WHERE ' . $db->sql_in_set('comment_image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_FAVORITES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_RATES_TABLE . ' WHERE ' . $db->sql_in_set('rate_image_id', $deleted_images);
					$db->sql_query($sql);
					$sql = 'DELETE FROM ' . PHPBB3_GALLERY_WATCH_TABLE . ' WHERE ' . $db->sql_in_set('image_id', $deleted_images);
					$db->sql_query($sql);
				}
				$sql = 'DELETE FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . ' WHERE ' . $db->sql_in_set('album_id', $deleted_albums);
				$db->sql_query($sql);
				$message .= $user->lang['CLEAN_PERSONALS_DONE'];
			}

			trigger_error($message . adm_back_link($this->u_action));
		}
		else if (($delete) || (isset($_POST['cancel'])))
		{
			if (isset($_POST['cancel']))
			{
				trigger_error($user->lang['CLEAN_GALLERY_ABORT'] . adm_back_link($this->u_action), E_USER_WARNING);
			}
			else
			{
				$user->lang['CLEAN_GALLERY_CONFIRM'] = $user->lang['PHPBB3_CONFIRM_CLEAN'];
				if ($missing_sources)
				{
					$user->lang['CLEAN_GALLERY_CONFIRM'] = $user->lang['PHPBB3_CONFIRM_CLEAN_SOURCES'] . '<br />' . $user->lang['CLEAN_GALLERY_CONFIRM'];
				}
				if ($missing_entries)
				{
					$user->lang['CLEAN_GALLERY_CONFIRM'] = $user->lang['PHPBB3_CONFIRM_CLEAN_ENTRIES'] . '<br />' . $user->lang['CLEAN_GALLERY_CONFIRM'];
				}
				if ($missing_authors)
				{
					$user->lang['CLEAN_GALLERY_CONFIRM'] = $user->lang['PHPBB3_CONFIRM_CLEAN_AUTHORS'] . '<br />' . $user->lang['CLEAN_GALLERY_CONFIRM'];
				}
				if ($missing_comments)
				{
					$user->lang['CLEAN_GALLERY_CONFIRM'] = $user->lang['PHPBB3_CONFIRM_CLEAN_COMMENTS'] . '<br />' . $user->lang['CLEAN_GALLERY_CONFIRM'];
				}
				if ($missing_personals)
				{
					$user->lang['CLEAN_GALLERY_CONFIRM'] = $user->lang['PHPBB3_CONFIRM_CLEAN_PERSONALS'] . '<br />' . $user->lang['CLEAN_GALLERY_CONFIRM'];
				}
				confirm_box(false, 'CLEAN_GALLERY', $s_hidden_fields);
			}
		}

		$requested_source = array();
		$sql = 'SELECT gi.image_id, gi.image_name, gi.image_filemissing, gi.image_filename, gi.image_username, u.user_id
			FROM ' . PHPBB3_GALLERY_IMAGES_TABLE . ' gi
			LEFT JOIN ' . PHPBB3_USERS_TABLE . ' u
				ON u.user_id = gi.image_user_id';
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			if ($row['image_filemissing'])
			{
				$template->assign_block_vars('sourcerow', array(
					'IMAGE_ID'		=> $row['image_id'],
					'IMAGE_NAME'	=> $row['image_name'],
				));
			}
			if (!$row['user_id'])
			{
				$template->assign_block_vars('authorrow', array(
					'IMAGE_ID'		=> $row['image_id'],
					'AUTHOR_NAME'	=> $row['image_username'],
				));
			}
			$requested_source[] = $row['image_filename'];
		}
		$db->sql_freeresult($result);

		$check_mode = request_var('check_mode', '');
		if ($check_mode == 'source')
		{
			$source_missing = array();
			$sql = 'SELECT image_id, image_filename, image_filemissing
				FROM ' . PHPBB3_GALLERY_IMAGES_TABLE;
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				if (!file_exists(PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH . $row['image_filename']))
				{
					$source_missing[] = $row['image_id'];
				}
			}
			$db->sql_freeresult($result);
			if ($source_missing)
			{
				$sql = 'UPDATE ' . PHPBB3_GALLERY_IMAGES_TABLE . "
					SET image_filemissing = 1
					WHERE " . $db->sql_in_set('image_id', $source_missing);
				$db->sql_query($sql);
			}
		}
		if ($check_mode == 'entry')
		{
			$directory = PHPBB3_ROOT_DIR . GALLERY_UPLOAD_PATH;
			$handle = opendir($directory);
			while ($file = readdir($handle))
			{
				if (!is_dir($directory . "$file") &&
				((substr(strtolower($file), '-4') == '.png') || (substr(strtolower($file), '-4') == '.gif') || (substr(strtolower($file), '-4') == '.jpg'))
				&& !in_array($file, $requested_source)
				)
				{
					$template->assign_block_vars('entryrow', array(
						'FILE_NAME'				=> mb_convert_encoding($file, 'UTF-8', 'ISO-8859-1'),
					));
				}
			}
			closedir($handle);
		}


		$sql = 'SELECT gc.comment_id, gc.comment_image_id, gc.comment_username, u.user_id
			FROM ' . PHPBB3_GALLERY_COMMENTS_TABLE . ' gc
			LEFT JOIN ' . PHPBB3_USERS_TABLE . ' u
				ON u.user_id = gc.comment_user_id';
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			if (!$row['user_id'])
			{
				$template->assign_block_vars('commentrow', array(
					'COMMENT_ID'	=> $row['comment_id'],
					'IMAGE_ID'		=> $row['comment_image_id'],
					'AUTHOR_NAME'	=> $row['comment_username'],
				));
			}
		}
		$db->sql_freeresult($result);

		$sql = 'SELECT ga.album_id, ga.album_user_id, ga.album_name, u.user_id
			FROM ' . PHPBB3_GALLERY_ALBUMS_TABLE . ' ga
			LEFT JOIN ' . PHPBB3_USERS_TABLE . ' u
				ON u.user_id = ga.album_user_id
			WHERE ga.album_user_id <> 0
				AND ga.parent_id = 0';
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			if (!$row['user_id'])
			{
				$template->assign_block_vars('personalrow', array(
					'USER_ID'		=> $row['album_user_id'],
					'ALBUM_ID'		=> $row['album_id'],
					'AUTHOR_NAME'	=> $row['album_name'],
				));
			}
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'S_GALLERY_MANAGE_RESTS'		=> true,
			'ACP_GALLERY_TITLE'				=> $user->lang['ACP_GALLERY_CLEANUP'],
			'ACP_GALLERY_TITLE_EXPLAIN'		=> $user->lang['ACP_GALLERY_CLEANUP_EXPLAIN'],
			'CHECK_SOURCE'			=> $this->u_action . '&amp;check_mode=source',
			'CHECK_ENTRY'			=> $this->u_action . '&amp;check_mode=entry',

			'S_FOUNDER'				=> ($user->data['user_type'] == PHPBB3_USER_FOUNDER) ? true : false,
		));
	}

}

?>