<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 21 16:05:31 2012 -0400 Modified in v1.5.1 $
 */

define('NAVBAR_TITLE', 'Créer un Compte');

define('HEADING_TITLE', 'Mes informations de compte');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">NOTE:</strong> Si vous avez déjà un compte chez nous, veuillez vous identifier sur la <a href="%s">page de connexion</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Merci, votre demande de compte a été soumise pour examen.');

// greeting salutation
define('EMAIL_SUBJECT', 'Bienvenue chez ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Cher Mr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Chère Mme. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Cher %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Nous sommes heureux de vous accueillir chez <strong>' . STORE_NAME . '</strong>.' . "\n\n");
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Félicitations ! Pour faire de votre prochaine visite sur notre boutique en ligne une expérience plus rémunératrice, veuillez trouver ci-dessous un bon de réduction créé uniquement pour vous !' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Pour utiliser le bon de réduction, entrez le code ' . TEXT_GV_REDEEM . ' lors de l\'encaissement : <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Le bon est valide entre %s et %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Pour vous remercier de votre passage aujourd\'hui, nous vous adressons un ' . TEXT_GV_NAME . ' d\'une valeur de %s !' . "\n");
define('EMAIL_GV_REDEEM', 'Le ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' est de : %s ' . "\n\n" . 'Vous pourrez entrer le ' . TEXT_GV_REDEEM . ' lors de l\'encaissement, après avoir fait vos choix dans la boutique. ');
define('EMAIL_GV_LINK', ' Ou, vous pouvez en obtenir le remboursement en suivant ce lien : ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Après avoir ajouté le ' . TEXT_GV_NAME . ' à votre compte, vous pouvez utiliser ce ' . TEXT_GV_NAME . ' pour vous, ou l\'envoyer à un(e) ami(e) !' . "\n\n");

define('EMAIL_TEXT', 'Vous êtes maintenant enregistré(e) sur notre site et avez des privilèges. Avec votre compte, vous avez maintenant accès aux <strong>services divers</strong> que nous vous offrons. Parmi ces nombreux services figurent entre autres :' . "\n\n<ul>" . '<li><strong>Historique de commande</strong> - Visualiser les détails des commandes passées chez nous.' . "\n\n" . '<li><strong>Panier permanent</strong> - Tous les produits ajoutés à votre panier y restent jusqu\'à ce que vous les enleviez, ou que vous passiez à la caisse.' . "\n\n" . '<li><strong>Carnet d\'adresses</strong> - Nous pouvons expédier vos produits à une adresse différente de la vôtre ! C\'est parfait pour envoyer un cadeau d\'anniversaire à la personne elle-même ! ' . "\n\n" . '<li><strong>Des avis de clients</strong> - Partagez votre opinion sur nos produits avec d\'autres clients.' . "\n\n</ul>");
define('EMAIL_CONTACT', 'Pour de plus amples informations concernant nos services, merci de nous contacter par mail : <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Cordialement,' . "\n\n" . STORE_OWNER . "\nLa Direction\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER ."</a>\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Cette adresse email nous a été communiquée par vous ou un de nos clients. Si vous n\'avez pas ouvert de compte sur ce site, ou pensez avoir reçu cet e-mail par erreur, veuillez envoyer un mail à : %s ');