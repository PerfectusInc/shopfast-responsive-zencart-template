<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','Gestore link prodotti a categorie multiple ...');
define('HEADING_TITLE2','Categorie / Prodotti');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Categorie con prodotti disponibili per il linkaggio ...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID Prod');
define('TABLE_HEADING_PRODUCT', 'Nome prodotto');
define('TABLE_HEADING_MODEL', 'Modello');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'MODIFICA INFORMAZIONI PRODOTTO A CATEGORIE');

define('TEXT_PRODUCTS_ID', 'ID# Prodotto ');
define('TEXT_PRODUCTS_NAME', 'Prodotto: ');
define('TEXT_PRODUCTS_MODEL', 'Modello: ');
define('TEXT_PRODUCTS_PRICE', 'Prezzo: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Aggiorna link categoria');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Selezionare prodotto da linkare');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Stabilisci i link da prodotto a categorie per: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Numero delle categorie attualmente linkate: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'Il Linker dei prodotti alle categorie &egrave; pensato per linkare rapidamente il prodotto corrente ad una o a pi&ugrave; Categorie.<br />Si possono anche linkare tutti i prodotti di una categoria ad un\'altra categoria o cancellare da una categoria prodotti linkati che si trovano in un\'altra categoria. (Vedere sotto per ulteriori info)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Per poter attribuire i prezzi occorre che ciascun prodotto abbia una Categoria Principale, indipendentemente dal numero delle Categorie cui pu&ograve; essere linkato. A questo fine servirsi del Dropdown Categoria Principale.<br />
Il prodotto &egrave; attualmente linkato alla Categoria o alle Categorie spuntate sopra. Per aggiungere una nuova Categoria o pi&ugrave; Categorie basta spuntare la casella accanto al nome della Categoria. Per cancellare una o pi&ugrave; Categorie linkate basta togliere la spunta dalla casella accanto al nome della Categoria.<br />
Una volta spuntate tutte le Categorie alle quali si vuole linkare questo prodotto, premere il ' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Reset Modifiche globali link Categorie e ID Categoria Principale');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>AVVISO:</strong> Occorre fissare l\'ID delle Categorie Principali prima di cambiare le Categorie linkate');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copia TUTTI i prodotti di una categoria come Prodotti LINKATI ad un\'altra Categoria ...</strong><br />Esempio: utilizzando 8 e 22 si linkerebbero TUTTI i prodotti della  Categoria 8 alla Categoria 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Selezionare tutti i prodotti della Categoria: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Linkare alla Categoria: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copia prodotti come linkati');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'AVVISO: il prodotto &egrave; stato resettato e non fa pi&ugrave; parte di questa Categoria ...');
define('WARNING_COPY_LINKED', 'AVVISO: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoria non valida dalla quale linkare prodotti: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoria non valida alla quale linkare prodotti: ');
define('WARNING_NO_CATEGORIES_ID', 'Avviso: non sono state selezionate categorie ... nessun cambio eseguito');
define('SUCCESS_COPY_LINKED', 'Eseguito aggiornamento di prodotti a prodotti linkati ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoria valida dalla quale linkare prodotti: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoria valida alla quale linkare prodotti: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'Avviso: Copia completata di Categoria non valida dalla quale linkare prodotti: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>AVVISO: nessun cambiamento eseguito, i prodotti sono gi&agrave; linkati ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Cancellare TUTTI i Prodotti di una Categoria che sono Prodotti LINKATI da un\'altra Categoria ...</strong><br />Esempio: utilizzando 8 e 22 si toglierebbe il link di TUTTI i Prodotti della Categoria 8 dalla Categoria 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Selezionare tutti i Prodotti nella Categoria: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Cancellare il linkaggio alla Categoria: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Togliere qualifica linkati ai Prodotti ');

define('WARNING_REMOVE_LINKED', 'AVVISO: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoria non valida dalla quale cancellare Prodotti linkati: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoria non valida per la rimozione di prodotti che vi si linkano: ');
define('SUCCESS_REMOVE_LINKED', 'Eseguita rimozione di Prodotti qualificati come linkati ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categoria valida dalla quale cancellare prodotti linkati: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categoria valida per la rimozione di prodotti che vi si linkano: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>AVVISO: nessun cambiamento eseguito nessun prodotto linkato ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>AVVISO: CONFLITTO ID CATEGORIE PRINCIPALI!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ID Categorie Principali &egrave;: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'NOTA: la Categoria Principale &egrave; utilizzata ai fini della fissazione dei prezzi l&agrave; dove la categoria prodotto influisce sulla fissazione dei prezzi di prodotti linkati, esempio: Promozioni<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Per risolvere il problema, sei stato ridiretto al primo prodotto di conflitto. Riassegnare l\'ID Categoria Principale in modo che questa non sia pi&ugrave; l\'ID Categoria Principale dei Prodotti per la Categoria dalla quale si sta operando la rimozione e riprovare. Una volta risolti tutti i conflitti si sar&agrave; in grado di completare la rimozione voluta.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflitto dalla Categoria: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflitto alla Categoria: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Eseguito aggiornamento del Prodotto ai Link Categorie ...');
define('WARNING_MASTER_CATEGORIES_ID', 'AVVISO: non &egrave; stata fissata la Categoria Principali!');

define('TEXT_PRODUCTS_ID_INVALID', 'AVVISO: ID PRODOTTI NON VALIDA O MANCATA SELEZIONE PRODOTTO');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Nota: non occorre fissare una ID Prodotto per utilizzare Linka Tutti i Prodotti da una Categoria all\'altra.<br />Tuttavia se si stabilisce una ID Prodotti valida si visualizzeranno tutte le Categorie disponibili e i loro numeri ID.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Resettare TUTTI i Prodotti della categoria selezionata per utilizzare la categoria selezionata come la nuova ID Categoria Principale ...</strong><br />Esempio: risettando la Categoria 22 si imposteranno TUTTI i Prodotti della categoria 22 ad usare la Categoria 22 come ID Categoria Principale');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Resettare l\'ID categoria Principale per tutti i Prodotti della Categoria: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Resettare l\'ID Categorie Principali');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'AVVISO: selezionata una Categoria non valida ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Eseguito aggiornamento di tutti i Prodotti alla nuova ID Categoria Principale per la Categoria: ');

?>