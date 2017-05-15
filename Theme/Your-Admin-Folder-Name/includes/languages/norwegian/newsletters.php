<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 * @translation: Rune Rasmussen http://www.syntaxerror.no
 */

define('HEADING_TITLE', 'Nyhetsbrev og produktvarsler');

define('TABLE_HEADING_NEWSLETTERS', 'Nyhetsbrev');
define('TABLE_HEADING_SIZE', 'Størrelse');
define('TABLE_HEADING_MODULE', 'Modul');
define('TABLE_HEADING_SENT', 'Sendt');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_NEWSLETTER_MODULE', 'Modul:');
define('TEXT_NEWSLETTER_TITLE', 'Emne:');
define('TEXT_NEWSLETTER_CONTENT', 'Ren tekst <br />Innhold:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Rik tekst <br />Innhold:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Lagt til:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Sendt:');

define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette dette nyhetsbrevet?');

define('TEXT_PLEASE_WAIT', 'Vent.. sender e-post..<br /><br />Ikke forstyrr denne prosessen!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Ferdig med å sende e-post!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s e-poster sendt. <br /><br />Følg med i din e-postboks ('.EMAIL_FROM.') for:<UL><LI>a) tilbakesendte meldinger</LI><LI>b) e-post adresser som ikke lenger er i bruk</LI><LI>c) ønsker om sletting.</LI></UL>Sletting kan gjøres ved endringer i kundeoppføringer i kundemenyen.');

define('ERROR_NEWSLETTER_TITLE', 'Feil: Nyhetsbrevtittel påkrevd');
define('ERROR_NEWSLETTER_MODULE', 'Feil: Nyhetsbrevmodul påkrevd');
define('ERROR_PLEASE_SELECT_AUDIENCE','Feil: Velg hvem som skal motta dette nyhetsbrevet');