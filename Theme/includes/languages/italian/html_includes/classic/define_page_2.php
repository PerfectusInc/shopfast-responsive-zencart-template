<h2>1.5.0 - PROCEDURE PER UNA PRIMA CONFIGURAZIONE</h2><br />
Una volta terminata l'installazione di Zen Cart,<ol>
	<li>rimossa la cartella di installazione,<br /></li>
	<li>rinominata la cartella <strong>/admin</strong> in /quello-che-vuoi<br /></li>
	<li>e dopo aver correttamente settato i permessi dei 2 file configure.php, senza quindi pi&ugrave; messaggi di errore,<br /></li></ol>
sar&agrave; possibile iniziare a personalizzare lo store. Non &egrave; assolutamente difficile, anzi una volta compreso il funzionamento del sistema e capito "cosa" modificare "dove" e "come" il tutto risulter&agrave;, speriamo anche divertente.<br />
<br />
<h3 align="center">Buona continuazione con Zen Cart!</h3>
<br />
Il consiglio è di cominciare subito accedendo al pannello di amministrazione per familiarizzare con il contenuto; iniziare da <b>Configurazione</b> "Info Negozio" dove controllare quanto inserito ed aggiungere  i dati mancanti come il numero per assistenza clienti ed i dati fiscali obbligatori. &Egrave; inoltre importante verificare la programmazione cos&igrave; da settare tutto l'insieme secondo le proprie specifiche esigenze, il mercato di riferimento ecc... (in dettaglio a pag. 4)<br /><br />

<h4 class="productSpecialPrice" style="padding: 0pt 90px;">&Egrave; fondamentale in questa fase investire il tempo necessario alla scoperta di ogni singola voce e dei parametri presenti nei vari men&ugrave;.</h4>

<br />
Per avere un minimo supporto sotto mano &egrave; opportuno salvare o stampare queste tre pagine; ideale sarebbe per&ograve; l'acquisto del manuale di Zen Cart che spiega tutto il pannello nel dettaglio, voce per voce e come ottenere il massimo della resa da questo potente e flessibile sistema.
<br /><br />
Decidendo di modificare file di codice.php o degli idiomi direttamente dai sorgenti Zen Cart, questi potrebbero essere sovrascritti nell'affrontare un aggiornamento con il rischio di perdere tutte le modifiche apportate, per ovviare a questo possibile incidente, Zen Cart offre il sistema denominato <strong>Over-Ride</strong> che permette di evitare sovrascritture accidentali storando i file in determinate aree. Usare questa funzionalit&agrave; significa partire con il piede giusto. 
<br /><br />
Il sistema Over-Ride <strong>deve essere utilizzato</strong> per i file del template, per i blocchi laterali, per i contenuti testuali delle pagine statiche (come queste), per i nomi di pagine e bottoni ed anche per le tabelle del database e delle specifiche funzioni eventualmente implementate.<br /><br />
Insomma per tutte le modifiche apportate al design o alle funzionalit&agrave; o alla struttura del <strong>proprio negozio</strong> online.
<br /><br />
Se volete, per esempio, creare un nuovo template (o caricarne uno acquistato), &egrave; necessario identificare <strong>TUTTE</strong> le cartelle che hanno il nome <strong>Classic</strong> e rinominarle con il nome del template che si utilizzer&agrave; (NB: sia che lo si crei modificando l'esistente classic o che sia stato acquistato!).<br /><br />
Di seguito utilizzeremo il nome <strong>[tuo_template]</strong> solo a titolo di esempio e per convenzione.<br /><br />
<h4 align="center">Ecco dove trovare via FTP le cartelle Classic:</h4>
<ul style="list-style: square outside none; padding: 4px 50px;" id="welcometext">
<li>/includes/languages</li><li>
/includes/languages/english</li><li>
/includes/languages/english/extra_definitions</li><li>
/includes/languages/english/html_includes</li><li>
/includes/languages/english/modules/order_total</li><li>
/includes/languages/english/modules/payment</li><li>
/includes/languages/english/modules/shipping</li><li>
/includes/languages/italian</li><li>
/includes/languages/italian/extra_definitions</li><li>
/includes/languages/italian/html_includes</li><li>
/includes/languages/italian/modules/order_total</li><li>
/includes/languages/italian/modules/payment</li><li>
/includes/languages/italian/modules/shipping</li><li>
/includes/modules</li><li>
/includes/modules/sideboxes</li><li>
/includes/templates</li></ul>
<br />
Per modificare il template - da quello originale <strong>classic</strong> - copiate e rinominate la cartella in <strong>tuo_template</strong>:<br />
in /includes/templates/tuo_template, aprire il file <strong>template_info.php</strong><br />e ricompilare a piacimento i campi, ricordando di salvare logo o immagini nella cartella del nuovo template in uso:<br />
/includes/templates/tuo_template/images.<br />
<br />Struttura del file <strong>template_info.php</strong><br />
<div style="padding: 8px;" id="welcometext">
$template_name = 'New Italian Classic "Stylissimo"';<br />
$template_version = 'Version 1.5.0 - 1';<br />
$template_author = 'Zen Cart Italia Team (c) 25.01.2012';<br />
$template_description = 'Template realizzato dal team di ZEN CART ITALIA per la nuova versione Zen Cart 1.5.0. Risulta agevolmente personalizzabile per colori e immagini che lo compongono agendo nei file CSS e nella cartella images.';<br />
$template_screenshot = 'scr_template_default.jpg';<br />
</div>
<br /><br />
NB: $template_name "New Italian Classic "Stylissimo" nome da cambiare con "Nome del Tuo Template" in modo da identificarlo nell'elenco in gestione template!<br /><br />

<h4 align="center">Personalizzare i collegamenti "Social" del Footer:</h4>

Per poter cambiare i collegamenti "Social" presenti nel footer o piede di tutte le pagine del sito, si deve accedere via FTP per agire nel file <strong>tpl_footer.php</strong> in:
<ul style="padding: 4px 12px;" id="welcometext">
	<li>/includes/templates/classic/common/</li>
</ul>
Il codice presente a titolo di esempio dimostra come porre il collegamento in riferimento all'icona presente. Nella stessa cartella immagini "/images/x-social/" sono inoltre presenti tutta una gamma di icone sociali a disposizione per poter personalizzare al meglio il proprio store.<br /><br />
<img src="images/x-social/newsvine.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/orkut.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/picasa.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/pownce.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/reddit.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/stumbleupon.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/technorati.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/tumblr.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/twitter.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/vimeo.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/webshots.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/yahoo.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/yelp.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/youtube.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/blogger.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/delicious.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/digg.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/facebook.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/feed.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/flickr.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/foursquare.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/friendfeed.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/friendster.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/furl.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/google.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/googleplus.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/instagr.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/lastfm.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/linkedin.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/livejournal.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/magnolia.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/mixx.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/myspace.png" alt="" height="24" hspace="4" width="24"> <img src="images/x-social/netvibes.png" alt="" height="24" hspace="4" width="24">
<br /><br />

<h2>INSTALLAZIONE DEL NUOVO TEMPLATE</h2><br />
Per utilizzare questo nuovo template nel negozio procedere nel <strong>Pannello di Amministrazione</strong>, in <strong>Strumenti</strong> ---&gt; <strong>Scegli Template</strong> ---&gt; <strong>Modifica</strong> nell'elenco sar&agrave; presente il nuovo inserimento con il "Nome del Tuo Template".<br />A questo punto, digitato <strong>Aggiorna</strong>, se entrate nella Home del negozio, vedrete che non compariranno i box laterali.
<br /><br />
Per risolvere, dopo aver rinominato le cartelle classic viste precedentemente con il nome dell'attuale template in uso, baster&agrave; procedere sempre nel pannello di amministrazione in <strong>Strumenti</strong> ---&gt; <strong>Gestione Box Laterali</strong> e cliccare il tasto al fondo pagina: <strong>Resetta</strong>.<br /><br />
Se la procedura &egrave; stata correttamente eseguita il template e relativo over ride funzioner&agrave; come previsto.<br />
<hr /><h3>Pagina 1 di 3 - <a href="index.php?main_page=page_3">Continua ...</a></h3><hr />
