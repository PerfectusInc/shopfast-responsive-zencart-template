<?php
//
// @package languageDefines Dutch Zen Cart Version 1.5.3
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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Uitgebreid zoeken');
define('NAVBAR_TITLE_2', 'Zoek resultaten');

//define('HEADING_TITLE_1', 'Uitgebreid zoeken');
define('HEADING_TITLE', 'Uitgebreid zoeken');

define('HEADING_SEARCH_CRITERIA', 'Zoekcriteria');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Zoek in productomschrijving');
define('ENTRY_CATEGORIES', 'Categorieën:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Inclusief subcategorieën');
define('ENTRY_MANUFACTURERS', 'Merken:');
define('ENTRY_PRICE_FROM', 'Prijs vanaf:');
define('ENTRY_PRICE_TO', 'Prijs tot:');
define('ENTRY_DATE_FROM', 'Datum vanaf:');
define('ENTRY_DATE_TO', 'Datum tot:');

define('TEXT_SEARCH_HELP_LINK', 'Zoek Help [?]');

define('TEXT_ALL_CATEGORIES', 'Alle Categorieën');
define('TEXT_ALL_MANUFACTURERS', 'Alle merken');

define('HEADING_SEARCH_HELP', 'Zoek Help');
define('TEXT_SEARCH_HELP', 'Zoektermen kunnen worden gescheiden met AND en/of OR voor specifiekere zoekresultaten.<br /><br />Microsoft AND muis zal bijvoorbeeld een resultaat weergeven waarin beide woorden in voorkomen. Doch voor muis OR toetsenbord zullen er resultaten worden weergegeven die beide of één van de zoekwoorden bevatten.<br /><br />Exact zoeken kan door de zoektermen in te sluiten in aanhalingstekens.<br /><br />Voor bijvoorbeeld "notebook computer" zullen alleen resultaten weergegeven worden waarin exact deze combinatie voorkomt .<br /><br />Haakjes kunnen worden gebruikt om de zoekresultaten verder te specificeren.<br /><br />Bijvoorbeeld Microsoft AND (keyboard OR muis OR "visual basic").');
define('TEXT_CLOSE_WINDOW', 'Sluiten [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Productnaam');
define('TABLE_HEADING_MANUFACTURER', 'Merk');
define('TABLE_HEADING_QUANTITY', 'Aantal');
define('TABLE_HEADING_PRICE', 'Prijs');
define('TABLE_HEADING_WEIGHT', 'Gewicht');
define('TABLE_HEADING_BUY_NOW', 'Koop nu');

define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Geen enkel product voldoet aan uw zoekcriteria.');

define('ERROR_AT_LEAST_ONE_INPUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Op de zoekpagina moet minstens één van de velden worden ingevuld.');
define('ERROR_INVALID_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ongeldige datum van.');
define('ERROR_INVALID_TO_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ongeldige datum tot.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Datum tot moet wel na datum van zijn.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Prijs vanaf invullen in nummers.');
define('ERROR_PRICE_TO_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Prijs tot invullen in nummers.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Prijs tot moet wel hoger of gelijk zijn aan de prijs vanaf.');
define('ERROR_INVALID_KEYWORDS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ongeldige zoekwoorden.');
?>
