<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: store_manager.php 98 2012-03-01 15:19:32Z syntaxerror.no $
 */

  define('HEADING_TITLE', 'Butikkbehandling');
  define('TABLE_CONFIGURATION_TABLE', 'Slå opp KONSTANT-definisjoner');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>Vellykket</strong> oppdatering av variantsortering.');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Vellykket</strong> oppdatering av produktprisers sorteringsverdier.');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Vellykket</strong> tilbakestilling av viste produkter til 0.');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Vellykket</strong> tilbakestilling av bestilte produkter til 0.');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Vellykket</strong> tilbakestilling av alle hovedkategorier for lenkede produkter.');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Vellykket</strong> oppdatering av treffteller til: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Feil:</strong> Ingen passende konfigurasjonsnøkler ble funnet.');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Feil:</strong> Ingen konfigurasjonsnøkkel eller tekst ble fylt inn for søket. Søk ble derfor stoppet');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Oppdater treffteller til ny verdi:</strong> ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Oppdater alle produkters prissortering</strong><br />- for bruk ved sortering etter viste priser: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Tilbakestill mest viste produkter</strong><br />Tilbakestill telling av mest viste produkter til 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Tilbakestill mest kjøpte produkter</strong><br />Tilbakestill telling av mest kjøpte produkter til 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Tilbakestill hovedkategoriens id på alle produkter</strong><br />- for bruk på lenkede produkter og priser: ');

  define('TEXT_NEW_ORDERS_ID', 'Neste ordre skal ha ordrenummer:');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Angi ordrenummer for neste ordre</strong><br />MERK: Du kan ikke angi et ordrenummer som er lavere enn eksisterende.');
  define('TEXT_MSG_NEXT_ORDER', 'Neste ordrenummer har blitt angitt til %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Ut fra ekisterende ordredata vil neste ordrenummer være: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'På grunn av begrensninger i database kan du ikke angi et ordrenummer som er høyere enn 2000000000. Du må velge en lavere verdi.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Slå opp KONSTANT- eller språkfildefinisjon</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Nøkkel eller navn:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>MERK: KONSTANTER er skrevet med store bokstaver.</strong> Språkfiloppslag kan være et alternativ søk når ingenting blir funnet i databasetabellene.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Oppslag i språkfildefinisjoner</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Søketekst:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>MERK:</strong> Språkfiloppslag kan være med små eller store bokstaver');

  define('TABLE_TITLE_KEY', '<strong>Nøkkel:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Tittel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beskrivelse:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Gruppe:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Verdi:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Språkfiloppsalg:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Ingen');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alle språkfiler for ' . strtoupper($_SESSION['language']) . ' - Katalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alle hovedspråkfiler - Katalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alle valgte språkfiler - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alle hovedspråkfiler - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alle valgte språkfiler - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alle valgte språkfiler - Katalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Ingen redigering tilgjengelig');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' eller, SKJULT');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimer database</strong> for å fjerne bortkastet plass etter slettede oppføringer.<br />Kan kjøres frivillig hver måned, eller hver uke, på en travel database.<br />(Best å kjøre i stille perioder.)');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Optimalisering av databasetabeller kjøres. Dette kan ta noen minutter. Vennligst vent. Foregående meny vil dukke opp når kjøringen er fullført ...');  
define('SUCCESS_DB_OPTIMIZE', 'Databaseoptimalisering - Antall tabeller som ble behandlet: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Rydd opp i loggfiler for feilsøking</strong><br /><strong>ADVARSEL: </strong>Zen Cart logger PHP-feilmeldinger for feilsøking, mange betalingsmoduler kan også være satt til å logge feilsøkingsdata, for diagnosering av kommunikasjonsproblemer.<br />Ved å bekrefte dette oppryddingsvalget vil <b>ALLE</b> feilogger assosiert med PHP-feil, PayPal, Authorize.net, og Linkpoint/FirstData-moduler bli <b>PERMANENT</b> slettet.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Loggfiler for feilsøking ble slettet.');
