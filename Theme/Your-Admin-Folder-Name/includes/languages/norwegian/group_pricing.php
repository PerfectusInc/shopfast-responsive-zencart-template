<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
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
//  $Id: group_pricing.php 94 2012-02-16 23:24:23Z syntaxerror.no $
//

define('HEADING_TITLE', 'Gruppepriser');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Gruppenavn');
define('TABLE_HEADING_GROUP_AMOUNT', 'Rabatt %');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Ny prisgruppe');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Modifiser prisgruppe');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Slett prisgruppe');

define('TEXT_NEW_INTRO', 'Fyll inn følgende informasjon for ny gruppe');
define('TEXT_EDIT_INTRO', 'Gjør nødvendige endringer');
define('TEXT_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne gruppen?');
define('TEXT_DELETE_PRICING_GROUP', 'Slett gruppe');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>Advarsel:</b> Det finnes %s kunder som fortsatt er lenket til denne kategorien!');

define('TEXT_GROUP_PRICING_NAME', 'Gruppenavn: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Rabattprossent: ');
define('TEXT_DATE_ADDED', 'Lagt til:');
define('TEXT_LAST_MODIFIED', 'Sist endret:');
define('TEXT_CUSTOMERS', 'Kunder i gruppen:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','Feil: Kunder finnes i den gruppen. Bekreft om du vil fjerne alle medlemmer fra gruppen og så slette den.');
define('ERROR_MODULE_NOT_CONFIGURED','Merk: Du har definert gruppepriser, men du har ikke aktivert ordretotalmodulen for gruppeprising.<br />Gå til Moduler->Ordretotal->Medlemsrabatt (ot_group_pricing) for å installere og konfigurere modulen.');

