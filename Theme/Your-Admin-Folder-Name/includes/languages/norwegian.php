<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Copyright Translation 2006-2012 Rune Rasmussen http://www.syntaxerror.no
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: norwegian.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Administrasjonen drives av Zen Cart :: Det beste systemet for netthandel.');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('no_NO.utf-8', 'nb_NO.utf-8', 'no_NO.UTF-8', 'nb_NO.UTF-8', 'nb_NO.utf8', 'no_NO.utf8', 'no', 'nb', 'nob-NO', 'no_NO', 'nb_NO', 'Norwegian_Bokmal', 'nor', 'norwegian', 'bokmal', 'bokmål');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd.m.Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd.MM.yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
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
define('ICON_METATAGS_ON', 'Metatagger er angitt');
define('ICON_METATAGS_OFF', 'Metatagger er ikke angitt');
define('TEXT_LEGEND_META_TAGS', 'Metatagger angitt:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>MERK:</strong> Siden/merkelinje er din definisjon for siden i meta_tags.php filen.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="nb-no"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-15');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Oversikt');
define('HEADER_TITLE_SUPPORT_SITE', 'Supportside');
define('HEADER_TITLE_ONLINE_CATALOG', 'Butikken');
define('HEADER_TITLE_VERSION', 'Serverinformasjon');
define('HEADER_TITLE_ACCOUNT', 'Konto');
define('HEADER_TITLE_LOGOFF', 'Logg av');
//define('HEADER_TITLE_ADMINISTRATION', 'Administrasjon');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Gavekort');
  define('TEXT_GV_NAMES','Gavekort');
  define('TEXT_DISCOUNT_COUPON', 'Rabattkode');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Innløsningskode');

// text for gender
define('MALE', 'Mann');
define('FEMALE', 'Kvinne');

define('NONE', 'Ingen');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Konfigurasjon');
define('BOX_CONFIGURATION_MY_STORE', 'Min butikk');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Minimumverdier');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Maksimumverdier');
define('BOX_CONFIGURATION_IMAGES', 'Bilder');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Kundedetaljer');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Levering/Pakking');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Produktlisting');
define('BOX_CONFIGURATION_STOCK', 'Lager');
define('BOX_CONFIGURATION_LOGGING', 'Logger');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'E-post');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Varianter');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip-komprimering');
define('BOX_CONFIGURATION_SESSIONS', 'Økter');
define('BOX_CONFIGURATION_REGULATIONS', 'Reguleringer');
define('BOX_CONFIGURATION_GV_COUPONS', 'Gavekort/Rabattkoder');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Kredittkort');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Produktinformasjon');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Visning/Utforming');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Vedlikehold');
define('BOX_CONFIGURATION_NEW_LISTING', 'Listing - Nye produkter');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Listing - Utvalgte produkter');
define('BOX_CONFIGURATION_ALL_LISTING', 'Listing - Alle produkter');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Listing - Indeks/Forside');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Definer sidestatus');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Ekstrasider');

// modules box text
define('BOX_HEADING_MODULES', 'Moduler');
define('BOX_MODULES_PAYMENT', 'Betaling');
define('BOX_MODULES_SHIPPING', 'Levering');
define('BOX_MODULES_ORDER_TOTAL', 'Ordretotal');
define('BOX_MODULES_PRODUCT_TYPES', 'Produkttyper');

// categories box text
define('BOX_HEADING_CATALOG', 'Produkter');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Kategorier og produkter');
define('BOX_CATALOG_PRODUCT_TYPES', 'Produkttyper');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Variantgrupper');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Variantverdier');
define('BOX_CATALOG_MANUFACTURERS', 'Produsenter');
define('BOX_CATALOG_REVIEWS', 'Kundeomtaler');
define('BOX_CATALOG_SPECIALS', 'Tilbudsprodukter');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Innkommende produkter');
define('BOX_CATALOG_SALEMAKER', 'Salgskampanjer');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Produktpriser');
define('BOX_CATALOG_PRODUCT', 'Produkt');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Produkter til kategorier');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_ORDERS', 'Ordrer');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Grupperabatter');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Faktura');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Pakkseddel');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lokasjon/Avgifter');
define('BOX_TAXES_COUNTRIES', 'Land');
define('BOX_TAXES_ZONES', 'Soner');
define('BOX_TAXES_GEO_ZONES', 'Sonedefinasjoner');
define('BOX_TAXES_TAX_CLASSES', 'Avgiftsklasser');
define('BOX_TAXES_TAX_RATES', 'Avgiftssatser');

// reports box text
define('BOX_HEADING_REPORTS', 'Rapporter');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Mest vist');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Mest solgt');
define('BOX_REPORTS_ORDERS_TOTAL', 'Beste kunder');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Lagerantall');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Kundeanbefalinger');

// tools text
define('BOX_HEADING_TOOLS', 'Verktøy');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Designvalg');
define('BOX_TOOLS_BACKUP', 'Database - sikkerhetskopi');
define('BOX_TOOLS_BANNER_MANAGER', 'Bannere');
define('BOX_TOOLS_CACHE', 'Hurtigminnekontroll');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Språk');
define('BOX_TOOLS_FILE_MANAGER', 'Filbehandling');
define('BOX_TOOLS_MAIL', 'Send e-post');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nyhetsbrev og produktvarsler');
define('BOX_TOOLS_SERVER_INFO', 'Serverinformasjon');
define('BOX_TOOLS_WHOS_ONLINE', 'Besøkende');
define('BOX_TOOLS_STORE_MANAGER', 'Butikkvedlikehold');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Utviklerverktøy');
define('BOX_TOOLS_SQLPATCH','Installer SQL- tillegg/oppdatering');
define('BOX_TOOLS_EZPAGES','Ekstrasider');

define('BOX_HEADING_EXTRAS', 'Ekstra');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Informasjonssider');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Startsiden');
define('BOX_TOOLS_DEFINE_CONTACT_US','Kontakt oss');
define('BOX_TOOLS_DEFINE_PRIVACY','Personvern');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Levering og retur');
define('BOX_TOOLS_DEFINE_CONDITIONS','Betingelser');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Utsjekking vellykket');
define('BOX_TOOLS_DEFINE_PAGE_2','Side 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Side 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Side 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Lokalisering');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuta');
define('BOX_LOCALIZATION_LANGUAGES', 'Språk');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Ordrestatus');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Gavekort/Rabattkoder');
define('BOX_GV_ADMIN_QUEUE',  'Gavekortkø');
define('BOX_GV_ADMIN_MAIL', 'Send gavekort');
define('BOX_GV_ADMIN_SENT', 'Sendte gavekort');
define('BOX_COUPON_ADMIN','Rabattkoder');
define('BOX_COUPON_RESTRICT','Rabattkoderestriksjoner');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Tilgangskontroll');
define('BOX_ADMIN_ACCESS_USERS',  'Administratorer');
define('BOX_ADMIN_ACCESS_PROFILES', 'Administratorprofiler');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Sideregistrering');
define('BOX_ADMIN_ACCESS_LOGS', 'Aktivitetslogger');

define('IMAGE_RELEASE', 'Løs inn gavekort');

// javascript messages
define('JS_ERROR', 'Feil har oppstått under behandlingen av ditt skjema!\nVennligst gjør følgende endringer:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Ny produktvariant må ha en pris\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Ny produktvariant må ha et prisprefiks\n');

define('JS_PRODUCTS_NAME', '* Nytt produkt må ha et navn\n');
define('JS_PRODUCTS_DESCRIPTION', '* Nytt produkt må ha en beskrivelse\n');
define('JS_PRODUCTS_PRICE', '* Nytt produkt må ha en pris\n');
define('JS_PRODUCTS_WEIGHT', '* Nytt produkt må ha en vekt\n');
define('JS_PRODUCTS_QUANTITY', '* Nytt produkt må ha antall angitt\n');
define('JS_PRODUCTS_MODEL', '* Nytt produkt må ha et modellnavn\n');
define('JS_PRODUCTS_IMAGE', '* Nytt produkt må ha et bilde\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* En ny pris må angis på produktet\n');

define('JS_GENDER', '* \'Kjønn\' må velges.\n');
define('JS_FIRST_NAME', '* \'Fornavn\' må inneholde minimum ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tegn.\n');
define('JS_LAST_NAME', '* \'Etternavn\' må inneholde minimum ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tegn.\n');
define('JS_DOB', '* \'Fødselsdag\' må være i formatet: xx/xx/xxxx (dato/måned/år).\n');
define('JS_EMAIL_ADDRESS', '* \'E-post adresse\' må inneholde minimum ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tegn.\n');
define('JS_ADDRESS', '* \'Gateadresse\' må inneholde minimum ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tegn.\n');
define('JS_POST_CODE', '* \'Postnummer\' må inneholde minimum ' . ENTRY_POSTCODE_MIN_LENGTH . ' tegn.\n');
define('JS_CITY', '* \'Sted\' må inneholde minimum ' . ENTRY_CITY_MIN_LENGTH . ' tegn.\n');
define('JS_STATE', '* \'Fylke\' må velges.\n');
define('JS_STATE_SELECT', '-- Velg ovenfor --');
define('JS_ZONE', '* \'Fylke\' må velges fra liten for dette landet.');
define('JS_COUNTRY', '* \'Land\' må velges.\n');
define('JS_TELEPHONE', '* \'Telefonnummer\' må inneholde minimum ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tegn.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Ordrenummer %s ekisterer ikke!');

define('CATEGORY_PERSONAL', 'Personlig');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Kontakt');
define('CATEGORY_COMPANY', 'Firma');
define('CATEGORY_OPTIONS', 'Valg');

define('ENTRY_GENDER', 'Kjønn:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">påkrevd</span>');
define('ENTRY_FIRST_NAME', 'Fornavn:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tegn</span>');
define('ENTRY_LAST_NAME', 'Etternavn:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tegn</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fødselsdato:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(f.eks. 05.21.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-postadresse:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tegn</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">E-postadressen er ikke gyldig!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">E-postadressen finnes allerede!</span>');
define('ENTRY_COMPANY', 'Firmanavn:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Rabattgruppe');
define('ENTRY_STREET_ADDRESS', 'Adresselinje 1:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tegn</span>');
define('ENTRY_SUBURB', 'Adresselinje 2:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Postnummer:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_POSTCODE_MIN_LENGTH . ' tegn</span>');
define('ENTRY_CITY', 'Poststed:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_CITY_MIN_LENGTH . ' tegn</span>');
define('ENTRY_STATE', 'Fylke:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">kreves</span>');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minimum ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tegn</span>');
define('ENTRY_FAX_NUMBER', 'Faksnummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Nyhetsbrev:');
define('ENTRY_NEWSLETTER_YES', 'Påmeldt');
define('ENTRY_NEWSLETTER_NO', 'Avmeldt');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Passord og bekreftelse må være identiske');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Beklager, ditt nye passord ble avvist.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Passord må inneholde både bokstaver og nummer, må også inneholde minimum %s tegn, og kan ikke være lik noen av dine 4 sist brukte passord. Passord utløper etter 90 dager, du vil da bli bedt om å opprette et nytt.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'FEIL: Beklager, det oppstod en feil under behandlingen av dine data. Vennligst forsøk å legge inn informasjonen på nytt.');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Send e-post');
define('IMAGE_BACK', 'Tilbake');
define('IMAGE_BACKUP', 'Sikkerhetskopi');
define('IMAGE_CANCEL', 'Avbryt');
define('IMAGE_CONFIRM', 'Bekreft');
define('IMAGE_COPY', 'Kopier');
define('IMAGE_COPY_TO', 'Kopier til');
define('IMAGE_DETAILS', 'Detaljer');
define('IMAGE_DELETE', 'Slett');
define('IMAGE_EDIT', 'Endre');
define('IMAGE_EMAIL', 'E-post');
define('IMAGE_GO', 'Go');
define('IMAGE_FILE_MANAGER', 'Filbehandling');
define('IMAGE_ICON_STATUS_GREEN', 'Aktiv');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Aktiver');
define('IMAGE_ICON_STATUS_RED', 'Deaktivert');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Deaktiver');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Feil -- for mange nettadresser/innholdstyper');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Feil');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Legg til');
define('IMAGE_LOCK', 'Lås');
define('IMAGE_MODULE_INSTALL', 'Installer modul');
define('IMAGE_MODULE_REMOVE', 'Fjern modul');
define('IMAGE_MOVE', 'Flytt');
define('IMAGE_NEW_BANNER', 'Nytt banner');
define('IMAGE_NEW_CATEGORY', 'Ny kategori');
define('IMAGE_NEW_COUNTRY', 'Nytt land');
define('IMAGE_NEW_CURRENCY', 'Ny valuta');
define('IMAGE_NEW_FILE', 'Ny fil');
define('IMAGE_NEW_FOLDER', 'Ny mappe');
define('IMAGE_NEW_LANGUAGE', 'Nytt språk');
define('IMAGE_NEW_NEWSLETTER', 'Nytt nyhetsbrev');
define('IMAGE_NEW_PRODUCT', 'Nytt produkt');
define('IMAGE_NEW_SALE', 'Nytt salg');
define('IMAGE_NEW_TAX_CLASS', 'Ny avgiftsklasse');
define('IMAGE_NEW_TAX_RATE', 'Ny avgiftsrate');
define('IMAGE_NEW_TAX_ZONE', 'Ny avgiftssone');
define('IMAGE_NEW_ZONE', 'Ny sone');
define('IMAGE_OPTION_NAMES', 'Variantgrupper');
define('IMAGE_OPTION_VALUES', 'Variantverdier');
define('IMAGE_ORDERS', 'Ordrer');
define('IMAGE_ORDERS_INVOICE', 'Faktura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Pakkseddel');
define('IMAGE_PERMISSIONS', 'Rediger rettigheter');
define('IMAGE_PREVIEW', 'Forhåndsvis');
define('IMAGE_RESTORE', 'Gjenopprett');
define('IMAGE_RESET', 'Tilbakestill');
define('IMAGE_SAVE', 'Lagre');
define('IMAGE_SEARCH', 'Søk');
define('IMAGE_SELECT', 'Velg');
define('IMAGE_SEND', 'Send');
define('IMAGE_SEND_EMAIL', 'Send e-post');
define('IMAGE_SUBMIT', 'Submit');
define('IMAGE_UNLOCK', 'Lås opp');
define('IMAGE_UPDATE', 'Oppdater');
define('IMAGE_UPDATE_CURRENCIES', 'Oppdater kurs');
define('IMAGE_UPLOAD', 'Last opp');
define('IMAGE_TAX_RATES','Avgiftssatser');
define('IMAGE_DEFINE_ZONES','Definer soner');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Prisbehandling');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Oppdater prisendringer');
define('IMAGE_ADD_BLANK_DISCOUNTS','Legg til ' . DISCOUNT_QTY_ADD . ' blank kvantumsrabatt');
define('IMAGE_CHECK_VERSION', 'Se etter oppdateringer for Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Flere kategorilenker');

define('IMAGE_ICON_STATUS_ON', 'Status - aktivert');
define('IMAGE_ICON_STATUS_OFF', 'Status - deaktivert');
define('IMAGE_ICON_LINKED', 'Produkt er lenket');

define('IMAGE_REMOVE_SPECIAL','Fjern tilbudsprisinnformasjon');
define('IMAGE_REMOVE_FEATURED','Fjern utvalgt produktinnformasjon');
define('IMAGE_INSTALL_SPECIAL', 'Legg til tilbudsprisinnformasjon');
define('IMAGE_INSTALL_FEATURED', 'Legg til utvalgt produktinformasjon');

define('ICON_PRODUCTS_PRICE_MANAGER','Produktprisbehandling');
define('ICON_COPY_TO', 'Kopier til');
define('ICON_CROSS', 'Av');
define('ICON_CURRENT_FOLDER', 'Gjeldende katalog');
define('ICON_DELETE', 'Slett');
define('ICON_EDIT', 'Endre');
define('ICON_ERROR', 'Feil');
define('ICON_FILE', 'Fil');
define('ICON_FILE_DOWNLOAD', 'Last ned');
define('ICON_FOLDER', 'Mappe');
//define('ICON_LOCKED', 'Låst');
define('ICON_MOVE', 'Flytt');
define('ICON_PERMISSIONS', 'Rettigheter');
define('ICON_PREVIOUS_LEVEL', 'Tilbake');
define('ICON_PREVIEW', 'Forhåndsvis');
define('ICON_RESET', 'Nytt passord');
define('ICON_STATISTICS', 'Statistikker');
define('ICON_SUCCESS', 'Vellykket');
define('ICON_TICK', 'På');
define('ICON_UNLOCKED', 'Opplåst');
define('ICON_WARNING', 'Advarsel');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Side %s av %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> administratorer)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> bannere)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> kategorier)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> land)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> kunder)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> valutaer)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> utvalgte produkter)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> språk)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> produsenter)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> nyhetsbrev)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> ordrer)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> ordrestatuser)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> rabattgrupper)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> produkter)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> produkttyper)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> kommende produkter)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> produktomtaler)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> salg)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> tilbudsprodukter)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> avgiftsklasser)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> tilknyttede design)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> avgiftssoner)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> avgiftsrater)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> soner)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'standard');
define('TEXT_SET_DEFAULT', 'Sett som standard');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Påkrevd</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Feil: Det er ikke angitt noen valuta som standard, angi en under Verktøy ->Lokalisering->Valuta');

define('TEXT_CACHE_CATEGORIES', 'Kategoriboks');
define('TEXT_CACHE_MANUFACTURERS', 'Produsentboks');
define('TEXT_CACHE_ALSO_PURCHASED', 'Også kjøpt-modul');

define('TEXT_NONE', '--ingen--');
define('TEXT_TOP', 'Topp');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Feil: Mål eksisterer ikke %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Feil: Mål er ikke skrivbar %s');
define('ERROR_FILE_NOT_SAVED', 'Feil: Fil ble ikke lagret.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Feil: Filtype ikke tillat  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Vellykket: Fil ble vellykket lagret %s');
define('WARNING_NO_FILE_UPLOADED', 'Advarsel: Ingen fil ble lastet opp.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advarsel: Filopplasting er deaktivert i konfigurasjonsfilen php.ini');
define('ERROR_ADMIN_SECURITY_WARNING', 'Advarsel: Din administrator-innlogging er ikke sikker... enten har du fortsatt standard innstillinger for innlogging: Admin admin, eller har ikke fjernet eller endret: demo demoonly<br />Innlogging(er) bør endres så snart som mulig for å ivareta sikkerheten til butikken.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Din database ser ut til å behøve oppdatering til et høyere nivå. Se Verktøy->Serverinfo for å se oppdateringsnivåer.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ADVARSEL:</strong> Siden er for øyeblikket nede for vedlikehold, du bør <b>IKKE</b> gjøre endringer (f.eks legge til kunder, produkter osv) her før dette arbeidet er fullført, med mindre du kjenner grunnen til vedlikeholdet og har fått klarsignal fra administrator...<br />MERK: Mange betalings- og sendingsmoduler kan ikke testes når butikken er i Nede til vedlikehold-modus');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'Advarsel: Disse filene bør slettes for å unngå sikkerhetsrisiko: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advarsel: Installasjonsmappen finnes i: ' . DIR_FS_CATALOG . 'zc_install. Vennligst fjern denne mappen av sikkerhetsgrunner.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Advarsel: Din konfigurasjonsfil: %sincludes/configure.php kan skrives til. Dette er en sikkrehetsrisiko, vennligst angi riktige rettigheter på denne filen (Ikke skrivabr, CHMOD 644 eller 444 er vanlig).');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Advarsel: Kunne ikke finne språkfilen: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'Feil: Modulfjerning forbudt: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ALARM: Vennligst sjekk for potensiell XSS-aktivitet:');

define('_JANUARY', 'Januar');
define('_FEBRUARY', 'Februar');
define('_MARCH', 'Mars');
define('_APRIL', 'April');
define('_MAY', 'Mai');
define('_JUNE', 'Juni');
define('_JULY', 'Juli');
define('_AUGUST', 'August');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'Oktober');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'Desember');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> gavekort)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> rabattkoder)');

define('TEXT_VALID_PRODUCTS_LIST', 'Produktliste');
define('TEXT_VALID_PRODUCTS_ID', 'Produkt-id');
define('TEXT_VALID_PRODUCTS_NAME', 'Produktnavn');
define('TEXT_VALID_PRODUCTS_MODEL', 'Produktmodell');

define('TEXT_VALID_CATEGORIES_LIST', 'Kategoriliste');
define('TEXT_VALID_CATEGORIES_ID', 'Kategori-id');
define('TEXT_VALID_CATEGORIES_NAME', 'Kategorinavn');

define('DEFINE_LANGUAGE','Språk:');

define('BOX_ENTRY_COUNTER_DATE','Treffteller startet:');
define('BOX_ENTRY_COUNTER','Antall treff:');

// not installed
define('NOT_INSTALLED_TEXT','Ikke installert');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Sortering av variantvalg');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Oppdater varianters sortering fra variantverdiers standard</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Oppdater alle produktvarianter sortering<strong><br>');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Sortering av variantgrupper');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Variantkontroll');

// generic model
  define('TEXT_MODEL','Modell:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Sidebokser');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s venter på godkjenning ');
  define('IMAGE_GIFT_QUEUE', 'Gavekortkø');
  define('IMAGE_ORDER','Ordre');

  define('IMAGE_DISPLAY','Vis');
  define('IMAGE_UPDATE_SORT','Oppdater sortering');
  define('IMAGE_EDIT_PRODUCT','Rediger produkt');
  define('IMAGE_EDIT_ATTRIBUTES','Endre varianter');
  define('TEXT_NEW_PRODUCT', 'Produkt i kategori: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Variantgrupper og -verdier');
  define('TEXT_PRODUCTS_PRICE_MANAGER','Produktpriser');
  define('TEXT_PRODUCT_EDIT','Rediger produkt');
  define('TEXT_ATTRIBUTE_EDIT','Rediger varianter');
  define('TEXT_PRODUCT_DETAILS','Vis detaljer');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'avslag');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'prosent');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'ny pris');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minimum:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Enheter:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','I handlekurv:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Legg til mer:');

  define('TEXT_PRODUCTS_MIX_OFF','*Ingen blandet valg');
  define('TEXT_PRODUCTS_MIX_ON','*Blandet valg');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Søkefiltre: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Søk: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Søk etter produkt(er) - Adskilt med kommaby commas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Søk etter produktnavn/-modell');

  define('PREV_NEXT_PRODUCT', 'Produkter: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Kategori er deaktivert</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Produkt er deaktivert</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Admin demo er aktiv for øyeblikket. Noen innstillinger er deaktivert');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Admin demo er aktiv for øyeblikket. Noen innstillinger er deaktivert - <strong>Merk: Admin overstyring aktivert</strong>');
  define('ERROR_ADMIN_DEMO','Admin demo er aktiv... funksjonen(e) du prøver å bruke har blitt deaktivert');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Ny versjon tilgjengelig: v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Ny oppdatering tilgjengelig: v');
  define('TEXT_VERSION_CHECK_PATCH','oppdatering');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Last ned her');
  define('TEXT_VERSION_CHECK_CURRENT','Din versjon av Zen Cart&trade; ser ut til å være oppdatert.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Viser <b>%d</b> til <b>%d</b> (av <b>%d</b> nedlastninger)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Nedlastninger');

define('BOX_CATALOG_FEATURED','Utvalgte produkter');

define('ERROR_NOTHING_SELECTED', 'Ingenting ble valgt... Ingen forandringer ble utført');
define('TEXT_STATUS_WARNING','<strong>Merk:</strong> Status blir autoaktivert/-deaktivert når dato er angitt');

define('TEXT_LEGEND_LINKED', 'Lenkede produkter');
define('TEXT_MASTER_CATEGORIES_ID','Produkts hovedkategori:');
define('TEXT_LEGEND', 'Status: ');
define('TEXT_LEGEND_STATUS_OFF', 'Av ');
define('TEXT_LEGEND_STATUS_ON', 'På ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>Merk: Hovedkategori er brukt for prisingsformål der hvor<br />produktkategori påvirker prising på lenkede produkter. F.eks: Tilbud</strong>');
define('TEXT_YES', 'Ja');
define('TEXT_NO', 'Nei');
define('TEXT_CANCEL', 'Avbryt');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Leveringskonfigurasjon feil!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Advarsel:</strong>Butikkens postnummer er ikke angitt. Se Konfigurasjon->Levering/Pakking for å angi den.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Advarsel:</strong> 0 vekt er konfigurert for gratis levering, og modul for gratis levering er ikke aktivert');
define('ERROR_USPS_STATUS', '<strong>Advarsel:</strong> USPS mangler enten brukernavn og/eller passord, eller er satt til TEST og ikke PRODUCTION og vil ikke virke.');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'MERK: Du har ingen leveringsmoduler aktivert. Gå til \'Moduler -> Sending\' for å konfigurere dette.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'MERK: Du har ingen betalingsmoduler aktivert. Gå til \'Moduler -> Betaling\' for å konfigurere dette.');

// text pricing
define('TEXT_CHARGES_WORD','Beregnet pris:');
define('TEXT_PER_WORD','<br />Pris per ord: ');
define('TEXT_WORDS_FREE',' ord gratis ');
define('TEXT_CHARGES_LETTERS','Beregnet pris:');
define('TEXT_PER_LETTER','<br />Pris per bokstav: ');
define('TEXT_LETTERS_FREE',' Bokstav(er) gratis ');
define('TEXT_ONETIME_CHARGES','*engangspris = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*engangspris = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Variant kvantumsrabatt');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Antall');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Pris');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Variant kvantumsrabatt - engangspris');
define('TEXT_CATEGORIES_PRODUCTS', 'Velg en kategori du vil se og klikk Vis...');
define('TEXT_PRODUCT_TO_VIEW', 'Velg et produkt du vil se og klikk \'Vis\'');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Ugyldig hovedkategori-ID');
define('TEXT_INFO_ID', ' IDnr ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>Advarsel:</strong> Dette produktet er lenket til flere kategorier, men ingen hovedkategori har blitta ngitt!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Produktet er ring for pris');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Produktet er gratis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Maks:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Lagre:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% avslag');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;avslag');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Salg:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Hvis du ikke har en HTML-behandler eller har JavaScript deaktivert, så kan du skrive HTML-tekst her manuelt.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Merk: Du bruker ren tekst e-post. Hvis du ønsker å sende med HTML må du aktivere "bruk MIME HTML" i e-postvalgene under konfigurasjon</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Merk: Du bruker ren tekst e-post. Hvis du ønsker å sende med HTML må du aktivere "bruk MIME HTML" i e-postvalgene under konfigurasjon</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Du ser denne teksten for vi sendte deg e-post i HTML-format, men din e-postklienten kan ikke vise HTML-meldinger.");
define('ENTRY_EMAIL_PREFERENCE','E-postformat:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Velger du "none" eller "optout" deaktiveres all e-post, inkludert ordredetaljer');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Ren tekst');
define('ENTRY_EMAIL_NONE_DISPLAY','Aldri');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Opted? ut av nyhetsbrev');
define('ENTRY_NOTHING_TO_SEND','Du har ikke fylt inn noe innhold for din melding');
 define('EMAIL_SEND_FAILED','Feil: Kunne ikke sende e-post til: "%s" <%s> med emne: "%s"');

  define('EDITOR_NONE', 'Ren tekst');
  define('TEXT_EDITOR_INFO', 'Tekstbehandler');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Du har valgt en HTML-tekstbehandler i \'Butikkinformasjon\' men \'/tekstbehandlerens/\' mappe finnes ikke, du må derfor fjerne ditt valg eller flytte tekstbehandlerfilene til \''.DIR_WS_CATALOG.'editors/\'-mappen');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Kategori-/Produktsortering: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Produktsortering, Produktnavn');
  define('TEXT_SORT_PRODUCTS_NAME', 'Produktnavn');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Produktmodell');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Produktantall + Produktnavn');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Produktantall - Produktnavn');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Produktpris + Produktnavn');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Produktpris - Produktnavn');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Kategorisortering, Kategorinavn');
  define('TEXT_SORT_CATEGORIES_NAME', 'Kategorinavn');



  define('TABLE_HEADING_YES','Ja');
  define('TABLE_HEADING_NO','Nei');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Eller, velg et eksisterende bilde fra tjener. Filenavn:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Overskrive eksisterende bilde på tjener?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','Advarsel: Filnavn ble oppdatert men ikke overskrevet ');
  define('TEXT_IMAGES_DELETE', '<strong>Slett bilde?</stronge> MERK: Bildet fjernes fra produkt men ikke fra tjener:');
  define('TEXT_IMAGE_CURRENT', 'Bildenavn: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Advarsel: Ingen variantgruppe har blitt angitt');
  define('ERROR_DEFINE_OPTION_VALUES', 'Advarsel: Ingen variantverdi har blitt angitt');
  define('ERROR_DEFINE_PRODUCTS', 'Advarsel: Ingen produkt har blitt angitt');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Advarsel: Ingen hovedkategori-ID har blitt angitt for dette produkt');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Legg til inkludert underkategorier');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Legg til uten underkategorier');

  define('BUTTON_PREVIOUS_ALT','Forrige produkt');
  define('BUTTON_NEXT_ALT','Neste produkt');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Flerkategori-lenkebehandling');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Kopier produkt til flere kategorier');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Alle globalkopi, legg til og slett -funksjoner er for øyeblikket AV');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Vis globale funksjoner - AV');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Vis globale funksjoner - PÅ');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Feil: Kan ikke lenke produkt i samme kategori.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Feil: Bildemappe i katalog er ikke skrivbar: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Feil: Bildemappe finnes ikke: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Feil: Kategori kan ikke flyttes inn i underkategori.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Feil: Kan ikke flytte produkt til samme kategori, eller inn i en kategori hvor det allerede finnes.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Feil: Kategori har produkt!<br /><br />While this can be done temporarily to build your Kategori ... Kategori hold either Produkt or Kategori but never both!');
  define('SUCCESS_CATEGORY_MOVED', 'Vellykket! Kategori har blitt flyttet...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Feil: Kan ikke flytte kategori til samme kategori! IDnr.');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Advarsel: Ekstrasiders hode - Vises bare for administrators IP');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Advarsel: Ekstrasiders fot - Vises bare for administrators IP');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Advarsel: Ekstrasiders sidebokser - Vises bare for administrators IP');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Advarsel: Dette produktet er merket: Gratis levering og ingen sendingsadresse nødvendig<br />Ingen sending vil bli etterspurt når alle produkter i ordren er virtuelle');
  define('TEXT_VIRTUAL_EDIT','Advarsel: Dette produktet er merket: Gratis levering og ingen sendingsadresse nødvendig<br />Ingen sending vil bli etterspurt når alle produkter i ordren er virtuelle');
  define('TEXT_FREE_SHIPPING_PREVIEW','Advarsel: Dette produktet er merket: Gratis levering og sendingsadresse påkrevd<br />Gratis levering-modulen er påkrevd når alle produkter i ordren er merket alltid gratis levering');
  define('TEXT_FREE_SHIPPING_EDIT','Advarsel: Ja gjør produktet til: Gratis levering og leveringsadresse er påkrevd<br />Gratis levering-modulen er påkrevd når alle produkter i ordren er merket \'Alltid gratis levering\'');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'Advarsel: Administrasjonens aktivitetlogg har over 2 måneder gamle oppføringer og bør tømmes.');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'Advarsel: Administrasjonens aktivitetlogg har over 50.000 oppføringer og bør tømmes.');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Du kan administrere aktivitetsloggen via \'Tilgangskontroll -> Aktivitetslogger\' dersom du har rettigheter til dette.');

  define('CATEGORY_HAS_SUBCATEGORIES', 'Merk: Kategori har underkategori<br />Produkt kan ikke legges til');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'Advarsel! Rabattkupong fra velkomst e-post utløper om %s dager');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'Merk: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Din \'admin\'-mappe bør få endret navn til noe mindre vanlig</a>, for å forebygge uautorisert tilgang.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'Advarsel: E-postsystemet er slått av. Ingen e-post vil bli sendt før systemet blir aktivert igjen under \'Konfigurasjon -> E-postvalg\'.');
define('TEXT_CURRENT_VER_IS', 'Du bruker for øyeblikket: ');
define('ERROR_NO_DATA_TO_SAVE', 'Feil: Dataene du sendte inn ser ut til å være tomme. Dine endringer har *IKKE* blitt lagret. Du har muligens et problem med din nettleser eller din internettilgang.');
define('TEXT_HIDDEN', 'Skjult');
define('TEXT_VISIBLE', 'Synlig');
define('TEXT_HIDE', 'Skjul');
define('TEXT_EMAIL', 'E-post');
define('TEXT_NOEMAIL', 'Ingen e-post');

define('BOX_HEADING_PRODUCT_TYPES', 'Produkttyper');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Det virker å være problmer med databasen, vedlikehold må utføres.</a>');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


