<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 */
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
define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_DOWNLOAD', 'Nerladdningsbara produkter:');
define('TABLE_TEXT_FILENAME', 'Filnamn:');
define('TABLE_TEXT_MAX_DAYS', 'G&auml;ller dagar:');
define('TABLE_TEXT_MAX_COUNT', 'Max nerladdningar r&auml;knare:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Detta alternativ namn har produkter och v&auml;rden l&auml;nkat till sig. - det &auml;r inte s&auml;kert att radera den.<br />NOTERA: Alla kopplade nerladdningsfiler f&ouml;r detta alternativ v&auml;rde kommer inte raderas fr&aring;n servern.</span>');
define('TEXT_OK_TO_DELETE', 'Detta alternativ namn har inga produkter eller v&auml;rden kopplat till sig - det &auml;r s&auml;kert att radera den.');
define('TEXT_OPTION_ID', 'Alternativ ID');
define('TEXT_OPTION_NAME', 'Alternativ Namn');
define('TABLE_HEADING_OPT_DISCOUNTED','Avdrag');

define('ATTRIBUTE_WARNING_DUPLICATE','ALternativet fanns redan - Alternativet lades inte till'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Alternativet fanns redan - Alternativet &auml;ndrades inte'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Alternativets namn och v&auml;rde st&auml;mde INTE - Alternativet lades inte till'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Alternativets namn och v&auml;rde st&auml;mde INTE - Alternativet &auml;ndrades inte'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','M&ouml;jligt att alternativ namnnet finns tv&aring; g&aring;nger'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','M&ouml;jligt att alternativ v&auml;rdet finns tv&aring; g&aring;nger'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','&Auml;NDRA'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','RADERA'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','Nytt Alternativ'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTERA: Nerladdningar &auml;r avst&auml;ngt');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dagar:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Sorteringsordning');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','F&ouml;rvald ordning');
  define('TEXT_SORT',' Ordning: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefix');
  define('TABLE_HEADING_OPT_WEIGHT','Vikt');
  define('TABLE_HEADING_OPT_SORT_ORDER','Sorterningsordning');
  define('TABLE_HEADING_OPT_DEFAULT','F&ouml;rvalt');

  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nej');

  define('TABLE_HEADING_OPT_TYPE', 'Alternativ Typ'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Storlek');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rader');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Kommentarer');

  define('TEXT_OPTION_VALUE_COMMENTS','Kommentarer: ');
  define('TEXT_OPTION_VALUE_SIZE','Visnings Storlek: ');
  define('TEXT_OPTION_VALUE_MAX','Max L&auml;ngd: ');

  define('TEXT_ATTRIBUTES_IMAGE','Alternativ bild v&auml;xlare:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Alternativ bild katalog:');

  define('TEXT_ATTRIBUTES_FLAGS','Alternativ<br />Flaggning:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Anv&auml;ndsr<br />F&ouml;r visning endast:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Alternativ &auml;r gratis<br />N&auml;r produkten &auml;r gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'F&ouml;rvalt alternativ<br />att markera som f&ouml;rvalt:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Anv&auml;nd samma avdrag som<br />Anv&auml;nds f&ouml;r Produkt:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Anv&auml;nd i grundpriset<br />N&auml;r pris &auml;r efter alternativ');

  define('TEXT_PRODUCT_OPTIONS_INFO','&Auml;ndra produkt alternativ f&ouml;r Extra inst&auml;llningar');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopiera ALLA Produkter &auml;r alternativ namn och v&auml;rden &auml;r ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'V&auml;lj ett alternativ namn och  v&auml;rde som redan finns f&ouml;r en produkt eller produkter som du sedan vill kopiera till ett annat alternativ namn och v&auml;rde f&ouml;r alla produkter med detta existerande alternativ namn och v&auml;rde.');
  define('TEXT_SELECT_OPTION_FROM', 'Alternativ namn att matcha:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Alternativ v&auml;rde att matcha:');
  define('TEXT_SELECT_OPTION_TO', 'Alternativ namn att skapa:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Alternativ v&auml;rde att skapa:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'L&auml;mna tom f&ouml;r ALLA Produter eller<br />ange ett Kategori ID f&ouml;r Produkter att uppdatera');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Kopiera alternativ Namn/V&auml;rden f&ouml;r Produkter med existerande alternativ namn ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'V&auml;lj ett alternativ namn och v&auml;rde som redan finns till en produkt eller produkter att l&auml;gga till f&ouml;r alla produkter eller de produkter i den valda kategorin som har det valta alternativ namnet.
                                                   <br /><strong>Exepel:</strong> L&auml;gg till alternativ namn: F&auml;rg  Alternativ v&auml;rden: R&ouml;d till alla Produkter med alternativ namnet: Storlek
                                                   <br /><strong>Exempel:</strong> L&auml;gg till alternativ namn: F&auml;rg  Alternativ v&auml;rde: Gr&ouml;n som f&ouml;rvalt v&auml;rde fr&aring;n Produkt ID: 34 till alla Produkter med alternativ namnet: Storlek
                                                   <br /><strong>Exempel:</strong> L&auml;gg till alternativ namn: F&auml;rg  Alternativ v&auml;rde: Gr&ouml;n som f&ouml;rvalt v&auml;rde fr&aring;n Produkt ID: 34 till alla Produkter med alternativ namn: Storlek f&ouml;r Kategori ID: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Alternativ namn att l&auml;gga till f&ouml;r:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Alternativ namn att l&auml;gga till:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Alternativ v&auml;rde att l&auml;gga till:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'F&ouml;rvald Nytt alternativ v&auml;rde fr&aring;n Produkt ID# eller l&auml;mna tom f&ouml;r inget f&ouml;rvalt v&auml;rde:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hur skall existerande alternativ hanteras?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Radera</strong> f&ouml;rst sedan kopiera det nya');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Uppdatera</strong> existerande alternativ med nya inst&auml;llningar/priser');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorera</strong> existerande alternativ och l&auml;gg endast till nya alternativ');

  define('TEXT_INFO_FROM', ' fr&aring;n: ');
  define('TEXT_INFO_TO', ' till: ');
  define('ERROR_OPTION_VALUES_COPIED', 'FEL: Duplikata alternativ namn och alternativ v&auml;rden');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'FEL: Alternativ namn och alternativ v&auml;rden som &auml;r valda st&auml;mmer inte &ouml;verrens');
  define('ERROR_OPTION_VALUES_NONE', 'FEL: Inget hittades att kopiera');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Kopieringen lyckades! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'FEL: Alternativ namn/v&auml;rden saknades f&ouml;r produkt ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Radera matchande Alternativ fr&aring;n ALLA Produkter d&auml;r alternativ namn och v&auml;rden ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'V&auml;lj ett alternativ namn och v&auml;rde som existerar f&ouml;r en produkt eller produkter som du vill radera fr&aring;n ALLA Produkter eller fr&aring;n ALLA Produkter inom en kategori');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Alternativ namn att matcha:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Alternativ v&auml;rde att matcha:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'FEL: Valda alternativ namn och v&auml;rden st&auml;mmer inte &ouml;verrens');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Lyckat: Radering av: ');
?>