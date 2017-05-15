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
// $Id: ssl_check.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', 'Vérification de Sécurité');
define('HEADING_TITLE', 'Vérification de sécurité');

define('TEXT_INFORMATION', 'Nous avons détecté que votre navigateur a généré un ID de session SSL différent de celui utilisé sur nos pages sécurisées.');
define('TEXT_INFORMATION_2', 'Pour des questions de sécurité, vous devez vous reconnecter à votre compte afin de poursuivre vos achats en ligne.');
define('TEXT_INFORMATION_3', 'Certains navigateurs, comme Konqueror 3.1, n\'offrent pas la possibilité de générer automatiquement l\'ID de session SSL sécurisée nécessaire. Si vous utilisez un tel navigateur, nous vous recommandons de passer à un autre navigateur pour continuer vos achats en ligne avec nous. Si vous n\'avez pas d\'autre navigateur installé sur votre ordinateur, vous pouvez en télécharger un compatible depuis: <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, ou <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>.');
define('TEXT_INFORMATION_4', 'Nous avons pris cette mesure pour votre intérêt; et nous nous excusons pour la gêne occasionnée.');
define('TEXT_INFORMATION_5', 'Veuillez contacter le gérant de la boutique pour toute question relative à cette exigence, ou pour continuer à effectuer vos achats hors ligne.');

define('BOX_INFORMATION_HEADING', 'Sécurité et confidentialité');
define('BOX_INFORMATION', 'Nous validons automatiquement l\'ID de session SSL généré par votre navigateur à chaque demande de page sécurisée faite sur ce serveur.<br /><br />Cette validation permet de nous assurer que c\'est bien vous qui naviguez sur ce site avec votre compte et non quelqu\'un d\'autre.');
?>