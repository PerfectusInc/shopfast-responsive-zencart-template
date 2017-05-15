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
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Skicka ' . TEXT_GV_NAME . ' Till Kunder');

define('TEXT_CUSTOMER', 'Kunder:');
define('TEXT_SUBJECT', 'Rubrik:');
define('TEXT_FROM', 'Fr&aring;n:');
define('TEXT_TO', 'Epost till:');
define('TEXT_AMOUNT', 'Summa');
define('TEXT_MESSAGE', 'Text-endast <br />Meddelande:');
define('TEXT_RICH_TEXT_MESSAGE', 'Rik Text <br />Meddelande:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Anv&auml;nd denna f&ouml;r att skicka enstaka mail, annars anv&auml;nd rullrutan ovan</span>');
define('TEXT_SELECT_CUSTOMER', 'V&auml;lj Kunder');
define('TEXT_ALL_CUSTOMERS', 'Alla Kunder');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Till alla med nyhetsbrev');

define('NOTICE_EMAIL_SENT_TO', 'Notera: Epost har skickats till: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Fel: Ingen kund har valts.');
define('ERROR_NO_AMOUNT_SELECTED', 'Fel: Ingen summa har angetts.');
define('ERROR_NO_SUBJECT', 'Fel: Ingen rubrik finns.');
define('ERROR_GV_AMOUNT', 'Ange summan som v&auml;rde utan symboler. Exempel: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Vi har gl&auml;djen att erbjuda er ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', 'Denna ' . TEXT_GV_NAME . ' &auml;r v&auml;rd ');
define('TEXT_TO_REDEEM', 'F&ouml;r att l&ouml;sa ut ' . TEXT_GV_NAME . ', Klicka p&aring; l&auml;nken nedan. Skriv ocks&aring; ner ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' som &auml;r');
define('TEXT_IN_CASE', ' i de fall som problem uppst&aring;r.');
define('TEXT_OR_VISIT', 'eller bes&ouml;k ');
define('TEXT_ENTER_CODE', ' och ange koden i utcheckningen');
define('TEXT_CLICK_TO_REDEEM','Klicka h&auml;r f&ouml;r inl&ouml;sen');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Du har nyligen k&ouml;pt en  ' . TEXT_GV_NAME . ' fr&aring;n var webbshop, av s&auml;kerhetssk&auml;l, summan f&ouml;r  ' . TEXT_GV_NAME . ' har inte omedelbart dragits fr&aring;n er vid detta k&ouml;p. Denna summa har nu dragits fr&aring;n ert konto.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'V&auml;rdet f&ouml;r  ' . TEXT_GV_NAME . ' &auml;r %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Du kan nu logga in p&aring; ditt konto. D&auml;r kan du ge bort  ' . TEXT_GV_NAME . ' v&auml;rde till vem som helst.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>