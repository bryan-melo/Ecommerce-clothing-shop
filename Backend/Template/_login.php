<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email_address"];
    $password = $_POST["user_password"];

    $Account->loginUser($email, $password);
}
?>

<section id="login" class="py-5" style="margin-bottom: 255px;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 mt-5">
                <a class="navbar-brand p-4" href="/Backend/login.php"><img src="/assets/Logo/login.png"></a>
                <form name="loginForm" method="post" onsubmit="return validateLoginForm()">
                    <div class="form-group my-2">
                        <input type="email" name="email_address" id="email_address" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group my-4">
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="width: 100%;">Login</button>
                </form>
                <div class="text-center mt-3">
                    Not a member? <a href="/Backend/createAccount.php">Create Account</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>