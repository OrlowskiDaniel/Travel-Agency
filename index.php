<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
      $page_title = 'Index';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="main-search-section">
            <div class="main-search-titel">
                <h2>Flights</h2>
                <p></p>
            </div>
            <?php include("dbcalls/search-flight.php"); ?>
            <form class="flight-search-form" action="flights-results.php" method="GET">
                <div class="flight-search-background">
                    <input list="flight-search-input-dp" class="input-style-2 flight-search-input" autocomplete="off" type="text" name="departure_city" placeholder="From">
                    <datalist id="flight-search-input-dp">
                        <?
                        foreach ($flights as $flight_city) {
                            echo '<option value=" '. $flight_city['departure_city'] .'"></option>';
                        }
                        ?>
                        
                    </datalist>
                    <input list="flight-search-input-ar" class="input-style-2 flight-search-input" autocomplete="off" type="text" name="arrival_city" placeholder="To">
                    <datalist id="flight-search-input-ar">
                        <?
                        foreach ($flights as $flight_city) {
                            echo '<option value=" '. $flight_city['arrival_city'] .'"></option>';
                        }
                        ?>
                        
                    </datalist>
                    <input class="input-style-2 flight-search-input" type="date" name="date">
                    <input class="input-style-2 flight-search-input" type="date" name="return">
                    <button class="button-style-2 flight-search-button" type="submit">Search</button>
                </div>
            </form>
        </section>
        <section class="index-section">
            <div class="photo-grid">
                <div class="img-container">
                    <img src="assets/img/amsterdam.jpg" data-title="Amsterdam" 
                        data-description="Amsterdam, the vibrant capital of the Netherlands, is famous for its historic canals, narrow gabled houses, the Anne Frank House, and a thriving arts scene including the Van Gogh Museum and Rijksmuseum. It's a city where cycling is the primary mode of transportation and coffee shops sit beside centuries-old architecture."
                        class="box-style-1" alt="Amsterdam">
                    <div class="img-text">Amsterdam</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/antwerp.jpg" data-title="Antwerp" 
                        data-description="Antwerp, Belgium's second-largest city, is a global diamond trading hub and an architectural gem featuring a mix of Gothic, Renaissance, and modern styles. Its historic center includes the Cathedral of Our Lady and the Grote Markt, and it’s known for its fashion scene and the legacy of painter Peter Paul Rubens."
                        class="box-style-1" alt="Antwerp">
                    <div class="img-text">Antwerp</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/berlin.jpg" data-title="Berlin" 
                        data-description="Berlin, the capital of Germany, is a dynamic metropolis marked by a tumultuous history and progressive modern identity. Famous for landmarks such as the Berlin Wall, Brandenburg Gate, and Reichstag, it also boasts cutting-edge art galleries, a vibrant nightlife, and a multicultural food scene."
                        class="box-style-1" alt="Berlin">
                    <div class="img-text">Berlin</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/rotterdam.jpg" data-title="Rotterdam" 
                        data-description="Rotterdam is the Netherlands' modern architectural marvel, rebuilt after WWII with bold urban design, skyscrapers, and innovative structures like the Cube Houses and Erasmus Bridge. It’s home to Europe’s largest port and offers a thriving cultural scene, including contemporary art and lively music festivals."
                        class="box-style-1" alt="Rotterdam">
                    <div class="img-text">Rotterdam</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/poland.jpg" data-title="Poland" 
                        data-description="Poland, located in Central Europe, offers a mix of medieval history, post-war resilience, and natural beauty. From the historic Old Towns of Kraków and Gdańsk to the somber Auschwitz-Birkenau memorial and the Tatra Mountains, it is a land of rich cultural traditions and diverse landscapes."
                        class="box-style-1" alt="Poland">
                    <div class="img-text">Poland</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/rome.jpg" data-title="Rome" 
                        data-description="Rome, the capital of Italy, is a living museum filled with ancient ruins like the Colosseum, Roman Forum, and Pantheon. It's the seat of the Vatican City and St. Peter’s Basilica, and offers timeless streets, world-renowned cuisine, and a heritage that spans thousands of years of civilization."
                        class="box-style-1" alt="Rome">
                    <div class="img-text">Rome</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/madrid.jpg" data-title="Madrid" 
                        data-description="Madrid, Spain’s capital, blends regal architecture with a modern pulse. Known for the Royal Palace, Puerta del Sol, and expansive parks like El Retiro, it’s also the home of flamenco, tapas culture, and prestigious museums like the Prado, Reina Sofía, and Thyssen-Bornemisza."
                        class="box-style-1" alt="Madrid">
                    <div class="img-text">Madrid</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/prague.jpg" data-title="Prague" 
                        data-description="Prague, capital of the Czech Republic, is often called 'the City of a Hundred Spires.' With its fairytale skyline, Charles Bridge, and Prague Castle overlooking the Vltava River, it’s a treasure trove of Baroque, Gothic, and Romanesque architecture, steeped in myth, history, and artistic heritage."
                        class="box-style-1" alt="Prague">
                    <div class="img-text">Prague</div>
                </div>
            </div>
            <dialog class="dialog">
                <h3 class="dialogTitel"></h3>
                <p class="dialogText"></p>
                <button class="dialogCloseButton button-style-1">Close</button>
            </dialog>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
</body>
</html>