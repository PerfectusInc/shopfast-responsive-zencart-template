<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Nieuwsbrief- en productnotificatie manager');

define('TABLE_HEADING_NEWSLETTERS', 'Nieuwsbrieven');
define('TABLE_HEADING_SIZE', 'Grootte');
define('TABLE_HEADING_MODULE', 'Module');
define('TABLE_HEADING_SENT', 'Verstuurd');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_NEWSLETTER_MODULE', 'Module:');
define('TEXT_NEWSLETTER_TITLE', 'Onderwerp:');
define('TEXT_NEWSLETTER_CONTENT', 'Alleen tekst <br />Inhoud:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Opgemaakte tekst <br />Inhoud:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Datum verzonden:');

define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze nieuwsbrief wilt verwijderen?');

define('TEXT_PLEASE_WAIT', 'Even geduld .. e-mails aan het versturen ..<br /><br />Zorg er voor dat dit proces niet wordt onderbroken!');
define('TEXT_FINISHED_SENDING_EMAILS', 'E-mails verzonden!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s e-mails verwerkt. (Elke checkbox staat voor 1 ontvanger. Beweeg over de checkbox om het e-mailadres te bekijken.)<br /><br />Let op je mailbox van ('.EMAIL_FROM.') in verband met:<ul><li>a) bounce berichten</li><li>b) e-mailadressen die niet langer bestaan</li><li>c) verzoeken tot verwijdering</li></ul>Verwijderen kan via Admin -> Klanten -> Klantgegevens.');

define('ERROR_NEWSLETTER_TITLE', 'Foutmelding: Onderwerp van nieuwsbrief verplicht.');
define('ERROR_NEWSLETTER_MODULE', 'Foutmelding: Module nieuwsbrief nodig.');
define('ERROR_PLEASE_SELECT_AUDIENCE','Foutmelding: Selecteer een doelgroep voor deze nieuwsbrief');
?>