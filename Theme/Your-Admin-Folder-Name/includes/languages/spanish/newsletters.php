<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Gestión de Boletínes de Noticias y Notificaciones de Producto');

define('TABLE_HEADING_NEWSLETTERS', 'Boletines');
define('TABLE_HEADING_SIZE', 'Tamaño');
define('TABLE_HEADING_MODULE', 'Módulo');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_NEWSLETTER_MODULE', 'Módulo:');
define('TEXT_NEWSLETTER_TITLE', 'Título del Boletín:');
define('TEXT_NEWSLETTER_CONTENT', 'Contenido <br />sólo texto:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Contenido <br />RTF:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Añadido el:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Fecha de Envío:');

define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar este boletín?');

define('TEXT_PLEASE_WAIT', 'Por favor, espere...enviando emails...<br><br>¡No interrumpa este proceso!');
define('TEXT_FINISHED_SENDING_EMAILS', '¡Envío de e-mails finalizado!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s correos procesados. <br /><br />Revise su bandeja de entrada de correo ('.EMAIL_FROM.') para:<ul><li>a) mensajes rebotados</li><li>b) direcciones de correo que ya no son válidas</li><li>c) peticiones de borrado.</li></ul>Las peticiones de borrado pueden ser procesadas editando la información del cliente en el menú Admin->Clientes.');

define('ERROR_NEWSLETTER_TITLE', 'Error: Hace falta el título del boletín');
define('ERROR_NEWSLETTER_MODULE', 'Error: Hafe falta el módulo del boletín');
define('ERROR_PLEASE_SELECT_AUDIENCE','Error: Por favor, seleccione la audiencia a la que va destinada el boletín');
?>