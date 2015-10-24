<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EventJive.co is an invite-only chat community for event professionals.">
    <meta name="author" content="EventJive.co.uk">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>#EventJive - Chat Community for Event Professionals</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/css/custom-animations.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php include_once("analyticstracking.php") ?> 	
  
	<! -- ********** HEADER SECTION ********** --> 
	<div id="h">
		<div class="container">
			<div class="row centered">
				
				<h3 class="header-logo"><img src="assets/img/eventjive-logo.png"></img></h3>
				<h1>An invite-only live chat community<br/>for event professionals</h1>
				
				<div class="col-md-6 col-md-offset-3 mt">
					
					<form role="form" action="save.php" method="POST" enctype="plain"> 
					    <?php 
					      if(isset($_GET['refer'])) { 
					     ?>
                          <input type="hidden" value="<?php echo $_GET['refer'];?>" name="refer">
                          <input type="email" name="email" class="subscribe-input" placeholder="Your work email..." required>
						  <button class='btn btn-lg btn-cta subscribe-submit' type="submit">Knock Knock</button>
						  <p><i class="ion-checkmark-round green"></i>Your invitation has been accepted. Come on in. <b>
                         <?php 
                           } 
                           else {
                         ?>
                           <div class="alert alert-danger" role="alert" style="opacity: 0.7;">
				              <h2 style="color: #a94442; font-size: 3.0rem;"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>&nbsp;  Ask your industry friends & colleagues to join OR <br> <a href="#pre-register">register your interest.</a></h2>
			               </div>
			               <p>already a member? <a href="http://eventjive.slack.com"><u><b>sign in here.</b></u></a></p>
			             <?php  
                           }
                         ?>
					</form>
				</div>
			</div><! --/row -->
			
			<div class="row">
				<div class="continue">
					<i class="ion-chevron-down"></i>
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/header -->
	
    <! -- ********** SOCIAL PROOF SECTION ********** --> 
	<div id="social-proof">
		<div class="container">
			<div class="row">
				<h2>Members of our community are from:</h2>
				<div class="shelf clogo">
					<img class="clogo" alt="IBTM Events" src="assets/img/ibtm-events.jpg">
					<img class="clogo" alt="MPI" src="assets/img/MPI-logo.png">
					<img class="clogo" alt="Meeting Design Institute" src="assets/img/mdi-logo.png">
					<img class="clogo" alt="Event Tech Lab" src="assets/img/event-tech-lab-logo.png">
					<img class="clogo" alt="Event Industry News" src="assets/img/EIN.jpeg">
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/SOCIAL PROOF -->
	
		<! -- ********** CALL TO ACTION SECTION ********** --> 
	<div id="cta">
		<div class="container">
			<div class="row">
				<h2>Your new home to learn, chat, and connect anytime</h2>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/CTA -->
		
	<! -- ********** INTRODUCTION SECTION ********** --> 
	<div class="container mt">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 centered">
				<h2>What is #EventJive?</h2>
				<hr class="aligncenter">
				<h4>#EventJive is hosted on Slack which allows you to </br> communicate on your smart phone, tablet, or computer.</h4>
			</div><!-- /col-md-6-->
		</div><! --/row -->
		
		<div class="row mt">
			<div class="col-md-6">
				<p><i class="ion-person-add green medium alignleft"></i>#EventJive is an invite only live chat, helping you to find new quality connections locally and worldwide, build meaning relationships and establish strong business networks.</p>
				<p class="mt"><i class="ion-clock green medium alignleft"></i>#EventJive allows you to connect real-time, no more waiting for those pressing matters. Ask a question, receive a response right away from your peers.</p>
				<p class="mt"><i class="ion-heart green medium alignleft"></i>#EventJive is fun and easy to use. And because we're all busy planners, you control when you like to join in for a chat, or when you receive notifications from one.</p>
			</div><! --/col-md-6 -->
			
			<div class="col-md-6">
				<img src="assets/img/eventjive-mockup-mac.png" class="img-responsive aligncenter" alt="" data-effect="slide-right">
			</div>
		</div><! --/row -->
	</div><! --/container -->
	
	<! -- ********** CALL TO ACTION SECTION ********** --> 
	<div id="cta">
		<div class="container">
			<div class="row">
				<h2>Engage with <b>Event Planners</b> and <b>Event Professionals</b> from across the globe</h2>
				<h2><b>#EventJive</b> facilitates discussions, Q&As, AMAs, feedback and braintrusts</h2>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/CTA -->
	
	<! -- ********** Why should I join SECTION ********** --> 
	<div id="g">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 centered">
					<h2>What's in for me?</h2>
					<hr class="aligncenter">
					<h4>4 Reasons you should join</h4>
				</div><!-- /col-md-6-->
			</div><!--/ row-->
			
			<div class="row mt">
				<div class="col-md-4">
					<h4 class="green">Pick your interest</h4>
					<p>Join an array of channels that interest you. From #EventEducation to #EventJobs to #EventTech and more #general chit-chats. You decide what interests you the most.</p>
					<h4 class="green mt">Build and maintain relationships</h4>
					<p>Events are global and so is #EventJive. Meet & Connect with event professionals, suppliers & event tech brands from around the world.</p>
				</div><! --/col-md-4-->
				<div class="col-md-4">
					<img src="assets/img/eventjive-mockup-phone.png" alt="" class="img-responsive aligncenter" data-effect="slide-bottom">
				</div><! --/col-md-4-->
				<div class="col-md-4">
					<h4 class="green">Learn & share knowledge</h4>
					<p>Stay educated by discussing event management best practices, processes and the latest event technology. Join or weekly AMA ("Ask me anything") sessions. </p>
					<h4 class="green mt">Continue the conversation after an event</h4>
					<p>Never loose touch. Stay connected after IMEX, IBTM and other industry events. </p>
				</div><! --/col-md-4-->
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/G -->
	
	<! -- ********** CALL TO ACTION SECTION ********** --> 
	<div id="cta">
		<div class="container">
			<div class="row">
				<h2>Share your stories, experiences & knowledge</h2>
				<h2>with other <b>Event Professionals</b> around the globe.</h2>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/CTA -->

	<!--<! -- ********** FEATURES SECTION - Part 1 ********** --> 
	<!--<div class="container mt">-->
	<!--	<div class="row">-->
	<!--		<div class="col-md-4 centered">-->
	<!--			<i class="ion-compass green big"></i>-->
	<!--			<p class="green">Don't miss your opportunity</p>-->
	<!--			<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--		</div><! --/col-md-4-->
	<!--		<div class="col-md-4 centered">-->
	<!--			<i class="ion-disc green big"></i>-->
	<!--			<p class="green">Save on external devices</p>-->
	<!--			<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--		</div><! --/col-md-4-->
	<!--		<div class="col-md-4 centered">-->
	<!--			<i class="ion-earth green big"></i>-->
	<!--			<p class="green">Work in every place</p>-->
	<!--			<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--		</div><! --/col-md-4-->
	<!--	</div><! --/row -->
		
	<!--	<div class="row mt">-->
	<!--		<div class="col-md-12">-->
	<!--			<img src="assets/img/display.jpg" class="img-responsive aligncenter" alt="" data-effect="slide-bottom">-->
	<!--		</div><! --/col-md-12-->
	<!--	</div><! --/row -->
	<!--</div><! --/container -->

	<!--<! -- ********** FEATURES SECTION - Part 2 ********** -->
	<!--<div id="g">-->
	<!--	<div class="container">-->
	<!--		<div class="row mt">-->
	<!--			<div class="col-md-6 col-md-offset-3 centered">-->
	<!--				<h2>App Features</h2>-->
	<!--				<hr class="aligncenter">-->
	<!--				<h4>What You Need To Know</h4>-->
	<!--			</div><!-- /col-md-6-->
	<!--		</div><! --/row -->
			
	<!--		<div class="row mt">-->
	<!--			<div class="col-md-4 centered">-->
	<!--				<i class="ion-arrow-down-c green big"></i>-->
	<!--				<p class="green">All Included in a big package</p>-->
	<!--				<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--			</div><! --/col-md-4-->
	<!--			<div class="col-md-4 centered">-->
	<!--				<i class="ion-document-text green big"></i>-->
	<!--				<p class="green">Complete documentation</p>-->
	<!--				<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--			</div><! --/col-md-4-->
	<!--			<div class="col-md-4 centered">-->
	<!--				<i class="ion-email green big"></i>-->
	<!--				<p class="green">Free email support</p>-->
	<!--				<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--			</div><! --/col-md-4-->
	<!--		</div><! --/row -->
			
	<!--		<div class="row mt">-->
	<!--			<div class="col-md-4 centered">-->
	<!--				<i class="ion-eye green big"></i>-->
	<!--				<p class="green">Retina device ready</p>-->
	<!--				<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--			</div><! --/col-md-4-->
	<!--			<div class="col-md-4 centered">-->
	<!--				<i class="ion-fireball green big"></i>-->
	<!--				<p class="green">Hot trends used</p>-->
	<!--				<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--			</div><! --/col-md-4-->
	<!--			<div class="col-md-4 centered">-->
	<!--				<i class="ion-heart green big"></i>-->
	<!--				<p class="green">Crafted with love</p>-->
	<!--				<p class="text16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<!--			</div><! --/col-md-4-->
	<!--		</div><! --/row -->
	<!--	</div><! --/container -->
	<!--</div><! --/g -->

	<!--<! -- ********** TESTIMONIAL SECTION ********** -->
	<!--<div id="testimonial">-->
	<!--	<div class="container">-->
	<!--		<div class="row mt">-->
	<!--			<div class="col-lg-8 col-lg-offset-2 centered">-->
				    <!-- Carousel
	<!--			    ================================================== -->
	<!--			    <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
	<!--			      <div class="carousel-inner">-->
	<!--			        <div class="item active">-->
	<!--			          <img src="assets/img/ui-01.jpg" class="img-circle aligncenter" width="120" alt="First slide">-->
	<!--			          <h3>Mark Turin</h3>-->
	<!--			          <hr class="aligncenter">-->
	<!--			          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>-->
	<!--			        </div>-->
	<!--			        <div class="item">-->
	<!--			          <img src="assets/img/ui-02.jpg" class="img-circle aligncenter" width="120"  alt="Second slide">-->
	<!--			          <h3>Sarah Schmidt</h3>-->
	<!--			          <hr class="aligncenter">-->
	<!--			          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>-->
	<!--			        </div>-->
	<!--			        <div class="item">-->
	<!--			          <img src="assets/img/ui-03.jpg" width="120" class="img-circle aligncenter" alt="Third slide">-->
	<!--			          <h3>Phil Carsons</h3>-->
	<!--			          <hr class="aligncenter">-->
	<!--			          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>-->
	<!--			        </div>-->
	<!--			      </div>-->
	<!--			    </div><!-- /.carousel -->
	<!--			</div><! --/col-lg-8 -->
	<!--		</div><! --/row -->
	<!--	</div><! --/container -->
	<!--</div><! --/testimonial -->
	
	
	<! -- ********** REGISTER SECTION ********** --> 
	<div id="g">
		<div class="container">
			<div class="row mt">
				<div class="col-md-6 col-md-offset-3 centered">
					<a name="pre-register"></a>
					<h2>Don't have an invite link?</br>Register your interest here below.</h2>
					<hr class="aligncenter">
					<p>Each week, we’ll serve up a something fresh from the community in a newsletter to give you a taste of what’s behind the #EventJive gates. </p>
				</div><!-- /col-md-6-->
			</div><! --/row -->
			
			<div class="row">
				<div class="col-md-6 col-md-offset-3 mt centered">
					<form role="mailing-list" action="save.php" method="post" enctype="plain"> 
	    				<input type="email" name="mailing-submit" class="subscribe-input" placeholder="Your work email..." required>
						<button class='btn btn-lg btn-cta subscribe-submit' type="submit">Register Interest</button>
					</form>
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/g -->
	
	<! -- ********** END SECTION ********** --> 
	<div class="container">
		<div class="row mtb">
			<div class="col-md-6 col-md-offset-3 centered">
				<p class="text28">
					<a href="http://www.twitter.com/eventjive"><i class="ion-social-twitter"></i></a>
				</p>
				<hr class="aligncenter">
				<p>#EventJive | Made with love in 2015</p>
			</div>
		</div><! --/row -->
	</div><! --/container -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.unveilEffects.js"></script>
  </body>
</html>
