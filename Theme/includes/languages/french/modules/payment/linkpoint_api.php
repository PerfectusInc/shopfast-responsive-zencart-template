<?php
/**
 * @package Linkpoint/Yourpay API payment_module
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 14141 2009-08-10 19:34:47Z wilt $
 */
 
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'FirstData/Linkpoint/YourPay API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', 'Carte de Crédit');

  if (defined('MODULE_PAYMENT_LINKPOINT_API_STATUS') && MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">FirstData/Linkpoint/YourPay Login Marchand</a>' . (MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_MODE_RESPONSE != 'LIVE: Production' ? '<br /><br /><strong>Numéros de cartes test Linkpoint/YourPay API:</strong><br /><strong>Visa:</strong> 4111111111111111<br /><strong>MasterCard:</strong> 5419840000000003<br /><strong>Amex:</strong> 371111111111111<br /><strong>Discover:</strong> 6011111111111111' : '') . '<br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Troubleshooting/Setup FAQ</a>');
  } else {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="http://www.zen-cart.com/partners/firstdata">Cliquez ici pour ouvrir un compte</a><br /><br /><a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">Espace marchand FirstData/Linkpoint/YourPay API</a><br /><br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">Cliquez ici pour <strong>les instructions SETUP/Troubleshooting</strong></a><br /><br /><strong>Pré-requis :</strong><br /><hr />*<strong>Un compte LinkPoint ou YourPay</strong> (voir lien de création ci-dessus)<br />*<strong>cURL est nécessaire </strong>et DOIT être compilé dans PHP par votre hébergeur<br />*<strong>Le port 1129</strong> est utilisé pour la communication bidirectionnelle avec le portail, il faut donc qu\'il soit ouvert sur le routeur/firewall de votre hôte<br />*<strong>Fichier clé RSA PEM</strong> certificat digital :<br />Pour obtenir et uploader votre clé certificat digital (.PEM):<br />- Connectez-vous à votre compte LinkPoint/Yourpay sur leur site web<br />- Cliquez sur &quot;Support&quot; dans la barre de menu principale.<br />- Cliquez sur le mot &quot;Download Center&quot; sous Downloads dans la boîte de menu latérale.<br />- Cliquez sur le mot &quot;download&quot; à côté de la section &quot;Store PEM File&quot; sur le côté droit de la page.<br />- Entrez les informations nécessaires pour démarrer le download. Vous devrez fournir votre SSN courant ou le Tax ID que vous avez soumis à l\'ouverture du compte marchand.<br />- Uploadez ce fichier vers includes/modules/payment/linkpoint_api/XXXXXX.pem (fourni par FirstData - xxxxxx est votre ID de boutique)');
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', 'Type de carte de crédit : ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', 'Propriétaire de la carte de crédit : ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', 'Numéro de la carte de crédit : ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'Numéro CVV: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la carte de crédit : ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* Le nom du propriétaire de la carte de crédit doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', '* Le numéro de la carte de crédit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* Vous devez entrer le nombre à 3 ou 4 chiffres se trouvant au dos de votre carte de crédit');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', 'Erreur de carte de crédit !');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', 'Votre carte a été refusé. Veuillez recommencer, essayer une autre carte, ou contactez nous pour de l\'assistance.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', 'Adresse de facturation invalide. Veuillez recommencer, essayer une autre carte, ou contactez nous pour de l\'assistance.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', 'Votre carte a été refusé. Veuillez recommencer, essayer une autre carte, ou contactez nous pour de l\'assistance.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', 'En savoir plus');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***AUTORISATION UNIQUEMENT -- LE DEBIT SERA EFFECTUE PLUS TARD PAR L\'ADMINISTRATEUR.***' . "\n");
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', 'NOTE: Ceci était une transaction TEST...forcée à renvoyer une réponse ACCEPTE.');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', 'NOTE: Ceci était une transaction TEST...forcée à renvoyer une réponse REFUSÉ.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: Le module n\'est pas encore configuré)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;Le fichier certificat xyzxyz.pem n\'a pas été trouvé.</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'La librairie cURL n\'a pas été trouvée - Elle est nécessaire pour le module de paiement FirstData/Linkpoint API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DUPLICATE_MESSAGE', 'Il semble y avoir une transaction en double, et nous ne voulons pas débiter deux fois votre carte ! Peut être avez-vous re-soumis votre commande par erreur ? Sinon, veuillez réessayer dans 5 minutes, ou contactez nous pour de l\'assistance. Désolé pour la gêne occasionnée.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', 'Nous nous excusons pour la gêne occasionnée, mais nous ne pouvons pas actuellement contacter la société de la carte de crédit pour autorisation. Veuillez nous contacter pour d\'autres modes de paiement.');
  // note: the above error can occur as a result of:
     // - port 1129 not open for bidirectional communication
     // - CURL is not installed or not functioning
     // - incorrect or invalid or "no" .PEM file found in modules/payment/linkpoint_api folder
     // - In general it means that there was no valid connection made to the gateway... it was stopped before it got outside your server
  
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'Nous sommes désolés. Il y a eu une erreur système lors du traitement de votre carte. Vos informations sont en sécurité. Veuillez avertir le propriétaire de la boutique afin de trouver des solutions de paiement alternatives.');
  // note: the above error is a general error message which is reported when serious and known error conditions occur. Further details are given immediately following the display of this message. If database storage is enabled, details can be found there too.
  
  
  // Admin definitions

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'ID de commande FirstData : ');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'Réponse AVS : ');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Message de réponse : ');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Code d\'approbation : ');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'No. de Référence: ');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Score de fraude :');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTE : Le module est en mode de Test)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ORDERTYPE', 'Type de commande :');


// admin tools:
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NO_MATCHING_ORDER_FOUND', 'Erreur : Impossible de trouver les détails de la transaction pour l\'enregistrement indiqué.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_BUTTON_TEXT', 'Faire un remboursement');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_ERROR', 'Erreur : Vous avez demandé à faire un remboursement mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_REFUND_AMOUNT', 'Erreur : Vous avez demandé un remboursement mais avez entré un montant invalide.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CC_NUM_REQUIRED_ERROR', 'Erreur : Vous avez demandé un remboursement mais n\'avez pas entré les 4 derniers chiffres du numéro de carte de crédit.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_INITIATED', 'Remboursement initié. ID Transaction : %s - ID Commande : %s');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_ERROR', 'Erreur : Vous avez demandé à faire un prélèvement mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_BUTTON_TEXT', 'Faire un prélèvement');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_CAPTURE_AMOUNT', 'Erreur : Vous avez demandé un prélèvement mais sans entrer de montant.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TRANS_ID_REQUIRED_ERROR', 'Erreur : Vous devez indiquer un ID de transaction.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPT_INITIATED', 'Prélèvement de fonds initié. ID Transaction : %s - Code Autorisation : %s');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_BUTTON_TEXT', 'Faire une annulation');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_ERROR', 'Erreur : Vous avez demandé une annulation mais n\'avez pas coché la case de confirmation.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_INITIATED', 'Annulation initiée. ID Transaction : %s - ID Commande : %s');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TITLE', '<strong>Rembourser des transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND', 'Vous pouvez rembourser de l\'argent sur la carte de crédit du client ici:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_AMOUNT_TEXT', 'Entrez le montant que vous voulez rembourser');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_TEXT', 'Entrez l\'ID de transaction');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_CC_NUM_TEXT', 'Entrez les 4 derniers chiffres de la carte de crédit à rembourser.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TRANS_ID', 'Entrez l\'ID de la transaction d\'origine <em>(qui éventuellement ressemble à ceci: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursement effectué');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_SUFFIX', 'Vous pouvez rembourser une commande jusqu\'au montant déjà prélevé. Vous devez fournir les 4 derniers chiffres du numéro de carte de crédit utilisé sur la commande initiale.<br />Les remboursements ne peuvent être effectués si la carte a expiré. Pour rembourser una carte expirée, envoyez un crédit à l\'aide du terminal marchand à la place');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TITLE', '<strong>Prélever des transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE', 'Vous pouvez prélever des fonds précedement autorisés ici:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_AMOUNT_TEXT', 'Entrez le montant à prélever: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TRANS_ID', 'Entrez le numéro de commande d\'origine <em>(ie: <strong>5138-i4wcYM</strong>)</em> : ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_TEXT', 'Entrez le numéro de commande');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fonds précedement autorisés acceptés.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_SUFFIX', 'Les prélèvements doivent être effectués dans les 2-10 jours suivant l\'autorisation d\'origine selon les obligations de votre banque. Vous pouvez prélever une commande uniquement UNE FOIS.<br />Veuiilez vous assurer que le montant indiqué soit correct.<br />Si vous laissez le montant à blanc, le montant d\'origine sera utilisé à la place.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TITLE', '<strong>Annuler des transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID', 'Vous pouvez annuler une transaction (pré-autorisation/prélèvement/remboursement) qui n\'a pas encore été acceptée. Veuillez entrer l\'ID de la transaction d\'origine <em>(qui éventuellement ressemble à ceci: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_CHECK', 'Cochez cette case pour confirmer votre intention:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_TEXT', 'Entrez l\'ID de transaction');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TEXT_COMMENTS', 'Notes (s\'afficheront dans l\'historique de commande):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction annulée');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_SUFFIX', 'Les annulations doivent être effectuées avant que la transaction d\'origine soit acceptée dans le batch journalier qui intervient à 7:00PM Pacific Time.');


?>