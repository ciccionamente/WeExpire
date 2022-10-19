<?php

/**
* Translations for page contents
* Language: Italian
*/

$translation = array();

// Title
$translation["title"] = "WeExpire - Più semplice di un testamento, più sicuro di una nota.";

// Description for search engines (max 160 characters)
$translation["meta_description"] = "Crea note di emergenza che possono essere lette dai tuoi contatti fidati solo dopo la tua morte o se sei stato gravemente compromesso.";

// Description for social media (max 100 characters)
$translation["social_media_description"] = "Crea note di emergenza che possono essere lette dai tuoi contatti fidati solo dopo la tua morte.";

// Footer section
$translation["footer_language"] = "Lingua";
$translation["footer_about"] = "Su di noi";
$translation["footer_donate"] = "Dona";
$translation["footer_contact"] = "Contattaci";
$translation["footer_legal"] = "Informative";
$translation["footer_privacy"] = "Privacy";
$translation["footer_terms"] = "Termini";

// Buttons
$translation["button_get_started"] = "Crea la tua nota";
$translation["button_create_another_one"] = "Crea un'altra nota";
$translation["button_create_your_emergency_note"] = "Crea la tua nota d'emergenza";
$translation["button_next"] = "Continua";
$translation["button_confirm"] = "Conferma";
$translation["button_get_emergency_note"] = "Scarica il documento";

// Landing page
$translation["landing_page_headline"] = "Più semplice di un testamento,<br class='d-none d-sm-block'> più sicuro di una nota.";
$translation["landing_page_secondary_headline"] = "WeExpire è uno strumento opensource per creare note di emergenza che possono essere lette dai tuoi contatti fidati solo dopo la tua morte o se sei stato gravemente compromesso.";

$translation["landing_page_section_1_title"] = "Come funziona";
$translation["landing_page_section_1_description"] = "Dopo aver scritto la tua nota, questa viene criptata e convertita in un codice QR che puoi lasciare alla persona di cui ti fidi. Quando questa persona proverà ad accedere al messaggio che gli hai lasciato, WeExpire proverà subito a contattarti via email: se non rispondi entro un certo lasso di tempo definito in precedenza da te, la tua nota diventerà visibile.";

$translation["landing_page_section_2_title"] = "Perchè dovrei usarlo?";
$translation["landing_page_section_2_description"] = "Indipendentemente dalla età, stato di salute, status sociale o se si vive in una zona di conflitto, tutti un giorno moriremo o potremmo rimanere gravemente compromessi. Lasciare una nota alle persone di cui ti fidi ti permetterà di dargli un tuo ultimo messaggio ed eventualmente esaudire le tue ultime richieste.";

$translation["landing_page_section_3_title"] = "Non salviamo i tuoi dati";
$translation["landing_page_section_3_description"] = "A differenza di altre piattaforme, su WeExpire non c'è bisogno di registrare alcun account. Infatti i tuoi dati rimangono solo ed esclusivamente nel codice QR che viene generato ed successivamente stampato. Se non ci credi, <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>puoi dare una occhiata al codice sorgente</a>.";

$translation["landing_page_section_4_title"] = "Sicuro";
$translation["landing_page_section_4_description"] = "La tua nota viene criptata usando <a href='https://wikipedia.org/wiki/Advanced_Encryption_Standard' target='_blank'>l'algoritmo AES-256-CTR</a> e il relativo codice di accesso è generato in modo casuale. E anche se WeExpire venisse hackerato, nessuna nota può essere ottenuta perchè una volta che sono state generate non vengono archiviate su WeExpire.";

$translation["landing_page_section_5_title"] = "Veloce e non profit";
$translation["landing_page_section_5_description"] = "Su WeExpire puoi creare la tua nota di emergenza in meno di 3 minuti, gratuitamente. Crediamo che scrivere un ultimo messaggio digitale debba essere qualcosa di facile e alla portata di chiunque nel mondo. Se hai voglia di aiutare il progetto, puoi contribuire con una semplice <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>donazione</a>.";

// Start page
$translation["start_page_title"] = "Crea la tua nota d'emergenza";
$translation["start_page_subject_input_title"] = "Oggetto della nota";
$translation["start_page_subject_input_hint"] = "Non scrivere dati sensibili in questo campo ma solo un sommario della tua nota";
$translation["start_page_note_input_title"] = "Nota d'emergenza";
$translation["start_page_note_input_hint"] = "Puoi scrivere fino a un massimo di 1000 caratteri";
$translation["start_page_primary_email_input_title"] = "Il tuo indirizzo email principale";
$translation["start_page_primary_email_input_hint"] = "Assicurati che questo sia l'indirizzo che utilizzi ogni giorno";
$translation["start_page_secondary_email_input_title"] = "Il tuo indirizzo email secondario (opzionale)";
$translation["start_page_secondary_email_input_hint"] = "Questo indirizzo email può tornare utile nel caso in cui il tuo indirizzo principale è stato compromesso o diventi inaccessibile";
$translation["start_page_secondary_email_input_error"] = "Per favore inserisci un indirizzo email differente da quello principale";
$translation["start_page_inactivity_input_title"] = "Tempo di inattività";
$translation["start_page_inactivity_input_hint"] = "Dopo quanto tempo dalla tua inattività il tuo contatto fidato potrà avere accesso alla tua nota?";
$translation["start_page_inactivity_input_day"] = "giorno";
$translation["start_page_inactivity_input_days"] = "giorni";
$translation["start_page_inactivity_input_month"] = "mese";
$translation["start_page_inactivity_input_months"] = "mesi";
$translation["start_page_expiration_input_title"] = "Scadenza della nota (opzionale)";
$translation["start_page_expiration_input_hint"] = "Quando questa nota deve scadere e diventare totalmente inaccessibile?";

// Review page
// Avoid warning errors when visiting a page different than the review page by just checking first if the subject variable exists
if (isset($_SESSION["subject"])) {
$translation["review_page_title"] = "Ricapitoliamo";
$translation["review_page_information_1"] = "L'oggetto della tua nota è <b>'{$_SESSION["subject"]}'</b>.";
$translation["review_page_information_2"] = "Il contenuto della tua nota è <b>'{$_SESSION["note"]}'</b>.";
$translation["review_page_information_3_a"] = "Non appena il tuo contatto fidato proverà ad accedere a questa nota, WeExpire ti invierà una notifica email a <b>{$_SESSION["primary_email"]}</b> e a <b>{$_SESSION["secondary_email"]}</b>.";
$translation["review_page_information_3_b"] = "Non appena il tuo contatto fidato proverà ad accedere a questa nota, WeExpire ti invierà una notifica email a <b>{$_SESSION["primary_email"]}</b>.";
$translation["review_page_information_4_a"] = "Se nessuna azione verrà intrapresa da te entro <b>{$_SESSION["inactivity_time"]} giorno</b>, il tuo contatto fidato potrà successivamente leggere il contenuto della nota.";
$translation["review_page_information_4_b"] = "Se nessuna azione verrà intrapresa da te entro <b>{$_SESSION["inactivity_time"]} giorni</b>, il tuo contatto fidato potrà successivamente leggere il contenuto della nota.";
$translation["review_page_information_5_a"] = "Questa nota non scadrà mai.";
$translation["review_page_information_5_b"] = "Questa nota scadrà il <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (GG/MM/AAAA) e dopodiché nessuna persona potrà mai leggerne il contenuto.";
$translation["review_page_information_6"] = "Questa nota non potrà essere cambiata in futuro.";
$translation["review_page_information_7"] = "Accetti i <a href='/terms.php' target='_blank'>termini e le condizioni d'uso</a>.";
}

// Done page
$translation["done_page_title"] = "Tutto fatto";
$translation["done_page_content"] = "
<p class='text-center'>La tua nota d'emergenza è stata creata. Puoi scaricarla attraverso il pulsante sottostante e successivamente stamparla e consegnarla alla tua persona fidata.</p>
<p class='text-center'><b><mark>Molto importante!</mark></b> Aggiungi l'indirizzo <b>support@weexpire.org</b> nella lista dei mittenti sicuri del tuo email provider per evitare che qualsiasi nostra notifica in riferimento alla nota che hai appena creato finisca erroneamente nello spam.</p>";
$translation["done_page_donate_message"] = "<p class='text-center'><small>Supporta WeExpire con una <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>donazione</a>.</small></p>";

// Access page
$translation["access_page_title"] = "Leggi la nota";
$translation["access_page_access_code_input_title"] = "Inserisci il codice di accesso";
$translation["access_page_access_code_input_error"] = "Il codice di accesso che hai inserito o la nota a cui stai provando ad accedere non sono validi.";

// Note page
// Avoid warning errors when visiting a page different than the note page by just checking first if the creation date time or grant access variables exist
if (isset($creation_date_time) or isset($_SESSION['grant_access'])) {
$translation["note_page_title"] = "Leggi la nota";
$translation["note_page_waiting_message"] = "<p class='text-center'>Il codice d'accesso per questa nota è stato verificato correttamente. Tuttavia per leggerne il contenuto è necessario attendere il <b>".date("d/m/Y", strtotime($_SESSION['grant_access']))."</b> (GG/MM/AAAA).</p>
<p class='text-center'>Questo tempo di attesa dipende dal tempo di inattività scelto da chi ha creato questa nota. Ti invitiamo dunque a riprovare ad accedere nuovamente nella data indicata, ovvero quando il tempo di inattività sarà stato superato.</p>";
$translation["note_page_blocked_message"] = "<p class='text-center'>L'accesso a questa nota è stato temporaneamente bloccato da chi la ha creata.</p>";
$translation["note_page_expired_message"] = "<p class='text-center'>Questa nota è scaduta e non può più essere letta.</p>";
$translation["note_page_allowed_message_no_expiration"] = "
<p>Questa nota è stata creata il ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (GG/MM/AAAA, UTC+1).</p>
<p>Perfavore salva o stampa questa nota in quanto se chiudi questa pagina dovrai nuovamente effettuare l'accesso e attendere il periodo di inattività scelto da chi ha creato questa nota.</p>
<p><b>Oggetto:</b> {$subject}</p>
<p><b>Messaggio:</b> {$note}</p>";

$translation["note_page_allowed_message_with_expiration"] = "
<p>Questa nota è stata creata il ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (GG/MM/AAAA, UTC+1) e il suo accesso scadrà definitivamente il ".date("d/m/Y", strtotime($expiration_date))." (GG/MM/YYYY).</p>
<p>Perfavore salva o stampa questa nota in quanto se chiudi questa pagina dovrai nuovamente effettuare l'accesso e attendere il periodo di inattività scelto da chi ha creato questa nota.</p>
<p><b>Oggetto:</b> {$subject}</p>
<p><b>Messaggio:</b> {$note}</p>";
}

// Block page
$translation["block_page_title"] = "Tutto a posto";
$translation["block_page_content"] = "Qualsiasi eventuale accesso a questa nota è stato bloccato per i successivi 60 giorni.";

// Error page
$translation["error_page_title"] = "Qualcosa è andato storto";
$translation["error_page_content"] = "Si è verificato un errore. Per favore contattaci qualora questo problema dovesse persistere.";

// PDF document
// Avoid warning errors when visiting a page different than the pdf document by just checking first if the creation date time variable exists
if (isset($_SESSION['creation_date_time'])) {
$translation["pdf_document_no_expiration"] = "
<p>Questo documento è stato creato su WeExpire.org, una piattaforma per creare note di emergenza che possono essere lette dai contatti fidati solo dopo la propria morte o se si è stati gravemente compromessi.</p>
<p>Per leggere la seguente nota d'emergenza, scannerizza il codice QR e successivamente inserisci questo codice d'accesso: <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Oggetto della nota: <b>{$_SESSION["subject"]}</b>
<p>Data di creazione della nota: <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (GG/MM/AAAA, UTC+1)</p>
<p></p><p></p>
<p>Spazio per altri commenti e/o firma:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";

$translation["pdf_document_with_expiration"] = "
<p>Questo documento è stato creato su WeExpire.org, una piattaforma per creare note di emergenza che possono essere lette dai contatti fidati solo dopo la propria morte o se si è stati gravemente compromessi.</p>
<p>Per leggere la seguente nota d'emergenza, scannerizza il codice QR e successivamente inserisci questo codice d'accesso: <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Oggetto della nota: <b>{$_SESSION["subject"]}</b>
<p>Data di creazione della nota: <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (GG/MM/AAAA, UTC+1)</p>
<p>Data di scadenza della nota: <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (GG/MM/AAAA, UTC+1)</p>
<p></p><p></p>
<p>Spazio per altri commenti e/o firma:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";
}

// Privacy Policy page
$translation["privacy_page_title"] = "Privacy";
$translation["privacy_page_content"] = "<p>Il nostro obiettivo principale è rispettare a pieno la privacy dell'utente. WeExpire non raccoglie alcun dato personale o informazione di identificazione personale (PII) e questo può essere verificato anche controllando il nostro <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>codice opensource</a>.</p>
<p>Utilizziamo <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a> che è uno strumento che analizza dati di traffico del sito conforme a GDPR, CCPA e alla legge sui cookie. Questo servizio non raccoglie dati personali o informazioni di identificazione personale (PII), non utilizza cookie e rispetta la privacy dei visitatori del sito.</p>
<p>Utilizziamo cookie di sessione persistenti, necessari solo per utilizzare la nostra applicazione e per creare la tua nota di emergenza.</p>
<p>Tutti i dati vengono crittografati tramite SSL/TLS quando vengono trasmessi dai nostri server al tuo browser.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Il nostro hosting provider</a> archivia i registri di accesso e di sicurezza per un massimo di 30 giorni al fine di monitorare e mantenere la sicurezza dei propri server. Non abbiamo alcun controllo su questi dati.</p>
<p>Potremmo aggiornare questa politica in futuro secondo le necessità per conformarci alle normative pertinenti e riflettere eventuali nuove pratiche.</p>
<p>Ultimo aggiornamento: 28 Giugno 2022.</p>";

// Terms of Service page
$translation["terms_page_title"] = "Termini e condizioni d'uso";
$translation["terms_page_content"] = "
<p>Quando diciamo 'WeExpire', 'We Expire', 'noi', 'nostro', 'noi', 'servizio' o 'servizi' in questo documento, ci riferiamo a WeExpire.org. WeExpire.org è un servizio opensource e senza scopo di lucro.</p>
<p>I seguenti Termini di servizio si applicano a WeExpire.org e a qualsiasi documento o nota di emergenza generata tramite il nostro servizio. Questi Termini di servizio potrebbero essere aggiornati in futuro. Se non accetti questi Termini di servizio, ti preghiamo di non utilizzare questo servizio.</p>
<p>Quando utilizzi il nostro servizio, ora o in futuro, accetti i Termini di servizio più recenti. Questo vale anche per tutti i nostri prodotti o funzionalità esistenti e future che verranno aggiunti al nostro servizio.</p>
<p>Non offriamo servizi di scrittura di testamenti ufficiali o legalmente riconosciuti. Non garantiamo che le note di emergenza generate tramite il nostro servizio siano sempre accessibili e leggibili.</p>
<p>Tu o gli altri che possiedono note di emergenza siete i responsabili del mantenimento della sicurezza delle vostre note di emergenza. Non possiamo e non saremo responsabili per eventuali perdite o danni derivanti dal mancato rispetto di questo obbligo di sicurezza.</p>
<p>Sei responsabile di qualsiasi attività che si verifica con le tue note di emergenza, anche da parte di chi riceve le tue note di emergenza.</p>
<p>Sei responsabile del contenuto delle tue note di emergenza.</p>
<p>Sei responsabile della correttezza e della proprietà degli indirizzi e-mail forniti durante la creazione della nota di emergenza.</p>
<p>Non puoi utilizzare il nostro servizio per scopi illegali o per violare le leggi nella tua giurisdizione.</p>
<p>Devi essere un essere umano. Non sono consentite note di emergenza generate da bot o da altri metodi automatizzati.</p>
<p>Possiedi tutti i diritti, il titolo e l'interesse per le tue note di emergenza. Non otteniamo alcun diritto da te sulle tue note di emergenza. Non raccogliamo e analizziamo le tue informazioni personali e non utilizziamo analisi comportamentali per vendere annunci pubblicitari.</p>
<p>Non raccoglieremo né memorizzeremo mai alcuna informazione di identificazione personale e non abuseremo mai della tua privacy da visitatore e utilizzatore dei nostri servizi. Non venderemo né condivideremo mai i tuoi dati personali a terzi.</p>
<p>L'utilizzo del nostro servizio è a tuo esclusivo rischio. Il servizio viene fornito 'così com’è' e senza garanzia di alcun tipo.</p>
<p>Non garantiamo che il nostro servizio soddisfi i tuoi requisiti o aspettative specifici. Non garantiamo servizi completamente privi di errori o bug.</p>
<p>Il supporto tecnico è fornito tramite e-mail. Le risposte e-mail vengono fornite i maniera ragionevole e senza tempi di risposta garantiti.</p>
<p>Comprendi e accetti espressamente che WeExpire.org non sarà responsabile, per legge o in equità, nei tuoi confronti o nei confronti di terzi per eventuali danni diretti, indiretti, incidentali, mancati di profitto, danni speciali, consequenziali, punitivi o esemplari, inclusi, ma non limitati a, danni per mancato guadagno, perdita di avviamento, mancato utilizzo, perdita di dati o altre perdite immateriali (anche se WeExpire.org è stato avvisato della possibilità di tali danni), risultanti da:
  <ol>
  <li>l’utilizzo o l'impossibilità di usufruire dei servizi;;</li>
  <li>il costo di approvvigionamento di beni e servizi sostitutivi risultanti da beni, dati, informazioni o servizi acquistati o ottenuti o messaggi ricevuti o transazioni effettuate tramite o dai servizi;</li>
  <li>accesso non autorizzato o alterazione delle tue trasmissioni o dei tuoi dati;</li>
  <li>dichiarazioni o comportamenti di terzi sul servizio;</li>
  <li>o qualsiasi altra questione relativa ai presenti Termini di servizio o ai servizi, sia come violazione del contratto, illecito civile (compresa la negligenza attiva o passiva) o qualsiasi altra teoria di responsabilità.</li>
  </ol>
  </p>
<p>Il presente accordo è regolato dalle leggi italiane e i tribunali italiani hanno giurisdizione esclusiva per ascoltare e determinare tutte le questioni che possono sorgere ai sensi o in relazione al presente accordo.</p>
<p>Ultimo aggiornamento: 8 Agosto 2022.</p>
";

?>
