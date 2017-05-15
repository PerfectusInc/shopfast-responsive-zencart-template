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
//  $Id: downloads_manager.php 94 2012-02-16 23:24:23Z syntaxerror.no $
//

define('HEADING_TITLE','Nedlastninger');
define('TABLE_HEADING_ATTRIBUTES_ID', 'Variant-ID');
define('TABLE_HEADING_PRODUCTS_ID', 'Produkt-ID');
define('TABLE_HEADING_PRODUCT', 'Produktnavn');
define('TABLE_HEADING_MODEL', 'Modell');
define('TABLE_HEADING_OPT_NAME', 'Variantgruppe');
define('TABLE_HEADING_OPT_VALUE', 'Variantverdi');
define('TABLE_TEXT_FILENAME', 'Filnavn');
define('TABLE_TEXT_MAX_DAYS', 'Dager');
define('TABLE_TEXT_MAX_COUNT', 'Telling');
define('TABLE_HEADING_ACTION', 'Valg');

define('TABLE_HEADING_OPT_PRICE', 'Pris');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefiks');

define('TEXT_PRODUCTS_NAME', 'Produkt: ');
define('TEXT_PRODUCTS_MODEL', 'Modell: ');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_DOWNLOAD', 'Endre nedlastningsinformasjon');
define('TEXT_INFO_HEADING_DELETE_PRODUCTS_DOWNLOAD', 'Bekreft sletting av nedlastning');
define('TEXT_INFO_EDIT_INTRO', 'Endre nedlastningsinformasjon:');
define('TEXT_DELETE_INTRO', 'Følgende filnavn vil bli fjernet fra database. Dette vil ikke slette filen fra server:');

define('TEXT_INFO_FILENAME', 'Filnavn: ');
define('TEXT_INFO_MAX_DAYS', 'Maks dager: ');
define('TEXT_INFO_MAX_COUNT', 'Maks nedlastninger: ');

define('TEXT_INFO_FILENAME_MISSING','&nbsp;Mangler filnavn');
define('TEXT_INFO_FILENAME_GOOD','&nbsp;Gyldig filnavn');
