
<?php include "includes/header.php"; ?>
<div id="contact">
	<h2>Contact Me</h2>
    

    
    <?php

	if ( isset ($_POST['submit']) ) { // if the submit button is clicked...
	$mailMesage = ("{$_POST['name']} @ {$_POST['email']} \n\nWrote: {$_POST['message']}"); // message of the email
	$mailSubject = "{$_POST['subject']}"; // subject of the email
	$mailRecipient = "bassok4council@gmail.com"; // destination email address
	mail ($mailRecipient, $mailSubject , $mailMesage, $mailSender); // function to send the email
	print ("<p>Thank you for contacting me, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user
	}
	?> 
      
	<!--Begin form-->
	<form action="contact.php" method="post" name="contact">
    
    	<label for="name">Name:</label>
        <input name="name" type="text" required="required"/>
        
        <label for="email">Email:</label>
        <input name="email" type="text" required="required"/>
        
        <label for="subject">Subject:</label>
        <select name="subject">
          <option value="Endorse" selected="selected">Endorse</option>
          <option value="Volunteer">Volunteer</option>
          <option value="Contact">Contact</option>
          <option value="Request Yard Sign">Request Yard Sign</option>
        </select>
        
        <label for="message">Message:</label>
        <textarea name="message" cols="40" rows="5" required="required"></textarea>
        
        <input name="submit" type="submit" value="Submit Message" />
        
    
    </form><!--End Form-->

</div>
<?php include "includes/footer.php"; ?>		
    

    


