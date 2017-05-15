<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Valutaer');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Kode');
define('TABLE_HEADING_CURRENCY_VALUE', 'Verdi');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_INFO_EDIT_INTRO', 'Gjør nødvendige endringer');
define('TEXT_INFO_CURRENCY_TITLE', 'Tittel:');
define('TEXT_INFO_CURRENCY_CODE', 'Kode:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol venstre:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol høyre:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Desimalpunkt:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Tusenpunkt:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Desimalplasser :');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Sist oppdatert:');
define('TEXT_INFO_CURRENCY_VALUE', 'Verdi:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Eksempelvisning:');
define('TEXT_INFO_INSERT_INTRO', 'Fyll inn ny valuta med relatert informasjon');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne valutaen ?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Ny valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Rediger valuta');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Slett valuta');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (krever en manuell oppdatering av valutaverdier)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Vekslingskurs for %s (%s) ble vellykket oppdatert via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Feil: Standard valuta kan ikke fjernes. Angi en annen valuta som standard og prøv igjen.');
define('ERROR_CURRENCY_INVALID', 'Feil: Vekslingskurs for %s (%s) ble ikke oppdatert via %s. Er valutakoden riktig?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Advarsel: Oppdatering av vekslingskurs via primærserver (%s) mislyktes for %s (%s) - prøver sekundærserver.');
define('ERROR_INVALID_CURRENCY_ENTRY', 'FEIL: Informasjonen du la inn var mangelfull og ble ikke lagret. Du må angi en valutakode og et navn.');
