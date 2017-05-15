<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE', 'Handlekurven');
define('HEADING_TITLE', 'Innholdet i din handlekurv');
define('HEADING_TITLE_EMPTY', 'Din handlekurv');
define('TEXT_INFORMATION', 'Her i handlekurven kan du endre antall produkter, eller du kan fjerne produkt(er) som du ikke ønsker.');
define('TABLE_HEADING_REMOVE', 'Fjern');
define('TABLE_HEADING_QUANTITY', 'Antall');
define('TABLE_HEADING_MODEL', 'Modell');
define('TABLE_HEADING_PRICE','Pris');
define('TEXT_CART_EMPTY', 'Handlekurven er tom.');
define('SUB_TITLE_SUB_TOTAL', 'Totalt:');
define('SUB_TITLE_TOTAL', 'Totalt:');
define('TABLE_HEADING_UPDATE', 'Oppdater');
define('TABLE_HEADING_DELETE', 'Slett');

define('OUT_OF_STOCK_CANT_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Produkter merket med ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' er ikke på lager, eller vi har for få til å dekke hele din ordre. Vennligst endre antall på produkter merket med (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Takk!');
define('OUT_OF_STOCK_CAN_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Produkter merket med ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' er ikke på lager, eller vi har for få produkter til å dekke hele din ordre. Produkter som ikke er på lager blir satt i restordre.');

define('TEXT_TOTAL_ITEMS', 'Antall varer: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Vekt: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Ordretotal: ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[ Hjelp? ]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
