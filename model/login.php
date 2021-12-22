<?php

require('model/connexion_bdd.php');

if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (empty($_POST['password']))
    ) {
    {
        echo('include "view/templates/footer.php";');
        return;
    }


    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Creation d'un objet PDO pour pouvoir se connecter sur la base données, on peut avoir notre PDO dans un fichier à part

    $sql = "SELECT * FROM Customer where email = '$email' ";
    $result = $db->prepare($sql);
    $result->execute();
}
