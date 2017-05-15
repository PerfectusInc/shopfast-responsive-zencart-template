<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: ajeh  Modified in v1.5.4 $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', '¡Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Derechos &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Tienda Software:<a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
  $locales = array('es_ES.UTF8', 'es', 'Spanish_Spain.1252');
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="es"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'páginas vistas desde');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME', 'Vale de Compra');
  define('TEXT_GV_NAMES', 'Vales de Compra');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM', 'Código del Cupón');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Código del cupón de descuento: ');

// text for gender
  define('MALE', 'Sr.');
  define('FEMALE', 'Sra.');
  define('MALE_ADDRESS', 'Sr.');
  define('FEMALE_ADDRESS', 'Sra.');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[todos]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Categorías');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Fabricantes');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Novedades');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nuevos producto');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Destacado');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Producto destacados');
  define('TEXT_NO_FEATURED_PRODUCTS', 'En breve añadiremos más productos. Visítenos regularmente para conocer las novedades.');

  define('TEXT_NO_ALL_PRODUCTS', 'En breve añadiremos más productos. Visítenos regularmente para conocer las novedades.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Todo producto');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Buscar');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Búsqueda avanzada');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Ofertas');
  define('CATEGORIES_BOX_HEADING_SPECIALS', 'Ofertas');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Comentarios');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Escriba un comentario sobre este producto.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Actualmente no hay comentarios sobre el producto.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '¡%s de 5 estrellas!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Carro de la compra');
  define('BOX_SHOPPING_CART_EMPTY', 'No hay artículos en el carro');
  define('BOX_SHOPPING_CART_DIVIDER', '-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Compras recientes');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Los más vendidos');
  define('BOX_HEADING_BESTSELLERS_IN', 'Los más vendidos en <br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Avisos');
define('BOX_NOTIFICATIONS_NOTIFY', 'Notifíquenme cuando haya actualizaciones de <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'No me notifiquen las actualizaciones de <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Info del fabricante');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Página web de %s');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Otros productos');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Idiomas');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Divisas');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Información');
  define('BOX_INFORMATION_PRIVACY', 'Aviso de privacidad');
  define('BOX_INFORMATION_CONDITIONS', 'Condiciones de uso');
  define('BOX_INFORMATION_SHIPPING', 'Envío y devoluciones');
  define('BOX_INFORMATION_CONTACT', 'Contáctenos');
  define('BOX_BBINDEX', 'Foro');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Baja del boletín');

  define('BOX_INFORMATION_SITE_MAP', 'Mapa del Sitio');

// information box text in sideboxes/more_information.php - were TUTORIAL_
 define('BOX_HEADING_MORE_INFORMATION', 'Más información');
 define('BOX_INFORMATION_PAGE_2', 'Página 2');
 define('BOX_INFORMATION_PAGE_3', 'Página 3');
 define('BOX_INFORMATION_PAGE_4', 'Página 4');

//New billing address text
 define('SET_AS_PRIMARY' , 'Marcar como dirección principal');
 define('NEW_ADDRESS_TITLE', 'Dirección de facturación');

// javascript messages
 define('JS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ha ocurrido un error durante el procesamiento del formulario.\n\nPor favor, realice las siguientes correcciones:\n\n');

 define('JS_REVIEW_TEXT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* El \'texto del comentario\' debe tener al menos ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.');
 define('JS_REVIEW_RATING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Debe valorar el producto.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Por favor seleccione un método de pago para su pedido.');

  define('JS_ERROR_SUBMITTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El formulario está siendo enviado. Por favor, presione OK y espere a que se procese el proceso.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Por favor, seleccione un método de pago para su pedido.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Por favor, confirme los términos y condiciones acerca de este pedido haciendo click en la casilla inferior.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Por favor, confirme la política de privacidad haciendo click en la casilla inferior.');

  define('CATEGORY_COMPANY', 'Datos de la empresa');
  define('CATEGORY_PERSONAL', 'Datos personales');
  define('CATEGORY_ADDRESS', 'Dirección');
  define('CATEGORY_CONTACT', 'Información de contacto');
  define('CATEGORY_OPTIONS', 'Opciones');
  define('CATEGORY_PASSWORD', 'Contraseña');
  define('CATEGORY_LOGIN', 'Entrar/Registrarse');
  define('PULL_DOWN_DEFAULT', 'Seleccione su país');
  define('PLEASE_SELECT', 'Seleccione ...');
  define('TYPE_BELOW', 'Teclee una selección abajo ...');

  define('ENTRY_COMPANY', 'Nombre de la empresa:');
  define('ENTRY_COMPANY_ERROR', 'Teclee el nombre de la empresa.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Salutación:');
  define('ENTRY_GENDER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Por favor escoja una opción (Sr./Sra.)');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Nombre:');
  define('ENTRY_FIRST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El nombre debe tener un mínimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Apellidos:');
  define('ENTRY_LAST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Cada apellido debe tener un mínimo de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La fecha de nacimiento debe tener este formato: MM/DD/YYYY (ej. 05/21/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '(ej. 05/21/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'E-mail:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El e-mail debe tener un mínimo de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Este e-mail parece no ser válido - por favor, realice las correcciones necesarias.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Este e-mail ya existe en nuestra base de datos - por favor, entre con otro e-mail o cree otra cuenta con una dirección de e-mail diferente.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Nombre de usuario del foro:');
  define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ese nombre ya existe.');
  define('ENTRY_NICK_LENGTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El nombre debe tener un mínimo de ' . ENTRY_NICK_MIN_LENGTH . ' caracteres.');
  define('ENTRY_STREET_ADDRESS', 'Dirección:');
  define('ENTRY_STREET_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La dirección debe tener un mínimo de  ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Dirección Línea 2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Código postal:');
  define('ENTRY_POST_CODE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El código postal debe tener un mínimo de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Localidad:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Código de referencia:');

  define('ENTRY_CITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La localidad debe tener un mínimo de ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Provincia:');
  define('ENTRY_STATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La provincia debe tener un mínimo de ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
  define('ENTRY_STATE_ERROR_SELECT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Por favor, seleccione una provincia en el menú desplegable.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Seleccionar --');
  define('ENTRY_COUNTRY', 'País:');
  define('ENTRY_COUNTRY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Debe seleccionar un país en el menú desplegable.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Teléfono:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El teléfono debe tener un mínimo de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' números.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Boletín:');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Suscribirse');
  define('ENTRY_NEWSLETTER_NO', 'Darse de baja');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Contraseña:');
  define('ENTRY_PASSWORD_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La confirmación de la contraseña y la contraseña deben ser iguales.');
  define('ENTRY_PASSWORD_TEXT', '* (al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmar contraseña:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Contraseña actual:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
  define('ENTRY_PASSWORD_NEW', 'Nueva contraseña:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La nueva contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La confirmación de la contraseña debe ser igual a la nueva contraseña.');
  define('PASSWORD_HIDDEN', '--OCULTO--');

  define('FORM_REQUIRED_INFORMATION', '* Información obligatoria');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> productos)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> pedidos)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> comentarios)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> nuevos productos)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> ofertas)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> featured products)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> products)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Primera Página');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Página anterior');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Página siguiente');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Ultima Página');
  define('PREVNEXT_TITLE_PAGE_NO', 'Página %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Listado anterior de %d Páginas');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Listado siguiente de %d Páginas');
  define('PREVNEXT_BUTTON_FIRST', '<i class="fa fa-angle-double-left"></i> First');
  define('PREVNEXT_BUTTON_PREV', '<i class="fa fa-angle-left fa-lg"></i>');
  define('PREVNEXT_BUTTON_NEXT', '<i class="fa fa-angle-right fa-lg"></i>');
  define('PREVNEXT_BUTTON_LAST', 'LAST <i class="fa fa-angle-double-right"></i>');


  define('TEXT_BASE_PRICE', 'Desde: ');

  define('TEXT_CLICK_TO_ENLARGE', 'Ampliar imagen');

  define('TEXT_SORT_PRODUCTS', 'Ordenar productos ');
  define('TEXT_DESCENDINGLY', 'en sentido descendente');
  define('TEXT_ASCENDINGLY', 'en sentido ascendente');
  define('TEXT_BY', ' por ');

  define('TEXT_REVIEW_BY', 'por %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s palabras');
  define('TEXT_REVIEW_RATING', 'Valoración: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Fecha añadida: %s');
  define('TEXT_NO_REVIEWS', 'No hay comentarios de productos.');

  define('TEXT_NO_NEW_PRODUCTS', 'Nuevos productos estarán muy pronto disponibles. Por favor, visítenos de nuevo.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Impuesto desconocido');

  define('TEXT_REQUIRED', '<span class="errorText">Necesario</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advertencia de Seguridad: El directorio de la instalación existe en: %s. Por favor elimine este directorio por razones de seguridad.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Advertencia: Puedo escribir en el archivo de la configuración: %s. Esto es un potencial riesgo de seguridad - por favor fije los permisos de derechos del usuario en este archivo (sólo-lectura, CHMOD 644 o 444 por ejemplo). Puede necesitar utilizar el panel de control/gestión de archivos del servicio de alojamiento de su página para cambiar los permisos. Pida asistencia a su servicio de alojamiento. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Ver preguntas frecuentes</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No es posible eliminar el archivo. Posiblemente tendrá que usar FTP para eliminarlo debido de limitaciones de la configuración de permisos en el servidor.');
  define('WARNING_SESSION_AUTO_START', 'Advertencia: session.auto_start está habilitado - inhabilite por favor esta característica del php en php.ini y reinicie el servidor.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para descargar los productos no existe: ' . DIR_FS_DOWNLOAD . '. Los productos descargables no trabajarán hasta que este directorio sea válido.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio del cache SQL no existe: ' . DIR_FS_SQL_CACHE . '. SQL cache no podrá funcionar hasta que el directorio sea creado.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Advertencia: No se puede escribir en el directorio SQL cache: ' . DIR_FS_SQL_CACHE . '. SQL cache no podrá funcionar hasta que los permisos del usuario sean establecidos.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'La versión de su base de datos parece demasiado antiguo, se necesita actualizarlo. Ver Admin->Herramientas->Info. del Servidor para revisar el nivel de actualización.');  
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVISO: No se pudo localizar el archivo del idioma: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La fecha de vencimiento de la tarjeta de crédito no es válido. Por favor revise la fecha e inténtelo de nuevo.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El número de la tarjeta de crédito ingresado no es válido. Por favor revise el número e inténtelo de nuevo.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los primeros cuatro dígitos del número ingresado son: %s. Si el número es correcto, nosotros no aceptamos este tipo de tarjeta de crédito. Si está equivocado, por favor inténtelo de nuevo.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Cupones de descuento');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Saldo ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Cuenta');
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', 'Enhorabuena, ha canjeado ');
  define('ERROR_NO_REDEEM_CODE', 'No ha ingresado a ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM.'inválido ');
  define('TABLE_HEADING_CREDIT', 'Créditos disponibles');
  define('GV_HAS_VOUCHERA', 'Tiene fondos en su cuenta de '. TEXT_GV_NAME . ' Si Ud. quiere <br />
                         puede enviar esos fondos por <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>email</strong></a> a alguien');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Usted no tiene suficiente fondos para enviar dicha cantidad.');
  define('BOX_SEND_TO_FRIEND', 'Enviar ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' canjeado');
  define('CART_COUPON', 'Cupón :');
  define('CART_COUPON_INFO', 'más información');
  define('TEXT_SEND_OR_SPEND', 'Tiene un saldo positivo en su ' . TEXT_GV_NAME . ' cuenta. Puede comprar algo o enviárselo a otro usuario. Para enviarlo, haga un click en el botón abajo.');
  define('TEXT_BALANCE_IS', 'El saldo de su ' . TEXT_GV_NAME . ' es: ');
  define('TEXT_AVAILABLE_BALANCE', 'Su Cuenta de' . TEXT_GV_NAME);

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Vale de compra/Cupón');
  define('PAYMENT_MODULE_GV', 'VC/CD');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Créditos disponibles');

  define('TEXT_INVALID_REDEEM_COUPON', 'Código de cupón invalido');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Tiene que gastar un mínimo de %s para canjear este cupón');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Este cupón no está disponible todavía');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Este cupón ha caducado');
  define('TEXT_INVALID_USES_COUPON', 'Este cupón podía ser usado solamente');
  define('TIMES', ' veces.');
  define('TIME', ' vez.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Usted ha utilizado el cupón con código: %s el número máximo de veces permitido por cliente');
  define('REDEEMED_COUPON', 'un valor del cupón ');
  define('REDEEMED_MIN_ORDER', 'en pedidos por encima de ');
  define('REDEEMED_RESTRICTIONS', ' [se aplican restricciones Producto-Categoría]');
  define('TEXT_ERROR', 'Ha ocurrido un error');
  define('TEXT_INVALID_COUPON_PRODUCT', 'El código del cupón no es válido para ningún producto de los que están en su carro');
  define('TEXT_VALID_COUPON', 'Felicidades, ha cajeado el cupón de descuento');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'El código de cupón no es válido para la dirección elegida.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... más info');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS', 'Su dirección IP es: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION', 'Información de la dirección');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART', 'Cantidad en el carro: ');
  define('PRODUCTS_ORDER_QTY_TEXT', 'Añadir al carro: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El producto ha sido añadido al carro ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El producto(s) seleccionado ha sido añadido al carro ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','lbs');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','lbs');
  define('TEXT_SHIPPING_BOXES', 'Cajas');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX', 'Ahorre:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT', '&nbsp;descuento');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE', 'Venta:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX', 'Patrocinador');
  define('TEXT_BANNER_BOX', 'Por favor, visite a nuestro patrocinador ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Además puede ver...');
  define('TEXT_BANNER_BOX2','Vea hoy!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL', 'Patrocinador');
  define('TEXT_BANNER_BOX_ALL', 'Por favor, visite a nuestro patrocinador ...');

// boxes defines
  define('PULL_DOWN_ALL', 'Seleccione');
  define('PULL_DOWN_MANUFACTURERS','- Reinicio -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Seleccione');

// general Sort By
  define('TEXT_INFO_SORT_BY', 'Ordenar por: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Haga click en la imagen para cerrar');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Cerrar ventana ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error:  Tipo de fichero no permitido.');
  define('WARNING_NO_FILE_UPLOADED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Advertencia:  no se cargó el fichero.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Éxito:  fichero guardado correctamente.');
  define('ERROR_FILE_NOT_SAVED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error:  fichero no guardado.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error:  destino no escribible.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error: el destino no existe.');
  define('ERROR_FILE_TOO_BIG', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>AVISO: El archivo es demasiado grande para cargarse!<br />El pedido puede procesarse pero, por favor, contáctenos para ayudarle');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'AVISO: Esta página web no estará operativa por razones de mantenimiento: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'AVISO: Esta página web no está operativa por razones de mantenimiento');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '¡Es gratis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Llame para saber el precio');
  define('TEXT_CALL_FOR_PRICE', 'Llame para saber el precio');

  define('TEXT_INVALID_SELECTION',' Elijó una Opción Inválido: ');
  define('TEXT_ERROR_OPTION_FOR', ' En la Opción para: ');
  define('TEXT_INVALID_USER_INPUT', 'Entrada del usuario requerida<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Mín: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING', 'En el carro:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING', 'Añadir adicionalmente:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Máx:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mezclado DESHABILITADO');
  define('TEXT_PRODUCTS_MIX_ON','*Mezclado HABILITADO');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*No puede mezclar las opciones de este producto para cumplir con la cantidad mínima necesaria.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*La combinación de opciones está HABILITADA<br />');

  define('ERROR_MAXIMUM_QTY', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La cantidad añadida al carro ha sido modificada - hay una restricción del máximo permitido. Ver este producto:<br />');
  define('ERROR_CORRECTIONS_HEADING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Por favor corrija lo siguiente: <br />');
  define('ERROR_QUANTITY_ADJUSTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La cantidad añadida al carro ha sido ajustada - El producto requerido no está disponible en cantidades fraccionadas. La cantidad de este producto es:<br />');
  define('ERROR_QUANTITY_CHANGED_FROM', ', ha sido cambiado de: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' a ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTA: Las descargas no están disponibles hasta que el pago haya sido comprobado');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT', '<br />El articulo: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Lo sentimos pero este producto ha sido retirado de nuestro inventario.<br />Este producto ha sido eliminado de su carro. Contáctenos para más información.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El artículo: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Lo sentimos pero las opciones elegidas para este producto han sido modificadas y no están disponibles actualmente.<br />Este producto ha sido eliminado de su carro.');
  define('ERROR_PRODUCT_QUANTITY_MIN',' ... Errores de cantidad mínima - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Errores de las cantidades de unidades - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... Valores no válidos para la opción seleccionada ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br />Usted pidió un total de: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Errores de cantidad máxima - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' tiene una restricción de cantidad mínima. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Errores de las cantidades de unidades - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Errores de cantidad máxima - ');

  define('WARNING_SHOPPING_CART_COMBINED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>AVISO: Para su comodidad, en el carro permanecen los productos añadidos en su última visita. Por favor, revise su carro antes de finalizar la sesión.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La cantidad ha sido ajustada al nivel de stock actual. ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'La información del usuario no puede ser validada!<br />Por favor, conéctese o abra una nueva cuenta. ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS', 'Productos destacados  ');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Productos nuevos');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Próximos productos');
  define('TABLE_HEADING_DATE_EXPECTED', 'Fecha de espera');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Ofertas productos');

  define('CAPTION_UPCOMING_PRODUCTS', 'Pronto tendremos estos productos disponibles');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS', 'la tabla contiene una lista de productos que pronto estarán disponibles y las fechas previstas');

// meta tags special defines
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT', 'Es gratis!');

// customer login
define('TEXT_SHOWCASE_ONLY', 'Contáctenos');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE', 'Precio no disponible');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE', 'Entrar para ver el precio');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM', 'Sólo Exposición');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Precio no disponible');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'PENDIENTE DE APROBACION');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE', 'Entrar a la tienda');

// text pricing
define('TEXT_CHARGES_WORD', 'Cargo Calculado:');
define('TEXT_PER_WORD','<br />Precio por palabra: ');
define('TEXT_WORDS_FREE',' Palabra(s) gratis ');
define('TEXT_CHARGES_LETTERS', 'Cargo Calculado:');
define('TEXT_PER_LETTER','<br />Precio por letra: ');
define('TEXT_LETTERS_FREE',' Letra(s) gratis ');
define('TEXT_ONETIME_CHARGES','*solo se cobra una vez = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . 'sólo se cobra una vez = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opción Descuentos al por mayor');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','CANTIDAD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRECIO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'En la opción Descuentos al por mayor se aplica un solo cargo');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caracteres máximos permitidos');
  define('TEXT_REMAINING', 'que quedan');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Estimación de los gastos del envío:');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Por favor <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Entrar</span></a>, para mostrarle el costo de su envío.');
  define('CART_SHIPPING_METHOD_TEXT', 'Métodos de envío disponibles:');
  define('CART_SHIPPING_METHOD_RATES', 'Tarifas:');
  define('CART_SHIPPING_METHOD_TO', 'Enviar a: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Enviar a: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Entrar</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT', 'Envío gratis');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Descargas');
  define('CART_SHIPPING_METHOD_RECALCULATE', 'Recalcular');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS', 'Dirección:');
  define('CART_OT', 'Precio Estimado:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS', 'Producto(s) en el carro: ');
  define('CART_SELECT', 'Seleccionar');
  define('ERROR_CART_UPDATE', '<strong>Por favor, actualice su pedido.</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Actualizar');
  define('EMPTY_CART_TEXT_NO_QUOTE', '¡Lo siento! ha excedido el tiempo de su sesión ... Por favor, actualice su carro para obtener el presupuesto de envío ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'El precio de los portes depende del código postal elegido:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Descuentos por Cantidades');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Descuentos por Cantidades Precio Nuevo');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Descuentos por Cantidades');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Los descuentos pueden variar en función de las opciones elegidas');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Descuentos por Cantidades no disponibles ...');

// sort order titles for dropdowns
define('PULL_DOWN_ALL_RESET','- RESETEAR - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nombre del producto');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Productos - Descripción');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Precio - bajo a alto');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Precio - alto a bajo');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modelo');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Fecha Añadida - Nueva a antigua');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Fecha Añadida - Antigua a nueva');
define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Mostrar la predeterminada');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Enlace Caduca');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Quedan');
  define('HEADING_DOWNLOAD', 'Para bajar los archivos, haga click en el botón de Descarga y elija "Guardar en el disco" del menú.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME', 'Nombre del archivo');
  define('TABLE_HEADING_PRODUCT_NAME', 'Nombre del productos');
  define('TABLE_HEADING_BYTE_SIZE', 'Tamaño del archivo');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Ilimitado');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');
  define('PAYMENT_JAVASCRIPT_DISABLED', 'No puede continuar con el proceso de compra porque Javscript está desactivado en su navegador. Es imprescindible activarlo para completar la compra.');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Cantidad');
  define('TABLE_HEADING_PRODUCTS', 'Artículo');
  define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacidad');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Por favor, acepte nuestra declaración de privacidad marcando la siguiente casilla. Puede leer la declaración de privacidad <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aquí</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'He leído y acepto la declaración de privacidad.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Dirección');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Datos de contacto adicionales');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Confirma tu edad');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Detalles de la cuenta');
  define('TABLE_HEADING_REFERRAL_DETAILS', '¿Cómo supo de nosotros?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Lo sentimos, pero no tratamos con direcciones de envio/facturación en "%s". Por favor actualice esta dirección para continuar.');

  define('ENTRY_EMAIL_PREFERENCE', 'Boletín y preferencias de email');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY', 'Solo-TEXTO');
  define('EMAIL_SEND_FAILED','ERROR: No se ha podido enviar el email a : "%s" <%s> con sujeto: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Error - No se ha podido conectar con la base de datos');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Parece que hay un problema con la base de datos. Precisa mantenimiento.</a>');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVISO: EZ-PAGES ENCABEZAMIENTO - Activado sólo para la IP del Administrador.');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVISO: EZ-PAGES PIE - Activado sólo para la IP del Administrador.');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVISO: EZ-PAGES CAJA LATERAL - Activado sólo para la IP del Administrador.');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Artículos que empiezan por ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Resetear --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
