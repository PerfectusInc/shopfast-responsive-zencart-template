<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE', 'Tidsavbrudd');
define('HEADING_TITLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Tidsavbrudd');
define('HEADING_TITLE_LOGGED_IN', 'Beklager, men du har ikke lov til å utføre den forespurte handlingen.');
define('TEXT_INFORMATION', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>For din egen sikkerhet har du blitt automatisk avlogget pga. lang tid uten respons, enten mens du var i kassen, eller fordi du var på en sikker side ( <acronym title="Secure Sockets Layer">SSL</acronym> - sikker kommunikasjon på internett - Sider som er beskyttet av <acronym title="Secure Sockets Layer">SSL</acronym> kjennetegnes ved at adressen deres starter med HTTP<em>S</em>:// i stedet for HTTP:// ).<br /><br />Dersom du var i ferd med å legge inn bestilling, vennligst <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">logg inn</a> og din handlekurv vil bli gjenopprettet. Deretter kan du gå til kassen og avslutte handelen.<br /><br /> Dersom du hadde lagt inn en bestilling og ønsker å se på den igjen' . (DOWNLOAD_ENABLED == 'true' ? ', eller du var i ferd med å laste ned et produkt og ønsker å gjenoppta nedlastingen' : '') . ', vennligst gå til \'<a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Min konto</a>\' for å se din ordre.');

define('TEXT_INFORMATION_LOGGED_IN', 'Du er fortsatt innlogget og kan fortsette å handle, velg et mål fra en meny.');

define('HEADING_RETURNING_CUSTOMER', 'Innlogging');
define('TEXT_PASSWORD_FORGOTTEN', 'Glemt ditt passord?');
