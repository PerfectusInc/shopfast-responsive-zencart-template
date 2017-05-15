<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Afmelden');
define('HEADING_TITLE', 'Afmelden voor onze nieuwsbrief');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Wij vinden het jammer dat u onze nieuwsbrief niet meer wil ontvangen. Als u twijfelt aan de bescherming van uw persoonsgegevens lees dan onze <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">privacy verklaring</span></a>.<br /><br />Als abonnee op onze nieuwsbrief blijft u op de hoogte van nieuwe artikelen, aanbiedingen en informatie over onze webwinkel.<br /><br />Als u zich toch wil afmelden voor onze nieuwsbrief klik dan op onderstaande knop. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Wij vinden het jammer dat u onze nieuwsbrief niet meer wil ontvangen. Als u twijfelt aan de bescherming van uw persoongegevens lees dan onze <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">privacy verklaring</span></a>.<br /><br />Als abonnee op onze nieuwsbrief blijft u op de hoogte van nieuwe artikelen, aanbiedingen en informatie over onze webwinkel.<br /><br />Als u zich toch wil afmelden voor onze nieuwsbrief klik dan op onderstaande knop. U gaat dan naar de instellingen van uw inlogaccount waar u zich kan uitschrijven. Het kan zijn dat u eerst moet inloggen.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Onderstaand e-mailadres is op uw verzoek verwijderd voor het ontvangen van nieuwsbrieven. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />Dit e-mailadres komt niet voor in ons nieuwsbrieven bestand of is reeds afgemeld voor het ontvangen van nieuwsbrieven. Controleer het adres en neem zonodig contact op met onze klantenservice. <br /><br />');
?>