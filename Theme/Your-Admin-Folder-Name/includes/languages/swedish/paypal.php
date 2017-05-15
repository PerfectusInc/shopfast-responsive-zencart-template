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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Visa Order: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'PayPal Order Inkom (ny - gammal)');
  define('TEXT_SORT_PAYPAL_ID', 'PayPal Order Inkom (gammal - ny)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'Order ID (h&ouml;gt - l&aring;gt), PayPal Order Inkom');
  define('TEXT_SORT_ZEN_ORDER_ID', 'Order ID (l&aring;gt - h&ouml;gt), PayPal Order Inkom');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Order Summa (h&ouml;gt - l&aring;gt)');
  define('TEXT_PAYMENT_AMOUNT', 'Order Amount (l&aring;gt - h&ouml;gt)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal Instant Betalnings Information');
  define('HEADING_PAYMENT_STATUS', 'Betalnings Status');
  define('TEXT_ALL_IPNS', 'Alla');

  define('TABLE_HEADING_ORDER_NUMBER', 'Order #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Transaktions Typ');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Betalnings Status');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Summa');
  define('TABLE_HEADING_ACTION', 'Funktion');
  define('TABLE_HEADING_DATE_ADDED', 'Datum Skapad');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Antal i Status Historiken');
  define('TABLE_HEADING_ENTRY_NUM', 'Nummer');
  define('TABLE_HEADING_TRANS_ID', 'Trans. ID');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> IPN)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal Kund Registrerings Detaljer');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal Instant Betalnings Information');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Adress');
  define('TEXT_INFO_ORDER_NUMBER', 'Order Nummer');
  define('TEXT_INFO_TXN_TYPE', 'Transaktions Typ');
  define('TEXT_INFO_PAYMENT_STATUS', 'Betalnings Status');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Summa');
  define('ENTRY_FIRST_NAME', 'F&ouml;rnamn');
  define('ENTRY_LAST_NAME', 'Efternamn');
  define('ENTRY_BUSINESS_NAME', 'F&ouml;retags Namn');
  define('ENTRY_ADDRESS', 'Adress');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'Betalar ID');
  define('ENTRY_PAYER_STATUS', 'Betalar Status');
  define('ENTRY_ADDRESS_STATUS', 'Adress Status');
  define('ENTRY_PAYMENT_TYPE', 'Betalnings Typ');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Betalnings Status');
  define('TABLE_HEADING_PENDING_REASON', 'V&auml;ntar Orsak');
  define('TABLE_HEADING_IPN_DATE', 'IPN Datum');
  define('ENTRY_INVOICE', 'Faktura');
  define('ENTRY_PAYPAL_IPN_TXN', 'Transaktion ID');
  define('ENTRY_PAYMENT_DATE', 'Betalnings Datum');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Senast &Auml;ndrat');
  define('ENTRY_MC_CURRENCY', 'MC Valuta');
  define('ENTRY_MC_GROSS', 'MC Brutto');
  define('ENTRY_MC_FEE', 'MC Avgift');
  define('ENTRY_PAYMENT_GROSS', 'Betalnings Brutto');
  define('ENTRY_PAYMENT_FEE', 'Betalnings Avgift');
  define('ENTRY_SETTLE_AMOUNT', 'Hanteringsavgift');
  define('ENTRY_SETTLE_CURRENCY', 'Hanterings valuta');
  define('ENTRY_EXCHANGE_RATE', 'V&auml;xelkurs');
  define('ENTRY_CART_ITEMS', 'Antal Produkter i Kunkorg');
  define('ENTRY_CUSTOMER_COMMENTS', 'Kund Kommentarer');
  define('TEXT_NO_IPN_HISTORY', 'Ingen IPN historik finns');
  define('TEXT_TXN_SIGNATURE', 'Transaktion Signatur');
  //end ADMIN text
?>
