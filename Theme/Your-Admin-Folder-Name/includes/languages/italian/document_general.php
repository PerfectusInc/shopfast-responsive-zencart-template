<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_general.php 15883 2010-04-11 16:41:26Z Albigin $
*/

define('HEADING_TITLE', 'Categorie / Prodotti');
define('HEADING_TITLE_GOTO', 'Vai a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorie / Prodotti');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordine');

define('TABLE_HEADING_PRICE','Prezzi Vendita Promozione');
define('TABLE_HEADING_QUANTITY','Quantit&agrave;');

define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_STATUS', 'Stato');

define('TEXT_CATEGORIES', 'Categorie:');
define('TEXT_SUBCATEGORIES', 'Sottocategorie:');
define('TEXT_PRODUCTS', 'Prodotti:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Prezzo:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Classe Tassa:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Punteggio Medio:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Quantit&agrave;:');
define('TEXT_DATE_ADDED', 'Data Inserimento:');
define('TEXT_DATE_AVAILABLE', 'Disponibile dal:');
define('TEXT_LAST_MODIFIED', 'Ultima Modifica:');
define('TEXT_IMAGE_NONEXISTENT', 'IMMAGINE NON ESISTENTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Inserire una nuova categoria o prodotto a questo livello.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Per ulteriori info consultare il <a href="http://%s" target="blank">sito</a> di questo prodotto.');
define('TEXT_PRODUCT_DATE_ADDED', 'Questo prodotto &egrave; stato aggiunto in catalogo in data %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Questo prodotto sar&agrave; disponibile dal %s.');

define('TEXT_EDIT_INTRO', 'Eseguire le modifiche necessarie');
define('TEXT_EDIT_CATEGORIES_ID', 'ID Categoria:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nome Categoria:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Immagine Categoria:');
define('TEXT_EDIT_SORT_ORDER', 'Scegli ordine:');

define('TEXT_INFO_COPY_TO_INTRO', 'Scegliere la categoria nella quale si desidera copiare questo prodotto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Attuali Categorie: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nuova Categoria');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Modifica Categoria');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Cancella Categoria');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Sposta Categoria');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Cancella Prodotto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Sposta Prodotto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copia in');

define('TEXT_DELETE_CATEGORY_INTRO', 'Davvero vuoi cancellare questa categoria?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Davvero vuoi cancellare permanentemente questo prodotto?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>AVVISO:</b> Vi sono %s (sotto)categorie ancora linkate a questa categoria!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>AVVISO:</b> Vi sono %s prodotti ancora linkati a questa categoria!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Scegliere la categoria nella quale si desidera <b>%s</b> istallarsi');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Scegliere la categoria nella quale si desidera <b>%s</b> istallarsi');
define('TEXT_MOVE', 'Sposta <b>%s</b> in:');

define('TEXT_NEW_CATEGORY_INTRO', 'Inserire le seguenti informazioni riguardanti la nuova categoria');
define('TEXT_CATEGORIES_NAME', 'Nome Categoria:');
define('TEXT_CATEGORIES_IMAGE', 'Immagine Categoria:');
define('TEXT_SORT_ORDER', 'Scegli ordine:');

define('TEXT_DOCUMENT_STATUS', 'Stato Documento:');
define('TEXT_PRODUCTS_VIRTUAL', 'Prodotto Virtuale:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Sempre Sped.ne Gratuita:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Mostra Box Quantit&agrave; Prodotti:');
define('TEXT_DOCUMENT_DATE_AVAILABLE', 'Disponibile dal:');
define('TEXT_DOCUMENT_AVAILABLE', 'Disponibile');
define('TEXT_DOCUMENT_NOT_AVAILABLE', 'Indisponibile');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Si, salta indirizzo spedizione');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'No, indirizzo spedizione richiesto');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Si, sempre sped.ne gratis');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'No, spedizione normale');
define('TEXT_PRODUCTS_SORT_ORDER', 'Scegli ordine:');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Promozioni, Prod./Download richiedono indirizzo di Spedizione');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Si, mostra box quantit&agrave;');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, non mostrare box quantit&agrave;');

define('TEXT_DOCUMENT_NAME', 'Nome Documento:');
define('TEXT_DOCUMENT_DETAILS', 'Contenuti Documento:');
define('TEXT_DOCUMENT_IMAGE', 'Immagine Documento:');
define('TEXT_DOCUMENT_IMAGE_DIR', 'Upload nella Cartella:');
define('TEXT_DOCUMENT_URL', 'URL Documento:');
define('TEXT_DOCUMENT_URL_WITHOUT_HTTP', '<small>(senza http://)</small>');

define('EMPTY_CATEGORY', 'Categoria Vuota');

define('TEXT_HOW_TO_COPY', 'Metodo Copia:');
define('TEXT_COPY_AS_LINK', 'Link product');
define('TEXT_COPY_AS_DUPLICATE', 'Duplica prodotto');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Usato solo per duplicare prodotti ...');
  define('TEXT_COPY_ATTRIBUTES','Copy Product Attribuites to Duplicate?');
  define('TEXT_COPY_ATTRIBUTES_YES','Si');
  define('TEXT_COPY_ATTRIBUTES_NO','No');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Prodotto Attuale: ');
  define('TABLE_HEADING_MODEL', 'Modello');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Cambia Additivi per Prodotto ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Cancella <strong>TUTTI</strong> gli Additivi Prodotto per:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copia Additivi in un altro Prodotto o in un\'intera Categoria da:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copia Additivi in un altro <strong>prodotto</strong> da:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copia Additivi in un\'altra <strong>categoria</strong> da:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Cosa fare degli Additivi Prodotto esistenti?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Cancella</strong> prima, poi copia nuovi Additivi');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Aggiorna</strong> con nuovi settaggi/prezzi, poi aggiungi i nuovi');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignora</strong> e aggiungi soltanto nuovi Additivi');

  define('SUCCESS_ATTRIBUTES_DELETED','Additivi regolarmente cancellati');
  define('SUCCESS_ATTRIBUTES_UPDATE','Additivi regolarmente aggiornati');

  define('ICON_ATTRIBUTES','Caratteristiche Additivi');

 define('TEXT_CATEGORIES_IMAGE_DIR','Upload nella cartella:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Avviso: non visualizza Box Quantit&agrave;, Default a Qt&agrave; 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Avviso: non visualizza Box Quantit&agrave;, Default a Q.t&agrave; 1');

 define('TEXT_PRODUCT_OPTIONS', '<strong>Scegliere:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Caratteristiche Additivi per:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Downloads: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Prodotto Prezzato con Additivi:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','si');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Il prezzo esposto include gli additivi gruppo prezzi pi&ugrave; bassi + il prezzo');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Il prezzo esposto include gli additivi gruppo prezzi pi&ugrave; bassi + il prezzo');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Qt&agrave; Minima Prodotto:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Qt&agrave; Unit&agrave; Prodotto:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Qt&agrave; Massima Prodotto:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Illimitato, 1 = No Box Qt&agrave;');

  define('TEXT_PRODUCTS_MIXED','Mix Qt&agrave; Prodotto Min/Unit:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Prodotto Gratuito');
  define('TEXT_PRODUCT_IS_FREE','Prodotto Gratuito:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Prodotto marcato GRATUITO');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Prodotto marcato GRATUITO');

  define('TEXT_PRODUCT_IS_CALL','Prodotto in Chiama per prezzo:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Il prodotto &egrave; marcato CHIAMA PER PREZZO');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Il prodotto &egrave; marcato CHIAMA PER PREZZO');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Salto Nuovo Additivo </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Inserisco Nuovo Additivo da </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Aggiorno da Additivo </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Contrassegna come il Meta Tag Titolo deve essere composto:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Nome Prodotto:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Titolo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Modello:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Prezzo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Titolo/Tagline:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta Tag Titolo:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta Tag Keywords:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta Tag Descrizione:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">ESCLUDI</span>');
