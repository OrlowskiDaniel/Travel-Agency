<?php
      $page_title = 'Hello';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section>
            <form class="flight-search-form" action="search.php" method="GET">
                <div class="flight-search-background">
                    <input class="input-style-2 flight-search-input" type="text" name="from" placeholder="From" required>
                    <input class="input-style-2 flight-search-input" type="text" name="to" placeholder="To" required>
                    <input class="input-style-2 flight-search-input" type="date" name="departure" required>
                    <input class="input-style-2 flight-search-input" type="date" name="return">
                    <button class="button-style-2 flight-search-button" type="submit">Search</button>
                </div>
            </form>
        </section>
        <section class="search-results-section">
            <h2>Recommended departing flights</h2>
            <div onclick="showOptions()" class="search-result-flight box-style-2">
                <div>
                    <h3>From _______ To</h3>
                    <p>Place - Place</p>
                </div>
                <div>
                    <h3>Time</h3>
                </div>
                <div>
                    <h3>Price</h3>
                    <p>Roundtrip per traveler</p>
                </div>
            </div>
        </section>
        
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>