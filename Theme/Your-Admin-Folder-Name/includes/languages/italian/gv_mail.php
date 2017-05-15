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
//  $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Invia ' . TEXT_GV_NAME . ' ai Clienti');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Oggetto:');
define('TEXT_FROM', 'Da:');
define('TEXT_TO', 'A:');
define('TEXT_AMOUNT', 'Ammontare');
define('TEXT_MESSAGE', 'Messaggio <br />Solo Testo:');
define('TEXT_RICH_TEXT_MESSAGE', 'Messaggio <br />Rich Text:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Usalo per inviare Email singole, altrimenti usa finestra sopra</span>');
define('TEXT_SELECT_CUSTOMER', 'Seleziona Cliente');
define('TEXT_ALL_CUSTOMERS', 'Tutti i Clienti');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A tutti gli abbonati della Newsletter');

define('NOTICE_EMAIL_SENT_TO', 'Nota bene - Email inviata a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Errore: nessun Cliente selezionato.');
define('ERROR_NO_AMOUNT_SELECTED', 'Errore: nessun ammontare selezionato.');
define('ERROR_NO_SUBJECT', 'Errore: manca oggetto.');
define('ERROR_GV_AMOUNT', 'Definire Ammontare come Valore senza simboli. Esempio: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Siamo lieti di inviarti un ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', 'Il ' . TEXT_GV_NAME . ' vale ');
define('TEXT_TO_REDEEM', 'Per riscuotere questo ' . TEXT_GV_NAME . ', cliccare sul link qui sotto. Inserire anche il ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' che è');
define('TEXT_IN_CASE', ' se incontrassi difficoltà.');
define('TEXT_OR_VISIT', 'o visita ');
define('TEXT_ENTER_CODE', ' e inserisci il codice in fase di acquisto');
define('TEXT_CLICK_TO_REDEEM','Clicca qui per riscuotere');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Hai acquistato un  ' . TEXT_GV_NAME . ' dal nostro sito, ma per motivi di sicurezza l\'ammontare del  ' . TEXT_GV_NAME . ' non è stato accreditato subito. Adesso l\'ammontare del buono è stato svincolato.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Il valore del  ' . TEXT_GV_NAME . ' era %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Ora puoi accedere al nostro sito e inviare l\'ammontare del  ' . TEXT_GV_NAME . ' alla persona che desideri.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>