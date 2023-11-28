<?php
    session_start();
    require "functions.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $confirmPassword = addslashes($_POST['confirm_password']);

        // Validate password requirements
        if (strlen($password) < 8 || !preg_match('/[0-9]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[^A-Za-z0-9]/', $password)) {
            $_SESSION['error'] = "Password must be at least 8 characters long and must contain at least one digit, one uppercase letter, one lowercase letter, and one special character.";
        }

        // Check if password and confirm password match
        if ($password !== $confirmPassword) {
            $_SESSION['error'] = "Password and Confirm Password do not match.";
        }

        if (!isset($_SESSION['error'])) {
            $hashPassword = sha1($password);
            $date = date('Y-m-d H:i:s');

            $query = "INSERT INTO users (username, email, password, date) VALUES ('$username', '$email', '$hashPassword', '$date')";

            $result = mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup - Viral</title>
</head>
<body>

    <?php require "header.php";?>

    <div style="margin: auto; max-width: 600px">
        <br>
        <h2 style="text-align: center;">Signup</h2>

        <?php
            // Display error message if set
            if (isset($_SESSION['error'])) {
                echo '<p style="color: red; text-align: center;">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']); // Clear the error message
            }
        ?>

        <form method="post" style="margin: auto; padding:10px;">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required><br>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
            </div>

            <button>Signup</button>
        </form> 
		<p style="text-align: left; margin-bottom: 10px;">
              * Must be at least 8 characters <br>
              * Must contain an upper case character <br>
              * Must contain a lower case character <br>
              * Must contain at least one number <br>
              * Must contain at least one special character
            </p>
    </div>
    <?php require "footer.php";?>

</body>
</html>
