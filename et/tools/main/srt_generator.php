<?php
/**
 *
 * @package Support Toolkit
 * @version $Id$
 * @copyright (c) 2010 phpBB Group
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 */

/**
 * @ignore
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
// ’ » " " …
// --------------------------------------------------------------------------------------------
// For the time being this file isn't translatable. The Support Toolkit will always force the
// English version when the "Support Request Generator" is ran.
//

$lang = array_merge($lang, array(
	'COMPILED_TEMPLATE_EXPLAIN'		=> 'Allpool on koopia teie tugi taotluse mall. Lõikepuhvrisse kopeerimiseks klõpsake allpool, seejärel looge sellega uus postitus <a href="https://www.phpbb.com/community/viewforum.php?f=556">Tugifoorumisse</a>. Kui teil on juba teie probleemiga seotud tugiteema, siis kopeerige mall olemasoleva teema vastusesse.',
	'COULDNT_LOAD_SRT_ANSWERS'		=> 'Toetuse taotluse malli genereerija ei saanud vastuseid laadida. Veenduge, et olete tööriista õigesti käivitanud.',
	'SRT_GENERATOR'					=> 'Toetuse taotlusvormi generaator',
	'SRT_GENERATOR_LANDING'			=> 'Toetuse taotlusvormi generaator',
	'SRT_GENERATOR_LANDING_CONFIRM'	=> 'Tere tulemast Tugirühma tugiteenuse taotlusvormi generaatorisse. See on kiireim ja kõige tõhusam viis meie tugipäringute vormi täitmiseks. Generaator küsib kaheksa kuni kümme küsimust, mis on vajalikud enamike probleemide diagnoosimiseks. Seejärel koostab see teie vastused loendisse, mida saate kopeerida ja kleepida oma soovitud tugiteemasse.<br />See STK tööriist teeb sama, mis <a href="https://www.phpbb.com/support/stk/">SRT generaator aadressil www.phpbb.com</a> kuid proovib teatud küsimusi eelnevalt täita.<br /><br />Kas soovite käivitada SRT generaatorit?',
	'SRT_NO_CACHE'					=> 'Tugiteenuste taotlusvormide generaator kasutab teabe salvestamiseks phpBB vahemälu süsteemi, läbides kõik sammud. Kasutate phpBB null-vahemälu, mis ei sobi selle tööriistaga. Selle tööriista kasutamiseks kasutage mõnda muud vahemällu salvestatud taustaprogrammi või kasutage <a href="https://www.phpbb.com/support/srt/">online SRT generaatorit</a>',
	'START_OVER'					=> 'Alusta uuesti',
	'NO_ANSVER'						=> 'Vastus puudub',
	'BY_SRT_GENERATOR'				=> 'Loodud Toetuse taotlusvormi generaator',
));

// Step 1 strings
$lang = array_merge($lang, array(
//	'STEP1_CONVERT'			=> '',
//	'STEP1_CONVERT_EXPLAIN'	=> '',
	'STEP1_MOD'				=> 'Kas teie probleem on MOD-ga seotud?',
	'STEP1_MOD_EXPLAIN'		=> 'Kas see probleem sai alguse pärast mooduli installimist või eemaldamist?',
	'STEP1_MOD_ERROR'		=> 'Toetuse küsimus, mis on seaotud mooduliga (näiteks kui olete mooduli just installeerinud ja nüüd saate vigu), tuleks postitada teemasse, kust olete mooduli alla laadinud. Kui moodul on alla laaditud mõnelt teiselt saidilt, peate sealt abi otsima.<br /><br /><a href="http://www.phpbb.com/community/viewforum.php?f=451">Mine moodulite foorumisse</a>',
	'STEP1_HACKED'			=> 'Kas teie foorumit oli häkitud?',
	'STEP1_HACKED_EXPLAIN'	=> 'Valige "Jah", kui otsite sellekohast tuge, sest teie foorum oli rikutud või muul viisil ohustatud.',
	'STEP1_HACKED_ERROR'	=> 'Kui teie foorum oli häkkitud, palume teil esitada foorumit käsitleva aruande postitamiseks sündmuste uurimise jälgijaga, nii et privaatset teavet ei avaldataks.<br /><br />Vaata edasiste juhiste saamiseks <a href="https://www.phpbb.com/community/viewtopic.php?f=46&t=543171#iit">seda postitust</a>.',
));

// The questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS'			=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'Millist phpBB versiooni te kasutate?',
			'board_url'			=> 'Mis on teie foorumi URL aadress?',
			'dbms'				=> 'Millist andmebaasi tüüpi / versiooni kasutate?',
			'php'				=> 'Millist PHP versiooni kasutate?',
			'host_name'			=> 'Kes majutab teie foorumit?',
			'install_type'		=> 'Kuidas teie foorum installeeriti?',
			'inst_converse'		=> 'Kas teie foorum on värskelt installeeritud või konversioon?',
			'mods_installed'	=> 'Kas teil on installitud mõni moodul?',
			'registration_req'	=> 'Kas registreerimine on vajalik selle probleemi taasesitamiseks?',
		),
		'step3'	=> array(
			'installed_styles'		=> 'Milliseid stiile olete praegu installinud?',
			'installed_languages'	=> 'Milline keel(ed) on teie foorumis praegu kasutatav?',
			'xp_level'				=> 'Mis on teie kogemuste tase?',
			'problem_started'		=> 'Millal teie probleem algas?',
			'problem_description'	=> 'Palun kirjeldage oma probleemi.',
			'installed_mods'		=> 'Millised mooduleid olete installinud?',
			'test_username'			=> 'Mis kasutajanime saab selle probleemi vaatamiseks kasutada?',
			'test_password'			=> 'Millist parooli saab selle probleemi vaatamiseks kasutada?',
		),
	),
));

// Explain lines for the questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS_EXPLAIN'	=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'SRT generaator ei saanud kindlaks teha, millist phpBB versiooni te kasutate, palun valige õige versioon. Selle teabe leidmiseks logige foorumisse ja liikuge AJP lehekülje ning klikkige Süsteem menüüle.',
			'board_url'			=> 'Teie foorumi URL on aadress, mida kasutate foorumisse pääsemiseks. Enamik probleeme on lihtsam kindlaks teha, kui saate oma foorumit vaadata. Kui te ei soovi seda teavet anda, sisestage "n/a".',
			'dbms'				=> 'Kasutatava andmebaasi versiooni ja tüübi määramiseks liikuge Administraatori juhtpaneeli. Vahekaardil "Üldine" leidke statistika tabelist "Andmebaasi server".',
			'php'				=> 'Kasutatava PHP versiooni määramiseks liikuge Administraatori juhtpaneeli. Klõpsake vahekaardil "Üldine" nuppu "PHP teave". Siit leiate "PHP versiooni x.y.z"',
			'host_name'			=> 'Mõningaid phpBB-foorumitega seotud probleeme võib seostada teatud domeeni majutajatega. See väli tuleb täita domeeni majutaja nimega, kes pakub teie veebihostimispaketti (nt GoDaddy, Zone jne). Kui te ise hostite oma foorumit, siis märkige palun see. Samuti, kui te ei tea, kes teie foorumit majutab, palun märkige ka see.',
			'install_type'		=> 'Kui paigaldasite oma foorumi, laadides alla phpBB-failid, laadides need oma serverisse, siis sirvides installeerijale, valige „Ma paigaldasin foorumi ise". Kui keegi teine paigaldas foorumi teie eest, siis valige "Keegi teine, kes paigaldas foorumi". Kui kasutasite automatiseeritud tööriista nagu näiteks Fantastico, valige "Ma kasutasin oma domeenimajutaja poolt pakutavat tööriista."',
			'inst_converse'		=> 'Kui teie foorumis oli puhas install, tähendab see, et teie foorum ei olnud enne phpBB installimist olemas. Kui värskendasite hiljuti oma foorumit mõnest phpBB3 vanemast verioonist enne probleemi algust, siis valige "Uuendasin phpBB3 vanemast versioonist". Kui tegemist on konversiooniga, siis tähendab see, et teie foorumil oli eelnevalt teine tarkvara, seejärel konverteeriti see phpBB-ks.',
			'mods_installed'	=> 'Moodulid on sageli paljude phpBB probleemide põhjuseks. See teave aitab teie probleemi täpset põhjust kindlaks määrata.',
			'registration_req'	=> 'Valige "Jah", kui selle probleemi nägemiseks tuleb foorumisse registreerid ja sisse logida.',
		),
		'step3'	=> array(
			'installed_styles'		=> 'Vananenud stiil on paljude probleemide põhjuseks. Kui te ei tea, milliseid stiile olete paigaldanud, siis minge Administraatori juhtpaneeli ja seejärel klikkige vahekaardile "Stiilid".',
			'installed_languages'	=> 'Vananenud keelepakett on paljude probleemide põhjuseks. Kui te ei tea, milliseid keelepakette olete paigaldanud, siis minge Administraatori juhtpaneeli ja seejärel klikkige vahekaardile "Süsteem". Seejärel valige vasakpoolsete lehekülgede loendist "Keelepaketid".',
			'xp_level'				=> 'Valige oma probleemile kõige paremini kirjeldav valik.',
			'problem_started'		=> 'Palun kirjeldage, milliseid toiminguid te tegite (värskendasite oma foorumit; paigaldasite mooduleid jne) enne selle probleemi tekkimist.',
			'problem_description'	=> 'Probleemi kirjeldamisel proovige olla võimalikult üksikasjalik. Lisage teave selle kohta, millal probleem alguse sai, probleemi taasesitamiseks vajalikud tegevused ning muu vajalik teave.',
			'installed_mods'		=> 'Palun proovige paigaldatud moodulite loetelus olla nii üksikasjalik kui võimalik. See teave aitab meil paremini teie probleemi põhjust kindlaks määrata.',
			'test_username'			=> 'Palun sisestage testikonto kasutajanimi, mida saab selle probleemi vaatamiseks kasutada. Kas <strong>mitte</strong> ei anna seda teavet siis, kui kasutaja vajab rohkem õiguseid, kui "tavakasutaja".',
			'test_password'			=> 'Palun andke testikonto parool, mida saab selle probleemi vaatamiseks kasutada. Kas <strong>mitte</strong> ei anna seda teavet siis, kui kasutaja vajab rohkem õiguseid, kui "tavakasutaja".',
		),
	),
));

// Langauge strings that are used for building dropdown boxes
$lang = array_merge($lang, array(
	'SRT_DROPDOWN_OPTIONS'	=> array(
		'step2'	=> array(
			'install_type'	=> array(
				null			=> 'Palun valige oma vastus',
				'myself'		=> 'Ma kasutasin allalaadimispaketti aadressilt phpBB.com',
				'third'			=> 'Ma kasutasin teise veebisaidi pakutavat allalaadimispaketti',
				'someone_else'	=> 'Keegi teine paigaldas selle foorumi minule',
				'automated'		=> 'Ma kasutasin oma domeeni majutaja poolt pakutavat tööriista',
			),
			'inst_converse'	=> array(
				null			=> 'Palun valige oma vastus',
				'fresh'				=> 'Värske install',
				'phpbb_update'		=> 'Uuenda phpBB3 eelmisest versioonist',
				'convert_phpbb2'	=> 'Konversioon phpBB2-st',
				'convert_other'		=> 'Konversioon teiselt tarkvaralt',
			)
		),
		'step3'	=> array(
			'xp_level'		=> array(
				null			=> 'Palun valige oma vastus',
				'new_both'		=> 'Uus PHP ja phpBB',
				'new_phpbb'		=> 'Uus phpBB, kuid mitte PHP',
				'new_php'		=> 'Uus PHP, kuid mitte phpBB',
				'comfort'		=> 'Mugav PHP ja phpBB-ga',
				'experienced'	=> 'Kogenud PHP ja phpBB-ga',
			),
		),
	),
));
