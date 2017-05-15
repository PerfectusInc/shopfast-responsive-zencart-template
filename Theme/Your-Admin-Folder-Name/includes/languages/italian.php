<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: italian.php 7440 2012-01-12 21:51:35Z LaVale $
 */

if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Zen Cart: L\'Arte dell\'E-Commerce - zen-cart.it');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'it_IT'
// on FreeBSD 4.0 I use 'it_IT.ISO_8859-1'
// this may not work under win32 environments..
@setlocale(LC_TIME, 'it_IT.UTF-8');
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
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
//define('TITLE', 'Zen Cart - Italiano - zen-cart.it');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags Definiti');
define('ICON_METATAGS_OFF', 'Meta Tags Non Definiti');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Definiti:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTA:</strong> La struttura dei Tag del Sito sono definiti nella pagina meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="it"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Admin Home');
define('HEADER_TITLE_SUPPORT_SITE', 'Sito di Supporto');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogo');
define('HEADER_TITLE_VERSION', 'Versione');
define('HEADER_TITLE_ACCOUNT', 'Account');
define('HEADER_TITLE_LOGOFF', 'Esci');
//define('HEADER_TITLE_ADMINISTRATION', 'Amm.ne');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Certificato Regalo');
  define('TEXT_GV_NAMES','Certificati Regalo');
  define('TEXT_DISCOUNT_COUPON', 'Buono Sconto');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Codice Riscossione');

// text for gender
define('MALE', 'Signor');
define('FEMALE', 'Signora');

// text for date of birth example
define('DOB_FORMAT_STRING', 'gg/mm/aaaa');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Configurazione');
define('BOX_CONFIGURATION_MY_STORE', 'Info Negozio');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Valori Minimi');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Valori Massimi');
define('BOX_CONFIGURATION_IMAGES', 'Gestione Immagini');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Info Cliente');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Spedizioni/Imballo');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Listino Prodotti');
define('BOX_CONFIGURATION_STOCK', 'Magazzino Scorte');
define('BOX_CONFIGURATION_LOGGING', 'Connessione');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Gestione Email');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Settaggio Additivi');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'Compressione GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sessioni');
define('BOX_CONFIGURATION_REGULATIONS', 'Regolamenti');
define('BOX_CONFIGURATION_GV_COUPONS', 'Certificati Regalo/Sconto');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Carte Credito');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Pagina Prodotto');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Settaggi Layout');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Manutenzione Sito');
define('BOX_CONFIGURATION_NEW_LISTING', 'Lista Novit&agrave;');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Listino Vetrina');
define('BOX_CONFIGURATION_ALL_LISTING', 'Listino Generale');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Indice Listino');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Gestione Pagine');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Pagine EZ');

// modules box text 
define('BOX_HEADING_MODULES', 'Moduli');
define('BOX_MODULES_PAYMENT', 'Pagamento');
define('BOX_MODULES_SHIPPING', 'Spedizioni');
define('BOX_MODULES_ORDER_TOTAL', 'Totale ordine');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipi Prodotto');

// categories box text
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorie/Prodotti');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipi Prodotto');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Gestore Nome Opzione');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Gestore Valore Opzione');
define('BOX_CATALOG_MANUFACTURERS', 'Produttori');
define('BOX_CATALOG_REVIEWS', 'Recensioni');
define('BOX_CATALOG_SPECIALS', 'Promozioni');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Prodotti in arrivo');
define('BOX_CATALOG_SALEMAKER', 'Fare Saldi');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gestore Prezzo Prodotti');
define('BOX_CATALOG_PRODUCT', 'Prodotto');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Prodotti nelle Categorie');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Clienti');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clienti');
define('BOX_CUSTOMERS_ORDERS', 'Ordini');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Gruppi Prezzi');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Fattura');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Imballo');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Localit&agrave; / Tasse');
define('BOX_TAXES_COUNTRIES', 'Paesi');
define('BOX_TAXES_ZONES', 'Zone');
define('BOX_TAXES_GEO_ZONES', 'Definizioni zone');
define('BOX_TAXES_TAX_CLASSES', 'Classi Tasse');
define('BOX_TAXES_TAX_RATES', 'Aliquote Tasse');

// reports box text
define('BOX_HEADING_REPORTS', 'Reports');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Prodotti visti');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Prodotti acquistati');
define('BOX_REPORTS_ORDERS_TOTAL', 'Totale ordini clienti');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Prodotti in esaurimento');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Segnalazioni Cliente');

// tools text
define('BOX_HEADING_TOOLS', 'Strumenti');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Scegli Template');
define('BOX_TOOLS_BACKUP', 'Backup Database');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestore Banner');
define('BOX_TOOLS_CACHE', 'Controlli di Cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definisci Lingue');
define('BOX_TOOLS_FILE_MANAGER', 'Gestore File');
define('BOX_TOOLS_MAIL', 'Invia Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gestore Newsletter');
define('BOX_TOOLS_SERVER_INFO', 'Info Server');
define('BOX_TOOLS_WHOS_ONLINE', 'Chi &egrave; in linea');
define('BOX_TOOLS_STORE_MANAGER', 'Gestore Negozio');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Developers Tool Kit');
define('BOX_TOOLS_SQLPATCH','Installa Patches SQL');
define('BOX_TOOLS_EZPAGES','Gestione Pagine EZ');

define('BOX_HEADING_EXTRAS', 'Extra');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editore Pagine Extra');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Pagina Principale');
define('BOX_TOOLS_DEFINE_CONTACT_US','Pagina Contatti');
define('BOX_TOOLS_DEFINE_PRIVACY','Informativa Privacy');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Spedizioni e Consegne');
define('BOX_TOOLS_DEFINE_CONDITIONS','Condizioni di Vendita');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Ordine Concluso');
define('BOX_TOOLS_DEFINE_PAGE_2','Pagina 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Pagina 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Pagina 4');


// localizaion box text
define('BOX_HEADING_LOCALIZATION', 'Localizzazioni');
define('BOX_LOCALIZATION_CURRENCIES', 'Valute');
define('BOX_LOCALIZATION_LANGUAGES', 'Lingue');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Stato Ordini');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Buoni sconto');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' Accodamento');
define('BOX_GV_ADMIN_MAIL', 'Invia via mail ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' inviati');
define('BOX_COUPON_ADMIN','Amministrazione Buono sconto');
define('BOX_COUPON_RESTRICT','Restrizioni Buono');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Gestione Accesso Amministratore');
define('BOX_ADMIN_ACCESS_USERS',  'Amministratori');
define('BOX_ADMIN_ACCESS_PROFILES', 'Profili Amministratori');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Inserimento Pagina in Amministrazione');
define('BOX_ADMIN_ACCESS_LOGS', 'Log Attivit&agrave; Amministratore');

define('IMAGE_RELEASE', 'Riscuoti' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Nella compilazione del modulo sono stati fatti degli errori!\nOccorre procedere alle seguenti correzioni:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Attribuire un valore prezzo al nuovo prodotto\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Attribuire un prefisso prezzo all\'attributo del nuovo prodotto\n');

define('JS_PRODUCTS_NAME', '* Attribuire un nome al nuovo prodotto\n');
define('JS_PRODUCTS_DESCRIPTION', '* Attribuire una descrizione al nuovo prodotto\n');
define('JS_PRODUCTS_PRICE', '* Attribuire un valore prezzo al nuovo prodotto\n');
define('JS_PRODUCTS_WEIGHT', '* Attribuire un valore peso al nuovo prodotto\n');
define('JS_PRODUCTS_QUANTITY', '* Attribuire un valore quantit&agrave; al nuovo prodotto\n');
define('JS_PRODUCTS_MODEL', '* Attribuire un valore modello al nuovo prodotto\n');
define('JS_PRODUCTS_IMAGE', '* Attribuire un valore immagine al nuovo prodotto\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Stabilire un nuovo prezzo per questo prodotto\n');

define('JS_GENDER', '* Il valore \'Genere\' va scelto.\n');
define('JS_FIRST_NAME', '* Nel campo \'Nome\' vanno inseriti almeno ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri.\n');
define('JS_LAST_NAME', '* Nel campo \'Cognome\' vanno inseriti almeno ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri.\n');
define('JS_DOB', '* Il campo \'Data di nascita\' va compilato nel formato: xx/xx/xxxx (giorno/mese/anno).\n');
define('JS_EMAIL_ADDRESS', '* Nel campo \'Indirizzo Email\' vanno inseriti almeno ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caratteri.\n');
define('JS_ADDRESS', '* Nel campo \'Via / Piazza\' vanno inseriti almeno ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri.\n');
define('JS_POST_CODE', '* Nel campo \'Codice Postale\' vanno inseriti almeno ' . ENTRY_POSTCODE_MIN_LENGTH . ' caratteri.\n');
define('JS_CITY', '* Nel campo \'Comune\' vanno inseriti almeno ' . ENTRY_CITY_MIN_LENGTH . ' caratteri.\n');
define('JS_STATE', '* Il campo \'Stato - Provincia\' deve essere selezionato.\n');
define('JS_STATE_SELECT', '-- Selezionare --');
define('JS_ZONE', '* Il campo \'Stato - Provincia\' deve essere selezionato dalla lista presente.');
define('JS_COUNTRY', '* Il campo  \'Nazione\' deve essere selezionato.\n');
define('JS_TELEPHONE', '* Nel campo \'Numero di Telefono\' vanno inseriti almeno ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caratteri.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'L\'Ordine Numero %s non esiste!');

define('CATEGORY_PERSONAL', 'Personale');
define('CATEGORY_ADDRESS', 'Indirizzo');
define('CATEGORY_CONTACT', 'Contatto');
define('CATEGORY_COMPANY', 'Azienda');
define('CATEGORY_OPTIONS', 'Opzioni');

define('ENTRY_GENDER', 'Genere:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obbligatorio</span>');
define('ENTRY_FIRST_NAME', 'Nome:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_LAST_NAME', 'Cognome:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data di nascita:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(es. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Indirizzo Email :');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">L\'indirizzo Email non risulta valido!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Questo indirizzo Email risulta gi&agrave; registrato</span>');
define('ENTRY_COMPANY', 'Nome Azienda:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Gruppo di Sconto');
define('ENTRY_STREET_ADDRESS', 'Via / Piazza:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_SUBURB', 'Frazione:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Codice Postale:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_CITY', 'Comune:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obbligatorio</span>');
define('ENTRY_COUNTRY', 'Paese:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Numero Telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_FAX_NUMBER', 'Numero Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Mi abbono');
define('ENTRY_NEWSLETTER_NO', 'Rinuncio');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'La Password e la Conferma Password devono corrispondere');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>La nuova password &egrave; stata rifiutata.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Le password devono contenere sia lettere che numeri, devono avere almeno %s caratteri, e devono essere diverse dalle ultime 4 password usate. Le password scadono ogni 90 giorni.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERRORE: C\'&egrave; stato un errore durante l\'elaborazione dei dati. Si prega di re-inviare nuovamente le informazioni.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Invio Email');
define('IMAGE_BACK', 'Indietro');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_CANCEL', 'Cancella');
define('IMAGE_CONFIRM', 'Conferma');
define('IMAGE_COPY', 'Copia');
define('IMAGE_COPY_TO', 'Copia In');
define('IMAGE_DETAILS', 'Particolari');
define('IMAGE_DELETE', 'Cancella');
define('IMAGE_EDIT', 'Modifica');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_GO', 'Vai');
define('IMAGE_FILE_MANAGER', 'Gestore File');
define('IMAGE_ICON_STATUS_GREEN', 'Attivo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Attiva');
define('IMAGE_ICON_STATUS_RED', 'Inattivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Disattiva');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Errore -- troppi URL/content types inseriti');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Errore');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Inserire');
define('IMAGE_LOCK', 'Chiudi');
define('IMAGE_MODULE_INSTALL', 'Installa Modulo');
define('IMAGE_MODULE_REMOVE', 'Rimuovi Modulo');
define('IMAGE_MOVE', 'Sposta');
define('IMAGE_NEW_BANNER', 'Nuovo Banner');
define('IMAGE_NEW_CATEGORY', 'Nuova Categoria');
define('IMAGE_NEW_COUNTRY', 'Nuovo Paese');
define('IMAGE_NEW_CURRENCY', 'Nuova Valuta');
define('IMAGE_NEW_FILE', 'Nuovo File');
define('IMAGE_NEW_FOLDER', 'Nuova Cartella');
define('IMAGE_NEW_LANGUAGE', 'Nuova Lingua');
define('IMAGE_NEW_NEWSLETTER', 'Nuova Newsletter');
define('IMAGE_NEW_PRODUCT', 'Nuovo Prodotto');
define('IMAGE_NEW_SALE', 'Nuovi Saldi');
define('IMAGE_NEW_TAX_CLASS', 'Nuova Classe Tasse');
define('IMAGE_NEW_TAX_RATE', 'Nuova Aliq. Tassa');
define('IMAGE_NEW_TAX_ZONE', 'Nuova Zona Tasse');
define('IMAGE_NEW_ZONE', 'Nuova Zona');
define('IMAGE_OPTION_NAMES', 'Gestore Nomi Opzione');
define('IMAGE_OPTION_VALUES', 'Gestore Valori Opzione');
define('IMAGE_ORDERS', 'Ordini');
define('IMAGE_ORDERS_INVOICE', 'Fattura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Etichetta Pacco');
define('IMAGE_PERMISSIONS', 'Modifica Permessi');
define('IMAGE_PREVIEW', 'Anteprima');
define('IMAGE_RESTORE', 'Ripristina');
define('IMAGE_RESET', 'Reset');
define('IMAGE_SAVE', 'Salva');
define('IMAGE_SEARCH', 'Cerca');
define('IMAGE_SELECT', 'Seleziona');
define('IMAGE_SEND', 'Invia');
define('IMAGE_SEND_EMAIL', 'Invio Email');
define('IMAGE_SUBMIT', 'Invia');
define('IMAGE_UNLOCK', 'Sblocco');
define('IMAGE_UPDATE', 'Aggiorna');
define('IMAGE_UPDATE_CURRENCIES', 'Aggiorna Tasso Cambio');
define('IMAGE_UPLOAD', 'Upload');
define('IMAGE_TAX_RATES','Aliq. Tassa');
define('IMAGE_DEFINE_ZONES','Define Zones');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gestore Prezzo Prodotti');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Aggiorna Modifiche Prezzo');
define('IMAGE_ADD_BLANK_DISCOUNTS','Aggiungi ' . DISCOUNT_QTY_ADD . ' nuovo sconto quantit&agrave;');
define('IMAGE_CHECK_VERSION', 'Cerca Aggiornamenti Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gestore link categorie multiple');

define('IMAGE_ICON_STATUS_ON', 'Stato - Abilitato');
define('IMAGE_ICON_STATUS_OFF', 'Stato - Disabilitato');
define('IMAGE_ICON_LINKED', 'Prodotto &egrave; linkato');

define('IMAGE_REMOVE_SPECIAL','Rimuovi info Prezzo Promozione');
define('IMAGE_REMOVE_FEATURED','Rimuovi info Prodotto in Vetrina');
define('IMAGE_INSTALL_SPECIAL', 'Agg.gi Info Prezzo Promozione');
define('IMAGE_INSTALL_FEATURED', 'Agg.gi Info Prodotto in Vetrina');

define('ICON_PRODUCTS_PRICE_MANAGER','Gestore Prezzo Prodotti');
define('ICON_COPY_TO', 'Copia in');
define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Attuale Cartella');
define('ICON_DELETE', 'Cancella');
define('ICON_EDIT', 'Modifica');
define('ICON_ERROR', 'Errore');
define('ICON_FILE', 'File');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Cartella');
//define('ICON_LOCKED', 'Chiuso');
define('ICON_MOVE', 'Sposta');
define('ICON_PERMISSIONS', 'Permessi');
define('ICON_PREVIOUS_LEVEL', 'Livello Precedente');
define('ICON_PREVIEW', 'Anteprima');
define('ICON_RESET', 'Resetta');
define('ICON_STATISTICS', 'Statistiche');
define('ICON_SUCCESS', 'Fatto');
define('ICON_TICK', 'Vero');
//define('ICON_UNLOCKED', 'Sbloccato');
define('ICON_WARNING', 'Avviso');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina %s di %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> amministratori)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> banner)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> categorie)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> nazioni)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> clienti)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> valute)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Visualizzate da <b>%d</b> a <b>%d</b> (di <b>%d</b> prodotti in vetrina)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> lingue)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> produttori)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> stato ordini)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> gruppi prezzi)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> prodotti)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Visualizzati da  <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> tipi prodotti)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (of <strong>%d</strong> prodotti in arrivo)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> commenti su prodotti)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> saldi)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> promozioni)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> classi tasse)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> template)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> zone tasse)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> aliquote tasse)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Visualizzate da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> zone)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'default');
define('TEXT_SET_DEFAULT', 'Installato per default');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obbligatorio</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Errore: al momento manca la valuta di default. Stabilirne una andando a: Admin->Localizzazioni->Valute');

define('TEXT_CACHE_CATEGORIES', 'Box Categorie');
define('TEXT_CACHE_MANUFACTURERS', 'Box Produttori');
define('TEXT_CACHE_ALSO_PURCHASED', 'Modulo Hanno Acquistato Anche');

define('TEXT_NONE', '-- nessuno --');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Errore: destinazione sconosciuta');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Errore: destinazione non scrivibile %s');
define('ERROR_FILE_NOT_SAVED', 'Errore: file non salvato.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Errore: tipo di file non consentito  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Fatto: file salvato regolarmente %s');
define('WARNING_NO_FILE_UPLOADED', 'Attenzione: file non salvato.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Attenzione: funzione di download inattiva nel file di configurazione php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Attenzione: il tuo account di Admin non &egrave; sicuro ... potresti avere ancora i dati di default: admin admin oppure non hai modificato: demo demoonly<br />Per la sicurezza del tuo negozio, i dati di account citati dovrebbero essere modificati al pi&ugrave; presto.<br />Vai in Strumenti->Settaggi di admin per cambiare username e passwords.<br />Per aumentare la sicurezza della sezione di amministrazione, leggi il contenuto della cartella /docs');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Il tuo database va portato ad un livello superiore. Vedi Tools->Info Server per verificare i livelli da rettificare.');
define('WARN_DATABASE_VERSION_PROBLEM','vero'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ATTENZIONE:</strong> Sito spento per manutenzione<br />NOTA: non &egrave; possibile testare moduli di pagamento o spedizione in modalit&agrave; manutenzione.');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', '<strong>ATTENZIONE:</strong> Questi files dovrebbero essere eliminati per evitare problemi di sicurezza: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', '<strong>ATTENZIONE:</strong> La directory di installazione &egrave; ancora presente: ' . DIR_FS_CATALOG . 'zc_install. Rimuovi questa directory per evitare problemi di sicurezza.');
define('WARNING_CONFIG_FILE_WRITEABLE', '<strong>ATTENZIONE:</strong> Il file di configurazione: %sincludes/configure.php &egrave; scrivibile. Questa situazione &egrave; potenzialmente rischiosa - modifica adeguatamente i permessi di questo file (sola lettura, tipicamente CHMOD 644 o 444). <a href="www.zen-cart.it/documentazione/installare-zen-cart/12-istruzioni-di-installazione" target="_blank">Vedi FAQ</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ATTENZIONE: non sono in grado di localizzare il file idioma: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERRORE: rimozione del modulo proibita: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ATTENZIONE: Si consiglia di controllare per possibile attivit&agrave; XSS:');

define('_JANUARY', 'Gennaio');
define('_FEBRUARY', 'Febbraio');
define('_MARCH', 'Marzo');
define('_APRIL', 'Aprile');
define('_MAY', 'Maggio');
define('_JUNE', 'Giugno');
define('_JULY', 'Luglio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Settembre');
define('_OCTOBER', 'Ottobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'Dicembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> buoni regalo)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> buoni)');

define('TEXT_VALID_PRODUCTS_LIST', 'Elenco Prodotti');
define('TEXT_VALID_PRODUCTS_ID', 'ID Prodotti');
define('TEXT_VALID_PRODUCTS_NAME', 'Nomi Prodotti');
define('TEXT_VALID_PRODUCTS_MODEL', 'Modello Prodotti');

define('TEXT_VALID_CATEGORIES_LIST', 'Elenco Categorie');
define('TEXT_VALID_CATEGORIES_ID', 'ID Categoria');
define('TEXT_VALID_CATEGORIES_NAME', 'Nome Categoria');

define('DEFINE_LANGUAGE','Stabilisci la lingua:');

define('BOX_ENTRY_COUNTER_DATE','Contatore visite avviato il:');
define('BOX_ENTRY_COUNTER','Numero pagine viste:');

// not installed
define('NOT_INSTALLED_TEXT','NON Installato');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Opzioni sui Tipi di Valori ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Aggiorna Attributi Tipi Ordine dalle Opzione Valori di Default</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Sincronizza l\'ordinamento degli attributi dei Prodotti</strong><br />con l\'ordinamento di default dei valori delle opzioni:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Nomi delle opzioni');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Gestione Attributi');

// generic model
  define('TEXT_MODEL','Modello:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Gestione Box Laterali');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s in attesa di approvazione ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Accodamento');
  define('IMAGE_ORDER','Ordine');

  define('IMAGE_DISPLAY','Visualizza');
  define('IMAGE_UPDATE_SORT','Aggiorna classifica');
  define('IMAGE_EDIT_PRODUCT','Modifica Prodotto');
  define('IMAGE_EDIT_ATTRIBUTES','Modifica Attributi');
  define('TEXT_NEW_PRODUCT', 'Prodotto in Categoria: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Nomi Opzione e Valori Opzione');
  define('TEXT_PRODUCTS_PRICE_MANAGER','GESTORE PREZZO PRODOTTI');
  define('TEXT_PRODUCT_EDIT','MODIFICA PRODOTTO');
  define('TEXT_ATTRIBUTE_EDIT','MODIFICA ATTRIBUTI');
  define('TEXT_PRODUCT_DETAILS','VEDI DETTAGLI');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Ammontare Sconto');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Percentuale');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nuovo Prezzo');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unit&agrave;:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','Nel Carrello:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Aggiungere :');

  define('TEXT_PRODUCTS_MIX_OFF','*Opzioni Mix su OFF');
  define('TEXT_PRODUCTS_MIX_ON','*Opzioni Mix su ON');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtro ricerca: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Ricerca: ');
    define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Ricerca per Prodotto/i - Delimitata da virgolette');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Ricerca per nome/modello del prodotto');

  define('PREV_NEXT_PRODUCT', 'Prodotti: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Categoria Disabilitata</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Prodotto Disabilitato</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','La Demo di Admin &egrave; attiva. Alcuni settaggi sono disabilitati');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','La Demo di Admin &egrave; attiva. Alcuni settaggi sono disabilitati - <strong>NOTA: Admin Override Abilitato</strong>');
  define('ERROR_ADMIN_DEMO','La Demo di Admin &egrave; attiva ... la(e) funzionalit&agrave; richiesta(e) &egrave; (sono) disabilitata(e)');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nuova Versione Disponibile V');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Nuovo PATCH Disponibile: V');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Download Qui');
  define('TEXT_VERSION_CHECK_CURRENT','Questa versione di Zen Cart&trade; risulta aggiornata.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gestore Download');

define('BOX_CATALOG_FEATURED','Prodotti in Vetrina');

define('ERROR_NOTHING_SELECTED', 'Non &egrave; stato selezionato nulla ... Non sono stati fatti cambiamenti');
define('TEXT_STATUS_WARNING','<strong>NOTA:</strong> lo status &egrave; impostato automaticamente quando vengono utilizzate le date.');

define('TEXT_LEGEND_LINKED', 'Prodotto Linkato');
define('TEXT_MASTER_CATEGORIES_ID','Categoria Master del Prodotto:');
define('TEXT_LEGEND', 'LEGENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Stato OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Stato ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTA:</strong> La Categoria Master indica quale categoria influenza il prezzo del Prodotto Linkato');
define('TEXT_YES', 'Si');

define('TEXT_NO', 'No');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Errori nella Configurazione Spedizioni!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Avviso:</strong> Il CAP del negozio non &egrave; stato inserito. Andare in Configurazione | Spedizioni/Imballo per definirlo.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Attenzione:</strong> peso a 0 &egrave; utilizzato per spedizioni Gratuite o quando il modulo di Spedizioni Gratuite  non &egrave; abilitato');
define('ERROR_USPS_STATUS', '<strong>Attenzione:</strong> nel modulo USPS manca la username, oppure &egrave; settato a TEST piuttosto che PRODUCTION.<br />Se non recuperi i dati da USPS, contatta USPS per attivare il tuo account sul loro server di produzione. 1-800-344-7779 o icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTA: Non hai attivato alcun modulo di spedizione. Vai in Moduli: Spedizioni per la configurazione.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTA: Non hai attivato alcun modulo di pagamento. Vai in Moduli: Pagamenti per la configurazione.');

// text pricing
define('TEXT_CHARGES_WORD','Costo Calcolato:');
define('TEXT_PER_WORD','<br />Prezzo per Parola: ');
define('TEXT_WORDS_FREE',' Parola(e) gratis ');
define('TEXT_CHARGES_LETTERS','Costo Calcolato:');
define('TEXT_PER_LETTER','<br />Prezzo per lettera: ');
define('TEXT_LETTERS_FREE',' Lettera(e) gratis ');
define('TEXT_ONETIME_CHARGES','*Costo una tantum = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*Costo una tantum = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opzione Sconti per quantit&agrave;');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Quantit&agrave;');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Prezzo');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Costi una tantum per Sconti quantit&agrave;');
define('TEXT_CATEGORIES_PRODUCTS', 'Seleziona una Categoria con Prodotti... o spostati tra i Prodotti');
define('TEXT_PRODUCT_TO_VIEW', 'Seleziona un Prodotto da visualizzare e premi Mostra ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID Categoria Master non valido');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATTENZIONE:</strong> Questo Prodotto &egrave; collegato a molteplici categorie ma non &egrave; stata impostata una categoria master!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Prodotto marcato come Richiesta Prezzo');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Il Prodotto &egrave; Gratis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg.');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Risparmi:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% sconto');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;sconto');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Saldo:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','In mancanza di editor HTML definito o con JavaScript disabilitati &egrave; possibile inserire il codice HTML a mano.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Nota: stai utilizzando email in formato TESTO. Per utilizzare HTML dovrai abilitare "usa MIME HTML" nelle Opzioni Email</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Nota: stai utilizzando email in formato TESTO. Per utilizzare HTML dovrai abilitare "usa MIME HTML" nelle Opzioni Email</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Stai leggendo questo testo in quanto inviato in formato HTML, ma il client di posta non permette di visualizzare i messaggi redatti in HTML.");
define('ENTRY_EMAIL_PREFERENCE','Pref. Formato Email:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Scegliendo "none" or "optout" si disabilitano TUTTE le mail, inclusi gli ordini');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TESTO');
define('ENTRY_EMAIL_NONE_DISPLAY','Mai');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Opted Out per Newsletters');
define('ENTRY_NOTHING_TO_SEND','Non c\'&egrave; contenuto nel messaggio');
 define('EMAIL_SEND_FAILED','ERRORE: invio email fallito a "%s" <%s> con oggetto "%s"');

  define('EDITOR_NONE', 'Testo semplice');
  define('TEXT_EDITOR_INFO', 'Editor di testo');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Hai selezionato un editor HTML in \'Mio negozio\' ma non riesco a trovare la cartella \'/editors/\' . Modifica la configurazione dell\'editor oppure trasferisci i files dell\'editor nella cartella  \''.DIR_WS_CATALOG.'editors/\' ');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordine di visualizzazione Categorie/Prodotti: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Ordine visualizzazione Prodotti, Nome Prodotto');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nome Prodotti');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modello Prodotti');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Qt+ Prodotti, Nome Prodotti');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Qty- Prodotti, Nome Prodotti');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Prezzo+ Prodotti, Nome Prodotti');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Prezzo- Prodotti, Nome Prodotti');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Ordine visualizzazione Categorie, Nome Categoria');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nome Categorie');


  define('TABLE_HEADING_YES','Si');
  define('TABLE_HEADING_NO','No');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>O, seleziona un file immagine esistente nel server, file:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Sovrascrivere l\'immagine esistente?</strong><br />Usare NO per nomi<br />inseriti manualmente');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ATTENZIONE: NOMEFILE aggiornato ma NON sovrascritto ');
  define('TEXT_IMAGES_DELETE', 'Elimina immagine?<br />Il file non viene rimosso dal server:');
  define('TEXT_IMAGE_CURRENT', 'Nome Immagine : ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Attenzione: Non sono stati definiti dei Nomi per le Opzioni');
  define('ERROR_DEFINE_OPTION_VALUES', 'Attenzione: Non sono stati definiti dei Valori per le Opzioni');
  define('ERROR_DEFINE_PRODUCTS', 'Attenzione: Non sono stati definiti Prodotti');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Attenzione: Nessun ID Master Categoria &egrave; stato settato per il Prodotto');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Aggiugi includendo Sotto Categorie');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Aggiunta senza Sotto Categorie');

define('BUTTON_PREVIOUS_ALT','Prodotto Precedente');
define('BUTTON_NEXT_ALT','Prodotto Successivo');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Link Manager per Categorie Multiple');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copia il Prodotto in pi&ugrave; Categorie');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Tutte Copie Globali, lo Status di Aggiungi e Rimuovi &egrave; posto in OFF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Mostra Caratteristiche Globali - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Mostra Caratteristiche Globali - OFF');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Errore: Non &egrave; possibile il link a prodotti nella stessa categoria.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Errore: la cartella immagini NON &egrave; scrivibile: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Errore: la cartella immagini NON esiste: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Errore: La Categoria non pu&ograve; essere spostata in una Sotto Categoria.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Errore: non &egrave;, possibile spostare il prodotto nella stessa Categoria o in un Categoria dove gi&agrave; esiste.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Errore: La Categoria contiene Prodotti!<br /><br />Questa operazione pu&ograve; essere effettuata temporaneamente per costruire le Categorie ... Le Categorie possono contenere o Prodotti o altre categorie ma mai entrambi!');
  define('SUCCESS_CATEGORY_MOVED', 'Perfetto! La Categoria &egrave; stata spostata come desiderato ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Errore: Non &egrave; possibile muovere una Categoria nella medesima Categoria! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ATTENZIONE: EZ-PAGES HEADER - Attivo Solo per IP Amministratore');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ATTENZIONE: EZ-PAGES FOOTER - Attivo Solo per IP Amministratore');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ATTENZIONE: EZ-PAGES SIDEBOX - Attivo Solo per IP Amministratore');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Attenzione: Prodotto contrassegnato come - Spedizione Gratuita e Senza Recapito<br />Se trattasi di Prodotti Virtuali non sar&agrave; attivata la spedizione');
  define('TEXT_VIRTUAL_EDIT','Attenzione: Prodotto contrassegnato come - Spedizione Gratuita e Senza Recapito<br />Se trattasi di Prodotti Virtuali non sar&agrave; attivata la spedizione');
  define('TEXT_FREE_SHIPPING_PREVIEW','Attenzione: Prodotto contrassegnato come - Spedizione Gratuita, Indirizzo di Spedizione Richiesto<br />Il modulo di Spedizione Gratuita &egrave; necessario se i Prodotti ordinati sono contrassegnati come Prodotti a Spedizione Gratuita');
  define('TEXT_FREE_SHIPPING_EDIT','Attenzione: attivato Prodotto - Spedizione Gratuita, Indirizzo di Spedizione Richiesto<br />Il modulo di Spedizione Gratuita &egrave; necessario se i Prodotti ordinati sono contrassegnati come Prodotti a Spedizione Gratuita');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ATTENZIONE: L\'archivio attivit&agrave; admin contiene dati risalenti a oltre due mesi fa e dovrebbe essere svuotato  ...');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ATTENZIONE: L\'archivio attivit&agrave; admin contiene 50,000 dati e dovrebbe essere svuotato  ...');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Puoi consultare e archiviare i dettagli Attivit&agrave; Amministratore dal menu Gestione Accesso Amministratore, se disponi dei permessi necessari.');

  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTA: La Categoria ha Sotto Categorie<br />NON &egrave; possibile aggiungere Prodotti');
  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ATTENZIONE! Email di Benvenuto con Buono Sconto scade tra %s giorni');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'ATTENZIONE: <a href="http://www.zen-cart.it/faq/gestione-sicurezza/134-rinominare-la-cartella-admin" target="_blank">La cartella /admin/ deve essere rinominata in qualcosa di diverso</a>, per prevenire accessi non autorizzati.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'ATTENZIONE: L\'invio email &egrave; disabilitato. Nessuna email verr&agrave; inviata fino a quando non lo si riattiva in Pannello di amministrazione > Configurazione > Gestione Email.');
define('TEXT_CURRENT_VER_IS', 'Si sta usando: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERRORE: I dati inviati sono risultati essere vuoti. LE MODIFICHE *NON* SONO STATE SALVATE. Potrebbe dipendere da un problema del browser o dalla connessione internet.');
define('TEXT_HIDDEN', 'Nascosto');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Nascondi');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'No Email');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));
