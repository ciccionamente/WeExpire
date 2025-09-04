<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="author" content="WeExpire">
<meta name="thumbnail" content="https://weexpire.org/img/icons/search-engines.png">

<meta property="og:title" content="WeExpire">
<meta property="og:site_name" content="WeExpire">
<meta property="og:url" content="https://www.weexpire.org/">
<meta property="og:description" content="<?=$translation["social_media_description"];?>">
<meta property="og:locale" content="en_us">
<meta property="og:locale:alternate" content="es_es">
<meta property="og:locale:alternate" content="it_it">
<meta property="og:locale:alternate" content="fr_fr">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.weexpire.org/img/social.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="628">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="WeExpire">
<meta name="twitter:description" content="<?=$translation["social_media_description"];?>">
<meta name="twitter:image" content="https://www.weexpire.org/img/social.jpg">
<meta name="twitter:image:alt" content="WeExpire">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link href="/css/main.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
<link rel="manifest" href="/img/icons/site.webmanifest">
<link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<link rel="alternate" hreflang="x-default" href="https://weexpire.org">

<?php 
// Include Plausible Analytics only if server name is weexpire.org
if ($_SERVER['SERVER_NAME'] == 'weexpire.org') { ?>
<script defer data-domain="weexpire.org" src="https://plausible.io/js/plausible.js"></script>
<?php } ?>