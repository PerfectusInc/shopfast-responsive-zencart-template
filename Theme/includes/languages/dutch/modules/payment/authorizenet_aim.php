<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 18695 2011-05-04 05:24:19Z drbyte $
 */


// Beheerder configureerbare opties
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Naam betalingsmethode zoals weergegevens in het beheerpaneel

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Handelaren login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Test informatie:<br /><b>Automatische geaccepteerde creditcard nummers::</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>NB:</b> Deze creditcard nummers worden in productiemodus niet geaccepteerd en in de testmodes wel. Elke toekomstige datum kan worden gebruikt als vervaldatum en elk 3 of 4 cijferig nummer (AMEX) kan worden gebruikt als CVV code.<br /><br /><b>Automatisch afgewezen creditcard nummer:</b><br /><br />Kaartnr.: 4222222222222<br /><br />Dit kaartnummer kan worden gebruikt om berichten van \'afwijzing\' te testen.<br /><br />' : '') . '<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klik hier om een account aan te vragen</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net handelaren site</a><br /><br /><strong>Benodigd:</strong><br /><hr />*<strong>Authorize.net account</strong> (zie bovenstaande link om u aan te melden)<br />*<strong>CURL is benodigd </strong>en dient VERPLICHT gecompileerd te worden met SSL ondersteuning voor PHP (laat dit doen door uw webhosting bedrijf)<br />*<strong>Authorize.net gebruikersnaam en transactie sleutel</strong>, available from your Merchant Area<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'CURL niet gevonden - verplicht voor Authorize.net AIM betalings module');

// Catalogus
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Creditcard');  // Betaaloptie zoals getoond aan klant
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Creditcard type:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Naam kaarthouder:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Creditcardnummer:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Verval datum:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV code:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Wat is dit?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* De naam van de kaarthouder moet uit minimaal ' . CC_OWNER_MIN_LENGTH . ' karakters bestaan.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Het creditcard nummer moet minimaal ' . CC_NUMBER_MIN_LENGTH . ' karakters hebben.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Het 3 of 4 cijferig CVV dient u over te nemen vanaf de achterzijde van uw creditcard\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Uw creditcard kon om deze reden niet worde geverifieerd. Corrigeer de door u ingevoerde informatie en probeer het nogmaals of neem contact met ons op voor asistentie.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Creditcard fout!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'LETOP: Probleem met beveiligde sleutel. Neem onmiddelijk contact met ons op! uw betaling is *niet* volledig verwerkt.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Crediteer');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Fout: Uw heeft een aanvraag gedaan tot crediteren maar heeft niet het controle vakje afgevinkt.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Fout: Uw heeft een aanvraag gedaan tot crediteren maar heeft niet een geldig bedrag ingevoerd.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Fout: Uw heeft een aanvraag gedaan tot crediteren maar heeft niet de laatste 4 cijfers van het creditcardnummer ingegeven.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Creditering aangevraagd. Transactie nr.: %s - Auth code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Fout: Uw heeft een eerder geautoriseerde aanvraag willen verwerken maar maar u hebt niet het controle vakje afgevinkt.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Nu verwerken');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Fout: Uw heeft een eerder geautoriseerde aanvraag willen verwerken maar heeft geen bedrag ingevoerd.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Fout: U dient een transactie nummer in te vullen.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Transactie in verwerking. Bedrag: %s.  Transactie nr.: %s - Auth code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Nu verifieren');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Fout: U heeft een verificatie aangevraagd maar heeft niet het controle vakje afgevinkt.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Verificatie gestart. Transactie nr.: %s - Auth code: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Terugstorten transactie</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Hier kan u bedragen terugstorten naar de creditcard van de klant:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Vink dit controle vakje af als u een tranactie wil terugstorten: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Voer hier het bedrag in dat u wil terugstorten');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Voer hier de laatste 4 cijfers in van de creditcard waarnaar u wil terugstorten.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Voer oorspronkelijk transactienummer in:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Opmerking (word getoond op de bestelhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Terugstorten in verwerking');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'U kan hier een bedrag terugstorten tot aan het bedrag dat reeds geincasseerd is. U dient de laatste 4 cijfers van het creditcard nummer in te voeren van de creditcard waarmee de initiele order is voldaan.<br />Terugbetalen moet binnen 120 dagen vanaf de oorspronkelijke transactiedatum plaatsvinden.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Vastleggen tranactie</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'U kan hier eerder geverifieerde bedragen incaseren:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Voer bedrag in dat u wil verwerken: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Vink dit controle vakje af als u een tranactie wil verwerken: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Voer oorspronkelijke transactie nummer in: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Opmerking (word getoond binnen de bestelhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Definitief incaseren eerder geautoriseerde transacties.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Incaseren dient binnen 30 dagen na de oorspronkelijke authorisatie plaats te vinden. U mag een bestelling EENMALIG incaseren. <br />Let erop dat het ingevoerde bedrag correct is.<br />Als u niet invoerd bij bedrag dan word het oorspronkelijk bedrag gebruikt.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Verifieren transacties</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Hier kan u een tranactie verifieren die nog niet definitief is:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Vink dit controle vakje af als u een tranactie wil verifieren:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Opmerking (word getoond binnen de bestelhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transactie geannuleerd');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Verificaties moeten zijn uitgevoerd voordat de oorspronkelijke transactie in de dagelijkse verwerking kan worden meegenomen.');

