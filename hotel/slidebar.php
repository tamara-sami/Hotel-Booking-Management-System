
<?php require_once ('connection.php'); ?>
<div style="font-size: 16px; direction: rtl; text-align: left; overflow-y: auto; max-height: 100vh;">

    <!-- عنوان ROOMS -->
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="font-size: 20px; font-weight: bold;">ROOMS</h2>
    </div>

    <!-- 🔹 All Rooms -->
    <a href="index.php?id=1#rooms-section" class="list-group-item list-group-item-action border-0" style="padding: 6px 10px; display: block;">
        All Rooms
    </a>

    <!-- تصنيفات ROOMS -->
    <?php 
    $results = mysqli_query($conn, "SELECT * FROM category WHERE catogry_id <= 4");
    while ($row = mysqli_fetch_array($results)) { 
        echo '<a href="index.php?id=' . $row['catogry_id'] . '#rooms-section" class="list-group-item list-group-item-action border-0" style="padding: 6px 10px; display: block;">' . $row['catogry_name'] . '</a>';
    }
    ?>

    <!-- فاصل -->
    <hr style="margin: 25px 0; border-top: 2px dashed #ccc;">

    <!-- عنوان SERVICES -->
    <div style="text-align: center; margin-bottom: 15px;">
        <h2 style="font-size: 18px; font-weight: bold;">SERVICES</h2>
    </div>

    <!-- تصنيفات SERVICES -->
    <?php 
    $services = mysqli_query($conn, "SELECT * FROM category WHERE catogry_id >= 5");
    while ($row = mysqli_fetch_array($services)) { 
        echo '<a href="index.php?id=' . $row['catogry_id'] . '#rooms-section" class="list-group-item list-group-item-action border-0" style="padding: 6px 10px; display: block;">' . $row['catogry_name'] . '</a>';
    }
    ?>
</div>
