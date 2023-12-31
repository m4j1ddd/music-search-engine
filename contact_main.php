<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 
$page_title = $footnav_contact;

error_reporting(0);
ini_set('display_errors', 0);

	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form';
		$to = $contact_email;
		$subject = 'Message from '.$site_title.' contact form';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		$replyto ="Reply-To: $email";
		
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $replyto)) {
		$result='<div class="alert alert-success">Your message has been sent successfully.</div>';
	} else {
		$result='<div class="alert alert-danger">An error occurred. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html dir="rtl">
	<head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $page_title; ?> - <?php echo $site_title; ?></title>
	<meta name="description" content="<?php echo $page_title; ?> - <?php echo $site_title; ?>" />
	<!-- CSS and Scripts -->
	<?php include 'includes/headscripts.php'; ?>
	</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<center><h1><a href="<?php echo $site_url; ?>"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> <?php echo $site_title; ?></a></h1></center>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<!-- Search Form -->
		<form action="<?php echo $site_url;?>/search_main.php" class="input-group input-group-lg">
		<input id="you-search" name="q" type="text" class="form-control" autocomplete="off" placeholder="<?php echo $searchf_text; ?>">
		<input type="hidden" name="change" value="1">
		<span class="input-group-btn">
		<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		</span>
		</form>
		<!-- /Search Form -->
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="page-header">
		<h2><?php echo $page_title; ?></h2>
		</div>
		<form class="form-horizontal" role="form" method="post" action="<?php echo $site_url;?>/contact">
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">نام</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="نام شما" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">ایمیل</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">پیام</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="جواب شما">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="ارسال" class="btn btn-raised btn-warning">
						</div>
					</div>
					
				</form> 
		
		</div>
	</div>
</div>
<!-- end Main Content -->
<?php include 'includes/footer.php';?>