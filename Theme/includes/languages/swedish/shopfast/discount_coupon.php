<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */
  /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('NAVBAR_TITLE', 'Rabattkupong');
define('HEADING_TITLE', 'Rabattkupong');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> verkar inte vara en giltig Inl&ouml;sningskod. F&ouml;rs&ouml;k att skriva det igen.');

define('HEADING_COUPON_HELP', 'Rabattkupong hj&auml;lp');
define('TEXT_CLOSE_WINDOW', 'St&auml;ng f&ouml;nstret [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Rabattkupongens kod du har angivit &auml;r f&ouml;r ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Du m&aring;ste handla f&ouml;r minst %s f&ouml;r att anv&auml;nda denna kupong p&aring;, produkter godk&auml;nda f&ouml;r kupongen.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Rabatt erbjudande:</span> %s</p><p class="smallText"> Eventuella restriktioner kan g&auml;lla. V&auml;nligen se nedan f&ouml;r information.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Kupongen g&auml;ller mellan %s och %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Rabattkupong restriktioner</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Kategori restriktioner:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Produkt restriktioner:</p>');
define('TEXT_ALLOW', 'Allow');
define('TEXT_DENY', 'Deny');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Denna kupong kan anv&auml;ndas f&ouml;r alla kategorier.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Denna kupong kan anv&auml;ndas p&aring; alla produkter.</p>');
define('TEXT_CAT_ALLOWED', ' (G&auml;ller f&ouml;r denna kategori)');
define('TEXT_CAT_DENIED', ' (G&auml;ller INTE f&ouml;r denna kategori)');
define('TEXT_PROD_ALLOWED', ' (G&auml;ller f&ouml;r denna produkt)');
define('TEXT_PROD_DENIED', ' (G&auml;ller INTE f&ouml;r denna produkt)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Rabattkuponger kan inte till&auml;mpas f&ouml;r ink&ouml;p av ' . TEXT_GV_NAMES . '. Endast en kupong per order.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Leta upp rabattkupongen ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Din kod: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Faktureringsadress begr&auml;nsningar g&auml;ller.');
?>