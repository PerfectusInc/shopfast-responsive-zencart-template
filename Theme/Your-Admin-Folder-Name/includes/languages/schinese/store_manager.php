<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: Jack Modified in v1.5.4 $
 */

  define('HEADING_TITLE', '商店管理');
  define('TABLE_CONFIGURATION_TABLE', '查询常量定义');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>成功</strong>更新属性排序');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>成功</strong>更新商品价格定购次数');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>成功</strong>重置商品查看次数为 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>成功</strong>重置商品定购次数为 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>成功</strong>重置链接商品的所有主分类');
  define('SUCCESS_UPDATE_COUNTER', '<strong>成功</strong>更新计数器为: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>错误:</strong> 没有找到匹配的配置关键字 ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>错误:</strong> 没有输入要查找的配置关键字或文字 ... 搜索中断');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>更新访问计数</strong><br />为: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>更新所有商品价格排列</strong><br />以便于按显示价格排序: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>重置所有商品查看次数</strong><br />重置商品查看次数为 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>重置所有商品定购次数</strong><br />重置商品定购次数为 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>重置所有商品主分类编号</strong><br />以便用于链接商品和价格: ');

  define('TEXT_NEW_ORDERS_ID', '新的订单号码');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>设置下一个订单号</strong><br />说明: 新的订单号不能比当前数据库中的订单号更小。');
  define('TEXT_MSG_NEXT_ORDER', '下一个订单号设置为%s');
  define('TEXT_MSG_NEXT_ORDER_MAX', '由于已有订单，目前下一个订单号为: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', '由于数据库限制，下一个订单号不能高于 2000000000，请设置一个更小的值。');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>查询常量或语言文件</strong>');
  define('TEXT_CONFIGURATION_KEY', '关键字或名称:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>注释:</strong> 常量为大写字母.<br />当在数据库表中找不到时, 可以查询语言文件.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>查询语言文件</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', '查询文字:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>注释:</strong> 查询语言文件可以是大写或小写');

  define('TABLE_TITLE_KEY', '<strong>关键字:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>标题:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>简介:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>组别:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>价值:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', '语言文件查询:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', '无');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '所有语言文件 ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '所有主要文件 - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /schinese.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '所有当前选项语言文件 - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '所有主要语言文件 - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /schinese.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '所有当前选择语言文件 - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '所有当前选择语言文件 - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','没有可以编辑的');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' 或, 隐藏');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>优化数据库</strong>，永久删除记录。<br />可每周或每月执行一次。<br />');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', '数据库正在优化中，将会需要几分钟，请稍候。结束后会重新显示上一个菜单 ... ');
  define('SUCCESS_DB_OPTIMIZE', '数据库优化 - 处理数据表: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>清空调试日志文件</strong><br /><strong>注意: </strong>Zen Cart 记录 PHP 错误信息用于调试，很多支付模块可以设定记录调试数据用于诊断通信问题。<br />点击本清空选项将从 /logs/ 目录 *彻底* 删除 *所有* PHP 错误和支付模块相关的调试日志。');
  define('SUCCESS_CLEAN_DEBUG_FILES', '调试日志文件已清空');
