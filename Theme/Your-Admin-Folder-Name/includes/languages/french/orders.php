<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: orders.php 6214 2007-04-17 02:24:25Z ajeh $
 */
 
define('HEADING_TITLE', 'Commandes');
define('HEADING_TITLE_SEARCH', 'ID de Commande:');
define('HEADING_TITLE_STATUS', 'Statut :');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Recherche par nom de produit ou <strong>ID :XX</strong> ou modèle ');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'Filtre de recherche : ');
define('TABLE_HEADING_PAYMENT_METHOD', 'Paiement<br />Livraison');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Facturation et livraison ne correspondent pas');

define('TABLE_HEADING_COMMENTS', 'Commentaires');
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDER_TOTAL', 'Total de Commande');
define('TABLE_HEADING_DATE_PURCHASED', 'Date d\'Achat');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_TYPE', 'Type de commande');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Qté.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modèle');
define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_TAX', 'Taxe');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prix HT');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prix TTC');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total HT');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total TTC');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Client notifié');
define('TABLE_HEADING_DATE_ADDED', 'Date de création');

define('ENTRY_CUSTOMER', 'Client :');
define('ENTRY_SOLD_TO', 'VENDU A :');
define('ENTRY_DELIVERY_TO', 'Expédié à :');
define('ENTRY_SHIP_TO', 'LIVRÉ A :');
define('ENTRY_SHIPPING_ADDRESS', 'Adresse de livraison :');
define('ENTRY_BILLING_ADDRESS', 'Adresse de facturation :');
define('ENTRY_PAYMENT_METHOD', 'Méthode de paiement :');
define('ENTRY_CREDIT_CARD_TYPE', 'Type de carte de crédit :');
define('ENTRY_CREDIT_CARD_OWNER', 'Titulaire de la carte de crédit :');
define('ENTRY_CREDIT_CARD_NUMBER', 'No. de la carte de crédit :');
define('ENTRY_CREDIT_CARD_CVV', 'No. CVV de la carte de crédit :');
define('ENTRY_CREDIT_CARD_EXPIRES', 'La carte de crédit expire le :');
define('ENTRY_SUB_TOTAL', 'Sous-total :');
define('ENTRY_TAX', 'Taxes :');
define('ENTRY_SHIPPING', 'Livraison :');
define('ENTRY_TOTAL', 'Total :');
define('ENTRY_DATE_PURCHASED', 'Date de commande :');
define('ENTRY_STATUS', 'Statut :');
define('ENTRY_DATE_LAST_UPDATED', 'Dernière mise à jour :');
define('ENTRY_NOTIFY_CUSTOMER', 'Notifier le client :');
define('ENTRY_NOTIFY_COMMENTS', 'Commentaires annotés :');
define('ENTRY_PRINTABLE', 'Imprimer la facture');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Supprimer la commande');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir supprimer cette commande?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Remettre en stock les quantités des produits');
define('TEXT_DATE_ORDER_CREATED', 'Date de création :');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_PAYMENT_METHOD', 'Méthode de paiement :');
define('TEXT_PAID', 'Payé');
define('TEXT_UNPAID', 'Non payé');

define('TEXT_ALL_ORDERS', 'Toutes les commandes');
define('TEXT_NO_ORDER_HISTORY', 'Aucun historique de commande disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualisation de la commande');
define('EMAIL_TEXT_ORDER_NUMBER', 'Numéro de commande :');
define('EMAIL_TEXT_INVOICE_URL', 'Facture détaillée :');
define('EMAIL_TEXT_DATE_ORDERED', 'Date de commande :');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Les commentaires joints à votre commande sont : </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Votre commande a été mise à jour avec le statut suivant :' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nouvel statut :</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Veuillez nous contacter par retour d\'email si vous avez quelque question.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Erreur : Commande inexistante.');
define('SUCCESS_ORDER_UPDATED', 'Succès : La commande a été actualisée avec succès.');
define('WARNING_ORDER_NOT_UPDATED', 'Attention : Aucune modification. La commande n\'a pas été actualisée.');

define('ENTRY_ORDER_ID','Commande No. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATUIT</span>');

define('TEXT_DOWNLOAD_TITLE', 'Statut de téléchargement de commmande');
define('TEXT_DOWNLOAD_STATUS', 'Statut');
define('TEXT_DOWNLOAD_FILENAME', 'Nom du fichier');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Jours');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Compteur');

define('TEXT_DOWNLOAD_AVAILABLE', 'Disponible');
define('TEXT_DOWNLOAD_EXPIRED', 'Expiré');
define('TEXT_DOWNLOAD_MISSING', 'Absent du serveur');

define('IMAGE_ICON_STATUS_CURRENT', 'Statut - Disponible');
define('IMAGE_ICON_STATUS_EXPIRED', 'Statut - Expiré');
define('IMAGE_ICON_STATUS_MISSING', 'Statut - Manquant');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Téléchargement activé avec succès');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Téléchargement désactivé avec succès');
define('TEXT_MORE', '... plus');

define('TEXT_INFO_IP_ADDRESS', 'Adresse IP : ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Supprimer CVV de la base de données');
define('TEXT_DELETE_CVV_REPLACEMENT','Supprimé');
define('TEXT_MASK_CC_NUMBER','Masquer ce numèro');

define('TEXT_INFO_EXPIRED_DATE', 'Date d\'expiration :<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Nombre expirés :<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Commentaires<br />Client');
define('TEXT_COMMENTS_YES', 'Commentaires clients - OUI');
define('TEXT_COMMENTS_NO', 'Commentaires clients - NON');
?>