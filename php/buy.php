<?php 
  session_start();

    if($_POST['quantity']>0){                                               
      $quantity = $_POST['quantity'];  
      $id = $_POST['id']; 
      $conn = mysqli_connect("localhost","root","","database");
      $query = 'UPDATE item SET people = people + '.$quantity;
      $result1 = $conn->query($query);
      $query = 'INSERT INTO deals (buyer,itemId) VALUES ("'.$_SESSION['users'].'",'.$id.');';
      $result2 = $conn->query($query);
      if($result1==1&&$result2==1) echo('seccess');
      else echo('fail');
    }

?>