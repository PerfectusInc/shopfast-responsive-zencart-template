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
// $Id: download_time_out.php 1969 2005-09-13 06:57:21Z drbyte $
//
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('NAVBAR_TITLE', 'Din Nerladdning ...');
define('HEADING_TITLE', 'Din Nerladdning ...');

define('TEXT_INFORMATION', 'Vi beklagar men din nerladdning g&auml;ller inte l&auml;ngre.<br /><br />
  Om du har andra nerladdningar,
  v&auml;nligen g&aring; till <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mitt konto</a> sidan och visa din order.<br /><br />
  Eller, om du tror att n&aring;got blivit fel med din order, v&auml;nligen <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Kontakta oss</a> <br /><br />
  Tack!
  ');
?>