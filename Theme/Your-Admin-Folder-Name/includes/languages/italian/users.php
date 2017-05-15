<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: users.php 18773 2012-01-12 01:00:21Z LaVale $
 */

define('HEADING_TITLE', 'Utenti Amministratore');

define('IMAGE_ADD_USER', 'Aggiungi Utente');
define('IMAGE_RESET_PWD', 'Reset Password');

define('TEXT_ID', 'ID');
define('TEXT_NAME', 'Nome');
define('TEXT_EMAIL', 'Email');
define('TEXT_PROFILE', 'Profilo');
define('TEXT_PASSWORD', 'Password');
define('TEXT_CONFIRM_PASSWORD', 'Conferma Password');
define('TEXT_NO_USERS_FOUND', 'Nessun utente admin trovato');
define('TEXT_CONFIRM_DELETE', 'Richiesta Eliminazione. Confermare: ');

define('ERROR_NO_USER_DEFINED', 'L\'opzione richiesta non pu&ograve; essere intrapresa senza specificare un utente');
define('ERROR_USER_MUST_HAVE_PROFILE', 'Utenti devono essere associati ad un profilo');
define('ERROR_DUPLICATE_USER', 'Esiste gi&agrave; un utente amministratore con questo nome. Scegliere un altro nome.');
define('ERROR_ADMIN_NAME_TOO_SHORT', 'Il Nome Amministratore deve avere almeno %s caratteri');
define('ERROR_PASSWORD_TOO_SHORT', 'La Password deve avere almeno %s caratteri');
define('SUCCESS_NEW_USER_ADDED', 'Aggiunto nuovo utente');
define('SUCCESS_USER_DETAILS_UPDATED', 'Dettagli Utente aggiornati');
define('SUCCESS_PASSWORD_UPDATED', 'Password aggiornata');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', 'L\'indirizzo email specificato contiene caratteri non validi.');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', 'L\'username amministratore inserito contiene caratteri non validi.');
