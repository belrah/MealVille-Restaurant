<?php

include('header.php');
include('includes/config.php');

//get food table data from database
$select_query = "SELECT * FROM menus ORDER by date";
$result = mysqli_query($conn, $select_query);
$menu_details = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($food_details);

// end of connection
mysqli_close($conn);


?>

<main>
    <!-- to display cards -->
    <div class="container mt-5 mb-5">
        <h2 class="mt-5">Select from our menu</h2>
        <div class="card ovf-hidden">
            <div class="container">
                <div class="row">

                    <?php foreach ($menu_details as $menu_item) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
                            <div class="col">
                                <div class="card h-100 text-center">
                                    <img src="img/<?php echo $menu_item['menu_pic']; ?>" class="card-img-top" alt="..." width="200px" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger font-weight-bold"><?php echo $menu_item["menu_name"]; ?></h5>
                                        <h6 class="card-text font-weight-bold">Price: N <?php echo $menu_item["menu_price"]; ?></h6>
                                        <!-- <p class="card-text"><?php echo $menu_item["menu_desc"] ?></p> -->
                                        <a class="btn btn-danger btn-sm font-weight-bold" href="#menu.php" role="button">Details</a>
                                        <a class="btn btn-danger btn-sm font-weight-bold" href="#menu.php" role="button">Pick Menu</a>


                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>

</main>

<?php
include('footer.php');
?>