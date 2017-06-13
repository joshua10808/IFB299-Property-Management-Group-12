<!-- written for IFB299 by James Roff -->



<!DOCTYPE html>

<html>

	<head>

		<meta charset = "UTF-8">

		<!--<link href = "mystyle.css" rel="stylesheet" type="text/css"/> -->

		<!-- Link to Css document -->

	

		<title>Emergencies Page</title>

		<script type="text/javascript" src="/IFB299/modules/tenants/src/modules/myScripts.js"></script>

		

		<style>

		th, td {padding: 2px;}

		</style>

	</head>

	

	<body>

		

		<div id="wrapper">	

			<div id ="header">

				<h1 id = "parkName" style ="color:black;">Emergency Details Page</h1>

			</div>

			<p><br><p>

			<div id ="content">

				

				<table>

					<tr>

						<td>

							<h2 style ="color:black;">In Emergencies</h2>

							<p>

								In case of Emergency first call 000. Then follow the <br>

								emergency guidelines on the back of your rental properties <br>

								front door.

							</p>

						</td>

						<td>

							<h2 style ="color:black;">Emergency Websites</h2>

							<p>

							<a href="https://www.qld.gov.au/emergency/">Emergency services and saftey (Government Website)</a><br>

							<a href="http://www.disaster.qld.gov.au/ea/default.asp">Disaster Management (Government Website)</a><br>

							<a href="http://www.bom.gov.au/">Weather Conditions (BoM)</a><br>

							</p>	

						</td>

					</tr>

					<tr>

						<td>

							<h2 style ="color:black;">Emergency Rally Point</h2>

							<p>

								Incase of emergency, get your current location by <br>

								clicking the "Get location!" button on the bottom right <br>

								section of the page. From your location identify any main <br>

								roads, sheltered buildings or rivers. If the emergency is a fire <br>

								head towards the river or main rd. If the emergency is a cyclone, <br>either stay 

								indoors and tune into the disaster managment website <br> link (up above), 

								for more information. Or head towards any sheltered buildings that you identified.

								

							</p>

						</td>

						<td>

							<p><br><br><br><br><br><br><br><br></p>
							<h2 style ="color:black;">Your Current Location</h2>

							<p id="status"><br>

							<button onclick="getLocation()">Get location!</button>
							<p><br></p>
							<img src='/IFB299/modules/tenants/src/modules/QUT.JPG' <HR width = "45%">
							<div id="mapholder"></div>
							<p>Lognitude = -27.472831442, Latitude = 153.023499906</p>


							<p><br>Note:Geo Location has an unknown problem on the server and won't work so QUTs location was substituted in. </p>

							

							</p>

						

						</td>

					</tr>	

				</table>

			</div>

			

		<p><a href="/IFB299/modules/tenants">Back to dashboard</a><br></p>

		</div>

	</body>

	

</html>



