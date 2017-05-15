<?php
/**
 * Authorize.net echeck Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_echeck.php 293 2008-05-28 21:10:40Z maleborg $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ADMIN_TITLE', 'Authorize.net - eScheck'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CATALOG_TITLE', 'eScheck');  // Payment option title as displayed to the customer

  if (MODULE_PAYMENT_AUTHORIZENET_ECHECK_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Verk�ufer Login</a>');
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klicken Sie hier um ein neues Konto zu er�ffnen</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Area</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>CURL is required </strong>and MUST be compiled with SSL support into PHP by your hosting company<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR_CURL_NOT_FOUND', 'CURL Funktionen nicht gefunden - ben�tigt f�r Authorize.net eScheck Zahlungsmodul');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ROUTING_CODE', 'ABA Routing Nummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_NAME', 'Bank Name:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_NUM', 'Bank Konto Number:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_TYPE', 'Bank Konto Typ:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNTHOLDER', 'Name des Bank Kontos:');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_OWNER', '* Der Konto Inhaber muss mindestens  ' . CC_OWNER_MIN_LENGTH . ' Zeichen lang sein.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_NUMBER', '* Die Konto nummer muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ROUTING_CODE', '* Die Bankleitzahl muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_BANK_NAME', '* Der Name der Bank muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_TITLE', 'Authorisationsbest�tigung:&nbsp;');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_NOTICE', 'Klicken auf den nachstehende Button(best�tigt Ihre Bestellung), authorisiere ich ' . STORE_NAME . ' mein Konto %s bei Bank %s mit dem Betrag von %s f�r den einmaligen Online-Kauf von Lieferungen und Leistungen auf dieses Webseite gelistet, zu belasten.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DECLINED_MESSAGE', 'Ihre Transaktion ist fehlgeschlagen. Bitte �berpr�fen Sie Ihre Angaben und versuchen Sie es noch einmal oder kontaktieren Sie uns zur Unterst�tzung.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR', 'Transaktion Fehler!');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHENTICITY_WARNING', 'WARNUNG: Sicherheitsproblem. Bitte kontaktieren Sie sofort den Shop Betreiber. Ihre Bestellung konnte nicht vollst�ndig authorisiert werden.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TYPE', 'Kunden Typ:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TAX_ID', 'Kunden Steuer ID/SSN:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_NUMBER', 'F�hrerschein-Nr.:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_STATE', 'Fahrzeug-Kennzeichen:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_TEXT', 'Geburtsdatum des Fahrers:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_FORMAT', '(MM/DD/YYYY)');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_CUST_TAX_ID', '* Die Steuer ID muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_NUMBER', '* Die F�hrerschein-Nr. muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_DOB', '* Das Geburtsdatum muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_BUTTON_TEXT', 'R�ckerstattung');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_ERROR', 'FEHLER: Sie haben R�ckerstattung beantragt, aber die Best�tigungs-Box nicht aktiviert.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_REFUND_AMOUNT', 'FEHLER: Sie haben R�ckerstattung beantragt, haben aber einen ung�ltigen Betrag eingegeben.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CC_NUM_REQUIRED_ERROR', 'FEHLER: Sie haben R�ckerstattung beantragt, habe aber die letzten 4 Stellen der Kreditkartennummer nicht eingegeben.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_INITIATED', 'R�ckerstattung initialisiert. Transaktion ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_ERROR', 'FEHLER: Sie wollten die R�ckerstattung akzeptieren, haben aber nicht die Best�tigungs-Box nicht aktiviert.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_BUTTON_TEXT', 'R�ckerstatten');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_CAPTURE_AMOUNT', 'FEHLER: Sie haben eine R�ckerstattung angefordert, haben aber nicht den Betrag eingegeben.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_TRANS_ID_REQUIRED_ERROR', 'FEHLER: Bitte geben Sie die Transaktions ID ein.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPT_INITIATED', 'R�ckerstattung gestartet. Betrag: %s.  Transaktion ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_BUTTON_TEXT', 'Zahlung aufheben');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_ERROR', 'FEHLER: Sie haben eine Aufhebung beantragt, aber die Best�tigungs-Box nicht aktiviert.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_INITIATED', 'Aufhebung gestartet. Transaktion ID: %s - Auth Code: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TITLE', '<strong>R�ckerstattung Transaktionen</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND', 'Sie k�nnen hier Geld an der Zahler (Kreditkarte) zur�ck �berweisen:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_CHECK', 'Markieren Sie die Box bevor Sie Best�tigen: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_AMOUNT_TEXT', 'Geben Sie den R�ckerstattungsbetrag ein');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_CC_NUM_TEXT', 'Geben Sie die letzten 4 Ziffern der Konto Nummer ein.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TRANS_ID', 'Geben Sie optional die Transaktion ID ein:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TEXT_COMMENTS', 'Bemerkung (Erscheint nur in der Bestell-Historie):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_DEFAULT_MESSAGE', 'Ausgef�hrte R�ckerstattungen');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_SUFFIX', 'Sie k�nnen ein R�ckerstattung f�r einen Auftrag in der H�he des urspr�nglichen Betrags ausf�hren. Sie m�ssen die letzten 4 Stellen der Konto-Nr. angeben, unter der der Auftrag ausgef�hrt wurde.<br />R�ckerstattungen k�nnen innerhalb 120 Tagen ab dem orginal Transaktionsdatum durchgef�hrt werden.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TITLE', '<strong>Transaktionen r�ckg�ngig machen</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE', 'Hier k�nnen Sie bereits authorisierte Zahlungen r�ckg�ngig machen:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_AMOUNT_TEXT', 'Geben Sie den Betrag ein: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_CHECK', 'Aktivieren Sie die Box um zu best�tigen: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TRANS_ID', 'Geben sie hier die urspr�ngliche Transaktion ID ein: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TEXT_COMMENTS', 'Bemerkung (Erscheint nur in der Bestellhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'R�ckg�ngig gemachte Zahlungen.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_SUFFIX', 'Zahlungen k�nnen innerhalb von 30 Tagen ab der Transaktion get�tigt werden. R�ckf�hrung ist EINMALIG.<br />Stellen Sir sicher, da� der Betrag korrekt ist.<br />Original betrag wird r�ckg�ngig gemacht, wenn Sie keinen Betrag eingeben.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TITLE', '<strong>Transaktionen l�schen</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID', 'Sie k�nnen Transaktionen l�schen, die bisher noch nicht beglichen wurden:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_CHECK', 'Aktivieren Sie die Box um zu best�tigen:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TEXT_COMMENTS', 'Bemerkung (Erscheint nur in der Bestellhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaktion gel�scht');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_SUFFIX', 'L�schungen k�nnen nur t�glich vorgenommen werden.');
