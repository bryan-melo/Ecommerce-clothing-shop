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

<section id="login" class="py-5" style="margin-bottom: 30px;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <a class="navbar-brand d-block text-center mb-4" href="/Backend/createAccount.php">
                            <img src="/assets/Logo/signup.png">
                        </a>
                        <form name="createAccountForm" method="post" onsubmit="return validateAccountForm()">
                            <div class="mb-4">
                                <label for="email_address" class="form-label">Email Address</label>
                                <input type="email" name="email_address" id="email_address" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="initial_password" class="form-label">Password</label>
                                <input type="password" name="initial_password" id="initial_password" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="confirm_password" class="form-label">Re-enter Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                            </div>
                            <button type="submit" name="create_account" class="btn btn-primary btn-block py-2 mb-1" style="width: 100%;">Create Account</button>
                        </form>
                        <div class="text-center mt-3">
                            Already have an account? <a href="/Backend/login.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>