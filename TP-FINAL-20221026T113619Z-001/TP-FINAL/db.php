<?php
$con=mysqli_connect('localhost','root','root','users');
if(!$con){
   die('erreur de connexiona la base de donnée');
}else{
   }

   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS

   $pdo= new PDO('mysql:dbname=users;host=localhost','root';'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPION);
?>