<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_price_manager.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Artikel Prijsmanager');
define('HEADING_TITLE_PRODUCT_SELECT','Selecteer een categorie en artikelen om de prijsinformatie te laten zien van.....');

define('TABLE_HEADING_PRODUCTS', 'Artikelen');
define('TABLE_HEADING_PRODUCTS_MODEL','Model');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Prijs');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Percentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Beschikbaar');
define('TABLE_HEADING_EXPIRES_DATE','Vervaldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_PRODUCT_INFO', 'Artikel info:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Prijs info:');
define('TEXT_PRODUCTS_MODEL','Model:');
define('TEXT_PRICE', 'Prijs');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Startdatum:');
define('TEXT_PRODUCTS_STATUS', 'Status:');
define('TEXT_PRODUCT_AVAILABLE', 'Voorraad');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Geen voorraad');

define('TEXT_PRODUCT_INFO_NONE', 'Selecteer een van bovenstaande artikelen ...');
  define('TEXT_PRODUCT_IS_FREE','Artikel is GRATIS:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />* Artikel GRATIS ');
  define('TEXT_PRODUCT_IS_CALL','Informeer naar prijs bij dit artikel:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />* Informeer naar prijs bij dit artikel');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Vanaf prijs i.c.m. uitbreidingsopties:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nee');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Getoonde prijs bestaat uit prijs inclusief standaardopties en eventueel gekozen opties');
  define('TEXT_PRODUCTS_MIXED','Minimale bestelhoeveelheid / verpakkingseenheid mix:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Hoeveelheidskorting is van toepassing op gecombineerde opties');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minimum bestelhoeveelheid:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Artikel verpakt per:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Maximale bestelhoeveelheid:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = onbeperkt<br />1 = maximum aantal bestelhoeveelheid');

define('TEXT_FEATURED_PRODUCT_INFO', 'Artikel ..in de schijnwerper.. info:');
define('TEXT_FEATURED_PRODUCT', 'schijnwerper Artikel:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Schijnwerper Vervaldatum:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Schijnwerper Startdatum:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Status ..in de schijnwerper..:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Schijwerper artikelen Actief');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Schijnwerp artikelen niet beschikbaar');
define('TEXT_FEATURED_DISABLED', '<strong>Opmerking: ..Schijnwerper.. info is op dit moment uitgezet, verlopen of niet actief</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Bevestig A.U.B. dat u de Featured-status gekoppeld aan dit product wenst te verwijderen');

define('TEXT_SPECIALS_PRODUCT', 'Artikel:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Aanbiedingsprijs:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Vervaldatum:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Startdatum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Opmerkingen bij het maken van aanbiedingen:</b><ul><li>Het invullen van een percentage als aanbiedingskorting is toegestaan. Voorbeeld: <b>20%</b> geeft 20% korting op normale prijs</li><li>Bij het invoeren van een nieuwe prijs moet altijd een punt (\'.\') als decimaal teken worden ingevoerd. Voorbeeld: <b>49.99</b></li><li>Door de vervaldatum van de aanbieding niet in te vullen blijft deze net zolang doorlopen totdat deze handmatig wordt verwijderd of stopgezet.</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Aanbiedingsprijs info:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Status aanbiedingen:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Actief');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Inactief');
define('TEXT_SPECIALS_NO_GIFTS','Geen aanbiedingen GV');
define('TEXT_SPECIAL_DISABLED', '<strong>Opmerking: aanbiedingsprijs info is op dit moment uitgezet, verlopen of niet actief</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Bevestig A.U.B. dat u de Special-status gekoppeld aan dit product wenst te verwijderen');

define('TEXT_INFO_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_INFO_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_INFO_NEW_PRICE', 'Nieuwe prijs:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originele prijs:');
define('TEXT_INFO_PERCENTAGE', 'Percentage:');
define('TEXT_INFO_AVAILABLE_DATE', 'Startdatum:');
define('TEXT_INFO_EXPIRES_DATE', 'Vervaldatum:');
define('TEXT_INFO_STATUS_CHANGE', 'Laatste wijziging status:');
define('TEXT_IMAGE_NONEXISTENT', 'Afbeelding komt niet voor');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Verwijder deze "....in  de schijnwerpers"');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je dit "artikel in de schijnwerpers" wilt verwijderen?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Bepaal de instellingen voor de optie en voeg deze toe</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Prijs mbv opties');
  define('TEXT_PRODUCTS_PRICE', 'Artikelprijs: ');
  define('TEXT_SPECIAL_PRICE', 'Aanbiedingsprijs: ');
  define('TEXT_SALE_PRICE', 'Prijs SALE: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Informeer naar prijs');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Voeg ' . DISCOUNT_QTY_ADD . ' hoeveelheidskortingen toe:');
define('TEXT_BLANKS_INFO','Alle 0 hoeveelheidskortingen worden verwijderd wanneer wijzigingen worden doorgevoerd');
define('TEXT_INFO_NO_DISCOUNTS', 'Er zijn geen hoeveelheidskortingen vastgelegd');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Kortingsniveau');
define('TEXT_PRODUCTS_DISCOUNT','Korting');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Minimum hoeveelheid');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Korting/Nieuwe prijs');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Type');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Bereken prijs p.st.:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Samengestelde prijs:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Bereken<br />prijs: &nbsp; incl. BTW:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Samengestelde<br />Prijs: &nbsp; incl. BTW:');

define('TEXT_EACH','per stuk');
define('TEXT_EXTENDED','totaal');

define('TEXT_DISCOUNT_TYPE_INFO', 'Kortings info:');
define('TEXT_DISCOUNT_TYPE','Soort korting:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Prijsvermindering van:');

define('DISCOUNT_TYPE_DROPDOWN_0','Geen');
define('DISCOUNT_TYPE_DROPDOWN_1','Percentage');
define('DISCOUNT_TYPE_DROPDOWN_2','Actuele prijs');
define('DISCOUNT_TYPE_DROPDOWN_3','Vast bedrag minder');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Prijs');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Aanbieding');

define('TEXT_UPDATE_COMMIT','Bijwerken alle veranderingen zoals getoond op beeldscherm');

define('TEXT_PRODUCTS_TAX_CLASS', 'Tariefgroep belasting:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Waarschuwing:</strong> De hoofdcategorie ID# %s komt niet overeen met de huidige categorie ID %s en het artikel wordt niet gekoppeld!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Huidige categorie ID %s komt overeen met hoofdcategorie ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Werk hoofdcategorie ID %s bij zodat deze overeenkomt met huidige categorie ID %s');

define('PRODUCT_WARNING_UPDATE', 'Maak wijzigingen en druk op Update om te bewaren');
define('PRODUCT_UPDATE_SUCCESS', 'Wijzigingen voor artikel zijn met succes doorgevoerd!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Wijzigingen zijn geannuleerd en niet opgeslagen ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Klik hier om te wijzigen ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Alleen voorvertoning ... Huidige prijs status ... Alleen voorvertoning');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Wijzig artikelinformatie en vervolgens klik op Update om op te slaan</strong>');
