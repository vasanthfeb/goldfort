<?php
$current_page=basename($_SERVER['PHP_SELF']);
?>

<!-- type="toggle" data-bs-target="#premium_modal" data-bs-toggle="modal" -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4 fixed-top">
       <div class="container">
         <div class="navbar-brand">Gold Fort</div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav_id"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="nav_id">
            <ul class="navbar-nav ms-auto gap-lg-3">
                <li class="nav-item"><a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ?'active':'' ?>">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link <?php echo ($current_page == 'about.php')?'active':'' ?>">About Us</a></li>
                <li class="nav-item"><a href="products.php" class="nav-link <?php echo ($current_page =="products.php") ? 'active':'' ?>">Products</a></li>
                <li class="nav-item"><a href="premiumproducts.php" class="nav-link <?php echo($current_page == "premiumproducts.php") ?'active':'' ?>" >Premium Products</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link <?php echo ($current_page == "contact.php")?'active':''?>">Contact Us</a></li>
            </ul>
        </div>
       </div>

    </nav>
</header>

  <?php
        load_template('_premium_product_login');
        ?>