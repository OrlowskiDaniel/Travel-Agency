<?php
      $page_title = 'Admin-Hotels';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <main>
        <section class="admin-section">
            <?php include("includes/admin-sidebar.php") ?>
            <div class="admin-content">
                <h2>Admin Flights</h2>
                <table class="admin-flights-table">
                    <div class="top">
                        <div class="status"></div>
                        <div class="admin-search"></div>
                        <div class="add-new"></div>
                    </div>
                    <tr class="tags">
                        <th>Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Addres</th>
                        <th>Stars</th>
                        <th>Rooms(a)</th>
                        <th>Button</th>
                    </tr>
                    <div class="all-items">
                        <?php include("dbcalls/read-hotels.php") ?>
                        <?php
                        foreach($result as $key => $value) {
                            echo '<tr class="item-box">';
                                echo '<td> ' . $value['name'] . ' </td>';
                                echo '<td> ' . $value['country'] . ' </td>';
                                echo '<td> ' . $value['city'] . ' </td>';
                                echo '<td> ' . $value['addres'] . ' </td>';
                                echo '<td> ' . $value['stars'] . ' </td>';
                                echo '<td> ' . $value['rooms_available'] . ' </td>';
                                echo '<td class="buttons-admin-wrap">';
                                    echo '<img src="assets/img/more.png" onclick="showAdminButtons(event)" alt="menu" width="28px" height="28px"></img>';
                                    echo '<div class="admin-buttons">';
                                        echo '<input class="admin-tabel-button edit-button gray-hover" type="submit" value="Edit">';
                                        echo '<form action="./dbcalls/delete-flight.php" method="post">';
                                            echo '<input type="hidden" name="flight_id" value="' . $value['hotel_id'] .'">';
                                            echo '<input class="admin-tabel-button delete-button gray-hover" type="submit" name="" value="Delete">';
                                        echo '</form>';
                                    echo '</div>';
                                echo '</td>';
                            echo '</tr>';
                        }
                        ?>

                    </div>
                </table>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>