<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2012 Rune Rasmussen - http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 99 2012-03-01 15:29:14Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Aktivitetsloggbehandling');
define('HEADING_SUB1', 'Se gjennom eller eksporter logger');
define('HEADING_SUB2', 'Slett logghistorikk');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Filformat:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Filnavn:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Lagre til fil p� server? (Ellers vil den behandles for nedlasting direkte i dette vinduet.)');
define('TEXT_ACTIVITY_EXPORT_DEST','M�l: ');
define('TEXT_PROCESSED', ' Behandlet.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Eksport fullf�rt. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ADVARSEL: Eksport feilet. Kunne ikke skrive til filen ');

define('TEXT_INSTRUCTIONS','<u>INSTRUKSJONER</u><br />Du kan her eksportere Zen Carts aktivitetslogg for administrasjonen til en CSV-fil, for arkivering.<br />Du b�r lagre disse dataene for bruk ved eventuell etterforskning av svindel i tilfelle din side blir kompromittert. Dette er et krav for PCI-sertifisering.<br />
<ol><li>Velg om du vil vise eller eksportere til fil.<li>Fyll inn et filnavn.<li>Klikk \'Kj�r\' for � fortsette.<li>Velg om du vil lagre eller �pne filen, avhengig av hva din nettleser tilbyr.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', 'Klikk p� knapp til h�yre for � t�mme administrasjonens aktivitetslogg.<br />Det er anbefalt at du tar sikkerhetskopi av database f�r du kj�rer denne operasjonen.<br /><br />Administrasjonens aktivitetslogg overv�ker aktivitetene i administrasjonen.<br />Som f�lge av funksjonens natur kan den raskt fylle opp mye plass i databasen, og b�r derfor t�mmes av og til.<br />Advarsler gis ved 50.000 oppf�ringer, eller etter 60 dager, ettersom hva som kommer f�rst.<br /><span class="alert"><br />MERK: For PCI sertifisering er det et krav at du har tilgang til administrasjonens aktivitetslogg for 12 m�neder tilbake i tid.<br />Det er anbefalt � arkivere loggene ved � velge \'Export to CSV\' og deretter klikke \'Kj�r\' ovenfor, <b>F�R</b> du t�mmer aktivitetsloggen.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<span class="alert">Merk: Du er i ferd med � slette viktige sporingsdata fra databasen.</span><br /><br />Du b�r derfor p�se at du har en p�litelig <strong>sikkerhetskopi</strong> av databasen f�r du g�r videre.<br />Ved � g� videre aksepterer du at informasjonen blir slettet, og bekrefter at du kjenner ditt juridiske ansvar for disse data.<br /><br />Jeg forst�r mitt ansvar, og �nsker � fortsette slettingen ved � klikke p� knappen nedenfor.<br /><br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', 'T�mming av aktiviteslogg for administrasjonen er fullf�rt.');

