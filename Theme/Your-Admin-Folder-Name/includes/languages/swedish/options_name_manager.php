<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE_OPT', 'Produkt Alternativ Namn');
define('HEADING_TITLE_VAL', 'Alternativ V&auml;rden');
define('HEADING_TITLE_ATRIB', 'Produkt Alternativ hantering');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Produkt Namn');
define('TABLE_HEADING_OPT_NAME', 'Alternativ Namn');
define('TABLE_HEADING_OPT_VALUE', 'Alternativ V&auml;rde');
define('TABLE_HEADING_OPT_PRICE', 'Pris');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefix');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');
define('TABLE_HEADING_DOWNLOAD', 'Nerladdningsbar produkt:');
define('TABLE_TEXT_FILENAME', 'Filnamn:');
define('TABLE_TEXT_MAX_DAYS', 'Slutar efter dagar:');
define('TABLE_TEXT_MAX_COUNT', 'Max nerladdnings r&auml;knare:');

define('TEXT_WARNING_OF_DELETE', 'Detta alternativ har produkter och v&auml;rden kopplat till sig - det &auml;r inte s&auml;kert att radera den.');
define('TEXT_OK_TO_DELETE', 'Detta alternativ har inga produkter l&auml;nkat till sig - du kan radera detta alternativ.<br />Varning: Alla alternativ v&auml;rden kommer att raderas f&ouml;r detta alternativ namn.');
define('TEXT_OPTION_ID', 'Alternativ ID');
define('TEXT_OPTION_NAME', 'Alternativ Namn');
define('TABLE_HEADING_OPT_DISCOUNTED','Avdrag');

define('ATTRIBUTE_WARNING_DUPLICATE','Alternativ Namnet fanns - Alternativet lades inte till'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Alternativet Namnet fanns - Alternativet &auml;ndrades inte'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Alternativ namn och alternativ v&auml;rde st&auml;mde INTE - Alternativet sparades inte'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Alternativ namn och alternativ v&auml;rde st&auml;mde INTE - Alternativet sparades inte'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','M&ouml;jligt att det finns tv&aring; alternativ namn som &auml;r lika'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','M&ouml;jligt att det finns tv&aring; alternativ v&auml;rden som &auml;r lika'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','&Auml;NDRA'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','RADERA'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','NYTT ALTERNATIV'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTERA: Nerladdning &auml;r avst&auml;ngt');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dagar:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Sorteringsordning');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','F&ouml;rvald ordning');
  define('TEXT_SORT',' Ordning: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefix');
  define('TABLE_HEADING_OPT_WEIGHT','Vikt');
  define('TABLE_HEADING_OPT_SORT_ORDER','Sorteringsordning');
  define('TABLE_HEADING_OPT_DEFAULT','F&ouml;rvalt');

  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nej');

  define('TABLE_HEADING_OPT_TYPE', 'Alternativ typ'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Storlek');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rader');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Kommentarer');

  define('TEXT_OPTION_VALUE_COMMENTS','Kommentarer: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Rader: ');
  define('TEXT_OPTION_VALUE_SIZE','Visnings storlek: ');
  define('TEXT_OPTION_VALUE_MAX','Max l&auml;ngd: ');

  define('TEXT_ATTRIBUTES_IMAGE','Alternativ bild v&auml;xlare:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Alternativ bild katalog:');

  define('TEXT_ATTRIBUTES_FLAGS','Alternativ<br />Flaggning:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Anv&auml;nds f&ouml;r<br />Visning endast:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Alternativ &auml;r gratis<br />N&auml;r produkt &auml;r gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'F&ouml;rvalt alternativ<br />att markera som f&ouml;rvalt:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Anv&auml;nd samma avdrag<br />som f&ouml;r produkt:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Inkludera i baspriset<br />N&auml;r pris &auml;r efter alternativ');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>NOTERA: &Auml;ndra produkt alternatiiv namn f&ouml;r extra inst&auml;llningar</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'VARNING: Ingen produkt hittades ... Ingen uppdatering');

define('TEXT_SELECT_PRODUCT', ' V&auml;lj en produkt');
define('TEXT_SELECT_CATEGORY', ' V&auml;lj en Kategori');
define('TEXT_SELECT_OPTION', 'V&auml;lj alternativ namn');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>L&auml;gg till ALLA Alternativ v&auml;rden till ALLA produkter f&ouml;r Alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Uppdatera ALLA existerande produkter som har minst ETT alternativ v&auml;rde och l&auml;gg till ALLA alternativ v&auml;rden till ett alternativ namn');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Alternativ uppdaterat ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>L&auml;gg till ALLA alternativ v&auml;rden till EN produkt f&ouml;r alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Uppdatera EN produkt som har minst ETT alternativ v&auml;rde och l&auml;gg till ALLA alternativ v&auml;rden till ett alternativ namn');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>L&auml;gg till ALLA Alternativ v&auml;rden till EN Kategori av produkter f&ouml;r ett alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Uppdatera EN Kategori av produkter, n&auml;r en produkt har minst ETT alternativ v&auml;rde och l&auml;gg till ALLA alternativ v&auml;rden f&ouml;r ett alternativ namn');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTERA:</strong> sorteringsordning s&auml;tts efter f&ouml;rvalt alternativ v&auml;rde efter Sortorteringsordning f&ouml;r dessa produkter');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Radera ALLA Alternativ v&auml;rden f&ouml;r ALLA produkter f&ouml;r detta alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Uppdatera ALLA produkter som har minst ETT alternativ v&auml;rde och radera ALLA alternativ v&auml;rden f&ouml;r ett alternativ namn');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Radera ALLA alternativ v&auml;rden till EN produkt f&ouml;r alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Uppdatera EN produkt som har minst ETT alternativ v&auml;rde och radera ALLA alternativ v&auml;rden f&ouml;r ett alternativ namn');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Radera ALLA alternativ v&auml;rden f&ouml;r EN kategori av produkter f&ouml;r ett alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Uppdater EN Kategori av produkter, n&auml;r produkter har ETT alternativ v&auml;rde och radera ALLA alternativ v&auml;rden f&ouml;r ett alternativ namn');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTERA:</strong> Alla alternativ namns v&auml;rden kommer att raderas f&ouml;r vald produkt. Detta raderar inte alternativ v&auml;rde inst&auml;llningarna.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopiera ALLA alternativ v&auml;rden till ett annat alternativ namn</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Alla alternativ v&auml;rden kommer att kopieras fr&aring;n ett alternativ namn till ett annat alternativ namn');
define('TEXT_SELECT_OPTION_FROM', 'Kopiera fr&aring;n alternativ namn: ');
define('TEXT_SELECT_OPTION_TO', 'Kopiera Alla alternativ v&auml;rden till alternativ namn: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Kopieringen lyckades! ');
define('ERROR_OPTION_VALUES_COPIED', 'FEL - Kan inte kopiera alternativ v&auml;rden till samma alternativ namn! ');
define('ERROR_OPTION_VALUES_NONE', 'FEL - Kopieringen fr&aring;n alternativ namn har 0 V&auml;rden valda. Inget kopierades! ');
define('TEXT_WARNING_BACKUP', 'Varning: G&ouml;r alltid backup av din databas f&ouml;re du g&ouml;r globala &auml;ndringar.');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Alternativ bilder per Rad: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Alternativ Stil f&ouml;r Radio knappar/kryssrutor: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>NOTERA: Rader, f&ouml;rvald storlek och Max L&auml;ngd &auml;r f&ouml;r Text Alternativ &auml;ndast:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Bild stil:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Bild under alternativ namn');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= &Auml;mne, Bild och alternativ v&auml;rde');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= &Auml;mne, Bild och alternativ namn under');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Alternativ namn under &auml;mne och bilder');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= &Auml;mne under bild och alternativ namn');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= &Auml;mne &ouml;ver bild och alternativ namn');
?>