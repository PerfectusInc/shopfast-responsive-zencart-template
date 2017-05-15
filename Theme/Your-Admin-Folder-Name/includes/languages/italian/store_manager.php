<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: store_manager.php 15954 2010-04-15 16:56:44Z lavale $
 */

  define('HEADING_TITLE', 'Gestore Negozio');
  define('TABLE_CONFIGURATION_TABLE', 'Ricerca COSTANTI e Definizioni');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>Effettuato</strong> aggiornamento elenco valori dei Additivi Prodotti');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Effettuato</strong> aggiornamento elenco valori dei Prezzi Prodotti');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Effettuato</strong> aggiornamento vista Prodotti a 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Effettuato</strong> aggiornamento ordini Prodotti a 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Effettuato</strong> aggiornamento di tutte le Categorie Master Prodotti Linkati');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Effettuato</strong> aggiornamento Contatore al: ');
 
  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Errore:</strong> Non sono state trovate Chiavi di Configurazione corrispondenti...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Errore:</strong> Non sono state inserite Chiavi di Configurazione o Testo da ricercare... Ricerca terminata');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Resetta Contatore</strong><br />ad un nuovo Valore: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Aggiorna TUTTI gli elenchi ordinati per prezzo articoli</strong><br />per poter ordinare per prezzi visualizzati : '); 
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Resetta TUTTI i Prodotti Visualizzati</strong><br />Resetta il Contatore Prodotti Visualizzati a 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Resetta TUTTI i Prodotti Ordinati</strong><br />Resetta il Contatore Prodotti Ordinati a 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Resetta TUTTE le Categorie Master Prodotti ID</strong><br />da utilizzare per i prodotti Linkati: ');
 
  define('TEXT_NEW_ORDERS_ID', 'Nuovo Numero Ordine');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Imposta il Numero Ordine per il successivo Ordine</strong><br />NOTA: Non &egrave; possibile impostare come numero ordine un valore inferiore all\' ultimo ordine esistente salvato nel database.');
  define('TEXT_MSG_NEXT_ORDER', 'Il Numero per il successivo Ordine sar&agrave;: %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Visti i dati degli ordini esistenti, il numero d\'ordine successivo &egrave; attualmente: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'A causa di limitazioni di database, non &egrave; possibile impostare il numero per il successivo ordine ad un valore superiore a 2000000000. Si prega di scegliere un valore pi&ugrave; basso.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Ricerca COSTANTI o definizioni Files di Lingua</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Chiave o Nome:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTA:</strong> Le COSTANTI sono scritte in maiuscolo.<br />Le ricerche nei File di Lingua possono essere una ricerca alternativa quando non &egrave; stato trovato niente nelle tabelle del database.');

  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Ricerca nelle definizioni Files di Lingua</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Testo di Ricerca:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTA:</strong> Il file di lingua pu&ograve; essere in maiuscolo o minuscolo');

  define('TABLE_TITLE_KEY', '<strong>Chiave:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titolo:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Descrizione:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Gruppo:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valore:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Ricerche nei Files di Lingua:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Nessuno');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Tutti i Files di Lingua in ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Tutti i Principali Files di Lingua - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /italian.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Tutti i Files di Lingua attualmente selezionati - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Tutti i Principali Files di Lingua - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /italian.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Tutti i Files di Lingua attualmente selezionati - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Tutti i Files di Lingua attualmente selezionati - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Modifica non disponibile');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' o, NASCOSTO');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Ottimizza il Database</strong> per recuperare spazio dovuto ai records eliminati.<br />In certi casi (numero elevato di operazioni) pu&ograve; essere utile effettuare questa operazione una volta al mese o anche una volta alla settimana.<br />(Preferibilmente eseguire questa operazione in tempi morti.)');
    define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Ottimizzazione delle tabelle del database in corso. Questa operazione potrebbe richiedere alcuni minuti. Si prega di attendere. Il menu precedente riapparir&agrave; appena terminata l\'operazione ... ');

  define('SUCCESS_DB_OPTIMIZE', 'Ottimizzazione Database - Tabelle processate: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Pulizia File Log Debug</strong><br /><strong>ATTENZIONE: </strong>Zen Cart salva i messaggi di errori PHP a scopo di debug, e diversi moduli di pagamento possono avere attivato il debug log per verificare problemi di comunicazione. <br />Cliccando qui verranno *definitivamente* cancellati *TUTTI* i debug log associati ad errori PHP e ai moduli PayPal, Authorize.net, e Linkpoint/FirstData. nella cartella /cache/');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Debug Log Files Cancellati');
