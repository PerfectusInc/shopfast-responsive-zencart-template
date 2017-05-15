<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Connexion');
define('NAVBAR_TITLE_2', 'Mot de passe oublié');

define('HEADING_TITLE', 'Mot de passe oublié');

define('TEXT_MAIN', 'Entrez ci-dessous l\'adresse email de votre compte client et nous vous enverrons un message contenant votre nouveau mot de passe.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>ERREUR: L\'adresse Email n\'a pas été trouvée parmi nos enregistrements, veuillez ré-essayer.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nouveau mot de passe');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Un nouveau mot de passe a été demandé depuis ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Votre nouveau mot de passe pour vous connecter sur \'' . STORE_NAME . '\' est :' . "\n\n" . '   %s' . "\n\nAprès vous être connecté(e) à l\'aide du nouveau mot de passe, vous pouvez le changer en allant dans la zone de 'Mon compte'");

define('SUCCESS_PASSWORD_SENT', 'Un nouveau mot de passe a été envoyé à votre adresse email.');
?>