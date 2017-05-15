<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 18931 2011-06-13 15:22:34Z drbyte $
 */

define('HEADING_TITLE', 'Valuta');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Code');
define('TABLE_HEADING_CURRENCY_VALUE', 'Waarde');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Maak de noodzakelijke wijziging(en)');
define('TEXT_INFO_CURRENCY_TITLE', 'Naam:');
define('TEXT_INFO_CURRENCY_CODE', 'Code:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Valutasymbool links:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Valutasymbool rechts:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Notatie decimaal (. of ,):');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Notatie duizendtal (. of ,):');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Aantal plaatsen achter de komma:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Datum laatste wijziging:');
define('TEXT_INFO_CURRENCY_VALUE', 'Waarde:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Voorbeeld:');
define('TEXT_INFO_INSERT_INTRO', 'Vul de nieuwe valuta in met alle gerelateerde gegevens');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze valuta wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nieuwe valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Wijzig valuta');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Verwijder valuta');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (wisselkoers moet handmatig aangepast worden)');
define('TEXT_INFO_CURRENCY_UPDATED', 'De wisselkoers voor %s (%s) is met succes aangepast via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Foutmelding: De valuta die is ingesteld als standaard kan niet worden verwijderd. Kies eerst een andere valuta als standaard en probeer het dan nogmaals.');
define('ERROR_CURRENCY_INVALID', 'Foutmelding: De wisselkoers voor %s (%s) is niet aangepast via %s. Klopt de valuta code?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Waarschuwing: De primaire server voor wisselkoersen (%s) is niet bereikt voor %s (%s) - Probeer de secondaire server.');
define('ERROR_INVALID_CURRENCY_ENTRY', 'ERROR: De informatie die u heeft verzonden was onvolledig, en is nog niet opgeslagen. U moet een valuta code en een naam opgeven.');
