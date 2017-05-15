<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Betalingsmoduler');
define('HEADING_TITLE_MODULES_SHIPPING', 'Leveringsmoduler');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Ordretotalmoduler');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Produkttypemoduler');

define('TABLE_HEADING_MODULES', 'Moduler');
define('TABLE_HEADING_SORT_ORDER', 'Sortering');
define('TABLE_HEADING_ORDERS_STATUS','Ordre status');
define('TABLE_HEADING_ACTION', 'Valg');

define('TEXT_MODULE_DIRECTORY', 'Modulmappe:');
define('WARNING_MODULES_SORT_ORDER','Advarsel: Du har lik sorteringsrekkefølge på noen moduler. Dette vil kunne resultere i utregningsfeil, du bør derfor korriger dette.');
define('ERROR_MODULE_FILE_NOT_FOUND', 'FEIL: Modul ikke lastet på grunn av manglende språkfil: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'VARSEL: Instillinger for admin har blitt endret i din butikk.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Dette er en automatisk e-postutsendelse fra din nettbutikk, for å varsle deg om en endring som har blitt gjort i dine administrative instillinger.' . "\n\n" . 'MERK: Instillinger har blitt ENDRET for [%s]-modulen, av adminsitratorbrukeren %s.' . "\n\n" . 'Om du ikke kjenner til hvorfor disse endringene har blitt gjort er det anbefalt at du sjekker opp dette så snart som mulig.' . "\n\n" . 'Om du allerede kjenner til disse endringene kan du ignorere denne automatiske e-postutsendelsen.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Dette er en automatisk e-postutsendelse fra din nettbutikk, for å varsle deg om en endring som har blitt gjort i dine administrative instillinger.' . "\n\n" . 'MERK: Instillinger har blitt endret. [%s]-modulen har blitt INSTALLERT av administratorbrukeren %s.' . "\n\n" . 'Om du ikke kjenner til hvorfor disse endringene har blitt gjort er det anbefalt at du sjekker opp dette så snart som mulig.' . "\n\n" . 'Om du allerede kjenner til disse endringene kan du ignorere denne automatiske e-postutsendelsen.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Dette er en automatisk e-postutsendelse fra din nettbutikk, for å varsle deg om en endring som har blitt gjort i dine administrative instillinger.' . "\n\n" . 'MERK: Instillinger har blitt endret. [%s]-modulen har blitt FJERNET av adminsitratorbrukeren %s.' . "\n\n" . 'Om du ikke kjenner til hvorfor disse endringene har blitt gjort er det anbefalt at du sjekker opp dette så snart som mulig.' . "\n\n" . 'Om du allerede kjenner til disse endringene kan du ignorere denne automatiske e-postutsendelsen.');
define('TEXT_DELETE_INTRO', 'Er du sikker på at du vil fjerne denne modulen?');
define('TEXT_WARNING_SSL_EDIT', 'VARSEL: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Av sikkerhetsgrunner er redigering av denne modulen låst inntill adminsitrasjonen blir satt opp med SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'VARSEL: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Av sikkerhetsgrunner er installasjon av denne modulen låst inntill adminsitrasjonen blir satt opp med SSL</a>.');
