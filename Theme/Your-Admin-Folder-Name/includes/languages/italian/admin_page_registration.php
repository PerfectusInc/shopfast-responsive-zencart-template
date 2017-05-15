<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2012-01-12 05:24:19Z LaVale $
 */

define('HEADING_TITLE', 'Inserire Pagina in Amministrazione');
define('TEXT_PAGE_KEY', 'Identificativo Pagina');
define('TEXT_LANGUAGE_KEY', 'Define Nome Pagina');
define('TEXT_MAIN_PAGE', 'Define Filename Pagina');
define('TEXT_PAGE_PARAMS', 'Parametri Pagina');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', 'Mostrare nel Menu?');
define('TEXT_SORT_ORDER', 'Ordine di Visualizzazione');

define('TEXT_EXAMPLE_PAGE_KEY', '(ad es. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(ad es. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(ad es. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(ad es. opzione=1 o, solitamente, lasciare vuoto)');
define('TEXT_SELECT_MENU', 'Seleziona Menu');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Identificativo Pagina non inserito. Tutte le pagine in amministrazione devono avere un Identificativo Pagina univoco.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Identificativo Pagina gi&agrave; esistente. Gli Identificativi Pagina devono essere univoci.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Nome Pagina non inserito. Tutte le pagine in amministrazione devono avere un Nome Pagina che definisca la scritta di ogni link nel menu.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Il Nome Pagina inserito non &egrave; stato definito. Verificare che sia scritto correttamente.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'La definizione del Filename per la pagina non &egrave; stata inserita.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'La definizione del Filename inserito non esiste. Verificare che sia scritta correttamente.');
define('ERROR_MENU_NOT_CHOSEN', 'Non &egrave; stato scelto alcun menu. Associare la nuova pagina ad un menu, anche se si sceglie di non visualizzarla in tale menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'La Pagina &egrave; stata inserita in Amministrazione.');
