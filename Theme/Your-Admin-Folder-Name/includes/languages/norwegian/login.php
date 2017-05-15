<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 130 2012-10-12 15:24:49Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Innlogging');
define('HEADING_TITLE_EXPIRED', 'Innlogging - Passord har utløpt');

define('TEXT_ADMIN_NAME', 'Brukernavn: ');
define('TEXT_ADMIN_PASS', 'Passord: ');
define('TEXT_ADMIN_OLD_PASSWORD', 'Gammelt passord:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Nytt passord:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Bekreft nytt passord:');

define('ERROR_WRONG_LOGIN', '<p>Du skrev feil brukernavn og/eller passord.</p>');
define('ERROR_SECURITY_ERROR', 'Det oppstod en sikkerhetsfeil under forsøk på pålogging.');

define('TEXT_PASSWORD_FORGOTTEN', 'Glemt passord?');

define('LOGIN_EXPIRY_NOTICE', 'Vær oppmerksom på at du vil måtte logge inn på nytt om du har vært inaktiv i ' . SESSION_TIMEOUT_ADMIN/60 . ' minutter eller mer.<br /><br />Merk: Alle passord utløper etter 90 dager, du vil da bli bedt om å opprette et nytt.');
define('ERROR_PASSWORD_EXPIRED', 'MERK: Ditt passord har utløpt, du må nå opprette et nytt. Ditt passord <strong>må inneholde både nummer, bokstaver og minimum 7 tegn.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Av sikkerhetshensyn på ditt midlertidige passord endres. Vennligst velg et nytt passord.<br />Ditt passord <strong>må inneholde både nummer, bokstaver og minimum 7 tegn.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Feil ved innlogging til administrasjon');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Viktig informasjon: Det har vært flere feilede forsøk på innlogging til din adminsitratorkonto. Av sikkerhetshensyn vil kontoen bli låst etter 6 feilede forsøk på innlogging, for minimum 30 minutter, og man vil da ikke kunne logge inn selv om man husker passordet. Fortsatte feilede forsøk vil låse kontoen for nye 30 minutter. Man vil heller ikke kunne bruke funksjon for glemt passord i denne perioden. Beklager eventuelle ulemper som følge av dette.' . "\n\nSiste forsøk på pålogging var fra følgende IP-adresse: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Merk: Ditt passord har utløpt ettersom din side er endret fra å ikke bruke SSL (mindre sikkert), til å være SSL-sikret (mer sikkert). Endring av passord under SSL er et viktig steg for økt sikkerhet. Beklager eventuelle ulemper som følge av dette. Standard regler for utløp av passord gjelder.');
