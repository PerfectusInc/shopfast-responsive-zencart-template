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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Informations sid hanterare f&ouml;r: ');
define('NAVBAR_TITLE', 'Infosid Hanterare');

define('TEXT_INFO_EDIT_PAGE', 'V&auml;lj sida att &auml;ndra:');

define('TEXT_INFO_MAIN_PAGE', 'Huvudsida');

define('TEXT_INFO_SHIPPINGINFO', 'Frakt och Returer');
define('TEXT_INFO_PRIVACY', 'Sekretess');
define('TEXT_INFO_CONDITIONS', 'Anv&auml;ndarvilkor');
define('TEXT_INFO_CONTACT_US', 'Kontakta Oss');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Utcheckning F&auml;rdig');

define('TEXT_INFO_PAGE_2', 'Sida 2');
define('TEXT_INFO_PAGE_3', 'Sida 3');
define('TEXT_INFO_PAGE_4', 'Sida 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Filen finns inte: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'FEL: Kan inte skriva till denna filen. Se till att r&auml;tt anv&auml;ndarbeh&ouml;righet finns: %s');

define('TEXT_INFO_SELECT_FILE', 'V&auml;lj en fil att &auml;ndra...');
define('TEXT_INFO_EDITING', '&Auml;ndra fil:');

define('TEXT_INFO_CAUTION','Notera: Du skall alltid &auml;ndra filen i din template mapp, Exempel: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Kom ih&aring;g att ta backup n&auml;r du &auml;ndrar i filer.');
?>