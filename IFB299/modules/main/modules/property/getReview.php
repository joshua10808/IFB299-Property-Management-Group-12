<?php

	$itemID = (int)$_GET['id'];

	$db->where ("propid", $itemID);

	$houseReviews = $db->get ("reviews", 2);

	if (count($houseReviews) ==0){

		echo'

		<br>

		<br>

		<div id="noRating">

		<h4>No comments or rating for the unit yet. Be the first one to leave a rating</h4>

		</div>

		';

	}else{

		echo'<h3> Newest Reviews</h3>';

		$i=1;

		foreach ($houseReviews as $review){

			echo'

				<br>

				<div id="review'.$i.'">

				<h4>Rating : '.$review["Rating"] .' stars </h4>

				<p> Review : '.htmlspecialchars($review["Reviews"],ENT_QUOTES,"UTF-8").' </p>

				<p>Review at: '.$review["reviewDate"].'</p>

				<p>Review by: '.$review["userReview"].'</p>

				

					

				</div>

				<br><br>						

				';

			$i++;

		}

	}

?>