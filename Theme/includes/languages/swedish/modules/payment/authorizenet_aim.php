<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 18695 2011-05-04 05:24:19Z drbyte $
 */

/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Butiks Inloggning</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Test Info:<br /><b>Automatiskt godk&auml;nt kontonummer:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Notera:</b> Dessa kreditkortsnummer kommer att nekas tillg&aring;ng i livel&auml;ge, och ett godk&auml;nnande i testl&auml;ge. Eventuella framtida datum kan anv&auml;ndas f&ouml;r utg&aring;ngsdatum och alla 3 eller 4 (AMEX) siffror kan anv&auml;ndas f&ouml;r CVV-koden.<br /><br /><b>Automatiskt nekat kontonummer:</b><br /><br />Kort #: 4222222222222<br /><br />Detta kort kan anv&auml;ndas f&ouml;r tester.<br /><br />' : ''));
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klicka h&auml;r f&ouml;r att registrera ett konto</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net Kundsida</a><br /><br /><strong>Krav:</strong><br /><hr />*<strong>Authorize.net Konto</strong> (se l&auml;nk ovan f&ouml;r registrering)<br />*<strong>CURL kr&auml;vs </strong>och M&Aring;STE sammanst&auml;llts med SSL-st&ouml;d i PHP av webbhotellet<br />*<strong>Authorize.net anv&auml;ndarnamn och transaktionsnyckel</strong> tillg&auml;nglig fr&aring;n din kundsida');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'CURL funktionen hittades inte - kr&auml;vs f&ouml;r Authorize.net AIM betalningsmodul');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Kreditkort');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Kreditkorts typ:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'kort&auml;gare:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Kortnummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Utg&aring;ngsdatum:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV Nummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Vad &auml;r detta?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Kort&auml;gare m&aring;ste vara minst ' . CC_OWNER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Kortnummret m&aring;ste minst vara ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Det 3 eller 4 siffriga CVV numret fr&aring;n baksidan av kontokortet m&aring;ste anges.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Ditt kreditkort kunde inte godk&auml;nnas av denna orsaken. V&auml;nligen r&auml;tta till felen.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Kreditkorts Fel!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'VARNING: S&auml;kerhet problem. Kontakta butiks&auml;garen omedelbart. Din best&auml;llning har * inte * helt godk&auml;nts.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'G&ouml;r &Aring;terbetalning');
  define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Fel: Du uppmanas att g&ouml;ra ett bidrag men inte bekr&auml;ftat l&aring;sningen.');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Fel: Du ans&ouml;kt om ett bidrag men angav ett ogiltigt v&auml;rde.');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Fel: Du har beg&auml;rt en &aring;terbetalning men kunde inte skriva de 4 sista siffrorna i kreditkortsnumret. ');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', '&Aring;terbetalnings Initierat Transaction ID: %s - verifieringskoden: %s.');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Fel: Du uppmanas att g&ouml;ra en inh&auml;mtning men inte bekr&auml;ftat l&aring;sningen.');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'G&ouml;r Inh&auml;mtning');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Fel: Du beg&auml;rde Inh&auml;mtning men m&aring;ste ange ett belopp.');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Fel: Du m&aring;ste ange transaktions-ID.');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'fonderad inh&auml;mtning inledd med Belopp:% s. Transaction ID:% s - Auth Code:.% s ');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'G&ouml;r Ogiltlig');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'FEL: Du beg&auml;rde att g&ouml;ra ogiltlig men gl&ouml;mde kryssa i bekr&auml;ftelsen.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Ogiltlig initierad. Transaktion ID: %s - Godk&auml;nnande kod: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>&Aring;terbetala transaktion</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Du kan g&ouml;ra &aring;terbetalning till kunds kontokort h&auml;r:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'kryssa f&ouml;r denna ruta f&ouml;r att bekr&auml;fta: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Ange summan du vill &aring;terbetala');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Ange de sista 4 siffrorna i kontokortsnumret du skall &aring;terbetala till.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Ange original transaktions ID:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Notering (visas i orderhistoriken):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', '&Aring;terbetalning beg&auml;rd');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Du kan &aring;terbetala en best&auml;llning upp till att belopp som redan inh&auml;mtats. Du m&aring;ste ange de 4 sista siffrorna i kreditkortsnumret som anv&auml;ndes p&aring; den ursprungliga ordern. <br /> &Aring;terbetalning skall utf&auml;rdas inom 120 dagar fr&aring;n att ursprungliga aff&auml;rsdagen.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Inh&auml;mta transaktion</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Du kan inh&auml;mta tidigare beviljade medel h&auml;r:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Ange summan att inh&auml;mta: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'markera denna ruta f&ouml;r att bekr&auml;fta: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Ange original Transaktions ID: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notering (visas i orderhistoriken):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'tidigare beviljade medel.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Inh&auml;mtning m&aring;ste g&ouml;ras inom 30 dagar fr&aring;n godk&auml;nnande. Du kan bara inh&auml;mta en order EN g&aring;ng. <br />V&auml;nligen se till att ange r&auml;tt summa.<br />Om du l&auml;mnar belopp tomt, kommer det ursprungliga beloppet att anv&auml;ndas ist&auml;llet.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Upph&auml;va transaktion</strong>');
define ('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Du kan annullera en transaktion som &auml;nnu inte har reglerats, eller har godk&auml;nts som inte har f&aring;ngat <br /> Ange den oreglerade Trans-ID eller oreglerad Aukt ID:.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Markera denna ruta f&ouml;r att bekr&auml;fta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Notering (visas p&aring; orderhistoriken):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaktion avbruten');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Upph&auml;va transaktion m&aring;ste ske omedelbart innan den hamnar i den dagliga behandlingslistan.');

?>