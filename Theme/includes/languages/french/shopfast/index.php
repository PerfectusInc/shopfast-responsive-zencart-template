<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 19537 2011-09-20 17:14:44Z drbyte $
 */

define('TEXT_MAIN','C\'est le define principal pour la page française lorsqu\'aucun fichier défini par template n\'existe. Il se trouve dans: <strong>/includes/languages/french/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Bienvenue <span class="greetUser">cher visiteur !</span> Voulez-vous <a href="%s">vous connecter</a> ?');
} else {
  define('TEXT_GREETING_GUEST', 'Bienvenue, réjouissez-vous devant notre vitrine en ligne.');
}

define('TEXT_GREETING_PERSONAL', 'Bonjour <span class="greetUser">%s</span> ! Voulez-vous voir nos dernières <a href="%s">nouveautés</a> ?');

define('TEXT_INFORMATION', 'Définissez votre principale copie de page Index ici.');

//moved to french
//define('TABLE_HEADING_FEATURED_PRODUCTS','Produits phares');

//define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveautés pour %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produits attendus');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date prévue');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Produits disponibles');
  define('TABLE_HEADING_IMAGE', 'Image Produit');
  define('TABLE_HEADING_MODEL', 'Modèle');
  define('TABLE_HEADING_PRODUCTS', 'Nom du produit');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricant');
  define('TABLE_HEADING_QUANTITY', 'Quantité');
  define('TABLE_HEADING_PRICE', 'Prix');
  define('TABLE_HEADING_WEIGHT', 'Poids');
  define('TABLE_HEADING_BUY_NOW', 'Acheter maintenant');
  define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Aucun produit n\'est disponible dans cette catégorie.');
  define('TEXT_NO_PRODUCTS2', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Aucun produit n\'est disponible chez ce fabricant.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Nombre de produits : ');
  define('TEXT_SHOW', 'Filtrer les résultats par : ');
  define('TEXT_BUY', 'Acheter 1 \'');
  define('TEXT_NOW', '\' maintenant');
  define('TEXT_ALL_CATEGORIES', 'Toutes catégories');
  define('TEXT_ALL_MANUFACTURERS', 'Tous fabricants');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Félicitations ! Vous avez installé avec succès votre solution de e-commerce Zen Cart&reg;.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Félicitations ! Vous avez installé avec succès votre solution de e-commerce Zen Cart&reg;.');
}
?>