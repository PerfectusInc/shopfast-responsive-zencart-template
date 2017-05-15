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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', 'Confirmación de pedido');
define('EMAIL_TEXT_HEADER', 'Confirmación de pedido');
define('EMAIL_TEXT_FROM',' de ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING', '¡Muchas gracias por su confianza!');
define('EMAIL_DETAILS_FOLLOW','A continuación le presentamos los detalles de su pedido.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Pedido detallado:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Haga un click aquí para ver el pedido detallado');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del pedido:');
define('EMAIL_TEXT_PRODUCTS', 'Productos');
define('EMAIL_TEXT_SUBTOTAL', 'Subtotal:');
define('EMAIL_TEXT_TAX', 'Impuestos:  ');
define('EMAIL_TEXT_SHIPPING', 'Envío:    ');
define('EMAIL_TEXT_TOTAL', 'Total:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Dirección de Entrega');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Dirección de Facturación');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Método de pago');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'vía');

// suggest not using # vs No as some spam protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Núm.: ');
define('HEADING_ADDRESS_INFORMATION', 'Información de dirección');
define('HEADING_SHIPPING_METHOD', 'Método de envío');
?>