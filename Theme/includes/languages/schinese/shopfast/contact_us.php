<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: contact_us.php 18695 2011-05-04 05:24:19Z drbyte $
 * @Simplified Chinese version   http://www.zen-cart.cn
 */

define('HEADING_TITLE', '联系我们');
define('NAVBAR_TITLE', '联系我们');
define('TEXT_SUCCESS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>成功发送您的消息.');
define('EMAIL_SUBJECT', STORE_NAME . '的邮件');

define('ENTRY_NAME', '姓名:');
define('ENTRY_EMAIL', '电子邮件:');
define('ENTRY_ENQUIRY', '内容:');

define('SEND_TO_TEXT','发电子邮件到:');
define('ENTRY_EMAIL_NAME_CHECK_ERROR','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>对不起，您的姓名正确吗？本系统要求最少' . ENTRY_FIRST_NAME_MIN_LENGTH . '个字符。请再试一次。');
define('ENTRY_EMAIL_CONTENT_CHECK_ERROR','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>忘了输入内容？希望您能多提宝贵意见。请在下面输入您的建议。');

define('NOT_LOGGED_IN_TEXT', '未登录');