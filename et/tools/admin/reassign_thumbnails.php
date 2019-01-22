<?php
/**
 *
 * @package Support Toolkit - Reassign Thumbnails English language Sheer
 * @copyright (c) 2017 Sheer
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'REASSIGN_THUMBNAILS'			=> 'Taastage pisipildid',
	'REASSIGN_THUMBNAILS_CONFIRM'	=> 'Valiku korral &laquo;Loo thumbnails&nbsp; on keelatud, kuid manused on loodud, saate selliste manuste jaoks luua pisipilte.<br />Jätka?',
	'REASSIGN_THUMBNAILS_PROGRESS'	=> 'Pisipiltide loomine on käimas. Ärge katkestage seda protsessi!',
	'REASSIGN_THUMBNAILS_FINISHED'	=> 'Pisipildi loomine on lõpetatud.',
	'NO_THUMBNAILS_TO_REBUILD'		=> 'Puuduvad failid, mille jaoks pisipildid tuleb luua.',
	'NEED_TO_PROCESS' 				=> 'Pisipiltidega failid: ',
	'THUMB'							=> '<strong>pisipilt</strong>',
	'REBUILT'						=> 'Loo pisipildid',
	'NO_NEED_REBUILT'				=> '<strong style="color: #aaa;">Puudub pisipilt</strong>',
	'SOURCE_UNAVAILABLE'			=> 'Faili ei leitud: ',
	'NO_EXTENSIONS'					=> 'Grupi laienduste <strong>piltidele</ strong> ei ole faililaiendeid.',
	'NO_EXTENSIONS_GROUP'			=> 'Täiendav grupp <strong>Pildid</ strong> ei eksisteeri.',
	'IMAGES'						=> 'Pildid',
));
