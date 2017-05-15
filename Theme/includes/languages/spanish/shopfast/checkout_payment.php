<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 */

  define('NAVBAR_TITLE_1', 'Comprar');
  define('NAVBAR_TITLE_2', 'Paso 2 de 3 - Opciones de pago');

  define('HEADING_TITLE', 'Paso 2 de 3 - Opciones de pago');

  define('TABLE_HEADING_BILLING_ADDRESS', 'Dirección de Facturación');
  define('TEXT_SELECTED_BILLING_DESTINATION', 'Su dirección de facturación se muestra a la izquierda. La dirección debe coincidir con la de la tarjeta de crédito. Puede cambiarla pulsando el botón <em>Cambiar Dirección</em>.');
  define('TITLE_BILLING_ADDRESS', 'Dirección de Facturación:');

  define('TABLE_HEADING_PAYMENT_METHOD', 'Método de pago');
  define('TEXT_SELECT_PAYMENT_METHOD', 'Por favor, seleccione un método de pago para este pedido.');
  define('TITLE_PLEASE_SELECT', 'Por favor, elija');
  define('TEXT_ENTER_PAYMENT_INFORMATION', 'Actualmente, este es el único método de pago disponible para este pedido.');
  define('TABLE_HEADING_COMMENTS', 'Instrucciones especiales o comentarios sobre el pedido');

  define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Actualmente no disponible');
  define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Actualmente no aceptamos pagos de su zona.</span><br />Contáctenos para opciones alternativas.');

  define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continuar al paso 3</strong>');
  define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- confirmar su pedido.');

  define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Términos y Condiciones</span>');
  define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Por favor, acepte los términos y condiciones ligados a este pedido marcando el casillero. Puede leer los términos y condiciones <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">aquí</span></a>.');
  define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">He leído y acepto los términos y condiciones ligados a este pedido.</span>');

  define('TEXT_CHECKOUT_AMOUNT_DUE', 'Cantidad total a pagar: ');
  define('TEXT_YOUR_TOTAL', 'Total del pedido');
?>