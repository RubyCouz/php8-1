<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1</title>
  <link rel="stylesheet" href="assets/css/materialize.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <a class="waves-effect waves-light btn modal-trigger" href="#info">Vos information</a>
  <div id="info" class="modal">
    <div class="modal-content">
      <h4>Vos informations</h4>

      <p>Votre User Agent : <?= print_r($_SERVER['HTTP_USER_AGENT']); ?> </p> <!-- récupère l'user agent -->
      <p>Votre adresse IP : <?= print_r($_SERVER['SERVER_ADDR']); ?></p><!-- récupère l'ip de l'utilisateur -->

      <p>Le nom du seveur : <?= print_r($_SERVER['SERVER_NAME']); ?></p> <!-- récupère le nom du serveur -->
    </div>
  </div>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
