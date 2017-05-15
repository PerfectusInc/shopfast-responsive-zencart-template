<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Enregistrement d\'une Page d\'Administration');
define('TEXT_PAGE_KEY', 'Clé de la Page');
define('TEXT_LANGUAGE_KEY', 'Titre de Page');
define('TEXT_MAIN_PAGE', 'Nom de Fichier de Page');
define('TEXT_PAGE_PARAMS', 'Paramètres pour la page');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', 'Afficher dans le Menu ?');
define('TEXT_SORT_ORDER', 'Classement');

define('TEXT_EXAMPLE_PAGE_KEY', '(ex. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(ex. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(ex. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(ex. option=1 ou, plus habituellement, laisser vide)');
define('TEXT_SELECT_MENU', 'Choisir Menu');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Clé de page non saisie. Toutes les pages d\'administration doivent posséder une clé de page unique.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Clé de page existe déjà. Les clés de page doivent être uniques.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'La clé de la langue n\'a pas été saisi. Toutes les pages d\'administration doivent posséder une clé de langue qui définit le texte sur chaque lien du menu.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'La clé de la langue saisie pour le titre de la page n\'a pas été défini. Veuillez vérifier que l\'orthographe est correcte.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Le "define" pour le nom de fichier page n\'a pas été saisi.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Le définition du fichier saisie n\'existe pas. Veuillez vérifier que l\'orthographe est correcte.');
define('ERROR_MENU_NOT_CHOSEN', 'Menu non sélectionné. Vous devez associer la nouvelle page à un menu, même si elle ne sera pas affichée sur ce menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Votre page d\'administration a été enregistrée.');