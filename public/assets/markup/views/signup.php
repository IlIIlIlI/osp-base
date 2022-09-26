<?php
include 'data/db-connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../styling/vendor/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Main Styling -->
        <link rel="stylesheet" href="../styling/main.min.css">

        <title>GSO - NAP Quizzes - Login</title>
    </head>
    <body>
        <div id="inner-frame" class="container-fluid">
            <div id="content-head">
                <img id="logo-gso" src="https://www.gso-koeln.de/wp-content/uploads/2020/06/cropped-LOGO-GSO_neu.png">
                <div id="main-headline">
                    <h1>Quizzes</h1>
                    <p>GSO NPA Application</p>
                </div>
            </div>

            <div id="content-main">
                <form class="login-signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="form-group">
                        <label for="userName"><p>GSO Name: <?php echo $reqErrorName; ?></p></label>
                        <input type="text" class="form-control" placeholder="Dein Name hier!" id="userName" name="userName">
                    </div>
                    <div class="form-group">
                        <label for="userMail"><p>GSO Addresse: <?php echo $reqErrorEmail; ?></p></label>
                        <input type="text" class="form-control" placeholder="Deine GSO Adresse hier!" id="userEmail" name="userEmail">
                    </div>
                    <div class="form-group">
                        <label for="userPW"><p>Passwort: <?php echo $reqErrorPW; ?></p></label>
                        <input type="password" class="form-control" id="userPW" name="userPW">
                    </div>
                    <div class="form-group">
                        <label for="userPWconf"><p>Passwort Bestätigen: <?php echo $reqErrorPW; ?></p></label>
                        <input type="password" class="form-control" id="userPWconf" name="userPWconf">
                        <small id="emailHelp" class="form-text text-muted">Teile dein Passwort niemals mit anderen.</small>
                    </div>
                    <div id="remember" class="form-group form-check float-right">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Erinner dich an Mich.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <?php echo $success; ?>
            </div>
        </div>
    </body>
</html>