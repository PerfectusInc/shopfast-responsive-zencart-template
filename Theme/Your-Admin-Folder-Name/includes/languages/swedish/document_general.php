<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_general.php 15883 2010-04-11 16:41:26Z wilt $
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

define('TEXT_CATEGORIES', 'Kategorier:');
define('TEXT_SUBCATEGORIES', 'Underkategorier:');
define('TEXT_PRODUCTS', 'Produkter:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pris:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Skatteklass:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Medel omd&ouml;mme:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Antal:');
define('TEXT_DATE_ADDED', 'Skapad:');
define('TEXT_DATE_AVAILABLE', 'Tillg&auml;nglig Datum:');
define('TEXT_LAST_MODIFIED', 'Senast &Auml;ndrad:');
define('TEXT_IMAGE_NONEXISTENT', 'BILD FINNS INTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Infoga en ny kategori eller produkt i denna kategori.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'F&ouml;r mer information, Bes&ouml;k denna produkts <a href="http://%s" target="blank">hemsida</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Denna produkt lades till i v&aring;r katalog den %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Denna produkt kommer att finnas i lager den %s.');

define('TEXT_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategori ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_EDIT_SORT_ORDER', 'Sorteringsordning:');

define('TEXT_INFO_COPY_TO_INTRO', 'V&auml;lj en ny kategori att kopiera denna produkt till');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Aktuell Kategori: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny Kategori');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '&Auml;ndra Kategori');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Radera Kategori');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Flytta Kategori');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Radera Produkt');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Flytta Produkt');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiera till');

define('TEXT_DELETE_CATEGORY_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna kategori?');
define('TEXT_DELETE_PRODUCT_INTRO', '&Auml;r du s&auml;ker pa att du vill radera denna produkt?<br /><br /><strong>Varning:</strong> vid l&auml;nkade produkter<br />1. Se till att huvud Kategori har &auml;ndrats om du skall radera produkter fran Huvud Kategorin<br />2 Kryssa i kryssrutan f&ouml;r kategorin du raderar produkter fran.');

define('TEXT_DELETE_WARNING_CHILDS', '<b>VARNING:</b> Det finns %s (under-)kategorier l&auml;nkade till denna kategori!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns %s produkter l&auml;nkade till denna kategori!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Ange vilken kategori du vill produkten <b>%s</b> flyttas till');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Ange vilken kategori du vill kategorin <b>%s</b> flyttas till');
define('TEXT_MOVE', 'Flytta <b>%s</b> till:');

define('TEXT_NEW_CATEGORY_INTRO', 'Fyll i informationen f&ouml;r den nya kategorin');
define('TEXT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_SORT_ORDER', 'Sorteringsordning:');

define('TEXT_DOCUMENT_STATUS', 'Dokument Status:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produkt &auml;r Virtuel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Alltid fri frakt:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Produkt, antal ruta visas:');
define('TEXT_DOCUMENT_DATE_AVAILABLE', 'Datum Tillg&auml;nglig:');
define('TEXT_DOCUMENT_AVAILABLE', 'Tillg&auml;nglig');
define('TEXT_DOCUMENT_NOT_AVAILABLE', 'Otillg&auml;nglig');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, ingen frakt adress');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nej, frakt adress obligatorisk');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, Alltid fri frakt');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nej, Normala frakt regler');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Erbjudande, Produkt/nerladdningar kombination kr&auml;ver en frakt adress');
define('TEXT_PRODUCTS_SORT_ORDER', 'Sortera efter:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, Visa antal ruta');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nej, visa inte antal rutan');

define('TEXT_DOCUMENT_NAME', 'Dokument Namn:');
define('TEXT_DOCUMENT_DETAILS', 'Dokument Innehall:');
define('TEXT_DOCUMENT_IMAGE', 'Dokument Bild:');
define('TEXT_DOCUMENT_IMAGE_DIR', 'Ladda upp till mapp:');
define('TEXT_DOCUMENT_URL', 'Dokument URL:');
define('TEXT_DOCUMENT_URL_WITHOUT_HTTP', '<small>(utan http://)</small>');

define('EMPTY_CATEGORY', 'Tom Kategori');

define('TEXT_HOW_TO_COPY', 'Kopierings metod:');
define('TEXT_COPY_AS_LINK', 'L&auml;nka produkt');
define('TEXT_COPY_AS_DUPLICATE', 'kopiera produkt');

// Produkts and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Anv&auml;nds endast f&ouml;r kopiera produkt ...');
  define('TEXT_COPY_ATTRIBUTES','Kopiera produkt alternativ till kopian?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nej');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Aktuell Produkt: ');
  define('TABLE_HEADING_MODEL', 'Art.nr.');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Alternativ &auml;ndrat f&ouml;r produkt ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Radera <strong>ALLA</strong> Produkt Alternativ f&ouml;r:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopiera alternativ till en annan Produkt eller till en hel Kategori fran:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopiera alternativ till en annan <strong>produkt</strong> fran:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopiera alternativ till en annan <strong>kategori</strong> fran:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hur skall existerande alternativ f&ouml;r produkten hanteras?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Radera</strong> f&ouml;rst, kopiera sedan alternativ');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Uppdatera</strong> med nya inst&auml;llningar/priser, l&auml;gg sedan till nya');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorera</strong> och l&auml;gg bara till nya');

  define('SUCCESS_ATTRIBUTES_DELETED','Alternativet raderat');
  define('SUCCESS_ATTRIBUTES_UPDATE','Alternativet uppdaterat');

  define('ICON_ATTRIBUTES','Alternativ funktioner');

  define('TEXT_CATEGORIES_IMAGE_DIR','Ladda upp till kategori mapp:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Varning: visar inte antal rutan, f&ouml;rvalt antal 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Varning: visar inte antal rutan, f&ouml;rvalt antal 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>V&auml;lj:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Alternativ funktion f&ouml;r:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Nerladdningar: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produkt Pris efter alternativ:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nej');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*visat pris inkluderar l&auml;gsta alternativpris grupp plus pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*visat pris inkluderar l&auml;gsta alternativpris grupp plus pris');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minsta Produkt antal:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Produkt antal enheter:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','max Produkt Antal:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = obegr&auml;nsat, 1 = ingen antal ruta');

  define('TEXT_PRODUCTS_MIXED','Produkt antal Min/enhet Mix:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produkt &auml;r gratis');
  define('TEXT_PRODUCT_IS_FREE','Produkt &auml;r gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produkt &auml;r markerad som gratis');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produkt &auml;r markerad som gratis');

  define('TEXT_PRODUCT_IS_CALL','Produkt &auml;r en Ring f&ouml;r Pris:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produkt &auml;r markerad som RING F&Ouml;R PRIS');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produkt is marked as CALL FOR PRICE');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hoppa &ouml;ver nua alternativ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Infoga Nya alternativ fran </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Updating from Attribute </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Markera vad det nya Dokumentets Meta Taggars Titel skall innehalla:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Dokument Namn:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Titel:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Art.nr.:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Pris:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Titel/Taggar:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta Taggar Titel:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta Taggar Nyckelord:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta Taggar beskrivning:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">UTESLUTEN</span>');
