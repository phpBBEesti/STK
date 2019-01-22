<?php
/**
 *
 * @package Support Toolkit - Database Backup English language Sheer
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
	'DB_BACKUP'					=> 'Andmebaasi varukoopia',
	'DB_BACKUP_EXPLAIN'			=> 'Siin saate varundada kõik oma phpBB-ga seotud andmed. Saad varukoopia salvestada kausta <samp>store/</samp>, allalaadida või vaadata. Sõltuvalt teie serveri konfiguratsioonist võib olla võimalik fail tihendada mitmes formaadis.',
	'DB_BACKUP_EXPLAIN_DUMPER'	=> 'Tulemuseks olev varukoopia on ühilduv vormingutarkvaraga <a href ="http://www.mysqldumper.net/" target="_blank" /><strong>MySQLDumper</strong></a>, mis toetab andmebaasi tabelid.',

	'SELECT_TABLE'		=> 'Tabelid',
	'MARK_ALL'			=> 'Vali kõik',
	'EXPAND'			=> 'Laienda',
	'COLLAPSE'			=> 'Ahenda',
	'UNMARK_ALL'		=> 'Tühista kõik',
	'GZIP'				=> 'Tihendamine',
	'SAVE'				=> 'Salvesta serverisse',
	'DOWNLOAD'			=> 'Lae alla',
	'BACKUP_SUCCESS'	=> 'Varukoopia on edukalt loodud.',
	'BACKUP_ACTION'		=> 'Meede',
	'BACKUP_TYPE'		=> 'Varunduse tüüp',
	'FULL'				=> 'Täielik',
	'STRUCTURE'			=> 'Ainult struktuur',
	'DATA'				=> 'Ainult andmed',
	'SCREEN'			=> 'Näita ekraanil'
));
