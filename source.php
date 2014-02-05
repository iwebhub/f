<?php
	echo 'ovo je minificirani source :( ispričavam se zbog toga, kao i problema s enkodiranjem ove stranice. bit će prebačeno na github uskoro :)';
	echo '<h2>index.php</h2> <code>';
	$i = htmlentities(file_get_contents('index.php'));
	echo $i;
	echo '</code>';
	echo '<h2>f.css</h2> <code>';
	$f = htmlentities(file_get_contents('f.css'));
	echo $f;
	echo '</code>';
	echo '<h2>source.php</h2> <code>';
	$s = htmlentities(file_get_contents('source.php'));
	echo $s;
	echo '</code>';
?>
