<?php
require "connect.php";


if(isset($_POST['submit'])){
    $fname= $_POST['first'];
    $lname=$_POST['last'];
    $pword=$_POST['pass'];
    $email=$_POST['email'];
 
    $first=filter_var($fname, FILTER_SANITIZE_STRING);
    $last=filter_var($lname, FILTER_SANITIZE_STRING);
    $pass=filter_var($pword, FILTER_SANITIZE_STRING);
    $emails=filter_var($email, FILTER_SANITIZE_STRING);

   /* $hash=hash('sha256',$pass);

    function createSalt(){
        return '2123293dsj2hu2besdbsjdsd';
    }

    $salt=createSalt();
    $pass=hash('sha256', $salt . $hash);*/

    
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    if(empty($fname) || empty($lname) || empty( $pword)||empty($email)) {
        echo "FILL IN ALL FIELDS";
    }elseif($first==FALSE  || $last==FALSE  ||$pass==FALSE||$emails==FALSE){
        echo "Please enter correct data";
    }else{
            try {
                    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    $info= "INSERT INTO Users(firstname, lastname, password,email) 
                        VALUES (?,?,?,?)";
                    $conn->prepare($info)->execute([$first, $last, $hashed_password, $emails]);
                    echo '<script>alert ("USER SUCCESSFULLY CREATED");
                    location=("home.html");
                    </script>';
                    
                   
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }
                
               
}   }

?>