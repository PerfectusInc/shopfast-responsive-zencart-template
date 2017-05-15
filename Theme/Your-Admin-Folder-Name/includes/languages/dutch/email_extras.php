<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 27 20:38:11 2013 -0400 Modified in v1.5.2 $
 */

// office use only
  define('OFFICE_FROM','Van:');
  define('OFFICE_EMAIL','E-mailadres afzender:');

  define('OFFICE_SENT_TO','Verstuurd naar:');
  define('OFFICE_EMAIL_TO','E-mailadres ontvanger:');
  define('OFFICE_USE','Alleen eigen gebruik:');
  define('OFFICE_LOGIN_NAME','Gebruikersnaam:');
  define('OFFICE_LOGIN_EMAIL','Aanmelden e-mail:');
  define('OFFICE_LOGIN_PHONE','<strong>Telefoon:</strong>');
  define('OFFICE_IP_ADDRESS','IP adres:');
  define('OFFICE_HOST_ADDRESS','Hostadres:');
  define('OFFICE_DATE_TIME','Datum en tijd:');

// e-mail disclaimer
  define('EMAIL_DISCLAIMER', "\n" . 'Dit e-mailadres is door u of één van onze klanten aan ons verstrekt. Indien u vindt dat u deze e-mail niet had willen of mogen ontvangen of heeft ontvangen als gevolg van een fout kunt u een e-mail sturen aan %s ');
  define('EMAIL_SPAM_DISCLAIMER','Indien uw e-mailadres uit ons bestand moet worden verwijderd ontvangen wij dit verzoek graag als reply op dit adres. Uw verzoek wordt zo spoedig mogelijk, zonder verdere vragen, in behandeling genomen en uitgevoerd conform uw wens.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[door ADMIN verstuurd]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[Kortingsbonnen]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[STATUS BESTELLINGEN]');
  define('TEXT_UNSUBSCRIBE', "\n\nOm u af te melden voor toekomstige nieuwsbrieven en andere promotionele activiteiten kunt u gebruik maken van de volgende link: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Uitgeschakeld');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin waarshuwing: Nieuwe admingebruiker toegevoegd.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Administratieve waarshuwing: Een nieuwe admingebruiker (%s) is TOEGEVOEGD aan uw winkel door %s.' . "\n\n" . 'Als u of een geautoriseerde beheerder deze verandering niet heeft doorgevoerd, is het raadzaam dat u de beveiliging van uw site onmiddellijk controleerd.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin waarshuwing: Een admingebruiker is verwijderd.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administratieve waarshuwing: Een admingebruiker (%s) is VERWIJDERD van uw winkel door %s.' . "\n\n" . 'Als u of een geautoriseerde beheerder deze verandering niet heeft doorgevoerd, is het raadzaam dat u de beveiliging van uw site onmiddellijk controleerd.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin waarshuwing: Admingebruikersdetails zijn gewijzigd.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin waarshuwing: Admingebruiker (%s) e-mailadres is gewijzigd van (%s) in (%s) door (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin waarshuwing: Admingebruiker (%s) gebruikersnaam is gewijzigd van (%s) in (%s) door (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin waarshuwing: Admingebruiker (%s) beveiligingsprofiel is gewijzigd van (%s) naar (%s) door (%s)');