<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Jul 16 14:10:24 2012 -0400 Modified in v1.5.1 $
 */

define('HEADING_TITLE', 'Aanmelden Admin Winkel');
define('HEADING_TITLE_EXPIRED', 'Admin login - wachtwoord verlopen');

define('TEXT_ADMIN_NAME', 'Admin gebruikersnaam: ');
define('TEXT_ADMIN_PASS', 'Admin wachtwoord: ');
define('TEXT_ADMIN_OLD_PASSWORD', 'Oude wachtwoord:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Nieuwe wachtwoord:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Bevestig wachtwoord');

define('ERROR_WRONG_LOGIN', 'De verkeerde gebruikersnaam of het verkeerde wachtwoord is ingevuld.');
define('ERROR_SECURITY_ERROR', 'Er heeft zich een veiligheidsfout voorgedaan toen er werd geprobeerd in te loggen.');

define('TEXT_PASSWORD_FORGOTTEN', 'Wachtwoord vergeten');

define('LOGIN_EXPIRY_NOTICE', 'Houdt u er rekening mee dat na 15 minuten inactiviteit, u verplicht opnieuw moet inloggen.<br /><br />Let op: Alle wachtwoorden verlopen elke 90 dagen.');
define('ERROR_PASSWORD_EXPIRED', 'LET OP: Uw wachtwoord is verlopen. Selecteer een nieuw wachtwoord. Uw wachtwoord <strong> moet zowel cijfers als letters bevatten en uit minimaal 7 tekens bestaan.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Om veiligheidsredenen, dient uw tijdelijke wachtwoord te worden gewijzigd. Selecteer een nieuw wachtwoord.<br />Uw wachtwoord <strong> moet zowel cijfers als letters bevatten en uit minimaal 7 tekens bestaan.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Admin inlog foutmededeling');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Belangrijke mededeling: Er zijn meerdere mislukte inlog pogingen op uw administratieve account geweest. Voor uw veiligheid en voor de beveiliging van het systeem, wordt na 6 mislukte loginpogingen uw admin geblokkeerd voor een minimum van 30 minuten, waarbij u niet in staat zal zijn om in te loggen, zelfs als u uw wachtwoord weer herinnert. Bij blijvende mislukte pogingen om in te loggen blijft de admin geblokkeerd voor nog eens 30 minuten. U zult niet in staat zijn om het wachtwoord te resetten tijdens deze periode. Excuses voor het ongemak.' . "\n\nDe laatste login poging was van dit IP-adres: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Let op: Uw wachtwoord is verlopen, omdat de site is veranderd van non-SSL (minder veilig) in een SSL-beveiligde site(veiliger). Het wijzigen van uw wachtwoord onder SSL is een belangrijke stap om meer veiligheid te waarborgen. Sorry voor het ongemak. De Standaard regels voor het verstrijken van het wachtwoord zijn van toepassing.');
