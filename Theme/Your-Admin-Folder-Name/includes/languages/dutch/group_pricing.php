<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Prijsgroep');

define('TABLE_HEADING_GROUP_ID', 'Prijsgroep ID');
define('TABLE_HEADING_GROUP_NAME', 'Naam prijsgroep');
define('TABLE_HEADING_GROUP_AMOUNT', '% korting');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nieuwe prijsgroep');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Wijzig prijsgroep');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Verwijder prijsgroep');

define('TEXT_NEW_INTRO', 'Voer de nieuwe prijsgroep in met alle relevante gegevens');
define('TEXT_EDIT_INTRO', 'Maak de noodzakelijke wijziging(en)');
define('TEXT_DELETE_INTRO', 'Weet je zeker dat je deze prijsgroep wilt verwijderen?');
define('TEXT_DELETE_PRICING_GROUP', 'Verwijder prijsgroep');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>WAARSCHUWING:</b> Er zijn nog steeds %s klanten gekoppeld aan deze categorie!');

define('TEXT_GROUP_PRICING_NAME', 'Naam prijsgroep: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Kortingspercentage: ');
define('TEXT_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_CUSTOMERS', 'Klanten in prijsgroep:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','FOUT: Klanten zijn aanwezig in deze groep. Bevestig aub. dat alle leden van deze groep verwijderd moeten worden en dat ook de groep verwijderd wordt');
define('ERROR_MODULE_NOT_CONFIGURED','Let op: prijsgroepen zijn gedefiniëerd, maar nog niet geactiveerd in de ORDER TOTAAL Module.<br />Ga naar: Admin->Modules->Order Total->Membership Discount (ot_group_pricing) en installeer/configureer de module.');

?>