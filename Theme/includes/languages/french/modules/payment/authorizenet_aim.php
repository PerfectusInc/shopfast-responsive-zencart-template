<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 18695 2011-05-04 05:24:19Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net - Identification du marchand</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Infos de test:<br /><b>Numéros de carte bancaire automatiquement autorisés :</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> Ces numéros de carte de crédit renverront une erreur en mode production, mais seront approuvés en mode test. N\'importe quelle date future peut être utilisée pour la date d\'expiration et tous les nombres à 3 ou 4 (AMEX) chiffres comme code CVV.<br /><br /><b>Cartes de crédit rejetées automatiquement :</b><br /><br />Card #: 4222222222222<br /><br />Ce numéro de carte de crédit peut être utilisé pour recevoir les notifications d\'erreur en mode test.<br /><br />' : ''));
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Cliquez ici pour ouvrir un compte</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Espace marchand Authorize.net</a><br /><br /><strong>Pré-requis :</strong><br /><hr />*<strong>Un compte Authorize.net</strong> (voir lien de création ci-dessus)<br />*<strong>cURL est nécessaire</strong> et doit être compilé avec le support SSL dans PHP par votre hébergeur<br />*<strong>Nom d\'utilisateur Authorize.net et clé de transaction</strong> disponible depuis votre espace marchand');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'Impossible de trouver les fonctions cURL - Nécessaires pour le module de paiement Authorize.net AIM');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Carte de Crédit');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Type de carte de crédit : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Propriétaire de la carte de crédit : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Numéro de la carte de crédit : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la carte : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'Numéro CVV :');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Qu\'est-ce que c\'est ?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Le nom du propriétaire de la carte de crédit doit comporter au moins  ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Le numéro de carte doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Les 3 ou 4 derniers chiffres du numéro de vérification qui figurent généralement au dos de la carte de crédit.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou nous contacter pour plus d\'Information.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Erreur de carte de crédit !');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'AVERTISSEMENT : Problème sur hash de sécurité. Veuillez contacter immédiatement le propriétaire de la boutique. Votre commande n\' a *PAS* été complètement autorisée.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Faire un remboursement');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Erreur : Vous avez demandé à faire un remboursement mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Erreur : Vous avez demandé un remboursement mais entré un montant invalide..');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Erreur : Vous avez demandé un remboursement mais n\'avez pas entré les 4 derniers chiffres du numéro de carte de crédit.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Remboursement initié. ID de Transaction : %s - Code Autorisation : %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Erreur : Vous avez demandé à faire un prélèvement mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Faire un prélèvement');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Erreur : Vous avez demandé un prélèvement mais sans entrer de montant.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Erreur : Vous devez indiquer un ID de transaction.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Prélèvement de fonds initié. ID Transaction : %s - Code Autorisation : %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Faire une annulation');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Erreur : Vous avez demandé une annulation mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Annulation initiée. ID Transaction : %s - Code Autorisation : %s');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Rembourser des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Vous pouvez rembourser de l\'argent sur la carte de crédit du client ici : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Entrez le montant que vous voulez rembourser');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Entrez les 4 derniers chiffres de la carte de crédit à rembourser.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Entrez l\'ID de la transaction d\'origine : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande) : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursement effectué');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Vous pouvez rembourser une commande jusqu\'au montant déjà prélevé. Vous devez fournir les 4 derniers chiffres du numéro de carte de crédit utilisé sur la commande initiale.<br />Les remboursements doivent être effectués dans les 120 jours suivant la date de la transaction d\'origine.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Prélever des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Vous pouvez prélever des fonds précedement autorisés ici : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Entrez le montant à prélever : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Entrez l\'ID de la transaction d\'origine : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande): ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fonds précedement autorisés acceptés.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Les prélèvements doivent être effectués dans les 30 jours suivant l\'autorisation d\'origine. Vous pouvez prélever une commande uniquement UNE FOIS.<br />Veuiilez vous assurer que le montant indiqué soit correct.<br />Si vous laissez le montant à blanc, le montant d\'origine sera utilisé à la place.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Annuler des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Vous pouvez annuler une transaction qui n\'a pas encore été acceptée, ou une autorisation qui n\'a pas été prélevée.<br />Entrez l\'ID de transaction non acceptée ou d\'autorisation non prélevée :');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande) : ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction annulée');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Les annulations doivent être effectuées avant que la transaction d\'origine soit acceptée dans le batch journalier.');

?>