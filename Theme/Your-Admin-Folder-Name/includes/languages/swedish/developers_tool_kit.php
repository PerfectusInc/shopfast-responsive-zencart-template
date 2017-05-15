<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: developers_tool_kit.php 18698 2011-05-04 14:50:06Z wilt $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  define('HEADING_TITLE', 'Administrat&ouml;rs verktyg');
  define('TABLE_CONFIGURATION_TABLE', 'S&ouml;k upp KONSTANTA definationer');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Lyckad</strong> uppdatering f&ouml;r produkt pris sorterings v&auml;rden');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>FEL:</strong> Ingen matchande konfigurerings nyckel hittades ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>FEL:</strong> Ingen konfigurations nyckel eller text angavs f&ouml;r s&ouml;kning ... S&ouml;kningen avbruten');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Uppdatera ALLA Produkt Pris Sortereringar</strong><br />f&ouml;r att kunna sortera efter korrekt pris: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Leta upp KONSTANTA eller spr&aring;k Fil definationer</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Nyckel eller Namn:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTERA:</strong> KONSTANT skrivs med versaler.<br />spr&aring;k filer, funktioner, klasser, etc. leta upp sker om inget  hittas i databastabeller, om detta &auml;r angivet i rullningslisten');

  define('TABLE_TITLE_KEY', '<strong>Nyckel:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beskrivning:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Grupp:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>V&auml;rde:</strong>');

  define('TEXT_LOOKUP_NONE', 'Inget');
  define('TEXT_INFO_SEARCHING', 'S&ouml;ker ');
  define('TEXT_INFO_FILES_FOR', ' filer ... f&ouml;r: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Inga tr&auml;ffar: ');
  define('TEXT_INFO_FILENAME', 'FILNAMN: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Leta upp spr&aring;k fil:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alla spr&aring;k filer f&ouml;r ' . strtoupper($_SESSION['language']) . ' - Katalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alla huvud spr&aring;k filer - Katalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /swedish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alla spr&aring;k filer - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alla huvud spr&aring;k filer - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /swedish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alla spr&aring;kfiler  - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alla valda spr&aring;k filer - Katalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Leta upp Funktioner eller saker i funktion filer</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Leta upp funktion fil:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Alla Funktion filer - Katalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Alla Funktion filer - Katalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Alla Funktion filer - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Leta upp Klasser (classes) eller saker i Klass filer</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Leta upp Klass filer:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Alla Klass filer - Katalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Alla Klass filer - Katalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Alla Klass filer - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Leta upp Templates filer</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Leta upp Templates filer:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Alla Template filer - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Alla Template filer - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Alla Template filer - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Alla Template files - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Leta upp i alla filer</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Leta upp i alla filer:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Alla Filer - Katalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Alla Filer - Katalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Alla Filer - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Inget finns att &auml;ndra');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' eller, HIDDEN (d&aring;lt)');
  
  define('TEXT_SEARCH_ALL_FILES', 'S&ouml;k ALLA filer efter: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'S&ouml;k i databas konfigurations tabeller efter: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Fil typ');
  define('TEXT_ALL_FILES_LOOKUP_PHP', '.php endast');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php och .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', '.css endast');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html och .txt');
   define('TEXT_ALL_FILES_LOOKUP_JS', '.js endast');
  define('TEXT_CASE_SENSITIVE', 'Tecken k&auml;nslig?');
?>