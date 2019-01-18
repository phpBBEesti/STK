<?php
/**
*
* @package Support Toolkit - Synchronization topics/posts English language Sheer
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
	'SYNCHRONIZATION_TOPIC_POSTS'			=> 'Teemade sünkroniseerimine',
	'SYNCHRONIZATION_TOPIC_POSTS_EXPLAIN'	=> 'See tööriist võimaldab teil tabelis <em>_topics</em> olevate tegelike postituste arvu taastada.',
	'TOPICS_NOT_SYNCHRONIZED'				=> 'Sünkroonimist vajavad teemad',
	'TOPIC_ID'								=> 'Teema ID',
	'TOPIC_TOTAL_POSTS'						=> 'Koguarv postitusi <br />tabelis %s',
	'TOPIC_TOTAL_POSTS_TITLE'				=> 'heakskiidetud + kinnitamata + kustutatud',
	'POSTS_TOTAL'							=> 'Postituste tegelik arv<br />tabelis %s',
	'FROM_TABLE'							=> '<br />tabelis %s',
	'NO_NOT_SYNCHRONIZED_TOPICS'			=> 'Ei leitud',
	'SYNCHRONIZING_TOPICS'					=> 'Sünkroonige',
	'TOPIC_LAST_POST_ID'					=> 'Viimase postituse ID',
	'MAX_POST_ID'							=> 'Viimane ID',
	'TOPICS_SINCRONIZED'					=> '%d sünkrooniti edukalt',
));
