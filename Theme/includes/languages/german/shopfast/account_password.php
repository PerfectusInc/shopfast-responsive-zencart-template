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
// $Id: account_password.php 293 2008-05-28 21:10:40Z maleborg $
//

define('NAVBAR_TITLE_1','Mein Konto');
define('NAVBAR_TITLE_2','Mein Passwort ändern');

define('HEADING_TITLE','Mein Passwort');

define('MY_PASSWORD_TITLE','Mein Passwort');

define('SUCCESS_PASSWORD_UPDATED','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ihr Passwort wurde erfolgreich geändert.');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ihr eingegebenes Passwort stimmt nicht mit dem Passwort in unserer Datenbank überein. Versuchen Sie es bitte noch einmal.');
