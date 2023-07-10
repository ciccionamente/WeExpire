<?php

/**
* Translations for page contents
* Language: English
*/

$translation = array();

// Title
$translation["title"] = "WeExpire - Simpler than a will, safer than a note.";

// Description for search engines (max 160 characters)
$translation["meta_description"] = "Create emergency notes that can be read by your trusted contacts only after your death or in case you are seriously injured.";

// Description for social media (max 100 characters)
$translation["social_media_description"] = "Create emergency notes that can be read by your trusted contacts only after your death.";

// Footer section
$translation["footer_language"] = "Language";
$translation["footer_about"] = "About";
$translation["footer_donate"] = "Donate";
$translation["footer_contact"] = "Contact";
$translation["footer_legal"] = "Legal";
$translation["footer_privacy"] = "Privacy";
$translation["footer_terms"] = "Terms";

// Buttons
$translation["button_get_started"] = "Get started";
$translation["button_create_another_one"] = "Create another one";
$translation["button_create_your_emergency_note"] = "Create your emergency note";
$translation["button_next"] = "Continue";
$translation["button_confirm"] = "Confirm";
$translation["button_get_emergency_note"] = "Get emergency note";

// Landing page
$translation["landing_page_headline"] = "Simpler than a will,<br class='d-none d-sm-block'> safer than a note.";
$translation["landing_page_secondary_headline"] = "WeExpire is an opensource tool for creating emergency notes that can be read by your trusted contacts only after your death or if you are seriously injured.";

$translation["landing_page_section_1_title"] = "How it works";
$translation["landing_page_section_1_description"] = "Soon after you write your note, it will be encrypted and converted into a QR code which you can give to a person you trust. When this person tries to access your message, WeExpire will try to contact you via email as soon as possible; if you do not reply within the period of time you previously defined, your note will become visible to your trusted person.";

$translation["landing_page_section_2_title"] = "Why should I use it?";
$translation["landing_page_section_2_description"] = "Regardless of age, health, social status, or geographical location, one day we will all die or be severely ill. Leaving a note to the people you trust will allow you to give them your last message and possibly fulfill your last wills.";

$translation["landing_page_section_3_title"] = "We don't store your data";
$translation["landing_page_section_3_description"] = "Unlike other platforms, there is no need to register an account on WeExpire. In fact, your data stays only in the QR code that is generated and eventually printed. If you don't believe us, <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>you can take a look at the source code</a>.";

$translation["landing_page_section_4_title"] = "Safe";
$translation["landing_page_section_4_description"] = "Your note is encrypted using the <a href='https://wikipedia.org/wiki/Advanced_Encryption_Standard' target='_blank'>AES-256-CTR algorithm</a> and its access code is randomly generated. And even if WeExpire gets hacked, your notes cannot be accessed because once they are generated they are not stored on WeExpire.";

$translation["landing_page_section_5_title"] = "Fast and non-profit";
$translation["landing_page_section_5_description"] = "On WeExpire you can create your emergency note in less than 3 minutes, for free. We believe that writing a last digital message has to be something easy and affordable to anyone in the world. If you feel like helping the project, you can contribute with a simple <a href='donate.php' target='_blank'>donation</a>.";

// Start page
$translation["start_page_title"] = "Create your emergency note";
$translation["start_page_subject_input_title"] = "Subject";
$translation["start_page_subject_input_hint"] = "Don't write sensitive data in this field but only a summary of your note";
$translation["start_page_note_input_title"] = "Emergency note";
$translation["start_page_note_input_hint"] = "You can write up to a maximum of 1000 characters";
$translation["start_page_primary_email_input_title"] = "Your primary email address";
$translation["start_page_primary_email_input_hint"] = "Make sure this is the email address you use every day";
$translation["start_page_secondary_email_input_title"] = "Your secondary email address (optional)";
$translation["start_page_secondary_email_input_hint"] = "This email address can come in handy in case your primary address is compromised or becomes inaccessible";
$translation["start_page_secondary_email_input_error"] = "Please enter a different email address than the primary one";
$translation["start_page_inactivity_input_title"] = "Inactivity time";
$translation["start_page_inactivity_input_hint"] = "How long after your inactivity shall your trusted contact be able to access your note?";
$translation["start_page_inactivity_input_day"] = "day";
$translation["start_page_inactivity_input_days"] = "days";
$translation["start_page_inactivity_input_month"] = "month";
$translation["start_page_inactivity_input_months"] = "months";
$translation["start_page_expiration_input_title"] = "Note expiration date (optional)";
$translation["start_page_expiration_input_hint"] = "When should this note expire and become totally inaccessible?";

// Review page
// Avoid warning errors when visiting a page different than the review page by just checking first if the subject variable exists
if (isset($_SESSION["subject"])) {
$translation["review_page_title"] = "Just to be sure";
$translation["review_page_information_1"] = "The subject of your emergency note is <b>'{$_SESSION["subject"]}'</b>.";
$translation["review_page_information_2"] = "The content of your emergency note is <b>'{$_SESSION["note"]}'</b>.";
$translation["review_page_information_3_a"] = "As soon as your trusted contact tries to access this note, WeExpire will send you an email notification to <b>{$_SESSION["primary_email"]}</b> and <b>{$_SESSION["secondary_email"]}</b>.";
$translation["review_page_information_3_b"] = "As soon as your trusted contact tries to access this note, WeExpire will send you an email notification to <b>{$_SESSION["primary_email"]}</b>.";
$translation["review_page_information_4_a"] = "If no action is taken by you within <b>{$_SESSION["inactivity_time"]} day</b>, your trusted contact will then be able to read the content of the note.";
$translation["review_page_information_4_b"] = "If no action is taken by you within <b>{$_SESSION["inactivity_time"]} days</b>, your trusted contact will then be able to read the content of the note.";
$translation["review_page_information_5_a"] = "This note will never expire.";
$translation["review_page_information_5_b"] = "This note will expire on <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/YYYY) and after that no one will ever be able to read its content.";
$translation["review_page_information_6"] = "This note can't be edited in the future.";
$translation["review_page_information_7"] = "You accept our <a href='/terms.php' target='_blank'>terms of service</a>.";
}

// Done page
$translation["done_page_title"] = "All done";
$translation["done_page_content"] = "
<p class='text-center'>Your emergency note has been created. You can download it by clicking the button below, then print it and deliver it to your trusted person.</p>
<p class='text-center'><b><mark>Very important!</mark></b> Add the email address <b>support@weexpire.org</b> to your email provider's safe senders list to prevent any notification from us regarding the note you just created from mistakenly ending up in spam.</p>";
$translation["done_page_donate_message"] = "<p class='text-center'><small>Support WeExpire with a <a href='donate.php' target='_blank'>donation</a>.</small></p>";

// Access page
$translation["access_page_title"] = "Read the note";
$translation["access_page_access_code_input_title"] = "Please enter the access code";
$translation["access_page_access_code_input_error"] = "The access code you provided or the note you are trying to access is invalid.";

// Note page
$translation["note_page_title"] = "Read the note";
$translation["note_page_blocked_message"] = "<p class='text-center'>The access to this note has been temporarily blocked by the author of the note.</p>";
$translation["note_page_expired_message"] = "<p class='text-center'>This note has expired and can no longer be read.</p>";

// Avoid warning errors when visiting a page different than the note page by just checking first if the creation date time and the grant access variables exist
if (isset($creation_date_time) and isset($_SESSION['grant_access'])) {
$translation["note_page_waiting_message"] = "<p class='text-center'>The access code for this note has been successfully verified. However, it is necessary to wait until <b>".date("d/m/Y", strtotime($_SESSION['grant_access']))."</b> (DD/MM/YYYY) in order to read the content of the note.</p>
<p class='text-center'>This waiting time depends on the inactivity time chosen by the creator of this note. We therefore invite you to try to access the emergency note again on the date indicated above, which is when the inactivity time will be over.</p>";

$translation["note_page_allowed_message_no_expiration"] = "
<p>This note was created on ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (DD/MM/YYYY, UTC+1).</p>
<p>Please save or print this note as if you close this page you will have to log in again and wait for the inactivity time set by the author of this note.</p>
<p><b>Subject:</b> {$subject}</p>
<p><b>Message:</b> {$note}</p>";

$translation["note_page_allowed_message_with_expiration"] = "
<p>This note was created on ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (DD/MM/YYYY, UTC+1) and its access will permanently expire on ".date("d/m/Y", strtotime($expiration_date))." (DD/MM/YYYY).</p>
<p>Please save or print this note as if you close this page you will have to log in again and wait for the inactivity time set by the author of this note.</p>
<p><b>Subject:</b> {$subject}</p>
<p><b>Message:</b> {$note}</p>";
}

// Block page
$translation["block_page_title"] = "It's all right";
$translation["block_page_content"] = "Any access to this note will be denied for the next 60 days.";

// Error page
$translation["error_page_title"] = "Error";
$translation["error_page_content"] = "An error has occurred. Please contact us if this problem persists.";

// PDF document
// Avoid warning errors when visiting a page different than the pdf document by just checking first if the creation date time variable exists
if (isset($_SESSION['creation_date_time'])) {
$translation["pdf_document_no_expiration"] = "
<p>This document was created on WeExpire.org, a platform for creating emergency notes that can only be read by trusted contacts after being dead or severely injured.</p>
<p>In order to read the following emergency note, scan the QR code and then enter this access code: <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Note subject: <b>{$_SESSION["subject"]}</b>
<p>Note creation date: <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (DD/MM/YYYY, UTC+1)</p>
<p></p><p></p>
<p>Space for other comments and/or signature:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";

$translation["pdf_document_with_expiration"] = "
<p>This document was created on WeExpire.org, a platform for creating emergency notes that can only be read by trusted contacts after being dead or severely injured.</p>
<p>In order to read the following emergency note, scan the QR code and then enter this access code: <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Note subject: <b>{$_SESSION["subject"]}</b>
<p>Note creation date: <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (DD/MM/YYYY, UTC+1)</p>
<p>Note expiration date: <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/YYYY, UTC+1)</p>
<p></p><p></p>
<p>Space for other comments and/or signature:<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";
}

// Privacy Policy page
$translation["privacy_page_title"] = "Privacy";
$translation["privacy_page_content"] = "<p>Our guiding principle is to deeply respect user's privacy. WeExpire doesn't collect any personal data or personally identifiable information (PII) and this can be also verified by checking our <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>opensource code</a>.</p>
<p>We do use <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a> which is a GDPR, CCPA and cookie law compliant site analytics. This service doesn't collect any personal data or personally identifiable information (PII), doesn't use cookies and respects the privacy of the website visitors.</p>
<p>We do use persistent first-party session cookies, necessary only to use our application and for you to create your emergency note.</p>
<p>All data is encrypted via SSL/TLS when transmitted from our servers to your browser.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Our hosting provider</a> stores access and security logs for up to 30 days in order to monitor and maintain their servers security. We have no control on this data.</p>
<p>We may update this policy in the future as needed to comply with relevant regulations and reflect any new practices.</p>
<p>Last updated: June 28th, 2022.</p>";

// Terms of Service page
$translation["terms_page_title"] = "Terms of Service";
$translation["terms_page_content"] = "
<p>When we say 'WeExpire', 'We Expire', 'we', 'our', 'us', 'service' or 'services' in this document, we are referring to WeExpire.org. WeExpire.org is an opensource and non-profit service.</p>
<p>The following Terms of Service apply to WeExpire.org and to any document or emergency note generated via our service. These Terms of Service might be updated in the future. If you do not agree to these Terms of Service, please do not use this service.</p>
<p>When using our service, now or in the future, you are agreeing to the latest Terms of Service. This is also true for any of our existing and future products or features that we will be added to our service.</p>
<p>We do not offer any official or legally recognized will writing services. We do not guarantee that the emergency notes generated via our service will be always accessible and readable.</p>
<p>You or the others who own emergency notes are responsible for maintaining the security of your emergency notes. We cannot and will not be liable for any loss or damage from your failure to comply with this security obligation.</p>
<p>You are responsible for any activity that occurs with your emergency notes, even by the others who own your emergency notes.</p>
<p>You are responsible for the content of your emergency notes.</p>
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
<p>Last updated: August 8th, 2022.</p>
";

?>
