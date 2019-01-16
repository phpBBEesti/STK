<?php
/**
 *
 * @package Support Toolkit - Resynchronise Registered users groups
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
	'RESYNC_USER_GROUPS'			=> 'Kasutajagruppide sünkroonimine',
	'RESYNC_USER_GROUPS_EXPLAIN'	=> 'See tööriist on mõeldud kontrollimaks, kas kõik kasutajad on õigetes vaikegruppides <em>(Registreeritud kasutajad, Registreeritud COPPA kasutajad ja Vastregistreerunud kasutajad)</em>.',
	'RESYNC_USER_GROUPS_NO_RUN'		=> 'Kõik grupid tunduvad olevat ajakohased!',
	'RESYNC_USER_GROUPS_SETTINGS'	=> 'Sünkroniseerimise suvandid',
	'RUN_BOTH_FINISHED'				=> 'Kõik kasutajagrupid on edukalt sünkroonitud!',
	'RUN_RNR'						=> 'Vastregistreeritud kasutajate sünkroonimine',
	'RUN_RNR_EXPLAIN'				=> 'See värskendab gruppi "Vastregistreeritud kasutajad" nii, et see sisaldab kõiki kasutajaid, kes vastavad AJPs määratletud kriteeriumitele.',
	'RUN_RNR_FINISHED'				=> 'Vastregistreeritud kasutajate grupp sünkrooniti edukalt!',
	'RUN_RNR_NOT_FINISHED'			=> 'Vastregistreeritud kasutajate grupp on peaaegu sünkroonitud. Palun ärge katkestage seda protsessi.',
	'RUN_RR'						=> 'Registreeritud kasutajate sünkroonimine',
	'RUN_RR_EXPLAIN'				=> 'Tööriist on kindlaks teinud, et mitte kõik teie foorumis olevad kasutajad ei kuulu "Registreeritud <em>(COPPA)</em> kasutajad" gruppi. Kas soovite neid gruppe ümber sünkroniseerida?<br /><strong>Märge:</strong> Kui teie foorumil on COPPA funktsioon lubatud ei ole kasutaja sünnikuupäeva sisestanud!',
	'RUN_RR_FINISHED'				=> 'Kasutajad on edukalt sünkroniseeritud!',

	'SELECT_RUN_GROUP'	=> 'Valige vähemalt üks grupitüüp, mis sünkroonitakse uuesti.',
));
