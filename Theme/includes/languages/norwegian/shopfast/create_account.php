<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 */

define('NAVBAR_TITLE', 'Registrer ny konto');

define('HEADING_TITLE', 'Min kontoinformasjon');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">MERK:</strong> Dersom du allerede har en konto hos oss kan du logg inn på <a href="%s">innloggingssiden</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Takk, din kontoforespørsel har blitt registrert for kontroll.');


// greeting salutation
define('EMAIL_SUBJECT', 'Velkommen til ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Kjære herr %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Kjære fr. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Hei %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Vi ønsker deg velkommen til <strong>' . STORE_NAME . '</strong>' . "\n\n");
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Gratulerer! For at ditt neste besøk hos oss skal bli enda mer lønnsomt, mottar du her en personlig tilbudskode som gir deg rabatt på våre produkter!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'For å bruke denne rabatten, skriv inn denne tilbudskoden når du går til kassen:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Rabattkoden er gyldig mellom %s og %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Bare fordi du var innom hos oss i dag gir vi deg herved et gavekort pålydende %s!' . "\n");
define('EMAIL_GV_REDEEM', 'Koden for gavekortet er: %s ' . "\n\n" . 'Du kan skrive inn koden når du går til kassen, etter å ha valgt ut produkter fra butikken vår. ');
define('EMAIL_GV_LINK', ' Eller så kan du bruke det nå, ved å følge denne lenken: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Når du har lagt gavekortet til din konto, kan du bruke det selv eller gi det til en venn!' . "\n\n");

define('EMAIL_TEXT', 'Du er nå registrert i vår nettbutikk med kontofordeler: Med en konto hos oss kan du ta del i de <strong>ulike tjenester</strong> vi tilbyr, noen av disse er:' . "\n\n<ul>" . '<li><strong>Ordrehistorie</strong> - Se detaljene for tidligere ordrer.' . "\n\n" . '<li><strong>Permanent handlekurv</strong> - Produkter som legges i handlekurv forblir der til du sletter eller bestiller dem.' . "\n\n" . '<li><strong>Adressebok</strong> - Vi kan levere dine produkter til en annen enn din faste. Dette er f.eks perfekt for sending av fødselsdagsgaver direkte til mottakeren.' . "\n\n" . '<li><strong>Produktomtaler</strong> - Del dine meninger om våre produkter med andre kunder.' . "\n\n</ul>");
define('EMAIL_CONTACT', 'For hjelp med våre nettjenester kan du sende en e-post til: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE',"\n\n" . 'Med vennlig hilsen,' . "\n" . STORE_OWNER . "\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . '</a>' . "\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Denne e-posten ble sendt til deg fordi noen har registrert en konto hos oss med denne e-postadressen. Dersom du ikke selv har registrert en konto, eller føler at du har mottatt denne e-posten mot din vilje, vennligst gi oss beskjed på %s ');
