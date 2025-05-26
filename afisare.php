<?php
$nume = htmlspecialchars($_POST['nume']);
$email = htmlspecialchars($_POST['email']);
$mesaj = htmlspecialchars($_POST['mesaj']);
?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <title>Mesaj primit</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.0/dist/css/uikit.min.css" />
</head>
<body>
  <div class="uk-container uk-margin-top uk-text-center">
    <h2 class="uk-heading-line"><span>Mesaj primit cu succes</span></h2>
    <div class="uk-card uk-card-default uk-card-body uk-text-left uk-width-1-2@m uk-margin-auto">
      <p><strong>Nume:</strong> <?= $nume ?></p>
      <p><strong>Email:</strong> <?= $email ?></p>
      <p><strong>Mesaj:</strong><br><?= nl2br($mesaj) ?></p>
    </div>
    <a href="index.html" class="uk-button uk-button-primary uk-margin-top">Înapoi la Acasă</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/uikit@3.23.0/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.23.0/dist/js/uikit-icons.min.js"></script>
</body>
</html>
