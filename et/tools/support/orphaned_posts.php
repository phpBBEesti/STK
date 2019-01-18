<?php
/**
*
* @package Support Toolkit - Orphaned posts/topics
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
	'AUTHOR'					=> 'Autor',
	'FORUM_NAME'				=> 'Foorumi nimi',
	'NEW_TOPIC_ID'				=> 'Uue teema ID',
	'POST_ID'					=> 'Postituse ID',
	'TOPIC_ID'					=> 'Teema ID',

	'DELETE_EMPTY_TOPICS'		=> 'Kustutage kõik valitud teemad, klõpsates sellel nupul. (Seda toimingut ei saa tagasi võtta!)',
	'EMPTY_TOPICS'				=> 'Tühjad teemad',
	'EMPTY_TOPICS_EXPLAIN'		=> 'Need on teemad, millel ei ole seotud postitusi.',
	'NO_EMPTY_TOPICS'			=> 'Ühtegi tühja teemat ei leitud',
	'NO_TOPICS_SELECTED'		=> 'Valitud teemasid ei ole',

	'ORPHANED_POSTS'			=> 'Üksikuks jäänud postitused',
	'ORPHANED_POSTS_EXPLAIN'	=> 'Need on postitused, millel puuduvad seotud teemad. Määrake teemale uus ID, et postitada see teema.',
	'NO_ORPHANED_POSTS'			=> 'Ei leitud ühtegi üksikut postitust',
	'NO_TOPIC_IDS'				=> 'Teema ID-sid ei ole',
	'NONEXISTENT_TOPIC_IDS'		=> 'Järgmisi sihtteema ID-sid ei ole: %s.<br />Palun kontrollige määratud teema ID-sid.',
	'REASSIGN'					=> 'Määra uuesti',

	'DELETE_SHADOWS'			=> 'Kustutage kõik valitud varjatud teemad, klõpsates seda nuppu. (Ei saa tagasi võtta!)',
	'ORPHANED_SHADOWS'			=> 'Üksikuks jäänud varjatud teemad',
	'ORPHANED_SHADOWS_EXPLAIN'	=> 'Need on varjatud teemad, mille sihtteemat enam ei eksisteeri.',
	'NO_ORPHANED_SHADOWS'		=> 'Ühtegi üksikuks jäänud varjatud teemat ei leitud',

	'POSTS_DELETED'				=> '%d postitust kustutatud',
	'POSTS_REASSIGNED'			=> '%d postitust uuesti määratud',
	'TOPICS_DELETED'			=> '%d teemat kustutatud',
	'ORPHANED_FORUM_POSTS'			=> 'Postitusi ei ole foorumisse lisatud',
	'ORPHANED_FORUM_POSTS_EXPLAIN'	=> 'Need sõnumid ei ole konkreetse foorumi külge kinnitatud ja need ei ole seotud konkreetsete teemadega. Määrake uus teema ID, et postitada see teema.',
	'NO_FORUM_ORPHANED_POSTS'		=> 'Postitusi, mida foorumitele ei lisatud, ei leitud',
	'NO_POSTS_SELECTED'				=> 'Postitusi ei ole valitud',

	'ORPHANED_TOPICS'				=> 'Üksikuks jäänud teemad',
	'NO_ORPHANED_TOPICS'			=> 'Üksikuks jäänud teemasid ei leitud',
	'NEW_FORUM_ID'					=> 'Uue foorumi ID',
	'TOPICS_REASSIGNED'				=> '%d uuesti määratud teemat',
	'ORPHANED_TOPICS_EXPLAIN'		=> 'Need on teemad, millel ei seotud foorumit. Määrake uus foorumi ID, et teema foorumisse lisada.',
	'NO_FORUMS_IDS'					=> 'Foorumi ID-sid ei ole',
	'NONEXISTENT_FORUMS_IDS'		=> 'Järgmisi sihtfoorumite ID-sid ei ole: %s.<br />Palun kontrollige määratud foorumi ID-sid.',
));
