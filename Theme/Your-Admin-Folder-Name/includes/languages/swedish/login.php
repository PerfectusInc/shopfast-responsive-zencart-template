<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 19286 2011-07-28 15:42:33Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Administrations Inloggning');
define('HEADING_TITLE_EXPIRED', 'Administrations Inloggning - L&ouml;senordet har g&aring;tt ut');

define('TEXT_ADMIN_NAME', 'Anv&auml;ndare:');
define('TEXT_ADMIN_PASS', 'L&ouml;senord:');


define('TEXT_ADMIN_OLD_PASSWORD', 'Gammalt l&ouml;senord:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Nytt l&ouml;senord:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'bekr&auml;fta l&ouml;senord:');

define('ERROR_WRONG_LOGIN', 'Du har angivit fel anv&auml;ndarnamn och l&ouml;senord.');
define('ERROR_SECURITY_ERROR', 'Ett s&auml;kerhetsfel har uppst&aring;tt.');

define('TEXT_PASSWORD_FORGOTTEN', 'Gl&ouml;mt l&ouml;senord');

define('LOGIN_EXPIRY_NOTICE', 'Observera att efter 15 minuters inaktivitet, kommer du vara tvungen att logga in igen.<br /><br />Notera: Alla l&ouml;senord g&aring;r ut efter 90 dagar.');
define('ERROR_PASSWORD_EXPIRED', 'NOTERA: Ditt l&ouml;senord har g&aring;tt ut. V&auml;nligen v&auml;lj ett nytt l&ouml;senord. Ditt l&ouml;senord <strong>M&aring;ste inneh&aring;lla NUMMER och BOKST&Auml;VER och minst 7 tecken.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Av s&auml;kerhets orsaker, ditt tillf&auml;lliga l&ouml;senord m&aring;ste &auml;ndras. V&auml;nligen v&auml;lj ett nytt l&ouml;senord.<br />Ditt l&ouml;senord <strong>M&aring;ste inneh&aring;lla NUMMER och BOKST&Auml;VER och minst 7 tecken.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Administrat�rs inloggning misslyckat notering');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Viktiga noteringar: Det har varit ett antal misslyckade inloggningsf�rs�k till ditt administrativa konto. F�r ditt skydd och systemets s�kerhet, efter 6 f�rs�k blir ditt konto l�st f�r minst 30 minuter, under denna tid kommer du inte kunna logga in �ven om du kommer p� vilket l�senordet var. om ytterligare f�rs�k g�rs l�ses den i ytterligare 30 minuter. Du kommer inte kunna g�ra l�senords�terst�llning under denna tid. Ber om urs�kt f�r besv�ret.' . "\n\nSenaste inloggningsf�rs�ket var fr�n IP adress: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Notera: Ditt l&ouml;senord har g&aring;tt ut eftersom din butik har &auml;ndrats fr&aring;n icke-SSL (mindre s&auml;ker) till SSL-skyddad (mer s&auml;ker). &Auml;ndra ditt l&ouml;senord under SSL &auml;r ett viktigt steg f&ouml;r h&ouml;gre s&auml;kerhet- Beklagar om det st&auml;ller till besv&auml;r. Standard l&ouml;senord utg&aring;ngs regler.');
