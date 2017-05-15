<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Copyright Translation 2006 - 2010 Rune Rasmussen - syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 */

define('HEADING_TITLE_OPT', 'Variantverdier');
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

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Merk: Rediger variantverdier for tilleggsinnstillinger</strong>');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopier til alle produkter hvor variantgruppe og -verdi...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Velg en variantgruppe og -verdi som finnes på et produkt eller produkter som du ønsker å kopiere en annen variantgruppe og -verdi til, for alle produketer med denne eksisterende variantgruppen og -verdien');
  define('TEXT_SELECT_OPTION_FROM', 'Variantgruppe som skal passe:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Variantverdi som skal passe:');
  define('TEXT_SELECT_OPTION_TO', 'Variantgruppe som skal legges til:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Variantverdi som skal legges til:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'La stå tom for alle produketer eller<br />fyll inn en kategori-ID for produkter som skal oppdateres');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Kopier variantgruppe/-verdi til produkter med eksisterende variantgruppe..</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Velg en variantgruppe og -verdi som finnes på et produkt eller produkter for å legge til alle produkter, eller bare til produkter i den valgte kategori som tilhører valgt variantgruppe.
                                                   <br /><strong>Eksempel:</strong> Legg til variantgruppe: Fargevalg: Rød til alle produkter med variantgruppe: Størrelse
                                                   <br /><strong>Eksempel:</strong> Legg til variantgruppe: Fargevalg: Grønn med standard verdier fra produkt-ID: 34 til alle produkter med variantgruppe: Størrelse
                                                   <br /><strong>Eksempel:</strong> Legg til variantgruppe: Fargevalg: Grønn med standard verdier fra produkt-ID: 34 til alle produkter med variantgruppe: Størrelse for kategori-ID: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Variantgruppe som det skal legges til i:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Variantgruppe som skal legges til:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Variantverdi som skal legges til:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Standard ny variantverdi fra produkt-IDnr., eller la stå tomt om ingen standradverdi behøves:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hvordan eksisterende produktvarianter skal bli behandlet?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Slett</strong> først, kopier så nye varianter');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Oppdater</strong> eksisterende varianter med nye innstillinger/priser');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> eksisterende varianter og legg bare til nye varianter');

  define('TEXT_INFO_FROM', ' fra: ');
  define('TEXT_INFO_TO', ' til: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Feil: Duplikat variantgruppe og -verdi');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Feil: Ikke passende variantgruppe og -verdi er valgt');
  define('ERROR_OPTION_VALUES_NONE', 'Feil: Ingenting funnet for å kopiere');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Vellykket kopiering! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Feil: Mangler variantgruppe/-verdi for produkt-IDnr.');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Slett passende variant fra alle produkter hvor variantnavn og -verdi...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Velg en variantgruppe og -verdi som finnes på et produkt eller produkter som du ønsker å slette fra alle produkter, eller fra alle produkter i en kategori');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Variantgruppe som skal passe:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Variantverdi som skal passe:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Feil: Ikke passende variantgruppe og -verdi er valgt');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Vellykket sletting av: ');