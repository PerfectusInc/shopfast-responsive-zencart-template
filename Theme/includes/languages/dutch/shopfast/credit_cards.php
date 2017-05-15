<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: credit_cards.php 6119 2007-04-05 08:20:16Z drbyte $
 */
/*

De creditcard definitie instructies komen overeen met de actuele velden in de configuratie tabel.

Bijvoorbeeld voor Visa:
TEXT_CC_ENABLED_VISA of IMAGE_CC_ENABLED_VISA is staat in de configuratie tabel als CC_ENABLED_VISA

Als een nieuwe creditcard is toegevoegd doch er is geen overeenkomende definitie kan hij niet gebruikt worden door de functie zen_get_cc_enabled()

Om een lijst van geaccepteerde creditcards weer te geven gebruik de functie zen_get_cc_enabled()

Bijvoorbeeld:

echo TEXT_ACCEPTED_CREDIT_CARDS . zen_get_cc_enabled();

*/

define('TEXT_ACCEPTED_CREDIT_CARDS', '<strong>Wij accepteren:</strong> ');

// cc als tekst
define('TEXT_CC_ENABLED_VISA','Visa');
define('TEXT_CC_ENABLED_MC','MC');
define('TEXT_CC_ENABLED_AMEX','AmEx');
define('TEXT_CC_ENABLED_DINERS_CLUB','Diners Club');
define('TEXT_CC_ENABLED_DISCOVER','Discover');
define('TEXT_CC_ENABLED_JCB','JCB');
define('TEXT_CC_ENABLED_AUSTRALIAN_BANKCARD','Australian Bankcard');
define('TEXT_CC_ENABLED_SOLO','Solo');
define('TEXT_CC_ENABLED_SWITCH','Switch');
define('TEXT_CC_ENABLED_MAESTRO','Maestro');

// om afbeeldingen te tonen defineer als:
// define('IMAGE_CC_ENABLED_VISA',zen_image(DIR_WS_IMAGES . 'bestandsnaam.jpg');
// gebruik de functie
// echo zen_get_cc_enabled('IMAGE_');

// cc als afbeeldingen
define('IMAGE_CC_ENABLED_VISA', zen_image($template->get_template_dir('cc1.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc1.gif'));
define('IMAGE_CC_ENABLED_MC', zen_image($template->get_template_dir('cc2.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc2.gif'));
define('IMAGE_CC_ENABLED_AMEX', zen_image($template->get_template_dir('cc3.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc3.gif'));
define('IMAGE_CC_ENABLED_DINERS_CLUB', zen_image($template->get_template_dir('cc4.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc4.gif'));
define('IMAGE_CC_ENABLED_DISCOVER', zen_image($template->get_template_dir('cc5.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc5.gif'));
define('IMAGE_CC_ENABLED_JCB', zen_image($template->get_template_dir('cc6.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc6.gif'));
define('IMAGE_CC_ENABLED_AUSTRALIAN_BANKCARD', zen_image($template->get_template_dir('cc7.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc7.gif'));
define('IMAGE_CC_ENABLED_SOLO', zen_image($template->get_template_dir('cc8.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc8.gif'));
define('IMAGE_CC_ENABLED_SWITCH', zen_image($template->get_template_dir('cc9.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc9.gif'));
define('IMAGE_CC_ENABLED_MAESTRO', zen_image($template->get_template_dir('cc10.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'cc10.gif'));
?>