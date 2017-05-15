<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_price_manager.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Gestore Prezzo Prodotti');
define('HEADING_TITLE_PRODUCT_SELECT','Scegliere un Prodotto di cui visualizzare l\'informazione prezzi ...');

define('TABLE_HEADING_PRODUCTS', 'Prodotti');
define('TABLE_HEADING_PRODUCTS_MODEL','Modello');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Prodotti Prezzi Vendita Promozione');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Percentuale');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponibile');
define('TABLE_HEADING_EXPIRES_DATE','Scade');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_PRODUCT_INFO', 'Info Prodotto:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Info Prezzo Prodotto:');
define('TEXT_PRODUCTS_MODEL','Modello:');
define('TEXT_PRICE', 'Prezzo');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Disponibile dal:');
define('TEXT_PRODUCTS_STATUS', 'Stato Prodotti:');
define('TEXT_PRODUCT_AVAILABLE', 'Disponibile');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Esaurito');

define('TEXT_PRODUCT_INFO_NONE', 'Per favore seleziona un Prodotto fra i seguenti ...');
  define('TEXT_PRODUCT_IS_FREE','Prodotto &egrave; gratis:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Prodotto marcato GRATIS');
  define('TEXT_PRODUCT_IS_CALL','Chiama per il Prezzo:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Prodotto marcato RICHIEDI PREZZO');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Prezzato per Additivi:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Si');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Il prezzo visualizzato includer&agrave; il prezzo per Additivi del gruppo pi&ugrave; basso pi&ugrave; il prezzo');
  define('TEXT_PRODUCTS_MIXED','Q.t&agrave; Min/Unita Miste:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Sconto Quantit&agrave; applicato a Additivi Misti');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Q.t&agrave; Min:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Q.t&agrave; Unit&agrave;:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Q.t&agrave; Max:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= Illimitati<br />1= Nr. Q.t&agrave; Confezioni');

define('TEXT_FEATURED_PRODUCT_INFO', 'Info Prodotto in Vetrina:');
define('TEXT_FEATURED_PRODUCT', 'Prodotto:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Data Scadenza:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Disponibile dal:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Condizione Descritta:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Attivo');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Inattivo');
define('TEXT_FEATURED_DISABLED', '<strong>NOTA: Info Prodotto in Vetrina &egrave; disabilitata, scaduta o non ancora attiva</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Confermare di voler eliminare lo stato di Vetrina associato a questo prodotto');

define('TEXT_SPECIALS_PRODUCT', 'Prodotto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Prezzo Speciale:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Data Scadenza:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Disponibile dal:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Note Speciali:</b><ul><li>Si pu&ograve; inserire una percentuale di riduzione nel campo Prezzi Promozioni, ad esempio: <b>20%</b></li><li>Se si inserisce un nuovo prezzo, il separatore per i decimali deve essere un \'.\' (punto decimale), esempio: <b>49.99</b></li><li>Non inserire data se non si vuole scadenza</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Info Prezzo Promozione:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Stato Promozioni:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Attivo');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Inattivo');
define('TEXT_SPECIALS_NO_GIFTS','Non Speciali con GV');
define('TEXT_SPECIAL_DISABLED', '<strong>NOTA: Info Prodotto in Promozione &egrave; disattivata, scaduta o non ancora attiva</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Confermare di voler eliminare la Promozione associata a questo prodotto');

define('TEXT_INFO_DATE_ADDED', 'Inserito il:');
define('TEXT_INFO_LAST_MODIFIED', 'Ultima Modifica:');
define('TEXT_INFO_NEW_PRICE', 'Nuovo Prezzo:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Prezzo Originale:');
define('TEXT_INFO_PERCENTAGE', 'Percentuale:');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponibile dal:');
define('TEXT_INFO_EXPIRES_DATE', 'Scade il:');
define('TEXT_INFO_STATUS_CHANGE', 'Modifica Stato:');
define('TEXT_IMAGE_NONEXISTENT', 'Immagine inesistente');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Cancella Prod. in Vetrina');
define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare il prodotto in vetrina?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Definisci le Impostazioni dell\'Additivo e premi Inserisci per applicarle</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Prezzato per Additivi');
  define('TEXT_PRODUCTS_PRICE', 'Prezzo Prodotti: ');
  define('TEXT_SPECIAL_PRICE', 'Prezzo Promozione: ');
  define('TEXT_SALE_PRICE', 'Prezzo Saldi: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Richiedi Prezzo');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Agg. ' . DISCOUNT_QTY_ADD . ' Nuova Q.t&agrave; Scontata:');
define('TEXT_BLANKS_INFO','Tutte le Quantit&agrave; a sconto 0 saranno rimosse con Aggiorna');
define('TEXT_INFO_NO_DISCOUNTS', 'Nessuna Quantit&agrave; di Sconto &egrave; stata definita');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Livelli di Sconto');
define('TEXT_PRODUCTS_DISCOUNT','Sconto');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Q.t&agrave; Minima');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Valore di Sconto');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Tipo');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Prezzo Calcolato:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Prezzo Esteso:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Prezzo<br />Calcolato: &nbsp; Tassato:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Prezzo<br />Esteso: &nbsp; Tassato:');

define('TEXT_EACH','cad.');
define('TEXT_EXTENDED','totale');

define('TEXT_DISCOUNT_TYPE_INFO', 'Info Sconto del Prodotto');
define('TEXT_DISCOUNT_TYPE','Sconto Tipo:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Sconta Prezzi da:');

define('DISCOUNT_TYPE_DROPDOWN_0','Nessuno');
define('DISCOUNT_TYPE_DROPDOWN_1','Percentuale');
define('DISCOUNT_TYPE_DROPDOWN_2','Prezzo Attuale');
define('DISCOUNT_TYPE_DROPDOWN_3','Ammontare');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Prezzo');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Speciale');

define('TEXT_UPDATE_COMMIT','Aggiorna e attiva tutti i cambiamenti dalla visualizzazione corrente');

define('TEXT_PRODUCTS_TAX_CLASS', 'Classe Tassa:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Attenzione:</strong> L\'ID# %s della Categoria Master Prodotto NON corrisponde all\'attuale ID# %s Categoria ed il Prodotto NON &egrave; Linkato!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Attuale Categoria ID# %s corrisponde alla Categoria Master ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Aggiorna ID# %s Categoria Master per farlo corrispondere all\'attuale Categoria con ID# %s');

define('PRODUCT_WARNING_UPDATE', 'Effettuare i cambiamenti e premere Aggiorna per Salvare');
define('PRODUCT_UPDATE_SUCCESS', 'Aggiornamenti e modifiche prodotto effettuati correttamente!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Modifiche cancellate e NON salvate ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Click per iniziare le modifiche ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Solo Preview ... Condizione Prezzo Attuale ... Solo Preview');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Modifica Informazioni Prodotto poi Aggiorna per salvare</strong>');
?>