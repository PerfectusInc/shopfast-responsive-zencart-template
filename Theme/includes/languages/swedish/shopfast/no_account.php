<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright Joseph Schilz
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: J_Schilz for Integrated COWOA - 14 April 2007
 */

define('NAVBAR_TITLE', 'Betalningsinformation');

define('TABLE_HEADING_BILLING_ADDRESS', 'Betalningsadress');
define('TABLE_HEADING_SHIPPING_ADDRESS', 'Leveransadress');

define('HEADING_TITLE', 'Betalningsinformation');

define('TEXT_ORIGIN_LOGIN', 'Om du har konto hos oss, logga in p&aring; <a href="%s"><em>Logga in sidan</em></a>.');
define('TEXT_LEGEND_HEAD', 'Skapa ett nytt konto');
define('TEXT_MORE', 'F&ouml;r en begr&auml;nsad tid, f&aring;r 10% avdrag p&aring; en order.  Du f&aring;r denna kupong direkt efter att du skapat ditt konto, och kan anv&auml;ndas p&aring; din f&ouml;rsta order.<br /><br />F&ouml;r att skapa ditt konto, ange informationen nedan.');

// greeting salutation
define('EMAIL_SUBJECT', 'Välkommen till ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Bäste %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Bäste %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Bäste %s' . "\n\n");

// First line of the greeting
  define('EMAIL_WELCOME', 'Vi välkomnar er till <strong>' . STORE_NAME . '</strong>.');
  define('EMAIL_SEPARATOR', '--------------------');
  define('EMAIL_COUPON_INCENTIVE_HEADER', 'Gratulerar! För att ditt nästa besök skall få ett mer värde , listat nedan är en Rabattkod bara för dig!' . "\n\n");
  // your Discount Coupon Description will be inserted before this next define
  define('EMAIL_COUPON_REDEEM', 'För att använda kupongen ange ' . TEXT_GV_REDEEM . ' koden i Kassan:  <strong>%s</strong>' . "\n\n");
  define('TEXT_COUPON_HELP_DATE', '<p>Den gäller mellan %s och %s</p>');

  define('EMAIL_GV_INCENTIVE_HEADER', 'Genom ditt besök idag, har vi skick dig denna ' . TEXT_GV_NAME . ' för %s!' . "\n");
  define('EMAIL_GV_REDEEM', '' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' är: %s ' . "\n\n" . 'Du kan ange ' . TEXT_GV_REDEEM . ' i kassan, efter att du gjort fina val i butiken. ');
  define('EMAIL_GV_LINK', ' Eller, kan du aktivera den genom: ' . "\n");
  // GV link will automatically be included before this line


  define('EMAIL_GV_LINK_OTHER','När du kopplat ' . TEXT_GV_NAME . ' till ditt konto, kan du antingen använda ' . TEXT_GV_NAME . ' den själv, eller ge den till en vän!' . "\n\n");
  define('EMAIL_TEXT', 'Med ditt konto, kan du ta del av <strong>varierade tjänster</strong> som vi erbjuder. Det inkluderar:' . "\n\n" . '<li><strong>Permanent Kundkorg</strong> - Varor stannar i kundkorgen tills de tas bort eller köpet slutförs. ' . "\n\n" . '<li><strong>Adressbok</strong> - Det går att leverera till andra adresser än den först valda! Perfekt vid födelsedagar eller liknande.' . "\n\n" . '<li><strong>Order Historik</strong> - Visa tidigare köp som har gjorts.' . "\n\n" . '<li><strong>Produkt omdömmen</strong> - Visa vad Ni tycker till andra kunder.' . "\n\n");
  define('EMAIL_CONTACT', 'För hjälp med våra tjänster, skicka ett e-post meddelande till: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
  define('EMAIL_GV_CLOSURE','Hälsningar,' . "\n\n" . STORE_OWNER . "\nButiksinehavare\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

  // email disclaimer - this disclaimer is separate from all other email disclaimers
  define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Denna adress har vi fått från någon av våra kunder. Om det inte är ditt konto, Eller tror att du fått det av misstag, kontakta oss på: %s ');

  define('TABLE_HEADING_BILLING_ADDRESS', 'Betalningsadress');
  define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Bekr&auml;fta e-post:');
  define('TABLE_HEADING_SHIPPING_ADDRESS', 'Leveransadress');
  define('ENTRY_COPYBILLING', 'Samma adress för betalning/leverans');

// email disclaimer - this disclaimer is separate from all other email disclaimers

define('TABLE_HEADING_CONTACT_DETAILS', 'Kontakt information');


define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Fortsätt processen');
if ($_SESSION['cart']->get_content_type() == 'virtual') {
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- välj betalningsmetod.'); 
} else {
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- Välj betalnings/leverans metod.');
}
// eof 