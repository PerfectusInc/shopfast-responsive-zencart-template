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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z Albigin $
//

define('HEADING_TITLE', 'Editore di pagine Definite per: ');
define('NAVBAR_TITLE', 'Editore di pagine Definite');

define('TEXT_INFO_EDIT_PAGE', 'Seleziona una pagina da modificare:');

define('TEXT_INFO_MAIN_PAGE', 'Pagina Principale');

define('TEXT_INFO_SHIPPINGINFO', 'Spedizioni & Consegne');
define('TEXT_INFO_PRIVACY', 'Privacy');
define('TEXT_INFO_CONDITIONS', 'Condizioni di Vendita');
define('TEXT_INFO_CONTACT_US', 'Per contattarci');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Acquisto effettuato');

define('TEXT_INFO_PAGE_2', 'Pagina 2');
define('TEXT_INFO_PAGE_3', 'Pagina 3');
define('TEXT_INFO_PAGE_4', 'Pagina 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Il file non esiste: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Errore: non posso scrivere su questo file. Occorre attribuire gli opportuni permessi <i>chmod</i> di accesso a: %s');

define('TEXT_INFO_SELECT_FILE', 'Seleziona un file da editare ...');
define('TEXT_INFO_EDITING', 'File in corso di modifica:');


define('TEXT_INFO_CAUTION','Nota: modificare sempre i file situati nella directory del template di override in uso. Esempio: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />NON DIMENTICARE di fare il backup.');
?>