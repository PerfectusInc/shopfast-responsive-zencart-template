<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @translators: cyaneo/hugo13/wflohr/maleborg/webchills	http://www.zen-cart-pro.at
 * @version $Id: customers.php 627 2010-08-30 15:05:14Z webchills $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $
 */

//  $Id: customers.php 627 2010-08-30 15:05:14Z webchills $
//
define('HEADING_TITLE', 'Kunden');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_FIRSTNAME', 'Vorname');
define('TABLE_HEADING_LASTNAME', 'Nachname');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Konto erstellt am');
define('TABLE_HEADING_LOGIN', 'Letzte Anmeldung');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_PRICING_GROUP', 'Preisgruppe');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Authorisiert');
define('TABLE_HEADING_GV_AMOUNT', 'Gutschein Guthaben');

define('TEXT_DATE_ACCOUNT_CREATED', 'Konto erstellt am:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Letzte Änderung:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Letzte Anmeldung:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Anzahl der Anmeldungen:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Anzahl der Bewertungen:');
define('TEXT_DELETE_INTRO', 'Sind Sie sicher, dass Sie diesen Kunden löschen wollen?');
define('TEXT_DELETE_REVIEWS', 'Lösche %s Bewertung(en)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Lösche Kunde');
define('TYPE_BELOW', 'Geben Sie unten ein');
define('PLEASE_SELECT', 'Wählen Sie');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Anzahl der Bestellungen:');
define('TEXT_INFO_LAST_ORDER', 'Letzte Bestellung:');
define('TEXT_INFO_ORDERS_TOTAL', 'Summe:');
define('CUSTOMERS_REFERRAL', 'Kundenverweis (Referal)<br />Erster Aktionskupon');
define('TEXT_INFO_GV_AMOUNT', 'Gutschein Guthaben');
define('ENTRY_NONE', 'Kein');
define('TABLE_HEADING_COMPANY', 'Firma');
define('CUSTOMERS_AUTHORIZATION', 'Kunden - Authorisierungsstatus');
define('CUSTOMERS_AUTHORIZATION_0', 'Geprüft');
define('CUSTOMERS_AUTHORIZATION_1', 'Anstehende Authorisierung - Muss zum Browsen im Shop authorisiert sein');
define('CUSTOMERS_AUTHORIZATION_2', 'Anstehende Authorisierung - Darf im Shop browsen, aber keine Preise sehen');
define('CUSTOMERS_AUTHORIZATION_3', 'Anstehende Authorisierung - Darf im Shop browsen und Preise sehen, aber nicht kaufen');
define('CUSTOMERS_AUTHORIZATION_4', 'Gesperrt - Darf sich nicht anmelden oder einkaufen');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'WARNUNG: Ihr Shop ist auf "Autorisierung ohne Browsen" eingestellt. Der Kunde wurde auf "Anstehende Authorisierung - Muss zum Browsen im Shop authorisiert sein" gesetzt');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'WARNUNG: Ihr Shop ist auf "Autorisierung mit browsen ohne Preisanzeige" eingestellt. Der Kunde wurde auf "Anstehende Authorisierung - Darf im Shop browsen, aber keine Preise sehen" gesetzt');
define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Ihr Kundenstatus wurde aktualisiert. Vielen Dank für Ihren Einkauf! Wir freuen uns auf Ihren nächsten Besuch.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Kundenstatus ist aktualisiert');
define('ADDRESS_BOOK_TITLE', 'Adressbucheinträge');
define('PRIMARY_ADDRESS', '(Standard Adresse)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>Anmerkung:</strong></span> Es sind maximal %s Adressbucheinträge erlaubt.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 von  ');
