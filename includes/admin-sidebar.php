<div class="admin-side-bar">
    <div class="admin-user-box">
        <p>Username</p>
    </div>
    <ul>
        <li><a href="./admin.php" class="blue-hover">Dashboard</a></li>
        <li><a href="./admin-users.php" class="blue-hover">Users</a></li>
        <li><a href="./admin-bookings.php" class="blue-hover">Booking</a></li>
        <li><a href="./admin-messages.php" class="blue-hover">Messages</a></li>
        <li><a href="./admin-vlight.php" class="blue-hover">Edit Vlights</a></li>
        <li><a href="./admin-hotel.php" class="blue-hover">Edit Hotels</a></li>

        <form action="./dbcalls/process.php" method="post">
            <input type="submit" class="admin-log-out-button gray-hover" value="Log Out">
        </form>
    </ul>
</div>