<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE_1', 'Logg inn');
define('NAVBAR_TITLE_2', 'Glemt passord');

define('HEADING_TITLE', 'Glemt passord');

define('TEXT_MAIN', 'Skriv inn e-postadressen din under, så vil vi sende deg en e-post som inneholder ditt nye passord.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil: E-postadressen ble ikke funnet i vår database, vennligst prøv igjen.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nytt passord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Et nytt passord ble bestilt fra ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Ditt nye passord til \'' . STORE_NAME . '\' er:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Et nytt passord har blitt sendt til din e-postadresse.');
