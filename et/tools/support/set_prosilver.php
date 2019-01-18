<?php
/**
*
* @package Support Toolkit - Set prosilver as default style English language Sheer
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
	'SET_PROSILVER'						=> 'Prosilveri määramine vaikimisi stiilis',
	'SET_PROSILVER_CONFIRM'				=> 'Võimaldab määrata Prosilveri vaikimisi ja määrata selle ka kõigi kasutajate vaikimisi stiiliks.',
	'SET_PROSILVER_ALLREADY_ASSIGNED'	=> 'Prosilver on juba määratud vaikimisi stiiliks. Mingeid meetmeid ei võeta.',
	'SET_PROSILVER_ACTIVATED'			=> 'Prosilver edukalt aktiveeritud.',
	'SET_PROSILVER_RESET'				=> 'Prosilver määrati vaikimisi stiiliks.',
	'SET_PROSILVER_DOES_NOT_EXIST'		=> 'Prosilverit ei eksisteeri. Palun laadige Prosilveri <a href="https://www.phpbb.com/downloads/">3.2.1 täispakett</a> üles.',
));
