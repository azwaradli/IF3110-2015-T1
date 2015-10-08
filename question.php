<?php

	include ("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>StackExchange</title>

	<link href='https://fonts.googleapis.com/css?family=Titillium+Web|Source+Sans+Pro|Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<div class="container">
		<div class="header">
			<h1>
				<a href="index.php">Simple StackExchange</a>
			</h1>
		</div>
		<div class="wrapper">
			<div class="title">
				<h2>
					<?php
						getQuestionByParam("topic");
					?>
				</h2>
			</div>

			<div class="question-container">
				<div class="vote-place">
					<img src="images/up-arrow.png" class="arrow-images">
					<h1>
						<?php
							getQuestionByParam("votes");
						?>
					</h1>
					<img src="images/down-arrow.png" class="arrow-images">
				</div>
				<div class="full-question">
					<p>
						<?php
							getQuestionByParam("content");
						?>
					</p>
				</div>
				<div class="asked-by">
					<p>asked by 
						<span class="name">
							<?php
								getQuestionByParam("name");
							?>
						</span>
						at
						<span class="name">
							<?php
								getQuestionByParam("date");
							?>
						</span>
						 | edit | delete
					</p>
				</div>
			</div>

			<?php
				getCountAnswers();
			?>
			
			<?php
				getAnswers();
			?>

			<!--
			<div class="answer-container">
				<div class="vote-place">
					<img src="images/up-arrow.png" class="arrow-images">
					<h1>6</h1>
					<img src="images/down-arrow.png" class="arrow-images">
				</div>
				<div class="full-question">
					<p>The answer content goes here Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="asked-by">
					<p>answered by username at datetimes</p>
				</div>
			</div>
			-->

			<form role="form" method="post" class="question-form">
				<div class="title">
					<h1>Your Answer</h1>
				</div>

				<input type="text" placeholder="Name" class="content-question-form">
				<input type="email" placeholder="Email" class="content-question-form">
				<textarea rows="10" cols="106" placeholder="Content" class="textarea-question-form"></textarea>
			</form>

			<input type="button" value="Post" class="post-button">

		</div>
	</div>
</body>
</html>