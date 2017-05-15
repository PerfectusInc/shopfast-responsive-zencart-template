<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 19537 2011-09-20 17:14:44Z drbyte $
 */

define('HEADING_TITLE', 'Admin Activity Log Manager');
define('HEADING_SUB1', 'Bekijk of exporteer Logs');
define('HEADING_SUB2', 'Loggeschiedenis opschonen');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Exporteer bestandsformaat:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Exporteer filenaam:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Opslaan naar bestand op de server? (anders wordt het bestand direct gedownload van dit venster)');
define('TEXT_ACTIVITY_EXPORT_DEST','Bestemming: ');
define('TEXT_PROCESSED', ' Verwerkt.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exporteren afgerond. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'Waarschuwing: Exporteren mislukt. Het is niet gelukt om naar het bestand te schrijven ');

define('TEXT_INSTRUCTIONS','<u>Instructies</u><br />U kunt deze pagina gebruken om uw Zen Cart&reg; Admin User Access Activity te exporteren naar een CSV file voor archivering.<br />U zou deze informatie moeten bewaren in het geval van fraude onderzoek, als uw site is gehacked. Dit is verplicht voor PCI Compliance.<br />
<ol><li>Kies om op het scherm te bekijken, of om te exporteren naar een bestand.<li>Geef een bestandsnaam op.<li>Klick Opslaan om verder te gaan.<li>Kies voor opene nof opslaan van het bestand, afhankelijk van wat uw browser aanbied.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Leeg de Admin Activity Log tabel in de database<br />WAARSCHUWING: MAAK EERST EEN BACKUP VAN UW DATABASE voordat u deze update uitvoerd!</strong><br />The Admin Activity Log is een volgmethode dat de activiteit in de Admin vastlegt. <br />De log kan heel snel, heel groot worden, en moet van tijd tot tijd opgeschoond worden.<br />Waarschuwingen worden gegeven bij 50,000 records of 60 dagen, welke als eerste zich voordoet.<br /><span class="alert">OPMERKING: Voor PCI Compliance, u bent verplicht om de admin activity log geschiedenis te bewaren voor een periode van 12 maanden.<br />Het is het beste om uw logs te archiveren door te kiezen voor EXPORTEREN NAAT CSV en op save te klikken (zie hierboven), *VOORDAT* de log data geleegd wordt.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">WARNING!: You are about to DELETE *important* audit trail records from your database.</span></strong><br />You should FIRST confirm that you have a reliable BACKUP of your database before proceeding.<br />By proceeding you accept that this information will be deleted and understand your legal responsibilities regarding this data.<br /><br />I understand my responsibilities, and wish to proceed with the deletion by clicking Reset:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Completed</strong> erasure of the Admin Activity log');

