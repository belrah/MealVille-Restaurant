<?php
require "header.php";
?>
<<<<<<< HEAD

<br><br>
<div class="container mt-5">
    <h3 class="text-center"><br>View Reservations<br></h3>

    <?php
    if (isset($_SESSION['user_id'])) {
        echo '<p class="text-white text-danger text-center font-weight-bold">' . $_SESSION['username'] . ', Here you can check your reservation history</p><br>';


        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == "error") {
                echo '<h5 class="text-danger text-center">Error!</h5>';
            }
            if ($_GET['delete'] == "success") {
                echo '<h5 class="bg-danger text-white text-center">Delete was successfull</h5>';
            }
        }
        require 'includes/view.reservation.inc.php';
    } else {
        echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p>';
    }
    ?>
=======
    
<br><br>
<div class="container">
<h3 class="text-center"><br>View Reservations<br></h3>     

<?php
    if(isset($_SESSION['user_id'])){
        echo '<p class="text-white bg-dark text-center">'. $_SESSION['username'] .', Here you can check your reservation history</p><br>';
        
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Delete was successfull</h5>';
        }
    }  
    require 'includes/view.reservation.inc.php';
    
 }
    else {
        echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p>';   
    }    
?>
>>>>>>> 1a7d5cad2aeab531fbacea3f8b2be7e04ae67169

</div>
<br><br>


<?php
require "footer.php";
?>