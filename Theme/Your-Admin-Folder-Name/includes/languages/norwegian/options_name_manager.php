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
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: options_name_manager.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE_OPT', 'Variantgrupper');
define('HEADING_TITLE_VAL', 'Variantverdier');
define('HEADING_TITLE_ATRIB', 'Produktvarianter');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Produktnavn');
define('TABLE_HEADING_OPT_NAME', 'Variantgruppe');
define('TABLE_HEADING_OPT_VALUE', 'Variantverdier');
define('TABLE_HEADING_OPT_PRICE', 'Pris');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefiks');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_DOWNLOAD', 'Nedlastbare produkter:');
define('TABLE_TEXT_FILENAME', 'Filnavn:');
define('TABLE_TEXT_MAX_DAYS', 'Dager til utløp: (0 = ubegrenset)');
define('TABLE_TEXT_MAX_COUNT', 'Maks antall nedlastninger:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Denne varianten har produkter og verdier lenket til seg - det er ikke sikkert å slette det.<br />Merk: Alle assosierte nedlastingsfiler for denne variantverdien vil bli slettet fra serveren.</span>');
define('TEXT_OK_TO_DELETE', 'Denne varianten har ingen produkter og verdier lenket til seg - det er sikkert å slette det.<br />Forsiktig: Alle variantverdier vil bli slettet for dette variantgruppeet.');
define('TEXT_OPTION_ID', 'Variant-ID');
define('TEXT_OPTION_NAME', 'Variantgruppe');
define('TABLE_HEADING_OPT_DISCOUNTED','Trukket i fra');

define('ATTRIBUTE_WARNING_DUPLICATE','Kopier variant - variant ble ikke lagt til'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Kopi av variant eksisterer - variant ble ikke endret'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Variantgruppe og -verdi passer ikke - variant ble ikke lagt til'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Variantgruppe og -verdi passer ikke - variant ble ikke endret'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mulig kopi av variantgruppe ble lagt til'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mulig kopi av variantverdi ble lagt til'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','Endrer'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','Sletter'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','Legge til nye varianter'); // title
define('TEXT_DOWNLOADS_DISABLED','Nedlastninger er deaktivert');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dager:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Maks:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Sortering');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Standard sortering');
  define('TEXT_SORT',' Sorter: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefiks');
  define('TABLE_HEADING_OPT_WEIGHT','Vekt');
  define('TABLE_HEADING_OPT_SORT_ORDER','Sortering');
  define('TABLE_HEADING_OPT_DEFAULT','Standard');

  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nei');

  define('TABLE_HEADING_OPT_TYPE', 'Valgtype'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Størrelse');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Maks');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rader');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Kommentarer');

  define('TEXT_OPTION_VALUE_COMMENTS','Kommentarer: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Rader: ');
  define('TEXT_OPTION_VALUE_SIZE','Vis størrelse: ');
  define('TEXT_OPTION_VALUE_MAX','Maks lengde: ');

  define('TEXT_ATTRIBUTES_IMAGE','Variantbilde:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Varianters bildemappe:');

  define('TEXT_ATTRIBUTES_FLAGS','Variant<br />flagg:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Bare for visning,<br />kan ikke velges:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Variant er gratis<br />når produkt er gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Forvalgt<br />variant:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Bruk samme rabatter<br />som på produkt:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Inkluder i grunnpris<br />når priset etter varianter');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Merk: Rediger variantgrupper for tilleggsinnstillinger</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Advarsel: Ingen produkter funnet... ingenting ble oppdatert');

define('TEXT_SELECT_PRODUCT', ' Velg et produkt');
define('TEXT_SELECT_CATEGORY', ' Velg en kategori');
define('TEXT_SELECT_OPTION', 'Velg et variantgruppe');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Legg til alle variantverdier til alle produkter for variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Oppdater alle eksisterende produkter som har minst en variantverdi, og legg til alle variantverdier i en variantgruppe');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Vellykket oppdatering av varianter ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Legg til alle variantverdier til et av produktene for variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Oppdater et produkt som har minst en variantverdi og legg til alle variantverdier i en variantgruppe');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Legg til alle variantverdier til en kategori av produkter for variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Oppdater en kategori av produkter, når produktet har minst en variantverdi og legg til alle variantverdier i en variantgruppe');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>Merk:</strong> Sortering vil bli satt til standard variantverdis sortering for disse produktene');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Slett alle variantverdier til alle produkter for variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Oppdater alle eksistrende produkter som har minst en variantverdi og slett alle variantverdier i variantgruppe');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Slett alle variantverdier til et produkt for variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Oppdater et produkt som har minst en variantverdi og slett alle variantverdier i variantgruppe');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Slett alle variantverdier til en kategori av produkter for variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Oppdater en kategori av produkter, når produkter har minst en variantverdi og slett alle variantverdier i variantgruppe');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>Merk:</strong> Alle variantgrupper og variantverdier vil bli slettet for valgte produkt(er). Dette vil ikke slette variantverdi-innstillinger.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopier alle variantverdier til en annen variantgruppe</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Alle variantverdier vil bli kopiert fra en variantgruppe til en annen variantgruppe');
define('TEXT_SELECT_OPTION_FROM', 'Kopier fra variantgruppe: ');
define('TEXT_SELECT_OPTION_TO', 'Kopier alle variantverdier til variantgruppe: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Vellykket kopiering! ');
define('ERROR_OPTION_VALUES_COPIED', 'Feil - Kan ikke kopiere variantverdier til samme variantgruppe! ');
define('ERROR_OPTION_VALUES_NONE', 'Feil - Kopi fra variantgruppe har 0 verdier definert. Ingenting ble kopiert! ');
define('TEXT_WARNING_BACKUP', 'Advarsel: Lag alltid sikkerhetskopier av databasen før du gjør globale endringer');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Variantbilder per rad: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Variantstil for Radioknapper/Avkrysningsbokser: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Bildevalg:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Bilder under variantgruppe');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Element, bilde og variantverdi');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Element, bilde og variantgruppe under');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Variantgruppe under element og bilde');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Element under bilde og variantgruppe');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Element over bilde og variantgruppe');