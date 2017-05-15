<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', 'Cuadros de las Columnas');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Nombre del archivo del cuadro');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'COLUMNA IZQ/DCH<br />Estado');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'COLUMNA SIMPLE<br />Estado');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'COLUMNA<br />IZQ/DCH');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'COLUMNA IZQ/DCH<br />Orden');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'COLUMNA SIMPLE<br />Orden');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, haga los cambios necesarios');
define('TEXT_INFO_LAYOUT_BOX','Cuadro seleccionado: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Nombre del Cuadro:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Ubicación: (la Columna Singular ignora este dato)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Estado de Columna Izquierda/Derecha: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Estado de Columna Singular: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','Activado= 1 Desactivado=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Orden de Columna Izquierda/Derecha:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Orden de Columna Simple:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca el nuevo cuadro con su información relacionada');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar este cuadro?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Nuevo Cuadro');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Editar Cuadro');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Eliminar Cuadro');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Eliminar cuadro faltante del listado de esta plantilla: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTA: Esto no elimina ficheros así que puede volver a añadir el cuadro en cualquier momento sólo añadiendolo al directorio correcto.<br /><br /><strong>Eliminar nombre de cuadro: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Restablecer todo el orden de los cuadros para que coincidan con el orden por DEFECTO para esta plantilla: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Esto no elimina ninguno de los cuadros. Sólo restablecerá el orden por defecto');
define('TEXT_INFO_BOX_DETAILS','Detalles de Recuadro: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Disposición de la Plantilla');

define('TABLE_HEADING_LAYOUT_TITLE', 'Título');
define('TABLE_HEADING_LAYOUT_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acción');


define('TEXT_MODULE_DIRECTORY', 'Directorio de la disposición del sitio:');
define('TEXT_INFO_DATE_ADDED', 'Añadido el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última modificación:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Disposición');
define('BOX_LAYOUT_COLUMNS', 'Controlador de las Columnas');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>FALTA</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED', 'Borrado correctamente de la plantilla del cuadro: ');
define('SUCCESS_BOX_RESET', 'La configuración de todos los cuadros fue restablecida correctamente al configuración por defecto de la Plantilla: ');
define('SUCCESS_BOX_UPDATED', 'Configuración del cuadro actualizada correctamente: ');

define('TEXT_ON', ' ACTIVADO ');
define('TEXT_OFF', ' DESACTIVADO ');
define('TEXT_LEFT', ' IZQ ');
define('TEXT_RIGHT', ' DCH ');

?>