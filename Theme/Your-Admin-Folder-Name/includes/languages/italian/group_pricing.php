<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z Albigin $
//

define('HEADING_TITLE', 'Prezzi per Gruppi');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nome Gruppo');
define('TABLE_HEADING_GROUP_AMOUNT', '% Sconto');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nuovo Gruppo Prezzi');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Modificare Gruppo Prezzi');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Cancella Gruppo Prezzi');

define('TEXT_NEW_INTRO', 'Inserire le seguenti informazioni sul nuovo gruppo');
define('TEXT_EDIT_INTRO', 'Effettuare le modifiche necessarie');
define('TEXT_DELETE_INTRO', 'Davvero vuoi cancellare questo gruppo?');
define('TEXT_DELETE_PRICING_GROUP', 'Rimuovi Gruppo Prezzo');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>ATTENZIONE:</b> Ci sono ancora %s clienti presenti in questa categoria!');

define('TEXT_GROUP_PRICING_NAME', 'Nome Gruppo: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Sconto Percentuale: ');
define('TEXT_DATE_ADDED', 'Inserito il:');
define('TEXT_LAST_MODIFIED', 'Modificato il:');
define('TEXT_CUSTOMERS', 'Clienti del Gruppo:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ERRORE: clienti presenti in questo gruppo. Conferma di voler rimuovere i menbri e cancellarne il Gruppo!.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTA:  Hai definito i gruppi di sconto, ma non hai abilitato il modulo \'Totale Ordini\' per i gruppi di sconto.<br />Per cortesia, vai in Admin->Moduli->Totale Ordini->Sconto utenti (ot_group_pricing) e installa/configura il modulo.');

?>