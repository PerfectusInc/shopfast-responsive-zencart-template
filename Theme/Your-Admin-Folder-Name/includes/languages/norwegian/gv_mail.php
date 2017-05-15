<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: gv_mail.php 94 2012-02-16 23:24:23Z syntaxerror.no $
//

define('HEADING_TITLE', 'Send gavekort til kunder');

define('TEXT_CUSTOMER', 'Kunde:');
define('TEXT_SUBJECT', 'Emne:');
define('TEXT_FROM', 'Fra:');
define('TEXT_TO', 'E-post til:');
define('TEXT_AMOUNT', 'Beløp');
define('TEXT_MESSAGE', 'Ren tekst <br />Melding:');
define('TEXT_RICH_TEXT_MESSAGE', 'Rik tekst <br />Melding:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Bruk dette for å sende enslige e-post, ellers bruk nedtrekksmenyen ovenfor.</span>');
define('TEXT_SELECT_CUSTOMER', 'Velg kunde');
define('TEXT_ALL_CUSTOMERS', 'Alle kunder');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Til alle nyhetsbrevabonnenter');

define('NOTICE_EMAIL_SENT_TO', 'Merk: E-post sendt til: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Feil: Ingen kunde har blitt valgt.');
define('ERROR_NO_AMOUNT_SELECTED', 'Feil: Inget beløp har blitt valgt.');
define('ERROR_NO_SUBJECT', 'Feil: Inget emne har blitt fylt inn.');
define('ERROR_GV_AMOUNT', 'Angi beløp som en verdi uten symboler. Eksempel: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Vi har gleden av å tilby deg et gavekort.</font>');
define('TEXT_GV_WORTH', 'Gavekortet er verdt ');
define('TEXT_TO_REDEEM', 'Klikk på lenken nedenfor for å løse inn dette gavekortet. Du bør også skrive ned innløsningskoden');
define('TEXT_WHICH_IS', ' som er');
define('TEXT_IN_CASE', ' i tilfelle det oppstår noen problemer.');
define('TEXT_OR_VISIT', 'Du kan også besøke ');
define('TEXT_ENTER_CODE', ' og skriv inn koden når du kommer til kassen.');
define('TEXT_CLICK_TO_REDEEM','Klikk her for å løse inn');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Du har nylig kjøpt et gavekort fra siden vår. Av sikkerhetsgrunner ble beløpet på gavekortet ikke kredidert deg med det samme, men butikkeier har nå frigitt dette beløpet til deg.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Verdien av  gavekortet var %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Du kan nå besøke siden vår, logge inn og sende gavekortbeløpet til den du vil.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

