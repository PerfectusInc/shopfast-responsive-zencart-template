<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 18784 2012-01-12 07:40:29Z LaVale $
 */

define('HEADING_TITLE', 'Rispedisci Password');

define('TEXT_ADMIN_EMAIL', 'Indirizzo Email Admin: ');

define('TEXT_BUTTON_REQUEST_RESET', 'richiedi reset');
define('TEXT_BUTTON_LOGIN', 'login');
define('TEXT_BUTTON_CANCEL', 'cancella');

define('ERROR_WRONG_EMAIL', '<p>Inserito un indirizzo Email errato.</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>Attenzione!</p>');
define('SUCCESS_PASSWORD_SENT', '<p>Fatto: abbiamo inviato una nuova Password al tuo indirizzo Email.<br />Premi "login" qui sotto per effettuare il login con la nuova password temporanea.</p>');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'La modifica da te chiesta');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Una nuova Password è stata chiesta da %s.' . "\n\n" . 'La tua nuova Password è:' . "\n\n   %s\n\nTi verrà chiesto di inserire una nuova password appena effettuato il login.\n\nQuesta password temporanea scade tra 24 ore.\n\n\n");

?>