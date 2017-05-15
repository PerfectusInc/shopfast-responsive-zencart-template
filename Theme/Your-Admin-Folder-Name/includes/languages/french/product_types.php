<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: product_types.php 1122 2005-04-05 04:37:58Z drbyte $
//

define('HEADING_TITLE', 'Types de Produits');
define('HEADING_TITLE_LAYOUT', 'Options de mise en page du type de produit :: ');

define('TABLE_HEADING_PRODUCT_TYPES', 'Types de produits');
define('TABLE_HEADING_PRODUCT_TYPES_ALLOW_ADD_TO_CART', 'Ajouter<br />au panier');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_CONFIGURATION_TITLE', 'Titre');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valeur');

define('TEXT_HEADING_NEW_PRODUCT_TYPE', 'Nouveau type de produit');
define('TEXT_HEADING_EDIT_PRODUCT_TYPE', 'Editer le type de produit');
define('TEXT_HEADING_DELETE_PRODUCT_TYPE', 'Supprimer le type de produit');

define('TEXT_PRODUCT_TYPES', 'Types de produit :');
define('TEXT_PRODUCT_TYPES_HANDLER', 'Page de gestion :');
define('TEXT_PRODUCT_TYPES_ALLOW_ADD_CART', 'Ce produit peut être ajouté au panier :');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_PRODUCTS', 'Produits :');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Télécharger vers le répertoire :');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE INEXISTANTE');
define('TEXT_MASTER_TYPE', 'Ce type de produit doit être considéré comme un sous-type de ');

define('TEXT_NEW_INTRO', 'Veuillez insérer les informations requises pour le nouveau fabricant');
define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires');

define('TEXT_PRODUCT_TYPES_NAME', 'Nom du type de produit :');
define('TEXT_PRODUCT_TYPES_IMAGE', 'Image par défaut du type de produit :');
define('TEXT_PRODUCT_TYPES_URL', 'URL des fabricants :');

define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce type de produit ?');
define('TEXT_DELETE_IMAGE', 'Supprimer l\'image par défaut du type de produit ?');
define('TEXT_DELETE_PRODUCTS', 'Supprimer les produits de ce type de produit ? (en incluant les avis, les promotions et les produits attendus)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATTENTION:</b> Il y a %s produit(s) encore associé(s) à ce type de produit !');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Erreur : Je ne peux pas écrire sur le répertoire cible. Veuillez définir les bonnes permissions sur : %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le répertoire cible n\'existe pas : %s');

define('IMAGE_LAYOUT', 'Paramètres de mise en page');
?>