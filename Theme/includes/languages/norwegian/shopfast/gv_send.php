<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Send gavekort');
define('HEADING_TITLE_CONFIRM_SEND', 'Send gavekortbekreftelse');
define('HEADING_TITLE_COMPLETED', 'Gavekort sendt');
define('NAVBAR_TITLE', 'Send gavekort');
define('EMAIL_SUBJECT', 'Melding fra ' . STORE_NAME);
define('HEADING_TEXT','<br />Vennligst f�r inn detaljene for gavekortet du �nsker � sende. For mer informasjon, vennligst les v�r <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a><br />');
define('ENTRY_NAME', 'Mottakers navn:');
define('ENTRY_EMAIL', 'Mottakers e-postadresse:');
define('ENTRY_MESSAGE', 'Melding til mottaker:');
define('ENTRY_AMOUNT', 'Gavekortets verdi:');
define('ERROR_ENTRY_AMOUNT_CHECK', '&nbsp;&nbsp;<span class="errorText">Ugyldig verdi for gavekort</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '&nbsp;&nbsp;<span class="errorText">Ugyldig e-postadresse</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Er denne e-postadressen riktig? Vennligst pr�v igjen.');
define('MAIN_MESSAGE', 'Du har valgt � sende et gavekort verdt %s til %s med e-postadressen %s<br /><br />Meldingen i eposten er som f�lger:<br /><br />Kj�re %s<br /><br />Du har mottatt et gavekort med verdi %s fra %s');
define('SECONDARY_MESSAGE', 'Kj�re %s,<br /><br />' . 'Du har f�tt tilsendt et gavekort p�lydende %s av %s');
define('PERSONAL_MESSAGE', '%s sier');
define('TEXT_SUCCESS', 'Gratulerer, ditt gavekort har blitt sendt');
define('TEXT_SEND_ANOTHER', 'Vil du sende enda et gavekort?');
define('TEXT_AVAILABLE_BALANCE','N�v�rende balanse: ');

define('EMAIL_GV_TEXT_SUBJECT', 'En gave fra %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Gratulerer, du har mottatt et gavekort med verdi %s');
define('EMAIL_GV_FROM', 'Dette gavekortet ble sendt til deg fra %s');
define('EMAIL_GV_MESSAGE', 'sammen med f�lgende melding: ');
define('EMAIL_GV_SEND_TO', 'Hei, %s');
define('EMAIL_GV_REDEEM', 'For � bruke dette gavekortet, vennligst trykk p� lenken under. Vennligst skriv ned innl�sningskoden som er %s  i tilfelle det skulle oppst� problemer.');
define('EMAIL_GV_LINK', 'Trykk her for � bruke gavekortet');
define('EMAIL_GV_VISIT', ' eller bes�k ');
define('EMAIL_GV_ENTER', ' og skriv inn innl�sningskoden ');
define('EMAIL_GV_FIXED_FOOTER', 'Dersom du har problemer med � bruke gavekortet ved � bruke den automatiske lenken over, ' . "\n" .
                                'kan du ogs� skrive inn innl�sningskodenn n�r du g�r til kassen.');
define('EMAIL_GV_SHOP_FOOTER', '');
