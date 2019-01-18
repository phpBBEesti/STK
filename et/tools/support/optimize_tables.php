<?php
/**
*
* @package Support Toolkit - DB Optimizer English language Sheer
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
	'OPTIMIZE_TABLES'			=> 'DB tabelite optimeerimine',
	'OPTIMIZE_TABLES_EXPLAIN'	=> 'Otsige andmebaasi tabelitest, mis vajavad defragmentimist ja optimeerimist',
	'GO'						=> 'Optimeeri',
	'FRAGMENTED'				=> 'Killustunud',
	'CREATE_TIME'				=> 'Loodud',
	'UPDATE_TIME'				=> 'Viimati uuendatud',
	'CHECK_TIME'				=> 'Kinnitatud',
	'NOT_FOUND' 				=> 'Optimeerimist vajavaid tabeleid ei tuvastatud',
	'TABLE_NAME'				=> 'Tabel',
	'TABLE_SIZE'				=> 'Kasutatud',
	'ALL'						=> 'Kokku: ',
	'SUCESS'					=> 'Valitud tabelid on edukalt optimeeritud',
	'NOTHING'					=> 'Midagi ei ole valitud',
	'OPTIMIZER_MESSAGE'			=> '<b>Ettevaatust!</b> Tabelite suuruse ja tugeva killustumise tõttu võib optimeerimisprotsess võtta palju aega.<br />Ärge lahkuge sellelt lehelt ja oodake ära optimeerimise tulemus.',
));
