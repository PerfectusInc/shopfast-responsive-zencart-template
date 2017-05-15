<?php
/**
 * Authorize.net SIM Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 15868 2010-04-11 01:14:50Z drbyte $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Carte de Crédit');  // Payment option title as displayed to the customer


  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net - Identification du marchand</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Infos de test :<br /><b>Numéros de carte bancaire automatiquement autorisés :</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> Ces numéros de carte de crédit renverront une erreur en mode production, mais seront approuvés en mode test. N\'importe quelle date future peut être utilisée pour la date d\'expiration et tous les nombres à 3 ou 4 (AMEX) chiffres comme code CVV.<br /><br /><b>Cartes de crédit rejetées automatiquement:</b><br /><br />Card #: 4222222222222<br /><br />Ce numéro de carte de crédit peut être utilisé pour recevoir les notifications d\'erreur en mode test.<br /><br />' : '') . '<br /><br /><strong>SETTINGS</strong><br />Vos paramètres d\'URL de "réponse" et "reçu" dans votre profil de marchand deAuthorize.net peut être laissée vide, ou peuvent être configurés pour pointer vers http://your_domain.com/foldername/index.php?main_page=checkout_payment');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Cliquez ici pour ouvrir un compte</a><br /><br /><a target="_blank" href="https://account.authorize.net/">S\'identifier sur l\'espace marchand Authorize.net</a><br /><br /><strong>Pré-requis :</strong><br /><hr />*<strong>Compte Authorize.net</strong> (voir le lien ci-dessus pour s\'enregistrer)<br />*<strong>Authorize.net nom d\'utilisateur et clé de transaction</strong> disponible auprès de votre Marchand.');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Type : ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Propriétaire de la carte de crédit : ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Numéro de la carte de crédit : ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration la carte : ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Numéro CVV : ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Qu\'est-ce que c\'est ?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Le nom du propriétaire de la carte de crédit doit comporter au moins  ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Le numéro de carte doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Les 3 or 4 chiffres du numéro CVV doivent être recopiés à partir du dos de la carte bancaire.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Une erreur est survenue lors du traitement de votre carte de crédit. Merci de bien vouloir recommencer.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Erreur de carte de crédit !');