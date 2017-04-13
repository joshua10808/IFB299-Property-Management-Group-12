<?php
  function query($sql){
    $pdo = new PDO("mysql:host=localhost;dbname=IFB299","root","mysql",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
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
