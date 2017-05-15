<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: ajeh  Mon Dec 3 19:32:36 2012 -0500 Modified in v1.5.2 $
 */

define('TOP_BAR_TITLE', 'Estadísticas');
define('HEADING_TITLE', 'Cupones de Descuento');
define('HEADING_TITLE_STATUS', 'Estado: ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nombre del Cupón');
define('TEXT_COUPON_ALL', 'Todos los Cupones');
define('TEXT_COUPON_ACTIVE', 'Cupones Activos');
define('TEXT_COUPON_INACTIVE', 'Cupones Inactivos');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_UNLIMITED', 'Ilimitado');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Envío gratis');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_RICH_TEXT_MESSAGE','Mensaje RTF:');
define('TEXT_SELECT_CUSTOMER', 'Seleccionar usuario');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A todos los suscritores del boletín');
define('TEXT_CONFIRM_DELETE', '¿Seguro que desea eliminar este cupón?');
define('TEXT_SEE_RESTRICT', 'Restricciones aplicadas');

define('TEXT_COUPON_ANNOUNCE','Nos satisface ofrecerle un cupón de nuestra tienda');

define('TEXT_TO_REDEEM', 'Puede canjear este cupón durante el pago. Sólo introduzca el código en el casillero asignado, y pulse sobre el botón de canjear.');
define('TEXT_IN_CASE', ' en caso que tenga algún problema. ');
define('TEXT_VOUCHER_IS', 'El código del cupón es ');
define('TEXT_REMEMBER', 'No pierda el código del cupón, asegúrese de guardar bien el código, de esta manera puede beneficiarse de esta oferta especial.');
define('TEXT_VISIT', 'Visítenos en ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' e introduzca el código ');
define('TEXT_COUPON_HELP_DATE', 'El cupón es válido entre %s y %s.');//STEVE didn't validate with <p><p>
define('HTML_COUPON_HELP_DATE', 'El cupón es válido entre %s y %s.');///STEVE didn't validate with <p><p>

define('TABLE_HEADING_ACTION', 'Acción');

define('CUSTOMER_ID', 'ID cliente');
define('CUSTOMER_NAME', 'Nombre del Cliente');
define('REDEEM_DATE', 'Fecha de Canje');
define('IP_ADDRESS', 'Dirección IP');

define('TEXT_REDEMPTIONS', 'Canjes');
define('TEXT_REDEMPTIONS_TOTAL', 'En total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'De este cliente');
define('TEXT_NO_FREE_SHIPPING', 'El envío no es gratis');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: Email enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No seleccionó ningún cliente.');
define('ERROR_NO_SUBJECT', 'Error: No se ha introducido ningún asunto.');

define('COUPON_NAME', 'Nombre del Cupón');
//define('COUPON_VALUE', 'Valor del Cupón);
define('COUPON_AMOUNT', 'Valor del cupón');
define('COUPON_CODE', 'Código del cupón');
define('COUPON_STARTDATE', 'Fecha de inicio');
define('COUPON_FINISHDATE', 'Fecha de caducidad');
define('COUPON_FREE_SHIP', 'Envío gratis');
define('COUPON_DESC', 'Descripción del cupón');
define('COUPON_MIN_ORDER', 'Mínimo del pedido para obtener cupón');
define('COUPON_USES_COUPON', 'Usos por cupón');
define('COUPON_USES_USER', 'Usos por cliente');
define('COUPON_PRODUCTS', 'Lista de productos válidos');
define('COUPON_CATEGORIES', 'Lista de categorías válidas');
define('VOUCHER_NUMBER_USED', 'Número usado');
define('DATE_CREATED', 'Fecha de creación');
define('DATE_MODIFIED', 'Fecha de modificación');
define('TEXT_HEADING_NEW_COUPON', 'Crear Cupón nuevo');
define('TEXT_NEW_INTRO', 'Por favor, introduzca la siguiente información para el nuevo cupón.<br>');
define('COUPON_ZONE_RESTRICTION', 'Cupón restringido a Zona: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'La restricción del cupón por Zona es opcional.');

define('ERROR_NO_COUPON_AMOUNT', 'No ingresó una cantidad para el cupón');
define('ERROR_NO_COUPON_NAME', 'No ingresó un nombre para el cupón ');
define('ERROR_COUPON_EXISTS', 'Ya existe un cupón con ese código');


define('COUPON_NAME_HELP', 'Nombre/descripción corta del cupón.');
define('COUPON_AMOUNT_HELP', 'El valor del descuento del cupón, puede ser una cantidad fija o un porcentaje (añada un % al final del número) de descuento.');
define('COUPON_CODE_HELP', 'Código/texto del cupón que el cliente tiene que usar en la página de métodos de pago. Puede dejarlo en blanco para que genere un código único automáticamente o puede usar su propio texto (único).');
define('COUPON_STARTDATE_HELP', 'Fecha desde la que el cupón será válido.');
define('COUPON_FINISHDATE_HELP', 'Fecha en la que caduca el cupón.');
define('COUPON_FREE_SHIP_HELP', 'El cupón permite el envío gratis en un pedido independientemente del valor del cupón, pero respeta el valor mínimo del pedido.');
define('COUPON_DESC_HELP', 'Descripción del cupón para el cliente, que aparece en los datos del historial de los pedidos.');
define('COUPON_MIN_ORDER_HELP', 'Valor mínimo del pedido para que el cupón sea válido.');
define('COUPON_USES_COUPON_HELP', 'Número máximo de veces que el cupón puede ser usado. Déjelo en blanco si no hay límite.');
define('COUPON_USES_USER_HELP', 'Número máximo de veces que un usuario puede usar un cupón. Déjelo en blanco si no hay límite.');
define('COUPON_PRODUCTS_HELP', 'Una lista de product_ids (IDs de productos) separados por comas para los que este cupón puede ser usado. Dejar en blanco si no hay restricciones.');
define('COUPON_CATEGORIES_HELP', 'Un lista de cPaths (rutas de categoría) separadas por coma para los que este cupón puede ser usado, dejar en blanco si no hay restricciones.');
define('COUPON_BUTTON_PREVIEW', 'Vista previa');
define('COUPON_BUTTON_CONFIRM', 'Confirmar');
define('COUPON_BUTTON_BACK', 'Volver');

define('COUPON_ACTIVE', 'Estatus');
define('COUPON_START_DATE', 'Inicio');
define('COUPON_EXPIRE_DATE', 'Caducidad');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'NO SE PUEDE deshabilitar el Cupón de Descuento. Este Cupón es el Cupón de Bienvenida<br /><br />Cambie el Cupón de Bienvenida antes de intentar borrarlo. Ver Admin->Configuración->Vales de Compra/Cupones');
define('SUCCESS_COUPON_DISABLED', '¡Éxito! El Cupón de Descuento ha sido deshabilitado ...');
define('TEXT_COUPON_NEW', 'Utilice un Código de Cupón de Descuento NUEVO:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '¡Aviso! Existe un duplicado de este Cupón ... la copia ha sido cancelado por el Código de Cupón: ');
define('TEXT_CONFIRM_COPY', '¿Está seguro de que quiere copiar este Cupón de Descuento a otro Cupón de Descuento?');
define('SUCCESS_COUPON_DUPLICATE', '¡Éxito! El Cupón de Descuento ha sido duplicado ...<br /><br />Revise el nombre del Cupón y las fechas ...');
?>