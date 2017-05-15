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
//  $Id: orders_status.php 1105 2005-04-04 22:05:35Z Albigin $
//

define('HEADING_TITLE', 'Stato Ordini');

define('TABLE_HEADING_ORDERS_STATUS', 'Stato Ordini');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_INFO_EDIT_INTRO', 'Effettuare le modifiche necessarie');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Stato Ordini:');
define('TEXT_INFO_INSERT_INTRO', 'Inserire il nuovo stato ordini e i dati relativi');
define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare questo Stato Ordine?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Nuovo Stato Ordini');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Modifica Stato Ordini');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Cancella Stato Ordini');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Errore: lo Stato Ordine di default non pu&ograve; essere cancellato. Sceglierne un altro di default e riprovare.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Errore: questo stato ordine &egrave; attualmente utilizzato per ordini.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Errore: questo stato ordine &egrave; attualmente utilizzato per la cronologia stato ordine.');
?>