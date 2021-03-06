<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'NO_CONFIG_TITLE'					=> 'Parameetrid puuduvad',
	'NO_CONFIG_TEXT'					=> 'Parameetreid ei kuvata',

	'CONFIG_PURPOSE'					=> 'Eesmärk',
	'CONFIG_NAME'						=> 'Parameeter',
	'CONFIG_VALUE'						=> 'Väärtus',
	'IS_DYNAMIC'						=> 'On dünaamiline',
	'CONFIG_CHANGED_SUCCESS'			=> 'Konfiguratsiooniväärtused on edukalt muudetud',
	'CLICK_HERE_TO_CHANGE'				=> 'Konfiguratsiooni muutmiseks klõpsake siia (muudatused jõustuvad <b>kohe!</b>)',
	'TOTAL_ITEMS'						=> 'Kokku',
	'CRON_TASKS'						=> 'Cron ülesanded',
	'ATTACHMENTS'						=> 'Manused',
	'AVATARS'							=> 'Profiilipildid',
	'BOARD_CONFIG'						=> 'Foorumi seadistus',
	'BOARD_FUNCTIONS'					=> 'Foorumi funktsioonid',
	'PM'								=> 'Priivaatsõnumid',
	'MESSAGES'							=> 'Sõnumid',
	'SIGNATURES'						=> 'Allkirjad',
	'FEED'								=> 'Voog',
	'USER_REGISTER'						=> 'Kasutajad',
	'ANTI_SPAM'							=> 'Antispam',
	'AUTH'								=> 'Auth',
	'EMAIL'								=> 'E-post',
	'CONFIG_JABBER'						=> 'Jabber',
	'COOKIES'							=> 'Küpsised',
	'SERVER'							=> 'Serveri konfiguratsioon',
	'SECURITY'							=> 'Turvalisus',
	'LOAD'								=> 'Laadimine',
	'SEARCH'							=> 'Otsing',
	'MISC'								=> 'Muu',

	'active_sessions'					=> 'Sessiooni piiramine',
	'allow_attachments'					=> 'Manuste lubamine',
	'allow_autologin'					=> '"Mäleta mind" logimise lubamine',
	'allow_avatar'						=> 'Luba profiilipildid',
	'allow_avatar_gravatar'				=> 'Luba gravatar profiilipildid',
	'allow_avatar_local'				=> 'Luba galerii profiilipildid',
	'allow_avatar_remote'				=> 'Luba välised profiilipildid',
	'allow_avatar_remote_upload'		=> 'Luba väliseid profiilipildi üleslaadimist',
	'allow_avatar_upload'				=> 'Luba profiilipildi üleslaadimist',
	'allow_bbcode'						=> 'BBkoodi lubamine',
	'allow_birthdays'					=> 'Sünnipäevade lubamine',
	'allow_bookmarks'					=> 'Järjehoidjate lubamine',
	'allow_cdn'							=> 'Kolmandate osapoolte sisuvõrkude kasutamise lubamine',
	'allow_emailreuse'					=> 'Luba e-posti aadresse uuesti kasutada',
	'allow_forum_notify'				=> 'Lubage foorumite tellimine',
	'allow_live_searches'				=> 'Luba live-otsinguid',
	'allow_mass_pm'						=> 'Luba privaatsõnumite saatmine mitmele kasutajale ja grupile',
	'allow_name_chars'					=> 'Piirake kasutajanimede kasutamist',
	'allow_namechange'					=> 'Lubage kasutajanime muutmine',
	'allow_nocensors'					=> 'Luba tsensuuri keelamine',
	'allow_password_reset'				=> 'Luba parooli lähtestamine ("Unustasid parooli")',
	'allow_pm_attach'					=> 'Luba manused privaatsõnumites',
	'allow_pm_report'					=> 'Luba kasutajatel privaatsõnumitest raporteerida',
	'allow_post_flash'					=> 'Luba <code>[FLASH]</code> BBkoodi kasutamist postitustes',
	'allow_post_links'					=> 'Luba linke postitustes / privaatsõnumites',
	'allow_privmsg'						=> 'Luba privaatsõnumid',
	'allow_quick_reply'					=> 'Luba kiirvastamist',
	'allow_sig'							=> 'Luba allkirjad',
	'allow_sig_bbcode'					=> 'Luba BBkood',
	'allow_sig_flash'					=> 'Luba <code>[FLASH]</code> BBkoodi kasutamist allkirjades',
	'allow_sig_img'						=> 'Luba <code>[IMG]</code> BBkoodi kasutamist allkirjades',
	'allow_sig_links'					=> 'Luba linkide kasutamist allkirjades',
	'allow_sig_pm'						=> 'Luba allkirja privaatsõnumites',
	'allow_sig_smilies'					=> 'Luba emotikonide kasutamist allkirjades',
	'allow_smilies'						=> 'Luba emotikonid',
	'allow_topic_notify'				=> 'Luba teemade tellimine',
	'assets_version'					=> 'Loendur laadib alla uued css ja javascripts laienduste andmete lubamisel / keelamisel / eemaldamisel',
	'attachment_quota'					=> 'Manuste kogusumma',
	'auth_bbcode_pm'					=> 'Luba BBkood privaatsõnumites',
	'auth_flash_pm'						=> 'Luba <code>[FLASH]</code> BBkood',
	'auth_img_pm'						=> 'Luba <code>[IMG]</code> BBkood',
	'auth_method'						=> 'Valige autentimismeetod',
	'auth_oauth_bitly_key'				=> 'Key Bitly',
	'auth_oauth_bitly_secret'			=> 'Salajane Bitly kood',
	'auth_oauth_facebook_key'			=> 'Facebook võti',
	'auth_oauth_facebook_secret'		=> 'Salajane Facebooki kood',
	'auth_oauth_google_key'				=> 'Google võti',
	'auth_oauth_google_secret'			=> 'Salajane Google kood',
	'auth_smilies_pm'					=> 'Luba emotikonid privaatsõnumites',
	'avatar_filesize'					=> 'Maksimaalne avatari faili suurus',
	'avatar_gallery_path'				=> 'Avatari galerii tee',
	'avatar_max_height'					=> 'Avatari maksimaalne kõrgus (pikslites)',
	'avatar_max_width'					=> 'Maksimaalne avatari laius (pikslites)',
	'avatar_min_height'					=> 'Minimaalne avatari kõrgus (pikslites)',
	'avatar_min_width'					=> 'Avatari minimaalne laius (pikslites)',
	'avatar_path'						=> 'Avatar salvestusruum',
	'avatar_salt'						=> 'Avatari salt failinimedes',
	'board_contact'						=> 'Kontakt e-posti aadress',
	'board_contact_name'				=> 'Kontaktisiku nimi',
	'board_disable'						=> 'Keela foorum',
	'board_disable_msg'					=> '',
	'board_email'						=> '',
	'board_email_form'					=> 'Kasutajad saadavad saata e-kirju läbi foorumi',
	'board_email_sig'					=> 'E-posti allkiri',
	'board_hide_emails'					=> '',
	'board_index_text'					=> '',
	'board_startdate'					=> '',
	'board_timezone'					=> '',
	'browser_check'						=> '',
	'bump_interval'						=> '',
	'bump_type'							=> '',
	'cache_gc'							=> '',
	'cache_last_gc'						=> '',
	'captcha_gd'						=> 'GD pilt',
	'captcha_gd_3d_noise'				=> 'Lisage 3D-müra objektid',
	'captcha_gd_fonts'					=> 'Kasutage erinevaid fonte',
	'captcha_gd_foreground_noise'		=> 'Esialgne müra',
	'captcha_gd_wave'					=> 'Laine moonutamine',
	'captcha_gd_x_grid'					=> 'Taustamüra x-telg',
	'captcha_gd_y_grid'					=> 'Taustamüra y-telg',
	'captcha_plugin'					=> 'Paigaldatud pluginad',
	'check_attachment_content'			=> '',
	'check_dnsbl'						=> '',
	'chg_passforce'						=> '',
	'confirm_refresh'					=> 'Luba kasutajatel värskendada spambot vastast ülesannet',
	'contact_admin_form_enable'			=> '',
	'cookie_domain'						=> 'Küpsise domeen',
	'cookie_name'						=> 'Küpsise nimi',
	'cookie_path'						=> 'Küpsise tee',
	'cookie_secure'						=> 'Küpsisekindel',
	'cookie_notice'						=> '',
	'coppa_enable'						=> '',
	'coppa_fax'							=> 'COPPA faksinumber',
	'coppa_mail'						=> 'COPPA postiaadress',
	'cron_lock'							=> '',
	'database_gc'						=> '',
	'database_last_gc'					=> '',
	'dbms_version'						=> '',
	'default_lang'						=> '',
	'default_style'						=> 'Default_style',
	'default_dateformat'				=> 'Kuupäeva formaat',
	'delete_time'						=> '',
	'display_last_edited'				=> '',
	'display_last_subject'				=> '',
	'display_order'						=> '',
	'edit_time'							=> '',
	'email_check_mx'					=> '',
	'email_enable'						=> '',
	'email_function_name'				=> '',
	'email_force_sender'				=> 'email_force_sender',
	'email_max_chunk_size'				=> '',
	'email_package_size'				=> '',
	'enable_accurate_pm_button'			=> 'Luba täpsed PM-indikaatorid teema lehtedel',
	'enable_confirm'					=> '',
	'enable_mod_rewrite'				=> '',
	'enable_pm_icons'					=> '',
	'enable_post_confirm'				=> '',
	'enable_update_hashes'				=> 'enable_update_hashes',
	'extension_force_unstable'			=> '',
	'feed_enable'						=> 'Luba vood',
	'feed_forum'						=> 'Luba foorumi-vooge',
	'feed_http_auth'					=> '',
	'feed_item_statistics'				=> '',
	'feed_limit_post'					=> '',
	'feed_limit_topic'					=> '',
	'feed_overall'						=> '',
	'feed_overall_forums'				=> '',
	'feed_topic'						=> 'Luba teema-vooge',
	'feed_topics_active'				=> '',
	'feed_topics_new'					=> '',
	'flood_interval'					=> 'Üleujutusintervall',
	'force_server_vars'					=> '',
	'form_token_lifetime'				=> '',
	'form_token_mintime'				=> '',
	'form_token_sid_guests'				=> '',
	'forward_pm'						=> '',
	'forwarded_for_check'				=> '',
	'full_folder_action'				=> '',
	'fulltext_mysql_max_word_len'		=> '',
	'fulltext_mysql_min_word_len'		=> '',
	'fulltext_native_common_thres'		=> '',
	'fulltext_native_load_upd'			=> '',
	'fulltext_native_max_chars'			=> '',
	'fulltext_native_min_chars'			=> '',
	'fulltext_postgres_max_word_len'	=> '',
	'fulltext_postgres_min_word_len'	=> '',
	'fulltext_postgres_ts_name'			=> '',
	'fulltext_sphinx_id'				=> 'ID Sphinx Fulltext',
	'fulltext_sphinx_data_path'			=> '',
	'fulltext_sphinx_indexer_mem_limit'	=> '',
	'fulltext_sphinx_host'				=> '',
	'fulltext_sphinx_port'				=> '',
	'fulltext_sphinx_stopwords'			=> '',
	'gzip_compress'						=> '',
	'help_send_statistics'				=> '',
	'help_send_statistics_time'			=> '',
	'hot_threshold'						=> '',
	'icons_path'						=> '',
	'img_create_thumbnail'				=> '',
	'img_display_inlined'				=> '',
	'img_imagick'						=> 'Imagick',
	'img_link_height'					=> '',
	'img_link_width'					=> '',
	'img_max_height'					=> '',
	'img_max_thumb_width'				=> '',
	'img_min_thumb_filesize'			=> '',
	'img_max_width'						=> '',
	'ip_check'							=> '',
	'ip_login_limit_max'				=> '',
	'ip_login_limit_time'				=> '',
	'ip_login_limit_use_forwarded'		=> '',
	'jab_enable'						=> '',
	'jab_host'							=> '',
	'jab_package_size'					=> '',
	'jab_password'						=> '',
	'jab_port'							=> '',
	'jab_use_ssl'						=> '',
	'jab_username'						=> '',
	'jab_allow_self_signed'				=> '',
	'jab_verify_peer'					=> '',
	'jab_verify_peer_name'				=> '',
	'last_queue_run'					=> '',
	'ldap_base_dn' 						=> '',
	'ldap_email'						=> '',
	'ldap_password'						=> '',
	'ldap_port'							=> '',
	'ldap_server'						=> '',
	'ldap_uid'							=> '',
	'ldap_user'							=> '',
	'ldap_user_filter'					=> '',
	'legend_sort_groupname'				=> '',
	'limit_load'						=> '',
	'limit_search_load'					=> '',
	'load_anon_lastread'				=> '',
	'load_birthdays'					=> '',
	'load_cpf_memberlist'				=> '',
	'load_cpf_pm'						=> '',
	'load_cpf_viewprofile'				=> '',
	'load_cpf_viewtopic'				=> '',
	'load_db_lastread'					=> '',
	'load_db_track'						=> '',
	'load_jquery_url'					=> '',
	'load_jumpbox'						=> '',
	'load_moderators'					=> '',
	'load_notifications'				=> '',
	'load_online'						=> '',
	'load_online_guests'				=> '',
	'load_online_time'					=> '',
	'load_onlinetrack'					=> '',
	'load_search'						=> '',
	'load_tplcompile'					=> '',
	'load_unreads_search'				=> '',
	'load_user_activity'				=> '',
	'load_user_activity_limit'			=> '',
	'max_attachments'					=> '',
	'max_attachments_pm'				=> '',
	'max_autologin_time'				=> '',
	'max_filesize'						=> '',
	'max_filesize_pm'					=> '',
	'max_login_attempts'				=> '',
	'max_name_chars'					=> '',
	'max_num_search_keywords'			=> '',
	'max_pass_chars'					=> '',
	'max_poll_options'					=> '',
	'max_post_chars'					=> '',
	'max_post_font_size'				=> '',
	'max_post_img_height'				=> '',
	'max_post_img_width'				=> '',
	'max_post_smilies'					=> '',
	'max_post_urls'						=> '',
	'max_quote_depth'					=> '',
	'max_reg_attempts'					=> '',
	'max_sig_chars'						=> '',
	'max_sig_font_size'					=> '',
	'max_sig_img_height'				=> '',
	'max_sig_img_width'					=> '',
	'max_sig_smilies'					=> '',
	'max_sig_urls'						=> '',
	'mime_triggers'						=> '',
	'min_name_chars'					=> '',
	'min_pass_chars'					=> '',
	'min_post_chars'					=> '',
	'min_search_author_chars'			=> '',
	'new_member_group_default'			=> '',
	'new_member_post_limit'				=> '',
	'newest_user_colour'				=> '',
	'newest_user_id'					=> '',
	'newest_username'					=> '',
	'num_files'							=> '',
	'num_posts'							=> '',
	'num_topics'						=> '',
	'num_users'							=> '',
	'override_user_style'				=> '',
	'pass_complex'						=> '',
	'plupload_last_gc'					=> '',
	'plupload_salt'						=> '',
	'pm_edit_time'						=> '',
	'pm_max_boxes'						=> '',
	'pm_max_msgs'						=> '',
	'pm_max_recipients'					=> '',
	'posts_per_page'					=> '',
	'print_pm'							=> '',
	'questionnaire_unique_id'			=> '',
	'queue_interval'					=> '',
	'rand_seed'							=> '',
	'rand_seed_last_update'				=> '',
	'ranks_path'						=> '',
	'read_notification_expire_days'		=> '',
	'read_notification_gc'				=> '',
	'read_notification_last_gc'			=> '',
	'record_online_date'				=> '',
	'record_online_users'				=> '',
	'referer_validation'				=> '',
	'require_activation'				=> '',
	'script_path'						=> '',
	'search_anonymous_interval'			=> '',
	'search_block_size'					=> '',
	'search_gc'							=> '',
	'search_indexing_state'				=> '',
	'search_interval'					=> '',
	'search_last_gc'					=> '',
	'search_store_results'				=> '',
	'search_type'						=> '',
	'secure_allow_deny'					=> '',
	'secure_allow_empty_referer'		=> '',
	'secure_downloads'					=> '',
	'server_name'						=> '',
	'server_port'						=> '',
	'server_protocol'					=> '',
	'session_gc'						=> '',
	'session_last_gc'					=> '',
	'session_length'					=> '',
	'site_desc'							=> '',
	'site_home_text'					=> 'Peamine veebisaidi tekst',
	'site_home_url'						=> 'Põhiline veebisaidi URL',
	'sitename'							=> 'Saidi nimi',
	'smilies_path'						=> '',
	'smilies_per_page'					=> '',
	'smtp_auth_method'					=> 'SMTP autentimise meetod',
	'smtp_delivery'						=> 'Kasutage e-posti jaoks SMTP-serverit',
	'smtp_host'							=> 'SMTP-serveri aadress',
	'smtp_password'						=> 'SMTP parool',
	'smtp_port'							=> 'SMTP serveri port',
	'smtp_username'						=> 'SMTP kasutajanimi',
	'smtp_allow_self_signed'			=> '',
	'smtp_verify_peer'					=> '',
	'smtp_verify_peer_name'				=> '',
	'teampage_forums'					=> '',
	'teampage_memberships'				=> '',
	'topics_per_page'					=> '',
	'tpl_allow_php'						=> '',
	'upload_dir_size'					=> '',
	'upload_icons_path'					=> '',
	'upload_path'						=> '',
	'update_hashes_last_cron'			=> '',
	'update_hashes_lock'				=> '',
	'use_system_cron'					=> '',
	'version'							=> 'phpBB versioon',
	'warnings_expire_days'				=> '',
	'warnings_gc'						=> '',
	'warnings_last_gc'					=> '',
	'remote_upload_verify'				=> '',
	'allow_board_notifications' 		=> 'Lubage foorumi teated',
	'allowed_schemes_links'				=> '',

	'REPARSING'							=> 'Korduv',
	'reparse_lock'								=> '',
	'text_reparser.pm_text_cron_interval'		=> 'PM tekst croninterval',
	'text_reparser.pm_text_last_cron'			=> ' ',
	'text_reparser.poll_option_cron_interval'	=> ' ',
	'text_reparser.poll_option_last_cron'		=> ' ',
	'text_reparser.poll_title_cron_interval'	=> ' ',
	'text_reparser.poll_title_last_cron'		=> ' ',
	'text_reparser.post_text_cron_interval'		=> ' ',
	'text_reparser.post_text_last_cron'			=> ' ',
	'text_reparser.user_signature_cron_interval'=> ' ',
	'text_reparser.user_signature_last_cron'	=> ' ',
	'UNKNOWN'							=> '<span style="color:#FF5D00"><em>Tundmatu teade, parameeter ei vasta phpBB3.2.x standardile</em></span>',
));
