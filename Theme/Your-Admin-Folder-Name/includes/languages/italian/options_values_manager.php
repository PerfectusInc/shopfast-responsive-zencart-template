<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z Albigin $
*/

define('HEADING_TITLE_OPT', 'Opzioni Prodotto');
define('HEADING_TITLE_VAL', 'Valori Opzione');
define('HEADING_TITLE_ATRIB', 'Additivi Prodotti');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nome Prodotto');
define('TABLE_HEADING_OPT_NAME', 'Nome Opzione');
define('TABLE_HEADING_OPT_VALUE', 'Valore Opzione');
define('TABLE_HEADING_OPT_PRICE', 'Prezzo');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefisso');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_DOWNLOAD', 'Prodotti da Downolad:');
define('TABLE_TEXT_FILENAME', 'Nome File:');
define('TABLE_TEXT_MAX_DAYS', 'Giorni alla scadenza:');
define('TABLE_TEXT_MAX_COUNT', 'Maximum download count:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">A questa opzione sono collegati prodotti e valori - cancellarla &egrave; un rischio.<br />NOTA: qualsiasi files in Download associato a questo Valore non sar&agrave; rimosso dal server.</span>');
define('TEXT_OK_TO_DELETE', 'A questa opzione non sono linkati prodotti o valori - cancellarla NON &egrave; un rischio.');
define('TEXT_OPTION_ID', 'ID Opzione');
define('TEXT_OPTION_NAME', 'Nome Opzione');
define('TABLE_HEADING_OPT_DISCOUNTED','Scontato');

define('ATTRIBUTE_WARNING_DUPLICATE','Additivo Duplicato - L\'Additivo non &egrave; stato aggiunto'); 
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Esiste un Additivo Duplicato - L\'Additivo non &egrave; stato modificato'); 
define('ATTRIBUTE_WARNING_INVALID_MATCH','Opzione Additivo e Valore Opzione NON corrispondenti - Additivo non &egrave; stato aggiunto'); 
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Opzione Additivo e Valore Opzione NON corrispondenti - Additivo non &egrave; stato modificato'); 
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Scelte di duplicazione Nome Opzioni aggiunte'); 
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Scelte di duplicazione Valore Opzioni aggiunte'); 

define('PRODUCTS_ATTRIBUTES_EDITING','MODIFICA'); 
define('PRODUCTS_ATTRIBUTES_DELETE','CANCELLAZIONE'); 
define('PRODUCTS_ATTRIBUTES_ADDING','AGGIUNTA NUOVI ADDITIVI'); 
define('TEXT_DOWNLOADS_DISABLED','NOTA: i Downloads sono disabilitati');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Giorni:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordina');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Ordine di Default');
  define('TEXT_SORT',' Ordine: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefisso');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordine');
  define('TABLE_HEADING_OPT_DEFAULT','Default');

  define('TABLE_HEADING_YES','Si');
  define('TABLE_HEADING_NO','No');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo Opzione'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Dimensione');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Righe');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commenti');

  define('TEXT_OPTION_VALUE_COMMENTS','Commenti: ');
  define('TEXT_OPTION_VALUE_SIZE','Vis.zza Dim.ne: ');
  define('TEXT_OPTION_VALUE_MAX','Lunghezza Max: ');

  define('TEXT_ATTRIBUTES_IMAGE','Swatch Immagini Additivi:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Cartella Immagini Additivi:');

  define('TEXT_ATTRIBUTES_FLAGS','Flags<br />Additivi:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usato solamente per<br />scopi di visualizzazione:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'L\'Additivo &egrave; Gratis<br />quando il Prodotto &egrave; Gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Additivo di Default<br />che deve essere marcato come Selezionato:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Applica gli stessi sconti<br />usati per il Prodotto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluso nel prezzo Base<br />quando prezzato per Additivi');

  define('TEXT_PRODUCT_OPTIONS_INFO','Modifica Opzioni Prodotto per ulteriori impostazioni');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copia in TUTTI i prodotti in cui Nome opzione e Valore ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Selezionare un Nome opzione e Valore attualmente esistenti per un prodotto oppure prodotti sui quali si desidera poi copiare un altro Nome opzione e Valore per tutti i prodotti con questi esistenti Nome opzione e Valore');
  define('TEXT_SELECT_OPTION_FROM', 'Nome opzione da abbinare:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Valore opzione da abbinare:');
  define('TEXT_SELECT_OPTION_TO', 'Nome opzione da aggiungere:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Valore opzione da aggiungere:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Lasciare in bianco per TUTTI i prodotti oppure<br />inserire ID di una Categoria per i prodotti da aggiornare');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copiare Nome opzione/Valore a prodotti che hanno un Nome opzione ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Selezionare un Nome opzione e valore attualmente esistenti per un prodotto oppure prodotti da aggiungere a tutti i prodotti oppure soltanto i prodotti nella categoria selezionata che hanno il Nome opzione selezionato.
                                                   <br /><strong>Esempio:</strong> Aggiungere Nome opzione: Valore opzione colore: Rosso a tutti i Prodotti con Nome opzione: Taglia
                                                   <br /><strong>Esempio:</strong> Aggiungere Nome opzione: Valore opzione colore: Verde con valori di default da ID prodotti: 34 a tutti i Prodotti con Nome opzione: Taglia
                                                   <br /><strong>Esempio:</strong> Aggiungere Nome opzione: Valore opzione colore: Verde con valori di default da ID prodotti: 34 a tutti i Prodotti con Nome opzione: Taglia per ID Categorie: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Nome opzione da aggiungere a:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Nome opzione da aggiungere:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Valore opzione da aggiungere:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Valori nuovo additivo da numero ID prodotto oppure lasciare in bianco per non avere valori di default:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Cosa fare degli Additivi Prodotto esistenti?</strong>');

  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Cancellare</strong> anzitutto, poi copiare nuovi Additivi');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Aggiornare</strong> con nuovi settaggi/prezzi, poi aggiungerne di nuovi');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorare</strong> e aggiungere solo nuovi Additivi');

  define('TEXT_INFO_FROM', ' da: ');
  define('TEXT_INFO_TO', ' a: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Errore: Duplicati Nome Opzione e Valori Opzione');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Errore: Nome Opzione e valore Opzione selezionati NON corrispondono');
  define('ERROR_OPTION_VALUES_NONE', 'Errore: Nessun valore da poter copiare');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Copia eseguita correttamente! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Errore: Mancano Nome o Valore Opzione per Prodotti ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Cancella TUTTI i Valori Opzione in TUTTI i prodotti per Nome Opzione</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Aggiorna TUTTI i prodotti esistenti che hanno almeno UN Valore Opzione e Cancella TUTTI i Valori Opzione in un Nome Opzione');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nome Opzione corrispondente:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Valore Opzione corrispondente:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Errore: NON corrispondono Nomi Opzione e Valori Opzione selezionati');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Successo: Omissione di: ');
