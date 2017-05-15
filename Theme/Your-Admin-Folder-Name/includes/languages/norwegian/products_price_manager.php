<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_price_manager.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Produktpriser');
define('HEADING_TITLE_PRODUCT_SELECT','Velg en kategori med produkter som du vil vise prisinformasjon for...');

define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_PRODUCTS_MODEL','Modell');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produkter pris/tilbud/salg');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Prosent');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tilgjengelig');
define('TABLE_HEADING_EXPIRES_DATE','Utgår');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_PRODUCT_INFO', 'Produktinfo:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Produktprisinfo');
define('TEXT_PRODUCTS_MODEL','Modell:');
define('TEXT_PRICE', 'Pris');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Tilgjengelig:');
define('TEXT_PRODUCTS_STATUS', 'Produktstatus:');
define('TEXT_PRODUCT_AVAILABLE', 'På lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Utsolgt');

define('TEXT_PRODUCT_INFO_NONE', 'Velg et produkt ovenfor...');
  define('TEXT_PRODUCT_IS_FREE','Produkt er gratis:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Produkt er merket gratis');
  define('TEXT_PRODUCT_IS_CALL','Ring for pris:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Produkt er merket ring for pris');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Priset etter varianter:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nei');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Vis pris vil inkludere laveste gruppe variantprisers pluss pris');
  define('TEXT_PRODUCTS_MIXED','Antall Min/Enhet miks:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Kvantumsrabatter brukes på blandede varianter');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minimum antall:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Antall enheter:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Maksimum antall:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= Ubegrenset<br />1= Ingen antallsboks/maksverdi');

define('TEXT_FEATURED_PRODUCT_INFO', 'Produktinfo:');
define('TEXT_FEATURED_PRODUCT', 'Produkt:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Utgår:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Tilgjengelig:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Status:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Aktiv');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Inaktiv');
define('TEXT_FEATURED_DISABLED', '<strong>Merk: Produktinfo er for øyeblikket deaktivert, utgått eller ennå ikke aktiv</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Vennligst bekreft at du vil slette \'Utvalgt\'-statusen som er assosiert med dette produktet.');

define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Tilbudspris:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Utgår:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Tilgjengelig:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Tilbudsmerknader:</b><ul><li>Du kan skrive inn en prosent som skal trekkes i fra i tilbudspris-feltet, f.eks.: <b>20%</b></li><li>Hvis du skriver en ny pris, må desimalpunktet være en \'.\' (desimal-punktum), f.eks: <b>49.99</b></li><li>La utgår være tom for ingen utløp.</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Tilbudspris info:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Tilbudsstatus:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Aktiv');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Inaktiv');
define('TEXT_SPECIALS_NO_GIFTS','Ingen tilbud på gavekort');
define('TEXT_SPECIAL_DISABLED', '<strong>Merk: Tilbudsproduktinfo er for tiden deaktivert, utgått eller ennå ikke aktiv</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Vennligst bekreft at du vil slette \'Tilbud\'-statusen som er assosiert med dette produktet.');

define('TEXT_INFO_DATE_ADDED', 'Lagt til:');
define('TEXT_INFO_LAST_MODIFIED', 'Sist endret:');
define('TEXT_INFO_NEW_PRICE', 'Ny pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originalpris:');
define('TEXT_INFO_PERCENTAGE', 'Prosent:');
define('TEXT_INFO_AVAILABLE_DATE', 'Tilgjengelig den:');
define('TEXT_INFO_EXPIRES_DATE', 'Utgår den:');
define('TEXT_INFO_STATUS_CHANGE', 'Statusendring:');
define('TEXT_IMAGE_NONEXISTENT', 'Inget bilde eksisterer');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Slett utvalgt');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du vil slette det utvalgte produktet?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Definer variantinnstillinger, og trykk så på sett inn for å fullføre</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Priset etter varianter');
  define('TEXT_PRODUCTS_PRICE', 'Produktpris: ');
  define('TEXT_SPECIAL_PRICE', 'Tilbudspris: ');
  define('TEXT_SALE_PRICE', 'Salgspris: ');
  define('TEXT_FREE', 'Gratis');
  define('TEXT_CALL_FOR_PRICE', 'Ring for pris');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Legg til ' . DISCOUNT_QTY_ADD . ' blanke kvantumsrabatter:');
define('TEXT_BLANKS_INFO','Alle blanke kvantumsrabatter vil bli fjernet ved oppdateringt');
define('TEXT_INFO_NO_DISCOUNTS', 'Ingen kvantumsrabatter har blitt definert');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Rabattrinn');
define('TEXT_PRODUCTS_DISCOUNT','Rabatt');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Minimumsantall');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Rabattverdi');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Type');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Beregn pris:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Utvidet pris:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Beregn<br />Pris: &nbsp; Avgift:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Utvidet<br />Pris: &nbsp; Avgift:');

define('TEXT_EACH','hv.');
define('TEXT_EXTENDED','total');

define('TEXT_DISCOUNT_TYPE_INFO', 'Produktrabattinfo');
define('TEXT_DISCOUNT_TYPE','Rabattype:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Rabatt priset fra:');

define('DISCOUNT_TYPE_DROPDOWN_0','Ingen');
define('DISCOUNT_TYPE_DROPDOWN_1','Prosent');
define('DISCOUNT_TYPE_DROPDOWN_2','Gjeldende pris');
define('DISCOUNT_TYPE_DROPDOWN_3','Avslag');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Pris');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Tilbud');

define('TEXT_UPDATE_COMMIT','Oppdater og utfør alle endringer fra denne siden');

define('TEXT_PRODUCTS_TAX_CLASS', 'Avgiftsklasse:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Advarsel:</strong> Produkthovedkategori-IDnr. %s passer ikke til gjeldende kategori-IDnr. %s, og produkt er ikke lenket!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Gjeldende kategori-IDnr. %s passer til hovedkategori-IDnr. %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Oppdater hovedkategoriers-IDnr. %s for å passe til gjeldende kategori-IDnr. %s');

define('PRODUCT_WARNING_UPDATE', 'Gjør ønskede endringer, trykk så på oppdater for å lagre');
define('PRODUCT_UPDATE_SUCCESS', 'Vellykket oppdatering av produktendringer!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Endringer ble avbrutt og ikke lagret ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Klikk for å starte redigering...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Bare forhåndsvisning... Gjeldende prisstatus... Bare forhåndsvisning');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Endre produktinformasjon, oppdater så for å lagre</strong>');
