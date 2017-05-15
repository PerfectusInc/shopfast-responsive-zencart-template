<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 6550 2007-07-05 03:54:54Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('TEXT_MAIN','Detta &auml;r den huvudsakliga text sidan f&ouml;r svenska n&auml;r ingen mall f&ouml;r definieras och d&auml;r inte filen finns. Den skall finnas i: <strong>/includes/languages/swedish/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'V&auml;lkommen <span class="greetUser">G&auml;st!</span> Vill du <a href="%s">logga in dig</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'V&auml;lkommen, h&aring;ll till godo med v&aring;r online presentation.');
}

define('TEXT_GREETING_PERSONAL', 'Hej <span class="greetUser">%s</span>! Vill du se v&aring;ra  <a href="%s">senaste produkter</a>?');

define('TEXT_INFORMATION', 'Skriv din huvudtext h&auml;r.');

//moved to swedish
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Tillg&auml;ngliga produkter');
  define('TABLE_HEADING_IMAGE', 'Produkt bild');
  define('TABLE_HEADING_MODEL', 'Artikelnr');
  define('TABLE_HEADING_PRODUCTS', 'Produkt namn');
  define('TABLE_HEADING_MANUFACTURER', 'Tillerkare');
  define('TABLE_HEADING_QUANTITY', 'Antal');
  define('TABLE_HEADING_PRICE', 'Pris');
  define('TABLE_HEADING_WEIGHT', 'Vikt');
  define('TABLE_HEADING_BUY_NOW', 'K&ouml;p nu');
  define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det finns inga produkter i denna kategori.'); 
  define('TEXT_NO_PRODUCTS2', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det finns inga produkter f&ouml;r denna tillverkare.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Antal produkter: ');
  define('TEXT_SHOW', 'Filterat resultat:');
  define('TEXT_BUY', 'K&ouml;p 1 \'');
  define('TEXT_NOW', '\' nu');
  define('TEXT_ALL_CATEGORIES', 'Alla kategorier');
  define('TEXT_ALL_MANUFACTURERS', 'Alla tillverkare');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'V&auml;lkommen till ' . STORE_NAME.'!');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'V&auml;lkommen till ' . STORE_NAME.'!'); 
}
?>