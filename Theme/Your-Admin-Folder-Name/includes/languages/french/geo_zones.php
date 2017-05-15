<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: geo_zones.php 4736 2006-10-13 07:11:44Z drbyte $
 */

define('HEADING_TITLE', 'Définition des Zones - Taxes, Paiement et Livraison');

define('TABLE_HEADING_COUNTRY', 'Pays');
define('TABLE_HEADING_COUNTRY_ZONE', 'Zone');
define('TABLE_HEADING_TAX_ZONES', 'Nom de la zone');
define('TABLE_HEADING_TAX_ZONES_DESCRIPTION', 'Description de la zone');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');
//define('TEXT_LEGEND', 'LEGENDE : ');
define('TEXT_LEGEND_TAX_AND_ZONES', ': Zones &amp; taxes définies');
define('TEXT_LEGEND_ONLY_ZONES', ': Zones définies mais sans taxes ');
define('TEXT_LEGEND_NOT_CONF', ': Non configurée ');

define('TEXT_INFO_HEADING_NEW_ZONE', 'Nouvelle zone');
define('TEXT_INFO_NEW_ZONE_INTRO', 'Veuillez entrer les informations pour cette nouvelle zone');

define('TEXT_INFO_HEADING_EDIT_ZONE', 'Édition de la zone');
define('TEXT_INFO_EDIT_ZONE_INTRO', 'Veuillez effectuer les changements nécessaires');

define('TEXT_INFO_HEADING_DELETE_ZONE', 'Suppression de la zone');
define('TEXT_INFO_DELETE_ZONE_INTRO', 'Êtes-vous certain(e) de vouloir supprimer cette zone ?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE', 'Nouvelle sous-zone');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO', 'Veuillez entrer les informations pour cette nouvelle sous-zone');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE', 'Édition de la sous-zone');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO', 'Veuillez effectuer les changements nécessaires');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE', 'Suppression de la sous-zone');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette sous-zone ?');

define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_ZONE_NAME', 'Nom de la zone :');
define('TEXT_INFO_NUMBER_ZONES', 'Nombre de zones :');
define('TEXT_INFO_ZONE_DESCRIPTION', 'Description :');
define('TEXT_INFO_COUNTRY', 'Pays :');
define('TEXT_INFO_COUNTRY_ZONE', 'Zone :');
define('TYPE_BELOW', 'Toutes les zones');
define('PLEASE_SELECT', 'Toutes zones');
define('TEXT_ALL_COUNTRIES', 'Tous les pays');

define('TEXT_INFO_NUMBER_TAX_RATES','Nombre de taux de taxes :');
define('ERROR_TAX_RATE_EXISTS','ATTENTION: Des taux de taxes sont définis pour cette zone. Veuillez supprimer les taux de taxes avant d\'enlever cette zone');
?>