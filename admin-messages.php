<?php
session_start();
$page_title = 'Admin-messages';
if($_SESSION['role'] == "admin") {
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <main>
        <section class="admin-section">
            <?php include("includes/admin-sidebar.php") ?>
            <div class="admin-content">
                <h2>Messages</h2>
                <div class="all-messages-box">
                    <?php include("dbcalls/read-message.php");
                        foreach ($result as $key => $value) {
                            echo '<div class="admin-message-box box-style-2">';
                                echo '<div>';
                                    echo '<p>Username: ' . $value['name'] . ' </p>';
                                    echo '<p>Email: ' . $value['mail'] . ' </p>';
                                    echo '<p>PhoneNumber: ' . $value['phonenumber'] . ' </p>';
                                    echo '<p>Company: ' . $value['company'] . ' </p>';
                                echo '</div>';
                                echo '<div>';
                                    echo '<p>Message:<br> ' . $value['comment'] . ' </p>';
                                echo '</div>';
                                echo '<div>';
                                    echo '<form action="./dbcalls/delete-message.php" method="post">';
                                    echo '<input type="hidden" name="id" value="' . $value['id'] .'">';
                                    echo '<input class="delete-button gray-hover" type="submit" name="" value="Delete">';
                                    echo '</form>';
                                echo '</div>';
                            echo '</div>';
                        }

                    ?>
                    <div class="admin-message-box box-style-2">
                        <div>
                            <p>Username: </p>
                            <p>Email: </p>
                            <p>Company: </p>
                        </div>
                        <div>
                            <p>Message: </p>
                        </div>
                        <div>
                            <input class="delete-button gray-hover" type="submit" value="Delete">
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
<?php 
}
else {
    echo "<script>" . "window.location.href='./index.php';" . "</script>";
    
}
?>
</html>