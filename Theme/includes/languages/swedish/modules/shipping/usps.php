<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: usps.php 4867 2006-10-31 09:59:01Z drbyte $
 */
/*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('MODULE_SHIPPING_USPS_TEXT_TITLE', 'United States Postal Service');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'United States Postal Service<br /><br />DU m&aring;ste vara registrerad kund hos USPS : <a href="http://www.usps.com/webtools/" target="_blank">Hemsidan</a>, f&ouml;r att anv&auml;nda detta frakts&auml;tt.<br /><br />USPS kr&auml;ver att du anv&auml;nder <strong> pounds som vikt</strong> f&ouml;r dina produkter.' . ((MODULE_SHIPPING_USPS_USERID == 'NONE' || MODULE_SHIPPING_USPS_USERID == '' || MODULE_SHIPPING_USPS_SERVER == 'test') ? '<br /><br /><strong>Kundbaserad USPS frakttabell</strong><br />
1. <a href="http://www.usps.com/webtools/rate.htm" target="_blank">Info om USPS och kostnader</a><br />
2. <a href="https://secure.shippingapis.com/registration/" target="_blank">SKapa ett USPS Web Tools konto</a><br />
3. Fyll i din kundinformation<br />
4. Du kommer f&aring; ett meddelande med USPS Web Tools User ID<br />
5. Ange Web Tools User ID idin administrations USPS frakt modul.<br />
6. Ring USPS +1-800-344-7779 och be dem flytta ditt konto till produktions servern eller skicka ett epost meddelande om detta till icustomercare@usps.com, inneh&aring;llande ditt Web Tools User ID.<br />
7. De kommer skicka ytterligare bekr&auml;ftelse e-post. S&auml;tt din butik i produktionsl&auml;ge (ist&auml;llet f&ouml;r Test L&auml;ge) f&ouml;r att avlsuta aktiveringen.': ''));
define('MODULE_SHIPPING_USPS_TEXT_OPT_PP', 'Postpaket');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PM', 'Prioriterad post');
define('MODULE_SHIPPING_USPS_TEXT_OPT_EX', 'Express post');
define('MODULE_SHIPPING_USPS_TEXT_ERROR', 'Vi kunde inte hitta n&aring;gon m&auml;jlig USPS frakt tabell som st&auml;mmer in p&aring; din leverans.<br />Om du f&ouml;redrar att anv&auml;nda USPS som din fraktmetod, kontakta oss f&ouml;r assistans.<br />(Kontrollera att r&auml;tt postnummer (zip) &auml;r anv&auml;nd.)');
define('MODULE_SHIPPING_USPS_TEXT_SERVER_ERROR', 'Ett fel uppstod n&auml;r f&ouml;rs&ouml;k att n&aring; USPS frakt tabell.<br />Om du f&ouml;redrar USPS som din fraktmetod, v&auml;nligen kontakta butiken.');
define('MODULE_SHIPPING_USPS_TEXT_DAY', 'dag');
define('MODULE_SHIPPING_USPS_TEXT_DAYS', 'dagar');
define('MODULE_SHIPPING_USPS_TEXT_WEEKS', 'Veckor');
define('MODULE_SHIPPING_USPS_TEXT_TEST_MODE_NOTICE', '<br /><span class="alert">Ditt konto &auml;r i TEST L&Auml;GE. R&auml;kna inte med att se aktuell kurs innan USPS konto flyttats till produktionen servern (+1-800-344-7779) och du satt butiken till att inte vara i TEST L&Auml;GE i Zen Cart admin.</span>');

?>