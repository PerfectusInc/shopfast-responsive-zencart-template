<?php
/**
 * Authorize.net SIM Payment Module
 *
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 15868 2010-04-11 01:14:50Z drbyte $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Creditcard');  // Payment option title as displayed to the customer


  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Handelaren Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />This card number can be used to receive decline notices for testing purposes.' : '') . '<br /><br /><strong>SETTINGS</strong><br />Your "response" and "receipt" URL settings in your Authorize.net Merchant Profile can be left BLANK, or can be set to point to http://your_domain.com/foldername/index.php?main_page=checkout_payment<br><br>See <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klik hier om een account aan te maken bij</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Klik op login op de Authorize.net handelaren website</a><br /><br /><strong>Verplicht:</strong><br /><hr />*<strong>Authorize.net Account</strong> (zie bovenstaande link om u aan te melden)<br />*<strong>Authorize.net gebruikersnaam en transactie sleutel</strong> available from your Merchant Area<br><br>See <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Type:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Eigenaar creditcard:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Creditcardnummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Creditcard vervaldatum:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'CVV code:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Wat is dit?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Naam eigenaar creditcard moet uit minstens ' . CC_OWNER_MIN_LENGTH . ' letters bestaan.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Het creditcardnummer moet uit minimaal ' . CC_NUMBER_MIN_LENGTH . ' cijfers bestaan.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* het 3 of 4 cijferig CVV nummer dient u over te nemen van de achterzijde van uw creditcard.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Uw creditcard kon niet worden verwerkt. Probeer het nogmaals.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Uw creditcard is afgewezen. Probeer een andere kaart of neem contact op met uw kaartverstrekker voor meer informatie.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Creditcard fout!');
