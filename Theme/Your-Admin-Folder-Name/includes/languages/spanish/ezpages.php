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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ-Pages<br />Aviso: Para crear páginas en más de un idioma, se precisa el módulo adicional <a href=" http://www.zen-cart.com/index.php?main_page=product_contrib_info&amp;cPath=40_47&products_id=113" target="_blank"> Multi-Language EZ-Pages</a><br /><br />');
define('TABLE_HEADING_PAGES', 'Título de la Página');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_VSORT_ORDER', 'Orden de los Cuadros');
define('TABLE_HEADING_HSORT_ORDER', 'Orden de pie de página');
define('TEXT_PAGES_TITLE', 'Título:');
define('TEXT_PAGES_HTML_TEXT', 'Contenido HTML:');
define('TABLE_HEADING_DATE_ADDED', 'Fecha Añadida:');
define('TEXT_PAGES_STATUS_CHANGE', 'Cambio de Estado: %s');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que quiere borrar esta página?');
define('SUCCESS_PAGE_INSERTED', 'Éxito. La página ha sido introducida.');
define('SUCCESS_PAGE_UPDATED', 'Éxito. La página ha sido actualizada.');
define('SUCCESS_PAGE_REMOVED', 'Éxito. La página ha sido borrada.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Éxito. El estado de la página ha sido actualizado.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Error: Título de la página requerido.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Marcado del estatus desconocido.');
define('ERROR_MULTIPLE_HTML_URL', 'Error: Ha definido opciones múltiples del enlace cuando solamente una está permitida. ...<br />Puede definir: Contenido HTML Content -o- URL de un enlace interno -o- URL de un enlace externa ');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Encabezado:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Cuadro:');
define('TABLE_HEADING_STATUS_FOOTER', 'Pie:');
define('TABLE_HEADING_STATUS_TOC', 'Table de Contenido:');
define('TABLE_HEADING_CHAPTER', 'Capítulo:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Abrir en ventana nueva:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Página es SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> páginas)');
define('IMAGE_NEW_PAGE', 'Página Nueva');
define('TEXT_INFO_PAGE_IMAGE', 'Imagen');
define('TEXT_INFO_CURRENT_IMAGE', 'Imagen Actual:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Elija una página ...');

define('TEXT_HEADER_SORT_ORDER', 'Orden:');
define('TEXT_SIDEBOX_SORT_ORDER', ' Orden:');
define('TEXT_FOOTER_SORT_ORDER', ' Orden:');
define('TEXT_TOC_SORT_ORDER', ' Orden:');
define('TEXT_CHAPTER', 'Ant/Sig capítulo:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Capítulo:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', '<strong>Encabezado-Orden:</strong> se utiliza  cuando se generan páginas en una sola fila horizontal en el encabezado.  Para incluir está página en el listado de la fila horizontal el orden debe ser mayor que cero.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', '<strong>Cuadro-Orden:</strong> se utiliza cuando las páginas están en un listado vertical de enlaces. Para incluir está página en el listado vertical el orden debe ser mayor que cero. Si no, se considera como texto HTML para intenciones especiales.');
define('TEXT_FOOTER_ORDER_EXPLAIN', '<strong>Pie de Página-Orden:</strong> se utiliza  cuando se generan páginas en una sola fila horizontal en el pie de página.  Para incluir esta página en el listado de la fila horizontal, el orden debe ser mayor que cero.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', '<strong>TdC (Tabla de Contenidos)-Orden:</strong> se utiliza cuando se generan páginas personalizadas como en una fila horizontal (encabezado/pie de página etc.) o fila vertical, dependiendo de los requisitos personales.  Para incluir está página en el listado el orden debe ser mayor que cero.');
define('TEXT_CHAPTER_EXPLAIN', 'Se usa <strong>Capítulo</strong> con un TdC (Tabla de Contenidos) Orden para los enlaces Anterior/Siguiente. Los enlaces del TdC consisten de las páginas que tienen esta número de capítulo and se las ve en el TdC Orden.');

define('TEXT_ALT_URL', 'URL Enlace Interno:');
define('TEXT_ALT_URL_EXPLAIN', 'Si así está definido, se ignorará el contenido de la página y se utilizará este enlace local <br />Ejemplo a Reseñas: index.php?main_page=reviews<br />Ejemplo a Mi Cuenta: index.php?main_page=account y marcará como SSL');

define('TEXT_ALT_URL_EXTERNAL', 'URL Enlace Externa:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', ' Si así está definido, se ignorará el contenido de la página y se usará este enlace local <br />Ejemplo de un enlace externo: http://www.zen-cart.com');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Orden de Listado: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Capítulo/TdC');
define('TEXT_SORT_HEADER_TITLE', 'Encabezado');
define('TEXT_SORT_SIDEBOX_TITLE', 'Cuadro');
define('TEXT_SORT_FOOTER_TITLE', 'Pie de Página');
define('TEXT_SORT_PAGE_TITLE', 'Título de la Página');
define('TEXT_SORT_PAGE_ID_TITLE', 'ID de la Página, Título');

define('TEXT_PAGE_TITLE', 'Título:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>AVISO: Enlaces Múltiples Definidos</strong>');
?>