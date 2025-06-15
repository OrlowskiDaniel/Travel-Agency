<?php
session_start();
      $page_title = 'Flight-results';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section>
            <form class="flight-search-form" action="flights-results.php" method="GET">
                <div class="flight-search-background">
                    <input class="input-style-2 flight-search-input" type="text" name="departure_city" placeholder="From">
                    <!-- <datalist></datalist> -->
                    <input class="input-style-2 flight-search-input" type="text" name="arrival_city" placeholder="To">
                    <input class="input-style-2 flight-search-input" type="date" name="date">
                    <input class="input-style-2 flight-search-input" type="date" name="return">
                    <button class="button-style-2 flight-search-button" type="submit">Search</button>
                </div>
            </form>
        </section>
        <section class="search-results-section">
            <h2>Recommended departing flights</h2>
            <?php include("dbcalls/search-flight.php"); ?>
            <?php if ($flights): ?>
                <?php foreach ($flights as $flight): ?>
                    <div onclick="showFlightOptions(<?= $flight['flight_id'] ?>)" class="search-result-flight box-style-2">
                        <div>
                            <h3><?= $flight['date'] ?></h3>
                            <p><?= $flight['departure_city'] ?> - <?= $flight['arrival_city'] ?></p>
                        </div>
                        <div>
                            <h3><?= $flight['departure_time'] ?> _______ <?= $flight['arrival_time'] ?></h3>
                        </div>
                        <div>
                            <h3>$<?= $flight['price'] ?></h3>
                            <p>Roundtrip per traveler</p>
                        </div>
                    </div>
                    <div class="flight-options-overlay" id="flightOptions-<?= $flight['flight_id'] ?>" onclick="overlayClick(event)">
                        <div class="flight-options" onclick="event.stopPropagation();">
                            <button class="close-btn" onclick="hideFlightOptions()"><img src="./assets/img/cancel.png" alt=""></button>
                            <h3>Choose a booking option</h3>
                            <div class="option-box">
                                <div>
                                    <h4>Economy Class:</h4>
                                    <p>Enjoy spacious seating, complimentary snacks and beverages, in-flight entertainment, and friendly 
                                        service designed to make your journey pleasant.</p>
                                    <p>Perfect for budget-conscious travelers seeking reliable and convenient flights.</p>
                                    <h4>Price per roundtrip: $<?= $flight['price'] ?></h4>
                                    <form action="./dbcalls/add-booking.php" method="GET">
                                        <input type="submit" name="option1" value="Select Economy">
                                        <input type="hidden" name="price" value="<?= $flight['price'] ?>">
                                        <input type="hidden" name="flight_id" value="<?= $flight['flight_id'] ?>">
                                        <input type="hidden" name="class" value="Economy">
                                    </form>
                                </div>
                                <div>
                                    <?php $buisness_price = $flight['price']+65 ?>
                                    <h4>Business Class:</h4>
                                    <p>Indulge in luxurious, spacious seats that convert into beds, priority check-in and boarding, 
                                        exclusive lounge access, gourmet meals, and premium in-flight amenities.</p>
                                    <p>Designed for comfort and productivity, 
                                        Business Class ensures a seamless and elevated journey from start to finish.</p>
                                    <h4>Price per roundtrip: $<?= $buisness_price ?></h4>
                                    <form action="./dbcalls/add-booking.php" method="GET">
                                        <input type="submit" name="option2" value="Select Business">
                                        <input type="hidden" name="price" value="<?= $buisness_price ?>">
                                        <input type="hidden" name="flight_id" value="<?= $flight['flight_id'] ?>">
                                        <input type="hidden" name="class" value="Business">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No flights found.</p>
            <?php endif; ?>
        </section>
        
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>