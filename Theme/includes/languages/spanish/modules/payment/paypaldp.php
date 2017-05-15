<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2005 CardinalCommerce
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Aug 16 01:57:33 2012 -0400 Modified in v1.5.1 $
 */

  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP', 'PayPal Payments Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_NONUSA', 'PayPal Website Payments Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Website Payments Pro Payflow Edition (UK)');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Payments Pro</strong>%s<br />' . '<a href="https://www.paypal.com" target="_blank"> Gestionar su cuenta PayPal.</a>' . '<br /><br /><font color="green"> Configuración:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-pro" target="_blank"> Abra una cuenta PayPal aquí.</a><br />' . 
(defined('MODULE_PAYMENT_PAYPALDP_STATUS') ? '' : '... y haga clic sobre "install" para activar el soporte para PayPal Payments Pro.<br /><a href="http://www.zen-cart.com/getpaypal" target="_blank">Para más ayuda, ver este artículo.</a><br />') . 
(!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '' ? '<span class="alert">2. </span><strong>Parámetros API</strong> de la opción API Credentials en la configuración de perfil de su cuenta PayPal. Este módulo utiliza la opción <strong>API Signature/Firma</strong> opción - necesitará el usuario, contraseña y firma para rellenar los campos inferiores.' : '<span class="alert">2. </span>Asegúrese de insertar los datos de seguridad que correspondan al usuario/contraseña etc. en la parte inferior.') .
'<font color="green"><hr /><strong>Requisitos:</strong></font><br /><hr />*<strong>Express Checkout</strong> debe ser instalado y activado para usar  PayPal Payments Pro, de acuerdo con las condiciones de servicio de PayPal. <br />*También precisa CURL con SLL para comunicar con PayPal. Hay que habilitar CURL para las puertas 80 y 443. <hr />' );
  }

  define('MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION', 'Tarjeta de Crédito');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TITLE', ' Tarjeta de Crédito ');
  define('MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE', ' Tarjeta de Crédito (WPP)');
  define('MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE', ' Tarjeta de Crédito (PF)');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_HEADING', 'Lo sentimos pero no pudimos procesar su tarjeta de crédito.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'La información de la tarjeta que insertó tiene un error. Revíselo e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', ' Nombre de pila del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Apellidos del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Nombre del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Fecha de emisión:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Maestro Issue No.:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Número CVV:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(en el reverso de la tarjeta)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR', 'Transacción para');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Utilice otra tarjeta o póngase en contacto con su banco para más información');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'No podemos procesar su pedido. Elija otro método de pago o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'No podemos procesar su pedido. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Ocurrió un error cuando intentamos contactar con el procesador de pagos. Inténtelo otra vez, elige un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Estimado Propietario de la tienda,' . "\n" . 'Un error ocurrió en el intento de iniciar el proceso de validación del pago. Solamente se mostró el número del error al cliente. Los detalles del error se muestran abajo.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: PayPal Direct Payment Error');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'La dirección no es válida o no coincide con nuestra información. Corrija o elija otra dirección e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal no pudo pagar esta transacción. Elija otra método de pago o comprobar las opciones de pago de su cuanta PayPal antes de seguir.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Ocurrió un error cuando intentamos procesar su tarjeta de crédito. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Perdone la molestia pero no aceptamos su tipo de tarjeta de crédito. Utilice otra tarjeta o comprobar que los datos son correctos o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Hubo un problema en la validación de su cuenta. Inténtelo otra vez.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* El número de la tarjeta de crédito debe tener al menos' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Tecle el número de 3 ó 4 dígitos de la cara trasera de la tarjeta.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'AVISO: Fallo de la verificación de la dirección. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fallo de la verificación del código CVV. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', 'El pedido está pendiente de verificación por la tienda.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta no es válido. Por favor, entre en su cuenta y cámbielo.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos seguir con el pago porque la cuenta PayPal de la tienda no es PayPal Payments Pro o no ha sido contratado el PayPal gateway services, o intentó pagar con una tarjeta AmEx y el soporte para AmEx no ha sido habilitado. Elija un método de pago alternativo para su pedido o quizás otra tipo de tarjeta.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos iniciar el pago porque la cuenta PayPal de la tienda no es EE.UU. PayPal Website Payments Pro o no ha sido contratado PayPal gateway services. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos iniciar el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro 2.0 (UK) o no ha sido contratado PayPal gateway services. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Disculpe las molestias. Los parámetros de autentificación de la cuenta PayPal no han sido configurados o son incorrectos. No podemos completar la transacción. Por favor, notifique a la tienda sobre este problema. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Lo sentimos pero la cuenta PayPal de la tienda tiene base en un país donde actualmente Website Payments Pro no está disponible. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Lo sentimos. La tarjeta de crédito que está utilizando no es compatible con la moneda que seleccionó en la tienda. Cambie la moneda de la tienda/de su pedido o elija otro método de pago para completar su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: ¡El módulo no está configurado todavía)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Intentó pagar con un tipo de tarjeta de crédito no admitido en esta tienda. Disculpe las molestias, por favor inténtelo otra vez con otra tarjeta o elija otro método de pago para completar su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Hubo un problema recuperando los detalles de la transacción.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Hubo un problema para encontrar transacciones que coincidan con los criterios especificados.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'Hubo un problema para cancelar la transacción. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Hubo un problema en la devolución de la cantidad especificada. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Hubo un problema en la autorización de la transacción. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Hubo un problema capturando la transacción. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Su petición de devolución fue rechazada por PayPal.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Solicitó una devolución parcial pero no especificó la cantidad.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Solicitó una devolución total pero no marcó la casilla para confirmarlo.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Solicitó una autorización pero no especificó una cantidad.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Solicitó una captura de fondos pero no especificó una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Solicitó una cancelación pero no marcó la casilla de confirmación.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Solicitó un autorización pero no marcó la casilla de confirmación.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Solicitó una captura de fondos pero no marcó la casilla de confirmación.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'Devolución PayPal para %s iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'Autorización PayPal para %s iniciada. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'Captura PayPal para %s iniciada. ID Comprobante: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'Petición PayPal de Cancelación iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Hubo un error en la transacción. Diríjase a la guía del API o los archivos de transacciones para información detallada.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Disculpe las molestias. Actualmente no podemos procesar pedidos utilizando este método de pago desde la zona geográfica que especificó en su dirección de cuenta. Elija otro método de pago. ');


  // These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nombre');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Apellidos:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Empresa:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Dirección:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Calle:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Localidad:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Provincia:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Código postal:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'País:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email del pagador:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID del pagador:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Estado del pagador:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Estado de la dirección:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipo de pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Estado del pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Razón de pendiente:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Pedido:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Fecha de pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Moneda:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Cantidad bruta:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Costo de pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tasa de cambio:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Productos en el carro:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipo de transacción:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID de transacción:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID de transacción padre:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Devoluciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si quiere devolver este pedido en su totalidad, pinche aquí:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Hacer una Devolución Total');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Hacer una Devolución Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... o teclee la cantidad parcial. ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Introduzca la ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'cantidad de la devolución aquí y haga clic en Devolución Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '* No está permitido solicitar una devolución total después de tramitar una devolución parcial. <br />*Multiples devoluciones parciales están permitidas hasta el valor total del pedido.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota para mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Confirmar: ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si desea autorizar parte de este pedido, inserte la cantidad aquí:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Hacer una Autorización');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong> Nota para mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Captura de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si quiere capturar todo o un valor parcial de la cantidad autorizada para este pedido, inserte la Cantidad de Captura y elija si es el último para este pedido. Marque la casilla de Confirmación antes de hacer la solicitud.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Hacer una Captura');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Cantidad para capturar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', '¿Es esta la captura final?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Gracias por el pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmar: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Cancelación de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si quiere cancelar una autorización, teclee el ID de autorización aquí y confirme:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');    
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Gracias por su interés en nuestros productos. Por favor vuelva cuando lo desee.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Hacer una Cancelación');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Estado Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Código Aut,:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Dirección Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS CP Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Días hasta vencimiento:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargos únicos relacionados a ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulación y otros recargos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Créditos aplicados, incluyendo cupones de descuento, vales de compra etc.');

  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Estado de Pago en Revisión de Fraude: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Esta es una notificación automática para advertirle de que PayPal ha marcado el pago de un pedido nuevo para ser revisado por el Equipo de Fraude. Suele tardar no más que 36 horas. Recomendamos que NO ENVÍE el pedido hasta que el pago haya sido revisado. Puede ver el estado de este pedido en su cuenta PayPal, Transacciones Recientes');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Todos los artículos en el carro (ver los detalles en la tienda y en el comprobante de la tienda).');

  define('CENTINEL_AUTHENTICATION_ERROR', 'Fallo de Autorización - La entidad bancaria indicó que no pudo autenticar esa transacción. Para protegerse contra el uso fraudulento, no puede usar esta tarjeta en esta compra. Elija otro método de pago. ');
  define('CENTINEL_PROCESSING_ERROR', 'Hubo un problema en obtener autorización para la transacción. Tecle otra vez su información de pago, o elija otro método de pago.');
  define("CENTINEL_ERROR_CODE_8000", "8000");
  define("CENTINEL_ERROR_CODE_8000_DESC", "Protocolo No Reconocido, debe ser http:// o https://");
  define("CENTINEL_ERROR_CODE_8010", "8010");
  define("CENTINEL_ERROR_CODE_8010_DESC", "No puedo comunicarse con el servidor MAPS");
  define("CENTINEL_ERROR_CODE_8020", "8020");
  define("CENTINEL_ERROR_CODE_8020_DESC", "Error al procesar la respuesta XML");
  define("CENTINEL_ERROR_CODE_8030", "8030");
  define("CENTINEL_ERROR_CODE_8030_DESC", "Retraso de comunicación fuera de limite ");
  define("CENTINEL_ERROR_CODE_1001", "1001");
  define("CENTINEL_ERROR_CODE_1001_DESC", "Hay un problema de Configuración en la cuenta Cardinal Centinel. Póngase en contacto con su representante Cardinal inmediatamente en implement@cardinalcommerce.com. Sus transacciones NO serán protegidas por el chargeback liability hasta que este problema está resuelto.\n\n" . 'Hay tres pasos para configurar el servicio Cardinal 3D-Secure: ' . "\nl-Login al URL del Cardinal Merchant Admin del pack de bienvenida (no el URL de prueba), y aceptar la licencia.\2-Fije una contraseña de transacción.\n3-Copiar su Cardinal Merchant ID y contraseña Cardinal Transacción al módulo PayPal en Zen Cart.");
  define("CENTINEL_ERROR_CODE_4243", "4243");
  define("CENTINEL_ERROR_CODE_4243_DESC", " Hay un problema de Configuración en la cuenta Cardinal Centinel. Póngase en contacto con su representante Cardinal inmediatamente en implement@cardinalcommerce.com para informarle de que está recibiendo el error Número 4243 cuando intenta usar 3D Secure con su sitio Zen Cart y su cuenta Paypal. Sus transacciones NO serán protegidas por el chargeback liability hasta que este problema esté resuelto.");
