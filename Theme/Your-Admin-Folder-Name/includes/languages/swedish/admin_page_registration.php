<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */
 /* Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('HEADING_TITLE', 'Admin Sides Registrering');
define('TEXT_PAGE_KEY', 'Sid Nyckel');
define('TEXT_LANGUAGE_KEY', 'Sid namn');
define('TEXT_MAIN_PAGE', 'Sidans Filenamn');
define('TEXT_PAGE_PARAMS', 'Sidans Parametrar');
define('TEXT_MENU_KEY', 'Meny');
define('TEXT_DISPLAY_ON_MENU', 'Visa i menyn?');
define('TEXT_SORT_ORDER', 'Sorteringsordning');

define('TEXT_EXAMPLE_PAGE_KEY', '(ex. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(ex. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(ex. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(ex. option=1 eller, vanligast, l&auml;mna tom)');
define('TEXT_SELECT_MENU', 'V&auml;lj Meny');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Sid nyckel angavs inte. Alla admin sidor m&aring;st ha en unik sid nyckel.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Sid nyckeln finns redan. Sid nyckeln m&aring;ste vara unik.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Spr&aring;k nyckel angavs inte. Alla admin sidor m&aring;ste ha en spr&aring;k nyckel som ger l&auml;nkens definition p&aring; en meny l&auml;nk.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Spr&aring;k nyckeln som angavs har inte definierats. Kontrollera att den skrivits korrekt.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'filenamn definition f&ouml;r sidan har inte angets.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Filenamn definition angiven finns inte. kontrollera att den skrivits r&auml;tt.');
define('ERROR_MENU_NOT_CHOSEN', 'Meny har inte valts. Du m&aring;ste associera sidan med en meny, &auml;ven om den inte skall visas i den menyn.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'DIn admin sida har registrerats.');
