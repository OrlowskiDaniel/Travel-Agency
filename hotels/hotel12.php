<?php
session_start();
$page_title = 'hotel';


$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$segments = explode('/', rtrim($path, '/'));
$hotel_id = (int) filter_var(end($segments), FILTER_SANITIZE_NUMBER_INT);

include('../dbcalls/conn.php');

$stmt = $conn->prepare("SELECT * FROM Hotels WHERE hotel_id = :hotel_id;");
$stmt->bindParam(":hotel_id", $hotel_id);
$stmt->execute();
$hotel = $stmt->fetch(); 
include('../dbcalls/read-hotel-room.php');
?>
<?php include("../includes/head.php"); ?>
</head>
<body>
    <?php include("../includes/header.php") ?>
    <main>
        <section class="hotel-place-section">
            <div class="hotel-titel-foto">
                <h2><?= $hotel['name'] ?></h2>
                <img src="../assets/img/<?= $hotel['hotel_img'] ?>" alt="hotel-img">
            </div>
            <div class="hotel-info-and-rooms">
                <div>
                    <div class="hotel-info">
                        <div>Stars: <?= $hotel['stars'] ?></div>
                        <p><?= $hotel['country'] ?>, <?= $hotel['city'] ?></p>
                        <p><?= $hotel['description'] ?></p>
                    </div>
                    <table>
                        <tr>
                            <th>Room Type</th>
                            <th>Bed Type</th>
                            <th>Max Guests</th>
                            <th>Price per Night</th>
                            <th></th>
                        </tr>
                        <?php if ($rooms): ?>
                            <?php foreach ($rooms as $room): ?>
                            <tr>
                                <td><?= $room['room_type'] ?></td>
                                <td><?= $room['bed_type'] ?></td>
                                <td><?= $room['max_guests'] ?? 'N/A' ?></td>
                                <td>€<?= $room['price_per_night'] ?></td>
                                <td><form action="../dbcalls/add-hotel-booking.php">
                                    <input type="submit" class="button-style-1 hotel-room-submit-button" value="Select">
                                </form></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="4">No rooms available.</td></tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </section>
        <section class="hotel-reviews-section">
            <div>
                <h2>Leave your review</h2>
            </div>
            <form action="../dbcalls/add-review.php" method="get">
                <div class="form-group">
                    <textarea name="comment" placeholder="Your review..." required></textarea>
                </div>
                <div class="form-group">
                    <input type="number" name="stars" placeholder="Rating (1-5)" min="1" max="5" required>
                </div>
                <input type="hidden" name="hotel_id" value="<?= $hotel_id ?>">
                <input class="button-style-1 review-submit-button" type="submit" value="Submit Review">
            </form>
            <?php include('../dbcalls/read-reviews.php') ?>
            <h2>Others reviews</h2>
            <div class="all-reviews">
                <?php if ($reviews): ?>
                    <?php foreach($reviews as $review): ?>
                    <div class="review-box">
                        <p><?= $review['username'] ?></p>
                        <div><?= $review['rating'] ?> / 5</div>
                        <p><small><?= $review['review_date'] ?></small></p>
                        <p><?= $review['comment'] ?></p>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No reviews.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <?php include("../includes/footer.php") ?>
</body>
</html>