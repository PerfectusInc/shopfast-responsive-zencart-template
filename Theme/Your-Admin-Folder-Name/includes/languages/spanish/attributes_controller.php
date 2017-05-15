<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE', 'CATEGORÍAS: ');

define('HEADING_TITLE_OPT', 'Opciones de Producto');
define('HEADING_TITLE_VAL', 'Valores de Opción');
define('HEADING_TITLE_ATRIB', 'Gestionar Atributos');
define('HEADING_TITLE_ATRIB_SELECT', 'Por favor, elija un producto del cual mostrar sus atributos...');

define('TEXT_PRICES_AND_WEIGHTS', 'Precios y pesos');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Factor de precio: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Desviación: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Una vez:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Factor único: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Desviación: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Atributos de descuento por cantidad:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Atributos de descuentos únicos por cantidad:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Precio por palabra:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Palabras gratis:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Precio por letra:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Letras gratis:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nombre de Producto');
define('TABLE_HEADING_OPT_NAME', 'Nombre de Opción');
define('TABLE_HEADING_OPT_VALUE', 'Valor de Opción');
define('TABLE_HEADING_OPT_PRICE', 'Precio');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefijo');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_DOWNLOAD', 'Productos descargables:');
define('TABLE_TEXT_FILENAME', 'Fichero:');
define('TABLE_TEXT_MAX_DAYS', 'Días para la descarga:');
define('TABLE_TEXT_MAX_COUNT', 'Cantidad máxima de descargas:');
define('TABLE_HEADING_OPT_DISCOUNTED', 'Descuento');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Base');
define('TABLE_HEADING_PRICE_TOTAL','Total|Desc: Unavez:');
define('TEXT_WARNING_OF_DELETE', 'Esta opción tiene productos y valores vinculados a ella; no es seguro eliminarla.');
define('TEXT_OK_TO_DELETE', 'Esta opción no tiene productos y valores vinculados a ella; es seguro eliminarla.');
define('TEXT_OPTION_ID', 'ID de Opción');
define('TEXT_OPTION_NAME', 'Nombre de Opción');

define('ATTRIBUTE_WARNING_DUPLICATE', 'Atributo duplicado - El atributo no fue añadido'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE', 'Atributo duplicado - El atributo no fue modificado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH', 'Opción de atributo y valor de atributo NO coinciden - El atributo no fue añadido'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE', 'Opción de atributo y valor de atributo NO coinciden - El atributo no fue modificado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE', 'Se añadió una posible duplicación de nombre de opción'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE', 'Se Agregó una posible duplicación de valor de opción'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING', 'EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE', 'ELIMINANDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING', 'AGREGANDO NUEVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED', 'NOTA: las descargas están deshabilitadas');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Días:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Máx:');

  define('TABLE_HEADING_OPTION_SORT_ORDER', 'Orden');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER', 'Orden por defecto');
  define('TEXT_SORT', ' Orden: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX', 'Prefijo');
  define('TABLE_HEADING_OPT_WEIGHT', 'Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER', 'Orden');
  define('TABLE_HEADING_OPT_DEFAULT', 'por defecto');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de opción'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE', 'Tamaño');
  define('TABLE_HEADING_OPTION_VALUE_MAX', 'Máx');
  define('TABLE_HEADING_OPTION_VALUE_ROWS', 'Filas');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS', 'Comentarios');

  define('TEXT_OPTION_VALUE_COMMENTS', 'Comentarios: ');
  define('TEXT_OPTION_VALUE_SIZE', 'Mostrar tamaño: ');
  define('TEXT_OPTION_VALUE_MAX', 'Tamaño máximo: ');

  define('TEXT_ATTRIBUTES_IMAGE', 'Imagen de muestra de los atributos:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR', 'Directorio de las imágenes de los atributos:');

  define('TEXT_ATTRIBUTES_FLAGS', 'Atributos:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado sólo<br />para articulos de muestra:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Atributo gratis<br />Cuando el producto es gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo por defecto<br />para marcar como seleccionado:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar los mismos descuentos<br />Usados por el producto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED', 'Incluir en el precio base<br />En precios c/atributos');
  define('TEXT_ATTRIBUTES_REQUIRED','Atributo Requerido<br />para Texto:');

  define('LEGEND_BOX','Leyenda:');
  define('LEGEND_KEYS','Desactivado/Activado');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Mostrar sólo');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratis');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Por defecto');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Descontado');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Precio base');
  define('LEGEND_ATTRIBUTES_REQUIRED','Requerido');
  define('LEGEND_ATTRIBUTES_IMAGES','Imágenes');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Nombre de archivo<br />válido/erroneo');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER', 'ORDEN POR DEFECTO');
  define('TEXT_PRODUCTS_LISTING', 'Lista de productos para: ');
  define('TEXT_NO_PRODUCTS_SELECTED', 'Falta elegir producto');
  define('TEXT_NO_ATTRIBUTES_DEFINED', 'Atributos sin definir para el producto ID#');

  define('TEXT_PRODUCTS_ID', 'Productos ID#');
  define('TEXT_ATTRIBUTES_DELETE', 'ELIMINAR TODOS');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS', 'Copiar al producto');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY', 'Copiar a la categoría');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Cambios de atributos para los productos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Eliminar <strong>TODOS</strong> los atributos de producto para:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO', 'Copiar atributos a otro producto o a una categoría entera desde:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS', 'PRODUCTO');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copiar atributos a otro <strong>Producto</strong> desde ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO', 'Seleccione el producto al que copiar todos los atributos:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY', 'CATEGORÍA');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO', 'Seleccione la categoría a la que copiar los atributos:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copiar atributos a todos los productos en la <strong>Categoria</strong> desde el Producto ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>¿Cómo deberían manipularse los atributos de productos existentes?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE', 'Primero <strong>borre</strong>, luego copie los nuevos atributos');
  define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Actualice</strong> con nuevas configuraciones/precios, luego añada otros');
  define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorar</strong> y añadir sólo los nuevos atributos');

  define('SUCCESS_PRODUCT_UPDATE_SORT', 'Orden de atributos actualizado correctamente para ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE', 'Sin atributos a los que actualizar el orden para ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED', 'Atributos eliminados correctamente');
  define('SUCCESS_ATTRIBUTES_UPDATE', 'Atributos actualizados correctamente');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE', 'No seleccionó una categoría para la copia');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME', ' - en la Categoría: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES', '¿Seguro que desea eliminar todos los atributos para ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING', '<strong>Ignorar nuevos atributos</strong> ');
  define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Agregando nuevos atributos desde</strong> ');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', '<strong>Actualizando desde el atributo</strong> ');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW', 'PREVISUALIZAR ATRIBUTOS');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY', 'PREVISUALIZAR MUESTRA DE ATRIBUTOS PARA ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Por favor, elija:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Defina la configuración de los atributos y luego presione el botón Insertar</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Precio asignado por atributos');
  define('TEXT_PRODUCTS_PRICE', 'Precio de productos: ');
  define('TEXT_SPECIAL_PRICE', 'Precio de oferta: ');
  define('TEXT_SALE_PRICE', 'Precio de liquidación: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Pedir Precio');
  define('TEXT_SAVE_CHANGES','ACTUALIZAR Y GUARDAR CAMBIOS:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'No añadir al carro');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Confirmar borrado de TODOS los Valores de Opciones del Producto para la Nombre de Opción ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Nombre Producto: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Nombre Opción: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Los Valores de Opciones han sido borrados por Opción Nombre: ');
  