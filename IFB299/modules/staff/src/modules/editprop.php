<div id="admineditProp">
  <H1>View time table schedule <?php echo $_GET['id'];?></H1>
  <Form action="src/modules/addpropparser.php" method="post">
    <input name="name" placeholder="name" type="text" />
    <input name="address" placeholder="address" type="text" />
    <input name="bedrooms" placeholder="bedrooms" type="text" />
    <input name="bathrooms" placeholder="bathrooms" type="text" />
    <input name="carparks" placeholder="carparks" type="text" />
    <input name="rate" placeholder="rate" type="text" />
    <input name="city" placeholder="city" type="text" />
    <input name="postcode" placeholder="postcode" style="margin-bottom: 10px" >
    <select name="suburb" id="selectSuburb">
      <?php
        $data = $db->rawQuery('SELECT DISTINCT suburb FROM postcode_db');
        foreach($data as $suburb){
          echo '<option value="'.$suburb['suburb'].'">'.$suburb['suburb'].'</option>';
        }
      ?>
    </select>
    <input type="submit" value="Add Property" />
  </Form>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#selectSuburb').select2({
      placeholder: "Select a Suburb"
    });
  });
  </script>

  <a id="backToDash" href="/IFB299/modules/admin">Back to dashboard</a>

  <?php include('../main/modules/propertytable.php'); ?>
</div>