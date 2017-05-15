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
//  $Id: banner_manager.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', 'Bannerbehandling');

define('TABLE_HEADING_BANNERS', 'Bannere');
define('TABLE_HEADING_GROUPS', 'Grupper');
define('TABLE_HEADING_STATISTICS', 'Visninger / Klikk');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Nytt vindu');
define('TABLE_HEADING_BANNER_ON_SSL', 'Vis SSL');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Sortering');

define('TEXT_BANNERS_TITLE', 'Bannertittel:');
define('TEXT_BANNERS_URL', 'Bannerlenke:');
define('TEXT_BANNERS_GROUP', 'Bannergruppe:');
define('TEXT_BANNERS_NEW_GROUP', ', eller fyll inn en ny bannergruppe nedenfor');
define('TEXT_BANNERS_IMAGE', 'Bilde:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', eller fyll inn lokal fil nedenfor');
define('TEXT_BANNERS_IMAGE_TARGET', 'Bildeplassering (lagre til):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Annbefalt lagringsplass for bilde på server er:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>Merk: HTML-bannere lagrer ikke antall klikk</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Sortering - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Merk: banners_box_all sideboksen vil vise bannere etter deres definerte sortering</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Utløper:');
define('TEXT_BANNERS_OR_AT', ', eller på');
define('TEXT_BANNERS_IMPRESSIONS', 'inntrykk/visninger.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Planlagt aktivering:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Bannermerknader:</b><ul><li>Bruk enten et bilde eller en HTML-tekst for banneret - ikke begge.</li><li>HTML-tekst blir prioritert foran bilde.</li><li>HTML-tekst vil ikke registrere klikk, men vil registrere visninger</li><li>Bannere med absolutt bildeadresse bør ikke vises på sikre sider</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Bildemerknader:</b><ul><li>Opplastingsmapper må ha skriverettigheter!</li><li>Fyll ikke ut \'Lagre til\'-feltet om du ikke skal laste opp et bilde til serveren (f.eks. om du bruker et lokalt bilde.</li><li>\'Lagre til\'-feltet må være en eksisterende mappe med ende-\'slash\' (eks. banners/)</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Utløpsmerknader:</b><ul><li>Bare et av to felter skal bli sendt</li><li>Hvis banner ikke utgår automatisk, la feltene være blanke</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Planlagt aktivering-merknader:</b><ul><li>Hvis planlagt aktivering er angitt, vil banneret bli aktivert på denne datoen.</li><li>Alle planlagte bannere er merket som inaktive inntil angitt dato, de vil så bli angitt som aktive.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Bannerstatus:');
define('TEXT_BANNERS_ACTIVE', 'Aktiv');
define('TEXT_BANNERS_NOT_ACTIVE', 'Ikke aktiv');
define('TEXT_INFO_BANNER_STATUS', '<strong>Merk:</strong> Bannerstatus vil bli oppdatert basert på planlagt aktiveringsdato og inntrykk');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Banner ny vindu');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Merk:</strong> Banner vil åpne i et nytt vindu');
define('TEXT_BANNERS_ON_SSL', 'Banner i SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Merk<strong> Banner kan bli vist på sikre sider uten feil');

define('TEXT_BANNERS_DATE_ADDED', 'Llagt til:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Planlagt aktivert: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Utløper: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Utløper etter: <b>%s</b>treff');
define('TEXT_BANNERS_STATUS_CHANGE', 'Statusendring: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Siste 3 dager');
define('TEXT_BANNERS_BANNER_VIEWS', 'Bannervisninger');
define('TEXT_BANNERS_BANNER_CLICKS', 'Bannerklikk');

define('TEXT_INFO_DELETE_INTRO', 'Er du sikker at du ønsker å slette dette banneret ?');
define('TEXT_INFO_DELETE_IMAGE', 'Slett bannerbilde');

define('SUCCESS_BANNER_INSERTED', 'Vellykket: Banner har blitt satt inn.');
define('SUCCESS_BANNER_UPDATED', 'Vellykket: Banner har blitt oppdatert.');
define('SUCCESS_BANNER_REMOVED', 'Vellykket: Banner har blitt fjernet.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Vellykket: Status på banner har blitt oppdatert.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Feil: Bannertittel påkrevd.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Feil: Bannergruppe påkrevd.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Feil: Målmappe eksisterer ikke: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: Målmappe er ikke skrivbar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Feil: Bilde eksisterer ikke.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Feil: Bilde kan ikke fjernes.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Feil: Ukjent status.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Feil: Bannerbilde påkrevd.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Feil: Grafmappe eksisterer ikke. Opprett en grafmappe: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Feil: Grafmappe er ikke skrivbar. Denne er plassert i: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Vis SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Nytt vindu');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Åpne nytt vindu - Aktivert');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Åpne nytt vindu - Deaktivert');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Visning på sikre sider - Aktivert');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Visning på sikre sider - Deaktivert');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Vellykket: Status for åpning av banner i nytt vindu har blitt oppdatert.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Status for visning av banner på sikre sider er oppdatert.');
