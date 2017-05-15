<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: coupon_admin.php 2457 2005-11-27 04:51:37Z ajeh $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('TOP_BAR_TITLE', 'Statistik');
define('HEADING_TITLE', 'Rabattkupong');
define('HEADING_TITLE_STATUS', 'Status : ');
define('TEXT_CUSTOMER', 'Kund:');
define('TEXT_COUPON', 'Kupong Namn:');
define('TEXT_COUPON_ALL', 'Alla Kuponger');
define('TEXT_COUPON_ACTIVE', 'Aktiv kupong');
define('TEXT_COUPON_INACTIVE', 'Inaktiv kupong');
define('TEXT_SUBJECT', 'Rubrik:');
define('TEXT_UNLIMITED', 'Obegr&auml;nsad');
define('TEXT_FROM', 'Fr&aring;n:');
define('TEXT_FREE_SHIPPING', 'Fri Frakt');
define('TEXT_MESSAGE', 'Meddelande:');
define('TEXT_RICH_TEXT_MESSAGE','Rik-Text Meddelande:');
define('TEXT_SELECT_CUSTOMER', 'V&auml;lj Kund');
define('TEXT_ALL_CUSTOMERS', 'Alla Kunder');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Till Alla Nyhetsbrevs Kunder');
define('TEXT_CONFIRM_DELETE', '&Auml;r du s&auml;ker p&aring; att du vill radera denna kupong?');
define('TEXT_SEE_RESTRICT', 'Restriktioner');

define('TEXT_COUPON_ANNOUNCE','Vi &auml;r glada &aring;t att kunna erbjuda Er en rabattkupong.');

define('TEXT_TO_REDEEM', 'Du kan l&ouml;sa in denna vid utcheckning i v&aring;r shop. Ange bara koden i avsedd ruta, och klicka p&aring; anv&auml;nd rabattkupong knappen.');
define('TEXT_IN_CASE', ' ifall du har n&aring;got problem. ');
define('TEXT_VOUCHER_IS', 'Kupongen har koden ');
define('TEXT_REMEMBER', 'F&ouml;rlora inte kupong koden, se till att ha den p&aring; ett s&auml;kert st&auml;lle f&ouml;r att kunna utnyttja den.');
define('TEXT_VISIT', 'Bes&ouml;k oss p&aring; %s');
define('TEXT_ENTER_CODE', ' och ange koden ');
define('TEXT_COUPON_HELP_DATE', '<p><p>Kupongen &auml;r giltlig mellan %s och %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>Kupongen &auml;r giltlig mellan %s och %s</p></p>');

define('TABLE_HEADING_ACTION', 'Funktion');

define('CUSTOMER_ID', 'Kund ID');
define('CUSTOMER_NAME', 'Kund Namn');
define('REDEEM_DATE', 'Inl&ouml;snings datum');
define('IP_ADDRESS', 'IP Adress');

define('TEXT_REDEMPTIONS', 'Inl&ouml;sning');
define('TEXT_REDEMPTIONS_TOTAL', 'Total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'F&ouml;r denna Kund');
define('TEXT_NO_FREE_SHIPPING', 'Ingen fri frakt');

define('NOTICE_EMAIL_SENT_TO', 'Notera: Epost skickat till: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'FEL: Ingen Kund &auml;r vald.');
define('ERROR_NO_SUBJECT', 'FEL: Ingen Rubrik finns.');

define('COUPON_NAME', 'Kupong Namn');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'V&auml;rde');
define('COUPON_CODE', 'Kupong Kod');
define('COUPON_STARTDATE', 'Start Datum');
define('COUPON_FINISHDATE', 'Slut Datum');
define('COUPON_FREE_SHIP', 'Fri Frakt');
define('COUPON_DESC', 'Beskrivning <br />(Kan ses av kund)');
define('COUPON_MIN_ORDER', 'Minsta order f&ouml;r kupong');
define('COUPON_USES_COUPON', 'Antal g&aring;nger att anv&auml;nda per kupong');
define('COUPON_USES_USER', 'Anv&auml;ndning per kund');
define('COUPON_PRODUCTS', 'Aktuell Produkt lista');
define('COUPON_CATEGORIES', 'Aktuell Kategori lista');
define('VOUCHER_NUMBER_USED', 'Anv&auml;nd');
define('DATE_CREATED', 'Datum Skapad');
define('DATE_MODIFIED', 'Datum &Auml;ndrad');
define('TEXT_HEADING_NEW_COUPON', 'Skapa Ny Kupong');
define('TEXT_NEW_INTRO', 'Fyll i f&ouml;ljande information.<br />');
define('COUPON_ZONE_RESTRICTION', 'Kupong omr&aring;des Begr&auml;nsning: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Kupong omr&aring;des begr&auml;nsning &auml;r valfritt.');

define('ERROR_NO_COUPON_AMOUNT', 'Inget v&auml;rde &auml;r ifyllt');
define('ERROR_NO_COUPON_NAME', 'Inget kupong namn ');
define('ERROR_COUPON_EXISTS', 'En kupong finns redan med denna kod');


define('COUPON_NAME_HELP', 'Ett kort namn f&ouml;r kupongen');
define('COUPON_AMOUNT_HELP', 'V&auml;rdet f&ouml;r kupongen antingen en summa eller anv&auml;nd % tecknet f&ouml;r ett procentuellt v&auml;rde.');
define('COUPON_CODE_HELP', 'Du kan ange din egen kod, eller l&auml;mna tom f&ouml;r en automatisk kod.');
define('COUPON_STARTDATE_HELP', 'Kupongen &auml;r giltlig fr&aring;n');
define('COUPON_FINISHDATE_HELP', 'Kupongen g&aring;r ut den');
define('COUPON_FREE_SHIP_HELP', 'Denna kupong ger fri frakt p&aring; en order. Notera. Detta hoppar &ouml;ver coupon_amount symbolen men respekterar minsta order total');
define('COUPON_DESC_HELP', 'En beskrivning av kupongen till kunden');
define('COUPON_MIN_ORDER_HELP', 'Minsta order v&auml;rde f&ouml;r att kupongen skall kunna anv&auml;ndas');
define('COUPON_USES_COUPON_HELP', 'Max antal g&aring;nger en kupong kan anv&auml;ndas, L&auml;mnas tom om den skall vara obegr&auml;nsad.');
define('COUPON_USES_USER_HELP', 'Antal g&aring;nger en kund kan anv&auml;nda denna kupong.');
define('COUPON_PRODUCTS_HELP', 'En komma separerad lista av product_id som denna kupong kan anv&auml;ndas p&aring;. L&auml;mna denna tom f&ouml;r ingen begr&auml;nsning.');
define('COUPON_CATEGORIES_HELP', 'En komma separerad lista av cpath som denna kupong kan anv&auml;ndas p&aring;. L&auml;mna denna tom f&ouml;r ingen begr&auml;nsning.');
define('COUPON_BUTTON_PREVIEW', 'F&ouml;rhandsvisa');
define('COUPON_BUTTON_CONFIRM', 'Bekr&auml;fta');
define('COUPON_BUTTON_BACK', 'Tillbaka');
define('COUPON_ACTIVE', 'Status');
define('COUPON_START_DATE', 'Startar');
define('COUPON_EXPIRE_DATE', 'Slutar');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'Rabattkupongen KAN INTE &aring;teraktiveras. Detta &auml;r en v&auml;lkomst rabattkupong<br /><br />&Auml;ndra v&auml;lkomst rabattkupongen och inte att radera den. Se Admin->Konfiguration->Presentkort/kuponger');
define('SUCCESS_COUPON_DISABLED', 'Lyckat! Rabattkupongen &auml;r inaktiverad ...');
define('TEXT_COUPON_NEW', 'Anv&auml;nd NY Rabattkupong kod:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'VARNING! Dubbletter p&aring; rabattkuponger finns ... Kopiering avslutat f&ouml;r kod: ');
define('TEXT_CONFIRM_COPY', '&Auml;r du s&auml;ker p&aring; att du vill kopiera denna rabattkupong till en annan rabattkupong?');
define('SUCCESS_COUPON_DUPLICATE', 'Lyckat! Rabattkupong har kopierats ...<br /><br />Kontrollera Kupongens namn och datum ...');
