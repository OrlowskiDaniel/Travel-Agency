<?php
      $page_title = 'Contect';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
    <section class="contact-page">
        <div class="contact-info-text">
            
            <h3>Contact Hours</h3>
            <div>
                <h4>Help-center:</h4>
                <p>Saturday, Sunday - closed</p>
                <p>Monday - Sunday 10:00 - 15:00</p>
            </div>
            <div>
                <h4>Help-center-phone:</h4>
                <p>Saturday, Sunday - closed</p>
                <p>Monday - Friday 10:00 - 18:00</p>
            </div>
            <div>
                <h3>Company</h3>
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
                <p>First and Last name (required) <br><input class="input-style-2" type="text" name="name" required></p>
                <p>E-mail addres (required) <br><input class="input-style-2" type="text" name="mail" required></p>
                <p>Telephone number (required) <br><input class="input-style-2" type="text" name="number" required></p>
                <p>Comment: <br><input class="textarea input-style-2" type="text" name="comment"></p>
                <input class="contact-form-button button-style-1" type="submit" name="send">
            </form>
        </div>
    </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>