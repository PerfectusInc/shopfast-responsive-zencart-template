<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z drbyte $
 */

define('HEADING_TITLE', 'Clients');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Prénom');
define('TABLE_HEADING_LASTNAME', 'Nom');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Compte<br \>Créé le');
define('TABLE_HEADING_LOGIN', 'Dernière Connexion');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_PRICING_GROUP', 'Groupe de Prix');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorisé');
define('TABLE_HEADING_GV_AMOUNT', 'Solde<br \>Chèques Cadeaux');

define('TEXT_DATE_ACCOUNT_CREATED', 'Compte Créé le :');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Dernière Modification :');
define('TEXT_INFO_DATE_LAST_LOGON', 'Dernière Connexion :');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Nombre de Connexions :');
define('TEXT_INFO_COUNTRY', 'Pays :');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Nombre d\'Avis :');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce client ?');
define('TEXT_DELETE_REVIEWS', 'Supprimer %s Avis');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Supprimer le Client');
define('TYPE_BELOW', 'Saisissez ci-dessous');
define('PLEASE_SELECT', 'Choisissez-en un');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Nombre de Commandes :');
define('TEXT_INFO_LAST_ORDER','Dernière Commande :');
define('TEXT_INFO_ORDERS_TOTAL', 'Total :');
define('CUSTOMERS_REFERRAL', 'Parrainage Client<br />1er Bon de Réduction');
define('TEXT_INFO_GV_AMOUNT', 'Solde des Chèques Cadeaux:');

define('ENTRY_NONE', 'Aucune');

define('TABLE_HEADING_COMPANY','Société');

define('CUSTOMERS_AUTHORIZATION', 'Statut d\'Autorisation du Client');
define('CUSTOMERS_AUTHORIZATION_0', 'Approuvé');
define('CUSTOMERS_AUTHORIZATION_1', 'En attente d\'approbation - Doit être autorisé pour naviguer');
define('CUSTOMERS_AUTHORIZATION_2', 'En attente d\'approbation - Peut naviguer sans prix affichés');
define('CUSTOMERS_AUTHORIZATION_3', 'En attente d\'approbation - Peut naviguer avec prix affichés sans pouvoir acheter');
define('CUSTOMERS_AUTHORIZATION_4', 'Banni - Non autorisé à se connecter ou acheter');  
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Attention : Votre boutique est configurée en mode Approbation - Sans navigation. Le client a été mis en attente d\'approbation - Pas de naviguation');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Attention : Votre boutique est configurée en mode Approbation - Navigation sans prix affichés. Le client a été mis en attente d\'approbation - Naviguation sans prix affichés');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Votre statut de client a été actualisé. Merci de faire votre marché chez nous. Nous nous réjouissons de pouvoir faire des affaires avec vous.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Statut client mis à jour');

define('ADDRESS_BOOK_TITLE', 'Entrées du carnet d\'adresses');
define('PRIMARY_ADDRESS', '(adresse principale)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTE:</strong></span> Un maximun de %s entrées sont autorisées dans le carnet d\'adresses.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');
?>