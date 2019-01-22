<?php
/**
*
* @package Support Toolkit - Profile List
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
	'ALL'					=> 'Kõik',

	'CLICK_TO_DELETE'		=> 'Kõikide valitud kasutajate kustutamiseks klõpsake seda nuppu. <em>(Ei saa tagasi võtta!!)</em>',

	'FILTER'				=> 'Filter',

	'LIMIT'					=> 'Limiit',

	'ONLY_NON_EMPTY'		=> 'Ainult tühi',
	'ORDER_BY'				=> 'Telli',

	'PROFILE_LIST'			=> 'Profiilide loend',
	'PROFILE_LIST_EXPLAIN'	=> 'See tööriist kuvab mitme kasutaja profiili andmed. Seda võib kasutada ka rämpsposti kontode tuvastamiseks.',

	'USERS_DELETE'				=> 'Kustuta valitud kasutajad',
	'USERS_DELETE_CONFIRM'		=> 'Kas olete kindel, et soovite valitud kasutajad kustutada? Kasutajate kustutamine selle tööriista abil <strong>eemaldab ka kõik postitused</strong>!',
	'USERS_DELETE_SUCCESSFULL'	=> 'Kõik valitud kasutajad kustutati edukalt!',
));
