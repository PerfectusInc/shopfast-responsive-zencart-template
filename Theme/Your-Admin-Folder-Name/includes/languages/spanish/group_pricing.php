<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Precios para Grupos');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nombre de grupo');
define('TABLE_HEADING_GROUP_AMOUNT', '% Descuento');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nuevo precio de grupo');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Editar precio de grupo');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Borrar precio de grupo');

define('TEXT_NEW_INTRO', 'Por favor, rellene la siguiente información para el nuevo grupo');
define('TEXT_EDIT_INTRO', 'Por favor, haga cualquier cambio necesario');
define('TEXT_DELETE_INTRO', '¿Está seguro de que desea borrar este grupo?');
define('TEXT_DELETE_PRICING_GROUP', 'Borrar Grupo');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>AVISO:</b> ¡Hay %s clientes vinculados a este grupo!');

define('TEXT_GROUP_PRICING_NAME', 'Nombre de grupo: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Porcentaje de descuento: ');
define('TEXT_DATE_ADDED', 'Añadido el:');
define('TEXT_LAST_MODIFIED', 'Fecha de modificación:');
define('TEXT_CUSTOMERS', 'Clientes en el grupo:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ERROR: Existen clientes en este grupo. Confirme que quiere quitar todos los miembros del grupo y borrarlo.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTA: Hay definiciónes de precios de grupo, pero no está activado el módulo Descuento por Grupo.<br />Vaya a Admin->Módulos->Total de Pedido->Descuento por Grupo (ot_group_pricing) e instale y configure el módulo.');

?>