<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Enviar ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Enviar confirmación del ' . TEXT_GV_NAME);
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' enviado');
define('NAVBAR_TITLE', 'Enviar ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Mensaje de ' . STORE_NAME);
define('HEADING_TEXT', 'Por favor, introduzca aquí debajo los detalles del ' . TEXT_GV_NAME . ' que desea enviar. Para más información, por favor, vea nuestro <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Nombre del destinatario:');
define('ENTRY_EMAIL', 'e-mail del destinatario:');
define('ENTRY_MESSAGE', 'Mensaje al destinatario:');
define('ENTRY_AMOUNT', 'Cantidad para enviar');
define('ERROR_ENTRY_TO_NAME_CHECK', 'No recibimos el nombre del destinatario. Por favor, introdúzcalo debajo. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'La cantidad del' . TEXT_GV_NAME . ' es errónea. Introdúzcala otra vez.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'e-mail no válido');
define('MAIN_MESSAGE', 'Va a enviar un ' . TEXT_GV_NAME . ' que  vale %s a %s cuyo email es %s. Si estos datos no son correctos puede editar el mensaje pulsando el botón <strong>Editar</strong>.<br /><br /> El texto acompañando el email dirá:<br /><br />');
define('SECONDARY_MESSAGE', 'Estimado %s,<br /><br />' . 'Le han enviado un  ' . TEXT_GV_NAME . ' que vale %s por %s');
define('PERSONAL_MESSAGE', '%s dice');
define('TEXT_SUCCESS', 'Enhorabuena, su ' . TEXT_GV_NAME . ' ha sido enviado correctamente');
define('TEXT_SEND_ANOTHER', '¿Quiere enviar otro ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE', 'Saldo actual disponible: ');

define('EMAIL_GV_TEXT_SUBJECT', 'Un regalo de %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Enhorabuena, ha recibido un ' . TEXT_GV_NAME . ' que vale %s');
define('EMAIL_GV_FROM', 'Este ' . TEXT_GV_NAME . ' le fue enviado por %s');
define('EMAIL_GV_MESSAGE', 'con un mensaje que dice ');
define('EMAIL_GV_SEND_TO', 'Hola, %s');
define('EMAIL_GV_REDEEM', 'Para canjear este ' . TEXT_GV_NAME . ' haga click en el enlace de aquí abajo. Por favor, escriba también el ' . TEXT_GV_REDEEM . ': que es %s por si tiene algún problema.');
define('EMAIL_GV_LINK', 'Para canjearlo, por favor, pulse aquí');
define('EMAIL_GV_VISIT', ' o visite ');
define('EMAIL_GV_ENTER', ' e ingrese el ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Si tiene problemas al canjear el código ' . TEXT_GV_NAME . ' usando el enlace de aquí arriba, ' . "\n" .
                                'puede ingresar también el ' . TEXT_GV_REDEEM . ' del ' . TEXT_GV_NAME . ' durante el proceso de pago en nuestra tienda.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>