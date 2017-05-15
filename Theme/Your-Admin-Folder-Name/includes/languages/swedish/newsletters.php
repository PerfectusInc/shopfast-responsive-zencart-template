<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Nyhetsbrev och Produkt informations Hanterare');

define('TABLE_HEADING_NEWSLETTERS', 'Nyhetsbrev');
define('TABLE_HEADING_SIZE', 'Storlek');
define('TABLE_HEADING_MODULE', 'Modul');
define('TABLE_HEADING_SENT', 'Skickat');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_NEWSLETTER_MODULE', 'Modul:');
define('TEXT_NEWSLETTER_TITLE', 'Rubrik:');
define('TEXT_NEWSLETTER_CONTENT', 'Text-Endast <br />Inneh&aring;ll:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Rik Text <br />Inneh&aring;ll:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Datum Skapad:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Datum Skickad:');

define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera nyhetsbrevet?');

define('TEXT_PLEASE_WAIT', 'V&auml;nta .. Skickar Epost ..<br /><br />Avbryt inte denna process!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Epost &auml;r skickat!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s epost skickat. <br /><br />Kontrollera er epost ('.EMAIL_FROM.') f&ouml;r:<UL><LI>a) automatsvars epost</LI><LI>b) epost som &auml;r felaktiga</LI><LI>c) borttagning fr&aring;n listan meddelanden.</LI></UL>Borttagning kan g&ouml;ras i administrationen | Kund Menyn.');

define('ERROR_NEWSLETTER_TITLE', 'FEL: Nyhetsbrevs rubrik kr&auml;vs');
define('ERROR_NEWSLETTER_MODULE', 'FEL: Nyhetsbrevs modul kr&auml;vs');
define('ERROR_PLEASE_SELECT_AUDIENCE','FEL: V&auml;lj m&aring;lgrupp f&ouml;r detta nyhetsbrev');
?>