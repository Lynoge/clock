<!DOCTYPE html>
<html lang="en">
<head>
	<title>One clock done with HTML5, CSS3 and JavaScript</title>
	<meta charset="utf-8">
	<meta description="One clock done with HTML5, CSS3 and JavaScript">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

	<!-- Definition SVG properties -->
	<svg version="1.1"
		 width="250"
		 height="250"
		 xmlns="http://www.w3.org/2000/svg"
		 class="clock">

		 	<defs>
		 		<!-- Definition radial gradient of clock -->
		 		<radialGradient id="bgClock">
		 			<stop offset="0%" stop-color="#fff" />
		 			<stop offset="100%" stop-color="#dbdbdb" />
		 		</radialGradient>
		 		<radialGradient id="borderClock">
		 			<stop offset="0%" stop-color="#fff" />
		 			<stop offset="100%" stop-color="#000" />
		 		</radialGradient>
		 	</defs>

			<circle cx="250" cy="200" r="300" fill="url(#borderClock)" />
			<circle cx="125" cy="125" r="115" fill="url(#bgClock)" />

	</svg>

</body>
</html>