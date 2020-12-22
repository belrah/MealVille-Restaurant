<?php
require "header.php";
?>
<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/mealvillelogo.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>MealVille</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/dodo.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/r-abacha.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/vegyam.jpg" alt="Third slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/drink2.jpg" alt="Fourth slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/grilledfish.jpg" alt="Fifth slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/noodles.jpg" alt="Sixth slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">About Meanville</h4>
    <p><br>The story of MealVille is that that started out of love for family and passion. Our founder saw 
    the need to brigde the gaps of relationship between families due to increased work time of Parents and the inability to get home cooked food at anytime. 
    This deep thought and love brought to birth "MEALVILLE" <br><br>
    MealVille offers home daily homely made food, both local and continental dishes at very affordable prices <br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Our Menu<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/yamnegg.jpg" width="400" class="img-fluid">
              <img src="img/jrice1.jpg" width="400" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/ngwobi.jpg" width="400" class="img-fluid">
              <img src="img/okra.jpg" width="400" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/salad.jpg" width="400" class="img-fluid">
               <img src="img/snail.jpg" width="400" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/peppersoup.jpg" width="400" class="img-fluid">
               <img src="img/grilledfish.jpg" width="400" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <div class="text-center">
    <img  src="img/table1.jpg" width="900"  class="img-fluid rounded">
    </div>
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>


                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
             
    </div>
</section>

<?php
require "footer.php";
?>