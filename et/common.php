<?php
/**
*
* @package Support Toolkit
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
	'BACK_TOOL'							=> 'Tagasi viimase tööriista juurde',
	'BOARD_FOUNDER_ONLY'				=> 'Toetustööriistakomplektile võivad juurde pääseda ainult foorumi asutajad.',

	'CAT_ADMIN'							=> 'Admini tööriistad',
	'CAT_ADMIN_EXPLAIN'					=> 'Administraator võib administraatorivahendeid kasutada oma foorumi konkreetsete aspektide haldamiseks ja ühiste probleemide lahendamiseks.',
	'CAT_DEV'							=> 'Arendaja tööriistad',
	'CAT_DEV_EXPLAIN'					=> 'Arendustööriistasid võivad tavapäraste ülesannete täitmiseks kasutada phpBB Arendajad ja Laienduste loojad.',
	'CAT_ERK'							=> 'Hädaolukorra paranduskomplekt',
	'CAT_ERK_EXPLAIN'					=> 'Hädaolukorra parandamise komplekt on eraldi pakett STK-st, mis on loodud selleks, et käivitada mõned kontrollid, mis võivad tuvastada probleeme teie phpBB installis, mis võib takistada teie foorumi töötamist. ERK käivitamiseks vajuta <a href="%s">siia</a>.',
	'CAT_MAIN'							=> 'Main',
	'CAT_MAIN_EXPLAIN'					=> 'Tugitööriistakomplekti (STK) võib kasutada tavapäraste probleemide lahendamiseks phpBB 3.2.x töökorras. See toimib teise Administraatori juhtpaneelina, andes administraatorile tööriistade kogumi, et lahendada tavapäraseid probleeme, mis võivad takistada phpBB3 installi nõuetekohast toimimist.',
	'CAT_SUPPORT'						=> 'Tugitööriistad',
	'CAT_SUPPORT_EXPLAIN'				=> 'Toetustööriistu võib kasutada phpBB 3.2.x installimise taastamiseks, mis ei tööta enam korralikult.',
	'CAT_USERGROUP'						=> 'Kasutaja/Grupi Tööriistad',
	'CAT_USERGROUP_EXPLAIN'				=> 'Kasutajate ja grupitööriistade abil saab kasutajaid ja gruppe hallata viisil, mis ei ole saadaval phpBB 3.2.x installis.',
	'CONFIG_NOT_FOUND'					=> 'STK konfiguratsioonifaili ei saa laadida. Kontrollige installimist',

	'DOWNLOAD_PASS'						=> 'Lae alla paroolifail.',
	'STK_PASSWORD'						=> 'Parool',

	'EMERGENCY_LOGIN_NAME'				=> 'STK hädaolukorra logimine',
	'ERK'								=> 'Hädaparanduskomplekt',

	'FAIL'								=> 'Fail',
	'FAIL_REMOVE_PASSWD'				=> 'Aegunud paroolifaili ei saanud eemaldada. Palun eemaldage see fail käsitsi!',

	'GEN_PASS_FAILED'					=> 'Tugi tööriistakomplekt ei suutnud luua uut parooli. Palun proovi uuesti.',
	'GEN_PASS_FILE'						=> 'Loo paroolifail.',
	'GEN_PASS_FILE_EXPLAIN'				=> 'Kui te ei saa phpBB-sse sisse logida, saate kasutada tugitööriistakomplekti sisemist autentimismeetodit. Selle meetodi kasutamiseks peate <a href="%s"><strong>looma</strong></a> uue paroolifaili.',

	'INCORRECT_CLASS'					=> 'Vale klass: stk/tools/%1$s.%2$s',
	'INCORRECT_PASSWORD'				=> 'Parool on vale',
	'INCORRECT_PHPBB_VERSION'			=> 'Teie phpBB versioon pole selle tööriistaga ühilduv. Selle tööriista käivitamiseks peab teie phpBB versioon olema %1$s või hilisem.',

	'LOGIN_STK_SUCCESS'					=> 'Olete edukalt autentinud ja suunatakse nüüd tugitööriistakomplekti.',

	'NOTICE'							=> 'Teade',
	'NO_VERSION_FILE'					=> 'Tugi tööriistakomplekt (STK) ei suutnud määrata uusimat versiooni. Palun külastage phpBB.com <a href="http://phpbb.com/support/stk">tugitööriistakomplekti osa</a> ja veenduge, et kasutate viimast versiooni enne STK kasutamist.',

	'REQUEST_PHPBB_VERSION'				=> 'Määrake phpBB versioon',
	'REQUEST_PHPBB_VERSION_EXPLAIN'		=> 'Tugi tööriistakomplekt ei suutnud õigesti tuvastada, millist phpBB versiooni te kasutate, palun valige selles vormis sobiv versioon enne jätkamist.<br />See näitab, et teie foorumi failid ja foorumi versioon on vastuolus, tõenäoliselt ebatäieliku värskenduse tõttu. Selle probleemi lahendamiseks ja abi saamiseks külastage <a href="https://www.phpbb.com/community/viewforum.php?f=46">tugifoorumeid</a>.',

	'PASS_GENERATED'					=> 'Teie STK parooli fail on edukalt loodud!<br/>Teie jaoks loodud parool on: <em>%1$s</em><br />See parool aegub: <span style="text-decoration: underline;">%2$s</span>. Pärast seda peate looma uue paroolifaili, et jätkata hädaolukorra sisselogimise funktsiooni kasutamist!<br /><br />Faili allalaadimiseks kasutage järgmist nuppu. Kui olete selle faili alla laadinud, peate selle üleslaadima oma serverisse kataloogi "stk"',
	'PASS_GENERATED_REDIRECT'			=> 'Kui olete paroolifaili õigesse asukohta üles laadinud, klõpsake sisselogimise lehele naasmiseks <a href="%s">siin</a>.',
	'PLUGIN_INCOMPATIBLE_PHPBB_VERSION'	=> 'See tööriist ei ühildu teie kasutatava phpBB versiooniga',
	'PROCEED_TO_STK'					=> '%sJätkake tugitööriistakomplekti%s',

	'STK_FOUNDER_ONLY'					=> 'Enne tugitööriistakomplekti kasutamist peate ennast ise autentima.',
	'STK_LOGIN'							=> 'Tugitööriista logimine',
	'STK_LOGIN_WAIT'					=> 'Enne sisselogimise uuesti proovimist peate ootama kolm sekundit. Palun proovi uuesti.',
	'STK_LOGOUT'						=> 'STK Välja logimine',
	'STK_LOGOUT_SUCCESS'				=> 'Olete edukalt välja loginud tugivahenditest.',
	'STK_NON_LOGIN'						=> 'STK-le juurdepääsuks logige sisse.',
	'STK_OUTDATED'						=> 'Teie abivahendite paigaldus näib olevat aegunud. Viimane saadaval olev versioon on <strong style="color: #008000;">%1$s</strong>, kui teie installitud versioon on <strong style="color: #FF0000;">%2$s</strong>.<br /><br />Tänu selle tööriista suurele mõjule teie phpBB installimisele on see kuni värskenduse teostamiseni keelatud. Soovitame tungivalt hoida kõik teie serveris töötavad tarkvarad ajakohasena. Lisateabe saamiseks viimase värskenduse kohta vaadake <a href="%3$s">väljaande teemat</a>.<br /><br /><em>Kui näete pärast tugitööriistakomplekti värskendamist seda teadet, klõpsake <a href="%4$s">here</a>et tühjendada versioonikontrolli vahemälu.</em>',
	'SUPPORT_TOOL_KIT'					=> 'Tugitööriistakomplekt',
	'SUPPORT_TOOL_KIT_INDEX'			=> 'Tugitööriistakomplekti avaleht',
	'SUPPORT_TOOL_KIT_PASSWORD'			=> 'Parool',
	'SUPPORT_TOOL_KIT_PASSWORD_EXPLAIN'	=> 'Kuna te ei ole phpBB3-sse sisse logitud, peate kinnitama, et olete foorumi asutaja, sisestades tugivahendi parooli.<br /><br /><strong>Küpsised peavad olema lubatud teie brauseri poolt või vastasel juhul te ei saa end sisse logida.</strong>',

	'TOOL_INCLUTION_NOT_FOUND'			=> 'See tööriist püüab laadida faili (%1$s) mida ei eksisteeri.',
	'TOOL_NAME'							=> 'Tööriista nimetus',
	'TOOL_NOT_AVAILABLE'				=> 'Taotletud tööriist pole saadaval.',

	'USING_STK_LOGIN'					=> 'Olete sisse logitud, kasutades sisemist STK autentimise meetodit. Kui te ei saa phpBB-sse sisse logida, on soovitatav kasutada <strong>ainult</strong> seda meetodit.<br />Selle autentimismeetodi keelamiseks klõpsake <a href="%1$s">siin</a>.',
	'VISITED'							=> 'Viimane visiit',
	'TOTAL'								=> 'Kokku',

	'ERK_OK'							=> 'Hädaparanduskomplekt ei leidnud teie phpBB-paigalduses ühtegi kriitilist probleemi.',
	'RELOAD_STK'						=> 'STK uuesti laadimiseks klõpsake <a href="%s"><b>siin</b></a>.',
	'RELOAD_ARK'						=> 'ARK laadimiseks klõpsake <a href="%s"><b>siin</b></a>.',
	'ANONYMOUS_MISSING'					=> 'Tugi tööriistakomplekt määras, et teie andmebaasis puudub anonüümne kasutaja ja teie foorum ei saa korralikult toimida.<br />
											Kõpsake <a href="%s"><b>siin</b></a> ja minge hädaolukorra parandamise komplekti - anonüümne kasutaja taastatakse automaatselt.',

	'ERK_NO_WHITELIST'					=> 'BOM sniffer ei saanud valge nimekirja lugeda ja ta ei saa teste teha. Palun küsige abi <a href="%s">Tugifoorumitest</a>.',
	'ERK_ISSUE_FOUND'					=> 'Osana tugitööriistakomplekti „hädaolukorra remondikomplektist” on ERK kontrollinud teie phpBB-faile ja leidnud, et mõned failid sisaldavad kehtetut sisu, mis võib takistada foorumi töötamist. Toetustööriistakomplekt on proovinud neid probleeme lahendada ja loonud parandatud failidega paketi <em>(varundatud versioonid on saadaval <c>store/bom_sniffer_backup/</c>)</em>. See pakett on salvestatud kataloogi <c>store/bom_sniffer/</c>. Muudetud failide foorumile rakendamiseks <strong>teisaldage</strong> salvestatud failid õigesse asukohta ja laadige uuesti abivahendikomplekt. Tööriistakomplekt kontrollib neid faile uuesti ja suunab teid ERK-sse, kui vigu ei leita.<br /><br /><strong style="color: #ff0000;">Enne genereeritud failide teisaldamist veenduge, et genereeritud failid on õiged!</strong> Kahtluse korral paluge abi <a href="http://www.phpbb.com/community/viewforum.php?f=46">tugifoorumist</a>.',
	'ERK_STORE_WRITE'					=> 'BOM sniffer nõuab kataloogi <c>store</c> olemasolu ja kirjutamist!',
	'ERK_REMOVE_DIR'					=> 'Tugi tööriistakomplekt on püüdnud eemaldada selle tööriista parandatud failide salvestamise kataloogi, kuid seda ei õnnestunud. Et see tööriist õigesti töötaks, tuleb \'<c>%s</c>\' serverist eemaldada. Palun eemaldage see kataloog käsitsi ja vabastage tugitööriistakomplekt.',
	'BOM_SNIFFER_WRITABLE'				=> 'BOM sniffer nõuab ' . STK_ROOT_PATH . 'vahemälu kataloogi olemasolu ja kirjutatav!',
	'STK_FATAL_ERROR'					=> '<strong style="color: #ff0000;">Tugitööriistakomplektil oli fataalne viga.</strong><br /><br />
											 Toetustööriistakomplekt sisaldab hädaolukorra parandamise komplekti (ERK), mis on mõeldud teatud vigade lahendamiseks, mis takistavad phpBB toimimist.
											 On soovitatav, et te käivitaksite ERK-i, et saaksite tuvastatud vea parandada.<br />
											 ERK käivitamiseks klõpsake nuppu <a href="' . STK_ROOT_PATH . 'erk.' . PHP_EXT . '"><b>siin</b></a>.',
	'CONFIG_REPAIR'						=> 'Paranda config.php',
	'CONFIG_REPAIR_EXPLAIN'				=> 'Selle tööriista abil saate oma konfiguratsioonifaili taastada',
	'CONFIG_REPAIR_NO_TABLES'			=> 'Selle tabeli prefiksiga ei leitud selles andmebaasis phpBB3 tabeleid.',
	'CONFIG_REPAIR_NO_DBMS'				=> 'Sobivat andmebaasi tüüpi ei ole võimalik kindlaks määrata.',
	'CONFIG_REPAIR_CONNECT_FAIL'		=> 'Andmebaasi ühendus ebaõnnestus.',
	'CONFIG_REPAIR_WRITE_ERROR'			=> '<strong style="color: #ff0000;">ERROR: Konfiguratsioonifaili ei õnnestunud kirjutada.</strong><br />Palun kopeerige allolev tekst, asetage see faili nimega config.php ja asetage see oma foorumi juurkataloogi.<br /><br />',

	'CONFIG_LIST'						=> 'Konfiguratsiooni parameetrid',
	'CONFIG_LIST_EXPLAIN'				=> 'Siin saate vaadata ja muuta konfiguratsiooni.',
	'CLOSE'								=> 'Sulge',
	'UPDATES_AVAILABLE'					=> 'Teie phpBB versioon ei ole viimane. Värskenduste jaoks on saadaval versioon %1$s<br />Järgige seda linki <a href="%2$s" target="_blank" />%2$s</a> uusima versiooni vabastamise teate juurde, mis sisaldab lisateavet, samuti juhiseid phpBB uuendamiseks',
	'VERSIONCHECK_FAIL'					=> 'Uusima phpBB versiooni teabe hankimine ebaõnnestus.',

	'SELECT_ALL'						=> 'Kõigi valimiseks liigutage kursorit allolevasse välja ja vajutage Ctrl-A (PC), Cmd-A (Mac) <br />Topeltklõps valib sõna ja kolmekordse rea.',

	'PURGE_CACHE'						=> 'Puhasta vahemälu',
	'PURGE_CACHE_CONFIRM'				=> 'Kas olete kindel, et soovite vahemälu puhastada?',
	'USERNAME'							=> 'Kasutajanimi',
	'PASSWORD'							=> 'Parool',
	'SUBMIT'							=> 'Sisesta',
	'CANCEL'							=> 'Katkesta',
	'FORUM_INDEX'						=> 'Foorumi avaleht',

	'FILE_WRITE_FAIL'					=> 'Faili ei õnnestunud kirjutada',
	'STK_INCOMPATIBLE'					=> 'See STK versioon on pühendatud phpBB 3.2.x foorumitele, samas kui teie phpBB versioon on %1$s.',

	'PHPBB_DEBUG'					=> '[phpBB Debug]',
	'DEBUG_IN_FILE'					=> 'failis',
	'DEBUG_ON_LINE'					=> 'real',
));
