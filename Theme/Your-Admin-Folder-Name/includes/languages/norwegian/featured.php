<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Utvalgte produkter');

define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_PRODUCTS_MODEL','Modell');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produkters pris/tilbud/salg');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Prosent');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tilgjengelig');
define('TABLE_HEADING_EXPIRES_DATE','Utgår');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_FEATURED_PRODUCT', 'Produkt:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Utgår:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Tilgjengelig:');

define('TEXT_INFO_DATE_ADDED', 'Lagt til:');
define('TEXT_INFO_LAST_MODIFIED', 'Sist endret:');
define('TEXT_INFO_NEW_PRICE', 'Ny pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Opprinelig pris:');
define('TEXT_INFO_PERCENTAGE', 'Prosent:');
define('TEXT_INFO_AVAILABLE_DATE', 'Tilgjengelig:');
define('TEXT_INFO_EXPIRES_DATE', 'Utgår:');
define('TEXT_INFO_STATUS_CHANGE', 'Statusendring:');
define('TEXT_IMAGE_NONEXISTENT', 'Bilde eksisterer ikke');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Slett utvalgt produkt');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette dette utvalgte produktet?');

define('SUCCESS_FEATURED_PRE_ADD', 'Vellykket: Forhåndsvalg av utvalgt... vennligst oppdater datoer...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Advarsel: Ingen produkt-ID angitt... ingenting ble lagt til...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Advarsel: Produkt-ID er allerede på tilbud... ingenting ble lagt til...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Advarsel: Produkt-ID er ugyldig, ingenting ble lagt til...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Manuelt legge til utvalgt etter produkt-id');
define('TEXT_INFO_PRE_ADD_INTRO', 'På store databaser må du kanskje manuelt legge til utvalgte etter produkt-ID<br /><br />Dette er best å bruke når siden tar for lang tid å laste, og forsøk på å velge produkt fra nedtrekksliste blir for vanskelig p.g.a for mange produkter å velge fra.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Vennligst fyll inn produkt-id som skal forhåndsvelges: ');
define('TEXT_INFO_MANUAL', 'Produkt-id som manuelt skal legges til som utvalgt');
