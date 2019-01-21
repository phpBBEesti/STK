<?php
/**
*
* @package Support Toolkit - Clear Extensions English language
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
	'CLEAR_EXTENSIONS'				=> 'Kontrollimise ja haldamise laiendused',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Siin saate hallata <strong>installitud</strong> laiendusi.',
	'EXT_PATH'						=> 'Kaustaga seotud tee ' . PHPBB_ROOT_PATH . 'ext/',
	'MISSING_PATH'					=> 'Puuduv kaust',
	'S_ACTIVE'						=> ' (aktiivne) ',
	'S_OFF'							=> ' (keelatud) ',
	'EXT_NAME'						=> 'Laienduse nimetus',
	'CLICK_TO_CLEAR'				=> 'Valitud installitud laienduste andmed kustutatakse andmebaasist ja laiendus on keelatud, kuid nende laiendustega seotud andmed, näiteks tabelid või konfiguratsiooniväärtused jäävad alles. Nende kustutamiseks kasutage <b>TUGITÖÖRIISTAD</b> -> Andmebaasi Puhastaja',
	'CLICK_TO_OFF'					=> 'Valitud laiendused keelatakse',
	'OFF_EXT'						=> 'Lülita välja',
	'CLEAR_EXT_SUCCESS'				=> 'Valitud laiendused eemaldati edukalt.',
	'CLICK_TO_ON'					=> 'Valitud laiendused on lubatud.',
	'ON_EXT'						=> 'Lülita sisse',
	'ON_EXT_SUCCESS'				=> 'Valitud laiendused on edukalt lubatud.',
	'OFF_EXT_SUCCESS'				=> 'Valitud laiendused on edukalt keelatud.',
	'NO_EXT_SELECTED'				=> 'Midagi ei ole valitud!',
	'EXT_DELETE'					=> 'Eemalda laiendus',
	'EXT_DELETE_CONFIRM'			=> 'Kas soovite kindlasti need laiendused kustutada?',
	'EXT_OFF'						=> 'Keela laiendused',
	'EXT_OFF_CONFIRM'				=> 'Kas olete kindel, et soovite need laiendused keelata?',
	'EXT_MISSING_PATH'				=> 'Laiendus «%s» ei ole ühilduv.<br />',
	'NO_COMPOSER'					=> 'Faili ei leitud: ' . PHPBB_ROOT_PATH . 'ext/%s/composer.json',
	'NO_EXTENSIONS_TITLE'			=> 'Laiendused',
	'NO_EXTENSIONS_TEXT'			=> 'Installitud laiendusi ei ole',
));
