<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Kortingsbon');
define('HEADING_TITLE', 'Kortingsbon');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> lijkt geen geldige kortingsbon code te zijn. Controleer of u de code wel correct heeft overgenomen.');

define('HEADING_COUPON_HELP', 'Kortingsbon help');
define('TEXT_CLOSE_WINDOW', 'Sluit venster [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">De kortingsbon code die u heef ingevoerd is voor ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>U moet minimaal %s uitgeven om deze bon te kunnen gebruiken op artikelen die in aanmerking komen</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Aanbieding:</span> %s</p><p class="smallText">Er kunnen verschillende overige restricties van toepassing zijn. Zie hier beneden voor meer details.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>De kortingsbon is geldig van %s tot %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restricties kortingsbon</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Categorie restricties:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Artikel restrictie:</p>');
define('TEXT_ALLOW', 'Geldig');
define('TEXT_DENY', 'Ongeldig');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Deze kortingsbon heeft specifieke produktrestricties.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Deze kortingsbon is geldig voor het gehele assortiment.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Deze kortingsbon is geldig voor het gehele assortiment.</p>');
define('TEXT_CAT_ALLOWED', ' (geldig voor deze categorie)');
define('TEXT_CAT_DENIED', ' (ongeldig voor deze categorie)');
define('TEXT_PROD_ALLOWED', ' (Geldig voor dit artikel)');
define('TEXT_PROD_DENIED', ' (Artikel is niet toegestaan)');
// cadeaubonnen kunnen niet worden gekocht met kortingsbonnen
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Kortingsbonnen kunnen niet worden gebruikt om ' . TEXT_GV_NAMES . ' te kopen. Maximaal 1 kortingsbon per bestelling toegestaan.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Opzoeken van kortingsbon... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Uw kortingsbon code: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Er kunnen restricties gelden voor het factuuradres.');
?>