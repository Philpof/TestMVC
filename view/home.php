<?php $title = 'Test MVC - Accueil'; ?>

<?php ob_start(); ?>
<p>Page d'accueil</p>

<form class="" action="index.php?action=list" method="post">
  <button type="submit">Afficher la liste</button>
</form>

<form class="" action="index.php?action=idSelected" method="post">
  <label for="idSelected">Id :</label>
  <input type="text" id="idSelected" name="idSelected" value="">
  <button type="submit">Go !</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('templateHeader.php'); ?>
