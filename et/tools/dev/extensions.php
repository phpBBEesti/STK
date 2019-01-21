<?php
/**
*
* @package Support Toolkit - phpbb English language Sheer
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

/**
* DO NOT CHANGE
*/
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
	'EXTENSIONS'			=> 'Arendage laiendusi',
	'EXTENSIONS_EXPLAIN'	=> 'Töödeldava detaili pikendamise loomine. Pärast vajalike toimingute sooritamist luuakse minimaalne laiendusstruktuur. Täieliku laienduse loomiseks peate genereerima genereeritud failid ja lisama uusi, mis on vajalikud laiendusele.',
	'DEVELOPER'				=> 'Arendaja nimi (hüüdnimi)',
	'DEVELOPER_EXPLAIN'		=> 'See on laiendi nimi, mis kuvatakse AJP vahekaardil <strong>&laquo;Kohanda-->Laienduste haldur-->Details&raquo;</strong> koos teiste valikuliste parameetritega, mida saate allpool sisestada.',
	'AUTHOR_EXPLAIN'		=> 'Vendor nimi.<br />Kaustas ./ext/ kaust luuakse (kui see pole veel olemas) sama parameetriga. Kõik autori laiendused peavad olema selle kausta sees. Kaustade nimedes ei ole lubatud sidekriipsud ja alljooned. Nimi peaks olema vähemalt 3 tähemärki.',
	'EXT_EXPLAIN'			=> 'Mooduli nimi.<br />Kaustas ./ext/_vendor_name_/ kaust luuakse sama parameetriga. Kõik selle laiendi kaustad ja failid paigutatakse selle kausta sisse. Laienduse nimi peaks olema vähemalt 3 tähemärki.',
	'DISPLAY_NAME'			=> 'Kuvatav nimi',
	'DESCRIPTION'			=> 'Kirjeldus',
	'VERSION'				=> 'Laienduse versioon',
	'DESCRIPTION_EXPLAIN'	=> 'Laienduse lühikirjeldus.',
	'ROLE'					=> 'Arendaja roll',
	'ROLE_EXPLAIN'			=> 'Lühikirjeldus autori(te) panusest laienduse arengusse.',
	'HOMEPAGE'				=> 'Arendaja(te) veebileht',

	'EMPTY_VENDOR'			=> 'Puudub vendor nimi',
	'EMPTY_EXT_NAME'		=> 'Laienduse nime pole täpsustatud',
	'EMPTY_AUTHOR'			=> 'Puudub arendaja nimi (hüüdnimi)',
	'EMPTY_DISPLAY_NAME'	=> 'Puudub kuvatav nimi',
	'EMPTY_VERSION'			=> 'Versiooni pole täpsustatud',
	'VENDOR_NAME_TOO_SHORT'	=> 'Vendor nimi peab olema vähemalt 3 tähemärki pikk.',
	'EXT_NAME_TOO_SHORT'	=> 'Laienduse nimi peab olema vähemalt 3 tähemärki pikk.',

	'ARE_REQUIRED'			=> '<hr>* märgitus väljad on kohustuslikud.',
	'SUCCESS'				=> 'Laienduse esimene detail on edukalt loodud. Nüüd saate alustada laienduse tegelikku loomist.',
	'ALREADY_EXISTS'		=> 'See laiendus on juba olemas!',
));
