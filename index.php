<?php
      $page_title = 'Index';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section>
            <form action="search.php" method="GET">
                <h2>Search Flights</h2>
                <input type="text" name="from" placeholder="From" required>
                <input type="text" name="to" placeholder="To" required>
                <input type="date" name="departure" required>
                <input type="date" name="return">
                <button type="submit">Search</button>
            </form>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>