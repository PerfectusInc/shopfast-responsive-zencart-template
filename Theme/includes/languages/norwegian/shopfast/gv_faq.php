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

define('NAVBAR_TITLE', TEXT_GV_NAME . ' - Ofte Stilte Spørsmål');
define('HEADING_TITLE', TEXT_GV_NAME . ' OSS/FAQ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Hvordan kjøpe gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Hvordan sende gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Hvordan handle med gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Hvordan løse inn gavekort?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Hva om problemer oppstår?</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Hvordan kjøpe gavekort');
define('SUB_HEADING_TEXT', 'Gavekort kjøpes på samme måte som andre produkter i vår butikk. Du kan
  benytte deg av de vanlige betalingsmåtene for å kjøpe dem.
  Når det er kjøpt, vil verdien av gavekortet bli lagt til din personlige
   gavekortkonto. Dersom du har penger på din gavekortkonto, vil du
  legge merke til at summen nå vises i samme boks som handlekurven. Denne boksen inneholder nå også en
  lenke til en side hvor du kan sende gavekort til noen via e-post.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Hvordan sende gavekort');
define('SUB_HEADING_TEXT','For å sende et gavekort må du først gå til siden for sending av gavekort. Du kan
  finne lenken til denne siden i samme boks som handlekurven, på høyre side av sidene våre.
  Når du sender et gavekort, må du spesifisere følgende:
  <ul><li>Navnet på personen du sender gavekort til.</li>
  <li>E-postadressen til personen du sender gavekort til.</li>
  <li>Summen du vil sende. (Vær oppmerksom på at du ikke behøver å sende hele summen som ligger
  i din gavekortkonto.)</li>
  <li>En kort melding til mottakeren.</li></ul><br />
  Vennligst kontroller at du har skrevet inn riktige opplysninger, selv om
  du vil ha mulighet til å endre disse helt frem til e-posten faktisk er sendt.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Hvordan handle med gavekort');
  define('SUB_HEADING_TEXT','Dersom du har penger på din gavekortkonto, kan du bruke disse pengene på å
  kjøpe noen av våre produkter. Når du går til kassen, vil du se en ekstra boks
  komme til syne. Her skriver du inn summen du vil bruke av din gavekortkonto.
  Vennligst vær oppmerksom på at dersom det ikke er nok penger på din gavekortkonto, må du også oppgi en annen betalingsmåte for å dekke handelen.
  Dersom du har mer penger på din gavekortkonto enn den totale summen for
  din ordre vil resterende beløp fortsatt være tilgjengelig på din gavekortkonto for senere bruk.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Hvordan løse inn gavekort');
  define('SUB_HEADING_TEXT','Dersom du mottar et gavekort via e-post vil den inneholde detaljer om hvem som sendte
  deg gavekortet, sammen med en kort melding fra avsenderen. E-posten
  inneholder også innløsningskoden som du må bruke for å overføre gavekortet til din konto hos oss. Det vil sannsynligvis være en god idé å ta en utskrift av denne e-posten for senere referanse. Du kan nå løse inn gavekortet på to måter.<br /><br />
  1. Ved å trykke på lenken i e-posten.
  Dette vil ta deg til butikkens side for innløsning av gavekort. Du vil deretter bli bedt om
  å opprette en konto eller å logge inn dersom du allerede har konto hos oss. Til slutt blir gavekortet kontrollert og verdien blir overført til din gavekortkonto, klar til å bli brukt på hva du vil.<br /><br />
  2. Når du går til kassen, vil du på samme side som du velger betalingsmåte
finne en boks til å skrive inn innløsningskoden du har mottatt. Skriv inn innløsningskode her, og 
trykk på knappen merket "Løs inn". Koden blir da kontrollert
og gavekortets verdi blir overført til din gavekortkonto. Du kan nå bruke disse pengene til å handle varer hos oss');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Når problemer oppstår.');
  define('SUB_HEADING_TEXT','Om du har problemer eller ubesvarte spørsmål tilknyttet gavekortsystemet kan du kontakte oss på e-postadressen '. STORE_OWNER_EMAIL_ADDRESS . ', men for at vi skal kunne løse problemet raskt og effektivt setter vi stor pris på å få så mye informasjon som mulig fra deg.');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Velg et av spørsmålene over for å se svaret.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Fyll inn innløsningskoden for gavekortet ditt.');
  define('TEXT_GV_REDEEM_ID', 'Innløsningskode:');
