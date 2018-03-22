<?php
session_start();

    if(isset($_POST['itemName'])&&isset($_POST['itemPrice'])&&isset($_POST['itemImage'])&&isset($_POST['description'])){   
        $trimmed = str_replace('C:\fakepath','',$_POST['itemImage']);  
        
        $conn = mysqli_connect("localhost","root","","database");
        $query='INSERT INTO `item`(`itemName`, `itemPrice`, `itemImage`, `seller`, `description`, `type`)
         VALUES ("'.$_POST['itemName'].'",'.$_POST['itemPrice'].',"/'.$trimmed.'","'.$_SESSION['users'].'","'.$_POST['description'].'","'.$_POST['radio'].'")';
        $result=$conn->query($query);
        echo ($result);
    }
    else{
        echo("not in");
    }
   
?>
