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
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', TEXT_GV_NAME . ' Behandla K&ouml;');

define('TABLE_HEADING_CUSTOMERS', 'Kunder');
define('TABLE_HEADING_ORDERS_ID', 'Order-Nr.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' V&auml;rde');
define('TABLE_HEADING_DATE_PURCHASED', 'Datum Ink&ouml;pt');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Du har tidigare k&ouml;pt en ' . TEXT_GV_NAME . ' fr&aring;n var webbshop.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Av s&auml;kerhetssk&auml;l har inte denna omeddelbart aktiverats. ' .
                                          'Denna summa &auml;r nu dragen. Du kan nu bes&ouml;ka v&aring;r shop och kan d&auml;r ' . TEXT_GV_NAME . ' via epost skicka till n&aring;gon annan, eller anv&auml;nda den sj&auml;lv.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Denna ' . TEXT_GV_NAME . ' &auml;r v&auml;rd %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Tack f&ouml;r att du handlar hos oss!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' K&ouml;p');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Order #');

define('TEXT_EDIT_ORDER','&Auml;ndra Order ID# ');
define('TEXT_GV_NONE','Inga ' . TEXT_GV_NAME . ' att behandla');
?>