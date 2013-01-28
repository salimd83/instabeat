<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$country = $_GET['country'];
	$quantity = $_GET['quantity'];
	$withNewsletter = $_GET['newsletter'];

	if($country == "" || $name == "" || $email == ""){
		echo "<span class='error' style='background:none'>One or more required fields are missing or invalid, please correct and resend.</span>";
		exit;
	}

	$to  = "hobeikahind@gmail.com"; // note the comma
	//$to  = "yasmine@wondereight.com";

	// subject
	$subject = 'Instabeat: New Order';
	// message
	$message = "
	<html>
	<head>
	  <title>Instabeat: New Order</title>
	</head>
	<body>
		<p>
			A visitor has submitted an order on Instabeat.<br /> Below are the visitor details:
		</p>
		<p>
			<ul>
				<li>Name: $name</li>
				<li>Email: $email</li>
				<li>Country: $country</li>
				<li>Quantity: $quantity</li>
				<li>Newsletter: $withNewsletter</li>
			</ul>
		</p>

	</body>
	</html>
	";

	$headers = "MIME-Version: 1.0\r\n"
		  ."Content-Type: text/html; charset=utf-8\r\n"
		  ."Content-Transfer-Encoding: 8bit\r\n"
		  ."From: =?UTF-8?B?". base64_encode('Instabeat: Master your swim') ."?= <hobeikahind@gmail.com>\r\n"
		  ."X-Mailer: PHP/". phpversion();

	// Mail it
	//mail($to, $subject, $message, $headers, "-f hobeikahind@gmail.com");
	$mail = mail($to, $subject, $message, $headers, "-f hobeikahind@gmail.com");


	$to2  = $email; // note the comma
	//$to  = "hobeikahind@gmail.com";

		// subject
	$subject2 = "You've just pre-ordered your Instabeat";
	// message

	$message2 = "
	<html>
	<head>
	  <title>Your order at Instabeat</title>
	</head>
	<body>
		<p>
			Thank you for ordering your Instabeat!<br />
			Below is a summary of your order. We will let you know as soon as your Instabeat is ready to ship to collect your credit card information.
		</p>
		<p>
			<ul>
				<li>Name: $name</li>
				<li>Email: $email</li>
				<li>Country: $country</li>
				<li>Quantity: $quantity</li>
				<li>Newsletter: $withNewsletter</li>
			</ul>
		</p>
		<p>
			Don't forget to check our <a href='http://instabeat.wordpress.com'>blog</a>, 
			<a href='https://www.facebook.com/myinstabeat'>facebook</a> and 
			<a href='https://twitter.com/myinstabeat'>twitter</a> to connect with other fellow swimmers!
		</p>

	</body>
	</html>
	";

	$headers2 = "MIME-Version: 1.0\r\n"
		  ."Content-Type: text/html; charset=utf-8\r\n"
		  ."Content-Transfer-Encoding: 8bit\r\n"
		  ."From: =?UTF-8?B?". base64_encode('Instabeat: Master your swim') ."?= <info@instabeat.me>\r\n"
		  ."X-Mailer: PHP/". phpversion();

	// Mail it
	//mail($to, $subject, $message, $headers, "-f hobeikahind@gmail.com");
	$mail2 = mail($to2, $subject2, $message2, $headers2, "-f info@instabeat.com");
	
	if($mail){
		echo "<div class='success'>
				<p>Your order has been submitted successfully.</p>
			  </div>";
	}else{
		echo "<span class='error' style='background:none'>One or more required fields are missing or invalid, please correct and resend.</span>";
	}



