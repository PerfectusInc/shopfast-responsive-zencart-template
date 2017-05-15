<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: users.php 18773 2011-05-20 01:00:21Z drbyte $
 */

define('HEADING_TITLE', '管理用户');

define('IMAGE_ADD_USER', '增加用户');
define('IMAGE_RESET_PWD', '重置密码');

define('TEXT_ID', 'ID');
define('TEXT_NAME', '名字');
define('TEXT_EMAIL', '邮件');
define('TEXT_PROFILE', '权限');
define('TEXT_PASSWORD', '密码');
define('TEXT_CONFIRM_PASSWORD', '确认密码');
define('TEXT_NO_USERS_FOUND', '没有找到管理用户');
define('TEXT_CONFIRM_DELETE', '删除操作，请确认: ');

define('ERROR_NO_USER_DEFINED', '请指定用户');
define('ERROR_USER_MUST_HAVE_PROFILE', '请给用户指定权限');
define('ERROR_DUPLICATE_USER', '很抱歉，管理用户已存在，请重新输入。');
define('ERROR_ADMIN_NAME_TOO_SHORT', '管理用户名字至少%s位');
define('ERROR_PASSWORD_TOO_SHORT', '密码至少要%s位');
define('SUCCESS_NEW_USER_ADDED', '新用户已增加');
define('SUCCESS_USER_DETAILS_UPDATED', '用户资料已更新');
define('SUCCESS_PASSWORD_UPDATED', '密码已更新');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', '很抱歉，邮件地址不正确。');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', '很抱歉，管理用户名不正确。');
