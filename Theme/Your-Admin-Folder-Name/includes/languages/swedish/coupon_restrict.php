<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Rabattkupong Produkt/Kategori Restriktioner');
define('HEADING_TITLE_CATEGORY', 'Kategori Restriktioner');
define('HEADING_TITLE_PRODUCT', 'Produkt Restriktioner');

define('HEADER_COUPON_ID', 'Kupong ID');
define('HEADER_COUPON_NAME', 'Kupong Namn');
define('HEADER_CATEGORY_ID', 'Kategori ID');
define('HEADER_CATEGORY_NAME', 'Kategori Namn');
define('HEADER_PRODUCT_ID', 'Produkt ID');
define('HEADER_PRODUCT_NAME', 'Produkt Namn');
define('HEADER_RESTRICT_ALLOW', 'Till&aring;t');
define('HEADER_RESTRICT_DENY', 'Neka');
define('HEADER_RESTRICT_REMOVE', 'Radera');
define('IMAGE_ALLOW', 'Till&aring;t');
define('IMAGE_DENY', 'Neka');
define('IMAGE_REMOVE', 'Radera');
define('TEXT_ALL_CATEGORIES', 'Alla Kategorier');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'L&auml;gg till alla Kategori produkter');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Radera alla Kategori produkter');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>F&ouml;r L&auml;gg till alla kategori produkter, kommer endast produkter som inte redan fastst&auml;llts f&ouml;r begr&auml;nsningar l&auml;ggas till. <br />
                    F&ouml;r Radera alla kategori produkter, endast produkter som &auml;r specificerade Neka eller Till&aring;t kommer att tas bort.</strong>');

define('TEXT_MANUFACTURER', 'Tillverkare: ');
define('TEXT_CATEGORY', 'Kategori: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Kategori Ej Komplett');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Produkt Ej Komplett');
?>