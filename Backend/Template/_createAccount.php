<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_account"])) {
    $email = $_POST["email_address"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $initial_password = $_POST["initial_password"];
    $confirm_password = $_POST["confirm_password"];

    // Call the createAccount method
    $result = $Account->createAccount($email, $first_name, $last_name, $initial_password, $confirm_password);

    if ($result === true) {
        // Account creation successful
        $_SESSION['user_id'] = $Account->getMostRecentID();
        header("Location: ../Backend/index.php"); // Redirect to a success page
        exit();
    } else {
        // Account creation failed, display error message
        $error_message = $result; // Error message returned from createAccount
    }
}
?>

<section id="login" class="py-5" style="margin-bottom: 145px;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 mt-1">
                <a class="navbar-brand p-4" href="/Backend/createAccount.php"><img src="/assets/Logo/signup.png"></a>
                <form name="createAccountForm" method="post" onsubmit="return validateAccountForm()">
                    <div class="form-group my-3">
                        <input type="email" name="email_address" id="email_address" class="form-control"
                            placeholder="Email Address" required>
                    </div>
                    <div class="form-group my-3">
                        <input type="text" name="first_name" id="first_name" class="form-control"
                            placeholder="First Name" required>
                    </div>
                    <div class="form-group my-3">
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name"
                            required>
                    </div>
                    <div class="form-group my-3">
                        <input type="password" name="initial_password" id="initial_password" class="form-control"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group my-3">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                            placeholder="Re-enter Password" required>
                    </div>
                    <button type="submit" name="create_account" class="btn btn-primary btn-block" style="width: 100%;">Create Account</button>
                </form>
                <div class="text-center mt-3">
                    Already have an account? <a href="/Backend/login.php">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>