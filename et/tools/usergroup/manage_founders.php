<?php
/**
*
* @package Support Toolkit - Make Founder
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
	'BOTH_FIELDS_FILLED'		=> 'Nii Kasutajanimi kui ka kasutaja ID väli ei pruugi olla täidetud.',

	'DEMOTE_FAILED'				=> 'Kõigi kasutajate asutajastaatust ei saanud eemaldada!',
	'DEMOTE_FOUNDERS'			=> 'Demote asutajad',
	'DEMOTE_SUCCESSFULL'		=> 'Kasutajate %d asutajastaatus on edukalt eemaldatud!',

	'FOUNDERS'					=> 'Kasutajad, kellel on asutaja staatus',

	'MAKE_FOUNDER'				=> 'Tee kasutaja foorumi asutajaks',
	'MAKE_FOUNDER_CONFIRM'		=> 'Kas olete kindel, et soovite muuta <a href="%1$s">%2$s</a> foorumi asutajaks? See annab võimaluse <a href="%1$s">%2$s</a> teie konto kustutada.',
	'MAKE_FOUNDER_FAILED'		=> 'Seda kasutajat ei saanud ülendada foorumi asutajaks',
	'MAKE_FOUNDER_SUCCESS'		=> 'Edukas! <a href="%1$s">%2$s</a> on foorumi asutaja.',
	'MANAGE_FOUNDERS'			=> 'Halda foorumi asutajaid',

	'NO_FOUNDERS'				=> 'Asutajaid ei leitud',

	'PROMOTE_FOUNDER'			=> 'Ülenda asutajaks',

	'USER_NAME_TO_FOUNDER'			=> 'Kasutajanimi asutaja loomiseks',
	'USER_NAME_TO_FOUNDER_EXPLAIN'	=> 'Sisestage kasutajanimi keda soovite märkida foorumi asutajaks.',
	'USER_ID_TO_FOUNDER'			=> 'Kasutaja ID keda muuta asutajaks',
	'USER_ID_TO_FOUNDER_EXPLAIN'	=> 'Sisestage kasutaja ID keda soovite märkida foorumi asutajaks.',
));
