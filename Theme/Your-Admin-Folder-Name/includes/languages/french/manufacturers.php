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
//  $Id: manufacturers.php 4808 2006-10-22 18:48:53Z ajeh $
//

define('HEADING_TITLE', 'Fabricants');

define('TABLE_HEADING_MANUFACTURERS', 'Fabricants');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nouveau fabricant');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Éditer le fabricant');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Supprimer le fabricant');

define('TEXT_MANUFACTURERS', 'Fabricants :');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_LAST_MODIFIED', 'Denière Modification :');
define('TEXT_PRODUCTS', 'Produits :');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Télécharger vers le répertoire :');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE INEXISTANTE');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>Ou, sélectionnez une image existante à partir du serveur, nom du fichier :</strong>');

define('TEXT_NEW_INTRO', 'Veuillez renseigner les informations concernant le nouveau fabricant');
define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires');

define('TEXT_MANUFACTURERS_NAME', 'Nom des fabricants :');
define('TEXT_MANUFACTURERS_IMAGE', 'Image des fabricants :');
define('TEXT_MANUFACTURERS_URL', 'URL des fabricants :');

define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce fabricant ?');
define('TEXT_DELETE_IMAGE', 'Supprimer l\'image du fabricant ?');
define('TEXT_DELETE_PRODUCTS', 'Supprimer les produits de ce fabricant ? (en incluant les avis, les promotions et les produits attendus)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATTENTION :</b> Il y a %s produits encore associé(s) à ce fabricant !');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Erreur : Impossibilité d\'écrire dans ce répertoire. Veuillez définir les bonnes permissions utilisateur sur : %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Répertoire inexistant : %s');
?>