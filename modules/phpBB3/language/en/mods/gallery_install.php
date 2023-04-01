<?php
/**
*
* install [English]
*
* @package language
* @version $Id: gallery_install.php 671 2008-08-20 09:35:14Z nickvergessen $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
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
	'AFTER_INSTALL_GOTO'				=> 'Go to the %sGallery%s',

	'EXAMPLE_ALBUM1'					=> 'Your first category',
	'EXAMPLE_ALBUM2'					=> 'Your first album',
	'EXAMPLE_ALBUM2_DESC'				=> 'Description of your first album.',
	'EXAMPLE_DESC'						=> 'Thank you for installing phpBB Gallery v%s aka. &quot;DB-Bird&quot;.<br />'
											. 'This is just an example-image, you may delete it.',
	'EXAMPLE_DESC_UID'					=> '1vrbfkfh',

	'INSTALLER_CHMOD'					=> 'Checking for CHMOD',
	'INSTALLER_CHMOD_EXPLAIN'			=> 'The following directories need CHMOD 777, to make the gallery work.',
	'INSTALLER_CHMOD_UNWRITABLE'		=> 'Unwriteable',
	'INSTALLER_CHMOD_WRITABLE'			=> 'Writeable',

	'INSTALLER_CONVERT'					=> 'Convert',
	'INSTALLER_CONVERT_NOTE'			=> 'Convert MOD to v%s',
	'INSTALLER_CONVERT_PREFIX'			=> 'Prefix of phpBB2-installation',
	'INSTALLER_CONVERT_SUCCESSFUL'		=> 'Convert of the MOD to v%s was successful.<br />Now copy the image-files of album/upload and album/upload/cache of your phpbb2-Installation into the one\'s of the phpBB3.<br />Now delete the instalöl_gallery/ root.',
	'INSTALLER_CONVERT_UNSUCCESSFUL'	=> 'Convert of the MOD to v%s was <strong>not</strong> successful.',
	'INSTALLER_CONVERT_UNSUCCESSFUL2'	=> 'You didn\'t insert a prefix of your phpBB2-installation.',
	'INSTALLER_CONVERT_WELCOME'			=> 'Welcome to the Convertmenu',
	'INSTALLER_CONVERT_WELCOME_NOTE'	=> 'When you choose to convert the MOD, we try to copy the data of your older phpBB2 Installation.',

	'INSTALLER_DELETE'					=> 'Delete',
	'INSTALLER_DELETE_NOTE'				=> 'Delete',
	'INSTALLER_DELETE_BBCODE'			=> 'Choose BBCode',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Deleted the MOD successfully.<br />Now delete all files.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> 'Could <strong>not</strong> delete the MOD.',
	'INSTALLER_DELETE_WELCOME'			=> 'You really want to delete the gallery?',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'When you choose to delete the MOD, we remove all sql-data insert by the installation.',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Welcome to the MOD Installation',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Please choose what you want to do.',

	'INSTALLER_INSTALL'					=> 'Install',
	'INSTALLER_INSTALL_MENU'			=> 'Installmenu',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Installation of the MOD v%s was successful.<br />Now delete the install_gallery/ root.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Installation of the MOD v%s was <strong>not</strong> successful.',
	'INSTALLER_INSTALL_VERSION'			=> 'Install MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Welcome to the Installationmenu',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'When you choose to install the MOD, any database of previous versions will be dropped.',

	'INSTALLER_UPDATE'					=> 'Update',
	'INSTALLER_UPDATE_MENU'				=> 'Updatemenu',
	'INSTALLER_UPDATE_NOTE'				=> 'Update MOD from v%s to v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Update of the MOD from v%s to v%s was successful.<br />Now delete the install_gallery/ root.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Update of the MOD from v%s to v%s was <strong>not</strong> successful.',
	'INSTALLER_UPDATE_VERSION'			=> 'Update MOD from v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Welcome to the Updatemenu',

	'MISSING_PARENT_MODULE'				=> 'Module #%s is missing as a parent module for "%s".',
	'MODULES_ADVICE_SELECT'				=> 'Adviced is "%s"',
	'MODULES_CREATE_PARENT'				=> 'Create parent standard-module',
	'MODULES_MODULE_ID'					=> 'ID',
	'MODULES_MODULE_NAME'				=> 'Name',
	'MODULES_PARENT_SELECT'				=> 'Choose parent moduleÜbergeordnetes Modul auswählen',
	'MODULES_SELECT_4ACP'				=> 'Choose parent module for "admin control panel"',
	'MODULES_SELECT_4UCP'				=> 'Choose parent module for "user control panel"',
	'MODULES_SELECT_NONE'				=> 'no parent module',

	'WARNING'							=> 'Warning',
));

?>