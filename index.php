<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
Votre User Agent : <?= print_r($_SERVER['HTTP_USER_AGENT']); ?> <br />
Votre adresse IP : <?= print_r($_SERVER['SERVER_ADDR']); ?><br >

Le nom du seveur : <?= print_r($_SERVER['SERVER_NAME']); ?>

    </p>
  </body>
</html>
