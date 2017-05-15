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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', 'Noms des Options');
define('HEADING_TITLE_VAL', 'Valeurs des Options');
define('HEADING_TITLE_ATRIB', 'Attributs des Produits');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nom du Produit');
define('TABLE_HEADING_OPT_NAME', 'Nom d\'Option');
define('TABLE_HEADING_OPT_VALUE', 'Valeur d\'Option');
define('TABLE_HEADING_OPT_PRICE', 'Prix');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Préfixe');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_DOWNLOAD', 'Produits téléchargable :');
define('TABLE_TEXT_FILENAME', 'Nome de Fichier :');
define('TABLE_TEXT_MAX_DAYS', 'Jours avant expiration :');
define('TABLE_TEXT_MAX_COUNT', 'Nombre maximum de downloads :');

define('TEXT_WARNING_OF_DELETE', 'Cette option est liée à des produits et des valeurs - La supprimer présente des risques.');
define('TEXT_OK_TO_DELETE', 'Cette option n\'est liée à aucun produit ou valeur - Vous pouvez la supprimer sans risque.<br />Avertissement : Toutes les valeurs d\'option seront supprimées pour ce nom d\'option.');
define('TEXT_OPTION_ID', 'Par ID d\'option ');
define('TEXT_OPTION_NAME', 'Par nom d\'option ');
define('TABLE_HEADING_OPT_DISCOUNTED','Avec remise');

define('ATTRIBUTE_WARNING_DUPLICATE','Attribut dupliqué - L\'attribut n\'a pas été ajouté'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Un attribut dupliqué existe - Attribut non modifié'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','L\'option d\'attribut et la valeur d\'option ne correspondent pas - L\'attribut n\'a pas été ajouté'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','L\'option d\'attribut et la valeur d\'option ne correspondent pas - L\'attribut n\'a pas été  modifié'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Nom d\'option possiblement dupliqué ajoutée'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Valeur d\'option possiblement dupliquée ajoutéee'); // Options Value Duplicate warning

  define('PRODUCTS_ATTRIBUTES_EDITING','ÉDITION'); // title
  define('PRODUCTS_ATTRIBUTES_DELETE','EFFACEMENT'); // title
  define('PRODUCTS_ATTRIBUTES_ADDING','AJOUT DE NOUVEAUX ATTRIBUTS'); // title
  define('TEXT_DOWNLOADS_DISABLED','NOTE: Les téléchargement sont désactivés');

  define('TABLE_TEXT_MAX_DAYS_SHORT', 'Jours :');
  define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max :');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Classement');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Classement par défaut');
  define('TEXT_SORT',' Classement : ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Préfixe');
  define('TABLE_HEADING_OPT_WEIGHT','Poids');
  define('TABLE_HEADING_OPT_SORT_ORDER','Classement');
  define('TABLE_HEADING_OPT_DEFAULT','Défaut');

  define('TABLE_HEADING_YES','Oui');
  define('TABLE_HEADING_NO','Non');

  define('TABLE_HEADING_OPT_TYPE', 'Type d\'option'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Taille');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rangées');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commentaires');

  define('TEXT_OPTION_VALUE_COMMENTS','Commentaires : ');
  define('TEXT_OPTION_VALUE_ROWS', 'Rangées : ');
  define('TEXT_OPTION_VALUE_SIZE','Afficher la taille : ');
  define('TEXT_OPTION_VALUE_MAX','Longueur maximum : ');

  define('TEXT_ATTRIBUTES_IMAGE','Exemple d\'image des attributs :');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Répertoire pour l\'image des attributs :');

  define('TEXT_ATTRIBUTES_FLAGS','Drapeaux<br />de l\'attribut :');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Utilisé pour<br />affichage seulement :');
  define('TEXT_ATTRIBUTES_IS_FREE', 'L\'attribut est gratuit<br />lorsque le produit est gratuit :');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Attribut par défaut<br />marqué comme sélectionné :');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Appliquer les mêmes remises<br />utilisées sur le produit :');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Inclure dans le prix de base<br />lorsque le prix est fixé par attributs');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>NOTE: Éditez le nom d\'option de produit pour les paramètres supplémentaires</strong>');

// updates
  define('ERROR_PRODUCTS_OPTIONS_VALUES', 'ATTENTION: Aucun produit trouvé ... Aucune actualisation');

  define('TEXT_SELECT_PRODUCT', 'Choisissez un produit');
  define('TEXT_SELECT_CATEGORY', 'Choisissez une catégorie');
  define('TEXT_SELECT_OPTION', 'Choisissez un nom d\'option');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Ajouter à TOUS les produits TOUTES les valeurs d\'options pour un nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Actualiser TOUS les produits existants qui possèdent au moins UNE valeur d\'option et ajouter TOUTES les valeurs d\'options dans un nom d\'option');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Mise à jour des options réussie ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Ajouter à UN produit TOUTES les valeurs d\'options pour un nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Actualiser UN produit qui possède au moins UNE valeur d\'option et ajouter TOUTES les valeurs d\'options dans un nom d\'option');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Ajouter à UNE catégorie de produits TOUTES les valeurs d\'options pour un nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Actualiser UNE catégorie de produits, lorsque le produit possède au moins UNE valeur d\'option et ajouter TOUTES les valeurs d\'options dans un nom d\'option');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTE:</strong> Le classement attribué sera le classement par défaut des valeurs d\'option pour ces produits ');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Effacer sur TOUS les produits TOUTES les valeurs d\'options pour un nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Actualiser TOUS les produits existants qui possèdent au moins UNE valeur d\'option et supprimer TOUTES les valeurs d\'options dans un nom d\'option');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Effacer sur UN produit TOUTES les valeurs d\'options pour un nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Actualiser UN produit qui possède au moins UNE valeur d\'option et supprimer TOUTES les valeurs d\'options dans un nom d\'option');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Effacer sur UNE catégorie de produits TOUTES les valeurs d\'options pour un nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Actualiser UNE catégorie de produits, lorsque le produit possède au moins UNE valeur d\'option et supprimer TOUTES les valeurs d\'options dans un nom d\'option');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTE:</strong> Toutes les valeurs d\'options de nom d\'option seront effacées pour le(s) produit(s) sélectionné(s). Cette opération n\'effacera pas les définitions des valeurs d\'options.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copier TOUTES les valeurs d\'options vers un autre nom d\'option</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Toutes les valeurs d\'option seront copiées depuis un nom d\'option vers un autre nom d\'option');
define('TEXT_SELECT_OPTION_FROM', 'Copier à partir du nom d\'option : ');
define('TEXT_SELECT_OPTION_TO', 'Copier toutes ses valeurs d\'options vers le nom d\'option : ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Copie réussie ! ');
define('ERROR_OPTION_VALUES_COPIED', 'Erreur - Impossible de copier les valeurs d\'option vers le même nom d\'option ! ');
define('ERROR_OPTION_VALUES_NONE', 'Erreur - Copie depuis un nom d\'option qui a 0 valeur définie. Rien n\'a été copié ! ');
define('TEXT_WARNING_BACKUP', 'Avertissement : Sauvegardez toujours convenablement votre base de données avant d\'exécuter des manipulations globales');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Images d\'attributs par rangée : ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Styles d\'attributs pour les boutons radio et cases à cocher : ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>NOTE : Taille et longueur Max de l\'affichage et rangées, seulement pour les attributs texte :</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Styles d\'image :</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 = Les images sous les noms d\'option');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 = Élément, image et valeur d\'option');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 = Élément, image et nom d\'option en-dessous');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 = Nom d\'option sous l\'élément et image');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 = Élément sous l\'image et nom d\'option');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 = Élément au-dessus de l\'image et nom d\'option');
?>