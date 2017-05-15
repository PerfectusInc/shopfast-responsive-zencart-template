<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Kolumn Rutor');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Rutans filnamn');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'V&auml;nster/H&ouml;ger Kolumn<br />Status');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Enkel kolumn<br />Status');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'V&auml;nster eller H&ouml;ger<br />Kolumn');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'V&auml;nster/H&ouml;ger Kolumn<br />Sortera efter');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Enkel kolumn<br />Sortera efter');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');

define('TEXT_INFO_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');
define('TEXT_INFO_LAYOUT_BOX','Vald ruta: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Rutans namn:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Placering: (Enkel kolumn ignorerar dessa inst&auml;llningar)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'V&auml;nster/H&ouml;ger Kolumn Status: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Enkel Kolumn Status: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','P&Aring;= 1 AV= 0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'V&Auml;nster/H&ouml;ger Kolumn Sorteringordning:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Enkel Kolumn Sorteringsordning:');
define('TEXT_INFO_INSERT_INTRO', 'Ange den nya rutans information');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna ruta?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Ny Ruta');
define('TEXT_INFO_HEADING_EDIT_BOX', '&Auml;ndra Ruta');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Radera Ruta');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Radera saknade rutor fr&aring;n utseende listan: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTERA: Detta tar inte bort filerna och du kan enkelt l&auml;gga tillbaka dem igen.<br /><br /><strong>Radera rutan: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','&Aring;terst&auml;ll alla rutors Sorteringsordningar f&ouml;r att matcha den f&ouml;rvalda Sorteringsordningen f&ouml;r utseendet: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Detta tar inte bort n&aring;gra rutor. Den s&auml;tter dem bara till den f&ouml;rvalda sorteringsordningen.');
define('TEXT_INFO_BOX_DETAILS','Rutans Detaljer: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Sidans Utseende');

define('TABLE_HEADING_LAYOUT_TITLE', 'Titel');
define('TABLE_HEADING_LAYOUT_VALUE', 'V&auml;rde');
define('TABLE_HEADING_ACTION', 'Funktion');


define('TEXT_MODULE_DIRECTORY', 'Sidans utseende katalog:');
define('TEXT_INFO_DATE_ADDED', 'Datum inlagd:');
define('TEXT_INFO_LAST_MODIFIED', 'Senast &auml;ndrad:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Layout');
define('BOX_LAYOUT_COLUMNS', 'Kolumn Kontroll');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>Saknas</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Har tagits bort fr&aring;n utseendet: ');
define('SUCCESS_BOX_RESET','&Aring;terst&auml;llning till det f&ouml;rvalda utseendet har utf&ouml;rts: ');
define('SUCCESS_BOX_UPDATED','Uppdatering av rutan har genomf&ouml;rts: ');

define('TEXT_ON',' P&Aring; ');
define('TEXT_OFF',' AV ');
define('TEXT_LEFT',' V&Auml;NSTER ');
define('TEXT_RIGHT',' H&Ouml;GER ');

?>