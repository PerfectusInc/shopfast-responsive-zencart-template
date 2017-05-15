<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_COUPON_HELP', 'Rabattkupong Hj&auml;lp');
define('TEXT_CLOSE_WINDOW', 'St&auml;ng F&ouml;nstret [x]');
define('TEXT_COUPON_HELP_HEADER', 'Gratulerar, du har l&ouml;st in en Rabattkupong.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Kupongnamn : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Din kupong ger %s rabatt p&aring; din order');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Du m&aring;ste handla f&ouml;r minst %s f&ouml;r att anv&auml;nda denna kupong');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Denna kupong ger dig fri frakt p&aring; ordern');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Kupong beskrivning : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Kupongen f&aring;r anv&auml;ndas mellan %s och %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Produkt/Kategori Beskrivningar');
define('TEXT_COUPON_HELP_CATEGORIES', 'Kategori');
define('TEXT_COUPON_HELP_PRODUCTS', 'Produkt');
define('TEXT_ALLOW', 'Till&aring;t');
define('TEXT_DENY', 'Neka');

define('TEXT_ALLOWED', ' (Till&aring;ten)');
define('TEXT_DENIED', ' (Nekad)');

define('TEXT_NO_CAT_RESTRICTIONS', '<p>Denna kupong &auml;r giltig f&ouml;r alla kategorier.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Denna kupong &auml;r giltig f&ouml;r alla produkter.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Rabattkuponger kan inte anv&auml;ndas f&ouml;r k&ouml;p av ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Faktureringsadress begr&auml;nsningar g&auml;ller.');
?>