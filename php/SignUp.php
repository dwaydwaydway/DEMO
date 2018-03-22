                            <?php  
                            session_start();                    
                              if(isset($_POST['newId']) && isset($_POST['newName']) && isset($_POST['newPassword'])){
                                  $newId= $_POST['newId'];
                                  $newName= $_POST['newName'];
                                  $newPassword= $_POST['newPassword'];         
                                  $conn = mysqli_connect("localhost","root","","database");
                                  $checkq = 'SELECT name FROM data WHERE id = "'.$newId.'"';
                                  $check = $conn->query($checkq);
                                  $checkRepeat=$check->fetch_row();
                                  if(!$checkRepeat){
                                    $query = 'INSERT INTO data (id, name, password) VALUES ("'.$newId.'", "'.$newName.'" ,"'.$newPassword.'")';
                                    $result=$conn->query($query);
                                    $_SESSION['users'] = $newName;
                                    echo json_encode($newName);                                     
                                  }
                                  else{
                                    echo json_encode('0');
                                  }                                         
                              }                                                          
                            ?>      