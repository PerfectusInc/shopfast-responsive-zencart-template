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
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//

  define('HEADING_TITLE', 'Soldeur (Salemaker)');
  define('SUBHEADING_TITLE', 'Astuces d\'utilisation du Soldeur');
  define('INFO_TEXT', '<ul>
                      <li>
                        Utilisez toujours un point décimal \'.\' pour la déduction et l\'intervalle de prix.
                      </li>
                      <li>
                        Entrez les montants dans la même devise que celle utilisée pour créer/éditer un produit.
                      </li>
                      <li>
                        Pour la déduction, vous pouvez entrer un montant ou un pourcentage à déduire,
                        ou encore un prix de remplacement. (ex : déduire 5.00€ sur tous les prix, déduire 10% sur
                        tous les prix, ou changer tous les prix à 25.00€)
                      </li>
                      <li>
                        Saisir un intervalle de prix réduit le nombre de produits qui seront affectés. (ex :
                        les produits de 50.00 à 150.00€)
                      </li>
                      <li>
                        Vous devez sélectionner l\'action à accomplir si un produit est en promotion <i>et</i> est affecté par cette solde :
                        <ul>
                          <li>
                            <strong>Ignorer le prix promotionnel - Appliquer au prix du produit et remplacer la promotion</strong><br>
                            La déduction de solde sera appliquée au prix normal du produit.
                            (Ex : prix normal = 10.00€, prix promotionnel = 9.50€, et la condition de solde est une remise de 10%.
                            Le prix final du produit sera affiché à 9.00€. Le prix promotionnel est ignoré.)
                          </li>
                          <li>
                            <strong>Ignorer la condition de solde - Pas de mise en solde si le produit est en promotion</strong><br>
                            La déduction de solde ne sera pas appliquée aux produits en promotion. Le prix promotionnel sera affiché comme
                            si aucune solde n\'était définie. (Ex : prix normal = 10.00€, prix promotionnel = 9.50€,
                            et la condition de solde est une remise de 10%. Le prix final du produit sera affiché à 9.50€.
                            La condition de solde est ignorée.)
                          </li>
                          <li>
                            <strong>Appliquer la déduction de solde au prix promotionnel - Sinon, appliquer au prix du produit</strong><br>
                            La déduction de solde sera appliqué au prix promotionnel. Un prix combiné sera affiché.
                            (Ex: prix normal = 10.00€, prix promotionnel = 9.50€, et la condition de solde est une remise de 10%.
                            Le prix final du produit sera affiché à 8.55€. Il s\'agit d\'une remise de 10% sur le prix promotionnel.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Laisser la date de début de solde vide démarrera la solde immédiatement.
                      </li>
                      <li>
                        Laisser la date de fin de solde vide prolongera la solde indéfiniment.</li>
                      <li>
                        Cocher une catégorie incluera automatiquement ses sous-catégories.
                      </li>
                    </ul>');
  define('TEXT_CLOSE_WINDOW', '[ Fermer la fenêtre ]');
?>