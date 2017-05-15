<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package Linkpoint/Yourpay API payment_module
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 14141 2009-08-10 19:34:47Z wilt $
 */

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'FirstData/Linkpoint/YourPay API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', 'Tarjeta de Crédito');

  if (defined('MODULE_PAYMENT_LINKPOINT_API_STATUS') && MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay Merchant Login</a>' . (MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_MODE_RESPONSE != 'LIVE: Production' ? '<br /><br /><strong>Linkpoint/YourPay API Numeros de Prueba:</strong><br /><strong>Visa:</strong> 4111111111111111<br /><strong>MasterCard:</strong> 5419840000000003<br /><strong>Amex:</strong> 371111111111111<br /><strong>Discover:</strong> 6011111111111111' : '') . '<br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Troubleshooting/Setup FAQ</a>');
  } else {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="http://www.zen-cart.com/partners/firstdata">Pinche aquí para abrir una cuenta</a><br /><br /><a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay API Merchant Area</a><br /><br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Pincha aquí para <strong>SETUP/Troubleshooting Instructions</strong></a><br /><br /><strong>Precisa:</strong><br /><hr />*<strong>Cuenta LinkPoint o YourPay</strong> (ve el enlace arriba para abrir una cuenta<br />*<strong>cURL es imprescindible </strong> y debe ser compilada en PHP por su servicio de alojamiento<br />*<strong>Puerta 1129</strong> está utilizada para comunicar con la puerta de enlace, hay que abrirla en el router or cortafuegos<br />*<strong>PEM RSA Key File </strong>Certificado Digital:<br />Para obtener y subir su Certificadado Digital (.PEM) clave:<br />- Entre en su cuenta LinkPoint/Yourpay<br />- Pinche en "Support" en el Menu Principal<br />- Pinche en "Download Center" en Downloads en el menú del cuadro.<br />- Pinche en "download" al lado del apartado "Store PEM File" por el lado derecho de la página.<br />- Tecle la información necesario para empezar la descarga. Habrá que meter su SSN o ID de Impuestos que utilizó en el proceso de abrir su cuenta merchant.<br />- Suba este archivo a includes/modules/payment/linkpoint_api/XXXXXX.pem (suministrado por by LinkPoint - xxxxxx ie el ID de su tienda.)');
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', 'Propietario de la tarjeta:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'Número CVV : ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos '. CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', '* El número de la tarjeta debe tener al menos '  . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* Debe introducir los tres o cuatro últimos dígitos (número CVV) del reverso de la tarjeta.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', '¡Error en la tarjeta de crédito!');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', 'Su tarjeta ha sido rechazada. Por favor, corrija la información errónea y vuelva a intentarlo o póngase en contacto con nosotros para obtener asistencia.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', 'Dirección de Facturación inválida.  Corrija la información errónea y vuelva a intentarlo o póngase en contacto con nosotros para obtener asistencia.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', 'Su tarjeta ha sido rechazada. Por favor, corrija la información errónea y vuelva a intentarlo o póngase en contacto con nosotros para obtener asistencia.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', '¿Qué es esto?');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***SOLAMENTE AUTORIZACIÓN - EL ADMINISTRADOR ARREGLARÁ LOS CARGOS MÁS TARDE.***' . "\n");
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', 'NOTA: Esta era una transacción de PRUEBA ...forzada para devolver una respuesta exitosa');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', 'NOTA: Esta era una transacción de PRUEBA ...forzada para devolver una respuesta de rechazo.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: El módulo no está configurado todavía)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;NO se encuentra el archivo del certificado xyzxyz.pem.</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'No se encontraron las funciones CURL - requeridas para el módulo de pago FirstData/Linkpoint API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DUPLICATE_MESSAGE', '¡Parece una transacción duplicada y no queremos cobrarle dos veces! ¿Quizás realizó el pedido por error? Si no, inténtelo otra vez o póngase en contacto con nosotros para obtener asistencia. Disculpe las molestias.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', ' Disculpe las molestias pero en este momento no podemos contactar con la empresa de la tarjeta de crédito para autorizarla. Habrá de elegir un método alternativo de pago.');
  // note: the above error can occur as a result of:
     // - port 1129 not open for bidirectional communication
     // - CURL is not installed or not functioning
     // - incorrect or invalid or "no" .PEM file found in modules/payment/linkpoint_api folder
     // - In general it means that there was no valid connection made to the gateway... it was stopped before it got outside your server

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'Lo sentimos. Se ha producido un error en el sistema mientras procesábamos su pedido. Su información está segura pero habrá que elegir un método alternativo de pago.');
  // note: the above error is a general error message which is reported when serious and known error conditions occur. Further details are given immediately following the display of this message. If database storage is enabled, details can be found there too.


  // Admin definitions

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'ID FirstData del Pedido:');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'Respuesta AVS:');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Mensaje de Respuesta:');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Código de Aprobación:');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'Número de Referencia:');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Medida de Fraude:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTA: El módulo está en modo de prueba)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ORDERTYPE', 'Tipo de Pedido:');


// admin tools:
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NO_MATCHING_ORDER_FOUND', 'Error: No se pudieron encontrar los detalles de la transacción del archivo especificado.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_BUTTON_TEXT', 'Hacer una Devolución');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_ERROR', 'Error: Ordenó una cancelación pero no marcó la casilla de Confirmación');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_REFUND_AMOUNT', ' Error: Ordenó una devolución pero introdujo un valor no válido');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: Ordenó una devolución pero no introdujo los últimos cuatro dígitos del número de la tarjeta.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_INITIATED', 'Devolución Iniciada. ID Transacción: %s - ID Pedido: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: Ordenó una captura pero no marcó la casilla de Confirmación.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_BUTTON_TEXT', 'Hacer una Captura');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_CAPTURE_AMOUNT', 'Error: Ordenó una captura pero hay que insertar un valor.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: Hay que especificar el ID de la Transacción original:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPT_INITIATED', 'Captura de Fondos Iniciada. Valor: %s.  ID Transacción: %s - Código Aut.: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_BUTTON_TEXT', 'Cancelar');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_ERROR', 'Error: Ordenó una cancelación pero no marcó la casilla de Confirmación. ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_INITIATED', 'Cancelación Iniciada. ID Transacción: %s - Código Aut.: %s');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TITLE', '<strong>Transacciones de Devolución</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND', ' Puede devolver dinero a la tarjeta del cliente aquí:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_AMOUNT_TEXT', 'Teclee la cantidad para devolver');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_TEXT', 'Teclee el ID de Transacción original:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_CC_NUM_TEXT', 'Teclee los últimos cuatro dígitos de la tarjeta.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TRANS_ID', 'Teclee el ID de Transacción original  <em>(suele parecerse a: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devolución Emitida');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_SUFFIX', 'Puede devolver una cantidad hasta el valor de la captura. Hay que suministrar los últimos cuatros dígitos de la cuenta utilizada en el pedido original.<br />No se puede emitir una devolución si la tarjeta ha caducado. Para hacer una devolución a una tarjeta caducada, hay que emitir un vale de crédito desde su terminal Merchant. ');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TITLE', '<strong>Transacciones de Captura </strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE', 'Puede capturar fondos previamente autorizados aquí:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_AMOUNT_TEXT', 'Inserte la cantidad para capturar: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TRANS_ID', 'Teclee el número original de pedido <em>(pe: <strong>5138-i4wcYM</strong>)</em> : ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_TEXT', 'Teclee el Número de Pedido');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fondos capturados.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_SUFFIX', 'Puede ordenar una Captura dentro de los primeros 2-10 días de la fecha de la autorización original, dependiendo de su requisitos Merchant. Puede ordenar una Captura solamente UNA VEZ.<br />Asegúrese de que la cantidad es correcta.<br />Si deje la cantidad en blanco, se utilizará la cantidad original.'); 

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TITLE', '<strong>Cancelación de Transacciones </strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID', 'Puede cancelar una transacción (pre-autorización/captura/devolución) si no ha sido completada. Por favor inserte el ID de Transacción original <em>(suele parecerse a: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_TEXT', 'Teclee la ID de Transacción');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TEXT_COMMENTS', 'Notas (se mostrarán en el Historial del Pedido):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_MESSAGE', 'Transacción Cancelada');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_SUFFIX', 'Hay que completar una cancelación antes de que la transacción original haya sido enviada en la remesa diaria que está programada a las 7:00PM Pacific Time.');


?>
