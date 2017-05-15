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
//  $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
//

define('HEADING_TITLE', 'Fare Saldi');
define('TABLE_HEADING_SALE_NAME', 'Nome Saldo');
define('TABLE_HEADING_SALE_DEDUCTION', 'Sconto');
define('TABLE_HEADING_SALE_DATE_START', 'Data Inizio');
define('TABLE_HEADING_SALE_DATE_END', 'Data Fine');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');
define('TEXT_SALEMAKER_NAME', 'Nome Saldo:');
define('TEXT_SALEMAKER_DEDUCTION', 'Sconto:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Ventaglio prezzi Prodotto:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Se il Prodotto &egrave; in promozione:');
define('TEXT_SALEMAKER_DATE_START', 'Data Inizio:');
define('TEXT_SALEMAKER_DATE_END', 'Data Fine:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Oppure</b> spuntare le Categorie alle quali si applica questo saldo:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Vedi consigli sull\'uso di Fare Saldi.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Segue)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Subito');
define('TEXT_SALEMAKER_NEVER', 'Mai');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Spuntare la casella se il Saldo si applica a <b>tutti i prodotti</b>:');
define('TEXT_SALEMAKER_TOP', 'Intero catalogo');
define('TEXT_INFO_DATE_ADDED', 'Inserito il:');
define('TEXT_INFO_DATE_MODIFIED', 'Ultima Modifica:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Ultimo Cambio Stato:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Condizioni promozioni:');
define('TEXT_INFO_DEDUCTION', 'Sconto:');
define('TEXT_INFO_PRICERANGE_FROM', 'Ventaglio prezzi:');
define('TEXT_INFO_PRICERANGE_TO', ' a ');
define('TEXT_INFO_DATE_START', 'Parte:');
define('TEXT_INFO_DATE_END', 'Scade:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ignora prezzo promozioni - Applica a prezzo prodotto e sostituisci promozione');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ignora saldi - Non applicare riduzioni saldi se prodotto &egrave; in offerta promozionale');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Applica condizioni impostate saldi a prezzo promozionale - Altrimenti applica a prezzo normale');

// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Amm.re Sconto');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Percentuale');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Nuovo Prezzo');
*/

define('TEXT_INFO_HEADING_COPY_SALE', 'Copia Saldo');
define('TEXT_INFO_COPY_INTRO', 'Inserisci un nome per la copia di<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Cancella Saldo');
define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare definitivamente questo saldo?');
define('TEXT_MORE_INFO', '(Altre info)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Attenzione : %s sconti sono presenti in questa categoria');
?>