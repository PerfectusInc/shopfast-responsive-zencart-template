<?php
/*
//////////////////////////////////////////////////////////////////////////
//  EDIT ORDERS v3.0                                               	//
//                                                                  	//
//  See readme for module credit information											//
//                                                      				//
//  Powered by Zen-Cart (www.zen-cart.com)              				//
//  Portions Copyright (c) 2005 The Zen-Cart Team       				//
//                                                     					//
//  Released under the GNU General Public License       				//
//  available at www.zen-cart.com/license/2_0.txt       				//
//  or see "license.txt" in the downloaded zip          				//
//////////////////////////////////////////////////////////////////////////
//  DESCRIPTION:  Language file definitions for edit_orders.php		//
//////////////////////////////////////////////////////////////////////////
// $Id: edit_orders.php v 2010-10-24 $
*/

define('HEADING_TITLE', 'Editera Order');
define('HEADING_TITLE_SEARCH', 'Order ID:');
define('HEADING_TITLE_STATUS', 'Status:');
define('ADDING_TITLE', 'Lägg till en product till order');

define('ENTRY_UPDATE_TO_CC', '');
define('ENTRY_UPDATE_TO_CK', 'Enter the payment method used for this order to hide CC fields. (<strong>PayPal, Check/Money Order, Western Union, etc</strong>)');
define('TABLE_HEADING_STATUS_HISTORY', 'Order status &amp; kommentare');
define('TABLE_HEADING_COMMENTS', 'Kommentar');
define('TABLE_HEADING_CUSTOMERS', 'Kunder');
define('TABLE_HEADING_ORDER_TOTAL', 'Order total');
define('TABLE_HEADING_DATE_PURCHASED', 'Inköpt datum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Antal.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modell');
define('TABLE_HEADING_PRODUCTS', 'Produkt(er)');
define('TABLE_HEADING_TAX', 'Moms');
define('TABLE_HEADING_TOTAL', 'Totalt');
define('TABLE_HEADING_UNIT_PRICE', 'Enhets pris');
define('TABLE_HEADING_TOTAL_PRICE', 'Totalt pris');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kund informerad');
define('TABLE_HEADING_DATE_ADDED', 'Tillaggd datum');

define('ENTRY_CUSTOMER', 'Kund adress:');
define('ENTRY_CUSTOMER_NAME', 'Namn');
define('ENTRY_CUSTOMER_COMPANY', 'Företag');
define('ENTRY_CUSTOMER_ADDRESS', 'Adress');
define('ENTRY_CUSTOMER_SUBURB', 'Ort');
define('ENTRY_CUSTOMER_CITY', 'Stad');
define('ENTRY_CUSTOMER_STATE', 'Län');
define('ENTRY_CUSTOMER_POSTCODE', 'Postummer');
define('ENTRY_CUSTOMER_COUNTRY', 'Land');

define('ENTRY_SOLD_TO', 'Såld Till:');
define('ENTRY_DELIVERY_TO', 'Levererad Till:');
define('ENTRY_SHIP_TO', 'Fraktad Till:');
define('ENTRY_SHIPPING_ADDRESS', 'Fraktadress:');
define('ENTRY_BILLING_ADDRESS', 'Betalningsadress:');
define('ENTRY_PAYMENT_METHOD', 'Betalningsmetod:');
define('ENTRY_CREDIT_CARD_TYPE', 'Credit Card Type:');
define('ENTRY_CREDIT_CARD_OWNER', 'Credit Card Owner:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Credit Card Number:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Credit Card Expires:');
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_TAX', 'Moms:');
define('ENTRY_SHIPPING', 'Frakt:');
define('ENTRY_SHIPPING_TAX_RATE', 'Frakt moms (Ej sparad i datqbas)&nbsp;');
define('ENTRY_SHIPPING_TAX_SYMBOL', '&#37; &nbsp;&nbsp;&nbsp;');
define('ENTRY_TOTAL', 'Totalt:');
define('ENTRY_DATE_PURCHASED', 'Inköpt datum:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Sist updaterad:');
define('ENTRY_NOTIFY_CUSTOMER', 'Informera kund:');
define('ENTRY_NOTIFY_COMMENTS', 'Lägg till kommentar:');
define('ENTRY_PRINTABLE', 'Print Faktura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Delete Order');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this order?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Restock product quantity');
define('TEXT_DATE_ORDER_CREATED', 'Date Created:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Last Modified:');
define('TEXT_INFO_PAYMENT_METHOD', 'Payment Method:');

define('TEXT_ALL_ORDERS', 'All Orders');
define('TEXT_NO_ORDER_HISTORY', 'No Order History Available');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Order uppdaterad');
define('EMAIL_TEXT_ORDER_NUMBER', 'Order nummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaljerad faktura:');
define('EMAIL_TEXT_DATE_ORDERED', 'Orderdatum:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Kommentar för din order är: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Din order har blivit uppdaterad till följande status:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '%s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Var vänlig svara på detta brev om duhar några frågor.' . "\n");
define('ERROR_ORDER_DOES_NOT_EXIST', 'FEL: Order existerar inte.');
define('SUCCESS_ORDER_UPDATED', 'Ändrad: Order har blivit uppdaterad.');
define('WARNING_ORDER_NOT_UPDATED', 'Varning: Inget att ändra. Order är inte uppdaterad.');

define('TEXT_ADD_NEW_PRODUCT', 'Lägg till en produkt');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Välj en produkt');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Välj tillägg');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'Inga tillägg: Hoppar över..');
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', '&nbsp;Qty&nbsp;');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Lägg till');
define('ADDPRODUCT_TEXT_STEP1', 'Step 1:');
define('ADDPRODUCT_TEXT_STEP2', 'Step 2:');
define('ADDPRODUCT_TEXT_STEP3', 'Step 3:');
define('ADDPRODUCT_TEXT_STEP4', 'Step 4:');
define('ADDPRODUCT_SPECIALS_SALES_PRICE', 'Använda Special/REA pris');

define('TEXT_ATTRIBUTES_SIMPLE_EDITOR', 'Enkel Attribut Editor');
define('TEXT_ATTRIBUTES_ADVANCED_EDITOR', 'Avancerad Attribut Editor');
define('TEXT_ATTRIBUTES_PRODUCT_OPTION', 'Tillägg för produkt: &nbsp;&nbsp;');
define('TEXT_ATTRIBUTES_OPTION_PRICE_CHANGE', 'Val av prisförändring:');
define('TEXT_ATTRIBUTES_ONE_TIME_CHARGE', 'En betalning: &nbsp;&nbsp;');

define('IMAGE_ORDER_DETAILS', 'Visa order detaljer');
define('CURRENT_STATUS', 'Nuvarande status: ');

//Begin Ty Package Tracker
define('TABLE_HEADING_TRACKING_ID', 'Tracking ID');
define('TABLE_HEADING_CARRIER_NAME', 'Carrier');
define('ENTRY_ADD_TRACK', 'Add Tracking ID');
define('IMAGE_TRACK', 'Add Tracking ID');
define('SELECT_ORDER_LIST', 'Gå till order: ');
define('HEADING_TITLE_ORDER_DETAILS', 'Order # ');
define('BUTTON_TO_LIST', 'Order Lista');
//End Ty Package Tracker