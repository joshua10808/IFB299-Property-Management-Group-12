<div id="admineditProp">
  <H1>Edit property <?php echo $_GET['id'] ?></H1>

  <?php 
  	$db->where ('id', $_GET['id']);
  	$data = $db->get('propertys');
  ?>
  <Form action="src/modules/updatepropparser.php?id=<?php echo $_GET['id']; ?>" method="post">
    <input value="<?php echo $data[0]['name']; ?>" name="name" placeholder="name" type="text" />
    <input value="<?php echo $data[0]['address']; ?>" name="address" placeholder="address" type="text" />
    <input value="<?php echo $data[0]['bedrooms']; ?>" name="bedrooms" placeholder="bedrooms" type="text" />
    <input value="<?php echo $data[0]['bathrooms']; ?>" name="bathrooms" placeholder="bathrooms" type="text" />
    <input value="<?php echo $data[0]['carparks']; ?>" name="carparks" placeholder="carparks" type="text" />
    <input value="<?php echo $data[0]['rate']; ?>" name="rate" placeholder="rate" type="text" />
    <input value="<?php echo $data[0]['city']; ?>" name="city" placeholder="city" type="text" />
    <input value="<?php echo $data[0]['postcode']; ?>" name="postcode" placeholder="postcode" style="margin-bottom: 10px" >

    <select name="suburb" id="selectSuburb">
    <?php
    $suburbData = $db->rawQuery('SELECT DISTINCT suburb FROM postcode_db');
    foreach($suburbData as $suburb){
      if($suburb['suburb'] === $data[0]['suburb']){
      	echo '<option selected value="'.$data[0]['suburb'].'">'.$data[0]['suburb'].'</option>';
      } else {
      	echo '<option value="'.$suburb['suburb'].'">'.$suburb['suburb'].'</option>';
      }
    }
    ?>
    </select>
    	<script type="text/javascript">
	$(document).ready(function() {
	  $('#selectSuburb').select2({
	  	placeholder: "Select a Suburb"
	  });
	});
	</script>
    <input type="submit" value="Update Property" />
  </Form>
  <a href="src/modules/deletepropparser.php?id=<?php echo $_GET['id']; ?>">Delete Property</a>
</div>

