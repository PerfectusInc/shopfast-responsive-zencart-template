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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Búsqueda avanzada');
define('NAVBAR_TITLE_2', 'Resultados de la búsqueda');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Búsqueda avanzada');

define('HEADING_SEARCH_CRITERIA', 'Criterio de búsqueda');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Buscar en la descripción del producto');
define('ENTRY_CATEGORIES', 'Categorías:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Incluir subcategorías');
define('ENTRY_MANUFACTURERS', 'Fabricantes:');
define('ENTRY_PRICE_FROM', 'Precio Desde:');
define('ENTRY_PRICE_TO', 'Precio Hasta:');
define('ENTRY_DATE_FROM', 'Fecha Desde:');
define('ENTRY_DATE_TO', 'Fecha Hasta:');

define('TEXT_SEARCH_HELP_LINK', 'Ayuda de la Búsqueda [?]');

define('TEXT_ALL_CATEGORIES', 'Todas las categorías');
define('TEXT_ALL_MANUFACTURERS', 'Todos los fabricantes');

define('HEADING_SEARCH_HELP', 'Ayuda de la Búsqueda');
define('TEXT_SEARCH_HELP', 'Las palabras pueden estar separadas por los operadores AND (Y) y/o OR (O) para un mejor control de los resultados de la búsqueda.<br /><br />Por ejemplo, Microsoft AND ratón generaría un lista de resultados conteniendo ambas palabras. Así, para ratón OR teclado, la lista de resultados contendría ambas o alguna de las palabras.<br /><br />Coincidencias exactas pueden buscarse encerrando las palabras en comillas dobles.<br /><br />Por ejemplo, "computadoras portátiles" generaría una lista de resultados coincidiendo con la frase exacta.<br /><br />Los paréntesis pueden usarse para un control más avanzado de los resultados.<br /><br />Por ejemplo, Microsoft and (teclado or ratón or "visual basic").');
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Nombre del producto');
define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRICE', 'Precio');
define('TABLE_HEADING_WEIGHT', 'Peso');
define('TABLE_HEADING_BUY_NOW', 'Comprar ahora');

define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>No hay productos que coincidan con su criterio de búsqueda.');

define('ERROR_AT_LEAST_ONE_INPUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Debe rellenar al menos uno de los campos.');
define('ERROR_INVALID_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>"Fecha desde" no válida.');
define('ERROR_INVALID_TO_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>"Fecha hasta" no válida.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La "Fecha hasta" debe ser mayor o igual a la "Fecha desde".');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El "Precio desde" debe ser un número.');
define('ERROR_PRICE_TO_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El "Precio hasta" debe ser un número.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El "Precio hasta" debe ser mayor o igual al "Precio desde".');
define('ERROR_INVALID_KEYWORDS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Palabras no válidas.');
?>