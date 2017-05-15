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
//   * @version $Id: J_Schilz for Integrated COWOA - 14 April 2007
//

define('NAVBAR_TITLE', 'L&ouml;sa in ' . TEXT_GV_NAME);
define('HEADING_TITLE', 'L&ouml;sa in ' . TEXT_GV_NAME);
define('TEXT_INFORMATION', 'F&ouml;r mer information om ' . TEXT_GV_NAME . ', v&auml;nligen se <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('TEXT_INVALID_GV', '' . TEXT_GV_NAME . ' nummer %s kan vara felaktigt eller har redan anv&auml;nts. F&ouml;r att kontakta butiken se under Kontakta oss');
define('TEXT_VALID_GV', 'Gratulerar, du kan l&ouml;sa in en ' . TEXT_GV_NAME . ' v&auml;rd %s.');

define('ERROR_GV_CREATE_ACCOUNT', 'F&ouml;r att l&ouml;sa in en kupong m&aring;ste ett konto skapas.');
define('ERROR_GV_COWOA', 'F&ouml;r att l&ouml;sa in en kupong m&aring;ste ett konto skapas. Du kan inte anv&auml;nda denna om du redan anv&auml;nder snabbkassan. Om du vill anv&auml;nda den m&aring;ste du <a href="' . zen_href_link(FILENAME_LOGOFF, '', 'SSL', false) . '">klicka h&auml;r</a> f&ouml;r att sluta sessionen, t&ouml;mma kundkorgen, och b&ouml;rja om.');
// eof