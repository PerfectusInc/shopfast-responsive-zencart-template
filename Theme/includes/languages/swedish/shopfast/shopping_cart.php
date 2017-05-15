<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('NAVBAR_TITLE', 'Kundkorgen');
define('HEADING_TITLE', 'Din kundkorg');
define('HEADING_TITLE_EMPTY', 'Din kundkorg');
define('TEXT_INFORMATION', 'Här finner du uppgifter om din produkt(er) och fraktinformation.');
define('TABLE_HEADING_REMOVE', 'Radera');
define('TABLE_HEADING_QUANTITY', 'Antal.');
define('TABLE_HEADING_MODEL', 'Artikelnr');
define('TABLE_HEADING_PRICE','Pris');
define('TEXT_CART_EMPTY', 'DIn kundkorg &auml;r tom.');
define('SUB_TITLE_SUB_TOTAL', 'Delsumma:');
define('SUB_TITLE_TOTAL', 'Total:');
define('TABLE_HEADING_UPDATE', 'Uppdatera');
define('TABLE_HEADING_DELETE', 'Radera');

define('OUT_OF_STOCK_CANT_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Produkter m&auml;rkta med ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' &auml;r slut i lagret eller finns det inte tillr&auml;ckligt i lager f&ouml;r att fylla din best&auml;llning. <br /> Var v&auml;nlig och &auml;ndra m&auml;ngden produkter m&auml;rkta med (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Tack');
define('OUT_OF_STOCK_CAN_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Produkter m&auml;rkta med ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' &auml;r slut i lager.<br />Dessa produkter placeras i en restorder.');

define('TEXT_TOTAL_ITEMS', 'Totalt produkter: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Vikt: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Summa: ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[hj&auml;lp (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>