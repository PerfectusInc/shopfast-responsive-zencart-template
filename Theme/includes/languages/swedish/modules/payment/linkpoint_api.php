<?php
/**
 * @package Linkpoint/Yourpay API payment_module
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 14141 2009-08-10 19:34:47Z wilt $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'FirstData/Linkpoint/YourPay API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', 'Kreditkort');

  if (defined('MODULE_PAYMENT_LINKPOINT_API_STATUS') && MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay Kund Inloggning</a>' . (MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_MODE_RESPONSE != 'LIVE: Production' ? '<br /><br /><strong>Linkpoint/YourPay API Test Kortnummer:</strong><br /><strong>Visa:</strong> 4111111111111111<br /><strong>MasterCard:</strong> 5419840000000003<br /><strong>Amex:</strong> 371111111111111<br /><strong>Discover:</strong> 6011111111111111' : '') . '<br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Hj&auml;lp information (p&aring; engelska)</a>');
  } else {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="http://www.zen-cart.com/partners/firstdata">Klicka h&auml;r f&ouml;r att skapa ett konto</a><br /><br /><a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay API Kund sida</a><br /><br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Klicka h&auml;r f&ouml;r<strong>Hj&auml;lp instruktioner (p&aring; engelska)</strong></a><br /><br /><strong>Krav:</strong><br /><hr />*<strong>LinkPoint eller YourPay Account</strong> (se l&auml;nk ovan f&ouml;r registrering)<br />*<strong>cURL kr&auml;vs </strong>och m&aring;ste vara aktiverat i php av ditt webbhotell<br />*<strong>Port 1129</strong> anv&auml;nds f&ouml;r dubbelriktad kommunikation mot gateway, denna m&aring;ste vara &ouml;ppen p&aring; webbhotellet<br />*<strong>PEM RSA Nyckel fil (key file) </strong>Digitalt certifikat:<br />F&ouml;r att anv&auml;nda och ladda upp Digitalt Certifikat (.PEM) nyckel:<br />- Logga in till ditt LinkPoint/Yourpay konto p&aring; deras hemsida<br />- Klicka p&aring; "Support" i deras huvudmeny.<br />- Klicka p&aring; "Download Center" under Downloads i sidomenyn.<br />- Klicka p&aring; "download" brevid "Store PEM File" sektionen p&aring; h&ouml;gersida av den sidan.<br />- Skriv in n&ouml;dv&auml;ndig information f&ouml;r att starta nerladdningen. Du kommer beh&ouml;va ditt SSN eller Tax ID som du anv&auml;nde vid konto registreringen.<br />- Ladda upp denna fil till includes/modules/payment/linkpoint_api/XXXXXX.pem (Given fr&aring;n FirstData - xxxxxx &auml;r ditt store id)');
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', 'Kreditkorts typ:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', 'Kreditkorts &auml;gare:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', 'Krediktkorts nummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'CVV Nummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', 'Kreditkort gilltilg till:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* Kort&auml;garens namn m&aring;ste minst vara ' . CC_OWNER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', 'Kreditkorts numret m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* Du m&aring;ste ange den 3 eller 4 siffriga cvv koden fr&aring;n baksidan av kortet');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', 'Kreditkorts fel!');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', 'Ditt kort nekades.  V&auml;nligen skriv in din information p&aring; nytt, prova ett annat kort, eller kontakta butiken f&ouml;r vidare hj&auml;lp.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', 'Fel Adress.  V&auml;nligen skriv in din information p&aring; nytt, prova ett annat kort, eller kontakta butiken f&ouml;r vidare hj&auml;lp.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', 'Ditt kort nekades. V&auml;nligen skriv in din information p&aring; nytt, prova ett annat kort, eller kontakta butiken f&ouml;r vidare hj&auml;lp.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', 'Vad &auml;r detta?');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***MANUELLT GODK&Auml;NNANDE V&Auml;NTAR -- KOSTNADEN S&Auml;TTS SENARE AV ADMINISTRAT&Ouml;REN.***' . "\n");
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', 'NOTERA: Detta var en TEST transaktion...f&ouml;r att kontrollera om k&ouml;pet LYCKADES.');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', 'NOTERA: Detta var en TEST transaktion...f&ouml;r att kontrollera om k&ouml;pet NEKADES.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTERA: Modulen &auml;r inte konfigurerad &auml;nnu)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;Din xyzxyz.pem certifikat fil kunde inte hittas.</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'CURL funktionen hittades inte - kr&auml;vs f&ouml;r FirstData/Linkpoint API betalnings modul');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DUPLICATE_MESSAGE', 'Detta ser ut som en dubbeltransaktion, och vi vill inte dra dubbelt belopp fr&aring;n ditt kort! Har du r&aring;kat klicka dubbelt p&aring; bekr&auml;ftelsen? Om INTE, f&ouml;rs&ouml;k igen om 5 minuter, eller kontakta butikens &auml;gare f&ouml;r vidare hj&auml;lp. Beklagar om det har skapat dr&ouml;jsm&aring;l.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', 'Vi ber om urs&auml;kt f&ouml;r besv&auml;ret, men f&ouml;r n&auml;rvarandekan vi inte kontakta kreditkortsf&ouml;retaget f&ouml;r godk&auml;nnande. V&auml;nligen kontakta butiks&auml;garen f&ouml;r betalning alternativ.');
  // note: the above error can occur as a result of:
     // - port 1129 not open for bidirectional communication
     // - CURL is not installed or not functioning
     // - incorrect or invalid or "no" .PEM file found in modules/payment/linkpoint_api folder
     // - In general it means that there was no valid connection made to the gateway... it was stopped before it got outside your server

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'Vi beklagar. Det blev ett system fel under hanteringen av ditt kort. Din information &auml;r s&auml;ker. V&auml;nligen meddela butiks&auml;gare att eventuellt ordna alternativa betalningsalternativ.');
  // note: the above error is a general error message which is reported when serious and known error conditions occur. Further details are given immediately following the display of this message. If database storage is enabled, details can be found there too.


  // Admin definitions

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'FirstData Order ID:');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'AVS Svar:');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Svars meddelande:');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Godk&auml;nnande kod:');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'Referens nummer:');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Bedr&auml;geri V&auml;rdering:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTERA: Modulen &auml;r i testl&auml;ge)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ORDERTYPE', 'Order Typ:');


// admin tools:
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NO_MATCHING_ORDER_FOUND', 'FEL: kunde inte hitta vald transaktions information.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_BUTTON_TEXT', '&Aring;terbetalning');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_ERROR', 'FEL: Du har valt att g&ouml;ra &aring;terbetalning men inte markerat bekr&auml;ftelserutan.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_REFUND_AMOUNT', 'FEL: Du har angett fel summa f&ouml;r &aring;terbetalning.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CC_NUM_REQUIRED_ERROR', 'FEL: Du beg&auml;rde en &aring;terbetalning men angav inte de fyra sista siffrorna i kortnummret.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_INITIATED', '&Aring;terbetalning beg&auml;rd. Transaktion ID: %s - Order ID: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_ERROR', 'FEL: Du beg&auml;rde att g&ouml;ra en inh&auml;mtning men inte bekr&auml;ftat i rutan.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_BUTTON_TEXT', 'Inh&auml;mtning');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_CAPTURE_AMOUNT', 'FEL: Du m&aring;ste ange en summa f&ouml;r inh&auml;mtningen.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TRANS_ID_REQUIRED_ERROR', 'FEL: DU m&aring;ste ange ett Transaktion ID.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPT_INITIATED', 'Inh&auml;mtning av medel beg&auml;rd. Summa: %s.  Transaktion ID: %s - Godk&auml;nnande kod: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_BUTTON_TEXT', 'Avbryt');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_ERROR', 'FEL: Du beg&auml;rde att avbryta transaktion men gl&ouml;mde bekr&auml;fta i rutan.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_INITIATED', 'Avbryt beg&auml;ran. Transaktion ID: %s - Order ID: %s ');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TITLE', '<strong>&Aring;terbetala Transaktion</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND', 'Du kan &aring;terbetala medel till kundens kontokort h&auml;r.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_CHECK', 'Markera denna ruta f&ouml;r att bekr&auml;fta: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_AMOUNT_TEXT', 'Ange summan som skall &aring;terbetalas');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_TEXT', 'Ange Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_CC_NUM_TEXT', 'Ange de sista fyra siffrorna i kontokortsnumret.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TRANS_ID', 'Ange original Transaktion ID <em>(som vanligen ser ut som denna: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TEXT_COMMENTS', 'Notering (visas i order historiken):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_MESSAGE', '&Aring;terbetalning beg&auml;rd');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_SUFFIX', 'Du kan beg&auml;ra &aring;terbetalning upp till den summa som &auml;r inh&auml;mtad. Du m&aring;ste ange de fyra sista siffrorna i kontokortet numret som ursprungligen anv&auml;ndes..<br />&Aring;terbetalning kan enbart g&ouml;ras till giltliga kort. F&ouml;r &aring;terbetalning till ogiltliga kort m&aring;ste en terminal anv&auml;ndas.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TITLE', '<strong>Inh&auml;mting Transaktion</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE', 'Du kan g&ouml;ra inh&auml;mtning p&aring; tidigare godk&auml;nda trasaktioner h&auml;r:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_AMOUNT_TEXT', 'Ange summan som skall inh&auml;mtas: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_CHECK', 'Kryssa f&ouml;r rutan f&ouml;r att godk&auml;nna: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TRANS_ID', 'Ange ordiarie trasaktions ID <em>(exempel: <strong>5138-i4wcYM</strong>)</em> : ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_TEXT', 'Ange Order Nummer');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notering (visas i order historiken):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Avr&auml;knat tidigare beviljade medel.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_SUFFIX', 'Inh&auml;mtning m&aring;ste g&ouml;ras 2-10 dagar fr&aring;n ordinarie godk&auml;nnande beroende p&aring; din banks krav. Du b&ouml;r inh&auml;mta en order endast EN G&Aring;NG. <br />V&auml;ligen se till att r&auml;tt summa har angivits.<br />Om du l&auml;mnar rutan blank, anv&auml;nds ordinarie summa.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TITLE', '<strong>Avbryta transaktion</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID', 'Du kan avbyta en transaktion (godk&auml;nd / inh&auml;mtning / &aring;terbetalning) som &auml;nnu inte har avgjorts. Ange ursprunglig transaktion ID <em> (oftast ser ut s&aring; h&auml;r: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_CHECK', 'Markera f&ouml;r att bekr&auml;fta:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_TEXT', 'ange Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TEXT_COMMENTS', 'Notering (visas  i order historik):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaktion Avbruten');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_SUFFIX', 'Avbrytning m&aring;ste slutf&ouml;ras innan den ursprungliga transaktionen regleras i den dagliga parti, vilket sker vid 19:00 (Pacific time).');


?>