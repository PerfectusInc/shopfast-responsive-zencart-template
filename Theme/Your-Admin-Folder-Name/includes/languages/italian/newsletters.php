<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Gestore Newsletter');

define('TABLE_HEADING_NEWSLETTERS', 'Newsletter');
define('TABLE_HEADING_SIZE', 'Dimensione');
define('TABLE_HEADING_MODULE', 'Modulo');
define('TABLE_HEADING_SENT', 'Inviata');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_NEWSLETTER_MODULE', 'Modulo:');
define('TEXT_NEWSLETTER_TITLE', 'Oggetto:');
define('TEXT_NEWSLETTER_CONTENT', 'Contenuto <br />Solo testo:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Contenuto <br />HTML:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Inserito il:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Inviata il:');

define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare questa newsletter?');

define('TEXT_PLEASE_WAIT', 'Attendere ... invio delle Email ..<br /><br />Non interrompere la lavorazione!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Invio Email terminato!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s Email lavorate. <br /><br />Controlla la tua posta ('.EMAIL_FROM.') per:<UL><LI>a) messaggi di ritorno</LI><LI>b) indirizzi Email non pi&ugrave; validi</LI><LI>c) richieste di cancellazione.</LI></UL>Le cancellazioni si eseguono dalle registrazioni Clienti nel menu Admin | Clienti.');

define('ERROR_NEWSLETTER_TITLE', 'Errore: inserire oggetto Newsletter');
define('ERROR_NEWSLETTER_MODULE', 'Errore: occorre modulo Newsletter');
define('ERROR_PLEASE_SELECT_AUDIENCE','Errore: selezionare un Gruppo cui inviare questa Newsletter');
?>