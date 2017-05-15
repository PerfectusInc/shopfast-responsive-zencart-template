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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Ofertas');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio del Producto/Especial/Rebaja');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentaje');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Caduca');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_SPECIALS_PRODUCT', 'Producto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Precio de Oferta:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Fecha de Caducidad:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Fecha de Disponibilidad:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notas sobre las ofertas:</b><ul><li>Puede ingresar un porcentaje en la celda "Precio de Oferta", por ejemplo: <b>20%</b></li><li>Si ingresa un nuevo precio, el separador decimal debe ser un \'.\' (punto-decimal), por ejemplo: <b>49.99</b></li><li>Deje la fecha de caducidad vacía para que no haya expiración</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Agregado el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_NEW_PRICE', 'Nuevo precio:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio original:');
define('TEXT_INFO_DISPLAY_PRICE', 'Mostrar precio:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible el:');
define('TEXT_INFO_EXPIRES_DATE', 'Caduca el:');
define('TEXT_INFO_STATUS_CHANGE', 'Último cambio de estado:');
define('TEXT_IMAGE_NONEXISTENT', 'La imagen no existe');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Eliminar oferta');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar el precio de oferta del producto?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Exito: Oferta pre-añadida ... actualice el precio y fecha por favor ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Aviso: ID del Product no especificado ... no se añadió nada ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Aviso: ID del Producto ya está en oferta ... no se añadió nada ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Aviso: ID del Producto es inválido ... no añadió nada ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Añade nueva Especial manualmente utilizando el ID de un Producto');
define('TEXT_INFO_PRE_ADD_INTRO', '<br />Está recomendado utilizar este método para bases de datos grandes, cuando la página tarda mucho tiempo en cargar y la selección de un producto del menú desplegable resulta demasiado difícil por culpa de la cantidad grande de productos disponibles.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Tecle el ID de Producto para ser pre-añadido: ');
define('TEXT_INFO_MANUAL', 'Añade nuevo Oferta manualmente utilizando el ID de un Producto');
?>