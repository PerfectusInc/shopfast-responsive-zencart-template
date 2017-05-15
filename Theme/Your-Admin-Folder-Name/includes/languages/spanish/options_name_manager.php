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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', 'Opciones de productos');
define('HEADING_TITLE_VAL', 'Valores de Opciones');
define('HEADING_TITLE_ATRIB', 'Atributos de productos');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nombre de producto');
define('TABLE_HEADING_OPT_NAME', 'Nombre de opción');
define('TABLE_HEADING_OPT_VALUE', 'Valor de opción');
define('TABLE_HEADING_OPT_PRICE', 'Precio');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefijo');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_DOWNLOAD', 'Productos descargables:');
define('TABLE_TEXT_FILENAME', 'Archivo:');
define('TABLE_TEXT_MAX_DAYS', 'Días hasta caducidad:');
define('TABLE_TEXT_MAX_COUNT', 'Nº máximo de descargas:');

define('TEXT_WARNING_OF_DELETE', 'Esta opción tiene productos y valores enlazados - no es seguro borrarla.');
define('TEXT_OK_TO_DELETE', 'Esta opción no tiene productos enlazados - es seguro borrarla.<br />Precaución: Todos los valores de opción serán borrados para este nombre de opción.');
define('TEXT_OPTION_ID', 'ID de opción');
define('TEXT_OPTION_NAME', 'Nombre de opción');
define('TABLE_HEADING_OPT_DISCOUNTED','Descontado');

define('ATTRIBUTE_WARNING_DUPLICATE','Atributo duplicado - El atributo no se añadió'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Existe un atributo duplicado - El atributo no se modificó'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','La opción de atributo y el valor de opción NO coinciden - El atributo no fue añadido'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','La opción de atributo y el valor de opción NO coinciden - El atributo no fue modificado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Posiblemente se añadió un nombre de opción duplicado.'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Posiblemente se añadió un valor de opción duplicado'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','BORRANDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','AÑADIENDO NUEVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTA: Las descargas están desactivadas');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Días:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Máx:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordenación');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Orden por defecto');
  define('TEXT_SORT',' Orden: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefijo');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordenación');
  define('TABLE_HEADING_OPT_DEFAULT','Por defecto');

  define('TABLE_HEADING_YES','Sí');
  define('TABLE_HEADING_NO','No');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de opción'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Tamaño');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Máx');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Filas');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Comentarios');

  define('TEXT_OPTION_VALUE_COMMENTS','Comentarios: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Filas: ');
  define('TEXT_OPTION_VALUE_SIZE','Mostrar tamaño: ');
  define('TEXT_OPTION_VALUE_MAX','Longitud máxima: ');

  define('TEXT_ATTRIBUTES_IMAGE','Cambio de imagen de atributo:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Directorio de imágenes de atributo:');

  define('TEXT_ATTRIBUTES_FLAGS','Banderas<br />de atributo:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado con motivos<br />de visualización sólamente:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'El atributo es gratis<br />cuando el producto es gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo por defecto<br />para marcar como seleccionado:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar los mismos descuentos<br />usados para el producto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluir precio base<br />al tasar por atributos');

  define('TEXT_PRODUCT_OPTIONS_INFO','Editar opciones de producto para ajustes adicionales');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'ATENCIÓN: No se encontró ningún producto ... No se actualizó nada');

define('TEXT_SELECT_PRODUCT', ' Seleccione un producto');
define('TEXT_SELECT_CATEGORY', ' Seleccione una categoría');
define('TEXT_SELECT_OPTION', 'Seleccione un nombre de opción');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Añadir TODOS los valores de opción a TODOS los productos para un nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Actualizar TODOS los productos existentes que tengan al menos UN valor de opción y añadir TODOS los valores de opción en un nombre de opción');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Actualización exitosa de opciones ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Añadir TODOS los valores de opción a UN producto para el nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Actualizar UN producto que tenga al menos UN valor de opción y añadir TODOS los valores de opción en un nombre de opción');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Añadir TODOS los valores de opción a UNA categoría de productos para el nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Actualizar UNA categoría de productos, cuando el producto tenga al menos UN valor de opción y añadir TODOS los valores de opción en un nombre de opción');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTA:</strong> El orden será definido al valor por defecto de ordenación de valores de opción para estos productos.');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Borrar TODOS los valores de opción para TODOS los productos para el nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Actualizar TODOS los productos existentes que tengan al menos UN valor de opción y borrar TODOS los valores de opción en un nombre de opción');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Borrar TODOS los valores de opción en UN producto del nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Actualizar UN producto que tenga al menos UN valor de opción y borrar TODOS los valores de opción en un nombre de opción');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Borrar TODOS los valores de opción en UNA categoría de productos para el nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Actualizar UNA categoría de productos, cuando el producto tenga al menos UN valor de opción y borrar TODOS los valores de opción en un nombre de opción');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTA:</strong> Todos los valores de opción del nombre de opción serán borrados para los productos seleccionados. Esto no borrará la configuración del valor de opción.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar TODOS los valores de opción en otro nombre de opción</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Todos los valores de opción serán copiados de un nombre de opción a otro nombre de opción');
define('TEXT_SELECT_OPTION_FROM', 'Copiar desde nombre de opción: ');
define('TEXT_SELECT_OPTION_TO', 'Copiar todos los valores de opción a nombre de opción: ');
define('SUCCESS_OPTION_VALUES_COPIED', '¡Copia exitosa! ');
define('ERROR_OPTION_VALUES_COPIED', 'Error - ¡No se pudien copiar los valores de opción en el mismo nombre de opción! ');
define('ERROR_OPTION_VALUES_NONE', 'Error - La copia del nombre de opción tiene 0 valores definidos. ¡No se copió nada! ');
define('TEXT_WARNING_BACKUP', 'Atención: Haga siempre una copia de seguridad de su base de datos antes de realizar algún cambio global');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Imágenes de atributos por fila: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Estilo de atributos para Botones de Radio/Casillas de verificación: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Longitud máxima y tamaño de muestra para atributos de sólo texto:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Estilos de imagen:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Imágenes debajo nombres de opción');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Elemento, imagen y valor de opción');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Elemento, imagen, y nombre de opción debajo');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nombre de opción debajo de elemento e imagen');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Elemento debajo de imagen y nombre de opción');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Elemento encima de imagen y nombre de opción');
?>