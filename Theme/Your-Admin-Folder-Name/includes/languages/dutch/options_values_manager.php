<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE_OPT', 'Artikel opties');
define('HEADING_TITLE_VAL', 'Optiewaarde(n)');
define('HEADING_TITLE_ATRIB', 'Artikel eigenschappen');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Artikelnaam');
define('TABLE_HEADING_OPT_NAME', 'Optie');
define('TABLE_HEADING_OPT_VALUE', 'Optiewaarde');
define('TABLE_HEADING_OPT_PRICE', 'Prijs');
define('TABLE_HEADING_OPT_PRICE_PREFIX','Kengetal +/-');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_DOWNLOAD', 'Downloads:');
define('TABLE_TEXT_FILENAME', 'Bestandsnaam:');
define('TABLE_TEXT_MAX_DAYS', 'Aantal dagen beschikbaar:');
define('TABLE_TEXT_MAX_COUNT', 'Aantal keer beschikbaar:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Aan deze optie zijn artikelen en waarden gekoppeld - het is niet veilig om deze optie te verwijderen. <br />Opmerking: De gekoppelde download bestanden van deze optie worden niet verwijderd van de server.</span>');
define('TEXT_OK_TO_DELETE', 'Aan deze opties zijn geen artikelen en waarden gekoppeld - de opties kan nu verwijderd worden.');
define('TEXT_OPTION_ID', 'Optie ID');
define('TEXT_OPTION_NAME', 'Optie');
define('TABLE_HEADING_OPT_DISCOUNTED','Prijsvermindering');

define('ATTRIBUTE_WARNING_DUPLICATE','Optie al aanwezig - optie is niet toegevoegd'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Duplicaat optie al aanwezig - optie is niet gewijzigd'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Optie en optiewaarde komen niet overeen - er is niets toegevoegd'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Optie en optiewaarde komen niet overeen - er is niets gewijzigd'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mogelijk duplicaat optie toegevoegd'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mogelijke duplicaat optiewaarde toegevoegd'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','WIJZIGEN eigenschappen'); // titel
define('PRODUCTS_ATTRIBUTES_DELETE','VERWIJDEREN eigenschappen'); // titel
define('PRODUCTS_ATTRIBUTES_ADDING','Toevoegen nieuwe eigenschappen'); // titel
define('TEXT_DOWNLOADS_DISABLED','<strong>Opmerking:</strong> downloads zijn uitgezet');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dagen:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Sorteerorde');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Standaard rang');
  define('TEXT_SORT',' Sorteer: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','+/-');
  define('TABLE_HEADING_OPT_WEIGHT','Gewicht');
  define('TABLE_HEADING_OPT_SORT_ORDER','Rangschikking');
  define('TABLE_HEADING_OPT_DEFAULT','Standaard');

  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nee');

  define('TABLE_HEADING_OPT_TYPE', 'Soort optie'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Grootte');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rijen');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commentaar');

  define('TEXT_OPTION_VALUE_COMMENTS','Commentaar: ');
  define('TEXT_OPTION_VALUE_SIZE','Toon grootte: ');
  define('TEXT_OPTION_VALUE_MAX','Maximale lengte: ');

  define('TEXT_ATTRIBUTES_IMAGE','Opties (voorbeeldafbeelding):');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Opties afbeelding directory:');

  define('TEXT_ATTRIBUTES_FLAGS','Optie<br />instellingen:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Alleen te gebruiken<br />als showmodel:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Optie is gratis<br />als artikel gratis is:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Standaard opties<br />aangevinkt bij artikel tonen');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Dezelfde korting voor opties toepassen<br />als bij artikel:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Opgenomen in v.a. prijs<br />indien geprijsd door opties');

  define('TEXT_PRODUCT_OPTIONS_INFO','Wijzig artikel opties voor extra instellingen');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopieer naar <strong>alle</strong> artikelen met de optienaam en optiewaarden ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Selecteer een bestaande optienaam en optiewaarde van één bestaand artikel of reeks artikelen die gekopieerd moeten worden naar alle artikelen met deze bestaande optienaam en optiewaarde');
  define('TEXT_SELECT_OPTION_FROM', 'Te wijzigen optienaam:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Te wijzigen optiewaarde:');
  define('TEXT_SELECT_OPTION_TO', 'Optienaam toe te voegen:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Optiewaarde toe te voegen:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Blanco voor ALLE artikelen of <br />vul categorie ID in voor het wijzigen van de artikelen in die categorie');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Kopieer optienaam en optiewaarde naar artikelen met een bestaande optienaam...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Selecteer een bestaande optienaam en optiewaarde van een artikel of groep artikelen en kopieer dit naar alle artikelen of naar artikelen van de geselecteerde categorie met de gekozen optienaam.
                                                   <br /><strong>Voorbeeld:</strong> Toevoegen [optienaam: Kleur] met [optiewaarde: rood] aan alle artikelen die de [optienaam: grootte] hebben;
                                                   <br /><strong>Voorbeeld:</strong> Toevoegen [optienaam: Kleur] met [optiewaarde: groen], volgens de standaard waarden van artikel ID: 34, aan alle artikelen met die de [optienaam: grootte] hebben;
                                                   <br /><strong>Voorbeeld:</strong> Toevoegen [optienaam: Kleur] met [optiewaarde: geel], volgens de standaard waarden van artikel ID: 10, aan alle artikelen die de [optienaam: grootte] in categorie met ID: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Toevoegen aan optienaam:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Kopieer van optienaam:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Kopieer optiewaarde:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Standaard waarde nieuwe optie van artikel ID of laat blanco voor geen standaard waarde:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hoe om te gaan met bestaande opties van een artikel?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Verwijder</strong> eerste bestaande opties en voeg daarna nieuwe opties toe.');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Wijzig</strong> bestaande opties met nieuwe instellingen/prijzen en voeg daarna nieuwe opties toe.');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Negeer</strong> bestaande opties en voeg alleen nieuwe opties toe.');

  define('TEXT_INFO_FROM', ' van: ');
  define('TEXT_INFO_TO', ' naar: ');
  define('ERROR_OPTION_VALUES_COPIED', '<strong>Foutmelding</strong>: duplicaat optienaam en optiewaarde');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', '<strong>Foutmelding</strong>: geselecteerde optienaam en optiewaarde komen niet overeen');
  define('ERROR_OPTION_VALUES_NONE', '<strong>Foutmelding</strong>: er is niet om te kopiëren');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Kopiëren met succes uitgevoerd! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', '<strong>Foutmelding</strong>: ontbrekende optienaam en optiewaarde voor artikel ID');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Verwijder optie voor alle artikelen met optienaam en optiewaarde...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Selecteer een bestaande optienaam en optiewaarde van een artikel of groep artikelen en verwijder dit voor alle	artikelen of voor alle artikelen van een <strong>geselecteerde categorie.');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Te verwijderen optienaam:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Te verwijderen optiewaarde:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Foutmelding: geselecteerde optienaam en optiewaarde komen niet overeen');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Met succes is verwijderd: ');
  