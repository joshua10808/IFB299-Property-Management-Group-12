<?php
  require_once ('db/MysqliDb.php');
  $db = new MysqliDb ('localhost', 'IFB299SQL', 'password', 'IFB299');
  //echo "db intialised";

  //misc
  function query($sql){
    $pdo = new PDO("mysql:host=localhost;dbname=IFB299","IFB299SQL","password",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = array();
      try
      {
        $result = array();
        $stmt = $pdo->prepare($sql);
              $stmt->execute();
        while($result = $stmt->fetch()){
          $data[] = $result;
        }
      }
      catch (PDOException $e)
      {
        echo $e->getMessage();
      }
      return $data;
  }


?>
