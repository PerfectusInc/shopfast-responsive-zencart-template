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
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Lagre til fil på server? (Ellers vil den behandles for nedlasting direkte i dette vinduet.)');
define('TEXT_ACTIVITY_EXPORT_DEST','Mål: ');
define('TEXT_PROCESSED', ' Behandlet.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Eksport fullført. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ADVARSEL: Eksport feilet. Kunne ikke skrive til filen ');

define('TEXT_INSTRUCTIONS','<u>INSTRUKSJONER</u><br />Du kan her eksportere Zen Carts aktivitetslogg for administrasjonen til en CSV-fil, for arkivering.<br />Du bør lagre disse dataene for bruk ved eventuell etterforskning av svindel i tilfelle din side blir kompromittert. Dette er et krav for PCI-sertifisering.<br />
<ol><li>Velg om du vil vise eller eksportere til fil.<li>Fyll inn et filnavn.<li>Klikk \'Kjør\' for å fortsette.<li>Velg om du vil lagre eller åpne filen, avhengig av hva din nettleser tilbyr.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', 'Klikk på knapp til høyre for å tømme administrasjonens aktivitetslogg.<br />Det er anbefalt at du tar sikkerhetskopi av database før du kjører denne operasjonen.<br /><br />Administrasjonens aktivitetslogg overvåker aktivitetene i administrasjonen.<br />Som følge av funksjonens natur kan den raskt fylle opp mye plass i databasen, og bør derfor tømmes av og til.<br />Advarsler gis ved 50.000 oppføringer, eller etter 60 dager, ettersom hva som kommer først.<br /><span class="alert"><br />MERK: For PCI sertifisering er det et krav at du har tilgang til administrasjonens aktivitetslogg for 12 måneder tilbake i tid.<br />Det er anbefalt å arkivere loggene ved å velge \'Export to CSV\' og deretter klikke \'Kjør\' ovenfor, <b>FØR</b> du tømmer aktivitetsloggen.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<span class="alert">Merk: Du er i ferd med å slette viktige sporingsdata fra databasen.</span><br /><br />Du bør derfor påse at du har en pålitelig <strong>sikkerhetskopi</strong> av databasen før du går videre.<br />Ved å gå videre aksepterer du at informasjonen blir slettet, og bekrefter at du kjenner ditt juridiske ansvar for disse data.<br /><br />Jeg forstår mitt ansvar, og ønsker å fortsette slettingen ved å klikke på knappen nedenfor.<br /><br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', 'Tømming av aktiviteslogg for administrasjonen er fullført.');

