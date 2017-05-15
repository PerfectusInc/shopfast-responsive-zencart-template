<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 */

  define('NAVBAR_TITLE_1', 'Encaissement - Étape 1');
  define('NAVBAR_TITLE_2', 'Méthode de paiement - Étape 2');

  define('HEADING_TITLE', 'Étape 2 sur 3 - Informations de paiement');

  define('TABLE_HEADING_BILLING_ADDRESS', 'Adresse de facturation');
  define('TEXT_SELECTED_BILLING_DESTINATION', 'Votre adresse de facturation est affichée à gauche. L\'adresse de facturation doit correspondre à celle sur votre carte de crédit. Vous pouvez modifier l\'adresse de facturation en cliquant sur le bouton <em>Modifier l\'Adresse</em>.');
  define('TITLE_BILLING_ADDRESS', 'Adresse de facturation : ');

  define('TABLE_HEADING_PAYMENT_METHOD', 'Méthode de paiement');
  define('TEXT_SELECT_PAYMENT_METHOD', 'Veuillez choisir une méthode de paiement pour votre commande.');
  define('TITLE_PLEASE_SELECT', 'Veuillez choisir');
  define('TEXT_ENTER_PAYMENT_INFORMATION', '');
  define('TABLE_HEADING_COMMENTS', 'Instructions spéciales ou commentaires de commande');
  
  define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Non disponible actuellement');
  define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Désolés, nous n\'acceptons pas les paiements depuis votre région actuellement.</span><br />Veuillez nous contacter pour des mesures alternatives.');

  define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continuez vers l\'étape 3</strong>');
  define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- pour confirmer votre commande.');

  define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Conditions Générales</span>');
  define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">En cochant la case suivante, vous déclarez accepter nos Conditions Générales qui s\'appliquent à cette commande. Vous pouvez en prendre connaissance <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>ici</u></a>.');
  define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Je déclare avoir pris connaissance et accepté les Conditions Générales qui s\'appliquent à cette commande.</span>');

  define('TEXT_CHECKOUT_AMOUNT_DUE', 'Montant Total Dû : ');
  define('TEXT_YOUR_TOTAL','Votre total');
?>