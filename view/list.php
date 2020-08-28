<?php $title = 'Test MVC - List'; ?>

<?php ob_start(); ?>
<p>Page affichant la liste de toutes les entrées de la base de donnée</p>

<?php
while ($data = $listDB->fetch())
{
?>

  <p>Titre : <?php echo $data['titre'] ?></p>
  <p>Contenu : <?php echo $data['contenu'] ?></p>

<?php
}
$listDB->closeCursor();
?>

<form class="" action="index.php?action=home" method="post">
  <button type="submit">Return</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('templateHeader.php'); ?>
