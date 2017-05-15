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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ-Pages');
define('TABLE_HEADING_PAGES', 'Titre de page');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_VSORT_ORDER', 'Classement de boîte de côté');
define('TABLE_HEADING_HSORT_ORDER', 'Classement de pied de page');
define('TEXT_PAGES_TITLE', 'Titre de page :');
define('TEXT_PAGES_HTML_TEXT', 'Contenu HTML :');
define('TABLE_HEADING_DATE_ADDED', 'Date de création');
define('TEXT_PAGES_STATUS_CHANGE', 'Changement de statut : %s');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette page ?');
define('SUCCESS_PAGE_INSERTED', 'Succès : La page a été insérée.');
define('SUCCESS_PAGE_UPDATED', 'Succès : La page a été mise à jour.');
define('SUCCESS_PAGE_REMOVED', 'Succès : La page a été supprimée.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Succès : Le statut de la page a été mis à jour.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Erreur : Titre de page requis.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Erreur : Drapeau de statut inconnu.');
define('ERROR_MULTIPLE_HTML_URL', 'Erreur : Vous avez défini plusieurs règlages alors qu\'un seul peut être défini par lien ...<br />Définissez uniquement au choix : Contenu HTML -ou- URL lien interne -ou- URL lien externe');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'En-tête :');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Boîte de Côté :');
define('TABLE_HEADING_STATUS_FOOTER', 'Pied :');
define('TABLE_HEADING_STATUS_TOC', 'TDM (Table des matières) :');
define('TABLE_HEADING_CHAPTER', 'Chapitre :');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Ouvrir dans<br />nouvelle fenêtre :');
define('TABLE_HEADING_PAGE_IS_SSL', 'Page en SSL :');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Affiche <b>%d</b> à <b>%d</b> (de <b>%d</b> pages)');
define('IMAGE_NEW_PAGE', 'Nouvelle page');
define('TEXT_INFO_PAGE_IMAGE', 'Image');
define('TEXT_INFO_CURRENT_IMAGE', 'Image courante :');
define('TEXT_INFO_PAGES_ID', 'ID : ');
define('TEXT_INFO_PAGES_ID_SELECT', '- Choisissez une page ...');

define('TEXT_HEADER_SORT_ORDER', 'Classement :');
define('TEXT_SIDEBOX_SORT_ORDER', 'Classement :');
define('TEXT_FOOTER_SORT_ORDER', 'Classement :');
define('TEXT_TOC_SORT_ORDER', 'Classement :');
define('TEXT_CHAPTER', 'Chapitre précédent/suivant :');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Chapitre :&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Le classement d\'en-tête indique dans quelle séquence les pages apparaissent sur une seule rangée dans l\'en-tête; Pour qu\'une page apparaisse dans la liste de type rangée, le classement doit être plus grand que zéro.<br />');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Le classement de boîte de côté est utilisé lorsque les pages apparaissent en liens verticaux dans la boîte de côté; Pour qu\'une page apparaisse dans la liste verticale, le classement doit être plus grand que zéro, sinon cela sera considéré comme du texte HTML à des fins spéciales.<br />');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Le classement de pied indique dans quelle séquence les pages apparaissent sur une seule rangée dans le pied de page; Pour qu\'une page apparaisse dans le pied de page, le classement doit être plus grand que zéro.<br />');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'Le classement en TDM (Table des matières) indique dans quelle séquence les pages apparaissent dans la TDM et peut être personnalisé soit en une seule rangée (en-tête/pied de page, etc.) soit à la verticale, en fonction des besoins individuels.<br />');
define('TEXT_CHAPTER_EXPLAIN', 'Les chapitres sont utilisés avec le classement en TDM (Table des matières) pour un affichage avec des liens de navigation précédente/suivante. Les liens dans la TDM consisteront des pages ayant ce même numéro de chapitre, et seront affichés selon leur classement TDM.<br />');

define('TEXT_ALT_URL', 'Lien URL interne :');
define('TEXT_ALT_URL_EXPLAIN', 'Si spécifié, le contenu de la page sera ignoré et cet URL INTERNE sera utilisé pour faire le lien.<br />Exemple vers Reviews : index.php?main_page=reviews<br />Exemple vers Mon compte: index.php?main_page=account et marquer en SSL');

define('TEXT_ALT_URL_EXTERNAL', 'Lien URL externe :');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Si spécifié, le contenu de la page sera ignoré et cet URL EXTERNE sera utilisé pour faire le lien.<br />Exemple de lien externe: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Ordre d\'affichage : ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Chapitre/TDM (Table des matières) :');
define('TEXT_SORT_HEADER_TITLE', 'En-tête');
define('TEXT_SORT_SIDEBOX_TITLE', 'Boîte de Côté');
define('TEXT_SORT_FOOTER_TITLE', 'Pied de page');
define('TEXT_SORT_PAGE_TITLE', 'Titre de page');
define('TEXT_SORT_PAGE_ID_TITLE', 'ID de Page, Titre');

define('TEXT_PAGE_TITLE', 'Titre :');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>ATTENTION: Définition de liens multiples</strong>');
?>