<?php
session_start();
      $page_title = 'Hotel-results';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section>
            <?php include("dbcalls/search-hotel.php"); ?>
            <form class="hotel-search-form" action="hotel-results.php" method="GET">
                <div class="hotel-search-background">
                    <input list="hotel-search-input" autocomplete="off" class="input-style-2 hotel-search-input" type="text" name="place" placeholder="Where are you going?">
                    <datalist id="hotel-search-input">
                        <?
                        foreach ($hotels as $hotel) {
                            echo '<option value=" '. $hotel['name'] .'"></option>';
                        }
                        ?>
                        
                    </datalist>
                    <input class="input-style-2 hotel-search-input" type="date" name="check-in">
                    <input class="input-style-2 hotel-search-input" type="date" name="check-out">
                    <input class="input-style-2 hotel-search-input hotel-search-person" type="number" name="person" placeholder="person" min="1" max="5">
                    <button class="button-style-2 hotel-search-button" type="submit">Search</button>
                </div>
            </form>
        </section>
        <section class="search-results-section">
            <h2>Recommended hotels</h2>
            <?php if ($hotels): ?>
                <?php foreach ($hotels as $hotel): ?>
                    <div class="search-result-hotels box-style-2">
                        <div class="hotel-foto">
                            <img src="assets/img/<?= $hotel['hotel_img'] ?>" alt="foto-of-hotel">
                        </div>
                        <div class="hotel-description">
                            <h3><?= $hotel['name'] ?> <?= $hotel['stars'] ?></h3>
                            <p><?= $hotel['city'] ?> , <?= $hotel['country'] ?></p>
                            <p><small><?= $hotel['description'] ?></small></p>
                        </div>
                        <div class="hotel-button">
                            <a href="hotels/hotel<?= $hotel['hotel_id']?>.php" class="button-style-1 show-hotel-button">Show prices</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hotels found.</p>
            <?php endif; ?>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>