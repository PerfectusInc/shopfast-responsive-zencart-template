<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Bon de réduction');
define('HEADING_TITLE', 'Bon de réduction');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> ne semble pas être un code valide de remboursement de coupon. Essayez de le reécrire.');

define('HEADING_COUPON_HELP', 'Aide sur les bons de réductions');
define('TEXT_CLOSE_WINDOW', 'Fermer la fenêtre [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Le code de remboursement de bon de réduction que vous avez entré est pour ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Vous avez besoin de dépenser %s pour utiliser ce bon, sur des produits certifiés.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Offre de réduction :</span> %s</p><p class="smallText">Certaines restrictions peuvent s\'appliquer. Veuillez consulter les détails ci-dessous.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Ce bon est valide entre %s et %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restrictions du bon de réduction</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Restriction à la catégorie:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Restriction au produit:</p>');
define('TEXT_ALLOW', 'Autoriser');
define('TEXT_DENY', 'Interdire');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Ce coupon a des restrictions sur produits spécifiques.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Ce bon est valable pour toutes les catégories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Ce bon est valable pour tous les produits.</p>');
define('TEXT_CAT_ALLOWED', ' (Valable pour cette catégorie)');
define('TEXT_CAT_DENIED', ' (Interdit pour cette catgéorie)');
define('TEXT_PROD_ALLOWED', ' (Valable pour ce produit)');
define('TEXT_PROD_DENIED', ' (Interdit pour ce produit)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Les bons de réduction ne peuvent être appliqué sur l\'achat de ' . TEXT_GV_NAMES . '. Limitation à 1 bon par commande.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Vérification du bon de réduction ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Votre code : ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Des restrictions selon l\'adresse de facturation s\'appliquent.');
?>