<?php
/**
*
* @package Support Toolkit - User Options English language Sheer
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
	'USER_OPTIONS'			=> 'Kasutajavalikute muutmine',
	'USER_OPTIONS_EXPLAIN'	=> 'Siin saate muuta vaikimisi kõigi kasutajate seadeid või valitud kasutajarühmade jaoks.<br />Täpsemat teavet saate <a href="https://www.phpbb.com/support/docs/en/3.0/kb/article/changing-user-options-defaults-and-values/" target="_blank"><b>siit</b></a>.',
	'NOTHING'				=> 'Ärge muutke',
	'USER_OPTIONS_OK'		=> 'Kasutajate seaded on edukalt muudetud.',

	'viewimg'				=> 'Kuva pilte postitustes',
	'viewflash'				=> 'Kuva flash animatsioone',
	'viewsmilies'			=> 'Näidake emotikonid piltidena',
	'viewsigs'				=> 'Kuva allkirjad postitustes',
	'viewavatars'			=> 'Kuva avatarid postitustes',
	'viewcensors'			=> 'Luba sõna tsenseerimine',
	'attachsig'				=> 'Lisage vaikimisi allkiri',
	'bbcode'				=> 'Luba BBkood vaikimisi',
	'smilies'				=> 'Luba emotikonid vaikimisi',
	'sig_bbcode'			=> 'Luba BBkoodi allkirjas',
	'sig_smilies'			=> 'Luba emotikone allkirjas kujutistena',
	'sig_links'				=> 'Teisendage URL-id allkirjades linkideks',

	'ALL_GROUPS'			=> 'Kõik grupid',
));
