<?php require 'aws/aws-autoloader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guess The Price!</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="body">	
	<div id="content" class="container-fluid">	
		<header id="header">
			<div id="toprow" class="row">					
				<div id="logo" class="col-xs-3">		
					<i class="fa fa-cube"></i>
				</div><!--/#logo-->	
				<div id="category" class="col-xs-6">					
					<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    Category
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
					    <li><a href="#">All</a></li>
					    <li><a href="#">Baby Products</a></li>
					    <li><a href="#">Books</a></li>
					    <li><a href="#">Camera &amp; Photo</a></li>
					    <li><a href="#">Cell Phones</a></li>
					    <li><a href="#">Electronics</a></li>
					    <li><a href="#">Home &amp; Garden</a></li>
					    <li><a href="#">Music</a></li>
					    <li><a href="#">Musical Instruments</a></li>
					    <li><a href="#">Office</a></li>
					    <li><a href="#">Outdoors</a></li>
					    <li><a href="#">Personal Computers</a></li>
					    <li><a href="#">Sports</a></li>
					    <li><a href="#">Toys &amp; Games</a></li>
					    <li><a href="#">Video Games</a></li>
					  </ul>
					</div>				
				</div><!--/#category-->
				<div id="share" class="col-xs-3">		
					<a href"#"><i class="fa fa-chevron-right"></i></a>
				</div><!--/#logo-->	
			</div><!--/#toprow-->
			<hr />
		</header> <!--/header-->
		<section>
			<div id="productrow" class="row">
				<div id="image" class="col-xs-4">
					<img src="data:image/webp;base64,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" class="img-rounded"/>
				</div><!--/#image-->
				<div id="name" class="col-xs-8">
					<div><h3>"39" Inch Full Size Black Student Beginner Classical Nylon String Guitar &amp; DirectlyCheap&trade; Translucent Blue Medium Guitar Pick (PRO-S Series) [Teacher Approved]</h3></div>
					<div id="details"><a><button class="btn btn-lg btn-block" type="button">Source</button></a></div>
				</div><!--/#name-->
			</div><!--/#productrow-->
			<hr />
		</section><!--/#product-->
		<section>
			<div id="guessrow" class="row">
				<div id="guess" class="col-xs-6">
					<div>Guess The Price!</div>
				</div><!--/#guess-->
				<div id="skip" class="col-xs-6">
					<i class="fa fa-share-alt"></i>
				</div><!--/#skip-->
			</div><!--/#guessrow-->
		</section><!--/#question-->
		<section id="option">
			<div id="optionrowa" class="row">	
				<div id="optiona" class="col-xs-6">
					<a><button id="buttonA" class="btn btn-lg btn-block" type="button"></button></a>	
				</div><!--/#optiona-->
				<div id="optionb" class="col-xs-6"> 
					<a><button id="buttonB" class="btn btn-lg btn-block" type="button"></button></a>	
				</div><!--/#optionb -->
			</div> <!--/#optionsrowa -->
			<div id="optionrowb" class="row">
				<div id="optionc" class="col-xs-6"> 
					<a><button id="buttonC" class="btn btn-lg btn-block" type="button"></button></a>	
				</div><!--/#optionc -->
				<div id="optiond" class="col-xs-6"> 
					<a><button id="buttonD"class="btn btn-lg btn-block" type="button"></button></a>
				</div><!--/#optiond -->
			</div> <!--/#optionsrowb -->
			<hr />
		</section><!--/#options -->
		<footer id="footer">
			<div id="bottomrow" class="row">
				<div id="copyright" class="col-xs-12">
					<p >&copy; 2015 <a href="https//www.guessdollar.com/">Guess Dollar!</a></p>
				</div><!--/#copyright-->
			</div><!--/#bottomrow-->	
		</footer><!--/#footer-->
	</div><!--/#content-->
	<!--/JavaScript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://chancejs.com/chance.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
			// @difficulty 1 - 10, higher the easier
		// Difficulty is still random
		function getChoices(difficulty) {

		    //Get Answer and Answer Placement
		    var answer = chance.floating({fixed: 2, min: 100, max: 200}),
		        answerPlacement = chance.integer({min: 0, max: 3}),
		        choices = [],
		        choiceRanges,
		        choiceValue,
		        answerClass,
		        spreadMultiplier = chance.floating({fixed: 2, min: 0.01, max: (difficulty / 100 )}); //originally 0.05

		    //Setup Debug
		    console.log('spreadMultiplier: ' + spreadMultiplier * 100 + '%');
		    console.log('answer: ' + answer);
		    console.log('answerPlacement: ' + answerPlacement);

		    //Set up Choice Ranges based on Answer Placement (Matrix)
		    switch(answerPlacement) {
		        case 0:
		            choiceRanges = [1, 1 + spreadMultiplier, 1 + spreadMultiplier * 2, 1 + spreadMultiplier * 3];
		            answerClass = document.getElementById("buttonA");
		            break;
		        case 1:
		            choiceRanges = [1 - spreadMultiplier, 1, 1 + spreadMultiplier, 1 + spreadMultiplier * 2];
		            answerClass = document.getElementById("buttonB");
		            break;
		        case 2:
		            choiceRanges = [1 - spreadMultiplier * 2, 1 - spreadMultiplier, 1, 1 + spreadMultiplier];
		            answerClass = document.getElementById("buttonC");
		            break;
		        case 3:
		            choiceRanges = [1 - spreadMultiplier * 3, 1 - spreadMultiplier * 2, 1 - spreadMultiplier, 1];
		            answerClass = document.getElementById("buttonD");
		            break;
		    }
		    // Add a new class to the correct button
		    answerClass.className = answerClass.className + " answer";
		    // Create Choices
		    for (var i = 0; i < 5; i++) {
		        if(choiceRanges[i] === 1) {
		            choiceValue = answer;
		        } else {
		            choiceValue = chance.floating({
		                fixed: 2,
		                min: answer * (choiceRanges[i] - spreadMultiplier),
		                max: answer * (choiceRanges[i] + spreadMultiplier)
		            });
		        }
		        // If want to round to closest hundredth of a decimal
		        choices[i] = '$' + ( Math.round( 100 * (choiceRanges[i] * choiceValue) ) / 100 );

		        // If want to round to 99 cents
		        //choices[i] = '$' + (Math.round(choiceRanges[i] * choiceValue) - 0.01);
		    }

		    // Sort Choices
		    choices = choices.sort(function (a, b) {
		        return a - b;
		    });

		    //Choice Debug
		    console.log('choice A: ' + choices[0]);
		    console.log('choice B: ' + choices[1]);
		    console.log('choice C: ' + choices[2]);
		    console.log('choice D: ' + choices[3]);

		    document.getElementById("buttonA").innerHTML = choices[0];
		    document.getElementById("buttonB").innerHTML = choices[1];
			document.getElementById("buttonC").innerHTML = choices[2];
			document.getElementById("buttonD").innerHTML = choices[3];

		    return choices;
		}

		getChoices(5);
	</script>
</body><!--/#body-->
</html><!--/html-->