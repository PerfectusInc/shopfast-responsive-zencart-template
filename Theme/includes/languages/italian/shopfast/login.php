<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 6352 2007-05-20 21:05:01Z sandrocarniel $
 */

define('NAVBAR_TITLE', 'Login');
define('HEADING_TITLE', 'Benvenuto, accedi con la tua identit&agrave;');

define('HEADING_NEW_CUSTOMER', 'Prima visita? Se vuoi fare acquisti iscriviti:');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Cliente nuovo');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'L\'iscrizione al sito ' . STORE_NAME . ' ti consente fra l\'altro di seguire l\'avanzamento degli ordini e di tenere un registro degli acquisti.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Hai un conto PayPal?<br />Vuoi pagare direttamente con la carta di credito?<br />Usa il bottone PayPal qui sotto per l\'opzione Express Checkout.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Oppure ...</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Crea un profilo Cliente in <strong>' . STORE_NAME . '</strong>, ti permetter&agrave; di acquistare velocemente ed in tutta sicurezza, di controllare l\'attuale ordine, rivedere nel futuro lo storico ed approfittare sempre dei benefici riservati ai clienti registrati.');

define('HEADING_RETURNING_CUSTOMER', 'Ritorni a visitarci? Inserisci i tuoi dati:');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Cliente registrato');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Per continuare, effettua il login al tuo account in <strong>' . STORE_NAME . '</strong>.');

define('TEXT_PASSWORD_FORGOTTEN', 'Password dimenticata?');

define('TEXT_LOGIN_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Errore: l\'indirizzo e-mail indicato non corrisponde alla password nel nostro archivio o viceversa. Riprova !');
define('TEXT_VISITORS_CART', '<strong>Nota:</strong> Il contenuto del &quot;Carrello Ospite&quot; verr&agrave; travasato nel &quot;Carrello Cliente&quot; dopo che avrai effettuato il login. <a href="javascript:session_win();">[Altre Info]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Informativa sulla Privacy</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">L\'iscrizione al sito implica l\'accettazione delle regole poste a tutela della tua Privacy. Esprimi il tuo consenso selezionando la casella sottostante. Leggi l\'informativa cliccando</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>qui</u></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Ho letto l\'informativa sulla Privacy e l\'approvo.</span>');

define('ERROR_SECURITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>C\'&egrave; stato un errore di sicurezza nel tentativo di accesso.');

define('TEXT_LOGIN_BANNED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Errore: Accesso negato!');
