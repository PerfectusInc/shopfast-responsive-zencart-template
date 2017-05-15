<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

// office use only
  define('OFFICE_FROM','<strong>Fra:</strong>');
  define('OFFICE_EMAIL','<strong>E-post:</strong>');

  define('OFFICE_SENT_TO','<strong>Sendt til:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Til e-post:</strong>');

  define('OFFICE_USE','<strong>Kun til kontorbruk:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Brukernavn:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Brukers e-post:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Telefon:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Faks:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP-adresse:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Vertsadresse:</strong>');
  define('OFFICE_DATE_TIME','<strong>Dato og klokkeslett:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'Av');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Denne e-posten er sendt i henhold til gjeldende regler for e-postreklame, den ble sendt til deg fordi noen har benyttet seg av en tjeneste hos oss og oppgitt denne e-postadressen. Dersom du mener at du ikke skulle ha mottatt denne e-posten, vennligst gi beskjed til oss på %s');
  define('EMAIL_SPAM_DISCLAIMER','');
  define('EMAIL_FOOTER_COPYRIGHT','Kopirett ' . STORE_OWNER . '.');
  define('TEXT_UNSUBSCRIBE', "\n\nFor å melde deg av fremtidige nyhetsbrev og tilbud kan du klikke på følgende lenke: \n");
  
// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>VIKTIG:</strong> For å forhindre misbruk av våre tjenester, blir alle e-poster som blir sendt fra nettsidene våre loggført og innholdet blir lagret. Dersom du mener at du feilaktig har mottatt denne e-posten, vennligst gi oss beskjed på ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Denne meldingen inkluderes i alle e-poster sendt fra denne nettsiden:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[Opprett konto]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[Kopi av gavekort sendt fra kunde til kunde]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[Ny ordre]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[Tilleggsinfo for kredittkortordre] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Advarsel: Lav lagerbeholdning');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Rapport - Lav lagerbeholdning: ');
