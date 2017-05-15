<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: gv_faq.php 93 2012-02-16 23:01:05Z syntaxerror.no $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . ' - Ofte Stilte Sp�rsm�l');
define('HEADING_TITLE', TEXT_GV_NAME . ' OSS/FAQ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Hvordan kj�pe gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Hvordan sende gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Hvordan handle med gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Hvordan l�se inn gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Hva om problemer oppst�r?</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Hvordan kj�pe gavekort');
define('SUB_HEADING_TEXT', 'Gavekort kj�pes p� samme m�te som andre produkter i v�r butikk. Du kan
  benytte deg av de vanlige betalingsm�tene for � kj�pe dem.
  N�r det er kj�pt, vil verdien av gavekortet bli lagt til din personlige
   gavekortkonto. Dersom du har penger p� din gavekortkonto, vil du
  legge merke til at summen n� vises i samme boks som handlekurven. Denne boksen inneholder n� ogs� en
  lenke til en side hvor du kan sende gavekort til noen via e-post.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Hvordan sende gavekort');
define('SUB_HEADING_TEXT','For � sende et gavekort m� du f�rst g� til siden for sending av gavekort. Du kan
  finne lenken til denne siden i samme boks som handlekurven, p� h�yre side av sidene v�re.
  N�r du sender et gavekort, m� du spesifisere f�lgende:
  <ul><li>Navnet p� personen du sender gavekort til.</li>
  <li>E-postadressen til personen du sender gavekort til.</li>
  <li>Summen du vil sende. (V�r oppmerksom p� at du ikke beh�ver � sende hele summen som ligger
  i din gavekortkonto.)</li>
  <li>En kort melding til mottakeren.</li></ul><br />
  Vennligst kontroller at du har skrevet inn riktige opplysninger, selv om
  du vil ha mulighet til � endre disse helt frem til e-posten faktisk er sendt.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Hvordan handle med gavekort');
  define('SUB_HEADING_TEXT','Dersom du har penger p� din gavekortkonto, kan du bruke disse pengene p� �
  kj�pe noen av v�re produkter. N�r du g�r til kassen, vil du se en ekstra boks
  komme til syne. Her skriver du inn summen du vil bruke av din gavekortkonto.
  Vennligst v�r oppmerksom p� at dersom det ikke er nok penger p� din gavekortkonto, m� du ogs� oppgi en annen betalingsm�te for � dekke handelen.
  Dersom du har mer penger p� din gavekortkonto enn den totale summen for
  din ordre vil resterende bel�p fortsatt v�re tilgjengelig p� din gavekortkonto for senere bruk.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Hvordan l�se inn gavekort');
  define('SUB_HEADING_TEXT','Dersom du mottar et gavekort via e-post vil den inneholde detaljer om hvem som sendte
  deg gavekortet, sammen med en kort melding fra avsenderen. E-posten
  inneholder ogs� innl�sningskoden som du m� bruke for � overf�re gavekortet til din konto hos oss. Det vil sannsynligvis v�re en god id� � ta en utskrift av denne e-posten for senere referanse. Du kan n� l�se inn gavekortet p� to m�ter.<br /><br />
  1. Ved � trykke p� lenken i e-posten.
  Dette vil ta deg til butikkens side for innl�sning av gavekort. Du vil deretter bli bedt om
  � opprette en konto eller � logge inn dersom du allerede har konto hos oss. Til slutt blir gavekortet kontrollert og verdien blir overf�rt til din gavekortkonto, klar til � bli brukt p� hva du vil.<br /><br />
  2. N�r du g�r til kassen, vil du p� samme side som du velger betalingsm�te
finne en boks til � skrive inn innl�sningskoden du har mottatt. Skriv inn innl�sningskode her, og 
trykk p� knappen merket "L�s inn". Koden blir da kontrollert
og gavekortets verdi blir overf�rt til din gavekortkonto. Du kan n� bruke disse pengene til � handle varer hos oss');
  break;
  case '5':
  define('SUB_HEADING_TITLE','N�r problemer oppst�r.');
  define('SUB_HEADING_TEXT','Om du har problemer eller ubesvarte sp�rsm�l tilknyttet gavekortsystemet kan du kontakte oss p� e-postadressen '. STORE_OWNER_EMAIL_ADDRESS . ', men for at vi skal kunne l�se problemet raskt og effektivt setter vi stor pris p� � f� s� mye informasjon som mulig fra deg.');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Velg et av sp�rsm�lene over for � se svaret.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Fyll inn innl�sningskoden for gavekortet ditt.');
  define('TEXT_GV_REDEEM_ID', 'Innl�sningskode:');
