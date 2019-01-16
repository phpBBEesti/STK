<?php
/**
*
* @package Support Toolkit - Auto Cookies
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
	'AUTO_COOKIES'				=> 'Automaatsed küpsised',
	'AUTO_COOKIES_EXPLAIN'		=> 'See tööriist võimaldab teil muuta oma foorumi küpsiste seadeid. Soovitatavad sätted peaksid enamikul juhtudel olema õiged. Kui te ei ole kindel õigete seadistuste osas, palume enne fikseeritud seadete muutmist abi foorumis juhendada, sest valed seaded võivad takistada teil oma foorumisse sisse logida.',

	'COOKIE_SETTINGS_UPDATED'	=> 'Küpsiste seaded edukalt uuendatud.',
	'COOKIE_DOMAIN'				=> 'Küpsise domeen',
	'COOKIE_NAME'				=> 'Küpsise nimi',
	'COOKIE_PATH'				=> 'Küpsise tee',
	'COOKIE_SECURE'				=> 'Küpsise turvalisus',
	'COOKIE_SECURE_EXPLAIN'		=> 'Kui teie server töötab SSL-i kaudu, siis seadistage see. Selle lubamine ja mitte SSL-i kasutamine põhjustab serveri vigasid ümbersuunamise ajal.',
));
