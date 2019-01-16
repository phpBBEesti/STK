<?php
/**
*
* @package Support Toolkit - Restore Delted Users
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
	'DAMAGED_POSTS'			=> 'Kahjustatud postitused',
	'DAMAGED_POSTS_EXPLAIN'	=> 'Järgmised postituste ID-d sisaldavad kasutajate andmeid, mis on taastamiseks liiga kahjustatud. Probleemi lahendamiseks ja abi saamiseks külastage <a href="https://www.phpbb.com/community/viewforum.php?f=46">tugifoorumeid</a>.',

	'NO_DELETED_USERS'	=> 'Ühtegi kustutatud kasutajat ei saa taastada',
	'NO_USER_SELECTED'	=> 'Ühtegi kasutajat ei ole valitud!',

	'RESTORE_DELETED_USERS'						=> 'Taasta kustutatud kasutajad',
	'RESTORE_DELETED_USERS_CONFLICT'			=> 'Taasta kustutatud kasutajad :: Konfliktid',
	'RESTORE_DELETED_USERS_CONFLICT_EXPLAIN'	=> 'See tööriist võimaldab teil taastada kasutajaid, kes on foorumist kustutatud, kuid nende postitused on ikka veel alles külaliste nime all.<br />Neile kasutajatele antakse parool, mis tuleb pärast tööriista käivitamist käsitsi lähtestada; see tööriist <b>ei</b> nende genereeritud paroolide listi.<br /><br />Viimase töö käigus leiti mõningaid kasutajanimed, mis on selles foorumis juba olemas. Palun andke nendele kasutajatele uus nimi.',
	'RESTORE_DELETED_USERS_EXPLAIN'				=> 'See tööriist võimaldab teil taastada kasutajaid, kes on foorumist kustutatud, kuid neil on ikka veel külaliste postitused.<br />Neile kasutajatele määratakse juhuslik parool, mis tuleb pärast tööriista käivitamist käsitsi lähtestada; see tööriist <b>ei</b> nende genereeritud paroolide listi.',

	'SELECT_USERS'	=> 'Valige kasutajad, keda taastada',

	'USER_RESTORED_SUCCESSFULLY'	=> 'Valitud kasutaja on edukalt taastatud.',
	'USERS_RESTORED_SUCCESSFULLY'	=> 'Valitud kasutajad on edukalt taastatud.',
));
