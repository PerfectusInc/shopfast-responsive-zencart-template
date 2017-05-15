<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 19286 2012-01-12 15:42:33Z LaVale $
 */
define('HEADING_TITLE', 'Login Admin');
define('HEADING_TITLE_EXPIRED', 'Login Admin - Password Scaduta');

define('TEXT_ADMIN_NAME', 'Username Admin: ');
define('TEXT_ADMIN_PASS', 'Password Admin: ');
define('TEXT_ADMIN_OLD_PASSWORD', 'Vecchia Password: ');
define('TEXT_ADMIN_NEW_PASSWORD', 'Nuova Password: ');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Conferma Password: ');

define('ERROR_WRONG_LOGIN', '<p>Hai sbagliato username e/o password, riprova!</p>');
define('ERROR_SECURITY_ERROR', 'Errore di sicurezza durante l\'accesso.');

define('TEXT_PASSWORD_FORGOTTEN', 'Rispedisci la password');

define('LOGIN_EXPIRY_NOTICE', 'Ricordarsi che dopo 15 minuti di inattivit&agrave;, verr&agrave; richiesto nuovamente di eseguire il login<br /><br />Nota: Tutte le password scadono ogni 90 giorni.');
define('ERROR_PASSWORD_EXPIRED', 'NOTA: La tua password &egrave; scaduta. Inserire una nuova password. La tua password <strong>deve contenere sia NUMERI che LETTERE e avere almeno 7 caratteri.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Per motivi di sicurezza la tua password temporanea deve essere cambiata. Inserire una nuova password.<br />La tua password <strong>deve contenere sia NUMERI che LETTERE e avere almeno 7 caratteri.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Avviso di Errore Login Admin');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Avviso Importante: Vi sono stati diversi tentativi errati di login con il tuo account amministrativo. Per protezione e per la sicurezza del sistema, dopo 6 tentativi l\'account verrà bloccato per almeno 30 minuti, durante i quali non sarà possibile effettuare il login anche ricordando la password. Ulteriori tentativi continueranno a bloccare l\'account per altri 30 minuti. Non sarà possibile resettare la password durante questo periodo. ' . "\n\nL\'ultimo tentativo di login proviene dall\'indirizzo IP: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Nota: La tua password &egrave; scaduta perch&egrave; il sito &egrave; stato modificato da non-SSL (meno sicuro) alla protezione SSL (pi&ugrave; sicuro). Modificare la password quando in SSL &egrave; un passaggio importante per aumentare la sicurezza. Verranno applicate le regole standard per la scadenza della password.');
