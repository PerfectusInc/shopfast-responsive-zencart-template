<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: categories.php 14139 2009-08-10 13:46:02Z wilt $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Kategorier / Produkter');
define('HEADING_TITLE_GOTO', 'G&aring; Till:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorier / Produkter');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sortering');

define('TABLE_HEADING_PRICE','Pris/Erbjudande/Rea');
define('TABLE_HEADING_QUANTITY','Antal');

define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_CATEGORIES', 'Kategori:');
define('TEXT_SUBCATEGORIES', 'Underkategori:');
define('TEXT_PRODUCTS', 'Produkt:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pris:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Skatteklass:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Genomsnittliga betyg:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Antal:');
define('TEXT_DATE_ADDED', 'Skapad:');
define('TEXT_DATE_AVAILABLE', 'Datum Tillg&auml;nglig:');
define('TEXT_LAST_MODIFIED', 'Senast &auml;ndrad:');
define('TEXT_IMAGE_NONEXISTENT', 'BILDEN FINNS INTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Infoga en ny kategori eller produkt i denna kategori.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'F&ouml;r mer information. Bes&ouml;k produktens <a href="http://%s" target="blank">Hemsida</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Denna produkt lades till i v&aring;r katalog den %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Denna produkt finns i lager den %s.');

define('TEXT_EDIT_INTRO', 'Utf&ouml;r de &auml;ndringar som beh&ouml;vs');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategori ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_EDIT_SORT_ORDER', 'Sortera Efter:');

define('TEXT_INFO_COPY_TO_INTRO', 'V&auml;lj en ny kategori du vill kopiera denna produkt till');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Aktuell Katalog: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny Katalog');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '&Auml;ndra Katalog');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Radera Katalog');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Flytta Katalog');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Radera Produkt');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Flytta Produkt');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiera Till');

define('TEXT_DELETE_CATEGORY_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna katalog?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Varning:</strong> L&auml;nkade produkter vars Huvud Kategori ID &auml;r raderad kommer inte visa priset korrekt. Du m&aring;ste d&auml;rf&ouml;r se till att n&auml;r du raderar en kategori att dess l&auml;nkade produkter &auml;r flyttade till en annan kategori innan.');
define('TEXT_DELETE_PRODUCT_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera produkten (Detta kan inte &aring;ngras)?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>VARNING:</b> Det finns %s underkategorier fortfarande l&auml;nkade till denna kategori!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns %s produkter fortfarande l&auml;nkade till denna kategori!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'V&auml;lj vilken kategori, produkten <b>%s</b> skall finnas i.');
define('TEXT_MOVE_CATEGORIES_INTRO', 'V&auml;lj vilken kategori som kategorin <b>%s</b> skall finnas i.');
define('TEXT_MOVE', 'Flytta <b>%s</b> till:');

define('TEXT_NEW_CATEGORY_INTRO', 'Fyll i f&ouml;ljande information f&ouml;r kategorin:');
define('TEXT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_SORT_ORDER', 'Sortera Efter:');

define('TEXT_PRODUCTS_STATUS', 'Produkt Status:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produkten &auml;r Virtuel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Alltid fri frakt:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Produktens Antal ruta visar:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum Tillg&auml;nglig:');
define('TEXT_PRODUCT_AVAILABLE', 'I Lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Ej i Lager');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, Anv&auml;nd inte Leveransadressen');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nej, Anv&auml;nd Leveransadressen');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, Alltid fri frakt');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nej, Normal Frakt');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, Visa Antal f&auml;ltet');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nej, Visa inte Antal f&auml;ltet');

define('TEXT_PRODUCTS_MANUFACTURER', 'Tillverkare:');
define('TEXT_PRODUCTS_NAME', 'Produkt Namn:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produkt beskrivning:');
define('TEXT_PRODUCTS_QUANTITY', 'Produkt Antal:');
define('TEXT_PRODUCTS_MODEL', 'Artnr:');
define('TEXT_PRODUCTS_IMAGE', 'Produkt Bild:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Ladda upp till Katalog:');
define('TEXT_PRODUCTS_URL', 'Produkt URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(utan http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Produkt Pris (Netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Produkt Pris (Brutto):');
define('TEXT_PRODUCTS_WEIGHT', 'Produkten frakt vikt:');

define('EMPTY_CATEGORY', 'Tom Kategori');

define('TEXT_HOW_TO_COPY', 'Kopierings Metod:');
define('TEXT_COPY_AS_LINK', 'L&auml;nka produkt');
define('TEXT_COPY_AS_DUPLICATE', 'Duplikat produkt');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Begr&auml;nsa till produkt typ');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Denna Kategori &auml;r begr&auml;nsad till Produkt Typ');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','Den valda produkt typen kan inte l&auml;ggas till i denna kategori. Kontrollera kategorins restriktioner.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Anv&auml;nds enbart p&aring; produkt duplikat ...');
  define('TEXT_COPY_ATTRIBUTES','Kopiera produkt alternativ till duplikatet?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nej');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Aktuell Produkt: ');
  define('TABLE_HEADING_MODEL', 'Art.nr');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Alternativ &auml;ndrat f&ouml;r produkt ID ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Radera <strong>ALLA</strong> Produkt alternativ f&ouml;r:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopiera alternativ till produkt eller till en kategori fr&aring;n:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopiera alternativ till <strong>produkt</strong> fr&aring;n:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopiera alternativ till <strong>kategori</strong> fr&aring;n:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hur skall existerande alternativ hanteras?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Radera</strong> f&ouml;rst, l&auml;gg sedan in de nya');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Uppdatera</strong> med inst&auml;llningar/pris, l&auml;gg sedan till nya');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorera</strong> och l&auml;gg endast till de nya');

  define('SUCCESS_ATTRIBUTES_DELETED','Alternativen &auml;r raderade');
  define('SUCCESS_ATTRIBUTES_UPDATE','Alternativen &auml;r uppdaterade');

  define('ICON_ATTRIBUTES','Alternativ Funktion');

  define('TEXT_CATEGORIES_IMAGE_DIR','Ladda upp till Kategori:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Eller, v&auml;lj en existerande bild fil fr&aring;n servern, filnamn:</strong>');

  define('TEXT_VIRTUAL_PREVIEW','Varning: Denna produkt &auml;r markerad- Fri frakt och hoppa &ouml;ver fraktadress');
  define('TEXT_VIRTUAL_EDIT','Varning: Denna produkt &auml;r markerad - Fri frakt och hoppa &ouml;ver fraktadress');
  define('TEXT_FREE_SHIPPING_PREVIEW','Varning: Denna produkt &auml;r m&auml;rkt - Fri frakt och fraktadress obligatorisk');
  define('TEXT_FREE_SHIPPING_EDIT','Varning: Ja, markera denna produkt - Fri frakt och fraktadress obligatorisk');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Varning: Visar inte antal f&auml;ltet, F&ouml;rvalt antal &auml;r 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Varning: Visar inte antal f&auml;ltet, F&ouml;rvalt antal &auml;r 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>V&auml;lj:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Alternativ Funktion f&ouml;r:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Nerladdning: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produktpris efter alternativ:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nej');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Visat vill inkludera l&auml;gsta grupp alternativ pris plus pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Visat vill inkludera l&auml;gsta grupp alternativ pris plus pris');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Produkt Antal Minimum:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Produkt Antal Enheter:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Produkt Antal Max:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = obegr&auml;nsat, 1 = Inget Antal f&auml;lt eller Max ##');

  define('TEXT_PRODUCTS_MIXED','Produkt Antal Min/Enheter Mix:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produkten &auml;r Fri');
  define('TEXT_PRODUCT_IS_FREE','Produkten &auml;r Fri:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produkten &auml;r markerad som FRI');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produkten &auml;r markerad som FRI');

  define('TEXT_PRODUCT_IS_CALL','Produkten &auml;r markerad Ring f&ouml;r Pris:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produkten &auml;r markerad Ring f&ouml;r Pris');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produkten &auml;r markerad Ring f&ouml;r Pris');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hoppa &ouml;ver nya alternativ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Infogar Nya Alternativ fr&aring;n </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Uppdaterar Nya Alternativ fr&aring;n </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>Virtuela Produkter</strong> Har ingen fraktkostnad och beh&ouml;ver inte ha leveransadress som Tj&auml;nster, ' . TEXT_GV_NAMES . ', etc.<br />' .
  '<strong>Alltid Fri Frakt</strong> Har ingen frakt kostnad, Men m&aring;ste ha en leveransadress.<br />' .
  '<strong>Nerladdningar</strong> &auml;r virtuella produkter - Inga alternativ beh&ouml;ver anges<br />'
  );

  define('TEXT_ANY_TYPE', 'Alla Typer');
  define('TABLE_HEADING_PRODUCT_TYPES', 'Produkt Typ');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', '&Auml;ndra Kategori status f&ouml;r:');
define('TEXT_CATEGORIES_STATUS_INTRO', '&Auml;ndra Kategori status till: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'AV');
define('TEXT_CATEGORIES_STATUS_ON', 'P&Aring;');
define('TEXT_PRODUCTS_STATUS_INFO', '&Auml;ndra ALLA produkters status till: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'AV');
define('TEXT_PRODUCTS_STATUS_ON', 'P&Aring;');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Of&ouml;r&auml;ndrad');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>VARNING ...</strong><br />Notera: Avaktivering av en Kategori kommer &auml;ven avaktivera alla produkter i kategorin. L&auml;nkade produkter i denna kategori och till andra kategorier kommer ocks&aring; att avaktiveras.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' av ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' aktiva ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Kategori Beskrivning:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Produkten har Ring F&ouml;r Pris');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Kategorins Meta Taggar');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Ange Egna Meta Taggar');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'Titel:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Nyckelord:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Beskrivning:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'VARNING: Du har produkter i topp niv&aring; kategorin. Detta kommer att g&ouml;ra att priser eventuellt inte visas korrekt. Produkter hittade: ');


?>