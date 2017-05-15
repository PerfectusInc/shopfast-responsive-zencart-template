<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2007 Numinix Technology http://www.numinix.com         |
// |                                                                      |
// | Portions Copyright (c) The Zen Cart Development Team                 |
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

//BREADCRUMB
define('NAVBAR_TITLE', 'Kassa');

//SECTION HEADINGS
define('HEADING_TITLE_ORDER_TOTAL', 'Din Order Total:');
define('HEADING_TITLE_SHIPPING', 'Steg 1 - Leveransinformation'); 
define('HEADING_TITLE_PAYMENT', 'Steg 2 - Betalningsinformation'); 
define('HEADING_TITLE_PAYMENT_VIRTUAL', 'Steg 1 - Betalningsinformation');

//TABLE HEADINGS
define('TABLE_HEADING_PAYMENT_METHOD', 'Betalningsmetod');
define('TABLE_HEADING_SHIPPING_METHOD', 'Leveransmetod'); 
define('TABLE_HEADING_COMMENTS', 'Extra Instruktioner eller Order Kommentarer'); 
define('TABLE_HEADING_SHIPPING_ADDRESS', 'Leveransadress');
define('TABLE_HEADING_SHOPPING_CART', 'Kundkorgens inneh&aring;ll');
define('TABLE_HEADING_BILLING_ADDRESS', 'Betalningsadress');
define('TABLE_HEADING_DROPDOWN', 'rullgardinsmeny Rubrik');
define('TABLE_HEADING_GIFT_MESSAGE', 'Present meddelande');
define('TABLE_HEADING_FEC_CHECKBOX', 'Valbara Kryssalternativ');

//TITLES
define('TITLE_BILLING_ADDRESS', 'Betalningsadress:'); 
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Forts&auml;tt till Steg 3</strong>'); 
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE_VIRTUAL', '<strong>Forts&auml;tt till Steg 2</strong>'); 
define('TITLE_CONFIRM_CHECKOUT', '<strong>Bekr&auml;ta din Order</strong>');
define('TITLE_SHIPPING_ADDRESS', 'Leveransinformation:'); 

//TEXT
define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'Din order kommer att skickas till den adress som visas till v&auml;nster eller kan du &auml;ndra genom att klicka p&aring; <em>&Auml;ndra adress</em> knappen.'); 
define('TEXT_SELECTED_BILLING_DESTINATION', 'Din betalningsadress visas till v&auml;nster. Betalningsadressen skall vara den adress som man &auml;r registrerad p&aring;. Du &auml;ndra genom att klicka p&aring; <em>&Auml;ndra adress</em> knappen.');
define('TEXT_YOUR_TOTAL','Din Total'); 
define('TEXT_SELECT_PAYMENT_METHOD', 'V&auml;lj en betalningsmetod f&ouml;r din order.'); 
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', "- genom att klicka på 'Forts&auml;tt betalning'"); 
define('TEXT_ENTER_SHIPPING_INFORMATION', 'Det finns bara en leveransmetod.'); 
define('TEXT_CONFIRM_CHECKOUT', '- och forts&auml;tt till behandling');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* obligatorisk</span>');
define('TEXT_DROP_DOWN', 'Välj: ');
define('TEXT_FEC_CHECKBOX', 'Signatur  val?');      

//ERROR MESSAGES DISPLAYED
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'V&auml;nligen bekr&auml;fta reglerna genom att markera rutan nedan.'); 
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'V&auml;lj en betalningsmetod f&ouml;r din order.');
// eof