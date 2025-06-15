<div id="admin-side-bar">
    <div class="admin-user-box">
        <p><?php echo $_SESSION['username'];  ?></p>
    </div>
    <ul>
        <li><a href="./admin.php" class="btn blue-hover">Dashboard</a></li>
        <li><a href="./admin-users.php" class="btn blue-hover">Users</a></li>
        <li><a href="./admin-bookings.php" class="btn blue-hover">Booking</a></li>
        <li><a href="./admin-messages.php" class="btn blue-hover">Messages</a></li>
        <li><a href="./admin-edit-flights.php" class="btn blue-hover">Edit Flights</a></li>
        <li><a href="./admin-edit-hotels.php" class="btn blue-hover">Edit Hotels</a></li>

        <form action="./dbcalls/process.php" method="post">
            <input type="submit" class="admin-log-out-button gray-hover" value="Log Out">
        </form>
    </ul>
</div>