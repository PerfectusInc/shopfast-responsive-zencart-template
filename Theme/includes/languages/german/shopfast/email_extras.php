<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @translator: cyaneo/hugo13/wflohr/maleborg	http://www.zen-cart-pro.at	2007-01-03
 * @version $Id: email_extras.php 628 2013-08-16 18:05:14Z webchills $
 * @translated/edited and adapted for ZC v1.5.x 2014-12-06 12:13:30Z frank18 $
 */

// office use only
define('OFFICE_FROM', '<strong>Absender:</strong>');
define('OFFICE_EMAIL', '<strong>E-Mail:</strong>');

define('OFFICE_SENT_TO', '<strong>An:</strong>');
define('OFFICE_EMAIL_TO', '<strong>An E-Mail:</strong>');

define('OFFICE_USE', '<strong>Nur für den internen Gebrauch:</strong>');
define('OFFICE_LOGIN_NAME', '<strong>Kontoname:</strong>');
define('OFFICE_LOGIN_EMAIL', '<strong>E-Mail Adresse</strong>:');
define('OFFICE_LOGIN_PHONE', '<strong>Telefon:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS', '<strong>IP Adresse:</strong>');
define('OFFICE_HOST_ADDRESS', '<strong>Hostname:</strong>');
define('OFFICE_DATE_TIME', '<strong>Datum und Uhrzeit:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'Deaktiviert');

// email disclaimer
define('EMAIL_DISCLAIMER', 'Diese E-Mail-Adresse wurde uns von Ihnen oder einem unserer Kunden mitgeteilt. Sollten Sie diese Nachricht versehentlich erhalten haben, wenden Sie sich bitte an: ' . STORE_OWNER_EMAIL_ADDRESS);
define('EMAIL_SPAM_DISCLAIMER', '-');
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\n" . 'Um diesen Newsletter abzubestellen, klicken Sie bitte auf folgenden Link: ' . "\n");
// email advisory for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>Achtung:</strong> Aus Sicherheitsgründen werden alle gesendeten E-Mails zwischengespeichert.<br />Sollten Sie diesbezüglich Fragen haben, wenden Sie sich bitte an: ' . STORE_OWNER_EMAIL_ADDRESS);

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Diese Nachricht ist in allen E-Mails dieser Seite enthalten:</strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[NEUES KUNDENKONTO]');
define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT', '[EMPFEHLUNG]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[GUTSCHEIN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NEUE BESTELLUNG]');
define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT', '[EXTRA KREDITKARTEN BESTELLINFO] #');

// Low Stock Emails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'WARNUNG: Lagermindestbestand unterschritten');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE', 'Lagerbestandsbericht: ');


