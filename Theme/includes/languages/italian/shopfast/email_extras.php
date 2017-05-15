<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 7161 2007-10-02 10:58:34Z sandrocarniel $
 */

// office use only
  define('OFFICE_FROM','<strong>Da:</strong>');
  define('OFFICE_EMAIL','<strong>E-mail:</strong>');

  define('OFFICE_SENT_TO','<strong>Inviata a:</strong>');
  define('OFFICE_EMAIL_TO','<strong>E-mail:</strong>');

  define('OFFICE_USE','<strong>Per uso interno:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Nome di Login:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>E-mail di Login:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Telefono:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>Indirizzo IP:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Indirizzo Host:</strong>');
  define('OFFICE_DATE_TIME','<strong>Data e ora:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Questo indirizzo e-mail ci è stato fornito da un nostro cliente. Se ritieni che questo messaggio ti sia giunto per errore, ti preghiamo di inviare una segnalazione mail a %s ');
  define('EMAIL_SPAM_DISCLAIMER','Email inviata in ossequio alle vigenti norme e disposizioni in materia, non desiderando più ricevere email è possibile richiedere la rimozione a questo indirizzo.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. E-commerce by <a href="http://www.zencart-italia.it" target="_blank">Zen Cart Italia</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nPer rinunciare a future newsletter o mailing promozionali, semplicemente digitare questo link: \n");


// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANTE - </strong> Per la tua tutela e per prevenire abusi, tutte le e-mail spedite a mezzo di questo sito sono registrate e il webmaster può visualizzarne il contenuto. Se ritieni che questo messaggio ti sia giunto per errore, ti preghiamo di inviare una segnalazione via mail a ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Nelle mail inviate dal Sito &egrave; inserito questo messaggio:<br><br></strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[CREA ACCOUNT]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[GV CUSTOMER SENT]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NUOVO ORDINE]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[EXTRA CC ORDER INFO] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Avviso: in esaurimento');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Rapporto livello scorte basso: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Disabilitato');
