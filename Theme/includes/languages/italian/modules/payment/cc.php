<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: cc.php 6361 2007-05-24 21:17:14Z drbyte $
 */
 
  define('MODULE_PAYMENT_CC_TEXT_ADMIN_TITLE', 'Carta di credito - Processo Offline');
  define('MODULE_PAYMENT_CC_TEXT_CATALOG_TITLE', 'Carta di credito');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', 'Test Info Carta di Credito:<br /><br />CC#: 4111111111111111<br />Scadenza: Qualsiasi');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', 'Tipo della carta:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', 'Titolare della carta:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', 'Numero carta:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'CVV Number (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'Altre info' . '</a>)');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', 'Data scadenza:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* Il Nome Proprietario della Carta di Credito deve essere almeno ' . CC_OWNER_MIN_LENGTH . ' cifre.\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* Il numero della Carta di Credito deve essere almeno ' . CC_NUMBER_MIN_LENGTH . ' cifre.\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', 'Errore Carta di Credito:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* Il numero CVV deve essere almeno ' . CC_CVV_MIN_LENGTH . ' cifre.\n');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','ATTENZIONE - Errore nella Configurazione: ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','ATTENZIONE: Hai abilitato il modulo di pagamento tramite Carta di Credito ma non lo hai ancora configurato per inviare le informazioni della Carta di Credito a te tramite email. Come conseguenza, non sarai in grado di processare i numeri di Carta di Credito per gli ordini piazzati usando questo metodo.  Vai in Admin->Moduli->Pagamento->Credit Card->Modifica e imposta l\'indirizzo email per l\'invio delle informazioni Carta di Credito.' . "\n\n\n\n");
  define('MODULE_PAYMENT_CC_TEXT_MIDDLE_DIGITS_MESSAGE', '
Pregasi inviare questa mail all\'ufficio contabilità in modo da poterla archiviare con l\'ordine relativo a: ' . "\n\n" . 'Ordine: %s' . "\n\n" . 'Cifre centrali: %s' . "\n\n");
?>