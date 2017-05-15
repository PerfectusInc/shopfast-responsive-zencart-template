<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @translators: cyaneo/hugo13/wflohr/maleborg/webchills	http://www.zen-cart-pro.at
 * @version $Id: index.php 627 2010-08-30 15:05:14Z webchills $
 * @translated/edited and adapted for ZC v1.5.x 2014-12-06 12:13:30Z frank18 $
 */

define('TEXT_MAIN','Definieren Sie hier Ihren persönlichen Text. Diesen Text können Sie in <strong>/includes/languages/german/index.php</strong> editieren.');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Willkommen <span class="greetUser">Gast!</span> Wollen Sie sich <a href="%s">anmelden</a>?');
} else {
	define('TEXT_GREETING_GUEST', 'Willkommen! Bitte genießen Sie unseren Schauraum.');
}

define('TEXT_GREETING_PERSONAL', 'Willkommen <span class="greetUser">%s</span>! Wollen Sie sehen, was es <a href="%s">Neues</a> bei uns gibt?');
define('TEXT_INFORMATION', 'Definieren Sie hier Ihren persönlichen Text. Diesen Text können Sie in <strong>/includes/languages/german/index.php</strong> editieren.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
define('HEADING_TITLE','Kategorien');
define('TABLE_HEADING_IMAGE','Artikelbild');
define('TABLE_HEADING_MODEL','Artikelnummer');
define('TABLE_HEADING_PRODUCTS','Artikelname');
define('TABLE_HEADING_MANUFACTURER','Hersteller');
define('TABLE_HEADING_QUANTITY','Menge');
define('TABLE_HEADING_PRICE','Preis');
define('TABLE_HEADING_WEIGHT','Gewicht');
define('TABLE_HEADING_BUY_NOW','Jetzt kaufen');
define('TEXT_NO_PRODUCTS','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>In dieser Kategorie gibt es derzeit keine Artikel.');
define('TEXT_NO_PRODUCTS2','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Von diesem Hersteller ist kein Artikel verfügbar.');
define('TEXT_NUMBER_OF_PRODUCTS','Anzahl der Artikel:');
define('TEXT_SHOW','<strong>Filter:</strong>');
define('TEXT_BUY','Kaufe 1 ');
define('TEXT_NOW',' jetzt');
define('TEXT_ALL_CATEGORIES','Alle Kategorien');
define('TEXT_ALL_MANUFACTURERS','Alle Hersteller');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
define('HEADING_TITLE', 'Willkommen in unserem Online Shop!');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
define('HEADING_TITLE', 'Willkommen in unserem Online Shop!');
}
