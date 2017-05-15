<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Send nytt passord');

define('TEXT_ADMIN_EMAIL', 'Din e-postadresse: ');
define('TEXT_BUTTON_REQUEST_RESET', 'Send');
define('TEXT_BUTTON_LOGIN', 'Logg inn');
define('TEXT_BUTTON_CANCEL', 'Avbryt');

define('ERROR_WRONG_EMAIL', 'Du skrev inn feil e-postadresse.');
define('ERROR_WRONG_EMAIL_NULL', 'Godt fors�k ...');
define('MESSAGE_PASSWORD_SENT', 'Takk, dersom e-postadressen du fylte inn matcher en administratorkonto vil et nytt passord bli sendt til denne e-postadressen.<br />Less denne e-posten og klikk deretter p� \'Logg inn\' nedenfor, for � logge inn med ditt nye midlertidige passord.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Din bestillte endring');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Et nytt passord ble bestilt fra %s.' . "\n\n" . 'Ditt nye passord er:' . "\n\n   %s\n\nDu vil bli bedt om � velge et nytt passord f�r du kan logge inn.\n\nDette midlertidige passordet utl�per etter 24 timer.\n\n\n");

