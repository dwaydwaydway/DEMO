<?php
    $conn = mysqli_connect("localhost","root","","database");
    $query = 'SELECT itemName , itemImage , description, id FROM item order by people DESC LIMIT 1';
    $result = $conn->query($query);
    $cont = $result->fetch_all();
    $data = '<div class="home-box-content">
    <div class="left-text">
        <h4>Top selling item</h4>
        <p>'.$cont[0][2].'
        </p>
        <div class="primary-button">
            <button  class="btn discoverMore" >Discover More</button>
        </div>
    </div>
    <div class="right-image" style="width: 40%;">
        <img src="'.$cont[0][1].'" alt="" style="width:100%;">
    </div>
</div>';
    echo ($data);
?>