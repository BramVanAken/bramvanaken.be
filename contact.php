<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Contact | Bram Van Aken</title>
</head>
<body>
	<h1>BRAM VAN AKEN</h1>
	<nav>
		<ul><li><a href="index.html">Home</a></li><li><a href="about.html">About me</a></li><li><a href="projects.html">Projects</a></li><li class="active"><a href="contact.php">Contact</a></li></ul>
	</nav>
	<section>
		<h2 class="titlecard">Contact</h2>
	</section>

	<section>
		<h3>Mail</h3>
		<div class="column cf">
			<?php
			$email = $_POST['email'];
			$comments = $_POST['comments'];
			if (($_POST) && ($comments != '') && (filter_var($email, FILTER_VALIDATE_EMAIL))) {
				$comments .= "\n\n\nIP address: ".$_SERVER['REMOTE_ADDR'];
				mail("bram@bramvanaken.be", "Bramvanaken.be Contact from $email", $comments, "From: $email");
				echo "Email successfully sent";
			} else {?>
				<form method="post">
					<input type="email" class="form" placeholder="email address" name="email" id="email" size="32" value="<?php echo $email;?>" />
					<span class="error"><?php if (($_POST) && (!filter_var($email, FILTER_VALIDATE_EMAIL))) {echo "Invalid e-mail address";}?></span>
				    <textarea name="comments" class="form" placeholder="contents" id="comments" rows="4" cols="26"><?php echo $comments;?></textarea>
				    <span class="error"><?php if (($_POST) && ($comments == '')) {echo "Contents cannot be empty";}?></span>
				    <input class="button" type="submit" id="submit" name="sumbit" value="Submit" />
				</form>
			<?php }?>
		</div>
	</section>
	<section class="social cf">
		<a href="//facebook.com/bram.van.aken" id="fb">Facebook</a>
		<a href="//plus.google.com/+BramVanAken"id="gp">Google Plus</a>
		<a href="//twitter.com/VanAkenBram" id="tw">Twitter</a>
		<a href="//linkedin.com/in/bramva" id="li">LinkedIn</a>
	</section>
	<style>body{background:url(data/img-bg.jpg) no-repeat center center fixed;background-size:cover}</style>
	<link rel="stylesheet" href="data/style-main.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100">
	<style>.social a{float:left;height:50px;width:50px;text-indent:100%;white-space:nowrap;overflow:hidden;background:url(data/img-sm.png)}#fb,#gp,#tw,#li{margin-right:10px}#fb{background-position:0 0}#gp{background-position:-50px 0}#tw{background-position:-100px 0}#li{background-position:-150px 0}</style>
	<!--[if lt IE 9]><script src="data/js-html5shiv.js"></script><![endif]-->
</body>
</html>