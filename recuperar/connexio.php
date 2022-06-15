<?php

function conn(){
    
    $connexio = new mysqli("localhost", "root", "1234", "pelicules");

    if($connexio->connect_errno){
        die ("No s'ha pogut fer la connexió");
    }

    return $connexio;

}

?>