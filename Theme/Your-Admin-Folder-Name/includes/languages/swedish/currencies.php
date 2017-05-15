<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 18931 2011-06-13 15:22:34Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Valuta');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Kod');
define('TABLE_HEADING_CURRENCY_VALUE', 'V&auml;rde');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_INFO_EDIT_INTRO', 'Utf&ouml;r n&ouml;dv&auml;ndiga &auml;ndringar');
define('TEXT_INFO_CURRENCY_TITLE', 'Titel:');
define('TEXT_INFO_CURRENCY_CODE', 'Kod:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol v&auml;nster:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol h&ouml;ger:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Decimal tecken:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Tusentals tecken:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimal Placering:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Sist Uppdaterad:');
define('TEXT_INFO_CURRENCY_VALUE', 'V&auml;rde:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Exempel:');
define('TEXT_INFO_INSERT_INTRO', 'Ange en ny valuta med n&ouml;dv&auml;ndig information');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna valuta?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Ny Valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', '&Auml;ndra Valuta');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Radera Valuta');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (kr&auml;ver en manuell uppdatering av &ouml;vriga valutor)');
define('TEXT_INFO_CURRENCY_UPDATED', 'V&auml;xelkurs %s (%s) &auml;r uppdaterad fr&aring;n %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'FEL: Den f&ouml;rvalda valutan kan inte raderas. Ange en annan valuta som f&ouml;rvald, och f&ouml;rs&ouml;k igen.');
define('ERROR_CURRENCY_INVALID', 'FEL: V&auml;xelkursen f&ouml;r %s (%s) har inte uppdaterats fr&aring;n %s. &Auml;r detta en korrekt valuta kod?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Varning: Den prim&auml;ra v&auml;xelkurs servern (%s) misslyckades f&ouml;r %s (%s) - Prova den sekund&auml;ra servern.');
define('ERROR_INVALID_CURRENCY_ENTRY', 'FEL: informationen var inte fullst&auml;ndig, och har inte sparats. Du m&aring;ste ange en valuta kod och namn.');
