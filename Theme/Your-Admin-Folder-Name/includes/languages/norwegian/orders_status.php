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
//  $Id: orders_status.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', 'Ordrestatus');

define('TABLE_HEADING_ORDERS_STATUS', 'Ordrestatus');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_INFO_EDIT_INTRO', 'Gjør nødvendige endringer');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Ordrestatus:');
define('TEXT_INFO_INSERT_INTRO', 'Skriv inn ny ordrestatus med relaterte opplysninger');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne ordrestatusen?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Ny ordrestatus');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Endre ordrestatus');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Slett ordrestatus');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Feil: Standard ordrestatus kan ikke bli fjernet, angi en annen ordrestatus som standard og prøv igjen.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Feil: Denne ordrestatusen blir brukt i ordre(r).');
define('ERROR_STATUS_USED_IN_HISTORY', 'Feil: Denne ordrestatusen blir brukt i ordrestatus historiken.');