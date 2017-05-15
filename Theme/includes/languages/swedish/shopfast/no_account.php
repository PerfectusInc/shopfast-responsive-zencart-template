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
define('EMAIL_SUBJECT', 'V�lkommen till ' . STORE_NAME);
define('EMAIL_GREET_MR', 'B�ste %s,' . "\n\n");
define('EMAIL_GREET_MS', 'B�ste %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'B�ste %s' . "\n\n");

// First line of the greeting
  define('EMAIL_WELCOME', 'Vi v�lkomnar er till <strong>' . STORE_NAME . '</strong>.');
  define('EMAIL_SEPARATOR', '--------------------');
  define('EMAIL_COUPON_INCENTIVE_HEADER', 'Gratulerar! F�r att ditt n�sta bes�k skall f� ett mer v�rde , listat nedan �r en Rabattkod bara f�r dig!' . "\n\n");
  // your Discount Coupon Description will be inserted before this next define
  define('EMAIL_COUPON_REDEEM', 'F�r att anv�nda kupongen ange ' . TEXT_GV_REDEEM . ' koden i Kassan:  <strong>%s</strong>' . "\n\n");
  define('TEXT_COUPON_HELP_DATE', '<p>Den g�ller mellan %s och %s</p>');

  define('EMAIL_GV_INCENTIVE_HEADER', 'Genom ditt bes�k idag, har vi skick dig denna ' . TEXT_GV_NAME . ' f�r %s!' . "\n");
  define('EMAIL_GV_REDEEM', '' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' �r: %s ' . "\n\n" . 'Du kan ange ' . TEXT_GV_REDEEM . ' i kassan, efter att du gjort fina val i butiken. ');
  define('EMAIL_GV_LINK', ' Eller, kan du aktivera den genom: ' . "\n");
  // GV link will automatically be included before this line


  define('EMAIL_GV_LINK_OTHER','N�r du kopplat ' . TEXT_GV_NAME . ' till ditt konto, kan du antingen anv�nda ' . TEXT_GV_NAME . ' den sj�lv, eller ge den till en v�n!' . "\n\n");
  define('EMAIL_TEXT', 'Med ditt konto, kan du ta del av <strong>varierade tj�nster</strong> som vi erbjuder. Det inkluderar:' . "\n\n" . '<li><strong>Permanent Kundkorg</strong> - Varor stannar i kundkorgen tills de tas bort eller k�pet slutf�rs. ' . "\n\n" . '<li><strong>Adressbok</strong> - Det g�r att leverera till andra adresser �n den f�rst valda! Perfekt vid f�delsedagar eller liknande.' . "\n\n" . '<li><strong>Order Historik</strong> - Visa tidigare k�p som har gjorts.' . "\n\n" . '<li><strong>Produkt omd�mmen</strong> - Visa vad Ni tycker till andra kunder.' . "\n\n");
  define('EMAIL_CONTACT', 'F�r hj�lp med v�ra tj�nster, skicka ett e-post meddelande till: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
  define('EMAIL_GV_CLOSURE','H�lsningar,' . "\n\n" . STORE_OWNER . "\nButiksinehavare\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

  // email disclaimer - this disclaimer is separate from all other email disclaimers
  define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Denna adress har vi f�tt fr�n n�gon av v�ra kunder. Om det inte �r ditt konto, Eller tror att du f�tt det av misstag, kontakta oss p�: %s ');

  define('TABLE_HEADING_BILLING_ADDRESS', 'Betalningsadress');
  define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Bekr&auml;fta e-post:');
  define('TABLE_HEADING_SHIPPING_ADDRESS', 'Leveransadress');
  define('ENTRY_COPYBILLING', 'Samma adress f�r betalning/leverans');

// email disclaimer - this disclaimer is separate from all other email disclaimers

define('TABLE_HEADING_CONTACT_DETAILS', 'Kontakt information');


define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Forts�tt processen');
if ($_SESSION['cart']->get_content_type() == 'virtual') {
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- v�lj betalningsmetod.'); 
} else {
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- V�lj betalnings/leverans metod.');
}
// eof 