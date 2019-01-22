<?php
/**
*
* @package Support Toolkit - Reparse BBCode
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
// í ª ì î Ö
//

$lang = array_merge($lang, array(
	'REPARSE_ALL'				=> 'Kõik BBkoodi reparatsioonid',
	'REPARSE_ALL_EXPLAIN'		=> 'Kui kontrollitakse, taastab BBkoodi taandamine kogu foorumi sisu; vaikimisi taastab tööriist ainult postitused / privaatsed sõnumid / allkirjad, mis on eelnevalt phpBB poolt analüüsitud. Seda võimalust ignoreeritakse, kui eespool on määratud konkreetsed postitused, PM-id või foorumid. Pange tähele, et see tööriist võib teie andmebaasi kahjustada; seetõttu <strong>veenduge, et varundate oma andmebaasi enne jätkamist</strong>. Lisaks pange tähele, et see tööriist võib aega võtta.',
	'REPARSE_BBCODE'			=> 'BBkoodi reparatsioon',
	'REPARSE_BBCODE_COMPLETE'	=> 'BBkoodid on üle kontrollitud.',
	'REPARSE_BBCODE_PROGRESS'	=> 'Samm %1$d on lõpetatud. Liigume sammule %2$d hetkepärast...',
	'REPARSE_BBCODE_SWITCH_MODE'	=> array(
		1	=> 'Lõpetatud postituste reparatsioon, liikudes privaatsõnumitele.',
		2	=> 'Lõpetatud privaatsõnumite reparatsioon, liikudes edasi allkirjadele.',
	),
	'REPARSE_BBCODE_MODE'			=> array(
		0	=> 'Käimas postituste reparatsioon.',
		1	=> 'Käimas privaatsõnumite reparatsioon.',
		2	=> 'Käimas allkirjade reparatsioon.',
	),
	'REPARSE_IDS_INVALID'			=> 'Teie esitatud ID-d ei olnud kehtivad; veenduge, et postituste ID-d on eraldatud komadega (nt 1,2,3,5,8,13).',
	'REPARSE_IDS_EMPTY'				=> 'Te ei ole valinud ühtki reparatsiooni režiimi. Kui te ei tea, kuidas režiimi valida, märkige ruut <strong>Repareeri kõiki BBkoode</strong>. ',
	'REPARSE_POST_IDS'				=> 'Repareeri konkreetsed postitused',
	'REPARSE_POST_IDS_EXPLAIN'		=> 'Ainult teatud postituste tagasilükkamiseks määrake postituste ID-d mis oleks komadega eraldatud (nt 1,2,3,5,8,13).',
	'REPARSE_PM_IDS'				=> 'Repareei spetsiifilised PM-id',
	'REPARSE_PM_IDS_EXPLAIN'		=> 'Konkreetsete PM-ide repareerimiseks määrake PM-d mis oleks komadega eraldatud (nt 1,2,3,5,8,13).',
	'REPARSE_FORUMS'				=> 'Repareeri postitused konkreetsetest foorumitest',
	'REPARSE_FORUMS_EXPLAIN'		=> 'Mitme foorumi valimiseks kasutage mõnda või kõiki teie arvuti, hiire, klaviatuuri ja brauseri kombinatsiooni õiget kombinatsiooni.',
	'CREATE_BACKUP_TABLE'			=> 'Loo varukoopia',
	'CREATE_BACKUP_TABLE_EXPLAIN'	=> 'Luuakse andmebaasi tabel, kust saate tõrke või hädaseiskamise korral sõnumeid taastada.'
));
