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
// $Id: popup_cvv_help.php 93 2012-02-16 23:01:05Z syntaxerror.no $
//

define('HEADING_CVV', 'Hva er CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Discover: 3-sifret sikkerhetskode<br /><br />
                    For din egen sikkerhet, forlanger vi at v�re kunder skriver inn sikkerhetskoden ved bruk av kredittkort.<br /><br />
                    Sikkerhetskoden er et 3-sifret nummer trykket p� baksiden av kortet.
                    Du finner det �vert til h�yre i signaturfeltet p� kortet ditt.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express: 4-sifret sikkerhetskode<br /><br />
                    For din egen sikkerhet, forlanger vi at v�re kunder skriver inn sikkerhetskoden ved bruk av kredittkort.<br /><br />
                    Sikkerhetskoden for American Express er et 4-sifret nummer trykket p� forsiden av kortet.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Lukk vindu [x]');
