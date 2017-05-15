<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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

define('HEADING_TITLE', 'Banner Statistieken');

define('TABLE_HEADING_SOURCE', 'Bron');
define('TABLE_HEADING_VIEWS', 'Views');
define('TABLE_HEADING_CLICKS', 'Klikken');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Dagelijkse statistieken voor %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Maandelijkse statistieken voor %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Jaarlijkse statistieken');

define('STATISTICS_TYPE_DAILY', 'Dagelijks');
define('STATISTICS_TYPE_MONTHLY', 'Maandelijks');
define('STATISTICS_TYPE_YEARLY', 'Jaarlijks');

define('TITLE_TYPE', 'Type:');
define('TITLE_YEAR', 'Jaar:');
define('TITLE_MONTH', 'Maand:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Foutmelding: Grafieken directory bestaat niet. Maak een grafieken directory. Voorbeeld: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Foutmelding: Grafieken directory is niet toegankelijk. Deze directory bevindt zich in: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>