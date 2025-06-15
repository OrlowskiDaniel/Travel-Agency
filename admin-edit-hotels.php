<?php
session_start();
$page_title = 'Admin-Hotels';
if($_SESSION['role'] == "admin") {
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
                        <button onclick="showAddFormHotel()" class="add-new-button button-style-2">Add New +</button>
                        <div class="form-overlay" style="display: none;">
                        <form class="editform" action="index.html" method="post">
                            <fieldset>
                                <label for="name"></label>
                                <input type="text" id="name" name="user_name">

                                <label for="email"></label>
                                <input type="email" id="mail" name="user_email">

                                <label for="some"></label>
                                <input type="text" id="some" name="user_password">
                            </fieldset>

                            <input class="form-edit-button edit-button" type="submit" value="Save">
                            <button onclick="closeForm()" class="form-edit-button delete-button" type="button">Close</button>
                        </form>
                </div>
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
                        <?php include("dbcalls/read-hotels.php") ?>
                        <?php
                        foreach($hotels as $key => $value) {
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
                                        echo '<input onclick="showEditFormHotel(event)" class="admin-tabel-button edit-button gray-hover" type="submit" value="Edit">';
                                        echo '<div class="form-overlay" style="display: none;">';
                                            echo '<form class="editform" action="index.html" method="post">';
                                                echo '<fieldset>';
                                                    echo '<label for="hotelname">Hotel name:</label>';
                                                    echo '<input type="text" id="hotelname" name="hotelname" placeholder=" ' . $value['name'] .' ">';
                                                    echo '<label for="country">Country:</label>';
                                                    echo '<input type="text" id="country" name="country" placeholder=" ' . $value['country'] .' ">';
                                                    echo '<label for="phonenumber">Phonenumber:</label>';
                                                    echo '<input type="text" id="phonenumber" name="phonenumber" placeholder=" ' . $value['city'] .' ">';
                                                    echo '<label for="addres">Addres:</label>';
                                                    echo '<input type="text" id="addres" name="addres" placeholder=" ' . $value['addres'] .' ">';
                                                    echo '<div class="form-row">';
                                                    echo '<div class="form-group">';
                                                    echo '<label for="stars">stars:</label>';
                                                    echo '<input type="text" id="stars" name="stars" placeholder=" ' . $value['stars'] .' ">';
                                                    echo '</div>';
                                                    echo '<div class="form-group">';
                                                    echo '<label for="rooms_available">Rooms available:</label>';
                                                    echo '<input type="text" id="rooms_available" name="rooms_available" placeholder=" ' . $value['rooms_available'] .' ">';
                                                    echo '</div>';
                                                    echo '</div>';
                                                echo '</fieldset>';
                                                echo '<div class="edit-form-buttons">';
                                                echo '<input class="form-edit-button edit-button" type="submit" value="Save">';
                                                echo '<button onclick="showEditFormHotel(event)" class="form-edit-button delete-button" type="button">Close</button>';
                                                echo '</div>';
                                            echo '</form>';
                                        echo '</div>';
                                        echo '<form action="./dbcalls/delete-flight.php" method="post">';
                                            echo '<input type="hidden" name="flight_id" value="' . $value['hotel_id'] .'">';
                                            echo '<input class="admin-tabel-button delete-button gray-hover" type="submit" name="" value="Delete">';
                                        echo '</form>';
                                    echo '</div>';
                                echo '</td>';
                            echo '</tr>';
                        }
                        ?>

                    
                </table>
                <div class="form-overlay-add" style="display: none;">
                            <form class="editform" action="index.html" method="post">
                                <fieldset>
                                    
                                    <label for="hotel_name">Hotel name:</label>
                                    <input type="text" id="hotel_name" name="hotel_name" placeholder="">
                                        
                                    <label for="Country">Country:</label>
                                    <input type="text" id="Country" name="Country" placeholder="">

                                    <label for="city">City:</label>
                                    <input type="text" id="city" name="city" placeholder="">

                                    <label for="addres">Addres:</label>
                                    <input type="text" id="addres" name="addres" placeholder="">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="stars">Stars:</label>
                                            <input type="number" min="1" max="5" id="stars" name="stars" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="rooms">Rooms available:</label>
                                            <input type="number" min="0" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="rooms" name="rooms" placeholder="">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="edit-form-buttons">
                                    <input class="form-edit-button edit-button" type="submit" value="Add">
                                    <button onclick="hideAddFormFlight()" class="form-edit-button delete-button" type="button">Close</button>
                                </div>
                            </form>
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