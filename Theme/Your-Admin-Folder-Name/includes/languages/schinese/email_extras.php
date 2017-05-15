<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: Jack Modified in v1.5.4 $
 */

// office use only
  define('OFFICE_FROM','来自:');
  define('OFFICE_EMAIL','电子邮件:');

  define('OFFICE_SENT_TO','发给:');
  define('OFFICE_EMAIL_TO','电子邮件:');
  define('OFFICE_USE','网站专用:');
  define('OFFICE_LOGIN_NAME','登录名:');
  define('OFFICE_LOGIN_EMAIL','电子邮件:');
  define('OFFICE_LOGIN_PHONE','<strong>电话号码:</strong>');
  define('OFFICE_IP_ADDRESS','IP地址:');
  define('OFFICE_HOST_ADDRESS','主机地址:');
  define('OFFICE_DATE_TIME','日期和时间:');

// email disclaimer
  define('EMAIL_DISCLAIMER', "\n" . '该电子邮件地址是您或我们的一个客户提供的. 如果您没有登记帐号, 或者您错误接收了该邮件, 请发邮件到 %s');
  define('EMAIL_SPAM_DISCLAIMER','该电子邮件遵循美国2004年1月1日生效的反垃圾邮件条款. 退订请发到以上地址, 我们尊重您的要求.');
  define('EMAIL_FOOTER_COPYRIGHT','版权所有 &copy; ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[管理员已发GV]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[优惠券]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[订单状态]');
  define('TEXT_UNSUBSCRIBE', "\n\nTo 如要退订电子商情和促销邮件, 请点击以下链接: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '关闭');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', '管理提示: 管理用户已添加。');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', '管理提示: 管理用户 (%s) 已添加，修改人 %s 。' . "\n\n" . '如果未执行该操作，请立刻检查网店安全。');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', '管理提示: 管理用户已删除。');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', '管理提示: 管理用户 (%s) 已删除，修改人 %s 。' . "\n\n" . '如果未执行该操作，请立刻检查网店安全。');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', '管理提示: 管理用户的资料已修改。');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', '管理提示: 管理用户 (%s) 的邮件地址从 (%s) 改为 (%s) ，修改人 (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', '管理提示: 管理用户 (%s) 的用户名从 (%s) 改为 (%s) ，修改人 (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', '管理提示: 管理用户 (%s) 的权限从 (%s) 改为 (%s) ，修改人 (%s)');

