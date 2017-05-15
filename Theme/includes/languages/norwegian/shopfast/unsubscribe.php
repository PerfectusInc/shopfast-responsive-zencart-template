<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE', 'Avbestill nyhetsbrev');
define('HEADING_TITLE', 'Avbestill vårt nyhetsbrev');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Dersom du vil se gjennom vår personvernerklæring, kan du <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><u>lese vår personvernerklæring her</u></a>.<br /><br />I våre nyhetsbrev sender vi ut informasjon om nye produkter, prisavslag, og andre nyheter.<br /><br />Dersom du ikke ønsker å motta dette, vennligst trykk på knappen under. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Dersom du vil se gjennom vår personvernerklæring, kan du <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><u>lese vår personvernerklæring her</u></a>.<br /><br />I våre nyhetsbrev sender vi ut informasjon om nye produkter, prisavslag, og andre nyheter.<br /><br />Dersom du ikke ønsker å motta dette, vennligst trykk på knappen under. Du vil bli sendt til siden "Min konto -> Abonnement for nyhetsbrev", hvor du kan ta bort markeringene for de nyhetsbrevene du ikke ønsker å motta. Dersom du ikke allerede har logget inn, vil du bli bedt om å logge inn.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Din e-postadresse har nå blitt fjernet fra vår nyhetsbrevliste. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />E-postadressen du skrev inn ble ikke funnet i vår nyhetsbrev-database (kanskje du allerede har fjernet den?). Dette betyr at denne e-postadressen ikke vil motta nyhetsbrev fra oss. <br /><br />');
