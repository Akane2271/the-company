<?php
    include "../classes/User.php";

    # Create or instantiate an object
    $user = new User;

    # Call the store method
    $user->update($_POST,$_FILES);
    
     //The $_POST holds the data link the firstname,lastname,username,etc 
     //The $_FILEs holds the image/photo uploaded by the user
     
    ?>


