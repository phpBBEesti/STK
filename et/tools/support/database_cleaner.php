<?php
/**
*
* @package Support Toolkit - Database Cleaner
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
	'ACP_EXTENSION_GROUPS'			=> 'Manuse laienduste grupid',
	'ACP_MODULES_SETTINGS'			=> 'Otsi täiendavaid mooduleid',

	'BOARD_DISABLE_REASON'			=> 'Foorum on praegu mõne andmebaasi hoolduse tõttu keelatud. Palun kontrollige mõne aja pärast uuesti!',
	'BOARD_DISABLE_SUCCESS'			=> 'Foorum on edukalt keelatud!',

	'COLUMNS'						=> 'Veerud',
	'CONFIG_SETTINGS'				=> 'Konfiguratsiooniseaded',
	'CONFIG_UPDATE_SUCCESS'			=> 'Konfiguratsiooniseaded on edukalt uuendatud!',
	'CONTINUE'						=> 'Jätka',

	'DATABASE_CLEANER'				=> 'Andmebaasi puhastaja',
	'DATABASE_CLEANER_BREAK'		=> 'Andmebaasi puhastaja katkestas töö!<br /><br />Vahemälu on puhastatud ja ligipääs foorumile taastatud.',
	'DATABASE_CLEANER_EXTRA'		=> 'Kõik teised on täiendavad elemendid, mida lisab muudatused.  <strong>Kui märkeruut on valitud, siis see eemaldatakse</strong>.',
	'DATABASE_CLEANER_MISSING'		=> 'Sellised punase taustaga väljad on puudu elementidest, mida tuleks lisada.  <strong>Kui märkeruut on valitud, lisatakse see</strong>.',
	'DATABASE_CLEANER_SUCCESS'		=> 'Andmebaasi puhastaja on edukalt lõpetanud kõik ülesanded!<br /><br />Veenduge kindlasti, et teie andmebaas on varundatud.',
	'DATABASE_CLEANER_WARNING'		=> 'See tööriist EI ANNA GARANTIID ja selle tööriista kasutajad peaksid ebaõnnestumise korral kogu oma andmebaasi varundama.<br /><br />Enne jätkamist veenduge, et teil on andmebaasi varukoopia!',
	'DATABASE_CLEANER_WELCOME'		=> 'Tere tulemast andmebaasi puhastusvahendisse!<br /><br />See tööriist oli mõeldud täiendavate veergude, ridade ja tabelite eemaldamiseks andmebaasist, mis ei ole phpBB3 vaikeseaded ning puuduvate andmebaasielementide lisamiseks.<br /><br />Kui olete valmis jätkama, klõpsake nuppu Jätka, et alustada andmebaasi puhastusvahendi kasutamist (pange tähele, et teie foorum on keelatud, kuni see toiming on lõpetatud).',
	'DATABASE_COLUMNS_SUCCESS'		=> 'Andmebaasi veerud on edukalt uuendatud!',
	'DATABASE_INDEXES_SUCCESS'		=> 'Indeksid värskendati edukalt!',
	'DATABASE_TABLES'				=> 'Andmebaasi tabelid',
	'DATABASE_TABLES_SUCCESS'		=> 'Andmebaasi tabeleid on edukalt uuendatud!',
	'DATABASE_ROLE_DATA_SKIP'		=> 'Süsteemirollide uuesti installeerimist eiratakse',
	'DATABASE_ROLE_DATA_SUCCESS'	=> 'phpBB süsteemi rollid taastati edukalt!',
	'DATABASE_ROLES_SUCCESS'		=> 'Rollid värskendati edukalt!',
	'DATAFILE_NOT_FOUND'			=> 'Toetustööriistakomplekt ei leidnud teie phpBB versiooni jaoks vajalikku andmefaili!',

	'EMPTY_PREFIX'					=> 'Andmebaasi eesliide puudub',
	'EMPTY_PREFIX_CONFIRM'			=> 'Andmebaasi puhastaja teeb oma andmebaasi tabelites muudatusi, kuid kui kasutate tühja tabeli eesliidet, võib see mõjutada mitte-phpBB tabeleid. Kas olete kindel, et soovite jätkata?',
	'EMPTY_PREFIX_EXPLAIN'			=> 'Andmebaasi puhastaja on kindlaks teinud, et te ei määra phpBB andmebaasi tabeleid. Selle tõttu kontrollib andmebaasi puhastaja andmebaasis <strong>kõiki</strong> tabeleid. Olge eriti ettevaatlik ja veenduge, et välistaksite valikust mitte-phpBB-tabelid. Kui seda ei tehta, kahjustab see andmebaasi tabeleid, mis ei ole osa phpBB-st.<br />Kui te ei ole kindel, kuidas edasi minna, otsige abi <a href="http://www.phpbb.com/community/viewforum.php?f=46">phpBB foorumist</a>.',
	'ERROR'							=> 'Viga',
	'EXTRA'							=> 'Extra',
	'EXTENSION_FILE_GROUPS'			=> 'Manuse laiendamine',
	'EXTENSION_GROUPS_SETTINGS'		=> 'Laiendamisgruppide seaded',
	'EXTENSION_GROUPS_SUCCESS'		=> 'Laiendusgrupid on edukalt taastatud algväärtustele',
	'EXTENSIONS_SUCCESS'			=> 'Laiendused on edukalt taastatud algväärtustele',

	'FINAL_STEP'					=> 'See on viimane samm.<br /><br />Nüüd lubame teie foorumi uuesti ja puhastame foorumi vahemälu.',

	'GO_TO_ACP'						=> ' --&raquo; mine juhtimismoodulisse ',

	'INSTRUCTIONS'					=> 'Juhendid',
	'INTRODUCTION'					=> 'Alusta uuesti',
	'INDEXES'						=> 'DB tabelite Indeksid',

	'MISSING'						=> 'Puudub',
	'MODULE_ADD'					=> 'Moodul lisatakse',
	'MODULE_ALREADY_EXIST'			=> 'Moodul on juba olemas',
	'MODULE_UPDATE_SUCCESS'			=> 'Moodulid on edukalt uuendatud!',

	'NEXT_STEP'						=> 'Järgmine samm',
	'NO_BOT_GROUP'					=> 'Boti ei saa taastada algväärtustele, kuna puudus Bot grupp.',
	'NO_PARENT'						=> 'Vanem-moodulit ei ole olemas.<br />Viga',

	'PERMISSION_SETTINGS'			=> 'Õiguste valikud',
	'PERMISSION_UPDATE_SUCCESS'		=> 'Õiguste seaded on edukalt uuendatud!',
	'PHPBB_VERSION_NOT_SUPPORTED'	=> 'Teie phpBB3 versiooni ei toetata (või puuduvad mõned tugitööriistakomplekti failid).<br />phpBB 3.0.0+ see peaks olema toetatud, kuid selle tööriista uuendamine pärast uue phpBB 3.0 versiooni vabastamist võib aega võtta.',

	'QUIT'							=> 'Välju',

	'RESET_ACP_MODULES_SKIP'		=> 'Lisamoodulite vahelejätmine',
	'RESET_ACP_MODULE_SUCCESS'		=> 'Täiendavate moodulite kontrollimine on lõpetatud',
	'RESET_BOTS'					=> 'Lähtesta Botid',
	'RESET_BOTS_EXPLAIN'			=> 'Kas soovid lähtestada botide nimekirja vaikimisi phpBB3 botide nimekirjaga? Kõik olemasolevad botid eemaldatakse ja asendatakse vaikeseadetega.',
	'RESET_BOTS_SKIP'				=> 'Vea lähtestamine on vahele jäetud',
	'RESET_BOT_SUCCESS'				=> 'Botid on edukalt lähtestatud algseadetele!',
	'RESET_MODULES'					=> 'Lähtesta moodulid algseadetele',
	'RESET_MODULES_EXPLAIN'			=> 'Kas soovite mooduleid lähtestada phpBB3 vaikemoodulitele? Kõik olemasolevad moodulid eemaldatakse ja asendatakse vaikimisi.',
	'RESET_MODULES_SKIP'			=> 'Mooduli lähtestamine on vahele jäetud',
	'RESET_MODULE_SUCCESS'			=> 'Moodulid on edukalt lähtestaud algseadetele!',
	'RESET_REPORT_REASONS'			=> 'Lähtesta raporti põhjused',
	'RESET_REPORT_REASONS_EXPLAIN'	=> 'Kas soovite raporti põhjused lähtestada vaikimisi seadetega? See eemaldab kõik lisatud aruande põhjused!',
	'RESET_REPORT_REASONS_SKIP'		=> 'Raporti põhjuseid ei ole lähtestatud',
	'RESET_REPORT_REASONS_SUCCESS'	=> 'Raporti põhjused on edukalt lähtestatud algseadetele!',
	'RESET_ROLE_DATA'				=> 'Lähtesta rolliandmed',
	'RESET_ROLE_DATA_EXPLAIN'		=> 'See samm taastab phpBB süsteemi rollid tagasi oma algsesse olekusse, soovitame seda käivitada, kui tegite eelmises sammus muudatusi.',
	'ROLE_SETTINGS'					=> 'Rolliseaded',
	'ROWS'							=> 'Read',

	'SECTION_NOT_CHANGED_TITLE'		=> array(
		'tables'			=> 'Tabeleid ei muudetud',
		'indexes'			=> 'Indeksid ei muutunud',
		'columns'			=> 'Veerud ei muutunud',
		'config'			=> 'Konfiguratsioon ei muutunud',
		'extension_groups'	=> 'Laienduste grupid ei muudetud',
		'extensions'		=> 'Laiendusi ei muudetud',
		'permissions'		=> 'Õiguseid ei muudetud',
		'groups'			=> 'Gruppe ei muudetud',
		'roles'				=> 'Rolle ei muudetud',
		'final_step'		=> 'Viimane samm',
		'acp_modules'		=> 'Otsige täiendavaid või puuduvaid mooduleid',
	),
	'SECTION_NOT_CHANGED_EXPLAIN'	=> array(
		'tables'			=> 'Andmebaasi tabeleid ei ole muudetud',
		'indexes'			=> 'Indeksitel ei ole uusi / puuduvaid väärtusi',
		'columns'			=> 'Andmebaasi veerge ei ole muudetud',
		'config'			=> 'Konfiguratsioonitabelil ei ole uusi / puuduvaid väärtusi',
		'extension_groups'	=> 'Laiendusgruppide tabelil ei ole uusi / puuduvaid väärtusi',
		'extensions'		=> 'Vaikimisi laiendused pole muutunud',
		'permissions'		=> 'Õiguste tabelites muudatusi ei toimunud',
		'groups'			=> 'PhpBB süsteemigruppides muudatusi ei toimunud',
		'roles'				=> 'Ühtegi rolli ei lisatud ega eemaldatud',
		'final_step'		=> 'See viimane samm kustutab vahemälu ja lubab uuesti foorumi.',
		'acp_modules'		=> 'Ei leitud ühtegi täiendavat või puuduvat moodulit',
	),
	'SKIP_AND_GO'					=> 'Jäta vahele ja mine',
	'SKIP_TO'						=> 'Jäta vahele',
	'SKIP_EXPLAIN'					=> 'Selle sammu toiminguid saate vahele jätta ja minna allpool olevast loendist valitud sammu juurde:',
	'SUCCESS'						=> 'Edukas',
	'SYSTEM_GROUPS'					=> 'Süsteemigruppide kontrollimine',
	'SYSTEM_GROUP_UPDATE_SUCCESS'	=> 'Süsteemigrupid on edukalt lähtestatud',

	'TYPE'							=> 'Tüüp',

	'UNSTABLE_DEBUG_ONLY'			=> 'Andmebaasi puhastaja võib töötada ainult ebastabiilse phpBB versiooniga <em>(dev, a, b, RC)</em>, kui "DEBUG" on lubatud phpBB konfiguratsioonifaili kaudu.',
	'UNDEFINED'						=> 'määratlemata',

	'ARCHIVES'				=> 'Arhiivid',
	'DOCUMENTS'				=> 'Dokumendid',
	'DOWNLOADABLE_FILES'	=> 'Allalaaditavad failid',
	'FLASH_FILES'			=> 'Flash failid',
	'IMAGES'				=> 'Pildid',
	'PLAIN_TEXT'			=> 'Lihtteksti failid',
	'QUICKTIME_MEDIA'		=> 'Quicktime failid',
	'REAL_MEDIA'			=> 'RealMedia failid',
	'WINDOWS_MEDIA'			=> 'Windows Media failid',
));
