<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 21 16:05:31 2012 -0400 Modified in v1.5.1 $
 */

define('NAVBAR_TITLE', 'Mijn account aanmaken');

define('HEADING_TITLE', 'Mijn account informatie');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">NB:</strong> Als u reeds een inlogaccount bij ons heeft dan kunt u inloggen via de <a href="%s">login pagina</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Thank you, your account request has been submitted for review.');


// welkomstgroet
define('EMAIL_SUBJECT', 'Welkom bij ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Geachte heer %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Geachte mevrouw %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Goededag %s' . "\n\n");

// Eerste regel van de welkomstgroet
define('EMAIL_WELCOME', 'Hartelijk welkom bij <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Gefeliciteerd! Om uw volgende bezoek aan onze webshop nog lonender te maken hebben wij speciaal voor u een kortingsbon aangemaakt!' . "\n\n");
// uw kortingsbon omschrijving word voor onderstaande define ingevoegd
define('EMAIL_COUPON_REDEEM', 'Om uw kortingsbon in te wisselen geeft u de ' . TEXT_GV_REDEEM . ' code in tijdens het afrekenen:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>De kortingsbon is geldig tussen %s en %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Als dank voor uw bezoek vandaag ontvangt u ' . TEXT_GV_NAME . ' ter waarde van %s!' . "\n");
define('EMAIL_GV_REDEEM', 'De ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' is: %s ' . "\n\n" . 'U kunt de ' . TEXT_GV_REDEEM . ' gebruiken tijdens het afrekenen van de door u gekozen artikelen. ');
define('EMAIL_GV_LINK', ' Of u kunt de kortingsbon nu verzilveren door op deze link te klikken: ' . "\n");
// Link kortingsbon word automatisch ingevoegd voor deze regel

define('EMAIL_GV_LINK_OTHER','Als u de ' . TEXT_GV_NAME . ' heeft toegevoegd aan uw account kunt u de ' . TEXT_GV_NAME . ' voor uzelf gebruiken of naar bekenden/vrienden van u sturen!' . "\n\n");

define('EMAIL_TEXT', 'Met uw account hebt u toegang tot diverse <strong>online services</strong> die wij u aanbieden. Enkele van deze services zijn bijvoorbeeld:' . "\n\n" . '<li><strong>Permanente winkelwagen</strong> - Elk artikel toegevoegd aan uw winkelwagen zal worden bewaard totdat u deze verwijdert of koopt.' . "\n\n" . '<li><strong>Adressenboek</strong> - Wij kunnen nu uw artikelen naar een iemand anders adres verzenden! Dit is speciaal handig om verjaardagcadeaus direct naar de jarige toe te sturen.' . "\n\n" . '<li><strong>Bestel historie</strong> - Bekijk uw bestelhistorie bij ons.' . "\n\n" . '<li><strong>Recensies</strong> - Deel uw mening over artikelen uit ons assortiment met andere klanten.' . "\n\n");
define('EMAIL_CONTACT', 'Voor vragen over de online services kunt u een e-mail versturen naar: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Vriendelijke groet,' . "\n\n" . STORE_OWNER . "\nEigenaar webshop\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - deze disclaimer staat los van alle overige email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Dit e-mail adres is door u of een van onze klanten aan ons verstrekt. Als u geen account bij ons heeft aangevraagd of als u het vermoeden heeft dit bericht ten onrechte te hebben ontvangen stuurt u dan alstublieft een e-mail naar %s ');
