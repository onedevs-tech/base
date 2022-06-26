<?php

   $src_dir = __DIR__ . '/../src/';

   include $src_dir . 'init.php';
   include $src_dir . 'functions/random_number.php';
   include $src_dir . 'components/separator.php';

?>
<!-- 404 PAGE -->

<!DOCTYPE html>

<html lang="es">

   <head>

      <!-- TITLE -->
      <title>404 page</title>

      <!-- METAS -->
      <meta charset="utf-8">
      <meta name="author" content="">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <meta property="og:title" content="">
      <meta property="og:type" content="website">
      <meta property="og:description" content="">
      <meta property="og:url" content="">
      <meta property="og:image" content="/favicons/android-icon-192x192.png">

      <!-- MANIFEST -->
      <link rel="manifest" href="/manifest.json">

      <!-- FAVICONS -->
      <link rel="icon" type="image/png" sizes="16x16"  href="/favicons/favicon-16x16.png">
      <link rel="icon" type="image/png" sizes="32x32"  href="/favicons/favicon-32x32.png">
      <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
      <link rel="icon" type="image/png" sizes="96x96"  href="/favicons/apple-touch-icon-96x96.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">

      <!-- CSS -->
      <link rel="stylesheet" href="/css/vars.css?version=<?= random_number() ?>" />
      <link rel="stylesheet" href="/css/fonts.css?version=<?= random_number() ?>" />
      <link rel="stylesheet" href="/css/404.css?version=<?= random_number() ?>" />

   </head>

   <body>

      <?= separator() ?>

      404

   </body>

</html>
