<?php
/**
 *
 * @package Support Toolkit - Prune Avatars English language Sheer
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
	'PRUNE_AVATARS'				=> 'Avatari failide kontrollimine',
	'PRUNE_AVATARS_EXPLAIN'		=> 'See tööriist kontrollib täiendavate avatar-failide olemasolu (<em>faile avatari galeriidest ei kontrollita</ em>). Kui need failid on olemas, eemaldatakse need. Jätka?',
	'PRUNE_AVATARS_FINISHED'	=> 'Täiendavaid avatar-faile ei leitud.',
	'PRUNE_AVATARS_PROGRESS'	=> 'Käimasolevate mittevajalike failide kontrollimine. Ärge katkestage protsessi!<br />Järgmised failid on kustutatud:',
	'PRUNE_AVATARS_FAIL'		=> '<br />Järgmisi faile ei saanud eemaldada:',
));
