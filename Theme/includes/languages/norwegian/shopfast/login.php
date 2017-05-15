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

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Ved � opprette en kundeprofil hos ' . STORE_NAME . ' kan du raskt spore din ordrestatus og f� full oversikt over dine tidligere ordrer.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Har du en PayPal-konto og �nsker � betale raskt og enkelt med kredittkort? Da kan du bruke PayPal-knappen nedenfor for � bruke hurtigutsjekkingsvalget.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">eller</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Opprett en kundeprofil hos <strong>' . STORE_NAME . '</strong> som tillater deg � handle raskt og enkelt, spore status p� dine ordrer, se igjennom dine tidligere ordrer og dra fordel av v�re andre kundefordeler.');

define('HEADING_RETURNING_CUSTOMER', 'Kunder: Vennligst logg inn');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Eksisterende kunder');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Du m� logge inn p� din <strong>' . STORE_NAME . '</strong>-konto for � fortsette.');

define('TEXT_PASSWORD_FORGOTTEN', 'Glemt passordet?');

define('TEXT_LOGIN_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil: Beklager, e-postadressen og/eller passordet stemmer ikke med v�r database. Vennligst pr�v p� nytt.');
define('TEXT_VISITORS_CART', '<strong>MERK:</strong> Innholdet i din n�v�rende handlekurv blir flyttet over til handlekurven for din konto n�r du har logget inn. <a href="javascript:session_win();">[Mer informasjon]</a>');

//define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Personvernerkl�ring</span>');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Vennligst erkjenn at du har lest og akseptert v�r personvernerkl�ring ved � merke av f�lgende boks.</span>&nbsp;<a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>Les v�r personvernerkl�ring</u></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Jeg har lest personvernerkl�ringen og jeg samtykker til den.</span>');

define('ERROR_SECURITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det oppstod en sikkerhetsfeil under fors�k p� p�logging.');

define('TEXT_LOGIN_BANNED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil: Tilgang nektet.');
