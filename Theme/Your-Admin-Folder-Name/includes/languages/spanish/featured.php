<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Productos Destacados');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio/Especial/Oferta de productos');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentaje');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Caduca');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_FEATURED_PRODUCT', 'Producto:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Fecha de caducidad:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Fecha de disponibilidad:');

define('TEXT_INFO_DATE_ADDED', 'Añadido el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_NEW_PRICE', 'Nuevo precio:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio original:');
define('TEXT_INFO_PERCENTAGE', 'Porcentaje:');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible el:');
define('TEXT_INFO_EXPIRES_DATE', 'Caduca en:');
define('TEXT_INFO_STATUS_CHANGE', 'Cambio de estado:');
define('TEXT_IMAGE_NONEXISTENT', 'No existe el imagen');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Borrar destacado');
define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de que desa borrar este producto destacado?');

define('SUCCESS_FEATURED_PRE_ADD', 'Éxito: Destacados pre-añadidos ... actualice las fechas por favor ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Aviso: No se especificó el ID del producto ... no se añadió nada ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Aviso: Este ID de producto ya está en Destacados ... no se añadió nada ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Aviso: El ID de Producto es inválido ... no se añadió nada ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Añade un nuevo producto destacado manualmente utilizando su ID de Producto');
define('TEXT_INFO_PRE_ADD_INTRO', 'En bases de datos grandes, puede añadir un nuevo producto destacado manualmente utilizando su ID de Producto.<br /><br />Está recomendado utilizar este método cuando la página tarda mucho tiempo en cargar y la selección de un producto del menú desplegable resulta demasiado difícil por culpa de la cantidad grande de productos disponibles.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Introduzca el ID de Producto para ser pre-añadido: ');
define('TEXT_INFO_MANUAL', 'ID del Producto para ser añadido manualmente como Destacado');
?>