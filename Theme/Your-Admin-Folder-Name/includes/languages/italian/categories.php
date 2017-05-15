<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: categories.php 14139 2009-08-10 13:46:02Z Albigin $
*/

define('HEADING_TITLE', 'Categorie / Prodotti');
define('HEADING_TITLE_GOTO', 'Vai a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorie / Prodotti');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordine');

define('TABLE_HEADING_PRICE','Prezzo/Offerta/Saldo');
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
define('TEXT_IMAGE_NONEXISTENT', 'IMMAGINE NON PRESENTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Inserire una nuova categoria o un nuovo prodotto in questo livello.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Per ulteriori informazioni, visita la <a href="http://%s" target="blank">pagina web</a> di questo prodotto.');
define('TEXT_PRODUCT_DATE_ADDED', 'Il prodotto &egrave; stato inserito in catalogo il %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Questo prodotto sar&agrave; disponibile il %s.');

define('TEXT_EDIT_INTRO', 'Eseguire le modifiche necessarie');
define('TEXT_EDIT_CATEGORIES_ID', 'ID Categoria:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nome Categoria:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Immagine Categoria:');
define('TEXT_EDIT_SORT_ORDER', 'Seleziona ordine:');

define('TEXT_INFO_COPY_TO_INTRO', 'Scegliere la categoria nella quale si vuole copiare questo prodotto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorie Attuali: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nuova Categoria');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Modifica Categoria');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Cancella Categoria');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Sposta Categoria');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Cancella Prodotto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Sposta Prodotto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copia in');

define('TEXT_DELETE_CATEGORY_INTRO', 'Davvero vuoi cancellare questa categoria?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Avviso:</strong> I prodotti linkati a Categorie principali la cui ID &egrave; cancellata non saranno prezzati correttemente. Prima di cancellare una categoria contenente prodotti linkati assicurati di aver risettato l\'ID della Categoria principale del prodotto ad un\'altra categoria.');
define('TEXT_DELETE_PRODUCT_INTRO', 'Sei sicuro di voler eliminare questo prodotto?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>AVVISO:</b> Vi sono %s (sotto-)categorie ancora linkate a questa categoria!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>AVVISO:</b> Vi sono ancora %s articoli collegati a questa categoria!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Selezionare la categoria nella quale si desidera inserire <b>%s</b>');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Selezionare la categoria nella quale si desidera inserire <b>%s</b> ');
define('TEXT_MOVE', 'Sposta <b>%s</b> in:');

define('TEXT_NEW_CATEGORY_INTRO', 'Per favore inserisci le seguenti informazioni per la nuova categoria');
define('TEXT_CATEGORIES_NAME', 'Nome Categoria:');
define('TEXT_CATEGORIES_IMAGE', 'Immagine Categoria:');
define('TEXT_SORT_ORDER', 'Ordine in elenco:');

define('TEXT_PRODUCTS_STATUS', 'Stato Prodotti:');
define('TEXT_PRODUCTS_VIRTUAL', 'Prodotto Virtuale:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Spedizione Gratis Sempre:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Casella Quantit&agrave; prodotto visualizzato:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Data Disponibilit&agrave;:');
define('TEXT_PRODUCT_AVAILABLE', 'Disponibile');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Esaurito');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Si, salta indirizzo spedizione');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'No, occorre indirizzo spedizione');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Si, spedizione sempre gratis');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'No, spedizione normale');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Si, Mostra casella Quantit&agrave;');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, non mostrare la casella Quantit&agrave;');

define('TEXT_PRODUCTS_MANUFACTURER', 'Produttore Prodotto:');
define('TEXT_PRODUCTS_NAME', 'Nome Prodotto:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descrizione Prodotto:');
define('TEXT_PRODUCTS_QUANTITY', 'Quantit&agrave; Prodotto:');
define('TEXT_PRODUCTS_MODEL', 'Modello Prodotto:');
define('TEXT_PRODUCTS_IMAGE', 'Immagine Prodotto:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Upload nella cartella:');
define('TEXT_PRODUCTS_URL', 'URL Prodotto:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(senza http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Prezzo Prodotto (Netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Prezzo Prodotto (Lordo):');
define('TEXT_PRODUCTS_WEIGHT', 'Peso Spedizione Prodotto:');

define('EMPTY_CATEGORY', 'Categoria vuota');

define('TEXT_HOW_TO_COPY', 'Metodo di copia:');
define('TEXT_COPY_AS_LINK', 'Collega Prodotto');
define('TEXT_COPY_AS_DUPLICATE', 'Duplica prodotto');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Limita al Tipo Prodotto');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Questa Categoria &egrave; stata limitata a questi Tipi Prodotto');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','Il Tipo Prodotto specificato non pu&ograve; essere aggiunto a questa categoria. Controlla le tue limitazioni di categoria.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Utilizzato solamente per Prodotti Duplicati...');
  define('TEXT_COPY_ATTRIBUTES','Copia Additivi Prodotto al Duplicato?');
  define('TEXT_COPY_ATTRIBUTES_YES','Si');
  define('TEXT_COPY_ATTRIBUTES_NO','No');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Prodotto attuale: ');
  define('TABLE_HEADING_MODEL', 'Modello');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Modifica Additivi per Prodotto con ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Elimina <strong>TUTTI</strong> gli Additivi Prodotto per:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copia Additivi in altro Prodotto o per un intera Categoria da:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copia Additivi in altro <strong>prodotto</strong> da:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copia Additivi in altra <strong>categoria</strong> da:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Cosa fare degli Additivi Prodotto esistenti?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Rimuovi</strong> prima, poi copia nuovi Additivi');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Aggiorna</strong> con nuovi settaggi/prezzi, poi aggiungine di nuovi');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignora</strong> e aggiungi solo nuovi additivi');

  define('SUCCESS_ATTRIBUTES_DELETED','Additivi correttamente eliminati');
  define('SUCCESS_ATTRIBUTES_UPDATE','Additivi correttamente aggiornati');

  define('ICON_ATTRIBUTES','Caratteristiche Additivo');

  define('TEXT_CATEGORIES_IMAGE_DIR','Upload alla cartella:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>O, seleziona un file immagine esistente nel server, file:</strong>');

  define('TEXT_VIRTUAL_PREVIEW','Avviso: questo prodotto &egrave; marcato - Spedizione gratis e Non abbisogna Indirizzo spedizione');
  define('TEXT_VIRTUAL_EDIT','Avviso: questo prodotto &egrave; marcato - Spedizione gratis e Non abbisogna Indirizzo pedizione');
  define('TEXT_FREE_SHIPPING_PREVIEW','Avviso: questo prodotto &egrave; marcato - Spedizione gratis, Indirizzo spedizione richiesto');
  define('TEXT_FREE_SHIPPING_EDIT','Avviso: Si rende il prodotto - Spedizione gratuita, Indirizzo spedizione richiesto');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Avviso: non visualizza Casella Quantit&agrave;, Default a Q.t&agrave; 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Avviso: non visualizza Casella Quantit&agrave;, Default a Q.t&agrave; 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Scegliere:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Caratteristiche Additivo per:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Downloads: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Prodotto Prezzato con Additivi:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Si');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Visualizza prezzo includer&agrave; il gruppo prezzi additivi inferiore E il prezzo');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT',' *Visualizza prezzo includer&agrave; gli additivi gruppo prezzi pi&ugrave; bassi + il prezzo');

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

  define('TEXT_SHIPPING_INFO',
  '<strong>Per i prodotti virtuali</strong> non vi sono costi di spedizione n&egrave; si prevede un indirizzo di spedizione. Si tratta infatti di servizi, ' . TEXT_GV_NAMES . ', ecc.<br />' .
  '<strong>Sempre Spedizione gratis</strong> esclude costi di spedizione ma non esenta dalla richiesta di un indirizzo per la spedizione<br />' .
  '<strong>I Downloads</strong> vengono assimilati ai Prodotti Virtuali  - Non occorre marcare alcuna delle due opzioni<br />'
  );

  define('TEXT_ANY_TYPE', 'Ogni Tipo');
  define('TABLE_HEADING_PRODUCT_TYPES', 'Tipo(i) Prodotto(i)');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Cambia stato Categoria per:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Cambia lo stato della Categoria in: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'OFF');
define('TEXT_CATEGORIES_STATUS_ON', 'ON');
define('TEXT_PRODUCTS_STATUS_INFO', 'Cambia TUTTO lo stato prodotto in: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'OFF');
define('TEXT_PRODUCTS_STATUS_ON', 'ON');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Invariato');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>AVVISO ...</strong><br />Nota: Disabilitando una categoria si disabilitano tutti i prodotti di questa categoria. Saranno disabilitati anche i prodotti linkati collocati in questa categoria e condivisi con altre categorie.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' di ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' attivi ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Descrizione Categorie:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Articolo chiama per prezzo');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Definizione Meta Tags Categorie');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Definisci Meta Tags personalizzati');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'Titolo:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Parole Chiave:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Descrizione:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'AVVISO: vi sono prodotti nella Categoria di livello superiore. Pertanto il sistema di prezzamento in Catalogo non funzioner&agrave; correttamente. Prodotti trovati: ');
