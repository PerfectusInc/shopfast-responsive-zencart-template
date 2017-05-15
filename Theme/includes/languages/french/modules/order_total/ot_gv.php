<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: ot_gv.php 6099 2007-04-01 10:22:42Z wilt $
 */

  define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Bons de Réduction');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES);
  define('SHIPPING_NOT_INCLUDED', ' [Frais de livraison non inclus]');
  define('TAX_NOT_INCLUDED', ' [Taxes non incluses]');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Appliquer le montant: ');
  define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM);
  define('TEXT_INVALID_REDEEM_AMOUNT', 'Le montant que vous avez essayé d\'appliquer et le reliquat disponible de vos chèques cadeaux ne correspondent pas. Veuillez rectifier et réessayer.');
  define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Solde disponible : ');
  define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Pour utiliser le reliquat disponible de vos chèques cadeaux dans votre compte, tapez le montant que vous souhaitez utiliser dans le champ \'Appliquer montant\. Vous devrez choisir un moyen de paiement, cliquez alors sur le bouton Continuer pour appliquer le reliquat à votre panier.</p><p>Si vous utilisez un <em>nouveau</em> chèque cadeau, vous devez taper le code dans le champ à côté du code de réduction. Le montant de la réduction sera ajouté à votre compte quand vous cliquerez sur le bouton Continuer.</p>');
  define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', ' Définir Inclure les taxes = true, va seulement être utile si recalculer = None');
?>