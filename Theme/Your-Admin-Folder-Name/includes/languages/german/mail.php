<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @translators: cyaneo/hugo13/wflohr/maleborg/webchills	http://www.zen-cart-pro.at
 * @version $Id: mail.php 627 2010-08-30 15:05:14Z webchills $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $
 */

//  $Id: mail.php 627 2010-08-30 15:05:14Z webchills $
//

define('HEADING_TITLE','Rundschreiben versenden');
define('TEXT_CUSTOMER','Kunde:');
define('TEXT_SUBJECT','Betreff:');
define('TEXT_FROM','Absender:');
define('TEXT_MESSAGE','Nur-Text <br />Nachricht:');
define('TEXT_MESSAGE_HTML', 'Rich-Text <br />Nachricht:');
define('TEXT_SELECT_CUSTOMER','Kunden auswählen');
define('TEXT_ALL_CUSTOMERS','Alle Kunden');
define('TEXT_NEWSLETTER_CUSTOMERS','An alle Newsletter Abonnementen');
define('TEXT_ATTACHMENTS_LIST', 'Ausgewählter Anhang: ');
define('TEXT_SELECT_ATTACHMENT', 'Anhang<br />auf dem Server: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD', 'Anhang<br />hochzuladen<br />&amp; anhängen: ');
define('TEXT_ATTACHMENTS_DIR', 'Ordner für Upload: ');
define('NOTICE_EMAIL_SENT_TO','HINWEIS: E-Mail wurde versendet an: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'HINWEIS: Die E-Mail konnte nicht an alle Empfänger verschickt werden: %s');
define('ERROR_NO_CUSTOMER_SELECTED','FEHLER: Es wurde kein Kunde ausgewählt.');
define('ERROR_NO_SUBJECT', 'FEHLER: Es wurde kein Betreff angegeben.');
define('ERROR_ATTACHMENTS', 'FEHLER: Sie können nicht beides - UPLOAD und HINZUFÜGEN - auswählen. Bitte wählen Sie nur eine von beiden Optionen.');
