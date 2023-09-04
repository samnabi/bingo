
<html>
<head>
	<title>#UWATERLOOGRAD CONVOCATION BINGO</title>
	<meta name="description" content="Listen for these words in today's convocation speeches. Get one row in any direction... then click BINGO!" />
	<style type="text/css">
		body {
			text-align: center;
			font-family: sans-serif;
		}
		label {
			display: block;
			float: left;
			width: 30%;
			margin: 1%;
			text-align: center;
			padding: 3em 0;
			background: gold;
			color: black;
			font-weight: bold;
			text-decoration: none;
		}

		input.submit {
			display: none;
			margin: 0 auto;
			background: green;
			color: white;
			padding: 2em;
			font-size: 2em;
			border: none;
			border-radius: 10em;
		}
	</style>
	<script type="text/javascript" src="jquery.js" /></script>
</head>
<body>
<h1>#UWATERLOOGRAD CONVOCATION BINGO</h1>
<p>Listen for these words in today's convocation speeches. Get one row in any direction... then click BINGO!</p>
<?php

$words =	array(
				'alumni',
				'graduate',
				'world',
				'adventure',
				'success',
				'leader',
				'student',
				'tomorrow',
				'Waterloo',
				'future',
				'opportunity',
				'career',
				'journey',
				'young',
				'entrepreneur',
				'innovative',
				'startup',
				'Hamdullahpur',
				'parents',
				'friends',
				'geese',
				'excellence',
				'proud',
				'experience',
				'tradition',
				'class',
				'inspire',
				'learn',
				'risk',
				'relationship',
				'imagination',
				'passion',
				'generation',
				'economy',
				'society',
				'moment',
				'happiness',
				'motivation',
				'dream',
				'commitment',
				'ambition',
				'reputation',
				'respect',
				'pressure',
				'responsibility',
				'change',
				'challenge',
				'professor',
				'mentor',
				'hope',
				'bright',
				'degree',
				'university',
				'idea',
				'BlackBerry'
			);

shuffle($words);

?>

<form action="process.php" method="POST">

	<?php 
	$i = 0;
	foreach( $words as $word){
		$i++;
		if ($i <= 9) {
			echo '<label>'.$word.'<br /><input type="checkbox" name="'.$i.'" value="'.$word.'"></label>';
		}
	}
	?>

	<input type="hidden" name="words" />

	<script>
		$('input[type="checkbox"]').click(function(){
			if($('input[name="1"]').is(':checked') && $('input[name="2"]').is(':checked') && $('input[name="3"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="4"]').is(':checked') && $('input[name="5"]').is(':checked') && $('input[name="6"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="7"]').is(':checked') && $('input[name="8"]').is(':checked') && $('input[name="9"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="1"]').is(':checked') && $('input[name="4"]').is(':checked') && $('input[name="7"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="2"]').is(':checked') && $('input[name="5"]').is(':checked') && $('input[name="8"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="3"]').is(':checked') && $('input[name="6"]').is(':checked') && $('input[name="9"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="1"]').is(':checked') && $('input[name="5"]').is(':checked') && $('input[name="9"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
			if($('input[name="3"]').is(':checked') && $('input[name="5"]').is(':checked') && $('input[name="7"]').is(':checked')) {
				$('input[type="submit"]').css('display','block');
			}
		});
	</script>
	
	<input class="submit" type="submit" value="BINGO!" />

</form>

</body>
</html>