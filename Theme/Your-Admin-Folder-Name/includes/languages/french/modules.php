<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2011-07-28 15:51:25Z drbyte $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Modules de Paiements');
define('HEADING_TITLE_MODULES_SHIPPING', 'Modules de Livraisons');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Modules de Total Commande');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Modules Types de Produits');

define('TABLE_HEADING_MODULES', 'Modules');
define('TABLE_HEADING_SORT_ORDER', 'Classement');
define('TABLE_HEADING_ORDERS_STATUS','Statut des Commandes');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_MODULE_DIRECTORY', 'Répertoire du module :');
define('WARNING_MODULES_SORT_ORDER','AVERTISSEMENT : VOUS AVEZ DES NUMEROS DE CLASSEMENT EN DOUBLE QUI PRODUIRONT DES ERREURS DE CALCUL<br />VEUILLEZ CORRIGER CES PROBLEMES MAINTENANT !');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERREUR : Module non chargé à cause de fichier de langue manquant : ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ALERTE : Vos paramètres Administratifs ont été changés dans votre boutique en ligne.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Ceci est un email automatique envoyé par votre boutique Zen Cart pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs: ' . "\n\n" . 'NOTE : Les paramètres Administratifs ont été MODIFIÉS pour le module [%s], par l\'utilisateur de l\'administration %s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est conseillé de vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Ceci est un email automatique envoyé par votre boutique Zen Cart pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs: ' . "\n\n" . 'NOTE : Les paramètres Administratifs ont été modifiés. Le module [%s] a été INSTALLÉ par l\'utilisateur de l\'administration %s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est conseillé de vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Ceci est un email automatique envoyé par votre boutique Zen Cart pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs: ' . "\n\n" . 'NOTE : Les paramètres Administratifs ont été modifiés. Le module [%s] a été ENLEVÉ par l\'utilisateur de l\'administration %s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est conseillé de vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir enlever ce module ?');
define('TEXT_WARNING_SSL_EDIT', 'ALERTE : <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Pour des raisons de sécurité, l\'édition de ce module est désactivée jusqu\'à ce que votre Administration soit configurée en mode SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERTE : <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Pour des raisons de sécurité, l\'installation de ce module est désactivée jusqu\'à ce que votre Administration soit configurée en mode SSL</a>.');