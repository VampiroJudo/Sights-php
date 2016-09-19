
	<?php

	// * presence
	function has_presence($value){
		return isset($value) &&  $value !== "";
	}
   
    //max length
    function has_max_length($value, $max){
    	return strlen($value) <= $max;
    }
    
	// * inclusion in set

    function has_inclusion_in($value, $set) {
    	return in_array($value, $set);
    }

    function form_errors($errors=array()){
		if (!empty($errors)) {
			$output .= "<div class=\"error\">";
			$output .= "Please fix the following errors.";
			$output .= "<ul>";
			foreach ($errors as $key => $error) {
				$output .= "<li>{$error}</li>";
			}
			$output .= "</ul>";
			$output .= "</div>";
		}
		return $output;
	}
?>


	<?php echo form_errors($errors); ?>	

	

