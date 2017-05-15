<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Connexion');
define('HEADING_TITLE', 'Bienvenue, veuillez vous identifier');

define('HEADING_NEW_CUSTOMER', 'Nouveau ? Veuillez fournir vos informations de facturation');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nouveaux clients');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Créez votre profil client sur <strong>' . STORE_NAME . '</strong>, ce qui va vous permettre d\'acheter plus rapidement, de suivre l\'état de vos commandes en cours et de revoir vos commandes antérieures.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Vous avez un compte Paypal ? Vous souhaitez payer rapidement avec une carte de crédit ? Utilisez le bouton Paypal ci-dessous pour utiliser l\'option Encaissement de Paypal Express.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Ou</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Créez votre profil client sur <strong>' . STORE_NAME . '</strong>, ce qui va vous permettre d\'acheter plus rapidement, de suivre l\'état de vos commandes en cours, de revoir vos commandes antérieures et de profiter des avantages de nos autres membres.');

define('HEADING_RETURNING_CUSTOMER', 'Je suis déjà client');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Déjà client');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Pour continuer, veuillez vous connecter à votre compte <strong>' . STORE_NAME . '</strong>.');

define('TEXT_PASSWORD_FORGOTTEN', 'Vous avez perdu votre mot de passe ?');

define('TEXT_LOGIN_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erreur : Désolé, aucune correspondance pour cette adresse email et ce mot de passe.');
define('TEXT_VISITORS_CART', '<strong>Note :</strong> Si vous avez effectué des courses chez nous auparavant et laissé quelque chose dans votre panier, pour votre commodité, le contenu sera ajouté si vous vous reconnectez. <a href="javascript:session_win();">[En savoir plus]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Confidentialité</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Veuillez reconnaître votre acceptation à notre politique de confidentialité en cochant la case suivante. La notice de confidentialité peut être lue </span><a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">ici</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Je déclare avoir pris connaissance et accepté vos dispositions concernant le caractère confidentiel de mes informations personnelles.</span>');

define('ERROR_SECURITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Il y a eu une erreur de sécurité en essayant de vous connecter.');

define('TEXT_LOGIN_BANNED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erreur : Accès non autorisé.');