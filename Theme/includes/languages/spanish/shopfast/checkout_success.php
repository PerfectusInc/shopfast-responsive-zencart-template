<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sun Feb 17 23:22:33 2013 -0500 Modified in v1.5.2 $
 */

define('NAVBAR_TITLE_1', 'Pago');
define('NAVBAR_TITLE_2', 'Listo - Gracias');

define('HEADING_TITLE', '¡Muchas gracias por su confianza!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Avísenme cuando haya cambios en los siguientes productos:');
define('TEXT_SEE_ORDERS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Puede ver su historial de pedidos yendo a <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a> y pulsando en "Ver todos los pedidos".');
define('TEXT_CONTACT_STORE_OWNER', 'Por favor, dirija cualquier pregunta que tenga a <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '" name="linkContactUs">atención al cliente</a>.');
define('TEXT_THANKS_FOR_SHOPPING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Muchas gracias por su confianza!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'También puede descargar sus productos más tarde en \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Su número de pedido es:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NOTA: Para procesar su pedido, se ha creado una cuenta temporal. Se puede cerrar esa cuenta haciendo click en "Salir". Adicionalmente "Salir" asegura de que la información sobre su pedido no será visible para la próxima persona que utilice este ordenador. Si quiere seguir comprando ¡adelante! Puede salir en cualquier momento a través del enlace al principio de la página.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>¡Muchas gracias por su confianza!<br /> Haga un click en "Salir" para asegurarse de que la información sobre su pedido no será visible para la próxima persona que utilice este ordenador.</p>');