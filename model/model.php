<?php
// Connection à la base de donnée
function dbConnect()
{
  $db = new PDO('mysql:host=localhost;dbname=gnouf;charset=utf8','root','');
  return $db;
}

// Avoir la liste de toutes les entrées de la base de données
function listID()
{
  $db = dbConnect();
  $req = $db->query('SELECT id, titre, contenu FROM youpi');

  return $req;
}

// Avoir les "titre" et "contenu" de toutes les entrées
function selectID($selectID)
{
  $db = dbConnect();
  $req = $db->prepare('SELECT id, titre, contenu FROM youpi WHERE id = ?');
  $req->execute(array($selectID));
  $IDSelected = $req->fetch();

  return $IDSelected;
}

// Créer une entrée dans la base de donnée


// Modifer une entrée dans la base de donnée


// Supprimer une entrée dans la base de donnée
function deleteID($deleteID)
{
  $db = dbConnect();
  $req = $db->prepare('DELETE FROM youpi WHERE id = ?');
  $req->execute(array($deleteID));
  $IDDeleted = $req->fetch();

  return $IDDeleted;
}
