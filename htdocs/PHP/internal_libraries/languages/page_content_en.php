<?php

/**
* Translations for page contents
* Language: English
*/

$translation = array();

// Description for social media
$translation["social_media_description"] = "Create emergency notes that can be read by your trusted contacts only after your death.";

// Footer section
$translation["footer_language"] = "Language";
$translation["footer_press_kit"] = "Press kit";
$translation["footer_about"] = "About";
$translation["footer_FAQ"] = "FAQ";
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
$translation["landing_page_title"] = "Simpler than a will, safer than a note.";
$translation["landing_page_meta_description"] = "Create secure emergency notes for free with WeExpire — a privacy-first, open-source alternative to online wills and digital legacy tools.";

$translation["landing_page_headline"] = "Simpler than a will,<br class='d-none d-sm-block'> safer than a note.";
$translation["landing_page_secondary_headline"] = "WeExpire is a free, open-source alternative to traditional online wills. It lets you create secure emergency notes, shared only after your death or serious injury.";

$translation["landing_page_section_1_title"] = "How it works";
$translation["landing_page_section_1_description"] = "As soon as you write your note — whether it's your last message, final instructions, or a personal goodbye — it gets encrypted and turned into a QR code. You can print it or share it with someone you trust. When this person tries to access the note, WeExpire will contact you. If you don’t respond within the time limit you defined, your emergency note is automatically revealed. It’s a secure, lightweight form of online will delivery.";

$translation["landing_page_section_2_title"] = "Why should I use it?";
$translation["landing_page_section_2_description"] = "Regardless of age, health, social status, or geographical location, one day we will all die or be severely ill. Whether or not you use an official digital will service, WeExpire lets you leave behind a trusted, time-released message. It could be a farewell letter, a set of final wishes, or a secure way to pass on critical information — like a password hint, a recovery plan, or where to find something important.";

$translation["landing_page_section_3_title"] = "We don’t store your data";
$translation["landing_page_section_3_description"] = "Unlike other online will platforms, WeExpire doesn’t require an account or store readable versions of your data. Everything stays in the QR code you generate and keep. It’s a privacy-first approach to digital end-of-life communication. If you don’t believe us, <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>you can take a look at the source code</a>.";

$translation["landing_page_section_4_title"] = "Safe";
$translation["landing_page_section_4_description"] = "Your note is encrypted using the <a href='https://wikipedia.org/wiki/Advanced_Encryption_Standard' target='_blank'>AES-256-CTR algorithm</a> and protected with a randomly generated access key. Even if someone hacks WeExpire, your message can’t be accessed unless they also have the QR code and the key. Compared to many free digital will apps, WeExpire doesn’t store anything centrally — so there’s nothing to steal.";

$translation["landing_page_section_5_title"] = "Reliable";
$translation["landing_page_section_5_description"] = "On WeExpire, any emergency note you create automatically expires after 365 days. This allows you to keep your emergency notes always up-to-date every year and stay in the loop about any changes to our services. It's like when you sign up for a car insurance: you do so for a maximum of one year, as prices and coverages may change with time.";

$translation["landing_page_section_6_title"] = "Fast and non-profit";
$translation["landing_page_section_6_description"] = "On WeExpire you can create your emergency note in less than 3 minutes, for free. We believe that writing a last digital message has to be something easy and affordable to anyone in the world. We’re not a startup or law firm. We’re an open-source project offering a lightweight alternative to digital will makers. If you feel like helping the project, you can contribute with a simple <a href='/donate' target='_blank'>donation</a>.";

$translation["landing_page_section_7_title"] = "As seen on";

// Start page
$translation["start_page_meta_description"] = "Create a secure emergency note that only your trusted contacts can read after your death or serious incapacity. 100% private and open-source.";
$translation["start_page_title"] = "Create your emergency note";
$translation["start_page_secondary_headline"] = "This is where you shape your message — what to say, how and when it should be accessed. Remember: it’s not a legal will, but a secure and human way to share your digital legacy in case of emergency. You’ll review everything in the next step, before it’s encrypted.";
$translation["start_page_subject_input_title"] = "Subject";
$translation["start_page_subject_input_hint"] = "Don’t write sensitive data in this field but only a summary of your note";
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
$translation["start_page_terms_and_conditions_title"] = "Terms of service";
$translation["start_page_terms_and_conditions_description"] = "You accept our <a href='/terms.php' target='_blank'>terms of service</a>";

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
$translation["review_page_information_5_a"] = "For additional security, every note automatically expires 365 days after its creation date. Given that the inactivity time is {$_SESSION['inactivity_time']} day, the last day someone can potentially request access to your note is <b>" . date('d/m/Y', strtotime($_SESSION['expiration_date'] . " - {$_SESSION['inactivity_time']} day")) . "</b> (365 days from today, minus {$_SESSION['inactivity_time']} day). We recommend preparing a new emergency note by " . date('d/m/Y', strtotime($_SESSION['expiration_date'] . " - {$_SESSION['inactivity_time']} day")) . " (DD/MM/YYYY).";
$translation["review_page_information_5_b"] = "For additional security, every note automatically expires 365 days after its creation date. Given that the inactivity time is {$_SESSION['inactivity_time']} days, the last day someone can potentially request access to your note is <b>" . date('d/m/Y', strtotime($_SESSION['expiration_date'] . " - {$_SESSION['inactivity_time']} days")) . "</b> (365 days from today, minus {$_SESSION['inactivity_time']} days). We recommend preparing a new emergency note by " . date('d/m/Y', strtotime($_SESSION['expiration_date'] . " - {$_SESSION['inactivity_time']} days")) . " (DD/MM/YYYY).";
$translation["review_page_information_6"] = "This note can’t be edited in the future.";
}

// Done page
$translation["done_page_title"] = "All done";
$translation["done_page_content"] = "
<p>Your emergency note has been created. You can download it by clicking the button below, then print it and deliver it to your trusted person.</p>
<p><b><mark>Very important!</mark></b> Add the email address <b>support@weexpire.org</b> to your email provider’s safe senders list to prevent any notification from us regarding the note you just created from mistakenly ending up in spam.</p>";
$translation["done_page_donate_message"] = "<p class='text-center'><small>Support WeExpire with a <a href='/donate' target='_blank'>donation</a>.</small></p>";

// Access page
$translation["access_page_title"] = "Read the note";
$translation["access_page_access_code_input_title"] = "Please enter the access code";
$translation["access_page_access_code_input_error"] = "The access code you provided or the note you are trying to access is invalid.";

// Note page
$translation["note_page_title"] = "Read the note";
$translation["note_page_blocked_message"] = "<p class='text-center'>The access to this note has been temporarily blocked by the author of the note.</p>";
$translation["note_page_expired_message"] = "<p class='text-center'>This note has expired and can no longer be read.</p>";

// Avoid warning errors when visiting a page different than the note page by just checking if the grant access variable exists and if the curent page is note.php
if (isset($_SESSION['grant_access']) && (basename($_SERVER['SCRIPT_NAME']) == 'note.php')) {
$translation["note_page_waiting_message"] = "<p>The access code for this note has been successfully verified. However, it is necessary to wait until <b>".date("d/m/Y", strtotime($_SESSION['grant_access']))."</b> (DD/MM/YYYY) in order to read the content of the note.</p>
<p>This waiting time depends on the inactivity time chosen by the creator of this note. We therefore invite you to try to access the emergency note again on the date indicated above, which is when the inactivity time will be over.</p>";

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
$translation["block_page_title"] = "It’s all right";
$translation["block_page_content"] = "Any access to this note will be denied for the next 60 days.";

// Error page
$translation["error_page_title"] = "Error";
$translation["error_page_content"] = "An error has occurred. Please contact us if this problem persists.";

// PDF document
// Avoid warning errors when visiting a page different than the pdf document by just checking first if the creation date time variable exists
if (isset($_SESSION['creation_date_time'])) {
$translation["pdf_document"] = "
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
$translation["privacy_page_meta_description"] = "Learn how WeExpire protects your privacy.";
$translation["privacy_page_title"] = "Privacy";
$translation["privacy_page_content"] = "<p>Our guiding principle is to deeply respect user’s privacy. WeExpire doesn’t collect any personal data or personally identifiable information (PII) and this can be also verified by checking our <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>opensource code</a>.</p>
<p>We do use <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a> which is a GDPR, CCPA and cookie law compliant site analytics. This service doesn’t collect any personal data or personally identifiable information (PII), doesn't use cookies and respects the privacy of the website visitors.</p>
<p>We do use persistent first-party session cookies, necessary only to use our application and for you to create your emergency note.</p>
<p>All data is encrypted via SSL/TLS when transmitted from our servers to your browser.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Our hosting provider</a> stores access and security logs for up to 30 days in order to monitor and maintain their servers security. We have no control on this data.</p>
<p>We may update this policy in the future as needed to comply with relevant regulations and reflect any new practices.</p>
<p>Last updated: June 28th, 2022.</p>";

// Terms of Service page
$translation["terms_page_meta_description"] = "Read the terms of use for WeExpire, the open-source platform for creating secure emergency notes and managing your digital legacy.";
$translation["terms_page_title"] = "Terms of Service";
$translation["terms_page_content"] = "
<p>When we say 'WeExpire', 'We Expire', 'we', 'our', 'us', 'service' or 'services' in this document, we are referring to WeExpire.org. WeExpire.org is an opensource and non-profit service.</p>
<p>The following Terms of Service apply to WeExpire.org and to any document or emergency note generated via our service. These Terms of Service might be updated in the future. If you do not agree to these Terms of Service, please do not use this service.</p>
<p>When using our service, now or in the future, you are agreeing to the latest Terms of Service. This is also true for any of our existing and future products or features that we will be added to our service.</p>
<p>WeExpire is not a will creation service and does not provide any legal, estate planning, or testamentary services.</p>
<p>We do not provide digital wills, online wills, last wills and testaments, or any legally binding documents.</p>
<p>Any note generated via WeExpire is a personal, non-binding message and must not be considered a substitute for legal documentation.</p>
<p>We do not guarantee that the emergency notes generated via our service will be always accessible and readable.</p>
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
<p>Last updated: July 20th, 2025.</p>
";

// FAQ page
$translation["FAQ_page_meta_description"] = "Find answers about how WeExpire works, how we protect your data, and how to create emergency notes for your digital legacy.";

$translation["FAQ_page_title"] = "FAQ";

$translation["FAQ_page_section_1_title"] = "1. What happens if someone tries to open my note?";
$translation["FAQ_page_section_1_description"] = "When someone scans your QR code and enters the correct access code, WeExpire checks if the inactivity time you chose has passed. If not, your note stays locked. If the time has passed, the note becomes visible unless you block the access.";

$translation["FAQ_page_section_2_title"] = "2. Can I block access to the note if someone tries to open it?";
$translation["FAQ_page_section_2_description"] = "Yes. When someone tries to access your emergency note, WeExpire sends you a notification email. If you take no action, the note will unlock at the scheduled time. If you respond and block access, the request is saved for 60 days and cannot be retried during that time.";

$translation["FAQ_page_section_3_title"] = "3. Why is the block only for 60 days? What happens after that?";
$translation["FAQ_page_section_3_description"] = "For privacy and security reasons, we do not store any emergency note on our servers—only temporary records of access requests. After 60 days, the record is deleted and your trusted contact must scan the QR code again, triggering a new notification and countdown.";

$translation["FAQ_page_section_4_title"] = "4. Can I renew or update a note?";
$translation["FAQ_page_section_4_description"] = "No. To keep the platform simple and secure, emergency notes cannot be edited or extended. If you want to update a note, you must create a new one and share the updated QR code.";

$translation["FAQ_page_section_5_title"] = "5. Is my emergency note really stored in the QR code?";
$translation["FAQ_page_section_5_description"] = "Yes. When you create a note, all your information is encrypted using a randomly generated code. This encrypted message is embedded in a URL, which is then encoded in the QR code. The actual data is never stored on WeExpire’s servers, only in the QR code.";

$translation["FAQ_page_section_6_title"] = "6. How does WeExpire protect my privacy?";
$translation["FAQ_page_section_6_description"] = "WeExpire does not require any account or login. Only the person who holds the QR code and access key can read the content. It’s a privacy-first approach.";

$translation["FAQ_page_section_7_title"] = "7. What is a hash and why is it used?";
$translation["FAQ_page_section_7_description"] = "A hash is a unique digital fingerprint generated from data. We use it to log access attempts without storing the actual content. It helps detect repeated requests while maintaining privacy.";

$translation["FAQ_page_section_8_title"] = "8. How does the trusted contact know when to access the note?";
$translation["FAQ_page_section_8_description"] = "When the contact tries to access the note, they are informed of how long they have to wait. That time is based on what you chose when creating the note. It’s their responsibility to come back after the waiting period.";

$translation["FAQ_page_section_9_title"] = "9. Can this run on the blockchain or as a dApp?";
$translation["FAQ_page_section_9_description"] = "WeExpire was built to be lightweight, accessible, and open source. We’re exploring decentralized versions (e.g. IPFS or blockchain), but for now, our goal is to keep the service easy to use and accessible to everyone.";

$translation["FAQ_page_section_10_title"] = "10. Where can I see the code?";
$translation["FAQ_page_section_10_description"] = "WeExpire is fully open source. You can view the code <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>here</a>.";

?>
