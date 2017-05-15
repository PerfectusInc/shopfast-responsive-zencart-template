<?php
/**
 * @package admin
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Tue Jan 22 03:36:04 2013 -0500 Modified in v1.5.2 $
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
define('TEXT_PRODUCTS_PRICE_INFO', 'Prix :');
define('TEXT_PRODUCTS_TAX_CLASS', 'Classe de taxes :');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Note moyenne :');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Quantité :');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_DATE_AVAILABLE', 'Date de disponibilité :');
define('TEXT_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE INEXISTANTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Veuillez insérer une nouvelle catégorie ou produit à ce niveau.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Pour en savoir plus, veuillez consulter cette <a href="http://%s" target="blank">page web</a> du produit.');
define('TEXT_PRODUCT_DATE_ADDED', 'Ce produit a été ajouté à notre catalogue le %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Ce produit sera en stock le %s.');

define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires');
define('TEXT_EDIT_CATEGORIES_ID', 'ID de catégorie :');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nom de la catégorie :');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Image de la catégorie :');
define('TEXT_EDIT_SORT_ORDER', 'Classement :');

define('TEXT_INFO_COPY_TO_INTRO', 'Veuillez choisir une nouvelle catégorie vers laquelle vous souhaitez copier ce produit');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Catégories actuelles : ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nouvelle catégorie');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Éditer la catégorie');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Supprimer la catégorie');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Déplacer la catégorie');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Supprimer le produit');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Déplacer le produit');
define('TEXT_INFO_HEADING_COPY_TO', 'Copier vers');

define('TEXT_DELETE_CATEGORY_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette catégorie ?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Attention :</strong> Les produits liés dont les ID de catégorie maître sont supprimés n\'afficheront pas correctement le prix . Lorsque vous supprimez une catégorie contenant des produits liés, vous devez vous assurer d\'abord que vous avez réinitialisé l\'ID de catégorie maître du(des) produit(s) à une autre catégorie avant d\'effacer la catégorie');
define('TEXT_DELETE_PRODUCT_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce produit de façon permanente ?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ATTENTION :</b> Il y a %s (sous-)catégorie(s) encore associée(s) à cette catégorie !');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATTENTION :</b> Il y a %s produit(s) encore associé(s) à cette catégorie !');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Veuillez sélectionner dans quelle catégorie vous souhaitez que <b>%s</b> réside');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Veuillez sélectionner dans quelle catégorie vous souhaitez que <b>%s</b> réside');
define('TEXT_MOVE', 'Déplacer <b>%s</b> vers :');

define('TEXT_NEW_CATEGORY_INTRO', 'Veuillez renseigner les informations suivantes pour la nouvelle catégorie');
define('TEXT_CATEGORIES_NAME', 'Nom de catégorie :');
define('TEXT_CATEGORIES_IMAGE', 'Image de catégorie :');
define('TEXT_SORT_ORDER', 'Classement :');

define('TEXT_PRODUCTS_STATUS', 'Statut des Produits :');
define('TEXT_PRODUCTS_VIRTUAL', 'Produit est Virtuel :');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Livraison toujours gratuite :');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Afficher la boîte quantité du produit :');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Date de disponibilité :');
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Épuisé');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Oui, sauter l\'adresse de livraison');

define('TEXT_PRODUCT_NOT_VIRTUAL', 'Non, adresse de livraison requise');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Oui, livraison toujours gratuite');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Non, règles normales de livraison');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Oui, afficher la boîte quantité');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Non, ne pas afficher la boîte quantité');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricant des Produits :');
define('TEXT_PRODUCTS_NAME', 'Nom des Produits :');
define('TEXT_PRODUCTS_DESCRIPTION', 'Description des Produits :');
define('TEXT_PRODUCTS_QUANTITY', 'Quantité des Produits :');
define('TEXT_PRODUCTS_MODEL', 'Modèle des Produits :');
define('TEXT_PRODUCTS_IMAGE', 'Image des Produits :');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Télécharger vers le répertoire :');
define('TEXT_PRODUCTS_URL', 'URL des produits :');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sans http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Prix des produits (HT) :');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Prix des produits (TTC) :');
define('TEXT_PRODUCTS_WEIGHT', 'Poids du Transport des produits :');

define('EMPTY_CATEGORY', 'Catégorie vide');

define('TEXT_HOW_TO_COPY', 'Méthode de copie :');
define('TEXT_COPY_AS_LINK', 'Lier le produit');
define('TEXT_COPY_AS_DUPLICATE', 'Dupliquer le produit');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Restreindre au type de produit');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Cette catégorie a été restreinte à ces types de produit');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','Le type de produit désigné ne peut être ajouté à cette catégorie. Vérifiez vos restrictictions sur cette catégorie.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Utilisé seulement pour les produits dupliqués ...');
  define('TEXT_COPY_ATTRIBUTES','Copier les attributs du produit pour les dupliquer ?');
  define('TEXT_COPY_ATTRIBUTES_YES','Oui');
  define('TEXT_COPY_ATTRIBUTES_NO','Non');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Produit actuel : ');
  define('TABLE_HEADING_MODEL', 'Modèle');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Changements d\'attributs pour les produits ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Supprimer <strong>TOUS</strong> les attributs de produit pour :<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copier les attributs vers un autre produit ou vers une catégorie entière à partir de :<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copier les attributs vers un autre <strong>produit</strong> à partir de :<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copier les attributs vers une autre <strong>catégorie</strong> à partir de :<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Comment les attributs existants du produit doivent-ils être traités ?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Supprimer</strong> d\'abord, puis copier les nouveaux attributs');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Actualiser</strong> avec les nouveaux paramètres/prix, puis ajouter les nouveaux');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> et ajouter seulement les nouveaux attributs');

  define('SUCCESS_ATTRIBUTES_DELETED','Attributs supprimés avec succès');
  define('SUCCESS_ATTRIBUTES_UPDATE','Attributs actualisés avec succès');

  define('ICON_ATTRIBUTES','Caractéristiques d\'attributs');

  define('TEXT_CATEGORIES_IMAGE_DIR','Télécharger vers le répertoire :');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Ou, choisissez une image existante sur le serveur, nom du fichier :</strong>');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Attention : Boîte des quantités non affichée, qté positionnée à 1 par défaut');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Attention : Boîte des quantités non affichée, qté positionnée à 1 par défaut');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Veuillez choisir :</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Caractéristiques d\'attribut pour :');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Téléchargement vers serveur : ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Prix du produit fixé par attributs :');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Oui');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Non');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Le prix affiché incluera le prix le plus bas dans chaque groupe d\'attributs plus le prix');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Le prix affiché incluera le prix le plus bas dans chaque groupe d\'attributs plus le prix');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Qté minimum du produit :');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Qté d\'unités du produit :');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Qté maximum du produit :');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = illimité, 1 = pas de boîte qté ou Max ##');

  define('TEXT_PRODUCTS_MIXED','Mixer qté Min/Unités du produit :');

  define('TEXT_PRODUCT_IS_FREE','Le produit est gratuit :');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Le produit est marqué GRATUIT');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Le produit est marqué GRATUIT');

  define('TEXT_PRODUCT_IS_CALL','Le produit est en "prix sur demande" :');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Le produit est marqué PRIX SUR DEMANDE');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Le produit est marqué PRIX SUR DEMANDE');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Sauter un nouvel attribut </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Insérer un nouvel attribut à partir de </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Actualiser à partir de l\'attribut </strong>');

  define('TEXT_SHIPPING_INFO',
  'Les <strong>Produits Virtuels</strong> n\'ont pas de frais de livraison et ne nécessitent pas d\'adresse de livraison tels que les Services, ' . TEXT_GV_NAMES . ', etc.<br />' .
  'Les <strong>Livraisons Toujours Gratuites</strong> n\'ont pas de frais de livraison, mais nécessitent une adresse de livraison<br />' .
  'Les <strong>Téléchargements</strong> sont considérés comme des produits virtuels - Aucune option n\'a besoin d\'être marquée<br />'
  );

  define('TEXT_ANY_TYPE', 'Type quelconque');
  define('TABLE_HEADING_PRODUCT_TYPES', 'Type(s) de produit');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Changer le statut de catégorie pour :');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Changer le statut de catégorie en : ');
define('TEXT_CATEGORIES_STATUS_OFF', 'ARRET');
define('TEXT_CATEGORIES_STATUS_ON', 'MARCHE');
define('TEXT_PRODUCTS_STATUS_INFO', 'Changer TOUS les statuts de produit en : ');
define('TEXT_PRODUCTS_STATUS_OFF', 'ARRET');
define('TEXT_PRODUCTS_STATUS_ON', 'MARCHE');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Inchangé');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>ATTENTION ...</strong><br />Note: Désactiver une catégorie va désactiver tous les produits dans cette catégorie. Les produits liés situés dans cette catégorie qui sont partagés avec d\'autres catégories seront aussi désactivés.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' de ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' actif ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Description de catégorie :');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Définitions des balises Meta des catégories');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Définir des balises Meta personnalisées');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'Titre :');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Mots-clés :');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Description :');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'ATTENTION: Vous avez des produits dans la catégorie racine. Cela entraînera un mauvais fonctionnement des prix dans le catalogue. Produits trouvés : ');