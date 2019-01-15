<?php
/**
*
* @package Support Toolkit - Change Password
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
	'CHANGE_PASSWORD'			=> 'Muuda salasõna',
	'CHANGE_PASSWORD_EXPLAIN'	=> 'Muutke kasutaja parooli.<br /><strong>Võite sisestada kas kasutajanime või kasutaja ID, mitte mõlemat.</strong>',
	'CHANGE_PASSWORD_SUCCESS'	=> '<a href="%s">%s</a> parool on edukalt muudetud.',

	'FIELDS_NOT_FILLED'			=> 'Üks väli tuleb täita.',
	'FIELDS_BOTH_FILLED'		=> 'Täidetakse ainult üks väli.',

	'PASSWORD_CONFIRM'			=> 'Sisesta parool uuesti',

	'USERNAME_NAME'				=> 'Kasutajanimi',
	'USERNAME_NAME_EXPLAIN'		=> 'Sisestage kasutajanimi, kelle parooli soovite muuta.',
	'USERNAMEID'				=> 'Kasutaja ID',
	'USERNAMEID_EXPLAIN'		=> 'Sisestage kasutaja ID, kelle parooli soovite muuta.',
));
