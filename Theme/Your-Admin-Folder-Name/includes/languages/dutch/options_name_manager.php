<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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

define('HEADING_TITLE_OPT', 'Artikel opties');
define('HEADING_TITLE_VAL', 'Optiewaarde(n)');
define('HEADING_TITLE_ATRIB', 'Artikel opties');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Artikelnaam');
define('TABLE_HEADING_OPT_NAME', 'Optie');
define('TABLE_HEADING_OPT_VALUE', 'Optiewaarde');
define('TABLE_HEADING_OPT_PRICE', 'Prijs');
define('TABLE_HEADING_OPT_PRICE_PREFIX','+/-');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_DOWNLOAD', 'Downloads:');
define('TABLE_TEXT_FILENAME', 'Bestandsnaam:');
define('TABLE_TEXT_MAX_DAYS', 'Aantal dagen beschikbaar:');
define('TABLE_TEXT_MAX_COUNT', 'Aantal keer beschikbaar:');

define('TEXT_WARNING_OF_DELETE', 'Aan deze optie zijn artikelen en waarden gekoppeld - het is niet veilig om deze optie te verwijderen.');
define('TEXT_OK_TO_DELETE', 'Aan deze optie zijn geen artikelen en waarden gekoppeld - de optie kan nu 	verwijderd worden.<br />Waarschuwing: alle optiewaarde(n) worden verwijderd voor deze optie.');
define('TEXT_OPTION_ID', 'Optie ID');
define('TEXT_OPTION_NAME', 'Optienaam');
define('TABLE_HEADING_OPT_DISCOUNTED','Prijsvermindering');

define('ATTRIBUTE_WARNING_DUPLICATE','Optie al aanwezig - optie is niet toegevoegd'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Duplicaat optie al aanwezig - optie is niet gewijzigd'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Optie en optiewaarde komen niet overeen - er is niets toegevoegd'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Optie en optiewaarde komen niet overeen - er is niets gewijzigd'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mogelijk duplicaat optie toegevoegd'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mogelijke duplicaat optiewaarde toegevoegd'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','WIJZIGEN Artikel eigenschap');
define('PRODUCTS_ATTRIBUTES_DELETE','VERWIJDEREN Artikel eigenschap');
define('PRODUCTS_ATTRIBUTES_ADDING','Toevoegen nieuwe eigenschappen');
define('TEXT_DOWNLOADS_DISABLED','<strong>Opmerking:</strong> downloads zijn uitgezet');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dagen:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Rangschikking');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Standaard sortering');
  define('TEXT_SORT',' Rangorder: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','+/-');
  define('TABLE_HEADING_OPT_WEIGHT','Gewicht');
  define('TABLE_HEADING_OPT_SORT_ORDER','Sorteervolgorde');
  define('TABLE_HEADING_OPT_DEFAULT','Standaard');

  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nee');

  define('TABLE_HEADING_OPT_TYPE', 'Soort Type'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Grootte');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rijen');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commentaar');

  define('TEXT_OPTION_VALUE_COMMENTS','Commentaar: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Regels: ');
  define('TEXT_OPTION_VALUE_SIZE','Toon grootte: ');
  define('TEXT_OPTION_VALUE_MAX','Maximale lengte: ');

  define('TEXT_ATTRIBUTES_IMAGE','Opties (voorbeeldafbeelding):');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Opties afbeelding directory:');

  define('TEXT_ATTRIBUTES_FLAGS','Optie<br />instellingen:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Alleen te gebruiken<br />als showmodel');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Optie is gratis<br />als artikel gratis is');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Standaard opties<br />aangevinkt bij artikel tonen');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Dezelfde korting voor opties toepassen<br />als bij artikel');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Opgenomen in v.a. prijs<br />indien geprijsd door opties');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Wijzig artikel opties voor extra instellingen</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Waarschuwing: geen artikelen gevonden ... er is niets gewijzigd');

define('TEXT_SELECT_PRODUCT', ' Selecteer artikel');
define('TEXT_SELECT_CATEGORY', ' Selecteer categorie');
define('TEXT_SELECT_OPTION', 'Selecteer optienaam');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Voeg aan alle artikelen, die al gebruik maken van de geselecteerde optienaam, alle optiewaarden toe die gekoppeld zijn aan deze geselecteerde optienaam</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Bijwerken van alle bestaande artikelen die tenminste één optiewaarde van de geselecteerde optienaam gekoppeld hebben. Met deze actie worden alle optiewaarden aan deze artikelen gekoppeld.');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Alle opties zijn met succes bijgewerkt.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Voeg aan één geselecteerd artikel alle optiewaarden toe die behoren	bij de geselecteerde optienaam</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Bijwerken van één artikel dat tenminste één optiewaarde van de geselecteerde optienaam gekoppeld heeft. Met deze actie worden alle optiewaarden aan dit artikel gekoppeld.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Voeg binnen één geselecteerde categorie aan de bijbehorende artikelen alle optiewaarden toe die behoren bij de geselecteerde optienaam</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Bijwerken van de geselecteerde categorie waarin tenminste één optiewaarde van de geselecteerde optienaam aan één artikel gekoppeld is. Met deze actie worden alle optiewaarden aan artikelen in deze categorie gekoppeld.');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>Opmerking:</strong> de rangschikking van deze artikelen gebeurt conform de standaard optiewaarde rangschikking zoals van toepassing op deze artikelen.');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Verwijder alle optiewaarden voor alle artikelen met optienaam</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Verwijder alle optiewaarden bij bestaande artikelen die minimaal één optiewaarde	bezitten binnen de geselecteerde optienaam.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Verwijder alle optiewaarden voor het geselecteerde artikel</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Verwijder alle optiewaarden bij één geselecteerd artikel die minimaal één optiewaarde bezitten binnen de selecteerde optienaam');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Verwijder alle optiewaarden voor één categorie met optienaam</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Verwijder alle optiewaarden van één categorie die minimaal één optiewaarde	bezitten binnen de geselecteerde optienaam.');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>Opmerking:</strong> Alle optienamen met bijbehorende optiewaarden worden verwijderd voor de geselecteerde artikelen. De optiewaarde <strong>instellingen</strong> worden niet verwijderd.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopieer alle optiewaarde(n) naar een andere optie</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Alle optiewaarde(n) worden gekopieerd van de ene optie naar de andere optie');
define('TEXT_SELECT_OPTION_FROM', 'Kopieer van optie: ');
define('TEXT_SELECT_OPTION_TO', 'Kopieer alle optiewaarde(n) naar optie: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Kopieren met succes uitgevoerd! ');
define('ERROR_OPTION_VALUES_COPIED', '<strong>Foutmelding:</strong> kan optiewaarde <strong>niet</strong> kopieren naar dezelfde optie! ');
define('ERROR_OPTION_VALUES_NONE', '<strong>Foutmelding:</strong> Kopie van optie heeft 0 waarden. Er is niets gekopieerd! ');
define('TEXT_WARNING_BACKUP', '<strong>Waarschuwing</strong>: <u>ZORG ALTIJD VOOR EEN VOLLEDIGE DATABASE BACKUP VOORDAT JE VERANDERINGEN MAAKT!!!!</u>');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Afbeeldingsopties per rij: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Stijl voor Radio Buttons/Checkbox: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Maximale lengte en grootte voor tekst opties:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Afbeeldingsstijl:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Afbeelding onder optienaam');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Element, afbeelding en optiewaarde');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Element, afbeelding en optienaam eronder');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Optienaam onder element en afbeelding');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Element onder afbeelding en optienaam');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Element boven afbeelding en optienaam');
?>