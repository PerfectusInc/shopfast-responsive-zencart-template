<?php
//
// @package languageDefines Dutch Zen Cart Version 1.5.3
// @ Maintained by Zen4All (http://zen4all.nl)
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
// $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . ' Veelgestelde vragen');
define('HEADING_TITLE', TEXT_GV_NAME . ' Veelgestelde vragen');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Kopen van de ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Sturen van de ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Aankopen doen met de ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Verzilveren van de ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Overige vragen</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE',' Kopen van de ' . TEXT_GV_NAMES . '');
define('SUB_HEADING_TEXT', 'Een '. TEXT_GV_NAMES . ' kan in onze winkel, net als andere artikelen, direct worden gekocht. Het afrekenen gaat op dezelfde manier als bij onze andere artikelen. Na aanschaf wordt de aangekochte waarde van de ' . TEXT_GV_NAME . ' toegevoegd aan uw persoonlijke ' . TEXT_GV_NAME . ' Account. <br /><br />Het totale tegoed van uw ' . TEXT_GV_NAME . ' Account wordt getoond in uw winkelwagen. Dit totale tegoed bestaat uit het reeds aanwezige tegoed in uw Account, vermeerderd met de aangekochte waarde en verminderd met reeds door u verzilverde tegoeden.<br /><br />Naast een overzicht van uw tegoed wordt een link weergegeven. Deze link kunt u gebruiken om uw tegoed in te wisselen <b>en/of</b> een ' . TEXT_GV_NAME . ' aan familie, vrienden, bekenden of zakenrelaties te sturen per e-mail voor iedere waarde die wordt gedekt door uw tegoed.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Versturen van de ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Voor het versturen van een ' . TEXT_GV_NAME . ' als verrassing of teken van waardering aan familie, vrienden, bekenden of zakenrelaties dient u een tegoed te hebben in uw ' . TEXT_GV_NAME . ' Account. Dit kunt u controleren door u aan te melden met uw profiel bij uw Account. Alleen als u een tegoed heeft treft u dit onder het kopje ' . TEXT_GV_NAME . ' Account aan, anders wordt dit kopje niet getoond. Indien u geen tegoed heeft kunt u in onze winkel een ' . TEXT_GV_NAME . ' kopen en deze in uw Account laten bijschrijven. <br /><br /><strong>Er zijn 3 manieren om een ' . TEXT_GV_NAME . ' te versturen:</strong> <ol><li>U gebruikt de link die zichtbaar is in deze sectie "Veelgestelde vragen '. TEXT_GV_NAME . '". Deze link wordt zichtbaar nadat u zich heeft aangemeld met uw profiel bij uw Account.</li><br /><li>U gebruikt de link die zichtbaar is in uw winkelwagen. Deze link wordt zichtbaar nadat u zich heeft aangemeld met uw profiel bij uw Account. Via deze link komt u op de “Verstuur ' . TEXT_GV_NAME . '” pagina.</li><br /><li>U meldt zich aan met uw e-mailadres en wachtwoord. Vervolgens gaat u naar uw Account. Onder het kopje ' . TEXT_GV_NAME . ' Account treft u een link aan naar de “Verstuur ' . TEXT_GV_NAME . '” pagina.</li></ol> Via bovengenoemde link komt u op de “Verstuur ' . TEXT_GV_NAME . '” pagina. Hier treft u een overzicht van uw tegoed. Wanneer u een ' . TEXT_GV_NAME . ' verstuurd vragen wij u de volgende <strong>informatie</strong> te verstrekken:<ol><li>De naam van de ontvanger van de ' . TEXT_GV_NAME . '.</li><li>Het e-mailadres van de ontvanger van de ' . TEXT_GV_NAME . '.</li><li>De waarde van de ' . TEXT_GV_NAME . ' <br />(Aandachtspunt: u hoeft niet de volledige waarde van uw tegoed in uw ' . TEXT_GV_NAME . ' Account te sturen.)</li></ol>In de e-mail krijgt u de mogelijkheid een korte boodschap aan de ontvanger te schrijven. Wij vragen u nadrukkelijk om te zorgen dat <strong>alle informatie</strong> die u verstrekt <strong>compleet en correct</strong> is. Voordat u de e-mail definitiefkunt versturen krijgt u een overzicht van de door u verstrekte informatie. Indien deze informatie compleet en correct is kunt u daarna de e-mail versturen en anders kunt u de foutieve of ontbrekende gegevens nog wijzigen en aanvullen. Daarna kunt u de e-mail definitief versturen.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Aankopen doen met de ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Voor de aankoop van artikelen in onze winkel kunt u gebruik maken van het tegoed dat u heeft in uw ' . TEXT_GV_NAME . ' Account. De hoogte van dit tegoed kunt u bekijken onder uw Account en is ook tijdens het afrekenen zichtbaar.<br /><br />Bij het afrekenen heeft u de mogelijkheid om het gewenste bedrag in te vullen dat u wilt gebruiken van uw tegoed. Indien dit tegoed niet toereikend is om het totale bedrag van uw aankoop te voldoen wordt u gevraagd om ook een andere betaalmethode te selecteren. Ook als u een toereikend tegoed heeft kunt u besluiten om een gedeelte van de bestelling te voldoen vanuit uw tegoed en het resterend gedeelte te betalen vanuit een door u gekozen betalingswijze. Als u er voor kiest het gehele bedrag te voldoen vanuit het tegoed op uw' . TEXT_GV_NAME . ' Account blijft een eventueel resterend tegoed staan. Dit kunt u op ieder gewenst moment gebruiken om aankopen te betalen of voor het versturen van een ' . TEXT_GV_NAME . ' als verrassing of teken van waardering aan familie, vrienden, bekenden of zakenrelaties.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Per e-mail ontvangen ' . TEXT_GV_NAMES .' inwisselen');
  define('SUB_HEADING_TEXT','Als u een ' . TEXT_GV_NAME . ' ontvangt per e-mail bevat dit details van de afzender met mogelijk een korte boodschap van deze afzender. Daarnaast treft u in deze e-mail tevens de ' . TEXT_GV_NAME . ' Inwisselcode aan. Wij raden u aan deze e-mail uit te printen voor toekomstig gebruik. U kunt deze ' . TEXT_GV_NAME . 'op 2 manieren inwisselen:<ol><li>Door te klikken op de link in de e-mail. Dit brengt u op de ' . TEXT_GV_NAME . 'inwisselpagina. U kunt zich aanmelden bij uw profiel in uw Account/Klantgegegevens. Indien u voor het eerst onze winkel bezoekt en dit profiel nog niet heeft aangemaakt wordt u gevraagd om op dat moment het profiel aan te maken. Hierna wordt de' . TEXT_GV_NAME . ' gevalideerd en toegevoegd aan uw ' . TEXT_GV_NAME . ' Account. Dit tegoed is nu direct beschikbaar voor aankoop van elk artikel in onze winkel.</li><li>Tijdens het afrekenen heeft u bij de keuze van een betaalmethode de mogelijkheid om de ' . TEXT_GV_NAME . ' Inwisselcode in te vullen en de knop “Verder” in te drukken. De inwisselcode wordt gecontroleerd en geaccordeerd en het tegoed wordt toegevoegd aan uw ' . TEXT_GV_NAME . ' Account. Indien u meerdere ' . TEXT_GV_NAME . ' Inwisselcodes heeft kunt u deze handeling herhalen. Het nieuwe tegoed is direct zichtbaar en kan worden gebruikt voor het afrekenen van iedere aankoop in onze winkel. Om een bedrag in mindering te brengen op uw factuur vult u tijdens het afrekenen een bedrag is dat wordt gedekt door het tegoed op uw ' . TEXT_GV_NAME . ' Account en drukt op de knop “Verder”. Het nieuwe totaalbedrag van uw bestelling wordt direct zichtbaar. </li>');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Overige vragen '. TEXT_GV_NAME . '.');
  define('SUB_HEADING_TEXT','Voor alle vragen die betrekking hebben op het ' . TEXT_GV_NAME . ' systeem kunt u contact opnemen met de <a href="' . zen_href_link(FILENAME_CONTACT_US) .'">Klantenservice</a>. Uw probleem of vraag kan spoedig worden verholpen als u zo veel mogelijk informatie verstrekt over het hoe, wat, waarom en wanneer van de problemen.');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Kies uit een van de bovenstaande vragen.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Voer uw ' . TEXT_GV_NAME . ' inwisselcode in: ');
  define('TEXT_GV_REDEEM_ID', 'Inwisselcode:');
?>