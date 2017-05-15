<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mail.php 7197 2007-10-06 20:35:52Z drbyte $
 */


define('HEADING_TITLE', 'Envoyer un e-mail aux Clients');

define('TEXT_CUSTOMER', 'Client :');
define('TEXT_SUBJECT', 'Sujet :');
define('TEXT_FROM', 'De :');
define('TEXT_MESSAGE', 'Message au format<br />Text Seulement :');
define('TEXT_MESSAGE_HTML','Message au format<br />Text Riche :');
define('TEXT_SELECT_CUSTOMER', 'Sélectionner le client');
define('TEXT_ALL_CUSTOMERS', 'Tous les clients');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A tous les abonnés au bulletin');
define('TEXT_ATTACHMENTS_LIST','Pièces jointes : ');
define('TEXT_SELECT_ATTACHMENT','Pièces jointes<br />sur serveur : ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Pièces jointes<br />à télécharger sur le serveur<br />&amp; joindre : ');
define('TEXT_ATTACHMENTS_DIR','Répertoire pour télécharger sur le serveur : ');

define('NOTICE_EMAIL_SENT_TO', 'Notification : Email envoyé à : %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Notification: ECHEC d\'envoi de l\'Email à certains destinataires : %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erreur : Aucun client sélectionné.');
define('ERROR_NO_SUBJECT', 'Erreur : Aucun sujet n\'a été renseigné.');
define('ERROR_ATTACHMENTS', 'Erreur : Vous ne pouvez pas sélectionner à la fois TELECHARGER et AJOUTER des pièces jointes. Un seul choix est possible.');
?>