<?php
/**
 *
 * @package Support Toolkit - Flash checker
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
	'FLASH_CHECKER'				=> 'Flash kontrollija',
	'FLASH_CHECKER_CONFIRM'		=> 'PhpBB 3.0.7-pl1 puhul leiti sisse ehitatud flach BBCode abil võimalik XSS-i haavatavus. See probleem lahendati phpBB 3.0.8. See tööriist kontrollib kõiki selle haavatava BBCode postitusi, privaatsõnumeid ja allkirju. Kui see leitakse, saate need postitused kiiresti tagasi, et veenduda, et teie foorum on kaitstud. Probleemi kohta lisateabe saamiseks vaadake <a href="http://www.phpbb.com/community/viewtopic.php?f=14&t=2111068">phpBB 3.0.8 reliisi teadaannet</a>.',
	'FLASH_CHECKER_FOUND'		=> 'Flachi kontrollija leidis teie foorumis mõningaid potentsiaalselt ohtlikke flashe. Klõpsa <a href="%s">siin</a>, et taastada BBkoodi-i sisaldavaid postitusi ja privaatsõnumeid.',
	'FLASH_CHECKER_NO_FOUND'	=> 'Potentsiaalselt ohtlikku flashi BBkoodis ei leitud.',
	'FLASH_CHECKER_POST'		=> 'Kui uuesti läbivaatamine näitas, et probleem püsib, minge <a href="%s"><b>siia</b></a> j muutke sõnumit.',
));
