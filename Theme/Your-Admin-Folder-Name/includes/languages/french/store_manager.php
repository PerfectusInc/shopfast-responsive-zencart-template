<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Sep 24 14:38:59 2012 -0400 Modified in v1.5.2 $
 */

  define('HEADING_TITLE', 'Gestionnaire de la Boutique');
  define('TABLE_CONFIGURATION_TABLE', 'Recherche de définitions de CONSTANTES');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL','Mise à jour <strong>réussie</strong> du classement des attributs');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'Mise à jour <strong>réussie</strong> des valeurs de classement du prix des produits');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', 'Réinitialisation à zéro <strong>réussie</strong> des produits consultés');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', 'Réinitialisation à zéro <strong>réussie</strong> des produits commandés');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', 'Réinitialisation <strong>réussie</strong> de toutes les catégories principales pour les produits liés');
  define('SUCCESS_UPDATE_COUNTER', 'Mise à jour <strong>réussie</strong> du compteur sur : ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Erreur :</strong> Aucune clef de configuration correspondante n\'a été trouvée.');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Erreur :</strong> Aucune saisie de clef de configuration ou de texte pour la recherche ... Recherche terminée');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Actualisation du compteur de hits</strong><br />à une nouvelle valeur : ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Actualiser le champ trieur par prix de TOUS les produits</strong><br />pour pouvoir classer selon le prix affiché.');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Réinitialiser TOUS les produits consultés</strong><br />Remettre les compteurs de consultations de tous les produits à 0.');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Réinitialiser TOUS les produits commandés</strong><br />Remettre les compteurs de commandes de tous les produits à 0.');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Réinitialiser l\'ID de catégorie principale de TOUS les produits</strong><br />Pour l\'utilisation avec les produits liés et les prix fixes.');

  define('TEXT_NEW_ORDERS_ID', 'Nouvel ID de commande');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Positionner le numéro de commande suivant</strong><br />NOTE: Vous ne pouvez pas positionner le numéro de commande à une valeur inférieure à toute commande déjà existante dans la base de données.');
  define('TEXT_MSG_NEXT_ORDER', 'Le numéro de commande suivant a été positionné à %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'À cause des commandes existantes, le numéro de commande suivant est actuellement: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'En raison des limitations de la BDD, il vous est impossible de positionner le numéro de commande suivant plus haut que 2000000000. Veuillez choisir une valeur plus petite.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Recherche de CONSTANTE ou de definition dans les fichiers de langue</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Clé ou nom :');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTE :</strong> Les CONSTANTES sont écrites en majuscules.<br />La recherche dans les fichiers de langue peut être une alternative lorsque rien n\'a été trouvé dans les tables de la base de données.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Recherche dans les definitions des fichiers de langue</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Texte à chercher :');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTE :</strong> Les recherches dans les fichiers de langue sont indépendantes de la casse.');

  define('TABLE_TITLE_KEY', '<strong>Clé :</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titre :</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Description :</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Groupe :</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valeur :</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Dans ces fichiers de langue :');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Aucun');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Tous les fichiers de langue ' . strtoupper($_SESSION['language']) . ' du Catalogue et de l\'Administration');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Tous les principaux fichiers de langue du Catalogue (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /french.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Tous les fichiers de la langue en cours - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Tous les principaux fichiers de langue de l\'Administration (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /french.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Tous les fichiers de la langue en cours de l\'Administration (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Tous les fichiers de la langue en cours du Catalogue et de l\'Administration');

  define('TEXT_INFO_NO_EDIT_AVAILABLE', 'Aucune édition disponible');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ou, CACHÉ');
  
  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimiser la base de données</strong> pour récupérer l\'espace disque utilisé par les enregistrements effacés. <br />Exécution facultative une fois par semaine ou par mois sur une base de données en activité<br />(préférable de le faire pendant des périodes inoccupées).');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Optimisation des tables de la base de données en cours. Cela pourra prendre plusieurs minutes. Veuillez patienter. Le menu précédent réapparaîtra à la fin ... ');
  define('SUCCESS_DB_OPTIMIZE', 'Optimisation de base de données - Tables traitées : ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Nettoyer les fichiers journaux de débogage</strong><br /><strong>ATTENTION : </strong>Zen Cart enregistre les messages d\'erreurs de PHP à des fins de débogage, et beaucoup de modules de paiement peuvent être configurés pour enregistrer les données de débogage afin de diagnostiquer des problèmes de communication.<br />Cliquer sur cette option de purge va supprimer *définitivement* *TOUS* les journaux de débogage associés à des erreurs PHP et aux modules de paiement du répertoire /logs/.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Fichiers journaux de débogage purgés');