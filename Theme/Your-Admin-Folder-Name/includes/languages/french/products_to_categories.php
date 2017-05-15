<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','Gestionnaire des liens produits à catégories multiples ...');
define('HEADING_TITLE2','Catégories / Produits');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Catégories avec produits disponibles pour un lien ...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID du Produit');
define('TABLE_HEADING_PRODUCT', 'Nom du produit');
define('TABLE_HEADING_MODEL', 'Modèle');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'EDITER LES INFORMATIONS PRODUIT A CATEGORIES');
define('TEXT_PRODUCTS_ID', 'Produit ID# ');
define('TEXT_PRODUCTS_NAME', 'Produit : ');
define('TEXT_PRODUCTS_MODEL', 'Modèle : ');
define('TEXT_PRODUCTS_PRICE', 'Prix : ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Actualisation les liens de catégorie');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Sélectionnez un produit à lier');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Définir des liens produit à catégories pour : ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Nombre de catégories liées actuel : ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'L\'outil lieur produits à catégories est conçu pour lier rapidement le produit courant à une ou plusieurs catégories.<br />Vous pouvez aussi lier tous les produits d\'une catégorie à une autre ou enlever d\'une catégorie des produits liés qui sont dans une autre catégorie (voir ci-dessous pour des instructions supplémentaires).');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Pour la gestion des prix, chaque produit a besoin d\'une catégorie maître, quel que soit le nombre de catégories auquel il peut être rattaché. Elle est définie par la liste déroulante de catégorie maître.<br />
Le produit est actuellement lié à la(aux) catégorie(s) qui est(sont) cochée(s) ci-dessus.<br />Pour ajouter de nouvelles catégories, cochez simplement la case à côté du nom de la catégorie.<br />Pour supprimer des catégories liées existantes, décochez la case à côté du nom de la catégorie.<br />
Lorsque vous avez coché toutes les catégories auxquelles vous souhaitez lier le produit, appuyez sur \'' . BUTTON_UPDATE_CATEGORY_LINKS . '\'<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Changements globaux de lien de catégorie et réinitialisation de l\'ID de catégorie maître');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>ATTENTION:</strong> Vous devez définir l\'ID de CATEGORIE MAITRE avant de changer les catégories liées');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copier TOUS les produits dans une catégorie comme produits LIÉS à une autre catégorie ...</strong><br />Exemple : Indiquer 8 et 22 lierait TOUS les produits de la catégorie 8 à la catégorie 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Sélectionner tous les produits dans la catégorie : ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Lier à la catégorie : ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copier les produits comme des produits liés ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'ATTENTION: Le produit a été réinitialisé et ne fait plus partie de cette catégorie ...');
define('WARNING_COPY_LINKED', 'ATTENTION : ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Liaison de produits à partir d\'une catégorie invalide : ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Liaison de produits vers une catégorie invalide : ');
define('WARNING_NO_CATEGORIES_ID', 'Attention : Aucune catégorie n\'a été choisie ... Aucun changement a été effectué');
define('SUCCESS_COPY_LINKED', 'Actualisation réussie des produits comme produits liés ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Liaison de produits à partir d\'une une catégorie valide : ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Liaison de produits vers une catégorie valide : ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'ATTENTION: Copie effectuée vers une catégorie invalide à lier : ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>ATTENTION: Aucun changement effectué, produits déjà liés ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Supprimer TOUS les produits d\'une catégorie qui sont des produits LIÉS à une autre catégorie ...</strong><br />Exemple: Indiquer 8 et 22 délierait  de la catégorie 22 TOUS les produits de la catégorie 8');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Sélectionner tous les produits dans la catégorie : ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Supprimer les produits liés de la catégorie : ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Supprimer les produits liés ');

define('WARNING_REMOVE_LINKED', 'ATTENTION : ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Suppression de produits liés à partir d\'une catégorie invalide : ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Suppression de produits liés vers une catégorie invalide : ');
define('SUCCESS_REMOVE_LINKED', 'Les produits liés ont été supprimés avec succès ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Suppression de produits liés à partir d\'une catégorie valide : ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Suppression de produits liés vers une catégorie valide : ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>ATTENTION : Aucun changement effectué, aucun produit lié ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ATTENTION : ID DE CATEGORIE MAITRE EN CONFLIT !!</strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>L\'ID de catégorie maître est : </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'NOTE: La catégorie maître est utilisée pour des considérations de prix lorsque la catégorie du produit affecte le prix sur les produits liés, exemple : Soldes<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Pour solutionner ce problème, vous avez été redirigé(e) vers le premier produit du conflit. Ré-assignez l\'ID de catégorie maître afin qu\'il ne soit plus l\'ID de catégorie maître du produit pour la catégorie depuis laquelle vous essayez de le supprimer, et recommencez. Lorsque tous les conflits ont été corrigés, vous pourrez alors terminer la suppression que vous souhaitez réaliser.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflit à partir de la catégorie : ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflit vers catégorie : ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Actualisation réussie des liens de produit à catégories ...');
define('WARNING_MASTER_CATEGORIES_ID', 'ATTENTION : Aucune catégorie maître définie !');

define('TEXT_PRODUCTS_ID_INVALID', 'ATTENTION: ID DE PRODUIT INVALIDE OU AUCUN PRODUIT SÉLECTIONNÉ');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Note: Un ID de produit n\'a pas besoin d\'être défini pour utiliser la fonction Lier tous les produits d\'une catégorie à une autre catégorie.<br />Cependant, le fait de définir un ID Produits valide affichera les catégories disponibles et leurs ID respectifs.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Réinitialiser TOUS les produits de la catégorie sélectionnée pour utiliser la catégorie sélectionnée comme nouvel ID de catégorie maître ...</strong><br />Exemple : Réinitialiser la catégorie 22 va positionner sur 22 l\'ID de catégorie maître de TOUS les produits de la catégorie 22');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Réinitialiser l\'ID de catégorie maître pour tous les produits dans la catégorie : ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Réinitialiser l\'ID de catégorie maître');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'ATTENTION : Catégorie invalide sélectionnée ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Actualisation réussie de tous les produits vers le nouvel ID de catégorie maître pour la catégorie : ');