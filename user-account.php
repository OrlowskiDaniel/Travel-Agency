<?php
session_start();
      $page_title = 'User-Info';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="user-account-section">
            <div class="user-info-wrap">
                <div class="user-information">
                    <h3>Your account information</h3>
                    <p>Username: <?= $_SESSION['username']  ?></p>
                    <p>Email: <?= $_SESSION['email']  ?></p>
                    <p>PhoneNumber: <?= $_SESSION['phonenumber']  ?></p>
                    <p>Creation time: <?= $_SESSION['creationtime']  ?></p>
                </div>
            </div>
            <form class="editform user-edit-form" action="index.html" method="post">
                <h3>Edit you Account Details</h3>
                <fieldset>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="<?= $_SESSION['username']  ?>">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="<?= $_SESSION['email']  ?>">
                    <label for="phonenumber">Phonenumber:</label>
                    <input type="text" id="phonenumber" name="phonenumber" placeholder="<?= $_SESSION['phonenumber']  ?>">
                </fieldset>
                <div class="edit-form-buttons">
                <input type="hidden" value="<?php $_SESSION['user_id']  ?>">
                <input class="form-edit-button edit-button" type="submit" value="Save">
                </div>
            </form>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>