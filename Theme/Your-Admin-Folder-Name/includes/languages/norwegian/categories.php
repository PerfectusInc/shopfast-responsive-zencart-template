<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Copyright Translation 2006-2010 Rune Rasmussen - syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: categories.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Kategorier / Produkter');
define('HEADING_TITLE_GOTO', 'Gå til:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorier / Produkter');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sortering');

define('TABLE_HEADING_PRICE','Pris/Tilbud/Salg');
define('TABLE_HEADING_QUANTITY','Antall');

define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_CATEGORIES', 'Kategorier:');
define('TEXT_SUBCATEGORIES', 'Underkategorier:');
define('TEXT_PRODUCTS', 'Produkter:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pris:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Avgiftsklasse:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Gjennomsnittsvurdering:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Antall:');
define('TEXT_DATE_ADDED', 'Opprettet:');
define('TEXT_DATE_AVAILABLE', 'Tilgjengelig:');
define('TEXT_LAST_MODIFIED', 'Sist endret:');
define('TEXT_IMAGE_NONEXISTENT', 'Bilde eksisterer ikke');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Opprett ny kategori eller produkt på dette nivået.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'For mer informasjon, gå til produktets <a href="http://%s" target="blank">nettside</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Dette produktet ble lagt til i butikken %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Dette produktet forventes å være på lager %s.');

define('TEXT_EDIT_INTRO', 'Gjør nødvendige endringer');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategori-ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategorinavn:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategoribilde:');
define('TEXT_EDIT_SORT_ORDER', 'Sortering:');

define('TEXT_INFO_COPY_TO_INTRO', 'Velg en ny kategori som du ønsker å kopiere dette produktet til');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Gjeldende kategorier: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny kategori');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Endre kategori');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Slett kategori');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Flytt kategori');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Slett produkt');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Flytt produkt');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopier til');

define('TEXT_DELETE_CATEGORY_INTRO', 'Er du sikker på at du ønsker å slette denne kategorien?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Advarsel:</strong> Linked Products whose Master Categories ID are deleted will not price properly. You should first assure that when deleting a Category that contains Linked Products that you reset the Product(s) Master Categories ID to another Category before removing a Category');
define('TEXT_DELETE_PRODUCT_INTRO', 'Er du sikker på at du ønsker å permanent slette dette produktet?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Advarsel:</b> Det er %s andre (under)kategorier som forsatt er lenket til denne kategorien!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Advarsel:</b> Det er %s produkter som forsatt er lenket til denne kategorien!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Velg hvilken katalog som du ønsker <b>%s</b> å være i');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Velg hvilken katalog som du ønsker <b>%s</b> å være i');
define('TEXT_MOVE', 'Flytt <b>%s</b> til:');

define('TEXT_NEW_CATEGORY_INTRO', 'Fyll inn følgende informasjon for den nye kategorien');
define('TEXT_CATEGORIES_NAME', 'Kategorinavn:');
define('TEXT_CATEGORIES_IMAGE', 'Kategoribilde:');
define('TEXT_SORT_ORDER', 'Sortering:');

define('TEXT_PRODUCTS_STATUS', 'Produktstatus:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produkt er virtuelt:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Gratis levering:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Vis antall produkter:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Ttilgjengelig:');
define('TEXT_PRODUCT_AVAILABLE', 'På lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Ikke på lager');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, leveringsadresse kreves ikke');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nei, leveringsadresse kreves');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, gratis levering');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nei, normale leveringsregler');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, vis felt for antall');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nei, ikke vis felt for antall');

define('TEXT_PRODUCTS_MANUFACTURER', 'Produsent av produkt:');
define('TEXT_PRODUCTS_NAME', 'Produktnavn:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produktbeskrivelse:');
define('TEXT_PRODUCTS_QUANTITY', 'Produktantall:');
define('TEXT_PRODUCTS_MODEL', 'Produktmodell:');
define('TEXT_PRODUCTS_IMAGE', 'Produktbilde:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Last opp til mappe:');
define('TEXT_PRODUCTS_URL', 'Produktlenke:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(uten http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Produktpris (eks. mva):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Produktpris (inkl. mva):');
define('TEXT_PRODUCTS_WEIGHT', 'Produktvekt:');

define('EMPTY_CATEGORY', 'Tom kategori');

define('TEXT_HOW_TO_COPY', 'Kopieringsmetode:');
define('TEXT_COPY_AS_LINK', 'Link produkt');
define('TEXT_COPY_AS_DUPLICATE', 'Kopier produkt');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Begrenset til produkttype');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Denne kategorien har blitt begrenset til disse produkttypene');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','Produkttypen kan ikke bli lagt til denne kategorien. Kontroller kategorirestriksjoner.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Bare brukt for kopierte produkter...');
  define('TEXT_COPY_ATTRIBUTES','Kopier produkt egenskaper til kopier?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nei');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Gjeldende produkt: ');
  define('TABLE_HEADING_MODEL', 'Modell');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Variantendringer for produkt-IDnr. ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Slett <strong>alle</strong> produktvarianter:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopier varianter til et annet produkt eller til kategori fra:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopier varianter til et annet <strong>produkt</strong> fra:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopier varianter til en annen <strong>kategori</strong> fra:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hvordan skal eksisterende produktvarianter handteres?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Slett</strong> først, kopier så nye varianter');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Oppdater</strong> med nye instillinger/priser, legg så til nye');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Overse</strong> og legg til bare nye egenskaper');

  define('SUCCESS_ATTRIBUTES_DELETED','Varianter vellykket slettet');
  define('SUCCESS_ATTRIBUTES_UPDATE','Varianter vellykket oppdatert');

  define('ICON_ATTRIBUTES','Variantegenskaper');

  define('TEXT_CATEGORIES_IMAGE_DIR','Last opp til mappe:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Eller, velg et eksisterende bilde fra tjener. Filenavn:</strong>');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Advarsel: Viser ikke felt for antall, standard satt til 1 stk.');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Advarsel: Viser ikke felt for antall, standard satt til 1 stk.');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Velg:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Variantegenskaper for:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Nedlastinger: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produkt priset etetr varianter:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nei');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Vist pris vil inkludere laveste variantgruppes pluss pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Vist pris vil inkludere laveste variantgruppes pluss pris');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minimum produktantall:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Antall produktenheter:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Maksimum produktantall:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Ubegrenset, 1 = Ingen felt for antall eller maks antall');

  define('TEXT_PRODUCTS_MIXED','Produktantall Min./Enhetsmiks:');

  define('TEXT_PRODUCT_IS_FREE','Produkt er gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produkt er merket som gratis');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produkt er merket som gratis');

  define('TEXT_PRODUCT_IS_CALL','Produkt er Ring for pris:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produkt er merket som Ring for pris');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produkt er merket som Ring for pris');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Hopp over nye varianter </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Legger inn ny variant fra </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Oppdaterer fra variant </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>Virtuelle produkter</strong> har ingen leveringspris og behøver ingen leveringsadresse' . TEXT_GV_NAMES . ', osv.<br />' .
  '<strong>Alltid gratis levering</strong> har ingen leveringspris, men behøver en leveringsadresse<br />' .
  '<strong>Nedlastinger</strong> er antatt å være virtuelle produkter - ingen valg behøver å velges<br />'
  );

  define('TEXT_ANY_TYPE', 'Alle typer');
  define('TABLE_HEADING_PRODUCT_TYPES', 'Produkttype(r)');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Endre kategoristatus for:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Endre kategoristatus til: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Av');
define('TEXT_CATEGORIES_STATUS_ON', 'På');
define('TEXT_PRODUCTS_STATUS_INFO', 'Endre alle produktstatuser til: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'Av');
define('TEXT_PRODUCTS_STATUS_ON', 'På');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Uforandret');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>Advarsel...</strong><br />Merk: Deaktivering av en kategori vil deaktivere alle produkter i denne kategorien. Lenkede produkter i denne kategorien som er delt med andre kategorier vil også bli deaktivert.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' av ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' aktiv ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Kategoribeskrivelse:');

// Metatags
define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Metatagg definisjoner for kategorier');
define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Definer egene metatagger');
define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'Tittel:');
define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Nøkkelord:');
define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Beskrivelse:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'Advarsel: Du har produkter i toppnivåkategorien. Dette vil føre til at prising ikke virker riktig i butikken. Produkter som ble funnet: ');

