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
// $Id: gv_redeem.php 93 2012-02-16 23:01:05Z syntaxerror.no $
//

define('NAVBAR_TITLE', 'Løs inn gavekort');
define('HEADING_TITLE', 'Løs inn gavekort');
define('TEXT_INFORMATION', 'For mer informasjon angående gavekort, les vår <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('TEXT_INVALID_GV', TEXT_GV_NAME . '-nummeret kan være feil eller har allerede blitt løst inn. For å kontakte butikken kan du bruke kontakt oss siden vår.');
define('TEXT_VALID_GV', 'Gratulerer, du har løst inn et gavekort pålydende %s.');
