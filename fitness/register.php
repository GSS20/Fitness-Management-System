<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<html>
<head>
	<title>Welcome to SOLMUSIC!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>

    <?php

    if(isset($_POST['registerButton'])) {
        echo '<script>
                $(document).ready(function() {
                    $("#loginForm").hide();
                    $("#registerForm").show();
                });
            </script>';
    }
    else {
        echo '<script>
                $(document).ready(function() {
                    $("#loginForm").show();
                    $("#registerForm").hide();
                });
            </script>';
    }

    ?>

    <div id="background">

        <div id="loginContainer">

            <div id="inputContainer">
            	<form id="loginform" action="register.php" method="POST">
            		<h2>Login to your account</h2>
            		<p>
                        <?php echo $account->geterror(Constants::$loginFailed); ?>
            			<label for="loginUsername">Username</label>
            			<input id="loginUsername" name="loginUsername" type="text" placeholder=" " required>
            		</p>
            		<p>
            			<lable for="loginPassword">Password</lable>
            			<input id="loginPassword" name="loginPassword" type="password" placeholder="your password" requird>
            		</p>

            		<button type="submit" name="loginButton">LOG IN</button>
                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span>
                    </div>
                 
            	</form>

            	<form id="registerForm" action="register.php" method="POST">
            		<h2>Create your free account</h2>
            		<p>
                        <?php echo $account->geterror(Constants::$usernameCharacters); ?>
                        <?php echo $account->geterror(Constants::$usernameTaken); ?>
            			<label for="username">Username</label>
            			<input id="username" name="username" type="text" placeholder=" " required>
            		</p>
            		<p>
                        <?php echo $account->geterror(Constants::$firstNameCharacters); ?>
            			<lable for="firstname">First Name</lable>
            			<input id="firstname" name="firstname" type="text" placeholder=" " required>
            		</p>
            		<p>
                        <?php echo $account->geterror(Constants::$lastNameCharacters); ?>
            			<lable for="lastname">Last Name</lable>
            			<input id="lastname" name="lastname" type="text" placeholder=" " required>
            		</p>
            		<p>
                        <?php echo $account->geterror(Constants::$emailDoNotMatch); ?>
                        <?php echo $account->geterror(Constants::$emailInvalid); ?>
                        <?php echo $account->geterror(Constants::$emailTaken); ?>
            			<label for="email">Email</label>
            			<input id="email" name="email" type="email" placeholder=" " required>
            		</p>
            		<p>
            			<label for="email">Confirm email</label>
            			<input id="email2" name="email2" type="email" placeholder=" " required>
            		</p>
            		<p>
                        <?php echo $account->geterror(Constants::$passwordsDoNotMatch); ?>
                        <?php echo $account->geterror(Constants::$passwordCharacters); ?>
            			<label for="password">Password</label>
            			<input id="password" name="password" type="password" requird>
            		</p>
            		<p>
            			<label for="password2">Conform password</label>
            			<input id="password2" name="password2" type="password" placeholder="your password" required>
            		</p>

            		<button type="submit" name="registerButton">SIGN UP</button>
                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account? Log in here.</span>
                    </div>
        
            	</form>
            </div>
        </div>
    </div>
    			
</body>
</html>