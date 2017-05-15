<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 98 2012-03-01 15:19:32Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Sideregistrering - Administratorsider');
define('TEXT_PAGE_KEY', 'Sidenøkkel');
define('TEXT_LANGUAGE_KEY', 'Sidenavn');
define('TEXT_MAIN_PAGE', 'Sidens filnavn');
define('TEXT_PAGE_PARAMS', 'Sideparametre');
define('TEXT_MENU_KEY', 'Meny');
define('TEXT_DISPLAY_ON_MENU', 'Vis på menyen?');
define('TEXT_SORT_ORDER', 'Sortering');

define('TEXT_EXAMPLE_PAGE_KEY', '(f.eks. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(f.eks. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(f.eks. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(f.eks. option=1 eller som mer vanlig, la stå blankt)');
define('TEXT_SELECT_MENU', 'Velg meny');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Sidenøkkel mangler. Alle administratorsider må ha en unik sidenøkkel.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Siden eksisterer allerede. Siden må være unik.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Språknøkkel mangler. Alle administratorsider må ha en språknøkkel som definerer teksten på en menylenke.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Språknøkkelen som er angitt har ikke blitt definert. Påse at den er riktig fylt inn.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Filnavndefinisjonen for siden mangler.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Angitt filnavndefinisjon eksisterer ikke. Påse at den er riktig fylt inn.');
define('ERROR_MENU_NOT_CHOSEN', 'Meny er ikke valgt. Du må assosiere den nye siden med en meny, selv om den ikke vil bli vist i den menyen.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Din administratorside har blitt registrert.');
