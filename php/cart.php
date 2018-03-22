<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","database");
    $query = 'SELECT itemId FROM deals WHERE buyer="'.$_SESSION['users'].'"';
    $result = $conn->query($query);
    $pur = $result->fetch_all();
    $data='<div style="height:5px; "></div>';
    for($j=0;$j<count($pur,0);$j++){
        $query='SELECT itemName, itemPrice, itemImage, seller, description FROM item WHERE id = '.$pur[$j][0].'';
        $result = $conn->query($query);
        $temp=$result->fetch_all();
        
        $data=$data.'<div class="row" style="background: white; padding:5px;width:99.99%; height:150px;left:5px;padding-right:20px;">
        <div class="col-xs-4" style="display: inline-block;" >
          <a href="'.$temp[0][2].'" data-lightbox="image-1"><img src="'.$temp[0][2].'" alt="" style="width:100% ;border-radius:10%;""></a>
        </div>
        <div class="col-xs-offset-1 col-xs-7" style="display: inline-block; width:50%; margin-left:5px;">
          <h4>'.$temp[0][0].'</h4>
          <p style="text-align: left">'.$temp[0][4].'</p>
        </div> 
      </div><div style="height:5px; "></div>';
    }
    echo($data);
    
?>