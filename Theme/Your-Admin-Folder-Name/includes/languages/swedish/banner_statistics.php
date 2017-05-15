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
//  $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z birdbrain $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Reklam Statistik');

define('TABLE_HEADING_SOURCE', 'K&auml;lla');
define('TABLE_HEADING_VIEWS', 'Visningar');
define('TABLE_HEADING_CLICKS', 'Klickningar');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Dag statistik f&ouml;r %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s M&aring;nad statistik f&ouml;r %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s &Aring;rlig statistik');

define('STATISTICS_TYPE_DAILY', 'Dag');
define('STATISTICS_TYPE_MONTHLY', 'M&aring;nad');
define('STATISTICS_TYPE_YEARLY', '&Aring;r');

define('TITLE_TYPE', 'Typ:');
define('TITLE_YEAR', '&Aring;r:');
define('TITLE_MONTH', 'M&aring;nad:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'FEL: Diagram Katalog finns inte. Skapa en katalog enligt exempel: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'FEL: Diagram Katalogen &auml;r inte skrivbar. Den finns h&auml;r: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>