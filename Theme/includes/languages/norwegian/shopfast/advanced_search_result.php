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
// $Id: advanced_search_result.php 93 2012-02-16 23:01:05Z syntaxerror.no $
//

define('NAVBAR_TITLE_1', 'Avansert søk');
define('NAVBAR_TITLE_2', 'Søkeresultater');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Avansert søk');

define('HEADING_SEARCH_CRITERIA', 'Søkekriteria');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Søk i produktbeskrivelse');
define('ENTRY_CATEGORIES', 'Kategorier:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Inkluder underkategorier');
define('ENTRY_MANUFACTURERS', 'Produsenter:');
define('ENTRY_PRICE_FROM', 'Pris fra:');
define('ENTRY_PRICE_TO', 'Pris til:');
define('ENTRY_DATE_FROM', 'Dato fra:');
define('ENTRY_DATE_TO', 'Dato til:');

define('TEXT_SEARCH_HELP_LINK', 'Søketips [?]');

define('TEXT_ALL_CATEGORIES', 'Alle kategorier');
define('TEXT_ALL_MANUFACTURERS', 'Alle produsenter');

define('HEADING_SEARCH_HELP', 'Søketips');
define('TEXT_SEARCH_HELP', 'Nøkkelord kan separeres med "AND" og "OR" for å få bedre kontroll over søkeresultatet.<br /><br />For eksempel, "Die AND hard" vil generere en liste med produkter som inneholder begge ordene "die" og "hard". Et annet eksempel; \'"something about mary" OR speed\' vil liste opp alle produkter som har "something about mary" eller "speed" i produktbeskrivelsen.<br /><br />Som du ser i eksempelet kan du få nøyaktige treff ved å bruke hermetegn før og etter søkekriterier.<br /><br />Dersom du bruker hermetegn, må søkekriteriene stemme nøyaktig. "something about mary" er <strong>ikke</strong> det samme som "mary about something".<br /><br />Paranteser kan brukes for enda bedre kontroll over søket.<br /><br />For eksempel, \'Microsoft AND (keyboard OR mouse OR "visual basic")\' vil vise treff som inneholder Microsoft og et eller flere av ordene keyboard, mouse og "visual basic".');
define('TEXT_CLOSE_WINDOW', 'Lukk vindu [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modell');
define('TABLE_HEADING_PRODUCTS', 'Produktnavn');
define('TABLE_HEADING_MANUFACTURER', 'Produsent');
define('TABLE_HEADING_QUANTITY', 'Antall');
define('TABLE_HEADING_PRICE', 'Pris');
define('TABLE_HEADING_WEIGHT', 'Vekt');
define('TABLE_HEADING_BUY_NOW', 'Kjøp nå');

define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ingen produkter passer til søkekriteriene.');

define('ERROR_AT_LEAST_ONE_INPUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Minst et av feltene i søkeskjemaet må fylles ut.');
define('ERROR_INVALID_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ugyldig \"Dato fra\".');
define('ERROR_INVALID_TO_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ugyldig \"Dato til\".');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\"Dato til\" må være større enn eller lik \"Dato fra\".');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\"Pris fra\" må være et nummer.');
define('ERROR_PRICE_TO_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\"Pris til\" må være et nummer.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\"Pris til\" må være større enn eller lik \"Pris fra\".');
define('ERROR_INVALID_KEYWORDS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ugyldig nøkkelord.');
