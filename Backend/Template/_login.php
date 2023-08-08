<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email_address"];
    $password = $_POST["user_password"];

    $Account->loginUser($email, $password);
}
?>

<section id="login" class="py-5" style="margin-bottom: 75px;" data-bs-theme="dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4 mt-5">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <a class="navbar-brand d-block text-center mb-4" href="/Backend/login.php">
                            <img src="/assets/Logo/login.png" alt="Logo">
                        </a>
                        <form name="loginForm" method="post" onsubmit="return validateLoginForm()">
                            <div class="mb-4">
                                <label for="email_address" class="form-label">Email Address</label>
                                <input type="email" name="email_address" id="email_address" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="user_password" class="form-label">Password</label>
                                <input type="password" name="user_password" id="user_password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block py-2 mb-1" style="width: 100%;">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            Not a member? <a href="/Backend/createAccount.php">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


