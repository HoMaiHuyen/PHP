<?php 
    if ( isset( $_GET["submitButton"] ) ) { 
      header( "./home.php" ); 
      // exit; 
    } 
    else { 
      displayForm(); 
    } 
    function displayForm() { 
    ?> 
    <!DOCTYPE html5> 
    <html> 
      <body> 
        <form action="home.php" method="post"> 
            <label for="firstName">First name</label> 
            <input type="text" name="firstName" id="firstName" value="" /> 
            <label for="lastName">Last name</label> 
            <input type="text" name="lastName" id="lastName" value="" /> 
            <input type="submit" name="submitButton" id="submitButton" value= "Submit" /> 
        </form> 
      </body> 
    </html> 
    <?php 
    } 
?>