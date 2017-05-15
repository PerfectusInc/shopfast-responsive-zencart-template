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
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', TEXT_GV_NAME . ' Queue de déblocage');

define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDERS_ID', 'Commande No.');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valeur ' . TEXT_GV_NAME);
define('TABLE_HEADING_DATE_PURCHASED', 'Date d\'achat');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Vous avez récemment acheté un  ' . TEXT_GV_NAME . ' sur notre site.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Pour des questions de sécurité, celui-ci ne vous a pas été immédiatement crédité.' .
                                          'Cependant, ce montant a maintenant été débloqué. Vous pouvez vous rendre sur notre site, vous connecter, et adresser la valeur de votre ' . TEXT_GV_NAME . ' à la personne de votre choix via un e-mail, ou simplement utiliser ce montant pour vous-même.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Le ' . TEXT_GV_NAME . ' que vous avez acheté est d\'une valeur de %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Nous vous remercions pour votre confiance !');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Achat');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Commande #');

define('TEXT_EDIT_ORDER','Éditer la Commande ID# ');
define('TEXT_GV_NONE','Aucun ' . TEXT_GV_NAME . ' à débloquer');
?>