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
    <?php require_once "../../src/templates/pageHead.php"; ?>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="../../src/css/styles.css">

    <!-- Js Link -->
    <script src="../js/register.js" defer></script>

</head>

<body class="signUpPage">

    <!-- Mounted Vue -->
    <div id="app-register">

        <main>

            <div class="singInSection">

                <!-- Form -->
                <form action="./landingPage.php" class="formStyle" method="POST">

                    <h2 class="formTitle">Create an account</h2>

                    <!-- Email Input -->
                    <div class="input-group">
                        <input type="email" id="email" required class="input" name="email" v-model="input.username">
                        <label for="email" class="input-label">Email Address</label>
                    </div>

                    <!-- Password Input -->
                    <div class="input-group">
                        <input type="password" id="password" required class="input" name="password" v-model="input.password">
                        <label for="password" class="input-label">Password</label>
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="input-group">
                        <input type="password" id="passwordConfirm" required class="input" name="passwordConfrim" v-model="input.confirmpassword">
                        <label for="password" class="input-label">Confirm Password</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="input-group">
                        <input class="submitBtn" type="submit" v-on:click="register()" value="Submit">
                    </div>

                </form>
            </div>

        </main>

        <footer>

            <!-- Copyright -->
            <h4 class="copyright">Naeem Witbooi ©2022</h4>

        </footer>

    </div>

    <!-- Bootstrap Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Vue Links -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>


</body>

</html>