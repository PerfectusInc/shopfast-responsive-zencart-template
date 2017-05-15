<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Oct 28 23:52:35 2013 -0400 Modified in v1.5.2 $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Zen Cart :: El Arte de E-Comercio');
define('HEADER_LOGO_WIDTH', '200');//px removed for validation
define('HEADER_LOGO_HEIGHT', '70');//px removed for validation
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('es_ES.UTF8', 'Spanish_Spain.1252', 'es');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'MM/dd/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags Definidas');
define('ICON_METATAGS_OFF', 'Meta Tags No Definidas');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Definidas:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTA:</strong> La tagline de tu página es tu definición de la página en el archivo meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="es-ES"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Inicio');
define('HEADER_TITLE_SUPPORT_SITE', 'Web Zen Cart');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catálogo');
define('HEADER_TITLE_VERSION', 'Versión');
define('HEADER_TITLE_ACCOUNT', 'Cuenta Admin');
define('HEADER_TITLE_LOGOFF', 'Salir');
//define('HEADER_TITLE_ADMINISTRATION', 'Administración');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME', 'Vale de Compra');
  define('TEXT_GV_NAMES', 'Vales de Compra');
  define('TEXT_DISCOUNT_COUPON', 'Cupón de Descuento');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM', 'Código de Canje');

// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');

define('NONE', 'Ninguno');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Configuración');
define('BOX_CONFIGURATION_MY_STORE', 'Mi Tienda');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Valores Mínimos');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Valores Máximos');
define('BOX_CONFIGURATION_IMAGES', 'Imágenes');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Datos del Cliente');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Envios/Embalaje');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Listado de Productos');
define('BOX_CONFIGURATION_STOCK', 'Stock');
define('BOX_CONFIGURATION_LOGGING', 'Historiales');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Opciones de E-Mail');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Opciones de Atributos');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'Compresión GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sesiones');
define('BOX_CONFIGURATION_REGULATIONS', 'Notificaciones Legales');
define('BOX_CONFIGURATION_GV_COUPONS', 'Vales de Compra');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Tarjetas de Crédito');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Info del Producto');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Opciones de Estructura');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Mantenimiento de la Tienda');
define('BOX_CONFIGURATION_NEW_LISTING', 'Listado: Nuevos');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Listado: Destacados');
define('BOX_CONFIGURATION_ALL_LISTING', 'Listado: Todos');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Listado: Inicio');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Estatus Define Pages');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Opciones EZ-Pages');

// modules box text
define('BOX_HEADING_MODULES', 'Módulos');
define('BOX_MODULES_PAYMENT', 'Pago');
define('BOX_MODULES_SHIPPING', 'Envío');
define('BOX_MODULES_ORDER_TOTAL', 'Total de Pedido');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipos de producto');

// categories box text
define('BOX_HEADING_CATALOG', 'Catálogo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorías/Productos');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipos de productos');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Nombres de Opciones');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Valores de Opciones');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Ofertas Especiales');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Productos por Venir');
define('BOX_CATALOG_SALEMAKER', 'Rebajas');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gestor de Precios de Productos');
define('BOX_CATALOG_PRODUCT', 'Producto');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Productos a Categorías');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Precios por Grupo');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Pedido');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Albarán');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Ubicaciones / Impuestos');
define('BOX_TAXES_COUNTRIES', 'Países');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Descripción de Zonas');
define('BOX_TAXES_TAX_CLASSES', 'Clases de Impuestos');
define('BOX_TAXES_TAX_RATES', 'Tasas de Impuestos');

// reports box text
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Productos Vistos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Productos Comprados');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total de Pedidos por Cliente');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Productos con stock bajo');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Origen de clientes');

// tools text
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Selección de Plantilla');
define('BOX_TOOLS_BACKUP', 'Copia de Seguridad de la BBDD');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestor de Banners');
define('BOX_TOOLS_CACHE', 'Control del Caché');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir Idiomas');
define('BOX_TOOLS_FILE_MANAGER', 'Gestionar Ficheros');
define('BOX_TOOLS_MAIL', 'Enviar Correo');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Admin. Boletines');
define('BOX_TOOLS_SERVER_INFO', 'Info. del Servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Quién Está Conectado');
define('BOX_TOOLS_STORE_MANAGER', 'Gestionar Tienda');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Buscador de Código');
define('BOX_TOOLS_SQLPATCH', 'Instalar parches SQL');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR', 'Editor de páginas');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Página Principal');
define('BOX_TOOLS_DEFINE_CONTACT_US', 'Contacto');
define('BOX_TOOLS_DEFINE_PRIVACY', 'Privacidad');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO', 'Envíos y Devoluciones');
define('BOX_TOOLS_DEFINE_CONDITIONS', 'Condiciones de Uso');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS', 'Compra Exitosa');
define('BOX_TOOLS_DEFINE_PAGE_2','Página 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Página 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Página 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Localización');
define('BOX_LOCALIZATION_CURRENCIES', 'Monedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado del Pedido');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Cupones');
define('BOX_GV_ADMIN_QUEUE', 'Lista de ' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', 'Enviar por correo ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' enviados');
define('BOX_COUPON_ADMIN', 'Gestionar Cupones');
define('BOX_COUPON_RESTRICT','Restricciones de Cupones');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Gestión de Acceso Admin');
define('BOX_ADMIN_ACCESS_USERS',  'Admin Usuarios');
define('BOX_ADMIN_ACCESS_PROFILES', 'Admin Perfiles');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Admin Página de Registración');
define('BOX_ADMIN_ACCESS_LOGS', 'Archivos de Actividad');

define('IMAGE_RELEASE', 'Canjear ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', '¡Hubo errores al procesar su formulario!\nPor favor, haga las siguientes correcciones:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* El nuevo atributo de producto necesita un valor de precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El nuevo atributo de producto necesita un prefijo de precio\n');

define('JS_PRODUCTS_NAME', '* El nuevo producto necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El nuevo producto necesita una descripción\n');
define('JS_PRODUCTS_PRICE', '* El nuevo producto necesita un precio\n');
define('JS_PRODUCTS_WEIGHT', '* El nuevo producto necesita un peso\n');
define('JS_PRODUCTS_QUANTITY', '* El nuevo producto necesita una cantidad\n');
define('JS_PRODUCTS_MODEL', '* El nuevo producto necesita un modelo\n');
define('JS_PRODUCTS_IMAGE', '* El nuevo producto necesita una imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Se necesita establecer un nuevo precio para este producto\n');

define('JS_GENDER', '* Se debe elegir el \'Sexo\'.\n');
define('JS_FIRST_NAME', '* El \'Nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El \'Apellido\' debe tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* La \'Fecha de Nacimiento\' debe estar en el formato: xx/xx/xxxx (mes/día/año).\n');
define('JS_EMAIL_ADDRESS', '* El \'E-Mail\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* La \'Dirección\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El \'Código Postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* La \'localidad\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* Se debe elegir la \'Provincia\'.\n');
define('JS_STATE_SELECT', '-- Elija Arriba --');
define('JS_ZONE', '* La \'Provincia\' debe seleccionarse de la lista para este país.');
define('JS_COUNTRY', '* Se debe elegir el \'País\'.\n');
define('JS_TELEPHONE', '* El \'Teléfono\' debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', '¡El número de pedido %s no existe!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Dirección');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Opciones');

define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obligatorio</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' letras</span>');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' letras</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de Nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ej. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Email:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' letras</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">¡El email parece no ser válido!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">¡El email ya existe!</span>');
define('ENTRY_COMPANY', 'Nombre de la Empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Descuento por grupo');
define('ENTRY_STREET_ADDRESS', 'Calle:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' letras</span>');
define('ENTRY_SUBURB', 'Barrio:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Código Postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' letras</span>');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' letras</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requerido</span>');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Teléfono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' num</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Boletín de Noticias:');
define('ENTRY_NEWSLETTER_YES', 'Suscrito');
define('ENTRY_NEWSLETTER_NO', 'No Suscrito');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'La contraseña y la confirmación deben coincidir');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Lo siento, su contraseña nueva ha sido rechazada.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Una contraseña debe estar compuesta de letras y números; tener por lo menos %s caracteres y no puede ser igual a cualquiera de las últimas 4 contraseñas utilizadas. Las contraseñas caducan cada 90 días y la tienda le pedirá que cree una contraseña nueva.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERROR: Lo siento, hubo en error al procesar sus datos. Por favor, introduzca la información otra vez.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Enviando el E-Mail');
define('IMAGE_BACK', 'Volver');
define('IMAGE_BACKUP', 'Copia de Seguridad');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar a');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Eliminar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_GO', 'Ir');
define('IMAGE_FILE_MANAGER', 'Administrador de Ficheros');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Establecer Activo');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Establecer Inactivo');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Error -- demasiadas URL/content types introducidas');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Error');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Cerrar');
define('IMAGE_MODULE_INSTALL', 'Instalar Módulo');
define('IMAGE_MODULE_REMOVE', 'Quitar Módulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nuevo Banner');
define('IMAGE_NEW_CATEGORY', 'Nueva Categoría');
define('IMAGE_NEW_COUNTRY', 'Nuevo País');
define('IMAGE_NEW_CURRENCY', 'Nueva Moneda');
define('IMAGE_NEW_FILE', 'Nuevo Fichero');
define('IMAGE_NEW_FOLDER', 'Nueva Carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nuevo Idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo Boletín');
define('IMAGE_NEW_PRODUCT', 'Nuevo Producto *');
define('IMAGE_NEW_SALE', 'Nueva Venta');
define('IMAGE_NEW_TAX_CLASS', 'Nueva Clase de Impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nueva Tasa de Impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva Zona de Impuesto');
define('IMAGE_NEW_ZONE', 'Nueva Zona');
define('IMAGE_OPTION_NAMES', 'Administrador de Nombres de Opciones');
define('IMAGE_OPTION_VALUES', 'Administrador de Valores de Opciones');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Pedido');
define('IMAGE_ORDERS_PACKINGSLIP', 'Albarán');
define('IMAGE_PERMISSIONS', 'Cambiar Permisos');
define('IMAGE_PREVIEW', 'Vista Previa');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Resetear');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar Email');
define('IMAGE_SUBMIT', 'Enviar');
define('IMAGE_UNLOCK', 'Abrir');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizar Tasa de Cambio');
define('IMAGE_UPLOAD', 'Subir');
define('IMAGE_TAX_RATES', 'Tasa de Impuestos');
define('IMAGE_DEFINE_ZONES', 'Definir Zonas');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Administrador de precios de producto');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Actualizar cambios de precio');
define('IMAGE_ADD_BLANK_DISCOUNTS', 'Añadir ' . DISCOUNT_QTY_ADD . ' cantidades de descuento en blanco');
define('IMAGE_CHECK_VERSION', 'Comprobar actualizaciones de la tienda');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Administrar enlaces de categorías múltiples');

define('IMAGE_ICON_STATUS_ON', 'Estado - Activado');
define('IMAGE_ICON_STATUS_OFF', 'Estado - Desactivado');
define('IMAGE_ICON_LINKED', 'El producto está enlazado');

define('IMAGE_REMOVE_SPECIAL', 'Quitar información de precio especial');
define('IMAGE_REMOVE_FEATURED', 'Quitar información de producto destacado');
define('IMAGE_INSTALL_SPECIAL', 'Añadir información de precio especial');
define('IMAGE_INSTALL_FEATURED', 'Añadir información de producto destacado');

define('ICON_PRODUCTS_PRICE_MANAGER', 'Administrador de precios de productos');
define('ICON_COPY_TO', 'Copiar a');
define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Borrar');
define('ICON_EDIT', 'Editar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Fichero');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
//define('ICON_LOCKED', 'Bloqueado');
define('ICON_MOVE', 'Mover');
define('ICON_PERMISSIONS', 'Permisos');
define('ICON_PREVIOUS_LEVEL', 'Nivel Anterior');
define('ICON_PREVIEW', 'Vista Previa');
define('ICON_RESET', 'Restablecer');
define('ICON_STATISTICS', 'Estadísticas');
define('ICON_SUCCESS', 'Éxito');
define('ICON_TICK', 'Correcto');
//define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Advertencia');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Página %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> categorías)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> países)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos destacados)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> boletines)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> estados de pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> grupos de precios)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> tipos de productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos por venir)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos comentados)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> rebajas)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos en oferta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> clases de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> asociaciones de plantillas)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> zonas de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> tasas de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'por defecto');
define('TEXT_SET_DEFAULT', 'Establecer por defecto');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obligatorio</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: Actualmente no hay una moneda establecida por defecto. Por favor, establezca una en: Administración->Localización->Monedas');

define('TEXT_CACHE_CATEGORIES', 'Cuadro de Categorías');
define('TEXT_CACHE_MANUFACTURERS', 'Cuadro de Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'Módulo de También Compraron');

define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'Arriba');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: El destino no existe %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: El destino no puede escribirse %s');
define('ERROR_FILE_NOT_SAVED', 'Error: El fichero subido no se guardó.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: El tipo de fichero subido no está permitido %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Listo: El fichero subido se guardó correctamente %s');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: No se subió el fichero.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Subir ficheros está deshabilitado en el fichero de configuración php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Atención: Su nombre de usuario de administración no es seguro ... o tiene todavía el login por defecto, "Admin admin", o no ha borrado o cambiado: demo demoonly<br />Esta información de login ha de ser cambiada lo antes posible por la seguridad de su tienda.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Su base de datos parece necesitar ser actualizada a una versión superior. Mire Herramientas->Información del Servidor para revisar la versión.');
define('WARN_DATABASE_VERSION_PROBLEM', 'true'); //cambia a false para deshabilitar los avisos sobre la versión del base de datos
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong> AVISO:</strong> Actualmente la página web está en Modo Mantenimiento ...<br />NOTA: No puede probar la mayoría de los módulos de Pago o Envío en Modo Mantenimiento');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'AVISO: Debe borrar estos archivos para evitar vulnerabilidades de seguridad: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Aviso: Carpeta de archivos de la instalación todavía existe en: ' . DIR_FS_CATALOG . 'zc_install. Borre o mueve este carpeta por razones de seguridad.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Aviso: su archivo principal de configuración: %sincludes/configure.php. Es un riesgo de seguridad – fija los permisos de acceso en este archivo a solo-leer, CHMOD 644 o 444.  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Mire este FAQ </a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVISO:  No podía localizar un archivo de idioma: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERROR: Está prohibido desactivar este módulo: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'AVISO: Por favor, compruebe para actividades posibles XSS:');

define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mayo');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Diciembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> vales de compra)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> cupones)');

define('TEXT_VALID_PRODUCTS_LIST', 'Lista de Productos');
define('TEXT_VALID_PRODUCTS_ID', 'ID de Productos');
define('TEXT_VALID_PRODUCTS_NAME', 'Nombre de Productos');
define('TEXT_VALID_PRODUCTS_MODEL', 'Modelo de Productos');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista de Categorías');
define('TEXT_VALID_CATEGORIES_ID', 'ID de Categorías');
define('TEXT_VALID_CATEGORIES_NAME', 'Nombre Categorías');

define('DEFINE_LANGUAGE', 'Definir Idioma:');

define('BOX_ENTRY_COUNTER_DATE', 'Contador de Hits Iniciado:');
define('BOX_ENTRY_COUNTER', 'Contador de Hits:');

// not installed
define('NOT_INSTALLED_TEXT', 'No Instalado');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES', 'Ordenar Valores de Opciones');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS', '<strong>Actualizar el Orden de los Atributos desde la Opción de Valores por Defecto</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES', '<strong>Actualizar el Orden de los Atributos de Todos los Productos</strong><br />para que coincidan con en Orden por Defecto del Valor de Opciones:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME', 'Ordenar Nombres de Opciones');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Controlador de Atributos');

// generic model
  define('TEXT_MODEL', 'Modelo:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER', 'Disposición de los Cuadros');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE', '%s esperando aprobación ');
  define('IMAGE_GIFT_QUEUE', 'Lista de ' . TEXT_GV_NAME);
  define('IMAGE_ORDER', 'Pedido');

  define('IMAGE_DISPLAY', 'Mostrar');
  define('IMAGE_UPDATE_SORT', 'Actualizar Orden');
  define('IMAGE_EDIT_PRODUCT', 'Editar Producto');
  define('IMAGE_EDIT_ATTRIBUTES', 'Editar Atributos');
  define('TEXT_NEW_PRODUCT', 'Producto en Categoría: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES', 'Nombres de Opciones y Valores de Opciones');
  define('TEXT_PRODUCTS_PRICE_MANAGER','ADM. PRECIOS DE PRODUCTOS');
  define('TEXT_PRODUCT_EDIT', 'EDITAR PRODUCTO');
  define('TEXT_ATTRIBUTE_EDIT','EDITAR ATRIBUTOS');
  define('TEXT_PRODUCT_DETAILS','VER DETALLES');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Deducir cantidad');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentaje');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nuevo Precio');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING', 'En el carro:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING', 'Sumar Adicional:');

  define('TEXT_PRODUCTS_MIX_OFF', '*Sin Opciones Mezcladas');
  define('TEXT_PRODUCTS_MIX_ON', '*Con Opciones Mezcladas');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER', 'Filtro de búsqueda: ');
  define('HEADING_TITLE_SEARCH_DETAIL', 'Buscar: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Buscar para productos - separada por comillas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Buscar para productos por nombre/modelo');

  define('PREV_NEXT_PRODUCT', 'Productos: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Categoría desactivada</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Producto desactivado</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE', 'La Demo de Administración se encuentra Activo. Algunas configuraciones serán deshabilitadas');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION', 'La Demo de Administración se encuentra Activo. Algunas configuraciones serán deshabilitadas - <strong>NOTA: Sustitución de Administración Habilitada</strong>');
  define('ERROR_ADMIN_DEMO', 'La Demo de Administración se encuentra Activo... la(s) característica(s) que está tratando de usar ha(n) sido deshabilitada(s)');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER', 'Nueva versión disponible v');
  define('TEXT_VERSION_CHECK_NEW_PATCH', 'Nuevo PARCHE disponible: v');
  define('TEXT_VERSION_CHECK_PATCH', 'parche');
  define('TEXT_VERSION_CHECK_DOWNLOAD', 'Descargar aquí');
  define('TEXT_VERSION_CHECK_CURRENT',' Su versión de Zen Cart&reg; parece ser la más actual.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Mostrando del <b>%d</b> a <b>%d</b> (de <b>%d</b> descargas)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Admin de Descargas');

define('BOX_CATALOG_FEATURED', 'Productos Destacados');

define('ERROR_NOTHING_SELECTED', 'No se seleccionó nada ... no se efectuó ningún cambio');
define('TEXT_STATUS_WARNING','<strong>NOTA:</strong> el estado se auto activa/desactiva cuando se configuran las fechas. Para cambiar el estado manualmente, hay que borrar las fechas.');

define('TEXT_LEGEND_LINKED', 'Producto enlazado');
define('TEXT_MASTER_CATEGORIES_ID', 'Categoría Maestra del producto:');
define('TEXT_LEGEND', 'LEYENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Estado OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Estado ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTA: La Categoría Maestra se usa para calcular el precio donde la categoría del producto afecta al precio en los productos enlazados, por ejemplo: Rebajas</strong>');
define('TEXT_YES', 'Sí');
define('TEXT_NO', 'No');
define('TEXT_CANCEL', 'Cancelar');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>¡Errores en la configuración de envíos!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Atención:</strong> El código postal de la tienda no está definido. Vea Configuración | Envíos/Empaquetado para configurarla.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Atención:</strong> Peso 0 está configurado para envío gratuito y el módulo de envío gratuito no está activado');
define('ERROR_USPS_STATUS', '<strong>Atención:</strong> No se encuentra el nombre de usuario y/o contraseña para USPS, o ... está configurado en TEST en lugar de en PRODUCCIÓN y no funcionará<br />Si todavía no puede obtener presupuestos USPS, contacte con USPS para que activen su cuenta WebTools en su servidor. 1-800-344-7779 o icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'AVISO: No hay módulos de envío habilitados. Vea Módulos->Envío para configurar.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'AVISO: No hay módulos de pago habilitados. Vea Módulos->Pago para configurar.');

// text pricing
define('TEXT_CHARGES_WORD', 'Cobro calculado:');
define('TEXT_PER_WORD','<br />Precio por palabra: ');
define('TEXT_WORDS_FREE',' Palabra(s) gratis ');
define('TEXT_CHARGES_LETTERS', 'Cobro calculado:');
define('TEXT_PER_LETTER','<br />Precio por carta: ');
define('TEXT_LETTERS_FREE',' Carta(s) gratis ');
define('TEXT_ONETIME_CHARGES','*cobros únicos = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*cobros únicos = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opcion descuentos por cantidad');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Cantidad');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRECIO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Cobros únicos para Opción descuentos por cantidad');
define('TEXT_CATEGORIES_PRODUCTS', 'Seleccione una categoría con productos ... o muévase entre los productos');
define('TEXT_PRODUCT_TO_VIEW', 'Seleccione un producto para ver y presione mostrar ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID de Categoría Maestra inválido');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATENCIÓN:</strong> Este producto está enlazado a varias categorías, pero no se ha definido una Categoría Maestra!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'El producto es Pedir Precio');
define('PRODUCTS_PRICE_IS_FREE_TEXT', 'El producto es gratis');

define('TEXT_PRODUCT_WEIGHT_UNIT','lbs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX', 'Ahorra:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '% de descuento');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT', '&nbsp;de descuento');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE', 'Oferta:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED', 'Si no tiene definido un editor HTML o el JavaScript activado. puede introducir texto con HTML puro aquí manualmente.');
define('TEXT_WARNING_HTML_DISABLED', '<span class = "main">Nota: Está usando correo de sólo TEXTO. Si desea enviar HTML debe activar "usar MIME HTML" en Opciones de Email</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML', '<span class = "main">Nota: Está utilizando correo de sólo TEXTO. Si desea enviar HTML debe activar "usar MIME HTML" en las opciones de correo</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML', "Está viendo este texto porque le enviamos un correo en formato HTML, pero su cliente de email no puede mostrar mensajes HTML.");
define('ENTRY_EMAIL_PREFERENCE', 'Preferencias de formato de email:');
define('ENTRY_EMAIL_FORMAT_COMMENTS', 'Seleccionar "ninguno" o "no recibir" desactivará TODO el correo, incluyendo los detalles de pedido');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY', 'Sólo-TEXTO');
define('ENTRY_EMAIL_NONE_DISPLAY', 'Nunca');
define('ENTRY_EMAIL_OPTOUT_DISPLAY', 'Eligió no recibir el boletín de noticias');
define('ENTRY_NOTHING_TO_SEND', 'No ha introducido ningún contenido para su mensaje');
 define('EMAIL_SEND_FAILED','ERROR: Fallo al enviar email a: "%s" <%s> con asunto: "%s"');

  define('EDITOR_NONE', 'Solo Texto');
  define('TEXT_EDITOR_INFO', 'Editor de texto');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Tiene un editor HTML seleccionado en \'My Store\' pero no se localiza la carpeta \'/editors/\'. Por favor, desactive su elección o mueva los archivos del editor a \''.DIR_WS_CATALOG.'editors/\' folder');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordenar por:');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Orden, Nombre de producto');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nombre de producto');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modelo de producto');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Cant.+ Producto, Nombre Producto');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Cant.- Producto, Nombre Producto');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Precio+ Producto, Nombre Producto');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Precio- Producto, Nombre Producto');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Orden de Categoría, Nombre de Categoría');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nombre de Categoría');



  define('TABLE_HEADING_YES', 'Sí');
  define('TABLE_HEADING_NO','No');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>o elija una imagen que ya existe del servidor, nombre:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>¿Sobrescribir imagen existente?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ATENCIÓN: NOMBRE DE FICHERO fue actualizado pero no sobrescrito ');
  define('TEXT_IMAGES_DELETE', '<strong>¿Borrar Imagen?</strong> AVISO: Quita la imagen del producto pero NO del servidor:');
  define('TEXT_IMAGE_CURRENT', 'Nombre de la imagen: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Aviso: No se han definido Nombres de Opciones');
  define('ERROR_DEFINE_OPTION_VALUES', 'Aviso: No se han definido Valores de Opciones');
  define('ERROR_DEFINE_PRODUCTS', 'Aviso: No se ha definido ningunos Productos');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Aviso: No se ha sido definido ningún ID Categoría Maestra para este Producto');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON', 'Añadir incluir subcategorías');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF', 'Añadir sin subcategorías');

  define('BUTTON_PREVIOUS_ALT', 'Producto anterior');
  define('BUTTON_NEXT_ALT', 'Producto siguiente');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Administrar enlaces de categorías múltiples');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copiar producto a categorías múltiples');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'El estado de Copia Global, Añadir y Borrar Características es actualmente NO');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Mostrar características globales - SÍ');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Mostrar características globales - NO');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: No se puede vincular productos de la misma categoría.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No puede escribir en la carpeta de imágenes del catálogo: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: No existe la carpeta de imágenes del catálogo: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: No se puede mover la categoría a la sub-categoría');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Error: No se puede mover el producto a la misma categoría o otra categoría donde ya existe este producto.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Error: ¡La categoría tiene productos!<br /><br />Aunque es permisible hacerlo en un momento dado mientras está manipulando productos y categorías, ¡las categorías pueden contener otras categorías <strong>o</strong> productos pero nunca las dos cosas a la vez!');
  define('SUCCESS_CATEGORY_MOVED', '¡Éxito! La categoría ha sido trasladado ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Error:  ¡No se puede mover una categoría a la misma categoría ID#!');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVISO: EZ-PAGES ENCABEZADO – Solamente activado para la IP del administrador');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVISO: EZ-PAGES PIE DE PÁGINA - Solamente activado para la IP del administrador ');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'WARNING: EZ-PAGES CUADRO - Solamente activado para la IP del administrador ');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW', 'Aviso: Este producto ha sido marcado – Envío Gratis y que no precisa una dirección de envío. <br />Si todos los productos del pedido son virtuales no se pedirá datos del envío.');
  define('TEXT_VIRTUAL_EDIT','Aviso: Este producto ha sido marcado - Envío Gratis y no precisa una dirección de envío<br />Si todos los productos en el carro son Virtual no precisa una dirección de envío.');
  define('TEXT_FREE_SHIPPING_PREVIEW', ' Aviso: Este producto ha sido marcado – Envío Gratis pero que precisa una dirección de envío.<br />Precisa el módulo Envío Gratis cuando todos los productos del pedido son productos marcados como Siempre Envío Gratis');
  define('TEXT_FREE_SHIPPING_EDIT',' Aviso: Si haga que el producto está marcado como Envío Gratis y dirección de envío necesario <br /> Precisa el módulo Envío Gratis cuando todos los productos del pedido son productos marcados como Siempre Envío Gratis');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ATENCIÓN: El registro de actividades del Admin contiene operaciones de más de 2 meses de antigüedad. Debería archivarlo para conservar espacio... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ATENCIÓN: El registro de actividades del Admin tiene más de 50.000 registros. Debería archivarlo para conservar espacio... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Puede ver y archivar los detalles del Admin Activity a través del menú de Gestión de Acceso Admin->Archivos de Actividad Admin, si tiene el permiso apropiado.');

  define('CATEGORY_HAS_SUBCATEGORIES', 'AVISO: Esta categoría tiene subcategorías.<br /> No pueden añadirse productos.');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', '¡AVISO! El email cupón de descuento de bienvenida caduca en %s días');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'AVISO: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Hay que renombrar la carpeta /admin/ a algo único</a>, para evitar acceso por personas ajenas.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'AVISO: El envío de los emails está deshabilitado. Puede habilitarlo en Admin->Configuración->Opciones de Email.');
define('TEXT_CURRENT_VER_IS', 'Actualmente esta utilizando: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERROR: Datos vacios. SUS CAMBIOS *NO* HAN SIDO GUARDADOS. Posiblemente hay un problema con su navegador o su conexión a internet.');
define('TEXT_HIDDEN', 'Ocultos');
define('TEXT_VISIBLE', 'Visibles');
define('TEXT_HIDE', 'Ocultar');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'No Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Tipos de Productos');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Parece que hay un problema con la base de datos. Precisa mantenimiento.</a>');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


