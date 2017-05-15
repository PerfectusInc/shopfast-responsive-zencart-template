<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Skicka ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Skicka ' . TEXT_GV_NAME . ' bekr&auml;ftelse');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Skickad');
define('NAVBAR_TITLE', 'Skicka ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Meddelande fr�n ' . STORE_NAME);
define('HEADING_TEXT','V&auml;nligen ange namn, e-postadress och v&auml;rde p&aring; ' . TEXT_GV_NAME . ' du vill skicka. F&ouml;r mer information, v&auml;nligen se v&aring;r <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Mottagarens namn:');
define('ENTRY_EMAIL', 'Mottagarens e-post:');
define('ENTRY_MESSAGE', 'Ditt meddelande:');
define('ENTRY_AMOUNT', 'Belopp att skicka:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Ange mottagarens namn. V&auml;nligen fyll i det nedan. ');
define('ERROR_ENTRY_AMOUNT_CHECK', '' . TEXT_GV_NAME . ' beloppet &auml;r inte korrekt. V&auml;nligen fyll i p&aring; nytt.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '&Auml;r e-postadressen korrekt? V&auml;nligen f&ouml;rs&ouml;k igen.');
define('MAIN_MESSAGE', 'Du skickar ' . TEXT_GV_NAME . ' v&auml;rd %s till %s,  som har e-postadressen %s. Om denna informationen &auml;r fel, kan du &auml;ndra den genom att klicka p&aring; <strong>&auml;ndra</strong> knappen.<br /><br />Meddelandet till mottagaren:<br /><br />');
define('SECONDARY_MESSAGE', 'B�ste %s,<br /><br />' . 'Du har f�tt ett ' . TEXT_GV_NAME . ' v�rt %s fr�n %s');
define('PERSONAL_MESSAGE', '%s s�ger:');
define('TEXT_SUCCESS', 'Gratulerar, ditt ' . TEXT_GV_NAME . ' har skickats.');
define('TEXT_SEND_ANOTHER', 'VIll du skicka ytterligare ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  'Presentkorts konto');

define('EMAIL_GV_TEXT_SUBJECT', 'En present fr�n %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Gratulerar, Du har f�tt ett ' . TEXT_GV_NAME . ' v�rd %s');
define('EMAIL_GV_FROM', 'Detta ' . TEXT_GV_NAME . ' har skickats till dig fr�n %s');
define('EMAIL_GV_MESSAGE', 'med meddelandet: ');
define('EMAIL_GV_SEND_TO', 'Hej, %s');
define('EMAIL_GV_REDEEM', 'F�r att l�sa in ' . TEXT_GV_NAME . ', v�nligen klicka p� l�nken nedan. V�nligen skriv ner  ' . TEXT_GV_REDEEM . ': %s  om n�got skulle bli fel.');
define('EMAIL_GV_LINK', 'F�r att l�sa in klicka h�r');
define('EMAIL_GV_VISIT', ' eller bes�k ');
define('EMAIL_GV_ENTER', ' och ange ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Om du har problem att l�sa in ' . TEXT_GV_NAME . ' genom den automatiska l�nken, ' . "\n" .
                                'kan du �ven ange ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' i kassan i butiken.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>