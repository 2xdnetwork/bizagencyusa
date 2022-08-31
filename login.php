<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset | Bizagencyusa.com</title>
    <link rel="stylesheet" type="text/css" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/user/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/user/css/user-style.css">
    <link rel="stylesheet" type="text/css" href="/user/css/user-css.css">
    <?php include 'includes/css.php'; ?>
    <style>
        .alert.alert-danger.alert-dismissible.fade.show {
            color: red;
            background-color: #f9e0e0;
        }
    </style>
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="">
                <img src="/assets/img/logo.png" alt="Logo" width="200px">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Digital Solutions For Your Business</h3>
                    <p>Reset Your Password<br><br>
                    At bizagencyusa.com we provide web design and development services for small businesses. Our websites provide clients with the information they are looking for, a first impression of a professional design so important to your business, provided services, galleries of work or products, contact forms, among others.

.</p>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                    <h3>Login</h3>
                        <form method="post">
                            <?php if ($_POST): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Wrong email address or password
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif?>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="password-reset.php">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/userjs/jquery.min.js"></script>
<script src="/userjs/popper.min.js"></script>
<script src="/userjs/bootstrap.min.js"></script>
<script src="/userjs/main.js"></script>
</body>
</html>