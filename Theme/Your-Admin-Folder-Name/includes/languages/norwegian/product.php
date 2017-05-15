<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Copyright Translation 2006 - 2010 Rune Rasmussen - syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Kategorier / Produkter');
define('HEADING_TITLE_GOTO', 'G� til:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorier / Produkter');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sorter');

define('TABLE_HEADING_PRICE','Pris/Tilbud/Salg');
define('TABLE_HEADING_QUANTITY','Antall');

define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_CATEGORIES', 'Kategorier:');
define('TEXT_SUBCATEGORIES', 'Underkategorier:');
define('TEXT_PRODUCTS', 'Produkter:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pris:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Avgiftsklasse:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Gjennomsnittsrating:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Antall:');
define('TEXT_DATE_ADDED', 'Lagt til:');
define('TEXT_DATE_AVAILABLE', 'Tilgjengelig fra:');
define('TEXT_LAST_MODIFIED', 'Sist endret:');
define('TEXT_IMAGE_NONEXISTENT', 'Bilde eksisterer ikke');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Sett inn en ny kategori eller produkt p� dette niv�et.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'For mer informasjon, bes�k dette produktets <a href="http://%s" target="blank">nettside</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Dette produktet ble lagt til v�r katalog %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Dette produktet vil v�re p� lager %s.');

define('TEXT_EDIT_INTRO', 'Gj�r n�dvendige endringer');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategori-ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategorinavn:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategoribilde:');
define('TEXT_EDIT_SORT_ORDER', 'Sortering:');

define('TEXT_INFO_COPY_TO_INTRO', 'Velg en ny kategori som du �nsker � kopiere dette produket til');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Gjeldende kategorier: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny kategori');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Endre kategori');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Slett kategori');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Flytt kategori');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Slett produkt');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Flytt produkt');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopier til');

define('TEXT_DELETE_CATEGORY_INTRO', 'Er du sikker p� at du �nsker � slette denne kategorien?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Er du sikker p� at du �nsker permanent � slette dette produktet?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Advarsel:</b> Det er %s (sub-)kategorier forsatt lenket til denne kategorien!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Advarsel:</b> Det er %s produkter forsatt lenket til denne kategorien!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Velg hvilken kategori du �nsker <b>%s</b> � v�re i');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Velg hvilken kategori du �nsker <b>%s</b> � v�re i');
define('TEXT_MOVE', 'Flytt <b>%s</b> til:');

define('TEXT_NEW_CATEGORY_INTRO', 'Fyll ut f�lgende informasjon for ny kategori');
define('TEXT_CATEGORIES_NAME', 'Kategori navn:');
define('TEXT_CATEGORIES_IMAGE', 'Kategori bilde:');
define('TEXT_SORT_ORDER', 'Sortering:');

define('TEXT_PRODUCTS_STATUS', 'Produktstatus:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produkt er virtuelt:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Alltid gratis levering:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Vis felt for antall:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Dato tilgjengelig:');
define('TEXT_PRODUCT_AVAILABLE', 'P� lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Ikke p� lager');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, glem leveringsadresse');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nei, leveringsadresse kreves');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, alltid gratis levering');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nei, normale leveringsregler');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Tilbud-, Produkt-/Nedlastingskombinasjon krever en leveringsadresse');
define('TEXT_PRODUCTS_SORT_ORDER', 'Sortering:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, vis felt for antall');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nei, ikke vis felt for antall  ');

define('TEXT_PRODUCTS_MANUFACTURER', 'Produsent:');
define('TEXT_PRODUCTS_NAME', 'Produktnavn:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produktbeskrivelse:');
define('TEXT_PRODUCTS_QUANTITY', 'Produktantall:');
define('TEXT_PRODUCTS_MODEL', 'Produktmodell:');
define('TEXT_PRODUCTS_IMAGE', 'Produktbilde:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Last opp til katalog:');
define('TEXT_PRODUCTS_URL', 'Produkt URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(uten http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Produktpris (eks. mva):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Produktpris (inkl. mva):');
define('TEXT_PRODUCTS_WEIGHT', 'Produktvekt:');

define('EMPTY_CATEGORY', 'Tom kategori');

define('TEXT_HOW_TO_COPY', 'Kopieringsmetode:');
define('TEXT_COPY_AS_LINK', 'Lenke produkt');
define('TEXT_COPY_AS_DUPLICATE', 'Kopier produkt');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Bare brukt p� kopierte produkter ...');
  define('TEXT_COPY_ATTRIBUTES','Kopier produktvarianter til kopi?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nei');

// Products and Discount Copy Options
  define('TEXT_COPY_DISCOUNTS_ONLY','Bare brukt p� kopierte produkter med rabatter ...');
  define('TEXT_COPY_DISCOUNTS','Kopier produktrabatt til kopier?');
  define('TEXT_COPY_DISCOUNTS_YES','Ja');
  define('TEXT_COPY_DISCOUNTS_NO','Nei');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Eksisterende produkt: ');
  define('TABLE_HEADING_MODEL', 'Modell');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Variantendringer for produkts-IDnr ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Slett <strong>alle</strong> produktvarianter for:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopier varianter til et annet produkt eller til en hel kategori fra:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopier varianter til et annet <strong>produkt</strong> fra:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopier varianter til en annen <strong>kategori</strong> fra:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hvordan skal ekisterende produktvarianter bli behandlet?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Slett</strong> f�rst, s� kopier nye varianter');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Oppdater</strong> med nye innstillinger/priser, legg s� til nye');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> og legg bare til nye varianter');

  define('SUCCESS_ATTRIBUTES_DELETED','Varianter ble vellykket slettet');
  define('SUCCESS_ATTRIBUTES_UPDATE','Varianter ble vellykket oppdatert');

  define('ICON_ATTRIBUTES','Varianter');

  define('TEXT_CATEGORIES_IMAGE_DIR','Last opp til mappe');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Advarsel: Viser ikke felt for antall, standard antall er 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Advarsel: Viser ikke felt for antall, standard antall er 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Velg:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Varianter for:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Nedlastninger: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produkt priset etter varianter:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nei');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Vist pris vil inkludere pris for laveste variantgruppes pluss pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Vist pris vil inkludere pris for laveste variantgruppes pluss pris');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minimum produktantall:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Antall produktenheter:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Maksimum produktantall:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Ubegrenset, 1 = Ingen felt for antall');

  define('TEXT_PRODUCTS_MIXED','Produktantall Min/Enhetsmiks:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produkt er gratis');
  define('TEXT_PRODUCT_IS_FREE','Produkt er gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produkt er merket som gratis');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produkt er merket som gratis');

  define('TEXT_PRODUCT_IS_CALL','Produkt er ring for pris:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produkt er merket som ring for pris');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produkt er merket som ring for pris');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Ignorerer ny variant </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Setter inn ny variant fra </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Oppdaterer fra varianter </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Marker hva produktets metatagger skal inneholde:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Produktnavn:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Tittel:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Modell:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Pris:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Tittel/Tagglinje:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Metatagg-tittel:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Metatagg-n�kkelord:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Metatagg-beskrivelse:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">UTELUKKET</span>');
