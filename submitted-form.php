<h1>Submitted</h1>
<?php

    //echo($_POST['fullname']);

    //filter checks if it's set
    $personName = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS );

    //if the string is empty, itll be null which evaluates to FALSE
    if (!$personName)
    {
        $personName = "Not a valid name";
    }

    // Validate the email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) 
    {
        $email = htmlspecialchars($email); //sanitize for output or storage
    } else {
        $email = "invalid email";
    }

    //Get radio buttons (is it null or a value?)
    $radio = filter_input(INPUT_POST, 'flexRadioDefault'); 

    // get the checkboxes
    $checkbox = filter_input(INPUT_POST, 'learn', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

    $select = filter_input(INPUT_POST, 'sel');



    echo($personName);
    echo($email);
    echo($radio);
    echo($checkbox);
?>