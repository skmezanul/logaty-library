<?php

/**
 * configuration file 
 * @author Moahammad Anzawi <m.anzawi2013@gmail.com>
 * @link www.t3lam.net
 * @license GPL2
 * @version 1.0.0
 */
/**
 *
 * @global array $GLOBALS['langConfig'] store library configuration
 * @name $langConfig 
 */

/**
 * you can create method in DBcontent class to store and get all option from database!
 * database options (host, username ...... etc) NOT RECOMMENDED to save it in database.
 */

$GLOBALS['langConfig'] = array(
    // database information
    'database' => array(
        // database host
        'host' => 'localhost',
        // database username
        'username' => 'root',
        //database password
        'password' => '',
        // database charsit UTF-8 RECOMMENDED
        'charset' => 'utf-8',
        // database name
        'db_name' => 'mlang',
        // database type (I mean  mysql, mysqli, pdo) just this types supported
        'db_type' => 'pdo',
        // table name
        'table_name' => 'translation',
        // options table name (to get option from database)
        // see config file in demo-with-database folder to kearn more
        'options_table' => 'trans_options',
        // colomns prefix ..
        /*
         * ex : if you want create table for posts
         * the table have (post_title, post_content)
         * you must be create colomn for all languages enabled
         * to be (ar_post_title, ar_post_content, en_post_title, en_post_content ...)
         * 
         * you can choise (lang_code, local_code, lang_name)
         * 
         * lang_code are(ar for arabic, en for english, es for espain ...)
         * local_code are(en_US for or en_UK or any english country, AR_JO or AR_KW ...etc for arabic.... )
         * lang_name the lanuage name in english (arabic, english ... etc)
         * 
         * if you want to use lang_code the table must be (ar_post_title, ar_post_content, en_post_title, en_post_content ...)
         * if you want to use local_code the table must be (AR_post_title, AR_post_content, en-US_post_title, en-US_post_content ...)
         * if you want to use lang_name the table must be (arabic_post_title, arabic_post_content, english_post_title, english_post_content ...)
         * 
         */
        'colmns_tag' => 'lang_code',
    ),
    // main options (settings)
    'options' => array(
        // defualt language for site
        'defualt_lang' => 'en',
        // true to enable detect browser language false to not
        'detect_browser_lang' => true,
        // true to enable detect country language false to not
        // NOTE: you cant enable detect_browser_lang and detect_country_lang in same time.
        'detect_country_lang' => false,
        // true if you want to hide english content for visitor use another english language (Work with database content Only)
        'hide_untranslated' => false,
        // true to alert visitor if the content not availabel in his language
        // if hide_untranslated is false keep this false RECOMMENDED
        'alert_user_available_lang' => true,
        // true if you want to hide language information from url for defualt language
        // in ex : if true and  the defualt language is arabic when visitor browse your site in arabic the url
        // must be like this (www.my-site.come) but if visitor browse your site in other language
        //the url  must be like this (www.my-site.come?lang=en)
        'hide_default_language' => true,
    ),
    // enable the use of following languages (order=>language)
    'enabled_languages' => array(
        0 => 'ar',
        1 => 'en',
        2 => 'es'
    ),
    // supported languages (order=>language)
    'supported_languages' => array(
        0 => 'ar',
        1 => 'en',
        2 => 'de',
        3 => 'fr',
        4 => 'pt',
        5 => 'ro',
    ),
    // the language name in english
    'languages_name' => array(
        'ar' => 'Arabic',
        'en' => 'English',
        'de' => 'German',
        'fr' => 'French',
        'pt' => 'Portuguese',
        'ro' => 'Romanian'
    ),
    // the language name in mother tongue
    'name_mother_tongue' => array(
        'ar' => 'العربية',
        'en' => 'English',
        'es' => 'Spain',
        'de' => 'Deutsch',
        'fr' => 'Français',
        'pt' => 'Português',
        'ro' => 'Română'
    ),
    // local IOS code for countris
    'langLocal' => array(
        'ar' => 'ar',
        'en' => 'en-US',
        'es' => 'es_ES',
        'de' => 'de_DE',
        'fr' => 'fr_FR',
        'pt' => 'pt_BR',
        'ro' => 'ro_RO',
    ),
    // the message shown for visitor if content are not a valiable in his language
    'not_available' => array(
        'ar' => 'هذا المحتوى غير متوفر باللغة المختارة يمكنك مشاهدة هذا المحتوى باللغات: ',
        'en' => 'This content is not available in selected language you can see this content in  :',
        'de' => 'Dieser Inhalt ist nicht verfügbar in der ausgewählten Sprache Sie können diese Inhalte in zu sehen : ',
        'fr' => 'Ce contenu ne est pas disponible dans la langue sélectionnée, vous pouvez voir ce contenu dans : ',
        'pt' => 'Este conteúdo não está disponível no idioma selecionado, você pode ver este conteúdo em : ',
        'ro' => 'Acest conținut nu este disponibil în limba selectată, puteți vedea acest conținut în : ',
        'es' => 'Acest conținut nu este disponibil în limba selectată, puteți vedea acest conținut în : ',
    ),
    // countris flags
    'flag' => array(
        'ar' => 'ps.png',
        'en' => 'en.png',
        'de' => 'de.png',
        'fr' => 'fr.png',
        'pt' => 'pt.png',
        'ro' => 'ro.png',
    ),
    // some paths
    'paths' => array(
        // language file path
        'lang_files' => ROOT . 'languages' . SP,
        // flags path
        'flags' => ROOT . 'flags' . SP,
    ),
    'lang_dir' => array(
        'ar' => 'rtl',
        'en' => 'ltr',
        'es' => 'ltr'
    ),
);
