<?php

/**
*
* @package phpBB3 - gallery
* @version $Id: gallery_acp.php 256 2008-01-25 18:52:19Z nickvergessen $
* @copyright (c) 2007 nickvergessen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/
if (!defined('IN_PHPBB')) 
{ 
	exit; 
} 

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Manage personal albums',
));

$lang = array_merge($lang, array(
	'UCP_GALLERY'						=> 'Gallery',
	'UCP_GALLERY_SETTINGS'				=> 'Personal settings',
	'UCP_GALLERY_FAVORITES'				=> 'Manage favorites',
	'UCP_GALLERY_WATCH'					=> 'Manage subscriptions',
));

?>