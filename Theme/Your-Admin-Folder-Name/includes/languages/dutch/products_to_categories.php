<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','Artikel(en) aan meerdere categorieën koppelen...');
define('HEADING_TITLE2','Categorieën / Artikelen');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Beschikbare categorieën met artikelen om te koppelen...');

define('TABLE_HEADING_PRODUCTS_ID', 'Artikel ID');
define('TABLE_HEADING_PRODUCT', 'Artikelnaam');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'Informatie over wijzigen koppelingen artikelen aan categorieën');
define('TEXT_PRODUCTS_ID', 'Artikel ID ');
define('TEXT_PRODUCTS_NAME', 'Artikel: ');
define('TEXT_PRODUCTS_MODEL', 'Model: ');
define('TEXT_PRODUCTS_PRICE', 'Prijs: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Bijwerken categorie koppelingen');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Selecteer artikel om te koppelen');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Stel koppelingen van artikelen aan categorieën in voor: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;huidige aantal gekoppelde categorieën: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'De artikel-categorie koppelaar is ontworpen om snel en makkelijk het huidige artikel te koppelen aan één of meerdere categorieën. <br />Het is ook mogelijk alle artikelen in één keer uit één categorie aan een andere categorie te koppelen of het verwijderen van gekoppelde artikelen die komen uit een andere categorie (zie hiervoor onderstaande instructies).');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Het geselecteerde artikel is momenteel gekoppeld aan de categorieën die in bovenstaand overzicht zijn aangevinkt.<br />De gekoppelde hoofdcategorie is te herkennen aan een geel icoon. Indien dit icoon niet	zichtbaar is betekent dit dat er geen hoofdcategorie is geselecteerd. Ieder artikel moet, vanwege prijs strategie, in een hoofdcategorie worden geplaatst ongeacht het aantal subcategorieën die reeds zijn gekoppeld. 
De keuze voor een hoofdcategorie kan gemaakt worden in het dropdown menu boven het overzicht.<br /><br />
Om een categorie te selecteren zet een vink naast de categorie. Om een artikel uiteen gekoppelde categorie te verwijderen, kun je simpelweg het vinkje naast de categorie weghalen.	Als je categorieën hebt aan- of uitgevinkt druk dan op de knop ' . BUTTON_UPDATE_CATEGORY_LINKS .'<br /> om deze vast te leggen.
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Algemene categoriekoppeling en hoofdcategorie ID wijzigingen');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>Waarschuwing:</strong> Kies de eerst de Hoofdcategorie voordat verander daarna pas de gekoppelde categorieën');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Kopieer alle artikelen in een categorie als gekoppelde artikelen naar een andere categorie...</strong><br />Voorbeeld: het invullen van 8 in vak 1 (selecteer artikelen in categorie) en 22 in vak 2 (koppel aan categorie) zorgt er voor dat alle artikelen van categorie 8 worden gekoppeld aan categorie 22.');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Selecteer artikelen categorie: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Koppel aan categorie: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Koppel artikelen');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'Waarschuwing: Artikel is losgekoppeld en maakt geen deel meer uit van deze categorie ...');
define('WARNING_COPY_LINKED', 'Waarschuwing: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Ongeldige categorie om artikelen uit te koppelen: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Ongeldige categorie om artikelen aan te koppelen: ');
define('WARNING_NO_CATEGORIES_ID', 'Waarschuwing: er was geen categorie geselecteerd ... geen wijzigingen aangebracht');
define('SUCCESS_COPY_LINKED', 'Artikelen zijn <strong>met succes</strong> gekoppeld... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Geldige categorie om artikelen uit te koppelen:');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Geldige categorie om artikelen aan te koppelen: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'WARNING: Copy completed to Invalid Category to Link: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>Waarschuwing: geen veranderingen gemaakt omdat artikelen al gekoppeld zijn...</strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Ontkoppel alle koppeling van artikelen uit een categorie die zijn gekoppeld aan een andere categorie...</strong> <br />Voorbeeld: het invullen van 12 in vak 1 (selecteer artikelen categorie) en 7 in vak 2 (ontkoppel met categorie) zorgt er voor dat alle artikelen van categorie 12 worden <strong>ont</strong>koppeld uit categorie 7.');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Selecteer artikelen categorie: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Ontkoppel uit categorie: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Ontkoppel artikelen');

define('WARNING_REMOVE_LINKED', 'Waarschuwing: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Ongeldige categorie om artikelen uit te ontkoppelen: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Ongeldige categorie om ontkoppelde artikelen naar te kopieren: ');
define('SUCCESS_REMOVE_LINKED', 'Artikelen zijn met succes ontkoppeld ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Geldige categorie om artikelen uit te ontkoppelen: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Geldige categorie om ontkoppelde artikelen naar toe te kopieren: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>Waarschuwing: geen veranderingen gemaakt en geen artikelen zijn gekoppeld... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>Waarschuwing: hoofdcategorie ID CONFLICT!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>hoofdcategorie ID is: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'Opmerking: hoofdcategorie wordt gebruikt in de prijs strategie. De artikelcategorie heeft effect op de prijzen voor gekoppelde artikelen, voorbeeld: SALES<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Om dit probleem op te lossen word je herleid naar het eerste artikel dat dit probleem veroorzaakt. Verander de hoofdcategorie ID op zodanige wijze dat deze niet langer geldt als hoofdcategorie ID voor de categorie van waar je dit artikel probeert te verwijderen en probeer het nogmaals. Zodra alle conflicten zijn opgelost is het mogelijk om het artikel te verwijderen.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflict uit categorie: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflict naar categorie: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Koppelingen van artikelen aan categoriën zijn met succes gewijzigd...');
define('WARNING_MASTER_CATEGORIES_ID', 'Waarschuwing: Geen hoofdcategorie gemarkeerd!');

define('TEXT_PRODUCTS_ID_INVALID', 'Waarschuwing: ongeldige artikel ID of geen artikel geselecteerd');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Opmerking: het is niet persé nodig een artikel ID in te stellen om gebruik te maken van de mogelijkheid om alle artikelen uit de ene categorie te koppelen aan de andere categorie.<br />Echter, het invoeren van een geldige artikel ID toont alle beschikbare categorieën en bijbehorende categorie ID.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>De geselecteerde categorie als	hoofdcategorie ID instellen voor alle artikelen in deze geselecteerde categorie...</strong><br />Voorbeeld: instellen van categorie 22 zorgt er voor dat alle artikelen in categorie 22 gebruik maken van deze categorie als hoofdcategorie ID');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Wijzig de hoofdcategorie ID voor alle artikelen in categorie: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Wijzig hoofdcategorie ID');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Waarschuwing: ongeldige categorie geselecteerd...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Alle artikelen zijn met succes omgezet naar een nieuwe hoofdcategorie ID voor categorie: ');
