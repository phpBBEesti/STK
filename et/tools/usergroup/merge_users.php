<?php
/**
*
* @package Support Toolkit - Merge Users
* @version $Id$
* @author Chris Smith <toonarmy@phpbb.com> (http://www.cs278.org/)
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
	'MERGE_USERS'						=> 'Kasutajate ühendamine',
	'MERGE_USERS_EXPLAIN'				=> 'Tööriist kasutajakonto teisaldamiseks teisele kontole; kasutaja seaded ja grupiliikmed kopeeritakse. Sinna hulka kuuluvad kasutaja õigused, manused, keelud, järjehoidjad, mustandid, foorumi / teema jälgimine, foorumi / teema vaatamine, logi kirjed, küsitlushääletused, postitused, privaatsõnumid, raportid, teemad, hoiatused ning sõbrad ja vaenlased.<br /><strong>Võite sisestada kas kasutajanime või kasutaja ID, mitte mõlemat.</strong>',

	'MERGE_USERS_BOTH_FOUNDERS'	=> 'Asutajat ei saa ühendada kasutajaga kellel ei ole asutaja staatust.',
	'MERGE_USERS_BOTH_IGNORE'	=> 'Sa ei saa Boti tavalise kasutajaga ühendada.',

	'MERGE_USERS_MERGED'		=> 'Kasutajate ühendamine õnnestus edukalt.',

	'MERGE_USERS_REMOVE_SOURCE'			=> 'Eemaldage algne kasutaja',
	'MERGE_USERS_REMOVE_SOURCE_EXPLAIN'	=> 'Kui see on kontrollitud, kustutab see tööriist algse kasutaja foorumist.',

	'MERGE_USERS_SAME_USERS'	=> 'Algne kasutaja ja sihtkasutaja peavad erinema.',

	'MERGE_USERS_USER_SOURCE_NAME'			=> 'Algne kasutaja. (Kasutajanimi)',
	'MERGE_USERS_USER_SOURCE_ID'			=> 'Algne kasutaja. (Kasutaja ID)',
	'MERGE_USERS_USER_SOURCE_NAME_EXPLAIN'	=> 'Postitusi, privaatsõnumeid, õiguseid, hoiatusi jms liigutatakse kasutajalt sihtkasutajale, grupid ja kasutaja seaded kopeeritakse.',

	'MERGE_USERS_USER_TARGET_NAME'	=> 'Sihtkasutaja. (Kasutajanimi)',
	'MERGE_USERS_USER_TARGET_ID'	=> 'Sihtkasutaja. (Kasutaja ID)',

	'NO_SOURCE_USER'		=> 'Taotletud algset kasutajat ei ole olemas',
	'NO_TARGET_USER'		=> 'Taotletud sihtkasutajat ei eksisteeri',

	'BOTH_SOURCE_USER'		=> 'Täitke ainult üks allikaväli.',
	'BOTH_TARGET_USER'		=> 'Täitke ainult üks sihtmärk.',
));
