<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Kunder');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_FIRSTNAME', 'F&ouml;rnamn');
define('TABLE_HEADING_LASTNAME', 'Efternamn');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Konto Skapat');
define('TABLE_HEADING_LOGIN', 'Senast Inloggad');
define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_PRICING_GROUP', 'Pris Grupp');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Auktoriserad');
define('TABLE_HEADING_GV_AMOUNT', 'Presentkort balans');

define('TEXT_INFO_GV_AMOUNT','Kuppong balans');
define('TEXT_DATE_ACCOUNT_CREATED', 'Konto Skapat:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Senast &Auml;ndrat:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Senast Inloggad:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Antal Inloggningar:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Antal recensioner:');
define('TEXT_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna kund?');
define('TEXT_DELETE_REVIEWS', 'Radera %s recensioner');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Radera Kund');
define('TYPE_BELOW', 'Ange nedan');
define('PLEASE_SELECT', 'V&auml;lj en');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Antal order:');
define('TEXT_INFO_LAST_ORDER','Sista Order:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Kund H&auml;nvisningar<br />f&ouml;rsta rabattkupong');

define('ENTRY_NONE', 'Ingen');

define('TABLE_HEADING_COMPANY','F&ouml;retag');

define('CUSTOMERS_AUTHORIZATION', 'Kund aktoriserings Status');
define('CUSTOMERS_AUTHORIZATION_0', 'Godk&auml;nd');
define('CUSTOMERS_AUTHORIZATION_1', 'V&auml;ntar p&aring; godk&auml;nnande - M&aring;ste vara godk&auml;nd f&ouml;r att se sidor');
define('CUSTOMERS_AUTHORIZATION_2', 'V&auml;ntar p&aring; godk&auml;nnande - Inget pris visas');
define('CUSTOMERS_AUTHORIZATION_3', 'V&auml;ntar p&aring; godk&auml;nnande - Med pris men kan inte k&ouml;pa');
define('CUSTOMERS_AUTHORIZATION_4', 'Sp&auml;rrad - F&aring;r INTE logga in i shoppen');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Varning: Din shop &auml;r inst&auml;lld f&ouml;r att kund m&aring;ste godk&auml;nnas f&ouml;r att se sidor. Kunden &auml;r s&auml;tt till v&auml;ntar p&aring; godk&auml;nnande - Ingen granskning');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Varning: Din shop &auml;r inst&auml;lld p&aring; att se shoppen men utan priser. Kunden &auml;r s&auml;tt till v&auml;ntar p&aring; godk&auml;nnande - Granskning utan priser');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Din kund status har uppdaterats . Tack för att du handlar hos oss. Vi ser fram emot ditt nästa besök.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Kund Status Uppdaterad');

define('ADDRESS_BOOK_TITLE', 'Adressbok poster');
define('PRIMARY_ADDRESS', '(prim&auml;r adress)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTERA:</strong></span> Max %s adressbok poster.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 av  ');
?>