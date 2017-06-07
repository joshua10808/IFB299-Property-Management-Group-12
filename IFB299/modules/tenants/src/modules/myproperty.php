<?php
        $id=$_SESSION['userdata'][0]['id'];
	
	$db->where('tenantid', $id);
        $data = $db->getOne('propertys');

?>

<div id="mainWrapper">
	<div id="propertyWrapper">
		<div id="propertyheader">
			<h1><?php echo $data['name']?></h1>
		</div>
		<div id="propertyContent">
			<div id="propertyImage">
				<img src="/IFB299/img/houseImages/house1.jpg" />
			</div>
			<div id="propertyDetails">
				<?php 

				foreach($data as $key => $value){
					echo '
							<div id="property'.$key.'" class="propertySection">
								<div class="propertyKey">'.$key.':</div>
								<div class="propertyValue">'.$value.'</div>
							</div>
					';
				}

				?>			
			</div>

			<div><a href="/IFB299/modules/tenants/">Back to Dashboard</a></div>


		</div>

	</div>
</div>