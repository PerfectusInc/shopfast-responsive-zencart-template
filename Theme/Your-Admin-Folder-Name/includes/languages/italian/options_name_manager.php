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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z Albigin $
//

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
define('TABLE_HEADING_DOWNLOAD', 'Prodotti per download:');
define('TABLE_TEXT_FILENAME', 'Nome File:');
define('TABLE_TEXT_MAX_DAYS', 'Giorni alla scadenza:');
define('TABLE_TEXT_MAX_COUNT', 'Max download :');

define('TEXT_WARNING_OF_DELETE', 'A questa opzione sono linkati prodotti e valori - cancellarla &egrave; un rischio.');
define('TEXT_OK_TO_DELETE', 'A questa opzione NON sono linkati prodotti - cancellarla NON &egrave; un rischio.<br />Attenzione: verranno cancellati tutti i Valori Opzione per questo Nome Opzione.');
define('TEXT_OPTION_ID', 'ID Opzione');
define('TEXT_OPTION_NAME', 'Nome Opzione');
define('TABLE_HEADING_OPT_DISCOUNTED','Scontato');

define('ATTRIBUTE_WARNING_DUPLICATE','Doppione Additivo - Additivo non aggiunto'); 
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Esiste un Additivo duplicato - L\'Additivo non &egrave; stato modificato'); 
define('ATTRIBUTE_WARNING_INVALID_MATCH','L\'Opzione Additivo e il Valore Opzione non corrispondono - L\'Additivo non &egrave; stato aggiunto'); 
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Opzione Additivo e Valore Opzione non corrispondono - L\'Additivo non &egrave; stato modificato'); 
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Pu&ograve; essere stato aggiunto un duplicato di un Nome Opzione'); 
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Pu&ograve; essere stato aggiunto un duplicato di un Valore Opzione'); 

define('PRODUCTS_ATTRIBUTES_EDITING','MODIFICA'); 
define('PRODUCTS_ATTRIBUTES_DELETE','CANCELLAZIONE'); 
define('PRODUCTS_ATTRIBUTES_ADDING','AGGIUNTA NUOVI ADDITIVI');
define('TEXT_DOWNLOADS_DISABLED','NOTA: Download disabilitati');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Giorni:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Massimo:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordine Elenco');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Ordine di default');
  define('TEXT_SORT',' Ordine: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefisso');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordine Elenco');
  define('TABLE_HEADING_OPT_DEFAULT','Default');

  define('TABLE_HEADING_YES','Si');
  define('TABLE_HEADING_NO','No');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo opzione'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Dimensione');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','File');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commenti');

  define('TEXT_OPTION_VALUE_COMMENTS','Commenti: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Righe: ');
  define('TEXT_OPTION_VALUE_SIZE','Visualizza dimensione: ');
  define('TEXT_OPTION_VALUE_MAX','Lunghezza max.: ');

  define('TEXT_ATTRIBUTES_IMAGE','Swatch Immagini Additivi:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Cartella immagini Additivi:');

  define('TEXT_ATTRIBUTES_FLAGS','Flags<br />Additivi:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usato solamente per<br />scopi di visualizzazione:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'L\'Additivo &egrave; Gratis<br />Quando il Prodotto &egrave; Gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Additivo di Default<br />che deve essere marcato come Selezionato:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Applica gli stessi sconti<br />usati per il Prodotto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluso nel Prezzo Base<br />quando prezzato per Additivi');

  define('TEXT_PRODUCT_OPTIONS_INFO','Modifica Opzioni Prodotto per ulteriori impostazioni');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'ATTENZIONE: Non sono stati trovati Prodotti ... Nessun aggiornamento');

define('TEXT_SELECT_PRODUCT', ' Seleziona un prodotto');
define('TEXT_SELECT_CATEGORY', ' Seleziona una categoria');
define('TEXT_SELECT_OPTION', 'Seleziona un nome opzione');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Aggiunge TUTTI i Valori Opzione a TUTTI i prodotti per Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Aggiorna TUTTI i prodotti esistenti che hanno almeno UN Valore Opzione e aggiunge TUTTI i Valori Opzione in un Nome Opzione');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Aggiornamento Opzioni completato con Successo ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Aggiunge TUTTI i Valori Opzione a UN prodotto per Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Aggiorna UN prodotto esistenti che ha almeno UN Valore Opzione e aggiunge TUTTI i Valori Opzione in un Nome Opzione');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Aggiunge TUTTI i Valori Opzione in UNA categoria per Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Aggiorna UNA Categoria di prodotti, quando il prodotto ha almeno UN Valore Opzione e aggiunge TUTTI i Valori Opzione in un Nome Opzione.');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTA:</strong> L\'ordine di elencazione sar&agrave; impostato al Valore di Default dell\'ordine di elencazione del Valore Opzione per questi prodotti');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Cancella TUTTI i Valori Opzione in TUTTI i prodotti per Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Aggiorna TUTTI i prodotti esistenti che hanno almeno UN Valore Opzione e Cancella TUTTI i Valori Opzione in un Nome Opzione');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Cancella TUTTI i Valori Opzione a UN prodotto per Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Aggiorna UN prodotto che ha almeno UN Valore Opzione e Cancella TUTTI i Valori Opzione in un Nome Opzione');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Cancella TUTTI i Valori Opzione in UNA Categoria di prodotti per Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Aggiorna UNA Categoria di prodotti, quando il prodotto ha almeno un Valore Opzione e Cancella TUTTI i Valori Opzione in un Nome Opzione');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTE:</strong> Tutti i Nomi Opzione e Valori saranno cancellati per il(i) prodotto(i) selezionato(i). Questo non canceller&agrave; le impostazioni del Valore Opzione.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copia TUTTI i Valori Opzione in un altro Nome Opzione</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Tutti i Valori Opzione saranno copiati da un Nome Opzione a un altro Nome Opzione');
define('TEXT_SELECT_OPTION_FROM', 'Copia dal Nome Opzione: ');
define('TEXT_SELECT_OPTION_TO', 'Copia Tutti i Valori Opzione sul Nome Opzione: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Copia correttamente effettuata! ');
define('ERROR_OPTION_VALUES_COPIED', 'Errore - Non posso copiare Valori Opzione sulla stesso Nome Opzione! ');
define('ERROR_OPTION_VALUES_NONE', 'Errore - La copia dal Nome Opzione ha 0 Valori Definiti. Niente &egrave; stato copiato! ');
define('TEXT_WARNING_BACKUP', 'Attenzione: Fai sempre un backup del tuo database prima di effettuare modifiche globali');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Immagini Additivo per Riga: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Stile Additivo per Radio Buttons/Checkbox: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Lunghezza Massima e Dimensioni di Visualizzazione per Additivi solo Testo:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Stili Immagine:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Immagini sotto i Nomi Opzione');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Elemento, Immagine e Valore Opzione');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Elemento, Immagine e Nome Opzione sotto');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nome Opzione sotto Elemento e Immagine');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Elemento sotto Immagine e Nome Opzione');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Elemento sopra Immagine e Nome Opzione');
?>