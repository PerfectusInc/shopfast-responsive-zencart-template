<?php
/**
 * Authorize.net echeck Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_echeck.php 7227 2007-10-12 04:19:56Z drbyte $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ADMIN_TITLE', 'Authorize.net - eCheck'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CATALOG_TITLE', 'eCheck');  // Payment option title as displayed to the customer

  if (MODULE_PAYMENT_AUTHORIZENET_ECHECK_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Kund inloggning</a>');
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klicka h&auml;r f&ouml;r att registrera ett konto</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net Kund sida</a><br /><br /><strong>Krav:</strong><br /><hr />*<strong>Authorize.net Konto</strong> (se l&auml;nk ovan f&ouml;r registrering)<br />*<strong>CURL kr&auml;vs </strong>och M&Aring;STE anv&auml;ndas med SSL support i PHP fr&aring;n ditt webbhotell<br />*<strong>Authorize.net anv&auml;ndarnamn och transaktions nyckel</strong> hittas p&aring; din kund sida');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR_CURL_NOT_FOUND', 'CURL funktionen hittades inte - den kr&auml;vs f&ouml;r Authorize.net eCheck betalnings modul');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ROUTING_CODE', 'ABA clearingnummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_NAME', 'Bank Namn:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_NUM', 'Bank Konto nummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_TYPE', 'Bank konto typ:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNTHOLDER', '&Auml;gare till kontot:');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_OWNER', '* &Auml;gare m&aring;ste minst vara ' . CC_OWNER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_NUMBER', '* Kontonumret m&aring;te minst vara ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ROUTING_CODE', '* Clearingnummer m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_BANK_NAME', '* Bankens namn m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_TITLE', 'Bekr&auml;ftelse notering:&nbsp;');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_NOTICE', 'Genom att klicka p&aring; knappen nedan (f&ouml;r att bekr&auml;fta ordern), godk&auml;nner jag att ' . STORE_NAME . ' att belasta mitt %s konto %s med summan av %s f&ouml;r den order jag har bekr&auml;ftat.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DECLINED_MESSAGE', 'Din transaktion kunde inte genomf&ouml;ras. R&auml;tta till den information som var fel och f&ouml;rs&ouml;k igen. Om det inte g&aring;r kontakta oss f&ouml;r hj&auml;lp.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR', 'Transaktions fel!');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHENTICITY_WARNING', 'VARNING: S&auml;kerhetsproblem. Kontakta butikens &auml;gare omedelbart. Din order har *INTE* blivit helt bekr&auml;ftad.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TYPE', 'Kund typ:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TAX_ID', 'Kund moms ID/SSN:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_NUMBER', 'K&ouml;rkortsnummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_STATE', 'K&ouml;rkorts utf&auml;rdningsl&auml;n:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_TEXT', 'F&ouml;delsedatum:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_FORMAT', '(MM/DD/YYYY)');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_CUST_TAX_ID', '* Moms ID m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_NUMBER', '*  K&ouml;rkortsnummer m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_DOB', '* F&ouml;delsedatum m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_BUTTON_TEXT', '&Aring;terbetalning');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_ERROR', 'FEL: Du har inte kryssat f&ouml;r bekr&auml;ftelserutan.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_REFUND_AMOUNT', 'FEL: Du har angivit ett felaktigt belopp.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CC_NUM_REQUIRED_ERROR', 'FEL: Du har gl&ouml;mt de fyra sista siffrorna i kontonumret 4.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_INITIATED', '&Aring;terbetalning beg&auml;rd. Transaction ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_ERROR', 'FEL: Du har gl&ouml;mt att bekr&auml;fta din inh&auml;mtning.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_BUTTON_TEXT', 'Inh&auml;mtning');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_CAPTURE_AMOUNT', 'FEL: Du har gl&ouml;mt att ange belopp.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_TRANS_ID_REQUIRED_ERROR', 'FEL: Du m&aring;ste ange ett Transaktion ID.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPT_INITIATED', 'Medel inh&auml;mtning &auml;r beg&auml;rd. Belopp: %s.  Transaktion ID: %s - Bekr&auml;ftelse kod: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_BUTTON_TEXT', 'Annullering');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_ERROR', 'FEL: Du har gl&ouml;mt att bekr&auml;fta.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_INITIATED', 'Annullering beg&auml;ran. Transaktion ID: %s - Bekr&auml;ftelse kod: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TITLE', '<strong>&Aring;terbetalnings transaktioner</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND', 'Du kan &aring;terbetala pengar till kunders kontokort h&auml;r:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_CHECK', 'Kryssa f&ouml;r denna ruta f&ouml;r att bekr&auml;fta: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_AMOUNT_TEXT', 'Ange beloppet som skall &aring;terbetlas');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_CC_NUM_TEXT', 'Ange de sista fyra siffrorna f&ouml;r kontot som skall &aring;terbetalas till.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TRANS_ID', 'ANge original transaktions ID:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TEXT_COMMENTS', 'Notering (kommer visas i order historiken):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_DEFAULT_MESSAGE', '&Aring;terbetalning beg&auml;rd');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_SUFFIX', 'Du kan &aring;terbetala belopp mac upp till den summa som har inh&auml;mtats. Du m&aring;ste ange de fyra sista siffrorna i kontot.<br />&Aring;terbetalning m&aring;ste g&ouml;ras inom 120 dagar fr&aring;n inh&auml;mtningsdatumet.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TITLE', '<strong>Inh&auml;mtade transaktioner</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE', 'Du kan inh&auml;mta tidigare godk&auml;nda medel h&auml;r:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_AMOUNT_TEXT', 'Ange beloppet h&auml;r: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_CHECK', 'Kryssa f&ouml;r h&auml;r f&ouml;r att bekr&auml;fta: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TRANS_ID', 'ANge original transaktion ID: ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notering (visas i Order Historiken):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Avr&auml;knat tidigare beviljade medel.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_SUFFIX', 'Inh&auml;mtning m&aring;ste ske 30 dagar fr&aring;n original bekr&auml;ftelsen. Du skall bara inh&auml;mta en order EN g&aring;ng. <br />V&auml;nligen se till att beloppet &auml;r korrekt.<br /> Om du l&auml;mnar beloppet tomt, kommer det ursprungliga beloppet att anv&auml;ndas ist&auml;llet.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TITLE', '<strong>Annullering Transaktioner</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID', 'Du kan annullera en order som ej &auml;nnu har dragits:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_CHECK', 'Kryssa f&ouml;r h&auml;r f&ouml;r att bekr&auml;fta:');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TEXT_COMMENTS', 'Notering (visas i order historiken):');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaktionen avbruten');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_SUFFIX', 'Annulleringar m&aring;ste slutf&ouml;ras innan den ursprungliga transaktionen regleras i den dagliga hanteringen.');

?>