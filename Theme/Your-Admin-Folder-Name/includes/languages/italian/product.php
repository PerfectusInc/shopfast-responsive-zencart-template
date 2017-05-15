<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product.php 15883 2010-04-11 16:41:26Z Albigin $
*/

define('HEADING_TITLE', 'Categorie / Prodotti');
define('HEADING_TITLE_GOTO', 'Vai a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorie / Prodotti');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordine elenco');

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
define('TEXT_DATE_ADDED', 'Inserito il:');
define('TEXT_DATE_AVAILABLE', 'Disponibile dal:');
define('TEXT_LAST_MODIFIED', 'Ultima Modifica:');
define('TEXT_IMAGE_NONEXISTENT', 'IMMAGINE MANCANTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Inserire Nuova Categoria o Prodotto in questo livello.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Per ulteriori informazioni vedere la <a href="http://%s" target="blank">pagina web</a> di questo Prodotto.');
define('TEXT_PRODUCT_DATE_ADDED', 'Questo Prodotto &egrave; stato aggiunto in catalogo il %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Questo Prodotto sar&agrave; disponibile dal %s.');

define('TEXT_EDIT_INTRO', 'Eseguire le modifiche necessarie');
define('TEXT_EDIT_CATEGORIES_ID', 'ID Categoria:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nome Categoria:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Immagine Categoria:');
define('TEXT_EDIT_SORT_ORDER', 'Ordinare:');

define('TEXT_INFO_COPY_TO_INTRO', 'Scegliere una nuova Categoria nella quale copiare questo Prodotto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorie attuali: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nuova Categoria');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Modifica Categoria');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Cancella Categoria');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Sposta Categoria');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Cancella Prodotto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Sposta Prodotto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copia in');

define('TEXT_DELETE_CATEGORY_INTRO', 'Davvero vuoi cancellare questa categoria?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Davvero vuoi cancellare permanentemente questo prodotto?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>AVVISO:</b> vi sono %s (sotto)categorie ancora linkate a questa categoria!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>AVVISO:</b> vi sono %s prodotti ancora linkati a questa categoria!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Scegliere la Categoria nella quale si desidera <b>%s</b> risiedere');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Scegliere la Categoria nella quale si desidera <b>%s</b> risiedere');
define('TEXT_MOVE', 'Sposta <b>%s</b> in:');

define('TEXT_NEW_CATEGORY_INTRO', 'Inserire le seguenti informazioni sulla nuova categoria');
define('TEXT_CATEGORIES_NAME', 'Nome Categoria:');
define('TEXT_CATEGORIES_IMAGE', 'Immagine Categoria:');
define('TEXT_SORT_ORDER', 'Ordine elenco:');


define('TEXT_PRODUCTS_STATUS', 'Stato Prodotti:');
define('TEXT_PRODUCTS_VIRTUAL', 'Prodotto Virtuale:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Sempre Spedizione Gratis:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Mostra Box Q.t&agrave; Prodotti:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Disponibile dal:');
define('TEXT_PRODUCT_AVAILABLE', 'Disponibile');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Esaurito');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Si, salta indirizzo Spedizione');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'No, indirizzo Spedizione Richiesto');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Si, sempre Spedizione Gratuita');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'No, Norme usuali Spedizione');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Promozioni, Prod./Download richiedono indirizzo di Spedizione');
define('TEXT_PRODUCTS_SORT_ORDER', 'Ordine elenco:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Si, Mostra Box Q.t&agrave;');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, Non mostrare Box Q.t&agrave;');

define('TEXT_PRODUCTS_MANUFACTURER', 'Casa Produttrice:');
define('TEXT_PRODUCTS_NAME', 'Nome Prodotti:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descrizione Prodotti:');
define('TEXT_PRODUCTS_QUANTITY', 'Q.t&agrave; Prodotti:');
define('TEXT_PRODUCTS_MODEL', 'Modello Prodotti:');
define('TEXT_PRODUCTS_IMAGE', 'Immagine Prodotti:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Upload nella cartella:');
define('TEXT_PRODUCTS_URL', 'URL Prodotti:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(senza http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Prezzo Prodotti (Netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Prezzo Prodotti (Lordo):');
define('TEXT_PRODUCTS_WEIGHT', 'Peso Prodotti:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Si, visualizza casella Quantit&agrave;');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, non visualizzare casella Quantit&agrave;');

define('EMPTY_CATEGORY', 'Categoria Vuota');

define('TEXT_HOW_TO_COPY', 'Metodo di Copia:');
define('TEXT_COPY_AS_LINK', 'Collega Prodotto');
define('TEXT_COPY_AS_DUPLICATE', 'Duplica Prodotto');


// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Usato solo per prodotti duplicati ...');
  define('TEXT_COPY_ATTRIBUTES','Copiare Additivi Prodotto da duplicare?');
  define('TEXT_COPY_ATTRIBUTES_YES','Si');
  define('TEXT_COPY_ATTRIBUTES_NO','No');

// Products and Discount Copy Options
  define('TEXT_COPY_DISCOUNTS_ONLY','Usato solo per prodotti duplicati con sconti ...');
  define('TEXT_COPY_DISCOUNTS','Copiare Sconti Prodotto da duplicare?');
  define('TEXT_COPY_DISCOUNTS_YES','Si');
  define('TEXT_COPY_DISCOUNTS_NO','No');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Prodotto Attuale: ');
  define('TABLE_HEADING_MODEL', 'Modello');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Modifiche Additivi per Prodotti ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Cancellare <strong>TUTTI</strong> gli Additivi Prodotto per:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copiare Additivi in un altro Prodotto o in una intera Categoria da:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copiare Additivi in un altro <strong>prodotto</strong> da:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copiare Additivi in un\'altra <strong>Categoria</strong> da:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Cosa fare degli Additivi Prodotto esistenti?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Cancellare</strong> anzitutto, poi copiare nuovi Additivi');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Aggiornare</strong> con nuovi settaggi/prezzi, poi aggiungerne di nuovi');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorare</strong> e aggiungere solo nuovi Additivi');

  define('SUCCESS_ATTRIBUTES_DELETED','Additivi cancellati regolarmente');
  define('SUCCESS_ATTRIBUTES_UPDATE','Additivi aggiornati regolarmente');

  define('ICON_ATTRIBUTES','Caratteristiche Additivi');

  define('TEXT_CATEGORIES_IMAGE_DIR','Upload nella cartella:');


  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Avviso: non mostra Box Q.t&agrave;, Default a Q.t&agrave; 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Avviso: non mostra Box Q.t&agrave;, Default a Q.t&agrave; 1');

 define('TEXT_PRODUCT_OPTIONS', '<strong>Scegliere:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Attribute Features For:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Download: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Il Prodotto &egrave; Prezzato con Additivi:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Si');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Il prezzo esposto include gli additivi gruppo prezzi pi&ugrave; bassi + il prezzo');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Il prezzo esposto include gli additivi gruppo prezzi pi&ugrave; bassi + il prezzo');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Prodotto Q.t&agrave; Minima:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Prodotto Q.t&agrave; Unit&agrave;:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Prodotto Q.t&agrave; Massima:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Illimitato, 1 = Nr. Q.t&agrave; Confezioni');

  define('TEXT_PRODUCTS_MIXED','Prodotto Q.t&agrave; Min/Unit&agrave; Mix:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Il Prodotto &egrave; Gratis');
  define('TEXT_PRODUCT_IS_FREE','Il Prodotto &egrave; Gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Prodotto contrassegnato come GRATIS');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Prodotto contrassegnato come GRATIS');

  define('TEXT_PRODUCT_IS_CALL','Prodotto contrassegnato come Richiedi Prezzo:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Prodotto contrassegnato come RICHIEDI PREZZO');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Prodotto contrassegnato come RICHIEDI PREZZO');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Salta Nuovo Additivo </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Inserimento Nuovo Additivo da </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Aggiornamento dall\'Additivo </strong>');

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
  define('TEXT_META_EXCLUDED', '<span class="alert">EXCLUDI</span>');
