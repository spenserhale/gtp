<?php require 'aws/aws-autoloader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guess The Price!</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="body">	
	<div id="content" class="container-fluid">	
		<header id="header">
			<div id="toprow" class="row">					
				
				<div id="logo" class="col-xs-3">		
					<img src="http://placehold.it/75x75" class="img-rounded"/>	
				</div><!--/#logo-->	

				<div id="category" class="col-xs-6">					
					<nav id"nav"><img src="http://placehold.it/300x55" class="img-rounded"/></nav>				
				</div><!--/#category-->

				<div id="favorites" class="col-xs-3">		
					<img src="http://placehold.it/75x75" class="img-rounded" />	
				</div><!--/#logo-->	

			</div><!--/#toprow-->
			<hr />
		</header> <!--/header-->
		<section>
			<div id="productrow" class="row">

				<div id="image" class="col-xs-4">
					<img src="http://placehold.it/200x250" class="img-rounded"/>
				</div><!--/#image-->
				<div id="name" class="col-xs-8">
					<div><img src="http://placehold.it/400x80" class="img-rounded"/></div>
					<div id="details"><a><button class="btn btn-primary btn-lg btn-block" type="button">Details</button></a></div>
				</div><!--/#name-->

			</div><!--/#productrow-->
		</section><!--/#product-->
		<section>
			<div id="iconrow" class="row">

				<div id="share" class="col-xs-1 col-xs-offset-10">
					<div><div><span class="glyphicon glyphicon-share" aria-hidden="true"></span></div></div>
				</div><!--/#share-->

				<div id="favoriteicon" class="col-xs-1">
					<div><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></div>
				</div><!--/#favoriteicon-->
			</div><!--/#iconrow-->
			<hr />
		</section>
		<section>
			<div id="guessrow" class="row">

				<div id="guess" class="col-xs-6">
					<div>Guess The Price!</div>
				</div><!--/#guess-->

				<div id="skip" class="col-xs-6">
					<div>skip&nbsp;<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></div>
				</div><!--/#skip-->
			</div><!--/#guessrow-->
		</section><!--/#question-->
		<section id="option">
			<div id="optionrowa" class="row">
		
				<div id="optiona" class="col-xs-6">
					<a><button id="buttona" class="btn btn-primary btn-lg btn-block" type="button"></button></a>	
				</div><!--/#optiona-->

				<div id="optionb" class="col-xs-6"> 
					<a><button id="buttonb" class="btn btn-primary btn-lg btn-block" type="button"></button></a>	
				</div><!--/#optionb -->

			</div> <!--/#optionsrowa -->
			<div id="optionrowb" class="row">
				
				<div id="optionc" class="col-xs-6"> 
					<a><button id="buttonc" class="btn btn-primary btn-lg btn-block" type="button"></button></a>	
				</div><!--/#optionc -->

				<div id="optiond" class="col-xs-6"> 
					<a><button id="buttond"class="btn btn-primary btn-lg btn-block" type="button"></button></a>
				</div><!--/#optiond -->

			</div> <!--/#optionsrowb -->
			<hr />
		</section><!--/#options -->
		<footer id="footer">
			<div id="bottomrow" class="row">

				<div id="copyright" class="col-xs-12">
					<p>&#169; 2015 Guess The Price!</p>
				</div><!--/#copyright-->

			</div><!--/#bottomrow-->	
		</footer><!--/#footer-->
	</div><!--/#content-->
	<!--/JavaScript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://chancejs.com/chance.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		var correct, incorrect1, incorrect2, incorrect3;
		var removeDollarSign = function(correct){
			return correct.charAt(0) === '$' ? correct.slice(1) : correct;		
		};	
		var correct = removeDollarSign(chance.dollar());
		var incorrect1 =  correct * 1.10;
		var incorrect2 = correct * 1.90;
		var incorrect3 = correct * .5;
		document.getElementById("buttona").innerHTML = correct;
		document.getElementById("buttonb").innerHTML = chance.dollar({max: incorrect1});
		document.getElementById("buttonc").innerHTML = chance.dollar({max: incorrect2});
		document.getElementById("buttond").innerHTML = chance.dollar({max: incorrect3});               
	</script>
</body><!--/#body-->
</html><!--/html-->