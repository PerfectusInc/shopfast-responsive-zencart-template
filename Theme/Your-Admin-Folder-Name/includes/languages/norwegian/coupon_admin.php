<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: ajeh  Mon Dec 3 19:32:36 2012 -0500 Modified in v1.5.2 $
 */

define('TOP_BAR_TITLE', 'Statistikker');
define('HEADING_TITLE', 'Rabattkoder');
define('HEADING_TITLE_STATUS', 'Status: ');
define('TEXT_CUSTOMER', 'Kunder:');
define('TEXT_COUPON', 'Rabattnavn:');
define('TEXT_COUPON_ALL', 'Alle rabattkoder');
define('TEXT_COUPON_ACTIVE', 'Aktive rabattkoder');
define('TEXT_COUPON_INACTIVE', 'Inaktive rabattkoder');
define('TEXT_SUBJECT', 'Subjekt:');
define('TEXT_UNLIMITED', 'Ubegrenset');
define('TEXT_FROM', 'Fra:');
define('TEXT_FREE_SHIPPING', 'Gratis levering');
define('TEXT_MESSAGE', 'Melding:');
define('TEXT_RICH_TEXT_MESSAGE','Melding i rik tekst:');
define('TEXT_SELECT_CUSTOMER', 'Velg kunde');
define('TEXT_ALL_CUSTOMERS', 'Alle kunder');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Til alle nyhetsbrevabonnenter');
define('TEXT_CONFIRM_DELETE', 'Er du sikker p� at du �nsker � slette denne rabattkoden?');
define('TEXT_SEE_RESTRICT', 'Restriksjonsbruk');

define('TEXT_COUPON_ANNOUNCE','Vi har gleden av � tilby deg en rabattkode');

define('TEXT_TO_REDEEM', 'Du kan l�se inn denne rabattkoden ved kassen, bare skriv inn koden og klikk p� innl�sningsknappen.');
define('TEXT_IN_CASE', ' om noen problemer oppst�r. ');
define('TEXT_VOUCHER_IS', 'Rabattkoden er ');
define('TEXT_REMEMBER', 'Ikke mist rabattkoden, s�rg for � oppbevare koden sikkert s� du kan dra nytte av dette spesielle tilbudet.');
define('TEXT_VISIT', 'Bes�k oss p� %s');
define('TEXT_ENTER_CODE', ' og skriv inn koden ');
define('TEXT_COUPON_HELP_DATE', '<p>Rabattkoden er gyldig mellom %s og %s</p>');
define('HTML_COUPON_HELP_DATE', '<p>Rabattkoden er gyldig mellom %s og %s</p>');

define('TABLE_HEADING_ACTION', 'Valg');

define('CUSTOMER_ID', 'Kunde-ID');
define('CUSTOMER_NAME', 'Kundenavn');
define('REDEEM_DATE', 'Innl�st');
define('IP_ADDRESS', 'IP-adresse');

define('TEXT_REDEMPTIONS', 'Innl�sninger');
define('TEXT_REDEMPTIONS_TOTAL', 'Totalt');
define('TEXT_REDEMPTIONS_CUSTOMER', 'For denne kunden');
define('TEXT_NO_FREE_SHIPPING', 'Ingen gratis levering');

define('NOTICE_EMAIL_SENT_TO', 'Merk: E-post sendt til: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Feil: Ingen kunder har blitt valgt.');
define('ERROR_NO_SUBJECT', 'Feil: Inget emne er fylt inn.');

define('COUPON_NAME', 'Rabattnavn');
//define('COUPON_VALUE', 'Rabattverdi');
define('COUPON_AMOUNT', 'Rabattbel�p');
define('COUPON_CODE', 'Rabattkode');
define('COUPON_STARTDATE', 'Start dato');
define('COUPON_FINISHDATE', 'Slutt dato');
define('COUPON_FREE_SHIP', 'Gratis levering');
define('COUPON_DESC', 'Rabattbeskrivelse <br />(Kunde kan se)');
define('COUPON_MIN_ORDER', 'Minimum bestilling ved bruk av rabattkode');
define('COUPON_USES_COUPON', 'Brukes per rabattkode');
define('COUPON_USES_USER', 'Bruk pr kunde');
define('COUPON_PRODUCTS', 'Gyldig produktliste');
define('COUPON_CATEGORIES', 'Gyldig kategoriliste');
define('VOUCHER_NUMBER_USED', 'Brukte nummere');
define('DATE_CREATED', 'Lagt til');
define('DATE_MODIFIED', 'Sist endret');
define('TEXT_HEADING_NEW_COUPON', 'Opprett ny rabattkode');
define('TEXT_NEW_INTRO', 'Fyll ut f�lgende informasjon for ny rabattkode.<br />');
define('COUPON_ZONE_RESTRICTION', 'Rabattkode - sonerestriksjoner: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Sonerestriksjoner p� rabattkoder er valgfritt.');

define('ERROR_NO_COUPON_AMOUNT', 'Ingen rabattbel�p fylt inn');
define('ERROR_NO_COUPON_NAME', 'Ingen rabattnavn fylt inn');
define('ERROR_COUPON_EXISTS', 'En rabatt med den koden eksisterer allerede');


define('COUPON_NAME_HELP', 'Et kort navn for rabatten');
define('COUPON_AMOUNT_HELP', 'Verdien av rabatten for rabattkoden, enten fast eller en % prosentrabatt.');
define('COUPON_CODE_HELP', 'Du kan skrive inn din egen kode her, eller la st� tom for en auto generert.');
define('COUPON_STARTDATE_HELP', 'Dato som rabattkoden vil bli gyldig fra');
define('COUPON_FINISHDATE_HELP', 'Dato for n�r rabattkoden utg�r');
define('COUPON_FREE_SHIP_HELP', 'Rabattkoden gir gratis levering for en ordre. Merk: Dette overstyrer copuon_amont verdien, men tar hensyn til minimum ordreverdi');
define('COUPON_DESC_HELP', 'En beskrivelse av rabattkoden for kunden');
define('COUPON_MIN_ORDER_HELP', 'Minimum ordreverdi f�r rabattkoden blir gyldig');
define('COUPON_USES_COUPON_HELP', 'Maksimum antall ganger rabattkoden kan bli brukt. La det st� blankt hvis du �nsker ubegrenset.');
define('COUPON_USES_USER_HELP', 'Antall ganger en bruker kan bruke rabattkoden. La det st� blankt hvis du �nsker ubegrenset.');
define('COUPON_PRODUCTS_HELP', 'En kommaseparert liste over produkt-IDer som denne rabattkoden kan bli brukt med. La st� tomt om det ikke skal v�re restriksjoner.');
define('COUPON_CATEGORIES_HELP', 'En kommaseparert liste over cpaths denne rabattkoden kan bli brukt med. La st� tomt om det ikke skal v�re restriksjoner.');
define('COUPON_BUTTON_PREVIEW', 'Forh�ndsvisning');
define('COUPON_BUTTON_CONFIRM', 'Bekreft');
define('COUPON_BUTTON_BACK', 'Tilbake');

define('COUPON_ACTIVE', 'Status');
define('COUPON_START_DATE', 'Gyldig fra');
define('COUPON_EXPIRE_DATE', 'Utl�per');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Rabattkode kan IKKE deaktiveres. Denne rabattkoden er velkomstkoden<br /><br />Endre velkomstkoden f�r du fors�ker � slette den.');
define('SUCCESS_COUPON_DISABLED', 'Vellykket! Rabattkode ble satt til inaktiv...');
define('TEXT_COUPON_NEW', 'Bruk NY rabattkode:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'Advarsel! Duplikatkode finnes.. Kopiering avbrutt for rabattkode: ');
define('TEXT_CONFIRM_COPY', 'Er du sikker p� at du vil kopiere denne rabattkoden til en annen?');
define('SUCCESS_COUPON_DUPLICATE', 'Vellykket! Rabattkode ble kopiert ...<br /><br />Husk � sjekke navn og datoer...');
