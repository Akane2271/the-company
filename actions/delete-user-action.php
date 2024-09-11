<?php
    include "../classes/User.php";

    # Create or instantiate an object
    $user = new User;

    # Call the store method
    $user->delete();
    /**
     * Note: The $_POST holds the data coming from the form (first_name, last_name, username, password)
     */
    ?>


