<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: norwegian.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart');
//define('SITE_TAGLINE', 'Kunsten å drive e-handel');
//define('CUSTOM_KEYWORDS', 'e-handel, åpen kilde, butikk, netthandel');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Kopirett &copy; ' . date('Y') . '&nbsp;<a href="index.php?main_page=contact_us">' . STORE_OWNER . '</a><br />Drevet av netthandelsløsningen <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> med <a href="http://oversettelser.syntaxerror.no/zen-cart-dokumentasjon/index.php" target="_blank">norsk oversettelse</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('no_NO.utf-8', 'nb_NO.utf-8', 'no_NO.UTF-8', 'nb_NO.UTF-8', 'nb_NO.utf8', 'no_NO.utf8', 'no', 'nb', 'nob-NO', 'no_NO', 'nb_NO', 'Norwegian_Bokmal', 'nor', 'norwegian', 'bokmal', 'bokmål');
  @setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

/**
 *
 * This function will return a date in form of YYYYMMDD
 * Year can be specified by inserting 2 or 4 digits
 * Month can be specified by inserting the abbreviated or full month name, or 1 or 2 digits
 * Day can be specified by inserting 1 or 2 digits
 *
 * You no longer need to separate parts with slashes
 * This function will also validate the date
 *
 * Remember to set the correct locale to get localised dates
 */
if (!function_exists('zen_date_raw')) {
	function zen_date_raw($date)
	{
		$date = strtolower($date);

		// get a list of abbreviated and full month names
		for ($i=1; $i < 13; $i++)
		{
			$month_abbr[$i] = strtolower(strftime('%b',strtotime("2000-$i-1")));
			$month_name[$i] = strtolower(strftime('%B',strtotime("2000-$i-1")));
		}

		// if DATE_FORMAT has not been defined, find it automatically by checking against the localised format
		if (!defined('DATE_FORMAT'))
		{
			$local_format = strftime('%x', strtotime('2000-1-3'));

			$local_format = str_replace(array('2000', '00', '01', '1', '03', '3'), array('Y', 'y', 'm', 'n', 'd', 'j'), $local_format);
			$local_format = str_replace($month_name, 'F', $local_format);
			$local_format = str_replace($month_abbr, 'M', $local_format);
			define('DATE_FORMAT', $local_format);
		}

		// look for a full month name in the date string
		foreach ($month_name as $key => $val)
		{
			$strpos = strpos($date, $val);
			if ($strpos !== false)
			{
				// insert month number in front of the string where the month name was found
				$date = substr_replace($date, $key, $strpos, 0);
				break;
			}
		}

		if ($strpos === false)
		// a full month name was not found in the date string, now look for abbreviations
		{
			// find the first occurance of a month abbreviation
			// this is necessary since there's a chance one abbreviation is part of another month name. thus, if the customer is entering the full month name, he would not get the correct month if we didn't do this
			for ($i=1; $i < 13; $i++)
			{
				$month_strpos[$i] = strpos($date, $month_abbr[$i]);
				if ($month_strpos[$i] !== false && (!isset($first_case) || $month_strpos[$i] < $first_case))
				{
					$first_case = $month_strpos[$i];
					$m = $i;
				}
			}
			if (isset($m) && isset($first_case))
			{
				// insert month number in front of the string where the month abbreviation was found
				$date = substr_replace($date, $m, $first_case, 0);
			}
		}

		// remove all non-numeric characters
		$date = preg_replace('/[^0-9]/', '', $date);

		// remove all characters except those allowed from the constant DATE_FORMAT
		$dformat = preg_replace('/[^YyFMmndj]/', '', DATE_FORMAT);

		// Define regex for day, month and year
		$dd = '([0-2][1-9]|[1-3][0-1]|[1-9])';
		if (isset($m) && isset($first_case))
		{
			$mm = '(' . $m . ')';
		}
		else
		{
			$mm = '(0?[1-9]|1[0-2])';
		}

		$yyyy = '((19|20)?[0-9]{2})';
		// Look at the set date format, and create the entire regex line as well as set the location where day, month and year is to be found for later reference
		if (preg_match('/(d|j)(F|M|m|n)(y|Y)/', $dformat))
		{
			$regexp = $dd . $mm . $yyyy;
			$d = '1';
			$m = '2';
			$y = '3';
		}
		elseif (preg_match('/(F|M|m|n)(d|j)(y|Y)/', $dformat))
		{
			$regexp = $mm . $dd . $yyyy;
			$d = '2';
			$m = '1';
			$y = '3';
		}
		elseif (preg_match('/(d|j)(y|Y)(F|M|m|n)/', $dformat))
		{
			$regexp = $dd . $yyyy . $mm;
			$d = '1';
			$m = '4';
			$y = '2';
		}
		elseif (preg_match('/(F|M|m|n)(y|Y)(d|j)/', $dformat))
		{
			$regexp = $mm . $yyyy . $dd;
			$d = '4';
			$m = '1';
			$y = '2';
		}
		elseif (preg_match('/(y|Y)(d|j)(F|M|m|n)/', $dformat))
		{
			$regexp = $yyyy . $dd . $mm;
			$d = '3';
			$m = '4';
			$y = '1';
		}
		else
		{
			$regexp = $yyyy . $mm . $dd;
			$d = '4';
			$m = '3';
			$y = '1';
		}

		// if this doesn't look like a valid date, return false
		if (!preg_match('/^' . $regexp . '$/', $date, $regs))
		{
			return false;
		}

		// If some values are too short, fix them
		// fix value of day
		if (strlen($regs[$d]) == '1')
		{
			$regs[$d] = '0' . $regs[$d];
		}
		// fix value of month
		if (strlen($regs[$m]) == '1')
		{
			$regs[$m] = '0' . $regs[$m];
		}
		// fix value of year. If year is less than or equal to the last 2 numbers of the current year, set century to 20
		if (strlen($regs[$y]) === 2)
		{
			if ($regs[$y] <= date('y'))
			{
				$regs[$y] = '20' . $regs[$y];
			}
			else
			{
				$regs[$y] = '19' . $regs[$y];
			}
		}

		// validate the date
		if (!checkdate($regs[$m], $regs[$d], $regs[$y]))
		{
			return false;
		}

		// return YYYYMMDD
		return $regs[$y] . $regs[$m] . $regs[$d];
	} // end function zen_date_raw()
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'NOK');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="nb-no"');

// charset for web pages and emails
  define('CHARSET', 'iso-8859-15');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'visninger siden');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Gavekort');
  define('TEXT_GV_NAMES','Gavekort');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Kode:');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Kode: ');

// text for gender
  define('MALE', 'Herr');
  define('FEMALE', 'Fr.');
  define('MALE_ADDRESS', 'Herr');
  define('FEMALE_ADDRESS', 'Fr.');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'ddmmyyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[mer]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Kategorier');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Produsenter');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Nye produkter');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nye produkter');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Utvalgt');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Utvalgte produkter');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Flere utvalgte produkter blir lagt til etter hvert. Velkommen tilbake senere.');

  define('TEXT_NO_ALL_PRODUCTS', 'Flere produkter blir lagt til etter hvert. Velkommen tilbake senere.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Alle produkter');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Søk');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Avansert søk');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Tilbud');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Tilbud ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Omtaler');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Skriv en omtale for dette produktet.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Det finnes for øyeblikket ingen produktomtaler.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s av 5 stjerner!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Handlekurv');
  define('BOX_SHOPPING_CART_EMPTY', 'Ingen varer');
  define('BOX_SHOPPING_CART_DIVIDER', ' stk.-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Siste bestillinger');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Bestselgere');
  define('BOX_HEADING_BESTSELLERS_IN', 'Bestselgere i<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Hold meg oppdatert');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Hold meg oppdatert på <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', '<strong>Ikke</strong> hold meg oppdatert på <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Produsentinfo');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s nettside');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Andre produkter');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Språk');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Valuta');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Kundesenter');
  define('BOX_INFORMATION_PRIVACY', 'Personvern');
  define('BOX_INFORMATION_CONDITIONS', 'Betingelser');
  define('BOX_INFORMATION_SHIPPING', 'Levering og retur');
  define('BOX_INFORMATION_CONTACT', 'Kontakt oss');
  define('BOX_BBINDEX', 'Forum');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Avbestill nyhetsbrev');

  define('BOX_INFORMATION_SITE_MAP', 'Sidekart');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Mer informasjon');
  define('BOX_INFORMATION_PAGE_2', 'Side 2');
  define('BOX_INFORMATION_PAGE_3', 'Side 3');
  define('BOX_INFORMATION_PAGE_4', 'Side 4');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', 'Tips en venn');
  define('BOX_TELL_A_FRIEND_TEXT', 'Tips noen du kjenner om dette produktet.');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', 'Min ønskeliste');
  define('BOX_WISHLIST_EMPTY', 'Du har ingen produkter i din ønskeliste');
  define('IMAGE_BUTTON_ADD_WISHLIST', 'Legg til ønskeliste');
  define('TEXT_WISHLIST_COUNT', 'Du har %s produkter i din ønskeliste.');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> produkter i din ønskeliste)');

//New billing address text
  define('SET_AS_PRIMARY' , 'Velg som hovedadresse');
  define('NEW_ADDRESS_TITLE', 'Fakturaadresse');

// javascript messages
  define('JS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Skjemaet ble ikke akseptert.\n\nVennligst gjør følgende endringer:\n\n');

  define('JS_REVIEW_TEXT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Omtaleteksten må inneholde minst ' . REVIEW_TEXT_MIN_LENGTH . ' tegn.');
  define('JS_REVIEW_RATING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Du må gi produktet en karakter for å kunne legge inn omtale.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>* Vennligst velg en betalingsmåte for din ordre.');

  define('JS_ERROR_SUBMITTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Dette skjemaet har allerede blitt sendt. Vennligst trykk \'ok\' og vent på at prosessen blir ferdig.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst velg en betalingsmåte for din ordre.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst godta våre betingelser for denne ordre ved å markere boksen.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst godta våre personvernerklæringer ved å markere boksen.');

  define('CATEGORY_COMPANY', 'Firma');
  define('CATEGORY_PERSONAL', 'Dine personlige detaljer');
  define('CATEGORY_ADDRESS', 'Din adresse');
  define('CATEGORY_CONTACT', 'Din kontaktinformasjon');
  define('CATEGORY_OPTIONS', 'Valg');
  define('CATEGORY_PASSWORD', 'Ditt passord');
  define('CATEGORY_LOGIN', 'Logg inn');
  define('PULL_DOWN_DEFAULT', 'Vennligst velg ditt land');
  define('PLEASE_SELECT', 'Vennligst velg ...');
  define('TYPE_BELOW', 'Gjør et valg nedenfor ...');

  define('ENTRY_COMPANY', 'Firmanavn:');
  define('ENTRY_COMPANY_ERROR', 'Vennligst fyll inn et firmanavn.');
  define('ENTRY_COMPANY_TEXT', '<span style="color:green;">(Fylles kun ut om firma)</span>');
  define('ENTRY_GENDER', 'Tittel:');
  define('ENTRY_GENDER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst velg en tittel.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Fornavn:');
  define('ENTRY_FIRST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fornavnet ditt må inneholde minst ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tegn.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Etternavn:');
  define('ENTRY_LAST_NAME_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Etternavnet ditt må inneholde minst ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tegn.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Født:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fødselsdagen din må være som følgende: DD.MM.ÅÅÅÅ (f.eks. 27.02.1982)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (f.eks. 27.02.1982)');
  define('ENTRY_EMAIL_ADDRESS', 'E-post:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>E-postadressen din må inneholde minst ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tegn.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>E-postadressen din ser ikke ut til å være gyldig - vennligst kontroller at du har skrevet riktig.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>E-postadressen din eksisterer allerede i våre databaser - dersom du har glemt passordet, kan du få tilsendt dette.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Brukernavn for forumet:');
  define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Brukernavnet finnes fra før, velg et annet.');
  define('ENTRY_NICK_LENGTH_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Brukernavnet må inneholde minst ' . ENTRY_NICK_MIN_LENGTH . ' tegn.');
  define('ENTRY_STREET_ADDRESS', 'Adresselinje 1:');
  define('ENTRY_STREET_ADDRESS_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Adresselinje 1 må inneholde minst ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tegn.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Adresselinje 2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Postnummer:');
  define('ENTRY_POST_CODE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Postnummeret må inneholde minst ' . ENTRY_POSTCODE_MIN_LENGTH . ' tegn.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Sted:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Referansekode:');

  define('ENTRY_CITY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Stedsnavn må inneholde minst ' . ENTRY_CITY_MIN_LENGTH . ' tegn.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Fylke:');
  define('ENTRY_STATE_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Fylket må inneholde minst ' . ENTRY_STATE_MIN_LENGTH . ' tegn.');
  define('ENTRY_STATE_ERROR_SELECT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst velg ditt fylke.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Vennligst velg --');
  define('ENTRY_COUNTRY', 'Land:');
  define('ENTRY_COUNTRY_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst velg ditt land.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telefon:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Telefonnummeret må inneholde minst ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tegn.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Nyhetsbrev:');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Ja');
  define('ENTRY_NEWSLETTER_NO', 'Nei');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Passord:');
  define('ENTRY_PASSWORD_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Passordet må inneholde minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tegn.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Passordbekreftelsen må være samme som passordet.');
  define('ENTRY_PASSWORD_TEXT', '* (minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tegn)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Bekreft passord:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Nåværende passord:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Passordet må inneholde minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tegn.');
  define('ENTRY_PASSWORD_NEW', 'Nytt passord:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ditt nye passord må inneholde minst ' . ENTRY_PASSWORD_MIN_LENGTH . ' tegn.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Passordbekreftelsen må være samme som det nye passordet.');
  define('PASSWORD_HIDDEN', '--SKJULT--');

  define('FORM_REQUIRED_INFORMATION', '* Påkrevd');
  define('ENTRY_REQUIRED_SYMBOL', '*');

// constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> produkter)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> bestillinger)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> omtaler)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> nye produkter)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> tilbud)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> utvalgte produkter)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Viser <strong>%d</strong> til <strong>%d</strong> (av <strong>%d</strong> produkter)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Første side');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Forrige side');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Neste side');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Siste side');
  define('PREVNEXT_TITLE_PAGE_NO', 'Side %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Forrige sett med %d sider');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Neste sett med %d sider');
  define('PREVNEXT_BUTTON_FIRST', '<i class="fa fa-angle-double-left"></i> First');
  define('PREVNEXT_BUTTON_PREV', '<i class="fa fa-angle-left fa-lg"></i>');
  define('PREVNEXT_BUTTON_NEXT', '<i class="fa fa-angle-right fa-lg"></i>');
  define('PREVNEXT_BUTTON_LAST', 'LAST <i class="fa fa-angle-double-right"></i>');

  define('TEXT_BASE_PRICE','Fra: ');

  define('TEXT_CLICK_TO_ENLARGE', 'større bilde');

  define('TEXT_SORT_PRODUCTS', 'Sorter produkter i ');
  define('TEXT_DESCENDINGLY', 'synkende rekkefølge');
  define('TEXT_ASCENDINGLY', 'stigende rekkefølge');
  define('TEXT_BY', ' etter ');

  define('TEXT_REVIEW_BY', 'av %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s ord');
  define('TEXT_REVIEW_RATING', 'Karakter: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Lagt til: %s');
  define('TEXT_NO_REVIEWS', 'Det finnes for øyeblikket ingen produktomtaler.');

  define('TEXT_NO_NEW_PRODUCTS', 'Flere nye produkter kommer snart, velkommen tilbake senere.');

  define('TEXT_UNKNOWN_TAX_RATE', 'MVA.');

  define('TEXT_REQUIRED', '<span class="errorText">Påkrevd</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advarsel: Installasjonskatalogen er ikke slettet enda: ' . $warn_path . '/zc_install. Vennligst slett denne katalogen av sikkerhetsmessige hensyn.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Advarsel: Konfigurasjonsfilen er <strong>ikke</strong> skrivebeskyttet: ' . $warn_path . '/includes/configure.php. Dette er en potensiell sikkerhetsrisiko - vennligst sett riktige tilgangsrettigheter på denne filen.');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Advarsel: Kunne ikke fjerne angitt fil. Du må kanksje bruke FTP for å fjerne filen, som følge av serverrettigheter (konfigurasjonsbegrensninger).');
  define('WARNING_SESSION_AUTO_START', 'Advarsel: session.auto_start er aktivert - vennligst deaktiver denne php-funksjonen i php.ini og restart webserveren.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advarsel: Katalogen for nedlastbare produkt finnes ikke: ' . DIR_FS_DOWNLOAD . '. Nedlastbare produkter virker ikke inntil denne katalogen blir opprettet.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Advarsel: Katalogen for SQL cache finnes ikke: ' . DIR_FS_SQL_CACHE . '. SQL-cache inntil denne katalogen blir opprettet.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Advarsel: Kan ikke skrive til katalogen for SQL cache: ' . DIR_FS_SQL_CACHE . '. SQL-cache virker ikke inntil riktige tilgangsrettigheter er satt.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Det ser ut til at din database må oppgraderes. Se Admin->Verktøy->Serverinformasjon for å finne ut hvilken versjon du kjører.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Advarsel: Kunne ikke finne språkfilen: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Utløpsdato for kredittkortet er ugyldig, vennligst kontroller og prøv igjen.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kredittkort-nummeret er ugyldig, vennligst kontroller og prøv igjen.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>De første fire sifrene av nummeret som ble skrevet inn er: %s. Dersom dette nummeret er korrekt kan vi dessverre ikke ta i mot betaling fra din korttype, om det er feil kan du prøve igjen.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Rabattkoder');
  define('BOX_INFORMATION_GV', 'Gavekort <acronym title="Ofte stilte spørsmål">OSS</acronym>/<acronym title="Frequently Asked Questions">FAQ</acronym>');
  define('VOUCHER_BALANCE', 'Gavekortsaldo ');
  define('BOX_HEADING_GIFT_VOUCHER', 'Gavekortkonto');
  define('GV_FAQ', 'Gavekort: <acronym title="Ofte Stilte Spørsmål">OSS</acronym>/<acronym title="Frequently Asked Questions">FAQ</acronym>');
  define('ERROR_REDEEMED_AMOUNT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Gratulerer, gavekortkontoen din ble fylt opp med ');
  define('ERROR_NO_REDEEM_CODE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst fyll inn innløsningskode.');
  define('ERROR_NO_INVALID_REDEEM_GV', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ugyldig innløsningskode. Vennligst kontroller og forsøk på nytt.');
  define('TABLE_HEADING_CREDIT', 'Du har kreditt!');
  define('GV_HAS_VOUCHERA', 'Du har penger tilgode på din gavekortkonto. Dersom du vil <br />
                         kan du sende disse pengene via <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>e-post</strong></a> til noen du kjenner');
  define('ENTRY_AMOUNT_CHECK_ERROR', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Du har ikke nok penger på denne kontoen til å sende dette beløpet.');
  define('BOX_SEND_TO_FRIEND', 'Send gavekort ');

  define('VOUCHER_REDEEMED', 'Gavekortet ble innløst');
  define('CART_COUPON', 'Kode: ');
  define('CART_COUPON_INFO', 'mer info');
  define('TEXT_SEND_OR_SPEND','Du har en tilgjengelig saldo i din gavekortkonto. Du kan bruke den selv, eller gi (sende) den til noen andre. For å sende, klikk på knappen nedenfor.');
  define('TEXT_BALANCE_IS', 'Din gavekortsaldo er: ');
  define('TEXT_AVAILABLE_BALANCE', 'Din gavekortkonto');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Gavekort/Rabattkode');
  define('PAYMENT_MODULE_GV', 'Gavekort/Rabattkode');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Kreditt tilgjengelig');

  define('TEXT_INVALID_REDEEM_COUPON', 'Ugyldig kode');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Du må kjøpe for minimum %s for å kunne bruke denne koden');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Denne koden er ikke tilgjengelig enda');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Denne koden er utgått');
  define('TEXT_INVALID_USES_COUPON', 'Denne koden kunne bare brukes ');
  define('TIMES', ' ganger.');
  define('TIME', ' gang.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Du har allerede brukt denne koden: %s. ');
  define('REDEEMED_COUPON', 'en kode med verdi ');
  define('REDEEMED_MIN_ORDER', 'ved bestillinger over ');
  define('REDEEMED_RESTRICTIONS', ' [Begrensninger gjelder for produktkategori]');
  define('TEXT_ERROR', 'En feil har oppstått');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Denne koden er ikke gyldig for noen av produktene i din nåværende handlekurv');
  define('TEXT_VALID_COUPON', 'Gratulerer, du har løst inn rabattkoden.');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Rabattkoden du fylte inn er ikke gyldig for din valgte adresse.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... mer info');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','IP-addressen din er: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Addresseinformasjon');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Antall i handlekurv nå: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Legg i handlekurv: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Produkt ble lagt i handlekurv...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Valgte produkter ble lagt i handlekurv...');

  define('TEXT_PRODUCT_WEIGHT_UNIT',' kg');

// Shipping
  define('TEXT_SHIPPING_WEIGHT',' kg');
  define('TEXT_SHIPPING_BOXES', 'Kolli');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Du får&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;avslag');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Salg:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Sponsorer');
  define('TEXT_BANNER_BOX','Besøk våre sponsorer ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Har du sett ...');
  define('TEXT_BANNER_BOX2','Sjekk denne i dag!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Sponsorer');
  define('TEXT_BANNER_BOX_ALL','Besøk våre sponsorer ...');

// boxes defines
  define('PULL_DOWN_ALL','Vennligst velg');
  define('PULL_DOWN_MANUFACTURERS','- Tilbakestill -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Vennligst velg');

// general Sort By
  define('TEXT_INFO_SORT_BY','Sortering: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Trykk på bildet for å lukke');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Lukk vindu ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil:  Filtypen tillates ikke.');
  define('WARNING_NO_FILE_UPLOADED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Advarsel:  Ingen filer er lastet opp.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Filen ble lagret.');
  define('ERROR_FILE_NOT_SAVED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil:  Filen ble ikke lagret.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil:  Filen er skrivebeskyttet.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Feil: Filen finnes ikke.');
  define('ERROR_FILE_TOO_BIG', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Advarsel: Filen var for stor for opplasting!<br />Ordre kan legges inn men vennligst kontakt butikken for hjelp med opplasting/innsending.');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'MERK: Nettbutikken vil være nede for vedlikehold: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'MERK: Nettbutikken er for øyeblikket nede for vedlikehold, velkommen tilbake litt senere.');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Det er gratis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Spør oss om pris');
  define('TEXT_CALL_FOR_PRICE','Spør oss om pris');

  define('TEXT_INVALID_SELECTION','\' må du velge noe annet enn ');
  define('TEXT_ERROR_OPTION_FOR',' I alternativet for \'');
  define('TEXT_INVALID_USER_INPUT', 'Brukerinput kreves');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minimum: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Enheter: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','I handlekurv:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Legg til flere:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Maksimum:');

  define('TEXT_PRODUCTS_MIX_OFF','*Blandet AV');
  define('TEXT_PRODUCTS_MIX_ON','*Blandet PÅ');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Du kan ikke blande valgene på dette produktet for å oppfylle krav om minimum antall.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Blandede variantverdier er På');

  define('ERROR_MAXIMUM_QTY','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Antallet som ble lagt i din handlekurv ble justert på grunn av restriksjoner på maksantall per kunde. Se her: ');
  define('ERROR_CORRECTIONS_HEADING','<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vennligst rett opp følgende: <br />');
  define('ERROR_QUANTITY_ADJUSTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kvantum - feiljustering<br />');
  define('ERROR_QUANTITY_CHANGED_FROM', ', har blitt endret fra: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' til ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','MERK: Nedlastinger vil ikke være tilgjengelige før betalingen har blitt bekreftet.');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT','Produktet: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vi beklager men dette produktet er blitt fjernet fra vår vareliste nå.<br />Dette produktet har derfor blitt fjernet fra din handlekurv.');
  define('ERROR_PRODUCT_ATTRIBUTES','Produktet: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br /><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Vi beklager men dette produktet er blitt fjernet fra vår vareliste nå.<br />Dette produktet har derfor blitt fjernet fra din handlekurv.');
  define('ERROR_PRODUCT_QUANTITY_MIN',', ... Minimum mengde - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Antall enheter - ');
  define('ERROR_PRODUCT_OPTION_SELECTION',' ... Ugyldig verdi for utvalg ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','Du bestilte totalt: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Maksimalt antall - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', har krav om kjøp av minimumantall. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Antall enheter - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Maksimalt antall - ');

  define('WARNING_SHOPPING_CART_COMBINED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>MERK: Innholdet i din gjeldende handlekurv er slått sammen med innholdet i handlekurven fra ditt forrige besøk. Pass på å sjekke innholdet før du fullfører ordren.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Antall har blitt endret i forhold til hva som finnes på lager. ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Kundeinformasjon kan ikke valideres!<br />Vennligst logg inn eller gjennopprett din konto...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Våre utvalgte produkter');

// Sjekk for hvilken visning som er valgt i konfigurasjon, for visning av riktig tekst.
if (SHOW_NEW_PRODUCTS_LIMIT == 0) { 
  define('TABLE_HEADING_NEW_PRODUCTS', 'Nye produkter');
  } else if (SHOW_NEW_PRODUCTS_LIMIT == 1) {
  define('TABLE_HEADING_NEW_PRODUCTS', 'Nye produkter');
  } else {
  define('TABLE_HEADING_NEW_PRODUCTS', 'Nye produkter');
  } // Sjekk slutt
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Kommende produkter');
  define('TABLE_HEADING_DATE_EXPECTED', 'Forventet ankomstdato');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Spesial produkter');

  define('CAPTION_UPCOMING_PRODUCTS','Disse produktene vil komme inn på lager snart');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','Tabell inneholder en liste over produkter som vil komme inn på lager snart, samt forventet innkomstdato');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Det er gratis!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Kontakt oss');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Pris utilgjengelig');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Logg inn for å se pris');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Kun visning');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Pris utilgjengelig');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'VENTER PÅ GODKJENNING');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Logg inn i butikken');

// text pricing
  define('TEXT_CHARGES_WORD','Beregnet pris:');
  define('TEXT_PER_WORD','<br />Pris per ord: ');
  define('TEXT_WORDS_FREE',' Gratis ord ');
  define('TEXT_CHARGES_LETTERS','Beregnet pris:');
  define('TEXT_PER_LETTER','<br />Pris per bokstav: ');
  define('TEXT_LETTERS_FREE',' Bokstaver gratis ');
  define('TEXT_ONETIME_CHARGES','*engangsgebyr = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*engangsgebyr = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opsjon kvantumsrabatt');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Mengde');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIS');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Opsjon kvantumsrabatt for engangsgebyr');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' max antall bokstaver som er lov.');
  define('TEXT_REMAINING','igjen');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Forhåndsberegnet leveringspris:');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Vennligst <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>logg inn</u></a>, for å vise dine personlige leveringskostnader.');
  define('CART_SHIPPING_METHOD_TEXT','Forsendelsesmåter:');
  define('CART_SHIPPING_METHOD_RATES','Pris:');
  define('CART_SHIPPING_METHOD_TO','Send til: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Send til: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>logg inn</u></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Gratis levering');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Nedlastinger');
  define('CART_SHIPPING_METHOD_RECALCULATE','Omberegn');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Adresse:');
  define('CART_OT','Beregnet totalsum:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','Varer i handlekurv: ');
  define('CART_SELECT','Velg');
  define('ERROR_CART_UPDATE', '<strong>Venligst oppdater din ordre</strong>');
  define('IMAGE_BUTTON_UPDATE_CART', 'Oppdater');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Beklager! Din økt har utløpt... Vennligst oppdater din handelvogn for sendingsutvalg...');
    define('CART_SHIPPING_QUOTE_CRITERIA', 'Beregning av leveringspris er basert på oppgitt adresseinformasjon:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Legg til: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Legg til: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Legg til: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Legg til: ');
  define('SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART','Legg produkter i handlekurv');

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Kvantumspris');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Ny kvantumspris');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Kvantumspris');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Avslag varierer basert på valgene ovenfor');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Kvantumsrabatt ikke tilgjengelig ...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- Tøm - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Produktnavn - synkende');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Produktnavn - stigende');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Pris - laveste først');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Pris - høyeste først');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modell');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Dato - nyeste først');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Dato - eldste først');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Standard visning');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Lenke utløper');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Gjennstår');
  define('HEADING_DOWNLOAD', 'Klikk først på nedlastingsknappen for å laste ned dine filer og klikk så på "Lagre til disk" fra sprettopp vinduet.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Filnavn');
  define('TABLE_HEADING_PRODUCT_NAME','Navn');
  define('TABLE_HEADING_BYTE_SIZE','Filstørrelse');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Ubegrenset');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Ant.');
  define('TABLE_HEADING_PRODUCTS', 'Navn');
  define('TABLE_HEADING_TOTAL', 'Totalt');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Personvernerklæring');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Du må bekrefte at du aksepterer vår personvernerklæring ved å krysse av for dette nedenfor. <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">Klikk her for å lese personvernerklæringen vår!</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Jeg har lest og akseptert personvernerklæringen deres.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Adresseopplysninger');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Andre kontaktopplysninger');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Bekreft din alder');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Kontoopplysninger');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Ble du tipset om oss?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Beklager, vi tilbyr ikke lengre fakturering eller levering til "%s".  Du må oppdatere/endre adresse for å kunne fortsette.');

  define('ENTRY_EMAIL_PREFERENCE','E-postformat');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Kun ren tekst');
  define('EMAIL_SEND_FAILED','Feil: Kunne ikke sende e-post til: "%s" <%s> med emne: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Feil - Kunne ikke koble til database');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Det virker å være problmer med databasen, vedlikehold må utføres.</a>');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Advarsel: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Advarsel: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Advarsel: EZ-PAGES SIDEBOX - On for Admin IP Only');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Alle produkter');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Tilbakestill --');

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

//text for Ty Package Tracker sidebox heading
  define('BOX_HEADING_TRACK_ORDERS', 'Tidligere ordrer');
