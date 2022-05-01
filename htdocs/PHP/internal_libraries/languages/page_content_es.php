<?php

/**
* Translations for page contents
* Language: Spanish
*/

$translation = array();

// Title
$translation["title"] = "WeExpire - Más fácil que un testamento, más seguro que una carta.";

// Description for search engines (max 160 characters)
$translation["meta_description"] = "WeExpire te permite crear mensajes de emergencia que pueden leer los contactos que tú elijas solo tras tu fallecimiento o en caso de incapacidad irreversible.";

// Footer section
$translation["footer_language"] = "Idioma";
$translation["footer_about"] = "Sobre nosotros";
$translation["footer_donate"] = "Dona";
$translation["footer_contact"] = "Contáctanos";
$translation["footer_legal"] = "Legal";
$translation["footer_privacy"] = "Privacidad";
$translation["footer_terms"] = "Términos";

// Buttons
$translation["button_get_started"] = "Crea tu mensaje";
$translation["button_create_another_one"] = "Crea otro mensaje";
$translation["button_create_your_emergency_note"] = "Crea tu mensaje de emergencia";
$translation["button_next"] = "Adelante";
$translation["button_confirm"] = "Confirma";
$translation["button_get_emergency_note"] = "Descarga el documento";

// Landing page
$translation["landing_page_headline"] = "Más fácil que un testamento,<br class='d-none d-sm-block'> más seguro que una carta.";
$translation["landing_page_secondary_headline"] = "WeExpire es una plataforma opensource para crear mensajes de emergencia que pueden leer tus contactos elegidos solo tras tu fallecimiento o en caso de incapacidad irreversible";

$translation["landing_page_section_1_title"] = "Cómo funciona";
$translation["landing_page_section_1_description"] = "Una vez creado tu mensaje, este viene encriptado y convertido en un código QR que puedes entregar a tu persona de confianza. Cuando este contacto intente acceder a la nota que le has dejado, WeExpire te contactará inmediatamente por email: si no respondes dentro de un límite de tiempo, establecido previamente por tí, tu contacto podrá acceder al mensaje.";

$translation["landing_page_section_2_title"] = "¿Por qué debería usarlo?";
$translation["landing_page_section_2_description"] = "Independientemente de la edad, salud, clase social o si se vive en una zona de conflicto, cualquiera puede fallecer o enfrentarse a una incapacidad permanente . Dejarle una nota a las personas de tu confianza te permitirá dejarles un último mensaje o incluso expresar tus últimas voluntades.";

$translation["landing_page_section_3_title"] = "No guardamos tus datos";
$translation["landing_page_section_3_description"] = "A direfencia de otras plataformas, en WeExpire no hace falta que crees una cuenta. De hecho, tus datos se quedan solo y exclusivamente en el código QR generado e imprimido. Si no te lo crees, <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>puedes echar un vistazo en al código fuente</a>.";

$translation["landing_page_section_4_title"] = "Seguro";
$translation["landing_page_section_4_description"] = "Tu mensaje será encriptado usando <a href='https://wikipedia.org/wiki/Advanced_Encryption_Standard' target='_blank'>el algoritmo AES-256-CTR</a> y el relativo código de acceso se genera aleatoriamente. Aunque WeExpire fuese hackeado, no se podrá obtener ningún mensaje porque una vez que se generan nunca se archivan en WeExpire.";

$translation["landing_page_section_5_title"] = "Sin lucro";
$translation["landing_page_section_5_description"] = "WeExpire es un proyecto sin ánimo de lucro y es completamente gratuito. Si crees en esta plataforma, puedes ayudarnos haciendo una <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>donación</a>.";

// Start page
$translation["start_page_title"] = "Crea tu mensaje de emergencia";
$translation["start_page_subject_input_title"] = "Título del mensaje";
$translation["start_page_subject_input_hint"] = "No escribas mensajes comprometedores en este espacio, sólo un pequeño resumen";
$translation["start_page_note_input_title"] = "Mensaje de emergencia";
$translation["start_page_note_input_hint"] = "Puedes escribir hasta un máximo de 1000 caracteres";
$translation["start_page_primary_email_input_title"] = "Tu correo electrónico principal";
$translation["start_page_primary_email_input_hint"] = "Asegúrate que este sea el email que usas diariamente";
$translation["start_page_secondary_email_input_title"] = "Correo electrónico alternativo (opcional)";
$translation["start_page_secondary_email_input_hint"] = "Este correo electrónico podría ser útil en el caso en el que tu email principal no funcione correctamete o esté inhabilitado";
$translation["start_page_secondary_email_input_error"] = "Por favor introduce un correo electrónico diferente al email principal";
$translation["start_page_inactivity_input_title"] = "Tiempo de inactividad";
$translation["start_page_inactivity_input_hint"] = "¿Tras cuánto tiempo de inactividad tu persona de confianza podrá acceder a tu mensaje?";
$translation["start_page_inactivity_input_day"] = "día";
$translation["start_page_inactivity_input_days"] = "días";
$translation["start_page_expiration_input_title"] = "Caducidad del mensaje (opcional)";
$translation["start_page_expiration_input_hint"] = "¿Cuándo debería caducar este mensaje y volverse inaccesible?";

// Review page
// Avoid warning errors when visiting a page different than the review page by just checking first if the subject variable exists
if (isset($_SESSION["subject"])) {
$translation["review_page_title"] = "Resumamos";
$translation["review_page_information_1"] = "El título de tu mensaje es <b>'{$_SESSION["subject"]}'</b>.";
$translation["review_page_information_2"] = "El contenido de tu mensaje es <b>'{$_SESSION["note"]}'</b>.";
$translation["review_page_information_3_a"] = "En cuanto tu contacto de confianza intente acceder al mensaje, WeExpire te enviará inmediatamente una notificación al email a <b>{$_SESSION["primary_email"]}</b> y a <b>{$_SESSION["secondary_email"]}</b>.";
$translation["review_page_information_3_b"] = "En cuanto tu contacto de confianza intente acceder al mensaje, WeExpire te enviará inmediatamente una notificación al email a <b>{$_SESSION["primary_email"]}</b>.";
$translation["review_page_information_4_a"] = "Si no tomas ninguna medida antes del <b>{$_SESSION["inactivity_time"]} día</b>, tu persona de confianza podrá acceder al contenido de tu mensaje.";
$translation["review_page_information_4_b"] = "Si no tomas ninguna medida antes del <b>{$_SESSION["inactivity_time"]} días</b>, tu persona de confianza podrá acceder al contenido de tu mensaje.";
$translation["review_page_information_5_a"] = "Este mensaje no caduca nunca.";
$translation["review_page_information_5_b"] = "Este mensaje caduca el <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/AAAA) y nadie podrá leer el contenido de tu mensaje nunca.";
$translation["review_page_information_6"] = "Este mensaje no podrá cambiarse en el futuro.";
$translation["review_page_information_7"] = "Aceptas los <a href='/terms.php' target='_blank'>términos y condiciones de uso</a>.";
}

// Done page
$translation["done_page_title"] = "Ya está!";
$translation["done_page_content"] = "
<p class='text-center'>Tu mensaje de emergencia se ha creado. Puedes descargarlo en el botón de abajo e imprimirlo para entregárselo a tu contacto de confianza.</p>
<p class='text-center'><b>¡Muy importante!</b> Incluye la dirección <b>support@weexpire.org</b> en tu lista de contacto seguros para evitar que cualquier notificación relativa al mensaje que acabas de crear termine en el spam.</p>";

// Access page
$translation["access_page_title"] = "Lee el mensaje";
$translation["access_page_access_code_input_title"] = "Introduce el código de accesso";
$translation["access_page_access_code_input_error"] = "El código de acceso que has introducido o el mensaje al que estás intentando acceder no son válidos.";

// Note page
// Avoid warning errors when visiting a page different than the note page by just checking first if the creation date time variable exists
if (isset($creation_date_time)) {
$translation["note_page_title"] = "Lee el mensaje";
$translation["note_page_waiting_message"] = "<p class='text-center'>El código de acceso de este mensaje ha sido verificado correctamente. Para leer el contenido del mismo debes esperar hasta el <b>".date("d/m/Y", strtotime($_SESSION['grant_access']))."</b> (DD/MM/AAAA).</p>
<p class='text-center'>Este tiempo de espera depende del tiempo de inactividad elegido por quien ha creado el mensaje. Te invitamos a reintentarlo a partir de la fecha indicada, cuando haya vencido el tiempo de inactividad.</p>";
$translation["note_page_blocked_message"] = "<p class='text-center'>El acceso a este mensaje ha sido bloqueado por quien lo ha creado.</p>";
$translation["note_page_expired_message"] = "<p class='text-center'>Este mensaje ha caducado y no se puede leer.</p>";
$translation["note_page_allowed_message_no_expiration"] = "
<p>Este mensaje fue creado el ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (DD/MM/AAAA, UTC+1).</p>
<p>Por favor guarda o imprime esta nota ya que cuando cierres esta página deberás acceder de nuevo y esperar el tiempo de inactividad elegido por quien ha creado el mensaje.</p>
<p><b>Título:</b> {$subject}</p>
<p><b>Mensaje:</b> {$note}</p>";

$translation["note_page_allowed_message_with_expiration"] = "
<p>Este mensaje fue creado el ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (DD/MM/AAAA, UTC+1) e il suo accesso scadrà definitivamente il ".date("d/m/Y", strtotime($expiration_date))." (DD/MM/YYYY).</p>
<p>Por favor guarda o imprime esta nota ya que cuando cierres esta página deberás acceder de nuevo y esperar el tiempo de inactividad elegido por quien ha creado el mensaje.</p>
<p><b>Título:</b> {$subject}</p>
<p><b>Mensaje:</b> {$note}</p>";
}

// Block page
$translation["block_page_title"] = "Todo perfecto";
$translation["block_page_content"] = "Cualquier tipo de acceso a este mensaje ha sido bloqueado durante los próximos 60 días.";

// Error page
$translation["error_page_title"] = "Algo ha ido mal";
$translation["error_page_content"] = "Error. Por favor contáctanos si este fallo persiste.";

// PDF document
// Avoid warning errors when visiting a page different than the pdf document by just checking first if the creation date time variable exists
if (isset($_SESSION['creation_date_time'])) {
$translation["pdf_document_no_expiration"] = "
<p>Este documento se ha creado en WeExpire.org, una plataforma para crear mensajes de emergencia que las personas de confianza podrán leer solo tras el fallecimiento o incapacidad irreversible.</p>
<p>Para leer el siguiente mensaje de emergencia, escanea el código QR y a continuación introduce este código de acceso: <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Título del mensaje: <b>{$_SESSION["subject"]}</b>
<p>Fecha de creación del mensaje: <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (DD/MM/AAAA, UTC+1)</p>
<p></p><p></p>
<p>Espacio para otros comentarios y/o firma:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";

$translation["pdf_document_with_expiration"] = "
<p>Este documento se ha creado en WeExpire.org, una plataforma para crear mensajes de emergencia que las personas de confianza podrán leer solo tras el fallecimiento o incapacidad irreversible.</p>
<p>Para leer el siguiente mensaje de emergencia, escanea el código QR y a continuación introduce este código de acceso: <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Título del mensaje: <b>{$_SESSION["subject"]}</b>
<p>Fecha de creación del mensaje: <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (DD/MM/AAAA, UTC+1)</p>
<p>Data di scadenza della nota: <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/AAAA, UTC+1)</p>
<p></p><p></p>
<p>Espacio para otros comentarios y/o firma:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";
}

// Privacy Policy page
$translation["privacy_page_title"] = "Privacidad";
$translation["privacy_page_content"] = "<p>Our guiding principle is to deeply respect user's privacy. WeExpire doesn't collect any personal data or personally identifiable information (PII) and this can be also verified by checking our <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>opensource code</a>.</p>
<p>We do use <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a> which is a GDPR, CCPA and cookie law compliant site analytics. This service doesn't collect any personal data or personally identifiable information (PII), doesn't use cookies and respects the privacy of the website visitors.</p>
<p>We do use persistent first-party session cookies, necessary only to use our application and for you to create your emergency note.</p>
<p>All data is encrypted via SSL/TLS when transmitted from our servers to your browser.</p>
<p>We may update this policy in the future as needed to comply with relevant regulations and reflect any new practices.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Our hosting provider</a> stores access and security logs for up to 30 days in order to monitor and maintain their servers security. We have no control on this data.</p>
<p>Last updated: May 1, 2022</p>";

// Terms of Service page
$translation["terms_page_title"] = "Términos y condiciones de uso";
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
