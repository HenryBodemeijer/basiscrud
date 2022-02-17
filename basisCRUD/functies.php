<?php
function emailcheck($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        echo "Email is niet geldig";

    }
}

    function postcodecheck($postcode)
    {
        if (["^[1-9][0-9][1-9][0-9]{3}\s?([a-zA-Z]{2})?$"]) {
            if (!preg_match("/" . "^[1-9][0-9][1-9][0-9]{3}\s?([a-zA-Z]{2})?$" . "/i", $postcode)) {
                return true;
            }
            echo "postcode klopt niet";
            return false;
        }
    }




function huisnummercheck($huisnummer){
           if (is_numeric($huisnummer)) {
               return true;
           }
           else {echo "huisnummer moet een nummer zijn";}
               return false;
}
