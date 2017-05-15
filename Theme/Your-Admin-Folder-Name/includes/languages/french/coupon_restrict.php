<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 */

define('HEADING_TITLE', 'Bons de réduction - Restrictions catégories/produits');
define('HEADING_TITLE_CATEGORY', 'Restrictions aux Catégories');
define('HEADING_TITLE_PRODUCT', 'Restrictions aux Produits');

define('HEADER_COUPON_ID', 'ID du bon');
define('HEADER_COUPON_NAME', 'Nom du bon');
define('HEADER_CATEGORY_ID', 'ID de la catégorie');
define('HEADER_CATEGORY_NAME', 'Nom de la catégorie');
define('HEADER_PRODUCT_ID', 'ID du produit');
define('HEADER_PRODUCT_NAME', 'Nom du produit');
define('HEADER_RESTRICT_ALLOW', 'Autoriser');
define('HEADER_RESTRICT_DENY', 'Interdire');
define('HEADER_RESTRICT_REMOVE', 'Supprimer');
define('IMAGE_ALLOW', 'Autoriser');
define('IMAGE_DENY', 'Interdire');
define('IMAGE_REMOVE', 'Supprimer');
define('TEXT_ALL_CATEGORIES', 'Toutes les catégories');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Ajouter tous les produits de cette catégorie');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Supprimer tous les produits de cette catégorie');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Pour \'Ajouter tous les Produits de cette Catégorie\', uniquement les produits qui n\'ont pas encore de restrictions seront ajoutés.<br />
                    Pour \'Supprimer tous les Produits de cette Catégorie\', uniquement les produits indiqués \'Autorisé\' ou \'Interdit\' seront supprimés.</strong>');

define('TEXT_MANUFACTURER', 'Fabricant : ');
define('TEXT_CATEGORY', 'Catégorie : ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Catégorie incomplète');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Produit incomplet');