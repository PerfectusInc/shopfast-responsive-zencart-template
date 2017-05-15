<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2011-07-28 15:51:25Z drbyte $
 * @Simplified Chinese version   http://www.zen-cart.cn
 */

define('HEADING_TITLE_MODULES_PAYMENT', '支付模块');
define('HEADING_TITLE_MODULES_SHIPPING', '配送模块');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', '总额计算模块');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', '商品类型模块');

define('TABLE_HEADING_MODULES', '模块');
define('TABLE_HEADING_SORT_ORDER', '排序');
define('TABLE_HEADING_ORDERS_STATUS','订单状态');
define('TABLE_HEADING_ACTION', '操作');

define('TEXT_MODULE_DIRECTORY', '模块目录:');
define('WARNING_MODULES_SORT_ORDER','警告: 排序重复，会造成计算错误<br />请修改!');
define('ERROR_MODULE_FILE_NOT_FOUND', '错误: 缺少语言文件，模块未加载: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', '警告: 管理设置已修改。');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', '这是来自网店的自动邮件通知，管理设置已修改: ' . "\n\n" . '说明: [%s]模块的管理设置已修改，修改人 %s.' . "\n\n" . '如果您未执行该操作，请检查网站安全。' . "\n\n" . '如果您知道该操作，请忽略这个自动通知。');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', '这是来自网店的自动邮件通知，管理设置已修改: ' . "\n\n" . '说明: 管理设置已修改。[%s]模块已安装，修改人%s。' . "\n\n" . '如果您未执行该操作，请检查网站安全。' . "\n\n" . '如果您知道该操作，请忽略这个自动通知。');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', '这是来自网店的自动邮件通知，管理设置已修改: ' . "\n\n" . '说明: 管理设置已修改。[%s]模块已删除，修改人%s。' . "\n\n" . '如果您未执行该操作，请检查检查网站安全。' . "\n\n" . '如果您知道该操作，请忽略这个自动通知。');
define('TEXT_DELETE_INTRO', '您确认要删除该模块吗?');
define('TEXT_WARNING_SSL_EDIT', '警告: 出于安全因素，在管理页面设置为SSL后，才能修改该模块');
define('TEXT_WARNING_SSL_INSTALL', '警告: 出于安全因素，在管理页面设置为SSL后，才能安装该模块。');