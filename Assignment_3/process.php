<?php
  
    // prevent mailicous code etc
    function processData($data) {
        $text = strip_tags($data);
        $text = trim($data);
        $text = htmlspecialchars($data);
        return $data;
    }

 if($_GET){  
    
      // if fields are not empty
      if(!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['phone']) && !empty($_GET['message'])){
  
          
       $name    = processData($_GET['name']);
       $email   = processData($_GET['email']);
       $phone   = processData($_GET['phone']);
       $message = processData($_GET['message']);
      
      // success message
      echo "Thank you " . $name . " for your messsage! ";
      echo "We will contact you soon at your phone number "  . $phone ;
      echo " or your email " . $email . ".<br><br>";
      
      echo "Below is your message:<br>" . $message ;
    }
    else {
         // error message
        echo "Something went wrong. Please fill in all information and try again!";
    }

} // end outer if

else {
    // error message if php file is loaded from server and not called from form
    echo "This file must be loaded from the web page :)";
} // end outer else

?>