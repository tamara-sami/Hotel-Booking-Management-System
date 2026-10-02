<!doctype html>
<html class="no-js" lang="zxx">
<?php
include_once('connection.php');
include('head.php');
?>

<body>
<?php include('navbar.php'); ?>

<!-- ✅ مسافة بعد النافبار -->
<br><br><br>

<div class="container mt-5">
    <div class="row">
       <?php 
       $result = getroom($_GET['roomid']);
       $row = mysqli_fetch_array($result);

       if (!$row) {
           echo "<div class='alert alert-danger'>Room not found.</div>";
           exit;
       }
       ?>

        <div class="col-md-6">
            <img src="img/rooms/<?php echo $row['room_image']; ?>" class="img-fluid" alt="<?php echo $row['room_name']; ?>">
        </div>

        <div class="col-md-6">

            <h3><?php echo $row['room_name']; ?></h3>
            <h4 class="text-success mb-3">JD<?php echo $row['room_price']; ?> / Two Days</h4>

            <div class="mb-3">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                <?php echo $row['room_rating']; ?> Stars
            </div>

            <p><?php echo $row['long_dec']; ?></p>

            <!-- ✅ زر الحجز الصحيح -->
<a href="addtocart.php?id=<?php echo $row['room_id']; ?>&qty=1" class="btn btn-primary">Book Now</a>

            <a href="index.php" class="btn btn-secondary ms-2">← Back to All Rooms</a>
        </div>
    </div>

    <!-- ✅ التبويبات -->
    <div class="row mt-5">
        <ul class="nav nav-tabs" id="roomTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#desc" role="tab">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab">Reviews</a>
            </li>
        </ul>
        <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="desc" role="tabpanel">
                <p><?php echo $row['room_des']; ?></p>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel">
                <p><?php echo $row['room_rev']; ?> </p>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
