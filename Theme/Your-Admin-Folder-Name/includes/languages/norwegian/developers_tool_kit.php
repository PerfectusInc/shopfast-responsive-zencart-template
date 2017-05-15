<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Copyright Translation 2006 - 2013 Rune Rasmussen - syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: developers_tool_kit.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */
  define('HEADING_TITLE', 'Utviklerverkt�y');
  define('TABLE_CONFIGURATION_TABLE', 'Sl� opp KONSTANT-definisjoner');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Vellykket</strong> oppdatering for sortering av produktpriser.');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Feil:</strong> Ingen passende konfigurasjonsn�kler ble funnet...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Feil:</strong> Ingen konfigurasjonsn�kkel eller tekst � s�ke etter... S�k ble avbrutt');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Oppdater sortering av alle produktpriser</strong><br />for � kunne sortere etter viste priser: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Sl� opp KONSTANT eller spr�kfil-definisjon</strong>');
  define('TEXT_CONFIGURATION_KEY', 'N�kkel eller navn:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Merk:</strong><br />KONSTANTER blir skrevet med store bokstaver.<br />Spr�kfil-, funksjon-, klasse-, osv. oppslag blir utf�rt n�r ikke noe har blitt funnet i databasetabellene, hvis valgt fra nedtrekksliste');

  define('TABLE_TITLE_KEY', '<strong>N�kkel:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Tittel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beskrivelse:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Gruppe:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Verdi:</strong>');

  define('TEXT_LOOKUP_NONE', 'Ingen');
  define('TEXT_INFO_SEARCHING', 'S�ker ');
  define('TEXT_INFO_FILES_FOR', ' filer... etter: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Passende linjer som ble funnet: ');
  define('TEXT_INFO_FILENAME', 'FILNAVN: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Spr�kfil oppslag:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alle spr�kfiler for ' . strtoupper($_SESSION['language']) . ' - Katalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alle spr�kfiler - katalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /norwegian.php osv.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alle valgte spr�kfiler - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alle spr�kfiler - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /norwegian.php osv.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alle valgte spr�kfiler - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alle eksisterende spr�kfiler - Katalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Oppslagsfunksjoner eller ting i funksjonsfiler</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Funksjonsfil oppslag:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Alle funskjonsfiler - Katalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Alle funksjonsfiler - Katalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Alle funksjonsfiler - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Sl� opp i klasser eller ting i klassefiler</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Klassefil oppslag:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Alle klassefiler - Katalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Alle klassefiler - Katalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Alle klassefiler - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Sl� opp i design</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Designfil oppslag:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Alle designfiler - /designs sidebokser /sider osv.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Alle designfiler - /design');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Alle designfiler - /sidebokser');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Alle designfiler - /sider');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Sl� opp i alle filer</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Alle oppslag filer:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Alle filer - Katalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Alle filer - Katalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Alle filer - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Ingen endring tilgjengelig');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' eller gjemt');

  define('TEXT_SEARCH_ALL_FILES', 'S�k i ALLE filer etter: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'S�k i konfigurasjonstabeller i databasen etter: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Filtype');
  define('TEXT_ALL_FILES_LOOKUP_PHP', 'Bare .php');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php og .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', 'Bare .css');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html og .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', 'Bare .js');

  define('TEXT_CASE_SENSITIVE', 'Skill mellom sm� og store bokstaver?');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>S�k i konfigurasjonsinnstillinger/-n�kler</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Uttrykk � s�ke etter:</strong> (Dette vil s�ke i konfigurasjonsinnstillingers navn og beskrivelse, og ogs� konfigurasjonsn�kler ved n�yaktig match.)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Seksjon');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Gruppe');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Tittel');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Beskrivelse');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Verdi');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'N�kkelnavn');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Endre');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Ingen konfigurasjonsn�kkel/-n�kler ble funnet.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'konfigurasjonsn�kkel/-n�kler ble funnet.');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Angi ord som det skal s�kes ettter i innstillinger.');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'S�k');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'S�k (sortert etter n�kkel)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Vis alle');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Tilbakestill');

