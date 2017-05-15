<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Entrar en su cuenta');
define('HEADING_TITLE', 'Bienvenido, acceda a su cuenta');

define('HEADING_NEW_CUSTOMER', '¿No está registrado? Puede hacerlo aquí');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Clientes Nuevos');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Registrarse en <strong>' . STORE_NAME . '</strong> le permite comprar más rápido, seguir el estado de sus pedidos y revisar sus pedidos anteriores.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', '¿Tiene una cuenta PayPal? ¿Quiere pagar rápidamente con una tarjeta de crédito? Utilice el botón PayPal que encontrará más abajo para seleccionar la opción de pago Express Checkout.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">O</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Cree un Perfil de Cliente con <strong>' . STORE_NAME . '</strong> que le permitirá comprar más rápido, seguir el estatus de su pedido, ver sus pedidos históricos y aprovecharse de los beneficios para socios.');

define('HEADING_RETURNING_CUSTOMER', 'Clientes registrados: Entrar en su cuenta ');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Clientes Registrados');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Para continuar, acceda a su cuenta <strong>' . STORE_NAME . '</strong>.');

define('TEXT_PASSWORD_FORGOTTEN', '¿Olvidó su contraseña?');

define('TEXT_LOGIN_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error: Disculpe, el email y/o la contraseña son erróneos.');
define('TEXT_VISITORS_CART', '<strong>Nota:</strong> Los productos que están en su &quot;Carro de la compra&quot; pasarán a su carro de la compra de usuario registrado. <a href="javascript:session_win();">[Más Información]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Declaración de Privacidad</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Por favor, acepte nuestra declaración de privacidad marcando el siguiente casillero. Puede leer la declaración de privacidad</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aquí</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">He leído y acepto la declaración de privacidad.</span>');

define('ERROR_SECURITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Se ha producido un error de seguridad en el proceso del login');

define('TEXT_LOGIN_BANNED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error: Acceso denegado.');