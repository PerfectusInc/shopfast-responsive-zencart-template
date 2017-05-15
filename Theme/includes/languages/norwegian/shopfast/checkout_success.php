<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE_1', 'Kasse');
define('NAVBAR_TITLE_2', 'Vellykket - Takk for din ordre');

define('HEADING_TITLE', 'Takk for at du valgte � handle hos oss. Vi setter stor pris p� � ha deg som kunde!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Varsle meg om oppdateringer p� disse produktene');
define('TEXT_SEE_ORDERS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Du kan se din ordrehistorikk ved � g� til <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '" name="linkMyAccount">Min konto</a> og trykke p� vis alle ordrer.');
define('TEXT_CONTACT_STORE_OWNER', 'Dersom du har sp�rsm�l, kan du henvende deg til <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '" name="linkContactUs">kundeservice</a>.');
define('TEXT_THANKS_FOR_SHOPPING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Takk for at du handlet hos oss!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'Du kan ogs� laste ned ditt produkt ved et senere tidspunkt p� \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Ditt ordrenummer:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>MERK: For � fullf�re din ordre ble en midlertidig konto opprettet. Du kan stenge denne ved � klikke "Logg av", det vil ogs� sikre at din kvittering og kj�psinformasjon ikke er synlig for den neste som bruker denne datamaskinen. Om du �nsker � fortsette � handle er du selvf�lgelig velkommen til det, og du kan da n�r som helst logge av ved hjelp av lenken p� toppen av siden.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Takk for handelen, klikk p� "Logg av"-lenken for � forsikre deg om at din kvittering og kj�psinformasjon ikke er synlig for den neste som bruker denne datamaskinen.');
