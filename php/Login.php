<?php 
  //header('Content-Type: application/json; charset=UTF-8');
  session_start();

    if(isset($_POST['id']) && isset($_POST['password'])){                                               
      $id= $_POST['id'];
      $password= $_POST['password'];         
      $conn = mysqli_connect("localhost","root","","database");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $query = 'SELECT name,password FROM data WHERE id = "'.$id.'"';
      $result=$conn->query($query);
      $temp= $result->fetch_row();
      if(!$temp){
        echo json_encode('0');
      }  
      else{
        if($temp[1]!=$password){
          echo json_encode('1');
        } 
        else{
          $_SESSION['users'] = $temp[0];
          echo json_encode($temp[0]);
        }        
      }   
    }
  
    
?>