<?php
//checks if emails are valid
$email  = "d@m2example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '"' . $email . '" = Valid' . "\n";
}
else{
    echo '"' . $email . '" = Invalid' . "\n";
}
