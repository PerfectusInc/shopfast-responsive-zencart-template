<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 */

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

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Esta opción tiene productos y valores enlazados - no es seguro borrarla.<br />NOTA: Una descarga asociada con esta Opción no será borrada del servidor.</span>');
define('TEXT_OK_TO_DELETE', 'Esta opción no tiene productos enlazados - es seguro borrarla.');
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

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar a TODOS los productos donde nombre y valor de opción ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Seleccionar un nombre y valor de opción que existe actualmente en un producto o productos que desea copiar a otro nombre y valor de opción para todos los productos con este nombre y valor de opción');
  define('TEXT_SELECT_OPTION_FROM', 'Nombre de opción a coincidir:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Valor de opción a coincidir:');
  define('TEXT_SELECT_OPTION_TO', 'Nombre de opción a añadir:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Valor de opción a añadir:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Dejar en blanco para TODOS los productos o<br />introducir un ID de categoría para los productos a actualizar');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copiar el nombre/valor de opción a productos con un nombre de opción existente ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Seleccione un nombre y valor de opción que exista actualmente en un producto o productos para añadir a todos los productos o sólo los productos en la categoría seleccionada que tienen el nombre de opción seleccionado.
                                                   <br /><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Rojo a todos los productos con nombre de opción: Tamaño
                                                   <br /><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con el nombre de opción: Tamaño
                                                   <br /><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con nombre de opción: Tamaño para ID de categorías: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Nombre de opción a la que añadir:');			 
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Nombre de opción a añadir:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Valor de opción a añadir:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Valores por defecto para el nuevo atributo desde Nº de ID de producto, o dejar en blanco para ningún valor por defecto:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>¿Cómo deberían manejarse los atributos del producto existente?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Borrar</strong> primero, después copiar nuevo atributo');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Actualizar</strong> atributos existentes con nueva configuración/precios');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorar</strong> atributos existentes y sólo añadir nuevos atributos');

  define('TEXT_INFO_FROM', ' desde: ');
  define('TEXT_INFO_TO', ' a: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Error: Nombre y valor de opción duplicados');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Error: Valor y nombre de opción no concordantes');
  define('ERROR_OPTION_VALUES_NONE', 'Error: No se encontró nada para copiar');
  define('SUCCESS_OPTION_VALUES_COPIED', '¡Copia exitosa! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Error: Falta el nombre/valor de opción para los ID de producto');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Borrar atributo coincidente de TODOS los productos donde el nombre y valor de opción ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Seleccionar un nombre y valor de opción que exista actualmente en un porducto o productos que quiera borrar de TODOS los productos o de TODOS los productos de una categoría');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nombre de Opción a coincidir:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Valor de Opción a coincidir:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Error: Nombre de Opción y Valor de Opción no concordantes seleccionados');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Exitosa borradura de: ');