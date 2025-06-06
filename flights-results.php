<?php
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
                    <div onclick="showFlightOptions()" class="search-result-flight box-style-2">
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
                    <div class="flight-options">
                        <p>form</p>
                        <form action="./dbcalls/add-booking.php">
                <!--  id of flight, finish the java function   -->
                            <div>
                                <p>text</p>
                                <input type="submit" name="option1">
                                <input type="hidden" name="id" value="' . $value['id'] .'">;
                            </div>
                            <div>
                                <p>text</p>
                                <input type="submit" name="option2">
                                <input type="hidden" name="id" value="' . $value['id'] .'">;
                            </div>
                        </form>
                        
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