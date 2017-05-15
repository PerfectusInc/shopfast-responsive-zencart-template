<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: whos_online.php 18698 2011-05-04 14:50:06Z wilt $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Vem &auml;r Online');

define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Fullst&auml;ndigt Namn');
define('TABLE_HEADING_IP_ADDRESS', 'IP Adress');
define('TABLE_HEADING_SESSION_ID', 'Session');
define('TABLE_HEADING_ENTRY_TIME', 'Kom in');
define('TABLE_HEADING_LAST_CLICK', 'Aktiv senast');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tid sedan aktiv:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Sista visad sida');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');
define('TABLE_HEADING_SHOPPING_CART', 'Kunds Kundkorg');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Delsumma');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Det finns %s anv&auml;ndare online');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'UPPDATERA LISTA');
  define('WHOS_ONLINE_LEGEND_TEXT','Anvisning:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Aktiva Kundkorgar');
  define('WHOS_ONLINE_INACTIVE_TEXT','Inaktiva Kundkorgar');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Aktiva utan kundkorg');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inaktiva utan Kundkorg');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inaktiv &auml;r senast aktiv >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inaktiv sedan ankomst >');
  define('WHOS_ONLINE_REMOVED_TEXT','kommer att tas bort');

  define('TEXT_SESSION_ID', '<strong>Session ID:</strong> ');
  define('TEXT_HOST', '<strong>Dom&auml;n:</strong> ');
  define('TEXT_USER_AGENT', '<strong>Anv&auml;ndar Agent:</strong> ');
  define('TEXT_EMPTY_CART', '<strong>Tom Kundkorg</strong>');

  define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Exkludera Spindlar?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Exkludera Admin IP Adresser?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default
define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Uppdatering ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'varje %s sekund.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manuellt');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'AV');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sek');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sek');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sek');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
