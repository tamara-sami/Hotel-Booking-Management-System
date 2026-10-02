<div class="row">


<?PHP 

 $res=getroomsitem();
 while ($row=mysqli_fetch_array($res))
 {
echo <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="pull-right">$row[room_price]/night</h4>
                    <h4><a href="roomdetiles.php?roomid=$row[room_id]"> $row[room_name]</a></h4>
                    <p>$row[room_des]</p>
                    <a class="btn btn-primary" href="#">Book Now</a>
                </div>
            </div>
        </div>
        DELIMETER;
    

 }
?>
</div>

          