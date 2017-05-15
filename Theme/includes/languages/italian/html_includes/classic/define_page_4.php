<h2>CONFIGURAZIONI &amp; NOTE </h2>
<br />
Con l'installazione sono stati inseriti i dati fondamentali (nome e recapiti) si deve preparare il negozio alla piena operativit&agrave;.<br />
Le operazioni ora si effettuano dal <b>Pannello di Amministrazione</b>, la situazione:<br />
- localizzazione per idioma italiano &egrave; ok!<br /> 
- tasse: IVA 21% inserita di default,<br />&egrave; possibile aggiungere ulteriori aliquote
<br />Di seguito cosa fare passo passo:<br /><br />
<b>Pannello di Amministrazione > Configurazione > Il mio negozio</b><br />
- Telefono - Servizio Clienti: inserire ...<br />
- Dati fiscali del Negozio: inserire i dati per il footer negozio, come Partita IVA e per srl/spa il capitale sociale I.V.<br />
- Calcolo Tasse Prodotti basato su: la scelta &egrave; fra Shopping (consigliata per l'Italia), Billing (in riferimento all'indirizzo del cliente) e Store (in riferimento alla localizzazione del negozio).<br />
- Calcolo Tasse Spedizione basato su: la scelta anche qui &egrave; fra Shopping (consigliata), Billing e Store.<br />
<br />
<b>Pannello di Amministrazione > Configurazione > Immagini</b><br />
- controllare che le dimensioni delle immagini siano adeguate alle esigenze di impaginazione del negozio, predisporre immagini con il medesimo rapporto altezza / larghezza ed ottimizzarle per il web.<br />NO immagini brutte, mal dimensionate e pesanti !!!<br />
<br />
<b>Pannello di Amministrazione > Configurazione > Info Cliente</b><br />
Da qui si selezionano i dati cliente da richiedere e/o da visualizzare, dal Paese di default all'atto dell'iscrizione alla data di nascita, sesso, newsletter ecc. Qui si potr&agrave; inoltre decidere se il cliente debba essere autorizzato ad accedere al negozio, vedere prezzi, acquistare subito o solo previa autorizzazione<br />
<br />
<b>Pannello di Amministrazione > Configurazione > Valori minimi</b><br />
- in dettaglio quanto richiesto all'atto dell'iscrizione, per rendere obbligatori alcuni dati (es: codice fiscale / partita iva) andranno inseriti dei valori congrui e per fare in modo che compaia l'asterisco che identifica il campo come obbligatorio si deve agire nel file di define in > includes > languages > italian > extra_definitions > <b>fiscal_def.php</b> e modificare le define ENTRY_VAT_TEXT e ENTRY_CF_TEXT nel seguente modo:<br />
define('ENTRY_VAT_TEXT', '*');<br />
define('ENTRY_CF_TEXT', '*');<br />
<br />
<b>Pannello di Amministrazione > Configurazione > Spedizioni / Imballo</b><br />
Settare il paese di origine (selezionare Italia da menu a cascata).<br />
Settare il Codice di Avviamento Postale (per il calcolo dei costi di spedizione).<br />
<br />
<b>Pannello di Amministrazione > Configurazione > Opzioni Email</b><br />
Se si intende inviare email su base HTML, attivare la funzione MIME HTML <br />Molte opzioni sono disponibili, tra cui settare l'indirizzo Email e lo status di tutte le "extra" email, le copie inviate all'Amministratore quando i vari messaggi vengono spediti ai/dai Clienti.<br />
<br />
Per eventuali <b>personalizzazioni testo mail</b> inviate ai clienti la filosofia &egrave;: 
guarda nel file di traduzione della pagina del meccanismo (via FTP)<br />
mail post iscrizione includes > languages > (idioma) > create_account.php<br />
mail di spedizioni in includes > languages > (idioma) > modules > shipping > ... relative pagine<br />
mail dei pagamenti in includes > languages > (idioma) > modules > payment > ... relative pagine<br />
<br />
<b>Altre cose importanti da vedere con la dovuta calma ed attenzione:</b><br /><br />
In questa come in tutte le installazioni sono presenti due cartelle:<br />
Una <b>docs</b> (<a href="./docs" target="_blank"><u>apri e vedi</u></a>) raccoglie la documentazione relativa a questa versione, e tutta una serie di indicazioni e/o informazioni attinenti sia le funzionalit&agrave; che la sicurezza.<br />
L'altra <b>email</b> (apri via FTP e vedi in dettaglio) contiene un logo, una immagine buono sconto e tutti i template per le versioni HTML dei vari tipi di mail inviate (non il testo ma come viene presentato!).<br /><br />
Ricordando che molti client di posta tendono a marcare come SPAM le mail HTML con link ad immagini ricordiamo che se l'implementazione &egrave; curata in ogni dettaglio il risultato &egrave; decisamente professionale.<br />
<br /><br />
<b>La flessibilit&agrave; di questo software</b> &egrave; tale che permette di personalizzare in ogni dove parti della struttura che possono essere quindi profilate il pi&ugrave; possibile all'esigenza di ogni aspettativa e di ogni negozio.<br /><br />
Lo strumento pi&ugrave; interessante per la completa gestione e personalizzazione del Sito &egrave; il Developers Tool Kit, posto nel Pannello di Amministrazione, in Strumenti. Sar&agrave; possibile usarlo per cercare quasi qualche cosa che potr&agrave; essere adattata o sostituita, in particolare il testo visualizzato sul Sito.
<br /><br />
<b>Ribadendo l'invito a leggere</b> le FAQ - Domande Frequenti, la documentazione ed i manuali e seguire il Forum di supporto al fine di 
configurare prima e predisporre dopo il negozio nella maniera migliore e pi&ugrave; veloce e  nel ringraziarVi nuovamente per la scelta effettuata e per l'attenzione dedicata a questa lettura, ricordiamo che <strong>il software &egrave; gratuito</strong> ma l'impegno del Team Americano prima ed Italiano poi conta anche sul sostegno delle donazioni che consentono di investire in mezzi e persone. <strong><a href="http://sourceforge.net/donate/index.php?group_id=180704" target="_blank">Ogni donazione &egrave; gradita</a>!</strong><br /><br />
Per questo come per ulteriori informazioni relative alla struttura, utilizzo e gestione di Zen Cart visitate <a href="http://www.zen-cart.it/" target="_blank"><b>zen-cart.it</b></a>: a disposizione pagine di documentazione, manuali, domande frequenti (FAQ) ed un ottima funzione di ricerca per parole chiave.<br />
<hr /><div id="welcometext"><br />
<h2 align="center">Hai gradito questa spiegazione?</h2><br />
<h3 align="center">
<a href="http://www.zen-cart.it/manuale-operativo-zen-cart/" target="_blank"><u>Acquista il Manuale Operativo di Zen Cart</u><br />
<br />
<img src="images/banners/manuale_zen.gif" alt="Manuale Zen Cart Italia" title=" Manuale Zen Cart Italia " height="60" width="480">


</a></h3>
<br /></div>
<hr /><h3>Pagina 3 di 3 - <a href="index.php?main_page=page_2">Torna all'inizio</a></h3><hr />
