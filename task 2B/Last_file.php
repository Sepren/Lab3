<?php

    if (isset($_SESSION["Name"]) && isset($_SESSION["Surname"]) && isset($_SESSION["Age"])) {
        echo "My name is {$_SESSION['Name']} {$_SESSION['Surname']}. My age is {$_SESSION['Age']}"; // Eminem - My name is (1999)
    }

?>