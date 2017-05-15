<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Envoi de  ' . TEXT_GV_NAME . ' aux clients');

define('TEXT_CUSTOMER', 'Client :');
define('TEXT_SUBJECT', 'Sujet :');
define('TEXT_FROM', 'De :');
define('TEXT_TO', 'E-mail à :');
define('TEXT_AMOUNT', 'Montant :');
define('TEXT_MESSAGE', 'Message <br />au format Text-Only :');
define('TEXT_RICH_TEXT_MESSAGE', 'Message <br />au format Rich Text:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Utilisez ceci pour envoyer des e-mails uniques, autrement utilisez le menu déroulant ci-dessus</span>');
define('TEXT_SELECT_CUSTOMER', 'Sélection du client');
define('TEXT_ALL_CUSTOMERS', 'Tous les clients');
define('TEXT_NEWSLETTER_CUSTOMERS', 'À tous les abonnés au bulletin');

define('NOTICE_EMAIL_SENT_TO', 'Avis : E-mail envoyé à : %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erreur : Aucun client sélectionné.');
define('ERROR_NO_AMOUNT_SELECTED', 'Erreur : Aucun montant sélectionné.');
define('ERROR_NO_SUBJECT', 'Erreur : Aucun sujet indiqué.');
define('ERROR_GV_AMOUNT', 'Veuillez indiquer un montant sous forme de valeur sans symbole. Exemple : 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Nous sommes heureux de vous offrir un ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', 'Ce ' . TEXT_GV_NAME . ' est d\'une valeur de  ');
define('TEXT_TO_REDEEM', 'Pour réclamer ce ' . TEXT_GV_NAME . ', veuillez cliquer sur le lien ci-dessous. Conservez aussi soigneusement votre ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' qui est le suivant : ');
define('TEXT_IN_CASE', ' au cas où vous auriez quelque problème que se soit.');
define('TEXT_OR_VISIT', 'ou visitez ');
define('TEXT_ENTER_CODE', ' et entrez le code lors du processus d\'encaissement.');
define('TEXT_CLICK_TO_REDEEM','Cliquez ici obtenir la réclamation');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Vous avez récemment acheté un  ' . TEXT_GV_NAME . ' sur notre site. Pour des questions de sécurité, le montant de ce  ' . TEXT_GV_NAME . ' ne vous a pas été immédiatement crédité. Le gérant de la boutique a maintenant débloqué ce montant.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'La valeur de ce  ' . TEXT_GV_NAME . ' était de %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Vous pouvez maintenant vous rendre sur notre site, vous connecter, et adresser la valeur de votre ' . TEXT_GV_NAME . ' à la personne de votre choix.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>