<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Oct 28 23:52:35 2013 -0400 Modified in v1.5.2 $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('nl_NL', 'nl_NL.utf8', 'nl', 'Dutch');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // wordt gebruikt voor strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // wordt gebruikt voor strftime()
define('DATE_FORMAT', 'd/m/Y'); // wordt gebruikt voor date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // wordt gebruikt voor date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Alleen 'dd', 'MM' and 'yyyy' gebruiken, in de gewenste volgorde
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
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
define('ICON_METATAGS_ON', 'Meta tags gedefinieërd');
define('ICON_METATAGS_OFF', 'Meta tags niet gedefinieërd');
define('TEXT_LEGEND_META_TAGS', 'Meta tags gedefinieërd:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>Opmerking:</strong> De Site/Tagline is de beschrijving van de site in the meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="nl"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Admin Home');
define('HEADER_TITLE_SUPPORT_SITE', 'Support Site');
define('HEADER_TITLE_ONLINE_CATALOG', '"Live winkel"');
define('HEADER_TITLE_VERSION', 'Versie');
define('HEADER_TITLE_ACCOUNT', 'Account');
define('HEADER_TITLE_LOGOFF', 'Afmelden');
//define('HEADER_TITLE_ADMINISTRATION', 'Administratie');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','eCadeaubon');
  define('TEXT_GV_NAMES','eCadeaubonnen');
  define('TEXT_DISCOUNT_COUPON', 'Kortingsbon');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM','Inwisselcode');

// text for gender
define('MALE', 'De heer');
define('FEMALE', 'Mevrouw');

define('NONE', 'Geen');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Configuratie');
define('BOX_CONFIGURATION_MY_STORE', 'Mijn winkel');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Minimale waarden');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Maximale waarden');
define('BOX_CONFIGURATION_IMAGES', 'Plaatjes');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Klantdetails');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Verzending/Verpakking');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Artikellijst');
define('BOX_CONFIGURATION_STOCK', 'Voorraad');
define('BOX_CONFIGURATION_LOGGING', 'Logboek-instellingen');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'E-Mail Opties');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Attribute-instellingen');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip Compressie');
define('BOX_CONFIGURATION_SESSIONS', 'Sessies');
define('BOX_CONFIGURATION_REGULATIONS', 'Regelgeving');
define('BOX_CONFIGURATION_GV_COUPONS', 'GV Coupons');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Credit Cards');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Produktinfo');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Layout-instellingen');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Websiteonderhoud');
define('BOX_CONFIGURATION_NEW_LISTING', 'Nieuw weergave');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Aanbevolen weergave');
define('BOX_CONFIGURATION_ALL_LISTING', 'Alles weergave');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Index weergave');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Define paginastatus');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'EZ-Pagina-instellingen');

// modules box text
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Betaalmethode');
define('BOX_MODULES_SHIPPING', 'Verzendmethode');
define('BOX_MODULES_ORDER_TOTAL', 'Opbouw factuur ');
define('BOX_MODULES_PRODUCT_TYPES', 'Artikelsoort');

// categories box text
define('BOX_HEADING_CATALOG', 'Assortiment');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorieën/Artikelen');
define('BOX_CATALOG_PRODUCT_TYPES', 'Artikelsoort');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Optienaam beheer');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Optiewaarde beheer');
define('BOX_CATALOG_MANUFACTURERS', 'Fabrikanten');
define('BOX_CATALOG_REVIEWS', 'Recensies');
define('BOX_CATALOG_SPECIALS', 'Aanbiedingen');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Verwachte artikelen');
define('BOX_CATALOG_SALEMAKER', 'VerkoopBevorderingTool');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Prijsbeheer');
define('BOX_CATALOG_PRODUCT', 'Product');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Products to Categories');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Klanten');
define('BOX_CUSTOMERS_CUSTOMERS', 'Klantgegevens');
define('BOX_CUSTOMERS_ORDERS', 'Bestellingen');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Prijsgroepen');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Factuur');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Pakbon');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Geografie / Belasting');
define('BOX_TAXES_COUNTRIES', 'Landen');
define('BOX_TAXES_ZONES', 'Provinciën');
define('BOX_TAXES_GEO_ZONES', 'Belastingzone');
define('BOX_TAXES_TAX_CLASSES', 'Tariefgroep belasting');
define('BOX_TAXES_TAX_RATES', 'Belastingtarieven');

// reports box text
define('BOX_HEADING_REPORTS', 'Rapporten');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Bekeken artikelen');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Bestelde artikelen');
define('BOX_REPORTS_ORDERS_TOTAL', 'Bestellingen per klant');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Laag Voorraadniveau');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Referentie per klant');

// tools text
define('BOX_HEADING_TOOLS', 'Hulpmiddelen');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Selectie template');
define('BOX_TOOLS_BACKUP', 'Database backup');
define('BOX_TOOLS_BANNER_MANAGER', 'Bannerbeheer');
define('BOX_TOOLS_CACHE', 'Cachebeheer');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Kies taal');
define('BOX_TOOLS_FILE_MANAGER', 'Bestandsbeheer');
define('BOX_TOOLS_MAIL', 'E-mail versturen');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nieuwsbriefbeheer en produktnotificaties');
define('BOX_TOOLS_SERVER_INFO', 'Server/versie informatie');
define('BOX_TOOLS_WHOS_ONLINE', 'Wie is online');
define('BOX_TOOLS_STORE_MANAGER', 'Winkelbeheer');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Ontwikkelaar tool kit');
define('BOX_TOOLS_SQLPATCH','Installeer SQL Patches');
define('BOX_TOOLS_EZPAGES','EZ-Pagina editor');

define('BOX_HEADING_EXTRAS', 'Extra');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Kies pagina editor');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Startpagina');
define('BOX_TOOLS_DEFINE_CONTACT_US','Neem contact op');
define('BOX_TOOLS_DEFINE_PRIVACY','Privacy verklaring');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Verzenden & retouren');
define('BOX_TOOLS_DEFINE_CONDITIONS','Algemene (leverings)voorwaarden');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Afrekenen succesvol');
define('BOX_TOOLS_DEFINE_PAGE_2','pagina 2');
define('BOX_TOOLS_DEFINE_PAGE_3','pagina 3');
define('BOX_TOOLS_DEFINE_PAGE_4','pagina 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Taal & Valuta');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuta');
define('BOX_LOCALIZATION_LANGUAGES', 'Talen');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Orderstatus');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Kortingsbon');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAME . ' wachtrij');
define('BOX_GV_ADMIN_MAIL', 'E-mail ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', 'Verzonden ' . TEXT_GV_NAME);
define('BOX_COUPON_ADMIN','Kortingsbon administratie');
define('BOX_COUPON_RESTRICT','Coupon Restrictions');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Admin toegangsbeheer');
define('BOX_ADMIN_ACCESS_USERS',  'Admin gebruikers');
define('BOX_ADMIN_ACCESS_PROFILES', 'Adminprofielen');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Admin paginaregistratie');
define('BOX_ADMIN_ACCESS_LOGS', 'Admin Activiteiten Logboeken');

define('IMAGE_RELEASE', 'Inwisselen ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Tijdens het verwerken van het formulier zijn er <strong>fouten</strong> opgetreden!\nWijzig/vul de volgende gegevens aan:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* De nieuwe opties moeten een prijs hebben.\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* De nieuwe opties moeten een prijs prefix (+/-) hebben.\n');

define('JS_PRODUCTS_NAME', '* Het nieuwe artikel heeft geen <strong>naam</strong>.\n');
define('JS_PRODUCTS_DESCRIPTION', '* Het nieuwe artikel heeft geen <strong>beschrijving</strong>.\n');
define('JS_PRODUCTS_PRICE', '* Het nieuwe artikel heeft geen <strong>prijs</strong>.\n');
define('JS_PRODUCTS_WEIGHT', '* Het nieuwe artikel heeft geen <strong>gewicht</strong>.\n');
define('JS_PRODUCTS_QUANTITY', '* Het nieuwe artikel heeft geen <strong>hoeveelheid</strong>.\n');
define('JS_PRODUCTS_MODEL', '* Het nieuwe artikel heeft geen <strong>model</strong>.\n');
define('JS_PRODUCTS_IMAGE', '* Het nieuwe artikel heeft geen <strong>afbeelding</strong>.\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Een <strong>nieuwe prijs</strong> voor dit artikel moet worden ingevuld.\n');

define('JS_GENDER', '* Het <strong>geslacht</strong> moet worden ingevuld.\n');
define('JS_FIRST_NAME', '* De <strong>voornaam</strong> moet minimaal ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tekens bevatten.\n');
define('JS_LAST_NAME', '* De <strong>achternaam</strong> moet minimaal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tekens bevatten.\n');
define('JS_DOB', '* De <strong>geboortdatum</strong> moet als volgt ingevuld zijn: xx/xx/xxxx (dag/maand/jaar).\n');
define('JS_EMAIL_ADDRESS', '* Het <strong>e-mailadres</strong> moet minimaal ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tekens bevatten.\n');
define('JS_ADDRESS', '* De <strong>straatnaam</strong> moet minimaal ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens bevatten.\n');
define('JS_POST_CODE', '* De <strong>postcode</strong> moet minimaal ' . ENTRY_POSTCODE_MIN_LENGTH . ' tekens bevatten.\n');
define('JS_CITY', '* De <strong>woonplaats</strong> moet minimaal ' . ENTRY_CITY_MIN_LENGTH . ' tekens bevatten.\n');
define('JS_STATE', '* De <strong>provincie</strong> moet worden ingevuld.\n');
define('JS_STATE_SELECT', '-- Selecteer hierboven --');
define('JS_ZONE', '* De <strong>provincie</strong> moet gekozen worden uit de lijst bij dit land.');
define('JS_COUNTRY', '* Het <strong>land</strong> moet worden ingevuld.\n');
define('JS_TELEPHONE', '* Het  <strong>telefoonnummer</strong> moet minimaal ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tekens bevatten.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Bestelnummer %s komt niet voor!');

define('CATEGORY_PERSONAL', 'Persoonlijke gegevens');
define('CATEGORY_ADDRESS', 'Adres');
define('CATEGORY_CONTACT', 'Contactgegevens');
define('CATEGORY_COMPANY', 'Bedrijfsgegevens');
define('CATEGORY_OPTIONS', 'Opties');

define('ENTRY_GENDER', 'Aanhef:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">verplicht</span>');
define('ENTRY_FIRST_NAME', 'Voornaam:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakters</span>');
define('ENTRY_LAST_NAME', 'Achternaam:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakters</span>');
define('ENTRY_DATE_OF_BIRTH', 'Geboortedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(bijv. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-mailadres:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakters</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Het opgegeven e-mailadres liijkt niet geldig te zijn!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Uw e-mailadres is reeds bij ons geregistreerd!</span>');
define('ENTRY_COMPANY', 'Bedrijsnaam');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Kortingsgroep');
define('ENTRY_STREET_ADDRESS', 'Straatnaam:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens invoeren</span>');
define('ENTRY_SUBURB', 'Wijk:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Postcode:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakters</span>');
define('ENTRY_CITY', 'Plaats:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_CITY_MIN_LENGTH . ' karakters</span>');
define('ENTRY_STATE', 'Provincie:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">verplicht</span>');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefoonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minimaal ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakters</span>');
define('ENTRY_FAX_NUMBER', 'Faxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Nieuwsbrief:');
define('ENTRY_NEWSLETTER_YES', 'Ja');
define('ENTRY_NEWSLETTER_NO', 'Nee');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Het wachtwoord en de bevestiging moeten gelijk zijn');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Sorry, uw nieuwe wachtwoord is afgekeurd.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Wachtwoorden moeten letters en cijfers bevatten, moeten minimaal %s karakters lang zijn en ,mogen niet gelijk zijn aan de laatste 4 gebruikte wachtwoorden. Wachtwoorden verlopen elke 90 dagen, waarna u gevraagd wordt een niew wchtwoord op te geven.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'Fout: Sorry, er is een fout opgetreden bij het afhandelen van uw gegevens. Gelieve de informatie opnieuw te versturen.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-mail');
define('IMAGE_BACK', 'Terug');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_CANCEL', 'Annuleer');
define('IMAGE_CONFIRM', 'Bevestigen');
define('IMAGE_COPY', 'Kopieer');
define('IMAGE_COPY_TO', 'Kopieer naar');
define('IMAGE_DETAILS', 'Details');
define('IMAGE_DELETE', 'Verwijderen');
define('IMAGE_EDIT', 'Wijzigen');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_GO', 'Go');
define('IMAGE_FILE_MANAGER', 'Bestandsbeheer');
define('IMAGE_ICON_STATUS_GREEN', 'Actief');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Maak actief');
define('IMAGE_ICON_STATUS_RED', 'Inactief');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Maak inactief');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Fout -- te veel URL/content types ingevoerd');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Fout');
define('IMAGE_ICON_INFO', 'Informatie');
define('IMAGE_INSERT', 'Invoegen');
define('IMAGE_LOCK', 'Vergrendelen');
define('IMAGE_MODULE_INSTALL', 'Installeer module');
define('IMAGE_MODULE_REMOVE', 'Verwijder module');
define('IMAGE_MOVE', 'Verplaats');
define('IMAGE_NEW_BANNER', 'Nieuwe banner');
define('IMAGE_NEW_CATEGORY', 'Nieuwe categorie');
define('IMAGE_NEW_COUNTRY', 'Nieuw land');
define('IMAGE_NEW_CURRENCY', 'Nieuwe valuta');
define('IMAGE_NEW_FILE', 'Nieuw bestand');
define('IMAGE_NEW_FOLDER', 'Nieuwe folder');
define('IMAGE_NEW_LANGUAGE', 'Nieuwe taal');
define('IMAGE_NEW_NEWSLETTER', 'Nieuwe nieuwsbrief');
define('IMAGE_NEW_PRODUCT', 'Nieuw artikel');
define('IMAGE_NEW_SALE', 'Nieuwe uitverkoop');
define('IMAGE_NEW_TAX_CLASS', 'Nieuwe belastinggroep');
define('IMAGE_NEW_TAX_RATE', 'Nieuw belastingtarief');
define('IMAGE_NEW_TAX_ZONE', 'Nieuwe regio');
define('IMAGE_NEW_ZONE', 'Nieuwe zone');
define('IMAGE_OPTION_NAMES', 'Optienaam beheer');
define('IMAGE_OPTION_VALUES', 'Optiewaarde beheer ');
define('IMAGE_ORDERS', 'Bestellingen');
define('IMAGE_ORDERS_INVOICE', 'Factuur');
define('IMAGE_ORDERS_PACKINGSLIP', 'Pakbon');
define('IMAGE_PERMISSIONS', 'Verander bevoegdheden');
define('IMAGE_PREVIEW', 'Voorvertoning');
define('IMAGE_RESTORE', 'Herstel');
define('IMAGE_RESET', 'Reset');
define('IMAGE_SAVE', 'Opslaan');
define('IMAGE_SEARCH', 'Zoeken');
define('IMAGE_SELECT', 'Selecteren');
define('IMAGE_SEND', 'Verzenden');
define('IMAGE_SEND_EMAIL', 'Verzend e-mail');
define('IMAGE_SUBMIT', 'Verzenden');
define('IMAGE_UNLOCK', 'Ontgrendelen');
define('IMAGE_UPDATE', 'Bijwerken');
define('IMAGE_UPDATE_CURRENCIES', 'Bijwerken wisselkoers');
define('IMAGE_UPLOAD', 'Overbrengen');
define('IMAGE_TAX_RATES','Belastingtarief');
define('IMAGE_DEFINE_ZONES','Bepaal zones');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Prijsbeheer');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Bijwerken prijswijzigingen');
define('IMAGE_ADD_BLANK_DISCOUNTS','Toevoegen ' . DISCOUNT_QTY_ADD . ' kwantumkortingen');
define('IMAGE_CHECK_VERSION', 'Controleer op meest recente versie van Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Meervoudige categorieën koppelmanager');

define('IMAGE_ICON_STATUS_ON', 'Status - AAN');
define('IMAGE_ICON_STATUS_OFF', 'Status - UIT');
define('IMAGE_ICON_LINKED', 'Artikel is gekoppeld');

define('IMAGE_REMOVE_SPECIAL','Verwijder speciale prijs markering');
define('IMAGE_REMOVE_FEATURED','Verwijder informatie schijnwerper markering');
define('IMAGE_INSTALL_SPECIAL', 'Markeer als speciale prijs');
define('IMAGE_INSTALL_FEATURED', 'Markeer als schijnwerperartikel');

define('ICON_PRODUCTS_PRICE_MANAGER','Prijsbeheer artikelen');
define('ICON_COPY_TO', 'Kopiëren naar');
define('ICON_CROSS', 'Niet');
define('ICON_CURRENT_FOLDER', 'Huidige folder');
define('ICON_DELETE', 'Verwijderen');
define('ICON_EDIT', 'Wijzigen');
define('ICON_ERROR', 'Foutmelding');
define('ICON_FILE', 'Bestand');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Folder');
//define('ICON_LOCKED', 'Vergrendeld');
define('ICON_MOVE', 'Verplaatsen');
define('ICON_PERMISSIONS', 'Rechten');
define('ICON_PREVIOUS_LEVEL', 'Vorige niveau');
define('ICON_PREVIEW', 'Voorvertoning');
define('ICON_RESET', 'Reset');
define('ICON_STATISTICS', 'Statistieken');
define('ICON_SUCCESS', 'Succes');
define('ICON_TICK', 'Wel');
//define('ICON_UNLOCKED', 'Ontgrendeld');
define('ICON_WARNING', 'Waarschuwing');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina %s van %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> administrators)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> categorieën)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> landen)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> klanten)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> valuta)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> schijnwerp artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> talen)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> fabrikanten)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> nieuwsbrieven)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> status bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> prijsgroepen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> artikelsoort)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> verwachte artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> recensies)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> uitverkoopacties)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> aanbiedingen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> belasting tarieven)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> templates associatie)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> belastingzones)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> belastingtarieven)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> zones)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'Standaardinstelling');
define('TEXT_SET_DEFAULT', 'Stel in als standaardinstelling');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Verplicht</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Foutmelding: er is op dit moment geen valuta als standaard ingesteld. Dit kunt u doen via Admin -> Taal & Valuta -> Valuta');

define('TEXT_CACHE_CATEGORIES', 'Categorieën Box');
define('TEXT_CACHE_MANUFACTURERS', 'Fabrikanten Box');
define('TEXT_CACHE_ALSO_PURCHASED', 'Ook aangeschaft Module');

define('TEXT_NONE', '--geen--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Foutmelding: opgegeven bestemming bestaat niet.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Foutmelding: kan niet schrijven naar de opgegeven bestemming.');
define('ERROR_FILE_NOT_SAVED', 'Foutmelding: bestand(en) niet opgeslagen.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Foutmelding: overbrengen van "%s"-bestand niet toegestaan');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succes: overgebracht bestand met succes opgeslagen %s');
define('WARNING_NO_FILE_UPLOADED', 'Waarschuwing: geen files overgebracht naar server.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Waarschuwing: overbrengen van bestanden is uitgezet in de php.ini configuration file.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Waarschuwing: Aanmelden Admin is niet veilig... of je gebruikt de standaard aanmeldgegevens of <strong>demo demoonly</strong>is nog actief. <br />De aanmeldgegevens moeten per direct worden gewijzigd om je winkel zo goed mogelijk te beveiligen <br />Dit kan via Hulpmiddelen -> Instellingen Admin. Hier kunnen de aanmeld IDs en wachtwoorden worden ingesteld. <br />Additionele informatie over veiligheidsinstellingen voor de Admin staat beschreven in de documenten (zie /docs)');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','De database is niet van voldoende niveau. Ga naar Admin->Hulpmiddelen->Server Info en beoordeel de patch levels.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>Waarschuwing:</strong> De winkel is nu gesloten ivm onderhoudswerkzaamheden ...<br />Let op: Je kunt nu de meeste Betaal- en verzendmethoden NIET testen');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'Waarschuwing: Deze bestanden moeten worden verwijdered om het beveiligingsrisico te verkleinen: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Waarschuwing: Installatie directory bestaat in: ' . DIR_FS_CATALOG . 'zc_install. Verwijder deze directory ivm beveiligingsredenen.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Waarschuwing: Het configuratiebestand: %sincludes/configure.php. Dit is een mogelijk beveiligingsrisico. - Zet de correcte gebruikersrechten op dit bestand (read-only, CHMOD 644 of 444 zijn gebruikelijk).  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">See this FAQ</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Waarschuwing: Kan het taalbestand niet vinden: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'Fout: Module verwijdering niet toegestaan: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'Waarschuwing: Onderzoek alstublieft op eventuele XSS activiteit:');

define('_JANUARY', 'januari');
define('_FEBRUARY', 'februari');
define('_MARCH', 'maart');
define('_APRIL', 'april');
define('_MAY', 'mei');
define('_JUNE', 'juni');
define('_JULY', 'juli');
define('_AUGUST', 'augustus');
define('_SEPTEMBER', 'september');
define('_OCTOBER', 'oktober');
define('_NOVEMBER', 'november');
define('_DECEMBER', 'december');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> cadeaubonnen)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> kortingsbonnen');

define('TEXT_VALID_PRODUCTS_LIST', 'Artikellijst');
define('TEXT_VALID_PRODUCTS_ID', 'Artikel ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Artikelnaam');
define('TEXT_VALID_PRODUCTS_MODEL', 'Artikel model');

define('TEXT_VALID_CATEGORIES_LIST', 'Categorielijst');
define('TEXT_VALID_CATEGORIES_ID', 'Categorie ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Categorienaam');

define('DEFINE_LANGUAGE','Kies taal:');

define('BOX_ENTRY_COUNTER_DATE','Teller gestart op:');
define('BOX_ENTRY_COUNTER','Teller:');

// not installed
define('NOT_INSTALLED_TEXT','Niet geïnstalleerd');

// Product Options Values Sort Order - option_values.php
define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Optiewaarde rangschikking ');

define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Bijwerken rangschikking eigenschappen op basis van standaardwaarden</strong> ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Bijwerken rangschikking van alle artikelen\' eigenschappen sorteerorder</strong><br />om de optie StandaardSorteerOrder waarden te vergelijken:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Optienaam rangschikking');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Eigenschappen controle');

// generic model
  define('TEXT_MODEL','Model:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Box layout controle');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s wacht op vrijgave ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' wachtrij');
  define('IMAGE_ORDER','Bestelling');

  define('IMAGE_DISPLAY','Toon');
  define('IMAGE_UPDATE_SORT','Bijwerk sorteer order');
  define('IMAGE_EDIT_PRODUCT','Wijzig artikel');
  define('IMAGE_EDIT_ATTRIBUTES','Wijzig opties van artikel');
  define('TEXT_NEW_PRODUCT', 'Artikel in categorie: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Optienamen en optiewaarden');
  define('TEXT_PRODUCTS_PRICE_MANAGER','Artikelprijs manager');
  define('TEXT_PRODUCT_EDIT','Wijzig artikel');
  define('TEXT_ATTRIBUTE_EDIT','Beheer opties');
  define('TEXT_PRODUCT_DETAILS','Bekijk details');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Verminder totaal met');
  define('DEDUCTION_TYPE_DROPDOWN_1', '% korting');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nieuwe prijs');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minimum:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Aantal:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','In de winkelwagen:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Voeg additioneel toe:');

  define('TEXT_PRODUCTS_MIX_OFF','*Geen MIX mogelijk');	
  define('TEXT_PRODUCTS_MIX_ON','*Wel MIX mogelijk');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Zoekcriteria: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Zoeken: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Zoek naar artikel(en) - Gescheiden door komma');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Zoek naar artikel naam/model');

  define('PREV_NEXT_PRODUCT', 'Artikelen: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Categorie niet beschikbaar</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Artikel niet beschikbaar</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Admin Demo is momenteel actief. Sommige instellingen zijn uitgezet');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Admin Demo is momenteel actief. Sommige instellingen zijn uitgezet - <strong><strong>Opmerking:</strong>: Admin Override staat aan.</strong>');
  define('ERROR_ADMIN_DEMO','Admin Demo is actief ... de mogelijkheden die u probeert te gebruiken zijn 		niet beschikbaar');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nieuwe Zen-Cart versie beschikbaar: V');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Nieuwe PATCH beschikbaar: V');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Download hier');
  define('TEXT_VERSION_CHECK_CURRENT','Deze versie van Zen-Cart&reg; is up-to-date.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Download <b>%d</b> tot <b>%d</b> (van <b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Downloadmanager');

define('BOX_CATALOG_FEATURED','Artikelen in de schijnwerper');

define('ERROR_NOTHING_SELECTED', 'Er is niets geselecteerd ... Er zijn geen wijzigingen gemaakt');
define('TEXT_STATUS_WARNING','<strong><strong>Opmerking:</strong>: Status is automatisch aan/uit als start- en vervaldatumdatum zijn ingesteld');

define('TEXT_LEGEND_LINKED', 'Gekoppeld artikel');
define('TEXT_MASTER_CATEGORIES_ID','Artikel hoofdcategorie:');
define('TEXT_LEGEND', 'Legenda: ');
define('TEXT_LEGEND_STATUS_OFF', 'Status UIT');
define('TEXT_LEGEND_STATUS_ON', 'Status AAN');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>Opmerking: Hoofdcategorie wordt gebruikt voor prijsstrategie waar de<br /> artikel categorie van invloed is op gekoppelde artikelen, voorbeeld: Aanbieding of Uitverkoop</strong>');
define('TEXT_YES', 'Ja');
define('TEXT_NO', 'Nee');
define('TEXT_CANCEL', 'Annuleren');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Configuratie verzendmethoden foutmelding!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Waarschuwing:</strong> De postcode van de winkel is niet ingevuld. Wijzig dit in Configuration | Shipping/Packaging.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Waarschuwing:</strong> 0 Gewicht is ingesteld voor gratis verzenden, echter Gratis Verzend Module is niet ingesteld');
define('ERROR_USPS_STATUS', '<strong>Waarschuwing:</strong> USPS mist de gebruikersnaam, of ... is ingesteld in TEST-mode in plaats van LIVE-mode (=PRODUCTIE) en kan dan niet werken.<br />Als u geen "quotes" kunt ontvangen, neem dan contact op met USPS en	activeer je "live" account');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'Opmerking: Er zijn geen shipping modules geactiveerd. Ga naar Modules->Shipping om te configureren.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'Opmerking: Er zijn geen betaalmodules geactiveerd. Ga naar Modules->Payment om te configureren.');

// text pricing
define('TEXT_CHARGES_WORD','Berekende toeslag:');
define('TEXT_PER_WORD','<br />Prijs met woord: ');
define('TEXT_WORDS_FREE',' Aantal woord(en) gratis ');
define('TEXT_CHARGES_LETTERS','Berekende toeslag:');
define('TEXT_PER_LETTER','<br />Prijs per letter: ');
define('TEXT_LETTERS_FREE',' Aantal gratis letters ');
define('TEXT_ONETIME_CHARGES','*eenmalige toeslag = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*eenmalige toeslag = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Korting op hoeveelheid');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Aantal');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Prijs');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Optie hoeveelheidskorting eenmalige toeslag');
define('TEXT_CATEGORIES_PRODUCTS', 'Selecteer een categorie met artikelen ... of verplaats tussen artikelen');
define('TEXT_PRODUCT_TO_VIEW', 'Selecteer een artikel om te bekijken en druk op de knop Tonen...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Ongeldige hoofdcategorie ID');
define('TEXT_INFO_ID', 'ID nr.');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>Waarschuwing:</strong>Dit artikel is aan meerdere categorieën toegewezen maar er is geen hoofdcategorie ingesteld!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Informeer naar prijs ');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Artikel is gratis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Bespaar:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% uit');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;uit');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Uitverkoop:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Indien u geen HTML editor heeft gekozen of JavaScript is uitgezet dan kun je hier raw HTML text handmatig invoeren.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Opmerking: je gebruikt TEXT only e-mail. Als je HTML e-mail wil versturen moet je "gebruik MIME HTML" onder e-mail opties selecteren</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Opmerking: je gebruikt TEXT only e-mail. Als je HTML e-mail wil versturen moet je "gebruik MIME HTML" onder e-mail opties selecteren</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"U ziet deze tekst omdat wij u een e-mail hebben gestuurd in HTML-formaat maar uw e-mail client niet in staat is dit te tonen.");
define('ENTRY_EMAIL_PREFERENCE','E-mail formaat voorkeur:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','De keuze "none" of "opt-out" zet alle e-mail uit, inclusief details over bestellingen');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Alleen tekst');
define('ENTRY_EMAIL_NONE_DISPLAY','Nooit');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Uitgeschreven van nieuwsbrief');
define('ENTRY_NOTHING_TO_SEND','De e-mail bevat geen inhoud');
 define('EMAIL_SEND_FAILED','Foutmelding: Versturen e-mail aan: "%s" <%s> met onderwerp: "%s" is mislukt.');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', 'Tekst Editor');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Er is een HTML editor geselecteerd in \'My Store\' maar de \'/editors/\' folder kan niet worden gevonden. Zet je keuze ui of verplaats de editor files naar de \''.DIR_WS_CATALOG.'editors/\' directory');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Sorteervolgorde categorie/artikel');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Sorteervolgorde artikelen, artikelnaam');
  define('TEXT_SORT_PRODUCTS_NAME', 'Artikelnaam');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Artikelmodel');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Artikel aantal+, artikelnaam');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Artikel aantal-, artikelnaam');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Artikelprijs+, artikelnaam');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Artikelprijs-, artikelnaam');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Categorie sorteervolgorde, categorienaam');
  define('TEXT_SORT_CATEGORIES_NAME', 'Categorienaam');



  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nee');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Of, selecteer een bestaande afbeelding van de server, bestandsnaam:</strong>');
  define('TEXT_IMAGES_OVERWRITE', 'Overschrijven bestaande afbeelding?<br /> Gebruik <strong>NEE</strong> voor handmatig<br /> geschreven namen');
  define('TEXT_IMAGE_OVERWRITE_WARNING','Waarschuwing: bestandsnaam is gewijzigd maar niet overschreven ');
  define('TEXT_IMAGES_DELETE', '<strong>Verwijder afbeelding?</strong> Opmerking: Afbeelding wordt niet verwijderd van de server:');
  define('TEXT_IMAGE_CURRENT', 'Afbeeldingsnaam: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Waarschuwing: geen optienaam gekozen');
  define('ERROR_DEFINE_OPTION_VALUES', 'Waarschuwing: geen optiewaarde gekozen');
  define('ERROR_DEFINE_PRODUCTS', 'Waarschuwing: geen artikel gekozen');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Waarschuwing: Geen hoofdcategorie ingesteld voor dit artikel');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Voeg toe inclusief subcategorie');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Voeg toe zonder subcategorie');

  define('BUTTON_PREVIOUS_ALT','Vorig artikel');
  define('BUTTON_NEXT_ALT','Volgende artikel');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Linkmanager artikel naar meerdere categorieën');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Kopieer artikel naar meerdere categorieën');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'All Global Copy, Add and Delete Features Status is currently OFF');//nog vertalen
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Display Global Features - ON');//nog vertalen
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Display Global Features - OFF');//nog vertalen

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fout: Gekoppelde artikelen kunnen niet in dezelfde categorie gekoppeld worden.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fout: De directorie van de winkelafbeeldingen is niet beschrijfbaar: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fout: De directorie van de winkelafbeeldingen bestaat niet: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Fout: Categorie kan niet verplaatst worden naar de eigen subcategorie.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Fout: Artikel kan niet verplaatst worden naar de eigen categorie of naar een categorie waain het al aanwezig is.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Fout: Categorie bevat artikelen!<br /><br />Ofschoon dit tijdelijk kan voor het opbouwen van de categorieën ... Een categorie bestaat uit alleen artikelen of uitsluitend categorieën maar niet beiden!');
  define('SUCCESS_CATEGORY_MOVED', 'Gelukt! Categorie verplaatsen is gelukt ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Fout: Categorie kan niet naar zichzelf verplaats worden! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Waarschuwing: EZ-PAGES HEADER - Aan voor uitsluitend Admin IP');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Waarschuwing: EZ-PAGES FOOTER - Aan voor uitsluitend Admin IP');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Waarschuwing: EZ-PAGES SIDEBOX - Aan voor uitsluitend Admin IP');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Waarschuwing: Dit artikel is ingesteld op - Gratis Verzenden en slaat het afleveradres over<br />Geen verzendwijze wordt gevraagd als alle artikelen van deze order virtueel zijn');
  define('TEXT_VIRTUAL_EDIT','Waarschuwing: Dit artikel is ingesteld op - Gratis Verzenden en slaat het afleveradres over<br />Geen verzendwijze wordt gevraagd als alle artikelen van deze order virtueel zijn');
  define('TEXT_FREE_SHIPPING_PREVIEW','Waarschuwing: Dit artikel is ingesteld op - Gratis Verzenden, afleveradres verplicht<br />De Gratis Verzenden Module is verplicht als alle artikelen van een order ingesteld zijn als ALTIJD Gratis Verzenden');
  define('TEXT_FREE_SHIPPING_EDIT','Waarschuwing: JA stelt het artikel in op - Gratis Verzenden, afleveradres verplicht<br />De Gratis Verzenden Module is verplicht als alle artikelen van een order ingesteld zijn als ALTIJD Gratis Verzenden');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'Waarschuwing: de Admin Activity Log tabel bevat records die ouder dan 2 maanden zijn en moet opgeschoond worden ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'Waarschuwing: de Admin Activity Log tabel bevat meer dan 50.000 records en moet opgeschoond worden ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'U kunt de Admin Activity details bekijken en archiveren via het Admin Activiteiten Logboeken menu, als u de juiste rechten heeft.');

  define('CATEGORY_HAS_SUBCATEGORIES', 'Let op: Categorie heeft Subcategorieën<br />Artikel kan niet toegevoegd worden');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'WAARSCHUWING! Welkom e-mail kortingscoupon verloopt in %s dagen');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'Opgelet: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Uw /admin/ foldernaam moet worden hernoemt naar een minder vaak voorkomende naam</a>, om onbevoegde toegang te voorkomen.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'Waarschuwing: Het e-mail subsysteem is uitgeschakeld. Er worden geen e-mails verstuurd totdat het opnieuw wordt ingeschakeld in Admin->Configuratie->E-mailopties.');
define('TEXT_CURRENT_VER_IS', 'U gebruikt op dit moment: ');
define('ERROR_NO_DATA_TO_SAVE', 'Foutmelding: De gegeven die u verstuurd hebt zijn leeg. UW VERANDERINGEN ZIJN *NIET* OPGESLAGEN. Mogelijk hebt u een probleem met uw browser of uw internetverbinding.');
define('TEXT_HIDDEN', 'Verborgen');
define('TEXT_VISIBLE', 'Zichtbaar');
define('TEXT_HIDE', 'Verberg');
define('TEXT_EMAIL', 'E-mail');
define('TEXT_NOEMAIL', 'Geen e-mail');

define('BOX_HEADING_PRODUCT_TYPES', 'Product Types');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Er lijkt een probllem te zijn met de database. Er is onderhoud nodig.</a>');//nog vertalen


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


