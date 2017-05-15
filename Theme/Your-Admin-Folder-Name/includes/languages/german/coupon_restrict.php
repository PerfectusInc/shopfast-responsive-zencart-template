<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $
 */

define('HEADING_TITLE','Aktionskupon - Artikel/Kategorien Einschränkungen');
define('HEADING_TITLE_CATEGORY','Kategorieneinschränkungen');
define('HEADING_TITLE_PRODUCT','Artikeleinschränkungen');
define('HEADER_COUPON_ID','Aktionskupon ID');
define('HEADER_COUPON_NAME','Aktionskupon Name');
define('HEADER_CATEGORY_ID','Kategorie ID');
define('HEADER_CATEGORY_NAME','Kategorienname');
define('HEADER_PRODUCT_ID','Artikel ID');
define('HEADER_PRODUCT_NAME','Artikelname');
define('HEADER_RESTRICT_ALLOW','Erlauben');
define('HEADER_RESTRICT_DENY','Nicht erlauben');
define('HEADER_RESTRICT_REMOVE','Entfernen');
define('IMAGE_ALLOW','Erlauben');
define('IMAGE_DENY','Nicht erlauben');
define('IMAGE_REMOVE','Entfernen');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorien');
define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Alle Artikel der Kategorie hinzufügen');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Alle Artikel der Kategorie entfernen');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Bei der Auswahl von "Alle Artikel der Kategorie hinzufügen" werden nur Artikel hinzugefügt, für die noch keine Einschränkungen definiert wurden.<br />
                    Bei der Auswahl von "Alle Artikel der Kategorie entfernen" werden nur Artikel entfernt, die mit Erlaubt oder Nicht erlaubt gekennzeichnet wurden.</strong>');

define('TEXT_MANUFACTURER', 'Hersteller: ');
define('TEXT_CATEGORY', 'Kategorie: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Kategorie nicht definiert');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Artikel nicht definiert');
