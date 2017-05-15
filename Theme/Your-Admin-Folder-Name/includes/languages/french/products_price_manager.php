<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_price_manager.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Gestionnaire du prix des produits');
define('HEADING_TITLE_PRODUCT_SELECT','Veuillez choisir une catégorie pour afficher les informations de prix de ses produits ...');

define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_PRODUCTS_MODEL','Modèle');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produits Prix/Promotion/Solde');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Pourcentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Expire');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_PRODUCT_INFO', 'Infos produit :');
define('TEXT_PRODUCTS_PRICE_INFO', 'Infos prix produit :');
define('TEXT_PRODUCTS_MODEL','Modèle :');
define('TEXT_PRICE', 'Prix');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Date de disponibilité :');
define('TEXT_PRODUCTS_STATUS', 'Statut du produit :');
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Épuisé');

define('TEXT_PRODUCT_INFO_NONE', 'Veuillez sélectionner un produit au-dessus ...');
define('TEXT_PRODUCT_IS_FREE','Produit GRATUIT :');
define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Le produit est marqué GRATUIT');
define('TEXT_PRODUCT_IS_CALL','Prix sur demande :');
define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Le produit est marqué PRIX SUR DEMANDE');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Prix fixé par attributs :');
define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Oui');
define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Non');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Le prix affiché incluera le prix le plus bas dans chaque groupe d\'attributs plus le prix');
define('TEXT_PRODUCTS_MIXED','Mixer qté min/unités :');
define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'La remise par qté s\'applique aux attributs mixés');

define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Qté min :');
define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Qté d\'unités :');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Qté max :');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = illimité<br />1 = pas de boîte qté');

define('TEXT_FEATURED_PRODUCT_INFO', 'Infos du produit phare :');
define('TEXT_FEATURED_PRODUCT', 'Produit :');
define('TEXT_FEATURED_EXPIRES_DATE', 'Date d\'expiration :');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Date de disponibilité :');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Statut du produit phare :');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Actif');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Inactif');
define('TEXT_FEATURED_DISABLED', '<strong>NOTE: Les informations du produit phare sont actuellement désactivées, expirées ou pas encore activées</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Veuillez confirmer que vous voulez supprimer le statut de vedette associé à ce produit');

define('TEXT_SPECIALS_PRODUCT', 'Produit :');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Prix promotionnel :');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Date d\'expiration :');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Date de disponibilité :');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notes sur les promotions :</b><ul><li>Vous pouvez entrer un pourcentage à déduire dans le champ Prix promotionnel, par exemple : <b>20%</b></li><li>Si vous entrez un nouveau prix, le séparateur décimal doit être un point \'.\' (point-décimal), exemple : <b>49.99</b></li><li>Laissez le champ Date d\'expiration vide si pas d\'expiration.</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Infos promotion :');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Statut de la promotion :');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Actif');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Inactif');
define('TEXT_SPECIALS_NO_GIFTS','Pas de promotions sur les chèques cadeaux');
define('TEXT_SPECIAL_DISABLED', '<strong>NOTE : Les informations du produit en promotion sont actuellement désactivées, expirées ou pas encore activées</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Veuillez confirmer que vous voulez supprimer le statut de promotion associé à ce produit');

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
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous certain(e) de vouloir supprimer ce produit phare ?');

define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Définissez les paramètres d\'attribut et appuyez sur Insérer pour appliquer</strong>');
define('TEXT_PRICED_BY_ATTRIBUTES', 'Prix fixé par attributs');
define('TEXT_PRODUCTS_PRICE', 'Prix des produits : ');
define('TEXT_SPECIAL_PRICE', 'Prix promotionnel : ');
define('TEXT_SALE_PRICE', 'Prix soldé : ');
define('TEXT_FREE', 'GRATUIT');
define('TEXT_CALL_FOR_PRICE', 'Prix sur Demande');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Ajouter ' . DISCOUNT_QTY_ADD . ' remises par quantité à blanc :');
define('TEXT_BLANKS_INFO','Toutes les remises par quantité à 0 seront supprimées à la mise à jour');
define('TEXT_INFO_NO_DISCOUNTS', 'Aucune remise par quantité n\'a été définie');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Niveaux de remise');
define('TEXT_PRODUCTS_DISCOUNT','Remise');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Qté minimum ');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Valeur de la remise');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Type');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Prix calculé :');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Prix étendu :');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Prix<br />calculé : &nbsp; avec taxes :');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Prix<br />étendu : &nbsp; avec taxes :');

define('TEXT_EACH','chaque');
define('TEXT_EXTENDED','total');

define('TEXT_DISCOUNT_TYPE_INFO', 'Infos remise sur produit');
define('TEXT_DISCOUNT_TYPE','Type de remise :');
define('TEXT_DISCOUNT_TYPE_FROM', 'Prix avec remise fixé à partir de :');

define('DISCOUNT_TYPE_DROPDOWN_0','Aucun');
define('DISCOUNT_TYPE_DROPDOWN_1','Pourcentage');
define('DISCOUNT_TYPE_DROPDOWN_2','Prix actuel');
define('DISCOUNT_TYPE_DROPDOWN_3','Montant remisé');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Prix');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Promotion');

define('TEXT_UPDATE_COMMIT','Valider et enregistrer tous les changements faits à l\'écran');

define('TEXT_PRODUCTS_TAX_CLASS', 'Classe de taxes :');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Attention :</strong> L\'ID# de catégorie maître du produit %s ne correspond pas à l\'ID# de la catégorie en cours %s et le produit n\'est pas lié !');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', 'L\'ID# de la catégorie actuelle %s correspond à l\'ID# de la catégorie maître %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Actualiser l\'ID# de catégorie maître %s pour qu\'il corresponde à l\'ID# de la catégorie actuelle %s');

define('PRODUCT_WARNING_UPDATE', 'Veuillez effectuer les modifications et appuyer sur Sauvegarder pour enregistrer');
define('PRODUCT_UPDATE_SUCCESS', 'Mise à jour avec succès des modifications du produit !');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Les modifications ont été annulés et n\'ont pas été enregistrées ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Cliquez pour lancer l\'édition ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Prévisualisation uniquement ... État du prix en cours ... Prévisualisation uniquement');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Editez les informations du produit puis Actualisez pour enregistrer</strong>');