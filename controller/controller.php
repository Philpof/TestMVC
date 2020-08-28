<?php require('model/model.php');

function home()
{
  require('view/home.php');
}

function IDSelected()
{
  $titleAndContent = selectID($_POST['idSelected']);
  require('view/idSelected.php');
}

function listContent()
{
  $listDB = listID();
  require('view/list.php');
}

function IDDeleted()
{

}
