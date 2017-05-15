<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 */

define('NAVBAR_TITLE', 'Panier');
define('HEADING_TITLE', 'Contenu de votre panier');
define('HEADING_TITLE_EMPTY', 'Votre panier');
define('TEXT_INFORMATION', 'Vous pouvez ajouter des instructions sur l\'utilisation du panier ici.<br \>(Défini dans includes/languages/french/shopping_cart.php)');
define('TABLE_HEADING_REMOVE', 'Supprimer');
define('TABLE_HEADING_QUANTITY', 'Qté');
define('TABLE_HEADING_MODEL', 'Modèle');
define('TABLE_HEADING_PRICE','Unitaire');
define('TEXT_CART_EMPTY', 'Votre panier est vide.');
define('SUB_TITLE_SUB_TOTAL', 'Sous-Total :');
define('SUB_TITLE_TOTAL', 'Total:');
define('TABLE_HEADING_UPDATE', 'Mettre');
define('TABLE_HEADING_DELETE', 'Effacer');

define('OUT_OF_STOCK_CANT_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Les produits marqués avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' sont hors stock ou il n\'y en a pas assez en stock pour honorer votre commande.<br />Veuillez modifier la quantité des produits marqué (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Merci');
define('OUT_OF_STOCK_CAN_CHECKOUT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Les produits marqués avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' sont hors stock.<br />Les objets non disponibles seront placés en attente.');

define('TEXT_TOTAL_ITEMS', 'Nombre Total d\'Article(s) : ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Poids : ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Montant : ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[Aide (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>