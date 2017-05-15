<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 19286 2011-07-28 15:42:33Z drbyte $
 * @Simplified Chinese version   http://www.zen-cart.cn
 * @version GIT: $Id: Author: DrByte  Mon Jul 16 14:10:24 2012 -0400 Modified in v1.5.1 $
 */

define('HEADING_TITLE', '管理员登录');
define('HEADING_TITLE_EXPIRED', '管理员登录 - 密码过期');

define('TEXT_ADMIN_NAME', '管理员用户名: ');
define('TEXT_ADMIN_PASS', '管理员的密码: ');
define('TEXT_ADMIN_OLD_PASSWORD', '旧的密码:');
define('TEXT_ADMIN_NEW_PASSWORD', '新的密码:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', '确认密码:');

define('ERROR_WRONG_LOGIN', '您输入了错误的用户名或密码。');
define('ERROR_SECURITY_ERROR', '登录时出现安全错误。');

define('TEXT_PASSWORD_FORGOTTEN', '重发密码');

define('LOGIN_EXPIRY_NOTICE', '超过15分钟没有任何操作，需要重新登录。<br /><br />说明: 密码90天后过期。');
define('ERROR_PASSWORD_EXPIRED', '说明: 您的密码已过期。请设置新的密码，密码<strong>需要包含数字和字母，不少于7位。</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', '为了保证安全，您的临时密码需要修改，请输入新的密码。<br />密码<strong>需要包含数字和字母，不少于7位。</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', '管理员登录失败通知');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', '重要通知: 出现好多次管理员登录失败。为了保证系统安全，登录失败6次后，帐号冻结30分钟，在这期间，即使密码正确也无法登录，继续登录会造成帐号再次冻结30分钟。在账号冻结期间，不能重置密码。很抱歉给您造成的不便。' . "\n\n最后一次登录的IP地址: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', '说明: 由于您的网站从非SSL(不够安全)修改为SSL(更安全)，需要重新修改密码。通过SSL修改密码很重要。很抱歉给您造成的不便。密码还是90天后过期。');
