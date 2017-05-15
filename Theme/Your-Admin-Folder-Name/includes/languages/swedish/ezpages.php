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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Extra Sidor - EZ-Pages');
define('TABLE_HEADING_PAGES', 'Sidans Titel');
define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_VSORT_ORDER', 'Sidruta Sortera efter');
define('TABLE_HEADING_HSORT_ORDER', 'Sidfot Sortera efter');
define('TEXT_PAGES_TITLE', 'Sidans Titel:');
define('TEXT_PAGES_HTML_TEXT', 'HTML Inneh&aring;ll:');
define('TABLE_HEADING_DATE_ADDED', 'Datum inlagd:');
define('TEXT_PAGES_STATUS_CHANGE', 'Status &Auml;ndrad: %s');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna sida?');
define('SUCCESS_PAGE_INSERTED', 'Sidan har lagts till.');
define('SUCCESS_PAGE_UPDATED', 'Sidan har blivit uppdaterad.');
define('SUCCESS_PAGE_REMOVED', 'Sidan har raderats.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Sidans status har uppdaterats.');
define('ERROR_PAGE_TITLE_REQUIRED', 'FEL: En titel m&aring;ste anges.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'FEL: Ok&auml;nd status flagga.');
define('ERROR_MULTIPLE_HTML_URL', 'FEL: Du har definierat flera inst&auml;llningar n&auml;r du bara kan g&ouml;ra en f&ouml;r l&auml;nken ...<br />V&auml;lj antingen: HTML Inneh&aring;ll -eller- Intern L&auml;nk URL -eller- Extern L&auml;nk URL');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Sidhuvud:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sidruta:');
define('TABLE_HEADING_STATUS_FOOTER', 'Sidfot:');
define('TABLE_HEADING_STATUS_TOC', 'TOC:');
define('TABLE_HEADING_CHAPTER', 'Kapitel:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', '&Ouml;ppna nytt f&ouml;nster:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Sidan &auml;r SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> sidor)');
define('IMAGE_NEW_PAGE', 'Ny Sida');
define('TEXT_INFO_PAGE_IMAGE', 'Bild');
define('TEXT_INFO_CURRENT_IMAGE', 'Aktuell bild:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'V&auml;lj en sida ...');

define('TEXT_HEADER_SORT_ORDER', 'Ordning:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Ordning:');
define('TEXT_FOOTER_SORT_ORDER', 'Ordning:');
define('TEXT_TOC_SORT_ORDER', 'Ordning:');
define('TEXT_CHAPTER', 'F&ouml;reg/N&auml;sta Kapitel:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Kapitel:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Sidhuvud Sorteringsordning anv&auml;nds n&auml;r man genererar sidor f&ouml;r en enkelrad; Sorteringsordning M&aring;ste vara noll f&ouml;r att den skall visas i listan.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Sidrutans Sorteringsordning anv&auml;nds n&auml;r listan visar vertikala l&auml;nkar; Sorteringsordningen m&aring;ste vara st&ouml;rre &auml;n noll f&ouml;r att visas i den vertikala listan, annars kommer den att betraktas som HTML text f&ouml;r speciella &auml;ndamal');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Sidfotens Sorteringsordning anv&auml;nds n&auml;r den genererar sidor i en rads sidfot; Sorteringsordningen m&aring;ste vara st&ouml;rre &auml;n noll f&ouml;r att visa denna sida i listan');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC (Table of Contents) Sorteringsordning anv&auml;nds f&ouml;r att generera sidan som &auml;r skapad antingen som (sidhuvud/sidfot, etc) eller vertikalt, baserat p&aring; individuella behov; Sorteringsordningen m&aring;ste vara mer &auml;n noll f&ouml;r att sidan skall visas i listan');
define('TEXT_CHAPTER_EXPLAIN', 'Kapitel &auml;r anv&auml;nd med TOC (Table of Contents) Sorteringsordning f&ouml;r att visa F&ouml;reg&aring;ende/N&auml;sta. L&auml;nkar i TOC bestar av sidor som matchar kapitlen i listan, och visas i TOC Sorteringsordning');

define('TEXT_ALT_URL', 'Intern L&auml;nk URL:');
define('TEXT_ALT_URL_EXPLAIN', 'Om specifierad, sidans inneh&aring;ll kommer att ignoreras. INTERN alternativ URL kommer att anv&auml;ndas f&ouml;r l&auml;nken<br />Exempel p&aring; visning av omd&ouml;mmen: index.php?main_page=reviews<br />Exempel p&aring; Mitt Konto: index.php?main_page=account och m&auml;rkt som SSL');

define('TEXT_ALT_URL_EXTERNAL', 'Extern L&auml;nk URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Om specifierad, kommer sidans inneh&aring;ll att ignoreras. EXTERNAL alternativ URL kommer att anv&auml;ndas f&ouml;r l&auml;nken<br />Exempel f&ouml;r extern l&auml;nk: http://www.zencart-se.se');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Visa Sorteringsordning: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Kapitel/TOC');
define('TEXT_SORT_HEADER_TITLE', 'Sidhuvud');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sidruta');
define('TEXT_SORT_FOOTER_TITLE', 'Sidfot');
define('TEXT_SORT_PAGE_TITLE', 'Sid Titel');
define('TEXT_SORT_PAGE_ID_TITLE', 'Sid ID, Titel');

define('TEXT_PAGE_TITLE', 'Titel:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>VARNING: Flera l&auml;nk definieringar</strong>');
?>
