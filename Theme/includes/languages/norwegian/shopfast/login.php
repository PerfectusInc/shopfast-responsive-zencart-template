<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE', 'Logg inn');
define('HEADING_TITLE', 'Velkommen, vennligst logg inn');

define('HEADING_NEW_CUSTOMER', 'Ny kunde? Vennligst fyll inn kontoopplysninger');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nye kunder');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Ved å opprette en kundeprofil hos ' . STORE_NAME . ' kan du raskt spore din ordrestatus og få full oversikt over dine tidligere ordrer.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Har du en PayPal-konto og ønsker å betale raskt og enkelt med kredittkort? Da kan du bruke PayPal-knappen nedenfor for å bruke hurtigutsjekkingsvalget.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">eller</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Opprett en kundeprofil hos <strong>' . STORE_NAME . '</strong> som tillater deg å handle raskt og enkelt, spore status på dine ordrer, se igjennom dine tidligere ordrer og dra fordel av våre andre kundefordeler.');

define('HEADING_RETURNING_CUSTOMER', 'Kunder: Vennligst logg inn');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Eksisterende kunder');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Du må logge inn på din <strong>' . STORE_NAME . '</strong>-konto for å fortsette.');

define('TEXT_PASSWORD_FORGOTTEN', 'Glemt passordet?');

define('TEXT_LOGIN_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil: Beklager, e-postadressen og/eller passordet stemmer ikke med vår database. Vennligst prøv på nytt.');
define('TEXT_VISITORS_CART', '<strong>MERK:</strong> Innholdet i din nåværende handlekurv blir flyttet over til handlekurven for din konto når du har logget inn. <a href="javascript:session_win();">[Mer informasjon]</a>');

//define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Personvernerklæring</span>');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Vennligst erkjenn at du har lest og akseptert vår personvernerklæring ved å merke av følgende boks.</span>&nbsp;<a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>Les vår personvernerklæring</u></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Jeg har lest personvernerklæringen og jeg samtykker til den.</span>');

define('ERROR_SECURITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det oppstod en sikkerhetsfeil under forsøk på pålogging.');

define('TEXT_LOGIN_BANNED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil: Tilgang nektet.');
