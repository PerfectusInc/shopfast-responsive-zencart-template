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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Banner Hanterare');
define('TABLE_HEADING_BANNERS', 'Banner');
define('TABLE_HEADING_GROUPS', 'Grupp');
define('TABLE_HEADING_STATISTICS', 'Visad / Klick');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Nytt f&ouml;nster');
define('TABLE_HEADING_BANNER_ON_SSL', 'Visa SSL');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Sorterings<br />Ordning');
define('TEXT_BANNERS_TITLE', 'Banner Titel:');
define('TEXT_BANNERS_URL', 'Banner URL:');
define('TEXT_BANNERS_GROUP', 'Banner Grupp:');
define('TEXT_BANNERS_NEW_GROUP', ', eller ange en ny banner grupp nedan');
define('TEXT_BANNERS_IMAGE', 'Bild:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', eller ange en lokal fil nu');
define('TEXT_BANNERS_IMAGE_TARGET', 'Bild m&aring;l (Spara till):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>F&ouml;rslag p&aring; m&aring;lplats f&ouml;r bilden p&aring; servern:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>NOTERA: HTML banners registrerar inte antal klick p&aring; bannern</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Sorteringsordning - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>NOTERA: banners_box_all sidrutan visar banners efter deras definierade sorteringsordning</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Visas till:');
define('TEXT_BANNERS_OR_AT', ', eller p&aring;');
define('TEXT_BANNERS_IMPRESSIONS', 'intryck / visningar.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Startas visas:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Banner Notering:</b><ul><li>Anv&auml;nd bild eller HTML text f&ouml;r bannern - INTE b&aring;da.</li><li>HTML Text har prioritet &ouml;ver en bild</li><li>HTML Text registrerar inte antal klick, men antal visningar</li><li>Banners med absolut URL b&ouml;r inte visas p&aring; s&auml;kra servrar</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Bild Notering:</b><ul><li>Uppladdnings katalogen m&aring;ste ha korrekt (skriv) R&auml;ttigheter!</li><li>Fyll inte i \'Spara Till\' f&auml;ltet om du inte laddar upp till servern (dvs anv&auml;nder ni en lokal (p&aring; serversidan) bild).</li><li> \'Spara Till\' f&auml;ltet m&aring;ste vara en existerande katalog som avslutas med ett slut snedstreck (ex., banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Visas till Notering:</b><ul><li>Endast ett av de tv&aring; f&auml;lten skall fyllas i</li><li>Om bannern inte automatiskt skall sluta visas, l&auml;mna d&aring; dessa f&auml;lt tomma</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Startas visas Notering:</b><ul><li>Om startdatum har satts, B&ouml;rjar bannern visas det datumet.</li><li>Alla schemasatta banners visas som inaktiva tills det datumet som de &auml;r noterade f&ouml;r &auml;r aktuellt, de markeras d&aring; som aktiva.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Banner Status:');
define('TEXT_BANNERS_ACTIVE', 'Aktiv');
define('TEXT_BANNERS_NOT_ACTIVE', 'Ej Aktiv');
define('TEXT_INFO_BANNER_STATUS', '<strong>NOTERA:</strong> Banner status Uppdateras beroende p&aring; schemas&auml;ttning och intryck');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Banner Nytt F&ouml;nster');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>NOTERA:</strong> Bannern &Ouml;ppnar i nytt f&ouml;nster');
define('TEXT_BANNERS_ON_SSL', 'Banner p&aring; SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>NOTERA:</strong> Bannern kan visas p&aring; SSL utan problem');

define('TEXT_BANNERS_DATE_ADDED', 'Datum skapad:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Startar: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Visas till: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Visas till: <b>%s</b> intryck');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status &Auml;ndring: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Sista 3 Dagar');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner Visade');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banner Klick');

define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera bannern?');
define('TEXT_INFO_DELETE_IMAGE', 'Radera banner bild');

define('SUCCESS_BANNER_INSERTED', 'Lyckat: Bannern har skapats.');
define('SUCCESS_BANNER_UPDATED', 'Lyckat: Bannern har uppdaterats.');
define('SUCCESS_BANNER_REMOVED', 'Lyckat: Bannern har raderats.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Lyckat: Bannerns status &auml;r uppdaterat.');

define('ERROR_BANNER_TITLE_REQUIRED', 'FEL: Banner titel kr&auml;vs.');
define('ERROR_BANNER_GROUP_REQUIRED', 'FEL: Banner grupp kr&auml;vs.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'FEL: M&aring;lkatalogen finns inte: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'FEL: M&aring;lkatalogen &auml;r inte skrivbar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'FEL: bilden finns inte.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'FEL: bilden kan inte raderas.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'FEL: ok&auml;nd status flagga.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'FEL: Banner bild kr&auml;vs.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'FEL: Diagram katalogen finns inte. Skapa en diagram katalog exempel: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'FEL: Diagram katalogen &auml;r inte skrivbar. Den finns h&auml;r: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Visa SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Nytt f&ouml;nster');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','&Ouml;ppna i nytt f&ouml;nster - JA');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','&Ouml;ppna i nytt f&ouml;nster - NEJ');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Visa p&aring; s&auml;kra sidor - JA');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Visa p&aring; s&auml;kra sidor - NEJ');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Lyckat: statusen f&ouml;r bannern att &ouml;ppnas i nytt f&ouml;nster har &auml;ndrats.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Lyckat: statusen f&ouml;r bannern att visas p&aring; SSL har &auml;ndrats.');
// Added by Signs FrilansReklam
define('TABLE_HEADING_LANGUAGE', 'Spr&aring;k');
define('TEXT_BANNERS_LANGUAGE', 'Spr&aring;k:');
define('TABLE_HEADING_CATEGORIES', 'Kategorier');
define('TEXT_BANNERS_CATEGORIES', 'Kategorier:');
define('TABLE_HEADING_DESCRIPTION', 'Beskrivning');
define('TEXT_BANNERS_DESCRIPTION', 'Beskrivning:');