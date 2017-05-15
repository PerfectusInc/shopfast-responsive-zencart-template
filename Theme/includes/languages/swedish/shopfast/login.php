<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: J_Schilz for Integrated COWOA - 30 April 2007
 */

define('NAVBAR_TITLE', 'Logga in');
define('HEADING_TITLE', 'V&auml;lkommen, V&auml;nligen logga in');
define('HEADING_CONFIDENCE', 'Handla med f&ouml;rtroende');

define('HEADING_NEW_CUSTOMER', 'Ny? Ange din betalningsinformation');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Skapa en inloggning f&ouml;r <strong>' . STORE_NAME . '</strong> vilket ger m&ouml;jlighet att handla snabbare, Kontrollera orderstatus och se gamla ordrar.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Eller</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', '&Aring;terv&auml;ndande kunder kan ha f&ouml;rdelar n&auml;r de skapar konto hos <strong>' . STORE_NAME . '</strong> vilket ger ett snabbare handlande, visa tidigare ordrar, se den aktuella orderstatusen och andra medlemsf&ouml;rm&aring;ner.');

define('HEADING_RETURNING_CUSTOMER', '&Aring;terv&auml;ndande kunder: Logga In');
define('HEADING_RETURNING_CUSTOMER_SPLIT', '&Aring;terv&auml;ndande kunder');

define('TEXT_RATHER_COWOA', 'F&ouml;r snabbare service ger vi m&ouml;jlighet f�r er att handla utan att skapa konto.<br />');
define('COWOA_HEADING', 'Snabbkassa');

define('TEXT_RETURNING_CUSTOMER_SPLIT', '<strong>' . STORE_NAME . '</strong> konto&auml;gare, logga av nedan.');

define('TEXT_PASSWORD_FORGOTTEN', 'Gl&ouml;mt l&ouml;senordet?');

define('TEXT_LOGIN_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel: Det finns inte n&aring;gon med denna anv&auml;ndare och/eller l&ouml;senord.');
define('TEXT_VISITORS_CART', '<strong>Notera:</strong> Din &quot;Bes&ouml;karkorgs&quot; inneh&aring;ll kommer sl&aring;s ihop din &quot;Medlemskorgs&quot; inneh&aring;ll n&auml;r du loggar in. <a href="javascript:session_win();">[Mer Info]</a>');

define('TABLE_HEADING_BILLING_ADDRESS', 'Betalningsadress');
define('TABLE_HEADING_SHIPPING_ADDRESS', 'Leveransadress');
define('TABLE_HEADING_SHOPPING_CART', 'Kundkorgsinneh&aring;ll');
define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Sekretesspolicy</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">V&auml;nligen bekr&auml;fta att du samtycker med v&aring;r sekretesspolicy genom att markera f&ouml;ljande ruta. Sekretesspolicyn kan l&auml;sas</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">h&auml;r</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Jag har l&auml;st och samtycker till sekretesspolicyn.</span>');

define('HEADING_PAYPAL', 'PayPal Express Checkout');
define('TEXT_PAYPAL_INTRODUCTION_SPLIT', 'Har du ett PayPal konto? Vill du betala snabbt med kreditkort? Anv&auml;nd PayPal knappen nedan f&ouml;r att anv&auml;nda Express Checkout-alternativet.');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Ny kund? ange din information h&auml;r');
//displayed if the customer does not have any items in their shopping cart (ie. they have elected to register or sign in)
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT_NO_CART', 'F&ouml;r att b&ouml;rja kassa f&ouml;rfarandet, ange din betalningsinformation som det visas p&aring; ditt kontoutdrag.');
//displayed if the customer has items in their shopping cart (to promote registering and continuing the checkout process)
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'F&ouml;r att skapa konto, ange din betalningsinformation som det visas p&aring; ditt kontoutdrag.');
define('ENTRY_EMAIL_ADDRESS', 'E-post:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Bekr&auml;fta e-post:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM_ERROR', 'E-postadresserna &auml;r inte lika.'); 
define('ENTRY_COPYBILLING', 'Samma betalning/leveransadress');
define('ENTRY_COPYBILLING_TEXT', '');

// greeting salutation
define('EMAIL_SUBJECT', 'V�lkommen till ' . STORE_NAME);
define('EMAIL_GREET_MR', 'B�ste %s,' . "\n\n");
define('EMAIL_GREET_MS', 'B�ste %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'B�ste %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Vi v�lkomnar er till <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Grattis! F�r att g�ra ditt n�sta bes�k p� v�r online shop en mer givande upplevelse, nedan �r detaljer f�r en rabattkupong som skapats just f�r dig!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'F�r att anv�nda din kupong ' . TEXT_GV_REDEEM . ' kod i kassan:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Kupongen g�ller mellan %s och %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Bara f�r att du kom f�rbi idag f�r du denna ' . TEXT_GV_NAME . ' f�r %s!' . "\n");
define('EMAIL_GV_REDEEM', '' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' �r: %s ' . "\n\n" . 'Du kan ange ' . TEXT_GV_REDEEM . ' i kassan, efter att du gjort dina val i butiken. ');
define('EMAIL_GV_LINK', ' Eller, kan du l�sa in den p� denna l�nk: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','N�r du lagt till ' . TEXT_GV_NAME . ' till ditt konto, kan du anv�nda din ' . TEXT_GV_NAME . ' sj�lv, eller ge till en v�n!' . "\n\n");

define('EMAIL_TEXT', 'Med ditt konto kan du nu ta del i <strong>varierande tj�nster</strong> vi har att erbjuda dig. N�gra av dessa tj�nster omfattar:' . "\n\n" . '<li><strong>Permanent kundkorg</strong> -Alla produkter som l�ggs till din online varukorg kvar d�r tills du tar bort dem, eller avslutar i kassan.' . "\n\n" . '<li><strong>Addressbok</strong> - Vi kan nu leverera produkter till annan adress �n din! Detta �r perfekt att skicka f�delsedagspresenter direkt till f�delsedagen-person sj�lva.' . "\n\n" . '<li><strong>Order Historik</strong> - Visa ordrarna Ni gjort hos oss.' . "\n\n" . '<li><strong>Produkt Omd�mmen</strong> - Dela er �sikt om produkten till andra.' . "\n\n");
define('EMAIL_CONTACT', 'F�r hj�lp med dessa tj�nster skicka e-post till: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','H�lsningar,' . "\n\n" . STORE_OWNER . "\nButiksinnehavaren\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Den h�r e-postadressen gavs till oss av dig eller av en av v�ra kunder. Om du inte registrera dig f�r ett konto, eller k�nner att du har f�tt detta mail, v�nligen skicka ett mail till %s ');
// eof

define('ERROR_SECURITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det fanns en s�kerhet fel n�r du f�rs�ker logga in.');

define('TEXT_LOGIN_BANNED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel: �tkomst nekad.');