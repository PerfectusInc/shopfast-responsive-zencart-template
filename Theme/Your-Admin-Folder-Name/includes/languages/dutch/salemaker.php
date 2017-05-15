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
//  $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
//

define('HEADING_TITLE', 'Verkoopbevorderingstool');
define('TABLE_HEADING_SALE_NAME', 'SALE (naam)');
define('TABLE_HEADING_SALE_DEDUCTION', 'Korting (type)');
define('TABLE_HEADING_SALE_DATE_START', 'Startdatum');
define('TABLE_HEADING_SALE_DATE_END', 'Vervaldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');
define('TEXT_SALEMAKER_NAME', 'SALE (naam):');
define('TEXT_SALEMAKER_DEDUCTION', 'Korting:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Prijsselectie:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tot&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Als een artikel ook in de aanbieding is:');
define('TEXT_SALEMAKER_DATE_START', 'Startdatum:');
define('TEXT_SALEMAKER_DATE_END', 'Vervaldatum:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Of</b> vink de categorieën afzonderlijk aan waar deze aanbieding voor geldt:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Klik hier gebruikstips van de verkoopbevorderingstool </b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Meer informatie)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'per direct');
define('TEXT_SALEMAKER_NEVER', 'Nooit');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Vink dit aan als deze SALE geldt voor het <b>gehele assortiment</b>:');
define('TEXT_SALEMAKER_TOP', 'Gehele assortiment');
define('TEXT_INFO_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_INFO_DATE_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Laatste wijziging status:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Voorwaarden SALE :');
define('TEXT_INFO_DEDUCTION', 'Korting:');
define('TEXT_INFO_PRICERANGE_FROM', 'Prijsselectie:');
define('TEXT_INFO_PRICERANGE_TO', ' tot ');
define('TEXT_INFO_DATE_START', 'Startdatum:');
define('TEXT_INFO_DATE_END', 'Vervaldatum:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Negeer aanbieding - pas SALE toe op normale artikelprijs en deze vervangt de aanbieding');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Negeer SALE - SALE niet van toepassing als er al een lopende aanbieding is voor het artikel');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Pas de SALE toe op de aanbiedingsprijs en indien niet mogelijk kan dit op de normale artikelprijs');
// moved to dutch.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Verminder bedrag');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Percentage');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Nieuw Prijs');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Kopieer bestaande UITVERKOOP ');
define('TEXT_INFO_COPY_INTRO', 'Vul een naam in voor de kopie van<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Verwijder UITVERKOOP');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze UITVERKOOP wilt verwijderen?');
define('TEXT_MORE_INFO', '(Meer Info)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Waarschuwing : %s uitverkoop zijn reeds incluis in deze categorie');
?>