<?php
session_start();

if($_SESSION['role'] == "admin") {
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
                                    echo '<button onclick="showAdminForm(event)" class="edit-button gray-hover" type="button">Edit</button>';
                                    echo '<div class="form-overlay" style="display: none;">';
                                        echo '<form class="editform" action="index.html" method="post">';
                                            echo '<fieldset>';
                                                echo '<label for="username">Username:</label>';
                                                echo '<input type="text" id="username" name="username" placeholder=" ' . $value['username'] .' ">';
                                                echo '<label for="email">Email:</label>';
                                                echo '<input type="email" id="email" name="email" placeholder=" ' . $value['email'] .' ">';
                                                echo '<label for="phonenumber">Phonenumber:</label>';
                                                echo '<input type="text" id="phonenumber" name="phonenumber" placeholder=" ' . $value['phonenumber'] .' ">';
                                            echo '</fieldset>';
                                            echo '<div class="edit-form-buttons">';
                                            echo '<input class="form-edit-button edit-button" type="submit" value="Save">';
                                            echo '<button onclick="showAdminForm(event)" class="form-edit-button delete-button" type="button">Close</button>';
                                            echo '</div>';
                                        echo '</form>';
                                    echo '</div>';
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
<?php 
}
else {
    echo "<script>" . "window.location.href='./index.php';" . "</script>";
    
}
?>
</html>