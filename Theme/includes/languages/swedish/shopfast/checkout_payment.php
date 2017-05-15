<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 */
  /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('NAVBAR_TITLE_1', 'Kassa - Steg 1');
define('NAVBAR_TITLE_2', 'Betalnings metod - Steg 2');

define('HEADING_TITLE', 'Steg 2 av 3 - Betalnings Information');

define('TABLE_HEADING_BILLING_ADDRESS', 'Faktureringsadress');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Din faktureringsadress visas till v&auml;nster. Din faktureringsadress m&aring;ste st&auml;mma med din betalkorts &auml;gare. Du kan &auml;ndra faktureringsadress genom att klicka p&aring; <em>&Auml;ndra adress</em> knappen.');
define('TITLE_BILLING_ADDRESS', 'Faktureringsadress:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Betalnings metod');
define('TEXT_SELECT_PAYMENT_METHOD', 'V&auml;nligen v&auml;lj en betalnings metod f&ouml;r denna order.');
define('TITLE_PLEASE_SELECT', 'V&auml;nligen v&auml;lj');
define('TEXT_ENTER_PAYMENT_INFORMATION', '');
define('TABLE_HEADING_COMMENTS', 'Extra instruktioner eller order kommentarer');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Inte tillg&auml;nglig f&ouml;r tillf&auml;llet');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Beklagar, vi kan inte leverera till ditt omr&aring;de f&ouml;r tillf&auml;llet.</span><br />V&auml;nligen kontakta oss f&ouml;r mer information.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Forts&auml;tt till Steg 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- f&ouml;r att bekr&auml;fta din order.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Betalningsvillkor</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">V&auml;nligen bekr&auml;fta betalningsvillkoren f&ouml;r denna order genom att markera f&ouml;ljande ruta. Villkoren kan l&auml;sas <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">h&auml;r</span></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Jag har l&auml;st och godk&auml;nt betalningsvillkoren</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Belopp som skall betalas: ');
define('TEXT_YOUR_TOTAL','Din Total');
?>