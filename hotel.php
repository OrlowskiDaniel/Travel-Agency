<?php
session_start();
      $page_title = 'Hotel';
?>
<?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        <section class="main-search-section">
            <div class="main-search-titel">
                <h2>Hotels</h2>
                <p></p>
            </div>
            <?php include("dbcalls/search-hotel.php"); ?>
            <form class="hotel-search-form" action="hotel-results.php" method="GET">
                <div class="hotel-search-background">
                    <input list="hotel-search-input" class="input-style-2 hotel-search-input" autocomplete="off" type="text" name="place" placeholder="Where are you going?">
                    <datalist id="hotel-search-input">
                        <?
                        foreach ($hotels as $hotel) {
                            echo '<option value=" '. $hotel['name'] .'"></option>';
                        }
                        ?>
                        
                    </datalist>
                    <input class="input-style-2 hotel-search-input" type="date" name="check-in">
                    <input class="input-style-2 hotel-search-input" type="date" name="check-out">
                    <input class="input-style-2 hotel-search-input hotel-search-person" type="number" name="person" placeholder="person" min="1" max="5">
                    <button class="button-style-2 hotel-search-button" type="submit">Search</button>
                </div>
            </form>
        </section>
        <section class="index-section">
            <div class="photo-grid">
                <div class="img-container">
                    <img src="assets/img/hotel (1).jpg" data-title="Germany" 
                        data-description="This contemporary hotel in Germany combines sleek design with warm hospitality. Located near bustling city centers or serene countryside, it offers top-tier amenities, efficient service, and a minimalist aesthetic often found in modern German architecture." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">Germany</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (2).jpg" data-title="France" 
                        data-description="An elegant hotel in France boasting charming historic architecture, refined interiors, and gourmet dining. Whether nestled in the countryside or along a Parisian boulevard, it captures the romantic and cultural essence of French lifestyle and design." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">France</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (3).jpg" data-title="Mexico" 
                        data-description="A vibrant beachside hotel in Mexico offering colorful decor, oceanfront views, and tropical ambiance. Guests can enjoy authentic cuisine, lively cultural experiences, and easy access to sandy beaches and turquoise waters." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">Mexico</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (4).jpg" data-title="Dubai" 
                        data-description="This ultra-luxurious hotel in Dubai features cutting-edge architecture, opulent interiors, and panoramic skyline views. A fusion of modern extravagance and Middle Eastern elegance, it's often equipped with rooftop pools, fine dining, and five-star service." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">Dubai</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (5).jpg" data-title="Poland" 
                        data-description="A charming hotel in Poland blending historic ambiance with modern comforts. Whether located in Kraków, Warsaw, or the scenic countryside, it often features cozy rooms, traditional Polish design elements, and warm local hospitality." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">Poland</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (6).jpg" data-title="UK" 
                        data-description="A classic British hotel offering a mix of tradition and refinement. Set against scenic landscapes or urban heritage zones, it may feature antique furnishings, English gardens, afternoon tea service, and timeless charm." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">UK</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (7).jpg" data-title="Hawaii" 
                        data-description="A picturesque resort in Hawaii featuring beachfront access, lush palm trees, and panoramic ocean views. Guests are immersed in island life with tropical decor, outdoor pools, and a blend of Hawaiian culture and luxury comfort." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">Hawaii</div>
                </div>

                <div class="img-container">
                    <img src="assets/img/hotel (8).jpg" data-title="Thailand" 
                        data-description="An exotic hotel in Thailand surrounded by serene gardens, traditional Thai architecture, and calming water features. With a focus on tranquility and cultural immersion, it offers spa treatments, regional cuisine, and peaceful luxury." 
                        class="box-style-1" alt="hotel-img">
                    <div class="img-text">Thailand</div>
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