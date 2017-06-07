
<div id="viewSchedule">

	<h2> Your booking schedule</h2>




	  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

	  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

	  <script>

	    $(document).ready(function() {

	        $('#scheduleTable').DataTable();

	    });

	  </script>

	 <table id="scheduleTable">

	      <thead>

	        <tr>

	          <th>Property ID</th>

	          <th>Property Name</th>

	          <th>Booking Time</th>

	          <th>Booking duration</th>

	          <th>Visitor's name</th>

	          <th>Visitor's email</th>

	          <th></th>

	        </tr>

	      </thead>

	      <tbody>

<?php
	$db->where("userid",$_SESSION['userdata'][0]['id']);
    $props=$db->get('StaffAssignedProperty');
    foreach($props as $prop){
		$db->where("propid", $prop['propid']);
    	$schedule=$db->get('bookings');
      	foreach($schedule as $date) {
			$db->where ("id", $date['propid']);
			$name  = $db->getOne ("propertys");

      			echo '

	            <tr>

					<td>'. $date["propid"] .'</td>
				
					<td>'. $name["name"] .'</td>
				    <td>'. $date["time"] .'</td>
					<td>'. $date["duration"] .'</td>
					<td>'. $date["firstname"] .'</td>
					<td>'. $date["email"] .'</td>

					

					<td id="infobutton"><a href="?module=viewassignedproperties&id='.$date["propid"].'"><img src="/IFB299/img/rightarrow.png" width="20px" /></a> </td>

	            </tr>

	            ';

      	}
    }
?>

	      </tbody>

	    </table>

<a href="/IFB299/modules/staff/">Back to dashboard</a>
</div>