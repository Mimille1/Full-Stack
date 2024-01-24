<?php
function complex_password($password) {
    if (strlen($password) < 8) {
        return false;
    }
    
    if (!preg_match("/\d/", $password)) {
        return false;
    }
    
    if (!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password)) {
        return false;
    }
        return true;
}

$resultat = complex_password("TopSecret42");
echo $resultat ? "true" : "false";

?>