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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_CVV', 'Vad &auml;r CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Discover har ett tre siffrigt kontrollnummer<br /><br />
                   F&ouml;r din trygghet och s&auml;kerhet kr&auml;ver vi att du anger ditt kontokorts kontrollnummer. <br /> <br />
Kontrollnummer &auml;r ett 3-siffrigt nummer p&aring; baksidan av kortet.
Det visas efter och till h&ouml;ger om kortnumret. <br /> '.

                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express fyrsiffrigt kontrollnummer<br /><br />
                    F&ouml;r din trygghet och s&auml;kerhet kr&auml;ver vi att du anger ditt kontokorts kontrollnummer. <br /> <br />
Kontrollnummer &auml;r ett 4-siffrigt nummer p&aring; framsidan av kortet.
Det visas efter och till h&ouml;ger om kortnumret. <br /> ' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'St&auml;ng f&ouml;nstret [x]');
?>