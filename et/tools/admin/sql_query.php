<?php
/**
*
* @package Support Toolkit - SQL Query
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
	'ERROR_QUERY'					=> 'Viga sisaldav päring',

	'NO_RESULTS'					=> 'Tulemused puuduvad',
	'NO_SQL_QUERY'					=> 'Sa pead sisestama päringu.',

	'QUERY_RESULT'					=> 'Päringu tulemused',

	'SHOW_RESULTS'					=> 'Näita tulemusi',
	'SQL_QUERY'						=> 'Käivita SQL Päring',
	'SQL_QUERY_EXPLAIN'				=> 'Sisestage SQL-päring, mida soovite käivitada. Tööriist asendab "phpbb_" tabeli eesliitega.<br />Kui märkeruut "Kuva tulemusi" on märgitud, kuvab tööriist päringu tulemused <em>(kui üldse)</em>.',

	'SQL_QUERY_LEGEND'				=> 'SQL Päring',
	'SQL_QUERY_SUCCESS'				=> 'SQL päring on edukalt käivitatud.',
));
