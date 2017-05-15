<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','Gestión de Enlazamiento de Productos a Categorías Múltiples...');
define('HEADING_TITLE2','Categorías / Productos');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Categorías con productos que están disponibles para enlazar ...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID Prod.');
define('TABLE_HEADING_PRODUCT', 'Nombre del producto');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'EDITANDO PRODUCTO A INFORMACIÓN DE CATEGORÍAS');
define('TEXT_PRODUCTS_ID', 'Producto ID# ');
define('TEXT_PRODUCTS_NAME', 'Producto: ');
define('TEXT_PRODUCTS_MODEL', 'Modelo: ');
define('TEXT_PRODUCTS_PRICE', 'Precios: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Actualizar enlaces de categoría');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Seleccionar producto a enlazar');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Configurar producto a categorías de enlaces para: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Número actual de categorías enlazadas: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'El enlazador de productos a categorías está diseñado para poder enlazar de manera rápida el producto actual con una o más categorías.<br />También puedes enlazar todos los productos de una categoría con otra categoría o eliminar un producto enlazado de una categoría que está en otra categoría (instrucciones, más abajo)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Para el funcionamiento correcto de los precios, cada producto precisa <strong>una</strong> Categoría Maestra, sin importar con cuántas categorías esté enlazado. La Categoría Maestra es en la que se crea el producto originalmente, pero puede ser modicado a cualquiera de las categorías ya enlazadas a través de la lista desplegable \"Categoría Maestra del producto\", en el encabezamiento de la tabla de categorías<br />
El producto está enlazado actualmente a la categoría/las categorías seleccionadas en la tabla superior. Para añadir una nueva categoría o categorías, simplemente marca el checkbox junto al nombre de la categoría. Para borrar una categoría o categorías enlazadas, simplemente deseleccione la casilla de verificación junto al nombre de la categoría.<br />
Cuando haya revisado todas las categorías que quería enlazar con este producto, presione el botón \"' . BUTTON_UPDATE_CATEGORY_LINKS . '\".<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Cambios globales de categorías enlazadas a productos. Reasignación del ID de Categoría Maestra');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>AVISO:</strong> Es imprescindible fijar el ID de CATEGORÍA MAESTRA antes de cambiar categorías enlazadas');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copiar TODOS los productos en una categoría como productos ENLAZADOS a otra categoría ...</strong><br />Ejemplo: Usando 8 y 22 quiero enlazar TODOS los productos de la categoría 8 a la categoría 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar todos los productos en la categoría: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Enlace a categoría: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copiar producto como enlazado ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'AVISO: El producto ha sido reseteado y ahora no pertenece a este categoría ...');
define('WARNING_COPY_LINKED', 'ATENCIÓN: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoría no válida desde la que enlazar productos: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoría no válida a la que enlazar productos: ');
define('WARNING_NO_CATEGORIES_ID', 'AVISO: No ha sido seleccionada ninguna categoría ... no se realizó ningún cambio');
define('SUCCESS_COPY_LINKED', 'Actualización con éxito de productos como enlazados ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoría válida desde la que enlazar productos: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoría válida a la que enlazar productos: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'AVISO: Copia completado a categoría inválida: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>ATENCIÓN: No se realizaron cambios, los productos ya estaban enlazados ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Borrar TODOS los productos de una categoría que están ENLAZADOS a otra categoría ...</strong><br />Ejemplo: Usando 8 y 22, deseo desenlazar TODOS los productos en la categoría 8 de la categoría 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar todos los productos en la categoría: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Quitar los enlaces de los productos a categoría: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Quitar productos como enlazados ');

define('WARNING_REMOVE_LINKED', 'WARNING: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoría no válida desde la que quitar productos enlazados: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoría no válida para quitar productos enlazados: ');
define('SUCCESS_REMOVE_LINKED', 'Borrado con éxito de productos como enlazados ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoría válida desde la que quitar productos enlazados: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoría válida para quitar productos enlazados: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>ATENCIÓN: No se realizaron cambios, no hay productos enlazados ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ATENCIÓN: ¡¡CONFLICTO DE IDs DE CATEGORÍAS MAESTRAS!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>El Id de categoría maestra es: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'NOTA: La categoría maestra se utiliza en referente al precio cuando la categoría influye en los precios de productos enlazados, por ejemplo en la categoría \"Especiales\"<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Para arreglar este problema, ha sido redirigido al primer producto conflictivo. Reasigne el ID de categoría maestra para que no siga siendo el ID de la categoría maestra de productos para la categoría desde la que está intentando borrar, e inténtelo de nuevo. Cuando todos los conflictos estén corregidos, podrá completar el borrado deseado.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflicto desde categoría: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflicto a categoría: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Actualización exitosa de enlaces de categorías a productos ...');
define('WARNING_MASTER_CATEGORIES_ID', 'ATENCIÓN: ¡No se ha configurado una categoría maestra!');

define('TEXT_PRODUCTS_ID_INVALID', 'ATENCIÓN: ID DE PRODUCTO INVÁLIDO O NO SE SELECCIONÓ UN PRODUCTO');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Nota: Un ID de producto no necesita ser configurado para usar enlace a todos los productos desde una categoría a otra categoría<br />Sin embargo, configurar un ID de productos válido mostrará todas las categorías disponibles y sus números de ID.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Reasignar la categoría maestra de TODOS los productos en la categoría seleccionada, a la misma categoría ...</strong><br />Ejemplo: Reasignar categoría 22 configuraría TODOS los productos de la categoría 22 para que tengan la categoría 22 como ID de categoría maestra');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reasignar el ID de Categoría Maestra para todos los productos en la categoría: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Reasignar el ID de categoría maestra');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'ATENCIÓN: Categoría seleccionada no válida ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reasignación realizada con éxito de todos los productos a un nuevo ID de categoría maestra para la categoría: ');
