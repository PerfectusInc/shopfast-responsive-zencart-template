<?php
/**
 * Authorize.net echeck Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_echeck.php 7227 2007-10-12 04:19:56Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ADMIN_TITLE', 'Authorize.net - eCheck'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CATALOG_TITLE', 'eCheck');  // Payment option title as displayed to the customer

  if (MODULE_PAYMENT_AUTHORIZENET_ECHECK_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net - Identification du marchand</a>');
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Cliquez ici pour ouvrir un compte</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Espace marchand Authorize.net</a><br /><br /><strong>Pré-requis :</strong><br /><hr />*<strong>Un compte Authorize.net</strong> (voir lien de création ci-dessus)<br />*<strong>cURL est nécessaire</strong> et doit être compilé avec le support SSL dans PHP par votre hébergeur<br />*<strong>Nom d\'utilisateur Authorize.net et clé de transaction</strong> disponible depuis votre espace marchand');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR_CURL_NOT_FOUND', 'Impossible de trouver les fonctions cURL - Nécessaires pour le module de paiement Authorize.net eCheck');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ROUTING_CODE', 'ABA Numéro routage : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_NAME', 'Nom banque : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_NUM', 'Numéro compte banque : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNT_TYPE', 'Type compte banque : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_BANK_ACCOUNTHOLDER', 'Nom sur le compte : ');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_OWNER', '* Le nom du titulaire du compte doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ACCT_NUMBER', '* Le numéro de compte doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_ROUTING_CODE', '* Le code/numéro de routage doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_BANK_NAME', '* Le nom de banque doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_TITLE', 'Avis d\'autorisation :&nbsp;');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHORIZATION_NOTICE', 'En cliquant sur le bouton ci-dessous (pour confirmer cette commande), J\'autorise ' . STORE_NAME . ' à debiter mon compte %s le %s d\'un montant de %s pour l\'achat unique en ligne des biens et des services listés sur cette page.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DECLINED_MESSAGE', 'Il n\'a pas été possible de terminer votre transaction. Veuillez corriger les informations et réessayer ou contactez-nous pour trouver une solution.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_ERROR', 'Erreur de transaction !');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_AUTHENTICITY_WARNING', 'AVERTISSEMENT : Problème sur hash de sécurité. Veuillez contacter immédiatement le propriétaire de la boutique. Votre commande n\' a *PAS* été complètement autorisée.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TYPE', 'Type client : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CUST_TAX_ID', 'ID/SSN taxe client : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_NUMBER', 'Numéro permis de conduire : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_STATE', 'Département permis de conduire : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_TEXT', 'Date de naissance permis de conduire : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_DL_DOB_FORMAT', '(MM/JJ/AAAA)');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_CUST_TAX_ID', '* L\'ID de taxe doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_NUMBER', '* Le numéro du permis de conduire doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_JS_DL_DOB', '* La date de naissance doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_BUTTON_TEXT', 'Faire un remboursement');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_ERROR', 'Erreur : Vous avez demandé à faire un remboursement mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_REFUND_AMOUNT', 'Erreur : Vous avez demandé un remboursement mais entré un montant invalide.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CC_NUM_REQUIRED_ERROR', 'Erreur : Vous avez demandé un remboursement mais n\'avez pas entré les 4 derniers chiffres du numéro de compte.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_INITIATED', 'Remboursement initié. ID Transaction : %s - Code Autorisation : %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_ERROR', 'Erreur : Vous avez demandé à faire un prélèvement mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_BUTTON_TEXT', 'Faire un prélèvement');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_INVALID_CAPTURE_AMOUNT', 'Erreur : Vous avez demandé un prélèvement mais sans entrer de montant.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_TRANS_ID_REQUIRED_ERROR', 'Erreur : Vous devez indiquer un ID de transaction.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPT_INITIATED', 'Prélèvement de fonds initié. ID Transaction : %s - Code Autorisation : %s');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_BUTTON_TEXT', 'Faire une annulation');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_ERROR', 'Erreur : Vous avez demandé une annulation mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_INITIATED', 'Annulation initiée. ID Transaction : %s - Code Autorisation : %s');


  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TITLE', '<strong>Rembourser des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND', 'Vous pouvez rembourser de l\'argent sur la carte de crédit du client ici : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_REFUND_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_AMOUNT_TEXT', 'Entrez le montant que vous voulez rembourser');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_CC_NUM_TEXT', 'Entrez les 4 derniers chiffres du compte à rembourser.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TRANS_ID', 'Entrez l\'ID de la transaction d\'origine : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande) : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursement effectué');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_REFUND_SUFFIX', 'Vous pouvez rembourser une commande jusqu\'au montant déjà prélevé. Vous devez fournir les 4 derniers chiffres du numéro de compte utilisé sur la commande initiale.<br />Les remboursements doivent être effectués dans les 120 jours suivant la date de la transaction d\'origine.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TITLE', '<strong>Prélever des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE', 'Vous pouvez prélever des fonds précedement autorisés ici : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_AMOUNT_TEXT', 'Entrez le montant à prélever : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_CAPTURE_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TRANS_ID', 'Entrez l\'ID de la transaction d\'origine : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande) : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fonds précedement autorisés acceptés.');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_CAPTURE_SUFFIX', 'Les prélèvements doivent être effectués dans les 30 jours suivant l\'autorisation d\'origine. Vous pouvez prélever une commande uniquement UNE FOIS.<br />Veuiilez vous assurer que le montant indiqué soit correct.<br />Si vous laissez le montant à blanc, le montant d\'origine sera utilisé à la place.');

  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TITLE', '<strong>Annuler des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID', 'Vous pouvez annuler une transaction qui n\'a pas encore été acceptée : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_TEXT_VOID_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande) : ');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction annulée');
  define('MODULE_PAYMENT_AUTHORIZENET_ECHECK_ENTRY_VOID_SUFFIX', 'Les annulations doivent être effectuées avant que la transaction d\'origine soit acceptée dans le batch journalier.');

?>