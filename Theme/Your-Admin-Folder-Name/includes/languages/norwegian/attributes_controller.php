<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2010 Rune Rasmussen http://www.syntaxerror.no/
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Kategorier: ');

define('HEADING_TITLE_OPT', 'Produktvarianter');
define('HEADING_TITLE_VAL', 'Variantverdier');
define('HEADING_TITLE_ATRIB', 'Variantkontroll');
define('HEADING_TITLE_ATRIB_SELECT','Velg en kategori som du ønsker å se/endre produktvariantene til...');

define('TEXT_PRICES_AND_WEIGHTS', 'Priser og vekt');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Prisfaktor: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Offset: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'En gang:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Engangsfaktor: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Offset: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Varianters kvantumsrabatt:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Engangs kvantumsrabatt på varianter:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Pris per ord:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Gratisord:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Pris per bokstav:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Gratisbokstaver:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Produktnavn');
define('TABLE_HEADING_OPT_NAME', 'Variantgruppe');
define('TABLE_HEADING_OPT_VALUE', 'Variantverdi');
define('TABLE_HEADING_OPT_PRICE', 'Pris');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefiks');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_DOWNLOAD', 'Nedlastbare produkter:');
define('TABLE_TEXT_FILENAME', 'Filnavn:');
define('TABLE_TEXT_MAX_DAYS', 'Dager til utløp: (0 = ubegrenset)');
define('TABLE_TEXT_MAX_COUNT', 'Maks antall nedlastninger:');
define('TABLE_HEADING_OPT_DISCOUNTED','Rabatt');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Base');
define('TABLE_HEADING_PRICE_TOTAL','Total|Rabatt: Engangs:');
define('TEXT_WARNING_OF_DELETE', 'Denne varianten har produkter og verdier lenket til seg - det er ikke sikkert å slette den.');
define('TEXT_OK_TO_DELETE', 'Denne varianten har ingen produkter og verdier lenket til seg - det er sikkert å slette den.');
define('TEXT_OPTION_ID', 'Variant-ID');
define('TEXT_OPTION_NAME', 'Variantgruppe');

define('ATTRIBUTE_WARNING_DUPLICATE','Kopier variant - variant ble ikke lagt til'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Kopi av variant eksisterer - variant ble ikke endret'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Variantvalg og -verdi passer ikke - variant ble ikke lagt til'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Variantvalg og -verdi passer ikke - variant ble ikke endret'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mulig kopi av variantgruppe ble lagt til'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mulig kopi av variantverdi ble lagt til'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','Endre'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','Slett'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','Legge til ny variant'); // title
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

  define('TABLE_HEADING_OPT_TYPE', 'Variantype'); //CLR 031203 add option type column
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
  define('TEXT_ATTRIBUTES_REQUIRED','Egenskap kreves<br />for tekst:');

  define('LEGEND_BOX','Tegnforklaring');
  define('LEGEND_KEYS','Av/På');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Vis bare');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratis');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Standard');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Rabattert');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Basispris');
  define('LEGEND_ATTRIBUTES_REQUIRED','Påkrevd');
  define('LEGEND_ATTRIBUTES_IMAGES','Bilder');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Gyldig/Ugyldig<br />filnavn');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','Til standard sortering');
  define('TEXT_PRODUCTS_LISTING','Produktlisting for ');
  define('TEXT_NO_PRODUCTS_SELECTED','Ingen produkter valgt');
  define('TEXT_NO_ATTRIBUTES_DEFINED','Ingen varianter angitt for produkt-IDnr.');

  define('TEXT_PRODUCTS_ID','Produkt-IDnr.');
  define('TEXT_ATTRIBUTES_DELETE','Slett alle');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Kopier til produkt');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Kopier til kategori');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Variantendringer for produkters IDnr. ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Slett <strong>alle</strong> produktvarianter for:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopier varianter til et annet produkt eller til en hel kategori fra:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','Produkt');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopier varianter til et annet <strong>produkt</strong> fra IDnr.');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Velg produkt som det skal kopieres alle varianter til:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','Kategori');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Velg kategori som det skal kopieres alle varianter til:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopier varianter til alle produkter i <strong>kategori</strong> fra produkt-IDnr.');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hvordan skal eksisterende produktvarianter bli behandlet?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Slett</strong> først, kopier så nye varianter');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Oppdater</strong> med nye instillinger/priser, legg så til nye');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> og legg bare til nye varianter');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Vellykket oppdatering av sortering for varianter for IDnr. ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Ingen varianter å oppdatere sortering for IDnr. ');
  define('SUCCESS_ATTRIBUTES_DELETED','Varianter vellykket slettet');
  define('SUCCESS_ATTRIBUTES_UPDATE','Varianter vellykket oppdatert');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Ingen kategori valgt for kopi');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - i kategori: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','Er du sikker på at du vil slette alle varianter for IDnr. ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hopper over ny variant </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Setter inn ny variant fra </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Oppdaterer fra variant </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','Forhåndsvis varianter');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','Forhåndsvis varianter for IDnr.');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Velg:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', 'Angi variantinstillinger og klikk så Legg til');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Priset etter varianter');
  define('TEXT_PRODUCTS_PRICE', 'Produktpris: ');
  define('TEXT_SPECIAL_PRICE', 'Tilbudspris: ');
  define('TEXT_SALE_PRICE', 'Salgspris: ');
  define('TEXT_FREE', 'Gratis');
  define('TEXT_CALL_FOR_PRICE', 'Ring for pris');
  define('TEXT_SAVE_CHANGES','Oppdater og lagre endringer:');

  define('TEXT_INFO_ID', 'IDnr.');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Kan ikke legges i handlekurv');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Bekreft sletting av alle variantverdier for variantgruppe...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Produktnavn: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Variantgruppe: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>IDnr.</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Vellykket sletting av alle variantverdier for variantgruppe: ');
  