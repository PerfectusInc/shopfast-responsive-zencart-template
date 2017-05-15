<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @translation Rune Rasmussen http://www.syntaxerror.no/
 * @version $Id: paypal.php 130 2012-10-12 15:24:49Z syntaxerror.no $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA', 'PayPal Website Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal Payments Standard</strong> (Eldre PayPal-tjeneste, mindre pålitelig enn \'Express Checkout\')<br /><a href="https://www.zen-cart.com" target="_blank">Administrer din PayPal-konto.</a><br /><br /><font color="green">Konfigurasjonsveiledning:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Logg inn på din PayPal-konto - klikk her.</a><br />2. I din PayPal-konto under "Profile",<ul><li>angi din <strong>Instant Payment Notification Preferences</strong> URL til:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '<br />(Om annen adresse allerede er brukt kan du la den være.)<br /><span class="alert">Forsikre deg om at avkryssingsboksen for å aktivere IPN er markert!</span></li><li>in <strong>Website Payments Preferences</strong> angi din <strong>Automatic Return URL</strong> til:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>... og klikk "installer" over for å aktivere PayPal-støtte... og "rediger" for å fortelle Zen Cart om dine PayPal-innstillinger.</li>') . '</ul><font color="green"><hr /><strong>Påkrevd:</strong></font><br /><hr />*<strong>PayPal-konto</strong> (<a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">klikk for å opprette/konfigurere</a>)<br />*<strong>CURL med SSL</strong> er sterkt anbefalt<br />*<strong>Port 80 (og port 443 dersom SSL er aktivert)</strong> er brukt for <strong>toveis</strong> kommunikasjon med systemporten, må derfor være åpen i din leverandørs ruter/brannmur<br />*<strong>PHP allow_url_fopen()</strong> må være aktivert<br />*<strong>Innstillinger</strong> i din PayPal-konto må være satt som angitt ovenfor.' );
 } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  // You should only use choices listed on this page: https://ppmts.custhelp.com/app/answers/detail/a_id/632
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Betal med PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Spar tid. Betal sikkert. <br />Betal uten å dele dine finasielle detaljer.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Fornavn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Etternavn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Firmanavn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Addressenavn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Gateadresse:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'By:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Fylke:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Postnr.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Land:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Betalers e-post:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay-nr.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Betalernr.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Betalerstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Addressestatus:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Betalingstype:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Betalingsstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Venter p.g.a.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Faktura:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Betalingsdato:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Valuta:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Bruttobeløp:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Betalingsavgift:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Vekslingskurs:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Varer:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Transaksjonstype:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Transaksjonsnummer:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Overordnet trans.nr.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Systemkommentarer: ');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Alle produkter i din handlekurv (Se detaljer i butikken, og din kvittering fra denne.)');
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' Kjøp');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Engangsbetalinger relatert til ');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Tilleggsavgifter');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Behandlingsgebyr og andre aktuelle gebyrer');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabatter');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Tillagt kreditt, inkludert rabatter, gavekort osv.');
