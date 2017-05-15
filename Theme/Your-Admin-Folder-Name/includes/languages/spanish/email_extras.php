<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 27 20:38:11 2013 -0400 Modified in v1.5.2 $
 */

// office use only
  define('OFFICE_FROM', 'De:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_SENT_TO', 'Enviado a:');
  define('OFFICE_EMAIL_TO','E-mail:');
  define('OFFICE_USE', 'Sólo para uso interno:');
  define('OFFICE_LOGIN_NAME', 'Nombre de usuario:');
  define('OFFICE_LOGIN_EMAIL', 'E-mail de usuario:');
  define('OFFICE_LOGIN_PHONE','<strong>Teléfono:</strong>');
  define('OFFICE_IP_ADDRESS', 'Dirección IP:');
  define('OFFICE_HOST_ADDRESS', 'Host:');
  define('OFFICE_DATE_TIME', 'Fecha y Hora:');

// email disclaimer
  define('EMAIL_DISCLAIMER', "\n" . 'Este email lo hemos obtenido a través de usted o de alguien que se ha registrado en nuestra tienda. En caso de no ser el destinatario de esta información, por favor, rogamos nos lo comunique a %s para la eliminación de su dirección electrónica, no copiando ni entregando este mensaje a nadie más y procediendo a su destrucción.');
  define('EMAIL_SPAM_DISCLAIMER','De conformidad a la Ley Orgánica de Protección de Datos de Carácter Personal 15/1999 de España, le informamos que los datos de contacto utilizados para la presente comunicación están incluidos en un fichero debidamente inscrito ante el RGPD con la finalidad de posibilitar las comunicaciones a través de correo electrónico de ' . STORE_NAME . ' con los distintos contactos que ésta mantiene dentro del ejercicio de su actividad (como clientes, asociados, proveedores o personal). Sin perjuicio de ello se le informa de que usted podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición para lo cual debe dirigirse a:<br />' . STORE_NAME . ', ' . STORE_NAME_ADDRESS . '<br />adjuntando acreditación de la identidad".');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Basado en <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[VALES DE COMPRA]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[CUPONES DE DESCUENTO]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ESTADO DE LOS PEDIDOS]');
  define('TEXT_UNSUBSCRIBE', "\n\nPara dejar de recibir futuros boletines y correos promocionales, simplemente haga clic en el siguient enlace: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Desactivado');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin Aviso: Usuario añadido.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Admin Aviso: Un usuario nuevo (%s) ha sido AÑADIDO por %s.' . "\n\n" . 'Si no autorizó esta acción, compruebe la seguridad de la tienda AHORA.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin Aviso: Un usuario ha sido borrado.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Admin Aviso: Un usuario de admin (%s) ha sido borrado por %s.' . "\n\n" . 'Si no autorizó esta acción, compruebe la seguridad de la tienda AHORA.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin Aviso: Los datos de un usuario han sido cambiados.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin Aviso: el email del usuario (%s) ha sido cambiado de (%s) a (%s) por (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin Aviso: el nombre de usuario de (%s) ha sido cambiado de (%s) a (%s) por (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin Aviso: El perfil de seguridad del usuario (%s) ha sido cambiado de (%s) a (%s) por (%s)');