<?php
/**
*
* @package Support Toolkit - phpbb English language Sheer
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
	'MANAGE_EXT'				=> 'Halda laiendus(t)e faile',
	'EXT_NAME'					=> 'Laienduse nimi',
	'EXTENSIONS_FILES'			=> 'Faili laiendused',
	'EXTENSIONS_FILES_EXPLAIN'	=> 'Siin saate vaadata, ümber nimetada, kustutada või luua uusi faile või kaustu laiendustele.',
	'EXPAND'					=> 'Laienda/Kahanda',
	'SAVE'						=> 'Salvesta',
	'SAVED'						=> 'Fail %s on edukalt salvestatud',
	'EDITED'					=> 'Fail %s on edukalt muudetud',
	'FAIL_CREATE_FILE'			=> 'Faili %s loomine ebaõnnestus',
	'FAIL_EXISTS'				=> 'Fail %s on juba olemas',
	'FAIL_CREATE_DIR'			=> 'Kausta %s loomine nurjus',
	'ADD_NEW'					=> 'Lisa uus fail',
	'PATH'						=> 'Kaust %s/',
	'PATH_EXPLAIN'				=> 'Kui kausta ei ole, luuakse see',
	'FILE'						=> 'Faili nimi',
	'CONTENT'					=> 'Kood',
	'EXT_PATH'					=> 'Kaustaga seotud tee ' . PHPBB_ROOT_PATH . 'ext/',
	'DELETE'					=> 'Kustuta',
	'RENAME'					=> 'Nimeta ümber',
	'DELETE_OK'					=> 'Fail %s on edukalt eemaldatud',
	'DELETE_FAIL'				=> 'Faili %s eemaldamine ebaõnnestus',
	'DELETE_FOLDER_OK'			=> 'Kaust %s on edukalt eemaldatud',
	'DELETE_FOLDER_FAIL'		=> 'Kausta %s kustutamine ebaõnnestus',
	'NEW_NAME'					=> 'Uus failinimi',
	'RENAME_OK'					=> 'Fail %1s on edukalt ümber nimetatud %2s',
	'RENAME_FAIL'				=> 'Faili %s ümbernimetamine nurjus',
	'RENAME_FOLDER_OK'			=> 'Kaust %1s edukalt ümber nimetatud to %2s',
	'RENAME_FOLDER_FAIL'		=> 'Kausta %s ümbernimetamine nurjus',

	'ENABLED'					=> 'Aktiivne',
	'DISABLED'					=> 'Keelatud',
	'NOT_INSTALLED'				=> 'Ei ole installeeritud',
	'NO_EXTENSIONS_FILES'		=> '<strong>Faile ei leitud</strong>.<br />Tõenäoliselt ei ole installeeritud ühtegi laiendust, ei puudunud faile ega kaustu.',
));
