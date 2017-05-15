<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Aug 16 01:57:33 2012 -0400 Modified in v1.5.1 $
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express Checkout via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank"> Gestionar su cuenta PayPal.</a>' : '<a href="https://www.paypal.com" target="_blank"> Gestionar su cuenta PayPal.</a>') . '<br /><br /><font color="green">Configuración:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank"> Abra una cuenta PayPal aquí.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... y haga clic en "install" arriba para activar soporte para PayPal Express Checkout.<br /><a href="http://www.zen-cart.com/getpaypal" target="_blank">Para más ayuda ver este artículo</a><br />') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<br /><span class="alert">2. </span><strong>API parámetros</strong> de la opción API Credentials en su cuenta PayPal Configuración del Perfíl. (Haga clic <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank">aquí</a> para instrucciones sobre el API.) <br /> Este módulo utiliza la opción <strong>API Signature/Firma</strong> opción - necesitará el usuario, contraseña y firma para rellenar los campos abajo.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>parámetros PAYFLOW</strong> Este módulo precisa <strong>PAYFLOW Partner+Vendor+User+Password parámetros</strong> introducidos en los cuatro campos inferiores. Se utilizan en la comunicación con el sistema Payflow y para autorizar las transacciones de su cuenta.' : '<span class="alert">2. </span> Asegúrese de introducir los datos de seguridad correspondientes al username/contraseña etc. abajo.') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><br /><span class="alert">3. </span>En su cuenta PayPal, active <strong>Instant Payment Notification</strong>:<br />en el "Perfil/Profile", seleccione <em>Instant Payment Notification Preferences</em><ul style="margin-top: 0.5;"><li>marque la casilla para habilitar IPN </li><li>si no hay una URL ya definida, vaya a la URL:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>Requisitos:</strong></font><br /><hr />*<strong>CURL</strong> se utiliza para comunicar con el puerto de enlace a través de las puertas 80 y 443 por lo que tienen que estar activadas en su servidor para usar SLL.<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Tarjeta de Crédito');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Compre rápido y seguro con PayPal:');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Tarjeta de crédito');  //(usado para transacciones payflow)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Lo sentimos pero no podemos procesar su tarjeta.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Hubo un error en los datos que insertó. Revíselos e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Tarjeta de crédito Nombre de pila:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', ' Tarjeta de crédito Apellidos:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nombre del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta de crédito:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Fecha de emisión:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', ' Número CVV:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(en el reverso de la tarjeta)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Utilice otra tarjeta o póngase en contacto con su banco para más información');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'No podemos procesar su pedido. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Ocurrió un error cuando intentamos contactar con el procesador de pagos. Inténtelo otra vez, elija  un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Estimado Propietario de la tienda,' . "\n" . 'Un error ocurrió en el intento de iniciar el proceso de validación del pago. Solamente se mostró el número del error al cliente. Los detalles del error se muestran abajo.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: PayPal Express Checkout Error');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'La dirección no es válida o no coincide con nuestra información. Corrija o elija otra dirección e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'La dirección que seleccionó en PayPal no es una dirección confirmada. Vuelva a PayPal y elija o añada una dirección confirmada e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal no pudo pagar esta transacción. Elija otra método de pago o compruebe las opciones de pago de su cuenta PayPal antes de seguir.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Ocurrió un error cuando intentamos procesar su tarjeta de crédito. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Disculpe las molestias  pero no aceptamos su tipo de tarjeta de crédito. Utilice otra tarjeta o compruebe que los datos son correctos o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Hubo un problema en la validación de su cuenta. Inténtelo de nuevo.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos'. CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* El número de la tarjeta de crédito debe tener al menos' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'AVISO: Fallo de la verificación de la dirección. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fallo de la verificación del código CVV. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', 'El pedido está pendiente de verificación por la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' -  Necesita registrar su PayPal API Credentials para poder hacer procesos avanzados de transacciones.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta no es válido. Entre en su cuenta y cámbielo. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos seguir con el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro ni han contratado PayPal gateway services. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Disculpe las molestias. Los parámetros de autentificación de la cuenta PayPal no han sido configurados o los parámetros API no son correctos. No podemos completar la transacción. Por favor, notifique a la tienda sobre este problema. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Lo sentimos - la cuenta PayPal de la tienda tiene base en un país donde actualmente Website Payments Pro no está disponible. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: ¡El módulo no está configurado todavía)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Hubo un problema recuperando los detalles de la transacción.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Hubo un problema para encontrar transacciones que coincidan con los criterios especificados.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Hubo un problema en cancelar la transacción. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Hubo un problema en la devolución de la cantidad especificado. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Hubo un problema en la autorización de la transacción. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Hubo un problema capturando la transacción. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Su petición de devolución fue rechazada por PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Solicitó una devolución parcial pero no especificó la cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Solicitó una devolución total pero no marcó la casilla para confirmarlo.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Solicitó un autorización pero no especificó una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Solicitó una captura de fondos pero no especificó una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Solicitó una cancelación pero no marcó la casilla de confirmación.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Solicitó un autorización pero no marcó la casilla de confirmación.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Solicitó una captura de fondos pero no marcó la casilla de confirmación.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'PayPal devolución para %s iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'PayPal Autorización para %s iniciada. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Captura para %s iniciada. ID Comprobante: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'PayPal petición de Cancelación iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Hubo un error en la transacción. Diríjase a la guía del API o los archivos de transacciones para información detallada.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Disculpe las molestias pero actualmente no podemos procesar pedidos utilizando este método de pago desde la zona geográfica que especificó en su dirección de cuenta. Elija otro método de pago. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Parece que el pedido fue enviado dos veces. Revise Mi Cuenta para ver los detalles del pedido. Utilice el formulario Contact Us si el pedido no aparece en la historia pero ha sido pagado desde su cuenta PayPal. ');

  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Compra con PayPal. La manera de pagar más fácil y más segura.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Haga clic aquí para pagar via PayPal Express Checkout');

// EC buttons -- Do not change these values
///// Debería utilizar solamente las imágenes y enlaces oficiales de esta página: http://ppmts-es.custhelp.com/cgi-bin/ppmts_es.cfg/php/enduser/std_adp.php?p_faqid=634
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/es_ES/i/btn/btn_xpressCheckout.gif');//página registrar/login
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/es_ES/i/btn/btn_xpressCheckoutsm.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypal.com/es_ES/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypal.com/es_ES/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BORDER_COLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BACK_COLOR', ''); // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


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
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... o inserte la cantidad parcial ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Inserte la ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'de la devolución aquí y haga clic en Hacer Devolución Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*No está permitido solicitar una devolución total después de tramitar una devolución parcial. <br />*Permitidas múltiples devoluciones parciales hasta el valor total del pedido.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota para mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Confirmar: ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Comentarios del Sistema: ');
  define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Elegible para Protección:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si quiere autorizar parte de este pedido inserte la cantidad aquí:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Hacer una Autorización');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Captura de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si quiere capturar todo o un valor parcial de la cantidad autorizada para este pedido, inserte la Cantidad de Captura y elija si es el último para este pedido. Marque la casilla de Confirmación antes de hacer la solicitación.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Hacer una Captura');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Cantidad para capturar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', '¿Es esta la captura final?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Gracias por el pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmar: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Cancelación de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si quiere cancelar una autorización, inserte el ID de autorización aquí y confirme:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');    
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Gracias por su interés en nuestros productos.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Hacer una Cancelación');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Estatus Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Código Aut,:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Dirección Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS CP Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Días hasta vencimiento:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'Sus datos para acceder a su cuenta (para revisar la compra) son los siguientes:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargos únicos relacionados con ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulación y otros recargos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Créditos aplicados, incluyendo cupones de descuento, vales de compra, etc.');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Estado de Pago en Revisión de Fraude: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Este es una notificación automática para avisarse de que PayPal ha marcado el pago de un pedido nuevo para ser revisado por el Equipo de Fraude. Suele tardar no más que 36 horas. Recomendamos que NO ENVÍE el pedido hasta que el pago haya sido revisado. Puede ver el estado de este pedido en su cuenta PayPal, Transacciones Recientes');

  define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLEMA: PayPal ha suministrado una dirección en blanco inesperada. <br />Para poder completar la compra, tiene que registrar en la tienda y añadir su dirección. Pinche en el botón abajo para abrir una cuenta.<br />A continuación puede elegir PayPal otra vez como método de pago. Perdone la molestia. Si todavía tiene un problema en terminar el pedido, contáctenos para ayuda. Gracias.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Todos los artículos en el carro (ver los detalles en la tienda y en el comprobante de la tienda).');

