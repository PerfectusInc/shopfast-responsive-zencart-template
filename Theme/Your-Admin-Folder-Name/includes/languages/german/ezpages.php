<?php
/**
 * @package linkpoint_api_payment_module
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.at/license/2_0.txt GNU Public License V2.0
 * @translators: cyaneo/hugo13/wflohr/maleborg/webchills	http://www.zen-cart.at
 * @version $Id: ezpages.php 627 2010-08-30 15:05:14Z webchills $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $ 
 */

//  $Id: ezpages.php 627 2010-08-30 15:05:14Z webchills $
// $Id: ezpages.php 627 2010-08-30 15:05:14Z webchills $
//
define('HEADING_TITLE', 'EZ-Pages');
define('TABLE_HEADING_PAGES', 'Seitentitel');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_VSORT_ORDER', 'Sidebox Sortierung');
define('TABLE_HEADING_HSORT_ORDER', 'Fusszeile Sortierung');
define('TEXT_PAGES_TITLE', 'Seitentitel:');
define('TEXT_PAGES_HTML_TEXT', 'HTML Inhalt:');
define('TABLE_HEADING_DATE_ADDED', 'Erstellt am:');
define('TEXT_PAGES_STATUS_CHANGE', 'Status Änderung: %s');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher, dass Sie die Seite löschen wollen?');
define('SUCCESS_PAGE_INSERTED', 'Erfolg: Die Seite wurde eingefügt.');
define('SUCCESS_PAGE_UPDATED', 'Erfolg: Die Seite wurde geändert.');
define('SUCCESS_PAGE_REMOVED', 'Erfolg: Die Seite wurde gelöscht.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Erfolg: Der Status der Seite wurde geändert.');
define('ERROR_PAGE_TITLE_REQUIRED', 'FEHLER: Seitentitel ist notwendig.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'FEHLER: Unbekanntes Status Flag.');
define('ERROR_MULTIPLE_HTML_URL', 'FEHLER: Mehrere Optionen gewählt, obwohl pro Link nur eine zulässig ist  ...<br />Entweder: HTML Inhalt -oder- Interne Link URL -oder- Externe Link URL');
define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Kopfzeile:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sidebox:');
define('TABLE_HEADING_STATUS_FOOTER', 'Fusszeile:');
define('TABLE_HEADING_STATUS_TOC', 'Inhaltsverzeichnis:');
define('TABLE_HEADING_CHAPTER', 'Kapitel:');
define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Öffne neues Fenster:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Seite ist SSL:');
define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Zeige <b>%d</b> bis <b>%d</b> (von <b>%d</b> Seiten)');
define('IMAGE_NEW_PAGE', 'Neue Seite');
define('TEXT_INFO_PAGE_IMAGE', 'Bild');
define('TEXT_INFO_CURRENT_IMAGE', 'Aktuelles Bild:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Wählen Sie eine Seite ...');

define('TEXT_HEADER_SORT_ORDER', 'Sortierung:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Sortierung:');
define('TEXT_FOOTER_SORT_ORDER', 'Sortierung:');
define('TEXT_TOC_SORT_ORDER', 'Sortierung:');
define('TEXT_CHAPTER', 'Vor/Nach Kapitel:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Kapitel:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Die Header Sortierung muss grösser als 0 sein, damit die Seite angezeigt wird.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Die Sidebox Sortierung sollte grösser als 0 sein damit die Seite angezeigt wird, ansonsten wird angenommen, dass es sich um einen HTML Inhalt für besondere Verwendungszwecke handelt.');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Die Footer Sortierung muss grösser als 0 sein, damit die Seite angezeigt wird.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'Die Inhaltsverzeichnis Sortierung muss grösser als 0 sein, damit die Seite angezeigt wird.');
define('TEXT_CHAPTER_EXPLAIN', 'Kapitel werden nach der Inhaltsverzeichnis Sortierung im Inhaltsverzeichnis verlinkt und angezeigt.');

define('TEXT_ALT_URL', 'Interne Link URL:');
define('TEXT_ALT_URL_EXPLAIN', 'Wenn angegeben, wird der Inhalt der EZ-Page ignoriert und dieser Link verwendet<br />z.B. Reviews: index.php?main_page=reviews<br />Mein Konto: index.php?main_page=account<br /> zusätzlich wird SSL markiert');

define('TEXT_ALT_URL_EXTERNAL', 'Externe Link URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Wenn angegeben, wird der Inhalt der EZ-Page ignoriert und dieser Link verwendet<br />z.B. http://www.zen-cart.com');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Anzeige Sortierung: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Kapitel/Inhaltsverzeichnis');
define('TEXT_SORT_HEADER_TITLE', 'Kopfzeile');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sidebox');
define('TEXT_SORT_FOOTER_TITLE', 'Fusszeile');
define('TEXT_SORT_PAGE_TITLE', 'Seitentitel');
define('TEXT_SORT_PAGE_ID_TITLE', 'Seiten ID, Title');

define('TEXT_PAGE_TITLE', 'Titel:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>WARNUNG: Multiple Link Definition</strong>');
