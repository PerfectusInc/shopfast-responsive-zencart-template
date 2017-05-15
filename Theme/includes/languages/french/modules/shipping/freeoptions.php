<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 3830 2006-06-21 23:47:16Z ajeh $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Options de livraison gratuite');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Options Gratuites est utilisé pour afficher une option de livraison gratuite lorsque d\'autres modules de livraison sont affichés.
Il peut être basé sur : Toujours afficher, Total commande, Poids commande, Nombre d\'articles commandés.
Le module d\'Options Gratuites ne s\'affiche pas quand Free Shipper est actif.<br /><br />
Mettre un total à >= 0.00 et <= rien (laisser en blanc) activera ce module pour qu\'il s\'affiche avec les autres modules, sauf pour Livraison Gratuite - freeshipper.<br /><br />
NOTE : Le fait de laisser tous les réglages vides pour Total, Poids et Nombre d\'articles désactivera ce module.<br /><br />
NOTE : Les options de livraison gratuite ne s\'affichent pas si Livraison Gratuite est utilisé avec un poids de 0.
Voir : freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Livraison gratuite');

?>