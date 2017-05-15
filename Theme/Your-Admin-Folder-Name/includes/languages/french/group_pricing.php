<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Groupes de Prix');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nom du Groupe');
define('TABLE_HEADING_GROUP_AMOUNT', '% de Réduction');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nouveau groupe de prix');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Éditer le groupe de prix');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Supprimer le groupe de prix');

define('TEXT_NEW_INTRO', 'Veuillez entrer les informations pour ce nouveau groupe');
define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires.');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce groupe ?');
define('TEXT_DELETE_PRICING_GROUP', 'Supprimer le groupe de prix');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>ATTENTION:</b> Il y a %s clients encore liés à cette catégorie !');

define('TEXT_GROUP_PRICING_NAME', 'Nom du groupe : ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Pourcentage de réduction : ');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_CUSTOMERS', 'Clients dans le groupe :');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ERREUR : Des clients existent dans ce groupe. Veuillez confirmer que vous souhaitez enlever tous les membres du groupe et les supprimer.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTE : Vous avez défini des groupes de prix, mais vous n\'avez pas activé le module total-commande de groupes de prix.<br />Veuillez aller dans Administration->Modules->Total Commande->Remise Adhésion (ot_group_pricing) et installez/configurez le module.');

?>