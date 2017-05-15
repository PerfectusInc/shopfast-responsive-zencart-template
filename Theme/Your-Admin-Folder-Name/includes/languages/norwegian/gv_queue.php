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
//  $Id: gv_queue.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', TEXT_GV_NAME . ' Frigivelseskø');

define('TABLE_HEADING_CUSTOMERS', 'Kunder');
define('TABLE_HEADING_ORDERS_ID', 'Ordrenummer:');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Verdi');
define('TABLE_HEADING_DATE_PURCHASED', 'Kjøpt');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Du kjøpt nylig et ' . TEXT_GV_NAME . ' fra vår internettbutikk.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Av sikkerhetsgrunner ble ikke dette straks tilgjengelig for deg. ' .
                                          'Men dette beløpet har nå blitt frigjort. Du kan nå besøke vår butikk og sende verdien av ' . TEXT_GV_NAME . ' via e-post til noen en andre, eller bruke det selv.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', '' . TEXT_GV_NAME . '(r) du har kjøpt er verdt %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Takk for at du handlet hos oss!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Kjøp');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Ordrenummer:');

define('TEXT_EDIT_ORDER','Endre ordreIDnr. ');
define('TEXT_GV_NONE','Ingen ' . TEXT_GV_NAME . ' å frigi');
