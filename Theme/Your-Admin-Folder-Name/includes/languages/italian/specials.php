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
//  $Id: specials.php 3788 2006-07-04 22:05:35Z Deepmax $
//

define('HEADING_TITLE', 'Promozioni');

define('TABLE_HEADING_PRODUCTS', 'Prodotti');
define('TABLE_HEADING_PRODUCTS_MODEL','Modello');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Prodotti Prezzi Vendita Promozione');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Percentuale');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponibile');
define('TABLE_HEADING_EXPIRES_DATE','Scade');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_SPECIALS_PRODUCT', 'Prodotto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Prezzo Promozionale:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Data Scadenza:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Disponibile il:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Nota:</b><ul><li>Nel campo Prezzo Promozionale si pu&ograve; inserire una percentuuale di sconto, ad esempio: <b>20%</b></li><li>Se invece si vuole inserire un nuovo prezzo,  il separatore dei decimali deve essere un \'.\' (punto decimale), esempio: <b>49.99</b></li><li>Se non si vuole scadenza, lasciare in bianco la data scadenza</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Inserito il:');
define('TEXT_INFO_LAST_MODIFIED', 'Ultima Modifica:');
define('TEXT_INFO_NEW_PRICE', 'Nuovo Prezzo:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Prezzo Originale:');
define('TEXT_INFO_DISPLAY_PRICE', 'Mostra Prezzo:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponibile dal:');
define('TEXT_INFO_EXPIRES_DATE', 'Scade il:');
define('TEXT_INFO_STATUS_CHANGE', 'Cambio Stato:');
define('TEXT_IMAGE_NONEXISTENT', 'Immagine inesistente');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Cancella Promozione');
define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare il prezzo dei prodotti in promozione?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Successo: Pre-Aggiunta di una Promozione ... per favore aggiorna il prezzo e le date ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Attenzione: Non &egrave; stato specificato l\'ID Prodotto ... non &egrave; stato aggiunto niente ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Attenzione: l\'ID Prodotto &egrave; gi&agrave; in Promozione ... non &egrave; stato aggiunto niente ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Attenzione: ID Prodotto non valido ... niente &egrave; stato aggiunto ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Aggiunge Manualmente una nuova Promozione tramite l\'ID Prodotto');
define('TEXT_INFO_PRE_ADD_INTRO', 'In databases di grandi dimensioni, tu puoi Aggiungere Manualmente una Promozione tramite l\'ID Prodotto<br /><br />Questo metodo &egrave; usato quando la pagina richiede troppo tempo a restituire e provare a selezionare un Prodotto dall\'elenco a discesa rendendo difficoltoso a causa dei troppi prodotti da scegliere.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Inserisci l\'ID Prodotto che deve essere Pre-Aggiunto: ');
define('TEXT_INFO_MANUAL', 'ID Prodotto che deve essere Aggiunto Manualmente come una Promozione');
?>