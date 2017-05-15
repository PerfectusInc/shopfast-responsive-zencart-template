<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: whos_online.php 18698 2012-01-12 14:50:06Z LaVale $
 */

define('HEADING_TITLE', 'Chi c\'&egrave; On line');

define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nome Completo');
define('TABLE_HEADING_IP_ADDRESS', 'Indirizzo IP');
define('TABLE_HEADING_SESSION_ID', 'Sessione');
define('TABLE_HEADING_ENTRY_TIME', 'Ora di Accesso');
define('TABLE_HEADING_LAST_CLICK', 'Ultimo Click');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tempo dall\'ultimo Click:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Ultimo URL');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_SHOPPING_CART', 'Utenti del Negozio');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotale');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Attualmente ci sono %s acquirenti online');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'AGGIORNA LISTA');
  define('WHOS_ONLINE_LEGEND_TEXT','Legenda:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Carrello Attivo');
  define('WHOS_ONLINE_INACTIVE_TEXT','Carrello inattivo');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Nessun Carrello Attivato');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Nessun Carrello');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','NON attivo dall\'ultimo Click >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','NON attivo dall\'accesso >');
  define('WHOS_ONLINE_REMOVED_TEXT','sar&agrave; rimosso dall\'elenco');

// whos_online.php
  define('WHOIS_TIMER_REMOVE',1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
  define('WHOIS_TIMER_INACTIVE',180); // seconds when considered inactive - 180 default = 3 minutes
  define('WHOIS_TIMER_DEAD',540); // seconds when considered dead - 540 default = 9 minutes
  define('WHOIS_SHOW_HOST','1'); // show Last Clicked time and host name - 1 default
  define('WHOIS_REPEAT_LEGEND_BOTTOM','12'); // show legend on bottom when more than how many entries - 12 default
  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

  define('TEXT_SESSION_ID', '<strong>ID Sessione:</strong> ');
  define('TEXT_HOST', '<strong>Host:</strong> ');
  define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
  define('TEXT_EMPTY_CART', '<strong>Car. Vuoto</strong>');
  
  define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Escludere Spiders?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Escludere Indirizzo IP Amministratore?');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Aggiornamento ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'ogni %s secondi.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manualmente');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'SPENTO');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
?>