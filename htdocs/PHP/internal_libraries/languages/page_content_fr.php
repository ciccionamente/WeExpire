<?php

/**
* Translations for page contents
* Language: French
*/

$translation = array();

// Title
$translation["title"] = "WeExpire - Plus simple qu'un testament, plus sûr qu'une note.";

// Description for search engines (max 160 characters)
// The following string is exactly 160 chars
$translation["meta_description"] = "Créez des notes d'urgence qui ne pourront être lues par vos contacts de confiance qu'après votre décès ou en cas de blessure.";

// Description for social media (max 100 characters)
// The following string is exactly 98 chars
$translation["social_media_description"] = "Créez des notes d'urgence qui ne pourront être lues par vos contacts proches qu'après votre décès.";

// Footer section
$translation["footer_language"] = "Langue";
$translation["footer_about"] = "À propos";
$translation["footer_donate"] = "Dons";
$translation["footer_contact"] = "Contact";
$translation["footer_legal"] = "Légal";
$translation["footer_privacy"] = "Vie privée";
$translation["footer_terms"] = "Termes";

// Buttons
$translation["button_get_started"] = "Commencer";
$translation["button_create_another_one"] = "Créer une autre note";
$translation["button_create_your_emergency_note"] = "Créer une note d'urgence";
$translation["button_next"] = "Continuer";
$translation["button_confirm"] = "Confirmer";
$translation["button_get_emergency_note"] = "Obtenir la note d'urgence";

// Landing page
$translation["landing_page_headline"] = "Plus simple qu'un testament,<br class='d-none d-sm-block'> plus sûr qu'une note.";
$translation["landing_page_secondary_headline"] = "WeExpire est un outil open source permettant de créer des notes d'urgence qui ne pourront être lues par vos contacts de confiance qu'après votre décès ou si vous êtes gravement blessé.";

$translation["landing_page_section_1_title"] = "Comment ça marche";
$translation["landing_page_section_1_description"] = "Peu de temps après avoir écrit votre note, celle-ci sera chiffrée et convertie en un code QR que vous pourrez donner à une personne de confiance. Lorsque cette personne tentera d'accéder à votre message, WeExpire essaiera de vous contacter par e-mail dans les meilleurs délais ; si vous ne répondez pas dans le délai que vous avez préalablement défini, votre note deviendra visible pour votre personne de confiance.";

$translation["landing_page_section_2_title"] = "Pourquoi devrais-je l'utiliser ?";
$translation["landing_page_section_2_description"] = "Quels que soient notre âge, notre état de santé, notre statut social ou notre situation géographique, nous mourrons tous un jour ou serons gravement malades. Laisser un mot aux personnes en qui vous avez confiance vous permettra de leur transmettre votre dernier message et éventuellement d'accomplir vos dernières volontés.";

$translation["landing_page_section_3_title"] = "Nous ne stockons pas vos données";
$translation["landing_page_section_3_description"] = "Contrairement aux autres plateformes, il n'est pas nécessaire d'ouvrir un compte sur WeExpire. En fait, vos données restent uniquement dans le code QR qui est généré et éventuellement imprimé. Si vous ne nous croyez pas, <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>vous pouvez jeter un coup d'œil au code source</a>.";

$translation["landing_page_section_4_title"] = "Sûr";
$translation["landing_page_section_4_description"] = "Votre note est chifrée en utilisant le <a href='https://wikipedia.org/wiki/Advanced_Encryption_Standard' target='_blank'>l'algorithme AES-256-CTR</a> et son code d'accès est généré de manière aléatoire. Et même si WeExpire est piraté, il est impossible d'accéder à vos notes car une fois générées, elles ne sont pas stockées sur WeExpire.";

$translation["landing_page_section_5_title"] = "À but non lucratif";
$translation["landing_page_section_5_description"] = "WeExpire est un projet à but non lucratif et est entièrement gratuit. Si vous avez envie d'aider le projet, vous pouvez tout de même contribuer avec un <a href='https://www.buymeacoffee.com/ciccionamente' target='_blank'>don</a>.";

// Start page
$translation["start_page_title"] = "Créez votre note d'urgence";
$translation["start_page_subject_input_title"] = "Objet";
$translation["start_page_subject_input_hint"] = "N'écrivez pas de données sensibles dans ce champ, mais seulement un résumé de votre note.";
$translation["start_page_note_input_title"] = "Note d'urgence";
$translation["start_page_note_input_hint"] = "Vous pouvez écrire jusqu'à un maximum de 1000 caractères.";
$translation["start_page_primary_email_input_title"] = "Votre adresse électronique principale";
$translation["start_page_primary_email_input_hint"] = "Assurez-vous qu'il s'agit de l'adresse électronique que vous utilisez tous les jours.";
$translation["start_page_secondary_email_input_title"] = "Votre adresse électronique secondaire (facultatif)";
$translation["start_page_secondary_email_input_hint"] = "Cette adresse électronique peut s'avérer utile si votre adresse principale est compromise ou devient inaccessible.";
$translation["start_page_secondary_email_input_error"] = "Veuillez entrer une adresse électronique différente de l'adresse principale.";
$translation["start_page_inactivity_input_title"] = "Temps d'inactivité";
$translation["start_page_inactivity_input_hint"] = "Combien de temps après votre inactivité votre contact de confiance pourra-t-il accéder à votre note ?";
$translation["start_page_inactivity_input_day"] = "jour";
$translation["start_page_inactivity_input_days"] = "jours";
$translation["start_page_expiration_input_title"] = "Date d'expiration de la note (facultatif)";
$translation["start_page_expiration_input_hint"] = "Quand cette note doit-elle expirer et devenir totalement inaccessible ?";

// Review page
// Avoid warning errors when visiting a page different than the review page by just checking first if the subject variable exists
if (isset($_SESSION["subject"])) {
$translation["review_page_title"] = "Juste pour être sûr";
$translation["review_page_information_1"] = "L'objet de votre note d'urgence est <b>'{$_SESSION["subject"]}'</b>.";
$translation["review_page_information_2"] = "Le contenu de votre note d'urgence est <b>'{$_SESSION["note"]}'</b>.";
$translation["review_page_information_3_a"] = "Dès que votre contact de confiance tentera d'accéder à cette note, WeExpire vous enverra une notification par courrier électronique à <b>{$_SESSION["primary_email"]}</b> et <b>{$_SESSION["secondary_email"]}</b>.";
$translation["review_page_information_3_b"] = "Dès que votre contact de confiance tentera d'accéder à cette note, WeExpire vous enverra une notification par courrier électronique à <b>{$_SESSION["primary_email"]}</b>.";
$translation["review_page_information_4_a"] = "Si aucune action n'est entreprise par vous dans <b>{$_SESSION["inactivity_time"]} jour</b>, votre contact de confiance pourra alors lire le contenu de la note.";
$translation["review_page_information_4_b"] = "Si aucune action n'est entreprise par vous dans les <b>{$_SESSION["inactivity_time"]} jours</b>, votre contact de confiance pourra alors lire le contenu de la note.";
$translation["review_page_information_5_a"] = "Cette note n'expirera jamais.";
$translation["review_page_information_5_b"] = "Cette note expirera le <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/YYYY) et après cela, personne ne pourra jamais lire son contenu.";
$translation["review_page_information_6"] = "Cette note ne pourra pas être modifiée à l'avenir.";
$translation["review_page_information_7"] = "Vous acceptez nos <a href='/terms.php' target='_blank'>termes et conditions</a>.";
}

// Done page
$translation["done_page_title"] = "Tout est prêt";
$translation["done_page_content"] = "
<p class='text-center'>Votre note d'urgence a été créée. Vous pouvez le télécharger en cliquant sur le bouton ci-dessous, puis l'imprimer et la remettre à votre personne de confiance.</p>
<p class='text-center'><b><mark>Très important !</mark></b> Ajoutez l'adresse e-mail <b>support@weexpire.org</b> à la liste des expéditeurs sûrs de votre fournisseur de mails pour éviter que toute notification de notre part concernant la note que vous venez de créer ne se retrouve par erreur dans les spams.</p>";

// Access page
$translation["access_page_title"] = "Lire la note";
$translation["access_page_access_code_input_title"] = "Veuillez entrer le code d'accès";
$translation["access_page_access_code_input_error"] = "Le code d'accès que vous avez fourni ou la note à laquelle vous essayez d'accéder n'est pas valide.";

// Note page
// Avoid warning errors when visiting a page different than the note page by just checking first if the creation date time or grant access variables exist
if (isset($creation_date_time) or isset($_SESSION['grant_access'])) {
$translation["note_page_title"] = "Lire la note";
$translation["note_page_waiting_message"] = "<p class='text-center'>Le code d'accès à cette note a été vérifié avec succès. Cependant, il est nécessaire d'attendre jusqu'au <b>".date("d/m/Y", strtotime($_SESSION['grant_access']))."</b> (DD/MM/YYYY) afin de lire le contenu de la note.</p>
<p class='text-center'>Ce temps d'attente dépend de la durée d'inactivité choisie par le créateur de cette note. Nous vous invitons donc à réessayer d'accéder à la note d'urgence à la date indiquée ci-dessus, date à laquelle le temps d'inactivité sera passé.</p>";
$translation["note_page_blocked_message"] = "<p class='text-center'>L'accès à cette note a été temporairement bloqué par l'auteur de la note.</p>";
$translation["note_page_expired_message"] = "<p class='text-center'>Cette note a expiré et ne peut plus être lue.</p>";
$translation["note_page_allowed_message_no_expiration"] = "
<p>Cette note a été créée le ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (DD/MM/YYYY, UTC+1).</p>
<p>Veuillez enregistrer ou imprimer cette note car si vous fermez cette page, vous devrez vous reconnecter et attendre le temps d'inactivité fixé par l'auteur de cette note.</p>
<p><b>Objet:</b> {$subject}</p>
<p><b>Message:</b> {$note}</p>";

$translation["note_page_allowed_message_with_expiration"] = "
<p>Cette note a été créée le ".date("d/m/Y H:i:s", strtotime($creation_date_time))." (DD/MM/YYYY, UTC+1) et son accès expirera définitivement le ".date("d/m/Y", strtotime($expiration_date))." (DD/MM/YYYY).</p>
<p>Veuillez enregistrer ou imprimer cette note car si vous fermez cette page, vous devrez vous reconnecter et attendre le temps d'inactivité fixé par l'auteur de cette note.</p>
<p><b>Objet:</b> {$subject}</p>
<p><b>Message:</b> {$note}</p>";
}

// Block page
$translation["block_page_title"] = "C'est tout bon";
$translation["block_page_content"] = "Tout accès à cette note sera refusé pendant les 60 prochains jours.";

// Error page
$translation["error_page_title"] = "Erreur";
$translation["error_page_content"] = "Une erreur s'est produite. Veuillez nous contacter si ce problème persiste.";

// PDF document
// Avoid warning errors when visiting a page different than the pdf document by just checking first if the creation date time variable exists
if (isset($_SESSION['creation_date_time'])) {
$translation["pdf_document_no_expiration"] = "
<p>Ce document a été créé sur WeExpire.org, une plateforme permettant de créer des notes d'urgence qui ne peuvent être lues que par des contacts de confiance après un décès ou une blessure grave.</p>
<p>Pour lire la note d'urgence suivante, scannez le code QR et entrez ensuite ce code d'accès : <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Objet de la note : <b>{$_SESSION["subject"]}</b>
<p>Date de création de la note : <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (DD/MM/YYYY, UTC+1)</p>
<p></p><p></p>
<p>Espace pour d'autres commentaires et/ou signature :<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";

$translation["pdf_document_with_expiration"] = "
<p>Ce document a été créé sur WeExpire.org, une plateforme permettant de créer des notes d'urgence qui ne peuvent être lues que par des contacts de confiance après un décès ou une blessure grave.</p>
<p>Pour lire la note d'urgence suivante, scannez le code QR et entrez ensuite ce code d'accès : <b>{$_SESSION["initialization_vector"]}</b></p>
<p>Objet de la note : <b>{$_SESSION["subject"]}</b>
<p>Date de création de la note : <b>".date("d/m/Y H:i:s", strtotime($_SESSION["creation_date_time"]))."</b> (DD/MM/YYYY, UTC+1)</p>
<p>Date d'expiration de la note : <b>".date("d/m/Y", strtotime($_SESSION["expiration_date"]))."</b> (DD/MM/YYYY, UTC+1)</p>
<p></p><p></p>
<p>Espace pour d'autres commentaires et/ou signature :<br>
___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>";
}

// Privacy Policy page
$translation["privacy_page_title"] = "Vie privée";
$translation["privacy_page_content"] = "<p>Notre philosophie est de respecter profondément la vie privée des utilisateurs. WeExpire ne collecte pas de données personnelles ou d'informations personnellement identifiables (PII), ce qui peut être vérifié en consultant notre <a href='https://github.com/ciccionamente/WeExpire' target='_blank'>code en sources libres</a>.</p>
<p>Nous utilisons <a href='https://plausible.io/data-policy' target='_blank'>Plausible Analytics</a> qui est un service d'analyse de site conforme au RGPD, au CCPA et à la législation sur les cookies. Ce service ne collecte aucune donnée personnelle ou information personnellement identifiable (PII), n'utilise pas de cookies et respecte la vie privée des visiteurs du site.</p>
<p>Nous utilisons des cookies de session persistants de première partie, nécessaires uniquement pour utiliser notre application et pour vous permettre de créer votre note d'urgence.</p>
<p>Toutes les données sont chiffrées via SSL/TLS lors de leur transmission de nos serveurs à votre navigateur.</p>
<p><a href='https://www.vhosting.net' target='_blank'>Notre hébergeur</a> stocke les journaux d'accès et de sécurité pendant 30 jours au maximum afin de surveiller et de maintenir la sécurité de ses serveurs. Nous n'avons aucun contrôle sur ces données.</p>
<p>Nous pouvons mettre à jour cette politique à l'avenir, si nécessaire, pour nous conformer aux réglementations pertinentes et refléter toute nouvelle pratique.</p>
<p>Dernière mise à jour : 28 juin 2022.</p>";

// Terms of Service page
$translation["terms_page_title"] = "Termes et conditions";
$translation["terms_page_content"] = "
<p>Lorsque nous disons 'WeExpire', 'We Expire', 'nous', 'notre', 'nous', 'service' ou 'services' dans ce document, nous faisons référence à WeExpire.org. WeExpire.org est un service à sources ouvertes et à but non lucratif.</p>
<p>Les conditions de service suivantes s'appliquent à WeExpire.org et à tout document ou note d'urgence généré via notre service. Ces conditions de service peuvent être mises à jour à l'avenir. Si vous n'acceptez pas ces conditions de service, veuillez ne pas utiliser ce service.</p>
<p>En utilisant notre service, maintenant ou à l'avenir, vous acceptez les dernières conditions de service. Cela s'applique également à tous nos produits ou fonctionnalités existants et futurs qui seront ajoutés à notre service.</p>
<p>Nous ne proposons pas de services de rédaction de testaments officiels ou reconnus par la loi. Nous ne garantissons pas que les notes d'urgence générées via notre service seront toujours accessibles et lisibles.</p>
<p>Vous ou les autres personnes qui possèdent des notes d'urgence êtes responsables du maintien de la sécurité de vos notes d'urgence. Nous ne pouvons et ne voulons pas être tenus responsables de toute perte ou de tout dommage résultant de votre manquement à cette obligation de sécurité.</p>
<p>Vous êtes responsable de toute activité réalisée avec vos notes d'urgence, même par les autres propriétaires de vos notes d'urgence.</p>
<p>Vous êtes responsable du contenu de vos notes d'urgence.</p>
<p>Vous êtes responsable de l'exactitude et de la propriété des adresses électroniques que vous fournissez lors de la création de la note d'urgence.</p>
<p>Vous ne pouvez pas utiliser notre service à des fins illégales ou pour violer les lois de votre juridiction.</p>
<p>Vous devez être un humain. Les notes d'urgence générées par des robots ou d'autres méthodes automatisées ne sont pas autorisées.</p>
<p>Vous êtes propriétaire de tous les droits, titres et intérêts relatifs à vos notes d'urgence. Nous n'obtenons de vous aucun droit sur vos notes d'urgence. Nous ne collectons ni n'analysons vos informations personnelles et nous n'utilisons pas les informations comportementales pour vendre des publicités.</p>
<p>Nous ne collecterons ni ne stockerons jamais d'informations permettant d'identifier un visiteur et nous n'abuserons jamais de sa vie privée. Nous ne vendrons ni ne partagerons jamais vos données personnelles avec des tiers.</p>
<p>Vous utilisez notre service à vos propres risques. Le service est fourni 'tel quel' et 'tel que disponible'.</p>
<p>Nous ne garantissons pas que notre service répondra à vos besoins ou attentes spécifiques. Nous ne garantissons pas des services totalement exempts d'erreurs ou de bogues.</p>
<p>L'assistance technique est fournie par courrier électronique. Les réponses par courrier électronique sont fournies sur la base d'un effort raisonnable sans garantie de temps de réponse.</p>
<p>Vous comprenez et acceptez expressément que WeExpire.org ne peut être tenu responsable, en droit ou en équité, envers vous ou un tiers, de tout dommage direct, indirect, accessoire, perte de profits, dommages directs, spéciaux, conséquents, punitifs ou exemplaires, y compris, mais sans s'y limiter, les dommages pour la perte de profits, de clientèle, d'utilisation, de données ou d'autres pertes intangibles (même si WeExpire.org a été informé de la possibilité de tels dommages), résultant des éléments suivants:
  <ol>
  <li>l'utilisation ou l'impossibilité d'utiliser les services ;</li>
  <li>le coût de l'acquisition de biens et services de substitution résultant de tout bien, donnée, information ou service acheté ou obtenu ou de tout message reçu ou de toute transaction conclue par l'intermédiaire des services ou à partir de ceux-ci ;</li>
  <li>l'accès non autorisé ou l'altération de vos transmissions ou données ;</li>
  <li>les déclarations ou la conduite de tout tiers sur le service ;</li>
  <li>ou toute autre chose relative aux présentes conditions d'utilisation ou aux services, qu'il s'agisse d'une rupture de contrat, d'un délit (y compris la négligence, qu'elle soit active ou passive) ou de toute autre théorie de la responsabilité.</li>
  </ol>
  </p>
<p>Le présent accord est régi par les lois de l'Italie, et les tribunaux italiens ont la compétence exclusive pour entendre et déterminer tous les problèmes qui peuvent survenir dans le cadre de cet accord ou en relation avec celui-ci.</p>
<p>Dernière mise à jour : 8 août 2022.</p>
";

?>
