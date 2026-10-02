<div class="row">
<?php 
include_once('connection.php');
$res;

if (isset($_GET['id'])) {
    if ($_GET['id'] == 1) {
        $res = getServices();
    } else {
        $res = getservierbycategory($_GET['id']);
    }
} else {
    $res = getServices();
} 

while ($row = mysqli_fetch_array($res)) {
     echo <<<DELIMETER
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="img/rooms/{$row['servier_image']}" class="room-img" alt="{$row['servier_name']}">
            <div class="room-content">
                <h4><a href="#?roomid={$row['servier_id']}">{$row['servier_name']}</a></h4>
                <p>{$row['servier_des']}</p>
            </div>
        </div>
    </div> 
DELIMETER;
}
?>
</div>
 