<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 14198 2009-08-18 22:32:11Z drbyte $
 */
  /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('NAVBAR_TITLE_1', 'Kassa');
define('NAVBAR_TITLE_2', 'Tack f&ouml;r att du handlat hos oss');

define('HEADING_TITLE', 'Tack! Vi tackar f&ouml;r att du handlat hos oss!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'V&auml;nligen meddela mig om uppdateringar f&ouml;r denna produkt');
define('TEXT_SEE_ORDERS', '<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Du kan se din orderhistorik genom att visa <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '" name="linkMyAccount">Mitt Konto</a> sidan och klicka p&aring; "Visa alla ordrar".');
define('TEXT_CONTACT_STORE_OWNER', 'Vid fr&aring;gor g&aring; till <a href="' . zen_href_link(FILENAME_CONTACT_US) . '" name="linkContactUs">Kontakta Oss</a>.');
define('TEXT_THANKS_FOR_SHOPPING', '<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Tack f&ouml;r att du handlat hos oss!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'DU kan ocks&aring; ladda ner din produkt senare genom att klicka p&aring; \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Ditt ordernummer:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NOTERA: F&ouml;r att avsluta din order har ett tillf&auml;lligt konto skapats. Du kan avsluta denna genom att klicka p&aring; logga ut. Genom att klicka p&aring; Logga ut ser du &auml;ven till att andra anv&auml;ndare inte kommer &aring;t din information. Om du vill forts&auml;tta handla hos oss &auml;r du v&auml;lkommen! Du kan logga ut n&auml;r du vill genom att klicka p&aring; Logga ut l&auml;nken, Vanligen l&auml;ngst upp till h&ouml;ger.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', '<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Tack f&ouml;r att du handlar. V&auml;nligen klicka p&aring; Logga Ut f&ouml;r att vara s&auml;ker p&aring; att ingen annan kommer &aring;t informationen fr&aring;n denna dator.');
