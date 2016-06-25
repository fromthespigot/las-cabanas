<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "fromthespigot@gmail.com";
 
    $email_subject = "Test Subject";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
	
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">    
    	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Billiard Systems - The easiest and most effective Three Cushion billiard training method</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="The most advanced 3-Cushion Billiard training system. Features a complete collection of systems from basic to masters in an interactive format.">
    <meta name="keywords" content="3 Cushion, 3-Cushion, three cushion, billiard, billiards, carom, 3-rails, three rails, 3 rails, rails, cushion, systems, billiard systems, three cushion billiard systems, caramboulage, learn billiards, billiard federations, billiard tournaments, 3 Cushion Tournaments, three cushion tournaments, three cushion classes, three cushion methods, learn three cushion, learn three cushion billiards, three cushion classes, 3 cushion classes, 3 cushion methods, learn 3 cushion billiards, three cushion training, 3 cushion training, basic systems, dead ball systems, plus systems, linear systems, ball hitting systems, the spot on the wall systems, plus 2 system, around the table system, around the table systems, tickies, reverse systems, double reverse systems, advanced systems, masters systems, position systems, billiard records, billiard statistics, statistics, records, 3 cushion videos, three cushion videos, carom videos, interactive training, interactive 3 cushion methods, interactive three cushion systems, billiards interactive, interactive systems, billiard videos, billiard club, three cushion lessons, 3 cushion lessons, billiard lessons, billiard tables, billiard balls, billiard cues, billiard rails, billiard slates, billiard cloth, billiards cloth, 3 cushion shirts, three cushion accessories, 3 cushion accessories, billiard accessories, 3 cushion books, three cushion books, 3 cushion billiard tutorials, billiard tutorials, three cushion billiard tutorials, carom billiards, willie hoppie, torbjorn blombahl, marco zanetti, dick jaspers, raimond ceulemans, ceulemans, roberto arana, danny sanchez, robert byrne, billiard atlas, Sayguiner, DPM Universal system, roberto rojas, luis miguel avila, luis aveiga">
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
	<header class="miniheader">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        	<div class="container">
            	<div class="navbar-header">
                	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    	<span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                	<a class="navbar-brand" href="#featured">Billiard Systems</a>
				</div><!-- Navbar Header -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index2.html">Home</a></li>
                        <li><a href="aboutus2.html">About Us</a></li>
                        <li><a href="library2.html">Library</a></li>
                        <li><a href="shop2.html">Shop</a></li>
                        <li><a href="contact2.html">Contact</a></li>
                    </ul>
                </div><!-- nav navbar-right-->
            </div><!-- collapse navbar-collapse-->
        </nav>
         <div class="container-fluid container-fluid-fix miniheader">
        <div class="carousel slide miniheader" data-ride="carousel" id="featured">
        	<ol class="carousel-indicators">
                <li data-target="#featured" data-slide-to="0" class="active"></li>
                <li data-target="#featured" data-slide-to="1"></li>
                <li data-target="#featured" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="images/wBan1.jpg" alt="untitled" class="nopad">
                	<div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>
                <div class="item"><img src="images/wBan1.jpg" alt="untitled" class="nopad">
                	<div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>
                <div class="item"><img src="images/wBan1.jpg" alt="untitled" class="nopad">
                	<div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>
                <div class="item"><img src="images/wBan1.jpg" alt="untitled" class="nopad">
                	<div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>
       		</div> <!-- carousel inner -->
            <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#featured" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div> <!-- featured carousel -->
        </div> <!-- container -->
    </header><!-- header  -->
    <div class="main">
    	<div class="container sideless">
        	<div class="col-md-8">
            <p class="leftside">Billiard Systems is designed to help all 3-Cushion Billiard players to reach their full potential. Our interactive tutorial software will enrich your playing exprience by strengthening your skills and comprehension of gameplay. We are here to educate and inspire.</p>
            <p class="leftside">Our system takes you through a step-by-step approach of the game of 3-Cushion Billiards. At each step you will gain experience and mastery that will allow you to increase your scoring ability and fully realize your capability as a player of 3-Cushion Billiards.</p>
        	</div>
            <div class="col-md-4 sideless colored">
            	<h2>Preview Systems</h2>
                <a href="swffiles/GTC.html" class="sides"><img src="images/Order_1.jpg" class="zoneleft"><p>Preview our "Getting to the Corners" System</p></a>
                <a href="swffiles/DB2.html" class="sides"><img src="images/Order_2_2.jpg" class="zoneleft"><p>Preview our "Dead Ball 1" System</p></a>
                <a href="swffiles/DB3.html" class="sides"><img src="images/Order_3.jpg" class="zoneleft"><p>Preview our "Dead Ball 2" System</p></a>
                <a href="bssystems/system__INT1_09262010.php" class="sides"><img src="images/DB4.jpg" class="zoneleft"><p>Preview our "Dead Ball 3" System</p></a>
                
            </div>
        </div><!-- container -->
    </div><!-- main -->
    <footer>
    	<div class="content container">
        	<div class="row">
            	<div class="col-sm-6 rights">
                All contents <i class="fa fa-copyright"></i>2015 From the spigot productions. All Rights reserved.
                </div> <!--col6-->
                <div class="col-sm-6">
                    <nav class="navbar navbar-default foot" role="navigation">
                        <ul class="nav navbar-nav navbar-right footerfit">
                            <li><a href="">link1</a></li>
                            <li><a href="">link1</a></li>
                        </ul>
                    </nav><!-- navbar footer -->
                </div><!--col6-->
            </div><!-- row-->
        </div><!--container-->
    </footer>
</body>
</html>

 





 
 
<?php
 
}
 
?>