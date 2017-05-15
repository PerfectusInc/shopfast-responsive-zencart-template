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
//  $Id: downloads_manager.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE','Gestionnaire des Téléchargements');
define('TABLE_HEADING_ATTRIBUTES_ID', 'ID# Attr');
define('TABLE_HEADING_PRODUCTS_ID', 'ID# Prod');
define('TABLE_HEADING_PRODUCT', 'Nom du produit');
define('TABLE_HEADING_MODEL', 'Modèle');
define('TABLE_HEADING_OPT_NAME', 'Nom d\'option');
define('TABLE_HEADING_OPT_VALUE', 'Valeur d\'option');
define('TABLE_TEXT_FILENAME', 'Nom de Fichier');
define('TABLE_TEXT_MAX_DAYS', 'Jours');
define('TABLE_TEXT_MAX_COUNT', 'Compteur');
define('TABLE_HEADING_ACTION', 'Action');

define('TABLE_HEADING_OPT_PRICE', 'Prix');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Préfixe');

define('TEXT_PRODUCTS_NAME', 'Produit : ');
define('TEXT_PRODUCTS_MODEL', 'Modèle : ');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_DOWNLOAD', 'EDITION DES INFORMATIONS DU TELECHARGEMENT');
define('TEXT_INFO_HEADING_DELETE_PRODUCTS_DOWNLOAD', 'CONFIRMATION DE LA SUPPRESSION DU TELECHARGEMENT');
define('TEXT_INFO_EDIT_INTRO', 'Modifier les informations du téléchargement :');
define('TEXT_DELETE_INTRO', 'Le fichier suivant sera supprimé de la base de données. Il ne sera pas supprimé du serveur:');

define('TEXT_INFO_FILENAME', 'Nom de Fichier : ');
define('TEXT_INFO_MAX_DAYS', 'Max. jours : ');
define('TEXT_INFO_MAX_COUNT', 'Max. téléchargements : ');

define('TEXT_INFO_FILENAME_MISSING','&nbsp;Fichier manquant');
define('TEXT_INFO_FILENAME_GOOD','&nbsp;Fichier valide');
?>