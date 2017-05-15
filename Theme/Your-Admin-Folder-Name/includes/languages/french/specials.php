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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Promotions');

define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_PRODUCTS_MODEL','Modèle');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produits Prix/Promotion/Solde');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Pourcentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Expire');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_SPECIALS_PRODUCT', 'Produit :');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Prix promotionnel :');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Date d\'expiration :');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Date de disponibilité :');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notes sur les promotions :</b><ul><li>Vous pouvez entrer un pourcentage à déduire dans le champ prix promotionnel, par exemple: <b>20%</b></li><li>Si vous entrez un nouveau prix, le séparateur des décimales doit être un point \'.\' (point-décimal), exemple: <b>49.99</b></li><li>Laissez le champ de la date d\'expiration vide si aucune date de fin n\'est nécessaire.</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_NEW_PRICE', 'Nouveau prix :');
define('TEXT_INFO_ORIGINAL_PRICE', 'Prix d\'origine :');
define('TEXT_INFO_DISPLAY_PRICE', 'Prix affiché :<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible le :');
define('TEXT_INFO_EXPIRES_DATE', 'Expire le :');
define('TEXT_INFO_STATUS_CHANGE', 'Changement de statut :');
define('TEXT_IMAGE_NONEXISTENT', 'Image inexistante');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Supprimer la promotion');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer la promotion ?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Succès : Pré-ajout de promotion ... Veuillez mettre à jour le prix et les dates ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Attention : Aucun ID de produit indiqué ... Rien n\'a été ajoutée ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Attention : ID de produit déjà en promotion ... Rien n\'a été ajouté ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Attention : ID de produit invalide ... Rien n\'a été ajouté ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Ajouter manuellement une nouvelle promotion à l\'aide de l\'ID du produit');
define('TEXT_INFO_PRE_ADD_INTRO', 'Sur de grandes bases de données, vous pouvez manuellement ajouter une promotion avec l\'ID du produit.<br /><br />C\'est la meilleure façon de faire lorsque le rendu de la page devient trop long et que la sélection d\'un produit dans la liste déroulante devient difficile à cause du grand nombre d\'éléments.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Veuillez entrer l\'ID du produit à pré-ajouter : ');
define('TEXT_INFO_MANUAL', 'ID de produit à ajouter manuellement aux promotions');
?>