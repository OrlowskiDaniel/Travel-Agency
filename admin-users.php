<?php
      $page_title = 'Admin-users';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <main>
        <section class="admin-section">
            <?php include("includes/admin-sidebar.php") ?>
            <div class="admin-content">
                <h2>Users</h2>
                <div class="all-users-box">
                    <?php 
                    include("dbcalls/read-users.php");
                        foreach($result as $key => $value) {
                            echo '<div class="admin-users-box box-style-2">';
                                echo '<h3> ' . $value['username'] .' </h3>';
                                echo '<div>';
                                    echo '<p>Creation: ' . $value['creationtime'] .' </p>';
                                    echo '<p>Mail: ' . $value['email'] .' </p>';
                                    echo '<p>Phone: ' . $value['phonenumber'] .' </p>';
                                echo '</div>';
                                echo '<div class="buttons-users">';
                                    echo '<input class="edit-button gray-hover" type="submit" value="Edit">';
                                    echo '<form action="./dbcalls/delete-user.php" method="post">';
                                        echo '<input class="delete-button gray-hover" type="submit" value="Delete">';
                                        echo '<input type="hidden" name="user_id" value="' . $value['user_id'] .'">';
                                    echo '</form>';
                                echo '</div>';
                            echo '</div>';
                        
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>