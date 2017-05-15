<?php
//
// @package languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'Wat is CVV?');
define('TEXT_CVV_HELP1', 'Visa en Mastercard maken gebruik van 3 cijferig Card Verificatie Nummer<br /><br />
                    Voor uw veiligheid dient u het card verificatie nummer in te vullen.<br /><br />
                    Het verificatie nummer is een 3-cijferig nummer op de handtekeningstreek aan de achterzijde van de card.
                    Dit is een geprint nummer normaal gesproken rechts van uw handtekening. Bij buitendlandse kaarten staat het nummer soms aan de voorkant van de card <br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express 4 cijferig card verificatie nummer<br /><br />
                    Het American Express verificatie nummer is een 4-cijferig nummer op de voorzijde van de card.
                    Dit is een geprint nummer normaal gesproken rechts van uw creditcard nummer<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Sluit venster [x]');
?>