<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', 'Kolom sideBox');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Sidebox bestandsnaam');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'Linker/Rechter kolom<br />status');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Enkele kolom<br />status');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'Linker of rechter<br /> kolom');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'Linker/Rechter kolom<br />rangschikking');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Enkele kolom<br />rangschikking');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Maak de noodzakelijke wijziging(en)');
define('TEXT_INFO_LAYOUT_BOX','Geselecteerde Sidebox: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Naam sidebox:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Positie: (enkele kolom negeert deze instelling)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Links/Rechts kolom status: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Enkele kolom status: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','AAN= 1 UIT=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Links/Rechts kolom rangschikking:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Enkel kolom rangschikking:');
define('TEXT_INFO_INSERT_INTRO', 'Voer de nieuwe sidebox in met alle relevante gegevens');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze sidebox wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Nieuwe sidebox');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Wijzig sidebox');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Verwijder sidebox');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Verwijder ontbrekende sidebox van template: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','Opmerking: hiermee worden bestanden niet definitief verwijderd. Het is mogelijk om op ieder gewenst moment deze sidebox weer toe te voegen door de juiste directory op te geven.<br /><br /><strong>Verwijder sidebox: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Herstel rangschikking alle sideboxes zodat deze overeekomt met de standaard rangschikking voor deze template: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Hiermee worden sideboxes niet definitief verwijderd. Het hersteld alleen de huidige rangschikking.');
define('TEXT_INFO_BOX_DETAILS','Sidebox details: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Site Template Layout');

define('TABLE_HEADING_LAYOUT_TITLE', 'Titel');
define('TABLE_HEADING_LAYOUT_VALUE', 'Waarde');
define('TABLE_HEADING_ACTION', 'Actie(s)');


define('TEXT_MODULE_DIRECTORY', 'Site Layout Directory:');
define('TEXT_INFO_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_INFO_LAST_MODIFIED', 'Datum laatste wijziging:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Layout');
define('BOX_LAYOUT_COLUMNS', 'Kolom Beheertool');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>ONTBREEKT</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Met succes verwijderd van de template van sidebox: ');
define('SUCCESS_BOX_RESET','Alle sidebox instellingen zijn <strong>met succes</strong> hersteld naar de	standaardinstellingen voor template: ');
define('SUCCESS_BOX_UPDATED','Instellingen zijn <strong>met succes</strong> gewijzigd voor sidebox: ');

define('TEXT_ON',' AAN ');
define('TEXT_OFF',' UIT ');
define('TEXT_LEFT',' LINKS ');
define('TEXT_RIGHT',' RECHTS ');

?>