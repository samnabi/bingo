<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOU WON CONVOCATION BINGO!</title>

	<style>
		h1 {
			background: gold;
		}
		body {
			text-align: center;
			font-family: sans-serif;
		}
		a.big {
			display: block;
			background: green;
			padding: 1em 2em;
			margin: 2em auto;
			color: white;
			font-weight: bold;
			text-decoration: none;
			width: 30%;
			border-radius: 1em;
		}
	</style>
</head>
<body>

<?php

foreach($_POST as $bingo_word){
	$bingo_words .= $bingo_word.' ';
}

?>

<h1>BINGO!</h1>

<p>Way to go! You won bingo with the words <strong><?php echo strtoupper($bingo_words); ?></strong>!</p>

<a class="big" target="_blank" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fbingo.samnabi.com&hashtags=uwaterloograd&text=I+just+won+Convocation+Bingo+with+<?php echo strtoupper(urlencode($bingo_words)) ?>!">Click here to Tweet your victory!</a>

<a class="big" href="index.php">Click here to play again</a>

<small><p><em>This is a silly little game by <a href="http://samnabi.com">Sam Nabi</a>. I hope you like it!</p></em></small>

<?php include('../analytics.php'); ?>

</body>
</html>