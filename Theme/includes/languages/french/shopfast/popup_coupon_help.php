<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Wed Nov 6 20:54:59 2013 -0500 Modified in v1.5.2 $
 */

define('HEADING_COUPON_HELP', 'Aide concernant les bons de réductions');
define('TEXT_CLOSE_WINDOW', 'Fermer la fenêtre [x]');
define('TEXT_COUPON_HELP_HEADER', 'Félicitations, vous avez remboursé un bon de réduction.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nom du bon : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Ce bon vous donne droit à %s de remise sur votre commande');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Vous devez dépenser %s pour utiliser ce bon');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Ce bon vous donne droit à une livraison gratuite de votre commande');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Description du bon : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Ce bon est valable du %s au %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restriction à un produit/une catégorie');
define('TEXT_COUPON_HELP_CATEGORIES', 'Catégorie');
define('TEXT_COUPON_HELP_PRODUCTS', 'Produit');
define('TEXT_ALLOW', 'Autoriser');
define('TEXT_DENY', 'Interdire');

define('TEXT_ALLOWED', ' (Autorisé)');
define('TEXT_DENIED', ' (Interdit)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Ce coupon a des restrictions de produits spécifiques.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Ce bon est valable pour toutes les catégories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Ce bon est valable pour tous les produits.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Les bons de réduction ne peuvent être appliqué sur l\'achat de ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Des restrictions d\'adresse de facturation s\'appliquent.');