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

<header class="header">
  <div class="row">
    <div class="col-md-12 text-center">
      <a class="logo"><img src="img/logo1.png" alt="logo"></a>
    </div>
    <div class="col-md-12 text-center">
      <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
    </div>
  </div>
</header>



<!--about us section-->

<section id="aboutus">

  <div class="container">
    <h3 class="text-center"><br><br>Chocolate & Moer</h3>
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
              <img class="d-block w-100" src="img/3.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/4.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/5.jpeg" alt="Third slide">
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
        <div class="arranging"><br>
          <hr>
          <h4 class="text-center">Our Story</h4>
          <p><br>The restaurant MonkaS, first opened in 2004 in “Psiri”, one of the oldest districts of Athens in the historical center of the city. In 2010 , the restaurant was awarded its first Michelin star and has retained it since.<br><br>
            The same year, the restaurant relocated to the 6th floor of the Onassis Cultural Centre in Syngrou Avenue and was recently redesigned by award-winning architectural firm Divercity.In warmer months of the year the restaurant moves
            to the 7th floor of the building, offering a unique outdoor setting with panoramic view of the Acropolis, Lycebettus hill and the city skyline.<br><br><br></p>
          <hr>
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
    <h3 class="text-center"><br>Gallery<br><br></h3>
    <div class="d-flex flex-row flex-wrap justify-content-center">
      <div class="d-flex flex-column">
        <img src="img/1.jpg" class="img-fluid">
        <img src="img/2.png" class="img-fluid">
      </div>
      <div class="d-flex flex-column">
        <img src="img/3.jpeg" class="img-fluid">
        <img src="img/4.jpeg" class="img-fluid">
      </div>
      <div class="d-flex flex-column">
        <img src="img/5.jpeg" class="img-fluid">
        <img src="img/6.jpeg" class="img-fluid">
      </div>
      <div class="d-flex flex-column">
        <img src="img/7.jpeg" class="img-fluid">
        <img src="img/8.jpeg" class="img-fluid">
      </div>
    </div>
  </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
  <h3 class="text-center"><br><br>Reservation<br><br></h3>
  <img src="img/16.jpg" class="img-fluid rounded">
  <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>

</div><br><br>

<div class="header2">
</div>

<!-- team section-->
<div class="container">
  <h3 class="text-center"><br><br> The Team</h3><br>
  <div class="row">

    <div class="col-sm-3">
      <button type="button" onclick="" class="btn btn-outline-dark btn-block btn-lg"><img src="1.jpg" class="img-fluid rounded"></button><br>
      <h5 class="container"><i><b>Mercy KALU</b></i></h5>
    </div>

    <div class="col-sm-3">
      <a href="linkedin.com/in/ogungbenro-oluwadamilola-51979bb9"><img src="1.jpg" class="img-fluid rounded hoverable"></a><br><br>
      <h5 class="container"><i><b>Damilola OGUNGBENRO</b></i></h5>
    </div>

    <div class="col-sm-3">
      <a href="linkedin.com/in/akpangmonica"><img src="1.jpg" class="img-fluid rounded hoverable"></a><br><br>
      <h5 class="container"><i><b>Monica AKGPANG</b></i></h5>
    </div>

    <div class="col-sm-3">
      <a href="linkedin.com/in/abisola-adeniji"><img src="1.jpg" class="img-fluid rounded hoverable"></a><br><br>
      <h5 class="container"><i><b>Abisola ADENIJI</b></i></h5>
    </div>

  </div>
</div>

<!-- main page map section-->
<div class="container">
  <h3 class="text-center"><br><br>Reach out to Us!!!</h3><br>
  <div class="row">
    <div class="col-sm-8">
      <section class="map" id="footer">
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=21%20Adeniji%20street%20Surulere%20Lagos+(Meal%20Ville%20Restaurant)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="img-fluid rounded" style="width:100%;  height:400px; border:0;">
        </iframe>
    </div>

    <div class="col-sm-4">
      <?php
      $name = $email = $message = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $subject = test_input($_POST["subject"]);
        $message = test_input($_POST["message"]);
      }

      function test_input($data)
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      ?>

      <form class="form1" method="POST">
        Full Name: <br><input type="text" name="name" class="form-control"><br>
        E-mail: <br><input type="text" name="email" class="form-control"><br>
        Subject: <br><input type="text" name="subject" class="form-control"><br>
        Message : <br><textarea name="message" class="form-control" rows="3"></textarea><br>
        <input type="submit" name="submit" value="Send Message" class="form-control">
      </form>

      <?php
      if (isset($_POST['submit'])) {
        $to = "adeniji.abisola@yahoo.com";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " contacted MealVille Resturant:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
        echo '<script>alert("Thank you for reaching out to MealVille Resturant, we will contact you shortly")</script>';

        // You can also use header('Location: thank_you.php'); to redirect to another page.
      }
      ?>
    </div>
  </div><br>
</div> <br><br>

<div class="container"><br>
  <h4><strong>Opening Hours</strong></h4>
  <div class="signup-form">
    <form action="#footer" method="post">
      <div class="form-group">
        <label>Enter Date</label>
        <input type="date" class="form-control" name="date" placeholder="Date" required="required">
      </div>
      <div class="form-group">
        <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button><br>
      </div>
    </form>
    -->
    <?php
    if (isset($_POST['check_schedule'])) {
      require 'includes/dbh.inc.php';
      $date = $_POST['date'];
      $sql = "SELECT * FROM schedule WHERE date = '$date'";
      $result = $conn->query($sql);
      if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
          echo "
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
            <th scope='row'><em>" . $date . "</em></th>
            <td>" . $row['open_time'] . "</td>
            <td>" . $row['close_time'] . "</td>
            </tr>
            </tbody>
          </table>";
        }
      } else {
        echo "
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
              <th scope='row'><em>" . $date . "</em></th>
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
</div>
</section>
<!--end of main page map section-->



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br>MealVille</h3>
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