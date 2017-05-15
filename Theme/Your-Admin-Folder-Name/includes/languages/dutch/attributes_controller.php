<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE', 'CATEGORIEËN: ');

define('HEADING_TITLE_OPT', 'Opties');
define('HEADING_TITLE_VAL', 'Optiewaarde(n)');
define('HEADING_TITLE_ATRIB', 'Beheerstool artikelopties');
define('HEADING_TITLE_ATRIB_SELECT','Selecteer een categorie voor het tonen van de opties van artikelen...');

define('TEXT_PRICES_AND_WEIGHTS', 'Prijzen en gewichten');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Prijsfactor: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Offset: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'éénmalige kosten:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Eénmalige factor: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Offset: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Kwantumkorting voor opties:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Eenmalige kwantumkorting voor opties:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Prijs per woord:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Gratis woorden:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Prijs per letter:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Gratis letters:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Artikelnaam');
define('TABLE_HEADING_OPT_NAME', 'Optie');
define('TABLE_HEADING_OPT_VALUE', 'Optiewaarde');
define('TABLE_HEADING_OPT_PRICE', 'Prijs');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '+/-');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_DOWNLOAD', 'Downloads:');
define('TABLE_TEXT_FILENAME', 'Bestandsnaam:');
define('TABLE_TEXT_MAX_DAYS', 'Aantal dagen beschikbaar: (0 = ongelimiteerd)');
define('TABLE_TEXT_MAX_COUNT', 'Maximum aantal keer te downloaden:');
define('TABLE_HEADING_OPT_DISCOUNTED','Korting');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Basisprijs');
define('TABLE_HEADING_PRICE_TOTAL','Totaal|Korting: éénmalig:');
define('TEXT_WARNING_OF_DELETE', 'Aan deze optie zijn artikelen en waarden gekoppeld - het is niet veilig om deze optie te verwijderen.');
define('TEXT_OK_TO_DELETE', 'Aan deze optie zijn geen artikelen en waarden gekoppeld - de optie kan nu verwijderd worden. <br /><strong>Waarschuwing</strong>: alle optiewaarde(n) worden verwijderd voor deze optie.');
define('TEXT_OPTION_ID', 'Optie ID');
define('TEXT_OPTION_NAME', 'Optienaam');

define('ATTRIBUTE_WARNING_DUPLICATE','Optie al aanwezig - optie is niet toegevoegd'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Duplicaat optie al aanwezig - optie is niet gewijzigd'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Optie en optiewaarde komen niet overeen - er is niets toegevoegd'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Optie en optiewaarde komen niet overeen - er is niets gewijzigd'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mogelijk duplicaat optie toegevoegd'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mogelijke duplicaat optiewaarde toegevoegd'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','WIJZIGEN'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','VERWIJDEREN'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','Toevoegen nieuwe opties'); // title
define('TEXT_DOWNLOADS_DISABLED','Opmerking: downloads zijn uitgezet');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dagen:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Rangschikking');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Standaard<br />rang');
  define('TEXT_SORT',' Rang: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','+/-');
  define('TABLE_HEADING_OPT_WEIGHT','Gewicht');
  define('TABLE_HEADING_OPT_SORT_ORDER','Rang');
  define('TABLE_HEADING_OPT_DEFAULT','Standaard');

  define('TABLE_HEADING_OPT_TYPE', 'Soort optie'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Grootte');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rijen');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Opmerkingen');

  define('TEXT_OPTION_VALUE_COMMENTS','Opmerkingen: ');
  define('TEXT_OPTION_VALUE_SIZE','Toon grootte: ');
  define('TEXT_OPTION_VALUE_MAX','Maximum lengte: ');

  define('TEXT_ATTRIBUTES_IMAGE','Optie voorbeeldafbeelding:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Optie afbeelding directory:');

  define('TEXT_ATTRIBUTES_FLAGS','Optie<br />instellingen:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Alleen te gebruiken<br />als showmodel:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Optie is gratis<br />als artikel gratis is:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Standaard opties<br />aangevinkt bij artikel tonen');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Dezelfde korting voor opties toepassen<br />als bij artikel:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Opgenomen in vanaf prijs<br />indien geprijsd door opties');
  define('TEXT_ATTRIBUTES_REQUIRED','Eigenschap verplicht<br />voor tekst:');

  define('LEGEND_BOX','Legenda:');
  define('LEGEND_KEYS','UIT/AAN');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Alleen om te tonen');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratis');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Standaard');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Met korting');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Basisprijs');
  define('LEGEND_ATTRIBUTES_REQUIRED','Verplicht');
  define('LEGEND_ATTRIBUTES_IMAGES','Afbeeldingen');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Geldige/Ongeldige<br />bestandsnaam');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','naar standaard volgorde');
  define('TEXT_PRODUCTS_LISTING','Artikel instellingen voor: ');
  define('TEXT_NO_PRODUCTS_SELECTED','Geen artikelen geselecteerd');
  define('TEXT_NO_ATTRIBUTES_DEFINED','Geen opties benoemd voor artikel ID# ');

  define('TEXT_PRODUCTS_ID','Artikel ID');
  define('TEXT_ATTRIBUTES_DELETE','Alle opties');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Kopieër naar artikel');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Kopieër naar categorie');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Verandering opties artikel ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Verwijder <strong>alle</strong> opties voor:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopieër opties naar een ander artikel of naar een gehele categorie van:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','Artikel');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopieer opties, naar een ander <strong>artikel</strong>, van artikel ID');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Selecteer het artikel om opties naar te kopiëren:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','Categorie');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Selecteer de categorie om opties naar te kopiëren:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopieer opties, naar een <strong>categorie</strong>, van artikel ID');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hoe om te gaan met bestaande opties van een artikel?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Verwijder</strong> eerste bestaande opties en voeg daarna nieuwe opties toe.');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Wijzig</strong> bestaande opties met nieuwe instellingen/prijzen en voeg daarna nieuwe opties toe.');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Negeer</strong> bestaande opties en voeg alleen nieuwe opties toe.');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Optie rangschikking <strong>met succes</strong> bijgewerkt voor artikel ID ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Geen opties beschikbaar om rangschikking bij te werken voor artikel ID ');
  define('SUCCESS_ATTRIBUTES_DELETED','Opties met succes verwijderd');
  define('SUCCESS_ATTRIBUTES_UPDATE','Opties met succes bijgewerkt');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Geen categorie geselecteerd om naar toe te kopiëren');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - in categorie: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','Weet je zeker dat je alle opties wilt verwijderen voor artikel ID');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Nieuwe opties overslaan</strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Invoegen nieuwe opties van </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Wijzig opties van  </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','Voorvertoning opties');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','Voorvertoning opties voor artikel ID');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Maak een keuze:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Bepaal de instellingen voor de opties en voeg deze toe </strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Prijs samenstellen door opties');
  define('TEXT_PRODUCTS_PRICE', 'Produktprijs: ');
  define('TEXT_SPECIAL_PRICE', 'Aanbiedingsprijs: ');
  define('TEXT_SALE_PRICE', 'Prijs SALE: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Informeer naar prijs');
  define('TEXT_SAVE_CHANGES','Wijzig en bewaar veranderingen:');

  define('TEXT_INFO_ID', 'ID');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Niet toevoegen aan winkelwagen');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Bevestig het verwijderen van ALLE artikeloptiewaarden van de optienaam ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Artikelnaam: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Artikelnaam: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Succesvol uitgevoerd: het verwijderen van ALLE artikeloptiewaarden van de optienaam: ');
