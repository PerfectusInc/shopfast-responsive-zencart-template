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

define('HEADING_TITLE', 'Statistiques des Bannières');

define('TABLE_HEADING_SOURCE', 'Source');
define('TABLE_HEADING_VIEWS', 'Affichages');
define('TABLE_HEADING_CLICKS', 'Clics');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s: Statistiques Quotidiennes Pour %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s: Statistiques Mensuelles Pour %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s: Statistiques Annuelles');

define('STATISTICS_TYPE_DAILY', 'Quotidiennes');
define('STATISTICS_TYPE_MONTHLY', 'Mensuelles');
define('STATISTICS_TYPE_YEARLY', 'Annuelles');

define('TITLE_TYPE', 'Type :');
define('TITLE_YEAR', 'Année :');
define('TITLE_MONTH', 'Mois :');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Erreur: Le répertoire des graphiques n\'existe pas. Veuillez créer un répertoire des graphiques du type : <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Erreur: Le répertoire des graphiques n\'est pas inscriptible. Il est situé à : <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>