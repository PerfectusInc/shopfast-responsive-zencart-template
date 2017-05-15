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
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('NAVBAR_TITLE_1', 'Avancerad s&ouml;kning');
define('NAVBAR_TITLE_2', 'S&ouml;k reultat');

//define('HEADING_TITLE_1', 'Avancerad s&ouml;kning');
define('HEADING_TITLE', 'Avancerad s&ouml;kning');

define('HEADING_SEARCH_CRITERIA', 'S&ouml;k kriterium');

define('TEXT_SEARCH_IN_DESCRIPTION', 'S&ouml;k i produkt bekrivningar');
define('ENTRY_CATEGORIES', 'Kategorier:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Inkludera underkategorier');
define('ENTRY_MANUFACTURERS', 'Tillverkare:');
define('ENTRY_PRICE_FROM', 'Pris fr&aring;n:');
define('ENTRY_PRICE_TO', 'Pris till:');
define('ENTRY_DATE_FROM', 'Datum fr&aring;n:');
define('ENTRY_DATE_TO', 'Datum till:');

define('TEXT_SEARCH_HELP_LINK', 'S&ouml;k hj&auml;lp [?]');

define('TEXT_ALL_CATEGORIES', 'Alla kategorier');
define('TEXT_ALL_MANUFACTURERS', 'Alla tillverkare');

define('HEADING_SEARCH_HELP', 'S&ouml;k hj&auml;lp');
define('TEXT_SEARCH_HELP', 'S&ouml;kord kan seppareras med AND och/eller OR f&ouml;r s&auml;krare s&ouml;kresultat.<br /><br />Exempel, Microsoft AND mus vill ge ett s&ouml;kresultat som inneh&aring;ller b&aring;da orden. Hur som helst, f&ouml;r mus OR tangentbord, resultatet inneh&aring;ller b&aring;da eller ett av orden.<br /><br />Exakt s&ouml;kning kan man f&aring; om man s&ouml;ker med dubbla-citat tecken.<br /><br />Exempel, "b&auml;rbar dator" ger ett s&ouml;kresultat som &auml;r exakt samma som meningen.<br /><br />Parenteser kan anv&auml;ndas f&ouml;r att styra s&ouml;kresultaten.<br /><br />Exempel, Microsoft AND (tangentbord OR mus OR "visual basic").');
define('TEXT_CLOSE_WINDOW', 'St&auml;ng F&ouml;nster [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Artikel');
define('TABLE_HEADING_PRODUCTS', 'Produktnamn');
define('TABLE_HEADING_MANUFACTURER', 'Tillverkare');
define('TABLE_HEADING_QUANTITY', 'Antal');
define('TABLE_HEADING_PRICE', 'Pris');
define('TABLE_HEADING_WEIGHT', 'Vikt');
define('TABLE_HEADING_BUY_NOW', 'K&ouml;p Nu');

define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det finns inga produkter som st&auml;mde med din s&ouml;kning.');

define('ERROR_AT_LEAST_ONE_INPUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Minst ett av f&auml;lten i s&ouml;kningen m&aring;ste anges.');
define('ERROR_INVALID_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Felaktigt fr&aring;n datum.');
define('ERROR_INVALID_TO_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Felaktigt till datum.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Till datum m&aring;ste vara senare &auml;n fr&aring;n datum.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pris fr&aring;n m&aring;ste vara ett tal.');
define('ERROR_PRICE_TO_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pris till m&aring;ste vara ett tal.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pris till m&aring;ste vara h&ouml;gre &auml;n pris fr&aring;n.');
define('ERROR_INVALID_KEYWORDS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Felaktigt s&ouml;kord.');
?>
