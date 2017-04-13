<?php
  require('includes/db.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
  <head>
  <body>
    <div id="nav">
      <ul>
        <li><a href="#">Admin</a></li>
        <li><a href="#">Staff</a></li>
        <li><a href="#">Tenants</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
    <div id="wrapper">
      <div id="side">
        side
      </div>
      <div id="main">
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>Street</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql="SELECT * FROM `propertys`";
              $data=query($sql);
              foreach ($data as $property) {
                echo '
                <tr id="property">
                  <td id="id">'. $property["id"] .'</td>
                  <td id="name">'. $property["name"] .'</td>
                  <td id="street">'. $property["street"] .'</td>
                </tr>
                ';
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
  <footer>
  <footer>
</html>
