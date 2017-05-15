<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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

  // sorteervolgorde orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Toon Order: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'PayPal Order ontvangen (nieuw - oud)');
  define('TEXT_SORT_PAYPAL_ID', 'PayPal Order ontvangen (oud - nieuw)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'Ordernummer (hoog - laag), PayPal Order ontvangen');
  define('TEXT_SORT_ZEN_ORDER_ID', 'Ordernummer (laag - hoog), PayPal Order ontvangen');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Orderbedrag (hoog - laag)');
  define('TEXT_PAYMENT_AMOUNT', 'Orderbedrag (laag - hoog)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal Instant Payment Notifications');
  define('HEADING_PAYMENT_STATUS', 'Status betaling:');
  define('TEXT_ALL_IPNS', 'Alle');

  define('TABLE_HEADING_ORDER_NUMBER', 'Bestelnummer');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal nummer');
  define('TABLE_HEADING_TXN_TYPE', 'Transactie Type');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Status betaling');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Bedrag');
  define('TABLE_HEADING_ACTION', 'Actie(s)');
  define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Aantal in Status Historie');
  define('TABLE_HEADING_ENTRY_NUM', 'Toegangs Nummer');
  define('TABLE_HEADING_TRANS_ID', 'Transactie ID');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> IPN(s))');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal Klantregistratie Details');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal Instant Payment Notification');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Adres');
  define('TEXT_INFO_ORDER_NUMBER', 'Bestelnummer');
  define('TEXT_INFO_TXN_TYPE', 'Transactie Type');
  define('TEXT_INFO_PAYMENT_STATUS', 'Status betaling');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Bedrag');
  define('ENTRY_FIRST_NAME', 'Voornaam');
  define('ENTRY_LAST_NAME', 'Achternaam');
  define('ENTRY_BUSINESS_NAME', 'Bedrijfsnaam');
  define('ENTRY_ADDRESS', 'Adres');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'Betaler ID');
  define('ENTRY_PAYER_STATUS', 'Betaler Status');
  define('ENTRY_ADDRESS_STATUS', 'Adres Status');
  define('ENTRY_PAYMENT_TYPE', 'Soort betaling');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Status betaling');
  define('TABLE_HEADING_PENDING_REASON', 'Pending Reden');
  define('TABLE_HEADING_IPN_DATE', 'IPN datum');
  define('ENTRY_INVOICE', 'Factuur');
  define('ENTRY_PAYPAL_IPN_TXN', 'Transactie ID');
  define('ENTRY_PAYMENT_DATE', 'Datum betaling');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Datum laatste wijziging:');
  define('ENTRY_MC_CURRENCY', 'MC valuta');
  define('ENTRY_MC_GROSS', 'MC bruto');
  define('ENTRY_MC_FEE', 'MC provisie');
  define('ENTRY_PAYMENT_GROSS', 'Betaling bruto');
  define('ENTRY_PAYMENT_FEE', 'Betaling provisie');
  define('ENTRY_SETTLE_AMOUNT', 'Rekening bedrag');
  define('ENTRY_SETTLE_CURRENCY', 'Rekening valuta');
  define('ENTRY_EXCHANGE_RATE', 'Wisselkoers');
  define('ENTRY_CART_ITEMS', 'Aantal artikelen in winkelwagen');
  define('ENTRY_CUSTOMER_COMMENTS', 'Opmerking/commentaar klant');
  define('TEXT_NO_IPN_HISTORY', 'Geen IPN historie beschikbaar');
  define('TEXT_TXN_SIGNATURE', 'Transactie Handtekening');
  //end ADMIN text
?>
