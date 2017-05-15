<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Nov 15 22:47:00 2012 -0500 Modified in v1.5.2 $
 */

define('HEADING_TITLE', 'Réinitialisation du mot de passe');

define('TEXT_ADMIN_EMAIL', 'Adresse Email de l\'administrateur : ');
define('TEXT_BUTTON_REQUEST_RESET', 'Demande de réinitialisation');
define('TEXT_BUTTON_LOGIN', 'Connexion');
define('TEXT_BUTTON_CANCEL', 'Annuler');

define('ERROR_WRONG_EMAIL', 'Vous avez saisi une adresse email erronée.');
define('ERROR_WRONG_EMAIL_NULL', 'Veuillez entrer une adresse email valide.');
define('MESSAGE_PASSWORD_SENT', 'Un nouveau mot de passe a été envoyé à l\'adresse e-mail que vous avez saisi.<br />Cliquez sur "Connexion" ci-dessous pour vous connecter avec le nouveau mot de passe temporaire.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Votre demande de modification');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Un nouveau mot de passe a été demandé depuis %s.' . "\n\n" . 'Votre nouveau mot de passe temporaire est :' . "\n\n   %s\n\nIl vous sera demandé de choisir un nouveau mot de passe avant de vous connecter.\n\nCe mot de passe temporaire expire dans 24 heures.\n\n\n");