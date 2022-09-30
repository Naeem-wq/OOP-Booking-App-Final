<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../classes/customerClass.php";
require "../calculations/createHotels.php";
require "../classes/hotelClass.php";
require "../calculations/calculateDays.php";


$pageTitle = "Hotel Booking. Let's compare and book.";
session_start();

if (isset($_POST['detailsSubmission'])) {

    // Create instance of Customer in user
    $_SESSION['user'] = new Customer(
        rand(1000, 9000),
        $_POST['firstname'],
        $_POST['surname'],
        $_POST['email']
    );

    // Create Hotels in hotel superglobal
    try {
        createHotels("../calculations/hotelData.json");
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error in loading hotels.. ' + $err)
                </script>
            ";
    }

    // calculate duration of trip
    try {
        $numDays = calculateDays($_POST['checkin'], $_POST['checkout']);
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error when calculating length of stay.. ' + $err)
                </script>
            ";
    }

    // Store SESSION Variables
    $_SESSION['numDays'] = $numDays;
    $_SESSION['checkin'] = $_POST['checkin'];
    $_SESSION['checkout'] = $_POST['checkout'];
}

?>
<!--------------------------- Page -------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link page template -->
    <?php include_once "../templates/pageHead.php"; ?>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css//styles.css">

</head>

<body class="container-fluid">

    <header class="secondHeader">

        <div class="secondTitle">
            <!-- Gets form name input and displays users name -->
            <h1>Welcome <?php echo $_SESSION['user']->getFirstname() ?> !</h1>

            <h3>You are one step away from your vacation. The last thing you need to do is choose which hotel you wish stay at.</h3>
        </div>

    </header>

    <main>

        <div class="hotelSelect">

            <div>

                <!-- Loops through hotel array and displays all the details -->
                <?php foreach ($_SESSION['hotels'] as $hotel) {

                    // Picture Element. Changes the picture based on the size of the window
                    echo '
                <div class="container">
                   <picture>
                     <source media="(min-width: 650px)" srcset="../images/hotel1.jpg" class="images" alt="Hotel Image">

                     <source media="(min-width: 465px)" srcset="../images/hotel2.jpg" class="images" alt="Hotel Image">

                    <img src="../images/hotel3.jpg" class="images" alt="Hotel Image">
                   </picture>
                </div>    

                <h2>' . $hotel->getName() . '</h2>

                <h3>Number of days: ' . $numDays . '</h3>

                <h3>Hotel Features:</h3>

                <ul>
                ';
                    foreach ($hotel->getFeatures() as $feature) {
                        echo "<li>$feature</li>";
                    }
                    echo '
                 </ul>

                 <p>Daily Rate: R ' . $hotel->getRate() . ' </p>

                 <p>Total Cost: <b>R ' . $hotel->getRate() * $numDays . '</b> 
                 </p>

                <form action="./bookingConfirmation.php" method="post">
                <input type="hidden" name="rate" value="' . $hotel->getRate() . '">
                <input type="hidden" name="cost" value="' . $hotel->getRate() * $numDays . '">
                <input type="hidden" name="choice" value="' . $hotel->getName() . '">
                <input class="bookBtn" type="submit" name="book" value="Book">
                </form>


                ';
                } ?>
            </div>
        </div>

    </main>

    <!-- Bootstrap Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>