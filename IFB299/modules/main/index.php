<?php
  include($_SERVER['DOCUMENT_ROOT'].'/IFB299/includes/index.php');
?>

<?php
	$id = $_GET['id'];

	$db->where("id", $id);
	$data = $db->getOne("propertys");
?>
<div id="mainItemWrapper">
	<div id="propertyWrapper">
	
		<div id="propertyheader">
			<h1><?php echo $data['name']?></h1>
		</div>
		<div id="propertyContent">
			<div id="propertyImage">
				<img src="/IFB299/img/houseImages/house1.jpg" />
			</div>
			<div id="propertyDetails">
			<table id='infoTable'>
				<?php 
				foreach($data as $key => $value){
					echo '
							<tr>
						
							<th>	<div class="propertyKey">'.$key.':</div> </th>
								
								<td><div class="propertyValue">'.$value.'</div></td>
							</tr>
					';
				}

				?>
			</table>
			</div>
			<br>
			<div><a href="modules/booking/bookinginspection.php?id=<?php echo $data['id'];?>">Book an Inspection</a></div>
		

		
		</div>

	</div>
			<div id='ratingAndReview'>
		<h1> Rating and reviews</h1>
		<?php 
		require_once './modules/property/getReview.php';
		?>

		<div id='enterReview'>
		<?php
			echo'
				<form action="?id='.$_GET['id'].'" method="post" id="reviewSubmit">';
		?>
		<fieldset>
		<legend>Review the unit</legend>	
		<p><label >Rating :</label>
	<?php
		for( $i=1;$i<6;$i++){
			echo'<input type="radio" name="Ratings" value="'.$i.'" required/> '.$i.' ';
		}
	
	?>
		<br>
		<label >Review:</label>
		<br>
		<textarea name="Reviews"></textarea>
		<p><input type="submit" value="Review"></p>
		<?php
		echo'
			<input type="hidden" name="propid" value="'.$_GET['id'].'" >';
		?>
		</fieldset>
	

		</form>



		</div>
	</div>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/IFB299/includes/footer.php') ;
	require_once './modules/property/reviewSubmit.php';
?>
