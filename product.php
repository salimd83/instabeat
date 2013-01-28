<!DOCTYPE HTML>
<html>
	
	<head profile="http://www.w3.org/2005/10/profile">
	<link rel="icon" 
	      type="image/png" 
	      href="./favicon.png">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keyword" content="">
		<meta name="description" content="Instabeat is a heart rate monitor for swimming 
										  mounted on your goggles, with real-time visual 
										  feedback and no chest belt!">
			
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/supersized.css" media="screen" />
		<link rel="stylesheet" href="css/jquery.selectbox.css">
		<link rel="stylesheet" href="css/main.css">
		
		<title>Instabeat :: Master your swim!</title>
		
		<!-- HTML5 Shiv + detect touch events -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.selectbox-0.2.min.js"></script>
		<script src="js/main.js"></script>

	</head>

	<body id="product" class="inner-page">
		
		<header>
			<nav id="main-menu">
				<ul>
					<li><a href="press.php">Press Room</a></li>
					<li><a href="http://instabeat.me/blog" target="_blank">Blog</a></li>
					<li class="selected"><a href="product.php">Pre-order</a></li>
					<li><a href="index.php">Home</a></li>
				</ul>
			</nav>
			
			<div id="logo" class="wrapper">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
				<p>
					<img src="images/logo-text.png" alt="Instabeat is a heart rate monitor for swimming mounted on your goggles, 
					with real-time visual feedback and no chest belt!" />
				</p>
			</div>
		</header>
		
		<section id="body" class="wrapper">
			
			<div class="wide">
				<h1><img src="images/track-your-swim-2.png" alt="" /></h1>
				<p>
					Instabeat is the first all-in-one swimming monitor with real-time feedback. Its revolutionary design, 
					adapted to the intricate biomechanics of swimming, mounts on the straps of any type of swimming goggles. 
				</p>

				<div class="description">
					<h2>Using Instabeat, you will be able to</h2>

					<dl class="first">
						<dt><img src="images/profile.gif" alt=""></dt>
						<dd><a>Create</a> a customized profile to determine your heart rate zones.</dd>
					</dl>
					<dl>
						<dt><img src="images/visualize.gif" alt=""></dt>
						<dd>
							<a>Visualize</a> your heart rate zone in real-time on your lens while you are training.
							<i>Blue if fat burning, Green if fitness, Red if maximum performance</i>
						</dd>
					</dl>
					<dl>
						<dt><img src="images/measure.gif" alt=""></dt>
						<dd>
							<a>Measure</a> crucial training parameters.
							<i>Calories, number of laps, number of flip turns & breathing pattern</i>
						</dd>
					</dl>
					<dl class="last">
						<dt><img src="images/upload.gif" alt=""></dt>
						<dd>
							<a>Upload</a> your information after your workout for a detailed analysis over time.
						</dd>
					</dl>

					<p>
						Your Instabeat will be ready to ship in Q3 2013. We will get in touch with you then to collect 
						your credit card information and your shipment details. Reserve yours now to get access to the 
						first limited batch!
					</p>
				</div>
			</div> <!-- END .left -->

			<form action="process/send-order.php" method="post" id="frmorder" onsubmit="return false">
				<?php if(isset($_GET['success'])): ?>
					<div class="success">
						<p>Your order has been submitted successfuly. We will contact you in 2 business days.</p>
					</div>
				<?php endif; ?>
				<div id="status">
            		Sending please wait...
            	</div>
				<div class="text">
					<label for="name">Name</label><input type="text" name="name" required>
					<span class="error"></span>
				</div>
				<div class="text">
					<label for="email">Email</label><input type="text" name="email" required>
					<span class="error"></span>
				</div>
				<div class="text">
					<label for="country">Country</label>
					<select name="country" class="country" required> 
						<option value="" selected="selected">Select Country</option> 
						<option value="United States">United States</option> 
						<option value="United Kingdom">United Kingdom</option> 
						<option value="Afghanistan">Afghanistan</option> 
						<option value="Albania">Albania</option> 
						<option value="Algeria">Algeria</option> 
						<option value="American Samoa">American Samoa</option> 
						<option value="Andorra">Andorra</option> 
						<option value="Angola">Angola</option> 
						<option value="Anguilla">Anguilla</option> 
						<option value="Antarctica">Antarctica</option> 
						<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
						<option value="Argentina">Argentina</option> 
						<option value="Armenia">Armenia</option> 
						<option value="Aruba">Aruba</option> 
						<option value="Australia">Australia</option> 
						<option value="Austria">Austria</option> 
						<option value="Azerbaijan">Azerbaijan</option> 
						<option value="Bahamas">Bahamas</option> 
						<option value="Bahrain">Bahrain</option> 
						<option value="Bangladesh">Bangladesh</option> 
						<option value="Barbados">Barbados</option> 
						<option value="Belarus">Belarus</option> 
						<option value="Belgium">Belgium</option> 
						<option value="Belize">Belize</option> 
						<option value="Benin">Benin</option> 
						<option value="Bermuda">Bermuda</option> 
						<option value="Bhutan">Bhutan</option> 
						<option value="Bolivia">Bolivia</option> 
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
						<option value="Botswana">Botswana</option> 
						<option value="Bouvet Island">Bouvet Island</option> 
						<option value="Brazil">Brazil</option> 
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
						<option value="Brunei Darussalam">Brunei Darussalam</option> 
						<option value="Bulgaria">Bulgaria</option> 
						<option value="Burkina Faso">Burkina Faso</option> 
						<option value="Burundi">Burundi</option> 
						<option value="Cambodia">Cambodia</option> 
						<option value="Cameroon">Cameroon</option> 
						<option value="Canada">Canada</option> 
						<option value="Cape Verde">Cape Verde</option> 
						<option value="Cayman Islands">Cayman Islands</option> 
						<option value="Central African Republic">Central African Republic</option> 
						<option value="Chad">Chad</option> 
						<option value="Chile">Chile</option> 
						<option value="China">China</option> 
						<option value="Christmas Island">Christmas Island</option> 
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
						<option value="Colombia">Colombia</option> 
						<option value="Comoros">Comoros</option> 
						<option value="Congo">Congo</option> 
						<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
						<option value="Cook Islands">Cook Islands</option> 
						<option value="Costa Rica">Costa Rica</option> 
						<option value="Cote D'ivoire">Cote D'ivoire</option> 
						<option value="Croatia">Croatia</option> 
						<option value="Cuba">Cuba</option> 
						<option value="Cyprus">Cyprus</option> 
						<option value="Czech Republic">Czech Republic</option> 
						<option value="Denmark">Denmark</option> 
						<option value="Djibouti">Djibouti</option> 
						<option value="Dominica">Dominica</option> 
						<option value="Dominican Republic">Dominican Republic</option> 
						<option value="Ecuador">Ecuador</option> 
						<option value="Egypt">Egypt</option> 
						<option value="El Salvador">El Salvador</option> 
						<option value="Equatorial Guinea">Equatorial Guinea</option> 
						<option value="Eritrea">Eritrea</option> 
						<option value="Estonia">Estonia</option> 
						<option value="Ethiopia">Ethiopia</option> 
						<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
						<option value="Faroe Islands">Faroe Islands</option> 
						<option value="Fiji">Fiji</option> 
						<option value="Finland">Finland</option> 
						<option value="France">France</option> 
						<option value="French Guiana">French Guiana</option> 
						<option value="French Polynesia">French Polynesia</option> 
						<option value="French Southern Territories">French Southern Territories</option> 
						<option value="Gabon">Gabon</option> 
						<option value="Gambia">Gambia</option> 
						<option value="Georgia">Georgia</option> 
						<option value="Germany">Germany</option> 
						<option value="Ghana">Ghana</option> 
						<option value="Gibraltar">Gibraltar</option> 
						<option value="Greece">Greece</option> 
						<option value="Greenland">Greenland</option> 
						<option value="Grenada">Grenada</option> 
						<option value="Guadeloupe">Guadeloupe</option> 
						<option value="Guam">Guam</option> 
						<option value="Guatemala">Guatemala</option> 
						<option value="Guinea">Guinea</option> 
						<option value="Guinea-bissau">Guinea-bissau</option> 
						<option value="Guyana">Guyana</option> 
						<option value="Haiti">Haiti</option> 
						<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
						<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
						<option value="Honduras">Honduras</option> 
						<option value="Hong Kong">Hong Kong</option> 
						<option value="Hungary">Hungary</option> 
						<option value="Iceland">Iceland</option> 
						<option value="India">India</option> 
						<option value="Indonesia">Indonesia</option> 
						<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
						<option value="Iraq">Iraq</option> 
						<option value="Ireland">Ireland</option> 
						<option value="Israel">Israel</option> 
						<option value="Italy">Italy</option> 
						<option value="Jamaica">Jamaica</option> 
						<option value="Japan">Japan</option> 
						<option value="Jordan">Jordan</option> 
						<option value="Kazakhstan">Kazakhstan</option> 
						<option value="Kenya">Kenya</option> 
						<option value="Kiribati">Kiribati</option> 
						<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
						<option value="Korea, Republic of">Korea, Republic of</option> 
						<option value="Kuwait">Kuwait</option> 
						<option value="Kyrgyzstan">Kyrgyzstan</option> 
						<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
						<option value="Latvia">Latvia</option> 
						<option value="Lebanon">Lebanon</option> 
						<option value="Lesotho">Lesotho</option> 
						<option value="Liberia">Liberia</option> 
						<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
						<option value="Liechtenstein">Liechtenstein</option> 
						<option value="Lithuania">Lithuania</option> 
						<option value="Luxembourg">Luxembourg</option> 
						<option value="Macao">Macao</option> 
						<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
						<option value="Madagascar">Madagascar</option> 
						<option value="Malawi">Malawi</option> 
						<option value="Malaysia">Malaysia</option> 
						<option value="Maldives">Maldives</option> 
						<option value="Mali">Mali</option> 
						<option value="Malta">Malta</option> 
						<option value="Marshall Islands">Marshall Islands</option> 
						<option value="Martinique">Martinique</option> 
						<option value="Mauritania">Mauritania</option> 
						<option value="Mauritius">Mauritius</option> 
						<option value="Mayotte">Mayotte</option> 
						<option value="Mexico">Mexico</option> 
						<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
						<option value="Moldova, Republic of">Moldova, Republic of</option> 
						<option value="Monaco">Monaco</option> 
						<option value="Mongolia">Mongolia</option> 
						<option value="Montserrat">Montserrat</option> 
						<option value="Morocco">Morocco</option> 
						<option value="Mozambique">Mozambique</option> 
						<option value="Myanmar">Myanmar</option> 
						<option value="Namibia">Namibia</option> 
						<option value="Nauru">Nauru</option> 
						<option value="Nepal">Nepal</option> 
						<option value="Netherlands">Netherlands</option> 
						<option value="Netherlands Antilles">Netherlands Antilles</option> 
						<option value="New Caledonia">New Caledonia</option> 
						<option value="New Zealand">New Zealand</option> 
						<option value="Nicaragua">Nicaragua</option> 
						<option value="Niger">Niger</option> 
						<option value="Nigeria">Nigeria</option> 
						<option value="Niue">Niue</option> 
						<option value="Norfolk Island">Norfolk Island</option> 
						<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
						<option value="Norway">Norway</option> 
						<option value="Oman">Oman</option> 
						<option value="Pakistan">Pakistan</option> 
						<option value="Palau">Palau</option> 
						<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
						<option value="Panama">Panama</option> 
						<option value="Papua New Guinea">Papua New Guinea</option> 
						<option value="Paraguay">Paraguay</option> 
						<option value="Peru">Peru</option> 
						<option value="Philippines">Philippines</option> 
						<option value="Pitcairn">Pitcairn</option> 
						<option value="Poland">Poland</option> 
						<option value="Portugal">Portugal</option> 
						<option value="Puerto Rico">Puerto Rico</option> 
						<option value="Qatar">Qatar</option> 
						<option value="Reunion">Reunion</option> 
						<option value="Romania">Romania</option> 
						<option value="Russian Federation">Russian Federation</option> 
						<option value="Rwanda">Rwanda</option> 
						<option value="Saint Helena">Saint Helena</option> 
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
						<option value="Saint Lucia">Saint Lucia</option> 
						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
						<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
						<option value="Samoa">Samoa</option> 
						<option value="San Marino">San Marino</option> 
						<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
						<option value="Saudi Arabia">Saudi Arabia</option> 
						<option value="Senegal">Senegal</option> 
						<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
						<option value="Seychelles">Seychelles</option> 
						<option value="Sierra Leone">Sierra Leone</option> 
						<option value="Singapore">Singapore</option> 
						<option value="Slovakia">Slovakia</option> 
						<option value="Slovenia">Slovenia</option> 
						<option value="Solomon Islands">Solomon Islands</option> 
						<option value="Somalia">Somalia</option> 
						<option value="South Africa">South Africa</option> 
						<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
						<option value="Spain">Spain</option> 
						<option value="Sri Lanka">Sri Lanka</option> 
						<option value="Sudan">Sudan</option> 
						<option value="Suriname">Suriname</option> 
						<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
						<option value="Swaziland">Swaziland</option> 
						<option value="Sweden">Sweden</option> 
						<option value="Switzerland">Switzerland</option> 
						<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
						<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
						<option value="Tajikistan">Tajikistan</option> 
						<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
						<option value="Thailand">Thailand</option> 
						<option value="Timor-leste">Timor-leste</option> 
						<option value="Togo">Togo</option> 
						<option value="Tokelau">Tokelau</option> 
						<option value="Tonga">Tonga</option> 
						<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
						<option value="Tunisia">Tunisia</option> 
						<option value="Turkey">Turkey</option> 
						<option value="Turkmenistan">Turkmenistan</option> 
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
						<option value="Tuvalu">Tuvalu</option> 
						<option value="Uganda">Uganda</option> 
						<option value="Ukraine">Ukraine</option> 
						<option value="United Arab Emirates">United Arab Emirates</option> 
						<option value="United Kingdom">United Kingdom</option> 
						<option value="United States">United States</option> 
						<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
						<option value="Uruguay">Uruguay</option> 
						<option value="Uzbekistan">Uzbekistan</option> 
						<option value="Vanuatu">Vanuatu</option> 
						<option value="Venezuela">Venezuela</option> 
						<option value="Viet Nam">Viet Nam</option> 
						<option value="Virgin Islands, British">Virgin Islands, British</option> 
						<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
						<option value="Wallis and Futuna">Wallis and Futuna</option> 
						<option value="Western Sahara">Western Sahara</option> 
						<option value="Yemen">Yemen</option> 
						<option value="Zambia">Zambia</option> 
						<option value="Zimbabwe">Zimbabwe</option>
					</select>
					<span class="error"></span>
				</div>
				<div class="text last">
					<label for="quantity">Quantity</label>
					<select name="quantity" class="quantity"> 
						<option value="1" selected="selected">1</option> 
						<option value="2">2</option> 
						<option value="3">3</option> 
						<option value="4">4</option> 
						<option value="5">5</option> 
						<option value="6">6</option>
						<option value="7">7</option> 
						<option value="8">8</option> 
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>
<!-- 				<div class="textarea">
					<label for="comments">Comments</label>
					<textarea row="5" col="5" name="comments"></textarea>
				</div> -->
				<div class="newsletter">
					<h4>Would you like to be added to the newsletter?</h4>
					<div id="yes"><img src="images/yes-text.png" alt=""></div>
					<div id="no"><img src="images/no-text.png" alt=""></div>
					<div class="radio">
						<input type="radio" name="newsletter" value="yes">
						<input type="radio" name="newsletter" value="no"> 
					</div>
				</div>
				<div class="clear"></div>
				<p class="note">
					We will keep all of your information confidential and we will never send you any junk. 
				</p>
				
				<div class="submit"><input type="submit" value="Pre-order it now for $149"></div>
				
			</form>
						
			<div class="clear"></div>
		</section> <!-- END #body -->
		
		<footer class="wrapper">
			
			<div class="left">
				<!-- <nav>
					<a href="#">About Instabeat |</a>
					<a href="#">Smart Swimming |</a>
					<a href="product.php">Product Tour |</a>
					<a href="#">Support |</a>
					<a href="#">Store |</a>
				</nav> -->
				<span>Copyrights reserved &copy;  Instabeat 2012</span>
			</div>
			
			<aside>
				<h5>Join The Community</h5>
				<nav>
					<a href="https://www.facebook.com/myinstabeat" target="_blank">
						<img src="images/icons-dark/facebook.png" alt="" />
					</a>
					<a href="https://twitter.com/myinstabeat" target="_blank">
						<img src="images/icons-dark/twitter.png" alt="" />
					</a>
					<!-- <a href="http://pinterest.com/instabeat/" target="_blank">
						<img src="images/icons-dark/printerest.png" alt="" />
					</a> -->
					<a href="http://www.linkedin.com/company/butterfleye" target="_blank">
						<img src="images/icons-dark/linked-in.png" alt="" />
					</a>
					<a href="http://www.flickr.com/photos/instabeat/" target="_blank">
						<img src="images/icons-dark/flickr.png" alt="" />
					</a>
					<a href="https://vimeo.com/user14915424" target="_blank">
						<img src="images/icons-dark/vimeo.png" alt="" />
					</a>
				</nav>
			</aside>
			<div class="clear"></div>
		</footer>
		<script type="text/javascript">
			$(function () {
				$("select").selectbox();
			});
		</script>

		<script type="text/javascript">
			<!--
				var errors = [false, false];
				
				$(function(){
						
						$('#frmorder input, #frmorder textarea').focus(function(){
							$(this).css('border-color', '#09F');
							//$('.note', this.parents('p')).fadeIn('normal');
							$(this).next().fadeIn('normal');
						});
						
						$('#frmorder input, #frmorder textarea').blur(function(){
							$(this).css('border-color', '#ddd');	
							//$(this).next().fadeOut('fast');
							var val = $(this).value;
							
							
							switch($(this).attr('name')){
								case 'name':
									if($(this).val().match(/^[a-zA-Z\ \']+$/) == null){
										$(this).next().fadeOut('fast', function(){$(this).removeClass('passed').addClass('error').text('Type a name with only only letters').fadeIn('fast')});
										$(this).removeClass('passed').addClass('error');
										errors[0] = false;
									}else{
										$(this).next().fadeOut('fast', function(){$(this).removeClass('error').addClass('passed').text('passed').fadeIn('fast')});
										$(this).removeClass('error').addClass('passed');
										errors[0] = true;
									}
									break;
									
								case 'email': 
									if($(this).val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) == null){
										$(this).next().fadeOut('fast', function(){$(this).removeClass('passed').addClass('error').text('Invalide email format').fadeIn('fast')});
										$(this).removeClass('passed').addClass('error');
										errors[1] = false;
									}else{
										$(this).next().fadeOut('fast', function(){$(this).removeClass('error').addClass('passed').text('passed').fadeIn('fast')});
										$(this).removeClass('error').addClass('passed');
										errors[1] = true;
									}
									break;
								
								case 'country':
									if($(this).val() == ""){
										$(this).next().fadeOut('fast', function(){$(this).removeClass('passed').addClass('error').text('4 characters minimum').fadeIn('fast')});
										$(this).removeClass('passed').addClass('error');
										errors[2] = false;
									}else{
										$(this).next().fadeOut('fast', function(){$(this).removeClass('error').addClass('passed').text('passed').fadeIn('fast')});
										$(this).removeClass('error').addClass('passed');
										errors[2] = true;
									}
									break;
							}
						});
				});

				jQuery(function($) {
				  $(".submit input").click(function(){
						$(this).attr('disabled', 'disabled');
						$('.submit').css('opacity', 0.4);
						$('.submit input').css('cursor', 'auto');
						$('#status').fadeIn('normal');
						$('#status').html('Sending please wait...');
						
						for(var i = 0; i<errors.length; i++){
							if(!errors[i]){
								$('#status').fadeOut('normal', 
													function(){$(this).html("<span class='error' style='background:none'>One or more required fields are missing or invalid, please correct and resend.</span>")}).fadeIn();
								
								$(this).removeAttr('disabled');
								$('.submit').css('opacity', 1);
								$('.submit input').css('cursor', 'pointer');
								
								return;
							}
						}
						
						//get teh link
						queryString = '';
				      	queryString += 'name='+$('input[name="name"]').attr('value');
				      	queryString += '&email='+$('input[name="email"]').attr('value');
						queryString += '&country='+$('select[name="country"]').attr('value');
						queryString += '&quantity='+$('select[name="quantity"]').attr('value');
				      	queryString += '&newsletter='+$('input[name="newsletter"]').attr('value');
						theLink = "process/send-order.php?"+queryString;

						var xhr;
						
						if (window.XMLHttpRequest) {
						  xhr = new XMLHttpRequest();
						}else if (window.ActiveXObject) {
						  xhr = new ActiveXObject("Msxml2.XMLHTTP");
						}else {
						  throw new Error("Ajax is not supported by this browser");
						}
						
						xhr.onreadystatechange = function() {
						  if (xhr.readyState == 4) { 
						    if (xhr.status >= 200 && xhr.status < 300) {
								
							  $('#status').fadeIn('normal', function(){ $(this).html(xhr.responseText)} );

							  $('.submit').fadeOut('normal');
							  $('div.text').fadeOut('normal');
							  $('div.newsletter').fadeOut('normal');
							  $('div.note').fadeOut('normal');
						      
							  //$('.submit input').removeAttr('disabled');
							  //$('.submit').css('opacity', 1);
							  //$('.submit input').css('cursor', 'pointer');

						    }
						  }
						}
						
						xhr.open('GET', theLink);
						xhr.send(null);
					});
				});				 
			-->
			</script>

			<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-30995048-7']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			</script>
	</body>
</html>