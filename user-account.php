<?php
session_start();
      $page_title = 'User-Info';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="user-account-section">
            <div class="user-info-wrap">
                <div class="user-information">
                    <h3>Your account information</h3>
                    <p>Username: <?= $_SESSION['username']  ?></p>
                    <p>Email: <?= $_SESSION['email']  ?></p>
                    <p>PhoneNumber: <?= $_SESSION['phonenumber']  ?></p>
                    <p>Creation time: <?= $_SESSION['creationtime']  ?></p>
                </div>
            </div>
            <form class="editform user-edit-form" action="index.html" method="post">
                <h3>Edit you Account Details</h3>
                <fieldset>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="<?= $_SESSION['username']  ?>">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="<?= $_SESSION['email']  ?>">
                    <label for="phonenumber">Phonenumber:</label>
                    <input type="text" id="phonenumber" name="phonenumber" placeholder="<?= $_SESSION['phonenumber']  ?>">
                </fieldset>
                <div class="edit-form-buttons">
                <input type="hidden" value="<?php $_SESSION['user_id']  ?>">
                <input class="form-edit-button edit-button" type="submit" value="Save">
                </div>
            </form>
        </section>
        <section>
            <div class="user-booking-titel">
                <h2>My Bookings</h2>
                <p></p>
            </div>
        </section>
        <section class="user-booking-section">
            <?php include("dbcalls/read-bookings.php"); ?>
                <?php if ($bookings): ?>
            <table class="admin-flights-table">
                <tr class="tags">
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
                        <td><?= $value['booking_date'] ?></td>
                        <td><?= $value['status'] ?></td>
                        <td><?= $value['arrival_city'] ?? '—' ?></td>
                        <td><?= $value['name'] ?? '—' ?></td>
                        <td><?= $value['total_price'] ?>€</td>
                        <td>
                            <form action="dbcalls/delete-booking.php" method="get">
                                <input type="hidden" name="booking_id" value="<?= $value['booking_id'] ?>">
                                <input type="submit" value="Cancel" class="delete-button gray-hover">
                            </form>
                        </td>
                        <td>
                            <button class="edit-button gray-hover">View Details</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <p>No booking.</p>
            <?php endif; ?>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>