<?php
    if (isset($_POST["submit"])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];		
        $email = $_POST['inputEmail'];
		 $email2 = $_POST['verifyEmail'];
        $phone = $_POST['phone'];		
        $numTravel = $_POST['numTravel'];
		 $tour = $_POST['tour'];
		 $marketing = $_POST['marketing'];
        $comments = $_POST['comments'];
        $from = 'Web Contact Form'; 
        $to = 'kdclang@gmail.com'; 
        $subject = 'Web Contact Form';
        
        $body = "From: $fname $lname\n E-Mail: $email\n Phone: $phone\n Travellers: $numTravel\n Tour: $tour\n Source: $marketing\n Comment:\n $comments";
 
        // Check if name has been entered
        if (!$_POST['fname'] || !$_POST['lname']) {
            $errName = 'Please enter your first and last name';
        }

        // Check if emails match
        if (!$_POST['inputEmail'] || $email != $email2) {
            $errEmail = 'Email addresses do not match';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['inputEmail'] || (filter_var($email, FILTER_VALIDATE_EMAIL) === false)) {
            $errEmail = 'Please enter a valid email address';
        }

        // Check if phone has been entered and is valid
        if (!$_POST['phone']) {
            $errPhone = 'Please enter a valid phone number';
        }
		else {
			$phone =  preg_replace('/[^0-9]/', '', $phone);
			if (strlen($phone) != 10) {
				$errPhone = 'Please enter a valid phone number';				
			}
			
		}
        
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone) {
    if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width" />
      <meta name="Description" content="Contact Information for New Zealand Awaits.">
      <meta name="author" content="New Zealand Awaits">
      <meta name="Copyright" content="Copyright (c) 2015 New Zealand Awaits, all rights reserved.">
      <title>New Zealand Awaits - Contact Us</title>
      <!--[if IE]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
        <link rel="stylesheet" href="stylesheets/normalize.css" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="stylesheets/default_0.css" />
		 <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    </head>
    
    <body>


        <script>
            (function($){
            			$(document).ready(function(){
            				$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            					event.preventDefault(); 
            					event.stopPropagation(); 
            					$(this).parent().siblings().removeClass('open');
            					$(this).parent().toggleClass('open');
            				});
							
            			});
            		})(jQuery);
					

        </script>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">

			
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div  >
           
		   <div class="navbar-collapse collapse">
                <!-- Left nav -->
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="whynz.html">Why NZ?<b class="caret hidden-xs"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu">
                                <a href="thingstodo.html">Things To Do</a>
                                <ul class="dropdown-menu">
                                    <li><a href="hiking.html">Walking/Hiking</a></li>
                                    <li><a href="biking.html">Biking</a></li>
                                    <li><a href="water.html">Water Activities</a></li>
                                    <li><a href="adventure.html">Adventure Activities</a></li>
                                    <li><a href="golf.html">Golf</a></li>
                                    <li><a href="fish.html">Fishing</a></li>										
                                    <li><a href="wildlife.html">Wildlife</a></li>
                                    <li><a href="maori.html">Maori Culture</a> </li>
                                    <li><a href="middleearth.html">Middle Earth</a></li>
                                    <li><a href="arts.html">Arts &amp; Culture</a></li>
                                    <li><a href="relaxation.html">Relaxation &amp; Pampering</a></li>
                                    <li><a href="farms.html">Farms &amp; Gardens</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu">
                                <a href="fwb.html">Food, Wine, Beer&nbsp&nbsp</a>
                                <ul class="dropdown-menu">
                                    <li><a href="food.html">Food</a></li>
                                    <li><a href="wine.html">Wine</a></li>
                                    <li><a href="beer.html">Beer</a></li>
                                </ul>
                            </li>
                            <li> <a href="accommodation.html">Accommodation</a></li>
                            <li><a href="people.html">People</a></li>
                        </ul>
                    </li>
                    <li><a href="lgbt.html">LGBT</a></li>
                    <li><a href="private.html">Privately Guided Travel</a></li>
                    <li class="dropdown">
                        <a href="selfdrive.html" class="dropdown">Self-Drive Travel<b class="caret  hidden-xs"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="selfdrivehow.html">How It Works</a></li>
                        </ul>
                    </li>
                    <li><a href="tours.html">Tours</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li  class="active"><a href="contact.php">Contact Us</a></li>
                </ul>
				</div>

			</div>
            <!--/.nav-collapse -->

		
			<div class="row tophead">
			<div class="col-md-12">
		           <img src="images/logos/nza_logo.svg" alt="New Zealand Awaits logo" class="nzlogo"></img>

			</div>
			</div>
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="./images/cathedralcove.jpg" alt="Cathedral Cove">
				</div>
			
				<div class="item">
				  <img src="./images/cow.jpg"  alt="Cow on Waikato Farm">
				</div>
			
				<div class="item">
				  <img src="./images/lonelybay.jpg" alt="Lonely Bay on the Coramandel Peninsula">
				</div>
			
			  </div>
			
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
	  
        <div class="container-fluid">
			<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact Us</li>
				</ol>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12">
            <h1>Contact Us</h1>
			<h4>Debbie Clarke</h4>
			<h4>US: 1-508-873-3164</h4>
			<h4>NZ: 64-027-397-7796</h4>
			<h4><a href="mailto:debbie@newzealandawaits.com" target="_top">debbie@newzealandawaits.com</a></h4>
			<br /><br /><br />
			</div>
		</div>
		</div>
		<div class="row inquiry">
		<h3>Travel Inquiry</h3>
		  <form class="form-horizontal" role="form" method="post" action="contact.php#finished">
		  
				<div class="col-sm-6 col-xs-12">
				<div class="form-group">
				  <label for="fname" class="col-md-4 control-label">First Name:</label>
				  <div class="col-md-8">
					<input type="text" class="form-control" id="fname" name="fname" placeholder="Mary"  value="<?php echo htmlspecialchars($_POST['fname']); ?>">
							
				  </div><?php echo "<p class='text-danger'>$errName</p>";?>
				</div>
			   </div>
		
				<div class="col-sm-6 col-xs-12">	   
				<div class="form-group">
				  <label for="lname" class="col-md-4 control-label">Last Name:</label>
				  <div class="col-md-8">
					<input type="text" class="form-control" id="lname" name="lname" placeholder="Smith" value="<?php echo htmlspecialchars($_POST['lname']); ?>">
				  </div>
				</div>
				</div>
			  
			  <div class="col-sm-6 col-xs-12">
				<div class="form-group">
				  <label for="inputEmail" class="col-md-4 control-label">Email:</label>
				  <div class="col-md-8">
					<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="mary@gmail.com" value="<?php echo htmlspecialchars($_POST['inputEmail']); ?>">
					
				  </div><?php echo "<p class='text-danger'>$errEmail</p>";?>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-xs-12">
				<div class="form-group">
				  <label for="verifyEmail" class="col-md-4 control-label">Verify Email:</label>
				  <div class="col-md-8">
					<input type="email" class="form-control" id="verifyEmail" name="verifyEmail" placeholder="mary@gmail.com">
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="phone" class="col-md-4 control-label">Phone Number</label>
						<div class="col-md-8">
						<input type="tel" id="phone" name="phone" class="form-control" value="" name="phone" placeholder="021987654" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
						
						</div><?php echo "<p class='text-danger'>$errPhone</p>";?>
					</div>
				</div>
			  
			
		
			  <div class="col-sm-6 col-xs-12">
				<div class="form-group">
				  <label for="numTravel" class="col-md-4 control-label">Number of Travellers:</label>
				  <div class="col-md-8">
					<input type="text" class="form-control" id="numTravel" name="numTravel" placeholder="1" value="<?php echo htmlspecialchars($_POST['numTravel']); ?>">
				  </div>
				</div>
			  </div>
		
			  <div class="col-sm-6 col-xs-12">
				<div class="form-group">
				  <label for="tour" class="col-md-4 control-label">Interested in:</label>
				  <div class="col-md-8">
								  <select class="form-control" id="tour" name="tour">
										  <option <?php if ($_POST['tour'] =="Fur, Feather, and Fins (Jan)") echo 'selected="selected"'; ?> >Fur, Feather, and Fins (Jan)</option>
										  <option <?php if ($_POST['tour'] =="Bike, Hike, and Yak (Feb)") echo 'selected="selected"'; ?>>Bike, Hike, and Yak (Feb)</option>
										  <option <?php if ($_POST['tour'] =="Yummy Tummy (Mar)") echo 'selected="selected"'; ?>>Yummy Tummy (Mar)</option>										  
										  <option <?php if ($_POST['tour'] =="Self-Drive Itinerary") echo 'selected="selected"'; ?>>Self-Drive Itinerary</option>	
										  <option <?php if ($_POST['tour'] =="Customised Itinerary") echo 'selected="selected"'; ?>>Customised Itinerary</option>	
										  
									</select>
								
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-xs-12">
				<div class="form-group">
				  <label for="marketing" class="col-md-4 control-label">How Did You Find Us?:</label>
				  <div class="col-md-8">
								  <select class="form-control" id="marketing" name="marketing">
										  <option>Google</option>
										  <option>Facebook</option>
										  <option>LC</option>
										  <option>Other magazine</option>
										  <option>Friend</option>
										  <option>Other</option>
									</select>
				  </div>
				</div>
			  </div>	  
		
			  <div class="col-sm-12"> <!-- comment box -->
			  
				<div class="form-group">
				  <label for="comments" class="col-md-2 control-label">Additional Comments:</label>
				  <div class="col-md-10">
					<textarea class="form-control" rows="3" id="comments" name="comments" placeholder="comments" value="<?php echo htmlspecialchars($_POST['comments']); ?>"></textarea>
				  </div>
				</div>
			  </div>
			  
				<div class="form-group">
					<div class="col-sm-12">
						<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
					</div>
				</div>			  
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
					<a name="finished"></a>
						<?php echo $result; ?>    
					</div>
				</div>
		  </form>
		</div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <p>email:
                            <a href="mailto:debbie@newzealandawaits.com">debbie@newzealandawaits.com</a>
                        </p>
                        <p>US phone:
                            <a href="tel:15088733164">1-508-873-3164</a>
                        </p>
                        <p>NZ phone:
                            <a href="tel:0273977796">+64-27-397-7796</a></p>
						</div>
						<div class="col-sm-6">

							<p class="right">&copy; 2015 New Zealand Awaits. All rights reserved.</p>
						
						</div>
				</div>
			</div>
		</footer>
   </body>
</html>


