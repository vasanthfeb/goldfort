<?php
require_once $_SERVER['DOCUMENT_ROOT']."/goldfort/libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  load_template('_head');
  ?>
</head>
<body>
  <header>
      <?php
    load_template('_header');
    ?>
  </header>
    <main>
          <?php
        load_template('_premium_product_login');
        ?>

       <div class="alert_div">
         <div class="container d-flex justify-content-center">
          <div class="alert alert-danger alert_box_width alert-dismissible fade show">
          <h6 class="alert-heading"><b><i>Login to View Premium Products</i></b></h6>
          <button class="btn-close" data-bs-dismiss="alert"></button>
          <hr>
          <div class="d-flex d-flex justify-content-center">
            <form action="" method="POST">
            <input type="text" class="form-control mb-3" name="username" placeholder="User Name">
            <input type="text" class="form-control mb-3" name="password" placeholder="Password">
            <button class="btn btn-danger w-100">Submit</button>
          </form>

          </div>
          
        </div>
        </div>
       </div>
    </main>
    <style>

    </style>

    <?php
    load_template('_footer_links');
    ?>
</body>
</html>