<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: ezpages.php 94 2012-02-16 23:24:23Z syntaxerror.no $
//
define('HEADING_TITLE', 'Ekstrasider');
define('TABLE_HEADING_PAGES', 'Sidetittel');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_VSORT_ORDER', 'Sidebokssortering');
define('TABLE_HEADING_HSORT_ORDER', 'Fotsortering');
define('TEXT_PAGES_TITLE', 'Sidetittel:');
define('TEXT_PAGES_HTML_TEXT', 'HTML-innhold:');
define('TABLE_HEADING_DATE_ADDED', 'Lagt til:');
define('TEXT_PAGES_STATUS_CHANGE', 'Status endret: %s');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikke rpå at du vil slette denne siden?');
define('SUCCESS_PAGE_INSERTED', 'Vellykket: Siden er lagt til.');
define('SUCCESS_PAGE_UPDATED', 'Vellykket: Siden har blitt oppdatert.');
define('SUCCESS_PAGE_REMOVED', 'Vellykket: Siden har blitt fjernet.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Vellykket: Ststus på siden har blitt oppdatert.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Feil: Sidetittel er påkrevd.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Feil: Ukjent statusflagg.');
define('ERROR_MULTIPLE_HTML_URL', 'Feil: Du har angitt flere innstillinger når bare en kan angis per lenke...<br />Du kan bare velge en av disse: HTML-innhold -eller- Intern lenke -eller- Ekstern lenke');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Hode:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sideboks:');
define('TABLE_HEADING_STATUS_FOOTER', 'Fot:');
define('TABLE_HEADING_STATUS_TOC', 'Indeks:');
define('TABLE_HEADING_CHAPTER', 'Kapittel:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Åpne nytt vindu:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Siden er SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> sider)');
define('IMAGE_NEW_PAGE', 'Ny side');
define('TEXT_INFO_PAGE_IMAGE', 'Bilde');
define('TEXT_INFO_CURRENT_IMAGE', 'Gjeldende bilde:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', '- velg en side...');

define('TEXT_HEADER_SORT_ORDER', 'Sortering:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Sortering:');
define('TEXT_FOOTER_SORT_ORDER', 'Sortering:');
define('TEXT_TOC_SORT_ORDER', 'Sortering:');
define('TEXT_CHAPTER', 'Forrige/Neste kapittel:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Kapittel:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Hodesortering brukt ved generering av sider enkel rad for hode. Sortering bør være høyere enn null for å aktivere denne siden i radlistingen');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Sidebokssortering blir brukt når sider listes i vertikale lenker. Sortering bør være høyere enn null for å aktivere denne siden i vertikal listing, ellers vil den bli regnet som HTML-tekst for spessielt bruk.');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Fotsortering brukt ved generering av sider i enkel fotrad. Sortering bør være høyere enn null for å aktivere denne siden i radlistingen.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'Indekssortering brukt ved generering av sider som er tilpasset som en enkel rad (hode/fot osv.), eller vertikalt etter individuelle behov. Sortering bør være høyere enn null for å aktivere denne siden i listingen.');
define('TEXT_CHAPTER_EXPLAIN', 'Kapittel blir brukt i indeksen for sortering på forrige/neste. Lenker i indeksen vil bestå av sider som passer dette kapittelnummer, og vil bli vist i indeksens sortering');

define('TEXT_ALT_URL', 'Intern lenke:');
define('TEXT_ALT_URL_EXPLAIN', 'Om spesifisert vil sideinnhold bli ignorert og denne interne adressen bli brukt for å lage lenken<br />Eksempel for omtaler: index.php?main_page=reviews<br />Eksempel for min konto: index.php?main_page=account og merk som SSL');

define('TEXT_ALT_URL_EXTERNAL', 'Ekstern lenke:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Om spesifisert vil sideinnhold bli ignorert og denne eksterne adressen bli brukt for å lage lenken<br />Eksempel på ekstern lenke: http://www.zen-cart.no');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Visningsrekkefølge: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Kapittel/Innhold');
define('TEXT_SORT_HEADER_TITLE', 'Hode');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sideboks');
define('TEXT_SORT_FOOTER_TITLE', 'Fot');
define('TEXT_SORT_PAGE_TITLE', 'Sidetittel');
define('TEXT_SORT_PAGE_ID_TITLE', 'Side-ID, tittel');

define('TEXT_PAGE_TITLE', 'Tittel:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>Advarsel: Flere lenkeangivelser</strong>');
