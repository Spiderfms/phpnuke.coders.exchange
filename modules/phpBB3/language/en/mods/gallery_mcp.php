<?php

/**
*
* @package phpBB3 - gallery
* @version $Id: gallery_mcp.php 541 2008-06-28 08:48:56Z nickvergessen $
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
	'CHOOSE_ACTION'					=> 'Select desired action',

	'GALLERY_MCP_MAIN'				=> 'Main',
	'GALLERY_MCP_QUEUE'				=> 'Queue',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Image details',
	'GALLERY_MCP_REPORTED'			=> 'Reported images',
	'GALLERY_MCP_REPO_DONE'			=> 'Closed reports',
	'GALLERY_MCP_REPO_OPEN'			=> 'Open reports',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Report details',
	'GALLERY_MCP_UNAPPROVED'		=> 'Images awaiting approval',
	'GALLERY_MCP_APPROVED'			=> 'Approved images',
	'GALLERY_MCP_LOCKED'			=> 'Locked images',
	'GALLERY_MCP_VIEWALBUM'			=> 'View album',

	'IMAGE_REPORTED'				=> 'This image was reported.',
	'IMAGE_UNAPPROVED'				=> 'This image is awaiting approval.',

	'MODERATE_ALBUM'				=> 'Moderate album',

	'QUEUE_A_APPROVE'				=> 'Approve image',
	'QUEUE_A_APPROVE2'				=> 'Approve image?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Are you sure, you want to approve this image?',
	'QUEUE_A_DELETE'				=> 'Delete image',
	'QUEUE_A_DELETE2'				=> 'Delete image?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete this image?',
	'QUEUE_A_MOVE'					=> 'Move image',
	'QUEUE_A_UNAPPROVE'				=> 'Disapprove image',
	'QUEUE_A_UNAPPROVE2'			=> 'Disapprove image?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Are you sure, you want to disapprove this image?',
	'QUEUE_A_LOCK'					=> 'Lock image',
	'QUEUE_A_LOCK2'					=> 'Lock image?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Are you sure, you want to lock this image?',

	'QUEUE_STATUS_0'				=> 'This image is waiting for approval.',
	'QUEUE_STATUS_1'				=> 'This image is approved.',
	'QUEUE_STATUS_2'				=> 'This image is locked.',

	'QUEUES_A_APPROVE'				=> 'Approve images',
	'QUEUES_A_APPROVE2'				=> 'Approve images?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Are you sure, you want to approve these images?',
	'QUEUES_A_DELETE'				=> 'Delete images',
	'QUEUES_A_DELETE2'				=> 'Delete images?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete these images?',
	'QUEUES_A_MOVE'					=> 'Move images',
	'QUEUES_A_UNAPPROVE'			=> 'Disapprove images',
	'QUEUES_A_UNAPPROVE2'			=> 'Disapprove images?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Are you sure, you want to disapprove these images?',
	'QUEUES_A_LOCK'					=> 'Lock images',
	'QUEUES_A_LOCK2'				=> 'Lock images?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Are you sure, you want to lock these images?',

	'REPORT_A_CLOSE'				=> 'Close report',
	'REPORT_A_CLOSE2'				=> 'Close report?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Are you sure, you want to close this report?',
	'REPORT_A_DELETE'				=> 'Delete report',
	'REPORT_A_DELETE2'				=> 'Delete report?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete this report?',
	'REPORT_A_OPEN'					=> 'Open report',
	'REPORT_A_OPEN2'				=> 'Open report?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Are you sure, you want to open this report?',

	'REPORT_STATUS_1'				=> 'This report is needs to be reviewed.',
	'REPORT_STATUS_2'				=> 'This report is closed.',

	'REPORTS_A_CLOSE'				=> 'Close reports',
	'REPORTS_A_CLOSE2'				=> 'Close reports?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Are you sure, you want to close these reports?',
	'REPORTS_A_DELETE'				=> 'Delete reports',
	'REPORTS_A_DELETE2'				=> 'Delete reports?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete these reports?',
	'REPORTS_A_OPEN'				=> 'Open reports',
	'REPORTS_A_OPEN2'				=> 'Open reports?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Are you sure, you want to open these reports?',

	'REPORTER'						=> 'Reporting user',
	'REPORT_MOD'					=> 'Edited by',
	'REPORTER_AND_ALBUM'			=> 'Reporter & Album',
	'REPORTED_IMAGES'				=> 'Reported images',

	'UPLOADED_BY'					=> 'Uploaded by',

	'VIEW_ALBUM_IMAGES'				=> '%s images',
	'VIEW_ALBUM_IMAGE'				=> '1 image',

	'WAITING_APPROVED_IMAGE'		=> 'In total there is <span style="font-weight: bold;">%s</span> image approved..',
	'WAITING_APPROVED_IMAGES'		=> 'In total there are <span style="font-weight: bold;">%s</span> images approved.',
	'WAITING_APPROVED_NONE'			=> 'There are no approved images.',
	'WAITING_LOCKED_IMAGE'			=> 'In total there is <span style="font-weight: bold;">%s</span> image locked.',
	'WAITING_LOCKED_IMAGES'			=> 'In total there are <span style="font-weight: bold;">%s</span> images locked.',
	'WAITING_LOCKED_NONE'			=> 'There are no locked images.',
	'WAITING_REPORTED_IMAGE'		=> 'In total there is <span style="font-weight: bold;">%s</span> report to review.',
	'WAITING_REPORTED_IMAGES'		=> 'In total there are <span style="font-weight: bold;">%s</span> reports to review.',
	'WAITING_REPORTED_NONE'			=> 'There are no reports to revie.',
	'WAITING_UNAPPROVED_IMAGE'		=> 'In total there is <span style="font-weight: bold;">%s</span> image waiting for approval.',
	'WAITING_UNAPPROVED_IMAGES'		=> 'In total there are <span style="font-weight: bold;">%s</span> images waiting for approval.',
	'WAITING_UNAPPROVED_NONE'		=> 'There are no images waiting for approval.',
));

?>