<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 */
 
define('HEADING_COUPON_HELP', 'Aiuto Buono sconto');
define('TEXT_CLOSE_WINDOW', 'Chiudi finestra');
define('TEXT_COUPON_HELP_HEADER', 'Complimenti, hai riscosso un Buono sconto.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nome Buono : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Il Buono ti assicura uno sconto del %s sull\'importo del tuo ordine');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Devi spendere almeno %s per poter usare questo Buono');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Questo buono ti assicura la spedizione gratuita di quanto ordinerai');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Caratteristiche del Buono : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Questo Buono &egrave; valido fra il %s e il %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Limitazioni Prodotto/Categoria');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categoria');
define('TEXT_COUPON_HELP_PRODUCTS', 'Prodotto');
define('TEXT_ALLOW', 'Consenti');
define('TEXT_DENY', 'Nega');

define('TEXT_ALLOWED', ' (Consentito)');
define('TEXT_DENIED', ' (Negato)');

define('TEXT_NO_CAT_RESTRICTIONS', '<p>Questo Buono &egrave; valido per tutte le categorie.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Questo Buono &egrave; valido per tutti i prodotti.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','I Buoni sconto non possono essere utilizzati per l\'acquisto di ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Si applicano le limitazioni all\'indirizzo di fatturazione.');

?>