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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Definir l\'Éditeur des pages pour : ');
define('NAVBAR_TITLE', 'Definir l\'Éditeur des pages');

define('TEXT_INFO_EDIT_PAGE', 'Sélectionnez une page à éditer :');

define('TEXT_INFO_MAIN_PAGE', 'Page principale');

define('TEXT_INFO_SHIPPINGINFO', 'Livraisons et Retours');
define('TEXT_INFO_PRIVACY', 'Vie Privée');
define('TEXT_INFO_CONDITIONS', 'Conditions Générales');
define('TEXT_INFO_CONTACT_US', 'Nous Contacter');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Commande Terminée');

define('TEXT_INFO_PAGE_2', 'Page 2');
define('TEXT_INFO_PAGE_3', 'Page 3');
define('TEXT_INFO_PAGE_4', 'Page 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Fichier inexistant : %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Erreur : Je ne peux pas écrire dans ce fichier. Veuillez définir les bonnes permissions utilisateur sur : %s');

define('TEXT_INFO_SELECT_FILE', 'Choisissez un fichier à éditer ...');
define('TEXT_INFO_EDITING', 'Édition du fichier  :');

define('TEXT_INFO_CAUTION','Note : Vous devriez toujours éditer les fichiers situés dans votre répertoire du thème qui a priorité sur le thème courant, Exemple : /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Assurez-vous de faire des sauvegardes après avoir modifié vos fichiers.');
?>