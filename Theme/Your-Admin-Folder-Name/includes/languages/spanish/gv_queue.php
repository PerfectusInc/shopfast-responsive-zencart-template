<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
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

define('HEADING_TITLE', 'Lista de ' . TEXT_GV_NAME . ' Emitidos');

define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDERS_ID', 'Pedido-No.');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valor del ' . TEXT_GV_NAME);
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de Compra');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Usted compró recientemente un ' . TEXT_GV_NAME . ' de nuestra tienda online.');                
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Por razones de seguridad, no estuvo disponible inmediatamente para usted. ' .
                                          'De todas formas, esta cantidad ahora fue emitida. Ahora puede visitar nuestra tienda y enviar el valor del ' . TEXT_GV_NAME . ' por email alguien más, o usarlo usted.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'El ' . TEXT_GV_NAME . '(s) que usted compró vale %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', '!Gracias por comprar con nosotros!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', 'Compra de ' . TEXT_GV_NAME);
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Pedido #');

define('TEXT_EDIT_ORDER','Editar Pedido ID# ');
define('TEXT_GV_NONE','Ningún ' . TEXT_GV_NAME . ' a emitir');
?>