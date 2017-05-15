<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Registro de una nueva página del Admin');
define('TEXT_PAGE_KEY', 'Página - Key');
define('TEXT_LANGUAGE_KEY', 'Página - Nombre');
define('TEXT_MAIN_PAGE', 'Página - Nombre del Archivo');
define('TEXT_PAGE_PARAMS', 'Página - Parámetros');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', '¿Mostrar en el Menú?');
define('TEXT_SORT_ORDER', 'Orden');

define('TEXT_EXAMPLE_PAGE_KEY', '(p.ej. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(p.ej. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(p.ej. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(p.ej. option=1 o, suele dejarse en blanco)');
define('TEXT_SELECT_MENU', 'Seleccione Menú');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Clave de la página no definida. Todas las páginas del admin deben tener una clave única.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'La clave de la página ya existe. La clave de la página debe ser única.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Precisa una clave de idioma. Todas las páginas del Admin deben tener una clave de idioma que define el texto en cualquier enlace del menú.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'La clave de idioma no ha sido definida. Por favor, compruebe que está escrita correctamente.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'El nombre del archivo de la página no ha sido definido.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'El nombre del archivo que ha introducido no existe. Por favor compruebe que está escrito correctamente.');
define('ERROR_MENU_NOT_CHOSEN', 'El Menú no hay sido elegido. Debe asociar la página nueva con un apartado del menú, incluso si no es visible.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Su página nueva del Admin ha sido registrada.');
