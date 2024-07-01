<?php

include('../classes/dbh.classes.php');



$dbConn =  new Dbh;

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id_usuario']))
    {
      //Mostrar un post
      $sql = $dbConn->connect()->prepare("SELECT * FROM usuario where id_usuario=:id_usuario");
      $sql->bindValue(':id_usuario', $_GET['id_usuario']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	  }
    else {
      //Mostrar lista de post
      $sql = $dbConn->connect()->prepare("SELECT * FROM usuario");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
	}
}
// Crear un nuevo post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    $sql = "INSERT INTO usuario
          (title, status, content, user_id)
          VALUES
          (:title, :status, :content, :user_id)";
    $statement = $dbConn->connect()->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['id_usuario'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
	 }
}
//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
	$id = $_GET['id_usuario'];
  $statement = $dbConn->connect()->prepare("DELETE FROM usuario where id_usuario=:id_usuario");
  $statement->bindValue(':id_usuario', $id);
  $statement->execute();
	header("HTTP/1.1 200 OK");
	exit();
}
/*
//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $input = $_GET;
    $postId = $input['id_usuario'];
    $fields = getParams($input);
    $sql = "
          UPDATE posts
          SET $fields
          WHERE id_usuario='$postId'
           ";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();
}*/
//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");
?>