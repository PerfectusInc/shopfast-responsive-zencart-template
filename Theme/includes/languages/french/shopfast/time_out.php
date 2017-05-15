<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Déconnexion Automatique');
define('HEADING_TITLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Hoop-là ! Votre session a expiré');
define('HEADING_TITLE_LOGGED_IN', 'Hoop-là ! Désolé, mais vous n\'êtes pas autorisé(e) à effectuer l\'action demandée. ');
define('TEXT_INFORMATION', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Si vous êtiez en train de passer commande, veuillez vous connecter et votre panier sera restauré. Vous pourrez alors revenir à l\'encaissement et terminer votre achat final.</p><p>Si vous aviez terminé une commande et vous souhaitez la contôler' . (DOWNLOAD_ENABLED == 'true' ? ', ou si vous aviez un téléchargement et souhaitez le reprendre' : '') . ', veuillez vous rendre sur votre page <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mon Compte</a> pour visualiser votre commande.');

  

define('TEXT_INFORMATION_LOGGED_IN', 'Vous êtes toujours connecté à votre compte et vous pouvez continuer vos achats. Veuillez choisir une destination à partir du menu.');

define('HEADING_RETURNING_CUSTOMER', 'Connexion');
define('TEXT_PASSWORD_FORGOTTEN', 'Mot de passe oublié ?');
?>