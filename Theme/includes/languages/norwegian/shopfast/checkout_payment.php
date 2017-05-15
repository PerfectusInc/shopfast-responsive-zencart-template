<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 105 2012-03-26 18:40:42Z syntaxerror.no $
 */

define('NAVBAR_TITLE_1', 'Kasse - Steg 1');
define('NAVBAR_TITLE_2', 'Betalingsm�te - Steg 2');

define('HEADING_TITLE', 'Steg 2 av 3 - Betalingsinformasjon');

define('TABLE_HEADING_BILLING_ADDRESS', 'Fakturaadresse');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Du kan endre betalingsadressen ved � trykke p� knappen <em>Endre adresse</em>.');
define('TITLE_BILLING_ADDRESS', 'Fakturaadresse:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Betalingsm�te');
define('TEXT_SELECT_PAYMENT_METHOD', 'Vennligst velg betalingsm�ten for denne ordren.');
define('TITLE_PLEASE_SELECT', 'Vennligst velg');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Dette er p� dette tidspunkt den eneste betalingsm�ten tilgjengelig i v�r butikk.');
define('TABLE_HEADING_COMMENTS', 'Kommentarer til ordren');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Ikke tilgjengelig for �yeblikket');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Beklager, men vi har ingen betalingsvalg tilgjengelig for ditt land/omr�de for �yeblikket.</span><br />Ta kontakt for � avtale alternativ l�sning.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Fortsett til steg 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- for � kontrollere din ordre.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">V�re betingelser</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Vennligst bekreft at du har lest og akseptert v�re betingelser tilknyttet denne ordren ved � krysse av for dette i boksen nedenfor. <a target="_blank" href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>Klikk her for � lese v�re betingelser</u></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Jeg har lest og akseptert betingelsene tilknyttet denne ordren.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Totalsum: ');
define('TEXT_YOUR_TOTAL','Din ordretotal');
