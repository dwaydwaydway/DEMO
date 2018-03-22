<?php
    $conn = mysqli_connect("localhost","root","","database");
    $query='SELECT itemName, itemPrice, itemImage, seller, description, id FROM item WHERE type = '.'"food"';
    $result=$conn->query($query);
    $temp=$result->fetch_all();
    $data='<div style="height:5px; "></div>';
    for($i=0;$i<count($temp,0);$i++){
        $data=$data.'<div class="row" style="background: white; padding:5px;width:99.99%; height:150px;left:5px;padding-right:20px;">
        <div class="col-xs-4" style="display: inline-block;" >
          <a href="'.$temp[$i][2].'" data-lightbox="image-1"><img src="'.$temp[$i][2].'" alt="" style="width:100% ;border-radius:10%;""></a>
        </div>
        <div class="col-xs-offset-1 col-xs-7" style="display: inline-block; width:50%; margin-left:5px;">
          <h4>'.$temp[$i][0].'</h4>
          <p style="text-align: left">'.$temp[$i][4].'</p>
        </div>
        <div class="primary-button discoverMore" style="float:right;">
          <button data-toggle="modal" data-target="#exampleModal'.$i.'">Discover More</button>
        </div>
      </div><div style="height:5px; "></div>
      
      
      <div class="modal fade" id="exampleModal'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Discover More</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:-20px;">
          <span aria-hidden="true">&times;</span>
        </button>
              </div>
              <div class="modal-body row">

              <div class="col-xs-7" style="display: inline-block;">
                <h4>Seller: <em>'.$temp[$i][3].'</em></h4>
                <h4>Price: <em>'.$temp[$i][1].'</em></h4>
                <form method="POST" action="">                             
                    <div class="form-group" style="display: inline-block;">                        
                        <input type="number" min="0" class="form-control" id="quantity'.$temp[$i][5].'" name="quantity" placeHolder="Quantity" aria-describedby="emailHelp" style="width:50%;">
                    </div>
                    <button type="submit" class="btn btn-primary buy" id="'.$temp[$i][5].'">Join</button>
                </form>
              </div>

                <div class="col-xs-5" style="display: inline-block;" >
                    <a href="'.$temp[$i][2].'" data-lightbox="image-1"><img src="'.$temp[$i][2].'" alt="" style="width:100% ;border-radius:10%;""></a>
                </div>
              </div>
          </div>
      </div>
  </div>';
    }
    echo($data);
    
?>



