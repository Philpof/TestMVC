<?php $title = 'Test MVC - Id n°' . $_POST['idSelected']; ?>

<?php ob_start(); ?>
<p>Page affichant le titre et le contenu selon l'id choisi à la page d'accueil</p>

  <p>Titre : <?php echo $titleAndContent['titre'] ?></p>
  <p>Contenu : <?php echo $titleAndContent['contenu'] ?></p>

<form class="" action="index.php?action=home" method="post">
  <button type="submit">Return</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('templateHeader.php'); ?>
