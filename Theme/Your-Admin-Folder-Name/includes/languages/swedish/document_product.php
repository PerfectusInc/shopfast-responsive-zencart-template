<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_product.php 15883 2010-04-11 16:41:26Z wilt $
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
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sortera');

define('TABLE_HEADING_PRICE','Pris/erbjudande/Rea');
define('TABLE_HEADING_QUANTITY','Antal');

define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_CATEGORIES', 'Kategorier:');
define('TEXT_SUBCATEGORIES', 'Underkategorier:');
define('TEXT_PRODUCTS', 'Produkter:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pris:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Skatteklass:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Genomsnitt r&ouml;ster:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Antal:');
define('TEXT_DATE_ADDED', 'Datum Inlagd:');
define('TEXT_DATE_AVAILABLE', 'Datum TIllg&auml;nglig:');
define('TEXT_LAST_MODIFIED', 'Sist &Auml;ndrad:');
define('TEXT_IMAGE_NONEXISTENT', 'BILDEN FINNS INTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'L&auml;gg till en ny kategori eller produkt i denna niv&aring;.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'F&ouml;r mer information, bes&ouml;k produktens <a href="http://%s" target="blank">hemsida</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Denna produkt lades till i v&aring;r katalog %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Produkten kommer finnas i lager den %s.');

define('TEXT_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategori ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_EDIT_SORT_ORDER', 'Sorteringsordning:');

define('TEXT_INFO_COPY_TO_INTRO', 'V&auml;lj en ny kategori du vill kopiera produkten till');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Aktuell Kategori: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny Kategori');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '&Auml;ndra Kategori');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Radera Kategori');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Flytta Kategori');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Radera Produkt');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Flytta Produkt');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiera Till');

define('TEXT_DELETE_CATEGORY_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna kategori?');
define('TEXT_DELETE_PRODUCT_INTRO', '&Auml;r du s&auml;ker p&aring; att du permanent vill radera denna produkt?<br /><br /><strong>Varning:</strong> Vid l&auml;nkade produkter<br />1. Se till att huvudkategorin &auml;r flyttad om du skall radera produkter ur den katalogen<br />2. Kryssa f&ouml;r kryssrutan f&ouml;r kategorin du vill radera produkten fr&aring;n');

define('TEXT_DELETE_WARNING_CHILDS', '<b>VARNING:</b> Det finns %s (under-)kategorier l&auml;nkade till denna kategori!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns %s produkter l&auml;nkade till denna kategori!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'V&auml;lj vilken kategori du vill flytta produkten <b>%s</b> till');
define('TEXT_MOVE_CATEGORIES_INTRO', 'V&auml;lj vilken kategori du vill flytta kategorin <b>%s</b> till');
define('TEXT_MOVE', 'Flytta <b>%s</b> till:');

define('TEXT_NEW_CATEGORY_INTRO', 'Fyll i f&ouml;ljande information f&ouml;r den nya kategorin');
define('TEXT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_SORT_ORDER', 'Sorteringsordning:');

define('TEXT_PRODUCTS_STATUS', 'Produkt Status:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produkten &auml;r virtuel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Alltid Fri Frakt:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Visa Produkt antal rutan:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum tillg&auml;nglig:');
define('TEXT_PRODUCT_AVAILABLE', 'I Lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Ej i Lager');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, Hoppa &ouml;ver frakt adress');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nej, frakt adress obligatorisk');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, Alltid Fri Frakt');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nej, Normala Frakt Regler');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Erbjudande, Produkt/Nerladdnings Kombinationen kr&auml;ver en frakt adress');
define('TEXT_PRODUCTS_SORT_ORDER', 'Sorteringsordning:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, Visa antal rutan');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nej, Visa inte antal rutan');

define('TEXT_PRODUCTS_MANUFACTURER', 'Produktens Tillverkare:');
define('TEXT_PRODUCTS_NAME', 'Produkt Namn:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produkt beskrivning:');
define('TEXT_PRODUCTS_QUANTITY', 'Produkt Antal:');
define('TEXT_PRODUCTS_MODEL', 'Produkt Art.nr:');
define('TEXT_PRODUCTS_IMAGE', 'Produkt Bild:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Ladda upp till katalog:');
define('TEXT_PRODUCTS_URL', 'Produkt URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(utan http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Produkt Pris (Netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Produkt Pris (Brutto):');
define('TEXT_PRODUCTS_WEIGHT', 'Produktens frakt vikt:');

define('EMPTY_CATEGORY', 'Tom Kategori');

define('TEXT_HOW_TO_COPY', 'Kopierings Metod:');
define('TEXT_COPY_AS_LINK', 'L&auml;nka produkt');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicera produkt');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Anv&auml;nds endast p&aring; Duplicerade Produkter ...');
  define('TEXT_COPY_ATTRIBUTES','Kopiera Produkt Alternativ till Duplikatet?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nej');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Aktuell Produkt: ');
  define('TABLE_HEADING_MODEL', 'Art.nr');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Alternativ har &auml;ndrats f&ouml;r Produkt ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Radera <strong>ALLA</strong> Produkt Alternativ f&ouml;r:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopiera Alternativ till en annan produkt eller till en Kategori fra&aring;:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopiera alternativ till en annan <strong>produkt</strong> fr&aring;n:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopiera alternativ till en annan <strong>Kategori</strong> fr&aring;n:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hur skall existerande alternativ hanteras?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Radera</strong> f&ouml;rst, l&auml;gg sedan till nya alternativ');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Uppdatera</strong> med nya inst&auml;llningar/pris, l&auml;gg sedan till nya');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorera</strong> l&auml;gg bara till nya');

  define('SUCCESS_ATTRIBUTES_DELETED','Alternativen raderade');
  define('SUCCESS_ATTRIBUTES_UPDATE','Alternativen uppdaterade');

  define('ICON_ATTRIBUTES','Alternativ funktion');

  define('TEXT_CATEGORIES_IMAGE_DIR','Ladda upp till katalog:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Varning: Visar inte antal rutan, F&ouml;rvalt antal &auml;r 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Varning: Visar inte antal rutan, F&ouml;rvalt antal &auml;r 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>V&auml;lj:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Alternativ funktioner f&ouml;r:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Nerladdningar: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produkt Pris Efter Alternativ:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nej');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Visa pris fr&aring;n l&auml;gsta alternativ grupp plus pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Visa pris fr&aring;n l&auml;gsta alternativ grupp plus pris');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Produkt minsta antal:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Produkt minsta enhet:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Produkt Max antal:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = obegr&auml;nsat, 1 = Ingen antal ruta');

  define('TEXT_PRODUCTS_MIXED','Produkt Antal Min/Enhet Mix:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produkt &auml;r Gratis');
  define('TEXT_PRODUCT_IS_FREE','Produkt &auml;r gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produkt &auml;r markerad som Gratis');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produkt &auml;r markerad som Gratis');

  define('TEXT_PRODUCT_IS_CALL','Produkten &auml;r Ring f&ouml;r Pris:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produkten &auml;r markerad som RING F&Ouml;R PRIS');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produkten &auml;r markerad som RING F&Ouml;R PRIS');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hoppa &ouml;ver nya alternativ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Infoga nya alternativ genom </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Uppdaterar fr&aring;n alternativ</strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Markera vad Produktens Meta Tagg Titel skall inkludera:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Produkt Namn:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Titel:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Art.nr:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Pris:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Titel/Taggord:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta Tagg Titel:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta Tagg nyckelord:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta Tagg beskrivning:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">UTESLUTEN</span>');
