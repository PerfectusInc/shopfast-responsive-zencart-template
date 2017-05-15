<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Jul 16 14:10:24 2012 -0400 Modified in v1.5.1 $
 */

define('HEADING_TITLE', 'Connexion à l\'Admininistration');
define('HEADING_TITLE_EXPIRED', 'Connexion à l\'Admininistration - Mot de passe expiré');

define('TEXT_ADMIN_NAME', 'Nom de l\'utilisateur de l\'Admininistration : ');
define('TEXT_ADMIN_PASS', 'Mot de passe de l\'utilisateur de l\'Admininistration: ');
define('TEXT_ADMIN_OLD_PASSWORD', 'Ancien mot de passe :');
define('TEXT_ADMIN_NEW_PASSWORD', 'Nouveau mot de passe :');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Confirmer le mot de passe :');

define('ERROR_WRONG_LOGIN', '<p>Vous avez entré un mauvais nom d\'utilisateur ou mot de passe.</p>');
define('ERROR_SECURITY_ERROR', 'Il y a eu une erreur de sécurité lorsque vous avez essayé de vous identifier.');

define('TEXT_PASSWORD_FORGOTTEN', 'Oubli du mot de passe');

define('LOGIN_EXPIRY_NOTICE', 'Soyez averti(e) qu\'après 15 minutes d\'inactivité, il vous sera demandé de vous re-connecter.<br /><br />Note : Tous les mots de passe expirent après 90 jours, date à laquelle il vous sera demandé de créer un nouveau mot de passe.');
define('ERROR_PASSWORD_EXPIRED', 'NOTE: Votre mot de passe a expiré. Veuillez choisir un nouveau mot de passe. Votre mot de passe <strong>doit contenir à la fois des CHIFFRES et des LETTRES, ainsi qu\'un minimum de 7 caractères.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Pour des raisons de sécurité, votre mot de passe temporaire doit être changé. Veuillez choisir un nouveau mot de passe.<br />Votre mot de passe <strong>doit contenir à la fois des CHIFFRES et des LETTRES, ainsi qu\'un minimum de 7 caractères.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Avertissement d\'échec de connexion a l\'Administration');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Avertissement Important : Il y a eu de multiples tentatives de connexion sans succès à votre compte administrateur. Pour votre protection et la sécurité du système, après 6 tentatives le compte sera bloqué pendant un minimum de 30 minutes, pendant lesquelles il sera impossible de vous connecter même si vous vous rappelez de votre mot de passe. D\'autres tentatives de connexion prolongeront le blocage du compte pour encore 30 minutes. Il vous sera impossible de réinitialiser le mot de passe durant cette période. Désolé pour la gêne occasionnée.' . "\n\nLa dernière tentative de connexion a été effectuée depuis cette adresse IP: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Note : Votre mot de passe a expiré car votre site est passé de protection non-SSL (moins sécurisé) à une protection SSL (plus sécurisé). Changer votre mot de passe sous protection SSL est un pas important pour une plus grande sécurité. Désolé pour la gêne occasionnée. Les règles standard d\'expiration du mot de passe s\'appliquent.');