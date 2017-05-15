<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Copyright Translation 2012 Rune Rasmussen - syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: users.php 98 2012-03-01 15:19:32Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Administratorer');

define('IMAGE_ADD_USER', 'Legg til ny administrator');
define('IMAGE_RESET_PWD', 'Tilbakestill passord');

define('TEXT_ID', 'Id');
define('TEXT_NAME', 'Brukernavn');
define('TEXT_EMAIL', 'E-post');
define('TEXT_PROFILE', 'Profil');
define('TEXT_PASSWORD', 'Passord');
define('TEXT_CONFIRM_PASSWORD', 'Bekreft passord');
define('TEXT_NO_USERS_FOUND', 'Ingen administratorbrukere ble funnet.');
define('TEXT_CONFIRM_DELETE', 'Slett forespurt. Vennligst bekreft: ');

define('ERROR_NO_USER_DEFINED', 'Alternativet som du har bedt om ikke kan foretas uten å spesifisere en administrator.');
define('ERROR_USER_MUST_HAVE_PROFILE', 'Adminsitrator må være tilknyttet en profil.');
define('ERROR_DUPLICATE_USER', 'Beklager, en administratorbruker med det navnet finnes allerede. Du må velge et annet navn.');
define('ERROR_ADMIN_NAME_TOO_SHORT', 'Brukernavn for administratorer må inneholde minimum %s tegn.');
define('ERROR_PASSWORD_TOO_SHORT', 'Passords må inneholde minimum %s tegn.');
define('SUCCESS_NEW_USER_ADDED', 'Ny adminsitrator ble lagt til');
define('SUCCESS_USER_DETAILS_UPDATED', 'Administratordetaljer ble oppdatert');
define('SUCCESS_PASSWORD_UPDATED', 'Passord ble oppdatert');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', 'Beklager, e-postadressen du fylte inn inneholder ugyldige tegn.');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', 'Beklager, brukernavnet du fylte inn inneholder ugyldige tegn.');
