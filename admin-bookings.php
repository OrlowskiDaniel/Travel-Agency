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
                <h2>Admin Flights</h2>
                <table class="admin-flights-table">
                    <tr class="tags">
                        <th>User</th>
                        <th>Flight</th>
                        <th>Hotel</th>
                        <th>Booking-date</th>
                        <th>Status</th>
                        <th>Price</th>
                    </tr>
                    <div class="all-items">
                        <?php include("dbcalls/read-flights.php") ?>
                        <?php
                        foreach($bookings as $key => $value) {
                            echo '<tr class="item-box">';
                                echo '<td> ' . $value['username'] . ' </td>';
                                echo '<td> ' . $value['flight'] . ' </td>';
                                echo '<td> ' . $value['hotel'] . ' </td>';
                                echo '<td> ' . $value['status'] . ' </td>';
                                echo '<td> ' . $value['price'] . ' </td>';
                                echo '<td class="buttons-admin-wrap">';
                                    echo '<img src="assets/img/more.png" onclick="showAdminButtons(event)" alt="menu" width="28px" height="28px"></img>';
                                    echo '<div class="admin-buttons">';
                                        echo '<input class="admin-tabel-button edit-button gray-hover" type="submit" value="View more">';
                                        echo '<form action="./dbcalls/delete-flight.php" method="post">';
                                            echo '<input type="hidden" name="flight_id" value="' . $value['booking_id'] .'">';
                                            echo '<input class="admin-tabel-button delete-button gray-hover" type="submit" name="" value="Delete">';
                                        echo '</form>';
                                    echo '</div>';
                                echo '</td>';
                            echo '</tr>';
                        }
                        ?>

                        
                    </div>
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