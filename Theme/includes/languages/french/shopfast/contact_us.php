<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: contact_us.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Nous Contacter');
define('NAVBAR_TITLE', 'Nous Contacter');
define('TEXT_SUCCESS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Votre message a été envoyé avec succès.');
define('EMAIL_SUBJECT', 'Demande de renseignements du site Web ' . STORE_NAME);

define('ENTRY_NAME', 'Nom Complet : ');
define('ENTRY_EMAIL', 'Adresse Email : ');
define('ENTRY_ENQUIRY', 'Message : ');

define('SEND_TO_TEXT','Envoyer l\'Email à : ');
define('ENTRY_EMAIL_NAME_CHECK_ERROR','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Désolé, avez-vous bien saisi votre nom ? Notre système requiert un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères. Veuillez réessayer.');
define('ENTRY_EMAIL_CONTENT_CHECK_ERROR','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Avez-vous oublié de taper votre message ? Nous aimerions vous entendre. Vous pouvez écrire vos commentaires dans la zone de texte ci-dessous.');

define('NOT_LOGGED_IN_TEXT', 'Non connecté');