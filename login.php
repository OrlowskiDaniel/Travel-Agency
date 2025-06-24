<?php
      $page_title = 'Login';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <main>
        <section class="login">
            <div class="login-div">
                
            </div>
            <div class="login-form">
                <a href="index.php" class="back-button">Back</a>
                <h2>Travel</h2>
                <h3>Login</h3>
                <form method="post" action="./dbcalls/checklogin.php" class="login-form">
                    <input type="text" name="username" class="login-form-input input-style-1" placeholder="Username">
                    <input type="password" name="password" class="login-form-input input-style-1" placeholder="Password">
                    <input type="submit" value="Sign in" class="login-form-submit button-style-1">
                    <p>Don't have an account? <a href="registration.php">Sign up</a></p>
                    <p><a href="#">Forgot your password?</a></p>
                    <div class="login-line"></div>
                </form>
                
            </div>
        </section>
    </main>
</body>
</html>