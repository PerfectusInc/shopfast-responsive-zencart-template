<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: Jack Modified in v1.5.4 $
 */

define('HEADING_TITLE', '重置密码');
define('TEXT_BUTTON_REQUEST_RESET', '请求重置');
define('TEXT_BUTTON_LOGIN', '登录');
define('TEXT_BUTTON_CANCEL', '取消');

define('TEXT_ADMIN_EMAIL', '管理员邮件: ');

define('ERROR_WRONG_EMAIL', '您输入的电子邮件地址不正确。');
define('ERROR_WRONG_EMAIL_NULL', '再试一次 :-P');
define('SUCCESS_PASSWORD_SENT', '新的密码已经发到您的电子信箱。');
define('MESSAGE_PASSWORD_SENT', '谢谢，如果输入的邮件地址与系统管理员帐号一致，新密码将发到这个邮箱。<br />请打开相应邮件并点击下面的 "登录" 按钮来通过临时密码登录。');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', '您的更改请求');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', '重设密码请求来自%s.' . "\n\n" . '您的新的临时密码是:' . "\n\n   %s\n\n需要修改密码后才能登录。\n\n临时密码24小时后过期。\n\n\n");
