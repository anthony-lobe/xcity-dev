<?php

    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $db = new PDO('mysql:host=localhost;dbname=xcitydb', 'root', '');

        $sql = "SELECT * FROM users where email = '$email' ";
        $result = $db->prepare($sql);
        $result->execute();

        if($result->rowCount() > 0)
        {
            $data = $result->fetchAll();
            if (password_verify($pass, data[0]["password"]))
            {
                echo "connexion effectué";
            }

        }
        else 
        {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, password) VALUES (:email, :pass)";
            $req = $db->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':path', $path, PDO::PARAM_STR);
            $req->execute();
            echo "enregistrement terminé";

        }
    }

?>c