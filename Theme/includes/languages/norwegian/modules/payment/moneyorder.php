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
// $Id: moneyorder.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Forhåndsbetaling bank');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Vennligst overfør betalingen til kontonr.:<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />Merk betalingen med ordrenummeret. Betalingsfrist er 10 dager.<br /><br />Vår adresse:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Din ordre blir sendt så fort betalingen er registrert.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Vennligst overfør betalingen til kontonr.:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nMerk betalingen med ordrenummeret. Betalingsfrist er 10 dager.\n\nVår adresse:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Din ordre blir sendt så fort betalingen er registrert.');