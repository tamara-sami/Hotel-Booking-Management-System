<?php
session_start();
include('connection.php');
include('head.php');
include('navbar.php');

// Function to get room details using mysqli
function getRoomDetails($conn, $id) {
    $stmt = mysqli_prepare($conn, "SELECT * FROM room WHERE room_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}
?>

<div class="container my-5">
    <h2 class="mb-4">🛏️ Room Booking Cart</h2>

    <?php
    $hasItems = false;
    $total = 0;

    echo "<table class='table table-striped text-center'>";
    echo "<thead class='table-dark'>
            <tr>
                <th>Image</th>
                <th>Room Name</th>
                <th>Price/Night</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
          </thead><tbody>";

    foreach ($_SESSION as $key => $qty) {
        if (strpos($key, 'room_') === 0 && $qty > 0) {
            $id = str_replace('room_', '', $key);
            $room = getRoomDetails($conn, $id);
            if ($room) {
                $subtotal = $room['room_price'] * $qty;
                $total += $subtotal;
                $hasItems = true;

                echo "<tr>
                        <td><img src='img/rooms/" . $room['room_image'] . "' alt='" . $room['room_name'] . "' width='80'></td>
                        <td>" . $room['room_name'] . "</td>
                        <td>" . $room['room_price'] . " JOD</td>
                        <td>" . $qty . "</td>
                        <td>" . $subtotal . " JOD</td>
                        <td><a href='remove-room.php?id=" . $id . "' class='btn btn-sm btn-danger'>Remove</a></td>
                      </tr>";
            }
        }
    }

    echo "</tbody></table>";

    if (!$hasItems) {
        echo "<p class='text-center'>🚫 Your cart is currently empty.</p>";
    } else {
        echo "<h4 class='text-end'>Total: {$total} JOD</h4>";
    }
    ?>

    <div class="text-center mt-4">
        <a href="rooms.php" class="btn btn-outline-primary">← Back to Room List</a>
    </div>

    <?php if ($hasItems): ?>
        <!-- PayPal Button -->
        <div class="text-center mt-5">
            <div id="paypal-button-container"></div>
        </div>

        <!-- PayPal SDK -->
        <script src="https://www.paypal.com/sdk/js?client-id=ATjViYJazrOikvs9uaKcfHZU3xd1rJDVf0PGNC30Pzp8hyPCN_XjJAzYGrAGtDZ3uIzdWG7QmCRaLhiA&currency=USD"></script>
        <script>
            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '<?php echo $total; ?>'
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        alert('Payment completed by ' + details.payer.name.given_name + '!');
                        window.location.href = 'thankyou.php';
                    });
                }
            }).render('#paypal-button-container');
        </script>
    <?php endif; ?>
</div>

<?php include('footer.php'); ?>
