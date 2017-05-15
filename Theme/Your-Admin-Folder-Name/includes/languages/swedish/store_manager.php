<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: store_manager.php 18698 2011-05-04 14:50:06Z wilt $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  define('HEADING_TITLE', 'Shop Hanterare');
  define('TABLE_CONFIGURATION_TABLE', 'Leta upp CONSTANT Definationer');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>Lyckat</strong> uppdatering f&ouml;r alternativ Sorteringsordning');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Lyckat</strong> uppdatering av Produkt Pris Sorterings v&auml;rden');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Lyckat</strong> &aring;terst&auml;llning av produkt visningar till 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Lyckat</strong> &aring;terst&auml;llning av k&ouml;pta produkter till 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Lyckat</strong> &aring;terst&auml;llning f&ouml;r Huvud Kategori f&ouml;r L&auml;nkade produkter');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Lyckat</strong> R&auml;knare uppdaterat till: ');
  
  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>FEL:</strong> Ingen matchande konfigurations nyckel hittades ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>FEL:</strong> Ingen konfigurations nyckel eller text har angetts f&ouml;r s&ouml;kning ... S&ouml;kningen avbr&ouml;ts');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Uppdatera Tr&auml;ff R&auml;knaren</strong><br /> till ett nytt v&auml;rde: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Uppdatera alla produktpris sorteringsordningar</strong><br />f&ouml;r att kunna sorteras efter visat pris: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>&Aring;terst&auml;ll ALLA Produkt visningar</strong><br />&aring;terst&auml;ll alla produkt visningar till 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>&Aring;terst&auml;ll ALLA Produkt k&ouml;p</strong><br />&aring;terst&auml;ll alla produkt k&ouml;p till 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>&Aring;terst&auml;ll ALLA Huvud Kategori ID</strong><br />f&ouml;r att anv&auml;ndas i l&auml;nkade produkter och kategorier: ');
  
  define('TEXT_NEW_ORDERS_ID', 'Nytt Order ID');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Ange n&auml;sta order nummer</strong><br />NOTERA: Du kan inte s&auml;tta ordermmer till ett l&auml;gre v&auml;rde &auml;n det som finns i databasen.');
  define('TEXT_MSG_NEXT_ORDER', 'N&auml;sta ordernummer har satts till %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'P&aring;grund av existerande post, n&auml;sta ordernummer &auml;r satt till: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'P&aring;grund av databasbegr&auml;nsningar, kan du inte s&auml;tta ordernummer h&ouml;gre &auml;n 2000000000. V&auml;lj ett l&auml;gre nummer.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Leta upp CONSTANT eller spr&aring;kfils definationer</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Key eller Namn:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTERA:</strong> CONSTANTS &auml;r skrivna med stora bokst&auml;ver.<br />s&ouml;kning med spr&aring;k b&ouml;r endast ske om inget har hittats p&aring; s&ouml;kningen i databasen.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Leta upp Spr&aring;k Fil definationer</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Leta upp text:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTERA:</strong> Spr&aring;kfiler kan inneh&aring;lla b&aring;de sm&aring; och stora bokst&auml;ver');

  define('TABLE_TITLE_KEY', '<strong>Nyckel (Key):</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beskrivning:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Grupp:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>V&auml;rde:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Leta upp Spr&aring;kfil:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Ingen');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alla Spr&aring;kfiler f&ouml;r ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alla huvudspr&aring;ksfiler - Katalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alla aktuellt valda spr&aring;kfiler - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alla huvudspr&aring;ksfiler - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alla aktuellt valda spr&aring;kfiler - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alla aktuellt valda spr&aring;kfiler - Katalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Ingen &auml;ndring finns');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' eller, D&Aring;LD (HIDDEN)');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimiera Databas</strong> f&ouml;r att radera on&ouml;diga tomrum i tabeller.<br />b&ouml;r k&ouml;ras varje m&aring;nad eller oftare p&aring; mer aktiva butiker.<br />(B&ouml;r k&ouml;ras p&aring; mindre aktiva f&ouml;rs&auml;ljningstider.)');
    define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Databasens tabeller optimeras. Detta kan ta n&aring;gra minuter. V&auml;nligen v&auml;nta. F&ouml;reg&aring;ende meny &ouml;ppnas n&auml;r det &auml;r klart ... ');
define('SUCCESS_DB_OPTIMIZE', 'Databas Optimiering - Tabeller hanterade: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Rensa Logg Filer</strong><br /><strong>OBSERVERA: </strong>Zen Cart sparar PHP fel meddelande f&ouml;r underl&auml;tta fels&ouml;kning, och m&aring;nga betalningsmoduler kan s&auml;ttas att spara logg data f&ouml;r fels&ouml;ka kommunikations problem. <br />Klicka p&aring; denna l&auml;nk kommer *permanent* radera *ALLA* felloggar som kopplats till PHP fel och f&ouml;r PayPal, Authorize.net, och Linkpoint/FirstData moduler.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Fel Logg Filer Rensade');
