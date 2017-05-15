<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sun Feb 17 23:22:33 2013 -0500 Modified in v1.5.2 $
 */

define('NAVBAR_TITLE', 'Votre téléchargement ...');
define('HEADING_TITLE', 'Votre téléchargement ...');

define('TEXT_INFORMATION', 'Nous sommes désolés mais votre téléchargement a expiré.<br /><br />
  Si vous aviez d\'autres téléchargements et que vous voulez les récupérer,
  veuillez vous rendre sur la page <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mon compte</a> pour visualiser vos commandes.<br /><br />
  Ou, si vous pensez qu\'il y a un problème avec votre commande, veuillez <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">nous contacter</a> <br /><br />
  Merci !
  ');