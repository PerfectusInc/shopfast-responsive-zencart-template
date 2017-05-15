<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: orders.php 6214 2007-04-17 02:24:25Z ajeh $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Order');
define('HEADING_TITLE_SEARCH', 'Order ID:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'S&ouml;k p&aring; Produkt Namn eller <strong>ID:XX</strong> eller Artikelnr ');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'S&ouml;k Filter: ');
define('TABLE_HEADING_PAYMENT_METHOD', 'Betalning<br />Frakt');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Betalnings- och leveransadresserna &auml;r inte samma ');

define('TABLE_HEADING_COMMENTS', 'Kommentarer');
define('TABLE_HEADING_CUSTOMERS', 'Kunder');
define('TABLE_HEADING_ORDER_TOTAL', 'Order Total');
define('TABLE_HEADING_DATE_PURCHASED', 'Orderdatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_TYPE', 'Order Typ');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');
define('TABLE_HEADING_QUANTITY', 'Antal.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikelnr');
define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_TAX', 'Moms');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Pris (exkl)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Pris (inkl)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (exkl)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inkl)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kund meddelad');
define('TABLE_HEADING_DATE_ADDED', 'Datum inlagd');

define('ENTRY_CUSTOMER', 'Kund:');
define('ENTRY_SOLD_TO', 'S&Aring;LD TILL:');
define('ENTRY_DELIVERY_TO', 'Leverans till:');
define('ENTRY_SHIP_TO', 'FRAKT TILL:');
define('ENTRY_SHIPPING_ADDRESS', 'Leveransadress:');
define('ENTRY_BILLING_ADDRESS', 'Faktureringsadress:');
define('ENTRY_PAYMENT_METHOD', 'Betalningsmetod:');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkorts typ:');
define('ENTRY_CREDIT_CARD_OWNER', 'Kreditkorts &auml;gare:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kreditkorts nummer:');
define('ENTRY_CREDIT_CARD_CVV', 'Kreditkorts CVV Nummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kreditkort giltligt till:');
define('ENTRY_SUB_TOTAL', 'Delsumma:');
define('ENTRY_TAX', 'Moms:');
define('ENTRY_SHIPPING', 'Frakt:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Orderdatum:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Senast uppdaterad:');
define('ENTRY_NOTIFY_CUSTOMER', 'Meddela kund:');
define('ENTRY_NOTIFY_COMMENTS', 'Bifoga kommentarer:');
define('ENTRY_PRINTABLE', 'Skriv ut order');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Radera Order');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna order?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'F&ouml;rnya produktkvantiteten');
define('TEXT_DATE_ORDER_CREATED', 'Datum Inlagd:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Senast &auml;ndrad:');
define('TEXT_INFO_PAYMENT_METHOD', 'Betalnings metod:');
define('TEXT_PAID', 'Betald');
define('TEXT_UNPAID', 'Obetald');

define('TEXT_ALL_ORDERS', 'Alla Ordrar');
define('TEXT_NO_ORDER_HISTORY', 'Ingen Order Historik Finns');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Order Uppdatering');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordernummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaljerad order:');
define('EMAIL_TEXT_DATE_ORDERED', 'Orderdatum:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Kommentarer för din order är: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Din order har uppdaterats till följande status:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Ny status:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Vänligen svara på detta epostmeddelande om du har några fr&aring;gor.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'FEL: Ordern finns inte.');
define('SUCCESS_ORDER_UPDATED', 'LYCKAT: Ordern har blivit uppdaterad.');
define('WARNING_ORDER_NOT_UPDATED', 'Varning: Ingen &auml;ndring har valt. Ordern uppdaterades inte.');

define('ENTRY_ORDER_ID','Ordernummer ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATIS</span>');

define('TEXT_DOWNLOAD_TITLE', 'Order Nerladdnings Status');
define('TEXT_DOWNLOAD_STATUS', 'Status');
define('TEXT_DOWNLOAD_FILENAME', 'Filnamn');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Dagar');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Sammanr&auml;kning');

define('TEXT_DOWNLOAD_AVAILABLE', 'Tillg&auml;nglig');
define('TEXT_DOWNLOAD_EXPIRED', 'Avslutad');
define('TEXT_DOWNLOAD_MISSING', 'Finns inte p&aring; servern');

define('IMAGE_ICON_STATUS_CURRENT', 'Status - Tillg&auml;nglig');
define('IMAGE_ICON_STATUS_EXPIRED', 'Status - Avslutad');
define('IMAGE_ICON_STATUS_MISSING', 'Status - Saknas');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Nerladdningen har aktiverats');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Nerladdningen har inaktiverats');
define('TEXT_MORE', '... mer');

define('TEXT_INFO_IP_ADDRESS', 'IP Adress: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Radera CVV fr&aring;n databasen');
define('TEXT_DELETE_CVV_REPLACEMENT','Raderad');
define('TEXT_MASK_CC_NUMBER','Maskera detta nummer');

define('TEXT_INFO_EXPIRED_DATE', 'Giltlig till:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'nedr&auml;knat antal:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Kund<br />Kommentar');
define('TEXT_COMMENTS_YES', 'Kund kommentar - JA');
define('TEXT_COMMENTS_NO', 'Kund kommentar - NEJ');

define('SELECT_ORDER_LIST', 'G&aring; till order');
define('BUTTON_TO_LIST', 'Orderlista');
define('TEXT_WHOIS_LOOKUP', 'Who-Is s&ouml;kning');
?>