<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 */

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
define('TABLE_TEXT_FILENAME', 'Nom de Fichier :');
define('TABLE_TEXT_MAX_DAYS', 'Jours avant expiration :');
define('TABLE_TEXT_MAX_COUNT', 'Nombre maximum de téléchargements :');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Cette option est liée à des produits et des valeurs - La supprimer présente des risques.<br />NOTE: Aucun fichier téléchargable associé à cette valeur d\'option ne sera supprimé du serveur.</span>');
define('TEXT_OK_TO_DELETE', 'Cette option n\'est liée à aucun produit ou valeur - Vous pouvez la supprimer sans risque.');
define('TEXT_OPTION_ID', 'ID d\'option');
define('TEXT_OPTION_NAME', 'Nom d\'option');
define('TABLE_HEADING_OPT_DISCOUNTED','Avec remise');

define('ATTRIBUTE_WARNING_DUPLICATE','Attribut dupliqué - L\'attribut n\'a pas été ajouté'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Un attribut dupliqué existe - Attribut non modifié'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','L\'option d\'attribut et la valeur d\'option NE correspondent PAS - L\'attribut n\'a pas été ajouté'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','L\'option d\'attribut et la valeur d\'option ne correspondent pas - L\'attribut n\'a pas été modifié'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Nom d\'option possiblement dupliqué ajoutée'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Valeur d\'option possiblement dupliquée ajoutéee'); // Options Value Duplicate warning

  define('PRODUCTS_ATTRIBUTES_EDITING','EDITION'); // title
  define('PRODUCTS_ATTRIBUTES_DELETE','EFFACEMENT'); // title
  define('PRODUCTS_ATTRIBUTES_ADDING','AJOUT DE NOUVEAUX ATTRIBUTS'); // title
  define('TEXT_DOWNLOADS_DISABLED','NOTE: Les téléchargements sont désactivés');

  define('TABLE_TEXT_MAX_DAYS_SHORT', 'Jours :');
  define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max :');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Classement');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Classement par défaut');
  define('TEXT_SORT',' Classement: ');

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
  define('TEXT_OPTION_VALUE_SIZE','Afficher la taille : ');
  define('TEXT_OPTION_VALUE_MAX','Longueur maximum : ');

  define('TEXT_ATTRIBUTES_IMAGE','Exemple d\'image des attributs :');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Répertoire pour l\'image des attributs :');

  define('TEXT_ATTRIBUTES_FLAGS','Drapeaux<br />de l\'attribut :');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Utilisé pour<br />affichage seulement :');
  define('TEXT_ATTRIBUTES_IS_FREE', 'L\'attribut est gratuit<br />lorsque le produit est gratuit :');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Attribut par défaut<br />a marquer comme sélectionné :');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Appliquer les mêmes remises<br />utilisées sur le produit :');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Inclure dans le prix de base<br />lorsque le prix est fixé par attributs');

  define('TEXT_PRODUCT_OPTIONS_INFO','Éditez le nom d\'option de produit pour des paramètres supplémentaires');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copier vers TOUS les produits ayant le nom et la valeur d\'option ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Sélectionnez un nom et une valeur d\'option que vous souhaitez copier vers des produits ayant une valeur et un nom d\'option existants distincts');
  define('TEXT_SELECT_OPTION_FROM', 'Nom d\'option existant :');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Valeur d\'option existante :');
  define('TEXT_SELECT_OPTION_TO', 'Nom d\'option à ajouter :');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Valeur d\'option à ajouter :');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Laissez vide pour TOUS les produits ou<br />entrez une ID de catégorie pour les produits à actualiser');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copier un nom et une valeur d\'option vers les produits ayant le nom d\'option ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Sélectionnez un nom et une valeur d\'option que vous souhaitez ajouter à tous les produits ou à tous les produits d\'une catégorie déterminée ayant un nom d\'option existant distinct.
                                                   <br /><strong>Exemple :</strong> Ajouter le nom d\'option : Couleur, la valeur d\'option : Rouge à tous les produits possédant le nom d\'option : Taille
                                                   <br /><strong>Exemple :</strong> Ajouter le nom d\'option : Couleur, la valeur d\'option : Vert avec les valeurs par défaut depuis le produit ID : 34 vers tous les produits possédant le nom d\'option : Taille
                                                   <br /><strong>Exemple :</strong> Ajouter le nom d\'option : Couleur, la valeur d\'option : Vert avec les valeurs par défaut depuis le produit ID : 34 vers tous les produits possédant le nom d\'option : Taille pour la catégorie ID : 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Ajouter ce nom d\'option à :');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Nom d\'option à ajouter :');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Valeur d\'option à ajouter :');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Mettre les nouvelles valeurs par défaut de l\'attribut depuis le produit ID# ou laisser vide pour ne prendre aucune valeur par défaut :');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Comment les attributs existants de produit doivent-ils être traités ?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Supprimer</strong> d\'abord, puis copier les nouveaux attributs');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Mettre à jour</strong> les attributs existants avec les nouveaux paramètres/prix');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> les attributs existants et ajouter uniquement les nouveaux attributs');

  define('TEXT_INFO_FROM', ' de : ');
  define('TEXT_INFO_TO', ' vers : ');
  define('ERROR_OPTION_VALUES_COPIED', 'Erreur : Duplication de nom et de valeur d\'option');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Erreur : Mauvaise corespondance du nom et de la valeur d\'option choisis');
  define('ERROR_OPTION_VALUES_NONE', 'Erreur : Rien trouvé pour la copie');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Copie réussie ! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Erreur : Nom/Valeur d\'option manquant(e) pour les produits ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Effacer l\'attribut correspondant sur TOUS les produits ayant le nom et la valeur d\'option ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Sélectionnez un nom et une valeur d\'option existants que vous souhaitez supprimer de TOUS les produits, ou de TOUS les produits d\'une catégorie');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nom d\'option à faire correspondre :');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Valeur d\'option à faire correspondre :');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Erreur : Le nom et la valeur de cette option ne correspondent pas');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Succès : Suppression de : ');