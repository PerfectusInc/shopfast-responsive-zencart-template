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
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker.php 1105 2005-04-04 22:05:35Z birdbrain $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'REA Hanterare');
define('TABLE_HEADING_SALE_NAME', 'Rea Namn');
define('TABLE_HEADING_SALE_DEDUCTION', 'Avdrag');
define('TABLE_HEADING_SALE_DATE_START', 'Start datum');
define('TABLE_HEADING_SALE_DATE_END', 'Slut datum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');
define('TEXT_SALEMAKER_NAME', 'REA Namn:');
define('TEXT_SALEMAKER_DEDUCTION', 'Avdrag:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Typ:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Produkt prisniv&aring;:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Till&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Om en produkt &auml;r Erbjudande:');
define('TEXT_SALEMAKER_DATE_START', 'Start Datum:');
define('TEXT_SALEMAKER_DATE_END', 'Slut Datum:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Eller</b> eller markera den kategori denna rea skall g&auml;lla:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Klicka h&auml;r f&ouml;r tips om rean.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Mer Info)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Omedelbart');
define('TEXT_SALEMAKER_NEVER', 'Aldrig');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Markera h&auml;r om du vill att den skall g&auml;lla <b>alla products</b>:');
define('TEXT_SALEMAKER_TOP', 'Inledande Katalog');
define('TEXT_INFO_DATE_ADDED', 'Dateum Skapad:');
define('TEXT_INFO_DATE_MODIFIED', 'Senast &Auml;ndrad:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Senaste Status &Auml;ndringen:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Erbjudande Vilkor:');
define('TEXT_INFO_DEDUCTION', 'Avdrag:');
define('TEXT_INFO_PRICERANGE_FROM', 'Prisniv&aring;:');
define('TEXT_INFO_PRICERANGE_TO', ' till ');
define('TEXT_INFO_DATE_START', 'Startar:');
define('TEXT_INFO_DATE_END', 'Slutar:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ignorera Erbjudande pris - Ers&auml;tt Erbjudande priset');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ignorera Vilkor - L&auml;gg inte till om Erbjudande finns');
define('SPECIALS_CONDITION_DROPDOWN_2', 'L&auml;gg till f&ouml;r Erbjudande pris - Annars efter produkt pris');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Efter summa');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Procent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Nytt Pris');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Kopiera REA');
define('TEXT_INFO_COPY_INTRO', 'Ange ett namn f&ouml;r kopian av <br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Radera REA');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna rea?');
define('TEXT_MORE_INFO', '(Mer Info)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Varning : %s rean finns redan i denna kategori');
?>