<?php
/**
*
* @package phpBB Extension - Download System
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_DM_EDS'						=> 'Download Systeem',
	'ACP_MANAGE_CATEGORIES'				=> 'Beheer categorie&euml;n',
	'ACP_MANAGE_CONFIG'					=> 'Configuratie',
	'ACP_MANAGE_DOWNLOADS'				=> 'Beheer Downloads',
	'LOG_DOWNLOAD_ADD'					=> '<strong>Voegde een nieuwe download toe</strong><br>» %1$s',
	'LOG_DOWNLOAD_UPDATED'				=> '<strong>Update download</strong><br>» %1$s',
	'LOG_DOWNLOAD_DELETED'				=> '<strong>Verwijderde download</strong><br>» %1$s',
	'LOG_CATEGORY_ADD'					=> '<strong>Voegde nieuwe download categorie toe</strong><br>» %1$s',
	'LOG_CATEGORY_UPDATED'				=> '<strong>Update download categorie</strong><br>» %1$s',
	'LOG_CATEGORY_DELETED'				=> '<strong>Verwijderde download categorie</strong><br>» %1$s',
	'LOG_CONFIG_UPDATED'				=> '<strong>Update download configuratie</strong>',
));
