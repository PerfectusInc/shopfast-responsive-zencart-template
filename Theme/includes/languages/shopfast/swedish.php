<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 18883 2011-06-11 02:24:22Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
 
// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. <a href="http://www.signs.nu" target="_blank">Signs FrilansReklam</a></a>');

// look in your $PATH_LOCALE/locale directory for available locales..
@setlocale(LC_TIME, 'sv_SE.UTF-8');

define('DATE_FORMAT_SHORT', '%Y-%m-%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %e %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'Y-m-d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y-m-d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'yyyy-MM-dd');  //Use only 'dd', 'MM' and 'yyyy' here in any order

//// 
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
if (!function_exists('zen_date_raw')) {
  function zen_date_raw($date, $reverse = true) {
    if ($reverse) {
      return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
    } else {
      return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
    }
  }
}
 

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'SEK');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="sv"');

// charset for web pages and emails: ISO-8859-1 or UTF-8
  define('CHARSET', 'UTF-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'anrop sedan');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Presentkort');
  define('TEXT_GV_NAMES','Presentkort');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Inl&ouml;sningskod');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Inl&ouml;sningskod: ');

// text for gender
  define('MALE', 'Man'); // Mr.
  define('FEMALE', 'Kvinna'); // Ms.
  define('MALE_ADDRESS', ''); // Mr.
  define('FEMALE_ADDRESS', ''); // Ms.

// text for date of birth example
  define('DOB_FORMAT_STRING', '&aring;&aring;&aring;&aring;-mm-dd');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[mer]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Kategorier');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Tillverkare');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Nya Produkter');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nya produkter');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Utvalda');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Utvalda Produkter');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Fler utvalda produkter kommer snart.');

  define('TEXT_NO_ALL_PRODUCTS', 'Fler produkter kommer snart.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Alla Produkter');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'S&ouml;k');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Avancerad s&ouml;kning');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Erbjudande');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Erbjudande ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Recensioner');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Skriv en recension f&ouml;r denna produkt.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Det finns ingen recension f&ouml;r denna produkt.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s av 5 Stj&auml;rnor!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Kundkorg');
  define('BOX_SHOPPING_CART_EMPTY', 'Din kundkorg &auml;r tom.');
  define('BOX_SHOPPING_CART_DIVIDER', 'st -&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Snabb omk&ouml;p');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'B&auml;sts&auml;ljare');
  define('BOX_HEADING_BESTSELLERS_IN', 'B&auml;sts&auml;ljare i<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Underr&auml;ttelse');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Underr&auml;tta mig om uppdateringar f&ouml;r <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Underr&auml;tta mig INTE om uppdateringar f&ouml;r <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Tillverkar Info');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Hemsida');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Andra produkter');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Spr&aring;k');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Valuta');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Information');
  define('BOX_INFORMATION_PRIVACY', 'K&ouml;pinformation');
  define('BOX_INFORMATION_CONDITIONS', 'K&ouml;pvillkor');
  define('BOX_INFORMATION_SHIPPING', 'Frakt &amp; Returer');
  define('BOX_INFORMATION_CONTACT', 'Kontakta Oss');
  define('BOX_BBINDEX', 'Forum');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Nyhetsbrev - Avanm&auml;lan');

  define('BOX_INFORMATION_SITE_MAP', 'Webbplatskarta');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Mer Information');
  define('BOX_INFORMATION_PAGE_2', 'Sida 2');
  define('BOX_INFORMATION_PAGE_3', 'Sida 3');
  define('BOX_INFORMATION_PAGE_4', 'Sida 4');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', 'Tipsa en v&auml;n');
  define('BOX_TELL_A_FRIEND_TEXT', 'Tipsa en v&auml;n om denna produkten.');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', 'Min &Ouml;nskelista');
  define('BOX_WISHLIST_EMPTY', 'Du har inga produkter i din &ouml;nskelista');
  define('IMAGE_BUTTON_ADD_WISHLIST', 'L&auml;gg till i &ouml;nskelistan');
  define('TEXT_WISHLIST_COUNT', 'Det finns %s produkter i din &ouml;nskelista.');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> produkter i din &ouml;nskelista)');

//New billing address text
  define('SET_AS_PRIMARY' , 'Ange som huvudadres');
  define('NEW_ADDRESS_TITLE', 'Faktureringsadress');

// javascript messages
  define('JS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel har inträffat under behandlingen av ditt formulär.\n\nVar vänlig och utför följande ändringar:\n\n');

  define('JS_REVIEW_TEXT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* L&auml;gg till en n&aring;gra ord till dina kommentarer. Recensionen m&aring;ste ha minst ' . REVIEW_TEXT_MIN_LENGTH . ' tecken.');
  define('JS_REVIEW_RATING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Välj omdöme för denna produkt.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Välj betalningsmetod för din order.');

  define('JS_ERROR_SUBMITTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Detta formulär har redan skickats. Var vänlig klicka på ok och invänta att det blir klart.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vänligen välj betalningsmetod.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vänligen bekräfta villkoren för denna order genom att markera rutan nedan.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vänligen bekräfta sekretesspolicyn genom att kryssa för rutan nedan');

  define('CATEGORY_COMPANY', 'F&ouml;retagsuppgifter');
  define('CATEGORY_PERSONAL', 'Personuppgifter');
  define('CATEGORY_ADDRESS', 'Din Adress');
  define('CATEGORY_CONTACT', 'Din Kontakt Information');
  define('CATEGORY_OPTIONS', 'Options');
  define('CATEGORY_PASSWORD', 'Ditt l&ouml;senord');
  define('CATEGORY_LOGIN', 'Logga in');
  define('PULL_DOWN_DEFAULT', 'V&auml;lj ditt land');
  define('PLEASE_SELECT', 'V&auml;nligen v&auml;lj ...');
  define('TYPE_BELOW', 'Ange ditt val nedan ...');

  define('ENTRY_COMPANY', 'F&ouml;retagsnamn:');
  define('ENTRY_COMPANY_ERROR', 'V&auml;nligen ange f&ouml;retagets namn.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'H&auml;lsningsfras:');
  define('ENTRY_GENDER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>V&auml;nligen v&auml;lj h&auml;lsningsfras.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'F&ouml;rnamn:');
  define('ENTRY_FIRST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&Auml;r ditt f&ouml;rnamn korrekt? Det kr&auml;vs minst ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tecken. V&auml;nligen f&ouml;rs&ouml;k igen.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Efternamn');
  define('ENTRY_LAST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&Auml;r ditt efternamn korrekt? Det kr&auml;vs minst ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tecken. V&auml;nligen f&ouml;rs&ouml;k igen.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'F&ouml;delsedatum:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&Auml;r ditt f&ouml;delsedatum korrekt? V&aring;rt system kr&auml;ver f&ouml;ljande format: YYYY-MM-DD (ex. 1970-05-21)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex. 1970-05-21)');
  define('ENTRY_EMAIL_ADDRESS', 'E-postadress:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&Auml;r din e-postadress korrekt? Det skall minst inneh&aring;lla ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tecken. V&auml;nligen f&ouml;rs&ouml;k igen.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Tyv&auml;rr, f&ouml;rst&aring;r mitt system inte din e-postadress. F&ouml;rs&ouml;k igen.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>V&aring;rt system redan din e-postadress registrerad - pr&ouml;va att logga in med den ist&auml;llet. Om du inte anv&auml;nder den e-postadressen l&auml;ngre kan du &auml;ndra den i Ditt konto can correct it in the My Account area.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Forum Smeknamn:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Det smeknamnet anv&auml;nds redan. V&auml;lj ett annat.');
  define('ENTRY_NICK_LENGTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>F&ouml;rs&ouml;k igen. Ditt smeknamn m&aring;ste inneh&aring;lla minst ' . ENTRY_NICK_MIN_LENGTH . ' tecken.');
  define('ENTRY_STREET_ADDRESS', 'Gatuadress:');
  define('ENTRY_STREET_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Din gatuadress m&aring;ste inneh&aring;lla minst ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tecken.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Gatuadressrad 2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Postnummer:');
  define('ENTRY_POST_CODE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt postnummer m&aring;ste inneh&aring;lla minst ' . ENTRY_POSTCODE_MIN_LENGTH . ' tecken.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Ort:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Referenskod:');

  define('ENTRY_CITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Din ort m&aring;ste inneh&aring;lla minst ' . ENTRY_CITY_MIN_LENGTH . ' tecken.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'L&auml;n:');
  define('ENTRY_STATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt l&auml;n m&aring;ste inneh&aring;lla minst ' . ENTRY_STATE_MIN_LENGTH . ' tecken.');
  define('ENTRY_STATE_ERROR_SELECT', 'V&auml;nligen v&auml;lj ett l&auml;n fr&aring;n listan nedan.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- V&auml;nligen v&auml;lj --');
  define('ENTRY_COUNTRY', 'Land:');
  define('ENTRY_COUNTRY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Du m&aring;ste v&auml;lja ett land i dropplistan.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Mobiltelefon:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt Mobiltelefonnummer m&aring;ste inneh&aring;lla minst ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tecken.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Faxnummer:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Anm&auml;l dig till v&aring;rt nyhetsbrev.');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Anm&auml;ld');
  define('ENTRY_NEWSLETTER_NO', 'Avanm&auml;ld');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'L&ouml;senord:');
  define('ENTRY_PASSWORD_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt l&ouml;senord m&aring;ste vara minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tecken.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>L&ouml;senord bekr&auml;ftelsen m&aring;ste vara samma som ditt l&ouml;senord.');
  define('ENTRY_PASSWORD_TEXT', '* (minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tecken)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Bekr&auml;fta l&ouml;senordet:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Aktuellt l&ouml;senord:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt l&ouml;senord m&aring;ste vara minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tecken.');
  define('ENTRY_PASSWORD_NEW', 'Nytt l&ouml;senord:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt nya l&ouml;senord m&aring;ste minst vara ' . ENTRY_PASSWORD_MIN_LENGTH . ' tecken.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>L&ouml;senordbekr&auml;ftelsen m&aring;ste vara samma som ditt nya l&ouml;senord.');
  define('PASSWORD_HIDDEN', '--D&aring;ld--');

  define('FORM_REQUIRED_INFORMATION', '* Obligatorisk information');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> produkter)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> ordrar)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> recensioner)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> nya produkter)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> erbjudanden)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Visar <strong>%d</strong> to <strong>%d</strong> (av <strong>%d</strong> utvalda produkter)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Visar <strong>%d</strong> till <strong>%d</strong> (av <strong>%d</strong> produkter)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'F&ouml;rsta sidan');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'F&ouml;reg&aring;ende sida');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'N&auml;sta sida');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Sista sidan');
  define('PREVNEXT_TITLE_PAGE_NO', 'Sida %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'F&ouml;reg&aring;ende %d Sidor');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'N&auml;sta %d sidor');
  define('PREVNEXT_BUTTON_FIRST', '<i class="fa fa-angle-double-left"></i> First');
  define('PREVNEXT_BUTTON_PREV', '<i class="fa fa-angle-left fa-lg"></i>');
  define('PREVNEXT_BUTTON_NEXT', '<i class="fa fa-angle-right fa-lg"></i>');
  define('PREVNEXT_BUTTON_LAST', 'LAST <i class="fa fa-angle-double-right"></i>');


  define('TEXT_BASE_PRICE','Fr&aring;n: ');

  define('TEXT_CLICK_TO_ENLARGE', 'St&ouml;rre bild');

  define('TEXT_SORT_PRODUCTS', 'Sortera produkter ');
  define('TEXT_DESCENDINGLY', 'fallande');
  define('TEXT_ASCENDINGLY', 'stigande');
  define('TEXT_BY', ' av ');

  define('TEXT_REVIEW_BY', 'av %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s ord');
  define('TEXT_REVIEW_RATING', 'Omd&ouml;me: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Datum skapad: %s');
  define('TEXT_NO_REVIEWS', 'Det finns inga recensioner.');

  define('TEXT_NO_NEW_PRODUCTS', 'Fler nya produkter l&auml;ggs snart till.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Moms');

  define('TEXT_REQUIRED', '<span class="errorText">Obligatorisk</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'S&auml;kerhets Varning: Installations katalogen finns kvar: %s. Radera denna av s&auml;kerhetssk&auml;l.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Varning: Det g&aring;r att skriva &ouml;ver din konfigurationsfil: %s. Ange &aring;tkomsten till den (read-only, CHMOD 444 eller 644 &auml;r vanligast). Du kan beh&ouml;va anv&auml;nda ditt webbhotells kontrollpanel/filhanterare f&ouml;r att utf&ouml;ra dessa &auml;ndringar. Kontakta ditt webbhotell f&ouml;r assistans. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Se denna HJ&Auml;LP (eng)</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Fel: kunde inte radera filen. Du kan beh&ouml;va anv&auml;nda ett FTP program f&ouml;r att radera denna fil, detta kan vara ett server-beh&ouml;righets konfiguration begr&auml;nsning.');
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Varning: sessions katalogen finns inte: ' . zen_session_save_path() . '. sessioner kommer inte fungera innan denna katalog &auml;r skapad.');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Varning: Sessions katalogen &auml;r inte skrivbar: ' . zen_session_save_path() . '. sessioner kommer inte fungera innan denna katalog har r&auml;tt beh&ouml;righet.');
  define('WARNING_SESSION_AUTO_START', 'Varning: session.auto_start &auml;r aktiverad - v&auml;nligen inaktivera denna PHP funktion i php.ini och &aring;ter uppstarta servern.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Varning: Nerladdnings produkt katalogen finns inte: ' . DIR_FS_DOWNLOAD . '. Nerladdningsbara produkter kommer inte fungera innan denna katalog har skapats.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Varning: SQL cachekatalogen finns inte: ' . DIR_FS_SQL_CACHE . '. SQL cachning kommer inte fungera innan denna har skapats.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Varning: Jag kan inte skriva till SQL cachekatalogen: ' . DIR_FS_SQL_CACHE . '. SQL cachning kommer inte fungera innan denna katalog har r&auml;tt beh&ouml;righet.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Din databas verkar beh&ouml;va patchning till en h&ouml;gre niv&aring;. Se Admin-> Verktyg-> Serverinformation f&ouml;r att granska patch niv&aring;.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'VARNING: Kunde inte hitta spr&aring;kfilen: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Utg&aring;ngsdatum f&ouml;r kreditkortet &auml;r ogiltigt. Kontrollera datum och f&ouml;rs&ouml;k igen.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kreditkortsnummret &auml;r ogiltigt. Kontrollera numret och f&ouml;rs&ouml;k igen.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kreditkortsnumret som startar med %s var inte korekt angivet, eller acepteras inte detta kort. f&ouml;rs&ouml;k igen eller med ett annat kreditkort.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Rabattkupong');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FoS');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Balans ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Konto');
  define('GV_FAQ', TEXT_GV_NAME . ' FoS');
  define('ERROR_REDEEMED_AMOUNT', 'Grattis, du har l&ouml;st in ');
  define('ERROR_NO_REDEEM_CODE', 'Du angav inte en ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Felaktig ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Kreditering finns');
  define('GV_HAS_VOUCHERA', 'Du har medel i ditt ' . TEXT_GV_NAME . ' konto. Om du vill <br />
                           kan du skicka dessa med <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>e-post</strong></a> till n&aring;gon');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Du har inte tillr&auml;ckligt med medel f&ouml;r att anv&auml;nda dessa.');
  define('BOX_SEND_TO_FRIEND', 'Skicka ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Inl&ouml;sen');
  define('CART_COUPON', 'Kupong :');
  define('CART_COUPON_INFO', 'mer info');
  define('TEXT_SEND_OR_SPEND','Du har medel i ditt ' . TEXT_GV_NAME . ' konto. Du kan anv&auml;nda dessa eller skicka till n&aring;gon annan. F&ouml;r att skicka anv&auml;nd knappen nedan.');
  define('TEXT_BALANCE_IS', 'Dina ' . TEXT_GV_NAME . ' medel &auml;r: ');
  define('TEXT_AVAILABLE_BALANCE', 'Ditt ' . TEXT_GV_NAME . ' konto');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Presentkort/Kupong');
  define('PAYMENT_MODULE_GV', 'PK/K');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Medel &auml;r tillg&auml;ngliga');

  define('TEXT_INVALID_REDEEM_COUPON', 'Felaktig kupong kod');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Du m&aring;ste spendera minst %s, f&ouml;r att anv&auml;nda denna kupong');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Denna kupong kan inte anv&auml;ndas &auml;nnu.');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Denna kupong &auml;r inte l&auml;ngre giltlig');
  define('TEXT_INVALID_USES_COUPON', 'Denna kupong kan endast anv&auml;ndas ');
  define('TIMES', ' g&aring;nger.');
  define('TIME', ' g&aring;ng.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Du har anv&auml;nt kupongkoden: %s max antal g&aring;nger f&ouml;r en kund. ');
  define('REDEEMED_COUPON', 'en kupong v&auml;rd ');
  define('REDEEMED_MIN_ORDER', 'p&aring; ordrar &ouml;ver ');
  define('REDEEMED_RESTRICTIONS', ' [Produkt-Kategori begr&auml;nsningar]');
  define('TEXT_ERROR', 'Ett fel har uppst&aring;t');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Denna kupongkod &auml;r inte giltlig f&ouml;r n&aring;gon av de produkterna du har i din kundkorg.');
  define('TEXT_VALID_COUPON', 'Grattulerar, du har l&ouml;st in din rabattkupong.');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'kupong koden du angivit &auml;r inte korrekt f&ouml;r den adressen som anv&auml;nts.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... mer info');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Din IP-adress &auml;r: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Adress Information');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Antal i korgen: ');
  define('PRODUCTS_ORDER_QTY_TEXT','L&auml;gg i korgen: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Har lagt produkt i kundkorgen ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Har lagt produkter i kundkorgen ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','kg');
  define('TEXT_SHIPPING_BOXES', 'paket');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Spara:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;mindre');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','REA:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', 'Nr ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Sponsorer');
  define('TEXT_BANNER_BOX','Bes&ouml;k v&aring;ra sponsorer ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Har du sett ...');
  define('TEXT_BANNER_BOX2','Kolla in denna idag!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Sponsorer');
  define('TEXT_BANNER_BOX_ALL','Bes&ouml;k v&aring;ra sponsorer ...');

// boxes defines
  define('PULL_DOWN_ALL','V&auml;nligen v&auml;lj');
  define('PULL_DOWN_MANUFACTURERS','- &Aring;ngra -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'V&auml;nligen v&auml;lj');

// general Sort By
  define('TEXT_INFO_SORT_BY','Sortera efter: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Klicka p&aring; bilden f&ouml;r att st&auml;nga');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ St&auml;ng f&ouml;nstret ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel:  Filtypen f&aring;r inte anv&auml;ndas.');
  define('WARNING_NO_FILE_UPLOADED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Varning:  ingen fil har laddats upp.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Lyckat:  filen har laddats upp.');
  define('ERROR_FILE_NOT_SAVED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel:  Filen har inte sparats.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel:  m&aring;let &auml;r ej skrivbart.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fel: m&aring;let finns inte.');
  define('ERROR_FILE_TOO_BIG', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Varning: Filen var f&ouml;r stor f&ouml;r att laddas upp!<br />Ordern kan utf&ouml;ras men kontakta butiken f&ouml;r hj&auml;lp med filen');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTERA: Denna sida &auml;r schemalagd f&ouml;r att st&auml;nga f&ouml;r underh&aring;ll: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTERA: webbsidan &auml;r nere f&ouml;r underh&aring;ll');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','&Auml;r gratis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Ring f&ouml;r pris');
  define('TEXT_CALL_FOR_PRICE','Ring f&ouml;r pris');

  define('TEXT_INVALID_SELECTION',' You picked an Invalid Selection: ');
  define('TEXT_ERROR_OPTION_FOR',' On the Option for: ');
  define('TEXT_INVALID_USER_INPUT', 'User Input Required<br />');
  
  define ('TEXT_INVALID_SELECTION', 'Du gjorde ett ogiltigt val: ');
   define ('TEXT_ERROR_OPTION_FOR', 'i tillvalen f&ouml;r: ');
   define ('TEXT_INVALID_USER_INPUT', 'indata Kr&auml;vs <br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Enhet: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','I kundkorgen:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','L&auml;gg till ytterligare:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mixad AV');
  define('TEXT_PRODUCTS_MIX_ON','*Mixad P&Aring;');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*Du kan inte mixa tillvalen till denna produkt och uppfylla minsta antal kraven.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*Mixade tillvals v&auml;rde &auml;r P&Aring;<br />');

  define('ERROR_MAXIMUM_QTY','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Den kvantitet som lagts till i kundvagnen har justerats p&aring; grund av en begr&auml;nsning av h&ouml;gsta antal du till&aring;ts. Se denna post:<br /> ');
  define('ERROR_CORRECTIONS_HEADING','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>V&auml;nligen r&auml;tta f&ouml;ljande: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'D<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>en kvantitet som lagts till i kumdvagnen har justerats. Det alternativ du ville ha &auml;r inte tillg&auml;nglig i delade m&auml;ngder. M&auml;ngden av produkten:<br /> ');
  define('ERROR_QUANTITY_CHANGED_FROM', ', har blivit &auml;ndrat fr&aring;n: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' till ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTERA: Nerladdningar &auml;r inte tillg&auml;ngliga innan betalning har bekr&auml;ftats');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT','<br />Produkten: ');
  define ('ERROR_PRODUCT_ATTRIBUTES', '<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Produkt:');
   define ('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES', '<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Vi &auml;r ledsna, men de valda alternativen har &auml;ndrats f&ouml;r denna produkt och har tagits bort fr&aring;n v&aring;rt lager just nu <br /> Denna produkt har tagits bort fr&aring;n din varukorg..');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vi &auml;r beklagar, men denna produkt har tagits bort fr&aring;n v&aring;r f&ouml;rteckning just nu.<br />Produkten har tagits bort fr&aring;n kundkorgen.');
  define('ERROR_PRODUCT_QUANTITY_MIN',',  ... Minsta antal fel- ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Antals enhetsfel - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... Fel tillvals v&auml;rde fel ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> Du har best&auml;llt totalt: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Max antal fel - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', har ett max antal restriktion. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Antal enhetsfel - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Max antal fel - ');

  define('WARNING_SHOPPING_CART_COMBINED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NOTERA: F&ouml;r din bekv&auml;mlighet har din nuvarande kundvagn kombinerats med din kundvagn fr&aring;n ditt tidigare bes&ouml;k. Granska din kundvagn innan utcheckningen.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kundinformation kan inte valideras!<br />Logga in eller skapa ett nytt konto ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','V&aring;ra Utvalda Produkter');

  define('TABLE_HEADING_NEW_PRODUCTS', 'V&aring;ra Produkter');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'V&aring;ra Kommande Produkter');
  define('TABLE_HEADING_DATE_EXPECTED', 'F&ouml;rv&auml;ntat datum');
  define('TABLE_HEADING_SPECIALS_INDEX', 'V&aring;ra Erbjudanden');

  define('CAPTION_UPCOMING_PRODUCTS','Dessa artiklar kommer att finnas i lager snart');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','Tabellen inneh&aring;ller en lista &ouml;ver produkter som ber&auml;knas finnas i lager snart. Datumet produkterna f&ouml;rv&auml;ntas:');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','&Auml;r Gratis!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Kontakta oss');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Ej prissatt');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Logga in f&ouml;r pris');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Katalog endast');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Ej prissatt');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'INV&Auml;NTAR GODK&Auml;NNANDE');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Logga in i butiken');

// text pricing
  define('TEXT_CHARGES_WORD','Ber&auml;knad kostnad:');
  define('TEXT_PER_WORD','<br />Pris per ord: ');
  define('TEXT_WORDS_FREE',' fria ord ');
  define('TEXT_CHARGES_LETTERS','Ber&auml;knad kostnad:');
  define('TEXT_PER_LETTER','<br />Pris per tecken: ');
  define('TEXT_LETTERS_FREE',' fria tecken ');
  define('TEXT_ONETIME_CHARGES','*eng&aring;ngs kostnad = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*eng&aring;ngs kostnad = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Alternativ m&auml;ngdrabatter');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Antal');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIS');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Alternativ m&auml;ngdrabatter eng&aring;ngskostnader');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' max till&aring;tna tecken');
  define('TEXT_REMAINING','&aring;terst&aring;r');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Ber&auml;knad fraktkostnad');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'V&auml;nligen <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Logga in</span></a>, f&ouml;r att visa din fraktkostnad.');
  define('CART_SHIPPING_METHOD_TEXT', 'Aktuella fraktmetoder');
  define('CART_SHIPPING_METHOD_RATES', 'Avgift');
  define('CART_SHIPPING_METHOD_TO','Frakt till: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Frakt till: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Logga In</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Fri frakt');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Nerladdningar');
  define('CART_SHIPPING_METHOD_RECALCULATE','Ber&auml;kna');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Adress:');
  define('CART_OT','Total kostnadsber&auml;kning:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','Produkter i kundkorgen: ');
  define('CART_SELECT','V&auml;lj');
  define('ERROR_CART_UPDATE', '<strong>V&auml;nligen uppdatera din order</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Uppdatera');
  define ('EMPTY_CART_TEXT_NO_QUOTE', 'Hoppsan! Din session har g&aring;tt ut ... Uppdatera din kundvagn f&ouml;r ny fraktber&auml;kning ...');
   define ('CART_SHIPPING_QUOTE_CRITERIA', 'fraktber&auml;kning &auml;r baserade p&aring; den adress som du valt:');
// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'K&ouml;p: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'K&ouml;p: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'K&ouml;p: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'K&ouml;p: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// rabatt st bord
   define ('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'M&auml;ngdrabatt');
   define ('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Rabatterat pris');
   define ('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'M&auml;ngdrabatt');
   define ('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Rabatten varierar beroende p&aring; dina val ovan');
   define ('TEXT_HEADER_DISCOUNTS_OFF', 'M&auml;ngdrabatt inte tillg&auml;nglig ...');
   
// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- &Aring;terst&auml;ll - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Produktnamn');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Produktnamn - fallande');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Pris - l&aring;g till h&ouml;g');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Pris - h&ouml;g till l&aring;g');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Artikelnr');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Datum inlagd - Ny till gammal');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Datum inlagd - Gammal till ny');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'F&ouml;rvald ordning');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'L&auml;nken aktiv till');
  define('TABLE_HEADING_DOWNLOAD_COUNT', '&Aring;terst&aring;ende');
  define('HEADING_DOWNLOAD', 'F&ouml;r att ladda ner filen, h&ouml;gerklicka och klicka p&aring; "Spara till Disk" fr&aring;n popup menyn.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Filnamn');
  define('TABLE_HEADING_PRODUCT_NAME','Produktnamn');
  define('TABLE_HEADING_BYTE_SIZE','Filstorlek');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Obegr&auml;nsad');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Antal');
  define('TABLE_HEADING_PRODUCTS', 'Produktnamn');
  define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Sekretesspolicy');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'V&auml;nligen markera att du tagit del av sekretesspolicyn genom att markera kryssrutan. Sekretesspolicyn kan l&auml;sas <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">h&auml;r</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Jag har l&auml;st och godk&auml;nt sekretesspolicyn.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Adress Detaljer');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Extra kontakt information');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Verifiera din older');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Inloggnings detaljer');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Blev du rekommenderad oss?');

  define('ENTRY_EMAIL_PREFERENCE','Nyhetsbrev och E-post info');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-enbart');
  define('EMAIL_SEND_FAILED','FEL: kunde inte skicka mail till: "%s" <%s> med rubriken: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'FEL - Kunde inte ansluta till databasen');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'VARNING: EZ-PAGES HEADER - P&aring; f&ouml;r Admin IP endast');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'VARNING: EZ-PAGES FOOTER - P&aring; f&ouml;r Admin IP endast');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'VARNING: EZ-PAGES SIDEBOX - P&aring; f&ouml;r Admin IP endast');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Produkter startar med ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- &Aring;terst&auml;ll --');


define('FOTEN_CONTACT', ' Kontakt ');
define('FOTEN_BACK', ' Tillbaka ');
define('FOTEN_HOME', ' Hem ');
define('FOTEN_SITEMAP', ' Navigera ');
define('FOTEN_NEWSLETTER', ' Nyhetsbrev ');
define('FOTEN_SEARCH', ' S&ouml;k ');
define('FOTEN_CART', ' Kundkorg ');


///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
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

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
