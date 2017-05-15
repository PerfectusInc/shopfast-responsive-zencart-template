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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z Albigin $
//
define('HEADING_TITLE', 'Pagine EZ');
define('TEXT_HTML_AREA', 'Html Area');
define('TABLE_HEADING_PAGES', 'Titolo Pagina');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_VSORT_ORDER', 'Ordine elenco Sidebox');
define('TABLE_HEADING_HSORT_ORDER', 'Ordine elenco Footer');
define('TEXT_PAGES_TITLE', 'Titolo Pagina:');
define('TEXT_PAGES_HTML_TEXT', 'Contenuto HTML:');
define('TABLE_HEADING_DATE_ADDED', 'Data Inserimento:');
define('TEXT_PAGES_STATUS_CHANGE', 'Cambiamento Stato: %s');
define('TEXT_INFO_DELETE_INTRO', 'Sei sicuro di voler cancellare questa pagina?');
define('SUCCESS_PAGE_INSERTED', 'La pagina &egrave; stata inserita con successo.');
define('SUCCESS_PAGE_UPDATED', 'La pagina &egrave; stata aggiornata con successo.');
define('SUCCESS_PAGE_REMOVED', 'La pagina &egrave; stata rimossa con successo.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Lo stato della pagina &egrave; stato aggiornato con successo.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Errore: Titolo Pagina richiesto.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Errore: Stato flag sconosciuto.');
define('ERROR_MULTIPLE_HTML_URL', 'Errore: definite regolazioni multiple quando soltanto una pu&ograve; essere definita per il link  ...<br />Definire solo una scelta per il contenuto HTML - o URL interno - o URL esterno.');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Header:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Box Lato:');
define('TABLE_HEADING_STATUS_FOOTER', 'Footer:');
define('TABLE_HEADING_STATUS_TOC', 'TOC:');
define('TABLE_HEADING_CHAPTER', 'Capitolo:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Apri Nuova Finestra:');
define('TABLE_HEADING_PAGE_IS_SSL', 'La pagina &egrave; SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Visualizzate da <b>%d</b> a <b>%d</b> (di <b>%d</b> pagine)');
define('IMAGE_NEW_PAGE', 'Nuova Pagina');
define('TEXT_INFO_PAGE_IMAGE', 'Immagine');
define('TEXT_INFO_CURRENT_IMAGE', 'Immagine Attuale:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Seleziona una pagina ...');

define('TEXT_HEADER_SORT_ORDER', 'Ordine di elencazione:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Ordine di elencazione:');
define('TEXT_FOOTER_SORT_ORDER', 'Ordine di elencazione:');
define('TEXT_TOC_SORT_ORDER', 'Ordine di elencazione:');
define('TEXT_CHAPTER', 'Prec./Succ. Capitolo:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Capitolo:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Dispone elenco in ordine orizzontale in una unica cella posizionata in Header; L\'ordinamento sar&agrave; attivo con valori maggiori di zero.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Dispone elenco verticale nel Box a Lato; L\'ordinamento sar&agrave; possibile con valori maggiori di zero. Per valore 0 saranno considerate come contenitori per impieghi dedicati senza essere presentate in elenco');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Dispone elenco in ordine orizzontale in una unica cella posizionata nel Footer; L\'ordinamento sar&agrave; attivo con valori maggiori di zero.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC (Tavola dei Contenuti) Dispone nell\'ordine scelto la visualizzazione delle pagine che sono trattate come un singolo elenco (header/footer, ecc) o verticalmente in relazione alle proprie necessit&agrave; L\'ordinamento sar&agrave; attivo con valori maggiori di zero.');
define('TEXT_CHAPTER_EXPLAIN', 'I Capitoli sono usati con il TOC (Tavola dei Contenuti) Con l\'ordine esposto in Precedente/Prossima. I collegamenti nel TOC consisteranno delle pagine che abbinano il medesimo numero di capitolo e saranno disposte nell\'ordine numerico del TOC');

define('TEXT_ALT_URL', 'Link URL a pagina Interna:');
define('TEXT_ALT_URL_EXPLAIN', 'Se specificato, il contenitore pagina sar&agrave; ignorato e questo URL INTERNO sar&agrave; usato quale collegamento.<br />Esempio com Recensioni: index.php?main_page=reviews<br />Esempio al Mio Account: index.php?main_page=account e segnato come SSL');

define('TEXT_ALT_URL_EXTERNAL', 'Link URL a pagina Esterna:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Se specificato, il contenitore pagina sar&agrave; ignorato e questo URL ESTERNO sar&agrave; usato quale collegamento.<br />Esempio a link sterno: http://www.zencart-italia.it');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Ordine elenco: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Capitolo/TOC');
define('TEXT_SORT_HEADER_TITLE', 'Header');
define('TEXT_SORT_SIDEBOX_TITLE', 'Box Lato');
define('TEXT_SORT_FOOTER_TITLE', 'Footer');
define('TEXT_SORT_PAGE_TITLE', 'Titolo Pagina');
define('TEXT_SORT_PAGE_ID_TITLE', 'Page ID, Titolo');

define('TEXT_PAGE_TITLE', 'Titolo:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>ATTENZIONE: Definizione Collegamenti Multipli</strong>');
?>
