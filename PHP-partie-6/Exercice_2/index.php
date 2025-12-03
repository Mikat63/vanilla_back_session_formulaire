<?php
    if(isset($_GET['age'])) {
        $age = htmlspecialchars($_GET['age']); 
        echo("Age : $age");
    } else {
        echo("Le paramètre âge n'est pas reneigné dans l'url.");
    }