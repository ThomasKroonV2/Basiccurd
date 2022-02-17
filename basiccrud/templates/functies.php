<?php
//function emptycheck($voornaam, $achternaam, $email, $telefoonnummer, $straatnaam, $huisnummer, $woonplaats, $postcode) {
//    if ($voornaam != "" or $achternaam != "" or $email != "" or $telefoonnummer != "" or $straatnaam != "" or $huisnummer != "" or $woonplaats != "" or $postcode != "") {
//        return true;
//    }
//}

function postcode_check($postcode) {
    if ("^[1-9][0-9]{3}\s?([a-zA-Z]{2})?$") {
        if (!preg_match("/" . "^[1-9][0-9]{3}\s?([a-zA-Z]{2})?$" . "/i", $postcode)) {
            echo "Postcode klopt niet";
            return true;
        }
    } return false;
}

function email_check($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        echo "email is niet geldig";
    }  return false;
}

function huisnummer_check($huisnummer) {
    if (is_numeric($huisnummer)) {
        return true;
    } else {
        echo "Het huisnummer is geen nummer";
    } return false;
}
?>