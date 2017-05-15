<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @translator: cyaneo/hugo13/wflohr	http://www.zen-cart-pro.at	2007-01-03
 * @version $Id: newsletters.php 627 2010-08-30 15:05:14Z webchills $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $
 */

define('HEADING_TITLE','Newsletter & Artikelbenachrichtigungen Manager');
define('TABLE_HEADING_NEWSLETTERS','Newsletter');
define('TABLE_HEADING_SIZE','Größe');
define('TABLE_HEADING_MODULE','Module');
define('TABLE_HEADING_SENT','Gesendet');
define('TABLE_HEADING_STATUS','Status');
define('TABLE_HEADING_ACTION','Aktion');
define('TEXT_NEWSLETTER_MODULE','Module:');
define('TEXT_NEWSLETTER_TITLE','Titel des Newsletters:');
define('TEXT_NEWSLETTER_CONTENT','NUR-Text <br />Inhalt:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'HTML <br />Inhalt:');
define('TEXT_NEWSLETTER_DATE_ADDED','Erstellt am:');
define('TEXT_NEWSLETTER_DATE_SENT','Gesendet am:');
define('TEXT_INFO_DELETE_INTRO','Wollen Sie diesen Newsletter wirklich löschen?');
define('TEXT_PLEASE_WAIT','Bitte warten... E-Mails werden versendet ..<br><br>Bitte unterbrechen Sie diesen Prozess keinesfalls!');
define('TEXT_FINISHED_SENDING_EMAILS','E-Mail Versand abgeschlossen!');
define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s E-Mails versendet. <br /><br />Kontrollieren Sie die Mailbox ('.EMAIL_FROM.') für:<UL><LI>a) Zurückgesendete Nachrichten</LI><LI>b) E-Mail Adressen, die nicht mehr gültig sind</LI><LI>c) Bitten zur Entfernung aus dem Newsletterverteiler.</LI></UL>Die Listen können Sie in der Kundendatenbank im Admin | Kunden Menu bearbeiten.');
define('ERROR_NEWSLETTER_TITLE','FEHLER: Geben Sie bitte den Titel des Newsletters ein');
define('ERROR_NEWSLETTER_MODULE','FEHLER: Das Newsletter Modul wird dazu benötigt.');
define('ERROR_PLEASE_SELECT_AUDIENCE','FEHLER: Bitte wählen Sie die Zielgruppe, die den Newsletter erhalten soll');
