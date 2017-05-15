<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
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
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', 'Box Laterali del template');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Nome Box File');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'COLONNA SIN/DEST<br />Stato');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'COLONNA UNICA<br />Stato');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'COLONNA<br />DES o SIN');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'COLONNA SIN/DES<br />Ordina');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'COLONNA UNICA<br />Ordina');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_INFO_EDIT_INTRO', 'Esegui le modifiche necessarie');
define('TEXT_INFO_LAYOUT_BOX','Box Selezionato: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Nome Box:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Posizione: (inerte se Colonna Unica)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Stato Colonna Sin/Des : ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Stato Colonna Unica: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','ON= 1 OFF=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Ordine elenco colonna Sin/Dx:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Ordine elenco colonna singola:');
define('TEXT_INFO_INSERT_INTRO', 'Inserisci il nuovo box e i dati relativi');
define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare questo box?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Nuovo Box');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Modifica Box');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Cancella Box');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Cancella il box assente dall\'elenco dei Template: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTA: l\'intervento non cancella i file e si potr&agrave; riaggiungere il box in qualsiasi momento inserendolo nella cartella giusta.<br /><br /><strong>Rimuovi box nome: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Resetta TUTTO l\'ordine elenco dei Box al valore di DEFAULT relativo al Template: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Con questa operazione non si rimuove alcun box. Si risetta solo l\'attuale ordine.');
define('TEXT_INFO_BOX_DETAILS','Dettagli Box: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Layout Template Sito');

define('TABLE_HEADING_LAYOUT_TITLE', 'Titolo');
define('TABLE_HEADING_LAYOUT_VALUE', 'Valore');
define('TABLE_HEADING_ACTION', 'Azione');


define('TEXT_MODULE_DIRECTORY', 'Cartella Layout Sito:');
define('TEXT_INFO_DATE_ADDED', 'Data Inserimento:');
define('TEXT_INFO_LAST_MODIFIED', 'Ultima Modifica:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Layout');
define('BOX_LAYOUT_COLUMNS', 'Comandi Colonna');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>ASSENTE</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Regolarmente rimosso dal template del Box: ');
define('SUCCESS_BOX_RESET','Regolarmente risettati ai settaggi di Default tutti i settaggi per il Template: ');
define('SUCCESS_BOX_UPDATED','Regolarmente aggiornati settaggi per il box: ');

define('TEXT_ON',' ON ');
define('TEXT_OFF',' OFF ');
define('TEXT_LEFT',' SIN ');
define('TEXT_RIGHT',' DES ');

?>