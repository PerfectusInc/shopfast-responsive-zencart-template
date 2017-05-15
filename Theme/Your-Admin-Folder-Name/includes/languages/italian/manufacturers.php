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
//  $Id: manufacturers.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Produttori');

define('TABLE_HEADING_MANUFACTURERS', 'Produttori');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nuovo Produttore');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Modifica Produttore');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Cancella Produttore');

define('TEXT_MANUFACTURERS', 'Produttori:');
define('TEXT_DATE_ADDED', 'Inserito il:');
define('TEXT_LAST_MODIFIED', 'Ultima Modifica:');
define('TEXT_PRODUCTS', 'Prodotti:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Upload nella cartella:');
define('TEXT_IMAGE_NONEXISTENT', 'IMMAGINE NON ESISTE');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>O, seleziona un file immagine esistente nel server, file:</strong>');

define('TEXT_NEW_INTRO', 'Inserire le seguenti informazioni sul nuovo produttore');
define('TEXT_EDIT_INTRO', 'Eseguire le modifiche necessarie');

define('TEXT_MANUFACTURERS_NAME', 'Nome Produttore:');
define('TEXT_MANUFACTURERS_IMAGE', 'Immagine Produttore:');
define('TEXT_MANUFACTURERS_URL', 'URL Produttore:');

define('TEXT_DELETE_INTRO', 'Davvero vuoi cancellare questo Produttore?');
define('TEXT_DELETE_IMAGE', 'Cancellare immagine Produttore?');
define('TEXT_DELETE_PRODUCTS', 'Cancellare prodotti di questo produttore (e anche recensioni, offerte, prodotti in arrivo)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>AVVISO:</b> vi sono ancora %s prodotti linkati a questo produttore!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Errore: non posso scrivere su questa cartella. Assegnare gli opportuni permessi a: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Errore: la cartella non esiste: %s');
?>