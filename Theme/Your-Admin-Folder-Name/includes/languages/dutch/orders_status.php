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
//  $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Status bestellingen');

define('TABLE_HEADING_ORDERS_STATUS', 'Status bestellingen');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Maak de noodzakelijke wijziging(en)');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Status bestellingen:');
define('TEXT_INFO_INSERT_INTRO', 'Voer de nieuwe status bestellingen in met alle relevante gegevens');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze status van de bestelling wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Nieuwe status bestellingen');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Wijzig status bestellingen');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Verwijder status bestellingen');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Foutmelding: de standaard "status bestelling" kan niet worden verwijderd. Stel een nieuwe standaard in en probeer het nogmaals.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Foutmelding: deze status bestelling" is op dit moment in gebruik bij bestellingen.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Foutmelding: deze status bestelling" is op dit moment in gebruik in de bestelhistorie.');
?>