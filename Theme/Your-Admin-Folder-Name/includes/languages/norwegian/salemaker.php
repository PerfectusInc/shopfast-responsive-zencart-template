<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', 'Salgskampanjer');
define('TABLE_HEADING_SALE_NAME', 'Salgsnavn');
define('TABLE_HEADING_SALE_DEDUCTION', 'Avslag');
define('TABLE_HEADING_SALE_DATE_START', 'Starter');
define('TABLE_HEADING_SALE_DATE_END', 'Avsluttes');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Valg');
define('TEXT_SALEMAKER_NAME', 'Salgsnavn:');
define('TEXT_SALEMAKER_DEDUCTION', 'Avslag:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Produktets prisområde:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Til&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Om et produkt er på tilbud:');
define('TEXT_SALEMAKER_DATE_START', 'Starter:');
define('TEXT_SALEMAKER_DATE_END', 'Avsluttes:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Eller</b> merk kategoriene som skal tilknyttes salgskampanjen:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Klikk her for brukertips for salgskamanjer.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Mer info)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Med det samme');
define('TEXT_SALEMAKER_NEVER', 'Aldri');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Merk denne boksen om du ønsker at salgskampanjen skal tilknyttes <b>alle produkter</b>:');
define('TEXT_SALEMAKER_TOP', 'Alle produkter');
define('TEXT_INFO_DATE_ADDED', 'Lagt til:');
define('TEXT_INFO_DATE_MODIFIED', 'Sist endret:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Status sist endret:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Tilbudsbetingelser:');
define('TEXT_INFO_DEDUCTION', 'Avslag:');
define('TEXT_INFO_PRICERANGE_FROM', 'Prisområde:');
define('TEXT_INFO_PRICERANGE_TO', ' til ');
define('TEXT_INFO_DATE_START', 'Starter:');
define('TEXT_INFO_DATE_END', 'Avsluttes:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ignorer tilbudspris - Legg til produktpris og erstatt tilbud');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ignorer salgsavslag - Ingen salg legges til når tilbud eksisterer');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Legg salgsavslag til tilbudspris - Ellers legg til pris');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Avslagsbeløp');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Prosent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Ny pris');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Kopier salg');
define('TEXT_INFO_COPY_INTRO', 'Fyll inn et navn for kopien av<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Slett salg');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du vil slette salget permanent?');
define('TEXT_MORE_INFO', '(Mer informasjon)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Advarsel : %s salg er allerede inkludert i denne kategorien');