<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Admin paginaregistratie');
define('TEXT_PAGE_KEY', 'Paginasleutel');
define('TEXT_LANGUAGE_KEY', 'Paginanaam');
define('TEXT_MAIN_PAGE', 'Paginabestandsnaam');
define('TEXT_PAGE_PARAMS', 'Paginaparameters');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', 'Weergave op het menu?');
define('TEXT_SORT_ORDER', 'Sorteervolgorde');

define('TEXT_EXAMPLE_PAGE_KEY', '(Bijv. mijnModPaginaNaam)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(Bijv. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(Bijv. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(Bijv. optie=1 of, meer gebruikelijk, leeglaten)');
define('TEXT_SELECT_MENU', 'Selecteer Menu');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Paginasleutel niet ingevoerd. Alle adminpagina\'s moeten een unieke paginasleutel hebben.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Pagina sleutel bestaat reeds. Pagina sleutels moeten uniek zijn.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Taalsleutel niet ingevoerd. Alle Admin paginas moeten een taalsleutel hebben die alle tekst van een menu link definieerd.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'De ingevoerde taaltoets is niet gedefinieerd. Controleer of deze correct is gespeld.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'De bestandsnaam definitie voor de pagina is niet ingevoerd.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'De ingevoerde bestandsnaam definitie bestaat niet. Controleer of deze correct is gespeld.');
define('ERROR_MENU_NOT_CHOSEN', 'Geen menu gekozen. U moet de nieuwe pagina met een menu associëren, ook al zal het niet worden weergegeven op dat menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Uw admin pagina is geregistreerd.');
