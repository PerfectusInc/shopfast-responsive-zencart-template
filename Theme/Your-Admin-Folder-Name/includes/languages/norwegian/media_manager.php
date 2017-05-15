<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
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
//  $Id: media_manager.php 94 2012-02-16 23:24:23Z syntaxerror.no $
//

define('HEADING_TITLE_MEDIA_MANAGER', 'Mediabehandling');

define('TABLE_HEADING_MEDIA', 'Samlingsnavn');
define('TABLE_HEADING_ACTION', 'Valg');
define('TEXT_HEADING_NEW_MEDIA_COLLECTION', 'Ny mediasamling');
define('TEXT_NEW_INTRO', 'Fyll inn detaljer for den nye mediasamlingen nedenfor');
define('TEXT_MEDIA_COLLECTION_NAME', 'Mediasamlingens navn');
define('TEXT_MEDIA_EDIT_INSTRUCTIONS', 'Bruk seksjonen ovenfor til å forandre mediasamlingens navn, deretter klikk på lagre-knappen.<br /><br />
                                        Bruk seksjonen nedenfor til å legge til eller fjerne mediaklipp fra mediasamlingen.');
define('TEXT_DATE_ADDED', 'agt til:');
define('TEXT_LAST_MODIFIED', 'Sist endret:');
define('TEXT_PRODUCTS', 'Lenkede produkter:');
define('TEXT_CLIPS', 'Lenkede klipp:');
define('TEXT_NO_PRODUCTS', 'Ingen produkter i denne kategorien');
define('TEXT_HEADING_EDIT_MEDIA_COLLECTION', 'Endre mediasamling');
define('TEXT_EDIT_INTRO', 'Endre detaljer for den nye mediasamlingen nedenfor');
define('TEXT_HEADING_DELETE_MEDIA_COLLECTION', 'Slett mediasamling');
define('TEXT_DELETE_INTRO', 'Ønkser du å slette denne mediasamlingen?');
  define('TEXT_DISPLAY_NUMBER_OF_MEDIA', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> mediasamlinger)');
define('TEXT_ADD_MEDIA_CLIP', 'Legg til mediaklipp');
define('TEXT_MEDIA_CLIP_DIR', 'Last opp til mediamappe');
define('TEXT_MEDIA_CLIP_TYPE', 'Mediaklipptype');
define('TEXT_HEADING_ASSIGN_MEDIA_COLLECTION', 'Tilknytt mediasamling til produkt');
define('TEXT_PRODUCTS_INTRO', 'Du kan tilknytte og fjerne denne mediasamlingen for produkter ved bruk av skjema nedenfor.');
define('IMAGE_PRODUCTS', 'Tilknytt til produkt');
define('TEXT_DELETE_PRODUCTS', 'Slette denne mediasamlingen og alle enheter lenket til den?');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Advarsel:</b> Det er %s enhet(er) som forsatt er lenket til denne mediasamlingen!');
define('TEXT_WARNING_FOLDER_UNWRITABLE', 'MERK: Mediamappen ' . DIR_FS_CATALOG_MEDIA . ' er ikke skrivbar, kan ikke laste opp filer.');

define('ERROR_UNKNOWN_DATA', 'Feil: Ukjent data angitt... handling avbrutt');
define('TEXT_ADD','Legg til');
