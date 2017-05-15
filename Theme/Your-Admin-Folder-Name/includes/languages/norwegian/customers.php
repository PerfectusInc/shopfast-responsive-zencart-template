<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @Norwegian translation by Rune Rasmussen - 2006 - http://www.syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Kunder');

define('TABLE_HEADING_ID', 'Kundenr. ');
define('TABLE_HEADING_FIRSTNAME', 'Fornavn');
define('TABLE_HEADING_LASTNAME', 'Etternavn');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Konto opprettet');
define('TABLE_HEADING_LOGIN', 'Siste påloging');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_PRICING_GROUP', 'Prisgruppe');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Godkjent');
define('TABLE_HEADING_GV_AMOUNT', 'Gavekort-balanse');

define('TEXT_DATE_ACCOUNT_CREATED', 'Konto opprettet:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Sist endret:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Siste pålogging:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Antall pålogginger:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Antall omtaler:');
define('TEXT_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne kunden?');
define('TEXT_DELETE_REVIEWS', 'Slett %s omtaler(r)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Slett kunde');
define('TYPE_BELOW', 'Fyll inn nedenfor');
define('PLEASE_SELECT', 'Velg en');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Antall ordrer:');
define('TEXT_INFO_LAST_ORDER','Siste ordre:');
define('TEXT_INFO_ORDERS_TOTAL', 'Totalt:');
define('CUSTOMERS_REFERRAL', 'Kundehenvisning <br />Første rabattkode');
define('TEXT_INFO_GV_AMOUNT', 'Gavekort-balanse');

define('ENTRY_NONE', 'Ingen');

define('TABLE_HEADING_COMPANY','Firma');

define('CUSTOMERS_AUTHORIZATION', 'Kundestatus');
define('CUSTOMERS_AUTHORIZATION_0', 'Godkjent');
define('CUSTOMERS_AUTHORIZATION_1', 'Venter godkjenning - må bli godkjent for å navigere');
define('CUSTOMERS_AUTHORIZATION_2', 'Venter godkjenning - kan navigere, men ingen priser');
define('CUSTOMERS_AUTHORIZATION_3', 'Venter godkjenning - kan navigere med priser, men ikke kjøpe');
define('CUSTOMERS_AUTHORIZATION_4', 'Utestengt - Har ikke lov å logge inn i butikken');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Advarsel: Butikken er satt opp for godkjenning med \'Ingen navigering\'. Kunde er satt til \'Venter godkjenning - ingen navigering\'');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Advarsel: Butikken er satt opp for godkjenning med \'Navigering uten priser\'. Kunde er satt til \'Venter godkjenning - Navigering uten priser\'');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Din kundestatus har blitt oppdatert. Takk for at du handler med oss.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Kundestatus oppdatert');

define('ADDRESS_BOOK_TITLE', 'Adressebok-oppføringer');
define('PRIMARY_ADDRESS', '(forvalgt adresse)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>Merk:</strong></span> Maksimum %s adressebok-oppføringer er tillatt.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 av  ');
