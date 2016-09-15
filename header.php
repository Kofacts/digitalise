<!DOCTYPE html>
<html>
<head>
	<title>Digitalise Template for Digital Agencies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./assets/latofonts.css">
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
  <link rel="stylesheet" type="text/css" href="./assets/font-awesome.css">
  
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/scrollreveal.min.js"></script>
  <script type="text/javascript" src="autoscroll.js"></script>
  <style type="text/css">
  	.sr .fooReveal { visibility: hidden; }
  </style>

  <script type="text/javascript">

  	$(document).ready(function(){
  		window.sr = ScrollReveal();
  		//sr.reveal('.box', 50);
		sr.reveal('.suremarketing', { 
			duration: 1000,
			origin: 'left',
			easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
			rotate   : { z: 10 },
			scale: 0.9,
			 },50);
		sr.reveal('.another',{
			duration: 1000,
		});
		sr.reveal('.marketing',{ duration: 2000,
			origin: 'right',
		 },50);
		sr.reveal('#ok',{ duration: 2000,
			origin: 'right',
		 },10);
		sr.reveal('.marketing1',{ duration: 2000,
			origin: 'right',
		 },20);
		sr.reveal('#ok1',{ duration: 3000,
			origin: 'right',
		 },50);
		sr.reveal('.marketing2',{ duration: 2000,
			origin: 'right',
		 },50);
		sr.reveal('#ok2',{ duration: 4000,
			origin: 'right',
		 },50);
		sr.reveal('.marketing3',{ duration: 4000,
			origin: 'right',
		 },50);
		sr.reveal('#ok3',{ duration: 4000,
			origin: 'right',
		 },50);
		sr.reveal('.suremarketing1', { 
			duration: 1000,
			origin: 'left',
			easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
			scale: 0.9,
			 },50);
		sr.reveal('.marketing1',{ duration: 2000,
			origin: 'right',
		 });
		sr.reveal('#think',{
			duration: 1500,
		},20);
		sr.reveal('#weit',{
			duration: 3000,
			origin: 'left'
		});

		sr.reveal('#raph',{
			duration: 3000,
			origin: 'left',
		});
		sr.reveal('#graph',{
			duration: 3000,
			origin: 'top',
			easing: 'ease-in-out',
		});
		sr.reveal('#digi',{
			duration: 3000,
			origin: 'right',
		});

		

});
  	// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
    var MQL = 1170;

    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                        $('.navbar-custom').addClass('is-visible');
                    } else {
                        $('.navbar-custom').removeClass('is-visible is-fixed');
                    }
                } else if (currentTop > this.previousTop) {
                    //if scrolling down...
                    $('.navbar-custom').removeClass('is-visible');
                    if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });
    }
});

  	
  </script>
  <!--Thanks to CI for the JQuery Nav-->
</head>

<style type="text/css">
	.blackit{
		background: black;
		width: auto;
		height: 100px;
	}
	#changed{
		background: transparent;
	}
</style>
 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button style="background-color:transparent; color:white;" arial-controls="navbar" type="button" data-toggle="collapse" data-target="#navbars" aria-expanded="false" class="navbar-toggle collapsed">
			    <span class="sr-only" style="color: white;">Toggle navigation</span>
			    <span class="icon-bar" style="color: white;"></span>
			    <span class="icon-bar" style="color: white;"></span>
			    <span class="icon-bar" style="color:white;"></span>
			 </button>
                <a class="navbar-brand" href="index.html">Digitalise <i class="glyphicon glyphicon-th-large"></i></a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbars" role="navigation" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('./images/woekdev.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="font-family:'LatoWebLight'; font-size:50px;">Creating Smart Digital impressions</h1>
                        <center><button class="quotess">Get A Quote</button></center>
                    </div>
                </div>
            </div>
        </div>
        <center><i class="glyphicon glyphicon-menu-down" style="color:white; font-size:20px;" ></i></center>
    </header>


<section style="background:white;  ">
	<div class="container">

	<div class="row" style="margin-top:50px; margin-left:80px; padding-left: 50px; position:relative;">

		<div class="col-sm-5" style="padding-right:30px;">
			<div class="suremarketing">
			<h2 style="font-family:'LatoWebBlack';">What Do We Do </h2>
			</div>
			<div class="another">
			<h1 id="what" style="padding-left:20px; font-style: 'LatoWebBlack'; font-size:100px; margin-left:70px;">?</h1>
			</div>
		</div>

		<div class="col-sm-6" style=" margin-left:10px;">
			<div style="font-size:50; font-family:'LatoWebLight'; font-style:bold;"   >
				<h3 class="marketing" >Web Development <i class="glyphicon glyphicon-ok" style="padding-left:30px;" id="ok"></i></h3> 
				<h3 class="marketing" >Web Design <i class="glyphicon glyphicon-ok" style="padding-left:100px;" id="ok"></i></h3>
				<p><h3 class="marketing2" >Graphics Design <i class="glyphicon glyphicon-ok" id="ok1"  style="padding-left:50px;"></i></h3> </p>
				<h3 class="marketing3" >Marketing <i class="glyphicon glyphicon-ok" id="ok2"  style="padding-left:117px;"></i></h3> 
				<p><h3 class="marketing4" >Branking <i class="glyphicon glyphicon-ok" id="ok3"  style="padding-left:130px;"></i></h3> </p>
			</div>
			
		</div>
		
	</div>
		

	
			
	</div>
</section>

<section id="codeit" style="background:url('./images/codeit.jpg');">
	<div class="container" style="margin-top:70px">
		
		<div class="row" style="margin-top:90px;">
			<center><h2  style="color:white; font-size: 40px; font-family:'LatoWebBlack';"><b id="think">Just Think It,</b> <span id="weit">We Would Build it!</span></h2>
			<center><button class="getintouch">Get in Touch</button></center>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<center><h2 style="font-family:'LatoWebLight'">The Team Doing Awesome Stuffs!</h2></center>

		<div class="row" style="margin-top:40px;">
<center>
		<div class="col-sm-4" id="raph">
			<img src="./images/hs.png" style="height:200px; width: 200px; border-radius: 200px; ">
			<div class="row">
				<span>RashFord</span>
				<p>Web Developer</p>
			</div>
		</div>

		<div class="col-sm-4" id="graph">
			<img src="./images/kofacts.png" style="height:200px; width: 200px; border-radius: 200px; ">
			<div class="row">
			<span>Messi</span>
				<p>Graphics/Web Design</p>
			</div>
		</div>

		<div class="col-sm-4" id="digi">
			<img src="./images/git.png" style="height:200px; width: 200px; border-radius: 200px; ">
			<div class="row">
			<span>Ronaldo</span>
				<p>Digital Marketer</p>
			</div>
		</div>
</center>			
		</div>
	</div>
</section>

<section style="background:black;">
	<!--Contact form-->

	<div class="container" style="margin-top:40px; margin-left:50px; padding-left:50px;">
	<center>
		<div class="row" style="margin-top:50px; margin-left:50px; float: center; padding-left:50px;">
		<style type="text/css">
			input[type=text],input[type=email]{
				height: 40px;
				border-radius: 20px;
				border: none;
				line-height: 1.42857143;
			}
			input[type=text]:focus,input[type=email]:focus {
				  border-color: #66afe9;
				  outline: 0;
				  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
				          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
				
			}
		</style>
		
			<form method="post" action="home.php">
				<div class="row" id="formsit">

				<?php

				if(isset($error))
				{
					echo $error;
				}
				?>
				<input type="text"  name="name" placeholder="Enter your Name" style="width:200px; padding-left:20px;" required>
				<input type="email" name="email" id="emailid" placeholder="And Your Email" style="width:200px;padding-left:20px; " >

									<?php

					//using PHP to send the mail

					//then check to see if it is validated;

					if(isset($_POST['submit']))
					{
						//check if the fields are not empty.
						$name=$_POST['name'];
						$email=$_POST['email'];
						$text=$_POST['message'];
						if(!empty($name) && !empty($email))
						{
							//sanitise the email
							if(filter_var($email,FILTER_VALIDATE_EMAIL))
							{
								mailto("yourcontact@mail.com",$name,$email,$text);
							}
							else{
								$error="<div class='alert alert-warning'>Please Check the mail You Entered</div>";
							}
							//then send the mail.
							
						}
						else{
							$error="<div class='alert alert-warning'>Please Check the mail You Entered</div>";
						}
					}
					?>
				</div>

				<div class="row">
					<textarea style="height:300px; margin-top:30px; width:400px;" class="form-control" name="message">
						
					</textarea>

					<center style="margin-top:20px;"><input type="submit" name="submit" value="Contact!" id="submit" /></center>
				</div>
				
			</form>
			
		
		</div>
		</center>
	</div>

</section>
</body>
</html>

