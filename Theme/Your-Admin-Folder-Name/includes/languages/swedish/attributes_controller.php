<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z wilt $
 */ 
  /* Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('HEADING_TITLE', 'KATEGORIER: ');

define('HEADING_TITLE_OPT', 'Produkt Alternativ');
define('HEADING_TITLE_VAL', 'Alternativ V&auml;rde');
define('HEADING_TITLE_ATRIB', 'Alternativ Hanterare');
define('HEADING_TITLE_ATRIB_SELECT','V&auml;lj en kategori att visa produkter inom ...');

define('TEXT_PRICES_AND_WEIGHTS', 'Pris och Vikt');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Pris l&auml;ge: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'F&ouml;r&auml;ndring: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Eng&aring;ngs:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Eng&aring;ngs l&auml;ge: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'F&ouml;r&auml;ndring: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Alternativ pris per antal rabatt:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Eng&aring;ngs alternativ pris per antal rabatt:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Pris per ord:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Fria ord:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Pris per tecken:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Fria tecken:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Produkt Namn');
define('TABLE_HEADING_OPT_NAME', 'Alternativ Namn');
define('TABLE_HEADING_OPT_VALUE', 'Alternativ V&Auml;rde');
define('TABLE_HEADING_OPT_PRICE', 'Pris');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefix');
define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_DOWNLOAD', 'Nerladdningsbar produkt:');
define('TABLE_TEXT_FILENAME', 'Filnamn:');
define('TABLE_TEXT_MAX_DAYS', 'Giltlig dagar: (0 = obegr&auml;nsad)');
define('TABLE_TEXT_MAX_COUNT', 'Max nerladningar r&auml;knare:');
define('TABLE_HEADING_OPT_DISCOUNTED','Rabatt');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Bas');
define('TABLE_HEADING_PRICE_TOTAL','Total|Rabatt: Eng&aring;ngs:');
define('TEXT_WARNING_OF_DELETE', 'Detta alternativ har produkter och v&auml;rden l&auml;nkat till sig - det &auml;r inte s&auml;kert att radera den.');
define('TEXT_OK_TO_DELETE', 'Detta alternativ har inga produkter och v&auml;rden l&auml;nkat till sig - det &auml;r s&auml;kert att radera den');
define('TEXT_OPTION_ID', 'Alternativ ID');
define('TEXT_OPTION_NAME', 'Alternativ Namn');

define('ATTRIBUTE_WARNING_DUPLICATE','Alternativ duplikat finns - Alternativet sparades inte'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Alternativ duplikat finns - Alternativet &auml;ndrades inte'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Alternativ Namn och Alternativ V&auml;rde st&auml;mde inte - Alternativet lade inte till'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Alternativ Namn och Alternativ V&auml;rde st&auml;mde inte - Alternativet &auml;ndrades inte'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','M&ouml;jligt Alternativ Namn duplikat skapat'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','M&ouml;jligt Alternativ V&auml;rde duplikat skapat'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','&Auml;NDRAR'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','RADERAR'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','SKAPAR NYTT TILLVAL'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTERA: Nerladdningar &auml;r avst&auml;ngt');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dagar:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Sortera Efter');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','F&ouml;rvald ordning');
  define('TEXT_SORT',' Ordning: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefix');
  define('TABLE_HEADING_OPT_WEIGHT','Vikt');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordning');
  define('TABLE_HEADING_OPT_DEFAULT','F&ouml;rvald');

  define('TABLE_HEADING_OPT_TYPE', 'Alternativ Typ'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Sstorlek');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rader');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','kommentarer');

  define('TEXT_OPTION_VALUE_COMMENTS','Kommentar: ');
  define('TEXT_OPTION_VALUE_SIZE','Visnings Storlek: ');
  define('TEXT_OPTION_VALUE_MAX','Max l&auml;ngd: ');

  define('TEXT_ATTRIBUTES_IMAGE','Alternativ Bild V&auml;xlare:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Alternativ Bild Katalog:');

  define('TEXT_ATTRIBUTES_FLAGS','Alternativ<br />Flagga:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Anv&auml;nds f&ouml;r<br />Visning endast:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Alternativ &auml;r gratis<br />N&auml;r produkten &auml;r gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'F&ouml;rvalt Alternativ<br />Som skall vara markerat:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'till&auml;mpa en rabatt anv&auml;nds<br />per Produkt Erbjudande/Rea:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Inkludera i Bas Priset<br />N&auml;r pris s&auml;tts efter Alternativ');
  define('TEXT_ATTRIBUTES_REQUIRED','Alternativ kr&auml;vs<br />f&ouml;r Text:');

  define('LEGEND_BOX','saker att visa:');
  define('LEGEND_KEYS','AV/P&Aring;');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Visa endast');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Fri');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'F&ouml;rvalt');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Rabatterad');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Bas Pris');
  define('LEGEND_ATTRIBUTES_REQUIRED','Obligatoriskt');
  define('LEGEND_ATTRIBUTES_IMAGES','Bilder');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Giltligt/Ogiltligt<br />filnamn');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','TILL F&Ouml;RVALD ORDNING');
  define('TEXT_PRODUCTS_LISTING','Produkter Listas f&ouml;r: ');
  define('TEXT_NO_PRODUCTS_SELECTED','Inga produkter valda');
  define('TEXT_NO_ATTRIBUTES_DEFINED','Inga alternativ f&ouml;r produkt ID');

  define('TEXT_PRODUCTS_ID','Produkt ID');
  define('TEXT_ATTRIBUTES_DELETE','RADERA ALLA');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Kopiera till produkt');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Kopiera till Kategori');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Alternativ &auml;ndrat f&ouml;r Produkt ID ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Radera <strong>ALLA</strong> ProduKt alternativ f&ouml;r:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopiera alternativ fr&aring;n en produkt eller till en annan kategori f&ouml;r:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','PRODUKT');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopiera alternativ till <strong>Produkt</strong> fr&aring;n ID');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','V&auml;lj en produkt att kopiera alla alternativ till:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','KATEGORI');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','V&auml;lj en kategori att kopiera alla alternativ till:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopiera alternativ till alla produkter i <strong>Kategorin</strong> fr&aring;n Produkt ID');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hur skall existerande alternativ hanteras?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Radera</strong> f&ouml;rst, sedan kopiera nya alternativ');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Uppdatera</strong> med nya inst&auml;llningar/priser, sedan l&auml;gg till nya');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorera</strong> och l&auml;gg endast till nya');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Sorterings ordningen f&ouml;r alternativen har uppdaterats f&ouml;r ID ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Inga alternativ att Uppdatera Sorteringsordning f&ouml;r ID ');
  define('SUCCESS_ATTRIBUTES_DELETED','Alternativet &auml;r raderat');
  define('SUCCESS_ATTRIBUTES_UPDATE','Alternativet &auml;r uppdaterat');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Ingen kategori vald f&ouml;r kopieringen');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - i Kategori: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','&Auml;r du s&auml;ker p&aring; att du vill radera alternativen f&ouml;r ID ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hoppa &ouml;ver nya alternativ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Infogar nya altermativ fr&aring;n </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Uppdaterar fr&aring;n alternativ </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','GRANSKA ALTERNATIV');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','GRANSKNING AV ATTRIBUT F&Ouml;R ID');
  define('TEXT_PRODUCT_OPTIONS', '<strong>V&auml;lj:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Ange alternativ inst&auml;llningarna och klicka p&aring; Spara</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Pris efter alternativ');
  define('TEXT_PRODUCTS_PRICE', 'Produkt Pris: ');
  define('TEXT_SPECIAL_PRICE', 'Special Price: ');
  define('TEXT_SALE_PRICE', 'Rea Pris: ');
  define('TEXT_FREE', 'FRI');
  define('TEXT_CALL_FOR_PRICE', 'Ring f&ouml;r Pris');
  define('TEXT_SAVE_CHANGES','UPPDATERA OCH SPARA &Auml;NDRINGAR:');

  define('TEXT_INFO_ID', 'ID');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'L&auml;gg inte i korgen');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Bekr&auml;fta radering av ALLA produkt alternativ v&auml;rden f&ouml;r Alternativ namn ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Produkt Namn: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Alternativ Namn: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Alla alternativ v&auml;rden &auml;r raderade f&ouml;r alternativ namn: ');
?>