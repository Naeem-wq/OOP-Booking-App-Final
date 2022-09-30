<!-- ============================ Setup ================================= -->

<?php

$pageTitle = "Hotel Booking. Let's compare and book.";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links page template -->
    <?php require_once "../pages/landingPage.php"; ?>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>

    <header class="firstHeader">

        <h1 class="headerTitle">Hotel Booking App</h1>

    </header>


    <main>

        <div class="mainSection">

            <!-- Form -->
            <form action="../pages/compare.php" class="formStyle" method="POST">

                <h1 class="formTitle">Let's get things started</h1>

                <!-- Name Input -->
                <div class="input-group">
                    <input type="text" id="name" required class="input" name="firstname">
                    <label for="firstname" class="input-label">First name</label>
                </div>

                <!-- Surname Input -->
                <div class="input-group">
                    <input type="text" id="surname" required class="input" name="surname">
                    <label for="surname" class="input-label">Surname</label>
                </div>

                <!-- Email Input -->
                <div class="input-group">
                    <input type="email" id="email" required class="input" name="email">
                    <label for="email" class="input-label">Email Address</label>
                </div>


                <div class="inputDate">

                    <!-- Check In Date Input -->
                    <div class="inputGroup">
                        <label for="checkIn">Check in:</label>
                        <input type="date" name="checkin" required id="">
                    </div>

                    <!-- Check Out Date Input -->
                    <div class="inputGroup">
                        <label for="checkOut" required>Check out:</label>
                        <input type="date" name="checkout" required id="">
                    </div>

                </div>

                <!-- Submit Button -->
                <div class="input-group">
                    <input class="submitBtn" type="submit" name="detailsSubmission" value="Submit">
                </div>

            </form>
        </div>

    </main>


    <footer>

        <!-- Copyright -->
        <h4>Naeem Witbooi ©2022</h4>

    </footer>

    <!-- Bootstrap Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>