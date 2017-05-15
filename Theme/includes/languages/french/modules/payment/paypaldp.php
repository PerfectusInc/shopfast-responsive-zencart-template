<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2005 CardinalCommerce
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Aug 16 01:57:33 2012 -0400 Modified in v1.5.1 $
 */

  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP', 'Paiement PayPal Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_NONUSA', 'Paiements PayPal Pro sur site Web');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20', 'Paiements PayPal Pro sur site Web Payflow Edition (UK)');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION', '<strong>Paiement PayPal Pro sur site Web</strong>%s<br />' . '<a href="http://www.zen-cart.com/partners/paypal" target="_blank">Gérer votre compte PayPal.</a>' . '<br /><br /><font color="green">Instructions de configuration :</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal" target="_blank">Créez votre compte PayPal - Cliquez ici.</a><br />' . 
(defined('MODULE_PAYMENT_PAYPALDP_STATUS') ? '' : '... puis cliquez sur &quot;installer&quot; ci-dessus pour activer le support PayPal Express Checkout.</br>') . 
(!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '' ? '<span class="alert">2. </span><strong>API pièces justificatives</strong> à partir de l\'option API pièces justificatives dans les paramètres de votre profil PayPal. Ce module utilise l\'option <strong>API Signature</strong> -- Vous aurez besoin d\'un nom d\'utilisateur, d\'un mot de passe et d\'une signature à entrer dans les champs ci-dessous.' : '<span class="alert">2. </span>Assurez-vous d\'avoir entré correctement les informations de sécurité nom d\'utilisateur / mot de passe, etc, ci-dessous.') .
'<font color="green"><hr /><strong>Pré-requis:</strong></font><br /><hr />*<strong>Express Checkout</strong> doit être installé et activé pour utiliser les Paiements Pro sur site Web, comme indiqué dans les conditions du service PayPal.<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION', 'Carte de crédit');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TITLE', 'Carte de crédit');
  define('MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE', 'Carte de crédit (WPP)');
  define('MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE', 'Carte de crédit (PF)');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_HEADING', 'Nous sommes désolés, mais nous n\'avons pas pu traiter votre carte de crédit.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'Les informations de carte de crédit que vous avez entré contiennent une erreur. Veuillez vérifier puis réessayer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', 'Prénom du propriétaire de la carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Nom du propriétaire de la carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Propriétaire de la carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Type de carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'Numéro de carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Date d\'émission de la carte : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Date d\'émission Maestro : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Numéro CVV : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(au dos de votre carte)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR', 'Transaction pour');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contactez votre banque pour plus d\'informations.');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'Nous n\'avons pas pu valider votre commande. Veuillez sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'Nous n\'avons pas pu traiter votre commande. Veuillez sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Une erreur est survenue en contactant l\'organisme de paiement. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Cher propriétaire de boutique,' . "\n" . 'Une erreur est survenue en essayant d\'initialiser une transaction de paiement-validation. Par courtoisie, uniquement le "numéro" d\'erreur a été affiché à votre client. Vous trouverez le détail de cette erreur ci-dessous.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERTE : Erreur de paiement direct PayPal');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'Les informations d\'adresse que vous avez entré ne semblent pas valides ou ne correspondent pas. Veuillez choisir ou ajouter une adresse différente puis réessayer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal n\'a pas pu solder cette transaction correctement. Veuillez choisir une autre option de paiement ou changer les options de solde dans votre compte PayPal avant de procéder au paiement.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Une erreur est survenue en essayant de traiter votre carte de crédit. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Nous nous excusons pour la gêne occasionnée, mais nous n\'acceptons pas le type de carte de crédit que vous avez saisi. Veuillez utiliser une autre carte de crédit ou vérifier que les informations que vous avez entré sont correctes, ou contactez nous pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Il y a eu un problème à la validation de votre compte. Veuillez réessayer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* Le nom du propriétaire de la carte doit comprendre au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* Le numéro de carte de crédit doit comprendre au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Le numéro CVV à 3 ou 4 chiffres doit être relevé au dos de la carte de crédit.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'ALERTE : Échec de la vérification d\'adresse. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'ALERTE : Échec de la vérification du code CVV. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', ' Commande en attente de validation par le propriétaire de la boutique.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'L\'état assigné à votre compte est invalide. Veuillez vous rendre dans les paramètres de votre compte et le changer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Nous nous excusons pour la gêne occasionnée. Le paiement n\'a pas pu être initialisé car le compte PayPal configuré par le propriétaire de la boutique n\'est pas un compte Paiement PayPal Pro ou les services du portail PayPal n\'ont pas été achetés. Ou vous avez essayé de payer avec une carte AmEx dont le marchand n\'a pas autorisé le support. Veuillez choisir un autre mode de paiement pour votre commande ou peut-être une autre carte de crédit.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Nous nous excusons pour la gêne occasionnée. Le paiement n\'a pas pu être initialisé car le compte PayPal configuré par le propriétaire de la boutique n\'est pas un compte Paiement PayPal Pro US ou les services du portail PayPal n\'ont pas été achetés (ou n\'ont pas été activés en acceptant les conditions de facturation sur le site Web PayPal). Veuillez choisir un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Nous nous excusons pour la gêne occasionnée. Le paiement n\'a pas pu être initialisé car le compte PayPal configuré par le propriétaire de la boutique n\'est pas un compte Paiement PayPal Pro 2.0 (UK) ou les services du portail PayPal n\'ont pas été achetés ou activés correctement. Veuillez choisir un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Nous nous excusons pour la gêne occasionnée. Les paramètres d\'identification du compte PayPal ne sont pas encore définis, ou les informations de sécurité de l\'API sont incorrectes. Nous ne pouvons pas terminer votre transaction. Veuillez avertir le propriétaire de la boutique afin qu\'il corrige ce problème.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Nous sommes désolé -- Le compte PayPal configuré par le propriétaire de la boutique est situé dans un pays qui n\'est pas pris en charge par Paiement PayPal Pro pour le moment. Veuillez choisir un autre mode de paiement pour finaliser votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Nous sommes désolé -- La carte de crédit que vous utilisez n\'est pas compatible avec la devise que vous avez choisie pour l\'encaissement. Veuillez modifier votre choix de devise ou choisir un autre mode de paiement pour finaliser votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: Le module n\'est pas encore configuré)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Vous avez essayé de payer votre achat en utilisant une carte de crédit qui n\'est pas acceptée par ce marchand. Nous nous excusons pour la gêne occasionnée et nous vous invitons à réessayer avec un type de carte différent, ou contacter le propriétaire de la boutique pour d\'autres choix de modes de paiement.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Il y a eu un problème en récupérant les détails de la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Il y a eu un problème en recherchant les transactions correspondant aux critères que vous avez indiqué. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'Il y a eu un problème en annulant la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Il y a eu un problème en remboursant le montant de transaction spécifié. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Il y a eu un problème à l\'autorisation de la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Il y a eu un problème pour prélever la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Votre demande de remboursement a été rejetée par PayPal.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Vous avez demandé un remboursement partiel mais n\'avez pas indiqué de montant.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Vous avez demandé un remboursement complet mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Vous avez demandé une autorisation mais vous n\'avez pas indiqué de montant.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Vous avez demandé un prélèvement mais n\'avez pas indiqué de montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Vous avez demandé à annuler une transaction mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Vous avez demandé une autorisation mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Vous avez demandé un prélèvement de fonds mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'Remboursement PayPal initié pour %s. ID Transaction: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'Autorisation PayPal initiée pour %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'Prélèvement PayPal initié pour %s. ID du reçu: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'Demande d\'annulation PayPal initiée. ID Transaction: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Il y a eu une erreur dans la tentative de transaction. Veuillez lire le guide de référence API ou les journaux de transaction pour des informations détaillées.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Nous nous excusons de la gêne occasionnée; cependant, pour le moment nous ne pouvons pas utiliser ce mode de paiement pour traiter les commandes provenant du lieu géographique que vous avez sélectionné comme votre adresse de compte. Veuillez continuer en utilisant l\'encaissement normal et un autre mode de paiement pour finaliser votre commande.');


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Prénom : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Société : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Adresse : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Région / Département : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code postal : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email de l\'acheteur : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID d\'Ebay : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID de l\'acheteur : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut de l\'acheteur : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Raison de la mise en attente : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Montant brut : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Commission de paiement : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Taux de change : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Articles du panier : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Type Transaction : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID de la Transaction : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID Transaction parente: ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Remboursement de la commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si vous voulez rembourser cette commande entièrement, cliquez ici : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Effectuer un remboursement total');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Effectuer un remboursement partiel');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... ou entrez le montant du remboursement partiel ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Entrez le ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'montant du remboursement ici et cliquez sur Remboursement Partiel');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Un remboursement total ne doit pas être effectué après un remboursement partiel.<br />*Plusieurs remboursements partiels sont autorisés à hauteur du solde non remboursé restant.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire de la boutique.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Confirmer : ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorisations de commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si vous voulez autoriser une partie de cette commande, entrez le montant ici : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Donner l\'autorisation');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire de la boutique.');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Autorisations de prélèvement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si vous voulez prélever tout ou une partie du montant autorisé pour cette commande, entrez le montant à prélever et choisissez s\'il s\'agit du prélevement final pour cette commande. Cochez la case de confirmation avant de soumettre votre demande de prélevement.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Faire un prélèvement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Montant à prélever : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Est-ce le prélèvement final ?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Merci pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmer : ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annuler autorisations de commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si vous voulez annuler une autorisation, entrez l\'ID de l\'autorisation ici, et confirmez : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Merci de votre intérêt pour notre boutique en ligne.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Faire une annulation');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'État Transaction : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Code Autorisation : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Adresse correspondante : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP correspondant : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 correspondant : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Jours pour accepter : ');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Frais uniques en rapport ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Surtaxes');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Frais de manutention et autres charges applicables');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Remises');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Rabais appliqués, incluant les bons de réduction, chèques-cadeaux, etc');

  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'État du contrôle de paiement frauduleux : ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Ceci est une notification automatique pour vous informer que PayPal a marqué le paiement d\'une nouvelle commande comme &quot;Paiement devant être contrôlé&quot; par leur équipe anti-fraude. Habituellement, le contrôle est effectué dans les 36 heures. Il vous est FORTEMENT RECOMMANDÉ de NE PAS EXPÉDIER la commande tant que le contrôle n\'est pas terminé. Vous pouvez voir le dernier état du contrôle de la commande en vous connectant à votre compte PayPal et en listant les transactions récentes.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Tous les articles dans votre panier (voir les détails dans la boutique et sur votre reçu de la boutique).');

  define('CENTINEL_AUTHENTICATION_ERROR', 'Échec d\'authentification - Votre institution financière a indiqué qu\'elle ne pouvait pas authentifier avec succès cette transaction. Pour se protéger contre toute utilisation non autorisée, cette carte ne peut pas être utilisé pour compléter votre achat. Vous pouvez compléter l\'achat en sélectionnant un autre mode de paiement.');
  define('CENTINEL_PROCESSING_ERROR', 'Il y a eu un problème lors de l\'obtention d\'autorisation de votre transaction. Veuillez entrer de nouveau vos informations de paiement, et / ou choisir un autre moyen de paiement.');
  define("CENTINEL_ERROR_CODE_8000", "8000");
  define("CENTINEL_ERROR_CODE_8000_DESC", "Le protocole n\'est pas reconnu, il doit être en http: // ou https: //");
  define("CENTINEL_ERROR_CODE_8010", "8010");
  define("CENTINEL_ERROR_CODE_8010_DESC", "Impossible de communiquer avec le Serveur  MAPS");
  define("CENTINEL_ERROR_CODE_8020", "8020");
  define("CENTINEL_ERROR_CODE_8020_DESC", "Erreur de Parsing XML ");
  define("CENTINEL_ERROR_CODE_8030", "8030");
  define("CENTINEL_ERROR_CODE_8030_DESC", "Erreur d\'Expiration (Timeout) de communication");
  define("CENTINEL_ERROR_CODE_1001", "1001");
  define("CENTINEL_ERROR_CODE_1001_DESC", "Problème de configuration de compte avec Cardinal Centinel. Veuillez contacter votre représentant Cardinal immédiatement à implement@cardinalcommerce.com. Vos transactions ne seront pas protégées par la responsabilité de rétrofacturation jusqu\'à ce que le problème soit résolu.\n\n" . 'La configuration correcte de votre service Cardinal 3D-Secure se fait en trois étapes : ' . "\n1-Connectez-vous à l'URL d\'administration de Marchand Cardinal fourni dans votre pack de bienvenue (pas l'URL de test), et accepter le contrat de licence.\n2-Définir un mot de passe de transaction.\n3-Copiez votre ID de Marchand Cardinal ainsi aue votre mot de passe de transaction de Cardinal dans votre module ZC PayPal.");
  define("CENTINEL_ERROR_CODE_4243", "4243");
  define("CENTINEL_ERROR_CODE_4243_DESC", "Problème de configuration de compte avec Cardinal Centinel. Veuillez contacter votre représentant Cardinal immédiatement à implement@cardinalcommerce.com et informez-les que vous recevez une erreur numéro 4243 lorsque vous tentez d'utiliser 3D Secure avec votre site Zen Cart et compte PayPal et que vous avez besoin d\'avoir le Processor Module activé dans votre compte. Vos transactions ne seront pas protégées par la responsabilité de rétrofacturation jusqu\'à ce que le problème soit résolu.");