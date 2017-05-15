<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 */

define('NAVBAR_TITLE', 'winkelwagen');
define('HEADING_TITLE', 'Inhoud winkelwagen');
define('HEADING_TITLE_EMPTY', 'Uw winkelwagen');
define('TEXT_INFORMATION', 'Hier kan u uitleg plaatsen voor het gebruik van het winkelwagen [includes\languages\dutch\shopping_cart.php].');
define('TABLE_HEADING_REMOVE', 'Verwijder');
define('TABLE_HEADING_QUANTITY', 'Aantal');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_PRICE','Prijs');
define('TEXT_CART_EMPTY', 'Uw winkelwagen is leeg.');
define('SUB_TITLE_SUB_TOTAL', 'Subtotaal:');
define('SUB_TITLE_TOTAL', 'Totaal:');
define('TABLE_HEADING_UPDATE', 'Bijwerken');
define('TABLE_HEADING_DELETE', 'Verwijder');

define('OUT_OF_STOCK_CANT_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Artikelen aangeduid met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn uitverkocht of er zijn er niet genoeg van in voorraad voor uw bestelling.<br />Verander het aantal bij artikelen aangeduid met (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Hartelijk bedankt!');
define('OUT_OF_STOCK_CAN_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Artikelen aangeduid met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn uitverkocht.<br />Artikelen die niet op voorraad zijn worden nageleverd/herbesteld.');

define('TEXT_TOTAL_ITEMS', 'Totaal artikelen: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Gewicht: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Bedrag: ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[help (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>