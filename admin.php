<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$page_title = 'Admin';
include("includes/head.php"); 
if($_SESSION['role'] == "admin") {
?>
</head>
<body>
    <main>
        <section class="admin-section">
            <?php include("includes/admin-sidebar.php") ?>
            <div class="admin-content">
                
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