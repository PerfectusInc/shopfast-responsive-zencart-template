<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 19690 2011-10-04 16:41:45Z drbyte $
 */

// alleen t.b.v. intern gebruik
  define('OFFICE_FROM','<strong>Van:</strong>');
  define('OFFICE_EMAIL','<strong>E-mailadres afzender:</strong>');

  define('OFFICE_SENT_TO','<strong>Verstuurd naar:</strong>');
  define('OFFICE_EMAIL_TO','<strong>E-mailadres ontvanger:</strong>');

  define('OFFICE_USE','<strong>Alleen t.b.v. intern gebruik:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Gebruikersnaam:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>E-mailadres gebruiker:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Telefoon:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP adres:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Host adres:</strong>');
  define('OFFICE_DATE_TIME','<strong>Datum en tijd:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Dit e-mailbericht is uitsluitend bestemd voor geadresseerde(n). Indien u deze e-mail abusievelijk hebt ontvangen, brengt u ons dan op de hoogte door een e-mail te sturen aan %s');
  define('EMAIL_SPAM_DISCLAIMER','Wij verzenden geen ongevraagde elektronische post en wij leggen daartoe ook geen gegevensbestanden aan. Indien uw e-mailadres uit ons gegevensbestand moet worden verwijderd stuur dan uw verzoek als antwoord op deze e-mail. Uw verzoek wordt zo spoedig mogelijk, zonder verdere vragen, uitgevoerd conform uw wens.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nOm geen nieuwsbrieven en promotie mails te ontvangen in de toekomst kunt u op de volgende link klikken en u wordt van de lijst verwijdert: \n");

// email advisory t.b.v. alle e-mail die klanten genereren zoals vertel-een-vriend en cadeaubonnen
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>BELANGRIJK:</strong> Voor uw veiligheid en om misbruik te voorkomen worden alle e-mail\'s verstuurd via onze site gelogd en de inhoud ervan zal worden opgeslagen en voor ons leesbaar zijn. Indien u deze e-mail abusievelijk hebt ontvangen, brengt u ons dan op de hoogte door een e-mail te sturen aan ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// let op email advisory word toegevoegd aan alle e-mails die klanten genereren zoals vertel-een-vriend en cadeaubonnen
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Dit bericht zal worden toegevoegd aan alle e-mail verstuurd vanaf deze site:</strong>');


// additionele e-mail onderwerpen t.b.v. de beheerder
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[ACCOUNT AANMAKEN]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[CADEAUBON VERSTUURD DOOR KLANT]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NIEUWE BESTELLING]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[EXTRA info CC BESTELLING] Nr.');

// e-mails t.b.v. laag voorraadnivo
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Letop: Voorraadniveau laag');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Rapport laag voorraadniveau: ');
