<?php
/**
*
* @package Support Toolkit - Anonymous group check
* @version $Id: sanitize_anonymous_user.php 155 2009-06-13 20:06:09Z marshalrusty $
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
	'ANONYMOUS_CLEANED'					=> 'Anonüümse kasutaja profiili andmed on edukalt sanitised.',
	'ANONYMOUS_CORRECT'					=> 'Anonüümne kasutaja on olemas ja on õigesti konfigureeritud.',
	'ANONYMOUS_CREATED'					=> 'Anonüümne kasutaja on edukalt loodud.',
	'ANONYMOUS_CREATION_FAILED'			=> 'Anonüümset kasutajat ei olnud võimalik uuesti luua. Palun küsige lisateavet phpBB.com tugifoorumist.',
	'ANONYMOUS_GROUPS_REMOVED'			=> 'Anonüümne kasutaja eemaldati edukalt kõigist juurdepääsugruppidest.',
	'ANONYMOUS_MISSING'					=> 'Anonüümne kasutaja puudub.',
	'ANONYMOUS_MISSING_CONFIRM'			=> 'Anonüümne kasutaja puudub teie andmebaasis. Seda kasutajat kasutatakse selleks, et võimaldada külalistel teie foorumit külastada. Kas soovite luua uue?',
	'ANONYMOUS_WRONG_DATA'				=> 'Anonüümse kasutaja profiili andmed on valed.',
	'ANONYMOUS_WRONG_DATA_CONFIRM'		=> 'Anonüümse kasutaja profiili andmed on osaliselt valed. Kas soovite seda parandada?',
	'ANONYMOUS_WRONG_GROUPS'			=> 'Anonüümne kasutaja kuulub valesti mitmesse kasutajagruppi.',
	'ANONYMOUS_WRONG_GROUPS_CONFIRM'	=> 'Anonüümne kasutaja kuulub valesti mitmesse kasutajagruppi. Kas soovid eemaldada anonüümse kasutaja kõigist gruppidest välja arvatud "KÜLALISED" grupist?',

	'REDIRECT_NEXT_STEP'				=> 'Teid suunatakse järgmise sammu juurde.',

	'SANITISE_ANONYMOUS_USER'			=> 'Sanitise Anonüümne kasutaja',
));
