<?php


require_once('GoodReadsApi.class.php');

$bookId = GoodReadsApi::GetBooksByIsbn('htQdlMeHzVG08AWk7d2Yw','0446520594');

$reviews = GoodReadsApi::GetReviewsByBookId($bookId, 'htQdlMeHzVG08AWk7d2Yw');

print_r($reviews);

?>