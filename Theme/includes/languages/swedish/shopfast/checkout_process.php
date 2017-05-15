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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('EMAIL_TEXT_SUBJECT', 'Order Bekräftelse');
define('EMAIL_TEXT_HEADER', 'Order Bekräftelse');
define('EMAIL_TEXT_FROM',' från ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Tack för att Ni handlat hos oss!');
define('EMAIL_DETAILS_FOLLOW','Följande är information från din order.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordernummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaljerad faktura:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Klicka här för detaljerad faktura');
define('EMAIL_TEXT_DATE_ORDERED', 'Orderdatum:');
define('EMAIL_TEXT_PRODUCTS', 'Produkter');
define('EMAIL_TEXT_SUBTOTAL', 'Delsumma:');
define('EMAIL_TEXT_TAX', 'Moms:        ');
define('EMAIL_TEXT_SHIPPING', 'Frakt: ');
define('EMAIL_TEXT_TOTAL', 'Total:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Leveransadress');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Faktureringsadress');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Betalningsmetod');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'via');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nr: ');
define('HEADING_ADDRESS_INFORMATION','Adress Information');
define('HEADING_SHIPPING_METHOD','Frakt metod');
?>