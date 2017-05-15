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
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: coupon_admin.php 5758 2007-02-08 01:39:34Z Deepmax $
//

define('TOP_BAR_TITLE', 'Statistiche');
define('HEADING_TITLE', 'Buoni Sconto');
define('HEADING_TITLE_STATUS', 'Stato : ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nome Buono:');
define('TEXT_COUPON_ALL', 'Tutti i Buoni');
define('TEXT_COUPON_ACTIVE', 'Buoni Attivi');
define('TEXT_COUPON_INACTIVE', 'Buoni Inattivi');
define('TEXT_SUBJECT', 'Soggetto:');
define('TEXT_UNLIMITED', 'Illimitato');
define('TEXT_FROM', 'Da:');
define('TEXT_FREE_SHIPPING', 'Spedizione gratuita');
define('TEXT_MESSAGE', 'Messaggio:');
define('TEXT_RICH_TEXT_MESSAGE','Messaggio HTML :');
define('TEXT_SELECT_CUSTOMER', 'Seleziona Cliente');
define('TEXT_ALL_CUSTOMERS', 'Tutti i Clienti');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A tutti gli Abbonati alla Newsletter');
define('TEXT_CONFIRM_DELETE', 'Vuoi davvero cancellare questo Buono?');
define('TEXT_SEE_RESTRICT', 'Si applicano restrizioni');

define('TEXT_COUPON_ANNOUNCE','Siamo lieti di regalarti un Buono del Negozio.');

define('TEXT_TO_REDEEM', 'Puoi riscuotere questo Buono in fase di acquisto. Basta inserire il codice nel campo apposito e cliccare sul bottone di riscossione.');
define('TEXT_IN_CASE', ' qualora incontrassi una qualsiasi difficolt&agrave;. ');
define('TEXT_VOUCHER_IS', 'Il codice del Buono è ');
define('TEXT_REMEMBER', 'Non perdere il codice del Buono, conservalo in modo sicuro per poter beneficiare di questa offerta speciale.');
define('TEXT_VISIT', 'Visitaci a %s');
define('TEXT_ENTER_CODE', ' ed inserisci il codice ');

define('TEXT_COUPON_HELP_DATE', '<p><p>Il Buono è valido tra %s e %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>Il Buono &egrave; valido tra %s e %s</p></p>');

define('TABLE_HEADING_ACTION', 'Azione');

define('CUSTOMER_ID', 'ID Cliente');
define('CUSTOMER_NAME', 'Generalit&agrave; Cliente');
define('REDEEM_DATE', 'Data Riscossione');
define('IP_ADDRESS', 'Indirizzo IP');

define('TEXT_REDEMPTIONS', 'Riscossioni');
define('TEXT_REDEMPTIONS_TOTAL', 'In Totale');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Per questo Cliente');
define('TEXT_NO_FREE_SHIPPING', 'No spedizione gratuita');

define('NOTICE_EMAIL_SENT_TO', 'Nota bene -  Email inviata a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Errore: mancata selezione Cliente.');
define('ERROR_NO_SUBJECT', 'Errore: mancato inserimento soggetto.');

define('COUPON_NAME', 'Nome Buono');
//define('COUPON_VALUE', 'Valore Buono');
define('COUPON_AMOUNT', 'Ammontare Buono');
define('COUPON_CODE', 'Codice Buono');
define('COUPON_STARTDATE', 'Data Inizio');
define('COUPON_FINISHDATE', 'Data Fine');
define('COUPON_FREE_SHIP', 'Spedizione Gratuita');
define('COUPON_DESC', 'Descrizione Buono <br />(visibile al Cliente)');
define('COUPON_MIN_ORDER', 'Ordine Minimo Buono');
define('COUPON_USES_COUPON', 'Utilizzi per Buono');
define('COUPON_USES_USER', 'Utilizzi per Cliente');
define('COUPON_PRODUCTS', 'Elenco Prodotti Validi');
define('COUPON_CATEGORIES', 'Elenco Categorie Valide');
define('VOUCHER_NUMBER_USED', 'Numero Usato');
define('DATE_CREATED', 'Data Creazione');
define('DATE_MODIFIED', 'Data Modifica');
define('TEXT_HEADING_NEW_COUPON', 'Crea Nuovo Buono');
define('TEXT_NEW_INTRO', 'Inserire le seguenti informazioni in merito al nuovo Buono.<br />');
define('COUPON_ZONE_RESTRICTION', 'Limitazione per zona del Buono: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'La limitazione per zona del Buono &egrave un\'opzione.');

define('ERROR_NO_COUPON_AMOUNT', 'Inserire Ammontare Buono');
define('ERROR_NO_COUPON_NAME', 'Inserire Nome Buono ');
define('ERROR_COUPON_EXISTS', 'Esiste gi&agrave; un Buono con questo codice');


define('COUPON_NAME_HELP', 'Attribuire un nome breve al Buono.');
define('COUPON_AMOUNT_HELP', 'Il valore dello sconto garantito dal Buono, sia in termini assoluti sia in percentuale aggiungendo un % alla fine.');
define('COUPON_CODE_HELP', 'Puoi inserire un tuo codice qui, se lasci in bianco ne verr&agrave; generato uno automaticamente.');
define('COUPON_STARTDATE_HELP', 'La data dalla quale il Buono avr&agrave; validit&agrave;.');
define('COUPON_FINISHDATE_HELP', 'La data alla quale il Buono scadr&agrave;.');
define('COUPON_FREE_SHIP_HELP', 'Il Buono assicura la Spedizione Gratuita per un ordine. Nota: questo sovrascrive l\'ammontare del buono previsto ma rispetta il valore minimo impostato per l\'ordine.');
define('COUPON_DESC_HELP', 'Una descrizione del Buono ad uso del Cliente.');
define('COUPON_MIN_ORDER_HELP', 'Il valore minimo dell\'ordine affinch&egrave; il Buono sia valido.');
define('COUPON_USES_COUPON_HELP', 'Il numero massimo delle volte in cui si pu&ograve; utilizzare il Buono, lasciare in bianco se non si vuole porre limite.');
define('COUPON_USES_USER_HELP', 'Numero delle volte in cui un utente pu&ograve; utilizzare il Buono, lasciare in bianco se non si vogliono limiti.');
define('COUPON_PRODUCTS_HELP', 'Un elenco di products_id, separati da una virgola, ai quali associare il buono. Lasciare in bianco se non si vogliono limitazioni.');
define('COUPON_CATEGORIES_HELP', 'Un elenco di cpaths, separati da una virgola, da associare al buono. Lasciare in bianco se non si vogliono limitazioni.');
define('COUPON_BUTTON_PREVIEW', 'Anteprima');
define('COUPON_BUTTON_CONFIRM', 'Conferma');
define('COUPON_BUTTON_BACK', 'Indietro');

define('COUPON_ACTIVE', 'Stato');
define('COUPON_START_DATE', 'Inizio');
define('COUPON_EXPIRE_DATE', 'Termine');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Il Buono Sconto NON PU&Ograve; disattivato. Questo Buono Sconto &egrave; il Buono di Benvenuto per i nuovi iscritti.<br /><br />Modificare il Buono Sconto di Benvenuto prima di provare a rimuoverlo.');
define('SUCCESS_COUPON_DISABLED', 'Perfetto! Buono Sconto impostato come Inattivo ...');
define('TEXT_COUPON_NEW', 'Usare NUOVO Codice del Buono Sconto:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'ATTENZIONE! &Egrave; presente un Buono Duplicato ... Copia rimossa per Codice Buono: ');
define('TEXT_CONFIRM_COPY', 'Sicuri di voler Copiare questo Buono Sconto in un altro Buono Sconto?');
define('SUCCESS_COUPON_DUPLICATE', 'Perfetto! Buono Sconto duplicato ...<br /><br />Controllare il Nome del Buono e le Date ...');

?>