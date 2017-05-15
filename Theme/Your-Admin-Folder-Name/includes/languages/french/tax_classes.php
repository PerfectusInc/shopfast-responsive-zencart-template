<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tax_classes.php 7167 2007-10-03 23:02:17Z drbyte $
 */

define('HEADING_TITLE', 'Classes de Taxes');

define('TABLE_HEADING_TAX_CLASS_ID', 'ID Classe');
define('TABLE_HEADING_TAX_CLASSES', 'Classe de Taxes');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires');
define('TEXT_INFO_CLASS_TITLE', 'Titre de la classe de taxes :');
define('TEXT_INFO_CLASS_DESCRIPTION', 'Description :');
define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_INSERT_INTRO', 'Veuillez saisir la nouvelle classe de taxes avec ses données connexes');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer cette classe de taxes ?');
define('TEXT_INFO_HEADING_NEW_TAX_CLASS', 'Nouvelle classe de taxes');
define('TEXT_INFO_HEADING_EDIT_TAX_CLASS', 'Éditer la classe de taxes');
define('TEXT_INFO_HEADING_DELETE_TAX_CLASS', 'Supprimer la classe de taxes');
define('ERROR_TAX_RATE_EXISTS_FOR_CLASS', 'ERREUR: Impossible de supprimer cette classe de taxes -- Des taux de taxes sont liés à cette classe de taxes.');
define('ERROR_TAX_RATE_EXISTS_FOR_PRODUCTS', 'ERREUR: Impossible de supprimer cette classe de taxes -- Il y a %s produits qui utilisent cette classe de taxes.');
?>