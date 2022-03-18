<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stoplist</title>
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div id="container" class="container"></div>
	<script>

		function show()
		{
			$.ajax({
				url: "list.php",
				cache: false,
				success: function(html){
					$("#container").html(html);
				}
			});
		}
	
		$(document).ready(function(){
			show();
			setInterval('show()',300000); //время обновления в мс
		});
	</script>
</body>
</html>