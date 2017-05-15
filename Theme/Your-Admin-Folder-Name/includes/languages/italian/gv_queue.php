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

define('HEADING_TITLE', TEXT_GV_NAME . ' Coda Emissione');

define('TABLE_HEADING_CUSTOMERS', 'Clienti');
define('TABLE_HEADING_ORDERS_ID', 'Ordine-Num.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Valore');
define('TABLE_HEADING_DATE_PURCHASED', 'Data Acquisto');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Hai appena acquistato un ' . TEXT_GV_NAME . ' dal nostro negozio online.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Per motivi di sicurezza non ne hai avuto l\'immediata disponibilità. ' .
                                          'Adesso però questo ammontare è stato sbloccato. Per usufruirne vai al tuo Account e da lì decidi se accreditare il valore del ' . TEXT_GV_NAME . ' via email ad altri oppure se usarlo per te.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'I ' . TEXT_GV_NAME . ' da te acquistati valgono %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Grazie per aver acquistato da noi!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Acquisto');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Ordine #');

define('TEXT_EDIT_ORDER','Modifica Ordine ID# ');
define('TEXT_GV_NONE','No ' . TEXT_GV_NAME . ' da emettere');
?>