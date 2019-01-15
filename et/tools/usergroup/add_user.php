<?php
/**
*
* @package Support Toolkit - Add User
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
	'ADD_USER'				=> 'Lisa kasutaja',
	'ADD_USER_GROUP'		=> 'Lisa kasutaja gruppidesse',

	'DEFAULT_GROUP'			=> 'Vaikimis grupp',
	'DEFAULT_GROUP_EXPLAIN'	=> 'Vaikimis grupp sellel kasutajal.',

	'GROUP_LEADER'			=> 'Grupi liider',
	'GROUP_LEADER_EXPLAIN'	=> 'Teeb kasutaja valitud grupi liidriks.',

	'USER_ADDED'			=> 'Kasutaja edukalt loodud!',
	'USER_GROUPS'			=> 'Kasutajagrupid',
	'USER_GROUPS_EXPLAIN'	=> 'Teeb kasutaja valitud grupi liikmeks.',
	'EMAIL_ADDRESS'			=> 'E-posti aadress',
	'LANGUAGE'				=> 'Keel',
	'TIMEZONE'					=> 'Ajatsoon',
	'TOO_SHORT_USERNAME'		=> 'Sisestatud kasutajanimi on liiga lühike.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'Sisestatud parool on liiga lühike.',
	'TOO_SHORT_PASSWORD_CONFIRM'=> 'Sisestatud parooli kinnitus on liiga lühike.',
	'TOO_SHORT_EMAIL'			=> 'Sisestatud e-posti aadress on liiga lühike.',
	'EMAIL_INVALID_EMAIL'		=> 'Sisestatud e-posti aadress on vale.',
	'NEW_PASSWORD_ERROR'		=> 'Sisestatud paroolid ei ühildu.',
	'DOMAIN_NO_MX_RECORD'	=> 'Sisestatud e-posti domeenil ei ole DNS-is kehtivat e-posti kirjet (MX-kirje).',
));
