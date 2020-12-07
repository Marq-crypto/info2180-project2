<?php
require "connect.php";


if(isset($_POST['submit'])){
    $title= filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $description= filter_var($_POST['desc'], FILTER_SANITIZE_STRING);
    $type=filter_var($_POST['type1'], FILTER_SANITIZE_STRING);
    $assign=filter_var($_POST['assign'], FILTER_SANITIZE_STRING);
    $priority= filter_var($_POST['priority'], FILTER_SANITIZE_STRING);
 

    if(empty($title) || empty($description) || empty( $type)||empty($assign) ||empty($priority)) {
        echo "FILL IN ALL FIELDS";
    }elseif($title==FALSE  || $description==FALSE  ||$type==FALSE||$assign==FALSE || $priority==FALSE){
        echo "Please enter correct data";
    }else{
            try {
                    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    $info= "INSERT INTO Issues(title, description, type, priority, assigned_to) 
                        VALUES (?,?,?,?,?)";
                    $conn->prepare($info)->execute([$title, $description, $type, $priority, $assign]);
                    echo '<script>alert ("ISSUE SUCCESSFULLY CREATED");
                    location=("home.php");
                    </script>';
                    
                   
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }
                
               
}   }

?>
              