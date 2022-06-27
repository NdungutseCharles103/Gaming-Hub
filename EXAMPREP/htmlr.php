<?php
$input = 'The term <i>Official Ireland</i> is commonly <br />' .
	'used in  <b>the Republic of Ireland</b> to denote<br />' .
	' the media, cultural and religious establishment. '.
	'<script>alert("Nice try!");</script>' .
	'<img src="/spam.jpg" />';
	
echo strip_tags($input);

$a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV');

foreach ($a as $key => $value) {
    echo $key . ' is ' . $value . '<br />';
}
?>