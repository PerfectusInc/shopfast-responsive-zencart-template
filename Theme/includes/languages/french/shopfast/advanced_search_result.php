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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Recherche avancée');
define('NAVBAR_TITLE_2', 'Résultats de recherche');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Recherche avancée');

define('HEADING_SEARCH_CRITERIA', 'Critères de recherche');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Chercher dans les descriptions de produits');
define('ENTRY_CATEGORIES', 'Catégories :');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Inclure les sous-catégories');
define('ENTRY_MANUFACTURERS', 'Fabricants :');
define('ENTRY_PRICE_FROM', 'A partir de ce prix :');
define('ENTRY_PRICE_TO', 'Jusqu\'à ce prix :');
define('ENTRY_DATE_FROM', 'A partir de cette date :');
define('ENTRY_DATE_TO', 'Jusqu\'à cette date :');

define('TEXT_SEARCH_HELP_LINK', 'Aide à la recherche [?]');

define('TEXT_ALL_CATEGORIES', 'Toutes les catégories');
define('TEXT_ALL_MANUFACTURERS', 'Tous les fabricants');

define('HEADING_SEARCH_HELP', 'Aide à la recherche');
define('TEXT_SEARCH_HELP', 'Les mots-clefs peuvent être séparés par les liaisons AND et/ou OR pour un meilleur contrôle des résultats de recherche.<br /><br />Par exemple, Microsoft AND souris donnera les résultats qui contiennent les deux mots. Par contre, pour souris OR clavier, les résultats contiendront l\'un des deux mots ou les deux.<br /><br />Des correspondances exactes de mots peuvent être cherchées en entourant les mots-clefs par des guillemets.<br /><br />Par exemple, "ordinateur portable" retournera les résultats qui contiennent exactement cette chaine de caractères.<br /><br />Des parenthèses peuvent être utlisé pour faire des recherches encore plus précises.<br /><br />Par exemple, Microsoft AND (clavier OR souris OR "visual basic").');
define('TEXT_CLOSE_WINDOW', 'Fermer la fenêtre [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modèle');
define('TABLE_HEADING_PRODUCTS', 'Nom du produit');
define('TABLE_HEADING_MANUFACTURER', 'Fabricant');
define('TABLE_HEADING_QUANTITY', 'Quantité');
define('TABLE_HEADING_PRICE', 'Prix');
define('TABLE_HEADING_WEIGHT', 'Poids');
define('TABLE_HEADING_BUY_NOW', 'Acheter maintenant');

define('TEXT_NO_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Aucun produit ne correspond aux critères de recherche.');

define('ERROR_AT_LEAST_ONE_INPUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Veuillez remplir au moins un des champs du formulaire de recherche.');
define('ERROR_INVALID_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>A partir de cette date est invalide.');
define('ERROR_INVALID_TO_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jusqu\'à cette date est invalide.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jusqu\'à cette date doit être supérieur ou égal à à partir de cette date.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>A partir de ce prix doit être un nombre.');
define('ERROR_PRICE_TO_MUST_BE_NUM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jusqu\'à ce prix doit être un nombre !');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jusqu\'à ce prix doit être supérieur ou égal à à partir de ce prix.');
define('ERROR_INVALID_KEYWORDS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Mots-clés invalides.');
?>