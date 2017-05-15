<?php
//
// @package languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
// $Id: product_free_shipping.php 1969 2005-09-13 06:57:21Z drbyte $
//
// Definieer altijd gratis verzenden als een tekst, een afbeelding of een combinatie van beiden.
// Commenteer degenen die u niet wilt gebruiken
// om niks weer te geven, commenteer ze allemaal uit behalve aan het eind een definitie als ''
// define('TEXT_PRODUCT_FREE_SHIPPING_ICON', 'GRATIS VERZENDEN'); // voor tekst of stel in als '' om niks weer te geven
define('TEXT_PRODUCT_FREE_SHIPPING_ICON', zen_image(DIR_WS_TEMPLATE_IMAGES . 'always-free-shipping.gif', 'Nooit verzendkosten!')); // voor een afbeeelding
?>