<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
      $page_title = 'Index';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="main-search-section">
            <div class="main-search-titel">
                <h2>Flights</h2>
                <p></p>
            </div>
            <?php include("dbcalls/search-flight.php"); ?>
            <form class="flight-search-form" action="flights-results.php" method="GET">
                <div class="flight-search-background">
                    <input list="flight-search-input-dp" class="input-style-2 flight-search-input" autocomplete="off" type="text" name="departure_city" placeholder="From">
                    <datalist id="flight-search-input-dp">
                        <?
                        foreach ($flights as $flight_city) {
                            echo '<option value=" '. $flight_city['departure_city'] .'"></option>';
                        }
                        ?>
                        
                    </datalist>
                    <input list="flight-search-input-ar" class="input-style-2 flight-search-input" autocomplete="off" type="text" name="arrival_city" placeholder="To">
                    <datalist id="flight-search-input-ar">
                        <?
                        foreach ($flights as $flight_city) {
                            echo '<option value=" '. $flight_city['arrival_city'] .'"></option>';
                        }
                        ?>
                        
                    </datalist>
                    <input class="input-style-2 flight-search-input" type="date" name="date">
                    <input class="input-style-2 flight-search-input" type="date" name="return">
                    <button class="button-style-2 flight-search-button" type="submit">Search</button>
                </div>
            </form>
        </section>
        <section class="index-section">
            <div class="photo-grid">
                <div class="img-container"><img src="assets/img/amsterdam.jpg" class="box-style-1" alt="Amsterdam"><div class="img-text">Amsterdam</div></div>
                <div class="img-container"><img src="assets/img/antwerp.jpg" class="box-style-1" alt="Antwerp"><div class="img-text">Antwerp</div></div>
                <div class="img-container"><img src="assets/img/berlin.jpg" class="box-style-1" alt="Berlin"><div class="img-text">Berlin</div></div>
                <div class="img-container"><img src="assets/img/rotterdam.jpg" class="box-style-1" alt="Rotterdam"><div class="img-text">Rotterdam</div></div>
                <div class="img-container"><img src="assets/img/poland.jpg" class="box-style-1" alt="Poland"><div class="img-text">Poland</div></div>
                <div class="img-container"><img src="assets/img/rome.jpg" class="box-style-1" alt="Rome"><div class="img-text">Rome</div></div>
                <div class="img-container"><img src="assets/img/madrid.jpg" class="box-style-1" alt="Madrid"><div class="img-text">Madrid</div></div>
                <div class="img-container"><img src="assets/img/prague.jpg" class="box-style-1" alt="Prague"><div class="img-text">Prauge</div></div>
            </div>
            <!-- <dialog></dialog> -->
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>