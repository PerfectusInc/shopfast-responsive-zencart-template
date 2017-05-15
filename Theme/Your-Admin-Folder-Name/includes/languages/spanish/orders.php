<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: orders.php 6214 2007-04-17 02:24:25Z ajeh $
 */

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_SEARCH', 'ID del Pedido:');
define('HEADING_TITLE_STATUS', 'Estado:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Busque el Nombre del Producto o <strong>ID:XX</strong> o Modelo ');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'Filtro de la Busqueda: ');
define('TABLE_HEADING_PAYMENT_METHOD', 'Pago<br />Envío');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','La dirección de facturación y de envío no coinciden ');

define('TABLE_HEADING_COMMENTS', 'Comentarios');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Total del Pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de Compra');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_TYPE', 'Tipo de pedido');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_QUANTITY', 'Cant.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (sin IVA)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (con IVA)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (sin IVA)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (con IVA)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente Notificado');
define('TABLE_HEADING_DATE_ADDED', 'Fecha Añadido');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'VENDIDO A:');
define('ENTRY_DELIVERY_TO', 'Entregar a:');
define('ENTRY_SHIP_TO', 'ENVIAR A:');
define('ENTRY_SHIPPING_ADDRESS', 'Dirección de Envío:');
define('ENTRY_BILLING_ADDRESS', 'Dirección de Facturación:');
define('ENTRY_PAYMENT_METHOD', 'Método de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta:');
define('ENTRY_CREDIT_CARD_OWNER', 'Nombre de la tarjeta:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Número de la tarjeta:');
define('ENTRY_CREDIT_CARD_CVV', 'Número CVV de la tarjeta:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'IVA:');
define('ENTRY_SHIPPING', 'Envío:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de compra:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', 'Fecha de la última actualización:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar Cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Incluir comentario en el email al cliente:');
define('ENTRY_PRINTABLE', 'Imprimir Pedido');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Eliminar Pedido');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Reponer cantidad del producto');
define('TEXT_DATE_ORDER_CREATED', 'Fecha de Creación:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Última Modificación:');
define('TEXT_INFO_PAYMENT_METHOD', 'Método de Pago:');
define('TEXT_PAID', 'Pagado');
define('TEXT_UNPAID', 'No pagado');

define('TEXT_ALL_ORDERS', 'Todos los Pedidos');
define('TEXT_NO_ORDER_HISTORY', 'Historial de pedidos no disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualización de su pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Pedido detallado:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del Pedido:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<strong>Comentario:</strong> ');
define('EMAIL_TEXT_STATUS_UPDATED', 'Su pedido ha sido actualizado al siguiente estado:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nuevo estado:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Por favor, conteste a este email si tiene alguna pregunta.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: El pedido no existe.');
define('SUCCESS_ORDER_UPDATED', 'Listo: El pedido ha sido actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: No hay nada para cambiar. El pedido no fue actualizado.');

define('ENTRY_ORDER_ID','Pedido nº. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATIS</span>');

define('TEXT_DOWNLOAD_TITLE', 'Estado de descarga del pedido');
define('TEXT_DOWNLOAD_STATUS', 'Estado');
define('TEXT_DOWNLOAD_FILENAME', 'Archivo');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Días');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Cuenta');

define('TEXT_DOWNLOAD_AVAILABLE', 'Disponible');
define('TEXT_DOWNLOAD_EXPIRED', 'Caducado');
define('TEXT_DOWNLOAD_MISSING', 'No está en el servidor');

define('IMAGE_ICON_STATUS_CURRENT', 'Estado - Disponible');
define('IMAGE_ICON_STATUS_EXPIRED', 'Estado - Caducado');
define('IMAGE_ICON_STATUS_MISSING', 'Estado - Perdido');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'La descarga se activó con éxito');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'La descarga se desactivó con éxito');
define('TEXT_MORE', '... más');

define('TEXT_INFO_IP_ADDRESS', 'Dirección IP: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Borra CVV from database');
define('TEXT_DELETE_CVV_REPLACEMENT','Borrado');
define('TEXT_MASK_CC_NUMBER','Esconder este número');

define('TEXT_INFO_EXPIRED_DATE', 'Fecha de Caducidad:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Cuenta de Caducidad:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Cliente<br />Comentarios');
define('TEXT_COMMENTS_YES', 'Comentarios de Cliente - SI');
define('TEXT_COMMENTS_NO', 'Comentarios de Cliente - NO');
?>