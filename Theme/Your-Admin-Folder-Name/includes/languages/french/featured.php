<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Produits Phares');

define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_PRODUCTS_MODEL','Modèle');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produits Prix/Promotion/Solde');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Pourcentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Expire');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_FEATURED_PRODUCT', 'Produit :');
define('TEXT_FEATURED_EXPIRES_DATE', 'Date d\'expiration :');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Date de disponibilité :');

define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_NEW_PRICE', 'Nouveau prix :');
define('TEXT_INFO_ORIGINAL_PRICE', 'Prix d\'origine :');
define('TEXT_INFO_PERCENTAGE', 'Pourcentage :');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible le :');
define('TEXT_INFO_EXPIRES_DATE', 'Expire le :');
define('TEXT_INFO_STATUS_CHANGE', 'Changement de statut :');
define('TEXT_IMAGE_NONEXISTENT', 'Aucune image existante');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Supprimer le produit phare');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce produit phare ?');

define('SUCCESS_FEATURED_PRE_ADD', 'Réussi : Pré-ajout du produit phare ... Veuillez mettre à jour les dates ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Attention : Aucun ID# de produit indiqué ... Rien n\'a été ajouté ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Attention : ID# de produit déjà en vedette ... Rien n\'a été ajouté ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'ATTENTION: ID# de produit invalide ... Rien n\'a été ajouté ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Ajouter manuellement un nouveau produit phare avec l\'ID# du produit');
define('TEXT_INFO_PRE_ADD_INTRO', 'Sur de grandes bases de données, vous pouvez Ajouter Manuellement un produit phare avec l\'ID# du produit<br /><br />C\'est le meilleur moyen de le faire lorsque la page prend trop de temps à se charger et que la sélection d\'un produit dans le menu déroulant devient difficile à cause du trop grand nombre de produits.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Veuillez saisir l\'ID# du produit à pré-ajouter : ');
define('TEXT_INFO_MANUAL', 'ID# de produit à ajouter manuellement comme produit phare');
?>