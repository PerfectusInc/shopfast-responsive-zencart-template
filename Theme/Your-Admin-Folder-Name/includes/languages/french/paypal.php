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

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Afficher la commande : ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'Commande PayPal reçue (nouvelle - ancienne)');
  define('TEXT_SORT_PAYPAL_ID', 'Commande PayPal reçue (ancienne - nouvelle)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID de la Commande (haut - bas), Commande PayPal reçue');
  define('TEXT_SORT_ZEN_ORDER_ID', 'ID de la Commande (bas - haut), Commande PayPal reçue');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Montant de la commande (haut - bas)');
  define('TEXT_PAYMENT_AMOUNT', 'Montant de la commande (bas - haut)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'Notifications de Paiement Instantané PayPal');
  define('HEADING_PAYMENT_STATUS', 'Statut PayPal');
  define('TEXT_ALL_IPNS', 'Tout');

  define('TABLE_HEADING_ORDER_NUMBER', 'Commande #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Type de transaction');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Statut du paiement');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Montant');
  define('TABLE_HEADING_ACTION', 'Action');
  define('TABLE_HEADING_DATE_ADDED', 'Date de création');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Nombre d\'entrées dans l\'historique des statuts');
  define('TABLE_HEADING_ENTRY_NUM', 'Entrée No.');
  define('TABLE_HEADING_TRANS_ID', 'ID de Trans.');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Affiche <strong>%d</strong> à <strong>%d</strong> (sur <strong>%d</strong> IPNs)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'Détails de l\'inscription du client sur PayPal');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'Notifications de Paiement Instantané de PayPal');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Adresse');
  define('TEXT_INFO_ORDER_NUMBER', 'Numéro de commande');
  define('TEXT_INFO_TXN_TYPE', 'Type de transaction');
  define('TEXT_INFO_PAYMENT_STATUS', 'Statut du paiement');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Montant');
  define('ENTRY_FIRST_NAME', 'Prénom');
  define('ENTRY_LAST_NAME', 'Nom');
  define('ENTRY_BUSINESS_NAME', 'Raison sociale');
  define('ENTRY_ADDRESS', 'Adresse');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'ID du payeur');
  define('ENTRY_PAYER_STATUS', 'Statut du payeur');
  define('ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse');
  define('ENTRY_PAYMENT_TYPE', 'Type de paiement');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Statut du paiement');
  define('TABLE_HEADING_PENDING_REASON', 'Motif de mise en attente');
  define('TABLE_HEADING_IPN_DATE', 'Date de l\'IPN');
  define('ENTRY_INVOICE', 'Facture');
  define('ENTRY_PAYPAL_IPN_TXN', 'ID de transaction');
  define('ENTRY_PAYMENT_DATE', 'Date de paiement');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Dernière modification');
  define('ENTRY_MC_CURRENCY', 'MC Devise');
  define('ENTRY_MC_GROSS', 'MC net');
  define('ENTRY_MC_FEE', 'MC Commission');
  define('ENTRY_PAYMENT_GROSS', 'Paiement net');
  define('ENTRY_PAYMENT_FEE', 'Commission sur paiement');
  define('ENTRY_SETTLE_AMOUNT', 'Établir le montant');
  define('ENTRY_SETTLE_CURRENCY', 'Choix de la devise');
  define('ENTRY_EXCHANGE_RATE', 'Taux de change');
  define('ENTRY_CART_ITEMS', 'Nombre de produits dans le panier');
  define('ENTRY_CUSTOMER_COMMENTS', 'Commentaires client');
  define('TEXT_NO_IPN_HISTORY', 'Aucun historique IPN disponible');
  define('TEXT_TXN_SIGNATURE', 'Signature de la transaction');
  //end ADMIN text
?>