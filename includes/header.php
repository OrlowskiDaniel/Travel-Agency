<header id="header">
    <div class="header-wrapper">
        <p class="logo"><a href="./index.php">Travel</a></p>
        <nav>
            <ul class="header-sidebar">
                <li onclick=hideSidebar()><a href="#"><img src="../assets/img/close.png" alt="menu" width="28px" height="28px"></a></li>
                <li class="gray-hover"><a href="../index.php" class="header-btn"><img src="../assets/img/flight.png" alt="flight" width="20px" height="20px"> Flights</a></li>
                <li class="gray-hover"><a href="../hotel.php" class="header-btn"><img src="../assets/img/hotel.png" alt="hotel" width="20px" height="20px"> Hotel</a></li>
                <li class="gray-hover"><a href="../about.php" class="header-btn"><img src="../assets/img/groups.png" alt="group" width="20px" height="20px"> About us</a></li>
                <li class="gray-hover"><a href="../contact.php" class="header-btn"><img src="../assets/img/call.png" alt="call" width="20px" height="20px"> Contact</a></li>
                <?php if (!isset($_SESSION['user_id'])): ?>
                <!-- not legged in-->
                <li><a href="../login.php" class="button-style-1 sidebar-header-log-in-button">Log In</a></li>
                <li><a href="../registration.php" class="button-style-2 sidebar-header-register-button">Register</a></li>
                <?php else: ?>
                <!-- logged in -->
                <li><a href="../user-account.php" class="button-style-1 sidebar-header-user-button">My Account</a></li>
                <li>
                    <form action="./dbcalls/process.php" method="post">
                        <input type="submit" name="logout" class="button-style-2 sidebar-header-log-out-button" value="Log Out">
                    </form>    
                </li>
                <?php endif; ?>
            </ul>
            <ul class="">
                <li class="header-button hideOnMobile gray-hover"><a href="../index.php" class="header-btn"><img src="../assets/img/flight.png" alt="flight" width="20px" height="20px"> Flights</a></li>
                <li class="header-button hideOnMobile gray-hover"><a href="../hotel.php" class="header-btn"><img src="../assets/img/hotel.png" alt="hotel" width="20px" height="20px"> Hotel</a></li>
                <li class="header-button hideOnMobile gray-hover"><a href="../about.php" class="header-btn"><img src="../assets/img/groups.png" alt="group" width="20px" height="20px"> Aboutus</a></li>
                <li class="header-button hideOnMobile gray-hover"><a href="../contact.php" class="header-btn"><img src="../assets/img/call.png" alt="call" width="20px" height="20px"> Contact</a></li>
                <?php if (!isset($_SESSION['user_id'])): ?>
                <!-- not legged in-->
                <li><a href="../login.php" class="button-style-1 header-log-in-button">Log In</a></li>
                <li><a href="../registration.php" class="button-style-2 header-register-button">Register</a></li>
                <?php else: ?>
                <!-- logged in -->
                <li><a href="../user-account.php" class="button-style-1 header-user-button">My Account</a></li>
                <li>
                    <form action="./dbcalls/process.php" method="post">
                        <input type="submit" name="logout" class="button-style-2 header-log-out-button" value="Log Out">
                    </form>    
                </li>
                <?php endif; ?>
                <li class="menu-button" onclick=showSidebar()><a href="#"><img src="../assets/img/menu.png" alt="menu" width="28px" height="28px"></a></li>
            </ul>
        </nav>
    </div>
</header>