<?php
/**
*
* @package Support Toolkit - User Options English language Sheer
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
	'USER_COPY_PERM'					=> 'Kopeeri kasutaja/te õigused',
	'USER_COPY_PERM_EXPLAIN'			=> 'Pange tähele, et see kopeeritakse kõikidele õigustele: kasutajad, moderaatorid, administraatorid.',
	'COPY_USER_PERMISSIONS_EXPLAIN'		=> 'Valige kasutaja kelle õiguseid soovid kopeerida',
	'COPY_USER_PERMISSIONS_OK'			=> 'Õigused edukalt kopeeritud.',
	'USERS_IDENTICAL'					=> 'Õiguseid ei ole võimalik edastada.',
	'FIND_FROM_USER'					=> 'Kasutajanimi, mille õigused kopeeritakse',
	'ID_FROM'							=> 'Kasutaja ID, mille õigused kopeeritakse',
	'FIND_TO_USER'						=> 'Kasutajanimi, millele soovite anda õigused',
	'ID_TO'								=> 'Kasutaja ID, millele soovite anda õigused',
));
