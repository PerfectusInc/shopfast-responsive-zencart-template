<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 19690 2011-10-04 16:41:45Z drbyte $
 */

 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
// office use only
  define('OFFICE_FROM','<strong>Fr&aring;n:</strong>');
  define('OFFICE_EMAIL','<strong>E-post:</strong>');

  define('OFFICE_SENT_TO','<strong>Skickat till:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Till e-post:</strong>');

  define('OFFICE_USE','<strong>Butikens använding endast:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Användarnamn:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Användar e-post:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Mobiltelefon:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP Adress:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Webbhotelladress:</strong>');
  define('OFFICE_DATE_TIME','<strong>Datum och tid:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Denna e-postadress har vi fått från er eller någon av våra kunder. Om du anser att du kan fått detta meddelande av misstag, vänligen kontakta oss per e-post %s ');
  define('EMAIL_SPAM_DISCLAIMER','Detta e-postmeddelande skickas i enlighet hos den amerikanska CAN-SPAM lagen som trädde i kraft 2004-01-01. Förfrågningar om borttagning kan skickas till denna adress och kommer att uppfyllas och respekteras.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> \n Utveckling: <a href="http://www.frilansreklam.se" target="_blank">Signs FrilansReklam</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nFör att avregistrera dig från framtida nyhetsbrev och PR-utskick, klicka på följande länk: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>VIKTIGT:</strong> För din säkerhet och för att förhindra missbruk är all epost som skickas från denna webbplats loggat och innehåll registreras och tillgänglig för butikens ägare. Om du känner att du har fått detta meddelande av misstag, vänligen skicka ett meddelande per e-post till' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Detta meddelande följer med all e-post som skickas från denna webbplats:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[CREATE ACCOUNT]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[GV CUSTOMER SENT]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NEW ORDER]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[EXTRA CC ORDER info] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Varning: Lågt lagerstatus');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Lågt lagerstatus Rapport: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Disabled');
