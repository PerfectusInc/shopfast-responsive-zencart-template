<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @translators: cyaneo/hugo13/wflohr/maleborg/webchills	http://www.zen-cart-pro.at
 * @version $Id: time_out.php 628 2013-04-13 12:05:14Z webchills $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $
 */

define('NAVBAR_TITLE','Anmeldezeit überschritten');
define('HEADING_TITLE','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups! Ihre Session ist abgelaufen.');
define('HEADING_TITLE_LOGGED_IN', 'Entschuldigen Sie bitte, aber Sie dürfen diese Tätigkeit nicht ausführen. ');
define('TEXT_INFORMATION','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Es tut uns leid, aber aus Sicherheitsgründen mussten wir Ihre Verbindung unterbrechen,
um Unbefugten nicht die Möglichkeit zu bieten, an Ihre Zugangsdaten zu gelangen.
  <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Anmeldung</a>
  Ihr Warenkorb wird wiederhergestellt'.
  (DOWNLOAD_ENABLED == 'true' ? ', Sie hatten Download-Artikel und möchte diese(n) erhalten' : '') . ',
  Gehen Sie bitte zu <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mein Konto</a> um Ihre Bestellung anzusehen.');
define('TEXT_INFORMATION_LOGGED_IN', 'Sie sind bei Ihrem Konto angemeldet und können nun weiter einkaufen. Wählen Sie einen Menüpunkt aus.');
define('HEADING_RETURNING_CUSTOMER', 'Anmelden');
define('TEXT_PASSWORD_FORGOTTEN', 'Passwort vergessen?');