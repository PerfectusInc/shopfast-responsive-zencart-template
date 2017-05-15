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
// $Id: gv_redeem.php 4155 2006-08-16 17:14:52Z ajeh $
//

define('NAVBAR_TITLE', 'Remboursement/Réclamation ' . TEXT_GV_NAME);
define('HEADING_TITLE', 'Remboursement/Réclamation ' . TEXT_GV_NAME);
define('TEXT_INFORMATION', 'Pour plus d\'information concernant le ' . TEXT_GV_NAME . ', veuillez prendre connaissance de notre <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('TEXT_INVALID_GV', 'Le numéro %s du ' . TEXT_GV_NAME . ' est peut-être invalide ou a déjà été remboursé. Utilisez la Page Contact pour contacter le gérant.');
define('TEXT_VALID_GV', 'Félicitations, vous avez encaissé un ' . TEXT_GV_NAME . ' d\'une valeur de %s.');
?>