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
// $Id: account_password.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Mon Compte');
define('NAVBAR_TITLE_2', 'Changer de mot de passe');

define('HEADING_TITLE', 'Mon mot de passe');

define('MY_PASSWORD_TITLE', 'Mon mot de passe');

define('SUCCESS_PASSWORD_UPDATED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Votre mot de passe a été mis à jour avec succès.');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Votre mot de passe ne correspond pas à celui que nous avons d\'enregistré. Veuillez recommencer.');
?>