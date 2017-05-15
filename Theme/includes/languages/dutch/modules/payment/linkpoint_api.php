<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @package Linkpoint/Yourpay API payment_module
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 14141 2009-08-10 19:34:47Z wilt $
 */

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'FirstData/Linkpoint/YourPay API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', 'Creditcard');

  if (defined('MODULE_PAYMENT_LINKPOINT_API_STATUS') && MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay Ondernemers login</a>' . (MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_MODE_RESPONSE != 'LIVE: Production' ? '<br /><br /><strong>Linkpoint/YourPay API test cardnummers:</strong><br /><strong>Visa:</strong> 4111111111111111<br /><strong>MasterCard:</strong> 5419840000000003<br /><strong>Amex:</strong> 371111111111111<br /><strong>Discover:</strong> 6011111111111111' : '') . '<br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Probleemoplosser/Installatie FAQ (Engels)</a>');
  } else { 
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="http://www.zen-cart.com/partners/firstdata">Klik hier om een account aan te vragen</a><br /><br /><a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay API ondernemerssite</a><br /><br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Klik hier voor <strong>INSTALLATIE instructies/probleemoplosser</strong></a><br /><br /><strong>Vereisten:</strong><br /><hr />*<strong>LinkPoint of YourPay account</strong> (zie link hierboven om aan te melden)<br />*<strong>cURL is vereist </strong>en MOET  gecompileerd worden in PHP door uw webhoster<br />*<strong>Poort 1129</strong> wordt gebruikt voor bidirectionele communicatie met het betalings netwerk dus moet deze poort worden geopend op de router/firewall voor uw hostingserver<br />*<strong>PEM RSA beveiligd sleutelbestand </strong>Digitaal certificaat:<br />Om een digitaal certificaat te verkrijgen en te uploaden (.PEM):<br />- Login op uw LinkPoint/Yourpay account vanaf hun site<br />- Klik op "Support" in het hoofdmenu.<br />- Klik "Download Center" onder Downloads in de menuboks aan de zijkant.<br />- Klik op het woord "download" naast de "Store PEM File" sectie aan de rechterkant van de pagina.<br />- Geeft de noodzakelijke informatie in om de download te beginnen. U dient uw huidige BSN/SSN of BTW nummer in te geven die u gebruikt heeft bij de initiele aanvraag (of oprichting?).<br />- Schrijf dit bestand weg naar includes/modules/payment/linkpoint_api/XXXXXX.pem (aangereikt door FirstData - xxxxxx is uw shopnummer)');
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', 'Creditcard type:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', 'Eigenaar creditcard:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', 'Creditcard nummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'CVV nummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', 'Creditcard vervaldatum:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* Naam eigenaar creditcard moet uit minstens ' . CC_OWNER_MIN_LENGTH . ' letters bestaan.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', '* Het creditcardnummer moet uit minimaal ' . CC_NUMBER_MIN_LENGTH . ' cijfers bestaan.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* YHet 3 of 4 cijferig CVV nummer van de achterzijde van de creditcard moet worden ingevuld');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', 'Creditcard fout!');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', 'Uw creditcard kon niet worden geaccepteerd. Maak de nodige correcties en probeer het opnieuw of neem contact met ons op voor verdere assistentie.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', 'Factuuradres onjuist.  Maak de nodige correcties, probeer een andere kaart, of neem contact met ons op voor verdere assistentie.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', 'Uw creditcard kon niet worden geaccepteerd.  Maak de nodige correcties en probeer het opnieuw of neem contact met ons op voor verdere assistentie.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', 'What is dit?');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***ALLEEN AUTHORISATIE -- BEDRAG WORDT LATER VASTGESTELD DOOR DE BEHEERDER.***');
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', 'NB: Dit was een TEST transactie...ingesteld om een SUCESS melding terug te sturen.');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', 'NB: Dit was een TEST transactie...ingesteld om een AFWIJZING melding terug te sturen.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NB: Module is nog niet ingesteld)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;De xyzxyz.pem certificaat bestand kon niet worden gevonden.</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'CURL functie niet gevonden - benodigd voor FirstData/Linkpoint API betaalmodule');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DUPLICATE_MESSAGE', 'This appears to be a duplicate transaction, and we do not want to double-charge your card! Perhaps you resubmitted your order by mistake? If not, please try again in 5 minutes, or contact the storeowner for additional assistance. Sorry for the inconvenience.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', 'Wij bieden onze excuses aan voor het ongemak, op dit moment zijn wij niet in staat contact te leggen met de creditcard verstrekker voor autorisatie. Neem alstublieft contact met ons op voor een betaalalternatief.');
  // nb: bovenstaande fout kan optreden door:
     // - poort 1129 niet open voor biderectionele communicatie
     // - CURL is niet geinstalleerd of werkt niet
     // - incorrect, verkeerd of geen .PEM bestand gevonden in modules/payment/linkpoint_api directorie
     // - In het algemeen komt het hierop neer dat er geen geldige connectie kon worden gemaakt met de betalingsverwerker... de transactie is gestopt reeds binnen uw eigen server

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'Excuses. Tijdens het verwerken van uw kaartgegevens is er een technische fout opgetreden. Uw gegevens zijn volledig veilig doch neem alstublieft contact op met ons voor een alternatieve betalingsmethode.');
  // nb: bovenstaande fout treed doorgaans op als er een serieus en bekende foutconditie optreed. Verdere informatie volgt direct na het weergeven van deze foutmelding. Als database loggen aanstaat kunt u daar ook verder informatie terug vinden.


  // defenities beheerder

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'FirstData bestelnummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'AVS reactie:');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Reactie:');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Bevestigingscode:');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'Referentienummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Fraudescore:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NB: Module is in test modes)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ORDERTYPE', 'Order type:');


// admin tools:  NOG VERTALEN
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NO_MATCHING_ORDER_FOUND', 'Error: Could not find transaction details for the record specified.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_BUTTON_TEXT', 'Do Refund');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_ERROR', 'Error: You requested to do a refund but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_REFUND_AMOUNT', 'Error: You requested a refund but entered an invalid amount.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: You requested a refund but didn\'t enter the last 4 digits of the Credit Card number.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_INITIATED', 'Refund Initiated. Transaction ID: %s - Order ID: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: You requested to do a capture but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_BUTTON_TEXT', 'Do Capture');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_CAPTURE_AMOUNT', 'Error: You requested a capture but need to enter an amount.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: You need to specify a Transaction ID.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPT_INITIATED', 'Funds Capture initiated. Amount: %s.  Transaction ID: %s - AuthCode: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_BUTTON_TEXT', 'Do Void');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_ERROR', 'Error: You requested a Void but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_INITIATED', 'Void Initiated. Transaction ID: %s - Order ID: %s ');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TITLE', '<strong>Refund Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND', 'You may refund money to the customer\'s original credit card here.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_AMOUNT_TEXT', 'Enter the amount you wish to refund');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_TEXT', 'enter Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_CC_NUM_TEXT', 'Enter the last 4 digits of the Credit Card you are refunding.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TRANS_ID', 'Enter the original Transaction ID <em>(which usually looks like this: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_MESSAGE', 'Refund Issued');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_SUFFIX', 'You may refund an order up to the amount already captured. You must supply the last 4 digits of the credit card number used on the initial order.<br />Refunds cannot be issued if the card has expired. To refund an expired card, issue a credit using the merchant terminal instead.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TITLE', '<strong>Capture Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE', 'You may capture previously-authorized funds here:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_AMOUNT_TEXT', 'Enter the amount to Capture: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TRANS_ID', 'Enter the original Order Number <em>(ie: <strong>5138-i4wcYM</strong>)</em> : ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_TEXT', 'enter Order Number');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Settled previously-authorized funds.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_SUFFIX', 'Captures must be performed within 2-10 days of the original authorization depending on your merchant bank requirement. You may  capture an order ONLY ONCE. <br />Please be sure the amount specified is correct.<br />If you leave the amount blank, the original amount will be used instead.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TITLE', '<strong>Voiding Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID', 'You may void a transaction (preauth/capture/refund) which has not yet been settled. Please enter the original Transaction ID <em>(usually looks like this: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_CHECK', 'Check this box to confirm your intent:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_TEXT', 'enter Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction Canceled');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_SUFFIX', 'Voids must be completed before the original transaction is settled in the daily batch, which occurs at 7:00PM Pacific Time.');


?>