<?php
/**
*
* @package Support Toolkit - Delete Usetrs English language Sheer
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
	'DELETE_USERS'				=> 'Kasutajate eemaldamine',
	'DELETE_USERS_EXPLAIN'		=> 'Siin saate kustutada kasutajaid, kes ei ole sisestanud ühtegi postitust ja ei ole loginud foorumisse valitud perioodil.',
	'INACTIVE_PERIOD'			=> 'Mitteaktiivsuse periood',
	'DELETE_USERS_SUCESS'		=> 'Kasutajad on edukalt eemaldatud.',
	'DELETE_USERS_NOT_FOUND'	=> 'Kasutajaid keda soovid eemaldada ei leitud.',
	'DELETE_USERS_CONFIRM'		=> 'Kas olete kindel, et soovite need kasutajad kustutada?<br />(<strong>Tähelepanu!</strong>Suure hulga kasutajate eemaldamine võib võtta kaua aega. Ärge lahkuge sellelt leheküljelt ega sulgege seda enne, kui operatsioon on lõpetatud).',
));
