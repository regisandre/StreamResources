<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="ressources/js/jquery.js"></script>
		<script type="text/javascript">
			function autoupdate() {
				var duration = 8; // Durée d'apparition en secondes
								
				$('#lastdonation').animate({"left": "+=320px"}, 1000);
				$('#info').animate({"left": "+=320px"}, 1000);
				
				setTimeout(function() {
					$('#lastdonation').animate({"left": "-=320px"}, 1000);
					$('#info').animate({"left": "-=320px"}, 1000);
				}, duration*1000)
			}

			$(function(){
				autoupdate();
			});
		</script>
		<style>
			body {
				background-color: rgba(0, 0, 0, 0);
				margin: 0px auto;
				overflow: hidden;
				color: #7AFF00;
			}
			
			#lastdonation {
				position: relative;
				left: -320px;
			}
			
			#info {
				position: relative;
				bottom: 45px;
				right: 520px;
				font-family: Arial, sans-serif;
				font-size: 22px;
			}
		</style>
	</head>
	<body>
		<img id="lastdonation" src="ressources/images/donation/lastdonation.png" alt="lastdonation">
		<iframe width="500px" height="500px" id="info" src="https://streamlabs.com/widgets/donation-ticker?token=11BED940BCFFDA812806"></iframe>
	</body>
</html>