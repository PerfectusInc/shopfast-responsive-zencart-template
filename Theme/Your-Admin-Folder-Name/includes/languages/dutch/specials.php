<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Aanbiedingen');

define('TABLE_HEADING_PRODUCTS', 'Artikelen');
define('TABLE_HEADING_PRODUCTS_MODEL','Model');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Prijs');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Percentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Startdatum');
define('TABLE_HEADING_EXPIRES_DATE','Vervaldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_SPECIALS_PRODUCT', 'Artikel:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Aanbiedingsprijs:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Vervaldatum:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Startdatum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Opmerkingen bij het maken van aanbiedingen:</b><ul><li>Het invullen van een percentage als aanbiedingskorting is toegestaan. Voorbeeld: <b>20%</b> geeft 20% korting op normale prijs</li><li>Bij het invoeren van een nieuwe prijs moet altijd een punt (\'.\') als decimaal teken worden ingevoerd. Voorbeeld: <b>49.99</b></li><li>Door de vervaldatum van de aanbieding niet in te vullen blijft deze net zolang doorlopen totdat deze <strong><u>handmatig</u></strong> wordt verwijderd of stopgezet.</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_INFO_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_INFO_NEW_PRICE', 'Nieuwe prijs:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originele prijs:');
define('TEXT_INFO_DISPLAY_PRICE', 'Toon prijs:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Startdatum:');
define('TEXT_INFO_EXPIRES_DATE', 'Vervaldatum:');
define('TEXT_INFO_STATUS_CHANGE', 'Laatste wijziging status:');
define('TEXT_IMAGE_NONEXISTENT', 'Afbeelding komt niet voor');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Verwijder aanbieding');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze aanbieding wilt verwijderen?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Uitgevoerd: Vooraf-toevoeging van de aanbieding ... wijzig aub de prijs en data ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Waarschuwing: Geen artikelcode ingevuld ... niets is toegevoegd ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Waarschuwing: artikelcode bestaat al als aanbieding ... niets is toegevoegd ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Waarschuwing: artikelcode is niet correct ... niets is toegevoegd ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Handmatig toevoegen nieuwe aanbieding');
define('TEXT_INFO_PRE_ADD_INTRO', 'Bij uitgebreide databases, kunt u handmatig een aanbieding toevoegen aan de hand van de artikelcode<br /><br />Dit kunt u het beste doen als het lang duurt voordat deze pagina verschijnt en als er veel artikelen zijn om uit te kiezen in de dropdown-lijst.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Voer de artikelcode in voor de vooraf-toevoeging: ');
define('TEXT_INFO_MANUAL', 'Handmatig in te voeren Artikelcode als aanbieding');
?>