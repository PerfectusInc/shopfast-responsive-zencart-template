<?php
//
// @package languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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

define('EMAIL_TEXT_SUBJECT', 'Bevestigen bestelling');
define('EMAIL_TEXT_HEADER', 'Bevestigen bestelling');
define('EMAIL_TEXT_FROM',' van ');  //toegevoegd aan EMAIL_TEXT_HEADER, alleen bovenaan e-mail in plattetekst indeling
define('EMAIL_THANKS_FOR_SHOPPING','Hartelijk bedankt voor Uw bestelling!');
define('EMAIL_DETAILS_FOLLOW','Hieronder staan de details van uw bestelling.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestelnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Controleer orderstatus:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Klik hier voor een gespecificeerde rekening');
define('EMAIL_TEXT_DATE_ORDERED', 'Datum besteld:');
define('EMAIL_TEXT_PRODUCTS', 'Artikelen');
define('EMAIL_TEXT_SUBTOTAL', 'Subtotaal:');
define('EMAIL_TEXT_TAX', 'Btw:        ');
define('EMAIL_TEXT_SHIPPING', 'Verzendkosten: ');
define('EMAIL_TEXT_TOTAL', 'Totaal:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Afleveradres');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Factuuradres');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Betaalmethode');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'via');

// gebruik geen # als afkorting voor nummer (gebruikelijk in het Engels) aangezien sommige anti-spam filters mail dan blokkeren
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nr.: ');
define('HEADING_ADDRESS_INFORMATION','Adresinformatie');
define('HEADING_SHIPPING_METHOD','Verzendmethode');
?>