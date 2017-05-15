<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('TEXT_MAIN','Dette er den hoveddefinerte meldingen for denne siden på Norsk når ingen designdefinert fil eksisterer. Den er plassert i: <strong>/includes/languages/norwegian/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Hei <span class="greetUser">gjest,</span> vil du <a href="%s">logge inn</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Hei, vi håper du får en fin opplevelse her i vår butikk.');
}

define('TEXT_GREETING_PERSONAL', 'Hei <span class="greetUser">%s</span>, vil du se våre <a href="%s">nyeste produkter</a>?');

define('TEXT_INFORMATION', 'Fyll inn din hovedtekst her.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Våre produkter');
  define('TABLE_HEADING_IMAGE', 'Produktbilde');
  define('TABLE_HEADING_MODEL', 'Modell');
  define('TABLE_HEADING_PRODUCTS', 'Produktnavn');
  define('TABLE_HEADING_MANUFACTURER', 'Produsent');
  define('TABLE_HEADING_QUANTITY', 'Antall');
  define('TABLE_HEADING_PRICE', 'Pris');
  define('TABLE_HEADING_WEIGHT', 'Vekt');
  define('TABLE_HEADING_BUY_NOW', 'Kjøp nå');
  define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vi har dessverre ingen produkter i denne kategorien for øyeblikket.');
  define('TEXT_NO_PRODUCTS2', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vi har dessverre ingen produkter fra denne produsenten for øyeblikket.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Antall produkter: ');
  define('TEXT_SHOW', '<strong>Sorter etter:</strong> ');
  define('TEXT_BUY', 'Kjøp 1 \'');
  define('TEXT_NOW', '\' nå');
  define('TEXT_ALL_CATEGORIES', 'Alle kategorier');
  define('TEXT_ALL_MANUFACTURERS', 'Alle produsenter');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
 define('HEADING_TITLE', 'Velkommen til ' . STORE_OWNER); /*Replace this line with the headline you would like for your shop. For example: Welcome to My SHOP!*/
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
define('HEADING_TITLE', ''); /*Replace this line with the headline you would like for your shop. For example: Welcome to My SHOP!*/
}
