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
			'phpbb_version'		=> 'The SRT Generator couldn’t determine which phpBB version you are using, please select the correct version. To find this information, login to your board and scroll down to the bottom of the page. Click "Administration Control Panel". Click the "System" tab.',
			'board_url'			=> 'Your board URL is the address that you use to access your board. Most problems are more easily fixed when one can view your board. If you do not want to give out this information, please enter "n/a".',
			'dbms'				=> 'To determine which database version and type you are using, go to the Administration Control Panel. On the "General" tab, locate "Database server:" in the statistics table.',
			'php'				=> 'To determine which PHP version you are using, go to the Administration Control Panel. On the "General" tab, click on "PHP Information", here you’ll find "PHP Version x.y.z"',
			'host_name'			=> 'Some problems experienced with phpBB boards can be attributed to particular hosts. This field should be filled with the company that is providing your webhosting package (like GoDaddy, Yahoo!, 1&1, etc.). If you are hosting the board yourself, please indicate this. Likewise, if you do not know who is hosting your board, please indicate this as well.',
			'install_type'		=> 'If you installed your board by downloading the phpBB files, uploading them to your host, then browsing to the installer, select "I installed the board by myself." If you had someone do the installation for you, select "Someone else installed my board for me." If you used an automated tool like Fantastico, select "I used a tool provided by my host."',
			'inst_converse'		=> 'If your board was a fresh install, this means your board did not exist prior to installing phpBB. If you recently updated your board from an older version of phpBB3 prior to your problem beginning, then selected "Update from a previous version of phpBB3". If it is a conversion, this means your board was installed previously as another piece of software then later converted to phpBB.',
			'mods_installed'	=> 'MODs are often the cause of many problems with phpBB. This information can help to determine the exact cause of your issue.',
			'registration_req'	=> 'Select "Yes" if one must be registered and logged in to experience this problem.',
		),
		'step3'	=> array(
			'installed_styles'		=> 'An out of date style is the cause of many problems. If you do not know which styles you have installed, go to the Administration Control Panel, then browse to the "Styles" tab.',
			'installed_languages'	=> 'An out of date language pack is the cause of many problems. If you do not know which language packs you have installed, go to the Administration Control Panel, then browse to the "System" tab. Next, select "Language packs" from the list of pages on the left.',
			'xp_level'				=> 'Please select the option that best describes you.',
			'problem_started'		=> 'Please describe the actions you took (updating your board, installing a MOD, etc.) prior to this problem becoming noticeable.',
			'problem_description'	=> 'When describing your problem, please attempt to be as detailed as possible. Include information regarding when the problem started, steps to reproduce the problem, and any other information that you deem helpful.',
			'installed_mods'		=> 'Please try to be as detailed as you can when listing your installed MODs. This information greatly helps us in determining the cause of your problem.',
			'test_username'			=> 'Please provide the username to a test account that can be used to view this issue. Do <strong>not</strong> provide this information if the user requires more than "regular user" privileges.',
			'test_password'			=> 'Please provide the password to a test account that can be used to view this issue. Do <strong>not</strong> provide this information if the user requires more than "regular user" privileges.',
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
				null			=> 'Please select your answer',
				'new_both'		=> 'New to PHP and phpBB',
				'new_phpbb'		=> 'New to phpBB but not PHP',
				'new_php'		=> 'New to PHP but not phpBB',
				'comfort'		=> 'Comfortable with PHP and phpBB',
				'experienced'	=> 'Experienced with PHP and phpBB',
			),
		),
	),
));
