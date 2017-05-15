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
//  $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
//

define('HEADING_TITLE', 'Rebajas');
define('TABLE_HEADING_SALE_NAME', 'Nombre de la Rebaja');
define('TABLE_HEADING_SALE_DEDUCTION', 'Rebaja');
define('TABLE_HEADING_SALE_DATE_START', 'Comienzo');
define('TABLE_HEADING_SALE_DATE_END', 'Finalización');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_SALEMAKER_NAME', 'Nombre de la rebaja:');
define('TEXT_SALEMAKER_DEDUCTION', 'Rebaja:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Rango de Precios:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hasta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Si un producto es una oferta:');
define('TEXT_SALEMAKER_DATE_START', 'Fecha de Comienzo:');
define('TEXT_SALEMAKER_DATE_END', 'Fecha de finalización:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Ó</b> marque las categorías a las cuales aplicar este descuento:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Pulse aquí para Consejos de Liquidación.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Más Información)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Inmediatamente');
define('TEXT_SALEMAKER_NEVER', 'Nunca');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Marque esta casilla si desea que el descuento sea aplicado a <b>todos los productos</b>:');
define('TEXT_SALEMAKER_TOP', 'Catálogo entero');
define('TEXT_INFO_DATE_ADDED', 'Añadido el:');
define('TEXT_INFO_DATE_MODIFIED', 'Última modificación:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Último cambio de estado:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Condición de oferta:');
define('TEXT_INFO_DEDUCTION', 'Rebaja:');
define('TEXT_INFO_PRICERANGE_FROM', 'Rango de precios:');
define('TEXT_INFO_PRICERANGE_TO', ' hasta ');
define('TEXT_INFO_DATE_START', 'Comienza:');
define('TEXT_INFO_DATE_END', 'Expira:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ignorar precio de oferta: Aplicar al precio del producto y reemplazar la oferta');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ignorar condición de rebaja: No aplicar rebaja cuando existan ofertas');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Aplicar rebaja al precio de oferta: O si no, aplicar al precio');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Quitar cantidad');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentaje');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Precio Nuevo');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Copiar rebaja');
define('TEXT_INFO_COPY_INTRO', 'Introduzca un nombre para la copia de <br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Eliminar rebaja');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar permanentemente esta rebaja?');
define('TEXT_MORE_INFO', '(Más Información)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Aviso : %s ventas ya incluyen esta catagoría');
?>