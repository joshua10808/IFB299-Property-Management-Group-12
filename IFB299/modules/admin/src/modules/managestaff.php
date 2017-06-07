<div id="manageStaff">
	<?php
		if(isset($_GET['id'])){
			$db->where('id', $_GET['id']);
			$staffdata=$db->get('users');
			echo '<H1>Editing '.$staffdata[0]['username'].'</H1>';
			include('editstaffform.php');
		} else{
			include('addstaffform.php');
		}
	?>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready(function() {
        $('#staffTable').DataTable();
    });
    </script>
    <table id="staffTable">
      <thead>
        <tr>
          <th>id</th>
          <th>User Name</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $db->where('staff', '1');
          $userdata=$db->get('users');
          foreach ($userdata as $staff) {
            echo '
            <tr id="property">
              <td id="id">'. $staff["id"] .'</td>
              <td id="name">'. $staff["username"] .'</td>
              <td id="street">'. $staff["firstname"] .'</td>
              <td id="rate">'. $staff["lastname"] .'</td>
              <td id="beds">'. $staff["email"] .'</td>
              <td id="infobutton"> <a href="?module=managestaff&id='. $staff["id"] .'"><img src="/IFB299/img/rightarrow.png" width="20px" /></a> </td>
            </tr>
            ';
          }
        ?>
      </tbody>
    </table>
	<a id="backToDash" href="/IFB299/modules/admin">Back to dashboard</a>


</div>