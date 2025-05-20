<?php
      $page_title = 'Index';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section>
            <div class="index-titel">
                <h2>Flights Search</h2>
                <p></p>
            </div>
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
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>