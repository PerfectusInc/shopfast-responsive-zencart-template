<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: usps.php 293 2008-05-28 21:10:40Z maleborg $
 * @translated/edited and adapted for ZC v1.3.9(x) 2010-06-21 12:13:30Z frank18 $
 */

define('MODULE_SHIPPING_USPS_TEXT_TITLE', 'USA Post Service');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'USA Post Service<br /><br />Sie m�ssen ein Web Tools Konto bei USPS at <a href="http://www.usps.com/webtools/" target="_blank">Webseite</a> haben um dieses Modul zu nutzen.<br /><br />USPS erwartet <strong>pounds als Gewichtseinheit</strong> f�r Ihre Produkte.' . ((MODULE_SHIPPING_USPS_USERID == 'NONE' || MODULE_SHIPPING_USPS_USERID == '' || MODULE_SHIPPING_USPS_SERVER == 'test') ? '<br /><br /><strong>F�r USPS realtime Versandberechung registrieren</strong><br />
1. <a href="http://www.usps.com/webtools/rate.htm" target="_blank">Information �ber USPS und Versandkosten</a><br />
2. <a href="https://secure.shippingapis.com/registration/" target="_blank">Erstellen Sie ein USPS Web Tools Konto</a><br />
3. Komplettieren Sie Ihre pers�nlichen Angaben und klicken Sie auf Submit<br />
4. Sie werden eine E-Mail mit Ihren USPS Geb�hren und Web Tools User ID erhalten<br />
5. F�gen Sie Ihre Web Tools User ID in das Zen Cart USPS Versand Modul ein.<br />
6. Rufen Sie USPS 1-800-344-7779 und bitten Sie, Ihr Konto auf den Production Server zu aktivieren oder schicken Sie eine E-Mail an icustomercare@usps.com und geben Sie Ihre Web Tools User ID an.<br />
7. Sie werden eine weitere Best�tigungs E-Mail erhalten. Aktivieren Sie im Zen Cart das Modul in Production Mode (anstatt von Test Mode) um die Aktivierung zu vervollst�ndigen.': ''));
define('MODULE_SHIPPING_USPS_TEXT_OPT_PP', 'Postp�ckchen');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PM', 'Priority Postsendung');
define('MODULE_SHIPPING_USPS_TEXT_OPT_EX', 'Express Postsendung');
define('MODULE_SHIPPING_USPS_TEXT_ERROR', 'Leider k�nnen wir keine passende USPS Versandkosten f�r die von Ihnen verwendete Versandadresse ermitteln.<br />Falls Sie USPS Landbef�rderung als Versandmethode verwenden wollen, bitte kontaktieren Sie uns f�r Ihr Angebot.<br />(Bitte stellen Sie sicher, da� die Postleitzahl richtig ist.)');
define('MODULE_SHIPPING_USPS_TEXT_SERVER_ERROR', 'Es ist ein Fehler bei der Ermittlung der USPS Versandkosten aufgetreten.<br />Falls Sie USPS Landbef�rderung als Versandmethode verwenden m�chten, nehmen Sie bitte Kontakt mit den Online Shop auf.');
define('MODULE_SHIPPING_USPS_TEXT_DAY', 'Tag');
define('MODULE_SHIPPING_USPS_TEXT_DAYS', 'Tage');
define('MODULE_SHIPPING_USPS_TEXT_WEEKS', 'Wochen');
define('MODULE_SHIPPING_USPS_TEXT_TEST_MODE_NOTICE', '<br /><span class="alert">Ihr Konto ist noch im TEST MODE. Bitte erwarten Sie keine USPS Versandkostenermittlung bis Ihr Konto auf dem Production Server l�uft (1-800-344-7779) und Sie das Modul im Zen Cart admin in Real Mode aktiviert haben.</span>');

?>