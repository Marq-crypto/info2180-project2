<?php 

//session_start();

require 'connect.php';

    session_start();
    $_SESSION['email']=$_POST['email'];
    $sess_value=$_SESSION['email'];
    $email= $_POST['email'];
    $password=$_POST['password'];
 
    $email=filter_var($email, FILTER_SANITIZE_STRING);
    $pass=filter_var($password, FILTER_SANITIZE_STRING);
    $login=false;
    

    $dup=$conn->query("SELECT * FROM users WHERE email= '$email'");
    $results = $dup->fetchAll(PDO::FETCH_ASSOC);
    

    foreach($results as $row){
       if(password_verify($password, $row['password'])){
           $login=true;
          echo "Login successful";
          echo $sess_value;
          //session_start();
           //header('Location:http://localhost/info2180-project2/home.php');
       }

       else{
           echo '<script> alert("Could not login");
           location=("login.html"); </script>';
       }

      
   }


?>
