<?php
/**
*
* @package Support Toolkit - Fix Left/Right ID's
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
	'FIX_LEFT_RIGHT_IDS'			=> 'Paranda Vasak/Parem ID-d',
	'FIX_LEFT_RIGHT_IDS_CONFIRM'	=> 'Kas olete kindel, et soovid määrata vasak- ja parempoolsed ID-d?<br /><br /><strong>Enne selle tööriista käivitamist varundage oma andmebaas!</strong>',

	'LEFT_RIGHT_IDS_FIX_SUCCESS'	=> 'Vasak / parem ID on edukalt kinnitatud.',
	'LEFT_RIGHT_IDS_NO_CHANGE'		=> 'Tööriist on läbinud kõik vasak- ja parempoolsed ID-d ning kõik read on juba õiged, nii et muudatusi ei tehtud.',
));
