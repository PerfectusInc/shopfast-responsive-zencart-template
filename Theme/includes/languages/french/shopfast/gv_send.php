<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Envoyer ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Confirmation de l\'envoi de ' . TEXT_GV_NAME);
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' envoyé');
define('NAVBAR_TITLE', 'Envoyer ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Message de ' . STORE_NAME);
define('HEADING_TEXT','Veuillez entrer le nom, adresse e-mail et montant du ' . TEXT_GV_NAME . ' que vous souhaitez envoyer. Pour de plus amples informations, veuillez consulter notre <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a><br />');
define('ENTRY_NAME', 'Nom du destinataire : ');
define('ENTRY_EMAIL', 'Adresse Email du destinataire : ');
define('ENTRY_MESSAGE', 'Votre mMessage : ');
define('ENTRY_AMOUNT', 'Montant à envoyer : ');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Vous n\'avez pas précisé le nom du destinataire. Veuillez remplir le champ correspondant ci-dessous. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Le montant du ' . TEXT_GV_NAME . ' semble incorrect. Veuillez réessayer.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'L\'adresse email semble incorrecte. Veuillez réessayer.');
define('MAIN_MESSAGE', 'Vous envoyez un ' . TEXT_GV_NAME . ' d\'une valeur de %s à %s dont l\'adresse email est %s. Si ces détails sont incorrects, vous pouvez modifier votre message en cliquant sur le bouton <strong>editer</strong>.<br /><br />Le message que vous envoyez est le suivant :<br /><br />');
define('SECONDARY_MESSAGE', 'Cher(Chère) %s,<br /><br />' . 'Un ' . TEXT_GV_NAME . ' d\'une valeur de %s vous a été envoyé par %s');
define('PERSONAL_MESSAGE', '%s dit:');
define('TEXT_SUCCESS', 'Félicitations, votre ' . TEXT_GV_NAME . ' a été envoyé avec succès');
define('TEXT_SEND_ANOTHER', 'Voulez-vous envoyer un autre ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE','Solde de chèque cadeau : ');

define('EMAIL_GV_TEXT_SUBJECT', 'Un cadeau de %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Félicitations, Vous avez reçu un ' . TEXT_GV_NAME . ' d\'une valeur de %s');
define('EMAIL_GV_FROM', 'Ce ' . TEXT_GV_NAME . ' vous a été adressé par %s');
define('EMAIL_GV_MESSAGE', 'avec le message suivant : ');
define('EMAIL_GV_SEND_TO', 'Bonjour, %s');
define('EMAIL_GV_REDEEM', 'Pour encaisser ce ' . TEXT_GV_NAME . ', veuillez cliquer sur le lien ci-dessous. Pensez également à noter par écrit, ou imprimer la référence du ' . TEXT_GV_REDEEM . ': %s afin d\'éviter toute erreur possible.');
define('EMAIL_GV_LINK', 'Pour vous rendre sur la page d\'encaissement, veuillez cliquer sur le lien suivant');
define('EMAIL_GV_VISIT', ' ou visitez ');
define('EMAIL_GV_ENTER', ' et entrez le ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Si vous éprouvez des difficultés pour encaisser/réclamer le ' . TEXT_GV_NAME . ' via le lien automatique ci-dessus, ' . "\n" .
                              'nous vous informons que vous pouvez aussi entrer le ' . TEXT_GV_REDEEM . ' du ' . TEXT_GV_NAME . ' lors du processus d\'encaissement sur notre boutique.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>