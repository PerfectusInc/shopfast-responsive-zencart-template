<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: ajeh  Mon Dec 3 19:32:36 2012 -0500 Modified in v1.5.2 $
 */

define('TOP_BAR_TITLE', 'Statistieken');
define('HEADING_TITLE', 'Kortingsbonnen');
define('HEADING_TITLE_STATUS', 'Status: ');
define('TEXT_CUSTOMER', 'Klant:');
define('TEXT_COUPON', 'Naam kortingsbon');
define('TEXT_COUPON_ALL', 'Alle kortingsbonnen');
define('TEXT_COUPON_ACTIVE', 'Actieve kortingsbonnen');
define('TEXT_COUPON_INACTIVE', 'Inactieve kortingsbonnen');
define('TEXT_SUBJECT', 'Onderwerp:');
define('TEXT_UNLIMITED', 'Onbeperkt');
define('TEXT_FROM', 'Van:');
define('TEXT_FREE_SHIPPING', 'Gratis verzenden');
define('TEXT_MESSAGE', 'Boodschap:');
define('TEXT_RICH_TEXT_MESSAGE','Rich-Text boodschap:');
define('TEXT_SELECT_CUSTOMER', 'Selecteer klant(en)');
define('TEXT_ALL_CUSTOMERS', 'Alle klanten');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Alle nieuwsbriefontvangers');
define('TEXT_CONFIRM_DELETE', 'Weet je zeker dat je deze kortingsbon wilt verwijderen?');
define('TEXT_SEE_RESTRICT', 'Voor deze kortingsbon gelden beperkingen');

define('TEXT_COUPON_ANNOUNCE','Het doet ons een genoegen u een kortingsbon voor ' . STORE_NAME . ' aan te kunnen bieden.');

define('TEXT_TO_REDEEM', 'U kunt het tegoed van deze kortingsbon inwisselen tijdens het afrekenen in onze winkel. U hoeft alleen de inwisselcode in te voeren in het veld dat daarvoor beschikbaar is en vervolgens op de knop "Volgende" te drukken. Uw tegoed wordt bijgeschreven in uw Account en is direct beschikbaar om te gebruiken.');
define('TEXT_IN_CASE', ' in het geval u problemen heeft. ');
define('TEXT_VOUCHER_IS', 'De inwisselcode van de kortingsbon is ');
define('TEXT_REMEMBER', 'Wilt u er voor zorgen dat u de inwisselcode van uw kortingsbon veilig opslaat? Alleen dan kunt u profiteren van deze speciale aanbieding op ieder door u gewenst moment.');
define('TEXT_VISIT', 'Bezoek onze winkel op %s');
define('TEXT_ENTER_CODE', ' en vul de inwisselcode in ');
define('TEXT_COUPON_HELP_DATE', '<p>De kortingsbon is geldig tussen %s en %s</p>');
define('HTML_COUPON_HELP_DATE', '<p>De kortingsbon is geldig tussen %s en %s</p>');

define('TABLE_HEADING_ACTION', 'Actie');

define('CUSTOMER_ID', 'Klant ID');
define('CUSTOMER_NAME', 'Klantnaam');
define('REDEEM_DATE', 'Datum ingewisseld');
define('IP_ADDRESS', 'IP adres');

define('TEXT_REDEMPTIONS', 'Aantal keer inwisselen kortingsbonnen');
define('TEXT_REDEMPTIONS_TOTAL', 'Totaal');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Door deze klant');
define('TEXT_NO_FREE_SHIPPING', 'Geen gratis verzending');

define('NOTICE_EMAIL_SENT_TO', 'Opmerking: e-mail verstuurd aan: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Foutmelding: geen klant geselecteerd.');
define('ERROR_NO_SUBJECT', 'Foutmelding: geen onderwerp ingevuld.');

define('COUPON_NAME', 'Naam kortingsbon:');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Waarde kortingsbon:');
define('COUPON_CODE', 'Inwisselcode kortingsbon:');
define('COUPON_STARTDATE', 'Startdatum:');
define('COUPON_FINISHDATE', 'Vervaldatum:');
define('COUPON_FREE_SHIP', 'Gratis verzenden:');
define('COUPON_DESC', 'Beschrijving kortingsbon:<br />(Is zichtbaar voor klant)');
define('COUPON_MIN_ORDER', 'Minimale bestelwaarde kortingsbon:');
define('COUPON_USES_COUPON', 'Maximum aantal keer gebruik kortingsbon:');
define('COUPON_USES_USER', 'Maximum aantal keer gebruik kortingsbon per klant:');
define('COUPON_PRODUCTS', 'Geldige artikellijst');
define('COUPON_CATEGORIES', 'Geldige categorielijst');
define('VOUCHER_NUMBER_USED', 'Gebruikt nummer');
define('DATE_CREATED', 'Datum toegevoegd');
define('DATE_MODIFIED', 'Datum laatste wijziging');
define('TEXT_HEADING_NEW_COUPON', 'Maak nieuwe kortingsbon');
define('TEXT_NEW_INTRO', 'Voer de nieuwe kortingsbon in met alle relevante gegevens<br />');
define('COUPON_ZONE_RESTRICTION', 'Coupon Zone Restrictie: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Coupon Zone Restrictie is een optie.');

define('ERROR_NO_COUPON_AMOUNT', '<strong>Foutmelding:</strong> geen waarde van de kortingsbon ingevuld.');
define('ERROR_NO_COUPON_NAME', '<strong>Foutmelding:</strong> geen naam van de kortingsbon ingevuld.');
define('ERROR_COUPON_EXISTS', '<strong>Foutmelding:</strong> een kortingsbon met die code bestaat al.');


define('COUPON_NAME_HELP', 'Een korte naam voor de kortingsbon (bijv. NK1eB= NieuweKlant1eBezoek).');
define('COUPON_AMOUNT_HELP', 'De korting die deze bon geeft. Dit kan een vast bedrag zijn (bijv. &euro;5) of percentage (bijv. 3%) op het eindbedrag.');
define('COUPON_CODE_HELP', 'Indien niets ingevuld wordt er automatisch een code voor de kortingsbon aangemaakt en anders kun je zelf een code samenstellen.');
define('COUPON_STARTDATE_HELP', 'Deze coupon is geldig vanaf');
define('COUPON_FINISHDATE_HELP', 'Deze coupon verloopt op');
define('COUPON_FREE_SHIP_HELP', 'De kortingsbon geeft recht op <strong>gratis</strong> verzenden. <strong>Opmerking:</strong> dit gaat voor de waarde ingevuld bij COUPON_AMOUNT maar houd wel rekening met de minimale waarde van een bestelling.');
define('COUPON_DESC_HELP', 'Een beschrijving van de kortingsbon als uitleg voor de klant.');
define('COUPON_MIN_ORDER_HELP', 'Minimum waarde van de bestelling voordat de kortingsbon geldig is en gebruikt kan worden (bijv. vanaf €50 bestelling excl. verzenden en BTW.)');
define('COUPON_USES_COUPON_HELP', 'Het aantal keer dat de kortingsbon gebruikt kan worden door iedereen. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_USES_USER_HELP', 'Het aantal keer dat de kortingsbon door <strong>één klant</strong> kan worden gebruikt. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_PRODUCTS_HELP', 'Een comma separated (.csv) lijst met artikelen waar deze kortingsbon geldig voor is. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_CATEGORIES_HELP', 'Een comma separated (.csv) lijst met categorieën waar deze kortingsbon geldig voor is. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_BUTTON_PREVIEW', 'Voorvertoning');
define('COUPON_BUTTON_CONFIRM', 'Bevestig');
define('COUPON_BUTTON_BACK', 'Terug');

define('COUPON_ACTIVE', 'Status');
define('COUPON_START_DATE', 'Startdatum');
define('COUPON_EXPIRE_DATE', 'Vervaldatum');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Foutmelding: de kortingsbon kan NIET ingetrokken worden. Deze kortingsbon is de Welkomst-kortingsbon<br /><br />Verander eerst de Welkomst-kortingsbon, probeer het dan opnieuw.');
define('SUCCESS_COUPON_DISABLED', 'Uitgevoerd! Kortingsbon is inactief ...');
define('TEXT_COUPON_NEW', 'Gebruik de NIEUWE kortingsbon-code:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'WAARSCHUWING! Duplicaat kortingsbon bestaat ... Kopieren niet uitgevoerd voor kortingsbon-code: ');
define('TEXT_CONFIRM_COPY', 'Weet u zeker dat u deze kortingsbonwenst te kopieren naar een andere kortingsbon?');
define('SUCCESS_COUPON_DUPLICATE', 'Uitgevoerd! Kortingsbon is gekopieerd...<br /><br />Controleer de kortingsbon-NAAM en geldigheidsdata ...');
?>