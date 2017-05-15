<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Sep 24 14:38:59 2012 -0400 Modified in v1.5.2 $
 */

  define('HEADING_TITLE', 'Administración de tienda');
  define('TABLE_CONFIGURATION_TABLE', 'Buscar definiciones de CONSTANTS');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', 'Actualización <strong>exitosa</strong> para la ordenación de atributos');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'Actualización <strong>exitosa</strong> para los valores de ordenación de precios de productos');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', 'Reinicio <strong>exitoso</strong> de productos vistos a 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', 'Reinicio <strong>exitoso</strong> de pedidos a 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', 'Reinicio <strong>exitoso</strong> de todas las caracteristicas principales para productos enlazados');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Actualización exitosa</strong> del contador a: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Error:</strong> No se encontró configuración coincidente ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Error:</strong> No se introdujo clave de configuración o texto a buscar ... la búsqueda finalizó');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Actualizar contador</strong><br />a un nuevo valor: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Actualizar el campo "Products Price Sorter" para TODOS los productos,</strong><br />para que se ordenen por precio correctamente: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Reiniciar TODOS los productos vistos</strong><br />Reiniciar cuenta de productos vistos a 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Reiniciar TODOS los pedidos</strong><br />Reiniciar cuenta de pedidos a 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Reiniciar TODOS los ID de Categoría Maestra</strong><br />Para ser usados en productos enlazados y tasaciones: ');

  define('TEXT_NEW_ORDERS_ID', 'ID de pedido nuevo');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Define el próximo número de pedido</strong><br />NOTA: No se puede poner un número menor que un pedido existente en la base de datos.');
  define('TEXT_MSG_NEXT_ORDER', 'El próximo número de pedido será %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'A resulta que un pedido ya en marcha, the próximo número de pedido es actualmente: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'No se puede poner el próximo número de pedido mayor que 2000000000 (es una limitación de la base de datos). Elija un número menor.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Buscar CONSTANTES definiciones de archivos de idioma</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Clave o nombre:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTA:</strong> las CONSTANTES están escritas en mayúsculas.<br />Las búsquedas de archivos de idioma pueden ser una búsqueda alternativa cuando no se encuentra nada en las tablas de la base de datos.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Buscar en definiciones de archivos de idiomas</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Buscar texto:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTA:</strong> Los términos de búsqueda en archivos de idioma pueden estar tanto en mayúsculas como en minúsculas');

  define('TABLE_TITLE_KEY', '<strong>Clave:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Título:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Descripción:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Grupo:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valor:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Búsquedas en archivos de idioma:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Ninguno');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Todos los archivos de idioma para ' . strtoupper($_SESSION['language']) . ' - Catálogo/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Todos los archivos principales de idioma - Catálogo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Todos los archivos de idioma seleccionados actualmente - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Todos los archivos principales de idioma - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Todos los archivos de idioma seleccionados actualmente - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Todos los archivos de idioma seleccionados actualmente - Catálogo/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Edición no disponible');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' u, OCULTO');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimizar base de datos</strong> para quitar el espacio de registros borrados.<br />Se recomienda hacerlo mensualmente o semanalmente en una tienda con mucho movimiento (Es recomendable optimizar la base de datos en horario de poca afluencia de visitantes).');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Optimización de la base de datos está en marcha. Puede tardar unos minutos. Espera por favor. El menu anterior aparecerá cuando este terminado ... ');
  define('SUCCESS_DB_OPTIMIZE', 'Optimización de la base de datos - Tablas procesadas: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Borrar archivos Debug</strong><br /><strong>¡Precaución!: </strong>Zen Cart archiva los mensaje de errores PHP para ayudar en la búsqueda de problemas, y muchos de los módulos de pago puede crear archivos log para diagnosticar problemas de comunicación.<br />Esta función borrará *TODOS* los archivos debug asociados con errores PHP y los módulos de pago de la carpeta /logs.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Los archivos debug han sido borrados.');