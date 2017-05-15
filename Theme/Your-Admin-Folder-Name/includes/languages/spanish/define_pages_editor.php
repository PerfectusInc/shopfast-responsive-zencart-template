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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Editor de Define Pages para: ');
define('NAVBAR_TITLE', 'Editor de Define Pages');

define('TEXT_INFO_EDIT_PAGE', 'Seleccione una página para editar:');

define('TEXT_INFO_MAIN_PAGE', 'Página principal');

define('TEXT_INFO_SHIPPINGINFO', 'Envíos y Devoluciones.');
define('TEXT_INFO_PRIVACY', 'Privacidad');
define('TEXT_INFO_CONDITIONS', 'Condiciones de Uso');
define('TEXT_INFO_CONTACT_US', 'Contacte con nosotros');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Pedido éxitoso');

define('TEXT_INFO_PAGE_2', 'Página 2');
define('TEXT_INFO_PAGE_3', 'Página 3');
define('TEXT_INFO_PAGE_4', 'Página 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'No existe el archivo: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Error: No puede escribirse este archivo. Por favor, seleccione el permiso de usuario correcto en: %s');

define('TEXT_INFO_SELECT_FILE', 'Seleccione un archivo a editar ...');
define('TEXT_INFO_EDITING', 'Editando archivo:');

define('TEXT_INFO_CAUTION','Nota: Debe editar siempre los archivos localizados en el directorio de su plantilla actual. Ejemplo: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Asegúrese de hacer copias de seguridad antes de modificar sus archivos.');
?>