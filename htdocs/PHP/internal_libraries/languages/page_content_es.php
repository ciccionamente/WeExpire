<?php

/**
* Translations for page contents
* Language: Spanish
*/

$translation = array();

// Title
$translation["title"] = "WeExpire - Más fácil que un testamento, más seguro que una carta.";

// Description for search engines (max 160 characters)
$translation["meta_description"] = "Crea mensajes de emergencia que pueden leer los contactos que tú elijas solo tras tu fallecimiento o en caso de incapacidad irreversible.";

// Description for social media (max 100 characters)
$translation["social_media_description"] = "Crea mensajes de emergencia que pueden leer los contactos que tú elijas solo tras tu fallecimiento.";

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
$translation["button_next"] = "Continúa";
$translation["button_confirm"] = "Confirma";
$translation["button_get_emergency_note"] = "Descarga el documento";

// Landing page
$translation["landing_page_headline"] = "Más fácil que un testamento,<br class='d-none d-sm-block'> más seguro que una carta.";
$translation["landing_page_secondary_headline"] = "WeExpire es una plataforma opensource para crear mensajes de emergencia que pueden leer tus contactos elegidos solo tras tu fallecimiento o en caso de incapacidad irreversible.";

$translation["landing_page_section_1_title"] = "Cómo funciona";
$translation["landing_page_section_1_description"] = "Una vez creado tu mensaje, este viene encriptado y convertido en un código QR que puedes entregar a tu persona de confianza. Cuando este contacto intente acceder a la nota que le has dejado, WeExpire te contactará inmediatamente por email: si no respondes dentro de un límite de tiempo, establecido previamente por tí, tu contacto podrá acceder al mensaje.";

$translation["landing_page_section_2_title"] = "¿Por qué debería usarlo?";
$translation["landing_page_section_2_description"] = "Independientemente de la edad, salud, clase social o si se vive en una zona de conflicto, cualquiera puede fallecer o enfrentarse a una incapacidad permanente . Dejarle una nota a las personas de tu confianza te permitirá dejarles un último mensaje o incluso expresar tus últimas voluntades.";

$translation["landing_page_section_3_title"] = "No guardamos tus datos";
$translation["landing_page_section_3_description"] = "A direfencia de otras plataformas, en WeExpire no hace falta que crees una cuenta. De hecho, tus datos se quedan solo y exclusivamente en el código QR generado e imprimido. Si no te lo crees, <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>puedes echar un vistazo en al código fuente</a>.";

$translation["landing_page_section_4_title"] = "Seguro";
$translation["landing_page_section_4_description"] = "Tu mensaje será encriptado usando <a href='https://wikipedia.org/wiki/Advanced_Encryption_Standard' target='_blank'>el algoritmo AES-256-CTR</a> y el relativo código de acceso se genera aleatoriamente. Aunque WeExpire fuese hackeado, no se podrá obtener ningún mensaje porque una vez que se generan nunca se archivan en WeExpire.";

$translation["landing_page_section_5_title"] = "Rápido y sin lucro";
$translation["landing_page_section_5_description"] = "En WeExpire puedes crear tu mensaje de emergencia en menos de 3 minutos, gratis. Creemos que escribir un último mensaje digital tiene que ser algo fácil y asequible para cualquier persona en el mundo. Si crees en esta plataforma, puedes ayudarnos haciendo una <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>donación</a>.";

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
<p class='text-center'><b><mark>¡Muy importante!</mark></b> Incluye la dirección <b>support@weexpire.org</b> en tu lista de contacto seguros para evitar que cualquier notificación relativa al mensaje que acabas de crear termine en el spam.</p>";
$translation["done_page_donate_message"] = "<p class='text-center'><small>Apoya a WeExpire con una <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>donación</a>.</small></p>";

// Access page
$translation["access_page_title"] = "Lee el mensaje";
$translation["access_page_access_code_input_title"] = "Introduce el código de acceso";
$translation["access_page_access_code_input_error"] = "El código de acceso que has introducido o el mensaje al que estás intentando acceder no son válidos.";

// Note page
// Avoid warning errors when visiting a page different than the note page by just checking first if the creation date time or grant access variables exist
if (isset($creation_date_time) or isset($_SESSION['grant_access'])) {
$translation["note_page_title"] = "Lee el mensaje";
$translation["note_page_waiting_message"] = "<p class='text-center'>El código de acceso de este mensaje ha sido verificado correctamente. Para leer el contenido del mismo debes esperar hasta el <b>".date("d/m/Y", strtotime($_SESSION['grant_access']))."</b> (DD/MM/AAAA).</p>
<p class='text-center'>Este tiempo de espera depende del tiempo de inactividad elegido por quien ha creado el mensaje. Te invitamos a acceder de nuevo a partir de la fecha indicada, cuando haya vencido el tiempo de inactividad.</p>";
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
<p>Fecha de caducidad del mensaje: <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/AAAA, UTC+1)</p>
<p></p><p></p>
<p>Espacio para otros comentarios y/o firma:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";
}

// Privacy Policy page
$translation["privacy_page_title"] = "Privacidad";
$translation["privacy_page_content"] = "<p>Nuestro principio fundamental es respetar profundamente la privacidad del usuario. WeExpire no recopila ningún dato personal o información de identificación personal (PII) y esto también se puede corroborar verificando nuestro <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>código abierto</a>.</p>
<p>Usamos <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a>, que es un análisis de sitio que cumple con GDPR, CCPA y la ley de cookies. Este servicio no recopila ningún dato personal o información de identificación personal (PII), no utiliza cookies y respeta la privacidad de los visitantes del sitio web.</p>
<p>Usamos cookies persistentes de sesión, necesarios solo para usar nuestra aplicación y para que usted cree su nota de emergencia.</p>
<p>Todos los datos se cifran a través de SSL/TLS cuando se transmiten desde nuestros servidores a su navegador.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Nuestro proveedor de hosting</a> almacena registros de acceso y seguridad hasta por 30 días para monitorear y mantener la seguridad de sus servidores. No tenemos ningún control sobre estos datos.</p>
<p>Es posible que actualicemos esta política en el futuro según sea necesario para cumplir con las reglamentaciones pertinentes y reflejar cualquier práctica nueva.</p>
<p>Última actualización: 28 de junio de 2022.</p>";

// Terms of Service page
$translation["terms_page_title"] = "Términos y condiciones de uso";
$translation["terms_page_content"] = "
<p>Cuando decimos 'WeExpire', 'We Expire', 'nosotros', 'nuestro', 'nos', 'servicio' o 'servicios' en este documento, nos referimos a WeExpire.org. WeExpire.org es un servicio de código abierto y sin fines de lucro.</p>
<p>Los siguientes Términos de servicio se aplican a WeExpire.org y a cualquier documento o mensaje de emergencia generado a través de nuestro servicio. Estos Términos de servicio pueden actualizarse en el futuro. Si no está de acuerdo con estos Términos, le sugerimos que no utilice este servicio.</p>
<p>Al utilizar nuestro servicio, ahora o en el futuro, Usted acepta los Términos de servicio más recientes. Esto también se aplica a cualquiera de nuestros productos o funciones existentes y futuros que agregaremos a nuestro servicio.</p>
<p>No ofrecemos ningún servicio oficial o legalmente reconocido de redacción de testamentos. No garantizamos que las notas de emergencia generadas a través de nuestro servicio estén siempre accesibles y legibles.</p>
<p>Usted o los demás propietarios de los mensajes de emergencia son responsables de mantener la seguridad de los mismos. No podemos y no seremos responsables de ninguna pérdida o daño por su incumplimiento de esta obligación de seguridad.</p>
<p>Usted es responsable de cualquier actividad que ocurra con sus mensajes de emergencia, incluso por parte de los demás propietarios de los mensajes de emergencia.</p>
<p>Usted es responsable del contenido de sus mensajes de emergencia.</p>
<p>Usted es responsable de la corrección y propiedad de las direcciones de correo electrónico que proporcione durante la creación del mensaje de emergencia.</p>
<p>No puede usar nuestro servicio para ningún propósito ilegal o para violar las leyes de su jurisdicción.</p>
<p>Debes ser un ser humano. No se permiten notas de emergencia generadas por bots u otros métodos automatizados.</p>
<p>Usted posee todos los derechos, títulos e intereses de sus pagarés de emergencia. No obtenemos derechos de Usted sobre sus mensajes de emergencia. No recopilamos ni analizamos su información personal y no utilizamos información sobre el comportamiento para vender anuncios.</p>
<p>Nunca recopilaremos ni almacenaremos información de identificación personal y nunca abusaremos de la privacidad de sus visitantes. Nunca venderemos ni compartiremos sus datos personales con terceros.</p>
<p>El uso de nuestro servicio es bajo su propia responsabilidad. El servicio se proporciona 'tal y como es' y sin garantías de ningún tipo.</p>
<p>No garantizamos que nuestro servicio cumpla con sus requisitos o expectativas específicas. No garantizamos servicios completamente libres de errores o bug.</p>
<p>El soporte técnico se proporciona por correo electrónico. Las respuestas por correo electrónico se proporcionan sobre la base de una tempistica razonable pero sin un límite de respuesta garantizado.</p>
<p>Usted comprende y acepta expresamente que WeExpire.org no será responsable, en derecho o en equidad, ante Usted o cualquier tercero por cualquier daño directo, indirecto, incidental, pérdida de ganancias, especial, consecuente, punitivo o ejemplar, incluyendo, pero sin limitarse a, daños por pérdida de ganancias, buena voluntad, uso, datos u otras pérdidas intangibles (incluso si WeExpire.org ha sido advertido de la posibilidad de tales daños), que resulten de:
  <ol>
  <li>el uso o la imposibilidad de uso de los servicios;</li>
  <li>el coste de adquisición de bienes y servicios sustitutos que resulten de bienes, datos, información o servicios comprados u obtenidos o mensajes recibidos o transacciones realizadas a través o desde los servicios;</li>
  <li>acceso no autorizado o alteración de sus transmisiones o datos;</li>
  <li>declaraciones o conducta de cualquier tercero en el servicio;</li>
  <li>o cualquier otro asunto relacionado con estos Términos de servicio o los servicios, ya sea como incumplimiento de contrato, agravio (incluida la negligencia, ya sea activa o pasiva), o cualquier otra teoría de responsabilidad.</li>
  </ol>
  </p>
<p>Este acuerdo se regirá por las leyes de Italia, y los tribunales de Italia tendrán jurisdicción exclusiva para conocer y determinar todas las cuestiones que puedan surgir en relación con este acuerdo.</p>
<p>Última actualización: 8 de agosto de 2022.</p>
";

?>
