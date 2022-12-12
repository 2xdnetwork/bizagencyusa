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
	<title>Boost your business's advertising with us | BizAgency-USA</title>
	<meta name="description" content="We would be happy to help you grow big if you are ready. Spend less on marketing actions that don't work. Our advertising is efficient and safe.">
	<meta name="robots" content="index,follow">
	<meta name="author" content="bizagency-usa.com">
	<link rel="canonical" href="index.php">
	<meta property="og:title" content="Boost your business's advertising with us - BizAgency-USA">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.bizagency-usa.com/contact-us/">
	<meta property="og:description" content="We would be happy to help you grow big if you are ready. Spend less on marketing actions that don't work. Our advertising is efficient and safe.">
	<meta property="og:image" content="https://www.bizagency-usa.com/assets/img/Headerservices.jpg">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="https://www.bizagency-usa.com/contact-us/">
	<meta name="twitter:title" content="Boost your business's advertising with us - BizAgency-USA">
	<meta name="twitter:description" content="We would be happy to help you grow big if you are ready. Spend less on marketing actions that don't work. Our advertising is efficient and safe.">
	<meta name="twitter:image" content="https://www.bizagency-usa.com/assets/img/Headerservices.jpg">
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
	<div class="bm-loader"><img src="/assets/img/bm2.svg" alt="bizagency-usa.com esta cargando..."></div>
	<?php include 'includes/menu.php'; ?>
	<div class="navbar-sentinel"></div>
	<div class="wrapper">
		<div class="header-6">
			<div class="page-header">
				<div class="page-header-image" data-bg-style="/assets/img/Header-contact.jpg" data-responsive="true"></div>
				<div class="container">
					<div class="mt-3 mt-md-5 row">
						<div class="col-md-7 col-lg-6 mr-auto text-left">
							<h1 class="title text-uppercase h3 animate animate-1"><span class="h6 font-weight-normal mb-2 d-block">Contact information</span> <span class="head-line h3 font-weight-bolder animate animate-2">We can boost <span class="text-primary">your business</span></span></h1>
							<div class="buttons text-left animate animate-3"></div>
						</div>
					</div>
				</div>
				<div class="scroll-button shake-vertical">
					<div class="animate animate-4"><a href="index.php#section1" data-js="scroll" class="d-inline-block" aria-label="Scroll to content"><span class="sr-only">Go to Main section</span> <i class="fi flaticon-chevron-arrow-down"></i></a></div>
				</div>
			</div>
		</div>
		<div class="content-17 mt-7" id="section1">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title-header">
							<h2>You will love <span class="orange d-block">working with us</span></h2></div>
						<div class=""><img data-img-src="/assets/img/hands.jpg" data-img-src-2x="/assets/img/hands.jpg" alt="" class="shadows"></div>
					</div>
					<div class="col-md-6 mt-0 mt-md-6 shift-top short">
						<div class="content-17_text mt-7">
							<p>In order for your business to thrive, you need to acquire new customers while retaining existing ones. Your customer attraction strategies may not be working. Increased income is not the same as growing your audience.</p>
							<p>We utilize state-of-the-art marketing techniques that produce real results, along with technical support and precise strategies to help business owners succeed.</p>
							<ul class="column-count-2 list-unstyled">
								<li class="mb-3"><span><strong>8660 W Flagler St. Suite 103</strong><br>Miami, Florida. 33144</span></li>
								<li class="mb-3"><span><strong>(262) 822-3824</strong><br>contact@bizagency-usa.com</span></li>
								<li class="mb-3"><span><strong>Monday-friday</strong></span>
									<br>9:00 am - 6:00 pm</li>
								<li class="mb-3"><span><strong>Saturday</strong></span>
									<br>10:00 am - 4:00 pm</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="phrases-2 mt-5 py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="phrases-1_content py-5 pl-2 pl-md-5 pl-lg-7 pr-8 text-uppercase font-weight-bold h5 text-center"><i class="fi flaticon-quote"></i> <span>WE ARE HERE TO HELP YOU GROW YOUR BUSINESS. GROW YOUR INCOME, DON'T PAY MORE FOR BAD MARKETING.
</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-us-5 p-0 mt-7">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mr-auto">
						<div class="title-header">
							<h2>Contact information<br><span class="orange d-block">bizagency-usa.com</span></h2></div>
						<div class="shift-top short"><span class="d-block mt-7 ml-2"><p>In addition to guiding our clients through the entire growing process, we also celebrate their successes along the way.</p></span></div>
					</div>
					<div class="col-md-6 mt-6">
						<div class="contact-us-5_form pt-0 pt-md-7">
                            <?php include 'includes/errorMessage.php'?>
                            <?php include 'includes/successMessage.php'?>
							<form name="form" method="POST" id="form_contact1" class="kwes-form" action="">
								<div class="form-control-item mb-3">
									<label for="SingleLine">Name</label>
									<input type="text" required class="form-control form-straight" name="name" value="" maxlength="255" rules="required|max:255">
								</div>
								<div class="form-control-item mb-3">
									<label for="Email">Email</label>
									<input type="text" required maxlength="255" name="Email" value="" class="form-control form-straight" rules="required|email">
								</div>
								<div class="form-control-item mb-3">
									<label for="SingleLine2">Phone</label>
									<input type="text" name="phone" value="" maxlength="255" class="form-control form-straight" rules="numeric">
								</div>
								<div class="form-control-item mb-3">
									<label for="MultiLine">Message</label>
									<textarea required name="text" class="form-control form-straight" maxlength="500" rules="required|max:500"></textarea>
								</div>
								<div class="form-control-item mb-3">
									<button name="submit" type="submit" class="btn btn-lg btn-primary"><strong>Submit</strong></button>
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
						<div class="icon-text d-inline-block pl-3"> <span class="d-block h3 font-weight-bold text-white">contact@bizagency-usa.com</span></div>
					</div>
				
				</div>
			</div>
		</div>
    <?php include 'includes/footer.php'; ?>
	</div>
	<script src="../assets/js/app.js"></script>

</body>
</html>