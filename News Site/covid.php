<!--u20543043, Apinda Tekula-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>COVID UPDATES</title>
<link rel="stylesheet" href="Covid.css">
<link rel="stylesheet" href="Huballi FontKit/styleheet.css">
<link rel="shortcut icon" href="a_s_logo_1QZ_icon.ico" type="image/x-icon">
<script src="covid_functions.js"></script>
</head>

<body onload="loadingBar()">
	<button type="button" class="button"><a href="home-page.php">HOME</a></button>
	<div class="user_log_in_and_out">
<button type="submit" class="user_button" id="user_button" onmouseover="document.getElementById('logout_button').style.display='block';" onmouseleave="document.getElementById('lougout_button').style.display='none';"><?=$_SESSION["username"]?></button>
<button type="submit" class="log_out_button" id="logout_button" style="display: none;" onmouseover="document.getElementById('logout_button').style.display='block';" onmouseleave="document.getElementById('logout_button').style.display='none';"><a href='logout.php'>Log Out</a></button>
</div>
	<header>
	<p id="WebsiteName"><img src="As Logo.jpg" alt="Cracked Shell,no more withholding", width="159" height="129" border="2px dotted purple" title="A's Daily"> <i> A's Daily</i></p>		
</header>
<form id="form" style="display:none">
	<fieldset>
<legend> Corona Virus News</legend>

<ul>
<p> <u> Global statistics:</u></p>
<li><a onclick="getStatsZA()" href="#" > South Africa</a></li><!--shows a pop up of SA stats-->
<li><a href="#" onclick="getStatsBR()"> Brazil</a></li>
<li><a href="#" onclick="getStatsRU()"> Russia</a></li>
<li><a href="#" onclick="getStatsES()"> Spain</a></li>
</ul> 

<div id="countryStats">
	<span id="close_results_popup" onclick="clearResults()">&CircleTimes;</span>
	<h4 style="color:cadetblue" id="Country">COVID-19 recents:</h4>
	<h4 id="date"> </h4>
	<h6>New Daily Cases: &nbsp; <span id="new_cases"></span></h6>
	<h6>New Daily Recoveries: &nbsp; <span id="new_recoveries"></span></h6>
	<h6>New Daily Deaths: &nbsp; <span id="new_deaths"></span></h6>
	<h6>Total Cases: &nbsp; <span id="total_cases"></span></h6>
	<h6>Total Recoveries: &nbsp; <span id="total_recoveries"></span></h6>
	<h6>Total Deaths: &nbsp; <span id="total_deaths"></span></h6>
	<div id="graph_stats"></div>
</div>
 &nbsp;
 <figure>
 <figcaption>WORLDWIDE COVID CASES(since 2020)</figcaption>
 <img src="https://www.statista.com/graphic/1/1103040/cumulative-coronavirus-covid19-cases-number-worldwide-by-day.jpg" width="500" />
 </figure>
 <div style= "border: 2px solid black" >
 <h5><u>WorldWide Covid-19 Stats</u></h5>
 
 <table>
 <tr>
 <th>Total Infections:</th>
 <th>Deaths:</th>
 <th>Recoveries:</th>
 </tr>
 
 <tr>
 <tc><td>453,904,556</td></tc>
 <tc><td> 6,052,750</td></tc>
 <tc><td>388,210,588</td></tc>
 </tr>
 
 <tr>
 <tc><td>1</td></tc>
 <tc><td>0.0133</td></tc>
 <tc><td>0.8553</td></tc>
 </tr>
 </table>
 </div>

<div class="ratios">
<p>Infection Fatality Ratio = 1 : 1 </p>
<p>Case Fatality Ratio = 1 : 0.0133 </p>
<p>Mortality Rate= 85.53%</p>
</div>
</fieldset>
</form>
<footer class="footer">
	<?php include "footer.php"; ?> | <a href="API.php">API</a>
</footer>
</body>
</html>
