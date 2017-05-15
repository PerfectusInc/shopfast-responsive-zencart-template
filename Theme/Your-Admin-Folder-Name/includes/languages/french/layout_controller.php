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

define('HEADING_TITLE', 'Boîtes de colonne');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Nom de fichier de la boîte');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'Statut dans<br />la COLONNE<br />GAUCHE/DROITE');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Statut dans<br />la COLONNE<br />UNIQUE');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'COLONNE<br />GAUCHE ou DROITE');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'Classement<br />dans la COLONNE<br />GAUCHE/DROITE');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Classement<br />dans la COLONNE<br />UNIQUE');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires');
define('TEXT_INFO_LAYOUT_BOX','Boîte sélectionné : ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Nom de la boîte :');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Emplacement :<br />(La colonne unique ignore ce réglage)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Statut dans la colonne gauche/droite : ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Statut dans la colonne unique : ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','MARCHE = 1 ARRET = 0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Classement dans la colonne gauche/droite :');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Classement dans la colonne unique :');
define('TEXT_INFO_INSERT_INTRO', 'Veuillez saisir la nouvelle boîte avec ses données relatives');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette boîte ?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Nouvelle boîte');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Éditer la boîte');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Supprimer cette boîte');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Supprimer la boîte manquante de la liste du thème : ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTE: Ceci ne supprime aucun fichier et vous pouvez réinstaller la boîte à tout moment en l\'ajoutant au répertoire correspondant.<br /><br /><strong>Effacer le Nom des Blocs: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Réinitialiser le classement de toutes les boîtes au classement PAR DÉFAUT des boîtes du thème : ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Ceci ne supprime aucune boîte. Ceci réinitialise uniquement le classement actuel.');
define('TEXT_INFO_BOX_DETAILS','Détails de la boîte : ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Disposition du thème du site');

define('TABLE_HEADING_LAYOUT_TITLE', 'Titre');
define('TABLE_HEADING_LAYOUT_VALUE', 'Valeur');
define('TABLE_HEADING_ACTION', 'Action');


define('TEXT_MODULE_DIRECTORY', 'Répertoire de disposition du site :');
define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Disposition');
define('BOX_LAYOUT_COLUMNS', 'Contrôleur des colonnes');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>ABSENT</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Suppression réussie du thème pour la boîte : ');
define('SUCCESS_BOX_RESET','Réinitialisation réussie des paramètres de toutes les boîtes à leur valeur par défaut pour le thème : ');
define('SUCCESS_BOX_UPDATED','Mise à jour réussie des paramètres de la boîte : ');

define('TEXT_ON',' MARCHE ');
define('TEXT_OFF',' ARRET ');
define('TEXT_LEFT',' GAUCHE ');
define('TEXT_RIGHT',' DROITE ');

?>