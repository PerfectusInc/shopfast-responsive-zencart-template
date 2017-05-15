<?php
/**
 * Authorize.net SIM Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 15868 2010-04-11 01:14:50Z drbyte $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Kreditkort');  // Payment option title as displayed to the customer


  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net S&auml;ljar Inloggning</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Test Info:<br /><b>Automatiskt Godk&auml;nt Kreditkorts Nummer:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Notera:</b> Dessa kommer nekas om butiken inte &auml;r i test l&auml;ge. Eventuella framtida datum kan anv&auml;ndas f&ouml;r utg&aring;ngsdatum och alla 3 eller 4 (AMEX) siffror kan anv&auml;ndas f&ouml;r CVV-koden.<br /><br /><b>Automatisk Nekade Kreditkorts nummer:</b><br /><br />Kort #: 4222222222222<br /><br />Detta nummer kan anv&auml;ndas f&ouml;r testmeddelanden med mera.' : '') . '<br /><br /><strong>INST&Auml;LLNINGAR</strong><br />Ditt "svar" och "kvitto" URL inst&auml;llningar i din Authorize.net s&auml;ljar profil kan l&auml;mnas TOM, eller kan pekas p&aring; http://din_doman.se/eventuell_katalog/index.php?main_page=checkout_payment');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klicka h&auml;r f&ouml;r att registrera ett konto</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Klicka h&auml;r f&ouml;r att logga in till Authorize.net</a><br /><br /><strong>Kravspecifikation:</strong><br /><hr />*<strong>Authorize.net Konto</strong> (see l&auml;nk ovan f&ouml;r att registrera)<br />*<strong>Authorize.net anv&auml;ndarnamn och transaktionsnyckel</strong> vilka kan hittas i din S&auml;ljarinfo');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Typ:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Kreditkorts &auml;gare:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Kreditkortsnummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Giltlig till:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'CVV Nummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Vad &auml;r detta?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* &Auml;garens namn m&aring;ste minst vara minst ' . CC_OWNER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Kreditkortsnumret m&aring;ste vara minst ' . CC_NUMBER_MIN_LENGTH . ' tecken.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Den 3 eller 4 siffriga CVV koden kan hittas p&aring; baksidan av ditt kort.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'N&aring;got har blivit fel vid hanteringen. f&ouml;rs&ouml;k igen');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Ditt kreditkort har inte godk&auml;nts. F&ouml;rs&ouml;k med ett annat kort eller kontakta din bank f&ouml;r mer information.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Kreditkorts Fel!');
