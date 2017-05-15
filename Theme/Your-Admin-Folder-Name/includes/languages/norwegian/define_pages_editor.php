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
// $Id: define_pages_editor.php 107 2012-04-15 12:04:10Z syntaxerror.no $
//

define('HEADING_TITLE', 'Informasjonssider for: ');
define('NAVBAR_TITLE', 'Endring av informasjonssider');

define('TEXT_INFO_EDIT_PAGE', 'Velg side som skal endres:');

define('TEXT_INFO_MAIN_PAGE', 'Hovedside');

define('TEXT_INFO_SHIPPINGINFO', 'Levering og retur');
define('TEXT_INFO_PRIVACY', 'Persovern');
define('TEXT_INFO_CONDITIONS', 'Betingelser');
define('TEXT_INFO_CONTACT_US', 'Kontakt oss');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Vellykket utsjekking');

define('TEXT_INFO_PAGE_2', 'Side 2');
define('TEXT_INFO_PAGE_3', 'Side 3');
define('TEXT_INFO_PAGE_4', 'Side 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Fil eksisterer ikke: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Feil: Jeg kan ikke skrive til denne filen. Sett riktig brukerrettigheter på: %s');

define('TEXT_INFO_SELECT_FILE', 'Velg fil som skal endres..');
define('TEXT_INFO_EDITING', 'Fil som endres:');

define('TEXT_INFO_CAUTION','Merk: Du bør alltid endre på filer lokalisert i ditt gjeldende designs overstyrringsmappe.<br />Eksempel: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Husk å ta sikkerhetskopi etter at du har endret dine filer.');
