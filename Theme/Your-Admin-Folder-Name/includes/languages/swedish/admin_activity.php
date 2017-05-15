<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 18695 2011-05-04 05:24:19Z drbyte $
 */
  /* Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */


define('HEADING_TITLE', 'Admin Aktivitets Logg hantering');
define('HEADING_SUB1', 'Granska eller Exportera Loggar');
define('HEADING_SUB2', 'Rensa Logg Historik');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Export Fil Format:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Export Filenamn:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Spara till fil p&aring; server? (annars f&ouml;r nedladdning direkt fr&aring;n detta f&ouml;nster)');
define('TEXT_ACTIVITY_EXPORT_DEST','Destination: ');
define('TEXT_PROCESSED', ' Bearbetade.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Export f&auml;rdig. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'Varning: Export misslyckad. kunde inte skriva till filen ');

define('TEXT_INSTRUCTIONS','<u>INSTRUKTIONER</u><br />Du kan anv&auml;nda denna sida f&ouml;r att exportera Zen Cart&trade; Admin anv&auml;ndares Inloggnings aktiviteter till en CSV fil f&ouml;r arkivering.<br />Du skall spara denna information f&ouml;r bedr&auml;geriutredningar om din webbplats &auml;ventyras. Detta &auml;r ett krav f&ouml;r PCI efterlevnad.<br />
<ol><li>V&auml;lj du vill visa eller exportera till en fil.<li>Ange ett filenamn.<li>Klicka p&aring; Spara f&ouml;r att forts&auml;tta.<li>V&auml;lj om du vill spara eller &ouml;ppna filen, beroende p&aring; din webbl&auml;sares m&ouml;jligheter.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>T&ouml;m Admin Aktivitets Logg tabellen fr&aring;n databasen<br />VARNING: SE TILL ATT TA BACKUP P&Aring; DATABASEN f&ouml;re du k&ouml;r denna uppdatering!</strong><br />Admin Aktivitets Logg &auml;r en sp&aring;rnings metod som kontrollerar aktiviteter i Admin. <br />P&aring; grund av dess natur  kan de bli mycket stora, mycket snabbt och beh&ouml;ver rensas ut fr&aring;n g&aring;ng till g&aring;ng.<br />Varnings ges vid 50,000 poster eller efter 60 dagar, beroende p&aring; vilket som sker f&ouml;rst.<br /><span class="alert">NOTERA: F&ouml;r PCI efterlevnad, &auml;r du rekommenderad att spara din logg historik i 12 m&aring;nader.<br />Det &auml;r b&auml;st att arkivera dina loggar genom att v&auml;lja Exportera till CSV och klicka p&aring; Spara, ovan, * innan * rensning av loggdata.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">VARNING!: Du h&aring;ller p&aring; att RADERA *viktig* verifieringskedje poster fr&aring;n din databas.</span></strong><br />Du skall F&Ouml;RST bekr&auml;fta att du har en korrekt BACKUP av din databas innan du forts&auml;tter.<br />Genom att forts&auml;tta bekr&auml;ftar du att denna information kommer att tas bort och f&ouml;rst&aring; din juridiska ansvar n&auml;r det g&auml;ller dessa data.<br /><br />Jag f&ouml;rst&aring;r mitt ansvar, och vill forts&auml;tta med borttagningen genom att klicka p&aring; &Aring;terst&auml;ll:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Avslutat</strong> rensningen av Admin Aktivitets logg');

