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

	'ERK_NO_WHITELIST'					=> 'The BOM sniffer couldn\'t read the whitelist, and can\'t run the tests. Please seek assistance in the <a href="%s">Support Forums</a>.',
	'ERK_ISSUE_FOUND'					=> 'As part of the “Emergency Repair Kit” of the Support Toolkit the ERK has checked your phpBB files and determined that some of the files contain invalid content that potentially could stop the board from operating. The Support Toolkit has tried to resolve these issues and created a package with the corrected files <em>(backed up versions can be found in <c>store/bom_sniffer_backup/</c>)</em>. This package is stored in the <c>store/bom_sniffer/</c> directory. To apply the changed files to your board please <strong>move</strong> the files from the “store” to their correct location and load the Support Toolkit again. The toolkit will check these files again and will redirect you to the ERK if no flaws are found.<br /><br /><strong style="color: #ff0000;">Before moving the generated files, please make sure that the generated files are correct!</strong> When in doubt please seek assistance in the <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forum</a>.',
	'ERK_STORE_WRITE'					=> 'The BOM sniffer requires the <c>store</c> directory to exist and to be writable!',
	'ERK_REMOVE_DIR'					=> 'The Support Toolkit has tried to remove the repaired file storage directory of this tool but wasn\'t able to do so. In order for this tool to run correctly the \'<c>%s</c>\' must be removed from the server. Please remove this directory manually and release the Support Toolkit.',
	'BOM_SNIFFER_WRITABLE'				=> 'The BOM sniffer requires the ' . STK_ROOT_PATH . 'cache directory to exist and to be writable!',
	'STK_FATAL_ERROR'					=> '<strong style="color: #ff0000;">The Support Toolkit encountered a fatal error.</strong><br /><br />
											 The Support Toolkit includes an Emergency Repair Kit (ERK), a tool designed to resolve certain errors that prevent phpBB from functioning.
											 It is advised that you run the ERK now so it can attempt to repair the error it has detected.<br />
											 To run the ERK, click <a href="' . STK_ROOT_PATH . 'erk.' . PHP_EXT . '"><b>here</b></a>.',
	'CONFIG_REPAIR'						=> 'Repair config.php',
	'CONFIG_REPAIR_EXPLAIN'				=> 'Through this tool you can regenerate your configuration file',
	'CONFIG_REPAIR_NO_TABLES'			=> 'phpBB3 tables could not be found on this database with this table prefix.',
	'CONFIG_REPAIR_NO_DBMS'				=> 'Unable to determine any suitable type of database.',
	'CONFIG_REPAIR_CONNECT_FAIL'		=> 'Database Connection failed.',
	'CONFIG_REPAIR_WRITE_ERROR'			=> '<strong style="color: #ff0000;">ERROR: Could not write config file.</strong><br />Please copy the text below, put it in a file named config.php, and place it in the root directory of your forum.<br /><br />',

	'CONFIG_LIST'						=> 'Configuration parameters',
	'CONFIG_LIST_EXPLAIN'				=> 'Here you can view and change the configuration .',
	'CLOSE'								=> 'Close',
	'UPDATES_AVAILABLE'					=> 'Your version of phpBB is not the latest. Available version for updates is %1$s<br />Follow this link <a href="%2$s" target="_blank" />%2$s</a> to the release announcement for the latest version, which contains additional information, as well as instructions for updating phpBB',
	'VERSIONCHECK_FAIL'					=> 'Failed to obtain latest phpBB version information.',

	'SELECT_ALL'						=> 'To select all, move cursor in field below and press Ctrl-A (PC), Cmd-A (Mac) <br />Double click selects a word and triple entire row.',

	'PURGE_CACHE'						=> 'Purge the cache',
	'PURGE_CACHE_CONFIRM'				=> 'Are you sure you wish to purge the cache?',
	'USERNAME'							=> 'Kasutajanimi',
	'PASSWORD'							=> 'Parool',
	'SUBMIT'							=> 'Sisesta',
	'CANCEL'							=> 'Katkesta',
	'FORUM_INDEX'						=> 'Board index',

	'FILE_WRITE_FAIL'					=> 'Failed to write file',
	'STK_INCOMPATIBLE'					=> 'This STK version is dedicated to phpBB 3.2.x boards, while your phpBB version is %1$s.',

	'PHPBB_DEBUG'					=> '[phpBB Debug]',
	'DEBUG_IN_FILE'					=> 'in file',
	'DEBUG_ON_LINE'					=> 'on line',
));
