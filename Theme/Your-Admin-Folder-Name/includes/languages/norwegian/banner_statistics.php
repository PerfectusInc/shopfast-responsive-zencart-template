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
//  $Id: banner_statistics.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', 'Bannerstatestikker');

define('TABLE_HEADING_SOURCE', 'Kilde');
define('TABLE_HEADING_VIEWS', 'Visninger');
define('TABLE_HEADING_CLICKS', 'Klikk');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Daglig statestikk for %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Månedlig statestikk for %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Årlig statestikk');

define('STATISTICS_TYPE_DAILY', 'Daglig');
define('STATISTICS_TYPE_MONTHLY', 'Månedlig');
define('STATISTICS_TYPE_YEARLY', 'Årlig');

define('TITLE_TYPE', 'Type:');
define('TITLE_YEAR', 'År:');
define('TITLE_MONTH', 'Måned:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Feil: Grafmappe eksisterer ikke. Opprett en grafmappe: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Feil: Grafmappe er ikke skrivbar. Denne er plassert i: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
