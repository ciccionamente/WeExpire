<?php

/**
* Translations for page contents
* Language: Italian
*/

$translation = array();

// Title
$translation["title"] = "WeExpire - Più semplice di un testamento, più sicuro di una nota.";

// Description for search engines (max 160 characters)
$translation["meta_description"] = "WeExpire ti permette di creare note di emergenza che possono essere lette dai tuoi contatti fidati solo dopo la tua morte o se sei stato gravemente compromesso.";

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
$translation["button_next"] = "Avanti";
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

$translation["landing_page_section_5_title"] = "Non profit";
$translation["landing_page_section_5_description"] = "WeExpire è un progetto non profit ed è completamente gratuito. Se hai comunque voglia di aiutare il progetto, puoi contribuire con una <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>donazione</a>.";

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
<p class='text-center'><b>Molto importante!</b> Aggiungi l'indirizzo <b>support@weexpire.org</b> nella lista dei mittenti sicuri del tuo email provider per evitare che qualsiasi nostra notifica in riferimento alla nota che hai appena creato finisca erroneamente nello spam.</p>";

// Access page
$translation["access_page_title"] = "Leggi la nota";
$translation["access_page_access_code_input_title"] = "Inserisci il codice di accesso";
$translation["access_page_access_code_input_error"] = "Il codice di accesso che hai inserito o la nota a cui stai provando ad accedere non sono validi.";

// Note page
// Avoid warning errors when visiting a page different than the note page by just checking first if the creation date time variable exists
if (isset($creation_date_time)) {
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
$translation["privacy_page_content"] = "<p>Our guiding principle is to deeply respect user's privacy. WeExpire doesn't collect any personal data or personally identifiable information (PII) and this can be also verified by checking our <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>opensource code</a>.</p>
<p>We do use <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a> which is a GDPR, CCPA and cookie law compliant site analytics. This service doesn't collect any personal data or personally identifiable information (PII), doesn't use cookies and respects the privacy of the website visitors.</p>
<p>We do use persistent first-party session cookies, necessary only to use our application and for you to create your emergency note.</p>
<p>All data is encrypted via SSL/TLS when transmitted from our servers to your browser.</p>
<p>We may update this policy in the future as needed to comply with relevant regulations and reflect any new practices.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Our hosting provider</a> stores access and security logs for up to 30 days in order to monitor and maintain their servers security. We have no control on this data.</p>
<p>Last updated: May 1, 2022</p>";

// Terms of Service page
$translation["terms_page_title"] = "Termini e condizioni d'uso";
$translation["terms_page_content"] = "
<p>When we say 'WeExpire', 'We Expire', 'we', 'our', 'us', 'service' or 'services' in this document, we are referring to WeExpire.org. WeExpire.org is an opensource and non-profit service.</p>
<p>The following Terms of Service apply to WeExpire.org and to any document or emergency note generated via our service. These Terms of Service might be updated in the future. If you do not agree to these Terms of Service, please do not use this service.</p>
<p>When using our service, now or in the future, you are agreeing to the latest Terms of Service. This is also true for any of our existing and future products or features that we will be added to our service.</p>
<p>We do not offer any official or legally recognized will writing services. We do not guarantee that the emergency notes generated via our service will be always accessible and readable.</p>
<p>You or the others who own emergency notes are responsible for maintaining the security of your emergency notes. We cannot and will not be liable for any loss or damage from your failure to comply with this security obligation.</p>
<p>You are responsible for any activity that occurs with your emergency notes, even by the others who own your emergency notes.</p>
<p> You are responsible for the content of your emergency notes.</p>
<p>You are responsible for the correctness and ownership of the email addresses you provide during the creation of the emergency note.</p>
<p>You may not use our service for any illegal purpose or to violate any laws in your jurisdiction.</p>
<p>You must be a human. Emergency notes generated by bots or other automated methods are not permitted.</p>
<p>You own all right, title, and interest to your emergency notes. We obtain no rights from you to your emergency notes. We do not collect and analyze personal information from you and we do not use behavioral insights to sell advertisements.</p>
<p>We will never collect or store any personally identifiable information and we will never abuse your visitor’s privacy. We will never sell or share your personal data to any third-parties.</p>
<p>Your use of our service is at your sole risk. The service is provided on an 'as is' and 'as available' basis.</p>
<p>We do not guarantee that our service will meet your specific requirements or expectations. We do not guarantee completely error-free or bug-free services.</p>
<p>Technical support is provided by email. Email responses are provided on the reasonable effort basis without guaranteed response time.</p>
<p>You expressly understand and agree that WeExpire.org shall not be liable, in law or in equity, to you or to any third party for any direct, indirect, incidental, lost profits, special, consequential, punitive or exemplary damages, including, but not limited to, damages for loss of profits, goodwill, use, data or other intangible losses (even if WeExpire.org has been advised of the possibility of such damages), resulting from:
  <ol>
  <li>the use or the inability to use the services;</li>
  <li>the cost of procurement of substitute goods and services resulting from any goods, data, information or services purchased or obtained or messages received or transactions entered into through or from the services;</li>
  <li>unauthorized access to or alteration of your transmissions or data;</li>
  <li>statements or conduct of any third party on the service;</li>
  <li>or any other matter relating to this Terms of Service or the services, whether as a breach of contract, tort (including negligence whether active or passive), or any other theory of liability.</li>
  </ol>
  </p>
<p>This agreement shall be governed by the laws of Italy, and the courts of Italy shall have exclusive jurisdiction to hear and determine all issues that may arise under or in relation to this agreement.</p>
<p>Last updated: May 1, 2022</p>
";

?>
