<?php
session_start();
$page_title = 'Admin-flights';
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
                        <button onclick="showAddFormFlight()" class="add-new-button button-style-2">Add New +</button>
                    </div>
                    <tr class="tags">
                        <th>Departure City</th>
                        <th>Arrival City</th>
                        <th>Time</th>
                        <th>Price(€)</th>
                        <th>Time</th>
                        <th>Seats</th>
                        <th>Buttons</th>
                    </tr>
                        <?php include("dbcalls/read-flights.php") ?>
                        <?php
                        foreach($flights as $key => $value) {
                            echo '<tr class="item-box">';
                                echo '<td> ' . $value['departure_city'] . ' </td>';
                                echo '<td> ' . $value['arrival_city'] . ' </td>';
                                echo '<td> ' . $value['date'] . ' </td>';
                                echo '<td> ' . $value['price'] . ' </td>';
                                echo '<td> ' . $value['departure_time'] . ' - ' . $value['arrival_time'] . ' </p>';
                                echo '<td> ' . $value['seats_available'] . ' </td>';
                                echo '<td class="buttons-admin-wrap">';
                                    echo '<img src="assets/img/more.png" onclick="showAdminButtons(event)" alt="menu" width="28px" height="28px"></img>';
                                    echo '<div class="admin-buttons">';
                                        echo '<input onclick="showEditForm(event)" class="admin-tabel-button edit-button gray-hover" type="submit" value="Edit">';
                                        echo '<div class="form-overlay" style="display: none;">';
                                            echo '<form class="editform" action="./dbcalls/update-flight.php" method="post">';
                                                echo '<fieldset>';
                                                    echo '<div class="form-row">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="departure_city">Departure city:</label>';
                                                        echo '<input type="text" id="departure_city" name="departure_city" placeholder="' . $value['departure_city'] .'" value="' . $value['departure_city'] .'" required>';
                                                    echo '</div>';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="arrival_city">Arrival city:</label>';
                                                        echo '<input type="text" id="arrival_city" name="arrival_city" placeholder="' . $value['arrival_city'] .'" value="' . $value['arrival_city'] .'" required>';
                                                    echo '</div>';
                                                    echo '</div>';

                                                    echo '<label for="date">Date:</label>';
                                                    echo '<input type="text" id="date" name="date" placeholder="' . $value['date'] .'" value="' . $value['date'] .'" required>';

                                                    echo '<label for="price">Price:</label>';
                                                    echo '<input type="number" id="price" name="price" placeholder="' . $value['price'] .'" value="' . $value['price'] .'" required>';
                                                    echo '<div class="form-row">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="departure_time">Departure time:</label>';
                                                        echo '<input type="text" id="departure_time" name="departure_time" placeholder="' . $value['departure_time'] .'" value="' . $value['departure_time'] .'" required>';
                                                    echo '</div>';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="arrival_time">Arrival time:</label>';
                                                        echo '<input type="text" id="arrival_time" name="arrival_time" placeholder="' . $value['arrival_time'] .'" value="' . $value['arrival_time'] .'" required>';
                                                    echo '</div>';
                                                    echo '</div>';

                                                    echo '<label for="seats_available">Seats:</label>';
                                                    echo '<input type="text" id="seats_available" name="seats_available" placeholder="' . ($value['seats_available'] ?? 'N/A') . '" value="' . $value['seats_available'] .'" required>';

                                                echo '</fieldset>';
                                                echo '<div class="edit-form-buttons">';
                                                echo '<input type="hidden" name="flight_id" value="' . $value['flight_id'] .'">';
                                                echo '<input class="form-edit-button edit-button" type="submit" value="Save">';
                                                echo '<button onclick="closeEditForm(event)" class="form-edit-button delete-button" type="button">Close</button>';
                                                echo '</div>';
                                            echo '</form>';
                                        echo '</div>';
                                        echo '<form action="./dbcalls/delete-flight.php" method="post">';
                                            echo '<input type="hidden" name="flight_id" value="' . $value['flight_id'] .'">';
                                            echo '<input class="admin-tabel-button delete-button gray-hover" type="submit" name="" value="Delete">';
                                        echo '</form>';
                                    echo '</div>';
                                echo '</td>';
                            echo '</tr>';
                        }
                        ?>

                </table>
                <div class="form-overlay-add" style="display: none;">
                            <form class="editform" action="./dbcalls/add-flight.php" method="post">
                                <fieldset>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="departure_city">Departure city:</label>
                                            <input type="text" id="departure_city" name="departure_city" placeholder="">
                                        </div>
                                        <div class="form-group">
                                                <label for="arrival_city">Arrival city:</label>
                                                <input type="text" id="arrival_city" name="arrival_city" placeholder="">
                                        </div>
                                    </div>

                                    <label for="date">Date:</label>
                                    <input type="date" id="date" name="date" placeholder="">

                                    <label for="price">Price:</label>
                                    <input type="number" step=".01" id="price" name="price" placeholder="">

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="departure_time">Departure time:</label>
                                            <input type="time" id="departure_time" name="departure_time" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="arrival_time">Arrival time:</label>
                                            <input type="time" id="arrival_time" name="arrival_time" placeholder="">
                                        </div>
                                    </div>
                                    <label for="seats">Seats:</label>
                                    <input type="number" min="0" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="seats" name="seats_available" placeholder="">
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