<?php

function
	get_item_html($id,$item){
   $output = "<li><a href='#'><img src=' "
		 . $item["img"] . "' alt='"
		 . $item["title"] . "' /> "
		 . "<p>View Details</p>"
		 . "</a></li>";
	
	return $output;
		
		 
		 }
?>