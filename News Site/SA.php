<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head><title>My South Africa!</title>
<link rel="stylesheet" href="sa.css">
<link rel="stylesheet" href="Huballi FontKit/styleheet.css"/>
<script src="sa_page_functions.js"></script>
<link rel="shortcut icon" href="a_s_logo_1QZ_icon.ico" type="image/x-icon">

</head>

<body  onload="loaderFunc()">
<header>
<div class="user_log_in_and_out">
<button type="submit" class="user_button" id="user_button" onmouseover="document.getElementById('logout_button').style.display='block';" ><?=$_SESSION["username"]?></button>
<button type="submit" class="log_out_button" id="logout_button" style="display: none;" onmouseover="document.getElementById('logout_button').style.display='block';" onmouseleave="document.getElementById('logout_button').style.display='none';"><a href="logout.php">Log Out </a></button>
</div>
	<figure >
	<img src="SA flag.jpg" alt="RSA flag" class="sa flag"/>
	<img src="covid-19 snap.jpg" alt="Corona virus,shit is getting real" class="Covid Reminder" title="Covid-19"/>
	</figure>
<p id="Website name spot"><img src="As Logo.jpg" alt="Cracked Shell,no more withholding", width="159" height="129" border="2px dotted purple" title="A's Daily"><a id="a'sdaily" href="https://wheatley.cs.up.ac.za/u20543043/COS216/PA3/index.html">A's Daily</a></p><p id="sa">SA</p>
</header>
<button id="reloadbutton" ><a href="SA.html">Reload</a></button>
<button id="previouspage"><a href="home-page.php">Prev</a></button>
<table id="stories">
<div id="loadingBar"></div>
<th>
CURRENT SOUTH AFRICA NEWS
</th>
<list>
<tr><span><td><li><a href="" title="Serial Killer in Gauteng, 10/10" id="sa_story1" target="_blank" rel="noreferrer noopener">Serial Killer on the loose in the streets of Gauteng</a></li><p id="author1">by Pamela Khoza</p><p id="date1">11 March 2022</p> <img src="article.jpg" alt="" width="120px" height="90px" id="image1" class = "article image"/></td></span></tr>

<tr><span><td><li><a href="" title="Justin Bieber's Justice World Tour, 10/10" id="article2" target="_blank" rel="noreferrer noopener">Justin Bieber To Perform IN SA!</a></li><p id="author2">by Tekula</p><p id="date2">11 March 2022</p><img src="justin bieber.jpg" alt="" width="120px" height="190px" id="image2" class = "article image"/></td></span></tr>

<tr><span><td><li><a href="https://mybroadband.co.za/news/energy/440692-cable-thieves-in-south-africa-armed-with-ak-47s-killing-security-guards.html" title="Covid-19 death rise in SA, 10/10" id="article3">Cable thieves in South Africa armed with AK-47s killing security guards</a></li><p id="author3"><a href="https://mybroadband.co.za/news/author/staff-writer" "target="_blank" rel="noreferrer noopener">Staff Writer</a></p><p id="date3"> 10 April 2022 </p> <img src="https://wheatley.cs.up.ac.za/u20543043/COS216/PA3/Copper-cable-damage-theft-City-Power.jpg" alt="" width="120px" height="90px" id="image3" class = "article image"/></td></span></tr>

<tr><span><td><li><a href="" title="TUKS students, 7/10" id="article4" target="_blank" rel="noreferrer noopener">UP students have been proven to be thebomb.com </a></li><p id="author4">by Unknown </p><p id="date4">11 March 2022 </p> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3bEkqcmWhRi997CaaE3loPrV5V-BhvhtO0g&usqp=CAU" alt="" width="120px" height="90px" id="image4" class = "article image"/></td></span></tr>

<tr><span><td><li><a href="" title="Could the war be emerging SA?, 8/10" id="article5" target="_blank" rel="noreferrer noopener">Voice Note Leak: Putin wants to invade South Africa</a></li><p id="author 5">by Tris</p><p id="date5">11 March 2022</p> <img src="https://e3.365dm.com/22/03/768x432/skynews-vladimir-putin-graphic_5701348.jpg?20220310141340" alt="" width="120px" height="90px" id="image5" class = "article image"/></td></span></tr>

</list>
</table>

<p id="Covid Awareness"><b>REMEMBER: <br/>ALWAYS WEAR YOUR MASK</b></p>

</figure>

<footer class="footer">
	<?php include "footer.php"; ?> | <a href="API.php">API</a>
</footer>
</body>
</html>
