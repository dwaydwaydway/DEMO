<?php
    $conn = mysqli_connect("localhost","root","","database");
    $query='SELECT itemName, itemPrice, itemImage, seller, description FROM item WHERE type = '.'"food"';
    $result=$conn->query($query);
    $temp=$result->fetch_all();
    $data='<div style="height:5px; "></div>';
    for($i=0;$i<count($temp,0);$i++){
        $data=$data.'<div class="row" style="background: white; padding:5px;width:99.99%; height:150px;left:5px;padding-right:20px;">
        <div class="col-xs-4" style="display: inline-block; >
          <a href="'.$temp[$i][2].'" data-lightbox="image-1"><img src="'.$temp[$i][2].'" alt="" style="width:100% ;border-radius:10%;""></a>
        </div>
        <div class="col-xs-offset-1 col-xs-7" style="display: inline-block; width:50%; margin-left:5px;">
          <h4>'.$temp[$i][0].'</h4>
          <p style="text-align: left">'.$temp[$i][4].'</p>
        </div>
        <div class="primary-button discoverMore" style="float:right;">
          <button>Discover More</button>
        </div>
      </div><div style="height:5px; "></div>';
    }
    echo($data);
    ;
?>

                