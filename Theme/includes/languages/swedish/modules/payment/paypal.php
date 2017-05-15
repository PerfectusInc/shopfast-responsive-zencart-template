<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 19085 2011-07-13 05:26:23Z drbyte $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal Website Payments Standard - IPN');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal Website Payments Standard (IPN)</strong> (grundl&auml;ggande PayPal service)<br /><a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Hantera ditt PayPal konto.</a><br /><br /><font color="green">Konfiguration inst&auml;llning:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Registrera dig f&ouml;r PayPal konto - klicka h&auml;r.</a><br />2. I ditt PayPal konto, under "Profile",<ul><li>s&auml;tt ditt <strong>Instant Payment Notification Preferences</strong> URL till:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr><br />(Om ett annat redan URL anv&auml;nds, l&auml;mna detta kvar.)<br /><span class="alert">Se till att markeringsrutan f&ouml;r IPN &auml;r markerad!</span><br /><br /></li><li>i <strong>Website Payments Preferences</strong> s&auml;tt ditt <strong>Automatic Return URL</strong> till:<br /><nobr><pre>'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</pre></nobr></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... och klicka p&aring; "installera" ovan f&ouml;r att aktivera PayPal Standard support... och "&auml;ndra" f&ouml;r att st&auml;lla in i Zen Cart dina PayPal inst&auml;llningar.</li>') . '</ul><font color="green"><hr /><strong>Krav:</strong></font><br /><hr />*<strong>PayPal Konto</strong> (<a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Klicka f&ouml;r registrera</a>)<br />*<strong>*<strong>Port 80</strong> &auml;r anv&auml;nt f&ouml;r dubbelriktad kommunikation med gateway, som m&aring;ste anges i webbhotellets router/brandv&auml;gg<br />*<strong>Inst&auml;llningar</strong> m&aring;ste vara konfigurerad som angiven ovan.' );

 } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Betalning med PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Spara tid. Betala s&auml;kert. <br />Betala utan att visa din kortinformation information.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'F&ouml;rnamn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Efternamn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'F&ouml;retag:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adress namn:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Gatuadress:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ort:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'L&auml;n/Stat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Postnummer:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Land:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Betalarens e-post:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Betalar ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Betalar Status:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Adress Status:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Betalnings typ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Betalnings Status:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'I v&auml;ntan Orsak:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Faktura:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Betalningsdatum:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Valuta:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Brutto:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Betalningsavgift:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'V&auml;xlingskurs:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Produkter:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Typ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Huvud Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'System Kommentar: ');

 
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE','Alla objekt i din varukorg (se detaljer i butiken och p&aring; kvittot).' );
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' K&ouml;p');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Eg&aring;ngskostnad relaterad till ');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Till&auml;ggsavgifter');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Hanteringskostnader och andra avgifter');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabatt');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Till&auml;mpade krediter, inklusive rabattkuponger, presentkort, etc.');
