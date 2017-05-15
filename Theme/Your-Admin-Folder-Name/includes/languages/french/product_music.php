<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_music.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE', 'Catégories / Produits');
define('HEADING_TITLE_GOTO', 'Aller à :');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Catégories / Produits');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Classement');

define('TABLE_HEADING_PRICE','Prix/Promotion/Solde');
define('TABLE_HEADING_QUANTITY','Quantité');

define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_STATUS', 'Statut');

define('TEXT_CATEGORIES', 'Catégories :');
define('TEXT_SUBCATEGORIES', 'Sous-catégories :');
define('TEXT_PRODUCTS', 'Produits :');
define('TEXT_PRODUCTS_RECORD_ARTIST', 'Artiste :');
define('TEXT_PRODUCTS_RECORD_COMPANY', 'Maison de disques :');
define('TEXT_PRODUCTS_MUSIC_GENRE', 'Genre de musique :');
define('TEXT_PRODUCTS_PRICE_INFO', 'Prix :');
define('TEXT_PRODUCTS_TAX_CLASS', 'Classe de taxes :');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Évaluation moyenne :');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Quantité :');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_DATE_AVAILABLE', 'Date de disponibilité :');
define('TEXT_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE INEXISTANTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Veuillez insérer une nouvelle catégorie ou un produit à ce niveau.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Pour en savoir plus, veuillez consulter cette <a href="http://%s" target="blank">page web</a> du produit.');
define('TEXT_PRODUCT_DATE_ADDED', 'Ce produit a été ajouté à notre catalogue le %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Ce produit sera en stock le %s.');

define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires');
define('TEXT_EDIT_CATEGORIES_ID', 'ID de la catégorie :');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nom de la catégorie :');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Image de la catégorie :');
define('TEXT_EDIT_SORT_ORDER', 'Classement :');

define('TEXT_INFO_COPY_TO_INTRO', 'Veuillez choisir une nouvelle catégorie vers laquelle vous souhaitez copier ce produit');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Catégories en cours : ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nouvelle Catégorie');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Éditer Catégorie');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Supprimer Catégorie');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Déplacer Catégorie');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Effacer Produit');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Déplacer Produit');
define('TEXT_INFO_HEADING_COPY_TO', 'Copier vers');

define('TEXT_DELETE_CATEGORY_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette catégorie ?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce produit de façon permanente ?<br /><br /><strong>ATTENTION:</strong> Sur les produits liés<br />1 Assurez-vous que la catégorie maître a été changée si vous supprimez le produit depuis la catégorie maître<br />2 Cochez la case de la catégorie du produit à supprimer');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Attention :</b> Il y a %s (sous-)catégorie(s) encore associée(s) à cette catégorie !');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Attention :</b> Il y a %s produit(s) encore associé(s) à cette catégorie !');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Veuillez sélectionner dans quelle catégorie vous souhaitez que <b>%s</b> réside');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Veuillez sélectionner dans quelle catégorie vous souhaitez que <b>%s</b> réside');
define('TEXT_MOVE', 'Déplacer <b>%s</b> vers:');

define('TEXT_NEW_CATEGORY_INTRO', 'Veuillez renseigner les informations concernant la nouvelle catégorie');
define('TEXT_CATEGORIES_NAME', 'Nom de la catégorie :');
define('TEXT_CATEGORIES_IMAGE', 'Image de la catégorie :');
define('TEXT_SORT_ORDER', 'Classement :');

define('TEXT_PRODUCTS_STATUS', 'Statut :');
define('TEXT_PRODUCTS_VIRTUAL', 'Le produit est virtuel :');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Livraison toujours gratuite :');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Afficher la boîte quantité du produit :');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Date de disponibilité :');
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Épuisé');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Oui, sauter l\'adresse de livraison');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Non, l\'adresse de livraison est requise');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Oui, livraison toujours gratuite');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Non, règles de livraisons habituelles');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Spécial, la combinaison produit/téléchargement exige une adresse de livraison');
define('TEXT_PRODUCTS_SORT_ORDER', 'Classement :');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Oui, afficher la boîte quantité');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Non, ne pas afficher la boîte quantité');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricant :');
define('TEXT_PRODUCTS_NAME', 'Nom :');
define('TEXT_PRODUCTS_DESCRIPTION', 'Description :');
define('TEXT_PRODUCTS_QUANTITY', 'Quantité :');
define('TEXT_PRODUCTS_MODEL', 'Modèles :');
define('TEXT_PRODUCTS_IMAGE', 'Image :');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Uploader vers le répertoire :');
define('TEXT_PRODUCTS_URL', 'URL du produit :');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sans http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Prix (HT) des Produits :');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Prix (TTC) des Produits :');
define('TEXT_PRODUCTS_WEIGHT', 'Poids d\'expédition des Produits :');

define('EMPTY_CATEGORY', 'Catégorie vide');

define('TEXT_HOW_TO_COPY', 'Méthode de copie :');
define('TEXT_COPY_AS_LINK', 'Lier le produit');
define('TEXT_COPY_AS_DUPLICATE', 'Dupliquer le produit');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Utilisé seulement pour les produits dupliqués ...');
  define('TEXT_COPY_ATTRIBUTES','Copier les attributs de produits vers le dupliqué ?');
  define('TEXT_COPY_ATTRIBUTES_YES','Oui');
  define('TEXT_COPY_ATTRIBUTES_NO','Non');
  define('TEXT_COPY_MEDIA_MANAGER','Copier toutes les collections de média associées à ce produit.');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Produit actuel : ');
  define('TABLE_HEADING_MODEL', 'Modèle');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Changements d\'attributs pour les produits ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Supprimer <strong>TOUS</strong> les attributs de produit pour :<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copier les attributs vers un autre produit ou vers une catégorie entière :<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copier les attributs vers un autre <strong>produit</strong> à partir de :<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copier les attributs vers une autre <strong>catégorie</strong> à partir de :<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Comment les attributs existants du produit doivent-ils être manipulés ?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Supprimer</strong> d\'abord, puis copier les nouveaux attributs');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Actualiser</strong> avec les nouveaux paramètres/prix, puis ajouter les nouveaux');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> et ajouter seulement les nouveaux attributs');

  define('SUCCESS_ATTRIBUTES_DELETED','Attributs supprimés avec succès');
  define('SUCCESS_ATTRIBUTES_UPDATE','Attributs actualisés avec succès');

  define('ICON_ATTRIBUTES','Caractéristiques d\'attribut');

  define('TEXT_CATEGORIES_IMAGE_DIR','Télécharger vers le répertoire:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Attention : Boîte des quantités non affichée, la qté passe à 1 par défaut');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Attention : Boîte des quantités non affichée, la qté passe à 1 par défaut');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Veuillez sélectionner :</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Caractéristiques d\'attribut pour :');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Téléchargements : ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produits mis à prix par attributs :');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Oui');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Non');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Le prix affiché incluera le prix le plus bas dans chaque groupe d\'attributs plus le prix');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Le prix affiché incluera le prix le plus bas dans chaque groupe d\'attributs plus le prix');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Qté minimum du produit :');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Qté d\'unités du produit :');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Qté maximum du produit :');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = illimité, 1 = pas de boîte qté');

  define('TEXT_PRODUCTS_MIXED','Mixer qté min/unités du produit :');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produit gratuit');
  define('TEXT_PRODUCT_IS_FREE','Le produit est gratuit :');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Le produit est marqué GRATUIT');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Le produit est marqué GRATUIT');

  define('TEXT_PRODUCT_IS_CALL','Le produit est en "prix sur demande" :');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Le produit est marqué PRIX SUR DEMANDE');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Le produit est marqué PRIX SUR DEMANDE');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Sauter un nouvel attribut </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Insérer un nouvel attribut depuis </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Actualiser depuis l\'attribut </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Indiquer ce que l\'intitulé de la balise Meta du produit doit inclure :</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Nom du produit :</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Intitulé :</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Modèle :</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Prix :</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Intitulé/Slogan :</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Balise Meta du Titre :</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Balise Meta des Mots-clés :</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Balise Meta de la Description :</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">EXCLU</span>');