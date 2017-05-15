<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mail.php 7197 2007-10-06 20:35:52Z sandrocarniel $
 */

define('HEADING_TITLE', 'Invia Email ai Clienti');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Oggetto:');
define('TEXT_FROM', 'da:');
define('TEXT_MESSAGE', 'Messaggio <br />solo Testo:');
define('TEXT_MESSAGE_HTML','Messaggio <br />HTML:');
define('TEXT_SELECT_CUSTOMER', 'Seleziona Cliente');
define('TEXT_ALL_CUSTOMERS', 'Tutti i Clienti');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A tutti gli abbonati alla Newsletter');
define('TEXT_ATTACHMENTS_LIST','Allegato Selezionato: ');
define('TEXT_SELECT_ATTACHMENT','Allegato<br />sul server: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Allegato<br />da caricare<br />&amp; allegare: ');
define('TEXT_ATTACHMENTS_DIR','Cartella per upload: ');

define('NOTICE_EMAIL_SENT_TO', 'Nota bene - Email inviata a: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Nota: FALLITO invio Email ai destinatari: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Errore: devi selezionare un Cliente.');
define('ERROR_NO_SUBJECT', 'Errore: devi inserire un Oggetto.');
define('ERROR_ATTACHMENTS', 'Errore: non si possono selezionare allegati diversi allo stesso tempo per Upload e Aggiungi. Sceglierne uno solo.');

?>