<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_product_info.php 6371 2007-05-25 19:55:59Z ajeh $
 */

define('TEXT_PRODUCT_NOT_FOUND', 'Désolé, le produit n\'a pas été trouvé.');
define('TEXT_CURRENT_REVIEWS', 'Avis en cours : ');
define('TEXT_MORE_INFORMATION', 'Pour plus d\'informations, veuillez consulter la <a href="%s" target="_blank">page web</a> du produit.');
define('TEXT_DATE_ADDED', 'Ce produit a été ajouté à notre catalogue le %s.');
define('TEXT_DATE_AVAILABLE', 'Ce produit sera en stock le %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'Les clients qui ont acheté ce produit ont également acheté ...');
define('TEXT_PRODUCT_OPTIONS', 'Veuillez choisir : ');
define('TEXT_PRODUCT_MANUFACTURER', 'Fabriqué par : ');
define('TEXT_PRODUCT_WEIGHT', 'Poids de livraison : ');
define('TEXT_PRODUCT_QUANTITY', ' Unités en stock');
define('TEXT_PRODUCT_MODEL', 'Modèle : ');



// previous next product
define('PREV_NEXT_PRODUCT', 'Produit ');
define('PREV_NEXT_FROM', ' de ');
define('IMAGE_BUTTON_PREVIOUS','Article précédent');
define('IMAGE_BUTTON_NEXT','Article suivant');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','Retour à la liste des produits');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveautés pour %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produits attendus');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date prévue');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [était : ');
define('TEXT_ATTRIBUTE_IS_FREE',' est à présent : Gratuit]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' Des frais uniques peuvent s\'appliquer');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Remises disponibles par quantités');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');

define('ATTRIBUTES_PRICE_DELIMITER_PREFIX', ' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX', ' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX', ' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX', ') ');  
?>