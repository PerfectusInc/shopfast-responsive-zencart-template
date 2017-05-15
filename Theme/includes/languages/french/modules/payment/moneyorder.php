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
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte $
//

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Chèque/Virement Bancaire');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Veuillez établir votre chèque ou virement bancaire à l\'ordre de :<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />Envoyez votre paiement à :<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Votre commande ne sera envoyée qu\'à réception du règlement et de sa validation par notre banque.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Veuillez établir votre chèque ou virement bancaire à l\'ordre de :" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nEnvoyez votre paiement à :\n" . STORE_NAME_ADDRESS . "\n\n" . 'Votre commande ne sera envoyée qu\'à réception du règlement et de sa validation par notre banque.');
?>