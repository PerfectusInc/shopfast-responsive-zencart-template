<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z drbyte $
 */

define('HEADING_TITLE', 'Clientes');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_LASTNAME', 'Apellido');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Cuenta creada');
define('TABLE_HEADING_LOGIN', 'Último acceso');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_PRICING_GROUP', 'Precio por grupo');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorizado');
define('TABLE_HEADING_GV_AMOUNT', 'Saldo del Vale/Cupón');

define('TEXT_DATE_ACCOUNT_CREATED', 'Cuenta creada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Último acceso:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Número de accesos:');
define('TEXT_INFO_COUNTRY', 'País:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Número de comentarios:');
define('TEXT_DELETE_INTRO', '¿Seguro que desea eliminar este cliente?');
define('TEXT_DELETE_REVIEWS', 'Eliminar %s comentario(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Eliminar cliente');
define('TYPE_BELOW', 'Escribir aquí debajo');
define('PLEASE_SELECT', 'Elegir uno');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Número de pedidos:');
define('TEXT_INFO_LAST_ORDER','Último pedido:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Referencia del cliente<br />1er Cupón de descuento');
define('TEXT_INFO_GV_AMOUNT', 'Saldo del Vale/Cupón');

define('ENTRY_NONE', 'Ninguno');

define('TABLE_HEADING_COMPANY','Empresa');

define('CUSTOMERS_AUTHORIZATION', 'Estado de autorización de cliente');
define('CUSTOMERS_AUTHORIZATION_0', 'Aprobado');
define('CUSTOMERS_AUTHORIZATION_1', 'Pendiente de aprobación - Sin navegación');
define('CUSTOMERS_AUTHORIZATION_2', 'Pendiende de aprobación - Navegación sin precios');
define('CUSTOMERS_AUTHORIZATION_3', 'Pendiende de aprobación - Navegación con precios sin compra');
define('CUSTOMERS_AUTHORIZATION_4', 'Prohibido - Sin permiso para Entrar ni Comprar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Atención: Su tienda está configurada para "Aprobación sin navegación". Los clientes se han configurado a "Pendiente de aprobación - Sin navegación"');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Atención: Su tienda está configurada para "Aprobación sin precios". Los clientes se han configurado a "Pendiente de aprobación - Navegación sin precios"');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Su estado ha sido aprobado. Gracias por su confianza.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Estado Cliente Actualizado');

define('ADDRESS_BOOK_TITLE', 'Entradas de Agenda');
define('PRIMARY_ADDRESS', '(dirección por defecto)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTE:</strong></span> Hay un máximo de %s direcciónes permitidos en la agenda.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');
?>