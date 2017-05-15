<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: users.php 18773 2011-05-20 01:00:21Z drbyte $
 */

define('HEADING_TITLE', 'Utilisateurs');

define('IMAGE_ADD_USER', 'Ajouter Utilisateur');
define('IMAGE_RESET_PWD', 'Réinitialiser le mot de passe');

define('TEXT_ID', 'ID');
define('TEXT_NAME', 'Nom');
define('TEXT_EMAIL', 'Email');
define('TEXT_PROFILE', 'Profil');
define('TEXT_PASSWORD', 'Mot de passe');
define('TEXT_CONFIRM_PASSWORD', 'Confirmer le mot de passe');
define('TEXT_NO_USERS_FOUND', 'Aucun utilisateur trouvé');
define('TEXT_CONFIRM_DELETE', 'Suppression demandée. Veuillez confirmer : ');

define('ERROR_NO_USER_DEFINED', 'L\'option que vous avez demandé ne peut être prise en compte sans spécifier un utilisateur');
define('ERROR_USER_MUST_HAVE_PROFILE', 'Les utilisateurs doivent avoir un profil assigné');
define('ERROR_DUPLICATE_USER', 'Désolé, un utilisateur avec ce nom existe déjà. Veuillez choisir un autre nom.');
define('ERROR_ADMIN_NAME_TOO_SHORT', 'Les noms d\'utilisateur doivent comprendre au moins %s caractères');
define('ERROR_PASSWORD_TOO_SHORT', 'Les mots de passe doivent comprendre au moins %s caractères');
define('SUCCESS_NEW_USER_ADDED', 'Nouvel utilisateur ajouté');
define('SUCCESS_USER_DETAILS_UPDATED', 'Détails de l\'utilisateur modifiés');
define('SUCCESS_PASSWORD_UPDATED', 'Mot de passe modifié');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', 'Désolé, l\'adresse e-mail que vous avez indiqué contient des caractères invalides.');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', 'Désolé, le nom d\'utilisateur que vous avez saisi contient des caractères invalides.');