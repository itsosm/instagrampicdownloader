<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Instagram Downloader</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<center>
		<input type="text" class="input" >
		<button class="submit">Submit</button>
		<br><br>
		<div class="dwn"></div>
		<script type="text/javascript">
			$('.submit').click(function() {
				var userurl = $('.input').val();

				$.ajax({
					url: 'https://api.instagram.com/oembed',
					type: 'GET',
					dataType: 'JSON',
					data: {url: userurl},
					success:function(data){
						var thumbnail = data.thumbnail_url;
						$('.dwn').html('<a href='+thumbnail+'> DOWNLOAD NOW</a>');


					}
				});


			});


		</script>


	</center>

</body>
</html>