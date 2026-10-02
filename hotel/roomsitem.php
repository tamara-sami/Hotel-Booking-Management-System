 <div class="row">
<?php 
include_once('connection.php');
$res;

if (isset($_GET['id'])) {
    if ($_GET['id'] == 1) {
        $res = getroomsitem();
    } else {
        $res = getroombycategory($_GET['id']);
    }
} else {
    $res = getroomsitem();
} 

while ($row = mysqli_fetch_array($res)) {
    echo <<<DELIMETER
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="room-card">
            <img src="img/rooms/{$row['room_image']}" class="room-img" alt="{$row['room_name']}">
            <div class="room-content">
                <h4><a href="roomdetiles.php?roomid={$row['room_id']}">{$row['room_name']}</a></h4>
                <div class="room-price">JD{$row['room_price']} / two day</div>
                <p>{$row['room_des']}</p>
                <a class="book-btn" href="roomdetiles.php?roomid={$row['room_id']}">Book Now</a>
            </div>
        </div>
    </div>
    DELIMETER;
}
?>
</div>
