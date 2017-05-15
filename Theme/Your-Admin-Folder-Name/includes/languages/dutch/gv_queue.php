<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
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
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', TEXT_GV_NAME . ' wachtrij');

define('TABLE_HEADING_CUSTOMERS', 'Klant');
define('TABLE_HEADING_ORDERS_ID', 'Bestelnummer.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Waarde');
define('TABLE_HEADING_DATE_PURCHASED', 'Besteldatum');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Onlangs heeft u een ' . TEXT_GV_NAME . ' gekocht uit onze webwinkel.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Vanwege veiligheidsredenen was dit tegoed niet onmiddelijk aan u vrijgegeven. ' .
                                          'Vanaf dit moment is het tegoed wel beschikbaar, en kunt u onze webwinkel bezoeken en de waarde van de ' . TEXT_GV_NAME . ' via email toesturen aan iemand anders of het voor uzelf gebruiken' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'De ' . TEXT_GV_NAME . '(nen) die u heeft gekocht, hebben een waarde van: %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Wij danken u voor het vertrouwen in ' . STORE_NAME . ' en zien u graag terug!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Aankoop');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Bestelnummer');

define('TEXT_EDIT_ORDER','Wijzig bestelnummer ');
define('TEXT_GV_NONE','Geen ' . TEXT_GV_NAME . ' voor vrijgave');
?>