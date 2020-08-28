<?php
require('controller/controller.php');

try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
      home();
    }
    elseif ($_GET['action'] == 'list') {
      listContent();
    }
    elseif ($_GET['action'] == 'idSelected') {
      if (isset($_POST['idSelected']) && $_POST['idSelected'] > 0) {
        IDSelected();
      }
      else {
        throw new Exception('Aucun id choisi');
      }
    }
    else {
      throw new Exception('Aucune entrée dans la base de donnée');
    }
  }
  else {
    home();
  }
}
catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
