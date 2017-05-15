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
// $Id: checkout_process.php 107 2012-04-15 12:04:10Z syntaxerror.no $
//

define('EMAIL_TEXT_SUBJECT', 'Ordrebekreftelse');
define('EMAIL_TEXT_HEADER', 'Ordrebekreftelse');
define('EMAIL_TEXT_FROM',' fra ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Takk for at du handlet hos oss, og velkommen tilbake!');
define('EMAIL_DETAILS_FOLLOW','Oppsummering av ordren.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordrenummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaljert ordre:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Trykk her for å se en detaljert ordreoversikt');
define('EMAIL_TEXT_DATE_ORDERED', 'Ordredato:');
define('EMAIL_TEXT_PRODUCTS', 'Produkter');
define('EMAIL_TEXT_SUBTOTAL', 'Totalsum:');
define('EMAIL_TEXT_TAX', 'MVA inkl. med:        ');
define('EMAIL_TEXT_SHIPPING', 'Levering:    ');
define('EMAIL_TEXT_TOTAL', 'Totalt:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Leveringsadresse');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Fakturaadresse');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Betalingsmåte');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'via');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nr: ');
define('HEADING_ADDRESS_INFORMATION','Adresseinformasjon');
define('HEADING_SHIPPING_METHOD','Leveringsmåte');
