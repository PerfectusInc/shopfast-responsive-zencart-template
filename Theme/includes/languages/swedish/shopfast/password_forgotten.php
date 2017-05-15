<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('NAVBAR_TITLE_1', 'Logga in');
define('NAVBAR_TITLE_2', 'Gl&ouml;mt L&ouml;senord');

define('HEADING_TITLE', 'Gl&ouml;mt L&ouml;senord');

define('TEXT_MAIN', 'Skriv din e-postadress nedan och vi skickar ditt l&ouml;senord p&aring; nytt.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>FEL: E-postadressen fanns inte i v&aring;ra register; V&auml;nligen f&ouml;rs&ouml;k p&aring; nytt.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nytt Lösenord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Ett nytt lösenord begärdes från ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Ditt nya lösenord till \'' . STORE_NAME . '\' är:' . "\n\n" . '   %s' . "\n\nEfter att du loggat in med ditt nya lösenord, kan du ändra det i 'Mitt konto' sidan.");

define('SUCCESS_PASSWORD_SENT', 'Ett nytt l&ouml;senord har skickats till din e-postadress.');
?>