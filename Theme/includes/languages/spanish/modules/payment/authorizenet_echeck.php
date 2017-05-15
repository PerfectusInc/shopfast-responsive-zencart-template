<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * Authorize.net echeck Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_echeck.php 7227 2007-10-12 04:19:56Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ADMIN_TITLE', 'Authorize.net - eCheck'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CATALOG_TITLE', 'eCheck');  // Payment option title as displayed to the customer

  if (MODULE_PAYMENT_AUTHORIZENET_ECHECK_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>');
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345"> Pinche aquí para abrir una cuenta </a><br /><br /><a target="_blank" href="https://account.authorize.net/"> Authorize.net zona  Merchant </a><br /><br /><strong> Precisa:</strong><br /><hr />*<strong> Cuenta Authorize.net </strong> (ve el enlace arriba para abrir una)<br />*<strong> soporte CURL es imprescindible </strong>> y debe ser compilada en PHP por su servicio de alojamiento. <br />*<strong> username Authorize.net and claves de transacción<strong> disponible de la zona Merchant');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR_CURL_NOT_FOUND', 'No se encontraron las funciones CURL - requeridas para el módulo de pago Authorize.net eCheck');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ROUTING_CODE', 'ABA Número Routing:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_NAME', 'Nombre de Banco:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_NUM', 'Número de Cuenta:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_TYPE', 'Tipo de Cuenta:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNTHOLDER', 'Nombre en la Cuenta:');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_NUMBER', '* * El número de la cuenta debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ROUTING_CODE', '* * El número Routing ' . CC_NUMBER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_BANK_NAME', '* * El nombre del banco debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_TITLE', 'Aviso de Autorización:&nbsp;');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_NOTICE', 'Al hacer clic en este botón (para confirmar este pedido), autorizo a ' . STORE_NAME . ' a que cobre en mi cuenta %s en %s la cantidad de %s para la única compra online de bienes y servicios detallados en esta página.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DECLINED_MESSAGE', 'No se pudo cumplir la transacción. Corrija la información e inténtalo otra vez o póngase en contacto con nosotros.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR', '¡Error de Transacción!');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHENTICITY_WARNING', 'AVISO: hay un problema con el dígito de control (hash) de seguridad. Póngase en contacto con la tienda inmediatamente. Su pedido *no* ha sido autorizado. ');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TYPE', 'Tipo de Cliente:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TAX_ID', 'ID Impuestos/ SSN de Cliente:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_NUMBER', 'Número del Carnet de Conducir:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_STATE', 'Provincia del Carnet de Conducir:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_TEXT', 'Fecha de Nacimiento del conductor:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_FORMAT', '(MM/DD/YYYY)');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_CUST_TAX_ID', '* El número de ID de Impuestos debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_NUMBER', '* El número del Carnet de Conducir debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_DOB', '* La fecha de nacimiento debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_BUTTON_TEXT', ' Hacer una Devolución');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_ERROR', 'Error: Ordenó una devolución pero no marcó la casilla de Confirmación ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_REFUND_AMOUNT', 'Error: Ordenó una devolución pero insertó una cantidad no válida.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: Ordenó una devolución pero no insertó los últimos cuatro dígitos del número de la cuenta.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_INITIATED', 'Devolución Iniciada. ID de Transacción: %s - Código Auto.: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: Ordenó una captura pero no marcó la casilla de Confirmación.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_BUTTON_TEXT', 'Hacer una Captura');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_CAPTURE_AMOUNT', ' Error: Ordenó una captura pero hay que introducir un valor.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: Hay que especificar un ID de Transacción.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPT_INITIATED', 'Captura de Fondos Iniciada. Cantidad: %s.  ID de Transacción: %s - Código Auto.: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_BUTTON_TEXT', 'Hacer una Cancelación');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_ERROR', 'Error: Ordenó una cancelación pero no marcó la casilla de Confirmación');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_INITIATED', 'Cancelación Iniciada. ID de Transacción: %s - Código de Auto.: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TITLE', '<strong> Transacciones de Devolución</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND', 'Puede devolver dinero a la tarjeta del cliente aquí:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_AMOUNT_TEXT', 'Teclee la cantidad para devolver');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_CC_NUM_TEXT', 'Teclee los últimos cuatro dígitos de la cuenta.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TRANS_ID', 'Teclee el ID de Transacción original:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devolución Emitida');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_SUFFIX', 'Puede devolver una cantidad hasta el valor de la captura. Hay que suministrar los últimos cuatros dígitos de la cuenta utilizada en el pedido original.<br />Puede emitir una devolución dentro de los 120 días posteriores a la fecha de la transacción original.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TITLE', '<strong> Captura de Transacciones</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE', 'Puede capturar fondos previamente autorizados aquí: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_AMOUNT_TEXT', 'Introduzca la cantidad para capturar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_CHECK', 'Compruebe esta caja la cantidad para capturar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TRANS_ID', 'Teclee el ID de Transacción original:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fondos capturados.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_SUFFIX', 'Puede ordenar una Captura dentro de los  30 días posteriores a la fecha de la autorización original. Puede ordenar una Captura UNA VEZ solamente. <br />Asegúrese de que la cantidad es correcta.<br />Si deja la cantidad en blanco se utilizará la cantidad original.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TITLE', '<strong> Cancelación de  Transacciones</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID', 'Puede cancelar una transacción si no se ha cobrado:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_CHECK', 'Marque esta casilla para confirmar:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_DEFAULT_MESSAGE', 'Transacción Cancelada');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_SUFFIX', 'Hay que terminar una Cancelación antes de que la transacción original haya sido cobrada como parte de la remesa del día.');

?>
