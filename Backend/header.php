<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FashionThreads</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custome CSS file -->
    <link rel="stylesheet" href="/Frontend/css/style.css">

    <?php
    // require functions.php file
    require("functions.php");
    ?>

</head>

<body>

    <!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <h6 class="font-rale m-0">
                <?php
                session_start();
                if (isset($_SESSION["user_id"])) {
                    // Fetch the user's name based on user_id
                    $user_id = $_SESSION["user_id"];
                    $user = $Account->getUserByID($user_id);
                    $user_name = $user["first_name"];

                    // Display the user's name
                    echo "Hello, $user_name!";
                } else {
                    echo "Hello, Guest!";
                }
                ?>
            </h6>
            <div class="font-rale font-size-14">
                <?php
                if (isset($_SESSION["user_id"])) {
                    // User is logged in, show Logout link
                    echo '<a href="/Backend/Template/_logout.php" class="px-3 border-right border-left text-danger">Logout</a>';
                } else {
                    // User is not logged in, show Login and Create Account links
                    echo '<a href="/Backend/login.php" class="px-3 border-right border-left text-success">Login</a>';
                    echo '<a href="/Backend/createAccount.php" class="px-3 border-right text-success">Create Account</a>';
                }
                ?>
            </div>
        </div>
    </header>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand p-3" href="/Backend/index.php"><img src="/assets/Logo/1.png" alt="logo1"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="/Backend/index.php#banner_image_men">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Backend/index.php#banner_image_women">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Backend/index.php#banner_image_kids">Kids</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Backend/index.php#banner_image_accessories">Accessories</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale p-3">
                <a href="/Backend/cart.php" class="py-2 rounded-pill bg-primary">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">
                        <?php echo count($product->getDataForUserCart('cart')); ?>
                    </span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !end Primary Navigation -->

    </header>
    <!-- !end #header -->

    <!-- start #main-site -->
    <main id="main-site">