<?php 
require_once 'config.php';
require_once 'functions.php';
echo '<div class="row">';
foreach ($restaurantsList as $name => $list) {
	echo "<div class=\"col-3 mt-2\">
	<div class=\"card\">
	<div class=\"card-body\"><h4 class=\"card-title\">
	$name</h4>";
	$result = getPage($list, '<div style="max-width: 200px; max-height: 250px;', '</body><br>', '</body><br>');
	echo $result;
	echo '</div>
	</div>
	</div>';		
}
echo '</div>';
