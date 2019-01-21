<?php
/**
*
* @package Support Toolkit - Test English language Sheer
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

/**
* DO NOT CHANGE
*/
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
	'TEST'				=> 'Üldine informatsioon',
	'DATABASE_INFO'		=> 'Andmebaasi server',
	'DBMS'				=> 'Andmebaasi tüüp',
	'PHP_INFO'			=> 'Teave php kohta',
	'PHP_VERSION'		=> 'PHP versioon',
	'STK_VERSION'		=> 'Toetustööriista versioon',
	'MBSTRING_LOADED'	=> 'Laaditakse funktsioone, mis töötavad mitmebaidiliste stringidega (PHP laiendus <strong>mbstring</strong>)',
	'MBSTRING_NOT_LOADED'				=> 'Mitmebaidiliste stringidega töötamise funktsioonid (PHP laiendus <strong>mbstring</strong>) ei ole laaditud',
	'ERROR_MBSTRING_NOT_LOADED_EXPLAIN'	=> 'mbstring ei ole vaikimisi installitud laienduste loendis. See tähendab, et algselt on see laiendus keelatud. Selle laienduse funktsioonide kasutamiseks peate lubama moodulil seadistada php. Tuleb tutvuda <a href="http://php.net/manual/ru/mbstring.configuration.php">PHP dokumentatsiooniga</a>.',
));
