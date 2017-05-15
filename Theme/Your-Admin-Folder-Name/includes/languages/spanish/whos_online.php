<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: whos_online.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE', 'Quién está Conectado');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nombre completo');
define('TABLE_HEADING_IP_ADDRESS', 'Dirección IP');
define('TABLE_HEADING_SESSION_ID', 'Sessión');
define('TABLE_HEADING_ENTRY_TIME', 'Hora de llegada');
define('TABLE_HEADING_LAST_CLICK', 'Último Click');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tiempo desde el último click:</strong>');
define('TABLE_HEADING_LAST_PAGE_URL', 'Última URL vista');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_SHOPPING_CART', 'Carro de Compras de los Usuarios');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Actualmente hay %s clientes online');

  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ACTUALIZAR LISTA');
  define('WHOS_ONLINE_LEGEND_TEXT','Leyenda:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Carro Activa');
  define('WHOS_ONLINE_INACTIVE_TEXT','Carro Inactiva');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Activo sin carro');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inactivo sin carro');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inactivo es desde el último click >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactivos desde la llegada >');
  define('WHOS_ONLINE_REMOVED_TEXT','serán eliminados');

define('TEXT_SESSION_ID', '<strong>ID Sesión:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Carro Vacío</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Excluye Arañas?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', '¿Excluye Direcciónes IP Admin?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default
define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Actualizando ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'cada %s segundos.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manualmente');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 seg');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 seg');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 seg');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
