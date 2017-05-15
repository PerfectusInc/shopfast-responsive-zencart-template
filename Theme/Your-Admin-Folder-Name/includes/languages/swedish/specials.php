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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//
  /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Erbjudanden');

define('TABLE_HEADING_PRODUCTS', 'Produkt');
define('TABLE_HEADING_PRODUCTS_MODEL','Art.nr');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produkt Pris/Erbjudande/Rea');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Procent');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tillg&auml;nglig');
define('TABLE_HEADING_EXPIRES_DATE','Utg&aring;r');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');

define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Erbjudande pris:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Slut Datum:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Start Datum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Noteringar:</b><ul><li>Du kan ange en procent ist&auml;llet f&ouml;r en summa i erbjudande pris f&auml;ltet, Exempel: <b>20%</b></li><li>Om du anger ett nytt pris, m&aring;ste decimaltecknet vara en \'.\' (decimal-punkt), exempel: <b>49.99</b></li><li>L&auml;mna Slut Datum tom om den skall forts&auml;tta tills den tas bort manuellt</li></ul>');
define('TEXT_INFO_DATE_ADDED', 'Datum Skapad:');
define('TEXT_INFO_LAST_MODIFIED', 'Senast &Auml;ndrad:');
define('TEXT_INFO_NEW_PRICE', 'Nytt Pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Original Pris:');
define('TEXT_INFO_DISPLAY_PRICE', 'Visat Pris:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Tillg&auml;nglig den:');
define('TEXT_INFO_EXPIRES_DATE', 'Slutar Den:');
define('TEXT_INFO_STATUS_CHANGE', 'Status &Auml;ndrat:');
define('TEXT_IMAGE_NONEXISTENT', 'Ingen Bild Finns');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Radera Erbjudande');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera detta erbjudande pris?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Lyckat: &aring;teraktivering av erbjudande ... v&auml;nligen uppdatera pris och datum ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Varning: Inget Produkt ID angivet ... inget lades till ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Varning: Produkt ID finns redan i erbjudande ... inget lades till ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Varning: Produkt ID &auml;r felaktigt ... inget lades till ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Manuellt l&auml;gg till nytt erbjudande fr&aring;n Produkt ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'P&aring; stora databaser, kan du manuellt beh&ouml;va l&auml;gga till erbjudande fr&aring;n Produkt ID<br /><br />Det &auml;r anv&auml;nds b&auml;st n&auml;r sidan tar f&ouml;r l&aring;ng tid att &aring;terge och f&ouml;rs&ouml;ket att v&auml;lja en produkt fr&aring;n rullgardinsmenyn blir sv&aring;rt p&aring; grund av f&ouml;r m&aring;nga produkter att v&auml;lja bland.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'V&auml;nligen ange Product ID som skall &aring;teraktiveras: ');
define('TEXT_INFO_MANUAL', 'Produkt ID som manuellt skall anges f&ouml;r erbjudande');
 
?>