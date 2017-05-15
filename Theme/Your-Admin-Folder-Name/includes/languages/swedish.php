<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: swedish.php 15621 2010-03-06 10:01:29Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Administration e-handel');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
setlocale(LC_TIME, 'sv_SE.utf-8');
define('DATE_FORMAT_SHORT', '%Y-%m-%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %e %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'Y-m-d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y-m-d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'yyyy-MM-dd');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');


// meta tags
define('ICON_METATAGS_ON', 'Meta Taggar finns');
define('ICON_METATAGS_OFF', 'Meta Taggar finns inte');
define('TEXT_LEGEND_META_TAGS', 'Meta Taggar finns:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTERA:</strong> Sidans taggar &auml;r definierade i  meta_tags.php filen.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="se"');

// charset for web pages and emails ISO-8859-1
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Supportsida');
define('HEADER_TITLE_ONLINE_CATALOG', 'Webbshop');
define('HEADER_TITLE_VERSION', 'Version');
define('HEADER_TITLE_ACCOUNT', 'Konto');
define('HEADER_TITLE_LOGOFF', 'Logga Ut');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Presentkort');
  define('TEXT_GV_NAMES','Presentkort');
  define('TEXT_DISCOUNT_COUPON', 'Rabattkupong');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Rabattkod');

// text for gender
define('MALE', 'Man');
define('FEMALE', 'Kvinna');

// text for date of birth example
define('DOB_FORMAT_STRING', 'yyyy-mm-dd');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Konfiguration');
define('BOX_CONFIGURATION_MY_STORE', 'V&aring;r shop');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Minsta v&auml;rde');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'H&ouml;gsta v&auml;rde');
define('BOX_CONFIGURATION_IMAGES', 'Bilder');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Kund detaljer');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Frakt/Packet');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Produkt Listning');
define('BOX_CONFIGURATION_STOCK', 'Lager');
define('BOX_CONFIGURATION_LOGGING', 'Loggbok');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'E-post Inst&auml;llningar');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Attribut inst&auml;llningar');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip Kompremering');
define('BOX_CONFIGURATION_SESSIONS', 'Sessioner');
define('BOX_CONFIGURATION_REGULATIONS', 'Regler');
define('BOX_CONFIGURATION_GV_COUPONS', 'Presentkort');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Kreditkort');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Produkt Info');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Layout Inst&auml;llningar');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Hemsides Hantering');
define('BOX_CONFIGURATION_NEW_LISTING', 'Nya Produkter Listan');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Utvalda Produkter Listan');
define('BOX_CONFIGURATION_ALL_LISTING', 'Alla produkter Listan');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Index Listan');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Definierade Sidor Status');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'EZ-Pages Inst&auml;llningar');

// modules box text
define('BOX_HEADING_MODULES', 'Moduler');
define('BOX_MODULES_PAYMENT', 'Betalning');
define('BOX_MODULES_SHIPPING', 'Frakt');
define('BOX_MODULES_ORDER_TOTAL', 'Order Total');
define('BOX_MODULES_PRODUCT_TYPES', 'Produkt Typ');

// categories box text
define('BOX_HEADING_CATALOG', 'Katalog');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Kategorier/Produkter');
define('BOX_CATALOG_PRODUCT_TYPES', 'Produkt Typ');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Tillvals Namn');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Tillvals V&auml;rde');
define('BOX_CATALOG_MANUFACTURERS', 'Leverant&ouml;r/Tillverkare');
define('BOX_CATALOG_REVIEWS', 'Omd&ouml;mmen');
define('BOX_CATALOG_SPECIALS', 'Erbjudanden');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Kommande Produkter');
define('BOX_CATALOG_SALEMAKER', 'M&auml;ngdrabatt');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Produktpris Hanterare');
define('BOX_CATALOG_PRODUCT', 'Produkt');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Produkter till Kategorier');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_ORDERS', 'Order');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Grupppris');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Faktura');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Packsedel');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Omr&aring;den / Skatt');
define('BOX_TAXES_COUNTRIES', 'Land');
define('BOX_TAXES_ZONES', 'Omr&aring;de');
define('BOX_TAXES_GEO_ZONES', 'Omr&aring;de beskrivning');
define('BOX_TAXES_TAX_CLASSES', 'Skatteklass');
define('BOX_TAXES_TAX_RATES', 'Skattev&auml;rde');

// reports box text
define('BOX_HEADING_REPORTS', 'Rapporter');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produkter Visade');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produkter K&ouml;pta');
define('BOX_REPORTS_ORDERS_TOTAL', 'Kund Order Total');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'L&aring;g Lagerniv&aring;');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Kund Remiss');

// tools text
define('BOX_HEADING_TOOLS', 'Verktyg');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Template Val');
define('BOX_TOOLS_BACKUP', 'Databas Backup');
define('BOX_TOOLS_BANNER_MANAGER', 'Banner Hanterare');
define('BOX_TOOLS_CACHE', 'Cache Kontrol');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Spr&aring;k');
define('BOX_TOOLS_FILE_MANAGER', 'Filhanterare');
define('BOX_TOOLS_MAIL', 'Skicka e-post');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nyhetsbrev och Produkt meddelanden');
define('BOX_TOOLS_SERVER_INFO', 'Server/Version Info');
define('BOX_TOOLS_WHOS_ONLINE', 'Vem &auml;r Online');
define('BOX_TOOLS_STORE_MANAGER', 'Shop Hanterare');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Administrat&ouml;rs verktyg');
define('BOX_TOOLS_SQLPATCH','SQL Hanterare');
define('BOX_TOOLS_EZPAGES','Extra Sidor');

define('BOX_HEADING_EXTRAS', 'Extra');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Infosids hanterare');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Startsida');
define('BOX_TOOLS_DEFINE_CONTACT_US','Kontakta Oss');
define('BOX_TOOLS_DEFINE_PRIVACY','Privat Policy');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Frakt och Returer');
define('BOX_TOOLS_DEFINE_CONDITIONS','Regler');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Avslutat K&ouml;p');
define('BOX_TOOLS_DEFINE_PAGE_2','Sida 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Sida 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Sida 4');

// localizaion box text
define('BOX_HEADING_LOCALIZATION', 'Spr&aring;k/Valuta');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuta');
define('BOX_LOCALIZATION_LANGUAGES', 'Spr&aring;k');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Order Status');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Kupong');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' K&ouml;');
define('BOX_GV_ADMIN_MAIL', 'Epost ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' skickat');
define('BOX_COUPON_ADMIN','Kupong Admin');
define('BOX_COUPON_RESTRICT','Kupong Restriktioner');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Admin &Aring;tkomst hanterare');
define('BOX_ADMIN_ACCESS_USERS',  'Admin Anv&auml;ndare');
define('BOX_ADMIN_ACCESS_PROFILES', 'Admin Profiler');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Admin Sides Registrering');
define('BOX_ADMIN_ACCESS_LOGS', 'Admin Aktivitets Loggar');

define('IMAGE_RELEASE', 'Inl&ouml;sning ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Ett fel uppstog i n&aring;got f&auml;lt!\nR&auml;tta till f&ouml;ljande:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Produktens tillval beh&ouml;ver ett pris.\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Produkten beh&ouml;ver ett pris prefix\n');

define('JS_PRODUCTS_NAME', '* Produkten m&aring;ste ha ett namn.\n');
define('JS_PRODUCTS_DESCRIPTION', '* Produkten beh&ouml;ver en beskrivning.\n');
define('JS_PRODUCTS_PRICE', '* Produkten beh&ouml;ver ett pris.\n');
define('JS_PRODUCTS_WEIGHT', '* Produkten saknar vikt.\n');
define('JS_PRODUCTS_QUANTITY', '* Produkten beh&ouml;ver ett best&auml;llnings antal.\n');
define('JS_PRODUCTS_MODEL', '* Ingen modell har givits\n');
define('JS_PRODUCTS_IMAGE', '* Produkten saknar bild.\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Ett nytt pris m&aring;ste s&auml;ttas.\n');

define('JS_GENDER', '*  \'K&ouml;n\' m&aring;ste v&auml;ljas.\n');
define('JS_FIRST_NAME', '*  \'F&ouml;rnamn\' m&aring;ste ha minst ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tecken.\n');
define('JS_LAST_NAME', '* \'Efternamn\' m&aring;ste ha minst ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tecken.\n');
define('JS_DOB', '* The \'F&ouml;delsedatum\' m&aring;ste ha f&ouml;ljande format: &Aring;&Aring;&Aring;&Aring;/MM/DD (&Aring;r/M&aring;nad/Dag).\n');
define('JS_EMAIL_ADDRESS', '* \'E-post Adress\' m&aring;ste ha minst ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tecken.\n');
define('JS_ADDRESS', '* \'Adress\' m&aring;ste ha minst ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tecken.\n');
define('JS_POST_CODE', '* \'Postnr\' m&aring;ste ha minst ' . ENTRY_POSTCODE_MIN_LENGTH . ' tecken.\n');
define('JS_CITY', '* \'Ort\' m&aring;ste ha minst ' . ENTRY_CITY_MIN_LENGTH . ' tecken.\n');
define('JS_STATE', '* \'Omr&aring;de\' m&aring;ste v&auml;ljas.\n');
define('JS_STATE_SELECT', '-- V&auml;lj Omr&aring;de --');
define('JS_ZONE', '* \'Omr&aring;de\' m&aring;ste v&auml;ljas fr&aring;n valet av land.');
define('JS_COUNTRY', '* \'Land\' m&aring;ste v&auml;ljas.\n');
define('JS_TELEPHONE', '* \'Telefonnummer\' m&aring;ste ha minst ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tecken.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Ordernummer %s finns inte!');

define('CATEGORY_PERSONAL', 'Personligt');
define('CATEGORY_ADDRESS', 'Adress');
define('CATEGORY_CONTACT', 'Kontakt');
define('CATEGORY_COMPANY', 'F&ouml;retag');
define('CATEGORY_OPTIONS', 'Tillval');

define('ENTRY_GENDER', 'K&ouml;n:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">Obligatorisk</span>');
define('ENTRY_FIRST_NAME', 'F&ouml;rnamn:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tecken</span>');
define('ENTRY_LAST_NAME', 'Efternamn:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tecken</span>');
define('ENTRY_DATE_OF_BIRTH', 'F&ouml;delsedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 1979/05/21)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-post Adress:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tecken</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">E-postadressen &auml;r inte riktig!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">E-postadressen finns redan i v&aring;rt register!</span>');
define('ENTRY_COMPANY', 'F&ouml;retag/F&ouml;rening:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Rabattgrupp pris');
define('ENTRY_STREET_ADDRESS', 'Adress:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tecken</span>');
define('ENTRY_SUBURB', 'Adress rad 2:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Postnummer:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_POSTCODE_MIN_LENGTH . ' tecken</span>');
define('ENTRY_CITY', 'Ort:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_CITY_MIN_LENGTH . ' tecken</span>');
define('ENTRY_STATE', 'Omr&aring;de:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obligatorisk</span>');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minst ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tecken</span>');
define('ENTRY_FAX_NUMBER', 'Fax Nummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Nyhetsbrev:');
define('ENTRY_NEWSLETTER_YES', 'Ja');
define('ENTRY_NEWSLETTER_NO', 'Nej');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'L&ouml;senordet och bekr&auml;ftelse m&aring;ste vara samma');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Beklagar, ditt nya l&ouml;senord &auml;r inte godk&auml;nt.</strong><br />');
define('ERROR_PASSWORD_RULES', 'L&ouml;senord m&aring;ste inneh&aring;lla b&aring;de bokst&auml;ver och siffror, och m&aring;ste vara minst %s tecken l&aring;ngt, och inte n&aring;got av de fyra sist anv&auml;nda l&ouml;senorden. L&ouml;senorden g&aring;r ut efter 90 dagar.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'FEL: Beklagar, Ett fel uppstod under hanteringen av informationen. V&auml;nligen skicka informationen igen.');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Skicka e-post');
define('IMAGE_BACK', 'Tillbaka');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_CANCEL', '&Aring;ngra');
define('IMAGE_CONFIRM', 'Bekr&auml;fta');
define('IMAGE_COPY', 'Kopiera');
define('IMAGE_COPY_TO', 'Kopiera till');
define('IMAGE_DETAILS', 'Detaljer');
define('IMAGE_DELETE', 'Radera');
define('IMAGE_EDIT', '&Auml;ndra');
define('IMAGE_EMAIL', 'E-post');
define('IMAGE_GO', 'K&ouml;r');
define('IMAGE_FILE_MANAGER', 'Filhanterare');
define('IMAGE_ICON_STATUS_GREEN', 'Aktiv');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Ange Aktiv');
define('IMAGE_ICON_STATUS_RED', 'Inaktiv');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Ange Inaktiv');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'FEL -- F&ouml;r m&aring;nga URL/inneh&aring;lls typer angivna');
define('IMAGE_ICON_STATUS_RED_ERROR', 'FEL');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Infoga');
define('IMAGE_LOCK', 'L&aring;s');
define('IMAGE_MODULE_INSTALL', 'Installera Modul');
define('IMAGE_MODULE_REMOVE', 'Radera Modul');
define('IMAGE_MOVE', 'Flytta');
define('IMAGE_NEW_BANNER', 'Ny Banner');
define('IMAGE_NEW_CATEGORY', 'Ny Kategori');
define('IMAGE_NEW_COUNTRY', 'Nytt Land');
define('IMAGE_NEW_CURRENCY', 'Ny Valuta');
define('IMAGE_NEW_FILE', 'Ny Fil');
define('IMAGE_NEW_FOLDER', 'NY Mapp');
define('IMAGE_NEW_LANGUAGE', 'Nytt Spr&aring;k');
define('IMAGE_NEW_NEWSLETTER', 'Nytt Nyhetsbrev');
define('IMAGE_NEW_PRODUCT', 'Ny Produkt');
define('IMAGE_NEW_SALE', 'Ny Rea');
define('IMAGE_NEW_TAX_CLASS', 'Ny Skatteklass');
define('IMAGE_NEW_TAX_RATE', 'Ny skatteniv&aring;');
define('IMAGE_NEW_TAX_ZONE', 'Nytt skatteomr&aring;de');
define('IMAGE_NEW_ZONE', 'Nytt Omr&aring;de');
define('IMAGE_OPTION_NAMES', 'Tillvalsnamn');
define('IMAGE_OPTION_VALUES', 'Tillvalsv&auml;rde');
define('IMAGE_ORDERS', 'Order');
define('IMAGE_ORDERS_INVOICE', 'Faktura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packningslista');
define('IMAGE_PERMISSIONS', '&Auml;ndra beh&ouml;righet');
define('IMAGE_PREVIEW', 'Granska');
define('IMAGE_RESTORE', '&Aring;terst&auml;ll');
define('IMAGE_RESET', 'Nollst&auml;ll');
define('IMAGE_SAVE', 'Spara');
define('IMAGE_SEARCH', 'S&ouml;k');
define('IMAGE_SELECT', 'V&auml;lj');
define('IMAGE_SEND', 'Skicka');
define('IMAGE_SEND_EMAIL', 'Skicka e-post');
define('IMAGE_SUBMIT', 'Skicka');
define('IMAGE_UNLOCK', 'L&aring;s Upp');
define('IMAGE_UPDATE', 'Uppdatera');
define('IMAGE_UPDATE_CURRENCIES', 'Uppdatera valuta');
define('IMAGE_UPLOAD', 'Ladda Upp');
define('IMAGE_TAX_RATES','Skatteniv&aring;');
define('IMAGE_DEFINE_ZONES','ANge Omr&aring;de');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Produkt Pris Hanterare');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Uppdatera pris&auml;ndringar');
define('IMAGE_ADD_BLANK_DISCOUNTS','L&auml;gg till ' . DISCOUNT_QTY_ADD . ' tomma antal v&auml;rden');
define('IMAGE_CHECK_VERSION', 'Kontrollera om ny version finns av systemet');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Masskategori l&auml;nk hantering');

define('IMAGE_ICON_STATUS_ON', 'Status - På');
define('IMAGE_ICON_STATUS_OFF', 'Status - Av');
define('IMAGE_ICON_LINKED', 'Produkt &auml;r l&auml;nkad');

define('IMAGE_REMOVE_SPECIAL','Radera Erbjudande Info');
define('IMAGE_REMOVE_FEATURED','Radera Heta Produkter Info');
define('IMAGE_INSTALL_SPECIAL', 'L&auml;gg till Erbjudande Info');
define('IMAGE_INSTALL_FEATURED', 'L&auml;gg till Heta Produkter Info');

define('ICON_PRODUCTS_PRICE_MANAGER','Produktpris Hanterare');
define('ICON_COPY_TO', 'Kopiera till');
define('ICON_CROSS', 'Falskt');
define('ICON_CURRENT_FOLDER', 'Aktuell Mapp');
define('ICON_DELETE', 'Radera');
define('ICON_EDIT', '&Auml;ndra');
define('ICON_ERROR', 'Fel');
define('ICON_FILE', 'Fil');
define('ICON_FILE_DOWNLOAD', 'Nerladdning');
define('ICON_FOLDER', 'Mapp');
//define('ICON_LOCKED', 'L&aring;st');
define('ICON_MOVE', 'Flytta');
define('ICON_PERMISSIONS', 'Beh&ouml;righet');
define('ICON_PREVIOUS_LEVEL', 'F&ouml;reg&aring;ende Niv&aring;');
define('ICON_PREVIEW', 'Granska');
define('ICON_RESET', 'Nollst&auml;ll');
define('ICON_STATISTICS', 'Statistik');
define('ICON_SUCCESS', 'Lyckat');
define('ICON_TICK', 'Sant');
define('ICON_UNLOCKED', 'Ol&aring;st');
define('ICON_WARNING', 'Varning');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Sida %s av %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> administrat&ouml;rer)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> banner)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kategorier)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> l&auml;nder)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kunder)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> valutor)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> utvalda produkter)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> spr&aring;k)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> tillverkare/leverant&ouml;rer)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> nyhetsbrev)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> ordrar)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> order status)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> pris grupper)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> produkter)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> produkt typer)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kommande produkter)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> produkt omd&ouml;mmen)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> REA)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> erbjudanden)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> skatt classes)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> template val)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> skatteomr&aring;den)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> skatteniv&aring;er)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> omr&aring;den)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'vald');
define('TEXT_SET_DEFAULT', 'Ange som vald');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* obligatorisk</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Fel: Det finns ingen vald valuta v&auml;lj den under: Administration Verktyg->Spr&aring;k/Valuta->Valuta');

define('TEXT_CACHE_CATEGORIES', 'Kategorier');
define('TEXT_CACHE_MANUFACTURERS', 'Leverant&ouml;rer/Tillverkare');
define('TEXT_CACHE_ALSO_PURCHASED', '&Auml;ven k&ouml;pt Modul');

define('TEXT_NONE', '--inget--');
define('TEXT_TOP', 'Topp');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fel: m&aring;let finns inte %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Fel: m&aring;let kan inte skrivas &ouml;ver %s');
define('ERROR_FILE_NOT_SAVED', 'Fel: Filen sparades inte.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Fel: Filens typ &auml;r inte godk&auml;nd  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Lyckat: Filen har sparats %s');
define('WARNING_NO_FILE_UPLOADED', 'Varning: Ingen fil laddades upp.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Varning: Filuppladdning till&aring;ts inte p&aring; servern.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Varning: Administrationen &auml;r inte s&auml;ker ... Du kanske inte &auml;ndrat: Admin admin eller inte tagit bort: demo demoonly<br />Inloggningen m&aring;ste &auml;ndras snarast<br />G&aring; till Verktyg->Admin Inst&auml;llningar f&ouml;r att &auml;ndra admin anv&auml;ndarinformationen.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Din databas beh&ouml;ver uppdateras till en nyare version. Se Verktyg->Server Information f&ouml;r att se hur du skall g&ouml;ra.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>VARNING:</strong> Sidan &auml;r nere f&ouml;r uppdatering ...<br />NOTERA: YDe flesta betalnings och fraktmodulerna fungerar inte i detta l&auml;ge.');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'Varning: Dessa filer borde raderas f&ouml;r att h&aring;lla h&ouml;gre s&auml;kerhet: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Varning: Installationskatalogen finns kvar: ' . DIR_FS_CATALOG . 'zc_install. V&auml;nligen radera denna av s&auml;kerhetssk&auml;l.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Varning: Din konfigurationsfil: %sincludes/configure.php. Denna kan vara en s&auml;kerhetsrisk - V&auml;nligen s&auml;tt r&auml;tt beh&ouml;righet till filen (read-only, CHMOD 644 eller 444 &auml;r vanligast).  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Se hj&auml;lp (p&aring; engelska)</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'VARNING: Kunde inte hitta spr&aring;kfilen: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'FEL: Modulen f&aring;r inte raderas: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'VARNING: V&auml;nligen granska efter m&ouml;jliga XSS aktiviteter:');

define('_JANUARY', 'Januari');
define('_FEBRUARY', 'Februari');
define('_MARCH', 'Mars');
define('_APRIL', 'April');
define('_MAY', 'Maj');
define('_JUNE', 'Juni');
define('_JULY', 'Juli');
define('_AUGUST', 'Augusti');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'Oktober');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'December');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> presentkort)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kuponger)');

define('TEXT_VALID_PRODUCTS_LIST', 'Produkt Lista');
define('TEXT_VALID_PRODUCTS_ID', 'Produkt ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Produkt Namn');
define('TEXT_VALID_PRODUCTS_MODEL', 'Produkt Modell');

define('TEXT_VALID_CATEGORIES_LIST', 'Kategori Lista');
define('TEXT_VALID_CATEGORIES_ID', 'Kategori ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Kategori Namn');

define('DEFINE_LANGUAGE','Spr&aring;k:');

define('BOX_ENTRY_COUNTER_DATE','Bes&ouml;ksr&auml;knare startad:');
define('BOX_ENTRY_COUNTER','Bes&ouml;ksr&auml;knare:');

// not installed
define('NOT_INSTALLED_TEXT','Inte installerad');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Tillvals v&auml;rde sortering ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Uppdatera sorteringsordning fr&aring;n valt</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Uppdatera alla produkter\' Sorteringsordning</strong><br />f&ouml;r att matcha:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Tillvals namn sortering');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Tillvals hanterare');

// generic model
  define('TEXT_MODEL','Artikelnr:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Sidbox hantering');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s v&auml;ntar p&aring; godk&auml;nnande ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' K&ouml;');
  define('IMAGE_ORDER','Order');

  define('BOX_TOOLS_EMAIL_WELCOME','V&auml;lkomst E-post');

  define('IMAGE_DISPLAY','Visa');
  define('IMAGE_UPDATE_SORT','Uppdatera sorteringsordning');
  define('IMAGE_EDIT_PRODUCT','&Auml;ndra produkt');
  define('IMAGE_EDIT_ATTRIBUTES','&Auml;ndra tillval');
  define('TEXT_NEW_PRODUCT', 'Produkt i Kategori: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Tillval');
  define('TEXT_PRODUCTS_PRICE_MANAGER','Produktpris Hanterare');
  define('TEXT_PRODUCT_EDIT','&Auml;ndra Produkt');
  define('TEXT_ATTRIBUTE_EDIT','&Auml;ndra Tillval');
  define('TEXT_PRODUCT_DETAILS','Visa Detaljer');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Belopp Avdrag');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Procent (%)');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nytt Pris');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minst:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Antal:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','I kundkorgen:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','L&auml;gg till Extra:');

  define('TEXT_PRODUCTS_MIX_OFF','*Inget Mixat Tillval');
  define('TEXT_PRODUCTS_MIX_ON','*Mixat Tillval');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','S&ouml;k Filter: ');
  define('HEADING_TITLE_SEARCH_DETAIL','S&ouml;k: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'S&ouml;k efter produkter - separerade med komma');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'S&ouml;k efter Produkter Namn/artikelnr');

  define('PREV_NEXT_PRODUCT', 'Produkter: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Kategorin &auml;r avst&auml;ngd</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Produkt &auml;r avst&auml;ngd</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Admin Demo &auml;r aktivt. Vissa funktioner &auml;r avst&auml;ngda');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Admin Demo &auml;r aktivt. Vissa funktioner &auml;r avst&auml;ngda - <strong>NOTERA: Admin &Ouml;verordnad P&aring;</strong>');
  define('ERROR_ADMIN_DEMO','Admin Demo &auml;r aktiv ... Denna funktion &auml;r avst&auml;ngd');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Ny Version finns v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Ny uppdatering finns: v');
  define('TEXT_VERSION_CHECK_PATCH','uppdatering');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Ladda ner');
  define('TEXT_VERSION_CHECK_CURRENT','Denna version verkar vara den senaste.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> nerladdningar)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Nerladdningar');

define('BOX_CATALOG_FEATURED','Utvalda Produkter');

define('ERROR_NOTHING_SELECTED', 'Inget var valt ... Inga &auml;ndringar har gjorts');
define('TEXT_STATUS_WARNING','<strong>NOTERA:</strong> status &auml;r auto p&aring;/av n&auml;r datum har satts');

define('TEXT_LEGEND_LINKED', 'L&auml;nkad Produkt');
define('TEXT_MASTER_CATEGORIES_ID','Produkt Huvudkategori:');
define('TEXT_LEGEND', 'F&ouml;rlopp: ');
define('TEXT_LEGEND_STATUS_OFF', 'Status Av');
define('TEXT_LEGEND_STATUS_ON', 'Status På');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTERA: Huvudkategori anv&auml;nds f&ouml;r priss&auml;ttning<br />d&auml;r produkt kategorin p&aring;verkar priset p&aring; l&auml;nkade produkter, exempel: REA</strong>');
define('TEXT_YES', 'Ja');
define('TEXT_NO', 'Nej');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Frakt konfigurations fel!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Varning:</strong> Shoppens postnummer har inte konfigurerats. Se Konfiguration | Frakt/Packning f&ouml;r att ange den.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Varning:</strong> 0 vikt &auml;r konfigurerad f&ouml;r Fri Frakt och modulen &auml;r avst&auml;ngd');
define('ERROR_USPS_STATUS', '<strong>Warning:</strong> USPS saknas och/eller fel inloggningsinformation och/eller ... &auml;r satt till TEST ist&auml;llet f&ouml;r PRODUCTION och kommer inte att fungera<br />Om detta inte kommer att fungera kontakta USPS.');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTERA: Du har ingen fraktmodul aktiverad. V&auml;nligen g&aring; till Moduler->Frakt f&ouml;r att konfigurera.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTERA: Du har ingen betalningsmodul aktiverad. V&auml;nligen g&aring; till Moduler->Betalning f&ouml;r att konfigurera.');

// text pricing
define('TEXT_CHARGES_WORD','Kalkylerad kostnad:');
define('TEXT_PER_WORD','<br />Pris per ord: ');
define('TEXT_WORDS_FREE',' fria ord ');
define('TEXT_CHARGES_LETTERS','Kalkylerad kostnad:');
define('TEXT_PER_LETTER','<br />Pris per tecken: ');
define('TEXT_LETTERS_FREE',' fria tecken ');
define('TEXT_ONETIME_CHARGES','*eng&aring;ngskostnad = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*eng&aring;ngskostnad = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Tillvalets Antal Rabatterat');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','ANTAL');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIS');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Tillvalets Antal Rabatterat Eng&aring;ngskostnad');
define('TEXT_CATEGORIES_PRODUCTS', 'V&auml;lj Kategori med produkter ... Eller flytta mellan produkter');
define('TEXT_PRODUCT_TO_VIEW', 'V&auml;lj produkt och klicka p&aring; Visa ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Fel Huvudkategori ID');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>VARNING:</strong> Denna produkt &auml;r l&auml;nkad till flera kategorier men har ingen huvudkategori!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Produkten &auml;r Ring F&ouml;r Pris');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Produkten &auml;r gratis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Spara:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% rabatt');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;rabatt');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','REA:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Om du inte har HTML editor aktiv eller har JavaScript avst&auml;ngt, m&aring;ste du skriva kod manuellt h&auml;r.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Notera: Du anv&auml;nder TEXT endast e-post. om du vill skicka med HTML m&aring;ste du ange "anv&auml;nd MIME HTML" under E-post tillval</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Notera: Du anv&auml;nder TEXT endast e-post. om du vill skicka med HTML m&aring;ste du ange "anv&auml;nd MIME HTML" under E-post tillval</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Du ser detta meddelande eftersom vi skickat ett HTML meddelande och din e-post hanterare &auml;r inst&auml;lld p&aring; att inte visa HTML.");
define('ENTRY_EMAIL_PREFERENCE','E-post Format Pref:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','V&auml;lj "ingen" eller "optout" (reklam e-post) &auml;r avst&auml;ngt f&ouml;r ALL e-post, inkluderat order detaljer');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT');
define('ENTRY_EMAIL_NONE_DISPLAY','ALDRIG');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Valt bort Nyhetsbrev');
define('ENTRY_NOTHING_TO_SEND','Du har inget inneh&aring;ll i ditt meddelande');
 define('EMAIL_SEND_FAILED','Fel: misslyckades med att skicka till: "%s" <%s> med rubriken: "%s"');

  define('EDITOR_NONE', 'Oformaterad Text');
  define('TEXT_EDITOR_INFO', 'Text Hanterare');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Du har en HTML text hanterare vald i \'Min Butik\' men den hittas inte i \'/editors/\' katalogen. Byt editor eller flytta editorns filer in i \''.DIR_WS_CATALOG.'editors/\' mappen');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Kategori/Produkt Visnings Ordning: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Produkt Sorteringsordning, Produkt Namn');
  define('TEXT_SORT_PRODUCTS_NAME', 'Produkt Namn');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Produkt Modell');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Produkt Antal+, Produkt Namn');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Produkt ANtal-, Produkt Namn');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Produkt Pris+, Produkt Namn');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Produkt Pris-, Produkt Namn');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Kategori sorteringsordning, Kategori Namn');
  define('TEXT_SORT_CATEGORIES_NAME', 'Kategori Namn');



  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nej');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Eller, v&auml;lj en existerande bild fil fr&aring;n servern, filnamn:</strong>');
  define('TEXT_IMAGES_OVERWRITE', 'Skriv &ouml;ver existerande bild? ');
  define('TEXT_IMAGE_OVERWRITE_WARNING','VARNING: FILNAMNET var uppdaterat men inte &ouml;verskrivit ');
  define('TEXT_IMAGES_DELETE', '<strong>Radera bilden?</strong> NOTERA: Bilden raderas fr&aring;n produkten, Bilden &auml;r INTE raderad fr&aring;n servern:');
  define('TEXT_IMAGE_CURRENT', 'Bild Namn: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Varning: Inget Tillvals Namn har valts');
  define('ERROR_DEFINE_OPTION_VALUES', 'Varning: Inget TIllvals V&auml;rde har valts');
  define('ERROR_DEFINE_PRODUCTS', 'Varning: Ingen Produkt har valts');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Varning: Ingen Huvudkategori har valts f&ouml;r produkten');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','L&auml;gg till Inkluderat underkategorier');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','L&auml;gg till utan underkategorier');

  define('BUTTON_PREVIOUS_ALT','F&ouml;reg&aring;ende Produkt');
  define('BUTTON_NEXT_ALT','N&auml;sta Produkt');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Flera Kategorier L&auml;nknings Hantering');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Kopiera till flera kategorier');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Alla Globala Kopiera, L&auml;gg till och Radera funktioner &auml;r avst&auml;ngda');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Visa Globala Funktioner - P&Aring;');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Visa GLobala Funktioner - AV');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fel: Kan inte l&auml;nka produkter i samma kategori.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fel: Katalogens bildmapp &auml;r inte skrivbar: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fel: Bildmappen finns inte: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Fel: Kategori kan inte flyttas till sin underkategori.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Fel: Kan inte flytta en produkt inom den kategori den redan finns.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Fel: Kategorin har produkter!<br /><br />Kategorier har antingen underkategorier eller produkter!');
  define('SUCCESS_CATEGORY_MOVED', 'Lyckat! Kategorin har flyttats ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Fel: Kan inte flytta till samma Kategori! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'VARNING: SIDINFO HUVUD - P&aring; f&ouml;r Admin IP Endast');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'VARNING: SIDINFO FOT - P&aring; f&ouml;r Admin IP Endast');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'VARNING: SIDINFO SIDBOX - P&aring; f&ouml;r Admin IP Endast');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Varning: Denna produkt &auml;r markerad som - Fri Frakt och skippa Frakt adress<br />Ingen frakt adress beh&ouml;vs d&aring; produkterna &auml;r virtuella');
  define('TEXT_VIRTUAL_EDIT','Varning: Denna produkt &auml;r markerad som - Fri Frakt och skippa Frakt adress<br />Ingen frakt adress beh&ouml;vs d&aring; produkterna &auml;r virtuella');
  define('TEXT_FREE_SHIPPING_PREVIEW','Varning: Denna produkt &auml;r markerad - Fri Frakt, Frakt adress Obligatorisk<br />Modulen beh&ouml;vs n&auml;r alla produkter &auml;r Fria fr&aring;n Frakt');
  define('TEXT_FREE_SHIPPING_EDIT','Varning: Ja g&ouml;r produkten - Fri Frakt, Frakt adress Obligatorisk<br />Modulen beh&ouml;vs n&auml;r alla produkter &auml;r Fria fr&aring;n Frakt');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'VARNING: Aktivitetsloggen har tv&aring; m&aring;nader gamla noteringar och skall t&ouml;mmas ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'VARNING: Aktivitetsloggen har mer &auml;n 50,000 noteringar och skall t&ouml;mmas ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'G&aring; till Shop Hanteraren f&ouml;r att T&ouml;mma Aktivitetsloggen');

  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTERA: Kategorin har underkategorier<br />Produkter kan inte l&auml;ggas till');

 define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'VARNING! V&auml;lkommen Epost Rabattkupong giltlig i %s dagar');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'VARNING: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Din /admin/ katalognamn skall d&ouml;pas om till n&aring;got mindre vanligt</a>, f&ouml;r att hindra obeh&ouml;rig &aring;tkomst.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'VARNING: E-post hanteringen &auml;r avst&auml;ngd. Ingen Epost skickas innan denna &auml;r &aring;terst&auml;lld i Admin->Konfiguration->E-post inst&auml;llningar.');
define('TEXT_CURRENT_VER_IS', 'Du anv&auml;nder: ');
define('ERROR_NO_DATA_TO_SAVE', 'FEL: Informationen du skickade var tomt. DINA &Auml;NDRINGAR HAR *INTE* SPARATS. Du kan ha problem med din webbl&auml;sare eller internet anslutning.');
define('TEXT_HIDDEN', 'Dold');
define('TEXT_VISIBLE', 'Visa');
define('TEXT_HIDE', 'D&ouml;lj');
define('TEXT_EMAIL', 'Epost');
define('TEXT_NOEMAIL', 'Ingen Epost');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));












