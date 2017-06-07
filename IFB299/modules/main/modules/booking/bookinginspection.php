<?php include($_SERVER['DOCUMENT_ROOT'].'/IFB299/includes/index.php'); ?>
<?php date_default_timezone_set('UTC'); ?>


<div id="content_wrapper">
        <h1>Book Your Inspection</h1>
	<div id="inspection_booking">
		
		<form action="bookingparser.php" method="post">
			<input  required type="hidden" name="propid" value="<?php echo $_GET['id'];?>">
			<input  title="Enter your first name"  required type="text" name="firstname" placeholder="firstname">
			<input   title="Enter your last name" required type="text" name="lastname" placeholder="lastname">
			<input  required type="email" name="email" placeholder="email">
			<input required type="time" name="time" placeholder="booking time">
			<input title="Maximun 2 hours for the inspection" required type="number" name="duration" min="1" max="2" placeholder="duration of inspection">
			<input required title="Please select a date for the booking" type="date" name="date"  min="<?php echo date('Y-m-d'); ?>" >
	
			<input type="submit">
			<input type="Reset">
		</form>
	</div>

</div>




<?php include($_SERVER['DOCUMENT_ROOT'].'/IFB299/includes/footer.php') ?>