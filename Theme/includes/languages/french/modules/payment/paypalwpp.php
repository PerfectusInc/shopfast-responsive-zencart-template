<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Aug 16 01:57:33 2012 -0400 Modified in v1.5.1 $
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'Encaissement avec PayPal Express');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'Encaissement avec PayPal Express (Edition Pro 2.0 Payflow) (UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Portail');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'Encaissement avec PayPal Express via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>Encaissement avec PayPal Express</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">Gérer votre compte PayPal.</a>' : '<a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank">Gérer votre compte PayPal.</a>') . '<br /><br /><font color="green">Instructions de configuration :</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank">Créez votre compte PayPal - Cliquez ici.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... puis cliquez sur "installer" ci-dessus pour activer le support d\'Encaissement avec PayPal Express.</br>') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<br /><span class="alert">2. </span><strong>API pièces justificatives</strong> à partir de l\'option API Credentials dans les paramètres de votre profil PayPal. (Cliquez <a href="http://www.zen-cart.com/getpaypal" target="_blank">ici</a> pour des instructions API.) <br />Ce module utilise l\'option <strong>API Signature</strong> option -- Vous aurez besoin d\'un nom d\'utilisateur, d\'un mot de passe et d\'une signature à entrer dans les champs ci-dessous.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>PAYFLOW credentials</strong> Ce module nécessite que vos paramètres <strong>PAYFLOW Partner+Vendor+User+Password</strong> soient saisis dans les 4 champs ci-dessous. Ils seront utilisés pour communiquer avec le système Payflow et pour autoriser les transactions sur votre compte.' : '<span class="alert">2. </span>Assurez-vous d\'avoir entré correctement ci-dessous les informations de sécurité nom d\'utilisateur / mot de passe, etc...') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><br /><span class="alert">3. </span>Dans votre compte PayPal, activez <strong>Instant Payment Notification</strong>:<br />dans "Profile", choisissez <em>Instant Payment Notification Preferences</em><ul style="margin-top: 0.5;"><li>cliquez sur la case pour activer IPN</li><li>S\'il n\'y a pas déjà une URL indiquée, définissez l\'URL à:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>Pré-requis:</strong></font><br /><hr />*<strong>cURL</strong> est utilisé pour la communication bidirectionnelle avec le portail, il faut donc qu\'il soit actif sur le serveur de votre hébergeur (si vous avez besoin d\'utiliser un proxy cURL, définissez les paramètres du proxy cURL dans Admin->Configuration->My Store.)<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Carte de crédit');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Encaissement rapide et sûr avec PayPal :');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'Encaissement avec PayPal Expresst');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'Paiement direct avec PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Carte de crédit');  //(used for payflow transactions)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Nous sommes désolé, le traitement de votre carte de crédit n\'a pas pu être effectué.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Les informations de carte de crédit que vous avez saisi contiennent une erreur. Veuillez les vérifier et réessayer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Prénom carte de crédit :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'Nom carte de crédit :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nom du propriétaire de la carte :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Type de carte de crédit :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Numéro carte de crédit :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration carte de crédit :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Date d\'émission carte de crédit :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Numéro CVV :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(au dos de la carte de crédit)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Votre carte de crédit a été refusée. Merci d\'essayer avec une autre carte ou de contacter votre banque pour plus d\'informations.');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'Nous n\'avons pas pu traiter votre commande. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez-nous pour de l\'aide.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Une erreur s\'est produite lors du contact avec le processus de traitement des paiements. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez-nous pour de l\'aide.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Cher propriétaire de boutique,' . "\n" . 'Une erreur est survenue en essayant d\'initialiser une transaction PayPal Express Checkout. Par courtoisie, uniquement le "numéro" d\'erreur a été affiché à votre client. Vous trouverez le détail de cette erreur ci-dessous.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERTE: Erreur d\'Encaissement avec PayPal Express');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'L\'adresse que vous avez indiquée ne semble pas être valide ou ne correspond pas. Veillez choisir ou ajouter une autre adresse et réessayer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'L\'adresse que vous avez choisie à PayPal n\'est pas une adresse confirmée. Veuillez revenir à PayPal et choisir ou ajouter une autre adresse puis réessayer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal n\'a pas pu placer l\'argent de cette transaction. Veuillez choisir une autre option de paiement ou vérifiez les options de placement dans votre compte PayPal avant de continuer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Une erreur s\'est produite lors du traitement de votre carte de crédit. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez-nous pour de l\'aide.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Nous nous excusons pour la gêne occasionnée, mais nous n\'acceptons pas le type de carte de crédit que vous avez saisi. Veuillez utiliser une autre carte de crédit.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Il y a eu un problème à la validation de votre compte. Veuillez réessayer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* Le nom du propriétaire de la carte de crédit doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* Le numéro de carte de crédit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'ALERTE: Échec de la vérification d\'adresse. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALERTE: Échec de la vérification du code CVV. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', ' Commande en attente de validation par le propriétaire de la boutique.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' - Vous devez enregistrer vos pièces justificatives PayPal API avant de pouvoir traiter des transactions avancées.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'Le statut associé à votre compte n\'est pas valide. Merci de vous rendre dans la configuration de votre compte et de le modifier.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Nous nous excusons pour la gêne occasionnée. La procédure de paiement n\'a pu être lancée car le compte PayPal du commerçant n\'est pas du type "PayPal Website Payments Pro" ou les services du portail PayPal n\'ont pas été acquis. Veuillez choisir un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Nous nous excusons pour la gêne occasionnée. Les paramètres d\'identification du compte PayPal ne sont pas encore configurés, ou les informations de sécurité de l\'API ne sont pas correctes. Votre transaction n\'a pu être menée à terme. Veuillez avertir le propriétaire de la boutique pour qu\'il corrige ce problème.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Désolé -- Le compte PayPal configuré par l\'administrateur de la boutique est localisé dans un pays qui n\'est actuellement pas supporté par Website Payments Pro. Veuillez choisir une autre méthode de paiement pour terminer votre commande.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: Le module n\'est pas encore configuré)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Un problème est apparu lors de la récupération des détails de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Un problème est apparu lors de la localisation des transactions correspondant aux critères que vous avez indiqué. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Un probléme est apparu lors de l\'annulation de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Un probléme est apparu lors du remboursement du montant de transaction indiqué. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Un probléme est apparu lors de l\'autorisation de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Un probléme est apparu lors du prélèvement de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Votre demande de remboursement a été refusée par PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Vous avez demandé un remboursement partiel mais vous n\'avez pas précisé le montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Vous avez demandé un remboursement complet mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Vous avez demandé une autorisation mais vous n\'avez pas indiqué de montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Vous avez demandé un prélèvement mais n\'avez pas indiqué de montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Vous avez demandé à annuler une transaction mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Vous avez demandé une autorisation mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Vous avez demandé un prélèvement de fonds mais n\'avez pas confirmé votre intention en cochant la case de confirmation.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'Remboursement PayPal initié pour %s. ID Transaction: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'Autorisation PayPal initiée pour %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'Prélèvement PayPal initié pour %s. ID du reçu: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'Demande d\'annulation PayPal initiée. ID Transaction: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Il y a eu une erreur dans la tentative de transaction. Veuillez lire le guide de référence API ou les journaux de transaction pour des informations détaillées.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Nous nous excusons de la gêne occasionnée; cependant, pour le moment nous ne pouvons pas utiliser Paypal pour traiter les commandes provenant du lieu géographique que vous avez sélectionné comme votre adresse Paypal. Veuillez continuer en utilisant l\'encaissement normal et un autre mode de paiement pour finaliser votre commande.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Il semblerait que votre commande a été soumise deux fois. Merci de bien vouloir vérifier dans Mon Compte les détails de votre commande. Veuillez utiliser le formulaire Contactez-nous si votre commande n\'apparaît pas ici bien qu\'elle soit déjà payée depuis votre compte PayPal. Ainsi, nous pourrons vérifier nos enregistrements et corriger l\'erreur.');

  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Régler avec PayPal. Le plus sûr et le plus simple moyen de paiement.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Cliquez ici pour payer avec PayPal Express');

// EC buttons -- Do not change these values:
///// You should only use choices listed on this page: https://ppmts.custhelp.com/app/answers/detail/a_id/632
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/fr_FR/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/fr_FR/i/btn/btn_xpressCheckoutsm.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/fr_FR/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/fr_FR/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/fr_FR/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/fr_FR/i/bnr/horizontal_solution_PPeCheck.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BORDER_COLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BACK_COLOR', ''); // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Prénom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Organisation :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Adresse :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Région / Département :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code postal :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email du payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Identifiant Ebay :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Identifiant du payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut du payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Raison de la mise en attente :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Montant brut :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Commission de paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Taux de change :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Articles du panier :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Type de transaction :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID Transaction :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID Transaction parente :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Remboursement de la commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si vous voulez rembourser cette commande entièrement, cliquez ici :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Effectuer un remboursement total');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Effectuer un remboursement partiel');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... ou entrez le montant du remboursement partiel ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Entrez le ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'montant du remboursement ici et cliquez sur Remboursement Partiel');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Un remboursement total ne doit pas être effectué après un remboursement partiel.<br />*Plusieurs remboursements partiels sont autorisés à hauteur du solde non remboursé restant.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire de la boutique.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Confirmer :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Commentaires Système :');
  define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Eligibilité à la protection :');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorisations de Commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si vous voulez autoriser une partie de cette commande, entrez le montant ici :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Donner l\'autorisation');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Autorisations de prélèvement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si vous voulez prélever tout ou une partie du montant autorisé pour cette commande, entrez le montant du prélèvement et choisissez s\'il s\'agit du dernier prélevement pour cette commande ou non.  Cochez la case de confirmation avant de valider votre demande de prélèvement.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Faire le prélèvement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Montant à prélever :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Est-ce le prélèvement final ?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Nous vous remercions pour votre achat.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmer : ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annuler les autorisations de paiement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si vous souhaitez annuler une autorisation, entrez l\'ID de l\'autorisation ici, puis confirmez :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Note à afficher au client :</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Merci de votre confiance. À bientôt.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Annuler');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'État Transaction : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Code Autorisation : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Adresse correspondante : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP correspondant : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 correspondant : ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Jours pour accepter : ');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'Les informations d\'identification de votre compte, qui pourront être utilisées pour suivre vos commandes, sont les suivantes :');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Frais uniques se rapportant à ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Surtaxes');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Frais de manutention et autres charges applicables');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Remises');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Rabais appliqués, incluant les bons de réduction, chèques-cadeaux, etc');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'État du contrôle de paiement frauduleux : ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Ceci est une notification automatique pour vous informer que PayPal a marqué le paiement d\'une nouvelle commande comme Paiement devant être contrôlé par leur équipe anti-fraude. Habituellement, le contrôle est effectué dans les 36 heures. Il vous est FORTEMENT RECOMMANDE de NE PAS EXPEDIER la commande tant que le contrôle n\'est pas terminé. Vous pouvez voir le dernier état du contrôle de la commande en vous connectant à votre compte PayPal et en listant les transactions récentes.');

  define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLEME: Nous sommes désolés. PayPal a retourné de manière inattendue une adresse vide.<br />Pour terminer votre achat, veuillez fournir votre adresse en cliquant sur le bouton &quot;S\'enregistrer&quot; ci-dessous pour créer un compte dans notre boutique. Vous pourrez alors choisir PayPal à nouveau lors de l\'encaissement. Nous nous excusons pour la gêne occasionnée. Si vous avez des difficultés avec l\'encaissement, veuillez cliquer sur le lien Contactez Nous pour nous les expliquer en détail de sorte que nous puissions vous aider avec votre achat et empêcher le problème à l\'avenir. Merci.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Tous les articles dans votre panier (voir les détails dans la boutique et sur votre reçu de la boutique).');