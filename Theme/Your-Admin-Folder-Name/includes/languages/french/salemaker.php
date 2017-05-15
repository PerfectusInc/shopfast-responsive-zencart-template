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
//  $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
//

define('HEADING_TITLE', 'Soldeur');
define('TABLE_HEADING_SALE_NAME', 'Nom de la solde');
define('TABLE_HEADING_SALE_DEDUCTION', 'Déduction');
define('TABLE_HEADING_SALE_DATE_START', 'Date de début');
define('TABLE_HEADING_SALE_DATE_END', 'Date de fin');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_SALEMAKER_NAME', 'Nom de la solde :');
define('TEXT_SALEMAKER_DEDUCTION', 'Déduction :');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type :&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Intervalle de prix des produits :');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Si un produit est en promotion :');
define('TEXT_SALEMAKER_DATE_START', 'Date de début :');
define('TEXT_SALEMAKER_DATE_END', 'Date de fin :');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Ou</b> cochez les catégories auxquelles cette solde s\'applique :');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Cliquez ici pour des astuces d\'utilisation du Soldeur (SaleMaker).</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Plus d\'infos)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Immédiatement');
define('TEXT_SALEMAKER_NEVER', 'Jamais');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Cochez cette case si vous voulez appliquer la solde à <b>tous les produits</b> :');
define('TEXT_SALEMAKER_TOP', 'Tout le catalogue');
define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_DATE_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Dernier changement de statut :');
define('TEXT_INFO_SPECIALS_CONDITION', 'Condition sur les promotions :');
define('TEXT_INFO_DEDUCTION', 'Déduction :');
define('TEXT_INFO_PRICERANGE_FROM', 'Intervalle de prix :');
define('TEXT_INFO_PRICERANGE_TO', ' à ');
define('TEXT_INFO_DATE_START', 'Débute :');
define('TEXT_INFO_DATE_END', 'Expire :');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ignorer le prix promotionnel - Appliquer au prix du produit et remplacer la promotion');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ignorer la condition de solde - Pas de mise en solde si le produit est en promotion');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Appliquer la déduction de solde au prix promotionnel - Sinon, appliquer au prix du produit');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Deduct amount');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Percent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'New Price');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Copier la solde');
define('TEXT_INFO_COPY_INTRO', 'Entrez un nom pour la copie de<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Supprimer la solde');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer définitivement cette solde ?');
define('TEXT_MORE_INFO', '(Plus d\'infos)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Attention : Cette catégorie fait déjà l\'objet de %s de solde(s)');
?>