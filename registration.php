<?php
      $page_title = 'Registration';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="registration-page">
            <div>
                <!-- Photo -->
            </div>
            <div class="registration-form">
                <div class="registration-info">
                    <h4>Make your account</h4>
                    <p>Enter your information</p>
                </div>
                <form name="registration" action="./dbcalls/register.php" method="post">
                    
                    <p>Username (required) <br><input class="input-style-1" type="text" name="username" placeholder="name" required></p>
                    <p>E-mail addres (required) <br><input class="input-style-1" type="text" name="email" placeholder="name@email.com" required></p>
                    <p>Telephone number (required) <br><input class="input-style-1" type="text" name="phonenumber" placeholder="890-789-456" required></p>
                    <p>Password (required) <br><input class="input-style-1" type="password" name="password" placeholder="password" required></p>
                    <p class="registration-form-button"><input class="button-style-1" type="submit" name="send" value="Sign in"></p>
                </form>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>