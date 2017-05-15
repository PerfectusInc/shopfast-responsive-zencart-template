<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: ot_gv.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

  define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Rabattkoder');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES);
  define('SHIPPING_NOT_INCLUDED', ' [Ikke inkludert levering]');
  define('TAX_NOT_INCLUDED', ' [Eks. mva.]');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Legg til beløp: ');
  define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM);
  define('TEXT_INVALID_REDEEM_AMOUNT', 'Det virker som beløpet du har forsøkt å legge til ikke stemmer med tilgjengelig beløp i din gavekortkonto. Vennligst forsøk på nytt.');
  define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Tilgjengelig beløp: ');
  define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Fyll inn beløpet som du ønsker å bruke i boksen for \'Legg til beløp\', for å bruke et gavekortbeløp som allerede finnes i din konto. Du må også velge en betalingsmåte, for så å klikke fortsett-knappen for å legge til det tilgjengelig beløp for fratrekk på ordretotal.</p><p>Om du løser inn et <em>nytt</em> gavekort må du fylle inn gavekortkoden din i feltet for innløsningskode. Innløst beløp vil da legges til din konto når du klikker fortsett-knappen.</p>');
  define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', ' Setting Include tax = true, should only happen when recalculate = None');
