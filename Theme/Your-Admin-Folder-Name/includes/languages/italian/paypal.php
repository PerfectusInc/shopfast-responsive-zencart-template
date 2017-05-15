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
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z Albigin $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Ordine Visualizzazione: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'Ordine Ricezione PayPal (nuova - vecchia)');
  define('TEXT_SORT_PAYPAL_ID', 'Ordine Ricezione PayPal (nuova - vecchia)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID Ordine (alto - basso), PayPal Ordine Ricevuto');
  define('TEXT_SORT_ZEN_ORDER_ID', 'ID (basso - alto), PayPal Ordine Ricevuto');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Ammontare Ordine (alto - basso)');
  define('TEXT_PAYMENT_AMOUNT', 'Ammontare Ordine (basso - alto)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'Notifiche da PayPal Instant Payment');
  define('HEADING_PAYMENT_STATUS', 'Stato Pagamenti');
  define('TEXT_ALL_IPNS', 'Tutti');

  define('TABLE_HEADING_ORDER_NUMBER', 'Ordine #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Tipo transazione');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Stato Pagamenti');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Ammontare');
  define('TABLE_HEADING_ACTION', 'Azione');
  define('TABLE_HEADING_DATE_ADDED', 'Inserito il');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Numero registrazioni nella Cronologia dello stato');
  define('TABLE_HEADING_ENTRY_NUM', 'Numero registrazione');
  define('TABLE_HEADING_TRANS_ID', 'ID Trans.');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Visualizza da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> IPN)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'Dati registrazione cliente PayPal');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'Notifica PayPal Instant Payment');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Indirizzo');
  define('TEXT_INFO_ORDER_NUMBER', 'Numero Ordine');
  define('TEXT_INFO_TXN_TYPE', 'Tipo Transazione');
  define('TEXT_INFO_PAYMENT_STATUS', 'Stato del Pagamento');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Ammontare');
  define('ENTRY_FIRST_NAME', 'Nome');
  define('ENTRY_LAST_NAME', 'Cognome');
  define('ENTRY_BUSINESS_NAME', 'Azienda');
  define('ENTRY_ADDRESS', 'Indirizzo');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'ID Pagatore');
  define('ENTRY_PAYER_STATUS', 'Stato Pagatore');
  define('ENTRY_ADDRESS_STATUS', 'Stato Indirizzo');
  define('ENTRY_PAYMENT_TYPE', 'Tipo Pagamento');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Stato Pagamento');
  define('TABLE_HEADING_PENDING_REASON', 'Motivo attesa');
  define('TABLE_HEADING_IPN_DATE', 'Data IPN');
  define('ENTRY_INVOICE', 'Fattura');
  define('ENTRY_PAYPAL_IPN_TXN', 'ID Transazione');
  define('ENTRY_PAYMENT_DATE', 'Data Pagamento');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Ultima modifica');
  define('ENTRY_MC_CURRENCY', 'Valuta MC');
  define('ENTRY_MC_GROSS', 'Lordo MC');
  define('ENTRY_MC_FEE', 'Spese MC');
  define('ENTRY_PAYMENT_GROSS', 'Pagamento lordo');
  define('ENTRY_PAYMENT_FEE', 'Spese pagamento');
  define('ENTRY_SETTLE_AMOUNT', 'Ammontare saldo');
  define('ENTRY_SETTLE_CURRENCY', 'Stabilire valuta');
  define('ENTRY_EXCHANGE_RATE', 'Tasso di cambio');
  define('ENTRY_CART_ITEMS', 'Numero articoli in carrello');
  define('ENTRY_CUSTOMER_COMMENTS', 'Commenti cliente');
  define('TEXT_NO_IPN_HISTORY', 'Cronologia IPN non disponibile');
  define('TEXT_TXN_SIGNATURE', 'Firma transazione');
  //end ADMIN text
?>
