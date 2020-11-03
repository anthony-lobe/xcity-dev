<?php

    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        echo $email;
        
        $db = new PDO('mysql:host=localhost;dbname=xcitydb', 'root', '');

        $sql = "SELECT * FROM users where email = '$email' ";
        $result = $db->prepare($sql);
        $result->execute();

        if($result->rowCount() > 0)
        {

        }
        else 
        {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$pass')";
            $req = $db->prepare($sql);
            $req->execute();
            echo "enregistrement terminé";
        }
    }

?>