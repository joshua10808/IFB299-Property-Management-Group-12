<?php
if(!empty($_POST)){
	$reviews = $_POST['Reviews'];
	$rating = (int)$_POST['Ratings'];
	$currentID =(int)$_GET['id'];

	$userReview = 'guest';
	
	$data = Array ("propid" => $currentID,
               "Rating" => $rating,
               "Reviews" => $reviews,
			   "userReview" => $userReview
			   
	);
	$ratingAndReviews = $db->insert ('reviews', $data);
	unset($_POST);
	
}

?>