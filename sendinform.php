<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='baw_baw';
    
    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Connection is failed";
    }else{
        $name = $_REQUEST["name"];
        $tell = $_REQUEST["phone"];
        $email = $_REQUEST["email"];
        $location = $_REQUEST["location"];
        $aniimalType = $_REQUEST["type"];
        $message = $_REQUEST["message"];
    
        $sql = "insert into tableName (feilds) values ('$name')";
    
        if ($conn->query($sql) === TRUE) {
             $qSqL = "update parkingslots set bookStatus = 1 where bookStatus = 0 limit 1";
             if ($conn->query($qSqL) === TRUE) {
                echo "New record created successfully";
             }
             echo "Error: " . $sql . "<br>" . $conn->error; 
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
    }
?>