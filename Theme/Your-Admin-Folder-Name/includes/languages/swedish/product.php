<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product.php 15883 2010-04-11 16:41:26Z wilt $
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

define('TABLE_HEADING_PRICE','Pris/Erbjudande/REA');
define('TABLE_HEADING_QUANTITY','Antal');

define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_CATEGORIES', 'Kategorier:');
define('TEXT_SUBCATEGORIES', 'Underkategorier:');
define('TEXT_PRODUCTS', 'Produkter:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pris:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Skatteklass:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Medelomd&ouml;mme:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Antal:');
define('TEXT_DATE_ADDED', 'Datum Skapad:');
define('TEXT_DATE_AVAILABLE', 'Datum Tillg&auml;nglig:');
define('TEXT_LAST_MODIFIED', 'Senast &Auml;ndrad:');
define('TEXT_IMAGE_NONEXISTENT', 'BILDEN FINNS INTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Skapa en Ny Kategori eller Ny Produkt f&ouml;r denna Kategori.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'F&ouml;r Mer information, Bes&ouml;k produktens <a href="http://%s" target="blank">hemsida</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Denna produkt lades till i v&aring;r katalog: %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Denna produkt kommer att finnas i lager: %s.');

define('TEXT_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategori ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_EDIT_SORT_ORDER', 'Sortera efter:');

define('TEXT_INFO_COPY_TO_INTRO', 'V&auml;lj en ny kategori som du vill kopiera denna produkt till');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Aktuell Kategori: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny Kategori');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '&Auml;ndra Kategori');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Radera Kategori');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Flytta Kategori');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Radera Produkt');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Flytta Produkt');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiera Till');

define('TEXT_DELETE_CATEGORY_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna kategori?');
define('TEXT_DELETE_PRODUCT_INTRO', '&Auml;r du s&auml;ker p&aring; att du permanent vill radera denna produkt?<br /><br /><strong>Varning:</strong> F&ouml;r L&auml;nkade Produkter<br />1. Se till att huvudkategorin har &auml;ndrats om du raderar produkter fr&aring;n Huvudkategorin<br />2. Markera kryssrutan f&ouml;r Kategorin du vill radera produkter fr&aring;n');

define('TEXT_DELETE_WARNING_CHILDS', '<b>VARNING:</b> Det finns %s (under-)kategorier fortfarande l&auml;nkade till denna kategori!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns %s produkter fortfarande l&auml;nkade till denna kategori!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'V&auml;lj vilken kategori du vill flytta <b>%s</b> till');
define('TEXT_MOVE_CATEGORIES_INTRO', 'V&auml;lj vilken kategori du vill flytta <b>%s</b> till');
define('TEXT_MOVE', 'Flytta <b>%s</b> till:');

define('TEXT_NEW_CATEGORY_INTRO', 'Fyll i f&ouml;ljande information f&ouml;r kategorin');
define('TEXT_CATEGORIES_NAME', 'Kategori Namn:');
define('TEXT_CATEGORIES_IMAGE', 'Kategori Bild:');
define('TEXT_SORT_ORDER', 'Sortera Efter:');

define('TEXT_PRODUCTS_STATUS', 'Produkt Status:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produkt &auml;r Virtuell:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Alltid fri frakt:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Produkt Antal rutan visar:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum Tillg&auml;nglig:');
define('TEXT_PRODUCT_AVAILABLE', 'I Lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Ej I Lager');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, Hoppa &ouml;ver fraktadress');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nej, Fraktadress kr&auml;vs');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, Alltid Fri Frakt');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nej, Normala Frakt Regler');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Erbjudanden, Produkt/Nerladdningar Kombinationer kr&auml;ver en frakt adress');
define('TEXT_PRODUCTS_SORT_ORDER', 'Sortera Efter:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, Visa Antal rutan');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nej, visa inte antal rutan');

define('TEXT_PRODUCTS_MANUFACTURER', 'Produktens Tillverkare:');
define('TEXT_PRODUCTS_NAME', 'Produkt Namn:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produkt Beskrivning:');
define('TEXT_PRODUCTS_QUANTITY', 'Produkt Antal:');
define('TEXT_PRODUCTS_MODEL', 'Art.nr:');
define('TEXT_PRODUCTS_IMAGE', 'Produkt Bild:');
define('TEXT_PRODUCTS_IMAGE_DIR', ' | Ladda Upp Till:');
define('TEXT_PRODUCTS_URL', 'Produkt URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(utan http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Produkt Pris (Netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Produkt Pris (Brutto):');
define('TEXT_PRODUCTS_WEIGHT', 'Produktens Frakt Vikt:');

define('EMPTY_CATEGORY', 'Tom Kategori');

define('TEXT_HOW_TO_COPY', 'Kopiera Metod:');
define('TEXT_COPY_AS_LINK', 'L&auml;nkad Produkt');
define('TEXT_COPY_AS_DUPLICATE', 'Kopiera Produkt');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Anv&auml;nds endast vid kopiering av produkter ...');
  define('TEXT_COPY_ATTRIBUTES','Kopiera produktens alternativ till kopian?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nej');

// Products and Discount Copy Options
  define('TEXT_COPY_DISCOUNTS_ONLY','Anv&auml;nds endast vid kopiering av produkter med Rabatter ...');
  define('TEXT_COPY_DISCOUNTS','Kopiera Produktens rabatter till kopian?');
  define('TEXT_COPY_DISCOUNTS_YES','Ja');
  define('TEXT_COPY_DISCOUNTS_NO','Nej');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Aktuell Produkt: ');
  define('TABLE_HEADING_MODEL', 'Art.nr');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Alternativ &auml;ndringar f&ouml;r produkt ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Radera <strong>ALLA</strong> Produkt alternativ f&ouml;r:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopiera alternativ till en annan produkt eller till en kategori fr&aring;n:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopiera alternativ till en annan <strong>produkt</strong> fr&aring;n:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopiera alternativ till en annan <strong>kategori</strong> fr&aring;n:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hur skall existerande produkter hanteras?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Radera</strong> f&ouml;rst, kopiera sedan nya alternativ');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Uppdatera</strong> med nya inst&auml;llningar/priser, l&auml;gg sedan till nya');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorera</strong> och l&auml;gg bara till nya alternativ');

  define('SUCCESS_ATTRIBUTES_DELETED','Alternativet raderat');
  define('SUCCESS_ATTRIBUTES_UPDATE','Alternativet uppdaterat');

  define('ICON_ATTRIBUTES','Alternativ Funktioner');

  define('TEXT_CATEGORIES_IMAGE_DIR','Ladda upp till katalog:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Varning: Visar inte antal rutan, f&ouml;rvalt antal &auml;r 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Varning: Visar inte antal rutan, f&ouml;rvalt antal &auml;r 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>V&auml;lj:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Alternativ Funktioner f&ouml;r:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Nerladdningar: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produkt pris efter alternativ:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nej');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Visat pris kommer inkludera l&auml;gsta grupp alternativ pris plus pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Visat pris kommer inkludera l&auml;gsta grupp alternativ pris plus pris');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minsta Produkt Antal:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Produkt Antal Enheter (steg):');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Max Produkt Antal:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = obegr&auml;nsat, 1 = Ingen Antal ruta');

  define('TEXT_PRODUCTS_MIXED','Produkt Antal Min/enhet Mix:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produkt &auml;r gratis');
  define('TEXT_PRODUCT_IS_FREE','Produkt &auml;r gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produkt &auml;r markerad som gratis');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produkt &auml;r markerad som gratis');

  define('TEXT_PRODUCT_IS_CALL','Produkten &auml;r en Ring f&ouml;r Pris:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produkt &auml;r markerad som RING F&Ouml;R PRIS');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produkt &auml;r markerad som RING F&Ouml;R PRIS');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hoppa &ouml;ver nya alternativ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Infoga nya alternativ fr&aring;n </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Uppdatera alternativ fr&aring;n </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Markera vad produktens Meta Tag Title skall inneh&aring;lla:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Produkt Namn:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Titel:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Art.nr:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Pris:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Titel/Tagglinje:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta Tag Title (Titel):</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta Tag Keywords (Nyckelord):</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta Tag Description (Beskrivning):</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">UTESLUTEN</span>');
