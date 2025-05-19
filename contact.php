<?php
      $page_title = 'Contect';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
            </section>
    <section class="contact-page">
        <div class="contact-info-text">
            <h3>Contact Hours</h3>
            <div>
                <h4>Travel</h4>
                <p>Monday - Sunday 8:00 - 17:00</p>
            </div>
            <div>
                <h4>Reservations</h4>
                <p>Monday - Sunday 10:00 - 15:00</p>
            </div>
            <div>
                <h4>Calls pickup:</h4>
                <p>Saturday, Sunday - closed</p>
                <p>Monday - Friday 10:00 - 18:00</p>
            </div>
            <h3>Company</h3>
            <div>
                <p>Travel</p>
                <p>country, place, street</p>
                <p>Postcode</p>
                <p>Region: </p>
            </div>
        </div>
        <div class="contact-form">
            <div class="contact-info">
                <h4>Contact</h4>
                <p>tel. +31 32 732 24 89</p>
                <p>restaurnt@emailaddres.nl</p>
            </div>
            <form name="contact" action="./dbcalls/add-to-reservation.php" method="post">
                <p>First and Last name (required) <br><input type="text" name="name" required></p>
                <p>E-mail addres (required) <br><input type="text" name="mail" required></p>
                <p>Telephone number (required) <br><input type="text" name="number" required></p>
                <p>Number of persons (required) <br><input type="text" name="person" required></p>
                <p>Date (required) <br><input type="text" name="date" required></p>
                <p>Hour (required) <br><input type="text" name="hour" required></p>
                <p>Comment: <br><input type="text" name="comment"></p>
                <p class="contact-form-button"><input type="submit" name="send"></p>
            </form>
        </div>
    </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>