<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: whos_online.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Hvem er pålogget');
define('TABLE_HEADING_ONLINE', 'Pålogget');
define('TABLE_HEADING_CUSTOMER_ID', 'Id');
define('TABLE_HEADING_FULL_NAME', 'Fullt navn');
define('TABLE_HEADING_IP_ADDRESS', 'IP-adresse');
define('TABLE_HEADING_SESSION_ID', 'Økt');
define('TABLE_HEADING_ENTRY_TIME', 'Logget inn');
define('TABLE_HEADING_LAST_CLICK', 'Siste klikk');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tid siden siste klikk:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Siste besøkte nettadresse');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_SHOPPING_CART', 'Kundens handlekurv');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Totalsum');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Det er nå %s kunder pålogget');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'Oppdater liste');
define('WHOS_ONLINE_LEGEND_TEXT','Status:');
define('WHOS_ONLINE_ACTIVE_TEXT','Aktiv handlekurv');
define('WHOS_ONLINE_INACTIVE_TEXT','Inaktiv handlekurv');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Aktiv uten handlekurv');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inaktiv uten handlekurv');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inaktiv er siste klikk >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inaktiv siden ankomst >');
define('WHOS_ONLINE_REMOVED_TEXT','vil bli fjernet');

define('TEXT_SESSION_ID', '<strong>Økt-id:</strong> ');
define('TEXT_HOST', '<strong>Tjener:</strong> ');
define('TEXT_USER_AGENT', '<strong>Brukeragent:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Tom handlekurv</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Utelukk roboter?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Utelukk adminsitratorers IP-adresser?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default
define('OFFICE_IP_TO_HOST_ADDRESS', 'AV');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Oppdatering ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'hver %s sekunder.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manuelt');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'AV');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sek.');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sek.');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sek.');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min.');
