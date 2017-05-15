<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 5745 2007-02-01 00:52:06Z sandrocarniel $
 */

define('NAVBAR_TITLE', 'Crea un account');

define('HEADING_TITLE', 'Info sul tuo Account');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">NOTA:</strong> Se hai gi&agrave; un account presso di noi accedi dalla <a href="%s">pagina di login</a>.');

// greeting salutation
define('EMAIL_SUBJECT', 'Conferma avvenuta iscrizione a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Egregio Signor %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Gentile Signora %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Gentile %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Siamo lieti di accoglierti fra gli amici di <strong>' . STORE_NAME . '</strong>.' . "\n\n");
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Complimenti! Per fare in modo che la tua prossima visita al nostro negozio online sia ancora più utile, abbiamo emesso un Buono Sconto a tuo favore di cui ora ti illustriamo i particolari!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Se vuoi utilizzare il Buono inserisci il ' . TEXT_GV_REDEEM . ' codice durante la fase di acquisto:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Buono valido da %s al %s</p>');


define('EMAIL_GV_INCENTIVE_HEADER', 'Per ringraziarti della visita ti abbiamo inviato un ' . TEXT_GV_NAME . ' di %s!' . "\n");
define('EMAIL_GV_REDEEM', 'Riscuoti il ' . TEXT_GV_NAME . ' durante le fasi di acquisto, dopo aver scelto articoli del negozio. ');
define('EMAIL_GV_LINK', ' Oppure, lo puoi riscattare fin da subito seguendo questo link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Una volta aggiunto il ' . TEXT_GV_NAME . ' al tuo account, potrai usare il ' . TEXT_GV_NAME . ' per te stesso, oppure potrai inviarlo ad uno dei tuoi amici!' . "\n\n");

define('EMAIL_TEXT', 'Ora che disponi del tuo account puoi avvalerti dei <strong>vari servizi</strong> studiati per i nostri clienti. Segnaliamo in particolare:' . "\n\n" . '<li><b>Carrello permanente</b> - Gli articoli che inserirai nel tuo carrello virtuale vi rimarranno fin a quando deciderai di eliminarli o di acquistarli.' . "\n\n" . '<li><b>Rubrica indirizzi</b> - Grazie a questo servizio, possiamo spedire gli articoli da te acquistati a indirizzi diversi dal tuo! Un modo ideale per fare regali alle persone care senza muoverti da casa.' . "\n\n" . '<li><b>Cronologia ordini</b> - Un registro chiaro e ordinato degli acquisti effettuati presso di noi.' . "\n\n" . '<li><b>Recensioni</b> - Scambia le tue impressioni sui vari prodotti con gli altri nostri Clienti.' . "\n\n");
define('EMAIL_CONTACT', 'Per qualsiasi informazione riguardante i nostri servizi online, invia con fiducia una e-mail al nostro responsabile: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE', "\n" . 'Con i migliori saluti,' . "\n\n" . STORE_OWNER . "\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER ."</a>\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Questo indirizzo e-mail ci è stato fornito da uno dei nostri Clienti. Se però non intendi creare un account, o se questa e-mail ti è giunta per sbaglio, ti preghiamo di segnalarlo senza timore, inviando una e-mail a %s ');

