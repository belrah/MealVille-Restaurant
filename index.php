<?php
require "header.php";
?>

<!-- <header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="logo"><img src="img/mealvillelogo.png" alt="logo"></a>
                <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg font-weight-bolder text-danger"><em>Make a Reservation Now!</em></button>
            </div>
        </div>
    </div>
</header> -->

<header class="header">
    <div class="row">
        <!-- <div class="col-md-12 text-center">
            <a class="logo"><img src="img/mealvillelogo.png" alt="logo"></a>
        </div> -->
        <div>
            <h1 class="text-center font-weigth-bold text-white">Welcome To MealVill Restaurant</h1>
            <p class="text-white text-center">Home of Finger-licking Meals</p>
        </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->
<section id="aboutus">
    <div class="container mt-3 mb-3">
        <h3 class="text-center">MealVille</h3>
        <div class="row">
            <!--carousel-->
            <div class="col-sm">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="img/dodo.jpg" alt="First slide" width="550px" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="img/r-abacha.jpg" alt="Second slide" width="550px" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="img/vegyam.jpg" alt="Third slide" width="550px" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="img/drink2.jpg" alt="Fourth slide" width="550px" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="img/grilledfish.jpg" alt="Fifth slide" width="550px" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="img/noodles.jpg" alt="Sixth slide" width="550px" height="400px">
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
                <div class="arranging">
                    <h1 class="text-center text-danger font-weight-bolder">About Meanville</h1>
                    <p>The story of MealVille is that that started out of love for family and passion. Our founder saw
                        the need to brigde the gaps of relationship between families due to increased work time of Parents and the inability to get home cooked food at anytime.
                        This deep thought and love brought to birth "MEALVILLE"
                    </p>
                    <p>MealVille offers home daily homely made food, both local and continental dishes at very affordable prices. check below to select a menu, book reservation for different occasions or reach out directly to us.</p>
                    <button type="button" onclick="window.location.href='#'" class="btn btn-outline-danger btn-block btn-lg mt-2 font-weight-bolder">Read More About Us</button>
                </div>
            </div>
        </div><br>
    </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class="text-center mt-3 mb-3">
    <h3 class="text-center">Our Menu</h3>
</div>
<div class="container">
    <div class="card-deck">
        <div class="card">
            <img src="img/yamnegg.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
        <div class="card">
            <img src="img/peppersoup.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
        <div class="card">
            <img src="img/grilledfish.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
        <div class="card">
            <img src="img/snail.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
    </div>
    <div class="card-deck mt-2">
        <div class="card">
            <img src="img/salad.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
        <div class="card">
            <img src="img/okra.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
        <div class="card">
            <img src="img/ngwobi.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
        <div class="card">
            <img src="img/jrice1.jpg" width="100px" height="200px" alt="pictures" class="card-img-top">
        </div>
    </div>
    <button type="button" onclick="window.location.href='menu.php'" class="btn btn-outline-danger btn-block btn-lg font-weight-bold mt-2">Select a Menu Now!</button>
</div>

<!----end of gallery -->

<div class="container mt-3 mb-3" id="reservation">
    <h3 class="text-center">Reservation</h3>
    <img src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-danger btn-block btn-lg mt-2 font-weight-bolder">Make a reservation Now!</button>
</div><br><br>

<div class="header2">
</div>

<!-- team section-->
<div class="container mt-3 mb-3">
    <h3 class="text-center">Meet The Team</h3>
    <div class="row">
        <!-- <div class="col-sm-3">
            <button type="button" onclick="" class="btn btn-outline-danger btn-block btn-lg"><img src="img/belrah.jpg" alt="pics" class="img-fluid rounded" height="200px"></button><br>
            <h5 class="text-center text-danger font-weight-bold"><i><b>Mercy KALU</b></i></h5>
        </div>

        <div class="col-sm-3">
            <button type="button" onclick="" class="btn btn-outline-danger btn-block btn-lg"><img src="img/Dami.jpg" alt="pictures" class="img-fluid rounded" height="400px"></button><br>
            <h5 class="text-center text-danger font-weight-bold"><i><b>DAMILOLA OGUNGBENRO</b></i></h5>
        </div>

        <div class="col-sm-3">
            <button type="button" onclick="" class="btn btn-outline-danger btn-block btn-lg"><img src="img/monica.jpg" alt="picturs" class="img-fluid rounded" height="400px"></button><br>
            <h5 class="text-center text-danger font-weight-bold"><i><b>MONICA AKPANG</b></i></h5>
        </div>

        <div class="col-sm-3">
            <button type="button" onclick="" class="btn btn-outline-danger btn-block btn-lg"></button><br>
            <h5 class="text-center text-danger font-weight-bold"><i><b>ABISOLA ADENIJI</b></i></h5>
        </div> -->

        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <a href="http://github.com/belrah">
                        <img src="img/belrah.jpg" width="100px" height="250px" alt="pictures" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center text-danger font-weight-bold"><i><b>MERCY KALU</b></i></h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/Dami.jpg" width="100px" height="250px" alt="pictures" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center text-danger font-weight-bold"><i><b>DAMILOLA OGUNGBENRO</b></i></h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/Monica.jpg" width="100px" height="250px" alt="pictures" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center text-danger font-weight-bold"><i><b>MONICA AKPANG</b></i></h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/Abisola.jpg" width="100px" height="250px" alt="pictures" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center text-danger font-weight-bold"><i><b>ABISOLA ADENIJI</b></i></h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- <div class="col-sm-3">
            <a href="linkedin.com/in/ogungbenro-oluwadamilola-51979bb9"><img src="img/Dami.jpg" class="img-fluid rounded hoverable" height="400px"></a><br><br>
            <h5 class="container"><i><b>Damilola OGUNGBENRO</b></i></h5>
        </div>

        <div class="col-sm-3">
            <a href="linkedin.com/in/akpangmonica"><img src="img/Monica.jpg" class="img-fluid rounded hoverable" height="400px"></a><br><br>
            <h5 class="container"><i><b>Monica AKGPANG</b></i></h5>
        </div>

        <div class="col-sm-3">
            <a href="linkedin.com/in/abisola-adeniji"><img src="img/Abisola.jpg" class="img-fluid rounded hoverable" height="400px"></a><br><br>
            <h5 class="container"><i><b>Abisola ADENIJI</b></i></h5>
        </div> -->

    </div>
</div>

<!-- main page map section-->
<div class="container mt-3 mb-3"><br>
    <h3 class="text-center mb-3">Reach out to Us!!!</h3>
    <div class="row">

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
                <label for=""> Full Name: </label><br><input type="text" name="name" class="form-control"><br>
                <label for="">E-mail: </label><br><input type="text" name="email" class="form-control"><br>
                <label for=""> Subject: </label><br><input type="text" name="subject" class="form-control"><br>
                <label for=""> Message : </label><br><textarea name="message" class="form-control" rows="3"></textarea><br>
                <input type="submit" name="submit" value="Send Message" class="form-control btn-outline-danger font-weight-bold">
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
        <div class="col-sm-8">
            <section class="map" id="footer">
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=21%20Adeniji%20street%20Surulere%20Lagos+(Meal%20Ville%20Restaurant)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="img-fluid rounded" style="width:100%;  height:450px; border:0;">
                </iframe>
        </div>
    </div><br>
</div>



<div class="container">
    <h4><strong>Opening Hours</strong></h4>
    <div class="signup-form">
        <form action="#footer" method="post">
            <div class="form-group">
                <label>Enter Date</label>
                <input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="check_schedule" class="btn btn-outline-danger btn-block">Check Open Time</button><br>
            </div>
        </form>
    </div>
</div>

<!--end of main page map section-->


<?php
require "footer.php";
?>