<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | Bizagencyusa.com</title>
    <link rel="stylesheet" type="text/css" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/user/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/user/css/user-style.css">
    <link rel="stylesheet" type="text/css" href="/user/css/user-css.css">
    <?php include 'includes/css.php'; ?>
    <style>
        .alert.alert-success.alert-dismissible.fade.show {
            color: green;
            background-color: #c2ffc2;
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
                    <p>Sign in to your account<br><br>
                    At bizagencyusa.com we provide web design and development services for small businesses. Our websites provide clients with the information they are looking for, a first impression of a professional design so important to your business, provided services, galleries of work or products, contact forms, among others.

.</p>
                </div>
            </div>
            <div class="form-holder">
            <div class="form-content">
                    <div class="form-items">
                        <?php if ($_POST):?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                If you have a valid account you will receive an email with the password reset link.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif;?>
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                        <form method="post">
                            <input class="form-control" type="email" name="username" placeholder="E-mail Address" required="">
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox iofrm@iofrmtemplate.io</p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="forget15.html#">We can help</a>.
                        </div>
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