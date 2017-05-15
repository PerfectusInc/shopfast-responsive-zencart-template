<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 94 2012-02-16 23:24:23Z syntaxerror.no $
 */

// office use only
  define('OFFICE_FROM','Fra:');
  define('OFFICE_EMAIL','E-post:');

  define('OFFICE_SENT_TO','Sendt til:');
  define('OFFICE_EMAIL_TO','E-post:');
  define('OFFICE_USE','Bare for kontorbruk:');
  define('OFFICE_LOGIN_NAME','Navn for innlogging:');
  define('OFFICE_LOGIN_EMAIL','E-post for innlogging:');
  define('OFFICE_LOGIN_PHONE','<strong>Telefon:</strong>');
  define('OFFICE_IP_ADDRESS','IP-adresse:');
  define('OFFICE_HOST_ADDRESS','Vertsadresse:');
  define('OFFICE_DATE_TIME','Dato og tid:');

// email disclaimer
  define('EMAIL_DISCLAIMER', "\n" . 'Denne e-posten er sendt i henhold til gjeldende regler for e-postreklame, den ble sendt til deg fordi noen har benyttet seg av en tjeneste hos oss og oppgitt denne e-postadressen. Dersom du mener at du ikke skulle ha mottatt denne e-posten, vennligst gi beskjed til oss på %s');
  define('EMAIL_SPAM_DISCLAIMER','');
  define('EMAIL_FOOTER_COPYRIGHT','Kopirett ' . STORE_OWNER . '.');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[Gavekort - admin sendt]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[Rabattkoder]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[Ordrestatus]');
  define('TEXT_UNSUBSCRIBE', "\n\nFor å avslutte abonnement på nyhetsbrev og reklame, klikk på følgende lenke: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Deaktivert');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Administratorvarsel: Ny administrator er lagt til.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Administratorvarsel: En ny adminsitratorbruker (%s) har blitt lagt til i din butikk av %s.' . "\n\n" . 'Om ikke du eller en autorisert administrator utførte denne endringen bør du snarest sjekke sikkerheten på din side.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Administratorvarsel: En administrator er slettet.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administratorvarsel: En adminsitratorbruker (%s) har blitt slettet fra din butikk av %s.' . "\n\n" . 'Om ikke du eller en autorisert administrator utførte denne endringen bør du snarest sjekke sikkerheten på din side.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Administratorvarsel: Administratordetaljer er endret.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Administratorvarsel: Administratorbrukers (%s) e-postadresse har blitt endret fra (%s) til (%s) av (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Administratorvarsel: Administratorbrukers (%s) brukernavn har blitt endret fra (%s) til (%s) av (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Administratorvarsel: Administratorbrukers (%s) sikkerhetsprofl har blitt endret fra (%s) til (%s) av (%s)');
