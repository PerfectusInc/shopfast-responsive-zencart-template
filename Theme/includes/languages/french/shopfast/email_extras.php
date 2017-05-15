<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 19690 2011-10-04 16:41:45Z drbyte $
 */

// office use only
define('OFFICE_FROM','<strong>De :</strong>');
define('OFFICE_EMAIL','<strong>Email :</strong>');

define('OFFICE_SENT_TO','<strong>Envoyé à :</strong>');
define('OFFICE_EMAIL_TO','<strong>A l\'Email :</strong>');

define('OFFICE_USE','<strong>Usage Professionnel Uniquement :</strong>');
define('OFFICE_LOGIN_NAME','<strong>Nom de Connexion :</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>Email de Vonnexion : </strong>');
define('OFFICE_LOGIN_PHONE','<strong>Téléphone :</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax :</strong>');
define('OFFICE_IP_ADDRESS','<strong>Adresse IP :</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Adresse de l\'Hôte :</strong>');
define('OFFICE_DATE_TIME','<strong>Date et heure :</strong>');
if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
define('EMAIL_DISCLAIMER', 'Cette adresse email nous a été donnée par vous ou par un de nos clients. Si vous pensez avoir reçu cet e-mail par erreur, veuillez envoyer un e-mail à : %s');
define('EMAIL_SPAM_DISCLAIMER','Cet email vous est adressé en accord avec la loi US CAN-SPAM du 01/01/2004. Les demandes de suppression peuvent être envoyées à cette adresse et seront honorées et respectées.');
define('EMAIL_FOOTER_COPYRIGHT','Droit d\'Auteur (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Propulsé par <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\nPour vous désabonner de nos futurs bulletins et emails promotionnels, cliquez simplement sur le lien suivant : \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANT :</strong> Pour votre protection et pour empêcher tout usage malveillant, tous les emails envoyés depuis ce site web sont journalisés, leur contenu enregistré et disponible pour le gérant. Si vous estimez avoir reçu cet e-mail par erreur, veuillez emvoyer un email à ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Ce message figure dans tous les emails envoyés depuis ce site :</strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[CREER UN COMPTE]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[CHRQUE CADEAU CLIENT ENVOYE]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NOUVELLE COMMANDE]');
define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[info EXTRA CC DE COMMANDE] #');

// Low Stock E-mails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Attention :  Stock bas');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Rapport de stock bas : ');