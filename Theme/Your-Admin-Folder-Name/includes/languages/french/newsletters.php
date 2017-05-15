<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Bulletins et Annonces de Produits');

define('TABLE_HEADING_NEWSLETTERS', 'Bulletins');
define('TABLE_HEADING_SIZE', 'Taille');
define('TABLE_HEADING_MODULE', 'Module');
define('TABLE_HEADING_SENT', 'Envoyé');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_NEWSLETTER_MODULE', 'Module :');
define('TEXT_NEWSLETTER_TITLE', 'Sujet :');
define('TEXT_NEWSLETTER_CONTENT', 'Contenu au format<br />Text Seulement :');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Contenu au format<br />Text Riche :');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Date de création :');
define('TEXT_NEWSLETTER_DATE_SENT', 'Date d\'envoi :');

define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer ce bulletin ?');

define('TEXT_PLEASE_WAIT', 'Veuillez patienter .. envoi des emails ..<br /><br />Veuillez ne pas interrompre ce processus !');
define('TEXT_FINISHED_SENDING_EMAILS', 'Envoi des emails terminé !');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s emails envoyés. (Chaque case à cocher indique 1 destinataire. Survolez la case à cocher pour voir l\'adresse e-mail.)<br /><br />Surveillez votre Boîte de Réception ('.EMAIL_FROM.') pour :<UL><LI>a) les messages de retour</LI><LI>b) des adresses e-mail qui ne sont plus valides</LI><LI>c) les demandes de suppression.</LI></UL>Les suppressions d\'emails peuvent etre traitées en éditant les informations des clients, dans l\'Admininistration | Menu Clients.');

define('ERROR_NEWSLETTER_TITLE', 'Erreur : Titre de bulletin requis');
define('ERROR_NEWSLETTER_MODULE', 'Erreur : Module bulletin/newsletter requis');
define('ERROR_PLEASE_SELECT_AUDIENCE','Erreur : Veuillez sélectionner un public pour recevoir ce bulletin');
?>