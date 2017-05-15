<?php
//
// @package languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte $
//

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Vooruitbetalen');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Gaarne overmaken o.v.v. uw ordernummer dat u krijgt in de volgende stap, op rekeningnummer:<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />ter attentie van:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Uw bestelling zal worden verzonden nadat de betaling is bijgeschreven op onze rekening.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Graag overmaken o.v.v. uw ordernummer op rekeningnummer:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nter attentie van:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Uw bestelling zal worden verzonden nadat de betaling is bijgeschreven op onze rekening.');
?>
