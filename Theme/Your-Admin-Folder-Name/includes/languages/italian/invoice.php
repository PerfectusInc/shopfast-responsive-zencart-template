<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: invoice.php 5961 2007-03-03 17:17:39Z drbyte $
//

define('TABLE_HEADING_COMMENTS', 'Commenti');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Notifica Cliente');
define('TABLE_HEADING_DATE_ADDED', 'Data agg.');
define('TABLE_HEADING_STATUS', 'Stato');

define('TABLE_HEADING_PRODUCTS_MODEL', 'Modello');
define('TABLE_HEADING_PRODUCTS', 'Prodotti');
define('TABLE_HEADING_TAX', 'Tassa');
define('TABLE_HEADING_TOTAL', 'Totale');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prezzo (esc)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prezzo (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totale (esc)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totale (inc)');

define('ENTRY_CUSTOMER', 'CLIENTE:');

define('ENTRY_SOLD_TO', 'VENDUTO A:');
define('ENTRY_SHIP_TO', 'SPEDIRE A:');
define('ENTRY_PAYMENT_METHOD', 'Metodo Pagamento:');
define('ENTRY_SUB_TOTAL', 'Totale Parziale:');
define('ENTRY_TAX', 'Tassa:');
define('ENTRY_SHIPPING', 'Spedizione:');
define('ENTRY_TOTAL', 'Totale:');
define('ENTRY_DATE_PURCHASED', 'Data Ordine:');

define('ENTRY_ORDER_ID','Fattura Num.');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;GRATIS');
?>