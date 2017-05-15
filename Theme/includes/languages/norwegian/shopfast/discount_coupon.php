<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2014 Rune Rasmussen http://www.syntaxerror.no/
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE', 'Rabattkoder');
define('HEADING_TITLE', 'Rabattkoder');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> ser ikke ut til å være en gyldig innløsingskode. Vennligst prøv å fylle den inn på nytt.');

define('HEADING_COUPON_HELP', 'Rabattkodehjelp');
define('TEXT_CLOSE_WINDOW', 'Lukk vindu [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Rabattkoden du har fylt inn er for ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Du må kjøpe for minimum %s for å kunne bruke denne rabattkoden, på kvalifiserende produkter.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Rabattilbud:</span> %s</p><p class="smallText">Visse andre restriksjoner kan komme i tillegg. Vennligst se nedenfor for andre detaljer.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Koden er gyldig mellom %s og %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Rabattkoderestriksjoner</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Kategorirestriksjoner:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Produktrestriksjoner:</p>');
define('TEXT_ALLOW', 'Allow');
define('TEXT_DENY', 'Deny');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Denne koden har spesifike produktrestriksjoner.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Denne koden er gyldig for alle kategorier.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Denne koden er gyldig for alle produkter.</p>');
define('TEXT_CAT_ALLOWED', ' (Gyldig for denne kategorien)');
define('TEXT_CAT_DENIED', ' (Ikke tillatt på denne kategorien)');
define('TEXT_PROD_ALLOWED', ' (Gyldig for dette produktet)');
define('TEXT_PROD_DENIED', ' (Ikke tillatt produkt)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Rabattkoder kan ikke brukes mot kjøp av ' . TEXT_GV_NAMES . '. Grense er 1 kupong per ordre.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Hent opp rabattkode... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Din kode: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Restriksjoner på betalingsadresse finnes.');
