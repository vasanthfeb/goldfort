<?php
 require_once $_SERVER['DOCUMENT_ROOT']. '/goldfort/libs/load.php'; //this is including load file to this page (in this load page we have all other elemetns to load for full website)
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
    


<?php
load_template('_footer_links');

?>
</body>
</html>