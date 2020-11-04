<?php
    include('includesx/config.php');
    if(isset($_POST['signup'])){
        $email=$_POST['email']; 
        $password=md5($_POST['pass']); 
        $status=1;
        $sql="INSERT INTO  users (email, password)  VALUES(:email, :pass)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':pass',$password,PDO::PARAM_STR);
        $query->execute();
    } 

?>