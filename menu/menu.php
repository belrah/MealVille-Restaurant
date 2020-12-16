<?php

include('include/header.php'); 
include('include/config.php');

//get food table data from database
$select_query = "SELECT * FROM menu ORDER by date";
$result = mysqli_query($conn, $select_query);
$menu_details = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($food_details);

// end of connection
mysqli_close($conn);


?>

<main>
<!-- to display cards -->
<section>
<div class="container">
<div class="container">
  <div class="row">
        <?php foreach($menu_details as $menu_item){ ?>
        <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
        <div class="col">
        <div class="card h-100">
        <img src="assets/image/<?php echo $menu_item['menu_pic']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $menu_item["menu_name"]; ?></h5>
        <p class="card-text"><?php echo $menu_item["menu_desc"]?></p>
        </div>
        </div>
      </div>
  </div>
        <?php }?>
    </div>
</div>
</section>
</main>

<?php 
include('include/footer.php');
?>

