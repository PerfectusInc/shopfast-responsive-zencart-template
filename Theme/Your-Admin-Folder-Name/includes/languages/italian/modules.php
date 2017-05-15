<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2012-01-12 15:51:25Z LaVale $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Moduli Pagamento');
define('HEADING_TITLE_MODULES_SHIPPING', 'Moduli Spedizione');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Moduli Totale Ordine');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Moduli Tipo Prodotto');

define('TABLE_HEADING_MODULES', 'Moduli');
define('TABLE_HEADING_SORT_ORDER', 'Ordina');
define('TABLE_HEADING_ORDERS_STATUS','Stato Ordini');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_MODULE_DIRECTORY', 'Cartella Moduli:');
define('WARNING_MODULES_SORT_ORDER','ATTENZIONE: SONO PRESENTI DUPLICATI NELL\'ORDINAMENTO. QUESTO CAUSA DEGLI ERRORI<br />CORREGGI SUBITO!');

define('ERROR_MODULE_FILE_NOT_FOUND', 'ERRORE: modulo non caricato perch&egrave; manca il file di lingua: ');

define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ATTENZIONE: Rilevate modifiche nel settaggio in amministrazione.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Questa è un\'email automatica inviata dal tuo negozio Zen Cart quando rilevata almeno una modifica delle impostazioni amministrative. ' . "\n\n" . 'NOTA del settaggio modificato: il modulo [%s] è stato MODIFICATO dall\'amministratore %s.' . "\n\n" . 'Se questa modifica NON è stata decisa da te, è allora consigliato verificare immediatamente tali impostazioni.' . "\n\n" . 'Se questi cambiamenti sono previsti puoi ignorare questa email inviata in automatico.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Questa è un\'email automatica inviata dal tuo negozio Zen Cart quando rilevata almeno una modifica delle impostazioni amministrative. ' . "\n\n" . 'NOTA del settaggio modificato: il modulo [%s] è stato INSTALLATO dall\'amministratore %s.' . "\n\n" . 'Se questa modifica NON è stata decisa da te, è allora consigliato verificare immediatamente tali impostazioni.' . "\n\n" . 'Se questi cambiamenti sono previsti puoi ignorare questa email inviata in automatico.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Questa è un\'email automatica inviata dal tuo negozio Zen Cart quando rilevata almeno una modifica delle impostazioni amministrative. ' . "\n\n" . 'NOTA del settaggio modificato: il modulo [%s] è stato RIMOSSO dall\'amministratore %s.' . "\n\n" . 'Se questa modifica NON è stata decisa da te, è allora consigliato verificare immediatamente tali impostazioni.' . "\n\n" . 'Se questi cambiamenti sono previsti puoi ignorare questa email inviata in automatico.');
define('TEXT_DELETE_INTRO', 'Sicuro di voler rimuovere questo modulo?');
define('TEXT_WARNING_SSL_EDIT', 'ATTENZIONE: <a href="http://www.zen-cart.it/faq/configurazione/85-come-abilitare-ssl-secure-socket-layer-dopo-aver-installato-zen-cart
" target="_blank">Per motivi di sicurezza la modifica di questo modulo &egrave; disabilitata fino a quando il pannello di amministrazione verr&agrave; configurato per SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ATTENZIONE: <a href="http://www.zen-cart.it/faq/configurazione/85-come-abilitare-ssl-secure-socket-layer-dopo-aver-installato-zen-cart
" target="_blank">Per motivi di sicurezza l\'installazione di questo modulo &egrave; disabilitata fino a quando il pannello di amministrazione verr&agrave; configurato per SSL</a>.');