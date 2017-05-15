<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 18698 2011-05-04 14:50:06Z wilt $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
// office use only
  define('OFFICE_FROM','Från:');
  define('OFFICE_EMAIL','Epost:');

  define('OFFICE_SENT_TO','Skickat Till:');
  define('OFFICE_EMAIL_TO','Epost:');
  define('OFFICE_USE','Affärsmässig användning endast:');
  define('OFFICE_LOGIN_NAME','Inloggning Namn:');
  define('OFFICE_LOGIN_EMAIL','Inloggning epost:');
  define('OFFICE_LOGIN_PHONE','<strong>Telefon:</strong>');
  define('OFFICE_IP_ADDRESS','IP Adress:');
  define('OFFICE_HOST_ADDRESS','Webbhotell Adress:');
  define('OFFICE_DATE_TIME','Datum & Tid:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Denna epost adress har vi fått av dig eller av någon som använt den i var webbshopp. Om du känner att detta mail har nått dig felaktigt, vänligen kontakta oss %s');
  define('EMAIL_SPAM_DISCLAIMER','Detta mail följer de bestämmelser som finns i bland annat US CAN-SPAM Lagen 2004-01-01. Borttagningsbegäran kan skickas till denna adress och det kommer att respekteras.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> <br />Översättning <a href="http://www.frilansreklam.se" target="_blank">Signs FrilansReklam</a> Support <a href="http://www.zencart.nu" target="_blank">www.zencart.nu</a>');
  
  
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[GV ADMIN SENT]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[DISCOUNT COUPONS]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ORDERS STATUS]');
  define('TEXT_UNSUBSCRIBE', "\n\nFör att avanmäla er för vårt nyhetsbrev och alla mail fr&ån oss, klicka på följande länk: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Avstängd');

  
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin varning: Ny administratör skapad.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Administrativ varning: En ny administratör (%s) har skapats till din butik av %s.' . "\n\n" . 'Om du eller någon annan godkänd administratör inte skapat denna, är det viktigt att du kontrollerar din säkerhet.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin varning: en administratör har raderats .');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administrativ varning: en administratör (%s) har raderats från butiken av %s.' . "\n\n" . 'Om du eller någon annan godkänd administratör inte skapat denna, är det viktigt att du kontrollerar din säkerhet.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin varning: Administratörens information har ändrats.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin varning: Administratören (%s) e-post adress har ändrats från (%s) till (%s) av (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin varning: Administratören (%s) användarnamn har ändrats från (%s) till (%s) av (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin varning: Administratören (%s) säkerhetsprofil har ändrats från (%s) till (%s) av (%s)');