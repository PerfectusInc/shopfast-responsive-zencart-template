<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
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

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Cheque/Ingreso en Cuenta Bancaria');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Por favor, remita su cheque o giro postal a:&nbsp;' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />Envíe su pago por correo a:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'El pedido no será enviado hasta que el pago sea recibido.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Por favor, remita su cheque o giro postal a: ". MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nEnvíe su pago por correo a:\n" . STORE_NAME_ADDRESS . "\n\n" . 'El pedido no será enviado hasta que el pago sea recibido.');
?>