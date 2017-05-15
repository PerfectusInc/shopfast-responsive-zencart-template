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
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Visningssortering: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'Ordredato synkende');
  define('TEXT_SORT_PAYPAL_ID', 'Ordredato stigende');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'Ordrenummer synkende, Ordredato');
  define('TEXT_SORT_ZEN_ORDER_ID', 'Ordrenummer stigende, Ordredato');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Ordrebeløp synkende');
  define('TEXT_PAYMENT_AMOUNT', 'Ordrebeløp stigende');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal IPN  - øyeblikkelige betalingsvarsler');
  define('HEADING_PAYMENT_STATUS', 'Betalingsstatus');
  define('TEXT_ALL_IPNS', 'Alle');

  define('TABLE_HEADING_ORDER_NUMBER', 'Ordrenummer:');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPalnr.');
  define('TABLE_HEADING_TXN_TYPE', 'Transaksjonstype');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Betalingsstatus');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Beløp');
  define('TABLE_HEADING_ACTION', 'Valg');
  define('TABLE_HEADING_DATE_ADDED', 'Lagt til');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Antall oppføringer i statushistorie');
  define('TABLE_HEADING_ENTRY_NUM', 'Oppføringsnummer');
  define('TABLE_HEADING_TRANS_ID', 'Transaksjons-ID');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> IPN\'er)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal - kundeopplysninger');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal IPN  - øyeblikkelige betalingsvarsler');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Adresse');
  define('TEXT_INFO_ORDER_NUMBER', 'Ordrenummer');
  define('TEXT_INFO_TXN_TYPE', 'Transaksjonstype');
  define('TEXT_INFO_PAYMENT_STATUS', 'Betalingsstatus');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Beløp');
  define('ENTRY_FIRST_NAME', 'Fornavn');
  define('ENTRY_LAST_NAME', 'Etternavn');
  define('ENTRY_BUSINESS_NAME', 'Firmanavn');
  define('ENTRY_ADDRESS', 'Adresse');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'Betaler-ID');
  define('ENTRY_PAYER_STATUS', 'Betalerstatus');
  define('ENTRY_ADDRESS_STATUS', 'Adressestatus');
  define('ENTRY_PAYMENT_TYPE', 'Betalingstype');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Betalingstatus');
  define('TABLE_HEADING_PENDING_REASON', 'Venter på grunn av');
  define('TABLE_HEADING_IPN_DATE', 'IPN-dato');
  define('ENTRY_INVOICE', 'Faktura');
  define('ENTRY_PAYPAL_IPN_TXN', 'Transaksjons-ID');
  define('ENTRY_PAYMENT_DATE', 'Betalingsdato');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Sist endret');
  define('ENTRY_MC_CURRENCY', 'MC-valuta');
  define('ENTRY_MC_GROSS', 'MC-brutto*');
  define('ENTRY_MC_FEE', 'MC-gebyr');
  define('ENTRY_PAYMENT_GROSS', 'Bruttobetaling');
  define('ENTRY_PAYMENT_FEE', 'Betalingsgebyr');
  define('ENTRY_SETTLE_AMOUNT', 'Betalingsbeløp');
  define('ENTRY_SETTLE_CURRENCY', 'Betalingsvaluta');
  define('ENTRY_EXCHANGE_RATE', 'Vekslingskurs');
  define('ENTRY_CART_ITEMS', 'Antall varer');
  define('ENTRY_CUSTOMER_COMMENTS', 'Kundekommentar');
  define('TEXT_NO_IPN_HISTORY', 'Ingen IPN-historie tilgjengelig');
  define('TEXT_TXN_SIGNATURE', 'Transaksjonssignatur');
  //end ADMIN text
