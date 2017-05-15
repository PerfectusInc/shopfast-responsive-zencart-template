<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', '管理页面注册');
define('TEXT_PAGE_KEY', '页面编码');
define('TEXT_LANGUAGE_KEY', '页面名称');
define('TEXT_MAIN_PAGE', '页面文件名');
define('TEXT_PAGE_PARAMS', '页面参数');
define('TEXT_MENU_KEY', '菜单');
define('TEXT_DISPLAY_ON_MENU', '在菜单下显示?');
define('TEXT_SORT_ORDER', '排序');

define('TEXT_EXAMPLE_PAGE_KEY', '(例如 myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(例如 BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(例如 FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(例如 option=1 或者留空)');
define('TEXT_SELECT_MENU', '选择菜单');

define('ERROR_PAGE_KEY_NOT_ENTERED', '没有输入页面编码。所有管理页面都需要一个唯一的页面编码。');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', '页面编码已存在。页面编码必须唯一。');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', '没有输入页面名称。所有管理页面都要输入一个在菜单上的名称。');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', '页面名称未定义，请核对。');
define('ERROR_MAIN_PAGE_NOT_ENTERED', '没有输入文件名。');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', '文件名不存在，请检查拼写。');
define('ERROR_MENU_NOT_CHOSEN', '没有选择菜单。即使不显示，也要给新的页面选择一个菜单。');
define('SUCCESS_ADMIN_PAGE_REGISTERED', '管理页面已注册。');
