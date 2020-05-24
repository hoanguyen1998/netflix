<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST['submitButton'])) {
        $username = FormSanitizer::sanitizeFormUsername($_POST['username']);
        $password = FormSanitizer::sanitizeFormEmail($_POST['password']);

        $success = $account->login($username, $password);

        if($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Netflix</title>

    <link rel="stylesheet" href="assets/style/style.css" />
</head>
<body>
    
    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="assets/images/logo.png" title="Logo" alt="Site logo">
                <h3>Sign In</h3>
                <span>to continue to Netflix</span>
            </div>
            
            <form action="" method="POST">
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <input type="text" name="username" placeholder="Username" value="<?php getInputValue("username"); ?>" required>
                <input type="password" name="password" placeholder="Password" value="<?php getInputValue("password"); ?>" required>
                <input type="submit" name="submitButton">
            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign Up here</a>

        </div>

    </div>

</body>
</html>