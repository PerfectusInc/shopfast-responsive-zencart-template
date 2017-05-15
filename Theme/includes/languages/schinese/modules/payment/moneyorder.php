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
// | Simplified Chinese version   http://www.zen-cart.cn                  |
// +----------------------------------------------------------------------+
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte $
//

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', '现金支票');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', '现金支票收款人:<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />收款人地址:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . '我们收到支票后才会处理订单。');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "现金支票收款人:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n收款人地址:\n" . STORE_NAME_ADDRESS . "\n\n" . '我们收到支票后才会处理订单。');
?>