<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Grupp Priss&auml;ttning');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Grupp Namn');
define('TABLE_HEADING_GROUP_AMOUNT', '% rabatt');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Ny Pris Grupp');
define('TEXT_HEADING_EDIT_PRICING_GROUP', '&Auml;ndra Pris Grupp');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Radera Pris Grupp');

define('TEXT_NEW_INTRO', 'Fyll i f&ouml;ljande information om gruppen');
define('TEXT_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');
define('TEXT_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna grupp?');
define('TEXT_DELETE_PRICING_GROUP', 'Radera Pris Grupp');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>VARNING:</b> Det finns %s kunder l&auml;nkade till denna kategori!');

define('TEXT_GROUP_PRICING_NAME', 'Grupp namn: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Procentuell rabatt: ');
define('TEXT_DATE_ADDED', 'Datum inlagd:');
define('TEXT_LAST_MODIFIED', 'Datum &auml;ndrad:');
define('TEXT_CUSTOMERS', 'Kunder i gruppen:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','FEL: Kunder finns i gruppen. Bekr&auml;fta att du vill radera gruppen och dess kunder.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTERA: Du har grupp pris definationer, Du har inte aktiverat grupp pris modulen i  Order Total funktionerna.<br />Ga till Admin->Moduler->Order Total->Medlems rabatt (ot_group_pricing) och installera/konfigurera modulen.');

?>