<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z Albigin $
 */

define('HEADING_TITLE', 'CATEGORIE: ');
define('HEADING_TITLE_OPT', 'Opzioni Prodotto');
define('HEADING_TITLE_VAL', 'Valori Opzione');
define('HEADING_TITLE_ATRIB', 'Comandi Additivi');
define('HEADING_TITLE_ATRIB_SELECT','Selezionare un Prodotto per assegnare Additivi ...');

define('TEXT_PRICES_AND_WEIGHTS', 'Prezzi e Pesi');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Fattore Prezzo: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Offset: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Una tantum:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Fattore una tantum: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Offset: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Additivi sconto prezzo quantit&agrave;:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Additivi sconto prezzo quantit&agrave; una tantum:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Costo/Parola:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Parole Gratis:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Costo/Lettera:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Lettere Gratis:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nome Prodotto');
define('TABLE_HEADING_OPT_NAME', 'Nome Opzione');
define('TABLE_HEADING_OPT_VALUE', 'Valore Opzione');
define('TABLE_HEADING_OPT_PRICE', 'Prezzo');
define('TABLE_HEADING_OPT_PRICE_W', ' Rivenditore');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefisso');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_DOWNLOAD', 'Prodotti per Download');
define('TABLE_TEXT_FILENAME', 'Nome File:');
define('TABLE_TEXT_MAX_DAYS', 'Giorni validit&agrave;:');
define('TABLE_TEXT_MAX_COUNT', 'Numero max download:');
define('TABLE_HEADING_OPT_DISCOUNTED','Sconto');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Base');
define('TABLE_HEADING_PRICE_TOTAL','Totale|Sconto: Una Tantum:');
define('TEXT_WARNING_OF_DELETE', 'A questa opzione sono linkati prodotti e valori - cancellarla &egrave; rischioso.');
define('TEXT_OK_TO_DELETE', 'A questa opzione NON sono linkati prodotti i valori - cancellarla NON &egrave; un rischio.');
define('TEXT_OPTION_ID', 'ID Opzione');
define('TEXT_OPTION_NAME', 'Nome Opzione');

define('ATTRIBUTE_WARNING_DUPLICATE','Doppione Additivo - Additivo non &egrave; stato aggiunto'); 
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Stai duplicando un Additivo - Additivo non &egrave; stato cambiato'); 
define('ATTRIBUTE_WARNING_INVALID_MATCH','Opzione Additivo e Valore Opzione NON corrispondenti - Additivo non &egrave; stato aggiunto'); 
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Opzione Additivo e Valore Opzione NON corrispondenti - Additivo non &egrave; stato modificato');
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Scelte di duplicazione Nome Opzioni aggiunte'); 
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Scelte di duplicazione Valore Opzioni aggiunte');

define('PRODUCTS_ATTRIBUTES_EDITING','MODIFICA');
define('PRODUCTS_ATTRIBUTES_DELETE','CANCELLA');
define('PRODUCTS_ATTRIBUTES_ADDING','INSERIRE ADDITIVI'); 
define('TEXT_DOWNLOADS_DISABLED','NOTA: Download disabilitati');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Giorni:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordinamento');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Ordine di Default');
  define('TEXT_SORT',' Ordine: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefisso');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordine');
  define('TABLE_HEADING_OPT_DEFAULT','Default');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo Opzione'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Dimensione');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Righe');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commenti');

  define('TEXT_OPTION_VALUE_COMMENTS','Commenti: ');
  define('TEXT_OPTION_VALUE_SIZE','Mostra Dimensione: ');
  define('TEXT_OPTION_VALUE_MAX','Lunghezza max.: ');

  define('TEXT_ATTRIBUTES_IMAGE','Campione Immagine Additivo:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Cartella Immagine Additivi:');

  define('TEXT_ATTRIBUTES_FLAGS','Additivi<br />Bandiere:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usato solo<br />per Visualizzare:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Additivo Gratis<br />se Prodotto Gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Additivi di default<br />che deve essere marcato come Selezionato:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Applica gli stessi sconti<br />usati per il Prodotto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Includi in Prezzo Base<br />se prezzato con Additivi');
  define('TEXT_ATTRIBUTES_REQUIRED','Additivo Richiesto<br />per Testo:');

  define('LEGEND_BOX','Legenda:');
  define('LEGEND_KEYS','OFF/ON');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Solo Mostra');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratis');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Default');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Scontato');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Prezzo Base');
  define('LEGEND_ATTRIBUTES_REQUIRED','Obbligatorio');
  define('LEGEND_ATTRIBUTES_IMAGES','Immagini');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Nomefile<br />Valido/No');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','ALL\'ORDINE DI DEFAULT');
  define('TEXT_PRODUCTS_LISTING','Elencazione Prodotti per: ');
  define('TEXT_NO_PRODUCTS_SELECTED','Nessun Prodotto selezionato');
  define('TEXT_NO_ATTRIBUTES_DEFINED','Nessun Additivo Definito per Prodotto ID#');

  define('TEXT_PRODUCTS_ID','ID# Prodotti');
  define('TEXT_ATTRIBUTES_DELETE','CANCELLA TUTTO');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Copia in Prodotto');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Copia in Categoria');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Modifiche Additivi per Prodotti ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Cancella <strong>TUTTI</strong> gli Additivi Prodotto per:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copia Additivi in un altro Prodotto o ad un\'intera Categoria da:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','PRODOTTO');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copia Additivi in un altro <strong>Prodotto</strong> da ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Seleziona il Prodotto dal quale copiare tutti gli Additivi in:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','CATEGORIA');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Seleziona la Categoria per copiare tutti gli Additivi in:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copia Additivi a tutti i Prodotti in <strong>Categoria</strong> dal Prodotto ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Cosa fare degli Additivi Prodotto esistenti?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Cancella</strong> anzitutto, poi copia i nuovi Additivi');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Aggiorna</strong> con nuovi settaggi/prezzi, poi aggiungi i nuovi');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignora</strong> e aggiungi solo i nuovi Additivi');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Regolarmente aggiornato ordine degli Additivi per ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Nessun Additivo per aggiornare l\'ordine di inserimento per ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED','Additivi Regolarmente Cancellati');
  define('SUCCESS_ATTRIBUTES_UPDATE','Additivi Regolarmente Aggiornati');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Nessuna Categoria Selezionata per la copia');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - nella Categoria: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','Davvero vuoi cancellare tutti gli Additivi dell\'ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Salta il Nuovo Additivo </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Inserire un Nuovo Additivo da </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Aggiorna dall\'Additivo </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','ANTEPRIMA ADDITIVI');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','ANTEPRIMA SETTAGGI ADDITIVI PER ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Scegli:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Definire settaggi Additivi poi premere Inserisci</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Prezzato con Additivi');
  define('TEXT_PRODUCTS_PRICE', 'Prezzo Prodotti: ');
  define('TEXT_SPECIAL_PRICE', 'Prezzo Promozione: ');
  define('TEXT_SALE_PRICE', 'Prezzo Saldo: ');
  define('TEXT_FREE', 'FREE');
  define('TEXT_CALL_FOR_PRICE', 'Chiedi il Prezzo');
  define('TEXT_SAVE_CHANGES','AGGIORNA E SALVA MODIFICHE:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Non aggiungo al carrello');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Conferma eliminazione di tutti i Valori Opzioni Prodotto per Nome Opzione ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Nome Prodotto: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Nome Opzione: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Eliminati con successo tutti i Valori Opzione per il Nome Opzione: ');
