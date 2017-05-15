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
// $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
//

define('NAVBAR_TITLE', 'FAQ '.TEXT_GV_NAME);
define('HEADING_TITLE', 'FAQ '.TEXT_GV_NAME);

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Acheter des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Comment envoyer des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Acheter avec des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Encaisser/Réclamer des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">En cas de problèmes</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Acheter des ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', 'Les ' . TEXT_GV_NAMES . ' s\'achètent comme tout autre produit dans notre boutique. Vous pouvez
  les acheter en utilisant les méthodes standarts de paiement en vigueur sur le site.
  Une fois acheté, la valeur de votre ' . TEXT_GV_NAME . ', sera ajoutée à votre
  compte ' . TEXT_GV_NAME . ' personnel. Si vous avez déjà des fonds disponibles sur votre compte ' . TEXT_GV_NAME . ', vous
  noterez que le montant s\'affiche alors dans le bloc du panier, avec un
  lien vers une page depuis laquelle vous pouvez envoyer votre ' . TEXT_GV_NAME . ' à la personne de votre choix par email.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Comment envoyer des ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Pour envoyer un ' . TEXT_GV_NAME . ', vous devez vous rendre sur la page ' . TEXT_GV_NAME . ' des envois. Vous pouvez
  trouver le lien vers cette page dans le bloc panier situé dans la colonne de droite de chaque page.
  Lorsque vous envoyez un ' . TEXT_GV_NAME . ', vous devez fournir les informations suivantes.
  Le nom de la personne à laquelle vous adressez un ' . TEXT_GV_NAME . '.
  L\'adresse email de la personne à laquelle vous adressez un ' . TEXT_GV_NAME . '.
  Le montant que vous souhaitez envoyer. (Notez que vous n\'êtes pas tenu d\'envoyer le montant total de votre compte ' . TEXT_GV_NAME . ').
  Un court message qui apparaitra dans l\'email.
  Veuillez vous assurer que vous avez entré toutes les informations correctement, bien que
  vous pourrez encore les modifier comme bon vous semble avant que l\'email ne soit vraiment envoyé.');
  break;
  case '3':
define('SUB_HEADING_TITLE','Comment acheter avec des ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Si vous disposez de fonds sur votre compte ' . TEXT_GV_NAME . ', vous pouvez les utiliser pour
  acheter d\'autres articles dans notre boutique. Lors de l\'encaissement de la commande, une boîte supplémentaire
  apparaîtra. Entrez le montant que vous souhaitez prélever de votre compte ' . TEXT_GV_NAME . '.
  Notez que vous devrez encore compléter avec un autre moyen de paiement si le
  montant disponible sur votre compte ' . TEXT_GV_NAME . ' est insuffisant pour couvrir le coût total de votre achat.
  Si vous disposez de plus de fonds sur votre compte ' . TEXT_GV_NAME . ' que le coût total de
  votre achat, le solde sera laissé sur votre compte ' . TEXT_GV_NAME . ' pour vos futurs achats.');
  break;
  case '4':
define('SUB_HEADING_TITLE','Comment encaisser/réclamer des ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Si vous recevez un ' . TEXT_GV_NAME . ' par e-mail, il contiendra les détails concernant
  l\'expéditeur du ' . TEXT_GV_NAME . ', ainsi qu\'un court message de sa part. Cet email
  indiquera aussi le ' . TEXT_GV_REDEEM . ' du ' . TEXT_GV_NAME . '. Nous vous invitons à imprimer
  cet e-mail pour vous y référer ultérieurement. Vous pouvez maintenant encaisser ce ' . TEXT_GV_NAME . ' de
  deux manières.<br /><br />
  1. En cliquant sur le lien contenu dans l\'e-mail et prévu à cet effet.
  Vous serez alors redirigé vers la page remboursement de ' . TEXT_GV_NAME . '. Il vous sera demandé de
  créer un compte si vous n\'êtes pas encore client(e), avant que le ' . TEXT_GV_NAME . ' soit validé et placé sur votre
  compte ' . TEXT_GV_NAME . ' prêt à être dépensé pour ce que vous voulez.<br /><br />
  2. Lors du processus d\'encaisement, sur la même page où vous choisissez une méthode de paiement,
  il y aura une boîte pour entrer un ' . TEXT_GV_REDEEM . '. Entrez le ' . TEXT_GV_REDEEM . ' ici, et
  cliquez sur le bouton Remboursement. Le code sera
  validé et le montant ajouté à votre compte ' . TEXT_GV_NAME . '. Vous pouvez ensuite utiliser le montant pour acheter dans notre boutique.');
  break;
  case '5':
define('SUB_HEADING_TITLE','En cas de problèmes.');
define('SUB_HEADING_TEXT','Pour tout renseignement concernant le système de ' . TEXT_GV_NAME . ', veuillez contacter la boutique
  par e-mail à '. STORE_OWNER_EMAIL_ADDRESS . '. Veuillez par ailleurs vous assurer de nous fournir le maximum d\'informations dans l\'email.');
  break;
  default:
define('SUB_HEADING_TITLE','');
define('SUB_HEADING_TEXT','Veuillez choisir une des questions ci-dessus.');

  }

define('TEXT_GV_REDEEM_INFO', 'Veuillez entrer le code remboursement de votre ' . TEXT_GV_NAME . ' : ');
define('TEXT_GV_REDEEM_ID', 'Code de remboursement: ');
?>