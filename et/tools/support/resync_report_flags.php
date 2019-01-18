<?php
/**
 *
 * @package Support Toolkit - Resynchronise report flags
 * @copyright (c) 2011 phpBB Group
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
	'RESYNC_REPORT_FLAGS'			=> 'Sünkroonige raporti silte',
	'RESYNC_REPORT_FLAGS_CONFIRM'	=> 'See tööriist sünkroonib raporti silte kõigi postituste, teemade ja privaatsõnumite jaoks.',
	'RESYNC_REPORT_FLAGS_FINISHED'	=> 'Kõik raportite sildid on edukalt sünkroniseeritud!',
	'RESYNC_REPORT_FLAGS_NEXT'		=> 'Käimasolevate raporti siltide uuesti sünkroonimine. Palun ära katkesta seda protsessi.',
));
