  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
        $('#propertyTable').DataTable();
    });
  </script>
 <table id="propertyTable">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Street</th>
          <th>Rate</th>
          <th>Bedrooms</th>
          <th>Bathrooms</th>
          <th>Car Parks</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $data=$db->get('propertys');
          foreach ($data as $property) {
            echo '
            <tr id="property">
              <td id="id">'. $property["id"] .'</td>
              <td id="name">'. $property["name"] .'</td>
              <td id="street">'. $property["address"] .'</td>
              <td id="rate">$'. $property["rate"] .' per week</td>
              <td id="beds">'. $property["bedrooms"] .'</td>
              <td id="bathroom">'. $property["bathrooms"] .'</td>
              <td id="carparks">'. $property["carparks"] .'</td>
              <td id="infobutton"> <a href=/IFB299/modules/main/index.php?id='.$property["id"].'><img src="/IFB299/img/rightarrow.png" width="20px" /></a> </td>
            </tr>
            ';
          }
        ?>
      </tbody>
    </table>