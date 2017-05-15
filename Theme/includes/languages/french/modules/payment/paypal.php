<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Aug 16 01:57:33 2012 -0400 Modified in v1.5.1 $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'Paiements PayPal Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA', 'Paiements PayPal Standard sur site Web');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>Paiements PayPal Standard sur site Web (IPN)</strong> (Service de base PayPal)<br /><a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Gérer votre compte PayPal.</a><br /><br /><font color="green">Instructions de configuration:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Créez votre compte PayPal - Cliquez ici.</a><br />2. Dans votre compte PayPal, sous "Profile",<ul><li>définissez votre URL <strong>Instant Payment Notification Preferences</strong> à:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr><br />(Si une autre URL valide est déjà entrée, vous devez la laisser.)<br /><span class="alert">Assurez-vous que la case autorisant IPN soit cochée !</span><br /><br /></li><li>Dans <strong>Website Payments Preferences</strong>, définissez votre <strong>Automatic Return URL</strong> à:<br /><nobr><pre>'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</pre></nobr></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... puis cliquez &quot;Installer&quot; ci-dessus pour activer le support PayPal Standard ... puis &quot;Éditer&quot; pour informer Zen Cart de vos paramètres PayPal.</li>') . '</ul><font color="green"><hr /><strong>Pré-requis:</strong></font><br /><hr />*<strong>Un compte PayPal</strong> (<a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">cliquez pour créer</a>)<br />*<strong>*<strong>Le port 80</strong> est utilisé pour la communication bidirectionnelle avec le portail, donc il faut qu\'il soit ouvert sur le routeur/firewall de votre hôte.<br />*<strong>Les paramètres</strong> doivent être configurés comme décrit ci-dessus.');

  } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  // You should only use choices listed on this page: https://ppmts.custhelp.com/app/answers/detail/a_id/632
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Encaisser avec PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Gagnez du temps. Encaissez en toute sécurité. <br />Payez sans dévoiler vos informations financières.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Prénom : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Raison sociale : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse nom : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Adresse : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Région/Département : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code Postal : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email du payeur : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', ' ID# d\'Ebay : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID# du payeur : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut du payeur : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse : ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Motif de mise en attente : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Montant brut : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Commission : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Taux de change : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Articles dans panier : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Type de transaction : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID# de transaction : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID# transaction parent : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Commentaires système : ');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Tous les articles dans votre panier (voir les détails dans la boutique et sur votre reçu de la boutique).');
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' Achat');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Frais uniques se rapportant ');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Surtaxes');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Frais de manutention et autres charges applicables');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Remises');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Rabais appliqués, incluant les bons de réduction, chèques-cadeaux, etc');