<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: whos_online.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE', 'Wie is online');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'Klant ID');
define('TABLE_HEADING_FULL_NAME', 'Volledige naam');
define('TABLE_HEADING_IP_ADDRESS', 'IP adres');
define('TABLE_HEADING_SESSION_ID', 'Sessie');
define('TABLE_HEADING_ENTRY_TIME', 'Tijd aanmelden');
define('TABLE_HEADING_LAST_CLICK', 'Laatste klik');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tijd sinds laatste klik:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Laatste URL bezoek');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_SHOPPING_CART', 'Inhoud winkelwagen klant');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotaal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Op dit moment zijn er %s klanten online');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'Ververs overzicht');
define('WHOS_ONLINE_LEGEND_TEXT','Legenda:');
define('WHOS_ONLINE_ACTIVE_TEXT','Actieve winkelwagen');
define('WHOS_ONLINE_INACTIVE_TEXT','Inactieve winkelwagen');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Actief, geen winkelwagen');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inactief, geen winkelwagen');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inactief indien laatste klik >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactief gast sinds aanmelden >');
define('WHOS_ONLINE_REMOVED_TEXT','wordt verwijderd');

define('TEXT_SESSION_ID', '<strong>Sessie ID:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Lege winkelwagen</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Spiders niet weergeven?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Admin IP Adressen niet weergeven?');

define('WHOIS_TIMER_REMOVE', 1200); // Aantal seconden waarna klant ID van whos_online tabel wordt verwijderd - standaard = 1200 = 20 minuten
define('WHOIS_TIMER_INACTIVE', 180); // Aantal seconden waarna status inactief wordt - standaard = 180 = 3 minuten
define('WHOIS_TIMER_DEAD', 540); // Aantal seconden waarna gast wordt verwijderd indien inactief  - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // Tonen van laatste klik en hostnaam - standaard = 1 (staat aan)
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // Toon legenda aan de voet van de pagina als er een bepaald aantal mensen actief zijn - standaard = 12
define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF'); // Kantoor IP ??

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Verversen ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'elke %s seconden.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Handmatig');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'Uit');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
