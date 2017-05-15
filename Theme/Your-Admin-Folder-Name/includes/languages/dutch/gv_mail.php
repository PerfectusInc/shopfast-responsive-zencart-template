<?php
//
// @package admin languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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

define('HEADING_TITLE', 'Verstuur ' . TEXT_GV_NAME . ' aan klanten.');

define('TEXT_CUSTOMER', 'Klant:');
define('TEXT_SUBJECT', 'Onderwerp:');
define('TEXT_FROM', 'Afzender:');
define('TEXT_TO', 'Ontvanger:');
define('TEXT_AMOUNT', 'Waarde:');
define('TEXT_MESSAGE', 'Text-Only <br />bericht:');
define('TEXT_RICH_TEXT_MESSAGE', 'Rich Text <br />Message:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Gebruik dit voor het versturen aan een enkel e-mail. Gebruik anders het dropdown menu hierboven.</span>');
define('TEXT_SELECT_CUSTOMER', 'Selecteer klant');
define('TEXT_ALL_CUSTOMERS', 'Alle klanten');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Alle nieuwsbrief ontvangers');

define('NOTICE_EMAIL_SENT_TO', 'Opmerking: e-mail verstuurd aan: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Foutmelding: geen klant geselecteerd.');
define('ERROR_NO_AMOUNT_SELECTED', 'Foutmelding: geen waarde geselecteerd.');
define('ERROR_NO_SUBJECT', 'Foutmelding: er is geen onderwerp ingevuld.');
define('ERROR_GV_AMOUNT', 'Foutmelding: Definieër de rekening als een waarde zonder valutasymbool. Bijv.: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Het doet ons een genoegen u een ' . TEXT_GV_NAME . ' aan te bieden.</font>');
define('TEXT_GV_WORTH', 'De ' . TEXT_GV_NAME . ' heeft een waarde van ');
define('TEXT_TO_REDEEM', 'Om deze ' . TEXT_GV_NAME . ' in te wisselen, klik op onderstaande link. Wij vragen u voor de zekerheid om de ' . TEXT_GV_REDEEM . ' op te schrijven' );
define('TEXT_WHICH_IS', ' welke is');
define('TEXT_IN_CASE', ' voor het geval u problemen ondervind.');
define('TEXT_OR_VISIT', 'of bezoek ');
define('TEXT_ENTER_CODE', ' en vul de inwisselcode in tijdens het afrekenen.');
define('TEXT_CLICK_TO_REDEEM','Klik hier om in te wisslen');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Onlangs heeft u een ' . TEXT_GV_NAME . ' besteld via onze winkel. Vanuit veiligheidsoogpunt is de waarde van deze ' . TEXT_GV_NAME . ' niet direct bij uw account bijgeschreven. Deze waarde is nu bijgeschreven.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . ' De waarde van de  ' . TEXT_GV_NAME . ' is %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'U kunt nu onze winkel bezoeken, zich aanmelden en de ' . TEXT_GV_NAME . ' waarde versturen aan een ieder u wilt.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>