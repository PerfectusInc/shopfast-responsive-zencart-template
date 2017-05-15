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
//  $Id: manufacturers.php 4808 2006-10-22 18:48:53Z ajeh $
//

define('HEADING_TITLE', 'Fabricantes');

define('TABLE_HEADING_MANUFACTURERS', 'Fabricantes');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nuevo fabricante');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Editar fabricante');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Eliminar fabricante');

define('TEXT_MANUFACTURERS', 'Fabricantes:');
define('TEXT_DATE_ADDED', 'Añadido el:');
define('TEXT_LAST_MODIFIED', 'Última modificación:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Subir al directorio:');
define('TEXT_IMAGE_NONEXISTENT', 'LA IMAGEN NO EXISTE');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>O, elija un imagen que ya exista en el servidor, nombre:</strong>');

define('TEXT_NEW_INTRO', 'Por favor, complete la siguiente información para el nuevo fabricante');
define('TEXT_EDIT_INTRO', 'Por favor, haga los cambios necesarios');

define('TEXT_MANUFACTURERS_NAME', 'Nombre del fabricante:');
define('TEXT_MANUFACTURERS_IMAGE', 'Imagen del fabricante:');
define('TEXT_MANUFACTURERS_URL', 'URL del fabricante:<br /> (incluya http://)');

define('TEXT_DELETE_INTRO', '¿Seguro que desea eliminar este fabricante?');
define('TEXT_DELETE_IMAGE', '¿Eliminar imagen de los fabricantes?');
define('TEXT_DELETE_PRODUCTS', '¿Eliminar productos de este fabricante? (incluyendo los comentarios de productos, las ofertas, los productos por venir)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> ¡Hay %s productos que siguen vinculados a este fabricante!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Error: No puedo escribir en este directorio. Por favor, revise los permisos de usuario en: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio no existe: %s');
?>