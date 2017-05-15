<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 18695 2011-05-04 05:24:19Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br /> Info de Pruebas:<br /><b>Números de prueba de tarjetas de crédito:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Nota:</b> Estos números serán denegados en modo Production y aprobados en modo Test. Puede usar cualquier fecha del futuro y cualquier código de seguidad CVV de tres dígitos (cuatro para AMEX).<br /><br /><b>Número para comprobar denegación:</b><br /><br />Tarjeta #: 4222222222222<br /><br />' : ''));
  } else {
 define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345"> Pinche aquí para abrir una cuenta </a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net zona  Merchant </a><br /><br /><strong>Precisa:</strong><br /><hr />*<strong> Cuenta Authorize.net</strong> (ve el enlace arriba para abrir una)<br />*<strong>soporte CURL es imprescindible</strong> y debe ser compilada en PHP por su servicio de alojamiento. <br />*<strong>username Authorize.net and claves de transacción</strong> disponible de la zona Merchant ');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'no se encontraron las funciones CURL - requeridas para el módulo de pago Authorize.net AIM');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Tarjeta de crédito');  // Titulo de la opción de pago como se le muestra al cliente
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Propietario de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'Número CVV:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', '¿Qué es esto?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* El número de la tarjeta debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' dígitos.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Debe introducir los tres últimos dígitos (número CVV) del reverso de la tarjeta.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Puede que su tarjeta sea rechazada por este motivo. Por favor, corrija la información errónea y vuelva a intentarlo o póngase en contacto con nosotros para obtener asistencia.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', '¡Error en la tarjeta de crédito!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'AVISO: hay un problema con el dígito de control (hash) de seguridad. Póngase en contacto con la tienda inmediatamente. Su pedido *no* ha sido autorizado. ');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Hacer una Devolución');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Error: Ordenó una devolución pero no marcó la casilla de Confirmación.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Error: Ordenó una devolución pero introdujo una cantidad inválida.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: Ordenó una devolución pero no introdujo los últimos cuatro dígitos del número de la tarjeta.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Devolución Iniciada. ID de Transacción: %s - Código Auto.: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: Ordenó una captura pero no marcó la casilla de Confirmación.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Haga una Captura');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', ' Error: Ordenó una captura pero es necesario introducir un valor.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: Hay que especificar un ID de Transacción.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Captura de Fondos Iniciada. Cantidad: %s.  ID de Transacción: %s - Código Auto.: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Hacer una Cancelación');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Error: Ordenó una cancelación pero no marcó la casilla de Confirmación');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Cancelación Iniciada. ID de Transacción: %s – Código de Auto.: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Transacciones de Devolución</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Puede devolver dinero a la tarjeta del cliente aquí:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Teclee la cantidad a devolver');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Teclee los últimos cuatro dígitos de la tarjeta.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Tecle el ID de Transacción original:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devolución Emitida');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Puede devolver una cantidad hasta el valor de la captura. Hay que suministrar los últimos cuatro dígitos de la tarjeta de crédito utilizada en el pedido original.<br />Puede emitir una devolución en los siguientes 120 días después de la fecha de la transacción original.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Captura de Transacciones</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Puede capturar fondos previamente autorizados aquí:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Introduzca la cantidad a capturar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Tecle el ID de Transacción original:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fondos capturados.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Puede ordenar una Captura en los 30 días siguientes a la fecha de la autorización original. Puede ordenar una Captura UNA VEZ solamente. <br />Asegúrese de que la cantidad es correcta.<br />Si deja la cantidad en blanco, se utilizará la cantidad original.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Cancelación de  Transacciones </strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Puede cancelar una transacción si no ha cobrado:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Marque esta casilla para confirmar:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transacción Cancelada');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Hay que terminar una Cancelación antes de que la transacción original haya sido cobrada como parte de la remesa del día.');

