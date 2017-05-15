<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: meta_tags.php 6668 2007-08-16 10:05:09Z SandroCarniel $
 */

// Titolo pagina
define('TITLE', 'Zen Cart!');

// Tagline o slogan del sito 
define('SITE_TAGLINE', 'L\'arte dell\'e-commerce');

// Keywords imposte 
define('CUSTOM_KEYWORDS', 'e-commerce, open source, online shopping, zencart-italia.it, zencart, zen-cart');

// Solo per la Home Page - descrizione globale e parole chiave:
  define('HOME_PAGE_META_DESCRIPTION', '');
  define('HOME_PAGE_META_KEYWORDS', '');

// NOTA: Se HOME_PAGE_TITLE rimane vuoto (come di default) TITLE e SITE_TAGLINE saranno inseriti in sua vece.
  define('HOME_PAGE_TITLE', ''); // usualmente meglio se lasciato vuoto

// EZ-Pages meta-tags. Segui questo modello per tutte le ez-pages nelle quali si desidera dei custom metatags. Sostituire # con ezpage ID.
// If you wish to use defaults for any of the 3 items for a given page, simply do not define it. 
// (ie: the Title tag is best not set, so that site-wide defaults can be used.)
// Ripetere il modello tante volte quanto necessario
  define('META_TAG_DESCRIPTION_EZPAGE_#','');
  define('META_TAG_KEYWORDS_EZPAGE_#','');
  define('META_TAG_TITLE_EZPAGE_#', '');

// Per-Page meta-tags. Segui questo modello per le pagine che si desidera siano in override. Questo è utile principalmente per altre pagine aggiunte.
// Sostituire "page_name" con il UPPERCASE nome delle proprie main_page= valore, come: ABOUT_US o SHIPPINGINFO ecc.
// Ripetere il modello tante volte quanto necessario
  define('META_TAG_DESCRIPTION_page_name','');
  define('META_TAG_KEYWORDS_page_name','');
  define('META_TAG_TITLE_page_name', '');

// Review Page can have a lead in:
define('META_TAGS_REVIEW', 'Recensioni: ');

// separatore tra le definizioni dei meta tag
// Define Primary Section Output
  define('PRIMARY_SECTION', ' : ');

// Definire Secondary Section Output
  define('SECONDARY_SECTION', ' - ');

// Definire Tertiary Section Output
  define('TERTIARY_SECTION', ', ');

// Definire la divisione tra parole ... usualmente una spazio o virgola e spazio
  define('METATAGS_DIVIDER', ', ');

// Definire quali pagine non devono essere indicizzate da robots/spiders
// This is generally used for account-management pages or typical SSL pages, and usually doesn't need to be touched.
define('ROBOTS_PAGES_TO_SKIP','login,logoff,create_account,account,account_edit,account_history,account_history_info,account_newsletters,account_notifications,account_password,address_book,advanced_search,advanced_search_result,checkout_success,checkout_process,checkout_shipping,checkout_payment,checkout_confirmation,cookie_usage,create_account_success,contact_us,download,download_timeout,customers_authorization,down_for_maintenance,password_forgotten,time_out,unsubscribe,info_shopping_cart,popup_image,popup_image_additional,product_reviews_write,ssl_check,shopping_cart');

// favicon settaggio - da decommentare se in uso
// There is usually NO need to enable this unless you wish to specify a path and/or a different filename
//  define('FAVICON','favicon.ico');
