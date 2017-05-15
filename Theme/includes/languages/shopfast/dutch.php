<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: dutch.php based on english.php 19690 2011-10-04 16:41:45Z drbyte $
 */

// ONDERSTAANDE IS verplaatst naar meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'De kunst van eCommerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, zen-cart.com, online shopping');
// EINDE: verplaatst naar meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// kijk in je $PATH_LOCALE/locatie directorie voor beschikbare locatie instellingen..
  $locales = array('nl_NL', 'nl_NL.utf8', 'nl', 'Dutch');
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // wordt gebruikt voor strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // wordt gebruikt voor strftime()
  define('DATE_FORMAT', 'd/m/Y'); // wordt gebruikt voor date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Datum in onopgemaakt formaat
// $date moet alsvolgt zijn dd/mm/yyyy
// onopgemaakte datum is YYYYMMDD, of DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
      }
    }
  }

// als USE_DEFAULT_LANGUAGE_CURRENCY aanstaat gebruik dan de onderstaande valuta i.p.v. de ingestelde standaard valuta.
  define('LANGUAGE_CURRENCY', 'EUR');

// algemene gegevens voor <html> tags
  define('HTML_PARAMS','dir="ltr" lang="nl"');

// karakterset voor webpaginas en e-mails
  define('CHARSET', 'utf-8');

// voettekst in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'sinds');

// Definieer hier de naam van de waardebonnen zoals E-Cadeaubon, Waardebon, Geschenkbon etc. voor gebruik in de webshop
  define('TEXT_GV_NAME','Waardebon');
  define('TEXT_GV_NAMES','Waardebonnen');

// aanduiding voor Geschenkbon inwisselcode, Waardebon code of Cadeaubon id
  define('TEXT_GV_REDEEM','Waardebon inwisselcode');

// aanduiding voor bovenstaande code in de/een sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Waardebon inwisselcode: ');

// aanduiding voor geslacht
  define('MALE', 'Man');
  define('FEMALE', 'Vrouw');
  define('MALE_ADDRESS', 'Dhr.');
  define('FEMALE_ADDRESS', 'Mevr.');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// defineer de tekst voor de kop van sideboxes
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[lees meer]');

// defineer tekst voor de categorie sidebox in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Categorie');

// Tekst voor de leveranciers/merk sidebox in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Merken');

// defineer wat is nieuw text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Nieuw in ons assortiment');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nieuwe artikelen');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Aanbiedingen');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Aanbiedingen');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Kom binnenkort terug om onze aanbiedingen te zien.');

  define('TEXT_NO_ALL_PRODUCTS', 'Wij zijn bezig artikelen toe te voegen.<br> Wij hopen u snel weer te mogen begroeten!');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Alle artikelen');

// Tekst van het zoekvak in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Zoek');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Uitgebreid zoeken');

// Tekst van de aanbiedingen box in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Aanbiedingen');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Aanbiedingen...');

// Tekst van de artikel beoordelingen in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Recensies');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Schrijf een recensie over dit artikel.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Op dit moment zijn er nog geen recensie\'s.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s van 5 sterren!');

// Tekst van de winkelwagen in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Winkelwagen');
  define('BOX_SHOPPING_CART_EMPTY', 'Winkelwagen is nog leeg.');
  define('BOX_SHOPPING_CART_DIVIDER', 'x-&nbsp;');

// Tekst van de orderhistorie in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Snel herbestellen');

// Tekst populaire artikelen box in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Bestsellers');
  define('BOX_HEADING_BESTSELLERS_IN', 'Bestsellers<br />&nbsp;&nbsp;');

// Tekst van de artikel notificatie box in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Artikelnotificatie');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Informeer mij over de status van <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Informeer mij niet langer over de status van  <strong>%s</strong>');

// Tekst van de fabrikanten box
  define('BOX_HEADING_MANUFACTURER_INFO', 'Merken info');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Andere artikelen');

// Tekst van de taalselectie box in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Talen');

// Valuta box tekst in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Valuta');

// informatiebox tekst in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Informatie');
  define('BOX_INFORMATION_PRIVACY', 'Privacyverklaring');
  define('BOX_INFORMATION_CONDITIONS', 'Algemene voorwaarden');
  define('BOX_INFORMATION_SHIPPING', 'Verzenden &amp; retouren');
  define('BOX_INFORMATION_CONTACT', 'Contact');
  define('BOX_BBINDEX', 'Forum');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Afmelden nieuwsbrief');

  define('BOX_INFORMATION_SITE_MAP', 'Sitemap');

// informatie box tekst in sideboxes/more_information.php - waar TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Meer info');
  define('BOX_INFORMATION_PAGE_2', 'Pagina 2');
  define('BOX_INFORMATION_PAGE_3', 'Pagina 3');
  define('BOX_INFORMATION_PAGE_4', 'Pagina 4');

// Tekst nieuw factuuradres
  define('SET_AS_PRIMARY' , 'Stel in als hoofd adres');
  define('NEW_ADDRESS_TITLE', 'Factuuradres');

// javascript berichten
  define('JS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Er is een fout opgetreden tijden het verwerken van het formulier. \n\nVul s.v.p. alsnog de volgende velden in:\n\n');

  define('JS_REVIEW_TEXT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Uw recensie moet minimaal ' . REVIEW_TEXT_MIN_LENGTH . ' karakters bevatten.');
  define('JS_REVIEW_RATING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Selecteert u alstublieft een waardering (5 sterren is hoogst) voor dit artikel.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Selecteer een betalingsmethode.');

  define('JS_ERROR_SUBMITTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>U probeert het formulier meer dan 1 maal te verwerken. Druk op OK en wacht totdat uw aanvraag is verwerkt.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Selecteer betalingsmethode.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Om uw bestelling uit te kunnen voeren verzoeken wij u onze algemene (leverings)voorwaarden door te lezen en te accepteren door het onderstaande hokje aan te vinken.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Om uw klantgegevens vast te kunnen leggen verzoeken wij u onze privacy verklaring door te lezen en te accepteren door het onderstaande hokje aan te vinken.');

  define('CATEGORY_COMPANY', 'Bedrijfsnaam');
  define('CATEGORY_PERSONAL', 'Persoonlijke gegevens');
  define('CATEGORY_ADDRESS', 'Adresgegevens');
  define('CATEGORY_CONTACT', 'Contactgegevens');
  define('CATEGORY_OPTIONS', 'Opties');
  define('CATEGORY_PASSWORD', 'Wachtwoord');
  define('CATEGORY_LOGIN', 'Login');
  define('PULL_DOWN_DEFAULT', 'Selecteer uw land');
  define('PLEASE_SELECT', 'Selecteer...');
  define('TYPE_BELOW', 'Maak een keuze...');

  define('ENTRY_COMPANY', 'Bedrijfsnaam:');
  define('ENTRY_COMPANY_ERROR', 'Voer een bedrijfsnaam in.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Aanhef:');
  define('ENTRY_GENDER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kies uw aanhef.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Voornaam:');
  define('ENTRY_FIRST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw voornaam moet voor ons systeem minimaal ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' letters hebben.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Achternaam:');
  define('ENTRY_LAST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw achternaam moet voor ons systeem minimaal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' letters hebben.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Geboortedatum:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Klopt uw geboortedatum? Ons systeem verwacht een datum in dit formaat: DD/MM/YYYY (bijvoorbeeld 21/05/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (bijv. 21/05/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'E-mailadres:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw e-mailadres moet voor ons systeem minimaal ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tekens en een @ bevatten.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Heeft u het e-mailadres correct ingevoerd? Controleer dit en probeer het nogmaals.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw e-mailadres is reeds bij ons geregistreerd! Probeer aan te melden met uw bestaande account. Weet u uw wachtwoord niet meer, gebruik dan de Wachtwoord vergeten optie. Heeft u een nieuw e-mailadres geef dit door via Mijn account.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Gebruikersnaam forum:');
  define('ENTRY_NICK_TEXT', '*'); // nb dit word weergegeven naast het forum gebruikersnaam invulveld
  define('ENTRY_NICK_DUPLICATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Deze gebruikersnaam is reeds in gebruik. Vul een andere gebruikersnaam in.');
  define('ENTRY_NICK_LENGTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw gebruikersnaam moet uit minimaal ' . ENTRY_NICK_MIN_LENGTH . ' tekens bestaan.');
  define('ENTRY_STREET_ADDRESS', 'Straatnaam en huisnummer:');
  define('ENTRY_STREET_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw straatnaam moet voor ons systeem minimaal ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens bevatten.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Extra adresregel:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Postcode:');
  define('ENTRY_POST_CODE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Voor postcode moet u minimaal ' . ENTRY_POSTCODE_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Woonplaats:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Referentienummer:');

  define('ENTRY_CITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Voor woonplaats moet u minimaal ' . ENTRY_CITY_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Provincie:');
  define('ENTRY_STATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Voor provincie moet u minimaal ' . ENTRY_STATE_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_STATE_ERROR_SELECT', 'Kies uw provincie uit het rolmenu.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Klik hier --');
  define('ENTRY_COUNTRY', 'Land:');
  define('ENTRY_COUNTRY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>U moet uw land kiezen uit het pull down menu.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telefoon:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Voor telefoonnummer moet u minimaal ' . ENTRY_TELEPHONE_MIN_LENGTH . ' nummers invullen.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Ja, ik ontvang graag de nieuwsbrief');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Aangemeld');
  define('ENTRY_NEWSLETTER_NO', 'Afgemeld');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Wachtwoord:');
  define('ENTRY_PASSWORD_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Voor wachtwoord moet u minimaal ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Wachtwoorden komen niet overeen, probeer het nogmaals.');
  define('ENTRY_PASSWORD_TEXT', '* (minimaal ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Herhaal wachtwoord:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Huidige wachtwoord:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Voor het wachtwoord moet u minimaal ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_PASSWORD_NEW', 'Nieuw wachtwoord:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw nieuwe wachtwoord moet minstens ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens bevatten.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Wachtwoorden komen niet overeen, probeer het nogmaals.');
  define('PASSWORD_HIDDEN', '--VERBORGEN--');

  define('FORM_REQUIRED_INFORMATION', '* verplicht veld');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // in gebruik door de zen_prev_next_display navigatie
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Artikel <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Bestelling <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> bestellingen)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Recensie <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> recensies)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Artikel <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Aanbieding <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> aanbiedingen)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Artikel <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Artikel <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Eerste pagina');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Vorige pagina');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Volgende pagina');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Laatste pagina');
  define('PREVNEXT_TITLE_PAGE_NO', 'Pagina %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Vorige %d pagina\'s');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Volgende %d pagina\'s');
  define('PREVNEXT_BUTTON_FIRST', '<i class="fa fa-angle-double-left"></i> First');
  define('PREVNEXT_BUTTON_PREV', '<i class="fa fa-angle-left fa-lg"></i>');
  define('PREVNEXT_BUTTON_NEXT', '<i class="fa fa-angle-right fa-lg"></i>');
  define('PREVNEXT_BUTTON_LAST', 'LAST <i class="fa fa-angle-double-right"></i>');

  define('TEXT_BASE_PRICE','Vanaf: ');

  define('TEXT_CLICK_TO_ENLARGE', 'Afbeelding vergroten');

  define('TEXT_SORT_PRODUCTS', 'Artikelen sorteren ');
  define('TEXT_DESCENDINGLY', 'aflopend');
  define('TEXT_ASCENDINGLY', 'oplopend');
  define('TEXT_BY', ' door ');

  define('TEXT_REVIEW_BY', 'door %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s woorden');
  define('TEXT_REVIEW_RATING', 'Waardering: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Datum toegevoegd: %s');
  define('TEXT_NO_REVIEWS', 'Momenteel nog geen recensies.');

  define('TEXT_NO_NEW_PRODUCTS', 'Binnenkort meer nieuwe artikelen. Kom snel weer kijken.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Btw');

  define('TEXT_REQUIRED', '<span class="errorText">Verplicht</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'LET OP: Installatiefolder bestaat: %s. Verwijder deze folder i.v.m. de veiligheid van uw webwinkel!');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'LET OP: Iedereen heeft schrijfrechten op configuratiebestand: %s. Dit is een hoog veiligheidsrisico - zet daarom de juiste rechten op dit bestand (alleen-lezen, doorgaans CHMOD 644 of 444). U kunt dit doen via het configuratiepaneel/bestandsmanager van uw webhoster. Kijk voor verdere assistentie in het welkomstbericht van uw webhoster of op hun website. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Bekijk deze FAQ</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Foutmelding: De opgegeven file kon niet verwijdert worden. Waarschijnlijk moet u uw FTP programma gebruiken om deze file te wissen, vanwege beperkte server rechtendue.');
  define('WARNING_SESSION_AUTO_START', 'LET OP: session.auto_start staat aan - schakel deze PHP optie uit in php.ini en herstart de web server.<br />Kunt u dit niet neem dan contact op met de supportafdeling van uw webhoster.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'LET OP: De folder voor \'download\' artikelen bestaat niet: ' . DIR_FS_DOWNLOAD . '.<br />Downloads werken niet totdat deze folder word aangemaakt.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'LET OP: De SQL cache folder bestaat niet: ' . DIR_FS_SQL_CACHE . '.<br />SQL caching zal niet werken tot deze folder is aangemaakt.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'LET OP: Geen schrijfrechten in de SQL cache folder: ' . DIR_FS_SQL_CACHE . '.<br />SQL caching werkt niet totdat de juiste rechten zijn ingesteld.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Uw databaseversie is verouderd. Ga naar beheer->Extra->Server/versie info om het versienummer van de database te controleren.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Waarschuwing: Kon de taalfile niet vinden: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vervaldatum van uw creditcard is ongeldig. Controleer de datum en probeer het nogmaals.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Dit creditcardnummer is ongeldig. Controleer het nummer en probeer het nogmaals.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Het creditcardnummer beginnende met %s is niet juist ingevuld of wij accepteren uw type card niet. Controleer het nummer of gebruik een andere card/betalingsmethode.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Kortingsbonnen');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Tegoed ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Gebruikersnaam');
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Gefeliciteerd, u heeft ingewisseld ');
  define('ERROR_NO_REDEEM_CODE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>U heb geen ' . TEXT_GV_REDEEM . ' ingevuld.');
  define('ERROR_NO_INVALID_REDEEM_GV', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ongeldige ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Beschikbaar tegoed');
  define('GV_HAS_VOUCHERA', 'U heeft een tegoed op uw ' . TEXT_GV_NAME . ' account. U kunt dit <br />
                           tegoed versturen per <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>e-mail</strong></a> naar iemand anders');
  define('ENTRY_AMOUNT_CHECK_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Uw tegoed is niet toereikend om dit bedrag te versturen.');
  define('BOX_SEND_TO_FRIEND', 'Verstuur ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Verzilverd');
  define('CART_COUPON', 'Waardebon:');
  define('CART_COUPON_INFO', 'meer info');
  define('TEXT_SEND_OR_SPEND','U heeft een tegoed beschikbaar in uw ' . TEXT_GV_NAME . ' account. U kunt het uitgeven of het aan iemand toesturen. Om te verzenden kunt u op de knop hieronder klikken.');
  define('TEXT_BALANCE_IS', 'Your ' . TEXT_GV_NAME . ' tegoed is: ');
  define('TEXT_AVAILABLE_BALANCE', 'Uw ' . TEXT_GV_NAME . ' account');

// betalingsmethode is waardebon/korting
  define('PAYMENT_METHOD_GV', 'Cadeau- of waardebon');
  define('PAYMENT_MODULE_GV', 'Waardebon/Korting');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Beschikbaar tegoed');

  define('TEXT_INVALID_REDEEM_COUPON', 'Ongeldige waardeboncode');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'U moet minstens %s besteden om uw waardebon te kunnen verzilveren');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Deze waardebon is nog niet beschikbaar.');
  define('TEXT_INVALID_FINISDATE_COUPON', 'Deze waardebon is verlopen');
  define('TEXT_INVALID_USES_COUPON', 'Deze waardebon kan maximaal ');
  define('TIMES', ' keer gebruikt worden.');
  define('TIME', ' keer.');
  define('TEXT_INVALID_USES_USER_COUPON', 'U probeert de waardebon met nummer %s intewisselen. Het maximaal aantal keren dat u deze code mag gebruiken is overschreden. ');
  define('REDEEMED_COUPON', 'waardebon van:');
  define('REDEEMED_MIN_ORDER', 'bij bestellingen boven');
  define('REDEEMED_RESTRICTIONS', ' [Alleen geldig voor bepaalde artikelen]');
  define('TEXT_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Er heeft zich een fout voorgedaan');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Deze inwisselcode kan niet gebruikt worden voor het type artikelen in uw winkelwagentje.');
  define('TEXT_VALID_COUPON', 'Gefeliciteerd, u heeft de kortingsbon ingewisseld');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Deze kortingscoupon kan niet worden gebruikt icm uw adres.');

// meer info inplaats van koop nu
  define('MORE_INFO_TEXT','... meer info');

// ipadres
  define('TEXT_YOUR_IP_ADDRESS','Uw ip adres is: ');

// algemene adreskop
  define('HEADING_ADDRESS_INFORMATION','Adres informatie');

// inhoud winkelwagen
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Aantal in winkelwagen: ');
  define('PRODUCTS_ORDER_QTY_TEXT','In winkelwagen: ');

// bericht na succesvol toevoegen aan winkelwagen als het winkelwagen ingesteld staat op niet weergeven
// niks invullen voor geen berichten
// geld voor alle paginas behalve daar waar meerdere artikelen in winkelwagen plaatsen aanstaat :
  define('SUCCESS_ADDED_TO_CART_PRODUCT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Gekozen artikel is in uw winkelwagen geplaatst...');
// alleen voor meerdere artikelen in winkelwagen plaatsen:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Gekozen artikel(en) in winkelwagen geplaatst...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Verzending
  define('TEXT_SHIPPING_WEIGHT','kg');
  define('TEXT_SHIPPING_BOXES', 'Dozen');

// Actiebesparing
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Korting:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;korting');

// Aanbiedingsprijsen
  define('PRODUCT_PRICE_SALE','Aanbieding:&nbsp;');

//algemene symbolen
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Advertentie');
  define('TEXT_BANNER_BOX','Bezoek onze adverteerder...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Wist u dit al...');
  define('TEXT_BANNER_BOX2','Bekijk vandaag nog onze aanbieding!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Advertentie');
  define('TEXT_BANNER_BOX_ALL','Bezoek onze adverteerder...');

// definitie van boksen
  define('PULL_DOWN_ALL','Maak een keuze');
  define('PULL_DOWN_MANUFACTURERS','- Herstellen -');
// verzendkosten berekenen
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Maak een keuze');

// algemeen sorteren op
  define('TEXT_INFO_SORT_BY','Sorteren op: ');

// sluiten van popup afbeelding
  define('TEXT_CLOSE_WINDOW',' - Klik op de afbeelding om het venster te sluiten');
// popup sluiten
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Sluit venster ]');

// iii 031104 toegevoegd:  Foutmelding voor uploaden bestanden
  define('ERROR_FILETYPE_NOT_ALLOWED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fout:  Bestandstype niet toegestaan.');
  define('WARNING_NO_FILE_UPLOADED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Let op:  geen bestand geupload.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Oké:  bestand is ontvangen.');
  define('ERROR_FILE_NOT_SAVED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fout:  bestand niet opgeslagen');
  define('ERROR_DESTINATION_NOT_WRITEABLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fout:  geen schrijfrechten binnen doelmap.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fout: opgegeven bestandsmap bestaat niet.');
  define('ERROR_FILE_TOO_BIG', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Letop: bestand tegroot om te versturen!<br />Opdracht kan worden geplaatst maar neem contact met ons op voor hulp met verzenden van uw bestand');
// Einde iii toegevoegd

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'LET OP: In verband met gepland onderhoud zal deze site niet bereikbaar zijn op: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'LET OP: Onze site is ivm gepland onderhoud niet beschikbaar, wij zien u graag spoedig terug!');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Gratis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Prijs op aanvraag');
  define('TEXT_CALL_FOR_PRICE','Prijs op aanvraag');

  define('TEXT_INVALID_SELECTION',' U heeft een ongeldige selectie gemaakt: ');
  define('TEXT_ERROR_OPTION_FOR',' bij de optie: ');
  define('TEXT_INVALID_USER_INPUT', 'Interactie gebruiker nodig<br />');

// weergave artikelen
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Aantal: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','In winkelwagen:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Voeg eventueel toe:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mixed artikel UIT');
  define('TEXT_PRODUCTS_MIX_ON','*Mixed artikel AAN');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*U kunt de opties van dit item niet samenvoegen om te voldoen aan de minimum aantal eis<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Optie diversen samenvoegen staat AAN<br />');

  define('ERROR_MAXIMUM_QTY','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maximum toegevoegd - Maximum aantal aan winkelwagen toegevoegd ');
  define('ERROR_CORRECTIONS_HEADING','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Corrigeer alstublieft: <br />');
  define('ERROR_QUANTITY_ADJUSTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fout bij veranderen aantal<br />');
  define('ERROR_QUANTITY_CHANGED_FROM', ', is aangepast van: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' naar ');

// Downloadmanager
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','LET OP: Downloads zijn pas beschikbaar nadat de betaling is ontvangen en gecontroleerd');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// fouten winkelwagentje
  define('ERROR_PRODUCT','Artikel: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Helaas is dit artikel momenteel niet leverbaar.<br />Het artikel is uit uw winkelwagen verwijderd.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br />Het item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Het spijt ons, maar de geselecteerde opties zijn veranderd voor dit product en zijn verwijderd uit onze voorraad op dit moment.<br /> Dit item is verwijderd uit uw winkelwagen.');
  define('ERROR_PRODUCT_QUANTITY_MIN',' ...Minimum aantal - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ...hoeveelheden fout - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ...waarde van een optie niet mogelijk ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> Totaal aantal artikelen besteld: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ...maximum aantal fout - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ...minimum aantal fout - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ...hoeveelheden fout - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ...maximum aantal fout - ');

  define('WARNING_SHOPPING_CART_COMBINED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NB: Voor uw gemak hebben wij de inhoud van het winkelwagen van uw laatste bezoek alvast toegevoegd aan uw huidige winkelwagen. Controleer de inhoud van uw winkelwagen alvorens af te rekenen.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Het aantal is aangepast aan het aantal op voorraad. ');

// fout tijdens betalingverwerking $_SESSION['customers_id' komt niet voor in de tabel customers
  define('ERROR_CUSTOMERS_ID_INVALID', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Klant gegevens kunnen niet worden gevonden!<br />Alstublieft inloggen of een nieuw account aanmaken...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Aanbiedingen');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuwe artikelen');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Binnenkort verwacht');
  define('TABLE_HEADING_DATE_EXPECTED', 'Verwachte datum');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Maandelijkse aanbieding');

  define('CAPTION_UPCOMING_PRODUCTS','Dit artikel is binnenkort weer voorradig.');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','in deze lijst ziet u producten die binnenkort weer voorradig zijn en de verwachte datum van beschikbaarheid.');

// meta tags speciale definities
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','GRATIS!');

// klant login
  define('TEXT_SHOWCASE_ONLY','Neem contact op');
// instellingen t.b.v. prijsweergave na inloggen
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Prijs niet zichtbaar');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Aanmelden om prijs weer te geven');
// instellingen die gebruikt worden als de webwinkel staat ingesteld als catalogus
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // geen waarde voor prijs of type hier je eigen tekst
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Uitsluitend catalogus');

// wacht op autorisatie
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Prijs niet weergegeven');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'WACHT OP AUTORISATIE');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Inloggen in webshop');

// tekstprijzen
  define('TEXT_CHARGES_WORD','Berekende toeslag:');
  define('TEXT_PER_WORD','<br />Prijs per woord: ');
  define('TEXT_WORDS_FREE',' Woord(en) gratis ');
  define('TEXT_CHARGES_LETTERS','Berekende toeslag:');
  define('TEXT_PER_LETTER','<br />Prijs per letter: ');
  define('TEXT_LETTERS_FREE',' Letter(s) gratis ');
  define('TEXT_ONETIME_CHARGES','*eenmalige toeslag = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*eenmalige toeslag = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Optionele staffelkorting');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','AANTAL');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIJS');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Eenmalige toeslag t.b.v. optionele staffelkorting');

// invoegvelden voor tekstveld
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' maximum aantal toegestane karakters');
  define('TEXT_REMAINING','beschikbaar');

// Verzendkosten calculator
  define('CART_SHIPPING_OPTIONS', 'bereken verzendkosten');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Alstublieft <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">inloggen</span></a>om uw persoonlijke verzendkosten weer te geven.');
  define('CART_SHIPPING_METHOD_TEXT', 'Beschikbare leveringsmethoden');
  define('CART_SHIPPING_METHOD_RATES', 'Tarieven');
  define('CART_SHIPPING_METHOD_TO','Afleveradres: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Afleveradres: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">inloggen</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Gratis versturen');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Downloads');
  define('CART_SHIPPING_METHOD_RECALCULATE','Herberekenen');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');// NIET VERTALEN!!!
  define('CART_SHIPPING_METHOD_ADDRESS','Adres:');
  define('CART_OT','Indicatie totale verzendkosten:');
  define('CART_OT_SHOW','true'); // instellen op false als u ordertotalen niet wil gebruiken. Waarde NIET VERTALEN!!!
  define('CART_ITEMS','Artikelen in winkelwagen: ');
  define('CART_SELECT','Kies');
  define('ERROR_CART_UPDATE', 'Alstublieft order aanpassen...<br />');
  define('IMAGE_BUTTON_UPDATE_CART', 'Aanpassen');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Whoops! Uw sessie is verlopen... Om uw verzendkosten te berekenen moet u eerst uw winkelwagen verversen...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Verzendkosten zijn gebaseerd op het door u geselecteerde adres:');

// meerdere artikelen toevoegen aan winkelwagen
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  //verplaatst SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART naar button_names.php als BUTTON_ADD_PRODUCTS_TO_CART_ALT

// staffelkorting tabel
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Staffelprijs');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Nieuwe staffelprijs');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Staffelprijs');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Korting kan varieren op basis van bovenstaande opties');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Staffelkorting niet beschikbaar...');

// aflopend en oplopend sorteren van artikelen
  define('PULL_DOWN_ALL_RESET','- Herstellen - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Artikel');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Artikel - a -> z');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Prijs - laag -> hoog');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Prijs - hoog -> laag');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Model');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Datum toegevoegd - nieuw -> oud');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Dattum toegevoegd - oud -> nieuw');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Standaard weergave');

// defenities voor de download module
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Link vervalt');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Nog te gaan');
  define('HEADING_DOWNLOAD', 'Om uw bestanden te downloaden dient u op de download knop te klikken en vervolgens "Opslaan" te kiezen.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Bestandsnaam');
  define('TABLE_HEADING_PRODUCT_NAME','Artikel');
  define('TABLE_HEADING_BYTE_SIZE','Bestandsgrootte');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Onbeperkt');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// Tabel kopteksten van winkelwagentje en binnenkort verwachte artikelen
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRODUCTS', 'Artikel');
  define('TABLE_HEADING_TOTAL', 'Totaal');

// aanmaken account - login
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacyverklaring');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'V&oacute;&oacute;r het verzenden van de bestelling moet u akkoord gaan met onze privacyverklaring door het desbetreffende selectievakje in te schakelen. Onze privacyverklaring kunt u <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">hier [klik]</span></a> lezen.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Ik heb de privacyverklaring aandachtig doorgelezen en ga uitdrukkelijk akkoord met de inhoud.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Adresgegevens');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Overige contactgegevens');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Geboortedatum');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Logingegevens');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Bent u op ons geattendeerd?');  // beter vertalen

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Excuus, maar we accepteren geen factuur- en verzendadressen meer in "%s".  Graag dit adres aampassen om verder te kunnen gaan.');

  define('ENTRY_EMAIL_PREFERENCE','Nieuwsbrief en e-mail voorkeuren');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Alleen tekst');
  define('EMAIL_SEND_FAILED','FOUT: E-mail versturen naar: "%s" <%s> met onderwerp: "%s" is mislukt!');

  define('DB_ERROR_NOT_CONNECTED', 'Fout - kan geen verbinding maken met de database');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Er lijkt en probleem met de database te zijn. er is onderhoud nodig.</a>');

// EZ-PAGINAS waarschuwingen
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'LETOP: EZ-PAGINAS KOP - alleen weergegeven voor het admin ip adres');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'LETOP: EZ-PAGINAS VOET - alleen weergegeven voor het admin ip adres');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'LETOP: EZ-PAGINAS SIDEBOX - alleen weergegeven voor het admin ip adres');

// Sorteermogelijkheden van extra artikelenlijst
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Items beginnen met...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Herstellen --');

///////////////////////////////////////////////////////////
// insluiten email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// insluiten van template specifieke kop(/header) definities
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// insluiten van template specifieke namen van knoppen
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// insluiten van template specifieke namen van overige afbeeldingen
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// creditcards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// insluiten van template specifieke definities van de whos_online sidebox
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// insluiten van de template specifieke 'meta tag' definities
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// EINDE VAN DIT TAAL DEFINITIE BESTAND
