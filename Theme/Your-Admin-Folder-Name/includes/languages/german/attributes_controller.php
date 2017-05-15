<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.at/license/2_0.txt GNU Public License V2.0
 * @translators: cyaneo/hugo13/wflohr/maleborg/webchills	http://www.zen-cart.at
 * @version $Id: attributes_controller.php 627 2010-08-30 15:05:14Z webchills $
 * @edited and adapted for ZC v1.5.3 2014-12-07 02:43:30Z frank18 - www.isonetwork.net.au $
 */

define('HEADING_TITLE', 'Kategorien: ');
define('HEADING_TITLE_OPT','Artikelattribute');
define('HEADING_TITLE_VAL','Attributmerkmale');
define('HEADING_TITLE_ATRIB','Attributmanager');
define('HEADING_TITLE_ATRIB_SELECT','Bitte wählen Sie eine Kategorie, um sich Attributoptionen anzeigen zu lassen ...');

define('TEXT_PRICES_AND_WEIGHTS', 'Preise und Gewicht');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Preisfaktor: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Offset: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Einmalig:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Einmaliger Faktor: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Offset: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Mengenrabatt Attribute:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Einmalige Mengenrabatt Attribute:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Preis pro Wort:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Freie Wörter:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Preis pro Buchstabe:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Freie Buchstaben:');

define('TABLE_HEADING_ID','ID');
define('TABLE_HEADING_PRODUCT','Artikelname');
define('TABLE_HEADING_OPT_NAME','Attributname');
define('TABLE_HEADING_OPT_VALUE','Attributmerkmal');
define('TABLE_HEADING_OPT_PRICE','Preis');
define('TABLE_HEADING_OPT_PRICE_PREFIX','Präfix');
define('TABLE_HEADING_ACTION','Aktion');
define('TABLE_HEADING_DOWNLOAD','Downloadartikel');
define('TABLE_TEXT_FILENAME','Dateiname:');
define('TABLE_TEXT_MAX_DAYS','Ablauftage: (0 = unbegrenzt)');
define('TABLE_TEXT_MAX_COUNT','Maximale Downloadanzahl:');
define('TABLE_HEADING_OPT_DISCOUNTED','Rabatt');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Basis');
define('TABLE_HEADING_PRICE_TOTAL', 'Summe|Rabatt: einmalig:');
define('TEXT_WARNING_OF_DELETE','Diesem Attribut sind Artikel und Werte zugewiesen worden - ein Löschen wird nicht empfohlen.');
define('TEXT_OK_TO_DELETE','Diesem Attribut sind keine Artikel und Werte zugewiesen worden - Es kann gelöscht werden.');
define('TEXT_OPTION_ID','Attribut ID');
define('TEXT_OPTION_NAME','Attributname');

define('ATTRIBUTE_WARNING_DUPLICATE','Doppeltes Attribut - Attribut wurde nicht hinzugefügt');
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Doppeltes Attribut vorhanden - Attribut wurde nicht verändert');
define('ATTRIBUTE_WARNING_INVALID_MATCH','Attribut konnte nicht erstellt werden - Attributoption und Attributmerkmal stimmen nicht überein');
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Attribut konnte nicht geändert werden - Attributoption und Attributmerkmal stimmen nicht überein');
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Möglicherweise wurde ein doppelter Attributname hinzugefügt');
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Möglicherweise wurde ein doppeltes Attributmerkmal hinzugefügt');

define('PRODUCTS_ATTRIBUTES_EDITING','BEARBEITE');
define('PRODUCTS_ATTRIBUTES_DELETE','LÖSCHE');
define('PRODUCTS_ATTRIBUTES_ADDING','FÜGE NEUES ATTRIBUT HINZU');
define('TEXT_DOWNLOADS_DISABLED','HINWEIS: Downloads sind deaktiviert');

define('TABLE_TEXT_MAX_DAYS_SHORT','Tage:');
define('TABLE_TEXT_MAX_COUNT_SHORT','Maximal:');

define('TABLE_HEADING_OPTION_SORT_ORDER','Sortierung');
define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Standardsortierung');
define('TEXT_SORT','Sortierung:');

define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Präfix');
define('TABLE_HEADING_OPT_WEIGHT','Gewicht');
define('TABLE_HEADING_OPT_SORT_ORDER','Sortierung');
define('TABLE_HEADING_OPT_DEFAULT','Standard');

define('TABLE_HEADING_OPT_TYPE','Optionsart');
define('TABLE_HEADING_OPTION_VALUE_SIZE','Größe');
define('TABLE_HEADING_OPTION_VALUE_MAX','Maximal');
define('TABLE_HEADING_OPTION_VALUE_ROWS','Reihen');
define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Kommentare');

define('TEXT_OPTION_VALUE_COMMENTS','Kommentare:');
define('TEXT_OPTION_VALUE_SIZE','Darstellungsgröße:');
define('TEXT_OPTION_VALUE_MAX','Maximale Länge:');

define('TEXT_ATTRIBUTES_IMAGE','Muster des Attributsbildes:');
define('TEXT_ATTRIBUTES_IMAGE_DIR','Verzeichnis des Attributsbildes:');

define('TEXT_ATTRIBUTES_FLAGS','Attributs-<br />kennzeichen:');
define('TEXT_ATTRIBUTES_DISPLAY_ONLY','Nur zur<br />Darstellung benötigt:');
define('TEXT_ATTRIBUTES_IS_FREE','Attribut ist kostenlos<br />wenn der Artikel kostenlos ist:');
define('TEXT_ATTRIBUTES_DEFAULT','Attribut, welches standardmäßig<br />markiert werden soll:');
define('TEXT_ATTRIBUTE_IS_DISCOUNTED','Rabatte verwenden die vom<br />Artikel verwendet werden:');
define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Basispreis inkludieren<br />bei "Preis per Attribut":');
define('TEXT_ATTRIBUTES_REQUIRED', 'Attribute benötigt<br />für Text:');

define('LEGEND_BOX', 'Legende:');
define('LEGEND_KEYS', 'AUS/AN');
define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Nur anzeigen');
define('LEGEND_ATTRIBUTES_IS_FREE', 'Frei');
define('LEGEND_ATTRIBUTES_DEFAULT', 'Standard');
define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Ermäßigt');
define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED', 'Basispreis');
define('LEGEND_ATTRIBUTES_REQUIRED', 'Benötigt');
define('LEGEND_ATTRIBUTES_IMAGES', 'Bilder');
define('LEGEND_ATTRIBUTES_DOWNLOAD', 'Gültiger/Ungültiger<br />Dateiname');

define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','Zur Standardsortierung');
define('TEXT_PRODUCTS_LISTING','Artikelliste für:');
define('TEXT_NO_PRODUCTS_SELECTED','Kein Artikel ausgewählt');
define('TEXT_NO_ATTRIBUTES_DEFINED','Kein Attribut für Artikel ID# gewählt');

define('TEXT_PRODUCTS_ID','Artikel ID#');
define('TEXT_ATTRIBUTES_DELETE','ALLE LÖSCHEN');
define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Zu Artikel kopieren');
define('TEXT_ATTRIBUTES_COPY_CATEGORY','Zur Kategorie kopieren');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Attribut für Artikel ID# geändert');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','<strong>ALLE</strong> Artikelattribute für diesen Artikel löschen:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Attribute von einem anderen Artikel oder von einer ganzen Kategorie kopieren:<br />');

define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','ARTIKEL');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopiere Attribute zu einem anderen<strong>Artikel</strong> von ID#');
define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Artikel wählen, zu dem Sie alle Attribute kopieren wollen:');

define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','KATEGORIE');
define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Kategorie wählen, zu der Sie alle Attribute kopieren wollen:');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopiere Attribute zu allen Artikel in der<strong>Kategorie</strong> von Artikel ID#');

define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Wie sollen existierende Artikelattribute behandelt werden?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Löschen</strong> Vorhandene Attribute werden gelöscht, danach werden die neuen Attribute kopiert');
define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Aktualisieren</strong> Die vorhandenen Attribute werden mit den neuen Einstellungen/Preisen aktualisiert, neue Attribute werden hinzufügt');
define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorieren</strong> Die vorhandenen Attribute bleiben erhalten, es werden nur neue Attribute hinzufügt');

define('SUCCESS_PRODUCT_UPDATE_SORT','Attribut Sortierung wurde aktualisiert für ID#');
define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Keine Attribute zum Aktualisieren der Sortierung vorhanden für ID#');
define('SUCCESS_ATTRIBUTES_DELETED','Attribute wurden gelöscht');
define('SUCCESS_ATTRIBUTES_UPDATE','Attribute wurden aktualisiert');

define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Keine Kategorie zum Kopieren ausgewählt');
define('TEXT_PRODUCT_IN_CATEGORY_NAME','- in Kategorie:');

define('TEXT_DELETE_ALL_ATTRIBUTES','Sind Sie sicher, dass Sie alle Attribute für ID# löschen wollen?');

define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Überspringe neues Attribut </strong>');
define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Füge neues Attribut ein von</strong>');
define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Aktualisiere vorhandenes Attribut von </strong>');

// preview
define('TEXT_ATTRIBUTES_PREVIEW','ATTRIBUTE VORSCHAU');
define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','VORSCHAU DER ATTRIBUTE ANZEIGEN FÜR ID#');
define('TEXT_PRODUCT_OPTIONS','<strong>Bitte wählen Sie:</strong>');

define('TEXT_ATTRIBUTES_INSERT_INFO','<strong>Definieren Sie die Attributeinstellungen, anschließend klicken Sie auf "Einfügen" um die Änderungen zu speichern</strong> (es dürfen auch mehrere Attributmerkmale markiert werden)');
define('TEXT_PRICED_BY_ATTRIBUTES','Preis durch Attribute festgelegt');
define('TEXT_PRODUCTS_PRICE','Artikelpreis:');
define('TEXT_SPECIAL_PRICE','Sonderpreis:');
define('TEXT_SALE_PRICE','Abverkaufspreis:');
define('TEXT_FREE','KOSTENLOS');
define('TEXT_CALL_FOR_PRICE','Preis bitte anfragen');
define('TEXT_SAVE_CHANGES', 'ÄNDERUNGEN AKTUALISIEREN UND SPEICHERN:');

define('TEXT_INFO_ID', 'ID#');
define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Nicht zum Warenkorb hinzugefügt');

define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Sollen wirklich ALLE Attributmerkmale des Attributnamens gelöscht werden ...');
define('TEXT_INFO_PRODUCT_NAME', '<strong>Produkt Name: </strong>');
define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Attributname: </strong>');
define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'ALLE Attributmerkmale für Attributnamen wurden gelöscht: ');


