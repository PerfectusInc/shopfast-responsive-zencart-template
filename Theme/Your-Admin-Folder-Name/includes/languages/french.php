<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Modified in v1.5.4 $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Administration propulsée par Zen Cart :: L\'Art du E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Balises META Définies');
define('ICON_METATAGS_OFF', 'Balises META Non Définies');
define('TEXT_LEGEND_META_TAGS', 'Balises META Définies:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTE:</strong> Le Site/Slogan est utilisé pour la description de votre site dans le fichier meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="fr"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Accueil de l\'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de Support');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogue en Ligne');
define('HEADER_TITLE_VERSION', 'Version');
define('HEADER_TITLE_ACCOUNT', 'Compte');
define('HEADER_TITLE_LOGOFF', 'Déconnexion');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
define('TEXT_GV_NAME','Chèque Cadeau');
define('TEXT_GV_NAMES','Chèques Cadeaux');
define('TEXT_DISCOUNT_COUPON', 'Bon de Réduction');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM','Code d\'Activation');

// text for gender
define('MALE', 'Monsieur');
define('FEMALE', 'Madame');

define('NONE', 'None');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Configuration');
define('BOX_CONFIGURATION_MY_STORE', 'Ma Boutique');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Valeurs Minimum');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Valeurs Maximum');
define('BOX_CONFIGURATION_IMAGES', 'Images');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Détails Client');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Livraison / Emballage');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Listage Produit');
define('BOX_CONFIGURATION_STOCK', 'Stock');
define('BOX_CONFIGURATION_LOGGING', 'Connexion');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Options E-Mail');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Réglages des Attributs');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'Compression GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sessions');
define('BOX_CONFIGURATION_REGULATIONS', 'Règlementation');
define('BOX_CONFIGURATION_GV_COUPONS', 'Bons de Réduction');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Cartes de Crédit');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Information Produit');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Réglages de Mise en Page');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Maintenance du Site Web');
define('BOX_CONFIGURATION_NEW_LISTING', 'Listage Nouveautés');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Listage Produits Phares');
define('BOX_CONFIGURATION_ALL_LISTING', 'Tous les Listages');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Listage Index');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Définir le Statut des Pages');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Réglages des EZ-Pages');

// modules box text
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Paiements');
define('BOX_MODULES_SHIPPING', 'Livraison');
define('BOX_MODULES_ORDER_TOTAL', 'Total de la Commande');
define('BOX_MODULES_PRODUCT_TYPES', 'Types de produits');

// categories box text
define('BOX_HEADING_CATALOG', 'Catalogue');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Catégories / Produits');
define('BOX_CATALOG_PRODUCT_TYPES', 'Types de Produits');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Gestionnaire du Nom des Options');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Gestionnaire de la Valeur des Options');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricants');
define('BOX_CATALOG_REVIEWS', 'Avis');
define('BOX_CATALOG_SPECIALS', 'Promotions');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produits Attendus');
define('BOX_CATALOG_SALEMAKER', 'Soldeur');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gestionnaire des Prix des Produits');
define('BOX_CATALOG_PRODUCT', 'Produit');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Produits à Catégories');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Clients');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clients');
define('BOX_CUSTOMERS_ORDERS', 'Commandes');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Prix de Groupe');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Facture');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Bordereau de Livraison');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lieux / Taxes');
define('BOX_TAXES_COUNTRIES', 'Pays');
define('BOX_TAXES_ZONES', 'Zones');
define('BOX_TAXES_GEO_ZONES', 'Définitions des Zones');
define('BOX_TAXES_TAX_CLASSES', 'Classes de Taxes');
define('BOX_TAXES_TAX_RATES', 'Taux de Taxes');

// reports box text
define('BOX_HEADING_REPORTS', 'Rapports');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produits Consultés');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produits Achetés');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total Commandé par le Client');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Produits en Stock Bas');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Parrainages Clients');

// tools text
define('BOX_HEADING_TOOLS', 'Outils');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Sélection du Thème');
define('BOX_TOOLS_BACKUP', 'Sauvegarde de la Base de données');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestionnaire des Bannières');
define('BOX_TOOLS_CACHE', 'Contrôle du Cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Définir les Langues');
define('BOX_TOOLS_FILE_MANAGER', 'Gestionnaire des Fichiers');
define('BOX_TOOLS_MAIL', 'Envoyer un Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gestionnaire des Bulletins et Annonces de Produits');
define('BOX_TOOLS_SERVER_INFO', 'Information Serveur / Version');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui est en ligne ?');
define('BOX_TOOLS_STORE_MANAGER', 'Gestionnaire de la Boutique');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Outils du Développeur');
define('BOX_TOOLS_SQLPATCH','Installer des Patches SQL');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Suppléments');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Definir l\'éditeur des Pages');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Page Principale');
define('BOX_TOOLS_DEFINE_CONTACT_US','Nous Contacter');
define('BOX_TOOLS_DEFINE_PRIVACY','Confidentialité');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Livraisons & Retours');
define('BOX_TOOLS_DEFINE_CONDITIONS','Conditions Générales');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Encaissement Réussi');
define('BOX_TOOLS_DEFINE_PAGE_2','Page 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Page 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Page 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Localisation');
define('BOX_LOCALIZATION_CURRENCIES', 'Devises');
define('BOX_LOCALIZATION_LANGUAGES', 'Langues');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Statut des Commandes');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAMES . '/Bons');
define('BOX_GV_ADMIN_QUEUE', 'Queue ' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', 'Email ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' envoyés');
define('BOX_COUPON_ADMIN','Bon de l\'Administration');
define('BOX_COUPON_RESTRICT','Restrictions du Bon');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Gestionnaire d\'Accès à l\'Administration');
define('BOX_ADMIN_ACCESS_USERS',  'Utilisateurs de l\'Administration');
define('BOX_ADMIN_ACCESS_PROFILES', 'Profils des Utilisateurs de l\'Administration');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Enregistrement sur la Page de l\'Administration');
define('BOX_ADMIN_ACCESS_LOGS', 'Journal d\'activité de l\'Administration');

define('IMAGE_RELEASE', 'Echangez ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Des erreurs ont eu lieu lors du traitement de votre formulaire !\n Merci de bien vouloir apporter les corrections suivantes :\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Le nouvel attribut de produit requiert une valeur de prix\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Le nouvel attribut de produit requiert un préfixe de prix\n');

define('JS_PRODUCTS_NAME', '* Le nouveau produit requiert un nom\n');
define('JS_PRODUCTS_DESCRIPTION', '* Le nouveau produit requiert une description\n');
define('JS_PRODUCTS_PRICE', '* Le nouveau produit requiert une valeur de prix\n');
define('JS_PRODUCTS_WEIGHT', '* Le nouveau produit requiert une valeur de poids\n');
define('JS_PRODUCTS_QUANTITY', '* Le nouveau produit requiert une valeur de quantité\n');
define('JS_PRODUCTS_MODEL', '* Le nouveau produit requiert une valeur de modèle\n');
define('JS_PRODUCTS_IMAGE', '* Le nouveau produit requiert une image\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Vous devez établir un nouveau prix pour ce produit\n');

define('JS_GENDER', '* Vous devez choisir la valeur de \'Civilité\'.\n');
define('JS_FIRST_NAME', '* Le champ \'Prénom\' doit comporter un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères.\n');
define('JS_LAST_NAME', '* Le champ \'Nom\' doit comporter un minimum de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères.\n');
define('JS_DOB', '* Le champ \'Date de naissance\' doit être au format: xx/xx/xxxx (mois/jour/année).\n');
define('JS_EMAIL_ADDRESS', '* Le champ \'Adresse E-mail\' doit comporter un minimum de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères.\n');
define('JS_ADDRESS', '* Le champ \'Adresse\' doit comporter un minimum de ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères.\n');
define('JS_POST_CODE', '* Le champ \'Code postal\' doit comporter un minimum de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères.\n');
define('JS_CITY', '* Le champ \'Ville\' doit comporter un minimum de ' . ENTRY_CITY_MIN_LENGTH . ' caractères.\n');
define('JS_STATE', '** Le champ \'État\' doit être sélectionné.\n');
define('JS_STATE_SELECT', '-- Sélectionnez ci-dessus --');
define('JS_ZONE', '* Le champ \'Région\' doit être choisi dans la liste des régions de ce pays.');
define('JS_COUNTRY', '* Le champ \'Pays\' doit être sélectionné.\n');
define('JS_TELEPHONE', '* Le champ \'Numéro de téléphone\' doit comporter un minimum de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Commande numéro %s inexistante !');

define('CATEGORY_PERSONAL', 'Personnel');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Société');
define('CATEGORY_OPTIONS', 'Options');

define('ENTRY_GENDER', 'Civilité:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">requis</span>');
define('ENTRY_FIRST_NAME', 'Prénom : ');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères</span>');
define('ENTRY_LAST_NAME', 'Nom :');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance : ');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresse E-Mail :');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Cette adresse E-mail ne semble pas être valide !</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Cette adresse E-mail figure déjà dans nos registres !</span>');
define('ENTRY_COMPANY', 'Raison sociale : ');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Remise de Prix en Groupe');
define('ENTRY_STREET_ADDRESS', 'Adresse postale :');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères</span>');
define('ENTRY_SUBURB', 'Banlieue :');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Code postal : ');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères</span>');
define('ENTRY_CITY', 'Ville :');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' caractères</span>');
define('ENTRY_STATE', 'Région :');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requis</span>');
define('ENTRY_COUNTRY', 'Pays :');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Numéro de Téléphone: ');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères</span>');
define('ENTRY_FAX_NUMBER', 'Numéro de Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Bulletin :');
define('ENTRY_NEWSLETTER_YES', 'Souscrit');
define('ENTRY_NEWSLETTER_NO', 'Non Souscrit');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Le mot de passe et sa confirmation doivent correspondre');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Désolé, votre nouveau mot de passe a été rejeté.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Les mots de passe doivent contenir à la fois des lettres et des chiffres, doivent être composés d\'au moins %s caractères, et doivent être différents des 4 derniers mots de passe utilisés. Les mots de passe expirent tous les 90 jours, après quoi il vous sera demandé de choisir un nouveau mot de passe.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERREUR: Désolé, une erreur s\'est produite lors du traitement de vos données. Merci de bien vouloir renvoyer les informations à nouveau.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Envoi d\'E-Mail');
define('IMAGE_BACK', 'Retour');
define('IMAGE_BACKUP', 'Sauvegarder');
define('IMAGE_CANCEL', 'Annuler');
define('IMAGE_CONFIRM', 'Confirmer');
define('IMAGE_COPY', 'Copier');
define('IMAGE_COPY_TO', 'Copier vers');
define('IMAGE_DETAILS', 'Détails');
define('IMAGE_DELETE', 'Effacer');
define('IMAGE_EDIT', 'Modifier');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_GO', 'Aller');
define('IMAGE_FILE_MANAGER', 'Gestionnaire des fichiers');
define('IMAGE_ICON_STATUS_GREEN', 'Actif');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activer');
define('IMAGE_ICON_STATUS_RED', 'Inactif');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Désactiver');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Erreur -- trop d\'URL/de contenu saisis');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Erreur');
define('IMAGE_ICON_INFO', 'Information');
define('IMAGE_INSERT', 'Insérer');
define('IMAGE_LOCK', 'Verrouiller');
define('IMAGE_MODULE_INSTALL', 'Installer le module');
define('IMAGE_MODULE_REMOVE', 'Désinstaller le module');
define('IMAGE_MOVE', 'Déplacer');
define('IMAGE_NEW_BANNER', 'Nouvelle Bannière');
define('IMAGE_NEW_CATEGORY', 'Nouvelle Catégorie');
define('IMAGE_NEW_COUNTRY', 'Nouveau Pays');
define('IMAGE_NEW_CURRENCY', 'Nouvelle Devise');
define('IMAGE_NEW_FILE', 'Nouveau Fichier');
define('IMAGE_NEW_FOLDER', 'Nouveau Répertoire');
define('IMAGE_NEW_LANGUAGE', 'Nouvelle Langue');
define('IMAGE_NEW_NEWSLETTER', 'Nouveau Bulletin');
define('IMAGE_NEW_PRODUCT', 'Nouveau Produit');
define('IMAGE_NEW_SALE', 'Nouvelle Vente');
define('IMAGE_NEW_TAX_CLASS', 'Nouvelle Classe de Taxes');
define('IMAGE_NEW_TAX_RATE', 'Nouveau Taux de Taxes');
define('IMAGE_NEW_TAX_ZONE', 'Nouvelle Zone de Taxes');
define('IMAGE_NEW_ZONE', 'Nouvelle Zone');
define('IMAGE_OPTION_NAMES', 'Gestionnaire des Noms des Options');
define('IMAGE_OPTION_VALUES', 'Gestionnaire des Valeurs des Options');
define('IMAGE_ORDERS', 'Commandes');
define('IMAGE_ORDERS_INVOICE', 'Factures');
define('IMAGE_ORDERS_PACKINGSLIP', 'Bordereau de Livraison');
define('IMAGE_PERMISSIONS', 'Modifier les Permissions');
define('IMAGE_PREVIEW', 'Prévisualiser');
define('IMAGE_RESTORE', 'Restaurer');
define('IMAGE_RESET', 'Réinitialiser');
define('IMAGE_SAVE', 'Sauvegarder');
define('IMAGE_SEARCH', 'Chercher');
define('IMAGE_SELECT', 'Sélectionner');
define('IMAGE_SEND', 'Envoyer');
define('IMAGE_SEND_EMAIL', 'Envoyer E-mail');
define('IMAGE_SUBMIT', 'Soumettre');
define('IMAGE_UNLOCK', 'Déverrouiller');
define('IMAGE_UPDATE', 'Actualiser');
define('IMAGE_UPDATE_CURRENCIES', 'Actualiser le Taux de Change');
define('IMAGE_UPLOAD', 'Télécharger vers le Serveur');
define('IMAGE_TAX_RATES','Taux de Taxe');
define('IMAGE_DEFINE_ZONES','Définir les Zones');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gestion des Prix des Produits');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Actualiser les Changements de Prix');
define('IMAGE_ADD_BLANK_DISCOUNTS', 'Ajouter ' . DISCOUNT_QTY_ADD . ' Remises par Quantité à Vide');
define('IMAGE_CHECK_VERSION', 'Vérifier les Mises à Jour de Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gestionnaire des Liens de Catégories Multiples');

define('IMAGE_ICON_STATUS_ON', 'Statut - Activé');
define('IMAGE_ICON_STATUS_OFF', 'Statut - Désactivé');
define('IMAGE_ICON_LINKED', 'Le produit est Lié');

define('IMAGE_REMOVE_SPECIAL','Effacer l\'Information de la Promotion');
define('IMAGE_REMOVE_FEATURED','Effacer l\'Information du Produit Phare');
define('IMAGE_INSTALL_SPECIAL', 'Ajouter l\'Information de la Promotion');
define('IMAGE_INSTALL_FEATURED', 'Ajouter l\'Information du Produit Phare');

define('ICON_PRODUCTS_PRICE_MANAGER','Gestionnaire des Prix des Produits');
define('ICON_COPY_TO', 'Copier vers');
define('ICON_CROSS', 'Faux');
define('ICON_CURRENT_FOLDER', 'Répertoire Actuel');
define('ICON_DELETE', 'Effacer');
define('ICON_EDIT', 'Modifier');
define('ICON_ERROR', 'Erreur');
define('ICON_FILE', 'Fichier');
define('ICON_FILE_DOWNLOAD', 'Télécharger');
define('ICON_FOLDER', 'Répertoire');
//define('ICON_LOCKED', 'Verrouillé');
define('ICON_MOVE', 'Déplacer');
define('ICON_PERMISSIONS', 'Permissions');
define('ICON_PREVIOUS_LEVEL', 'Niveau Précédent');
define('ICON_PREVIEW', 'Prévisualiser');
define('ICON_RESET', 'Réinitialiser');
define('ICON_STATISTICS', 'Statistiques');
define('ICON_SUCCESS', 'Succès');
define('ICON_TICK', 'Vrai');
//define('ICON_UNLOCKED', 'Déverrouillé');
define('ICON_WARNING', 'Avertissement');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page %s sur %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> administrateurs)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> bannières)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> catégories)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> pays)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> clients)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> devises)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> produits phares)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> langues)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> fabricants)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> bulletins)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> états des commandes)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> groupes de prix)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> produits)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> types de produits)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> articles attendus)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> avis)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> soldes)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> promotions)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> classes de taxes)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> associations de thème)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> zones de taxes)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> taux de taxes)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> zones)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'défaut');
define('TEXT_SET_DEFAULT', 'Définir par défaut');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requis</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'ERREUR: il n\'y a actuellement aucune devise définie par défaut. Veuillez en configurer une dans: Administration Outils->Localisation->Devises');

define('TEXT_CACHE_CATEGORIES', 'Bloc des Catégories');
define('TEXT_CACHE_MANUFACTURERS', 'Bloc des Fabricants');
define('TEXT_CACHE_ALSO_PURCHASED', 'Module Egalement Acheté');

define('TEXT_NONE', '--aucun--');
define('TEXT_TOP', '[Racine]');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'ERREUR : destination inconnue %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'ERREUR : destination non inscriptible %s');
define('ERROR_FILE_NOT_SAVED', 'ERREUR : fichier téléchargé vers le serveur non sauvegardé.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'ERREUR : Type de fichier téléchargé interdit  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'SUCCÈS : fichier téléchargé vers le serveur sauvegardé %s');
define('WARNING_NO_FILE_UPLOADED', 'AVERTISSEMENT : Aucun fichier téléchargé vers le serveur.');
define('WARNING_FILE_UPLOADS_DISABLED', 'AVERTISSEMENT : Le téléchargement de fichiers vers le serveur est désactivé dans le fichier de configuration php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'AVERTISSEMENT : Votre connexion a l\'Administration n\'est pas sécurisée ... soit vous avez conservé le réglage par défaut pour: Admin admin, soit vous n\'avez pas supprimé ou changé: demo demoonly<br />Le(s) identifiant(s) doivent être changé(s) dès que possible pour la sécurité de votre boutique.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Votre base de données semble avoir besoin d\'un patch de mise à jour. Voir Outils->Information Serveur pour consulter les niveaux de patches.');
define('WARN_DATABASE_VERSION_PROBLEM','Vrai'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>AVERTISSEMENT :</strong> Le site est actuellement fermé pour maintenance...<br />NOTE : Vous ne pouvez pas tester la plupart des modules de paiement et livraison en mode maintenance');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'AVERTISSEMENT : Ces fichiers devraient être supprimés pour empêcher des failles de sécurité: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'AVERTISSEMENT DE SÉCURITÉ : Le répertoire d\'installation existe à: '. DIR_FS_CATALOG. 'zc_install. Veuillez enlever ce répertoire pour des raisons de sécurité.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'AVERTISSEMENT : Votre fichier de configuration: %sincludes/configure.php. C\'est un risque potentiel de sécurité - Veuillez mettre les bonnes permissions utilisateur sur ce fichier (lecture uniquement, CHMOD 644 ou 444). <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Voir cette FAQ</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVERTISSEMENT : Impossible de trouver le fichier de langue: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERREUR : Interdiction de supprimer le module: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ALERTE : Veuillez examiner une probable activité XSS:');

define('_JANUARY', 'Janvier');
define('_FEBRUARY', 'Février');
define('_MARCH', 'Mars');
define('_APRIL', 'Avril');
define('_MAY', 'Mai');
define('_JUNE', 'Juin');
define('_JULY', 'Juillet');
define('_AUGUST', 'Août');
define('_SEPTEMBER', 'Septembre');
define('_OCTOBER', 'Octobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'Décembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> Chèques Cadeaux)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> Bons de Réductions)');

define('TEXT_VALID_PRODUCTS_LIST', 'Listes des produits');
define('TEXT_VALID_PRODUCTS_ID', 'ID des produits');
define('TEXT_VALID_PRODUCTS_NAME', 'Noms des produits');
define('TEXT_VALID_PRODUCTS_MODEL', 'Modèle des produits');

define('TEXT_VALID_CATEGORIES_LIST', 'Liste des catégories');
define('TEXT_VALID_CATEGORIES_ID', 'ID de la catégorie');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom de la catégorie');

define('DEFINE_LANGUAGE','Définir la langue: ');

define('BOX_ENTRY_COUNTER_DATE','Le Compteur des Visites a Débuté le :');
define('BOX_ENTRY_COUNTER','Compteur des Visites :');

// not installed
  define('NOT_INSTALLED_TEXT','Non Installé');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Classement des Valeurs des Options ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Actualisation du classement des attributs à partir des valeurs d\'options par défaut</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Actualisation des classements des attributs de tous les produits</strong><br />pour correspondre aux classements des valeurs d\'options par défaut :<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Classement des Noms des Options');
  
// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Contrôleur des Attributs');

// generic model
  define('TEXT_MODEL','Modèle : ');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Contrôleur de la Disposition des Boîtes');

// check release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s en attente d\'approbation ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Queue');
  define('IMAGE_ORDER','Commande');

  define('IMAGE_DISPLAY','Afficher');
  define('IMAGE_UPDATE_SORT','Actualiser le Classement');
  define('IMAGE_EDIT_PRODUCT','Modifier un Produit');
  define('IMAGE_EDIT_ATTRIBUTES','Modifier des Attributs');
  define('TEXT_NEW_PRODUCT', 'Produit dans la Catégorie: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Noms et Valeurs des Options');
  define('TEXT_PRODUCTS_PRICE_MANAGER','GESTIONNAIRE DU PRIX DES PRODUITS');
  define('TEXT_PRODUCT_EDIT','MODIFIER LE PRODUIT');
  define('TEXT_ATTRIBUTE_EDIT','MODIFIER LES ATTRIBUTS');
  define('TEXT_PRODUCT_DETAILS','VOIR LES DÉTAILS');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Montant à déduire');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Pourcentage');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nouveau prix');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min : ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unités : ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','Dans le panier : ');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Ajouter en Plus: ');

  define('TEXT_PRODUCTS_MIX_OFF','*Non Options Mixtes');
  define('TEXT_PRODUCTS_MIX_ON','*Oui Options Mixtes');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtre de Recherche : ');
  define('HEADING_TITLE_SEARCH_DETAIL','Recherche : ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Recherche de Produit(s) - Délimités par des virgules');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Recherche par Nom/Modèle de Produit');

  define('PREV_NEXT_PRODUCT', 'Produits : ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*La Catégorie est Désactivée</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Le Produit est Désactivé</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','La Démo de l\'Administration est actuellement activée. Certains réglages seront désactivés');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','La Démo de l\'Administration est actuellement activée. Certains réglages seront désactivés - <strong>NOTE : L\'outrepassement de l\'Administration est activé</strong>');
  define('ERROR_ADMIN_DEMO','La Démo de l\'Administration est activée ... la fonction que vous demandez est désactivée');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nouvelle Version disponible v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Nouveau PATCH disponible: v');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Téléchargez ici');
  define('TEXT_VERSION_CHECK_CURRENT','Votre version de Zen Cart&reg; semble être à jour.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> téléchargements vers le serveur)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gestion des Téléchargements vers le Serveur');

define('BOX_CATALOG_FEATURED','Produits Phares');

define('ERROR_NOTHING_SELECTED', 'Rien n\'était sélectionné ... et aucun changement n\'a été éffectué');
define('TEXT_STATUS_WARNING','<strong>NOTE :</strong> Le statut est activé/désactivé automatiquement lorsque des dates sont définies');

define('TEXT_LEGEND_LINKED', 'Produit lié');
define('TEXT_MASTER_CATEGORIES_ID','Catégorie Maître du Produit : ');
define('TEXT_LEGEND', 'LÉGENDE : ');
define('TEXT_LEGEND_STATUS_OFF', 'Statut INACTIF ');
define('TEXT_LEGEND_STATUS_ON', 'Statut ACTIF ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTE: La catégorie maître est utilisée pour fixer des prix lorsque<br />la catégorie du produit affecte le prix des produits liés, exemple : Soldes</strong>');
define('TEXT_YES', 'Oui');
define('TEXT_NO', 'Non');
define('TEXT_CANCEL', 'Annuler');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Erreurs dans la configuration de la livraison !</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>AVERTISSEMENT :</strong> Le code postal de la boutique n\'est pas défini. Voir Configuration | Livraison/Emballage pour le paramètrer.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>AVERTISSEMENT :</strong> Un poids 0 est défini pour les Livraisons Gratuites, et le module des livraisons gratuites est désactivé.');
define('ERROR_USPS_STATUS', '<strong>AVERTISSEMENT :</strong> Le module de livraison USPS n\'a pas d\'utilisateur ou il est en mode TEST au lieu de PRODUCTION et ne fonctionnera pas.<br />Si vous ne pouvez rapatrier les quotations USPS, veuillez contacter USPS pour activer votre compte Web Tools sur leur serveur de production. 1-800-344-7779 or icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE : Vous n\'avez aucun module de livraison activé. Veuillez aller dans  Modules->Livraisons pour les configurer.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE : Vous n\'avez aucun module de paiement activé. Veuillez aller dans Modules->Paiements pour les configurer.');

// text pricing
define('TEXT_CHARGES_WORD','Montant Calculé : ');
define('TEXT_PER_WORD','<br />Prix par mot : ');
define('TEXT_WORDS_FREE',' Mot(s) gratuit(s) ');
define('TEXT_CHARGES_LETTERS','Montant calculé : ');
define('TEXT_PER_LETTER','<br />Prix par Lettre : ');
define('TEXT_LETTERS_FREE',' Lettre(s) gratuite(s) ');
define('TEXT_ONETIME_CHARGES','*paiement unique = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*paiement unique = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Remises avec Options de Quantités');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTE');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIX');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Remises sur quantités d\'options avec paiement unique');
define('TEXT_CATEGORIES_PRODUCTS', 'Sélectionnez une catégorie avec des produits. Ou naviguez parmi les produits');
define('TEXT_PRODUCT_TO_VIEW', 'Sélectionnez un produit à consulter puis appuyez sur afficher ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Numéro d\'identification de la catégorie maître est invalide');
define('TEXT_INFO_ID', ' Numéro d\'Identification# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>AVERTISSEMENT :</strong> Ce produit est lié à des catégories multiples mais aucune catégorie maître n\'est définie !');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Produit nécessitant une Demande de Prix');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Le produit est Gratuit');

define('TEXT_PRODUCT_WEIGHT_UNIT','kgs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max :');

// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX','Économie : -');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% de remise');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;de remise');
// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE','Soldé :&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Si aucun éditeur HTML n\'est défini ou que la fonction JavaScript est désactivée, vous pouvez saisir ici du code HTML manuellement.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Note : Vous utilisez le format TEXTE seul pour vos emails. Si vous souhaitez envoyer vos emails en mode HTML, vous devez activer la fonction "Utiliser eMails en HTML" dans les Options des E-mails</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Note : Vous utilisez le format TEXTE seul pour vos e-mails. Si vous souhaitez envoyer vos e-mails en mode HTML, vous devez activer la fonction "Utiliser eMails en HTML" dans les Options des E-mails</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Vous voyez ce texte car nous vous avons adressé un email au format HTML, mais votre client mail ne peut afficher les messages au format HTML.");
define('ENTRY_EMAIL_PREFERENCE','Préférence de format Email : ');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Choisir "aucun" ou "désinscrire" désactive TOUS les mails, y compris les détails de commande');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Texte-Seul');
define('ENTRY_EMAIL_NONE_DISPLAY','Jamais');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Désabonnement des Bulletins');
define('ENTRY_NOTHING_TO_SEND','Vous n\'avez saisi aucun texte pour votre message');
define('EMAIL_SEND_FAILED','ERREUR : Échec de l\'envoi de l\'email à: "%s" <%s> avec le sujet: "%s".');

  define('EDITOR_NONE', 'Texte Simple');
  define('TEXT_EDITOR_INFO', 'Éditeur de texte :');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Vous avez sélectionné un éditeur HTML dans \'My Store\' mais le dossier  \'/editors/\'  ne peut pas être localisé. Veuillez désactiver votre choix ou déplacer les fichiers de votre editeur dans le dossier \''.DIR_WS_CATALOG.'editors/\'');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordre d\'Affichage des Catégories/Produits : ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Classement par Produit, Nom de Produit');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nom des Produits');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modèle des Produits');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Qté+ des Produits, Nom des Produits');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Qté- de Produits, Nom des Produits');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Prix+ des Produits, Nom des Produits');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Prix- des Produits, Nom des Produits');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Classement par catégorie, Nom des Catégories');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nom des Catégories');



  define('TABLE_HEADING_YES','Oui');
  define('TABLE_HEADING_NO','Non');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Ou, choisir un fichier image existant à partir du serveur, nom du fichier :</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Écraser la photo existante sur le serveur ?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','AVERTISSEMENT: LE NOM DE FICHIER a été actualisé mais pas écrasé ');
  define('TEXT_IMAGES_DELETE', '<strong>Effacer l\'image ?</strong><br />NOTE : Enlève l\'image au produit, l\'image n\'est pas supprimée du serveur');
  define('TEXT_IMAGE_CURRENT', 'Nom de l\'image : ');

  define('ERROR_DEFINE_OPTION_NAMES', 'AVERTISSEMENT : Aucun nom d\'option a été défini');
  define('ERROR_DEFINE_OPTION_VALUES', 'AVERTISSEMENT : Aucune valeur d\'option a été définie');
  define('ERROR_DEFINE_PRODUCTS', 'AVERTISSEMENT : Aucun produit a été défini');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'AVERTISSEMENT : Aucun numéro d\'identification de catégorie maître n\'a été défini pour ce produit');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Ajouter avec Sous-Catégories');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Ajouter sans Sous-Catégories');

  define('BUTTON_PREVIOUS_ALT','Produit Précédent');
  define('BUTTON_NEXT_ALT','Produit Suivant');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Gestionnaire de Liens vers de multiples Catégories');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copier un Produit vers de multiples Catégories');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Toutes les manipulations globales: copier, ajouter et effacer, sont actuellement sur INACTIF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Affichage des manipulations globales - ACTIF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Affichage des manipulations globales - INACTIF');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Erreur : Impossible de lier des produits dans la même catégorie.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Erreur : Impossible d\'écrire dans le répertoire des images: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le répertoire des images est inexistant: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Erreur : Impossible de déplacer la catégorie en sous-catégorie ');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Erreur : Impossible de déplacer le produit dans la même catégorie ou dans une catégorie où il existe déjà');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Erreur : La catégorie a des produits!<br /><br />Bien que cela puisse être fait temporairement pour construire vos catégories ... Les catégories ne peuvent contenir que des produits ou des catégories mais jamais les deux!');
  define('SUCCESS_CATEGORY_MOVED', 'Succès! La catégorie a été déplacée avec succès ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Erreur : Impossible de déplacer la catégorie vers la même catégorie ! Numéro d\'Identification#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVERTISSEMENT : EZ-PAGES HEADER - Actif pour l\'IP de l\'Administration uniquement');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVERTISSEMENT : EZ-PAGES FOOTER - Actif pour l\'IP de l\'Administration uniquement');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVERTISSEMENT : EZ-PAGES SIDEBOX - Actif pour l\'IP de l\'Administration uniquement');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Avertissement : Ce produit est marqué - Livraison Gratuite et sans Adresse de Livraison<br />Aucune adresse de livraison ne sera demandée lorsque tous les produits commandés sont des produits virtuels');
  define('TEXT_VIRTUAL_EDIT','Avertissement : Ce produit est marqué - Livraison Gratuite et sans Adresse de Livraison<br />Aucune adresse de livraison ne sera demandée lorsque tous les produits commandés sont des produits virtuels');
  define('TEXT_FREE_SHIPPING_PREVIEW','Avertissement : Ce produit est marqué - Livraison Gratuite, Adresse de Livraison requise<br />Le module de Livraison Gratuite est nécessaire lorsque tous les produits de la commande sont Toujours des Produits a Livraison Gratuite');
  define('TEXT_FREE_SHIPPING_EDIT','Avertissement : Oui fait passer le produit en - Livraison Gratuite, Adresse de Livraison requise<br />Le module de Livraison Gratuite est nécessaire lorsque tous les produits de la commande sont Toujours des Produits a Livraison Gratuite');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'AVERTISSEMENT : La table du journal d\'activité de l\'Administration possède des enregistrements vieux de plus de 2 mois et devrait être archivée pour libérer de la place ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'AVERTISSEMENT : La table du journal d\'activité de l\'Administration possède plus de 50.000 enregistrements et devrait être archivée pour libérer de la place ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Vous pouvez visualiser et archiver les détails d\'activité de l\'Administration via le menu Gestionnaire d\'Accès de l\'Administration, si vous avez les permissions adéquates.');
  define('TEXT_ACTIVITY_LOG_ACCESSED', 'Journal d\'activité de l\'Administration accédé. Format de Sortie : %s. Filtre: %s. %s');
  define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Échec de Tentative de Connexion à l\'Administration : ');
  define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'Tentative de connexion sur le compte verrouillé :');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Tentative de connexion sans jeton CSRF.');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Tentative de connexion sans nom d\'utilisateur.');
  define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Mot de passe incorrect lors de la tentative d\'une réinitialisation de mot de passe pour : ');


  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTE : La catégorie a des sous-catégories<br />Impossible d\'ajouter des produits');
  
  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ATTENTION! Le bon de réduction de l\Email de bienvenue expire dans %s jours');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'AVERTISSEMENT : <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Le nom de votre répertoire /admin/ devrait être renommé en quelque chose de moins commun</a>, pour empêcher des accès non autorisés.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'AVERTISSEMENT : Le sous-système d\'email est arrêté. Aucun email ne sera envoyé tant qu\'il ne sera pas redémarré dans Admin->Configuration->Options des Emails.');
define('TEXT_CURRENT_VER_IS', 'Vous utilisez actuellement : ');
define('ERROR_NO_DATA_TO_SAVE', 'ERREUR : Les données que vous avez envoyées étaient vides. VOS MODIFICATIONS N\'ONT *PAS* ÉTÉ ENREGISTRÉES. Il est possible que vous ayez un problème avec votre navigateur ou votre connexion internet.');
define('TEXT_HIDDEN', 'Caché');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Cacher');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'Pas d\'Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Types de Produit');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERREUR 0071 : Il semble y avoir un problème avec la base de données. Un entretien est nécessaire.</a>');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'faux'));


