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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z Albigin $
//

define('HEADING_TITLE', 'Gestore Banner');

define('TABLE_HEADING_BANNERS', 'Banner');
define('TABLE_HEADING_GROUPS', 'Gruppi');
define('TABLE_HEADING_STATISTICS', 'Impressioni / Click');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Nuova Finestra');
define('TABLE_HEADING_BANNER_ON_SSL', 'Mostra SSL');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Seleziona<br />Ordine');

define('TEXT_BANNERS_TITLE', 'Titolo Banner:');
define('TEXT_BANNERS_URL', 'URL Banner:');
define('TEXT_BANNERS_GROUP', 'Gruppo Banner:');
define('TEXT_BANNERS_NEW_GROUP', ', o inserisci sotto un nuovo gruppo banner');
define('TEXT_BANNERS_IMAGE', 'Immagine:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', o scrivi il file locale qui sotto');
define('TEXT_BANNERS_IMAGE_TARGET', 'Immagine Target (Salva a):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Localizzazione del target proposto:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>NOTA: i banners HTML non registrano i clicks del banner stesso</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'Testo HTML:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Seleziona ordine - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>NOTA: Il box laterale banners_box_all presenta i banners in ordine di elenco</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Scade il:');
define('TEXT_BANNERS_OR_AT', ', o a');
define('TEXT_BANNERS_IMPRESSIONS', 'impressions/viste.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Programmato per:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Note Banner:</b><ul><li>Usare un\'immagine OPPURE un testo HTML per il banner - non entrambi.</li><li>Il Testo HTML ha prioriet&agrave; rispetto all\'immagine!</li><li>Il testo HTML non registrer&agrave; i click ma solo le visualizzazioni.</li><li>Banner con immagini provenienti da indirizzi esterni non possono essere esposti in pagine SSL.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Note Immagini:</b><ul><li>Le cartelle di Upload devono essere dotate degli opportuni permessi di scrittura!</li><li>Compilare il campo \'Immagine Target (Salva a)\' solo per il caricamento di immagini nel server (ad esempio in caso di immagini presenti sul proprio computer).</li><li>Il campo \'Immagine Target (Salva a)\' deve corrispondere ad una cartella gi&agrave; esistente con uno slash alla fine (ad esempio, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Note Scadenze:</b><ul><li>Solo uno dei due campi va inviato</li><li>Se la scadenza del banner non &egrave; automatica, lascia questi campi in bianco</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Note Programmazione:</b><ul><li>Se &egrave; stato programmato, il banner si attiver&agrave; automaticamente a quella data.</li><li>I banner programmati verranno indicati inattivi fino alla data di attivazione.</li></ul>');

define('TEXT_BANNERS_STATUS', 'Stato Banner:');
define('TEXT_BANNERS_ACTIVE', 'Attivo');
define('TEXT_BANNERS_NOT_ACTIVE', 'Non Attivo');
define('TEXT_INFO_BANNER_STATUS', '<strong>NOTA:</strong> Lo stato del Banner sar&agrave; in relazione a Scheda Date o Impressioni');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Nuova Finestra Banner');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>NOTA:</strong> Il Banner si aprir&agrave; in una nuova finestra');
define('TEXT_BANNERS_ON_SSL', 'Banner con SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>NOTA:</strong> Il Banner pu&ograve; essere mostrato con SSL senza errori');

define('TEXT_BANNERS_DATE_ADDED', 'Inserito il:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Programmato per il: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Scade il: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Scade a: <b>%s</b> impressioni');
define('TEXT_BANNERS_STATUS_CHANGE', 'Cambia Stato: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Ultimi 3 Giorni');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner Visti');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banner Clicks');

define('TEXT_INFO_DELETE_INTRO', 'Vuoi davvero cancellare questo banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Cancella immagine banner');

define('SUCCESS_BANNER_INSERTED', 'Fatto: banner inserito.');
define('SUCCESS_BANNER_UPDATED', 'Fatto: banner aggiornato.');
define('SUCCESS_BANNER_REMOVED', 'Fatto: banner rimosso.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Fatto: status del banner aggiornato.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Errore: occorre un titolo per il Banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Errore: occorre un gruppo Banner.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Errore: la cartella di destinazione non esiste: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Errore: la cartella di destinazione non &egrave; scrivibile: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Errore: Immagine inesistente.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Errore: l\'Immagine non pu&ograve; essere rimossa.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Errore: Sconosciuto stato flag.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Errore: occorre immagine Banner.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Errore: la cartella dei grafici non esiste. Creare una cartella grafici, ad esempio: <strong>' . DIR_WS_ADMIN . 'immagini/grafici</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Errore: cartella dei grafici non scrivibile.');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Mostra SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Nuova Finestra');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Apri nuova finestra - Abilitato');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Apri nuova finestra - Disabilitato');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Visualizza su pagine sicure - Abilitato');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Visualizza su pagine sicure - Disabilitato');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'OK: stato del banner con apertura in nuova pagina aggiornato.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Ok: stato del banner in pagine SSL aggiornato.');
?>