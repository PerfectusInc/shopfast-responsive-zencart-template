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
//  $Id: manufacturers.php 1105 2005-04-04 22:05:35Z birdbrain $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Tillverkare');

define('TABLE_HEADING_MANUFACTURERS', 'Tillverkare');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Ny Tillverkare');
define('TEXT_HEADING_EDIT_MANUFACTURER', '&Auml;ndra Tillverkare');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Radera Tillverkare');

define('TEXT_MANUFACTURERS', 'Tillverkare:');
define('TEXT_DATE_ADDED', 'Datum Inlagd:');
define('TEXT_LAST_MODIFIED', 'Senast &Auml;ndrad:');
define('TEXT_PRODUCTS', 'Produkt:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Ladda upp till katalog:');
define('TEXT_IMAGE_NONEXISTENT', 'BILD FINNS INTE');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>Eller, v&auml;lj en existerande bild fil fr&aring;n servern, filnamn:</strong>');

define('TEXT_NEW_INTRO', 'Fyll i f&ouml;ljande information f&ouml;r den nya tillverkaren');
define('TEXT_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');

define('TEXT_MANUFACTURERS_NAME', 'Tillverkare Namn:');
define('TEXT_MANUFACTURERS_IMAGE', 'Tillverkare Bild:');
define('TEXT_MANUFACTURERS_URL', 'Tillverkare URL:');

define('TEXT_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera tillverkaren?');
define('TEXT_DELETE_IMAGE', 'Radera tillverkarens bild?');
define('TEXT_DELETE_PRODUCTS', 'Radera produkter fr&aring;n tillverkaren? (inkluderat produkt omd&ouml;mmen, produkt erbjudande, kommande produkter)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns %s produkter fortfarande l&auml;nkade till tillverkaren!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'FEL: Jag kan inte skriva till katalogen. Ange r&auml;tt beh&ouml;righet f&ouml;r: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'FEL: Katalogen finns inte: %s');
?>