<?php
session_start();
      $page_title = 'Hotel';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="main-search-section">
            <div class="main-search-titel">
                <h2>Hotels</h2>
                <p></p>
            </div>
            <?php include("dbcalls/search-hotel.php"); ?>
            <form class="hotel-search-form" action="hotel-results.php" method="GET">
                <div class="hotel-search-background">
                    <input list="hotel-search-input" class="input-style-2 hotel-search-input" autocomplete="off" type="text" name="place" placeholder="Where are you going?">
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
        <section class="index-section">
            <div class="photo-grid">
                <div class="img-container"><img src="assets/img/hotel (1).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (2).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (3).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (4).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (5).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (6).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (7).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
                <div class="img-container"><img src="assets/img/hotel (8).jpg" class="box-style-1" alt="hotel-img"><div class="img-text">Hotel</div></div>
            </div>
            <!-- <dialog></dialog> -->
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>