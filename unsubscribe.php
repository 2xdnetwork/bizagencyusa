<?php
require_once __DIR__ . '/app/EmailHelper.php';
$emailHelper = new EmailHelper();
$emailHelper->sendMail();
$notifications = $emailHelper->getMessages();
?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#f7941d">
	<title>Unsubscribe | BizAgencyUSA</title>
	<meta name="description" content="We would be happy to help you grow big if you are ready. Spend less on marketing actions that don't work. Our advertising is efficient and safe.">
	<meta name="robots" content="index,follow">
	<meta name="author" content="bizagencyusa.com">
	<link rel="canonical" href="index.php">
	<meta property="og:title" content="Unsubscribe - BizAgencyUSA">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.bizagencyusa.com/contact-us/">
	<meta property="og:description" content="We would be happy to help you grow big if you are ready. Spend less on marketing actions that don't work. Our advertising is efficient and safe.">
	<meta property="og:image" content="https://www.bizagencyusa.com/assets/img/Headerservices.jpg">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="https://www.bizagencyusa.com/contact-us/">
	<meta name="twitter:title" content="Unsubscribe - BizAgencyUSA">
	<meta name="twitter:description" content="We would be happy to help you grow big if you are ready. Spend less on marketing actions that don't work. Our advertising is efficient and safe.">
	<meta name="twitter:image" content="https://www.bizagencyusa.com/assets/img/Headerservices.jpg">
	<?php include 'includes/css.php'; ?>
	<style>
	.page-header {
		min-height: 85vh;
	}
	
	.bm-loader {
		position: fixed;
		background-color: black;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1080;
		display: flex;
		justify-content: center;
		align-items: center;
	}
    .alert.alert-success.alert-dismissible.fade.show {
        color: green;
        background-color: #c2ffc2;
    }
    .alert.alert-danger.alert-dismissible.fade.show {
        color: red;
        background-color: #f9e0e0;
    }
	</style>

</head>

<body>
	<div class="bm-loader"><img src="/assets/img/bm2.svg" alt="bizagencyusa.com esta cargando..."></div>
	<?php include 'includes/menu.php'; ?>
	<div class="navbar-sentinel"></div>
	<div class="wrapper">
		<div class="header-6">
			<div class="page-header"  style="min-height: 47vh;">
				<div class="page-header-image" data-bg-style="/assets/img/Header-contact.jpg" data-responsive="true"></div>
				<div class="container">
					<div class="mt-3 mt-md-5 row">
						<div class="col-md-7 col-lg-6 mr-auto text-left">
							<h1 class="title text-uppercase h3 animate animate-1"><span class="h6 font-weight-normal mb-2 d-block">We are sorry to see you go!</span> <span class="head-line h3 font-weight-bolder animate animate-2">Unsubscribe</span></h1>
							<div class="buttons text-left animate animate-3"></div>
						</div>
					</div>
				</div>
				<div class="scroll-button shake-vertical">
					<div class="animate animate-4"><a href="index.php#section1" data-js="scroll" class="d-inline-block" aria-label="Scroll to content"><span class="sr-only">Go to Main section</span> <i class="fi flaticon-chevron-arrow-down"></i></a></div>
				</div>
			</div>
		</div>


		<div class="contact-us-5 p-0 mt-7">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mr-auto">
						<div class="title-header">
							<h2>Unsubscribe<br><span class="orange d-block"></span></h2></div>
						<div class="shift-top short"><span class="d-block mt-7 ml-2"><p>We hope to see you again soon.</p></span></div>
					</div>
					<div class="col-md-6 mt-6">
						<div class="contact-us-5_form pt-0 pt-md-7">
                            <?php include 'includes/errorMessage.php'?>
                            <?php include 'includes/successMessage.php'?>

                            <?php if ($_POST):?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    You has been success unsubscribe
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif;?>

							<form name="form" method="POST" id="form_contact1" class="kwes-form" action="">

								<div class="form-control-item mb-3">
									<label for="Email">Email</label>
									<input type="text" required maxlength="255" name="Email" value="" class="form-control form-straight" rules="required|email">
								</div>
								<div class="form-control-item mb-3">
									<button name="submit" type="submit" class="btn btn-lg btn-primary"><strong>Unsubscribe</strong></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-us-4 section-image section-transparent mt-6" data-bg-style="/assets/img/laptop-back.jpg" data-responsive="true">
			<div class="container">
				<div class="row pt-4">
					<div class="col-auto ml-md-0 mx-md-auto">
						<div class="icon d-inline-block"><i class="fi flaticon-telephone text-primary icon"></i></div>
						<div class="icon-text d-inline-block pl-3"> <span class="d-block h3 font-weight-bold text-white">(262) 822-3824</span></div>
					</div>
					<div class="col-auto ml-md-0 mx-md-auto">
						<div class="icon d-inline-block"><i class="fi flaticon-mail text-primary icon"></i></div>
						<div class="icon-text d-inline-block pl-3"> <span class="d-block h3 font-weight-bold text-white">contact@bizagencyusa.com</span></div>
					</div>
				
				</div>
			</div>
		</div>
    <?php include 'includes/footer.php'; ?>
	</div>
	<script src="../assets/js/app.js"></script>

</body>
</html>