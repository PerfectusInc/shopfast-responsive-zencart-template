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
define('TEXT_PAGE_KEY', 'Siden�kkel');
define('TEXT_LANGUAGE_KEY', 'Sidenavn');
define('TEXT_MAIN_PAGE', 'Sidens filnavn');
define('TEXT_PAGE_PARAMS', 'Sideparametre');
define('TEXT_MENU_KEY', 'Meny');
define('TEXT_DISPLAY_ON_MENU', 'Vis p� menyen?');
define('TEXT_SORT_ORDER', 'Sortering');

define('TEXT_EXAMPLE_PAGE_KEY', '(f.eks. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(f.eks. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(f.eks. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(f.eks. option=1 eller som mer vanlig, la st� blankt)');
define('TEXT_SELECT_MENU', 'Velg meny');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Siden�kkel mangler. Alle administratorsider m� ha en unik siden�kkel.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Siden eksisterer allerede. Siden m� v�re unik.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Spr�kn�kkel mangler. Alle administratorsider m� ha en spr�kn�kkel som definerer teksten p� en menylenke.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Spr�kn�kkelen som er angitt har ikke blitt definert. P�se at den er riktig fylt inn.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Filnavndefinisjonen for siden mangler.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Angitt filnavndefinisjon eksisterer ikke. P�se at den er riktig fylt inn.');
define('ERROR_MENU_NOT_CHOSEN', 'Meny er ikke valgt. Du m� assosiere den nye siden med en meny, selv om den ikke vil bli vist i den menyen.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Din administratorside har blitt registrert.');
