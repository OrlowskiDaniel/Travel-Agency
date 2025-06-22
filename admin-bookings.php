<?php
session_start();
$page_title = 'Admin-booking';
if($_SESSION['role'] == "admin") {
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <main>
        <section class="admin-section">
            <?php include("includes/admin-sidebar.php") ?>
            <div class="admin-content">
                <h2>Admin Bookings</h2>
                <?php include("./dbcalls/read-admin-bookings.php"); ?>
                
            <table class="admin-flights-table">
                <tr class="tags">
                    <th>User</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Flight</th>
                    <th>Hotel</th>
                    <th>Total Price</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($bookings as $value): ?>
                    <tr class="item-box">
                        <td><?= $value['username'] ?></td>
                        <td><?= $value['booking_date'] ?></td>
                        <td><?= $value['status'] ?></td>
                        <td><?= $value['arrival_city'] ?? '—' ?></td>
                        <td><?= $value['name'] ?? '—' ?></td>
                        <td><?= $value['total_price'] ?>€</td>
                        <td>
                            <form action="dbcalls/delete-booking.php" method="post">
                                <input type="hidden" name="booking_id" value="<?= $value['booking_id'] ?>">
                                <input type="hidden" name="page_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                <input type="submit" value="Cancel" class="delete-button gray-hover">
                            </form>
                        </td>
                        <td>
                            <button class="edit-button gray-hover">View Details</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
            </div>
        </section>
    </main>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
<?php 
}
else {
    echo "<script>" . "window.location.href='./index.php';" . "</script>";
    
}
?>
</html>