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
//  $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z Albigin $
//

define('HEADING_TITLE', 'Statistiche Banner');

define('TABLE_HEADING_SOURCE', 'Fonte');
define('TABLE_HEADING_VIEWS', 'Impressioni');
define('TABLE_HEADING_CLICKS', 'Click');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>I');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Stat. giornaliere per %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Stat. mensili per %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Stat. Annuali');

define('STATISTICS_TYPE_DAILY', 'Giornaliere');
define('STATISTICS_TYPE_MONTHLY', 'Mensili');
define('STATISTICS_TYPE_YEARLY', 'Annuali');

define('TITLE_TYPE', 'Tipo:');
define('TITLE_YEAR', 'Anno:');
define('TITLE_MONTH', 'Mese:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Errore: la cartella dei grafici NON esiste. Crearne una, esempio: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Errore: la cartella dei grafici NON &egrave; scrivibile. Si trova in: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

?>