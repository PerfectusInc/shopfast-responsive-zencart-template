<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 18931 2011-06-13 15:22:34Z drbyte $
 */

define('HEADING_TITLE', 'Valute');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Codice');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valore');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_INFO_EDIT_INTRO', 'Effettua le modifiche necessarie');
define('TEXT_INFO_CURRENCY_TITLE', 'Titolo:');
define('TEXT_INFO_CURRENCY_CODE', 'Codice:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Simbolo Sinistra:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Simbolo Destra:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Punto Decimali:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Punto Migliaia:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Cifre Decimali:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Ultimo Aggiornamento:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valore:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Esempio Risultato:');
define('TEXT_INFO_INSERT_INTRO', 'Inserire la nuova valuta con i relativi dati');
define('TEXT_INFO_DELETE_INTRO', 'Davvero vuoi cancellare questa valuta?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nuova Valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Modifica Valuta');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Cancella Valuta');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (richiede aggiornamento manuale dei valori della valuta)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Il tasso di cambio per %s (%s) &egrave; stato aggiornato via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Errore: la valuta di default non pu&ograve; essere rimossa. Attribuire il default ad un\'altra valuta e riprovare.');
define('ERROR_CURRENCY_INVALID', 'Errore: il tasso di cambio per %s (%s) NON &egrave; stato aggiornato via %s. Il codice valuta &egrave; valido?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Attenzione: Il primo server di tasso cambio (%s) non risponde per %s (%s) - prova il secondo server  di tasso cambio.'); 
define('ERROR_INVALID_CURRENCY_ENTRY', 'Errore: Le informazioni fornite sono insufficienti e non sono state salvate. &Egrave; necessario specificare un codice valuta ed un nome.');
