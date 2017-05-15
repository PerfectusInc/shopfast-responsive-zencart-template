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
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: media_manager.php 4873 2006-11-02 09:12:46Z drbyte $
//

define('HEADING_TITLE_MEDIA_MANAGER', 'Gestionnaire des Médias');

define('TABLE_HEADING_MEDIA', 'Nom de la collection');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_HEADING_NEW_MEDIA_COLLECTION', 'Nouvelle collection de médias');
define('TEXT_NEW_INTRO', 'Veuillez renseigner les détails concernant la nouvelle collection de médias ci-dessous');
define('TEXT_MEDIA_COLLECTION_NAME', 'Nom de la collection de médias');
define('TEXT_MEDIA_EDIT_INSTRUCTIONS', 'Utilisez la section ci-dessus pour changer le nom de la collection de médias, puis cliquez sur le bouton Sauvegarder.<br /><br />
                                        Utilisez la section ci-dessous pour ajouter ou enlever des clips média à la collection de médias.');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_LAST_MODIFIED', 'Denière modification :');
define('TEXT_PRODUCTS', 'Produits liés :');
define('TEXT_CLIPS', 'Clips liés :');
define('TEXT_NO_PRODUCTS', 'Aucun produit dans cette catégorie');
define('TEXT_HEADING_EDIT_MEDIA_COLLECTION', 'Éditer la collection de médias');
define('TEXT_EDIT_INTRO', 'Veuillez rectifier les détails de la nouvelle collection de médias ci-dessous');
define('TEXT_HEADING_DELETE_MEDIA_COLLECTION', 'Supprimer la collection de médias');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette collection de médias ?');
define('TEXT_DISPLAY_NUMBER_OF_MEDIA', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur <strong>%d</strong> collections de médias)');
define('TEXT_ADD_MEDIA_CLIP', 'Ajouter un clip média');
define('TEXT_MEDIA_CLIP_DIR', 'Télécharger dans le répertoire des médias');
define('TEXT_MEDIA_CLIP_TYPE', 'Type de clip média');
define('TEXT_HEADING_ASSIGN_MEDIA_COLLECTION', 'Assigner la collection de médias au produit');
define('TEXT_PRODUCTS_INTRO', 'Vous pouvez assigner et supprimer cette collection de médias pour des produits en remplissant les formulaires ci-dessous.');
define('IMAGE_PRODUCTS', 'Assigner au produit');
define('TEXT_DELETE_PRODUCTS', 'Supprimer cette collection de médias ainsi que tous les articles qui lui sont liés ?');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATTENTION:</b> Il y a %s articles encore lié(s) à cette collection de médias !');
define('TEXT_WARNING_FOLDER_UNWRITABLE', 'NOTE: Impossibilité d\'écrire ' . DIR_FS_CATALOG_MEDIA . ' dans le répertoire Media. Impossibilité de télécharger des fichiers vers le serveur.');

define('ERROR_UNKNOWN_DATA', 'ERREUR : Données fournies inconnues ... opération annulée');
define('TEXT_ADD','Ajouter');


?>