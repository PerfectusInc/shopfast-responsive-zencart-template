<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @Norwegian translation by Rune Rasmussen - 2006 - http://www.syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: orders.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Ordrer');
define('HEADING_TITLE_SEARCH', 'Ordrenummer:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Søk etter produktnavn eller <strong>ID:XX</strong> eller modell ');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'Søkefilter: ');
define('TABLE_HEADING_PAYMENT_METHOD', 'Betaling<br />Sending');
define('TABLE_HEADING_ORDERS_ID','Nr.');

define('TEXT_BILLING_SHIPPING_MISMATCH','Faktura- og leveringsadresse er forskjellige');

define('TABLE_HEADING_COMMENTS', 'Kommentar');
define('TABLE_HEADING_CUSTOMERS', 'Kunder');
define('TABLE_HEADING_ORDER_TOTAL', 'Ordretotal');
define('TABLE_HEADING_DATE_PURCHASED', 'Ordredato');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_TYPE', 'Ordretype');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_QUANTITY', 'Antall');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modell');
define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_TAX', 'Avgift');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Pris (eks.)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Pris (inkl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (eks.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inkl.)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde varslet');
define('TABLE_HEADING_DATE_ADDED', 'Lagt til');

define('ENTRY_CUSTOMER', 'Kunde:');
define('ENTRY_SOLD_TO', 'Solgt til:');
define('ENTRY_DELIVERY_TO', 'Levert til:');
define('ENTRY_SHIP_TO', 'Sendes til:');
define('ENTRY_SHIPPING_ADDRESS', 'Sendingsadresse:');
define('ENTRY_BILLING_ADDRESS', 'Fakturaadresse:');
define('ENTRY_PAYMENT_METHOD', 'Betalingsmetode:');
define('ENTRY_CREDIT_CARD_TYPE', 'Kredtittkorttype:');
define('ENTRY_CREDIT_CARD_OWNER', 'Kredittkorteier:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kredittkortnummer:');
define('ENTRY_CREDIT_CARD_CVV', 'Kredittkortets CVV-nummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kredittkort utgår:');
define('ENTRY_SUB_TOTAL', 'Totalsum:');
define('ENTRY_TAX', 'Avgift:');
define('ENTRY_SHIPPING', 'Levering:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Ordredato:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Sist oppdatert:');
define('ENTRY_NOTIFY_CUSTOMER', 'Varsle kunde:');
define('ENTRY_NOTIFY_COMMENTS', 'Legg til kommentar(er):');
define('ENTRY_PRINTABLE', 'Skriv ut proforma faktura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Slett ordre');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne ordren?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Oppdater varelager');
define('TEXT_DATE_ORDER_CREATED', 'Opprettet:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Sist endret:');
define('TEXT_INFO_PAYMENT_METHOD', 'Betalingsmåte:');
define('TEXT_PAID', 'Betalt');
define('TEXT_UNPAID', 'Ubetalt');

define('TEXT_ALL_ORDERS', 'Alle ordrer');
define('TEXT_NO_ORDER_HISTORY', 'Ingen ordrehistorie tilgjengelig');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Ordreoppdatering');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordrenummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Ordredetaljer:');
define('EMAIL_TEXT_DATE_ORDERED', 'Ordredato:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Kommentarene for din ordre er: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Ordren din har blitt oppdatert.' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Ny status:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Svar gjerne på denne e-posten om du har noen spørsmål.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Feil: Ordre eksisterer ikke.');
define('SUCCESS_ORDER_UPDATED', 'Vellykket: Ordre har blitt vellykket oppdatert.');
define('WARNING_ORDER_NOT_UPDATED', 'Advarsel: Ikke noe å endre. Ordren ble ikke oppdatert.');

define('ENTRY_ORDER_ID','Ordrenummer: ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATIS</span>');

define('TEXT_DOWNLOAD_TITLE', 'Ordrens nedlastningsstatus');
define('TEXT_DOWNLOAD_STATUS', 'Status');
define('TEXT_DOWNLOAD_FILENAME', 'Filnavn');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Dager');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Antall');

define('TEXT_DOWNLOAD_AVAILABLE', 'Tilgjengelig');
define('TEXT_DOWNLOAD_EXPIRED', 'Utgått');
define('TEXT_DOWNLOAD_MISSING', 'Finnes ikke på tjener');

define('IMAGE_ICON_STATUS_CURRENT', 'Status - Tilgjengelig');
define('IMAGE_ICON_STATUS_EXPIRED', 'Status - Utgått');
define('IMAGE_ICON_STATUS_MISSING', 'Status - Mangler');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Nedlasting ble vellykket aktivert');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Nedlasting ble velykket deaktivert');
define('TEXT_MORE', '... mer');

define('TEXT_INFO_IP_ADDRESS', 'IP-adresse: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Slett CVV fra databasen');
define('TEXT_DELETE_CVV_REPLACEMENT','Slettet');
define('TEXT_MASK_CC_NUMBER','Masker dette nummer');

define('TEXT_INFO_EXPIRED_DATE', 'Expired Date:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Expired Count:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Kunde-<br />kommentarer');
define('TEXT_COMMENTS_YES', 'Kundekommentarer - Ja');
define('TEXT_COMMENTS_NO', 'Kundekommentarer - Nei');

//Begin Ty Package Tracker
define('TABLE_HEADING_TRACKING_ID', 'Sporingsnummer');
define('TABLE_HEADING_CARRIER_NAME', 'Transportør');
define('ENTRY_ADD_TRACK', 'Legg til sporingsnummer');
define('IMAGE_TRACK', 'Legg til sporingsnummer');
define('SELECT_ORDER_LIST', 'Gå til ordre: ');
define('HEADING_TITLE_ORDER_DETAILS', 'Ordrenummer: ');
define('BUTTON_TO_LIST', 'Ordreliste');
//End Ty Package Tracker
