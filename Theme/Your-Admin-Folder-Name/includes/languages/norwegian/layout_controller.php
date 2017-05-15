<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 94 2012-02-16 23:24:23Z syntaxerror.no $
//

define('HEADING_TITLE', 'Sidebokser');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Boksens filnavn');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'Venstre/Høyre kolonne<br />status');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Enkel kolonne<br />status');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'Venstre eller høyre<br /> kolonne');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'Venstre/Høyre kolonne<br />sortering');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Enkel kolonne<br />sortering');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_INFO_EDIT_INTRO', 'Gjør nødvendige endringer');
define('TEXT_INFO_LAYOUT_BOX','Valgt boks: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Navn:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Plassering: (enkel kolonne ignorer denne instillingen)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Venstre/Høyre kollonestatus: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Enkel kolonnestatus: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','På= 1 Av=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Venstre/Høyre kolonnesortering:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Enkel kolonnesortering:');
define('TEXT_INFO_INSERT_INTRO', 'Fyll inn ny boks med relatert informasjon');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne boksen?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Ny boks');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Endre boks');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Slett boks');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Slett manglende boks fra designlisting: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','Merk: Dette fjerner ikke filer, og du kan legge til boksen igjen når som helst ved å legge den til riktig mappe.<br /><br /><strong>Slett boksnavn: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Gjenopprett bokssortering for å passe standard sortering for design: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Dette fjerner ingen av boksene, det vil bare tilbakestille gjeldende sortering');
define('TEXT_INFO_BOX_DETAILS','Boksdetaljer: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Designoppstilling');

define('TABLE_HEADING_LAYOUT_TITLE', 'Tittel');
define('TABLE_HEADING_LAYOUT_VALUE', 'Verdi');
define('TABLE_HEADING_ACTION', 'Valg');


define('TEXT_MODULE_DIRECTORY', 'Modulmappe:');
define('TEXT_INFO_DATE_ADDED', 'Lagt til:');
define('TEXT_INFO_LAST_MODIFIED', 'Sist endret:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Oppstilling');
define('BOX_LAYOUT_COLUMNS', 'Kolonnekontroll');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>Mangler</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Sideboks velykket fjernet: ');
define('SUCCESS_BOX_RESET','Alle sideboksinnstillinger ble vellykket tilbakestilt til standardinnstillinger for design: ');
define('SUCCESS_BOX_UPDATED','Vellykket oppdatering av innstillinger for sideboks: ');

define('TEXT_ON',' På ');
define('TEXT_OFF',' Av ');
define('TEXT_LEFT',' Venstre ');
define('TEXT_RIGHT',' Høyre ');

