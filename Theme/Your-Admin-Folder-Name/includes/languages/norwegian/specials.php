<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: specials.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', 'Tilbud');

define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_PRODUCTS_MODEL','Modell');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produkters pris/tilbud/salg');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Prosent');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tilgjengelig');
define('TABLE_HEADING_EXPIRES_DATE','Utgår');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Tilbudspris:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Utgår:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Tilgjengelig fra:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Tilbudsmerknader:</b><ul><li>Du kan skrive inn prosent som skal trekkes fra i feltet for tilbudspris, f.eks: <b>20%</b></li><li>Hvis du fyller inn en ny pris, desimal må være \'.\' (desimalpunkt), f.eks: <b>49.99</b></li><li>La utgår være tom om du ikke ønsker utløpsdato</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Lagt til:');
define('TEXT_INFO_LAST_MODIFIED', 'Sist endret:');
define('TEXT_INFO_NEW_PRICE', 'Ny pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Opprinnelig pris:');
define('TEXT_INFO_DISPLAY_PRICE', 'Vis pris:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Tilgjengelig fra:');
define('TEXT_INFO_EXPIRES_DATE', 'Utgår:');
define('TEXT_INFO_STATUS_CHANGE', 'Statusendring:');
define('TEXT_IMAGE_NONEXISTENT', 'Inget bilde eksisterer');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Slett tilbud');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette tilbudsproduktets pris?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Successful: Pre-Add of Special ... please update the price and dates ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Warning: No Product ID specified ... nothing was added ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Warning: Product ID already on Special ... nothing was added ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Advarsel: Produkt-ID er ugyldig, ingenting ble lagt til...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Manually add new Special by Product ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'On large databases, you may Manually Add a Special by the Product ID<br /><br />This is best used when the page takes too long to render and trying to select a Product from the dropdown becomes difficult due to too many Products from which to choose.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Please enter the Product ID to be Pre-Added: ');
define('TEXT_INFO_MANUAL', 'Product ID to be Manually Added as a Special');